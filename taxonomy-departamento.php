<?php
/**
 * Template: Taxonomy Departamento (Estilo Institucional Sans-Serif)
 */
get_header();

$term = get_queried_object();
$total_posts = $wp_query->found_posts;
?>

<main class="bg-gray-50 min-h-screen font-sans text-slate-800">
    
    <header class="bg-[#0f172a] text-white pt-20 pb-16">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                
                <div class="mb-8 text-xs font-bold uppercase tracking-widest text-slate-400">
                    <?php if (function_exists('saebu_breadcrumbs')) saebu_breadcrumbs(); ?>
                </div>

                <div class="flex flex-col md:flex-row items-start justify-between gap-8">
                    <div class="flex-1">
                        <span class="inline-block border border-blue-500/30 bg-blue-500/10 text-blue-300 text-[10px] font-bold uppercase tracking-widest px-2 py-1 mb-4">
                            Departamento
                        </span>

                        <h1 class="text-3xl md:text-5xl font-bold mb-6 tracking-tight leading-tight">
                            <?php echo esc_html($term->name); ?>
                        </h1>
                        
                        <?php if ($term->description) : ?>
                            <div class="text-lg text-slate-300 font-light leading-relaxed border-l-2 border-blue-500 pl-6 max-w-2xl">
                                <?php echo wpautop($term->description); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="bg-white/5 border border-white/10 p-6 min-w-[200px] text-center">
                        <span class="block text-4xl font-bold text-white mb-1"><?php echo $total_posts; ?></span>
                        <span class="text-xs text-slate-400 uppercase tracking-widest">Publicaciones</span>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <div class="bg-white border-b border-gray-200 sticky top-0 z-30">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto flex items-center justify-between py-4">
                <a href="<?php echo home_url('/' . $term->slug); ?>" class="text-sm font-bold text-slate-500 hover:text-[#005eb8] flex items-center gap-2 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Volver a la portada de <?php echo esc_html($term->name); ?>
                </a>
                
                <div class="text-xs font-bold text-slate-400 uppercase tracking-widest hidden sm:block">
                    Archivo de Noticias
                </div>
            </div>
        </div>
    </div>

    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                
                <?php if (have_posts()) : ?>
                    
                    <div class="flex flex-col gap-8"> <?php while (have_posts()) : the_post(); ?>
                            
                            <article class="group bg-white border border-gray-200 hover:border-gray-300 transition-all duration-300 shadow-sm hover:shadow-md flex flex-col md:flex-row overflow-hidden h-full md:h-64">
                                
                                <div class="md:w-1/3 lg:w-1/4 relative overflow-hidden bg-gray-100 shrink-0">
                                    <a href="<?php the_permalink(); ?>" class="block h-full w-full">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out')); ?>
                                        <?php else : ?>
                                            <div class="w-full h-full flex items-center justify-center text-gray-300">
                                                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                                            </div>
                                        <?php endif; ?>
                                    </a>
                                </div>
                                
                                <div class="p-6 md:p-8 flex flex-col justify-center flex-1">
                                    
                                    <div class="flex items-center gap-4 text-xs font-medium text-gray-500 mb-3 uppercase tracking-wider">
                                        <span><?php echo get_the_date('d \d\e F, Y'); ?></span>
                                        <?php if (get_post_meta(get_the_ID(), '_noticia_destacada', true) === '1') : ?>
                                            <span class="text-[#005eb8] font-bold border border-blue-100 bg-blue-50 px-2 py-0.5">Destacada</span>
                                        <?php endif; ?>
                                    </div>

                                    <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-3 leading-tight group-hover:text-[#005eb8] transition-colors">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>

                                    <p class="text-gray-600 text-sm leading-relaxed  mb-6"> <!-- line-clamp-2 -->
                                        <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                                    </p>

                                    <div class="mt-auto">
                                        <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-xs font-bold uppercase tracking-widest text-slate-900 border-b-2 border-gray-200 pb-1 hover:border-[#005eb8] hover:text-[#005eb8] transition-all">
                                            Leer completo
                                            <svg class="w-3 h-3 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                        </a>
                                    </div>
                                </div>

                            </article>
                            
                        <?php endwhile; ?>
                    </div>

                    <?php
                    $pagination = paginate_links(array(
                        'mid_size' => 2,
                        'prev_text' => '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>',
                        'next_text' => '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>',
                        'type' => 'array',
                    ));

                    if ($pagination) :
                    ?>
                        <nav class="mt-16 flex justify-center border-t border-gray-200 pt-8">
                            <ul class="flex flex-wrap items-center gap-1">
                                <?php foreach ($pagination as $page) : ?>
                                    <li>
                                        <?php 
                                        $page = str_replace('page-numbers', 'flex items-center justify-center w-10 h-10 text-sm font-bold border border-gray-200 bg-white text-gray-600 hover:border-gray-400 hover:text-slate-900 transition-all', $page);
                                        $page = str_replace('current', '!bg-[#0f172a] !text-white !border-[#0f172a]', $page);
                                        echo $page;
                                        ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </nav>
                    <?php endif; ?>

                <?php else : ?>
                    
                    <div class="bg-white border border-gray-200 p-16 text-center">
                        <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gray-50 mb-4 text-gray-400">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Archivo vacío</h3>
                        <p class="text-gray-500 mb-6 max-w-md mx-auto">
                            Actualmente no hay registros de noticias para el departamento de <strong><?php echo esc_html($term->name); ?></strong>.
                        </p>
                        <a href="<?php echo home_url('/'); ?>" class="inline-block px-6 py-3 bg-slate-900 text-white text-sm font-bold uppercase tracking-wider hover:bg-[#005eb8] transition-colors">
                            Volver al inicio
                        </a>
                    </div>
                    
                <?php endif; ?>
                
            </div>
        </div>
    </section>

    <section class="bg-[#003366] text-white py-12 border-t border-white/10">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6">
                <div>
                    <h2 class="text-xl font-bold mb-1">¿Consultas sobre <?php echo esc_html($term->name); ?>?</h2>
                    <p class="text-blue-200 text-sm">Accede a los servicios y Contacto directo de esta área.</p>
                </div>
                <div class="flex gap-4">
                    <a href="<?php echo home_url('/' . $term->slug); ?>" 
                       class="px-6 py-3 bg-white text-[#003366] text-xs font-bold uppercase tracking-widest hover:bg-gray-100 transition-colors">
                        Ir al Departamento
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>