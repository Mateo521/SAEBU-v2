<?php get_header(); ?>

<main class="bg-gray-50">

    <?php while (have_posts()) : the_post(); ?>

        <!-- Breadcrumbs -->
        <?php saebu_breadcrumbs(); ?>

        <!-- Hero de la página -->
        <section class="bg-white border-b border-gray-200 py-12 md:py-16">
            <div class="container mx-auto px-4">
                <div class="max-w-7xl mx-auto">

                    <?php if (has_post_thumbnail()) : ?>
                        <!-- Con imagen destacada -->
                        <div class="mb-8">
                            <?php the_post_thumbnail('large', array('class' => 'w-full h-64 md:h-96 object-cover rounded-xl shadow-lg')); ?>
                        </div>
                    <?php endif; ?>

                    <header class="text-center">
                        <h1 class="text-2xl md:text-5xl lg:text-6xl font-bold text-slate-900 mb-4 leading-tight">
                            <?php the_title(); ?>
                        </h1>

                        <?php if (get_the_excerpt()) : ?>
                            <div class="text-xl text-gray-600 max-w-3xl mx-auto">
                                <?php echo get_the_excerpt(); ?>
                            </div>
                        <?php endif; ?>
                    </header>

                </div>
            </div>
        </section>

        <!-- Contenido principal -->
        <section class="py-12 md:py-16">
            <div class="container mx-auto px-4">
                <div class="max-w-7xl mx-auto">

                    <article class="bg-white rounded-xl shadow-sm border border-gray-200 p-8 md:p-12">

                        <div class="prose prose-lg max-w-none">
                            <?php the_content(); ?>
                        </div>

                        <?php
                        // Paginación de contenido (si usa <!--nextpage-->)
                        wp_link_pages(array(
                            'before' => '<nav class="mt-8 pt-8 border-t border-gray-200"><div class="flex items-center gap-2 text-sm font-medium text-gray-700 mb-3">Páginas:</div><div class="flex flex-wrap gap-2">',
                            'after' => '</div></nav>',
                            'link_before' => '<span class="inline-flex items-center justify-center min-w-[2.5rem] h-10 px-3 rounded-md border border-gray-300 hover:bg-gray-50 hover:border-blue-500 transition-colors">',
                            'link_after' => '</span>',
                            'next_or_number' => 'number',
                        ));
                        ?>

                    </article>

                    <!-- Meta información de la página (opcional) -->
                    <?php if (get_the_modified_time() !== get_the_time()) : ?>
                        <div class="mt-6 text-center text-sm text-gray-500">
                            <svg class="w-4 h-4 inline-block mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Última actualización: <?php echo get_the_modified_date('d/m/Y'); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Botón compartir (opcional) -->
                    <div class="mt-8 pt-8 border-t border-gray-200">
                        <div class="flex flex-wrap items-center justify-between gap-4">
                            <span class="text-sm font-medium text-gray-700">Compartir esta página:</span>
                            <div class="flex flex-wrap gap-3">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>"
                                    target="_blank" rel="noopener"
                                    class="inline-flex items-center gap-2 bg-[#416ed2] text-white px-4 py-2 rounded-md hover:bg-blue-700 text-sm font-medium transition-colors">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                    </svg>
                                    Facebook
                                </a>

                                <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>"
                                    target="_blank" rel="noopener"
                                    class="inline-flex items-center gap-2 bg-sky-500 text-white px-4 py-2 rounded-md hover:bg-sky-600 text-sm font-medium transition-colors">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                    </svg>
                                    Twitter
                                </a>

                                <a href="https://wa.me/?text=<?php echo urlencode(get_the_title() . ' ' . get_permalink()); ?>"
                                    target="_blank" rel="noopener"
                                    class="inline-flex items-center gap-2 bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 text-sm font-medium transition-colors">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                                    </svg>
                                    WhatsApp
                                </a>

                                <a href="mailto:?subject=<?php echo urlencode(get_the_title()); ?>&body=<?php echo urlencode(get_permalink()); ?>"
                                    class="inline-flex items-center gap-2 bg-gray-600 text-white px-4 py-2 rounded-md hover:bg-gray-700 text-sm font-medium transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    Email
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Páginas hijas (si las hay) -->
                    <?php
                    $child_pages = get_pages(array(
                        'child_of' => get_the_ID(),
                        'sort_column' => 'menu_order',
                        'sort_order' => 'ASC',
                    ));

                    if ($child_pages) :
                    ?>
                        <section class="mt-12">
                            <h2 class="text-2xl font-bold text-slate-900 mb-6">Contenido relacionado</h2>
                            <div class="grid md:grid-cols-2 gap-6">
                                <?php foreach ($child_pages as $child) : ?>
                                    <a href="<?php echo get_permalink($child->ID); ?>"
                                        class="group bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg hover:border-blue-500 transition-all">
                                        <div class="flex items-start gap-4">
                                            <div class="flex-shrink-0 w-12 h-12 bg-blue-100 text-[#416ed2] rounded-lg flex items-center justify-center group-hover:bg-[#416ed2] group-hover:text-white transition-colors">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex-1">
                                                <h3 class="font-bold text-slate-900 mb-2 group-hover:text-[#416ed2] transition-colors">
                                                    <?php echo $child->post_title; ?>
                                                </h3>
                                                <?php if ($child->post_excerpt) : ?>
                                                    <p class="text-sm text-gray-600">
                                                        <?php echo wp_trim_words($child->post_excerpt, 15); ?>
                                                    </p>
                                                <?php endif; ?>
                                            </div>
                                            <svg class="w-5 h-5 text-gray-400 group-hover:text-[#416ed2] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </section>
                    <?php endif; ?>

                    <!-- Comentarios (si están habilitados) -->
                    <?php if (comments_open() || get_comments_number()) : ?>
                        <div class="mt-12">
                            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-8">
                                <?php comments_template(); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </section>


        <!-- CTA al final (sin ACF) -->
        <section class="py-16 bg-gradient-to-br from-[#416ed2] to-blue-800">
            <div class="container mx-auto px-4">
                <div class="max-w-7xl mx-auto text-center text-white">
                    <h2 class="text-xl md:text-2xl font-bold mb-4">
                        ¿Necesitás más información?
                    </h2>
                    <p class="text-xl text-blue-100 mb-8 mx-auto">
                        Contactanos y te ayudaremos con lo que necesites
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="<?php echo home_url('/contacto'); ?>"
                            class="inline-flex items-center justify-center gap-2 bg-white text-[#416ed2] px-8 py-4 rounded-lg font-semibold hover:bg-blue-50 shadow-xl transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                            Contactar
                        </a>
                    </div>
                </div>
            </div>
        </section>


    <?php endwhile; ?>

</main>

<?php get_footer(); ?>