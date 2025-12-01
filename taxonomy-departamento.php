<?php
/**
 * Template para mostrar todas las noticias de un departamento específico
 */
get_header();

$term = get_queried_object();
$total_posts = $wp_query->found_posts;
?>

<main class="bg-gray-50">
    
    <!-- Breadcrumbs -->
    <?php saebu_breadcrumbs(); ?>
    
    <!-- Hero del departamento -->
    <section class="bg-gradient-to-br from-blue-600 to-blue-800 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-block mb-4">
                    <span class="bg-white/20 backdrop-blur-md text-white px-4 py-2 rounded-full text-sm font-medium border border-white/30">
                        Departamento
                    </span>
                </div>
                
                <h1 class="text-4xl md:text-5xl font-bold mb-4">
                    <?php echo esc_html($term->name); ?>
                </h1>
                
                <?php if ($term->description) : ?>
                    <div class="text-lg text-blue-50 leading-relaxed max-w-2xl mx-auto">
                        <?php echo wpautop($term->description); ?>
                    </div>
                <?php endif; ?>
                
                <div class="mt-6 flex items-center justify-center gap-2 text-blue-100">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                    </svg>
                    <span class="text-sm font-medium"><?php echo $total_posts; ?> <?php echo $total_posts === 1 ? 'noticia' : 'noticias'; ?></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Filtros y ordenamiento -->
    <section class="py-6 bg-white border-b border-gray-200">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto flex flex-wrap items-center justify-between gap-4">
                <div class="text-sm text-gray-600">
                    Mostrando <span class="font-semibold text-gray-900"><?php echo $total_posts; ?></span> <?php echo $total_posts === 1 ? 'resultado' : 'resultados'; ?>
                </div>
                
                <div class="flex flex-wrap items-center gap-3">
                    <a href="<?php echo home_url('/' . $term->slug); ?>" 
                       class="inline-flex items-center gap-2 text-sm text-gray-700 hover:text-blue-600 font-medium">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Volver a <?php echo esc_html($term->name); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Lista de noticias -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                
                <?php if (have_posts()) : ?>
                    
                    <div class="space-y-8">
                        <?php while (have_posts()) : the_post(); ?>
                            
                            <article class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                                <div class="md:flex">
                                    
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="md:w-1/3 lg:w-1/4">
                                            <a href="<?php the_permalink(); ?>" class="block h-full">
                                                <?php the_post_thumbnail('noticia-destacada', array('class' => 'w-full h-64 md:h-full object-cover hover:opacity-90 transition-opacity')); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <div class="<?php echo has_post_thumbnail() ? 'md:w-2/3 lg:w-3/4' : 'w-full'; ?> p-6 md:p-8">
                                        
                                        <!-- Meta superior -->
                                        <div class="flex flex-wrap items-center gap-3 mb-4">
                                            <span class="inline-flex items-center gap-1 text-sm text-gray-600">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                </svg>
                                                <?php echo get_the_date('d/m/Y'); ?>
                                            </span>
                                            
                                            <span class="inline-flex items-center gap-1 text-sm text-gray-600">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                                </svg>
                                                <?php the_author(); ?>
                                            </span>
                                            
                                            <?php if (get_post_meta(get_the_ID(), '_noticia_destacada', true) === '1') : ?>
                                                <span class="inline-block bg-yellow-100 text-yellow-800 text-xs font-bold px-2 py-1 rounded-full uppercase tracking-wide">
                                                    Destacada
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                        
                                        <!-- Título -->
                                        <h2 class="text-2xl md:text-3xl font-bold text-slate-900 mb-4 leading-tight">
                                            <a href="<?php the_permalink(); ?>" class="hover:text-blue-600 transition-colors">
                                                <?php the_title(); ?>
                                            </a>
                                        </h2>
                                        
                                        <!-- Excerpt -->
                                        <div class="text-gray-700 mb-6 leading-relaxed">
                                            <?php echo wp_trim_words(get_the_excerpt(), 40); ?>
                                        </div>
                                        
                                        <!-- Tags si existen -->
                                        <?php
                                        $tags = get_the_tags();
                                        if ($tags) :
                                        ?>
                                            <div class="flex flex-wrap gap-2 mb-4">
                                                <?php foreach (array_slice($tags, 0, 3) as $tag) : ?>
                                                    <a href="<?php echo get_tag_link($tag->term_id); ?>" 
                                                       class="inline-block bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded hover:bg-gray-200">
                                                        #<?php echo esc_html($tag->name); ?>
                                                    </a>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                        
                                        <!-- Botón leer más -->
                                        <a href="<?php the_permalink(); ?>" 
                                           class="inline-flex items-center gap-2 text-blue-600 font-semibold hover:text-blue-700 transition-colors">
                                            Leer noticia completa
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    </div>
                                    
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
                                        // Añadir clases de Tailwind a los enlaces
                                        $page = str_replace('page-numbers', 'inline-flex items-center gap-1 px-4 py-2 text-sm font-medium rounded-md', $page);
                                        $page = str_replace('current', 'bg-blue-600 text-white', $page);
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
                    
                    <!-- Sin resultados -->
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-12 text-center">
                        <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">No se encontraron noticias</h3>
                        <p class="text-gray-600 mb-6">
                            Aún no hay noticias publicadas en este departamento.
                        </p>
                        <a href="<?php echo home_url('/'); ?>" 
                           class="inline-flex items-center gap-2 bg-blue-600 text-white px-6 py-3 rounded-md font-medium hover:bg-blue-700">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            Volver al inicio
                        </a>
                    </div>
                    
                <?php endif; ?>
                
            </div>
        </div>
    </section>

    <!-- Banner de llamada a la acción -->
    <section class="py-16 bg-white border-t border-gray-200">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto bg-gradient-to-br from-blue-600 to-blue-800 rounded-2xl p-8 md:p-12 text-center text-white">
                <h2 class="text-3xl font-bold mb-4">¿Necesitas más información?</h2>
                <p class="text-lg text-blue-100 mb-8 max-w-2xl mx-auto">
                    Visita la página principal de <?php echo esc_html($term->name); ?> para conocer todos nuestros servicios y actividades.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="<?php echo home_url('/' . $term->slug); ?>" 
                       class="inline-flex items-center justify-center gap-2 bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 shadow-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                        Ir a <?php echo esc_html($term->name); ?>
                    </a>
                    <a href="<?php echo home_url('/contacto'); ?>" 
                       class="inline-flex items-center justify-center gap-2 bg-transparent text-white border-2 border-white/80 px-8 py-3 rounded-lg font-semibold hover:bg-white/10 shadow-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Contactar
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
