<?php get_header(); ?>

<main class="static-page">
    <div class="container">
        <?php
        while (have_posts()) : the_post();
        ?>
            <article class="page-content">
                <header class="page-header">
                    <h1><?php the_title(); ?></h1>
                </header>

                <div class="page-body">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php
        endwhile;
        ?>
    </div>
</main>

<?php get_footer(); ?>
