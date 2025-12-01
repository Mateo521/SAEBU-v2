<?php get_header(); ?>

<main class="home-page">
    <!-- Banner Grande -->
    <section class="hero-banner">
        <div class="banner-content">
            <h1>SAEBU</h1>
            <p>Secretaría de Asuntos Estudiantiles y Bienestar Universitario</p>
        </div>
    </section>

    <!-- Últimas Noticias -->
    <section class="latest-news">
        <div class="container">
            <h2>Últimas Noticias</h2>
            
            <div class="news-grid">
                <?php
                $latest_news = new WP_Query(array(
                    'post_type' => 'noticia',
                    'posts_per_page' => 6,
                    'orderby' => 'date',
                    'order' => 'DESC',
                ));

                if ($latest_news->have_posts()) :
                    while ($latest_news->have_posts()) : $latest_news->the_post();
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
    </section>

    <!-- Acceso a Departamentos -->
    <section class="departments-access">
        <div class="container">
            <h2>Nuestros Departamentos</h2>
            
            <div class="departments-grid">
                <a href="<?php echo home_url('/becas'); ?>" class="department-card">
                    <h3>Becas</h3>
                </a>
                
                <a href="<?php echo home_url('/camping'); ?>" class="department-card">
                    <h3>Camping</h3>
                </a>
                
                <a href="<?php echo home_url('/ceseu'); ?>" class="department-card">
                    <h3>CESEU</h3>
                </a>
                
                <a href="<?php echo home_url('/trabajo-social'); ?>" class="department-card">
                    <h3>Trabajo Social</h3>
                </a>
                
                <a href="<?php echo home_url('/club-universitario'); ?>" class="department-card">
                    <h3>Club Universitario</h3>
                </a>
                
                <a href="<?php echo home_url('/dpto-deportes'); ?>" class="department-card">
                    <h3>Dpto. Deportes</h3>
                </a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
