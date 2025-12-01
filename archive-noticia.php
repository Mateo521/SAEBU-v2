<?php get_header(); ?>

<main class="archive-page">
    <div class="container">
        <header class="archive-header">
            <?php
            // Determinar el título según la taxonomía
            if (is_tax('departamento')) {
                $term = get_queried_object();
                echo '<h1>Noticias de ' . esc_html($term->name) . '</h1>';
            } else {
                echo '<h1>Todas las Noticias</h1>';
            }
            ?>
        </header>

        <div class="news-archive">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                <article class="news-item-full">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="news-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('noticia-destacada'); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    
                    <div class="news-content">
                        <h2>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        
                        <div class="news-meta">
                            <span class="news-date"><?php echo get_the_date(); ?></span>
                            <span class="news-author">Por <?php the_author(); ?></span>
                            
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'departamento');
                            if ($terms && !is_wp_error($terms)) :
                                foreach ($terms as $term) :
                            ?>
                                <span class="news-category"><?php echo esc_html($term->name); ?></span>
                            <?php
                                endforeach;
                            endif;
                            ?>
                        </div>
                        
                        <div class="news-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                        
                        <a href="<?php the_permalink(); ?>" class="read-more">Leer noticia completa</a>
                    </div>
                </article>
            <?php
                endwhile;

                // Paginación
                the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => __('« Anterior', 'saebu'),
                    'next_text' => __('Siguiente »', 'saebu'),
                ));
            else :
            ?>
                <p>No se encontraron noticias.</p>
            <?php
            endif;
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
