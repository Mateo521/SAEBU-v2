<?php
/**
 * 404 Error Template
 */
get_header();
?>

<main class="min-h-screen bg-gradient-to-b from-gray-50 to-gray-100 py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            
            <!-- Error principal -->
            <div class="text-center mb-16">
                <!-- Número 404 animado -->
                <div class="relative mb-8">
                    <h1 class="text-[200px] md:text-[280px] font-black text-gray-200 leading-none select-none">
                        404
                    </h1>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center">
                            <svg class="w-24 h-24 md:w-32 md:h-32 text-[#416ed2] mx-auto mb-4 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">
                    Página no encontrada
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto mb-8">
                    Lo sentimos, la página que estás buscando no existe, ha sido movida o está temporalmente no disponible.
                </p>

                <!-- Botón principal -->
                <a href="<?php echo home_url('/'); ?>" 
                   class="inline-flex items-center gap-2 bg-[#416ed2] text-white px-8 py-4 rounded-lg font-semibold hover:bg-blue-700 shadow-lg hover:shadow-xl transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Volver al inicio
                </a>
            </div>

            <!-- Búsqueda -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8 mb-8">
                <div class="max-w-2xl mx-auto">
                    <h3 class="text-2xl font-bold text-slate-900 mb-4 text-center">
                        ¿Qué estabas buscando?
                    </h3>
                    <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="relative">
                        <div class="flex gap-2">
                            <div class="relative flex-1">
                                <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                <input type="search" 
                                       name="s" 
                                       placeholder="Buscar en SAEBU..." 
                                       class="w-full pl-12 pr-4 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-lg"
                                       required>
                            </div>
                            <button type="submit" 
                                    class="bg-[#416ed2] text-white px-8 py-4 rounded-lg font-semibold hover:bg-blue-700 transition-colors whitespace-nowrap">
                                Buscar
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Enlaces útiles -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8 mb-8">
                <h3 class="text-2xl font-bold text-slate-900 mb-6 text-center">
                    Enlaces útiles
                </h3>
                <div class="grid md:grid-cols-3 gap-4">
                    <a href="<?php echo home_url('/'); ?>" 
                       class="group flex items-center gap-4 p-4 rounded-lg border border-gray-200 hover:border-blue-500 hover:shadow-md transition-all">
                        <div class="flex-shrink-0 w-12 h-12 bg-blue-100 text-[#416ed2] rounded-lg flex items-center justify-center group-hover:bg-[#416ed2] group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 group-hover:text-[#416ed2] text-base">Inicio</h4>
                            <p class="text-sm text-gray-600">Página principal</p>
                        </div>
                    </a>

                    <a href="<?php echo home_url('/noticias'); ?>" 
                       class="group flex items-center gap-4 p-4 rounded-lg border border-gray-200 hover:border-blue-500 hover:shadow-md transition-all">
                        <div class="flex-shrink-0 w-12 h-12 bg-blue-100 text-[#416ed2] rounded-lg flex items-center justify-center group-hover:bg-[#416ed2] group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 group-hover:text-[#416ed2] text-base">Noticias</h4>
                            <p class="text-sm text-gray-600">Ver todas</p>
                        </div>
                    </a>

                    <a href="<?php echo home_url('/contacto'); ?>" 
                       class="group flex items-center gap-4 p-4 rounded-lg border border-gray-200 hover:border-blue-500 hover:shadow-md transition-all">
                        <div class="flex-shrink-0 w-12 h-12 bg-blue-100 text-[#416ed2] rounded-lg flex items-center justify-center group-hover:bg-[#416ed2] group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 group-hover:text-[#416ed2] text-base">Contacto</h4>
                            <p class="text-sm text-gray-600">Comunicate</p>
                        </div>
                    </a>
                </div>

                <!-- Más enlaces -->
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <div class="flex flex-wrap gap-3 justify-center">
                        <a href="<?php echo home_url('/becas'); ?>" 
                           class="text-[#416ed2] hover:text-blue-700 font-medium">Becas</a>
                        <span class="text-gray-300">•</span>
                        <a href="<?php echo home_url('/camping'); ?>" 
                           class="text-[#416ed2] hover:text-blue-700 font-medium">Camping</a>
                        <span class="text-gray-300">•</span>
                        <a href="<?php echo home_url('/ceseu'); ?>" 
                           class="text-[#416ed2] hover:text-blue-700 font-medium">CESEU</a>
                        <span class="text-gray-300">•</span>
                        <a href="<?php echo home_url('/dpto-trabajo-social'); ?>" 
                           class="text-[#416ed2] hover:text-blue-700 font-medium">Trabajo Social</a>
                        <span class="text-gray-300">•</span>
                        <a href="<?php echo home_url('/deportes'); ?>" 
                           class="text-[#416ed2] hover:text-blue-700 font-medium">Deportes</a>
                    </div>
                </div>
            </div>

            <!-- Noticias recientes -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                <h3 class="text-2xl font-bold text-slate-900 mb-6 text-center">
                    Noticias Recientes
                </h3>

                <?php
                $recent = new WP_Query(array(
                    'post_type' => 'noticia',
                    'posts_per_page' => 3,
                ));
                
                if ($recent->have_posts()) :
                ?>
                    <div class="grid md:grid-cols-3 gap-6">
                        <?php while ($recent->have_posts()) : $recent->the_post(); ?>
                            
                            <article class="group border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>" class="block overflow-hidden">
                                        <?php the_post_thumbnail('noticia-thumbnail', array('class' => 'w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300')); ?>
                                    </a>
                                <?php else: ?>
                                    <a href="<?php the_permalink(); ?>" class="block h-48 bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center">
                                        <svg class="w-16 h-16 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </a>
                                <?php endif; ?>
                                
                                <div class="p-5">
                                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <?php echo get_the_date('d/m/Y'); ?>
                                    </div>
                                    
                                    <h4 class="text-lg font-bold mb-3 leading-tight line-clamp-2">
                                        <a href="<?php the_permalink(); ?>" class="text-slate-900 hover:text-[#416ed2] transition-colors">
                                            <?php the_title(); ?>
                                        </a>
                                    </h4>
                                    
                                    <a href="<?php the_permalink(); ?>" 
                                       class="inline-flex items-center gap-1 text-[#416ed2] font-medium hover:text-blue-700 transition-colors text-sm">
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
                <?php else : ?>
                    <p class="text-center text-gray-600">No hay noticias recientes disponibles.</p>
                <?php endif; ?>
            </div>

            <!-- Mensaje de ayuda -->
            <div class="mt-8 text-center">
                <p class="text-gray-600 mb-4">
                    ¿Seguís teniendo problemas para encontrar lo que buscás?
                </p>
                <a href="<?php echo home_url('/contacto'); ?>" 
                   class="inline-flex items-center gap-2 text-[#416ed2] hover:text-blue-700 font-medium">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                    Contactanos para ayudarte
                </a>
            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>
