<?php
/**
 * Template para mostrar todas las noticias de un departamento específico
 */
get_header();

$term = get_queried_object();
?>

<main class="taxonomy-page">
    <div class="container">
        <header class="archive-header">
            <h1>Todas las Noticias de <?php echo esc_html($term->name); ?></h1>
            <?php if ($term->description) : ?>
                <div class="taxonomy-description">
                    <?php echo wpautop($term->description); ?>
                </div>
            <?php endif; ?>
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
                        </div>
                        
                        <div class="news-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                        
                        <a href="<?php the_permalink(); ?>" class="read-more">Leer noticia completa</a>
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
                <p>No se encontraron noticias en esta categoría.</p>
            <?php
            endif;
            ?>
        </div>
        
        <div class="back-to-department">
            <a href="<?php echo home_url('/' . $term->slug); ?>" class="btn-primary">
                « Volver a <?php echo esc_html($term->name); ?>
            </a>
        </div>
    </div>
</main>

<?php get_footer(); ?>
