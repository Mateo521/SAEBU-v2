<?php

/**
 * SAEBU Theme Functions
 */

// Cargar archivos necesarios
require_once get_template_directory() . '/inc/custom-post-types.php';
require_once get_template_directory() . '/inc/taxonomies.php';

// Soporte del theme
function saebu_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('custom-logo');

    // Tamaños de imagen personalizados
    add_image_size('banner-grande', 1920, 600, true);
    add_image_size('noticia-destacada', 800, 450, true);
    add_image_size('noticia-thumbnail', 400, 250, true);
}
add_action('after_setup_theme', 'saebu_theme_support');

// Registrar menús
function saebu_register_menus()
{
    register_nav_menus(array(
        'primary' => __('Menú Principal', 'saebu'),
        'footer' => __('Menú Footer', 'saebu'),
    ));
}
add_action('init', 'saebu_register_menus');

// Encolar estilos y scripts
function saebu_enqueue_assets()
{
    // Estilos
    wp_enqueue_style('saebu-main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0');

    // Scripts
    wp_enqueue_script('saebu-main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'saebu_enqueue_assets');

// Función auxiliar para obtener noticias por departamento
function saebu_get_noticias_by_departamento($slug, $posts_per_page = -1)
{
    $args = array(
        'post_type' => 'noticia',
        'posts_per_page' => $posts_per_page,
        'tax_query' => array(
            array(
                'taxonomy' => 'departamento',
                'field' => 'slug',
                'terms' => $slug,
            ),
        ),
        'orderby' => 'date',
        'order' => 'DESC',
    );

    return new WP_Query($args);
}

// Función para obtener noticias generales (sin taxonomía)
function saebu_get_noticias_generales($posts_per_page = -1)
{
    $args = array(
        'post_type' => 'noticia',
        'posts_per_page' => $posts_per_page,
        'tax_query' => array(
            array(
                'taxonomy' => 'departamento',
                'operator' => 'NOT EXISTS',
            ),
        ),
        'orderby' => 'date',
        'order' => 'DESC',
    );

    return new WP_Query($args);
}



// Agregar al final de functions.php

/**
 * Custom Rewrite Rules para las URLs de noticias por departamento
 */
function saebu_custom_rewrite_rules() {
    // Reglas para departamentos con noticias
    $departamentos = array('becas', 'camping', 'ceseu', 'trabajo-social', 'club-universitario', 'dpto-deportes');
    
    foreach ($departamentos as $depto) {
        // URL: /departamento/noticias
        add_rewrite_rule(
            '^' . $depto . '/noticias/?$',
            'index.php?departamento=' . $depto,
            'top'
        );
        
        // URL: /departamento/noticia/id-slug
        add_rewrite_rule(
            '^' . $depto . '/noticia/([^/]+)/?$',
            'index.php?noticia=$matches[1]&departamento_context=' . $depto,
            'top'
        );
    }
    
    // Noticias generales
    add_rewrite_rule(
        '^noticias/?$',
        'index.php?post_type=noticia',
        'top'
    );
}
add_action('init', 'saebu_custom_rewrite_rules');

/**
 * Modificar query vars
 */
function saebu_custom_query_vars($vars) {
    $vars[] = 'departamento_context';
    return $vars;
}
add_filter('query_vars', 'saebu_custom_query_vars');

/**
 * Modificar template redirect para manejar contextos de departamento
 */
function saebu_template_redirect() {
    $departamento_context = get_query_var('departamento_context');
    
    if ($departamento_context && is_singular('noticia')) {
        // Aquí puedes agregar lógica adicional si lo necesitas
        // Por ejemplo, verificar que la noticia pertenezca al departamento
    }
}
add_action('template_redirect', 'saebu_template_redirect');

/**
 * Widget para mostrar noticias recientes por departamento
 */
class SAEBU_Recent_News_Widget extends WP_Widget {
    
    public function __construct() {
        parent::__construct(
            'saebu_recent_news',
            'SAEBU - Noticias Recientes',
            array('description' => 'Muestra las noticias más recientes')
        );
    }
    
    public function widget($args, $instance) {
        echo $args['before_widget'];
        
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }
        
        $departamento = !empty($instance['departamento']) ? $instance['departamento'] : '';
        $num_posts = !empty($instance['num_posts']) ? absint($instance['num_posts']) : 5;
        
        $query_args = array(
            'post_type' => 'noticia',
            'posts_per_page' => $num_posts,
            'orderby' => 'date',
            'order' => 'DESC',
        );
        
        if ($departamento) {
            $query_args['tax_query'] = array(
                array(
                    'taxonomy' => 'departamento',
                    'field' => 'slug',
                    'terms' => $departamento,
                ),
            );
        }
        
        $recent_news = new WP_Query($query_args);
        
        if ($recent_news->have_posts()) :
            echo '<ul class="recent-news-widget">';
            while ($recent_news->have_posts()) : $recent_news->the_post();
        ?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                    <span class="widget-news-date"><?php echo get_the_date(); ?></span>
                </li>
        <?php
            endwhile;
            echo '</ul>';
            wp_reset_postdata();
        endif;
        
        echo $args['after_widget'];
    }
    
    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : 'Noticias Recientes';
        $departamento = !empty($instance['departamento']) ? $instance['departamento'] : '';
        $num_posts = !empty($instance['num_posts']) ? absint($instance['num_posts']) : 5;
        
        $departamentos = get_terms(array(
            'taxonomy' => 'departamento',
            'hide_empty' => false,
        ));
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">Título:</label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" 
                   name="<?php echo esc_attr($this->get_field_name('title')); ?>" 
                   type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('departamento')); ?>">Departamento:</label>
            <select class="widefat" id="<?php echo esc_attr($this->get_field_id('departamento')); ?>"
                    name="<?php echo esc_attr($this->get_field_name('departamento')); ?>">
                <option value="">Todos</option>
                <?php foreach ($departamentos as $depto) : ?>
                    <option value="<?php echo esc_attr($depto->slug); ?>" 
                            <?php selected($departamento, $depto->slug); ?>>
                        <?php echo esc_html($depto->name); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </p>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('num_posts')); ?>">Número de noticias:</label>
            <input class="tiny-text" id="<?php echo esc_attr($this->get_field_id('num_posts')); ?>" 
                   name="<?php echo esc_attr($this->get_field_name('num_posts')); ?>" 
                   type="number" step="1" min="1" value="<?php echo esc_attr($num_posts); ?>" size="3">
        </p>
        <?php
    }
    
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';
        $instance['departamento'] = (!empty($new_instance['departamento'])) ? sanitize_text_field($new_instance['departamento']) : '';
        $instance['num_posts'] = (!empty($new_instance['num_posts'])) ? absint($new_instance['num_posts']) : 5;
        return $instance;
    }
}

function saebu_register_widgets() {
    register_widget('SAEBU_Recent_News_Widget');
}
add_action('widgets_init', 'saebu_register_widgets');

/**
 * Registrar áreas de widgets
 */
function saebu_widgets_init() {
    register_sidebar(array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar-1',
        'description'   => 'Widgets para la barra lateral',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => 'Footer',
        'id'            => 'footer-1',
        'description'   => 'Widgets para el pie de página',
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'saebu_widgets_init');
/**
 * Personalizar el excerpt
 */
function saebu_custom_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'saebu_custom_excerpt_length');

function saebu_custom_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'saebu_custom_excerpt_more');

/**
 * Breadcrumbs
 */
function saebu_breadcrumbs() {
    if (is_front_page()) {
        return;
    }
    
    $separator = '<span class="breadcrumb-separator"> / </span>';
    $home_title = 'Inicio';
    
    echo '<nav class="breadcrumbs">';
    echo '<a href="' . home_url('/') . '">' . $home_title . '</a>' . $separator;
    
    if (is_category() || is_single()) {
        the_category(' ' . $separator . ' ');
        
        if (is_single()) {
            echo $separator;
            the_title();
        }
    } elseif (is_page()) {
        if ($post->post_parent) {
            $parent_id = $post->post_parent;
            $breadcrumbs = array();
            
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id = $page->post_parent;
            }
            
            $breadcrumbs = array_reverse($breadcrumbs);
            
            foreach ($breadcrumbs as $crumb) {
                echo $crumb . $separator;
            }
        }
        
        the_title();
    } elseif (is_search()) {
        echo 'Resultados de búsqueda para: ' . get_search_query();
    } elseif (is_404()) {
        echo 'Error 404';
    } elseif (is_tax('departamento')) {
        $term = get_queried_object();
        echo single_term_title('', false);
    } elseif (is_post_type_archive('noticia')) {
        echo 'Noticias';
    } elseif (is_singular('noticia')) {
        echo '<a href="' . get_post_type_archive_link('noticia') . '">Noticias</a>';
        
        $terms = get_the_terms(get_the_ID(), 'departamento');
        if ($terms && !is_wp_error($terms)) {
            echo $separator;
            $term = array_shift($terms);
            echo '<a href="' . get_term_link($term) . '">' . $term->name . '</a>';
        }
        
        echo $separator;
        the_title();
    }
    
    echo '</nav>';
}

/**
 * Agregar clase al body según el departamento
 */
function saebu_body_classes($classes) {
    if (is_singular('noticia')) {
        $terms = get_the_terms(get_the_ID(), 'departamento');
        if ($terms && !is_wp_error($terms)) {
            foreach ($terms as $term) {
                $classes[] = 'departamento-' . $term->slug;
            }
        }
    }
    
    if (is_tax('departamento')) {
        $term = get_queried_object();
        $classes[] = 'departamento-' . $term->slug;
    }
    
    return $classes;
}
add_filter('body_class', 'saebu_body_classes');

/**
 * Agregar metaboxes personalizados
 */
function saebu_add_custom_metaboxes() {
    add_meta_box(
        'noticia_destacada',
        'Noticia Destacada',
        'saebu_noticia_destacada_callback',
        'noticia',
        'side',
        'high'
    );
}
add_action('add_meta_boxes', 'saebu_add_custom_metaboxes');

function saebu_noticia_destacada_callback($post) {
    wp_nonce_field('saebu_noticia_destacada_nonce', 'noticia_destacada_nonce');
    $destacada = get_post_meta($post->ID, '_noticia_destacada', true);
    ?>
    <label>
        <input type="checkbox" name="noticia_destacada" value="1" <?php checked($destacada, '1'); ?>>
        Marcar como noticia destacada
    </label>
    <?php
}

function saebu_save_noticia_destacada($post_id) {
    if (!isset($_POST['noticia_destacada_nonce'])) {
        return;
    }
    
    if (!wp_verify_nonce($_POST['noticia_destacada_nonce'], 'saebu_noticia_destacada_nonce')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    $destacada = isset($_POST['noticia_destacada']) ? '1' : '0';
    update_post_meta($post_id, '_noticia_destacada', $destacada);
}
add_action('save_post', 'saebu_save_noticia_destacada');

/**
 * Función para obtener noticias destacadas
 */
function saebu_get_noticias_destacadas($num_posts = 3) {
    $args = array(
        'post_type' => 'noticia',
        'posts_per_page' => $num_posts,
        'meta_key' => '_noticia_destacada',
        'meta_value' => '1',
        'orderby' => 'date',
        'order' => 'DESC',
    );
    
    return new WP_Query($args);
}

/**
 * Agregar soporte para ACF si está instalado
 */
function saebu_acf_support() {
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title' => 'Configuración SAEBU',
            'menu_title' => 'Configuración Theme',
            'menu_slug' => 'saebu-settings',
            'capability' => 'edit_posts',
            'redirect' => false,
        ));
    }
}
add_action('acf/init', 'saebu_acf_support');

/**
 * Agregar campos personalizados para información de contacto
 */
function saebu_contact_metaboxes() {
    add_meta_box(
        'contact_info',
        'Información de Contacto',
        'saebu_contact_info_callback',
        'page',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'saebu_contact_metaboxes');

function saebu_contact_info_callback($post) {
    wp_nonce_field('saebu_contact_info_nonce', 'contact_info_nonce');
    
    $telefono = get_post_meta($post->ID, '_contact_telefono', true);
    $email = get_post_meta($post->ID, '_contact_email', true);
    $direccion = get_post_meta($post->ID, '_contact_direccion', true);
    $horario = get_post_meta($post->ID, '_contact_horario', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label for="contact_telefono">Teléfono:</label></th>
            <td>
                <input type="text" id="contact_telefono" name="contact_telefono" 
                       value="<?php echo esc_attr($telefono); ?>" class="regular-text">
            </td>
        </tr>
        <tr>
            <th><label for="contact_email">Email:</label></th>
            <td>
                <input type="email" id="contact_email" name="contact_email" 
                       value="<?php echo esc_attr($email); ?>" class="regular-text">
            </td>
        </tr>
        <tr>
            <th><label for="contact_direccion">Dirección:</label></th>
            <td>
                <input type="text" id="contact_direccion" name="contact_direccion" 
                       value="<?php echo esc_attr($direccion); ?>" class="regular-text">
            </td>
        </tr>
        <tr>
            <th><label for="contact_horario">Horario de Atención:</label></th>
            <td>
                <textarea id="contact_horario" name="contact_horario" rows="3" 
                          class="large-text"><?php echo esc_textarea($horario); ?></textarea>
            </td>
        </tr>
    </table>
    <?php
}

function saebu_save_contact_info($post_id) {
    if (!isset($_POST['contact_info_nonce'])) {
        return;
    }
    
    if (!wp_verify_nonce($_POST['contact_info_nonce'], 'saebu_contact_info_nonce')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['contact_telefono'])) {
        update_post_meta($post_id, '_contact_telefono', sanitize_text_field($_POST['contact_telefono']));
    }
    
    if (isset($_POST['contact_email'])) {
        update_post_meta($post_id, '_contact_email', sanitize_email($_POST['contact_email']));
    }
    
    if (isset($_POST['contact_direccion'])) {
        update_post_meta($post_id, '_contact_direccion', sanitize_text_field($_POST['contact_direccion']));
    }
    
    if (isset($_POST['contact_horario'])) {
        update_post_meta($post_id, '_contact_horario', sanitize_textarea_field($_POST['contact_horario']));
    }
}
add_action('save_post', 'saebu_save_contact_info');

/**
 * Shortcode para mostrar información de contacto
 */
function saebu_contact_info_shortcode($atts) {
    $atts = shortcode_atts(array(
        'page_id' => get_the_ID(),
    ), $atts);
    
    $telefono = get_post_meta($atts['page_id'], '_contact_telefono', true);
    $email = get_post_meta($atts['page_id'], '_contact_email', true);
    $direccion = get_post_meta($atts['page_id'], '_contact_direccion', true);
    $horario = get_post_meta($atts['page_id'], '_contact_horario', true);
    
    ob_start();
    ?>
    <div class="contact-info-box">
        <?php if ($telefono) : ?>
            <div class="contact-item">
                <strong>Teléfono:</strong> 
                <a href="tel:<?php echo esc_attr($telefono); ?>"><?php echo esc_html($telefono); ?></a>
            </div>
        <?php endif; ?>
        
        <?php if ($email) : ?>
            <div class="contact-item">
                <strong>Email:</strong> 
                <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a>
            </div>
        <?php endif; ?>
        
        <?php if ($direccion) : ?>
            <div class="contact-item">
                <strong>Dirección:</strong> <?php echo esc_html($direccion); ?>
            </div>
        <?php endif; ?>
        
        <?php if ($horario) : ?>
            <div class="contact-item">
                <strong>Horario de Atención:</strong><br>
                <?php echo nl2br(esc_html($horario)); ?>
            </div>
        <?php endif; ?>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('contact_info', 'saebu_contact_info_shortcode');
