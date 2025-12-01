<?php get_header(); ?>

<main class="single-noticia">
    <div class="container">
        <?php saebu_breadcrumbs(); ?>
        
        <?php
        while (have_posts()) : the_post();
        ?>
            <article class="noticia-content">
                <header class="noticia-header">
                    <?php
                    // Mostrar badge si es destacada
                    $destacada = get_post_meta(get_the_ID(), '_noticia_destacada', true);
                    if ($destacada === '1') :
                    ?>
                        <span class="noticia-destacada-badge">Destacada</span>
                    <?php endif; ?>
                    
                    <h1><?php the_title(); ?></h1>
                    
                    <div class="noticia-meta">
                        <span class="noticia-date"><?php echo get_the_date(); ?></span>
                        <span class="noticia-author">Por <?php the_author(); ?></span>
                        
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'departamento');
                        if ($terms && !is_wp_error($terms)) :
                            foreach ($terms as $term) :
                        ?>
                            <span class="noticia-category">
                                <a href="<?php echo get_term_link($term); ?>">
                                    <?php echo esc_html($term->name); ?>
                                </a>
                            </span>
                        <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                </header>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="noticia-featured-image">
                        <?php the_post_thumbnail('banner-grande'); ?>
                    </div>
                <?php endif; ?>

                <div class="noticia-body">
                    <?php the_content(); ?>
                </div>

                <?php
                // Tags si los hay
                $tags = get_the_tags();
                if ($tags) :
                ?>
                    <div class="noticia-tags">
                        <strong>Etiquetas:</strong>
                        <?php
                        foreach ($tags as $tag) :
                            echo '<a href="' . get_tag_link($tag->term_id) . '">' . esc_html($tag->name) . '</a> ';
                        endforeach;
                        ?>
                    </div>
                <?php endif; ?>

                <footer class="noticia-footer">
                    <div class="noticia-navigation">
                        <?php
                        $prev_post = get_previous_post();
                        $next_post = get_next_post();
                        
                        if ($prev_post) :
                        ?>
                            <a href="<?php echo get_permalink($prev_post); ?>" class="prev-noticia">
                                « <?php echo get_the_title($prev_post); ?>
                            </a>
                        <?php endif; ?>
                        
                        <?php if ($next_post) : ?>
                            <a href="<?php echo get_permalink($next_post); ?>" class="next-noticia">
                                <?php echo get_the_title($next_post); ?> »
                            </a>
                        <?php endif; ?>
                    </div>
                    
                    <div class="share-buttons">
                        <strong>Compartir:</strong>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" 
                           target="_blank" rel="noopener" class="share-btn facebook">
                            Facebook
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" 
                           target="_blank" rel="noopener" class="share-btn twitter">
                            Twitter
                        </a>
                        <a href="https://wa.me/?text=<?php echo urlencode(get_the_title() . ' ' . get_permalink()); ?>" 
                           target="_blank" rel="noopener" class="share-btn whatsapp">
                            WhatsApp
                        </a>
                        <a href="mailto:?subject=<?php echo urlencode(get_the_title()); ?>&body=<?php echo urlencode(get_permalink()); ?>" 
                           class="share-btn email">
                            Email
                        </a>
                    </div>
                </footer>
            </article>

            <?php
            // Noticias relacionadas
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
                <section class="related-news">
                    <h2>Noticias Relacionadas</h2>
                    <div class="news-grid">
                        <?php
                        while ($related_query->have_posts()) : $related_query->the_post();
                        ?>
                            <article class="news-card">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="news-thumbnail">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('noticia-thumbnail'); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                
                                <div class="news-content">
                                    <h3>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>
                                    
                                    <div class="news-meta">
                                        <span class="news-date"><?php echo get_the_date(); ?></span>
                                    </div>
                                    
                                    <div class="news-excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    
                                    <a href="<?php the_permalink(); ?>" class="read-more">Leer más</a>
                                </div>
                            </article>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </section>
            <?php
                endif;
            endif;
            ?>
            
            <?php
            // Comentarios
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>
        <?php
        endwhile;
        ?>
    </div>
</main>

<?php get_footer(); ?>
