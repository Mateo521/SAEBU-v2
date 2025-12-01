<?php

/**
 * Template Name: Página Camping
 */
get_header();
?>

<main class="bg-gray-50">

    <?php while (have_posts()) : the_post(); ?>

        <!-- Hero Section -->
        <section class="relative bg-gradient-to-br from-green-600 to-green-800 text-white py-20">
            <div class="absolute inset-0 opacity-10">
                <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="currentColor" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,138.7C960,139,1056,117,1152,101.3C1248,85,1344,75,1392,69.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                </svg>
            </div>

            <div class="container mx-auto px-4 relative z-10">
                <div class="max-w-4xl mx-auto text-center">
                    <!-- Icono del departamento -->
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-md rounded-full mb-6">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                        <?php the_title(); ?>
                    </h1>

                    <!-- Breadcrumbs integrado en el hero -->
                    <div class="flex items-center justify-center gap-2 text-green-100">
                        <a href="<?php echo home_url('/'); ?>" class="hover:text-white">Inicio</a>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        <span class="font-medium text-white"><?php the_title(); ?></span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contenido principal -->
        <section class="py-16">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">

                    <!-- Información del departamento -->
                    <?php if (get_the_content()) : ?>
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8 md:p-12 mb-12">
                            <div class="prose prose-lg max-w-none">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Información de contacto/servicios (opcional) -->
                    <div class="grid md:grid-cols-3 gap-6 mb-12">

                        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 text-center hover:shadow-md transition-shadow">
                            <div class="inline-flex items-center justify-center w-14 h-14 bg-green-100 text-green-600 rounded-full mb-4">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <h3 class="font-bold text-slate-900 mb-2">Ubicación</h3>
                            <p class="text-gray-600 text-sm">Camping SAEBU<br>San Luis</p>
                        </div>

                        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 text-center hover:shadow-md transition-shadow">
                            <div class="inline-flex items-center justify-center w-14 h-14 bg-green-100 text-green-600 rounded-full mb-4">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <h3 class="font-bold text-slate-900 mb-2">Contacto</h3>
                            <p class="text-gray-600 text-sm">Teléfono<br>Email</p>
                        </div>

                        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 text-center hover:shadow-md transition-shadow">
                            <div class="inline-flex items-center justify-center w-14 h-14 bg-green-100 text-green-600 rounded-full mb-4">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="font-bold text-slate-900 mb-2">Horarios</h3>
                            <p class="text-gray-600 text-sm">Lun - Vie<br>8:00 - 18:00</p>
                        </div>

                    </div>

                </div>
            </div>
        </section>

    <?php endwhile; ?>

    <!-- Noticias del departamento -->
    <section class="py-16 bg-white border-t border-gray-200">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">

                <!-- Encabezado de sección -->
                <div class="flex items-center justify-between mb-10">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-2">Noticias de Camping</h2>
                        <p class="text-gray-600">Mantente informado sobre nuestras actividades y novedades</p>
                    </div>
                </div>

                <!-- Grid de noticias -->
                <?php
                $noticias = saebu_get_noticias_by_departamento('camping', 6);

                if ($noticias->have_posts()) :
                ?>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-10">
                        <?php while ($noticias->have_posts()) : $noticias->the_post(); ?>

                            <article class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-shadow group">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>" class="block overflow-hidden">
                                        <?php the_post_thumbnail('noticia-thumbnail', array('class' => 'w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300')); ?>
                                    </a>
                                <?php else: ?>
                                    <a href="<?php the_permalink(); ?>" class="block h-56 bg-gradient-to-br from-green-500 to-green-700 flex items-center justify-center">
                                        <svg class="w-16 h-16 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </a>
                                <?php endif; ?>

                                <div class="p-6">
                                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <?php echo get_the_date('d/m/Y'); ?>
                                    </div>

                                    <h3 class="text-xl font-bold mb-3 leading-tight">
                                        <a href="<?php the_permalink(); ?>" class="text-slate-900 hover:text-green-600 transition-colors">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>

                                    <p class="text-gray-700 mb-4 line-clamp-3">
                                        <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                                    </p>

                                    <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-1 text-green-600 font-medium hover:text-green-700 transition-colors">
                                        Leer más
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </article>

                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>

                    <!-- Botón ver todas -->
                    <div class="text-center">
                        <a href="<?php echo get_term_link(get_term_by('slug', 'camping', 'departamento')); ?>"
                            class="inline-flex items-center gap-2 bg-green-600 text-white px-8 py-4 rounded-lg font-semibold hover:bg-green-700 shadow-lg hover:shadow-xl transition-all">
                            Ver todas las noticias de Camping
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>

                <?php else : ?>

                    <!-- Sin noticias -->
                    <div class="bg-gray-50 rounded-lg border border-gray-200 p-12 text-center">
                        <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">No hay noticias disponibles</h3>
                        <p class="text-gray-600">Aún no se han publicado noticias en esta sección.</p>
                    </div>

                <?php endif; ?>

            </div>
        </div>
    </section>

    <!-- Llamada a la acción -->
    <section class="py-16 bg-gradient-to-br from-green-600 to-green-800">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center text-white">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">¿Querés reservar el camping?</h2>
                <p class="text-xl text-green-100 mb-8 max-w-2xl mx-auto">
                    Contactanos para conocer la disponibilidad y los servicios que ofrecemos
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="<?php echo home_url('/contacto'); ?>"
                        class="inline-flex items-center justify-center gap-2 bg-white text-green-600 px-8 py-4 rounded-lg font-semibold hover:bg-green-50 shadow-xl transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Contactar
                    </a>
                    <a href="tel:+54XXXXXXXXXX"
                        class="inline-flex items-center justify-center gap-2 bg-transparent text-white border-2 border-white/80 px-8 py-4 rounded-lg font-semibold hover:bg-white/10 shadow-xl transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        Llamar
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>