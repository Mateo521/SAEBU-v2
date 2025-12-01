<?php get_header(); ?>

<!-- Hero Banner con imagen de fondo -->
<section class="relative h-[600px] md:h-[700px] overflow-hidden">
    <!-- Imagen de fondo -->
    <div class="absolute inset-0">
        <?php
        // Obtener imagen destacada de la página de inicio o imagen por defecto
        $hero_image = get_theme_mod('hero_background_image');
        if (!$hero_image && has_post_thumbnail()) {
            $hero_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
        }
        if (!$hero_image) {
            // Imagen por defecto - puedes cambiar esta URL
            $hero_image = get_template_directory_uri() . '/assets/images/hero-default.jpg';
        }
        ?>
        <img src="<?php echo esc_url($hero_image); ?>"
            alt="Banner SAEBU"
            class="w-full h-full object-cover scale-105">

        <!-- Overlay con gradiente -->
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900/80 via-slate-900/70 to-blue-800/80"></div>

        <!-- Efecto blur en los bordes -->
        <div class="absolute inset-0 backdrop-blur-[2px]"></div>
    </div>

    <!-- Contenido del Hero -->
    <div class="relative h-full flex items-center">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <!-- Badge superior -->
                <div class="inline-block mb-6">
                    <span class="bg-white/20 backdrop-blur-md text-white px-4 py-2 rounded-full text-sm font-medium border border-white/30">
                        Universidad Nacional de San Luis
                    </span>
                </div>

                <h1 class="text-3xl md:text-4xl font-bold text-white mb-6 leading-tight drop-shadow-2xl">
                    Secretaría de Asuntos Estudiantiles y

                    <span class="text-blue-300">Bienestar Universitario</span>
                </h1>

                <p class="text-base md:text-xl text-gray-100 mb-10 leading-relaxed max-w-3xl mx-auto drop-shadow-lg">
                    Asistencia y acompañamiento para contribuir a un óptimo desempeño académico.


                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="<?php echo home_url('/noticias'); ?>"
                        class="inline-block bg-white text-blue-900 px-8 py-4 rounded-lg font-semibold hover:bg-blue-50 shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                        Ver Noticias
                    </a>
                    <a href="<?php echo home_url('/institucional'); ?>"
                        class="inline-block bg-transparent text-white border-2 border-white/80 backdrop-blur-sm px-8 py-4 rounded-lg font-semibold hover:bg-white/10 shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                        Conocer Más
                    </a>
                </div>

                <!-- Scroll indicator -->
                <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
                    <svg class="w-6 h-6 text-white opacity-75" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Menú del Día -->
<?php
$menu_dia = saebu_get_menu_del_dia();
if ($menu_dia) :
    $fecha = get_post_meta($menu_dia->ID, '_menu_fecha', true);
    $entrada = get_post_meta($menu_dia->ID, '_menu_entrada', true);
    $principal = get_post_meta($menu_dia->ID, '_menu_principal', true);
    $postre = get_post_meta($menu_dia->ID, '_menu_postre', true);
    $precio = get_post_meta($menu_dia->ID, '_menu_precio', true);
    $imagen = get_the_post_thumbnail_url($menu_dia->ID, 'large');
?>
    <section class="relative py-3 md:mt-[-130px] z-10"> <!-- -mt-20 -->
        <div class="container mx-auto px-4">
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden max-w-xs md:max-w-xl mx-auto">

                <div class="grid md:grid-cols-2 gap-0">

                    <!-- Imagen del menú -->
                    <div class="relative  md:h-auto"> <!-- h-64 -->
                        <?php if ($imagen) : ?>
                            <img src="<?php echo esc_url($imagen); ?>"
                                alt="Menú del día"
                                class="w-full h-full object-cover">
                        <?php else : ?>
                            <div class="w-full h-full bg-gradient-to-br from-blue-500 to-red-600 flex items-center justify-center">
                                <svg class="w-24 h-24 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        <?php endif; ?>

                        <!-- Badge de fecha -->
                        <div class="absolute top-4 right-4 bg-white rounded-lg px-2 py-2 shadow-lg">
                            <div class="text-center">
                                <div class="text-xs font-medium text-gray-600 uppercase">
                                    <?php echo date_i18n('F', strtotime($fecha)); ?>
                                </div>
                                <div class="text-2xl font-bold text-blue-600">
                                    <?php echo date_i18n('d', strtotime($fecha)); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Información del menú -->
                    <div class="p-3 md:p-6">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                            <h2 class="text-xl font-bold text-slate-900">Menú del Día</h2>
                        </div>

                        <p class="text-gray-600 mb-3">
                            <?php echo date_i18n('l, d \d\e F \d\e Y', strtotime($fecha)); ?>
                        </p>

                        <div class="space-y-4 mb-6">
                            <?php if ($entrada) : ?>
                                <div class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-blue-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <div>
                                        <h4 class="font-semibold text-slate-900">Entrada</h4>
                                        <p class="text-gray-700"><?php echo esc_html($entrada); ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if ($principal) : ?>
                                <div class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-blue-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <div>
                                        <h4 class="font-semibold text-slate-900">Plato Principal</h4>
                                        <p class="text-gray-700"><?php echo esc_html($principal); ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if ($postre) : ?>
                                <div class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-blue-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <div>
                                        <h4 class="font-semibold text-slate-900">Postre</h4>
                                        <p class="text-gray-700"><?php echo esc_html($postre); ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>

                        <?php if ($precio) : ?>
                            <div class="flex items-center justify-between p-4 bg-blue-50 rounded-lg border border-blue-200">
                                <span class="text-gray-700 font-medium">Precio:</span>
                                <span class="text-xl font-bold text-blue-600"><?php echo esc_html($precio); ?></span>
                            </div>
                        <?php endif; ?>

                        <!-- Botón de suscripción -->
                        <div class="mt-3 pt-3 border-t border-gray-200">
                            <button id="suscribir-menu-btn"
                                class="w-full inline-flex items-center text-sm justify-center gap-1 bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                </svg>
                                Recibir notificaciones del menú
                            </button>
                            <p class="text-xs text-gray-500 text-center mt-2">
                                Te notificaremos cada día sobre el menú disponible
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
<?php endif; ?>



<!-- Barra de estadísticas flotante -->
<!--section class="relative -mt-20 z-10">
    <div class="container mx-auto px-4">
        <div class="bg-white rounded-2xl shadow-2xl p-8 max-w-5xl mx-auto">
            <div class="grid md:grid-cols-2 gap-8 text-center">
                <div class="border-r border-gray-200 last:border-0">
                    <h3 class="text-xl font-bold text-blue-600 mb-2">Secretario</h3>
                    <p class="text-gray-700 font-medium">Prof. Rodolfo Nahuel Sirur Flores</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-blue-600 mb-2">Secretaría de Asuntos Estudiantiles y Bienestar Universitario</h3>
                    <p class="text-gray-700 font-medium"> <span class="text-gray-100 bg-gray-600 px-2 rounded">Villa Mercedes</span> Ing. Nicolás Ariel Ramos</p>
                </div>
            </div>
        </div>
    </div>
</section-->



<!-- Departamentos -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-slate-900 mb-4">Nuestros Departamentos</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Servicios especializados para apoyar tu desarrollo universitario
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
            <?php
            $departamentos = array(
                array(
                    'name' => 'Becas',
                    'slug' => 'becas',
                    'description' => 'Apoyo económico para estudiantes',
                    'svg' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>'
                ),
                array(
                    'name' => 'Camping',
                    'slug' => 'camping',
                    'description' => 'Espacio recreativo y de esparcimiento',
                    'svg' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>'
                ),
                array(
                    'name' => 'CESEU',
                    'slug' => 'ceseu',
                    'description' => 'Centro de Estudiantes Universitarios',
                    'svg' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>'
                ),
                array(
                    'name' => 'Trabajo Social',
                    'slug' => 'trabajo-social',
                    'description' => 'Asistencia y orientación social',
                    'svg' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>'
                ),
                array(
                    'name' => 'Club Universitario',
                    'slug' => 'club-universitario',
                    'description' => 'Actividades deportivas y sociales',
                    'svg' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>'
                ),
                array(
                    'name' => 'Departamento de Deportes',
                    'slug' => 'dpto-deportes',
                    'description' => 'Promoción de la actividad física',
                    'svg' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>'
                ),
            );

            foreach ($departamentos as $depto) :
            ?>
                <a href="<?php echo home_url('/' . $depto['slug']); ?>"
                    class="group bg-white border border-gray-200 rounded-lg p-8 hover:border-blue-500 hover:shadow-lg transition-all duration-300">
                    <div class="text-blue-600 mb-4 transform group-hover:scale-110 transition-transform duration-300">
                        <?php echo $depto['svg']; ?>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-blue-600 transition-colors">
                        <?php echo $depto['name']; ?>
                    </h3>
                    <p class="text-gray-600 text-sm mb-4">
                        <?php echo $depto['description']; ?>
                    </p>
                    <span class="text-blue-600 text-sm font-medium">
                        Más información →
                    </span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Últimas Noticias -->
<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-slate-900 mb-4">Últimas Noticias</h2>
            <p class="text-lg text-gray-600">Mantente informado sobre nuestras actividades</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <?php
            $latest_news = new WP_Query(array(
                'post_type' => 'noticia',
                'posts_per_page' => 6,
            ));

            if ($latest_news->have_posts()) :
                while ($latest_news->have_posts()) : $latest_news->the_post();
            ?>
                    <article class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>" class="block overflow-hidden group">
                                <?php the_post_thumbnail('noticia-thumbnail', array('class' => 'w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500')); ?>
                            </a>
                        <?php endif; ?>

                        <div class="p-6">
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'departamento');
                            if ($terms && !is_wp_error($terms)) :
                                $term = array_shift($terms);
                            ?>
                                <span class="inline-block bg-blue-50 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full mb-3">
                                    <?php echo esc_html($term->name); ?>
                                </span>
                            <?php endif; ?>

                            <h3 class="text-xl font-bold mb-3 leading-tight">
                                <a href="<?php the_permalink(); ?>" class="text-slate-900 hover:text-blue-600 transition-colors">
                                    <?php the_title(); ?>
                                </a>
                            </h3>

                            <p class="text-gray-500 text-sm mb-3">
                                <?php echo get_the_date('d/m/Y'); ?>
                            </p>

                            <p class="text-gray-700 mb-4 line-clamp-3">
                                <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                            </p>

                            <a href="<?php the_permalink(); ?>" class="text-blue-600 font-medium text-sm hover:text-blue-700 transition-colors">
                                Leer más →
                            </a>
                        </div>
                    </article>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <p class="col-span-full text-center text-gray-600">No hay noticias disponibles.</p>
            <?php endif; ?>
        </div>

        <div class="text-center mt-12">
            <a href="<?php echo get_post_type_archive_link('noticia'); ?>"
                class="inline-block bg-white text-blue-600 border-2 border-blue-600 px-8 py-4 rounded-lg font-semibold hover:bg-blue-50 transition-colors shadow-md hover:shadow-lg">
                Ver Todas las Noticias
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>