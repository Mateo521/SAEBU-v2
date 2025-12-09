<?php
/**
 * Template Name: Single Menu del Dia
 * Template Post Type: menu_dia
 */

get_header(); 

// Iniciamos el loop de WordPress
while ( have_posts() ) : the_post();

    // Recuperamos los metadatos específicos
    $post_id   = get_the_ID();
    $fecha     = get_post_meta($post_id, '_menu_fecha', true);
    $entrada   = get_post_meta($post_id, '_menu_entrada', true);
    $principal = get_post_meta($post_id, '_menu_principal', true);
    $postre    = get_post_meta($post_id, '_menu_postre', true);
    $precio    = get_post_meta($post_id, '_menu_precio', true);

    // Formateo de fecha
    setlocale(LC_TIME, 'es_ES.UTF-8');
    $dia_nombre = strftime('%A', strtotime($fecha));
    $dia_numero = date('d', strtotime($fecha));
    $mes_nombre = strftime('%B', strtotime($fecha));
?>

<div class="min-h-screen bg-gray-100 py-12 px-4 sm:px-6 lg:px-8 font-sans">
     
    <div class="max-w-2xl mx-auto mb-6">
        <a href="<?php echo home_url(); ?>" class="inline-flex items-center text-gray-500 hover:text-[#005eb8] transition-colors text-sm font-medium">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Volver al inicio
        </a>
    </div>

    <div class="max-w-2xl mx-auto bg-white rounded-3xl shadow-2xl overflow-hidden ring-1 ring-black/5 relative">
        
        <div class="relative h-64 md:h-80 bg-gradient-to-r from-[#005eb8] to-[#004a91]">
            <?php if (has_post_thumbnail()): ?>
                <div class="absolute inset-0">
                    <?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover']); ?>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                </div>
            <?php else: ?>
                <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 20px 20px;"></div>
            <?php endif; ?>

            <div class="absolute bottom-0 left-0 p-8 w-full z-10 text-white">
                <div class="flex items-center gap-2 opacity-90 mb-2">
                    <span class="px-2 py-1 bg-white/20 backdrop-blur-md rounded text-xs font-bold uppercase tracking-wider">Comedor Universitario</span>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold capitalize text-white shadow-sm leading-tight">
                    <?php echo $dia_nombre; ?> <span class="text-white/80 font-light"><?php echo $dia_numero; ?></span>
                </h1>
                <p class="text-lg text-white/90 mt-2 font-light">Menú oficial del día</p>
            </div>
        </div>

        <div class="p-8 md:p-10 bg-white">
            
            <?php if ($principal): ?>
                <div class="mb-10 text-center">
                    <h2 class="text-xs font-bold text-[#005eb8] uppercase tracking-[0.2em] mb-3">Plato Principal</h2>
                    <p class="text-3xl md:text-4xl font-serif font-bold text-gray-900 leading-tight">
                        <?php echo esc_html($principal); ?>
                    </p>
                </div>
            <?php endif; ?>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10 border-t border-b border-gray-100 py-8">
                <?php if ($entrada): ?>
                    <div class="text-center md:text-left flex flex-col items-center md:items-start">
                        <div class="w-10 h-10 rounded-full bg-green-100 text-green-600 flex items-center justify-center mb-3">
                             <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <h3 class="text-sm font-bold text-gray-400 uppercase tracking-wide mb-1">Entrada</h3>
                        <p class="text-lg font-medium text-gray-700"><?php echo esc_html($entrada); ?></p>
                    </div>
                <?php endif; ?>

                <?php if ($postre): ?>
                    <div class="text-center md:text-right flex flex-col items-center md:items-end">
                        <div class="w-10 h-10 rounded-full bg-pink-100 text-pink-500 flex items-center justify-center mb-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z"></path></svg>
                        </div>
                        <h3 class="text-sm font-bold text-gray-400 uppercase tracking-wide mb-1">Postre</h3>
                        <p class="text-lg font-medium text-gray-700"><?php echo esc_html($postre); ?></p>
                    </div>
                <?php endif; ?>
            </div>

            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="text-center md:text-left">
                    <span class="block text-sm text-gray-400 font-medium">Valor total del ticket</span>
                    <span class="text-4xl font-extrabold text-[#005eb8]"><?php echo esc_html($precio); ?></span>
                </div>
                
                <button id="btn-suscribir-single" class="bg-gray-900 hover:bg-black text-white px-8 py-4 rounded-xl transition-all duration-300 shadow-lg transform hover:-translate-y-1 flex items-center gap-3">
                    <span class="font-bold">Recibir notificaciones</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                </button>
            </div>
        </div>
        
        <div class="bg-gray-50 px-8 py-4 border-t border-gray-100 flex justify-between items-center text-xs text-gray-400">
            <span>SAEBU - UNSL</span>
            <span>Actualizado: <?php the_modified_date(); ?></span>
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
                    window.OneSignal.showSlidedownPrompt();
                });
            }
        });
    }
});
</script>

<?php 
endwhile; // Fin del loop

get_footer(); 
?>