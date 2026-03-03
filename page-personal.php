<?php
/**
 * Template Name: Autoridades (CPT Unificado)
 */
get_header();

 
function saebu_get_autoridades($sede_slug) {
    return new WP_Query([
        'post_type'      => 'autoridad',
        'posts_per_page' => -1,
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
        'tax_query'      => [[
            'taxonomy' => 'sede',
            'field'    => 'slug',
            'terms'    => $sede_slug,
        ]],
    ]);
}

 
$query_central = saebu_get_autoridades('conduccion-central');
$query_sl      = saebu_get_autoridades('san-luis');
$query_vm      = saebu_get_autoridades('villa-mercedes');

 
$placeholder = 'https://via.placeholder.com/400x400?text=Sin+Foto';
?>

<main class="bg-gray-50 min-h-screen py-16 px-4">
    <header class="max-w-4xl mx-auto text-center mb-12">
        <h1 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4 uppercase tracking-tight">Personal</h1>
        <div class="h-1.5 w-16 bg-blue-900 mx-auto mb-8"></div>
        
        <div class="flex justify-center gap-6 md:gap-12 mt-10 border-b border-gray-200">
            <button onclick="filterRegion('todas')" class="filter-tab active px-4 py-3 text-xs font-bold uppercase" data-region="todas">Todas las Sedes</button>
            <button onclick="filterRegion('San Luis')" class="filter-tab px-4 py-3 text-xs font-bold uppercase" data-region="San Luis">Sede San Luis</button>
            <button onclick="filterRegion('Villa Mercedes')" class="filter-tab px-4 py-3 text-xs font-bold uppercase" data-region="Villa Mercedes">Sede Villa Mercedes</button>
        </div>
    </header>

    <div class="max-w-7xl mx-auto">
        
        <section class="mb-20">
            <?php if ($query_central->have_posts()) : while ($query_central->have_posts()) : $query_central->the_post(); 
                $foto = get_the_post_thumbnail_url(get_the_ID(), 'large') ?: $placeholder;
                $cargo = get_field('cargo');
                $email = get_field('email');
                $tel   = get_field('telefono');
               
                ?>
                <div class="flex flex-col items-center mb-12">
                    <div class="max-w-sm w-full">
                        <div class="bg-white  shadow-lg border-t-4 border-blue-900 p-8 text-center transition-transform hover:scale-[1.02]">
                            <div class="size-full mx-auto mb-6 rounded overflow-hidden border-4 border-slate-100 shadow-inner">
                                <img src="<?php echo esc_url($foto); ?>" alt="<?php the_title(); ?>" class="w-full h-full object-cover">
                            </div>
                            <h2 class="text-xl font-bold text-slate-900 mb-1"><?php the_title(); ?></h2>
                            <p class="text-xs font-black text-blue-900 uppercase tracking-widest mb-4"><?php echo esc_html($cargo); ?></p>
                            <div class="text-xs text-slate-500 space-y-1 border-t pt-4">
                                <p><?php echo esc_html($email); ?></p>
                                <p><?php echo esc_html($tel); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php if ($query_central->current_post < $query_central->post_count - 1): ?>
                        <div class="org-connector-v h-12 w-0.5 bg-slate-300"></div>
                    <?php endif; ?>
                </div>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </section>

        <section class="relative">
            <div class="flex items-center justify-center mb-12">
                <div class="h-px bg-slate-300 flex-grow max-w-[100px]"></div>
                <h4 class="px-6 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Direcciones por Sede</h4>
                <div class="h-px bg-slate-300 flex-grow max-w-[100px]"></div>
            </div>

            <div class="dept-group fade-element" data-region="San Luis">
                <h5 class="text-center text-blue-900 font-bold text-sm mb-8 uppercase tracking-widest">Sede San Luis</h5>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-16">
                    <?php if ($query_sl->have_posts()) : while ($query_sl->have_posts()) : $query_sl->the_post(); 
                        $foto_depto = get_the_post_thumbnail_url(get_the_ID(), 'medium') ?: $placeholder;
                    ?>
                        <div class="bg-white rounded-lg border border-slate-200 p-2 flex flex-col items-center text-center group hover:border-blue-400 transition-all shadow-sm">
                            <div class="size-full rounded overflow-hidden mb-4 border border-slate-100  transition-transform">
                                <img src="<?php echo esc_url($foto_depto); ?>" class="w-full h-full object-cover">
                            </div>
                            <h4 class="text-base font-bold text-slate-900"><?php the_title(); ?></h4>
                            <p class="text-sm text-blue-800 font-bold uppercase mb-1"><?php echo esc_html(get_field('cargo')); ?></p>
                            <p class="text-sm text-slate-400 italic"><?php echo esc_html(get_field('area')); ?></p>
                        </div>
                    <?php endwhile; wp_reset_postdata(); endif; ?>
                </div>
            </div>

            <div class="dept-group fade-element" data-region="Villa Mercedes">
                <h5 class="text-center text-emerald-700 font-bold text-sm mb-8 uppercase tracking-widest">Sede Villa Mercedes</h5>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <?php if ($query_vm->have_posts()) : while ($query_vm->have_posts()) : $query_vm->the_post(); 
                        $foto_vm = get_the_post_thumbnail_url(get_the_ID(), 'medium') ?: $placeholder;
                    ?>
                        <div class="bg-white rounded-lg border border-slate-200 p-5 flex flex-col items-center text-center group hover:border-emerald-400 transition-all shadow-sm">
                            <div class="size-full rounded overflow-hidden mb-4 border border-slate-100">
                                <img src="<?php echo esc_url($foto_vm); ?>" class="w-full h-full object-cover">
                            </div>
                            <h4 class="text-base font-bold text-slate-900"><?php the_title(); ?></h4>
                            <p class="text-sm text-emerald-800 font-bold uppercase mb-1"><?php echo esc_html(get_field('cargo')); ?></p>
                            <p class="text-sm text-slate-400 italic"><?php echo esc_html(get_field('area')); ?></p>
                        </div>
                    <?php endwhile; wp_reset_postdata(); endif; ?>
                </div>
            </div>
        </section>
    </div>
</main>

<script>
    function filterRegion(region) {
        document.querySelectorAll('.filter-tab').forEach(tab => {
            tab.classList.toggle('active', tab.dataset.region === region);
        });
        document.querySelectorAll('.dept-group').forEach(group => {
            if (region === 'todas') {
                group.style.display = 'block';
                setTimeout(() => group.style.opacity = '1', 10);
            } else {
                if (group.dataset.region === region) {
                    group.style.display = 'block';
                    setTimeout(() => group.style.opacity = '1', 10);
                } else {
                    group.style.opacity = '0';
                    group.style.display = 'none';
                }
            }
        });
    }
</script>

<?php get_footer(); ?>