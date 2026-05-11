<?php

/**
 * Template Name: Mesa de Entrada y Personal
 */
get_header();
?>

<main class="bg-white font-sans">

    <?php while (have_posts()) : the_post(); ?>

        <section class="bg-slate-900 py-32 border-b border-slate-800 text-center">
            <div class="container mx-auto px-6 max-w-4xl relative z-10">

                <nav class="flex justify-center items-center gap-3 text-[10px] font-bold  uppercase text-slate-500 mb-8">
                    <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors">Inicio</a>
                    <span>/</span>
                    <?php
                    global $post;
                    if (is_page() && $post->post_parent) {
                        $ancestors = array_reverse(get_post_ancestors($post->ID));
                        foreach ($ancestors as $ancestor_id) {
                    ?>
                            <a href="<?php echo get_permalink($ancestor_id); ?>" class="hover:text-white transition-colors">
                                <?php echo get_the_title($ancestor_id); ?>
                            </a>
                            <span>/</span>
                    <?php
                        }
                    }
                    ?>
                    <span class="text-[#005eb8]"><?php the_title(); ?></span>
                </nav>

                <h1 class="text-4xl md:text-6xl font-light text-white leading-tight mb-8 tracking-tight">
                    Mesa de Entradas y <strong class="font-semibold">Personal</strong>
                </h1>

                <p class="text-xl text-slate-400 font-light leading-relaxed max-w-2xl mx-auto">
                    <?php
                    if (has_excerpt()) {
                        echo get_the_excerpt();
                    } else {
                        echo 'Gestión de documentación oficial, asesoramiento general y enlace principal con todas las áreas de la Secretaría.';
                    }
                    ?>
                </p>
            </div>
        </section>

        <section class="relative z-20 -mt-12 mb-12">
            <div class="container mx-auto px-6 max-w-6xl">
                <div class="bg-white border border-slate-200 shadow-sm grid md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-slate-200">

                    <div class="p-8 text-center md:text-left flex flex-col justify-center">
                        <span class="text-[10px] font-bold text-slate-400 uppercase  mb-2 block">Ubicación</span>
                        <h3 class="text-lg font-medium text-slate-900 leading-snug">Rivadavia 1029</h3>
                        <p class="text-sm text-slate-500 font-light">San Luis Capital</p>
                    </div>

                    <div class="p-8 text-center md:text-left flex flex-col justify-center">
                        <span class="text-[10px] font-bold text-slate-400 uppercase  mb-2 block">Horario de atención</span>
                        <h3 class="text-lg font-medium text-slate-900 leading-snug">Lunes a Viernes</h3>
                        <p class="text-sm text-slate-500 font-light">8:00 a 13:00 hs <span class="mx-2">|</span> 18:00 a 20:00 hs</p>
                    </div>

                    <div class="p-8 text-center md:text-left flex flex-col justify-center bg-slate-50">
                        <span class="text-[10px] font-bold text-[#005eb8] uppercase  mb-2 block">Contacto</span>
                        <a href="tel:02664520300" class="text-lg font-medium text-slate-900 hover:text-[#005eb8] transition-colors leading-snug block">
                            (0266) 4520300 <span class="text-sm font-light text-slate-500">int. 8139</span>
                        </a>
                        <a href="mailto:mesadeentradassaebu@gmail.com" class="text-sm text-[#005eb8] hover:text-slate-900 transition-colors font-light">
                            mesadeentradassaebu@gmail.com
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-24 bg-white">
            <div class="container mx-auto px-6 max-w-7xl">

                <div class="mb-16">
                    <h2 class="text-3xl font-light text-slate-900 tracking-tight mb-4">
                        Servicios y <strong class="font-semibold">Trámites</strong>
                    </h2>
                    <p class="text-lg text-slate-500 font-light max-w-2xl">Gestionamos la documentación oficial y brindamos asesoramiento para las distintas prestaciones de la Secretaría.</p>
                </div>

                <div class="grid md:grid-cols-3 gap-12">

                    <div class="border-t border-slate-200 pt-6 group">
                        <span class="text-[10px] font-bold text-[#005eb8] uppercase  mb-3 block">Documentación requerida</span>
                        <h3 class="text-xl font-medium text-slate-900 mb-3">Trámites de Comedor</h3>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">
                            Recepción, verificación y procesamiento de la documentación necesaria para acceder a los servicios de comedor general y a los beneficios específicos de la cocina para personas celíacas.
                        </p>
                    </div>

                    <div class="border-t border-slate-200 pt-6 group">
                        <span class="text-[10px] font-bold text-[#005eb8] uppercase  mb-3 block">Gestión administrativa</span>
                        <h3 class="text-xl font-medium text-slate-900 mb-3">Expedientes y notas</h3>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">
                            Punto de ingreso oficial y registro para la presentación de notas, inicio de expedientes y todas las actuaciones administrativas dirigidas a las autoridades de SAEBU.
                        </p>
                    </div>

                    <div class="border-t border-slate-200 pt-6 group">
                        <span class="text-[10px] font-bold text-[#005eb8] uppercase  mb-3 block">Atención al público</span>
                        <h3 class="text-xl font-medium text-slate-900 mb-3">Información general</h3>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">
                            Asesoramiento integral y orientación al estudiante sobre el funcionamiento de los diferentes servicios, ubicaciones de dependencias y requisitos reglamentarios.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-24 bg-slate-50 border-y border-slate-200">
            <div class="container mx-auto px-6 max-w-4xl">

                <h2 class="text-3xl font-light text-slate-900 text-center mb-16 tracking-tight">
                    Consultas <strong class="font-semibold">frecuentes</strong>
                </h2>

                <div class="space-y-4">
                    <details class="group border-b border-slate-200 pb-4 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer text-lg font-medium text-slate-900 hover:text-[#005eb8] transition-colors list-none">
                            ¿Qué necesito para el servicio de comedor siendo ingresante?
                            <span class="transition duration-300 group-open:-rotate-180">
                                <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-slate-500 font-light mt-4 leading-relaxed pr-8">
                            Necesitás presentar tu DNI (original) y el comprobante o certificado oficial de inscripción a la carrera correspondiente emitido por la Facultad.
                        </p>
                    </details>

                    <details class="group border-b border-slate-200 pb-4 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer text-lg font-medium text-slate-900 hover:text-[#005eb8] transition-colors list-none">
                            ¿Debo renovar mi servicio de comedor anualmente?
                            <span class="transition duration-300 group-open:-rotate-180">
                                <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-slate-500 font-light mt-4 leading-relaxed pr-8">
                            Sí. Al inicio de cada ciclo lectivo deberás presentar tu DNI y tu Historia Académica actualizada o certificado de alumno regular para renovar el beneficio.
                        </p>
                    </details>

                    <details class="group border-b border-slate-200 pb-4 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer text-lg font-medium text-slate-900 hover:text-[#005eb8] transition-colors list-none">
                            ¿Cómo accedo al servicio de comedor sin TACC (Celíacos)?
                            <span class="transition duration-300 group-open:-rotate-180">
                                <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-slate-500 font-light mt-4 leading-relaxed pr-8">
                            Debés presentar: DNI, copia del estudio de biopsia, certificado médico actualizado emitido por especialista y la documentación que acredite tu condición de alumno regular (Historia académica o certificado de inscripción).
                        </p>
                    </details>

                    <details class="group border-b border-slate-200 pb-4 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer text-lg font-medium text-slate-900 hover:text-[#005eb8] transition-colors list-none">
                            ¿Dónde entrego mi documentación?
                            <span class="transition duration-300 group-open:-rotate-180">
                                <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-slate-500 font-light mt-4 leading-relaxed pr-8">
                            La entrega es presencial en nuestras dependencias según tu sede: Rivadavia 1029 (San Luis Capital), Junín 269 (Villa Mercedes) o Av. del Libertador s/n - Barranca Colorada (Merlo).
                        </p>
                    </details>
                </div>

            </div>
        </section>

        <section class="py-24 bg-white">
            <div class="container mx-auto px-6 max-w-7xl">

                <div class="flex items-end justify-between mb-16 border-b border-slate-200 pb-6">
                    <h2 class="text-3xl font-light text-slate-900 tracking-tight">Noticias</h2>
                    <a href="<?php echo get_post_type_archive_link('noticia'); ?>" class="text-sm text-[#005eb8] font-medium uppercase  hover:text-slate-900 transition-colors">
                        Ver archivo
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
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
                                'terms'    => 'dpto-mesa-de-entradas',
                            ),
                        ),
                    );
                    $news_query = new WP_Query($args);

                    if ($news_query->have_posts()) :
                        while ($news_query->have_posts()) : $news_query->the_post();
                    ?>
                            <article class="flex flex-col h-full group">
                                <a title="Enlace a <?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>" class="block mb-6 overflow-hidden bg-slate-100 aspect-[4/3]">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover transition-transform duration-700 group- filter grayscale-[20%] group-hover:grayscale-0')); ?>
                                    <?php else : ?>
                                        <div class="w-full h-full flex items-center justify-center text-slate-300 font-light text-sm uppercase ">
                                            Sin imagen
                                        </div>
                                    <?php endif; ?>
                                </a>

                                <div class="flex-1 flex flex-col">
                                    <div class="text-[10px] font-bold text-slate-400 uppercase  mb-3">
                                        <?php echo get_the_date('d M Y'); ?>
                                    </div>

                                    <h3 class="text-xl font-medium text-slate-900 leading-tight mb-3">
                                        <a href="<?php the_permalink(); ?>" class="hover:text-[#005eb8] transition-colors">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>

                                    <div class="text-slate-500 text-sm font-light leading-relaxed line-clamp-3 mb-4">
                                        <?php echo wp_trim_words(get_the_excerpt(), 18); ?>
                                    </div>
                                </div>
                            </article>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        ?>
                        <div class="col-span-3 text-center py-16 border border-slate-100 bg-slate-50">
                            <p class="text-slate-400 font-light">No hay noticias recientes en esta área.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="bg-slate-900 py-24 text-white text-center border-t border-slate-800">
            <div class="container mx-auto px-6 max-w-3xl">

                <h2 class="text-3xl font-light mb-6 tracking-tight">¿Necesitás iniciar un trámite?</h2>
                <p class="text-slate-400 font-light text-lg mb-12">
                    Podés enviarnos tu consulta o documentación escaneada por correo electrónico, o acercarte personalmente a nuestras oficinas.
                </p>

                <div class="mb-12 border-t border-slate-700 pt-8 inline-block">
                    <h3 class="text-xl font-medium text-white mb-2">Téc. Elisabeth López</h3>
                    <p class="text-xs text-[#005eb8] uppercase  font-bold">Jefa de Dpto. de Mesa de Entradas y Personal</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="mailto:mesadeentradassaebu@gmail.com" class="inline-block bg-white text-slate-900 px-10 py-4 text-sm font-bold uppercase  hover:bg-slate-100  transition-all duration-300">
                        Enviar email
                    </a>
                    <a href="tel:02664520300" class="inline-block border border-slate-600 text-white px-10 py-4 text-sm font-bold uppercase  hover:bg-slate-800 transition-all duration-300">
                        Llamar a interno
                    </a>
                </div>

            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>