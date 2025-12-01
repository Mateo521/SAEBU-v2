<?php

/**
 * Search Results Template
 */
get_header();
?>

<main class="search-results">
    <div class="container">
        <header class="search-header">
            <h1>Resultados de búsqueda para: "<?php echo get_search_query(); ?>"</h1>
            <p><?php echo $wp_query->found_posts; ?> resultados encontrados</p>

            <div class="search-form-container">
                <?php get_search_form(); ?>
            </div>
        </header>

        <div class="search-content">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();

                    $post_type_obj = get_post_type_object(get_post_type());
            ?>
                    <article class="search-result-item">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="result-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('noticia-thumbnail'); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="result-content">
                            <span class="result-type"><?php echo esc_html($post_type_obj->labels->singular_name); ?></span>

                            <h2 class="result-title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <div class="result-meta">
                                <span class="result-date"><?php echo get_the_date(); ?></span>

                                <?php if (get_post_type() === 'noticia') :
                                    $terms = get_the_terms(get_the_ID(), 'departamento');
                                    if ($terms && !is_wp_error($terms)) :
                                        foreach ($terms as $term) :
                                ?>
                                            <span class="result-category"><?php echo esc_html($term->name); ?></span>
                                <?php
                                        endforeach;
                                    endif;
                                endif;
                                ?>
                            </div>

                            <div class="result-excerpt">
                                <?php the_excerpt(); ?>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="read-more">Leer más</a>
                        </div>
                    </article>
                <?php
                endwhile;

                the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => __('« Anterior', 'saebu'),
                    'next_text' => __('Siguiente »', 'saebu'),
                ));
            else :
                ?>
                <div class="no-search-results">
                    <h2>No se encontraron resultados</h2>
                    <p>Intenta con otros términos de búsqueda.</p>

                    <div class="search-suggestions">
                        <h3>Sugerencias:</h3>
                        <ul>
                            <li>Verifica la ortografía de tus palabras clave</li>
                            <li>Intenta con palabras más generales</li>
                            <li>Intenta con palabras clave diferentes</li>
                            <li>Reduce el número de palabras clave</li>
                        </ul>
                    </div>

                    <div class="popular-news">
                        <h3>Noticias Populares</h3>
                        <div class="news-grid">
                            <?php
                            $popular = new WP_Query(array(
                                'post_type' => 'noticia',
                                'posts_per_page' => 3,
                                'orderby' => 'date',
                                'order' => 'DESC',
                            ));

                            if ($popular->have_posts()) :
                                while ($popular->have_posts()) : $popular->the_post();
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
                                            <h4>
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h4>
                                            <a href="<?php the_permalink(); ?>" class="read-more">Leer más</a>
                                        </div>
                                    </article>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            <?php
            endif;
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>