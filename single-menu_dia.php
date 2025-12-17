<?php
/**
 * Template Name: Single Menu del Dia (Institucional Sans)
 * Template Post Type: menu_dia
 */

get_header(); 

while ( have_posts() ) : the_post();

    // 1. Recuperamos los metadatos GENERALES
    $post_id   = get_the_ID();
    $fecha     = get_post_meta($post_id, '_menu_fecha', true);
    $entrada   = get_post_meta($post_id, '_menu_entrada', true);
    $principal = get_post_meta($post_id, '_menu_principal', true);
    $postre    = get_post_meta($post_id, '_menu_postre', true);
    $precio    = get_post_meta($post_id, '_menu_precio', true);

    // 2. Recuperamos los metadatos SIN TACC (NUEVO)
    $entrada_st   = get_post_meta($post_id, '_menu_entrada_sintacc', true);
    $principal_st = get_post_meta($post_id, '_menu_principal_sintacc', true);
    $postre_st    = get_post_meta($post_id, '_menu_postre_sintacc', true);
    
    // --- CORRECCIÓN DE FECHAS ---
    $timestamp  = strtotime($fecha);
    $dia_nombre = ucfirst(date_i18n('l', $timestamp)); 
    $dia_numero = date('d', $timestamp);
    $mes_nombre = ucfirst(date_i18n('F', $timestamp));
    $anio       = date('Y', $timestamp);
?>

<div class="min-h-screen bg-slate-50 py-12 px-4 sm:px-6 lg:px-8 font-sans text-slate-800">
      
    <div class="max-w-3xl mx-auto mb-6">
        <a href="<?php echo home_url(); ?>" class="inline-flex items-center text-slate-400 hover:text-[#005eb8] transition-colors text-[10px] uppercase tracking-widest font-bold">
            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            Volver
        </a>
    </div>

    <div class="max-w-3xl mx-auto bg-white shadow-lg border-t-4 border-[#005eb8]">
        
        <div class="relative h-56 md:h-64 bg-slate-200 overflow-hidden">
            <?php if (has_post_thumbnail()): ?>
                <div class="absolute inset-0">
                    <?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover']); ?>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                </div>
            <?php else: ?>
                <div class="absolute inset-0 bg-[#416ed2]">
                    <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(45deg, #cda2ff 25%, transparent 25%, transparent 50%, #cda2ff 50%, #cda2ff 75%, transparent 75%, transparent); background-size: 20px 20px;"></div>
                </div>
            <?php endif; ?>

            <div class="absolute bottom-0 left-0 w-full p-6 md:p-8 text-white">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                    <div>
                        <span class="block text-[10px] font-bold uppercase tracking-[0.2em] text-white/80 mb-1">
                            Comedor universitario
                        </span>
                        <h1 class="text-2xl md:text-4xl font-bold leading-tight tracking-tight">
                            Menú del Día
                        </h1>
                    </div>
                    <div class="text-left md:text-right flex md:block items-baseline gap-2">
                        <span class="text-3xl md:text-4xl font-light text-white/90 leading-none"><?php echo $dia_numero; ?></span>
                        <div>
                            <span class="text-xs font-bold uppercase tracking-widest text-white/80 md:block"><?php echo $mes_nombre; ?></span>
                            <span class="text-[10px] text-white/60 md:block uppercase tracking-wide hidden md:visible"><?php echo $dia_nombre; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-8 md:p-10">
            
            <?php if ($principal): ?>
                <div class="mb-10 text-center">
                    <span class="inline-block py-0.5 px-2 border border-slate-200 text-slate-400 text-[9px] font-bold uppercase tracking-[0.15em] mb-4 rounded-sm">
                        Plato Principal
                    </span>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 leading-snug tracking-tight">
                        <?php echo esc_html($principal); ?>
                    </h2>
                    <div class="w-10 h-0.5 bg-[#005eb8] mx-auto mt-5 opacity-50"></div>
                </div>
            <?php endif; ?>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-0 md:gap-8 mb-10 border-t border-b border-slate-100">
                <?php if ($entrada): ?>
                    <div class="py-6 md:pr-6 md:border-r border-slate-100 flex flex-col items-center md:items-start text-center md:text-left group">
                        <h3 class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2 group-hover:text-[#005eb8] transition-colors">
                            Entrada
                        </h3>
                        <p class="text-base font-semibold text-slate-700">
                            <?php echo esc_html($entrada); ?>
                        </p>
                    </div>
                <?php endif; ?>

                <?php if ($postre): ?>
                    <div class="py-6 md:pl-6 flex flex-col items-center md:items-end text-center md:text-right group">
                        <h3 class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2 group-hover:text-[#005eb8] transition-colors">
                            Postre
                        </h3>
                        <p class="text-base font-semibold text-slate-700">
                            <?php echo esc_html($postre); ?>
                        </p>
                    </div>
                <?php endif; ?>
            </div>

            <?php if ($principal_st || $entrada_st || $postre_st): ?>
                <div class="mb-10 bg-green-50 rounded-lg p-6 border border-green-100 relative overflow-hidden">
                    <div class="absolute top-0 right-0 bg-[#70b62c] text-white text-[9px] font-bold uppercase tracking-widest py-1 px-3 rounded-bl-lg">
                        Sin TACC
                    </div>

                    <div class="flex flex-col md:flex-row gap-6 items-center">
                        <div class="flex-shrink-0 text-[#70b62c]">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div class="text-center md:text-left flex-1">
                            <h3 class="text-xs font-bold text-[#70b62c] uppercase tracking-widest mb-3">Opción Celíaca</h3>
                            
                            <?php if ($principal_st): ?>
                                <p class="text-lg font-bold text-gray-800 mb-2"><?php echo esc_html($principal_st); ?></p>
                            <?php endif; ?>
                            
                            <div class="flex flex-wrap justify-center md:justify-start gap-4 text-sm text-gray-600">
                                <?php if ($entrada_st): ?>
                                    <span><strong class="text-gray-400 font-normal">Entrada:</strong> <?php echo esc_html($entrada_st); ?></span>
                                <?php endif; ?>
                                
                                <?php if ($postre_st): ?>
                                    <span><strong class="text-gray-400 font-normal">Postre:</strong> <?php echo esc_html($postre_st); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="flex flex-col md:flex-row items-center justify-between gap-6 bg-slate-50 p-6 rounded border border-slate-100">
                
                <div class="text-center md:text-left">
                    <span class="block text-[10px] text-slate-500 uppercase tracking-widest mb-1 font-semibold">Valor Ticket</span>
                    <div class="flex items-baseline gap-1 justify-center md:justify-start">
                        <span class="text-2xl font-bold text-[#005eb8] tracking-tight"><?php echo esc_html($precio); ?></span>
                        <span class="text-xs text-slate-400">final</span>
                    </div>
                </div>
                
                <button id="btn-suscribir-single" class="group relative px-6 py-2.5 bg-slate-900 text-white text-xs font-bold tracking-widest uppercase overflow-hidden transition-all hover:bg-[#005eb8]">
                    <span class="relative z-10 flex items-center gap-2">
                        <span>Suscribirse</span>
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    </span>
                </button>
            </div>

            <div class="mt-6 text-center">
                <p class="text-[9px] text-slate-400 uppercase tracking-widest font-semibold">
                    Secretaría de Asuntos Estudiantiles y Bienestar Universitario
                </p>
            </div>

        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const botonSuscribir = document.getElementById('btn-suscribir-single');
    if(botonSuscribir) {
        botonSuscribir.addEventListener('click', function(e) {
            e.preventDefault();
            if (window.OneSignal) {
                window.OneSignal.push(function() {
                    if (typeof window.OneSignal.showSlidedownPrompt === 'function') {
                        window.OneSignal.showSlidedownPrompt({force: true});
                    } else {
                        window.OneSignal.registerForPushNotifications();
                    }
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