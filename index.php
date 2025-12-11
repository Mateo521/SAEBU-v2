<?php
/**
 * Index Template - Fallback template
 */
get_header();
?>

<main class="index-page">
    <div class="container">
        <header class="page-header">
            <h1>
                <?php
                if (is_home()) {
                    echo 'Blog';
                } elseif (is_search()) {
                    echo 'Resultados de búsqueda para: ' . get_search_query();
                } elseif (is_404()) {
                    echo 'Página no encontrada';
                } else {
                    echo 'Archivo';
                }
                ?>
            </h1>
        </header>

        <div class="content-area">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('noticia-destacada'); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    
                    <div class="post-content">
                        <h2 class="post-title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        
                        <div class="post-meta">
                            <span class="post-date"><?php echo get_the_date(); ?></span>
                            <!--span class="post-author">Por <?php the_author(); ?></span-->
                        </div>
                        
                        <div class="post-excerpt">
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
                <div class="no-results">
                    <h2>No se encontraron resultados</h2>
                    <p>Lo sentimos, pero no hay contenido que coincida con tu búsqueda.</p>
                    
                    <?php get_search_form(); ?>
                </div>
            <?php
            endif;
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
