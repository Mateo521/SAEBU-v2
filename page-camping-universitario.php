<?php

/**
 * Template Name: Complejo Turístico La Florida
 */
get_header();
?>

<main class="bg-gray-50">

    <?php while (have_posts()) : the_post(); ?>


        <section class="relative bg-[#1a4731] text-white py-20 border-b-4 border-green-600 overflow-hidden">

            <?php
            $hero_image = get_template_directory_uri() . '/assets/images/camping/banner.jpg';
            ?>
            <img class="absolute inset-0 w-full h-full object-cover opacity-70 mix-blend-overlay" src="<?php echo esc_url($hero_image); ?>" alt="Paisaje La Florida">

            <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>

            <div class="container mx-auto px-4 relative z-10">
                <div class="max-w-4xl mx-auto text-center">
                    <nav class="flex justify-center items-center gap-2 text-sm text-green-200 mb-6">
                        <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors">Inicio</a>
                        <span>/</span>
                        <span class="text-white font-medium">Complejo La Florida</span>
                    </nav>

                    <h1 class="text-3xl md:text-5xl font-bold mb-6 leading-tight">
                        Complejo Turístico y Recreativo La Florida
                    </h1>

                    <div class="w-24 h-1 bg-green-500 mx-auto mb-6"></div>

                    <p class="text-xl text-green-100 max-w-2xl mx-auto font-light leading-relaxed">
                        Un espacio natural a orillas del dique, equipado para el descanso, el deporte y la recreación al aire libre.
                    </p>

                    <div class="mt-8 inline-flex items-center gap-2 bg-green-900/50 border border-green-500/30 px-6 py-3 rounded-lg text-sm backdrop-blur-sm">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Ruta Provincial Nº 39, La Florida (A 45 km de San Luis)</span>
                    </div>
                </div>
            </div>
        </section>


        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Servicios e Instalaciones</h2>
                        <p class="text-gray-600 max-w-3xl mx-auto">
                            El complejo ofrece infraestructura completa para garantizar una estadía cómoda y segura.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <?php
                        $servicios = [
                            ['titulo' => 'Recreación', 'desc' => 'Actividades deportivas para todas las edades.', 'icon' => 'M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                            ['titulo' => 'Enfermería', 'desc' => 'Servicio de primeros auxilios disponible.', 'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'],
                            ['titulo' => 'Playas Habilitadas', 'desc' => 'Sectores boyados con servicio de guardavidas.', 'icon' => 'M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z'],
                            ['titulo' => 'Sanitarios', 'desc' => 'Duchas con agua caliente y baños completos.', 'icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707'],
                            ['titulo' => 'Estacionamiento', 'desc' => 'Cocheras techadas para vehículos.', 'icon' => 'M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2'],
                            ['titulo' => 'Náutica', 'desc' => 'Desembarcadero para embarcaciones y kayaks.', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                            ['titulo' => 'Juegos Infantiles', 'desc' => 'Plazas y espacios exclusivos para niños.', 'icon' => 'M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5'],
                            ['titulo' => 'Pesca', 'desc' => 'Zonas habilitadas para pesca deportiva.', 'icon' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343'],
                            ['titulo' => 'Proveeduría', 'desc' => 'Buffet, parrilla y quincho cerrado.', 'icon' => 'M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z']
                        ];

                        foreach ($servicios as $servicio) : ?>
                            <div class="flex items-start gap-4 p-5 border border-gray-200 rounded-lg hover:border-green-600 hover:shadow-md transition-all duration-300 group bg-white">
                                <div class="text-green-700 bg-green-50 p-3 rounded-lg group-hover:bg-green-700 group-hover:text-white transition-colors">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo $servicio['icon']; ?>"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-900 mb-1 text-base"><?php echo $servicio['titulo']; ?></h3>
                                    <p class="text-sm text-gray-600"><?php echo $servicio['desc']; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-green-50/50 border-t border-gray-200">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-10">
                        <h2 class="text-2xl font-bold text-gray-900">Opciones de Alojamiento</h2>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden flex flex-col">
                            <div class="bg-green-700 p-4 text-white">
                                <h3 class="font-bold text-lg flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                    </svg>
                                    Camping y Acampe
                                </h3>
                            </div>
                            <div class="p-6 flex-1">
                                <p class="text-gray-600 mb-4">Parcelas delimitadas por cercos ligustrinos para mayor privacidad.</p>
                                <ul class="space-y-3">
                                    <li class="flex items-start gap-3 text-sm text-gray-700">
                                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span><strong>Parcelas con Quincho:</strong> Incluyen asador individual, agua y electricidad.</span>
                                    </li>
                                    <li class="flex items-start gap-3 text-sm text-gray-700">
                                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span><strong>Parcelas generales:</strong> Con asador, mesa, agua y electricidad.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden flex flex-col">
                            <div class="bg-green-800 p-4 text-white">
                                <h3 class="font-bold text-lg flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                    Cabañas Equipadas
                                </h3>
                            </div>
                            <div class="p-6 flex-1">
                                <p class="text-gray-600 mb-4">Alojamiento confortable con vistas panorámicas al dique.</p>
                                <ul class="space-y-3">
                                    <li class="flex items-start gap-3 text-sm text-gray-700">
                                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Capacidad para <strong>6 personas</strong>.</span>
                                    </li>
                                    <li class="flex items-start gap-3 text-sm text-gray-700">
                                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Totalmente equipadas con cocina y baño privado.</span>
                                    </li>
                                    <li class="flex items-start gap-3 text-sm text-gray-700">
                                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Accesibles para personas con movilidad reducida.</span>
                                    </li>
                                </ul>
                                <div class="mt-4 pt-4 border-t border-gray-100 text-sm text-green-800 font-semibold">
                                    Requiere reserva previa.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="max-w-5xl mx-auto">
                    <div class="text-center mb-8">
                        <h2 class="text-2xl font-bold text-gray-900">Tarifas Vigentes</h2>
                        <p class="text-sm text-gray-500">Temporada 2024</p>
                    </div>

                    <div class="overflow-x-auto bg-white border border-gray-200 rounded-lg shadow-sm">
                        <table class="w-full text-sm text-left text-gray-600">
                            <thead class="text-xs text-white uppercase bg-green-700">
                                <tr>
                                    <th scope="col" class="px-6 py-4 font-bold">Categoría</th>
                                    <th scope="col" class="px-6 py-4 text-center">Día de Campo</th>
                                    <th scope="col" class="px-6 py-4 text-center">Acampe</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr class="bg-white hover:bg-gray-50">
                                    <td class="px-6 py-4 font-medium text-gray-900">Estudiantes UNSL / Esc. Normal</td>
                                    <td class="px-6 py-4 text-center font-bold text-green-700"><?php echo get_field('tarifa_estudiantes_dia') ?: '$XXX'; ?></td>
                                    <td class="px-6 py-4 text-center font-bold text-green-700"><?php echo get_field('tarifa_estudiantes_acampar') ?: '$XXX'; ?></td>
                                </tr>
                                <tr class="bg-gray-50 hover:bg-gray-100">
                                    <td class="px-6 py-4 font-medium text-gray-900">Aportantes Código 77</td>
                                    <td class="px-6 py-4 text-center font-bold text-green-700"><?php echo get_field('tarifa_aportantes_dia') ?: '$XXX'; ?></td>
                                    <td class="px-6 py-4 text-center font-bold text-green-700"><?php echo get_field('tarifa_aportantes_acampar') ?: '$XXX'; ?></td>
                                </tr>
                                <tr class="bg-white hover:bg-gray-50">
                                    <td class="px-6 py-4 font-medium text-gray-900">Invitados de Aportantes</td>
                                    <td class="px-6 py-4 text-center font-bold text-green-700"><?php echo get_field('tarifa_invitados_dia') ?: '$XXX'; ?></td>
                                    <td class="px-6 py-4 text-center font-bold text-green-700"><?php echo get_field('tarifa_invitados_acampar') ?: '$XXX'; ?></td>
                                </tr>
                                <tr class="bg-gray-50 hover:bg-gray-100">
                                    <td class="px-6 py-4 font-medium text-gray-900">Personal Universitario</td>
                                    <td class="px-6 py-4 text-center font-bold text-green-700"><?php echo get_field('tarifa_personal_dia') ?: '$XXX'; ?></td>
                                    <td class="px-6 py-4 text-center font-bold text-green-700"><?php echo get_field('tarifa_personal_acampar') ?: '$XXX'; ?></td>
                                </tr>
                                <tr class="bg-white hover:bg-gray-50">
                                    <td class="px-6 py-4 font-medium text-gray-900">Jubilados (Aportantes +10 años)</td>
                                    <td class="px-6 py-4 text-center font-bold text-green-700"><?php echo get_field('tarifa_jubilados_dia') ?: '$XXX'; ?></td>
                                    <td class="px-6 py-4 text-center font-bold text-green-700"><?php echo get_field('tarifa_jubilados_acampar') ?: '$XXX'; ?></td>
                                </tr>
                                <tr class="bg-gray-50 hover:bg-gray-100">
                                    <td class="px-6 py-4 font-medium text-gray-900">Personas con discapacidad</td>
                                    <td class="px-6 py-4 text-center font-bold text-green-700">Sin Cargo</td>
                                    <td class="px-6 py-4 text-center font-bold text-green-700">Sin Cargo</td>
                                </tr>
                                <tr class="bg-white hover:bg-gray-50">
                                    <td class="px-6 py-4 font-medium text-gray-900">Particulares</td>
                                    <td class="px-6 py-4 text-center font-bold text-green-700"><?php echo get_field('tarifa_particulares_dia') ?: '$XXX'; ?></td>
                                    <td class="px-6 py-4 text-center font-bold text-green-700"><?php echo get_field('tarifa_particulares_acampar') ?: '$XXX'; ?></td>
                                </tr>
                                <tr class="bg-gray-50 hover:bg-gray-100">
                                    <td class="px-6 py-4 font-medium text-gray-900">Menores de 6 años</td>
                                    <td class="px-6 py-4 text-center font-bold text-green-700">Sin Cargo</td>
                                    <td class="px-6 py-4 text-center font-bold text-green-700">Sin Cargo</td>
                                </tr>
                                <tr class="bg-white hover:bg-gray-50">
                                    <td class="px-6 py-4 font-medium text-gray-900">Graduados UNSL</td>
                                    <td class="px-6 py-4 text-center font-bold text-green-700"><?php echo get_field('tarifa_graduados_dia') ?: '$XXX'; ?></td>
                                    <td class="px-6 py-4 text-center font-bold text-green-700"><?php echo get_field('tarifa_graduados_acampar') ?: '$XXX'; ?></td>
                                </tr>
                                <tr class="bg-gray-50 hover:bg-gray-100">
                                    <td class="px-6 py-4 font-medium text-gray-900">Convenio UNCuyo</td>
                                    <td class="px-6 py-4 text-center font-bold text-green-700"><?php echo get_field('tarifa_uncuyo_dia') ?: '$XXX'; ?></td>
                                    <td class="px-6 py-4 text-center font-bold text-green-700"><?php echo get_field('tarifa_uncuyo_acampar') ?: '$XXX'; ?></td>
                                </tr>
                            </tbody>
                            <tfoot class="bg-yellow-50 border-t border-yellow-200">
                                <tr>
                                    <td class="px-6 py-4 font-bold text-yellow-900">Motorhome / Casilla Rodante</td>
                                    <td colspan="2" class="px-6 py-4 text-center font-bold text-yellow-800">
                                        <?php echo get_field('tarifa_motorhome') ?: '$XXX'; ?> (Por día)
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <p class="text-xs text-gray-500 mt-4 text-center italic">* Tarifas sujetas a modificación. Se debe presentar documentación que acredite la categoría.</p>
                </div>
            </div>
        </section>

        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    <div class="flex items-center justify-between mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 border-l-4 border-green-600 pl-3">Novedades del Camping</h2>
                        <a href="<?php echo get_post_type_archive_link('noticia'); ?>" class="text-green-700 text-sm font-semibold hover:underline">Ver todas &rarr;</a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <?php
                        $news_query = new WP_Query([
                            'post_type' => 'noticia',
                            'posts_per_page' => 3,
                            'tax_query' => [['taxonomy' => 'departamento', 'field' => 'slug', 'terms' => 'camping']]
                        ]);

                        if ($news_query->have_posts()) :
                            while ($news_query->have_posts()) : $news_query->the_post();
                        ?>
                                <article class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden flex flex-col hover:shadow-md transition-shadow">
                                    <div class="h-48 overflow-hidden bg-gray-200 relative">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium', ['class' => 'w-full h-full object-cover transition-transform duration-500 hover:scale-105']); ?>
                                        <?php else : ?>
                                            <div class="w-full h-full flex items-center justify-center text-gray-400">
                                                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                </svg>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="p-5 flex-1 flex flex-col">
                                        <span class="text-xs text-gray-500 mb-2"><?php echo get_the_date('d/m/Y'); ?></span>
                                        <h3 class="text-lg font-bold text-gray-900 mb-2 leading-snug">
                                            <a href="<?php the_permalink(); ?>" class="hover:text-green-700"><?php the_title(); ?></a>
                                        </h3>
                                        <p class="text-sm text-gray-600 line-clamp-3 mb-4 flex-1"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="text-green-700 text-sm font-semibold hover:underline">Leer más</a>
                                    </div>
                                </article>
                            <?php endwhile;
                            wp_reset_postdata();
                        else : ?>
                            <div class="col-span-3 text-center py-10 text-gray-500">
                                No hay noticias recientes disponibles.
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-[#1a4731] py-16 text-white">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-2xl font-bold mb-4">¿Consultas o Reservas?</h2>
                <p class="text-green-100 mb-8 max-w-2xl mx-auto">Comunicate con nosotros para verificar disponibilidad de cabañas o realizar consultas sobre el camping.</p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="tel:02664422818" class="inline-flex items-center justify-center gap-2 bg-white text-green-800 px-6 py-3 rounded-lg font-bold hover:bg-gray-100 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        Llamar ahora
                    </a>
                    <a href="mailto:contacto@laflorida.unsl.edu.ar" class="inline-flex items-center justify-center gap-2 bg-transparent border border-white/30 text-white px-6 py-3 rounded-lg font-bold hover:bg-white/10 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Enviar Email
                    </a>
                </div>
            </div>
        </section>
    <?php endwhile; ?>





</main>

<?php get_footer(); ?>