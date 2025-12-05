<?php get_header(); ?>

<section class="relative min-h-[85vh] flex items-center bg-slate-900">
    <div class="absolute inset-0 z-0">
        <?php
        $hero_image = get_theme_mod('hero_background_image');
        if (!$hero_image && has_post_thumbnail()) {
            $hero_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
        }
        if (!$hero_image) {
            $hero_image = get_template_directory_uri() . '/assets/images/hero-default.jpg';
        }
        ?>
        <img src="<?php echo esc_url($hero_image); ?>"
            alt="SAEBU Universidad Nacional de San Luis"
            class="w-full h-full object-cover opacity-40">

        <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/90 to-slate-900/60"></div>
    </div>

    <div class="relative z-10 container mx-auto px-4 py-12">
        <div class="grid lg:grid-cols-[1.5fr_1fr] gap-12 items-center">

            <div class="space-y-6">
                <div class="inline-flex items-center gap-3 border-l-4 border-[#005eb8] pl-4">
                    <img class="w-8" src="<?php echo esc_url( get_template_directory_uri() ); ?>/logo-unsl-2.png" alt="">
                    <span class="text-sm text-gray-300 font-medium tracking-wide uppercase">Universidad Nacional de San Luis</span>
                </div>

                <div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-4">
                        Secretaría de <br>
                        Asuntos Estudiantiles y Bienestar Universitario
                    </h1>
                    <p class="text-lg text-gray-300 max-w-2xl leading-relaxed font-light">
                        Gestionamos y promovemos el bienestar de la comunidad universitaria a través de becas, salud, deportes y servicios esenciales.
                    </p>
                </div>

                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="<?php echo home_url('/servicios'); ?>"
                        class="inline-flex items-center gap-2 bg-[#416ed2] hover:bg-[#004a99] text-white px-8 py-3 rounded-md font-semibold transition-colors duration-300 shadow-sm">
                        <span>Nuestros Servicios</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                    <a href="<?php echo home_url('/institucional'); ?>"
                        class="inline-flex items-center gap-2 bg-transparent border border-white/30 hover:bg-white/10 text-white px-8 py-3 rounded-md font-medium transition-all duration-300">
                        <span>Institucional</span>
                    </a>
                </div>
            </div>

            <?php
            $menu_dia = saebu_get_menu_del_dia();
            if ($menu_dia) :
                $fecha = get_post_meta($menu_dia->ID, '_menu_fecha', true);
                $entrada = get_post_meta($menu_dia->ID, '_menu_entrada', true);
                $principal = get_post_meta($menu_dia->ID, '_menu_principal', true);
                $postre = get_post_meta($menu_dia->ID, '_menu_postre', true);
                $precio = get_post_meta($menu_dia->ID, '_menu_precio', true);
            ?>
                <div class="lg:pl-8">
                    <div class="bg-white rounded-lg shadow-xl overflow-hidden max-w-md mx-auto border-t-4 border-[#005eb8]">
                        <div class="bg-gray-50 p-5 border-b border-gray-200 flex justify-between items-center">
                            <div>
                                <h3 class="text-lg font-bold text-gray-800 flex items-center gap-2">
                                    <svg class="w-5 h-5 text-[#005eb8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                    Comedor Universitario
                                </h3>
                                <p class="text-sm text-gray-500">Menú del día</p>
                            </div>
                            <div class="text-center bg-[#416ed2] text-white px-3 py-1 rounded">
                                <span class="block text-xs uppercase">Hoy</span>
                                <span class="block text-lg font-bold leading-none"><?php echo date_i18n('d', strtotime($fecha)); ?></span>
                            </div>
                        </div>

                        <div class="p-6 space-y-4">
                            <?php if ($entrada): ?>
                                <div class="flex gap-4">
                                    <span class="text-xs font-bold text-gray-400 uppercase w-16 pt-1">Entrada</span>
                                    <span class="text-gray-800 font-medium flex-1"><?php echo esc_html($entrada); ?></span>
                                </div>
                            <?php endif; ?>

                            <?php if ($principal): ?>
                                <div class="flex gap-4">
                                    <span class="text-xs font-bold text-[#005eb8] uppercase w-16 pt-1">Principal</span>
                                    <span class="text-gray-900 font-semibold flex-1 text-lg"><?php echo esc_html($principal); ?></span>
                                </div>
                            <?php endif; ?>

                            <?php if ($postre): ?>
                                <div class="flex gap-4">
                                    <span class="text-xs font-bold text-gray-400 uppercase w-16 pt-1">Postre</span>
                                    <span class="text-gray-800 font-medium flex-1"><?php echo esc_html($postre); ?></span>
                                </div>
                            <?php endif; ?>

                            <?php if ($precio): ?>
                                <div class="mt-6 pt-4 border-t border-gray-100 flex justify-between items-center">
                                    <span class="text-sm text-gray-500">Valor del ticket</span>
                                    <span class="text-xl font-bold text-[#005eb8]"><?php echo esc_html($precio); ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>

<section class="bg-[#416ed2] py-8">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-white text-center divide-y md:divide-y-0 md:divide-x divide-white/20">
            <div class="px-4 py-2">
                <p class="text-3xl font-bold mb-1">+5</p>
                <p class="text-sm text-blue-100 uppercase tracking-wider">Departamentos</p>
            </div>
            <div class="px-4 py-2">
                <p class="text-3xl font-bold mb-1">+10</p>
                <p class="text-sm text-blue-100 uppercase tracking-wider">Servicios al Estudiante</p>
            </div>
            <div class="px-4 py-2">
                <p class="text-3xl font-bold mb-1">UNSL</p>
                <p class="text-sm text-blue-100 uppercase tracking-wider">Compromiso Público</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50 border-b border-gray-200">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">

            <div class="order-2 md:order-1">
                <h2 class="text-3xl font-bold text-gray-900 mb-6 border-b-2 border-[#005eb8] inline-block pb-2">
                    Sobre SAEBU
                </h2>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    La Secretaría de Asuntos Estudiantiles trabaja día a día para garantizar la igualdad de oportunidades y la permanencia de los estudiantes en la Universidad Nacional de San Luis.
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-[#005eb8] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Acompañamiento integral al estudiante.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-[#005eb8] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Gestión de becas y beneficios económicos.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-[#005eb8] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Promoción de la salud y el deporte.</span>
                    </li>
                </ul>
                <a href="<?php echo home_url('/institucional'); ?>" class="text-[#005eb8] font-semibold hover:text-[#004a99] transition-colors inline-flex items-center gap-2">
                    Conocer nuestras autoridades
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>

            <div class="order-1 md:order-2">
                <div class="relative bg-white p-2 rounded shadow-lg border border-gray-200">
                    <div class="aspect-video bg-gray-900 relative group overflow-hidden">
                        <video id="video-institucional-player"
                            class="w-full h-full object-cover"
                            poster="<?php echo get_template_directory_uri(); ?>/assets/images/video-poster.png">
                            <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/becas.mp4" type="video/mp4">
                        </video>

                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 group-hover:bg-black/20 transition-all cursor-pointer" id="play-pause-btn">
                            <div class="w-16 h-16 bg-white/90 rounded-full flex items-center justify-center shadow-md hover:scale-105 transition-transform play-icon">
                                <svg class="w-6 h-6 text-[#005eb8] ml-1" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-20 bg-[#cda2ff47]">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-3">Departamentos y Áreas</h2>
            <div class="w-20 h-1 bg-[#416ed2] mx-auto mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">Estructura organizativa al servicio de la comunidad universitaria.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto">
            <?php

            $departamentos = array(
                // Becas: Prioridad alta
                [
                    'name' => 'Becas',
                    'slug' => 'becas',
                    'desc' => 'Programas de apoyo económico y equidad.',
                    'icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z'
                ],
                // CeSEU
                [
                    'name' => 'Salud Estudiantil',
                    'slug' => 'ceseu',
                    'desc' => 'Atención primaria, prevención y cuidado.',
                    'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'
                ],
                // Comedor
                [
                    'name' => 'Comedor Universitario',
                    'slug' => 'comedor',
                    'desc' => 'Alimentación nutricional accesible.',
                    'icon' => 'M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z'
                ],
                // Deportes
                [
                    'name' => 'Deportes',
                    'slug' => 'dpto-deportes',
                    'desc' => 'Actividad física, recreación y competencia.',
                    'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'
                ],
                // Trabajo Social
                [
                    'name' => 'Trabajo Social',
                    'slug' => 'dpto-trabajo-social',
                    'desc' => 'Orientación, acompañamiento y asistencia.',
                    'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'
                ],
                // Mesa de Entradas
                [
                    'name' => 'Mesa de Entradas',
                    'slug' => 'dpto-mesa-de-entradas',
                    'desc' => 'Recepción y gestión de trámites.',
                    'icon' => 'M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4'
                ],
                // Contable
                [
                    'name' => 'Contable',
                    'slug' => 'dpto-contable',
                    'desc' => 'Administración financiera y presupuestaria.',
                    'icon' => 'M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z'
                ],
                // Compras
                [
                    'name' => 'Compras',
                    'slug' => 'dpto-compras',
                    'desc' => 'Contrataciones y adquisiciones institucionales.',
                    'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01'
                ],
                // Camping
                [
                    'name' => 'Camping',
                    'slug' => 'camping-universitario',
                    'desc' => 'Turismo, naturaleza y esparcimiento.',
                    'icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z'
                ],
                // Club Universitario
                [
                    'name' => 'Club Universitario',
                    'slug' => 'club-universitario',
                    'desc' => 'Espacio social y recreativo.',
                    'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'
                ]
            );


            foreach ($departamentos as $depto) : ?>
                <a href="<?php echo home_url('/' . $depto['slug']); ?>"
                    class="group bg-white border border-gray-200 rounded-md p-6 hover:border-[#005eb8] hover:shadow-md transition-all duration-300 flex items-start gap-4">
                    <div class="text-gray-400 group-hover:text-[#005eb8] transition-colors">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo $depto['icon']; ?>"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 group-hover:text-[#005eb8] mb-1 transition-colors"><?php echo $depto['name']; ?></h3>
                        <p class="text-sm text-gray-500"><?php echo $depto['desc']; ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-10">
            <a href="<?php echo home_url('/departamentos'); ?>" class="text-gray-600 hover:text-[#005eb8] font-medium text-sm underline decoration-gray-300 hover:decoration-[#005eb8] transition-all">
                Ver organigrama completo
            </a>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-100 border-t border-gray-200">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between mb-10 max-w-7xl mx-auto">
            <h2 class="text-2xl font-bold text-gray-900 border-l-4 border-[#005eb8] pl-3">Novedades Institucionales</h2>
            <a href="<?php echo get_post_type_archive_link('noticia'); ?>" class="text-sm font-semibold text-[#005eb8] hover:underline">Ver archivo de noticias &rarr;</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            <?php
            $latest_news = new WP_Query(array(
                'post_type' => 'noticia',
                'posts_per_page' => 3, // Solo 3 noticias principales para mantener el orden
            ));

            if ($latest_news->have_posts()) :
                while ($latest_news->have_posts()) : $latest_news->the_post();
            ?>
                    <article class="bg-white rounded-sm shadow-sm border border-gray-200 hover:shadow-md transition-shadow duration-300 flex flex-col h-full">
                        <a href="<?php the_permalink(); ?>" class="block relative aspect-video overflow-hidden bg-gray-200">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover transition-transform duration-500 hover:scale-105')); ?>
                            <?php else : ?>
                                <div class="w-full h-full flex items-center justify-center text-gray-400">
                                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            <?php endif; ?>



                            
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'departamento');
                            if ($terms && !is_wp_error($terms)) :
                                $term = array_shift($terms);
                            ?>
                                <span class="absolute bottom-0 left-0 bg-[#416ed2] text-white text-xs font-bold px-3 py-1">
                                    <?php echo esc_html($term->name); ?>
                                </span>
                            <?php endif; ?>




                        </a>

                        <div class="p-5 flex-1 flex flex-col">
                            <div class="text-xs text-gray-500 mb-2 font-medium">
                                <?php echo get_the_date('d \d\e F, Y'); ?>
                            </div>

                            <h3 class="text-lg font-bold text-gray-900 leading-tight mb-3 flex-1">
                                <a href="<?php the_permalink(); ?>" class="hover:text-[#005eb8] transition-colors">
                                    <?php the_title(); ?>
                                </a>
                            </h3>

                            <div class="text-gray-600 text-sm line-clamp-3 mb-4">
                                <?php the_excerpt(); ?>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="text-[#005eb8] text-sm font-semibold hover:underline mt-auto inline-block">
                                Leer noticia completa
                            </a>
                        </div>
                    </article>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const video = document.getElementById('video-institucional-player');
        const playBtn = document.getElementById('play-pause-btn');

        if (video && playBtn) {
            playBtn.addEventListener('click', function() {
                if (video.paused) {
                    video.play();
                    video.controls = true; // Activar controles nativos al reproducir
                    playBtn.style.display = 'none';
                }
            });

            video.addEventListener('pause', function() {
                if (!video.seeking) { // No mostrar overlay si solo se está moviendo la barra
                    video.controls = false;
                    playBtn.style.display = 'flex';
                }
            });
        }
    });
</script>

<?php get_footer(); ?>