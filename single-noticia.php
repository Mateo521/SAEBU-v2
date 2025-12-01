<?php get_header(); ?>

<main class="bg-gray-50">
    <?php while (have_posts()) : the_post(); ?>
        
        <!-- Breadcrumbs mejorado -->
        <?php saebu_breadcrumbs(); ?>
        
        <!-- Hero de la noticia -->
        <?php if (has_post_thumbnail()) : ?>
            <div class="relative h-96 bg-slate-900 overflow-hidden">
                <?php the_post_thumbnail('banner-grande', array('class' => 'w-full h-full object-cover opacity-60')); ?>
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent"></div>
                
                <div class="absolute bottom-0 left-0 right-0 pb-12">
                    <div class="container mx-auto px-4">
                        <div class="max-w-4xl">
                            <?php
                            $destacada = get_post_meta(get_the_ID(), '_noticia_destacada', true);
                            if ($destacada === '1') :
                            ?>
                                <span class="inline-block bg-yellow-500 text-slate-900 text-xs font-bold px-3 py-1 rounded-full mb-4 uppercase tracking-wide">
                                    Destacada
                                </span>
                            <?php endif; ?>
                            
                            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4 leading-tight">
                                <?php the_title(); ?>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- Contenido principal -->
        <article class="py-12">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">
                    
                    <?php if (!has_post_thumbnail()) : ?>
                        <!-- Si no hay imagen destacada, mostrar título aquí -->
                        <header class="mb-8">
                            <?php
                            $destacada = get_post_meta(get_the_ID(), '_noticia_destacada', true);
                            if ($destacada === '1') :
                            ?>
                                <span class="inline-block bg-yellow-500 text-slate-900 text-xs font-bold px-3 py-1 rounded-full mb-4 uppercase tracking-wide">
                                    Destacada
                                </span>
                            <?php endif; ?>
                            
                            <h1 class="text-4xl md:text-5xl font-bold text-slate-900 mb-4 leading-tight">
                                <?php the_title(); ?>
                            </h1>
                        </header>
                    <?php endif; ?>

                    <!-- Meta información -->
                    <div class="flex flex-wrap items-center gap-4 pb-6 mb-8 border-b border-gray-200">
                        <div class="flex items-center gap-2 text-gray-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-sm font-medium"><?php echo get_the_date('d/m/Y'); ?></span>
                        </div>
                        
                        <div class="flex items-center gap-2 text-gray-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span class="text-sm font-medium">Por <?php the_author(); ?></span>
                        </div>
                        
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'departamento');
                        if ($terms && !is_wp_error($terms)) :
                            foreach ($terms as $term) :
                        ?>
                            <a href="<?php echo get_term_link($term); ?>" 
                               class="inline-flex items-center gap-1 bg-blue-100 text-blue-800 text-sm font-semibold px-3 py-1 rounded-full hover:bg-blue-200">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                </svg>
                                <?php echo esc_html($term->name); ?>
                            </a>
                        <?php
                            endforeach;
                        endif;
                        ?>
                    </div>

                    <!-- Contenido de la noticia -->
                    <div class="prose prose-lg max-w-none mb-12">
                        <div class="bg-white rounded-lg shadow-sm p-8 md:p-12">
                            <?php the_content(); ?>
                        </div>
                    </div>

                    <!-- Tags -->
                    <?php
                    $tags = get_the_tags();
                    if ($tags) :
                    ?>
                        <div class="mb-8 pb-8 border-b border-gray-200">
                            <div class="flex flex-wrap items-center gap-2">
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                </svg>
                                <?php foreach ($tags as $tag) : ?>
                                    <a href="<?php echo get_tag_link($tag->term_id); ?>" 
                                       class="inline-block bg-gray-100 text-gray-700 text-sm px-3 py-1 rounded-md hover:bg-gray-200">
                                        <?php echo esc_html($tag->name); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Compartir en redes sociales -->
                    <div class="bg-white rounded-lg shadow-sm p-6 mb-12">
                        <h3 class="text-lg font-bold text-slate-900 mb-4">Compartir esta noticia</h3>
                        <div class="flex flex-wrap gap-3">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" 
                               target="_blank" rel="noopener"
                               class="inline-flex items-center gap-2 bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 font-medium">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                                Facebook
                            </a>
                            
                            <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" 
                               target="_blank" rel="noopener"
                               class="inline-flex items-center gap-2 bg-sky-500 text-white px-4 py-2 rounded-md hover:bg-sky-600 font-medium">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                                Twitter
                            </a>
                            
                            <a href="https://wa.me/?text=<?php echo urlencode(get_the_title() . ' ' . get_permalink()); ?>" 
                               target="_blank" rel="noopener"
                               class="inline-flex items-center gap-2 bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 font-medium">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                </svg>
                                WhatsApp
                            </a>
                            
                            <a href="mailto:?subject=<?php echo urlencode(get_the_title()); ?>&body=<?php echo urlencode(get_permalink()); ?>"
                               class="inline-flex items-center gap-2 bg-gray-600 text-white px-4 py-2 rounded-md hover:bg-gray-700 font-medium">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                Email
                            </a>
                        </div>
                    </div>

                    <!-- Navegación entre noticias -->
                    <div class="grid md:grid-cols-2 gap-6 mb-12">
                        <?php
                        $prev_post = get_previous_post();
                        if ($prev_post) :
                        ?>
                            <a href="<?php echo get_permalink($prev_post); ?>" 
                               class="group bg-white rounded-lg shadow-sm p-6 border border-gray-200 hover:border-blue-500 hover:shadow-md">
                                <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                    Noticia anterior
                                </div>
                                <h4 class="font-bold text-slate-900 group-hover:text-blue-600">
                                    <?php echo get_the_title($prev_post); ?>
                                </h4>
                            </a>
                        <?php endif; ?>
                        
                        <?php
                        $next_post = get_next_post();
                        if ($next_post) :
                        ?>
                            <a href="<?php echo get_permalink($next_post); ?>" 
                               class="group bg-white rounded-lg shadow-sm p-6 border border-gray-200 hover:border-blue-500 hover:shadow-md text-right">
                                <div class="flex items-center justify-end gap-2 text-sm text-gray-500 mb-2">
                                    Noticia siguiente
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </div>
                                <h4 class="font-bold text-slate-900 group-hover:text-blue-600">
                                    <?php echo get_the_title($next_post); ?>
                                </h4>
                            </a>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </article>

        <!-- Noticias relacionadas -->
        <?php
        $terms = get_the_terms(get_the_ID(), 'departamento');
        if ($terms && !is_wp_error($terms)) :
            $term_ids = wp_list_pluck($terms, 'term_id');
            
            $related_args = array(
                'post_type' => 'noticia',
                'posts_per_page' => 3,
                'post__not_in' => array(get_the_ID()),
                'tax_query' => array(
                    array(
                        'taxonomy' => 'departamento',
                        'field' => 'term_id',
                        'terms' => $term_ids,
                    ),
                ),
            );
            
            $related_query = new WP_Query($related_args);
            
            if ($related_query->have_posts()) :
        ?>
            <section class="py-16 bg-white border-t border-gray-200">
                <div class="container mx-auto px-4">
                    <div class="max-w-6xl mx-auto">
                        <h2 class="text-3xl font-bold text-slate-900 mb-8">Noticias Relacionadas</h2>
                        
                        <div class="grid md:grid-cols-3 gap-8">
                            <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
                                <article class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <a href="<?php the_permalink(); ?>" class="block overflow-hidden">
                                            <?php the_post_thumbnail('noticia-thumbnail', array('class' => 'w-full h-48 object-cover hover:scale-105 transition-transform duration-300')); ?>
                                        </a>
                                    <?php endif; ?>
                                    
                                    <div class="p-6">
                                        <h3 class="text-lg font-bold mb-2 leading-tight">
                                            <a href="<?php the_permalink(); ?>" class="text-slate-900 hover:text-blue-600">
                                                <?php the_title(); ?>
                                            </a>
                                        </h3>
                                        
                                        <p class="text-gray-500 text-sm mb-3">
                                            <?php echo get_the_date('d/m/Y'); ?>
                                        </p>
                                        
                                        <p class="text-gray-700 text-sm mb-4 line-clamp-3">
                                            <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                                        </p>
                                        
                                        <a href="<?php the_permalink(); ?>" class="text-blue-600 font-medium text-sm hover:text-blue-700">
                                            Leer más →
                                        </a>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php
            endif;
        endif;
        ?>

        <!-- Comentarios -->
        <?php if (comments_open() || get_comments_number()) : ?>
            <section class="py-12 bg-gray-50">
                <div class="container mx-auto px-4">
                    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-sm p-8">
                        <?php comments_template(); ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
