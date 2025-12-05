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



/**
 * Menú por defecto si no hay menú configurado
 */
function saebu_default_menu()
{
    ?>
    <ul class="flex items-center gap-8">
        <li><a href="<?php echo home_url('/'); ?>" class="text-slate-700 font-medium hover:text-[#416ed2]">Inicio</a></li>
        <li><a href="<?php echo home_url('/institucional'); ?>" class="text-slate-700 font-medium hover:text-[#416ed2]">Institucional</a></li>
        <li><a href="<?php echo home_url('/becas'); ?>" class="text-slate-700 font-medium hover:text-[#416ed2]">Becas</a></li>
        <li><a href="<?php echo home_url('/camping'); ?>" class="text-slate-700 font-medium hover:text-[#416ed2]">Camping</a></li>
        <li><a href="<?php echo home_url('/ceseu'); ?>" class="text-slate-700 font-medium hover:text-[#416ed2]">CeSEU</a></li>
        <li><a href="<?php echo get_post_type_archive_link('noticia'); ?>" class="text-slate-700 font-medium hover:text-[#416ed2]">Noticias</a></li>
        <li><a href="<?php echo home_url('/contacto'); ?>" class="text-slate-700 font-medium hover:text-[#416ed2]">Contacto</a></li>
    </ul>
<?php
}


/**
 * Custom Post Type: Menú del Día
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
 * Metaboxes personalizados para Menú del Día
 */
function saebu_menu_dia_metaboxes()
{
    add_meta_box(
        'menu_dia_detalles',
        'Detalles del Menú',
        'saebu_menu_dia_metabox_callback',
        'menu_dia',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'saebu_menu_dia_metaboxes');

/**
 * Callback del metabox
 */
function saebu_menu_dia_metabox_callback($post)
{
    wp_nonce_field('saebu_menu_dia_nonce', 'menu_dia_nonce');

    $fecha = get_post_meta($post->ID, '_menu_fecha', true);
    $entrada = get_post_meta($post->ID, '_menu_entrada', true);
    $principal = get_post_meta($post->ID, '_menu_principal', true);
    $postre = get_post_meta($post->ID, '_menu_postre', true);
    $precio = get_post_meta($post->ID, '_menu_precio', true);
    $notificar = get_post_meta($post->ID, '_menu_notificar', true);
?>

    <div style="padding: 10px;">
        <p>
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">
                <strong>Fecha del Menú:</strong>
            </label>
            <input type="date" name="menu_fecha" value="<?php echo esc_attr($fecha); ?>"
                style="width: 100%; max-width: 300px; padding: 8px;" />
        </p>

        <p>
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">
                <strong>Entrada:</strong>
            </label>
            <input type="text" name="menu_entrada" value="<?php echo esc_attr($entrada); ?>"
                placeholder="Ej: Ensalada mixta"
                style="width: 100%; padding: 8px;" />
        </p>

        <p>
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">
                <strong>Plato Principal:</strong>
            </label>
            <input type="text" name="menu_principal" value="<?php echo esc_attr($principal); ?>"
                placeholder="Ej: Milanesa con papas fritas"
                style="width: 100%; padding: 8px;" />
        </p>

        <p>
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">
                <strong>Postre:</strong>
            </label>
            <input type="text" name="menu_postre" value="<?php echo esc_attr($postre); ?>"
                placeholder="Ej: Flan con dulce de leche"
                style="width: 100%; padding: 8px;" />
        </p>

        <p>
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">
                <strong>Precio:</strong>
            </label>
            <input type="text" name="menu_precio" value="<?php echo esc_attr($precio); ?>"
                placeholder="Ej: $350"
                style="width: 100%; max-width: 200px; padding: 8px;" />
        </p>

        <p style="background: #f0f7ff; padding: 15px; border-left: 4px solid #0073aa; margin-top: 20px;">
            <label style="display: flex; align-items: center; cursor: pointer;">
                <input type="checkbox" name="menu_notificar" value="1"
                    <?php checked($notificar, '1'); ?>
                    style="margin-right: 10px;" />
                <strong>Enviar notificación push cuando se publique este menú</strong>
            </label>
            <small style="display: block; margin-top: 5px; color: #666;">
                Se enviará una notificación a todos los usuarios suscritos cuando publiques este menú.
            </small>
        </p>
    </div>

<?php
}

/**
 * Guardar metadatos del menú
 */
function saebu_save_menu_dia_meta($post_id)
{
    // Verificaciones de seguridad
    if (!isset($_POST['menu_dia_nonce']) || !wp_verify_nonce($_POST['menu_dia_nonce'], 'saebu_menu_dia_nonce')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Guardar campos
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

    // Checkbox de notificación
    $notificar = isset($_POST['menu_notificar']) ? '1' : '0';
    update_post_meta($post_id, '_menu_notificar', $notificar);

    // Si se marca para notificar y el post se está publicando
    if ($notificar === '1' && get_post_status($post_id) === 'publish') {
        saebu_enviar_notificacion_menu($post_id);
    }
}
add_action('save_post_menu_dia', 'saebu_save_menu_dia_meta');

/**
 * Función para obtener el menú del día actual
 */
function saebu_get_menu_del_dia()
{
    $hoy = date('Y-m-d');

    $args = array(
        'post_type'      => 'menu_dia',
        'posts_per_page' => 1,
        'post_status'    => 'publish',
        'meta_query'     => array(
            array(
                'key'     => '_menu_fecha',
                'value'   => $hoy,
                'compare' => '=',
            ),
        ),
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        return $query->posts[0];
    }

    // Si no hay menú para hoy, buscar el más reciente
    $args = array(
        'post_type'      => 'menu_dia',
        'posts_per_page' => 1,
        'post_status'    => 'publish',
        'orderby'        => 'meta_value',
        'meta_key'       => '_menu_fecha',
        'order'          => 'DESC',
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
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
            // Primer nivel de dropdown (directo desde el menú principal)
            $output .= "\n$indent<ul class=\"absolute left-0 top-full mt-2 w-56 bg-white rounded-xl shadow-xl border border-gray-100 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50\">\n";
        } else {
            // Sub-submenús (nivel 2+)
            // Se posicionan a la derecha del elemento padre
            $output .= "\n$indent<ul class=\"absolute left-full top-0 ml-1 w-56 bg-white rounded-xl shadow-xl border border-gray-100 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50\">\n";
        }
    }

    // End Level
    function end_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    // Start Element (menu item)
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        // Check if item has children
        $has_children = in_array('menu-item-has-children', $classes);

        if ($depth === 0) {
            // Top level menu item (nivel principal)
            $li_class = 'relative group';
            $a_class = 'flex items-center gap-2 px-4 py-2 text-gray-700 hover:text-blue-600 font-medium rounded-lg hover:bg-blue-50 transition-colors';
        } else {
            // Submenu items (nivel 1+)
            if ($has_children) {
                // Item con hijos (necesita group para el hover)
                $li_class = 'relative group';
                $a_class = 'flex items-center justify-between px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors';
            } else {
                // Item sin hijos
                $li_class = '';
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

        // Add dropdown icon if has children
        if ($has_children) {
            if ($depth === 0) {
                // Icono hacia abajo para el nivel principal
                $item_output .= '<svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>';
            } else {
                // Icono hacia la derecha para submenús
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
 * ============================================
 * PERSONALIZACIÓN DEL LOGIN DE WORDPRESS
 * SAEBU - UNSL
 * ============================================
 */

// 1. PERSONALIZAR LOGO Y ESTILOS DEL LOGIN
function saebu_custom_login_styles() {
    ?>
    <style>
        /* ====================
           VARIABLES Y RESET
        ==================== */
        :root {
            --primary: #2563eb;
            --primary-dark: #1e40af;
            --secondary: #0891b2;
            --accent: #06b6d4;
            --success: #10b981;
            --text-dark: #1e293b;
            --text-light: #64748b;
            --bg-light: #f8fafc;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* ====================
           BODY Y FONDO
        ==================== */
        body.login {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif !important;
            position: relative;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Patrón decorativo de fondo */
        body.login::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');
            opacity: 1;
            pointer-events: none;
        }

        /* ====================
           CONTENEDOR PRINCIPAL
        ==================== */
        login {
            padding: 4% 0 0 !important;
            width: 100% !important;
            max-width: 440px !important;
            margin: 0 auto !important;
        }

        /* ====================
           LOGO
        ==================== */
        login h1 {
            margin-bottom: 24px !important;
        }

        login h1 a {
            background-image: url('<?php echo get_template_directory_uri(); ?>/logo-unsl-2.png') !important;
            background-size: contain !important;
            background-position: center !important;
            width: 100% !important;
            height: 80px !important;
            margin: 0 auto 20px !important;
            padding: 0 !important;
            filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.1));
            transition: all 0.3s ease !important;
        }

        login h1 a:hover {
            transform: scale(1.05);
            filter: drop-shadow(0 8px 12px rgba(0, 0, 0, 0.15));
        }

        /* Badge institucional */
        login h1::after {
            content: 'Secretaría de Asuntos Estudiantiles';
            display: block;
            text-align: center;
            color: white;
            font-size: 14px;
            font-weight: 600;
            margin-top: 12px;
            padding: 8px 16px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 50px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            letter-spacing: 0.5px;
        }

        /* ====================
           FORMULARIO
        ==================== */
        loginform,
        registerform,
        lostpasswordform {
            background: white !important;
            border: none !important;
            border-radius: 20px !important;
            padding: 40px !important;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.25),
                        0 0 0 1px rgba(255, 255, 255, 0.1) !important;
            margin-bottom: 20px !important;
            position: relative;
            overflow: hidden;
        }

        /* Decoración superior del formulario */
        loginform::before,
        registerform::before,
        lostpasswordform::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #2563eb, #06b6d4, #10b981);
        }

        /* ====================
           LABELS
        ==================== */
        loginform label,
        registerform label,
        lostpasswordform label {
            color: var(--text-dark) !important;
            font-size: 14px !important;
            font-weight: 600 !important;
            margin-bottom: 8px !important;
            display: block !important;
            letter-spacing: 0.3px;
        }

        /* ====================
           INPUTS
        ==================== */
        loginform input[type="text"],
        loginform input[type="password"],
        loginform input[type="email"],
        registerform input[type="text"],
        registerform input[type="email"],
        lostpasswordform input[type="text"] {
            background: var(--bg-light) !important;
            border: 2px solid #e2e8f0 !important;
            border-radius: 12px !important;
            padding: 14px 16px !important;
            font-size: 15px !important;
            color: var(--text-dark) !important;
            width: 100% !important;
            margin: 0 0 6px 0 !important;
            transition: all 0.3s ease !important;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05) !important;
        }

        loginform input[type="text"]:focus,
        loginform input[type="password"]:focus,
        loginform input[type="email"]:focus,
        registerform input[type="text"]:focus,
        registerform input[type="email"]:focus,
        lostpasswordform input[type="text"]:focus {
            background: white !important;
            border-color: var(--primary) !important;
            outline: none !important;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1),
                        0 4px 6px rgba(0, 0, 0, 0.05) !important;
            transform: translateY(-1px);
        }

        /* Placeholder */
        loginform input::placeholder,
        registerform input::placeholder,
        lostpasswordform input::placeholder {
            color: var(--text-light) !important;
            opacity: 0.6;
        }

        /* ====================
           CHECKBOX RECORDARME
        ==================== */
        .login .forgetmenot {
            margin: 16px 0 20px 0 !important;
        }

        .login label[for="rememberme"] {
            font-weight: 500 !important;
            color: var(--text-light) !important;
            font-size: 14px !important;
        }

        rememberme {
            margin-right: 8px !important;
            width: 18px !important;
            height: 18px !important;
            border-radius: 4px !important;
            border: 2px solid #cbd5e1 !important;
            cursor: pointer !important;
        }

        rememberme:checked {
            background-color: var(--primary) !important;
            border-color: var(--primary) !important;
        }

        /* ====================
           BOTÓN PRINCIPAL
        ==================== */
        .wp-core-ui .button-primary {
            background: linear-gradient(135deg, var(--primary), var(--secondary)) !important;
            border: none !important;
            border-radius: 12px !important;
            padding: 14px 24px !important;
            font-size: 15px !important;
            font-weight: 600 !important;
            letter-spacing: 0.5px !important;
            text-shadow: none !important;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3),
                        0 2px 4px rgba(0, 0, 0, 0.1) !important;
            width: 100% !important;
            height: auto !important;
            cursor: pointer !important;
            transition: all 0.3s ease !important;
            position: relative;
            overflow: hidden;
        }

        .wp-core-ui .button-primary:hover {
            background: linear-gradient(135deg, var(--primary-dark), var(--primary)) !important;
            transform: translateY(-2px) !important;
            box-shadow: 0 6px 20px rgba(37, 99, 235, 0.4),
                        0 4px 8px rgba(0, 0, 0, 0.15) !important;
        }

        .wp-core-ui .button-primary:active {
            transform: translateY(0) !important;
            box-shadow: 0 2px 8px rgba(37, 99, 235, 0.3) !important;
        }

        .wp-core-ui .button-primary:focus {
            outline: none !important;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.2),
                        0 4px 12px rgba(37, 99, 235, 0.3) !important;
        }

        /* Efecto ripple en el botón */
        .wp-core-ui .button-primary::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .wp-core-ui .button-primary:active::after {
            width: 300px;
            height: 300px;
        }

        /* ====================
           ENLACES
        ==================== */
        nav,
        backtoblog {
            text-align: center !important;
            padding: 0 24px !important;
            margin: 16px 0 !important;
        }

        nav a,
        backtoblog a {
            color: white !important;
            text-decoration: none !important;
            font-size: 14px !important;
            font-weight: 500 !important;
            transition: all 0.3s ease !important;
            padding: 8px 12px !important;
            display: inline-block !important;
            background: rgba(255, 255, 255, 0.1) !important;
            backdrop-filter: blur(10px) !important;
            border-radius: 8px !important;
            border: 1px solid rgba(255, 255, 255, 0.2) !important;
        }

        nav a:hover,
        backtoblog a:hover {
            background: rgba(255, 255, 255, 0.2) !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        /* Separador entre enlaces */
        nav {
            display: flex !important;
            justify-content: center !important;
            gap: 12px !important;
            flex-wrap: wrap !important;
        }

        /* ====================
           MENSAJES
        ==================== */
        .message,
        login_error,
        .login .success {
            border-left-width: 4px !important;
            border-radius: 12px !important;
            padding: 16px 20px !important;
            margin: 0 0 20px 0 !important;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1) !important;
            font-size: 14px !important;
            line-height: 1.6 !important;
        }

        /* Mensaje de error */
        login_error {
            background: #fef2f2 !important;
            border-left-color: #ef4444 !important;
            border: 1px solid #fecaca !important;
            border-left-width: 4px !important;
            color: #991b1b !important;
        }

        /* Mensaje de éxito */
        .login .success,
        .message {
            background: #f0fdf4 !important;
            border-left-color: #10b981 !important;
            border: 1px solid #bbf7d0 !important;
            border-left-width: 4px !important;
            color: #065f46 !important;
        }

        /* ====================
           FOOTER
        ==================== */
        .login #backtoblog {
            margin-top: 24px !important;
        }

        /* Información adicional en el footer */
        body.login::after {
            content: '© 2024 Universidad Nacional de San Luis • Todos los derechos reservados';
            position: fixed;
            bottom: 20px;
            left: 0;
            right: 0;
            text-align: center;
            color: rgba(255, 255, 255, 0.7);
            font-size: 12px;
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        /* ====================
           PRIVACY LINK
        ==================== */
        .privacy-policy-page-link {
            text-align: center !important;
            margin-top: 20px !important;
        }

        .privacy-policy-page-link a {
            color: white !important;
            text-decoration: none !important;
            font-size: 13px !important;
            padding: 8px 16px !important;
            background: rgba(255, 255, 255, 0.1) !important;
            backdrop-filter: blur(10px) !important;
            border-radius: 8px !important;
            border: 1px solid rgba(255, 255, 255, 0.2) !important;
            display: inline-block !important;
            transition: all 0.3s ease !important;
        }

        .privacy-policy-page-link a:hover {
            background: rgba(255, 255, 255, 0.2) !important;
            transform: translateY(-2px);
        }

        /* ====================
           ANIMACIONES
        ==================== */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        login {
            animation: fadeInUp 0.6s ease-out;
        }

        login h1 {
            animation: fadeIn 0.8s ease-out;
        }

        loginform,
        registerform,
        lostpasswordform {
            animation: fadeInUp 0.6s ease-out 0.2s both;
        }

        nav,
        backtoblog {
            animation: fadeIn 0.8s ease-out 0.4s both;
        }

        /* ====================
           RESPONSIVE
        ==================== */
        @media screen and (max-width: 480px) {
            body.login {
                padding: 20px;
            }

            login {
                padding: 20px 0 0 !important;
                max-width: 100% !important;
            }

            loginform,
            registerform,
            lostpasswordform {
                padding: 30px 24px !important;
                border-radius: 16px !important;
            }

            login h1 a {
                height: 60px !important;
            }

            login h1::after {
                font-size: 12px !important;
                padding: 6px 12px !important;
            }

            body.login::after {
                font-size: 11px !important;
                padding: 0 20px;
                line-height: 1.4;
            }

            nav {
                flex-direction: column !important;
                gap: 8px !important;
            }

            nav a,
            backtoblog a {
                width: 100% !important;
                text-align: center !important;
            }
        }

        /* ====================
           MODO OSCURO (si usas prefer-color-scheme)
        ==================== */
        @media (prefers-color-scheme: dark) {
            body.login {
                background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%) !important;
            }
        }

        /* ====================
           ACCESIBILIDAD
        ==================== */
        *:focus {
            outline: 2px solid var(--primary) !important;
            outline-offset: 2px !important;
        }

        /* Alto contraste para lectores de pantalla */
        @media (prefers-contrast: high) {
            body.login {
                background: #1e293b !important;
            }

            loginform,
            registerform,
            lostpasswordform {
                border: 2px solid var(--primary) !important;
            }
        }
    </style>
    <?php
}
add_action('login_enqueue_scripts', 'saebu_custom_login_styles');

// 2. CAMBIAR EL ENLACE DEL LOGO
function saebu_login_logo_url() {
    return home_url();
}
add_filter('login_headerurl', 'saebu_login_logo_url');

// 3. CAMBIAR EL TÍTULO DEL LOGO
function saebu_login_logo_url_title() {
    return 'SAEBU - Universidad Nacional de San Luis';
}
add_filter('login_headertext', 'saebu_login_logo_url_title');

// 4. PERSONALIZAR MENSAJE DE ERROR (más amigable)
function saebu_custom_login_errors($error) {
    global $errors;
    $err_codes = $errors->get_error_codes();

    // Error de nombre de usuario
    if (in_array('invalid_username', $err_codes)) {
        $error = '<strong>Error:</strong> El nombre de usuario ingresado no existe. Por favor, verificá tus credenciales.';
    }

    // Error de contraseña
    if (in_array('incorrect_password', $err_codes)) {
        $error = '<strong>Error:</strong> La contraseña ingresada es incorrecta. <a href="' . wp_lostpassword_url() . '">¿Olvidaste tu contraseña?</a>';
    }

    return $error;
}
add_filter('login_errors', 'saebu_custom_login_errors');

// 5. AÑADIR TEXTO PERSONALIZADO EN EL FOOTER DEL LOGIN
function saebu_login_footer_message() {
    ?>
    <style>
        .custom-login-footer {
            position: fixed;
            bottom: 60px;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 1000;
        }
        .custom-login-footer .info-box {
            display: inline-block;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            padding: 16px 24px;
            color: white;
            font-size: 13px;
            line-height: 1.6;
            max-width: 440px;
            margin: 0 auto;
        }
        .custom-login-footer .info-box strong {
            display: block;
            font-size: 14px;
            margin-bottom: 4px;
            color: rgba(255, 255, 255, 0.95);
        }
        .custom-login-footer .info-box a {
            color: #60a5fa;
            text-decoration: none;
            font-weight: 600;
            border-bottom: 1px solid transparent;
            transition: all 0.3s ease;
        }
        .custom-login-footer .info-box a:hover {
            border-bottom-color: #60a5fa;
        }
    </style>
    <div class="custom-login-footer">
        <div class="info-box">
            <strong>¿Necesitás ayuda?</strong>
            Contactá a soporte: <a href="mailto:soporte@unsl.edu.ar">soporte@unsl.edu.ar</a>
        </div>
    </div>
    <?php
}
add_action('login_footer', 'saebu_login_footer_message');

// 6. REDIRECCIONAR DESPUÉS DEL LOGIN SEGÚN ROL
function saebu_login_redirect($redirect_to, $request, $user) {
    if (isset($user->roles) && is_array($user->roles)) {
        // Si es administrador
        if (in_array('administrator', $user->roles)) {
            return admin_url();
        }
        // Si es editor o autor
        elseif (in_array('editor', $user->roles) || in_array('author', $user->roles)) {
            return admin_url('edit.php');
        }
        // Otros roles van al inicio
        else {
            return home_url();
        }
    }
    return $redirect_to;
}
add_filter('login_redirect', 'saebu_login_redirect', 10, 3);

// 7. MENSAJE DE BIENVENIDA PERSONALIZADO
function saebu_login_message($message) {
    // Solo mostrar en la página principal de login (no en recuperación de contraseña)
    if (empty($message) && !isset($_GET['action'])) {
        $message = '<p class="message" style="background: rgba(255, 255, 255, 0.15) !important; backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2) !important; color: white !important; border-left: 4px solid #60a5fa !important; border-radius: 12px; padding: 16px 20px; margin-bottom: 20px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);">
            <strong>Bienvenido al Sistema de Gestión SAEBU</strong><br>
            Ingresá tus credenciales para acceder al panel de administración.
        </p>';
    }
    return $message;
}
add_filter('login_message', 'saebu_login_message');

// 8. AGREGAR FAVICON AL LOGIN
function saebu_login_favicon() {
    ?>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    <?php
}
add_action('login_head', 'saebu_login_favicon');

// 9. CAMBIAR EL TEXTO "Recordarme"
function saebu_custom_remember_me_text() {
    add_filter('gettext', function($translated_text, $text, $domain) {
        if ($text === 'Remember Me') {
            return 'Mantener sesión iniciada';
        }
        return $translated_text;
    }, 20, 3);
}
add_action('init', 'saebu_custom_remember_me_text');

// 10. SEGURIDAD: Limitar intentos de login (opcional pero recomendado)
function saebu_limit_login_attempts() {
    $ip = $_SERVER['REMOTE_ADDR'];
    $transient_key = 'login_attempts_' . md5($ip);
    $attempts = get_transient($transient_key);

    if ($attempts && $attempts >= 5) {
        wp_die(
            '<div style="text-align: center; padding: 50px; font-family: sans-serif;">
                <h1>🔒 Demasiados intentos</h1>
                <p>Has excedido el número máximo de intentos de inicio de sesión.</p>
                <p>Por favor, intenta nuevamente en 15 minutos.</p>
                <a href="' . home_url() . '" style="display: inline-block; margin-top: 20px; padding: 12px 24px; background: #2563eb; color: white; text-decoration: none; border-radius: 8px;">Volver al inicio</a>
            </div>'
        );
    }
}
add_action('wp_login_failed', function() {
    $ip = $_SERVER['REMOTE_ADDR'];
    $transient_key = 'login_attempts_' . md5($ip);
    $attempts = get_transient($transient_key);
    
    if (!$attempts) {
        set_transient($transient_key, 1, 15 * MINUTE_IN_SECONDS);
    } else {
        set_transient($transient_key, $attempts + 1, 15 * MINUTE_IN_SECONDS);
    }
});
add_action('login_head', 'saebu_limit_login_attempts');

// 11. Limpiar intentos después de login exitoso
add_action('wp_login', function() {
    $ip = $_SERVER['REMOTE_ADDR'];
    $transient_key = 'login_attempts_' . md5($ip);
    delete_transient($transient_key);
});
