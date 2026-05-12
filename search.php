<?php


get_header();

$search_query = get_search_query();
global $wp_query;
$total_results = $wp_query->found_posts;
?>

<main class="bg-white font-sans min-h-screen">

    <section class="bg-slate-50 py-24 border-b border-slate-200 text-center">
        <div class="container mx-auto px-6 max-w-4xl">
            <span class="text-[10px] font-bold tracking-widest uppercase text-slate-400 mb-6 block">
                Resultados de búsqueda
            </span>

            <h1 class="text-4xl md:text-5xl font-light text-slate-900 leading-tight mb-8 tracking-tight">
                "<?php echo esc_html($search_query); ?>"
            </h1>

            <?php if (have_posts()) : ?>
                <p class="text-sm text-[#005eb8] font-bold uppercase tracking-widest">
                    Se encontraron <?php echo $total_results; ?> resultado<?php echo ($total_results != 1) ? 's' : ''; ?>
                </p>
            <?php else : ?>
                <p class="text-lg text-slate-500 font-light">
                    No encontramos ninguna noticia que coincida con esos términos.
                </p>
            <?php endif; ?>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 max-w-7xl">

            <?php if (have_posts()) : ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="flex flex-col h-full group border-b md:border-b-0 border-slate-200 pb-12 md:pb-0">
                            <a title="Enlace a <?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>" class="block mb-6 overflow-hidden bg-slate-100 aspect-[4/3]">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover transition-transform duration-700')); ?>
                                <?php else : ?>
                                    <div class="w-full h-full flex items-center justify-center text-slate-300 font-light text-sm uppercase tracking-widest">
                                        Sin Imagen
                                    </div>
                                <?php endif; ?>
                            </a>

                            <div class="flex-1 flex flex-col">
                                <div class="flex items-center gap-3 mb-3">
                                    <span class="text-[10px] font-bold text-[#005eb8] uppercase tracking-widest">
                                        Noticia
                                    </span>
                                    <span class="w-1 h-1 rounded-full bg-slate-300"></span>
                                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">
                                        <?php echo get_the_date('d M Y'); ?>
                                    </span>
                                </div>

                                <h3 class="text-xl font-medium text-slate-900 leading-tight mb-3">
                                    <a href="<?php the_permalink(); ?>" class="hover:text-[#005eb8] transition-colors">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>

                                <div class="text-slate-500 text-sm font-light leading-relaxed line-clamp-3 mb-6">
                                    <?php echo wp_trim_words(get_the_excerpt(), 18); ?>
                                </div>

                                <div class="mt-auto pt-4 border-t border-slate-100">
                                    <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-slate-900 group-hover:text-[#005eb8] transition-colors">
                                        Leer Artículo
                                        <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <div class="mt-20 pt-8 border-t border-slate-200 flex justify-center">
                    <div class="flex gap-2 text-sm font-bold uppercase tracking-widest">
                        <?php
                        echo paginate_links(array(
                            'prev_text' => '&larr; Anterior',
                            'next_text' => 'Siguiente &rarr;',
                            'class' => 'px-4 py-2 border border-slate-200 text-slate-600 hover:border-slate-900 hover:text-slate-900 transition-colors'
                        ));
                        ?>
                    </div>
                </div>

            <?php else : ?>
                <div class="max-w-2xl mx-auto text-center py-16">
                    <svg class="w-16 h-16 text-slate-200 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <p class="text-slate-500 font-light mb-8">Intentá usar palabras clave más generales o revisá la ortografía.</p>

                    <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="relative max-w-lg mx-auto">
                        <input type="hidden" name="post_type" value="noticia" />
                        <input type="search" name="s" value="<?php echo esc_attr($search_query); ?>" class="w-full bg-slate-50 border-0 border-b-2 border-slate-300 focus:border-[#005eb8] focus:ring-0 px-4 py-4 text-lg font-light text-slate-900 transition-colors" required>
                        <button type="submit" class="absolute right-0 top-1/2 -translate-y-1/2 text-sm font-bold uppercase tracking-widest text-[#005eb8] hover:text-slate-900 transition-colors px-4">
                            Buscar de nuevo
                        </button>
                    </form>
                </div>
            <?php endif; ?>

        </div>
    </section>

</main>

<?php get_footer(); ?>