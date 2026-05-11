<?php

/**
 * Template Name: Complejo Turístico La Florida
 */
get_header();
?>

<main class="bg-white font-sans">

    <?php while (have_posts()) : the_post(); ?>

        <section class="relative bg-[#1a4731] py-32 border-b border-[#0f2e1f] overflow-hidden">
            <?php
            $hero_image = get_template_directory_uri() . '/assets/images/camping/banner.jpg';
            ?>
            <img fetchpriority="high" class="absolute inset-0 w-full h-full object-cover opacity-30 mix-blend-luminosity" src="<?php echo esc_url($hero_image); ?>" alt="Paisaje La Florida">
            <div class="absolute inset-0 bg-gradient-to-t from-[#1a4731] to-transparent opacity-80"></div>

            <div class="container mx-auto px-6 relative z-10">
                <div class="max-w-7xl mx-auto text-center">

                    <span class="text-xs font-bold  uppercase text-green-300 mb-6 block">
                        Naturaleza y recreación
                    </span>

                    <h1 class="text-4xl md:text-6xl font-light text-white leading-tight mb-8 tracking-tight">
                        Complejo Turístico <br>
                        <strong class="font-semibold">La Florida</strong>
                    </h1>

                    <p class="text-xl text-green-100/80 font-light leading-relaxed max-w-2xl mx-auto mb-10">
                        Un espacio natural a orillas del dique, equipado para el descanso, el deporte y la recreación al aire libre.
                    </p>

                    <div class="inline-block border-t border-b border-green-500/30 py-3 px-8 text-sm text-green-200 tracking-wider uppercase font-medium">
                        Ruta Provincial Nº 39, La Florida (A 45 km de San Luis)
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 bg-white">
            <div class="container mx-auto px-6 max-w-7xl">

                <div class="mb-16 md:flex justify-between items-end">
                    <div class="max-w-2xl">
                        <h2 class="text-3xl font-light text-[#1a4731] tracking-tight mb-4">
                            Servicios e <strong class="font-semibold">Instalaciones</strong>
                        </h2>
                        <p class="text-lg text-slate-500 font-light">Infraestructura completa para garantizar una estadía cómoda y conectada.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-12 gap-y-12">
                    <?php
                    $servicios = [
                        ['titulo' => 'Conexión WiFi', 'desc' => 'Internet satelital de alta velocidad (Starlink) en todo el predio.'],
                        ['titulo' => 'Balneario', 'desc' => 'Sectores boyados seguros con servicio de guardavidas profesional.'],
                        ['titulo' => 'Recreación', 'desc' => 'Actividades deportivas y espacios al aire libre para todas las edades.'],
                        ['titulo' => 'Enfermería', 'desc' => 'Servicio de primeros auxilios disponible para campistas.'],
                        ['titulo' => 'Sanitarios', 'desc' => 'Duchas con agua caliente y baterías de baños completos.'],
                        ['titulo' => 'Estacionamiento', 'desc' => 'Cocheras techadas exclusivas para vehículos.'],
                        ['titulo' => 'Náutica', 'desc' => 'Desembarcadero habilitado para embarcaciones y kayaks.'],
                        ['titulo' => 'Juegos infantiles', 'desc' => 'Plazas y espacios de recreación exclusivos para niños.'],
                        ['titulo' => 'Pesca', 'desc' => 'Zonas especialmente delimitadas para pesca deportiva.'],
                        ['titulo' => 'Proveeduría', 'desc' => 'Servicio de buffet, parrilla y quincho de usos múltiples.']
                    ];

                    foreach ($servicios as $servicio) : ?>
                        <div class="border-t border-slate-200 pt-5 group hover:border-[#1a4731] transition-colors duration-300">
                            <h3 class="text-lg font-medium text-slate-900 group-hover:text-[#1a4731] transition-colors mb-2">
                                <?php echo $servicio['titulo']; ?>
                            </h3>
                            <p class="text-sm text-slate-500 font-light leading-relaxed">
                                <?php echo $servicio['desc']; ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>

        <section class="py-24 bg-slate-50 border-y border-slate-200">
            <div class="container mx-auto px-6 max-w-5xl">

                <div class="text-center mb-16">
                    <h2 class="text-3xl font-light text-[#1a4731] tracking-tight">Opciones de alojamiento</h2>
                </div>

                <div class="grid md:grid-cols-2 gap-16 divide-y md:divide-y-0 md:divide-x divide-slate-200">

                    <div class="md:pr-8">
                        <h3 class="text-xs font-bold text-slate-400 uppercase  mb-6 pb-4 border-b border-[#1a4731]/20">
                            Sector Camping
                        </h3>
                        <p class="text-slate-600 font-light text-lg mb-8 leading-relaxed">
                            Parcelas delimitadas por cercos ligustrinos para garantizar privacidad y contacto directo con la naturaleza.
                        </p>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-sm font-medium text-slate-900 mb-1">Parcelas con quincho</h4>
                                <p class="text-sm text-slate-500 font-light">Incluyen asador individual, conexión de agua y electricidad.</p>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-slate-900 mb-1">Parcelas generales</h4>
                                <p class="text-sm text-slate-500 font-light">Con asador, mesa, conexión de agua y electricidad.</p>
                            </div>
                        </div>
                    </div>

                    <div class="md:pl-8 pt-10 md:pt-0">
                        <h3 class="text-xs font-bold text-slate-400 uppercase  mb-6 pb-4 border-b border-[#1a4731]/20">
                            Cabañas equipadas
                        </h3>
                        <p class="text-slate-600 font-light text-lg mb-8 leading-relaxed">
                            Alojamiento confortable con vistas panorámicas al dique. Requiere reserva previa.
                        </p>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-sm font-medium text-slate-900 mb-1">Capacidad</h4>
                                <p class="text-sm text-slate-500 font-light">Ideales para grupos familiares de hasta 6 personas.</p>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-slate-900 mb-1">Equipamiento</h4>
                                <p class="text-sm text-slate-500 font-light">Totalmente equipadas con cocina completa y baño privado.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-24 bg-white">
            <div class="container mx-auto px-6 max-w-4xl">

                <div class="mb-12">
                    <h2 class="text-3xl font-light text-[#1a4731] tracking-tight mb-2">Tarifas vigentes</h2>
                    <p class="text-sm text-slate-400 uppercase  font-bold">Temporada 2025/2026</p>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b-2 border-[#1a4731]">
                                <th class="py-4 px-3 text-xs font-bold text-slate-900 uppercase ">Categoría</th>
                                <th class="py-4 px-6 text-xs font-bold text-slate-900 uppercase  text-right">Día de campo</th>
                                <th class="py-4 px-3 text-xs font-bold text-slate-900 uppercase  text-right">Acampe (noche)</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm font-light text-slate-600 divide-y divide-slate-100">
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-4 px-3 font-medium text-slate-900">Estudiantes UNSL / Esc. Normal</td>
                                <td class="py-4 px-6 text-right"><?php echo get_field('tarifa_estudiantes_dia', 41) ?: '$XXX'; ?></td>
                                <td class="py-4 px-3 text-right"><?php echo get_field('tarifa_estudiantes_acampar', 41) ?: '$XXX'; ?></td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-4 px-3 font-medium text-slate-900">Aportantes Código 77</td>
                                <td class="py-4 px-6 text-right text-[#1a4731] font-medium">Sin cargo</td>
                                <td class="py-4 px-3 text-right text-[#1a4731] font-medium">Sin cargo</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-4 px-3 font-medium text-slate-900">Invitados de Aportantes</td>
                                <td class="py-4 px-6 text-right"><?php echo get_field('tarifa_invitados_dia', 41) ?: '$XXX'; ?></td>
                                <td class="py-4 px-3 text-right"><?php echo get_field('tarifa_invitados_acampar', 41) ?: '$XXX'; ?></td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-4 px-3 font-medium text-slate-900">Personal Universitario</td>
                                <td class="py-4 px-6 text-right"><?php echo get_field('tarifa_personal_dia', 41) ?: '$XXX'; ?></td>
                                <td class="py-4 px-3 text-right"><?php echo get_field('tarifa_personal_acampar', 41) ?: '$XXX'; ?></td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-4 px-3 font-medium text-slate-900">Jubilados (Aportantes +10 años)</td>
                                <td class="py-4 px-6 text-right text-[#1a4731] font-medium">Sin cargo</td>
                                <td class="py-4 px-3 text-right text-[#1a4731] font-medium">Sin cargo</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-4 px-3 font-medium text-slate-900">Personas con discapacidad</td>
                                <td class="py-4 px-6 text-right text-[#1a4731] font-medium">Sin cargo</td>
                                <td class="py-4 px-3 text-right text-[#1a4731] font-medium">Sin cargo</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-4 px-3 font-medium text-slate-900">Particulares</td>
                                <td class="py-4 px-6 text-right"><?php echo get_field('tarifa_particulares_dia', 41) ?: '$XXX'; ?></td>
                                <td class="py-4 px-3 text-right"><?php echo get_field('tarifa_particulares_acampar', 41) ?: '$XXX'; ?></td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-4 px-3 font-medium text-slate-900">Menores de 6 años</td>
                                <td class="py-4 px-6 text-right text-[#1a4731] font-medium">Sin cargo</td>
                                <td class="py-4 px-3 text-right text-[#1a4731] font-medium">Sin cargo</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-4 px-3 font-medium text-slate-900">Graduados UNSL</td>
                                <td class="py-4 px-6 text-right"><?php echo get_field('tarifa_graduados_dia', 41) ?: '$XXX'; ?></td>
                                <td class="py-4 px-3 text-right"><?php echo get_field('tarifa_graduados_acampar', 41) ?: '$XXX'; ?></td>
                            </tr>
                        </tbody>

                        <tbody class="border-t border-slate-300 text-sm font-light">
                            <tr class="bg-slate-50">
                                <td class="py-4 px-3 font-medium text-slate-900">Motorhome / Casilla rodante</td>
                                <td colspan="2" class="py-4 px-3 text-right text-slate-900">
                                    <?php echo get_field('tarifa_motorhome', 41) ?: '$XXX'; ?> <span class="text-slate-400 text-xs">/ día</span>
                                </td>
                            </tr>
                            <tr class="bg-slate-50 border-t border-slate-100">
                                <td class="py-4 px-3 font-medium text-slate-900">Alquiler mensual permanente</td>
                                <td colspan="2" class="py-4 px-3 text-right text-slate-900">
                                    $80.000 <span class="text-slate-400 text-xs">/ mes</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p class="text-[11px] text-slate-400 mt-6 uppercase ">
                    * Tarifas sujetas a modificación. Se requiere presentar documentación respaldatoria de la categoría.
                </p>
            </div>
        </section>

        <section class="py-24 bg-slate-50 border-t border-slate-200">
            <div class="container mx-auto px-6 max-w-7xl">
                <div class="grid lg:grid-cols-[1fr_1fr] gap-16 items-start">

                    <div>
                        <h2 class="text-3xl font-light text-[#1a4731] tracking-tight mb-8">
                            Ubicación y <strong class="font-semibold">entorno</strong>
                        </h2>

                        <div class="bg-white p-2 border border-slate-200 shadow-sm mb-6">
                            <div class="aspect-video w-full bg-slate-200 relative overflow-hidden">
                                <iframe title="Mapa Complejo La Florida"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3997.0274213979815!2d-66.02596116423734!3d-33.12128568624817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95d4728b80a6d8ab%3A0x5c8e91a37a4446d0!2sCamping%20Universitario!5e1!3m2!1ses-419!2sar!4v1778504665840!5m2!1ses-419!2sar" width="100%"
                                    height="100%"
                                    style="border:0;"
                                    allowfullscreen=""
                                    loading="lazy"
                                    class="w-full h-full filter grayscale opacity-90 hover:grayscale-0 hover:opacity-100 transition-all duration-700">
                                </iframe>
                            </div>
                        </div>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">
                            Ubicado a solo 45 km de la ciudad de San Luis, rodeado por las sierras y el espejo de agua del Dique La Florida.
                        </p>
                    </div>

                    <div class="lg:pl-12 lg:border-l border-slate-200">
                        <h2 class="text-3xl font-light text-[#1a4731] tracking-tight mb-8">
                            Archivo <strong class="font-semibold">histórico</strong>
                        </h2>

                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="aspect-[4/3] bg-slate-200 overflow-hidden">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/camping/archivo(2).jpeg" alt="Vista La Florida" class="w-full h-full object-cover filter grayscale hover:grayscale-0 transition-all duration-500">
                            </div>
                            <div class="aspect-[4/3] bg-slate-200 overflow-hidden">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/camping/archivo(7).jpeg" alt="Cabañas La Florida" class="w-full h-full object-cover filter grayscale hover:grayscale-0 transition-all duration-500">
                            </div>
                        </div>

                        <p class="text-sm text-slate-600 font-light leading-relaxed mb-6">
                            El predio cuenta con una rica historia de desarrollo institucional, pasando de ser un terreno agreste a uno de los complejos universitarios más completos de la región.
                        </p>

                        <a href="<?php echo home_url('/camping-universitario/historia-del-camping/'); ?>" class="inline-flex items-center gap-2 text-xs font-bold uppercase  text-[#1a4731] hover:text-slate-900 transition-colors border-b border-[#1a4731] pb-1">
                            Ver Galería y Archivo Histórico
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-24 bg-white border-y border-slate-200">
            <div class="container mx-auto px-6 max-w-7xl">

                <div class="flex items-end justify-between mb-16 border-b border-slate-200 pb-6">
                    <h2 class="text-3xl font-light text-[#1a4731] tracking-tight">Novedades del complejo</h2>
                    <a href="<?php echo get_post_type_archive_link('noticia'); ?>" class="text-sm text-slate-900 font-medium uppercase  hover:text-[#1a4731] transition-colors">
                        Ver archivo
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    <?php
                    $news_query = new WP_Query([
                        'post_type' => 'noticia',
                        'posts_per_page' => 3,
                        'tax_query' => [['taxonomy' => 'departamento', 'field' => 'slug', 'terms' => 'camping']]
                    ]);

                    if ($news_query->have_posts()) :
                        while ($news_query->have_posts()) : $news_query->the_post();
                    ?>
                            <article class="flex flex-col h-full group">
                                <a title="Link <?php the_title(); ?>" href="<?php the_permalink(); ?>" class="block mb-6 overflow-hidden bg-slate-100 aspect-[4/3]">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-full object-cover transition-transform duration-700 group-hover:scale-105']); ?>
                                    <?php else : ?>
                                        <div class="w-full h-full flex items-center justify-center bg-slate-100 text-slate-400">
                                            Sin imagen
                                        </div>
                                    <?php endif; ?>
                                </a>

                                <div class="flex-1 flex flex-col">
                                    <div class="text-xs text-slate-400 uppercase  mb-3">
                                        <?php echo get_the_date('d F, Y'); ?>
                                    </div>

                                    <h3 class="text-xl font-medium text-slate-900 leading-tight mb-3">
                                        <a href="<?php the_permalink(); ?>" class="hover:text-[#1a4731] transition-colors">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>

                                    <div class="text-slate-600 text-sm font-light leading-relaxed line-clamp-3 mb-4">
                                        <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                                    </div>
                                </div>
                            </article>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        ?>
                        <div class="col-span-3 text-center py-16 text-slate-400 font-light border border-slate-100 bg-slate-50">
                            No hay noticias recientes disponibles.
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="bg-[#1a4731] py-24 text-white text-center">
            <div class="container mx-auto px-6 max-w-4xl">

                <h2 class="text-3xl font-light mb-6 tracking-tight">¿Consultas o reservas?</h2>
                <p class="text-green-100/80 font-light text-lg mb-12">
                    Comunicate directamente con nuestra administración para verificar disponibilidad de cabañas, parcelas o resolver inquietudes sobre las instalaciones.
                </p>

                <div class="mb-12 border-t border-green-800/50 pt-8 inline-block">
                    <h3 class="text-xl font-medium text-white mb-1">Sr. Daniel Juárez</h3>
                    <p class="text-xs text-green-300 uppercase  font-bold">Coordinador de Departamento La Florida</p>
                </div>

                <div class="flex flex-col sm:flex-row flex-wrap gap-4 justify-center">

                    <a href="https://wa.me/5492664969392" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-3 bg-white text-[#1a4731] px-8 py-4 text-sm font-bold uppercase  hover:bg-green-50 transition-all duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                        </svg>
                        WhatsApp
                    </a>

                    <a href="https://instagram.com/camping_universitario" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-3 border border-green-500/50 text-white px-8 py-4 text-sm font-bold uppercase  hover:bg-[#123323] transition-all duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                        @camping_universitario
                    </a>

                </div>

            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>