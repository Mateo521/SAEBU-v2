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
                    <nav class="flex justify-center items-center gap-2 text-sm text-gray-400 mb-6">
                        <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors">Inicio</a>
                        <span>/</span>
                        <span class="text-white font-medium">Deportes</span>
                    </nav>

                    <h1 class="text-3xl md:text-5xl font-bold mb-6 uppercase tracking-tight">
                        Departamento de Educación Física y Deporte
                    </h1>

                    <div class="w-24 h-1 bg-orange-600 mx-auto mb-6"></div>

                    <p class="text-xl text-gray-300 max-w-2xl mx-auto font-light leading-relaxed">
                        Promovemos la vida saludable, la integración social y los valores a través de la práctica deportiva universitaria.
                    </p>

                    <div class="mt-8 flex justify-center gap-4">
                        <a href="#disciplinas" class="px-6 py-3 bg-orange-600 hover:bg-orange-700 text-white font-bold rounded transition-colors">
                            Ver Disciplinas
                        </a>
                        <a href="#contacto" class="px-6 py-3 border border-gray-500 hover:border-white text-white font-medium rounded transition-colors">
                            Contacto
                        </a>
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
                            El Deporte en la Universidad
                        </h2>
                        <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                            Consideramos la actividad física no solo como un medio para la salud, sino como una herramienta pedagógica fundamental para la formación integral de nuestros estudiantes.
                        </p>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <div class="p-1 bg-blue-100 rounded text-blue-800 mt-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg></div>
                                <span class="text-gray-700"><strong>Salud y Bienestar:</strong> Mejora la calidad de vida y reduce el estrés académico.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="p-1 bg-blue-100 rounded text-blue-800 mt-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg></div>
                                <span class="text-gray-700"><strong>Inclusión Social:</strong> Un espacio de encuentro e igualdad para toda la comunidad.</span>
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
                        <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-orange-500">
                            <span class="block text-3xl font-bold text-gray-900 mb-1">+15</span>
                            <span class="text-sm text-gray-500 uppercase font-semibold">Disciplinas</span>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-blue-900">
                            <span class="block text-3xl font-bold text-gray-900 mb-1">100%</span>
                            <span class="text-sm text-gray-500 uppercase font-semibold">Gratuito</span>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-blue-900">
                            <span class="block text-3xl font-bold text-gray-900 mb-1">3</span>
                            <span class="text-sm text-gray-500 uppercase font-semibold">Centros Deportivos</span>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-orange-500">
                            <span class="block text-3xl font-bold text-gray-900 mb-1">JUR</span>
                            <span class="text-sm text-gray-500 uppercase font-semibold">Competencia Regional</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="disciplinas" class="py-16 bg-gray-50 border-y border-gray-200">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-10">
                        <h2 class="text-3xl font-bold text-gray-900">Nuestras Disciplinas</h2>
                        <p class="text-gray-500 mt-2">Disponibles en modalidad recreativa y competitiva</p>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
                        <?php
                        $disciplinas = [
                            ['nombre' => 'Atletismo', 'icono' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                            ['nombre' => 'Básquetbol', 'icono' => 'M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                            ['nombre' => 'Fútbol', 'icono' => 'M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                            ['nombre' => 'Vóley', 'icono' => 'M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5'],
                            ['nombre' => 'Rugby', 'icono' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'],
                            ['nombre' => 'Hockey', 'icono' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                            ['nombre' => 'Hándball', 'icono' => 'M21 12a9 9 0 11-18 0 9 9 0 0118 0z M9 10h.01 M15 10h.01'],
                            ['nombre' => 'Tenis de Mesa', 'icono' => 'M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                            ['nombre' => 'Ajedrez', 'icono' => 'M11 6.5h2M11 18h2m-7-5v-2m12 2v-2'],
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
                <h2 class="text-2xl font-bold text-center text-gray-900 mb-10">Sedes y Centros Deportivos</h2>

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
                                <span>Campus Universitario Barranca Colorada</span>
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
                        <h3 class="text-2xl font-bold text-blue-900 mb-2">Competencia Regional</h3>
                        <div class="text-6xl font-black text-gray-200">JUR</div>
                        <p class="text-sm font-bold text-gray-500 uppercase tracking-widest mt-2">Juegos Universitarios Regionales</p>
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
                    <h2 class="text-2xl font-bold text-gray-900 border-l-4 border-orange-600 pl-3">Actualidad Deportiva</h2>
                    <a href="<?php echo get_category_link(get_cat_ID('deportes')); ?>" class="text-orange-700 text-sm font-semibold hover:underline">Ver archivo &rarr;</a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <?php
                    $args = ['post_type' => 'post', 'posts_per_page' => 3, 'category_name' => 'deportes'];
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
                                    <span class="text-xs text-orange-600 font-bold uppercase mb-2 block">Novedades</span>
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
                    <h2 class="text-2xl font-bold mb-6">Sumate al Deporte Universitario</h2>
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


    <?php
    saebu_noticias_departamento(array(
        'slug'        => 'dpto-deportes',
        'nombre'      => 'Dpto. Deportes',
        'color'       => 'orange',
        'descripcion' => 'Actividades deportivas, torneos y entrenamientos.',
        'posts_count' => 3,
        'icono'       => 'M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
    ));
    ?>

</main>

<?php get_footer(); ?>