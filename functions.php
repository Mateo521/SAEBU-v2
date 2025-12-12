<?php

/**
 * SAEBU Theme Functions
 * Theme con Tailwind CSS 4
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
        'menu-principal' => __('Menú Principal', 'saebu'),
        'menu-footer' => __('Menú Footer', 'saebu'),
    ));
}
add_action('init', 'saebu_register_menus');


function mi_script_header()
{
    wp_enqueue_script(
        'mi-script',
        get_template_directory_uri() . '/assets/js/a11y-toolbar-master/js/a11y-custom.js',
        array(),
        null,
        true
    );

    wp_localize_script('mi-script', 'miThemeData', array(
        'imgAccesibilidad' => get_template_directory_uri() . '/assets/images/accesibilidad-blanco.png'
    ));
}
add_action('wp_enqueue_scripts', 'mi_script_header');


/**
 * Enqueue styles and scripts
 */
function saebu_enqueue_assets()
{
    // Tailwind CSS compilado (output.css)
    wp_enqueue_style(
        'saebu-tailwind',
        get_template_directory_uri() . '/assets/css/output.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/output.css')
    );

    // CSS personalizado adicional (si lo necesitas)
    if (file_exists(get_template_directory() . '/assets/css/custom.css')) {
        wp_enqueue_style(
            'saebu-custom-style',
            get_template_directory_uri() . '/assets/css/custom.css',
            array('saebu-tailwind'),
            filemtime(get_template_directory() . '/assets/css/custom.css')
        );
    }

    // JavaScript principal
    if (file_exists(get_template_directory() . '/assets/js/main.js')) {
        wp_enqueue_script(
            'saebu-main-script',
            get_template_directory_uri() . '/assets/js/main.js',
            array('jquery'),
            filemtime(get_template_directory() . '/assets/js/main.js'),
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'saebu_enqueue_assets');


/**
 * Enqueue Swiper.js
 */
function saebu_enqueue_swiper()
{
    // Swiper CSS
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        array(),
        '11.0.0'
    );

    // Swiper JS
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        array(),
        '11.0.0',
        true
    );

    // Script personalizado para inicializar Swiper
    if (file_exists(get_template_directory() . '/assets/js/swiper-init.js')) {
        wp_enqueue_script(
            'saebu-swiper-init',
            get_template_directory_uri() . '/assets/js/swiper-init.js',
            array('swiper-js'),
            filemtime(get_template_directory() . '/assets/js/swiper-init.js'),
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'saebu_enqueue_swiper');

/**
 * Remover la configuración de Tailwind del CDN (ya no la necesitamos)
 * Comentar o eliminar esta función:
 */
// function saebu_tailwind_config() { ... }
// add_action('wp_head', 'saebu_tailwind_config', 100);


function saebu_enqueue_all_fonts()
{
    wp_enqueue_style(
        'saebu-all-fonts',
        'https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap',
        [],
        null
    );
}
add_action('wp_enqueue_scripts', 'saebu_enqueue_all_fonts');


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

// Función para obtener noticias generales
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

// Función para obtener noticias destacadas
function saebu_get_noticias_destacadas($num_posts = 3)
{
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
 * Custom Rewrite Rules para las URLs de noticias por departamento
 */
function saebu_custom_rewrite_rules()
{
    $departamentos = array('becas', 'camping', 'ceseu', 'dpto-trabajo-social', 'club-universitario', 'dpto-deportes');

    foreach ($departamentos as $depto) {
        // URL: /departamento/noticias
        add_rewrite_rule(
            '^' . $depto . '/noticias/?$',
            'index.php?departamento=' . $depto,
            'top'
        );

        // URL: /departamento/noticia/slug
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
function saebu_custom_query_vars($vars)
{
    $vars[] = 'departamento_context';
    return $vars;
}
add_filter('query_vars', 'saebu_custom_query_vars');

/**
 * Registrar áreas de widgets
 */
function saebu_widgets_init()
{
    register_sidebar(array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar-1',
        'description'   => 'Widgets para la barra lateral',
        'before_widget' => '<div id="%1$s" class="widget %2$s mb-8">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title text-xl font-bold mb-4">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => 'Footer',
        'id'            => 'footer-1',
        'description'   => 'Widgets para el pie de página',
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title text-lg font-semibold mb-4">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'saebu_widgets_init');

/**
 * Widget para mostrar noticias recientes por departamento
 */
class SAEBU_Recent_News_Widget extends WP_Widget
{

    public function __construct()
    {
        parent::__construct(
            'saebu_recent_news',
            'SAEBU - Noticias Recientes',
            array('description' => 'Muestra las noticias más recientes')
        );
    }

    public function widget($args, $instance)
    {
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
            echo '<ul class="space-y-3">';
            while ($recent_news->have_posts()) : $recent_news->the_post();
?>
                <li class="border-b border-gray-200 pb-3">
                    <a href="<?php the_permalink(); ?>" class="text-[#416ed2] hover:text-blue-800 font-medium">
                        <?php the_title(); ?>
                    </a>
                    <span class="block text-sm text-gray-500 mt-1"><?php echo get_the_date(); ?></span>
                </li>
        <?php
            endwhile;
            echo '</ul>';
            wp_reset_postdata();
        endif;

        echo $args['after_widget'];
    }

    public function form($instance)
    {
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

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';
        $instance['departamento'] = (!empty($new_instance['departamento'])) ? sanitize_text_field($new_instance['departamento']) : '';
        $instance['num_posts'] = (!empty($new_instance['num_posts'])) ? absint($new_instance['num_posts']) : 5;
        return $instance;
    }
}

function saebu_register_widgets()
{
    register_widget('SAEBU_Recent_News_Widget');
}
add_action('widgets_init', 'saebu_register_widgets');

/**
 * Personalizar el excerpt
 */
function saebu_custom_excerpt_length($length)
{
    return 30;
}
add_filter('excerpt_length', 'saebu_custom_excerpt_length');

function saebu_custom_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'saebu_custom_excerpt_more');

/**
 * Breadcrumbs mejorado con Tailwind
 */
function saebu_breadcrumbs()
{
    if (is_front_page()) {
        return;
    }

    $separator = '<svg class="w-4 h-4 text-gray-400 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>';
    $home_title = 'Inicio';

    echo '<nav class="bg-white border-b border-gray-200 py-4" aria-label="Breadcrumb">';
    echo '<div class="container mx-auto px-4">';
    echo '<ol class="flex items-center flex-wrap text-sm">';

    // Inicio
    echo '<li class="flex items-center">';
    echo '<a href="' . home_url('/') . '" class="flex items-center gap-1 text-gray-600 hover:text-[#416ed2] font-medium">';
    echo '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>';
    echo $home_title;
    echo '</a>';
    echo $separator;
    echo '</li>';

    if (is_singular('noticia')) {
        // Enlace a archivo de noticias
        echo '<li class="flex items-center">';
        echo '<a href="' . get_post_type_archive_link('noticia') . '" class="text-gray-600 hover:text-[#416ed2] font-medium">Noticias</a>';
        echo $separator;
        echo '</li>';

        // Departamento si existe
        $terms = get_the_terms(get_the_ID(), 'departamento');
        if ($terms && !is_wp_error($terms)) {
            $term = array_shift($terms);
            echo '<li class="flex items-center">';
            echo '<a href="' . get_term_link($term) . '" class="text-gray-600 hover:text-[#416ed2] font-medium">' . esc_html($term->name) . '</a>';
            echo $separator;
            echo '</li>';
        }

        // Título actual
        echo '<li class="flex items-center">';
        echo '<span class="text-gray-900 font-semibold line-clamp-1">' . get_the_title() . '</span>';
        echo '</li>';
    } elseif (is_post_type_archive('noticia')) {
        echo '<li class="flex items-center">';
        echo '<span class="text-gray-900 font-semibold">Noticias</span>';
        echo '</li>';
    } elseif (is_tax('departamento')) {
        $term = get_queried_object();
        echo '<li class="flex items-center">';
        echo '<a href="' . get_post_type_archive_link('noticia') . '" class="text-gray-600 hover:text-[#416ed2] font-medium">Noticias</a>';
        echo $separator;
        echo '</li>';
        echo '<li class="flex items-center">';
        echo '<span class="text-gray-900 font-semibold">' . esc_html($term->name) . '</span>';
        echo '</li>';
    } elseif (is_page()) {
        global $post;
        if ($post->post_parent) {
            $parent_id = $post->post_parent;
            $breadcrumbs = array();

            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<li class="flex items-center"><a href="' . get_permalink($page->ID) . '" class="text-gray-600 hover:text-[#416ed2] font-medium">' . get_the_title($page->ID) . '</a>' . $separator . '</li>';
                $parent_id = $page->post_parent;
            }

            $breadcrumbs = array_reverse($breadcrumbs);
            echo implode('', $breadcrumbs);
        }

        echo '<li class="flex items-center">';
        echo '<span class="text-gray-900 font-semibold">' . get_the_title() . '</span>';
        echo '</li>';
    } elseif (is_category()) {
        echo '<li class="flex items-center">';
        echo '<span class="text-gray-900 font-semibold">' . single_cat_title('', false) . '</span>';
        echo '</li>';
    } elseif (is_search()) {
        echo '<li class="flex items-center">';
        echo '<span class="text-gray-900 font-semibold">Resultados de búsqueda: ' . get_search_query() . '</span>';
        echo '</li>';
    } elseif (is_404()) {
        echo '<li class="flex items-center">';
        echo '<span class="text-gray-900 font-semibold">Error 404</span>';
        echo '</li>';
    }

    echo '</ol>';
    echo '</div>';
    echo '</nav>';
}


/**
 * Agregar clase al body según el departamento
 */
function saebu_body_classes($classes)
{
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
 * Metabox para noticias destacadas
 */
function saebu_add_custom_metaboxes()
{
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

function saebu_noticia_destacada_callback($post)
{
    wp_nonce_field('saebu_noticia_destacada_nonce', 'noticia_destacada_nonce');
    $destacada = get_post_meta($post->ID, '_noticia_destacada', true);
    ?>
    <label class="flex items-center gap-2">
        <input type="checkbox" name="noticia_destacada" value="1" <?php checked($destacada, '1'); ?> class="rounded">
        Marcar como noticia destacada
    </label>
<?php
}

function saebu_save_noticia_destacada($post_id)
{
    if (!isset($_POST['noticia_destacada_nonce'])) return;
    if (!wp_verify_nonce($_POST['noticia_destacada_nonce'], 'saebu_noticia_destacada_nonce')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    $destacada = isset($_POST['noticia_destacada']) ? '1' : '0';
    update_post_meta($post_id, '_noticia_destacada', $destacada);
}
add_action('save_post', 'saebu_save_noticia_destacada');

/**
 * Metabox para información de contacto en páginas
 */
function saebu_contact_metaboxes()
{
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

function saebu_contact_info_callback($post)
{
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

function saebu_save_contact_info($post_id)
{
    if (!isset($_POST['contact_info_nonce'])) return;
    if (!wp_verify_nonce($_POST['contact_info_nonce'], 'saebu_contact_info_nonce')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

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
function saebu_contact_info_shortcode($atts)
{
    $atts = shortcode_atts(array(
        'page_id' => get_the_ID(),
    ), $atts);

    $telefono = get_post_meta($atts['page_id'], '_contact_telefono', true);
    $email = get_post_meta($atts['page_id'], '_contact_email', true);
    $direccion = get_post_meta($atts['page_id'], '_contact_direccion', true);
    $horario = get_post_meta($atts['page_id'], '_contact_horario', true);

    ob_start();
?>
    <div class="bg-white rounded-lg shadow-lg p-6 space-y-4">
        <?php if ($telefono) : ?>
            <div class="border-b border-gray-200 pb-4">
                <strong class="block text-[#416ed2] mb-2">Teléfono:</strong>
                <a href="tel:<?php echo esc_attr($telefono); ?>" class="text-gray-800 hover:text-[#416ed2]">
                    <?php echo esc_html($telefono); ?>
                </a>
            </div>
        <?php endif; ?>

        <?php if ($email) : ?>
            <div class="border-b border-gray-200 pb-4">
                <strong class="block text-[#416ed2] mb-2">Email:</strong>
                <a href="mailto:<?php echo esc_attr($email); ?>" class="text-gray-800 hover:text-[#416ed2]">
                    <?php echo esc_html($email); ?>
                </a>
            </div>
        <?php endif; ?>

        <?php if ($direccion) : ?>
            <div class="border-b border-gray-200 pb-4">
                <strong class="block text-[#416ed2] mb-2">Dirección:</strong>
                <span class="text-gray-800"><?php echo esc_html($direccion); ?></span>
            </div>
        <?php endif; ?>

        <?php if ($horario) : ?>
            <div>
                <strong class="block text-[#416ed2] mb-2">Horario de Atención:</strong>
                <div class="text-gray-800 leading-relaxed">
                    <?php echo nl2br(esc_html($horario)); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('contact_info', 'saebu_contact_info_shortcode');

/**
 * SEO - Meta description
 */
function saebu_add_meta_description()
{
    if (is_singular('noticia')) {
        global $post;
        $description = get_the_excerpt();
        if ($description) {
            echo '<meta name="description" content="' . esc_attr(wp_trim_words($description, 30)) . '">' . "\n";
        }
    }
}
add_action('wp_head', 'saebu_add_meta_description');

/**
 * SEO - Open Graph tags
 */
function saebu_add_og_tags()
{
    if (is_singular('noticia')) {
        global $post;
    ?>
        <meta property="og:type" content="article">
        <meta property="og:title" content="<?php echo esc_attr(get_the_title()); ?>">
        <meta property="og:description" content="<?php echo esc_attr(wp_trim_words(get_the_excerpt(), 30)); ?>">
        <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>">
        <?php if (has_post_thumbnail()) : ?>
            <meta property="og:image" content="<?php echo esc_url(get_the_post_thumbnail_url(null, 'large')); ?>">
        <?php endif; ?>
        <meta property="og:site_name" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
    <?php
    }
}
add_action('wp_head', 'saebu_add_og_tags');












/* ==========================================================================
   1. CONFIGURACIÓN DEL MENÚ DEL DÍA (Con opción Sin TACC)
   ========================================================================== */

/**
 * Registro del CPT: Menú del Día
 */
function saebu_register_menu_dia_cpt()
{
    $labels = array(
        'name'                  => 'Menú del Día',
        'singular_name'         => 'Menú',
        'menu_name'             => 'Menú del Día',
        'add_new'               => 'Agregar Menú',
        'add_new_item'          => 'Agregar Nuevo Menú',
        'edit_item'             => 'Editar Menú',
        'new_item'              => 'Nuevo Menú',
        'view_item'             => 'Ver Menú',
        'search_items'          => 'Buscar Menús',
        'not_found'             => 'No se encontraron menús',
        'not_found_in_trash'    => 'No hay menús en la papelera',
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'has_archive'           => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-food',
        'supports'              => array('title', 'editor', 'thumbnail'),
        'show_in_rest'          => true,
        'rewrite'               => array('slug' => 'menu-dia'),
    );

    register_post_type('menu_dia', $args);
}
add_action('init', 'saebu_register_menu_dia_cpt');

/**
 * Metaboxes para Menú del Día
 */
function saebu_menu_dia_metaboxes()
{
    add_meta_box('menu_dia_detalles', 'Detalles del Menú', 'saebu_menu_dia_metabox_callback', 'menu_dia', 'normal', 'high');
}
add_action('add_meta_boxes', 'saebu_menu_dia_metaboxes');

/**
 * Callback del metabox (Formulario con campos Sin TACC)
 */
function saebu_menu_dia_metabox_callback($post)
{
    wp_nonce_field('saebu_menu_dia_nonce', 'menu_dia_nonce');

    // 1. Obtener datos Menú Común
    $fecha     = get_post_meta($post->ID, '_menu_fecha', true);
    $entrada   = get_post_meta($post->ID, '_menu_entrada', true);
    $principal = get_post_meta($post->ID, '_menu_principal', true);
    $postre    = get_post_meta($post->ID, '_menu_postre', true);
    $precio    = get_post_meta($post->ID, '_menu_precio', true);

    // 2. Obtener datos Menú Sin TACC
    $entrada_st   = get_post_meta($post->ID, '_menu_entrada_sintacc', true);
    $principal_st = get_post_meta($post->ID, '_menu_principal_sintacc', true);
    $postre_st    = get_post_meta($post->ID, '_menu_postre_sintacc', true);

    $notificar = get_post_meta($post->ID, '_menu_notificar', true);
    ?>
    <div style="padding: 10px;">
        <div style="display:flex; gap: 20px; flex-wrap:wrap; background:#f9f9f9; padding:10px; border:1px solid #ddd; margin-bottom:15px;">
            <div style="flex:1;">
                <label><strong> Fecha del Menú:</strong></label><br>
                <input type="date" name="menu_fecha" value="<?php echo esc_attr($fecha); ?>" style="width:100%;" />
            </div>
            <div style="flex:1;">
                <label><strong> Precio del Ticket:</strong></label><br>
                <input type="text" name="menu_precio" value="<?php echo esc_attr($precio); ?>" placeholder="$3500" style="width:100%;" />
            </div>
        </div>

        <div style="display:flex; gap: 20px; flex-wrap:wrap;">
            <div style="flex:1; min-width:250px;">
                <h3 style="margin:0 0 10px 0; border-bottom:2px solid #005eb8; padding-bottom:5px; color:#005eb8;"> Menú General</h3>
                <p><label><strong>Entrada:</strong></label><br><input type="text" name="menu_entrada" value="<?php echo esc_attr($entrada); ?>" style="width:100%;" /></p>
                <p><label><strong>Plato Principal:</strong></label><br><input type="text" name="menu_principal" value="<?php echo esc_attr($principal); ?>" style="width:100%;" /></p>
                <p><label><strong>Postre:</strong></label><br><input type="text" name="menu_postre" value="<?php echo esc_attr($postre); ?>" style="width:100%;" /></p>
            </div>

            <div style="flex:1; min-width:250px;">
                <h3 style="margin:0 0 10px 0; border-bottom:2px solid #70b62c; padding-bottom:5px; color:#70b62c;"> Menú Sin TACC</h3>
                <p><label><strong>Entrada Sin TACC:</strong></label><br><input type="text" name="menu_entrada_sintacc" value="<?php echo esc_attr($entrada_st); ?>" style="width:100%;" placeholder="Opcional" /></p>
                <p><label><strong>Principal Sin TACC:</strong></label><br><input type="text" name="menu_principal_sintacc" value="<?php echo esc_attr($principal_st); ?>" style="width:100%;" placeholder="Opcional" /></p>
                <p><label><strong>Postre Sin TACC:</strong></label><br><input type="text" name="menu_postre_sintacc" value="<?php echo esc_attr($postre_st); ?>" style="width:100%;" placeholder="Opcional" /></p>
            </div>
        </div>

        <p style="background:#f0f7ff;padding:15px;border-left:4px solid #0073aa;margin-top:20px;">
            <label><input type="checkbox" name="menu_notificar" value="1" <?php checked($notificar, '1'); ?> /> <strong>Enviar notificación push (Categoría: Menú)</strong></label>
        </p>
    </div>
<?php
}


function saebu_save_menu_dia_meta($post_id)
{
    // 🔍 DEBUG 1: Ver si la función se ejecuta
    error_log("=== GUARDANDO MENU ID: $post_id ===");

    if (!isset($_POST['menu_dia_nonce']) || !wp_verify_nonce($_POST['menu_dia_nonce'], 'saebu_menu_dia_nonce')) {
        error_log(" NONCE FALLÓ");
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        error_log(" AUTOSAVE");
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        error_log(" SIN PERMISOS");
        return;
    }

    // 🔍 DEBUG 2: Ver qué llega en $_POST
    error_log("POST menu_entrada_sintacc: " . (isset($_POST['menu_entrada_sintacc']) ? $_POST['menu_entrada_sintacc'] : 'NO EXISTE'));
    error_log("POST menu_principal_sintacc: " . (isset($_POST['menu_principal_sintacc']) ? $_POST['menu_principal_sintacc'] : 'NO EXISTE'));
    error_log("POST menu_postre_sintacc: " . (isset($_POST['menu_postre_sintacc']) ? $_POST['menu_postre_sintacc'] : 'NO EXISTE'));

    // Campos Comunes
    if (isset($_POST['menu_fecha'])) {
        update_post_meta($post_id, '_menu_fecha', sanitize_text_field($_POST['menu_fecha']));
    }
    if (isset($_POST['menu_entrada'])) {
        update_post_meta($post_id, '_menu_entrada', sanitize_text_field($_POST['menu_entrada']));
    }
    if (isset($_POST['menu_principal'])) {
        update_post_meta($post_id, '_menu_principal', sanitize_text_field($_POST['menu_principal']));
    }
    if (isset($_POST['menu_postre'])) {
        update_post_meta($post_id, '_menu_postre', sanitize_text_field($_POST['menu_postre']));
    }
    if (isset($_POST['menu_precio'])) {
        update_post_meta($post_id, '_menu_precio', sanitize_text_field($_POST['menu_precio']));
    }

    // Campos Sin TACC
    if (isset($_POST['menu_entrada_sintacc'])) {
        $valor = sanitize_text_field($_POST['menu_entrada_sintacc']);
        error_log(" Guardando entrada_st: '$valor'");
        if (!empty($valor)) {
            update_post_meta($post_id, '_menu_entrada_sintacc', $valor);
        } else {
            delete_post_meta($post_id, '_menu_entrada_sintacc');
        }
    }

    if (isset($_POST['menu_principal_sintacc'])) {
        $valor = sanitize_text_field($_POST['menu_principal_sintacc']);
        error_log(" Guardando principal_st: '$valor'");
        if (!empty($valor)) {
            update_post_meta($post_id, '_menu_principal_sintacc', $valor);
        } else {
            delete_post_meta($post_id, '_menu_principal_sintacc');
        }
    }

    if (isset($_POST['menu_postre_sintacc'])) {
        $valor = sanitize_text_field($_POST['menu_postre_sintacc']);
        error_log(" Guardando postre_st: '$valor'");
        if (!empty($valor)) {
            update_post_meta($post_id, '_menu_postre_sintacc', $valor);
        } else {
            delete_post_meta($post_id, '_menu_postre_sintacc');
        }
    }

    $notificar = isset($_POST['menu_notificar']) ? '1' : '0';
    update_post_meta($post_id, '_menu_notificar', $notificar);

    if ($notificar === '1' && get_post_status($post_id) === 'publish') {
        saebu_enviar_notificacion_menu($post_id);
        update_post_meta($post_id, '_menu_notificar', '0');
    }

    error_log("=== FIN GUARDADO ===");
}

//  BORRA ESTO:
// add_action('save_post_menu_dia', 'saebu_save_menu_dia_meta');

//  USA ESTO EN SU LUGAR:
add_action('save_post', 'saebu_save_menu_dia_meta_wrapper', 10, 2);

function saebu_save_menu_dia_meta_wrapper($post_id, $post)
{
    // Solo ejecutar para menu_dia
    if ($post->post_type !== 'menu_dia') {
        return;
    }

    error_log(" Wrapper ejecutado para menu_dia ID: $post_id");
    saebu_save_menu_dia_meta($post_id);
}



function saebu_enviar_notificacion_menu($post_id)
{

    // 1. Obtener TODOS los datos
    $fecha        = get_post_meta($post_id, '_menu_fecha', true);
    $entrada      = get_post_meta($post_id, '_menu_entrada', true);
    $principal    = get_post_meta($post_id, '_menu_principal', true);
    $postre       = get_post_meta($post_id, '_menu_postre', true);
    $precio       = get_post_meta($post_id, '_menu_precio', true);

    $entrada_st   = get_post_meta($post_id, '_menu_entrada_sintacc', true);
    $principal_st = get_post_meta($post_id, '_menu_principal_sintacc', true);
    $postre_st    = get_post_meta($post_id, '_menu_postre_sintacc', true);


    $fecha_formateada = date_i18n('d/m', strtotime($fecha));
    $titulo = "Menú del " . $fecha_formateada;


    $lineas = array();
    if (!empty($principal)) {
        $lineas[] = "Principal: " . $principal;
        if (!empty($entrada)) $lineas[] = "Entrada: " . $entrada;
        if (!empty($postre))  $lineas[] = "Postre: " . $postre;
    }
    if (!empty($principal_st)) {
        $lineas[] = "Sin TACC: " . $principal_st;
        if (!empty($entrada_st)) $lineas[] = "Entrada : " . $entrada_st;
        if (!empty($postre_st))  $lineas[] = "Postre : " . $postre_st;
    }
    if (!empty($precio)) {
        $lineas[] = "$" . $precio;
    }

    $mensaje = implode("\n", $lineas);


    // Fallback
    if (empty($mensaje)) $mensaje = "Haz clic para ver el menú completo.";



    $app_id = '58790c7e-7e27-46bc-a016-4861b88f45d3';
    $rest_api_key = 'M2NlM2MzODItOGFkYS00NjYyLTk1MTUtMWQ1NTQyM2Q4NTBi';

    $fields = array(
        'app_id' => $app_id,
        'filters' => array(
            array('field' => 'tag', 'key' => 'menu', 'relation' => '=', 'value' => '1')
        ),
        'headings' => array("en" => $titulo, "es" => $titulo),
        'contents' => array("en" => $mensaje, "es" => $mensaje),
        'url' => get_permalink($post_id),
    );

    // Imagen
    if (has_post_thumbnail($post_id)) {
        $img_url_raw = get_the_post_thumbnail_url($post_id, 'large');
        $img_url = set_url_scheme($img_url_raw, 'https');
        $fields['big_picture'] = $img_url;
        $fields['chrome_web_image'] = $img_url;
        $fields['chrome_web_icon'] = $img_url;
        $fields['firefox_icon'] = $img_url;
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charset=utf-8',
        'Authorization: Basic ' . $rest_api_key
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);


}







/**
 * Metabox Notificación para Noticias
 */
function saebu_cpt_noticia_push_metabox()
{
    add_meta_box('noticia_push_box', 'Notificaciones App', 'saebu_cpt_noticia_callback', 'noticia', 'side', 'high');
}
add_action('add_meta_boxes', 'saebu_cpt_noticia_push_metabox');

function saebu_cpt_noticia_callback($post)
{
    wp_nonce_field('saebu_noticia_nonce', 'noticia_nonce');
    $notificar = get_post_meta($post->ID, '_noticia_enviar_push', true);
?>
    <div style="margin-top: 10px;">
        <label style="font-weight:bold;">
            <input type="checkbox" name="noticia_enviar_push" value="1" <?php checked($notificar, '1'); ?> />
            Enviar notificación Push
        </label>
        <p class="description">Se enviará a la categoría <strong>"Noticias universitarias"</strong>.</p>
    </div>
<?php
}

/**
 * Guardar Noticia
 */
function saebu_save_cpt_noticia_meta($post_id)
{
    if (!isset($_POST['noticia_nonce']) || !wp_verify_nonce($_POST['noticia_nonce'], 'saebu_noticia_nonce')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (get_post_type($post_id) !== 'noticia') return;

    $notificar = isset($_POST['noticia_enviar_push']) ? '1' : '0';
    update_post_meta($post_id, '_noticia_enviar_push', $notificar);

    if ($notificar === '1' && get_post_status($post_id) === 'publish') {
        saebu_enviar_push_noticia_cpt($post_id);
        update_post_meta($post_id, '_noticia_enviar_push', '0');
    }
}
add_action('save_post_noticia', 'saebu_save_cpt_noticia_meta');

/**
 * ENVÍO PUSH NOTICIA (Configurado para llave 'noticias')
 */
function saebu_enviar_push_noticia_cpt($post_id)
{
    $titulo_post = get_the_title($post_id);

    // Contenido
    $contenido = get_the_excerpt($post_id);
    if (empty($contenido)) {
        $contenido_raw = get_post_field('post_content', $post_id);
        $contenido = wp_trim_words(strip_shortcodes($contenido_raw), 20, '...');
    }

    $app_id = '58790c7e-7e27-46bc-a016-4861b88f45d3';
    $rest_api_key = 'M2NlM2MzODItOGFkYS00NjYyLTk1MTUtMWQ1NTQyM2Q4NTBi';

    $fields = array(
        'app_id' => $app_id,
        // Filtro Noticias
        'filters' => array(
            array('field' => 'tag', 'key' => 'noticias', 'relation' => '=', 'value' => '1')
        ),
        'headings' => array("en" => "SAEBU Informa", "es" => "SAEBU Informa"),
        'contents' => array("en" => $titulo_post, "es" => $titulo_post),
        'url' => get_permalink($post_id),
    );

    // --- CORRECCIÓN DE IMÁGENES ---
    if (has_post_thumbnail($post_id)) {
        // Obtenemos la URL y forzamos HTTPS por seguridad
        $img_url_raw = get_the_post_thumbnail_url($post_id, 'large');
        $img_url = set_url_scheme($img_url_raw, 'https');

        // 1. Chrome Web Image / Big Picture (Imagen grande debajo del texto)
        $fields['big_picture'] = $img_url;
        $fields['chrome_web_image'] = $img_url;

        // 2. Large Icon (El cuadradito a la derecha del texto)
        // Usamos la misma imagen para que destaque
        $fields['chrome_web_icon'] = $img_url;
        $fields['firefox_icon'] = $img_url;
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic ' . $rest_api_key));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_exec($ch);
    curl_close($ch);
}




function saebu_get_menu_del_dia()
{
    $hoy = date('Y-m-d');

    $args = array(
        'post_type'      => 'menu_dia',
        'posts_per_page' => 1,
        'post_status'    => 'publish',
        'orderby'        => array(
            'ID' => 'DESC',  // El menú más nuevo primero
        ),
        'meta_query'     => array(
            array(
                'key'     => '_menu_fecha',
                'value'   => $hoy,
                'compare' => '=',
                'type'    => 'DATE',
            ),
        ),
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        wp_reset_postdata();
        return $query->posts[0];
    }

    // Si no hay de hoy, buscar el más reciente
    $args = array(
        'post_type'      => 'menu_dia',
        'posts_per_page' => 1,
        'post_status'    => 'publish',
        'meta_key'       => '_menu_fecha',
        'orderby'        => array(
            'meta_value' => 'DESC',
            'ID'         => 'DESC',
        ),
        'meta_query'     => array(
            array(
                'key'     => '_menu_fecha',
                'compare' => 'EXISTS',
            ),
        ),
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        wp_reset_postdata();
        return $query->posts[0];
    }

    return null;
}






/**
 * Metabox para Galería de Imágenes (Swiper)
 */
function saebu_galeria_metabox()
{
    add_meta_box(
        'saebu_galeria',
        'Galería de Imágenes (Swiper)',
        'saebu_galeria_metabox_callback',
        'noticia',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'saebu_galeria_metabox');

/**
 * Callback del Metabox de Galería
 */
function saebu_galeria_metabox_callback($post)
{
    wp_nonce_field('saebu_galeria_nonce', 'galeria_nonce');

    $galeria_ids = get_post_meta($post->ID, '_galeria_imagenes', true);
?>

    <div class="saebu-galeria-container">
        <div id="galeria-imagenes-container" class="galeria-preview">
            <?php
            if ($galeria_ids) {
                $imagenes = explode(',', $galeria_ids);
                foreach ($imagenes as $imagen_id) {
                    $imagen_url = wp_get_attachment_image_url($imagen_id, 'medium');
                    if ($imagen_url) {
                        echo '<div class="galeria-item" data-id="' . esc_attr($imagen_id) . '">';
                        echo '<img src="' . esc_url($imagen_url) . '" />';
                        echo '<button type="button" class="remove-imagen">×</button>';
                        echo '</div>';
                    }
                }
            }
            ?>
        </div>

        <input type="hidden" id="galeria_imagenes" name="galeria_imagenes" value="<?php echo esc_attr($galeria_ids); ?>" />

        <p>
            <button type="button" class="button button-primary" id="agregar-imagenes-galeria">
                Agregar Imágenes a la Galería
            </button>
            <button type="button" class="button" id="limpiar-galeria">
                Limpiar Galería
            </button>
        </p>

        <p class="description">
            Estas imágenes se mostrarán en un slider Swiper en la parte superior de la noticia.
        </p>
    </div>

    <style>
        .galeria-preview {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 15px;
            margin-bottom: 15px;
            padding: 15px;
            background: #f5f5f5;
            border: 1px solid #ddd;
            border-radius: 4px;
            min-height: 100px;
        }

        .galeria-item {
            position: relative;
            border: 2px solid #ddd;
            border-radius: 4px;
            overflow: hidden;
            background: white;
        }

        .galeria-item img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            display: block;
        }

        .galeria-item .remove-imagen {
            position: absolute;
            top: 5px;
            right: 5px;
            background: #dc3232;
            color: white;
            border: none;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            cursor: pointer;
            font-size: 18px;
            line-height: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .galeria-item .remove-imagen:hover {
            background: #a00;
        }
    </style>

    <script>
        jQuery(document).ready(function($) {
            var frame;

            // Agregar imágenes
            $('#agregar-imagenes-galeria').on('click', function(e) {
                e.preventDefault();

                if (frame) {
                    frame.open();
                    return;
                }

                frame = wp.media({
                    title: 'Seleccionar Imágenes para la Galería',
                    button: {
                        text: 'Agregar a Galería'
                    },
                    multiple: true
                });

                frame.on('select', function() {
                    var selection = frame.state().get('selection');
                    var ids = $('#galeria_imagenes').val();
                    var idsArray = ids ? ids.split(',') : [];

                    selection.map(function(attachment) {
                        attachment = attachment.toJSON();

                        if (idsArray.indexOf(String(attachment.id)) === -1) {
                            idsArray.push(attachment.id);

                            var imgUrl = attachment.sizes && attachment.sizes.medium ?
                                attachment.sizes.medium.url :
                                attachment.url;

                            $('#galeria-imagenes-container').append(
                                '<div class="galeria-item" data-id="' + attachment.id + '">' +
                                '<img src="' + imgUrl + '" />' +
                                '<button type="button" class="remove-imagen">×</button>' +
                                '</div>'
                            );
                        }
                    });

                    $('#galeria_imagenes').val(idsArray.join(','));
                });

                frame.open();
            });

            // Remover imagen individual
            $(document).on('click', '.remove-imagen', function(e) {
                e.preventDefault();
                var item = $(this).closest('.galeria-item');
                var id = item.data('id');
                var ids = $('#galeria_imagenes').val();
                var idsArray = ids.split(',');

                idsArray = idsArray.filter(function(val) {
                    return val != id;
                });

                $('#galeria_imagenes').val(idsArray.join(','));
                item.remove();
            });

            // Limpiar toda la galería
            $('#limpiar-galeria').on('click', function(e) {
                e.preventDefault();
                if (confirm('¿Estás seguro de que querés limpiar toda la galería?')) {
                    $('#galeria-imagenes-container').empty();
                    $('#galeria_imagenes').val('');
                }
            });
        });
    </script>

<?php
}

/**
 * Guardar Galería
 */
function saebu_save_galeria_meta($post_id)
{
    if (!isset($_POST['galeria_nonce']) || !wp_verify_nonce($_POST['galeria_nonce'], 'saebu_galeria_nonce')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['galeria_imagenes'])) {
        update_post_meta($post_id, '_galeria_imagenes', sanitize_text_field($_POST['galeria_imagenes']));
    } else {
        delete_post_meta($post_id, '_galeria_imagenes');
    }
}
add_action('save_post_noticia', 'saebu_save_galeria_meta');


/**
 * Custom Walker for Desktop Menu with Multi-level Dropdowns
 */
class Saebu_Desktop_Walker_Nav_Menu extends Walker_Nav_Menu
{
    // Start Level (submenu wrapper)
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);

        if ($depth === 0) {
            // Primer nivel de dropdown
            $output .= "\n$indent<ul class=\"dropdown-menu absolute left-0 top-full mt-2 min-w-[220px] bg-white rounded-xl shadow-xl border border-gray-100 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50\">\n";
        } else {
            // Sub-submenús (nivel 2+)
            $output .= "\n$indent<ul class=\"dropdown-submenu absolute left-full top-0 ml-1 min-w-[220px] bg-white rounded-xl shadow-xl border border-gray-100 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50\">\n";
        }
    }

    function end_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        $has_children = in_array('menu-item-has-children', $classes);

        if ($depth === 0) {
            $li_class = 'menu-item relative group';
            $a_class = 'flex items-center gap-2 px-4 py-2 text-gray-700 hover:text-blue-600 font-medium rounded-lg hover:bg-blue-50 transition-colors whitespace-nowrap';
        } else {
            if ($has_children) {
                $li_class = 'menu-item relative group';
                $a_class = 'flex items-center justify-between px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors';
            } else {
                $li_class = 'menu-item';
                $a_class = 'block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors';
            }
        }

        $output .= $indent . '<li class="' . $li_class . '">';

        $atts = array();
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
        $atts['href']   = !empty($item->url) ? $item->url : '';
        $atts['class']  = $a_class;

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;

        if ($has_children) {
            if ($depth === 0) {
                $item_output .= '<svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>';
            } else {
                $item_output .= '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>';
            }
        }

        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

/**
 * Custom Walker for Mobile Menu with Accordions (CORREGIDO)
 */
class Saebu_Mobile_Walker_Nav_Menu extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        // Removemos x-collapse y usamos x-show con transición
        $output .= "\n$indent<ul class=\"pl-4 mt-2 space-y-2\" 
                    x-show=\"open\" 
                    x-transition:enter=\"transition ease-out duration-200\"
                    x-transition:enter-start=\"opacity-0 -translate-y-1\"
                    x-transition:enter-end=\"opacity-100 translate-y-0\"
                    x-transition:leave=\"transition ease-in duration-150\"
                    x-transition:leave-start=\"opacity-100 translate-y-0\"
                    x-transition:leave-end=\"opacity-0 -translate-y-1\"
                    style=\"display: none;\">\n";
    }

    function end_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $has_children = in_array('menu-item-has-children', $classes);

        if ($depth === 0 && $has_children) {
            // Item padre con submenú
            $output .= $indent . '<li x-data="{ open: false }" class="relative">';

            // Contenedor flex para el link y el botón
            $output .= '<div class="flex items-center justify-between">';

            // Link del padre
            $output .= '<a href="' . esc_url($item->url) . '" 
                        class="flex-1 px-4 py-3 text-gray-800 hover:bg-blue-50 hover:text-blue-600 rounded-lg font-medium transition-colors">'
                . apply_filters('the_title', $item->title, $item->ID) .
                '</a>';

            // Botón toggle
            $output .= '<button @click.prevent="open = !open" 
                        type="button"
                        class="p-3 text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 mr-2"
                        :aria-expanded="open.toString()"
                        aria-label="Toggle submenu">';
            $output .= '<svg class="w-5 h-5 transition-transform duration-200" 
                        :class="{ \'rotate-180\': open }" 
                        fill="none" 
                        stroke="currentColor" 
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>';
            $output .= '</button>';
            $output .= '</div>';
        } elseif ($depth === 0 && !$has_children) {
            // Item padre sin submenú
            $output .= $indent . '<li>';
            $output .= '<a href="' . esc_url($item->url) . '" 
                        class="block px-4 py-3 text-gray-800 hover:bg-blue-50 hover:text-blue-600 rounded-lg font-medium transition-colors">'
                . apply_filters('the_title', $item->title, $item->ID) .
                '</a>';
        } else {
            // Items de submenú
            $output .= $indent . '<li>';
            $output .= '<a href="' . esc_url($item->url) . '" 
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100 hover:text-blue-700 rounded-lg transition-colors">'
                . apply_filters('the_title', $item->title, $item->ID) .
                '</a>';
        }
    }

    function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= "</li>\n";
    }
}




/**
 * Función para mostrar la sección de noticias por departamento
 * 
 * @param array $args Array con la configuración del departamento
 */
function saebu_noticias_departamento($args = array())
{

    // Valores por defecto
    $defaults = array(
        'slug'        => 'becas',
        'nombre'      => 'Becas',
        'color'       => 'blue',
        'descripcion' => 'Últimas novedades del departamento.',
        'posts_count' => 3,
        'icono'       => 'M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z',
    );

    // Combinar con los argumentos proporcionados
    $config = wp_parse_args($args, $defaults);

    // Query de noticias
    $noticias_query = new WP_Query(array(
        'post_type'      => 'noticia',
        'posts_per_page' => $config['posts_count'],
        'tax_query'      => array(
            array(
                'taxonomy' => 'departamento',
                'field'    => 'slug',
                'terms'    => $config['slug'],
            ),
        ),
    ));

    // Output del HTML
?>
    <section class="py-20 bg-white border-t border-gray-200">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">

                <!-- Header -->
                <div class="flex flex-col md:flex-row justify-between items-end mb-10 gap-4">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900 mb-2 border-l-4 border-<?php echo esc_attr($config['color']); ?>-600 pl-3">
                            Novedades de <?php echo esc_html($config['nombre']); ?>
                        </h2>
                        <p class="text-gray-600 text-sm">
                            <?php echo esc_html($config['descripcion']); ?>
                        </p>
                    </div>
                    <a href="<?php echo esc_url(get_term_link($config['slug'], 'departamento')); ?>"
                        class="text-sm font-semibold text-<?php echo esc_attr($config['color']); ?>-600 hover:text-<?php echo esc_attr($config['color']); ?>-700 flex items-center gap-1 transition-colors">
                        Ver todas las noticias
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Grid de Noticias -->
                <div class="grid md:grid-cols-3 gap-8">
                    <?php if ($noticias_query->have_posts()) : ?>
                        <?php while ($noticias_query->have_posts()) : $noticias_query->the_post(); ?>
                            <article class="flex flex-col h-full bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg hover:border-<?php echo esc_attr($config['color']); ?>-300 transition-all duration-300 group">

                                <!-- Imagen -->
                                <a href="<?php the_permalink(); ?>" class="block relative h-48 overflow-hidden bg-gray-100">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-cover transition-transform duration-500 group-hover:scale-105')); ?>
                                    <?php else : ?>
                                        <div class="w-full h-full flex items-center justify-center text-gray-300">
                                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo esc_attr($config['icono']); ?>"></path>
                                            </svg>
                                        </div>
                                    <?php endif; ?>

                                    <!-- Badge -->
                                    <div class="absolute top-3 left-3">
                                        <span class="px-2 py-1 bg-<?php echo esc_attr($config['color']); ?>-600 text-white text-[10px] font-bold uppercase tracking-wider rounded">
                                            <?php echo esc_html($config['nombre']); ?>
                                        </span>
                                    </div>
                                </a>

                                <!-- Contenido -->
                                <div class="p-6 flex-1 flex flex-col">
                                    <!-- Fecha -->
                                    <div class="text-xs text-gray-500 mb-2 flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <?php echo get_the_date('d/m/Y'); ?>
                                    </div>

                                    <!-- Título -->
                                    <h3 class="text-lg font-bold text-gray-900 mb-3 leading-snug group-hover:text-<?php echo esc_attr($config['color']); ?>-600 transition-colors">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>

                                    <!-- Extracto -->
                                    <p class="text-sm text-gray-600 line-clamp-3 mb-4 flex-1">
                                        <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
                                    </p>

                                    <!-- Link -->
                                    <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-sm font-semibold text-<?php echo esc_attr($config['color']); ?>-600 hover:underline mt-auto">
                                        Leer más
                                        <svg class="w-4 h-4 ml-1 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </article>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <!-- Sin resultados -->
                        <div class="col-span-3 bg-<?php echo esc_attr($config['color']); ?>-50 border border-<?php echo esc_attr($config['color']); ?>-200 rounded-lg p-8 text-center">
                            <svg class="w-12 h-12 text-<?php echo esc_attr($config['color']); ?>-300 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo esc_attr($config['icono']); ?>"></path>
                            </svg>
                            <p class="text-gray-600 font-medium">No hay novedades de <?php echo esc_html($config['nombre']); ?> en este momento.</p>
                        </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </section>
<?php
}




/**
 * ============================================
 * CONVERTIR EL SITIO EN PWA
 * ============================================
 */

// 1. Crear el archivo manifest.json dinámicamente
function saebu_manifest_json()
{
    header('Content-Type: application/json');

    $manifest = array(
        'name' => get_bloginfo('name'),
        'short_name' => 'SAEBU',
        'description' => get_bloginfo('description'),
        'start_url' => home_url('/'),
        'display' => 'standalone',
        'background_color' => '#ffffff',
        'theme_color' => '#005eb8',
        'icons' => array(
            array(
                'src' => get_template_directory_uri() . '/assets/img/icon-192.png',
                'sizes' => '192x192',
                'type' => 'image/png',
                'purpose' => 'any maskable'
            ),
            array(
                'src' => get_template_directory_uri() . '/assets/img/icon-512.png',
                'sizes' => '512x512',
                'type' => 'image/png',
                'purpose' => 'any maskable'
            )
        )
    );

    echo json_encode($manifest);
    exit;
}

// 2. Crear la ruta del manifest
function saebu_manifest_rewrite()
{
    add_rewrite_rule('^manifest\.json$', 'index.php?manifest=1', 'top');
}
add_action('init', 'saebu_manifest_rewrite');

// 3. Detectar la query var
function saebu_manifest_query_vars($vars)
{
    $vars[] = 'manifest';
    return $vars;
}
add_filter('query_vars', 'saebu_manifest_query_vars');

// 4. Ejecutar la función cuando se llame al manifest
function saebu_manifest_template()
{
    if (get_query_var('manifest')) {
        saebu_manifest_json();
    }
}
add_action('template_redirect', 'saebu_manifest_template');

// 5. Agregar meta tags en el head
function saebu_pwa_meta_tags()
{
?>
    <link rel="manifest" href="<?php echo home_url('/manifest.json'); ?>">
    <meta name="theme-color" content="#005eb8">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- iOS específico -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="SAEBU">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icon-192.png">
<?php
}
add_action('wp_head', 'saebu_pwa_meta_tags');

// 6. IMPORTANTE: Refrescar permalinks (ejecuta una sola vez)
function saebu_activate_manifest()
{
    saebu_manifest_rewrite();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'saebu_activate_manifest');


/**
 * Obtener URL del último menú del día disponible
 */
function saebu_get_ultimo_menu_url()
{
    $menu = saebu_get_menu_del_dia();

    if ($menu) {
        return get_permalink($menu->ID);
    }

    // Si no hay menú, redirigir al archivo de menús
    return get_post_type_archive_link('menu_dia');
}
