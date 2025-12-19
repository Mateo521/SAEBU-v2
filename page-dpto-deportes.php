<?php

/**
 * Template Name: Educación Física y Deportes
 */
get_header();
?>

<main class="bg-white">

    <?php while (have_posts()) : the_post(); ?>

        <section class="relative bg-slate-900 text-white py-20 border-b-4 border-orange-600">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMSIgY3k9IjEiIHI9IjEiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4wNSkiLz48L3N2Zz4=')] opacity-20"></div>

            <div class="container mx-auto px-4 relative z-10">
                <div class="max-w-4xl mx-auto text-center">
                    <nav class="flex justify-center items-center gap-2 text-sm text-gray-400 mb-6 font-sans uppercase tracking-widest text-xs">
                        <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors font-bold">INICIO</a>
                        <span class="text-gray-600">/</span>
                        <?php
                        // Lógica para detectar padres (Jerarquía)
                        global $post;
                        if (is_page() && $post->post_parent) {
                            // Obtener ancestros (padres, abuelos...)
                            $ancestors = get_post_ancestors($post->ID);
                            // Invertimos el orden para que vaya de Padre -> Hijo
                            $ancestors = array_reverse($ancestors);
                            foreach ($ancestors as $ancestor_id) {
                        ?>
                                <a href="<?php echo get_permalink($ancestor_id); ?>" class="hover:text-white transition-colors font-bold">
                                    <?php echo get_the_title($ancestor_id); ?>
                                </a>
                                <span class="text-gray-600">/</span>
                        <?php
                            }
                        }
                        ?>
                        <span class="text-white font-bold">
                            <?php the_title(); ?>
                        </span>
                    </nav>
                    <h1 class="text-3xl md:text-5xl font-bold mb-6 leading-tight  tracking-tight text-white">
                        <?php the_title(); ?>
                    </h1>
                    <div class="w-24 h-1 bg-[#416ed2] mx-auto mb-6"></div>
                    <div class="text-xl text-gray-300 max-w-2xl mx-auto font-light leading-relaxed font-sans">
                        <?php
                        if (has_excerpt()) {
                            echo get_the_excerpt();
                        } else {
                            // Fallback opcional si no cargaron extracto
                            echo 'Información institucional y servicios de ' . get_the_title();
                        }
                        ?>
                    </div>
                </div>
            </div>


        </section>

        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="grid lg:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-3">
                            <span class="w-2 h-8 bg-blue-900 rounded-sm"></span>
                            El Deporte en la universidad
                        </h2>
                        <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                            Consideramos la actividad física no solo como un medio para la salud, sino como una herramienta pedagógica fundamental para la formación integral de nuestros estudiantes.
                        </p>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <div class="p-1 bg-blue-100 rounded text-blue-800 mt-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg></div>
                                <span class="text-gray-700"><strong>Salud y bienestar:</strong> Mejora la calidad de vida y reduce el estrés académico.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="p-1 bg-blue-100 rounded text-blue-800 mt-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg></div>
                                <span class="text-gray-700"><strong>Inclusión social:</strong> Un espacio de encuentro e igualdad para toda la comunidad.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="p-1 bg-blue-100 rounded text-blue-800 mt-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg></div>
                                <span class="text-gray-700"><strong>Valores:</strong> Fomento de la solidaridad, el trabajo en equipo y el respeto.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-gray-50 p-6 rounded-lg ">
                            <span class="block text-3xl font-bold text-gray-900 mb-1">+15</span>
                            <span class="text-sm text-gray-500 uppercase font-semibold">Disciplinas</span>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-lg ">
                            <span class="block text-3xl font-bold text-gray-900 mb-1">100%</span>
                            <span class="text-sm text-gray-500 uppercase font-semibold">Gratuito</span>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-lg ">
                            <span class="block text-3xl font-bold text-gray-900 mb-1">3</span>
                            <span class="text-sm text-gray-500 uppercase font-semibold">Centros deportivos</span>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-lg ">
                            <span class="block text-3xl font-bold text-gray-900 mb-1">JUR</span>
                            <span class="text-sm text-gray-500 uppercase font-semibold">Competencia regional</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="disciplinas" class="py-16 bg-gray-50 border-y border-gray-200">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-10">
                        <h2 class="text-3xl font-bold text-gray-900">Nuestras disciplinas</h2>
                        <p class="text-gray-500 mt-2">Disponibles en modalidad recreativa y competitiva</p>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
                        <?php
                        $disciplinas = [
                            ['nombre' => 'Atletismo', 'icono' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                            ['nombre' => 'Básquetbol', 'icono' => 'M12 2a10 10 0 1 0 10 10A10.009 10.009 0 0 0 12 2Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.093 20.093 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM10 3.707a8.82 8.82 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.755 45.755 0 0 0 10 3.707Zm-6.358 6.555a8.57 8.57 0 0 1 4.73-5.981 53.99 53.99 0 0 1 3.168 4.941 32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.641 31.641 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM12 20.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 15.113 13a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z'],
                            ['nombre' => 'Fútbol', 'icono' => 'M4.37 7.657c2.063.528 2.396 2.806 3.202 3.87 1.07 1.413 2.075 1.228 3.192 2.644 1.805 2.289 1.312 5.705 1.312 6.705M20 15h-1a4 4 0 0 0-4 4v1M8.587 3.992c0 .822.112 1.886 1.515 2.58 1.402.693 2.918.351 2.918 2.334 0 .276 0 2.008 1.972 2.008 2.026.031 2.026-1.678 2.026-2.008 0-.65.527-.9 1.177-.9H20M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z'],
                            ['nombre' => 'Vóley', 'icono' => 'M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5'],
                            ['nombre' => 'Rugby', 'icono' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'],
                            ['nombre' => 'Hockey', 'icono' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                            ['nombre' => 'Hándball', 'icono' => 'M21 12a9 9 0 11-18 0 9 9 0 0118 0z M9 10h.01 M15 10h.01'],
                            ['nombre' => 'Tenis de Mesa', 'icono' => 'M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                            ['nombre' => 'Ajedrez', 'icono' => 'M12 18.5A2.493 2.493 0 0 1 7.51 20H7.5a2.468 2.468 0 0 1-2.4-3.154 2.98 2.98 0 0 1-.85-5.274 2.468 2.468 0 0 1 .92-3.182 2.477 2.477 0 0 1 1.876-3.344 2.5 2.5 0 0 1 3.41-1.856A2.5 2.5 0 0 1 12 5.5m0 13v-13m0 13a2.493 2.493 0 0 0 4.49 1.5h.01a2.468 2.468 0 0 0 2.403-3.154 2.98 2.98 0 0 0 .847-5.274 2.468 2.468 0 0 0-.921-3.182 2.477 2.477 0 0 0-1.875-3.344A2.5 2.5 0 0 0 14.5 3 2.5 2.5 0 0 0 12 5.5m-8 5a2.5 2.5 0 0 1 3.48-2.3m-.28 8.551a3 3 0 0 1-2.953-5.185M20 10.5a2.5 2.5 0 0 0-3.481-2.3m.28 8.551a3 3 0 0 0 2.954-5.185'],
                            ['nombre' => 'Karate', 'icono' => 'M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z'],
                            ['nombre' => 'Yoga', 'icono' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'],
                            ['nombre' => 'Aeróbica', 'icono' => 'M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                            ['nombre' => 'Ritmos', 'icono' => 'M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3'],
                            ['nombre' => 'Gimnasio', 'icono' => 'M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4'],
                            ['nombre' => 'Funcional', 'icono' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                        ];

                        foreach ($disciplinas as $deporte) : ?>
                            <div class="bg-white border border-gray-200 rounded p-4 flex flex-col items-center justify-center hover:border-orange-500 hover:shadow-md transition-all duration-300 group cursor-default">
                                <div class="text-gray-400 group-hover:text-orange-500 transition-colors mb-3">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="<?php echo $deporte['icono']; ?>"></path>
                                    </svg>
                                </div>
                                <span class="font-bold text-sm text-gray-800 text-center"><?php echo $deporte['nombre']; ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="text-center mt-8">
                        <span class="inline-flex items-center text-sm text-gray-500 bg-white px-4 py-2 rounded border border-gray-200 shadow-sm">
                            <svg class="w-4 h-4 text-orange-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Incluye seguro de asistencia deportiva
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-2xl font-bold text-center text-gray-900 mb-10">Sedes y Centros deportivos</h2>

                <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">
                    <div class="border border-gray-200 rounded-lg overflow-hidden group">
                        <div class="bg-slate-800 p-4 text-white">
                            <h3 class="font-bold text-lg">Sede San Luis</h3>
                        </div>
                        <div class="p-6 bg-white">
                            <p class="text-gray-600 text-sm mb-4">Centro principal de actividades deportivas y administrativas.</p>
                            <div class="flex items-start gap-3 text-sm text-gray-500">
                                <svg class="w-5 h-5 text-orange-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span>Rivadavia 1029 (1er Piso)</span>
                            </div>
                        </div>
                    </div>

                    <div class="border border-gray-200 rounded-lg overflow-hidden group">
                        <div class="bg-slate-700 p-4 text-white">
                            <h3 class="font-bold text-lg">Sede Villa Mercedes</h3>
                        </div>
                        <div class="p-6 bg-white">
                            <p class="text-gray-600 text-sm mb-4">Instalaciones completas para el campus de ingeniería y ciencias.</p>
                            <div class="flex items-start gap-3 text-sm text-gray-500">
                                <svg class="w-5 h-5 text-orange-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span>Consultar ubicación en campus</span>
                            </div>
                        </div>
                    </div>

                    <div class="border border-gray-200 rounded-lg overflow-hidden group">
                        <div class="bg-slate-700 p-4 text-white">
                            <h3 class="font-bold text-lg">Sede Villa de Merlo</h3>
                        </div>
                        <div class="p-6 bg-white">
                            <p class="text-gray-600 text-sm mb-4">Actividades recreativas y turismo universitario.</p>
                            <div class="flex items-start gap-3 text-sm text-gray-500">
                                <svg class="w-5 h-5 text-orange-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span>Campus universitario Barranca Colorada</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-slate-50 border-t border-gray-200">
            <div class="container mx-auto px-4">
                <div class="max-w-5xl mx-auto flex flex-col md:flex-row gap-8 items-center">
                    <div class="md:w-1/3 text-center md:text-right">
                        <h3 class="text-2xl font-bold text-blue-900 mb-2">Competencia regional</h3>
                        <div class="text-6xl font-black text-gray-600">JUR</div>
                        <p class="text-sm font-bold text-gray-500 uppercase tracking-widest mt-2">Juegos universitarios regionales</p>
                    </div>
                    <div class="md:w-2/3 border-l-4 border-orange-500 pl-8">
                        <p class="text-gray-700 mb-4 leading-relaxed">
                            Nuestros equipos representan a la UNSL en competencias organizadas por la <strong>FEDUA</strong> (Federación del Deporte Universitario Argentina).
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-white border border-gray-300 rounded text-xs font-semibold text-gray-600">San Luis</span>
                            <span class="px-3 py-1 bg-white border border-gray-300 rounded text-xs font-semibold text-gray-600">Mendoza</span>
                            <span class="px-3 py-1 bg-white border border-gray-300 rounded text-xs font-semibold text-gray-600">San Juan</span>
                            <span class="px-3 py-1 bg-white border border-gray-300 rounded text-xs font-semibold text-gray-600">La Rioja</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="container mx-auto px-4 max-w-6xl">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 border-l-4 border-orange-600 pl-3">Actualidad deportiva</h2>
                    <a href="<?php echo get_category_link(get_cat_ID('deportes')); ?>" class="text-orange-700 text-sm font-semibold hover:underline">Ver archivo &rarr;</a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <?php
                    $args = array(
                        'post_type'      => 'noticia',
                        'posts_per_page' => 3,
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                        'tax_query'      => array(
                            array(
                                'taxonomy' => 'departamento',
                                'field'    => 'slug',
                                'terms'    => 'dpto-deportes',
                            ),
                        ),
                    );

                    $deportes_query = new WP_Query($args);


                    if ($deportes_query->have_posts()) :
                        while ($deportes_query->have_posts()) : $deportes_query->the_post();
                    ?>
                            <article class="bg-white rounded border border-gray-200 overflow-hidden hover:border-orange-300 transition-colors group">
                                <div class="h-48 overflow-hidden bg-gray-100 relative">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium', ['class' => 'w-full h-full object-cover transition-transform duration-500 group-hover:scale-105']); ?>
                                    <?php else : ?>
                                        <div class="w-full h-full flex items-center justify-center text-gray-300">
                                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="p-5">
                                    <span class="text-xs text-orange-800 font-bold uppercase mb-2 block">Novedades</span>
                                    <h3 class="text-lg font-bold text-gray-900 mb-2 leading-tight">
                                        <a href="<?php the_permalink(); ?>" class="hover:underline"><?php the_title(); ?></a>
                                    </h3>
                                    <div class="text-sm text-gray-500 mt-4"><?php echo get_the_date(); ?></div>
                                </div>
                            </article>
                        <?php endwhile;
                        wp_reset_postdata();
                    else : ?>
                        <div class="col-span-3 text-center py-8 text-gray-500 bg-gray-50 rounded">
                            No hay noticias deportivas recientes.
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section id="contacto" class="bg-blue-900 py-16 text-white">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-2xl font-bold mb-6">Sumate al deporte universitario</h2>
                    <div class="flex flex-col md:flex-row justify-center gap-8 items-center">
                        <div class="flex items-center gap-3">
                            <div class="p-3 bg-white/10 rounded-full">
                                <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="text-left">
                                <span class="block text-xs text-blue-200 uppercase font-bold">Email</span>
                                <a href="mailto:unsldeportes@gmail.com" class="font-medium hover:text-white transition-colors">unsldeportes@gmail.com</a>
                            </div>
                        </div>

                        <div class="h-8 w-px bg-white/20 hidden md:block"></div>

                        <div class="flex items-center gap-3">
                            <div class="p-3 bg-white/10 rounded-full">
                                <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div class="text-left">
                                <span class="block text-xs text-blue-200 uppercase font-bold">Teléfono</span>
                                <a href="tel:+542664426046" class="font-medium hover:text-white transition-colors">2664 442-6046</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>




</main>

<?php get_footer(); ?>