<?php
/**
 * Template para el archivo general de noticias
 */
get_header();
?>

<main class="bg-gray-50">
    
    <!-- Breadcrumbs -->
    <?php saebu_breadcrumbs(); ?>
    
    <!-- Hero -->
    <section class="bg-gradient-to-br from-slate-800 to-slate-900 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-2xl md:text-5xl font-bold mb-4">
                    Todas las Noticias
                </h1>
                <p class="text-lg text-gray-300">
                    Mantente informado sobre todas las actividades y novedades de SAEBU
                </p>
            </div>
        </div>
    </section>

    <!-- Filtro por departamentos -->
    <section class="py-6 bg-white border-b border-gray-200">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="flex flex-wrap items-center gap-3">
                    <span class="text-sm font-medium text-gray-700">Filtrar por:</span>
                    <a href="<?php echo get_post_type_archive_link('noticia'); ?>" 
                       class="inline-block px-4 py-2 text-sm rounded-md bg-[#416ed2] text-white font-medium">
                        Todas
                    </a>
                    <?php
                    $departamentos = get_terms(array(
                        'taxonomy' => 'departamento',
                        'hide_empty' => true,
                    ));
                    
                    if (!is_wp_error($departamentos) && !empty($departamentos)) :
                        foreach ($departamentos as $depto) :
                    ?>
                        <a href="<?php echo get_term_link($depto); ?>" 
                           class="inline-block px-4 py-2 text-sm rounded-md bg-gray-100 text-gray-700 hover:bg-gray-200 font-medium">
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

    <!-- Grid de noticias -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                
                <?php if (have_posts()) : ?>
                    
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <?php while (have_posts()) : the_post(); ?>
                            
                            <article class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>" class="block overflow-hidden">
                                        <?php the_post_thumbnail('noticia-thumbnail', array('class' => 'w-full h-56 object-cover hover:scale-105 transition-transform duration-300')); ?>
                                    </a>
                                <?php endif; ?>
                                
                                <div class="p-6">
                                    <?php
                                    $terms = get_the_terms(get_the_ID(), 'departamento');
                                    if ($terms && !is_wp_error($terms)) :
                                        $term = array_shift($terms);
                                    ?>
                                        <a href="<?php echo get_term_link($term); ?>" 
                                           class="inline-block bg-blue-50 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full mb-3 hover:bg-blue-100">
                                            <?php echo esc_html($term->name); ?>
                                        </a>
                                    <?php endif; ?>
                                    
                                    <h2 class="text-xl font-bold mb-3 leading-tight">
                                        <a href="<?php the_permalink(); ?>" class="text-slate-900 hover:text-[#416ed2] transition-colors">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                    
                                    <p class="text-gray-500 text-sm mb-3">
                                        <?php echo get_the_date('d/m/Y'); ?>
                                    </p>
                                    
                                    <p class="text-gray-700 mb-4 line-clamp-3">
                                        <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                                    </p>
                                    
                                    <a href="<?php the_permalink(); ?>" class="text-[#416ed2] font-medium text-sm hover:text-blue-700">
                                        Leer más →
                                    </a>
                                </div>
                            </article>
                            
                        <?php endwhile; ?>
                    </div>

                    <!-- Paginación -->
                    <?php
                    $pagination = paginate_links(array(
                        'mid_size' => 2,
                        'prev_text' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg><span>Anterior</span>',
                        'next_text' => '<span>Siguiente</span><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>',
                        'type' => 'array',
                    ));

                    if ($pagination) :
                    ?>
                        <nav class="mt-12" aria-label="Paginación">
                            <ul class="flex flex-wrap items-center justify-center gap-2">
                                <?php foreach ($pagination as $page) : ?>
                                    <li>
                                        <?php 
                                        $page = str_replace('page-numbers', 'inline-flex items-center gap-1 px-4 py-2 text-sm font-medium rounded-md', $page);
                                        $page = str_replace('current', 'bg-[#416ed2] text-white', $page);
                                        $page = str_replace('<a', '<a class="bg-white text-gray-700 border border-gray-300 hover:bg-gray-50 hover:border-blue-500"', $page);
                                        $page = str_replace('dots', 'text-gray-500', $page);
                                        echo $page;
                                        ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </nav>
                    <?php endif; ?>

                <?php else : ?>
                    
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-12 text-center">
                        <p class="text-gray-600">No se encontraron noticias.</p>
                    </div>
                    
                <?php endif; ?>
                
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
