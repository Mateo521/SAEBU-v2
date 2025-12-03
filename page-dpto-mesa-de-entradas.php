<?php
/*
Template Name: Mesa de Entrada y Personal
*/
get_header();
?>

<main class="bg-gradient-to-b from-white to-gray-50">

    <?php while (have_posts()) : the_post(); ?>

        <!-- Hero minimalista -->
        <section class="relative py-16 md:py-24 bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 overflow-hidden">
            <!-- Patrón de fondo decorativo -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;"></div>
            </div>

            <div class="container mx-auto px-4 relative">
                <div class="max-w-4xl mx-auto text-center">
                    <!-- Breadcrumb minimalista -->
                    <div class="mb-6">
                        <nav class="inline-flex items-center gap-2 text-sm text-blue-100">
                            <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors">Inicio</a>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            <span class="text-white font-medium">Mesa de Entrada y Personal</span>
                        </nav>
                    </div>

                    <!-- Badge -->
                    <div class="inline-block mb-6">
                        <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-xl text-white px-5 py-2.5 rounded-full text-sm font-semibold border border-white/20 shadow-lg">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Departamento
                        </span>
                    </div>

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                        Mesa de Entrada<br>y Personal
                    </h1>

                    <p class="text-xl text-blue-100 max-w-2xl mx-auto leading-relaxed">
                        Atención y gestión de trámites estudiantiles
                    </p>
                </div>
            </div>
        </section>

        <!-- Contenido Principal -->
        <section class="py-16 md:py-20">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Tarjetas de Tareas -->
                    <div class="mb-16">
                        <div class="flex items-center gap-3 mb-8">
                            <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold text-slate-900">Tareas de interés público</h2>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <!-- Tarjeta 1 -->
                            <div class="group bg-white border-2 border-gray-200 rounded-2xl p-8 hover:border-blue-500 hover:shadow-xl transition-all duration-300">
                                <div class="flex items-start gap-4">
                                    <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 text-white rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-xl font-bold text-slate-900 mb-3">Documentación de Comedor</h3>
                                        <p class="text-gray-600 leading-relaxed">
                                            Recepción de la documentación de los estudiantes (universitarios y de la ENJPP) que quieran acceder al comedor universitario.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Tarjeta 2 -->
                            <div class="group bg-white border-2 border-gray-200 rounded-2xl p-8 hover:border-purple-500 hover:shadow-xl transition-all duration-300">
                                <div class="flex items-start gap-4">
                                    <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-600 text-white rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-xl font-bold text-slate-900 mb-3">Gestión de Trámites</h3>
                                        <p class="text-gray-600 leading-relaxed">
                                            Recepción de notas, expedientes, actuaciones y toda documentación oficial relacionada con gestiones estudiantiles.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Tarjeta 3 -->
                            <div class="group bg-white border-2 border-gray-200 rounded-2xl p-8 hover:border-green-500 hover:shadow-xl transition-all duration-300 md:col-span-2">
                                <div class="flex items-start gap-4">
                                    <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-green-500 to-green-600 text-white rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-xl font-bold text-slate-900 mb-3">Información y Asesoramiento</h3>
                                        <p class="text-gray-600 leading-relaxed">
                                            También podemos brindar información o asesoramiento personalizado a quien lo necesite sobre trámites y gestiones universitarias.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contacto -->
                    <div class="mb-16">
                        <div class="flex items-center gap-3 mb-8">
                            <div class="w-12 h-12 bg-green-100 text-green-600 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold text-slate-900">Contacto</h2>
                        </div>

                        <div class="bg-gradient-to-br from-white to-gray-50 border-2 border-gray-200 rounded-2xl p-8 md:p-10">
                            <div class="grid md:grid-cols-2 gap-8">

                                <!-- Teléfono -->
                                <a href="tel:42520300" class="group flex items-start gap-5 p-6 bg-white rounded-xl border-2 border-gray-200 hover:border-blue-500 hover:shadow-lg transition-all">
                                    <div class="flex-shrink-0 w-14 h-14 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-colors">
                                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide mb-1">Teléfono</p>
                                        <p class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors">4520300</p>
                                        <p class="text-sm text-gray-600 mt-1">Interno 8139</p>
                                    </div>
                                </a>

                                <!-- Email -->
                                <a href="mailto:mesadeentradassaebu@gmail.com" class="group flex items-start gap-5 p-6 bg-white rounded-xl border-2 border-gray-200 hover:border-purple-500 hover:shadow-lg transition-all">
                                    <div class="flex-shrink-0 w-14 h-14 bg-purple-100 text-purple-600 rounded-xl flex items-center justify-center group-hover:bg-purple-600 group-hover:text-white transition-colors">
                                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide mb-1">Email</p>
                                        <p class="text-base md:text-lg font-bold text-slate-900 group-hover:text-purple-600 transition-colors break-all">
                                            mesadeentradassaebu@gmail.com
                                        </p>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>

                    <!-- Noticias Relacionadas -->
                    <div>
                        <div class="flex items-center gap-3 mb-8">
                            <div class="w-12 h-12 bg-orange-100 text-orange-600 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold text-slate-900">Últimas Noticias</h2>
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
                                        'terms' => 'mesa-de-entrada', // Ajusta el slug según tu taxonomía
                                    ),
                                ),
                            ));

                            if ($news_query->have_posts()) :
                                while ($news_query->have_posts()) : $news_query->the_post();
                            ?>
                                    <article class="group bg-white border-2 border-gray-200 rounded-2xl overflow-hidden hover:border-blue-500 hover:shadow-xl transition-all duration-300">

                                        <!-- Imagen -->
                                        <div class="relative h-48 overflow-hidden bg-gradient-to-br from-blue-100 to-purple-100">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-cover group-hover:scale-110 transition-transform duration-500')); ?>
                                            <?php else : ?>
                                                <div class="w-full h-full flex items-center justify-center">
                                                    <svg class="w-16 h-16 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                                    </svg>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <!-- Contenido -->
                                        <div class="p-6">
                                            <p class="text-xs text-gray-500 mb-2 flex items-center gap-1">
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                </svg>
                                                <?php echo get_the_date('d/m/Y'); ?>
                                            </p>

                                            <h3 class="text-lg font-bold text-slate-900 mb-2 line-clamp-2 group-hover:text-blue-600 transition-colors">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h3>

                                            <p class="text-sm text-gray-600 line-clamp-2 mb-4">
                                                <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                                            </p>

                                            <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-1 text-blue-600 font-semibold text-sm hover:gap-2 transition-all">
                                                Leer más
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </article>
                                <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                                ?>
                                <div class="col-span-full text-center py-12">
                                    <p class="text-gray-500">No hay noticias disponibles en este momento</p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    <?php endwhile; ?>
 
</main>

<?php get_footer(); ?>