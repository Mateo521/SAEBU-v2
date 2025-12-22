<?php

/**
 * Template Name: Centro de Salud estudiantil
 */
get_header();
?>

<main class="bg-gray-50">

    <?php while (have_posts()) : the_post(); ?>

        <section class="relative bg-slate-900 text-white py-20 border-b-4 border-pink-600">
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

        <section class="py-16 bg-white border-b border-gray-200">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl font-bold text-gray-900">Nuestras Sedes</h2>
                        <p class="text-gray-500 mt-2">Atención presencial en San Luis y Villa Mercedes</p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="border border-gray-200 rounded-lg p-8 hover:border-pink-500 transition-colors duration-300 group bg-white shadow-sm">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="p-3 bg-pink-50 text-pink-700 rounded-md group-hover:bg-pink-600 group-hover:text-white transition-colors">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900">Sede San Luis</h3>
                                    <span class="text-sm text-pink-600 font-semibold">Rivadavia 1359</span>
                                </div>
                            </div>
                            <div class="space-y-3 text-sm text-gray-600">
                                <p class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Lunes a viernes de 8:00 a 13:00 hs
                                </p>
                                <p class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                    <a href="tel:2664520322" class="hover:text-pink-600 font-medium">2664520322 - Interno 8820</a>
                                </p>
                                <p class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    <a href="mailto:centrodesaludunsl@gmail.com" class="hover:text-pink-600">centrodesaludunsl@gmail.com</a>
                                </p>
                            </div>
                        </div>

                        <div class="border border-gray-200 rounded-lg p-8 hover:border-purple-500 transition-colors duration-300 group bg-white shadow-sm">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="p-3 bg-purple-50 text-purple-700 rounded-md group-hover:bg-purple-600 group-hover:text-white transition-colors">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900">Sede Villa Mercedes</h3>
                                    <span class="text-sm text-purple-600 font-semibold">Junín 269</span>
                                </div>
                            </div>
                            <div class="space-y-3 text-sm text-gray-600">
                                <p class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Lunes a viernes de 8:00 a 13:00 hs
                                </p>
                                <p class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                    <a href="tel:2657531030" class="hover:text-purple-600 font-medium">2657531030</a>
                                </p>
                                <p class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    <a href="mailto:cuseunsl@gmail.com" class="hover:text-purple-600">cuseunsl@gmail.com</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded-r flex items-start gap-3">
                        <svg class="w-6 h-6 text-yellow-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                        <div>
                            <h4 class="text-sm font-bold text-yellow-800">Protocolo de Atención</h4>
                            <p class="text-sm text-yellow-700 mt-1">Para garantizar una mejor atención y seguridad, solicitamos asistir a los centros de salud con <strong>turno programado</strong>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Especialidades médicas</h2>

                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                        <?php
                        $especialidades = [
                            'Enfermería',
                            'Medicina general',
                            'Kinesiología',
                            'Nutrición',
                            'Psicología',
                            'Odontología',
                            'Ginecología',
                            'Oftalmología',
                            'Fonoaudiología',
                            'Análisis clínicos'
                        ];
                        foreach ($especialidades as $esp):
                        ?>
                            <div class="bg-white border border-gray-200 rounded p-4 text-center hover:border-pink-400 hover:shadow-md transition-all cursor-default">
                                <div class="text-pink-600 mb-2 flex justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <span class="font-medium text-gray-800 text-sm"><?php echo $esp; ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="max-w-5xl mx-auto">
                    <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Trámites y programas</h2>

                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="bg-gray-50 rounded-lg border border-gray-200 p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="p-2 bg-purple-100 text-purple-700 rounded">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900">Certificado de Salud para Ingreso</h3>
                            </div>

                            <div class="space-y-4">
                                <div>
                                    <h4 class="text-sm font-bold text-gray-800 uppercase">Requisitos</h4>
                                    <ul class="mt-2 space-y-2 text-sm text-gray-600">
                                        <li class="flex items-start gap-2">• DNI (Frente y dorso).</li>
                                        <li class="flex items-start gap-2">• Certificado de alumno regular vigente.</li>
                                        <li class="flex items-start gap-2">• Certificación negativa de ANSES (si no posee obra social).</li>
                                    </ul>
                                </div>

                                <div class="bg-white p-4 rounded border border-gray-200 text-sm">
                                    <p class="mb-2"><strong>¿Cómo presentarlo?</strong></p>
                                    <p class="text-gray-600 mb-2">Enviar resultados de análisis y carnet de vacunación en PDF al email de tu sede.</p>
                                    <a href="https://forms.gle/dMUhyxNZgBmgbnvy8" target="_blank" class="text-pink-600 hover:underline font-semibold">Completar formulario web &rarr;</a>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="bg-gray-50 rounded-lg border border-gray-200 p-6">
                                <h3 class="font-bold text-gray-900 mb-2 flex items-center gap-2">
                                    <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    Comedor sin TACC
                                </h3>
                                <p class="text-sm text-gray-600 mb-3">Gestión de menú especial para estudiantes celíacos.</p>
                                <div class="text-xs bg-white p-3 rounded border border-gray-100 text-gray-500">
                                    Solicitar turno de Lunes a Viernes (9 a 13hs) y asistir con diagnóstico médico.
                                </div>
                            </div>

                            <div class="bg-gray-50 rounded-lg border border-gray-200 p-6">
                                <h3 class="font-bold text-gray-900 mb-2 flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                    </svg>
                                    Programa REMEDIAR
                                </h3>
                                <p class="text-sm text-gray-600">
                                    Entrega gratuita de medicamentos recetados (sujeto a stock) en ambas sedes durante el horario de atención.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-gray-50 border-t border-gray-200">
            <div class="container mx-auto px-4 max-w-6xl">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 border-l-4 border-pink-600 pl-3">Novedades CeSEU</h2>
                    <a href="<?php echo get_post_type_archive_link('noticia'); ?>" class="text-pink-700 text-sm font-semibold hover:underline">Ver archivo &rarr;</a>
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
                                'terms'    => 'ceseu',
                            ),
                        ),
                    );
                    $news_query = new WP_Query($args);

                    if ($news_query->have_posts()) :
                        while ($news_query->have_posts()) : $news_query->the_post();
                    ?>
                            <article class="bg-white rounded border border-gray-200 overflow-hidden hover:border-pink-300 transition-colors group">
                                <div class="h-48 overflow-hidden bg-gray-100 relative">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium', ['class' => 'w-full h-full object-cover transition-transform duration-500 group-hover:scale-105']); ?>
                                    <?php else : ?>
                                        <div class="w-full h-full flex items-center justify-center text-gray-300">
                                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                            </svg>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="p-5">
                                    <span class="text-xs text-pink-600 font-bold uppercase mb-2 block">Salud</span>
                                    <h3 class="text-lg font-bold text-gray-900 mb-2 leading-tight">
                                        <a href="<?php the_permalink(); ?>" class="hover:underline"><?php the_title(); ?></a>
                                    </h3>
                                    <div class="text-sm text-gray-500 mt-4"><?php echo get_the_date(); ?></div>
                                </div>
                            </article>
                        <?php endwhile;
                        wp_reset_postdata();
                    else : ?>
                        <div class="col-span-3 text-center py-8 text-gray-500 bg-white border border-gray-200 rounded">
                            No hay noticias de salud recientes.
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="bg-slate-900 py-16 text-white border-t-4 border-purple-600">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-2xl font-bold mb-4">¿Consultas Médicas?</h2>
                <p class="text-gray-300 mb-8 max-w-2xl mx-auto">
                    Comunicate telefónicamente con tu sede más cercana para solicitar turnos o recibir asesoramiento.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="tel:2664520322" class="inline-flex items-center justify-center gap-2 bg-pink-600 hover:bg-pink-700 text-white px-6 py-3 rounded font-bold transition-colors">
                        Llamar a San Luis
                    </a>
                    <a href="tel:2657531030" class="inline-flex items-center justify-center gap-2 bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded font-bold transition-colors">
                        Llamar a Villa Mercedes
                    </a>
                </div>
            </div>
        </section>

    <?php endwhile; ?>



</main>

<?php get_footer(); ?>