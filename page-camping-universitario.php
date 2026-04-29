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

                    <span class="text-xs font-bold tracking-widest uppercase text-green-300 mb-6 block">
                        Naturaleza y Recreación
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
                        <p class="text-lg text-slate-500 font-light">Infraestructura completa para garantizar una estadía cómoda y segura.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-12 gap-y-12">
                    <?php

                    $servicios = [
                        ['titulo' => 'Recreación', 'desc' => 'Actividades deportivas para todas las edades.'],
                        ['titulo' => 'Enfermería', 'desc' => 'Servicio de primeros auxilios disponible.'],
                        ['titulo' => 'Playas Habilitadas', 'desc' => 'Sectores boyados con servicio de guardavidas.'],
                        ['titulo' => 'Sanitarios', 'desc' => 'Duchas con agua caliente y baños completos.'],
                        ['titulo' => 'Estacionamiento', 'desc' => 'Cocheras techadas para vehículos.'],
                        ['titulo' => 'Náutica', 'desc' => 'Desembarcadero para embarcaciones y kayaks.'],
                        ['titulo' => 'Juegos Infantiles', 'desc' => 'Plazas y espacios exclusivos para niños.'],
                        ['titulo' => 'Pesca', 'desc' => 'Zonas habilitadas para pesca deportiva.'],
                        ['titulo' => 'Proveeduría', 'desc' => 'Buffet, parrilla y quincho.']
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
                    <h2 class="text-3xl font-light text-[#1a4731] tracking-tight">Opciones de Alojamiento</h2>
                </div>

                <div class="grid md:grid-cols-2 gap-16 divide-y md:divide-y-0 md:divide-x divide-slate-200">

                    <div class="md:pr-8">
                        <h3 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-6 pb-4 border-b border-[#1a4731]/20">
                            Sector Camping
                        </h3>
                        <p class="text-slate-600 font-light text-lg mb-8 leading-relaxed">
                            Parcelas delimitadas por cercos ligustrinos para garantizar privacidad y contacto directo con la naturaleza.
                        </p>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-sm font-medium text-slate-900 mb-1">Parcelas con Quincho</h4>
                                <p class="text-sm text-slate-500 font-light">Incluyen asador individual, conexión de agua y electricidad.</p>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-slate-900 mb-1">Parcelas Generales</h4>
                                <p class="text-sm text-slate-500 font-light">Con asador, mesa, conexión de agua y electricidad.</p>
                            </div>
                        </div>
                    </div>

                    <div class="md:pl-8 pt-10 md:pt-0">
                        <h3 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-6 pb-4 border-b border-[#1a4731]/20">
                            Cabañas Equipadas
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
            <div class="container mx-auto px-6 max-w-7xl">

                <div class="mb-12">
                    <h2 class="text-3xl font-light text-[#1a4731] tracking-tight mb-2">Tarifas Vigentes</h2>
                    <p class="text-sm text-slate-400 uppercase tracking-widest font-bold">Temporada 2025/2026</p>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b-2 border-[#1a4731]">
                                <th class="py-4 pr-6 text-xs font-bold text-slate-900 uppercase tracking-widest">Categoría</th>
                                <th class="py-4 px-6 text-xs font-bold text-slate-900 uppercase tracking-widest text-right">Día de Campo</th>
                                <th class="py-4 pl-6 text-xs font-bold text-slate-900 uppercase tracking-widest text-right">Acampe (Noche)</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm font-light text-slate-600 divide-y divide-slate-100">
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-4 pr-6 font-medium text-slate-900">Estudiantes UNSL / Esc. Normal</td>
                                <td class="py-4 px-6 text-right"><?php echo get_field('tarifa_estudiantes_dia', 41) ?: '$XXX'; ?></td>
                                <td class="py-4 pl-6 text-right"><?php echo get_field('tarifa_estudiantes_acampar', 41) ?: '$XXX'; ?></td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-4 pr-6 font-medium text-slate-900">Aportantes Código 77</td>
                                <td class="py-4 px-6 text-right text-[#1a4731] font-medium">Sin cargo</td>
                                <td class="py-4 pl-6 text-right text-[#1a4731] font-medium">Sin cargo</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-4 pr-6 font-medium text-slate-900">Invitados de Aportantes</td>
                                <td class="py-4 px-6 text-right"><?php echo get_field('tarifa_invitados_dia', 41) ?: '$XXX'; ?></td>
                                <td class="py-4 pl-6 text-right"><?php echo get_field('tarifa_invitados_acampar', 41) ?: '$XXX'; ?></td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-4 pr-6 font-medium text-slate-900">Personal Universitario</td>
                                <td class="py-4 px-6 text-right"><?php echo get_field('tarifa_personal_dia', 41) ?: '$XXX'; ?></td>
                                <td class="py-4 pl-6 text-right"><?php echo get_field('tarifa_personal_acampar', 41) ?: '$XXX'; ?></td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-4 pr-6 font-medium text-slate-900">Jubilados (Aportantes +10 años)</td>
                                <td class="py-4 px-6 text-right text-[#1a4731] font-medium">Sin cargo</td>
                                <td class="py-4 pl-6 text-right text-[#1a4731] font-medium">Sin cargo</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-4 pr-6 font-medium text-slate-900">Personas con discapacidad</td>
                                <td class="py-4 px-6 text-right text-[#1a4731] font-medium">Sin cargo</td>
                                <td class="py-4 pl-6 text-right text-[#1a4731] font-medium">Sin cargo</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-4 pr-6 font-medium text-slate-900">Particulares</td>
                                <td class="py-4 px-6 text-right"><?php echo get_field('tarifa_particulares_dia', 41) ?: '$XXX'; ?></td>
                                <td class="py-4 pl-6 text-right"><?php echo get_field('tarifa_particulares_acampar', 41) ?: '$XXX'; ?></td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-4 pr-6 font-medium text-slate-900">Menores de 6 años</td>
                                <td class="py-4 px-6 text-right text-[#1a4731] font-medium">Sin cargo</td>
                                <td class="py-4 pl-6 text-right text-[#1a4731] font-medium">Sin cargo</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-4 pr-6 font-medium text-slate-900">Graduados UNSL</td>
                                <td class="py-4 px-6 text-right"><?php echo get_field('tarifa_graduados_dia', 41) ?: '$XXX'; ?></td>
                                <td class="py-4 pl-6 text-right"><?php echo get_field('tarifa_graduados_acampar', 41) ?: '$XXX'; ?></td>
                            </tr>
                        </tbody>

                        <tbody class="border-t border-slate-300 text-sm font-light">
                            <tr class="bg-slate-50">
                                <td class="py-4 pr-6 font-medium text-slate-900">Motorhome / Casilla rodante</td>
                                <td colspan="2" class="py-4 pl-6 text-right text-slate-900">
                                    <?php echo get_field('tarifa_motorhome', 41) ?: '$XXX'; ?> <span class="text-slate-400 text-xs">/ día</span>
                                </td>
                            </tr>
                            <tr class="bg-slate-50 border-t border-slate-100">
                                <td class="py-4 pr-6 font-medium text-slate-900">Alquiler mensual permanente</td>
                                <td colspan="2" class="py-4 pl-6 text-right text-slate-900">
                                    $80.000 <span class="text-slate-400 text-xs">/ mes</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p class="text-[11px] text-slate-400 mt-6 uppercase tracking-widest">
                    * Tarifas sujetas a modificación. Se requiere presentar documentación respaldatoria de la categoría.
                </p>
            </div>
        </section>

        <section class="py-24 bg-slate-50 border-t border-slate-200">
            <div class="container mx-auto px-6 max-w-7xl">

                <div class="flex items-end justify-between mb-16 border-b border-slate-200 pb-6">
                    <h2 class="text-3xl font-light text-[#1a4731] tracking-tight">Noticias</h2>
                    <a href="<?php echo get_post_type_archive_link('noticia'); ?>" class="text-sm text-slate-900 font-medium uppercase tracking-widest hover:text-[#1a4731] transition-colors">
                        Ver más
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
                                <a title="Link <?php the_title(); ?>" href="<?php the_permalink(); ?>" class="block mb-6 overflow-hidden bg-slate-200 aspect-[4/3]">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-full object-cover transition-transform duration-700 group-']); ?>
                                    <?php else : ?>
                                        <div class="w-full h-full flex items-center justify-center bg-slate-200 text-slate-400">
                                            Sin imagen
                                        </div>
                                    <?php endif; ?>
                                </a>

                                <div class="flex-1 flex flex-col">
                                    <div class="text-xs text-slate-400 uppercase tracking-widest mb-3">
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
                        <div class="col-span-3 text-center py-10 text-slate-400 font-light">
                            No hay noticias recientes disponibles.
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="bg-[#1a4731] py-24 text-white text-center">
            <div class="container mx-auto px-6 max-w-3xl">

                <h2 class="text-3xl font-light mb-6 tracking-tight">¿Consultas o reservas?</h2>
                <p class="text-green-100/80 font-light text-lg mb-12">
                    Comunícate con nosotros para verificar disponibilidad de cabañas o realizar consultas generales sobre el complejo.
                </p>

                <div class="mb-12 border-t border-green-800/50 pt-8 inline-block">
                    <h3 class="text-lg font-medium text-white mb-1">Sr. Daniel Juárez</h3>
                    <p class="text-xs text-green-300 uppercase tracking-widest">Coordinador de Departamento La Florida</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="tel:2664969392" class="inline-block bg-white text-[#1a4731] px-10 py-4 text-sm font-bold uppercase tracking-widest hover:bg-green-50  transition-all duration-300">
                        Llamar ahora
                    </a>
                    <a href="mailto:camping.saebu.unsl@gmail.com" class="inline-block border border-green-500/50 text-white px-10 py-4 text-sm font-bold uppercase tracking-widest hover:bg-[#123323] transition-all duration-300">
                        Enviar email
                    </a>
                </div>

            </div>
        </section>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>