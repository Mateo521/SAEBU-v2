<?php
/**
 * 404 Error Template
 */
get_header();
?>

<main class="error-404">
    <div class="container">
        <div class="error-content">
            <h1 class="error-title">404</h1>
            <h2>Página no encontrada</h2>
            <p>Lo sentimos, la página que estás buscando no existe o ha sido movida.</p>
            
            <div class="error-search">
                <h3>¿Qué estabas buscando?</h3>
                <?php get_search_form(); ?>
            </div>
            
            <div class="error-links">
                <h3>Enlaces útiles:</h3>
                <ul>
                    <li><a href="<?php echo home_url('/'); ?>">Inicio</a></li>
                    <li><a href="<?php echo home_url('/noticias'); ?>">Todas las Noticias</a></li>
                    <li><a href="<?php echo home_url('/contacto'); ?>">Contacto</a></li>
                </ul>
            </div>
            
            <div class="recent-news-404">
                <h3>Noticias Recientes</h3>
                <div class="news-grid">
                    <?php
                    $recent = new WP_Query(array(
                        'post_type' => 'noticia',
                        'posts_per_page' => 3,
                    ));
                    
                    if ($recent->have_posts()) :
                        while ($recent->have_posts()) : $recent->the_post();
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
    </div>
</main>

<?php get_footer(); ?>
