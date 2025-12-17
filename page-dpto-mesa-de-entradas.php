<?php
/**
 * Template Name: Mesa de Entrada y Personal
 */
get_header();
?>

<main class="bg-gray-50">

    <?php while (have_posts()) : the_post(); ?>

        <section class="relative bg-slate-800 text-white py-20 border-b-4 border-blue-600">
            <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(#ffffff 1px, transparent 1px), linear-gradient(90deg, #ffffff 1px, transparent 1px); background-size: 30px 30px;"></div>
            
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

        <section class="py-12 bg-white border-b border-gray-200">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto -mt-20 relative z-20">
                    <div class="bg-white rounded-lg shadow-lg border border-gray-200 p-8">
                        <div class="grid md:grid-cols-3 gap-8 divide-y md:divide-y-0 md:divide-x divide-gray-100">
                            
                            <div class="flex flex-col items-center text-center p-4">
                                <div class="w-12 h-12 bg-blue-50 text-blue-700 rounded-full flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </div>
                                <h1 class="font-bold text-gray-900 mb-2 text-base">Ubicación</h1>
                                <p class="text-gray-600 text-sm">Rivadavia 1029, 1º Piso<br>San Luis Capital</p>
                            </div>

                            <div class="flex flex-col items-center text-center p-4">
                                <div class="w-12 h-12 bg-blue-50 text-blue-700 rounded-full flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <h1 class="font-bold text-gray-900 mb-2 text-base">Horario de Atención</h1>
                                <p class="text-gray-600 text-sm">Lunes a Viernes<br>8:00 a 13:00 hs | 18:00 a 20:00 hs</p>
                            </div>

                            <div class="flex flex-col items-center text-center p-4">
                                <div class="w-12 h-12 bg-blue-50 text-blue-700 rounded-full flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h1.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                </div>
                                <h1 class="font-bold text-gray-900 mb-2 text-base">Contacto</h1>
                                <a href="tel:4420123" class="text-blue-600 font-medium hover:underline text-sm block mb-1">Tel: (0266) 4520300 int. 8139</a>
                                <a href="mailto:mesadeentradassaebu@gmail.com" class="text-blue-600 font-medium hover:underline text-sm block">mesadeentradassaebu@gmail.com</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    
                    <div class="text-center mb-12">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Servicios y Trámites</h2>
                        <p class="text-gray-600 max-w-2xl mx-auto">
                            Gestionamos la documentación oficial y brindamos asesoramiento para los distintos servicios de la Secretaría.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-6">
                        
                        <div class="bg-white p-6 rounded-lg border border-gray-200 hover:border-blue-500 hover:shadow-md transition-all duration-300">
                            <div class="w-12 h-12 bg-slate-100 text-slate-600 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            </div>
                            <h1 class="text-lg font-bold text-slate-900 mb-3">Trámites de comedor</h1>
                            <p class="text-sm text-gray-600 leading-relaxed mb-4">
                                Recepción y procesamiento de la documentación para acceder a las becas de comedor y beneficios alimentarios.
                            </p>
                            <span class="text-xs font-semibold text-blue-600 uppercase">Documentación requerida</span>
                        </div>

                        <div class="bg-white p-6 rounded-lg border border-gray-200 hover:border-blue-500 hover:shadow-md transition-all duration-300">
                            <div class="w-12 h-12 bg-slate-100 text-slate-600 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2"></path></svg>
                            </div>
                            <h1 class="text-lg font-bold text-slate-900 mb-3">Expedientes y notas</h1>
                            <p class="text-sm text-gray-600 leading-relaxed mb-4">
                                Mesa de entrada oficial para la presentación de notas, expedientes y actuaciones dirigidas a las autoridades de SAEBU.
                            </p>
                            <span class="text-xs font-semibold text-blue-600 uppercase">Gestión Administrativa</span>
                        </div>

                        <div class="bg-white p-6 rounded-lg border border-gray-200 hover:border-blue-500 hover:shadow-md transition-all duration-300">
                            <div class="w-12 h-12 bg-slate-100 text-slate-600 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <h1 class="text-lg font-bold text-slate-900 mb-3">Información general</h1>
                            <p class="text-sm text-gray-600 leading-relaxed mb-4">
                                Asesoramiento y orientación al estudiante sobre los diferentes servicios, ubicaciones y requisitos de la Secretaría.
                            </p>
                            <span class="text-xs font-semibold text-blue-600 uppercase">Atención al Público</span>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white border-t border-gray-200">
            <div class="container mx-auto px-4">
                <div class="max-w-5xl mx-auto">
                    <div class="flex items-center justify-between mb-8">
                        <h2 class="text-2xl font-bold text-slate-900 border-l-4 border-blue-600 pl-3">Comunicados recientes</h2>
                        <a href="<?php echo get_post_type_archive_link('noticia'); ?>" class="text-sm font-semibold text-blue-600 hover:underline">Ver todos &rarr;</a>
                    </div>

                    <div class="grid md:grid-cols-3 gap-6">
                        <?php
                        $news_query = new WP_Query(array(
                            'post_type' => 'noticia',
                            'posts_per_page' => 3,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'departamento',
                                    'field' => 'slug',
                                    'terms' => 'mesa-de-entrada', 
                                ),
                            ),
                        ));

                        if ($news_query->have_posts()) :
                            while ($news_query->have_posts()) : $news_query->the_post();
                        ?>
                            <article class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:border-blue-400 transition-all group h-full flex flex-col">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="h-40 overflow-hidden bg-gray-100 relative">
                                        <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500')); ?>
                                    </div>
                                <?php endif; ?>
                                
                                <div class="p-5 flex-1 flex flex-col">
                                    <span class="text-xs text-gray-500 mb-2 block"><?php echo get_the_date('d/m/Y'); ?></span>
                                    <h1 class="text-lg font-bold text-slate-900 mb-2 leading-snug">
                                        <a href="<?php the_permalink(); ?>" class="group-hover:text-blue-700 transition-colors">
                                            <?php the_title(); ?>
                                        </a>
                                    </h1>
                                    <p class="text-sm text-gray-600 line-clamp-3 mb-4 flex-1">
                                        <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>" class="text-blue-600 text-sm font-semibold hover:underline mt-auto inline-block">Leer comunicado</a>
                                </div>
                            </article>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                        ?>
                            <div class="col-span-3 text-center py-12 bg-gray-50 rounded-lg border border-gray-100">
                                <p class="text-gray-500">No hay Comunicados recientes en esta área.</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-slate-900 text-white">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-2xl font-bold mb-4">¿Necesitás iniciar un trámite?</h2>
                <p class="text-slate-300 mb-8 max-w-2xl mx-auto">
                    Podés enviarnos tu consulta por correo electrónico o acercarte personalmente a nuestras oficinas.
                </p>
                <div class="flex justify-center gap-4">
                    <a href="mailto:mesadeentradassaebu@gmail.com" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-md font-bold transition-colors shadow-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        Enviar email
                    </a>
                </div>
            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>