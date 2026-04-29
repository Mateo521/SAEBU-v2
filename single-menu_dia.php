<?php

/**
 * Template Name: Single Menu del Dia (Sedes Duplicadas)
 * Template Post Type: menu_dia
 */

get_header();

while (have_posts()) : the_post();

    $post_id = get_the_ID();


    $sl = array(
        'fecha'     => get_post_meta($post_id, '_menu_sl_fecha', true),
        'precio'    => get_post_meta($post_id, '_menu_sl_precio', true),
        'entrada'   => get_post_meta($post_id, '_menu_sl_entrada', true),
        'principal' => get_post_meta($post_id, '_menu_sl_principal', true),
        'postre'    => get_post_meta($post_id, '_menu_sl_postre', true),
        'ent_st'    => get_post_meta($post_id, '_menu_sl_ent_st', true),
        'pri_st'    => get_post_meta($post_id, '_menu_sl_pri_st', true),
        'pos_st'    => get_post_meta($post_id, '_menu_sl_pos_st', true),
    );


    $vm = array(
        'precio'    => get_post_meta($post_id, '_menu_vm_precio', true),
        'entrada'   => get_post_meta($post_id, '_menu_vm_entrada', true),
        'principal' => get_post_meta($post_id, '_menu_vm_principal', true),
        'postre'    => get_post_meta($post_id, '_menu_vm_postre', true),
        'ent_st'    => get_post_meta($post_id, '_menu_vm_ent_st', true),
        'pri_st'    => get_post_meta($post_id, '_menu_vm_pri_st', true),
        'pos_st'    => get_post_meta($post_id, '_menu_vm_pos_st', true),
    );


    $timestamp  = strtotime($sl['fecha']);
    $dia_nombre = ucfirst(date_i18n('l', $timestamp));
    $dia_numero = date('d', $timestamp);
    $mes_nombre = ucfirst(date_i18n('F', $timestamp));
?>

    <div class="min-h-screen bg-white py-24 px-6 font-sans text-slate-900">

        <div class="max-w-5xl mx-auto mb-20 text-center">
            <a href="<?php echo home_url(); ?>" class="inline-flex items-center gap-2 text-slate-400 hover:text-slate-900 transition-colors text-[10px] uppercase tracking-[0.2em] font-bold mb-12">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M15 19l-7-7 7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Volver al inicio
            </a>

            <div class="flex flex-col items-center">
                <h1 class="text-5xl md:text-7xl font-light tracking-tight text-slate-900 mb-4">
                    Menú del <strong class="font-semibold">Día</strong>
                </h1>
                <p class="text-slate-500 text-lg uppercase tracking-widest">
                    <?php echo "$dia_nombre, $dia_numero de $mes_nombre"; ?>
                </p>
            </div>
        </div>

        <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-16 md:gap-0 md:divide-x divide-slate-200">

            <article class="md:pr-16 flex flex-col h-full">
                <h2 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-8 pb-4 border-b border-slate-200">
                    Sede San Luis
                </h2>

                <div class="flex-grow space-y-8">
                    <div>
                        <span class="block text-[10px] text-slate-400 uppercase tracking-widest font-bold mb-2">Plato Principal</span>
                        <h3 class="text-2xl font-medium text-slate-900 leading-tight">
                            <?php echo $sl['principal'] ?: 'No disponible'; ?>
                        </h3>
                    </div>

                    <div class="grid grid-cols-2 gap-6 border-y border-slate-100 py-6">
                        <div>
                            <span class="block text-[10px] text-slate-400 uppercase tracking-widest font-bold mb-1">Entrada</span>
                            <p class="text-sm font-light text-slate-700"><?php echo $sl['entrada'] ?: '-'; ?></p>
                        </div>
                        <div>
                            <span class="block text-[10px] text-slate-400 uppercase tracking-widest font-bold mb-1">Postre</span>
                            <p class="text-sm font-light text-slate-700"><?php echo $sl['postre'] ?: '-'; ?></p>
                        </div>
                    </div>

                    <?php if ($sl['pri_st'] || $sl['ent_st'] || $sl['pos_st']): ?>
                        <div class="pt-4 border-t border-slate-300 border-dashed">
                            <span class="inline-block text-[9px] font-bold text-slate-900 uppercase tracking-widest border border-slate-900 px-2 py-1 mb-4">
                                Opción Sin TACC
                            </span>
                            <h4 class="text-lg font-medium text-slate-800 mb-4">
                                <?php echo $sl['pri_st'] ?: 'Principal no cargado'; ?>
                            </h4>
                            <div class="flex gap-8">
                                <?php if ($sl['ent_st']): ?>
                                    <div>
                                        <span class="block text-[9px] text-slate-400 uppercase font-bold mb-1">Entrada</span>
                                        <p class="text-xs font-light text-slate-600"><?php echo $sl['ent_st']; ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if ($sl['pos_st']): ?>
                                    <div>
                                        <span class="block text-[9px] text-slate-400 uppercase font-bold mb-1">Postre</span>
                                        <p class="text-xs font-light text-slate-600"><?php echo $sl['pos_st']; ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="mt-12 pt-6 border-t border-slate-200 flex items-end justify-between">
                    <div>
                        <span class="block text-[10px] text-slate-400 uppercase tracking-widest font-bold mb-1">Ticket</span>
                        <span class="text-3xl font-light text-slate-900"><?php echo $sl['precio'] ?: '-'; ?></span>
                    </div>
                    <div class="text-right">
                        <span class="block text-[10px] text-slate-500 font-light">Rivadavia 1029</span>
                    </div>
                </div>
            </article>

            <article class="md:pl-16 flex flex-col h-full border-t md:border-t-0 border-slate-200 pt-16 md:pt-0">
                <h2 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-8 pb-4 border-b border-slate-200">
                    Sede Villa Mercedes
                </h2>

                <div class="flex-grow space-y-8">
                    <div>
                        <span class="block text-[10px] text-slate-400 uppercase tracking-widest font-bold mb-2">Plato Principal</span>
                        <h3 class="text-2xl font-medium text-slate-900 leading-tight">
                            <?php echo $vm['principal'] ?: 'No disponible'; ?>
                        </h3>
                    </div>

                    <div class="grid grid-cols-2 gap-6 border-y border-slate-100 py-6">
                        <div>
                            <span class="block text-[10px] text-slate-400 uppercase tracking-widest font-bold mb-1">Entrada</span>
                            <p class="text-sm font-light text-slate-700"><?php echo $vm['entrada'] ?: '-'; ?></p>
                        </div>
                        <div>
                            <span class="block text-[10px] text-slate-400 uppercase tracking-widest font-bold mb-1">Postre</span>
                            <p class="text-sm font-light text-slate-700"><?php echo $vm['postre'] ?: '-'; ?></p>
                        </div>
                    </div>

                    <?php if ($vm['pri_st'] || $vm['ent_st'] || $vm['pos_st']): ?>
                        <div class="pt-4 border-t border-slate-300 border-dashed">
                            <span class="inline-block text-[9px] font-bold text-slate-900 uppercase tracking-widest border border-slate-900 px-2 py-1 mb-4">
                                Opción Sin TACC
                            </span>
                            <h4 class="text-lg font-medium text-slate-800 mb-4">
                                <?php echo $vm['pri_st'] ?: 'Principal no cargado'; ?>
                            </h4>
                            <div class="flex gap-8">
                                <?php if ($vm['ent_st']): ?>
                                    <div>
                                        <span class="block text-[9px] text-slate-400 uppercase font-bold mb-1">Entrada</span>
                                        <p class="text-xs font-light text-slate-600"><?php echo $vm['ent_st']; ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if ($vm['pos_st']): ?>
                                    <div>
                                        <span class="block text-[9px] text-slate-400 uppercase font-bold mb-1">Postre</span>
                                        <p class="text-xs font-light text-slate-600"><?php echo $vm['pos_st']; ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="mt-12 pt-6 border-t border-slate-200 flex items-end justify-between">
                    <div>
                        <span class="block text-[10px] text-slate-400 uppercase tracking-widest font-bold mb-1">Ticket</span>
                        <span class="text-3xl font-light text-slate-900"><?php echo $vm['precio'] ?: '-'; ?></span>
                    </div>
                    <div class="text-right">
                        <span class="block text-[10px] text-slate-500 font-light">Junín y 25 de Mayo</span>
                    </div>
                </div>
            </article>

        </div>

        <div class="max-w-5xl mx-auto mt-24 text-center border-t border-slate-200 pt-16">
            <button id="btn-suscribir-single" class="inline-flex items-center gap-3 px-10 py-4 bg-slate-900 text-white text-xs font-bold uppercase tracking-widest hover:bg-[#005eb8] transition-colors duration-300">
                Suscribirse al Menú Diario
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <p class="mt-6 text-[10px] text-slate-400 uppercase tracking-widest font-bold">
                Comedor Universitario UNSL
            </p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const botonSuscribir = document.getElementById('btn-suscribir-single');
            if (botonSuscribir) {
                botonSuscribir.addEventListener('click', function(e) {
                    e.preventDefault();
                    if (window.OneSignal) {
                        window.OneSignal.push(function() {
                            window.OneSignal.showSlidedownPrompt({
                                force: true
                            });
                        });
                    }
                });
            }
        });
    </script>

<?php
endwhile;
get_footer();
?>