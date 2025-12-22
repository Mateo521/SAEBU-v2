<?php
/**
 * Template Name: Single Menu del Dia (Sedes Duplicadas)
 * Template Post Type: menu_dia
 */

get_header();

while (have_posts()) : the_post();

    $post_id = get_the_ID();

    // --- DATOS SEDE SAN LUIS ---
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

    // --- DATOS SEDE VILLA MERCEDES ---
    $vm = array(
        'precio'    => get_post_meta($post_id, '_menu_vm_precio', true),
        'entrada'   => get_post_meta($post_id, '_menu_vm_entrada', true),
        'principal' => get_post_meta($post_id, '_menu_vm_principal', true),
        'postre'    => get_post_meta($post_id, '_menu_vm_postre', true),
        'ent_st'    => get_post_meta($post_id, '_menu_vm_ent_st', true),
        'pri_st'    => get_post_meta($post_id, '_menu_vm_pri_st', true),
        'pos_st'    => get_post_meta($post_id, '_menu_vm_pos_st', true),
    );

    // Formateo de fecha
    $timestamp  = strtotime($sl['fecha']);
    $dia_nombre = ucfirst(date_i18n('l', $timestamp));
    $dia_numero = date('d', $timestamp);
    $mes_nombre = ucfirst(date_i18n('F', $timestamp));
?>

<div class="min-h-screen bg-[#f8fafc] py-12 px-4 font-sans text-slate-900">

    <div class="max-w-6xl mx-auto mb-10 text-center">
        <a href="<?php echo home_url(); ?>" class="inline-flex items-center text-slate-400 hover:text-[#005eb8] transition-colors text-[11px] uppercase tracking-[0.2em] font-bold mb-8">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path d="M15 19l-7-7 7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            Volver al inicio
        </a>

        <div class="flex flex-col items-center">
            <h1 class="text-4xl md:text-5xl font-black tracking-tight text-slate-900 mb-2">
                Menú del <span class="text-[#005eb8]"><?php echo $dia_nombre; ?></span>
            </h1>
            <p class="text-slate-500 font-medium text-lg italic">
                <?php echo "$dia_numero de $mes_nombre"; ?>
            </p>
        </div>
    </div>

    <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8">

        <article class="bg-white rounded-2xl shadow-xl shadow-slate-200/60 overflow-hidden border border-slate-100 flex flex-col">
            <div class="bg-[#005eb8] p-6 text-white text-center">
                <span class="text-[10px] uppercase tracking-[0.3em] opacity-80 font-bold">Comedor Universitario</span>
                <h2 class="text-2xl font-bold tracking-tight">Sede San Luis</h2>
            </div>

            <div class="p-8 md:p-10 flex-grow">
                <div class="text-center mb-8">
                    <span class="text-[10px] text-slate-400 uppercase tracking-widest font-bold block mb-2">Plato Principal</span>
                    <h3 class="text-2xl font-extrabold text-slate-800 leading-tight">
                        <?php echo $sl['principal'] ?: 'No disponible'; ?>
                    </h3>
                </div>

                <div class="grid grid-cols-2 gap-4 border-t border-b border-slate-50 py-6 mb-10">
                    <div class="text-center border-r border-slate-50 px-2">
                        <span class="text-[9px] text-slate-400 uppercase font-bold block mb-1">Entrada</span>
                        <p class="text-sm font-semibold text-slate-600"><?php echo $sl['entrada'] ?: '-'; ?></p>
                    </div>
                    <div class="text-center px-2">
                        <span class="text-[9px] text-slate-400 uppercase font-bold block mb-1">Postre</span>
                        <p class="text-sm font-semibold text-slate-600"><?php echo $sl['postre'] ?: '-'; ?></p>
                    </div>
                </div>

                <?php if ($sl['pri_st'] || $sl['ent_st'] || $sl['pos_st']): ?>
                <div class="bg-blue-50/50 border border-blue-100 rounded-xl p-6 relative">
                    <span class="absolute top-0 right-4 -translate-y-1/2 bg-[#70b62c] text-white text-[9px] font-bold px-3 py-1 rounded-full uppercase tracking-tighter shadow-sm">Sin TACC</span>
                    
                    <div class="mb-4">
                        <h4 class="text-[10px] font-bold text-blue-600 uppercase tracking-widest mb-2">Opción Celíaca</h4>
                        <p class="text-lg font-bold text-slate-800 leading-tight"><?php echo $sl['pri_st'] ?: 'Principal no cargado'; ?></p>
                    </div>

                    <div class="grid grid-cols-2 gap-4 pt-4 border-t border-blue-100/50">
                        <div>
                            <span class="text-[8px] text-slate-400 uppercase font-bold block mb-1">Entrada ST</span>
                            <p class="text-xs font-semibold text-slate-600"><?php echo $sl['ent_st'] ?: '-'; ?></p>
                        </div>
                        <div>
                            <span class="text-[8px] text-slate-400 uppercase font-bold block mb-1">Postre ST</span>
                            <p class="text-xs font-semibold text-slate-600"><?php echo $sl['pos_st'] ?: '-'; ?></p>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            <div class="p-6 bg-slate-50 border-t border-slate-100 flex items-center justify-between mt-auto">
                <div>
                    <span class="block text-[9px] text-slate-400 uppercase font-bold">Ticket</span>
                    <span class="text-xl font-bold text-[#005eb8]"><?php echo $sl['precio'] ?: '-'; ?></span>
                </div>
                <div class="h-8 w-[1px] bg-slate-200"></div>
                <div class="text-right">
                    <span class="text-[10px] text-slate-400 font-medium tracking-tight">Rivadavia 1029</span>
                </div>
            </div>
        </article>

        <article class="bg-white rounded-2xl shadow-xl shadow-slate-200/60 overflow-hidden border border-slate-100 flex flex-col">
            <div class="bg-[#e67e22] p-6 text-white text-center">
                <span class="text-[10px] uppercase tracking-[0.3em] opacity-80 font-bold">Comedor Universitario</span>
                <h2 class="text-2xl font-bold tracking-tight">Sede Villa Mercedes</h2>
            </div>

            <div class="p-8 md:p-10 flex-grow">
                <div class="text-center mb-8">
                    <span class="text-[10px] text-slate-400 uppercase tracking-widest font-bold block mb-2">Plato Principal</span>
                    <h3 class="text-2xl font-extrabold text-slate-800 leading-tight">
                        <?php echo $vm['principal'] ?: 'No disponible'; ?>
                    </h3>
                </div>

                <div class="grid grid-cols-2 gap-4 border-t border-b border-slate-50 py-6 mb-10">
                    <div class="text-center border-r border-slate-50 px-2">
                        <span class="text-[9px] text-slate-400 uppercase font-bold block mb-1">Entrada</span>
                        <p class="text-sm font-semibold text-slate-600"><?php echo $vm['entrada'] ?: '-'; ?></p>
                    </div>
                    <div class="text-center px-2">
                        <span class="text-[9px] text-slate-400 uppercase font-bold block mb-1">Postre</span>
                        <p class="text-sm font-semibold text-slate-600"><?php echo $vm['postre'] ?: '-'; ?></p>
                    </div>
                </div>

                <?php if ($vm['pri_st'] || $vm['ent_st'] || $vm['pos_st']): ?>
                <div class="bg-orange-50/50 border border-orange-100 rounded-xl p-6 relative">
                    <span class="absolute top-0 right-4 -translate-y-1/2 bg-[#70b62c] text-white text-[9px] font-bold px-3 py-1 rounded-full uppercase tracking-tighter shadow-sm">Sin TACC</span>
                    
                    <div class="mb-4">
                        <h4 class="text-[10px] font-bold text-orange-600 uppercase tracking-widest mb-2">Opción Celíaca</h4>
                        <p class="text-lg font-bold text-slate-800 leading-tight"><?php echo $vm['pri_st'] ?: 'Principal no cargado'; ?></p>
                    </div>

                    <div class="grid grid-cols-2 gap-4 pt-4 border-t border-orange-100/50">
                        <div>
                            <span class="text-[8px] text-slate-400 uppercase font-bold block mb-1">Entrada ST</span>
                            <p class="text-xs font-semibold text-slate-600"><?php echo $vm['ent_st'] ?: '-'; ?></p>
                        </div>
                        <div>
                            <span class="text-[8px] text-slate-400 uppercase font-bold block mb-1">Postre ST</span>
                            <p class="text-xs font-semibold text-slate-600"><?php echo $vm['pos_st'] ?: '-'; ?></p>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            <div class="p-6 bg-slate-50 border-t border-slate-100 flex items-center justify-between mt-auto">
                <div>
                    <span class="block text-[9px] text-slate-400 uppercase font-bold">Ticket</span>
                    <span class="text-xl font-bold text-[#e67e22]"><?php echo $vm['precio'] ?: '-'; ?></span>
                </div>
                <div class="h-8 w-[1px] bg-slate-200"></div>
                <div class="text-right">
                    <span class="text-[10px] text-slate-400 font-medium tracking-tight">Junín y 25 de Mayo</span>
                </div>
            </div>
        </article>

    </div>

    <div class="max-w-6xl mx-auto mt-12 text-center">
        <button id="btn-suscribir-single" class="inline-flex items-center gap-3 px-10 py-4 bg-slate-900 text-white rounded text-xs font-bold uppercase tracking-[0.2em] hover:bg-[#005eb8] transition-all transform hover:scale-105 shadow-lg shadow-slate-300">
            <span>Recibir menú por notificación</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
        <p class="mt-6 text-[10px] text-slate-400 uppercase tracking-widest font-bold">
            Universidad Nacional de San Luis
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
                        window.OneSignal.showSlidedownPrompt({ force: true });
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