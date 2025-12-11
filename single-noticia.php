<?php get_header(); ?>

<main class="bg-white min-h-screen font-sans text-slate-800">

    <?php while (have_posts()) : the_post(); ?>

        <article class="container mx-auto px-4 max-w-4xl py-12 md:py-20">
            
            <header class="text-center mb-12">
                
                <div class="mb-8 flex justify-center">
                    <div class="text-xs font-bold uppercase tracking-widest text-slate-400">
                        <?php if (function_exists('saebu_breadcrumbs')) saebu_breadcrumbs(); ?>
                    </div>
                </div>

                <div class="flex flex-wrap justify-center gap-3 mb-6">
                    <?php
                    $categorias = get_the_terms(get_the_ID(), 'categoria_noticia');
                    if ($categorias && !is_wp_error($categorias)) :
                        foreach ($categorias as $categoria) :
                    ?>
                        <a href="<?php echo get_term_link($categoria); ?>" 
                           class="text-[#005eb8] text-[11px] font-bold uppercase tracking-widest border-b border-transparent hover:border-[#005eb8] transition-colors pb-0.5">
                            <?php echo esc_html($categoria->name); ?>
                        </a>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 mb-8 leading-tight tracking-tight">
                    <?php the_title(); ?>
                </h1>

                <div class="flex items-center justify-center border-t border-b border-gray-100 py-4 max-w-xs mx-auto">
                    <div class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-slate-500">
                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        <time datetime="<?php echo get_the_date('c'); ?>">
                            <?php echo get_the_date('d \d\e F, Y'); ?>
                        </time>
                    </div>
                </div>

            </header>


            <figure class="mb-12 md:mb-16">
                <?php
                $galeria_ids = get_post_meta(get_the_ID(), '_galeria_imagenes', true);
                $tiene_galeria = !empty($galeria_ids);

                if ($tiene_galeria) :
                    $imagenes = explode(',', $galeria_ids);
                ?>
                    <div class="swiper gallery-swiper rounded-sm overflow-hidden border border-gray-100 relative group bg-gray-50">
                        <div class="swiper-wrapper">
                            <?php foreach ($imagenes as $imagen_id) :
                                $imagen_url = wp_get_attachment_image_url($imagen_id, 'full');
                                $imagen_alt = get_post_meta($imagen_id, '_wp_attachment_image_alt', true);
                                if ($imagen_url) :
                            ?>
                                <div class="swiper-slide flex items-center justify-center">
                                    <img src="<?php echo esc_url($imagen_url); ?>"
                                         alt="<?php echo esc_attr($imagen_alt); ?>"
                                         class="w-full h-auto max-h-[80vh] object-contain block">
                                </div>
                            <?php endif; endforeach; ?>
                        </div>
                        <div class="swiper-button-next !text-slate-800 after:!text-lg !bg-white/90 !w-10 !h-10 shadow-sm opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <div class="swiper-button-prev !text-slate-800 after:!text-lg !bg-white/90 !w-10 !h-10 shadow-sm opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <div class="swiper-pagination"></div>
                    </div>

                <?php elseif (has_post_thumbnail()) : ?>
                    <div class="rounded-sm overflow-hidden border border-gray-100 bg-gray-50">
                        <?php
                        the_post_thumbnail('full', array(
                            'class' => 'w-full h-auto max-h-[80vh] object-contain mx-auto block'
                        ));
                        ?>
                    </div>
                    <?php if (get_the_post_thumbnail_caption()) : ?>
                        <figcaption class="text-center text-xs text-slate-500 mt-3 uppercase tracking-wide">
                            <?php the_post_thumbnail_caption(); ?>
                        </figcaption>
                    <?php endif; ?>
                <?php endif; ?>
            </figure>


            <div class="prose prose-lg prose-slate max-w-none font-sans
                        prose-headings:font-bold prose-headings:text-slate-900 prose-headings:tracking-tight
                        prose-p:leading-relaxed prose-p:text-slate-700
                        prose-a:text-[#005eb8] prose-a:no-underline hover:prose-a:underline prose-a:font-semibold
                        prose-img:rounded-sm prose-img:border prose-img:border-gray-200
                        first-letter:text-5xl first-letter:font-bold first-letter:text-slate-900 first-letter:float-left first-letter:mr-3 first-letter:mt-1">
                <?php the_content(); ?>
            </div>


            <footer class="mt-20 pt-10 border-t border-gray-200">
                <div class="flex flex-col sm:flex-row items-center justify-between gap-6">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Compartir artículo</span>
                    
                    <div class="flex gap-4">
                        <?php
                        $share_url = urlencode(get_permalink());
                        $share_title = urlencode(get_the_title());
                        ?>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_url; ?>" target="_blank" rel="noopener" 
                           class="w-10 h-10 flex items-center justify-center border border-gray-200 text-slate-400 hover:text-[#1877F2] hover:border-[#1877F2] transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" /></svg>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo $share_url; ?>&text=<?php echo $share_title; ?>" target="_blank" rel="noopener" 
                           class="w-10 h-10 flex items-center justify-center border border-gray-200 text-slate-400 hover:text-black hover:border-black transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" /></svg>
                        </a>
                        <a href="https://wa.me/?text=<?php echo $share_title . ' ' . $share_url; ?>" target="_blank" rel="noopener" 
                           class="w-10 h-10 flex items-center justify-center border border-gray-200 text-slate-400 hover:text-[#25D366] hover:border-[#25D366] transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" /></svg>
                        </a>
                    </div>
                </div>
            </footer>
        </article>

        <?php
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
            <section class="bg-gray-50 py-16 border-t border-gray-200 mt-12">
                <div class="container mx-auto px-4 max-w-6xl">
                    <div class="flex items-center justify-between mb-10">
                        <h2 class="text-xl font-bold text-slate-900 uppercase tracking-tight">Lecturas relacionadas</h2>
                        <a href="<?php echo get_post_type_archive_link('noticia'); ?>" class="text-xs font-bold text-[#005eb8] uppercase tracking-widest hover:underline">Ver todas</a>
                    </div>
                    
                    <div class="grid md:grid-cols-3 gap-8">
                        <?php while ($relacionadas->have_posts()) : $relacionadas->the_post(); ?>
                            <a href="<?php the_permalink(); ?>" class="group block bg-white border border-gray-200 hover:border-gray-300 transition-all">
                                <div class="overflow-hidden aspect-video bg-gray-100 relative">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500')); ?>
                                    <?php else: ?>
                                        <div class="w-full h-full flex items-center justify-center text-gray-300">
                                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="p-6">
                                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2">
                                        <?php echo get_the_date('d/m/Y'); ?>
                                    </div>
                                    <h3 class="font-bold text-lg text-slate-900 leading-snug group-hover:text-[#005eb8] transition-colors">
                                        <?php the_title(); ?>
                                    </h3>
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