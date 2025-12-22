<?php
/**
 * Template para el archivo general de noticias (Estilo Institucional Moderno - Sans Serif)
 */
get_header();
?>

<main class="bg-white min-h-screen font-sans text-slate-800">
    
    <header class="bg-[#0f172a] text-white pt-20 pb-16"> <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="mb-8 text-xs font-bold uppercase tracking-widest text-slate-400">
                    <?php if (function_exists('saebu_breadcrumbs')) saebu_breadcrumbs(); ?>
                </div>

                <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
                    <div>
                        <!--h1 class="text-4xl md:text-5xl font-bold tracking-tight mb-4">
                            Sala de Prensa
                        </h1-->
                        <p class="text-slate-400 text-lg max-w-2xl font-light">
                            Actualidad, comunicados oficiales y agenda de actividades de la institución.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="border-b border-gray-200 sticky top-0 z-30 bg-white/95 backdrop-blur-sm">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="flex flex-wrap items-center gap-x-8 gap-y-4 py-4 overflow-x-auto whitespace-nowrap scrollbar-hide">
                    
                    <span class="text-xs font-bold text-gray-700 uppercase tracking-widest mr-2">Filtrar:</span>

                    <a href="<?php echo get_post_type_archive_link('noticia'); ?>" 
                       class="text-sm font-bold pb-1 border-b-2 transition-colors <?php echo !is_tax() ? 'text-[#005eb8] border-[#005eb8]' : 'text-gray-500 border-transparent hover:text-gray-800'; ?>">
                        Todas
                    </a>

                    <?php
                    $departamentos = get_terms(array(
                        'taxonomy' => 'departamento',
                        'hide_empty' => true,
                    ));
                    
                    if (!is_wp_error($departamentos) && !empty($departamentos)) :
                        foreach ($departamentos as $depto) :
                            // Detectar si esta categoría está activa
                            $is_active = is_tax('departamento', $depto->term_id);
                            $active_class = $is_active ? 'text-[#005eb8] border-[#005eb8]' : 'text-gray-500 border-transparent hover:text-gray-800';
                    ?>
                        <a href="<?php echo get_term_link($depto); ?>" 
                           class="text-sm font-bold pb-1 border-b-2 transition-colors <?php echo $active_class; ?>">
                            <?php echo esc_html($depto->name); ?>
                        </a>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                
                <?php if (have_posts()) : ?>
                    
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <?php while (have_posts()) : the_post(); ?>
                            
                            <article class="group bg-white flex flex-col h-full border border-gray-200 hover:border-gray-300 transition-all duration-300 shadow-sm hover:shadow-md">
                                
                                <a href="<?php the_permalink(); ?>" title="Leer noticia  <?php the_title(); ?>" class="block overflow-hidden relative aspect-video bg-gray-100">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out')); ?>
                                    <?php else: ?>
                                        <div class="flex items-center justify-center w-full h-full text-gray-300">
                                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <?php
                                    $terms = get_the_terms(get_the_ID(), 'departamento');
                                    if ($terms && !is_wp_error($terms)) :
                                        $term = array_shift($terms);
                                    ?>
                                        <div class="absolute bottom-0 left-0 bg-[#005eb8] text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1.5">
                                            <?php echo esc_html($term->name); ?>
                                        </div>
                                    <?php endif; ?>
                                </a>
                                
                                <div class="p-6 flex flex-col flex-1">
                                    <div class="text-xs text-gray-500 font-medium mb-3 flex items-center gap-2">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        <?php echo get_the_date('d \d\e F, Y'); ?>
                                    </div>
                                    
                                    <h2 class="text-lg font-bold text-slate-900 mb-3 leading-snug group-hover:text-[#005eb8] transition-colors">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                    
                                    <p class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-3 flex-1">
                                        <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                                    </p>
                                    
                                    <div class="mt-auto pt-4 border-t border-gray-100">
                                        <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-xs font-bold uppercase tracking-wide text-slate-800 hover:text-[#005eb8] transition-colors">
                                            Ver más
                                            <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                        </a>
                                    </div>
                                </div>
                            </article>
                            
                        <?php endwhile; ?>
                    </div>

                    <?php
                    $pagination = paginate_links(array(
                        'mid_size' => 2,
                        'prev_text' => '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>',
                        'next_text' => '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>',
                        'type' => 'array',
                    ));

                    if ($pagination) :
                    ?>
                        <nav class="mt-16 flex justify-center" aria-label="Paginación">
                            <ul class="flex flex-wrap items-center gap-1">
                                <?php foreach ($pagination as $page) : ?>
                                    <li>
                                        <?php 
                                        // Estilo Botón Cuadrado Simple
                                        $page = str_replace('page-numbers', 'flex items-center justify-center w-10 h-10 text-sm font-bold border border-gray-200 bg-white text-gray-600 hover:border-gray-400 hover:text-gray-900 transition-all', $page);
                                        // Estilo Activo (Azul Oscuro)
                                        $page = str_replace('current', '!bg-[#0f172a] !text-white !border-[#0f172a]', $page);
                                        // Quitar puntos suspensivos estilo link
                                        $page = str_replace('dots', 'border-none', $page);
                                        echo $page;
                                        ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </nav>
                    <?php endif; ?>

                <?php else : ?>
                    
                    <div class="flex flex-col items-center justify-center py-20 text-center">
                        <div class="text-gray-300 mb-4">
                            <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">No hay noticias disponibles</h3>
                        <p class="text-gray-500 mt-2">Intenta cambiar los filtros de búsqueda.</p>
                        <a href="<?php echo get_post_type_archive_link('noticia'); ?>" class="mt-6 text-sm font-bold text-[#005eb8] hover:underline">Ver todas las noticias</a>
                    </div>
                    
                <?php endif; ?>
                
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>