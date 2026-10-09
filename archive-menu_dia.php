<?php
get_header();
?>

<div class="min-h-screen bg-white py-24 px-6 font-sans text-slate-900">
    <div class="max-w-5xl mx-auto mb-16 text-center">
        <h1 class="text-5xl md:text-7xl font-light tracking-tight text-slate-900 mb-4">
            Listado de <strong class="font-semibold">menús</strong>
        </h1>
        <p class="text-slate-500 text-lg uppercase mb-8">
            Historial de menús publicados
        </p>
    </div>

    <div class="max-w-5xl mx-auto grid md:grid-cols-3 gap-8">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); 
                $post_id = get_the_ID();
                $fecha_meta = get_post_meta($post_id, '_menu_sl_fecha', true);
                
                // Formatear la fecha si existe
                if ($fecha_meta) {
                    $timestamp = strtotime($fecha_meta);
                    $fecha_formateada = date_i18n('d \d\e F, Y', $timestamp);
                } else {
                    $fecha_formateada = get_the_title();
                }
            ?>
                <a href="<?php the_permalink(); ?>" class="group block border border-slate-200 bg-slate-50 hover:border-[#005eb8] transition-colors p-6 flex flex-col items-center text-center">
                    <span class="text-sm font-bold text-slate-400 uppercase mb-2 group-hover:text-[#005eb8] transition-colors">
                        Menú del día
                    </span>
                    <h2 class="text-xl font-medium text-slate-900">
                        <?php echo $fecha_formateada; ?>
                    </h2>
                    
                    <span class="mt-6 inline-flex items-center gap-2 text-sm font-bold uppercase text-slate-500 group-hover:text-slate-900 transition-colors">
                        Ver detalles
                        <svg class="w-3 h-3 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M9 5l7 7-7 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                </a>
            <?php endwhile; ?>
        <?php else : ?>
            <div class="col-span-3 text-center text-slate-500 py-12">
                No hay menús publicados actualmente.
            </div>
        <?php endif; ?>
    </div>
    

    <div class="max-w-5xl mx-auto mt-12 flex justify-center gap-4">
        <?php 
        echo paginate_links(array(
            'prev_text' => '&laquo; Anteriores',
            'next_text' => 'Siguientes &raquo;',
        )); 
        ?>
    </div>
</div>

<?php
get_footer();
?>