<?php get_header(); ?>
<main class="bg-white min-h-screen  text-gray-800">
    <?php while (have_posts()) : the_post(); ?>
        <article class="container mx-auto px-4 py-12 md:py-20 max-w-4xl">
            <header class="text-center mb-12">
                <div class="mb-6 text-sm text-gray-500 font-sans">
                    <?php if (function_exists('saebu_breadcrumbs')) saebu_breadcrumbs(); ?>
                </div>
                <div class="flex flex-wrap justify-center gap-3 mb-6 font-sans">
                    <?php
                    $categorias = get_the_terms(get_the_ID(), 'categoria_noticia');
                    if ($categorias && !is_wp_error($categorias)) :
                        foreach ($categorias as $categoria) :
                    ?>
                            <span class="text-blue-800 text-xs font-bold uppercase tracking-[0.1em] border-b border-blue-100 pb-1">
                                <?php echo esc_html($categoria->name); ?>
                            </span>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>
                <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-8 leading-tight tracking-tight">
                    <?php the_title(); ?>
                </h1>
                <div class="flex items-center justify-center text-gray-500 text-sm font-sans border-t border-b border-gray-100 py-4 max-w-md mx-auto">
                    <time datetime="<?php echo get_the_date('c'); ?>">
                        <?php echo get_the_date('d \d\e F, Y'); ?>
                    </time>
                </div>
            </header>
            <figure class="mb-12 md:mb-16">
                <?php
                $galeria_ids = get_post_meta(get_the_ID(), '_galeria_imagenes', true);
                $tiene_galeria = !empty($galeria_ids);
                if ($tiene_galeria) :
                    $imagenes = explode(',', $galeria_ids);
                ?>
                    <div class="swiper gallery-swiper rounded-xl overflow-hidden shadow-md relative group">
                        <div class="swiper-wrapper">
                            <?php foreach ($imagenes as $imagen_id) :
                                $imagen_url = wp_get_attachment_image_url($imagen_id, 'full'); // Usamos FULL para máxima calidad
                                $imagen_alt = get_post_meta($imagen_id, '_wp_attachment_image_alt', true);
                                if ($imagen_url) :
                            ?>
                                    <div class="swiper-slide bg-gray-50">
                                        <img src="<?php echo esc_url($imagen_url); ?>"
                                            alt="<?php echo esc_attr($imagen_alt); ?>"
                                            class="w-full h-auto block">
                                    </div>
                            <?php endif;
                            endforeach; ?>
                        </div>
                        <div class="swiper-button-next !text-gray-800 after:!text-xl !bg-white/90 !w-12 !h-12 !rounded-full shadow-sm opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <div class="swiper-button-prev !text-gray-800 after:!text-xl !bg-white/90 !w-12 !h-12 !rounded-full shadow-sm opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                <?php elseif (has_post_thumbnail()) : ?>
                    <?php
                    the_post_thumbnail('full', array(
                        'class' => 'w-full h-auto rounded-xl shadow-md'
                    ));
                    ?>
                    <?php if (get_the_post_thumbnail_caption()) : ?>
                        <figcaption class="text-center text-sm text-gray-500 mt-4 italic font-sans">
                            <?php the_post_thumbnail_caption(); ?>
                        </figcaption>
                    <?php endif; ?>
                <?php endif; ?>
            </figure>
            <div class="prose prose-lg prose-slate max-w-none 
                        prose-headings:font-bold prose-headings:text-gray-900
                        prose-a:text-blue-800 prose-a:no-underline hover:prose-a:underline
                        prose-img:rounded-xl prose-img:shadow-sm
                        first-letter:text-5xl first-letter:font-bold first-letter:text-gray-900 first-letter:float-left first-letter:mr-3 first-letter:mt-1">
                <?php the_content(); ?>
            </div>
            <footer class="mt-16 pt-8 border-t border-gray-100">
                <div class="flex flex-col sm:flex-row items-center justify-between gap-6">
                    <span class="font-sans text-sm font-bold text-gray-400 uppercase tracking-widest">Compartir artículo</span>
                    <div class="flex gap-3">
                        <?php
                        $share_url = urlencode(get_permalink());
                        $share_title = urlencode(get_the_title());
                        ?>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_url; ?>" target="_blank" rel="noopener" class="p-2 text-gray-500 hover:text-[#1877F2] border border-gray-200 rounded-full hover:border-[#1877F2] transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo $share_url; ?>&text=<?php echo $share_title; ?>" target="_blank" rel="noopener" class="p-2 text-gray-500 hover:text-black border border-gray-200 rounded-full hover:border-black transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                        <a href="https://wa.me/?text=<?php echo $share_title . ' ' . $share_url; ?>" target="_blank" rel="noopener" class="p-2 text-gray-500 hover:text-[#25D366] border border-gray-200 rounded-full hover:border-[#25D366] transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </footer>
        </article> <?php
                    $categorias = get_the_terms(get_the_ID(), 'categoria_noticia');
                    if ($categorias && !is_wp_error($categorias)) :
                        $categoria_ids = wp_list_pluck($categorias, 'term_id');
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
                <section class="bg-gray-50 py-16 border-t border-gray-100 font-sans">
                    <div class="container mx-auto px-4 max-w-6xl">
                        <h2 class="text-2xl  font-bold text-gray-900 mb-10 text-center">Lecturas relacionadas</h2>
                        <div class="grid md:grid-cols-3 gap-x-8 gap-y-10">
                            <?php while ($relacionadas->have_posts()) : $relacionadas->the_post(); ?>
                                <a href="<?php the_permalink(); ?>" class="group block">
                                    <div class="overflow-hidden rounded-lg mb-4 aspect-[3/2] bg-gray-100">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 grayscale-[30%] group-hover:grayscale-0')); ?>
                                        <?php else: ?>
                                            <div class="w-full h-full flex items-center justify-center text-gray-300 bg-gray-50">
                                                <svg class="w-12 h-12 opacity-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <h3 class=" font-bold text-lg text-gray-900 leading-snug group-hover:text-blue-800 transition-colors mb-2">
                                        <?php the_title(); ?>
                                    </h3>
                                    <div class="text-sm text-gray-500">
                                        <?php echo get_the_date('d \d\e F, Y'); ?>
                                    </div>
                                </a>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                </section>
        <?php
                        endif;
                    endif;
        ?>
    <?php endwhile; ?>
</main>
<?php get_footer(); ?>