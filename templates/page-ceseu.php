<?php
/**
 * Template Name: Página CESEU
 */
get_header();
?>

<main class="department-page ceseu-page">
    <div class="container">
        <section class="department-info">
            <?php
            while (have_posts()) : the_post();
            ?>
                <header class="page-header">
                    <h1><?php the_title(); ?></h1>
                </header>

                <div class="page-content">
                    <?php the_content(); ?>
                </div>
            <?php
            endwhile;
            ?>
        </section>

        <section class="department-news">
            <h2>Noticias de CESEU</h2>
            
            <div class="news-list">
                <?php
                $noticias = saebu_get_noticias_by_departamento('ceseu', 10);

                if ($noticias->have_posts()) :
                    while ($noticias->have_posts()) : $noticias->the_post();
                ?>
                    <article class="news-item">
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
                else :
                ?>
                    <p>No hay noticias disponibles en este momento.</p>
                <?php
                endif;
                ?>
            </div>
            
            <div class="view-all-news">
                <a href="<?php echo home_url('/ceseu/noticias'); ?>" class="btn-primary">
                    Ver todas las noticias de CESEU
                </a>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
