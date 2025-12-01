<?php get_header(); ?>

<main class="bg-gray-50 font-sans">

    <?php while (have_posts()) : the_post(); ?>

        <!-- Breadcrumbs -->
        <?php saebu_breadcrumbs(); ?>

        <!-- Hero con imagen destacada o galería -->
        <?php
        $galeria_ids = get_post_meta(get_the_ID(), '_galeria_imagenes', true);
        $tiene_galeria = !empty($galeria_ids);

        if ($tiene_galeria) :
            $imagenes = explode(',', $galeria_ids);
        ?>
            <!-- Hero con Swiper -->
            <section class="relative bg-slate-900 py-8 md:py-16">
                <div class="container mx-auto px-4">
                    <div class="max-w-6xl mx-auto">
                        <div class="swiper gallery-swiper rounded-3xl overflow-hidden shadow-2xl">
                            <div class="swiper-wrapper">
                                <?php foreach ($imagenes as $imagen_id) :
                                    $imagen_url = wp_get_attachment_image_url($imagen_id, 'large');
                                    $imagen_alt = get_post_meta($imagen_id, '_wp_attachment_image_alt', true);
                                    if ($imagen_url) :
                                ?>
                                        <div class="swiper-slide">
                                            <img src="<?php echo esc_url($imagen_url); ?>"
                                                alt="<?php echo esc_attr($imagen_alt); ?>"
                                                class="w-full h-64 md:h-96 lg:h-[500px] object-cover">
                                        </div>
                                <?php
                                    endif;
                                endforeach;
                                ?>
                            </div>

                            <div class="swiper-button-next !text-white !w-12 !h-12 after:!text-2xl !bg-black/30 !rounded-full hover:!bg-black/50 transition-colors"></div>
                            <div class="swiper-button-prev !text-white !w-12 !h-12 after:!text-2xl !bg-black/30 !rounded-full hover:!bg-black/50 transition-colors"></div>
                            <div class="swiper-pagination !bottom-6"></div>
                        </div>
                    </div>
                </div>
            </section>

        <?php elseif (has_post_thumbnail()) : ?>
            <!-- Hero con imagen única -->
            <section class="relative bg-slate-900 py-8 md:py-16">
                <div class="container mx-auto px-4">
                    <div class="max-w-6xl mx-auto">
                        <?php the_post_thumbnail('large', array(
                            'class' => 'w-full h-64 md:h-96 lg:h-[500px] object-cover rounded-3xl shadow-2xl'
                        )); ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Contenido de la noticia -->
        <section class="py-12 md:py-16">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">

                    <!-- Categorías y fecha -->
                    <div class="flex flex-wrap items-center gap-4 mb-8">
                        <?php
                        $categorias = get_the_terms(get_the_ID(), 'categoria_noticia');
                        if ($categorias && !is_wp_error($categorias)) :
                            foreach ($categorias as $categoria) :
                        ?>
                                <span class="inline-flex items-center gap-1.5 bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-medium">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                    <?php echo esc_html($categoria->name); ?>
                                </span>
                        <?php
                            endforeach;
                        endif;
                        ?>

                        <span class="inline-flex items-center gap-2 text-gray-600 text-sm">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <?php echo get_the_date('d/m/Y'); ?>
                        </span>
                    </div>

                    <!-- Título -->
                    <header class="mb-10">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold font-display text-slate-900 mb-6 leading-tight">
                            <?php the_title(); ?>
                        </h1>

                        <?php if (get_the_excerpt()) : ?>
                            <p class="text-xl md:text-2xl text-gray-600 leading-relaxed font-light">
                                <?php echo get_the_excerpt(); ?>
                            </p>
                        <?php endif; ?>
                    </header>

                    <!-- Contenido principal con más padding -->
                    <article class="bg-white rounded-3xl shadow-lg border border-gray-100 p-6 md:p-10 lg:p-16 mb-8">
                        <div class="prose prose-lg md:prose-xl max-w-none">
                            <?php the_content(); ?>
                        </div>
                    </article>

                    <!-- Compartir -->
                    <div class="bg-gradient-to-r from-blue-50 to-purple-50 rounded-2xl shadow-sm border border-blue-100 p-6 md:p-8 mb-12">
                        <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                                    </svg>
                                </div>
                                <span class="text-lg font-semibold text-gray-800">Compartir esta noticia</span>
                            </div>

                            <div class="flex flex-wrap gap-3">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>"
                                    target="_blank" rel="noopener"
                                    class="inline-flex items-center gap-2 bg-blue-600 text-white px-5 py-2.5 rounded-lg hover:bg-blue-700 text-sm font-medium transition-all hover:shadow-lg">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                    </svg>
                                    Facebook
                                </a>

                                <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>"
                                    target="_blank" rel="noopener"
                                    class="inline-flex items-center gap-2 bg-sky-500 text-white px-5 py-2.5 rounded-lg hover:bg-sky-600 text-sm font-medium transition-all hover:shadow-lg">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                    </svg>
                                    Twitter
                                </a>

                                <a href="https://wa.me/?text=<?php echo urlencode(get_the_title() . ' ' . get_permalink()); ?>"
                                    target="_blank" rel="noopener"
                                    class="inline-flex items-center gap-2 bg-green-600 text-white px-5 py-2.5 rounded-lg hover:bg-green-700 text-sm font-medium transition-all hover:shadow-lg">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                                    </svg>
                                    WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Noticias relacionadas -->
                    <?php
                    $categorias = get_the_terms(get_the_ID(), 'categoria_noticia');
                    if ($categorias && !is_wp_error($categorias)) :
                        $categoria_ids = array();
                        foreach ($categorias as $categoria) {
                            $categoria_ids[] = $categoria->term_id;
                        }

                        $relacionadas = new WP_Query(array(
                            'post_type' => 'noticia',
                            'posts_per_page' => 3,
                            'post__not_in' => array(get_the_ID()),
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'categoria_noticia',
                                    'field' => 'term_id',
                                    'terms' => $categoria_ids,
                                ),
                            ),
                        ));

                        if ($relacionadas->have_posts()) :
                    ?>
                            <section class="mt-16">
                                <h2 class="text-3xl md:text-4xl font-bold font-display text-slate-900 mb-8">Noticias relacionadas</h2>
                                <div class="grid md:grid-cols-3 gap-8">
                                    <?php while ($relacionadas->have_posts()) : $relacionadas->the_post(); ?>
                                        <article class="group bg-white border border-gray-200 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <a href="<?php the_permalink(); ?>" class="block overflow-hidden">
                                                    <?php the_post_thumbnail('medium', array('class' => 'w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500')); ?>
                                                </a>
                                            <?php else: ?>
                                                <a href="<?php the_permalink(); ?>" class="block h-48 bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center">
                                                    <svg class="w-16 h-16 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                                    </svg>
                                                </a>
                                            <?php endif; ?>

                                            <div class="p-6">
                                                <div class="text-sm text-gray-500 mb-3">
                                                    <?php echo get_the_date('d/m/Y'); ?>
                                                </div>
                                                <h3 class="font-bold text-lg text-slate-900 mb-3 group-hover:text-blue-600 transition-colors line-clamp-2 leading-snug">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </h3>
                                                <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-1 text-blue-600 hover:text-blue-700 font-medium text-sm group-hover:gap-2 transition-all">
                                                    Leer más
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </article>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                </div>
                            </section>
                    <?php
                        endif;
                    endif;
                    ?>

                </div>
            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>