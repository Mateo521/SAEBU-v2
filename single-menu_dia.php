<?php

get_header();


$precio_global = get_field('precio_ticket_diario', 115) ?: '$2.800';

while (have_posts()) : the_post();

    $post_id = get_the_ID();


    $sl = array(
        'fecha'           => get_post_meta($post_id, '_menu_sl_fecha', true),
        'entrada'         => get_post_meta($post_id, '_menu_sl_entrada', true),
        'principal'       => get_post_meta($post_id, '_menu_sl_principal', true),
        'postre'          => get_post_meta($post_id, '_menu_sl_postre', true),
        'entrada_noche'   => get_post_meta($post_id, '_menu_sl_entrada_noche', true),
        'principal_noche' => get_post_meta($post_id, '_menu_sl_principal_noche', true),
        'postre_noche'    => get_post_meta($post_id, '_menu_sl_postre_noche', true),
        'ent_st'          => get_post_meta($post_id, '_menu_sl_ent_st', true),
        'pri_st'          => get_post_meta($post_id, '_menu_sl_pri_st', true),
        'pos_st'          => get_post_meta($post_id, '_menu_sl_pos_st', true),
    );


    $vm = array(
        'entrada'         => get_post_meta($post_id, '_menu_vm_entrada', true),
        'principal'       => get_post_meta($post_id, '_menu_vm_principal', true),
        'postre'          => get_post_meta($post_id, '_menu_vm_postre', true),
        'entrada_noche'   => get_post_meta($post_id, '_menu_vm_entrada_noche', true),
        'principal_noche' => get_post_meta($post_id, '_menu_vm_principal_noche', true),
        'postre_noche'    => get_post_meta($post_id, '_menu_vm_postre_noche', true),
    );

    $timestamp  = strtotime($sl['fecha']);
    $dia_nombre = ucfirst(date_i18n('l', $timestamp));
    $dia_numero = date('d', $timestamp);
    $mes_nombre = ucfirst(date_i18n('F', $timestamp));
?>

    <div class="min-h-screen bg-white py-24 px-6 font-sans text-slate-900">


        <div class="max-w-5xl mx-auto mb-16 text-center">
            <a href="<?php echo home_url(); ?>" class="inline-flex items-center gap-2 text-slate-400 hover:text-slate-900 transition-colors text-base uppercase  font-bold mb-12">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M15 19l-7-7 7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Volver al inicio
            </a>

            <div class="flex flex-col items-center">
                <h1 class="text-5xl md:text-7xl font-light tracking-tight text-slate-900 mb-4">
                    Menú del <strong class="font-semibold">día</strong>
                </h1>
                <p class="text-slate-500 text-lg uppercase  mb-8">
                    <?php echo "$dia_nombre, $dia_numero de $mes_nombre"; ?>
                </p>


                <div class="inline-block border border-slate-200 bg-slate-50 px-6 py-2">
                    <span class="text-base font-bold text-slate-500 uppercase  mr-3">Valor del Ticket general:</span>
                    <span class="text-lg font-medium text-slate-900"><?php echo esc_html($precio_global); ?></span>
                </div>
            </div>
        </div>


        <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-16 md:gap-0 md:divide-x divide-slate-200">


            <article class="md:pr-16 flex flex-col h-full">
                <h2 class="text-xs font-bold text-[#005eb8] uppercase  mb-8 pb-4 border-b border-slate-200">
                    Sede San Luis
                </h2>

                <div class="flex-grow space-y-10">


                    <?php if ($sl['principal']): ?>
                        <div>
                            <span class="inline-block text-base bg-slate-100 text-slate-600 px-2 py-1 uppercase  font-bold mb-4">Mediodía</span>
                            <h3 class="text-2xl font-medium text-slate-900 leading-tight mb-4">
                                <?php echo $sl['principal']; ?>
                            </h3>
                            <div class="flex gap-8">
                                <?php if ($sl['entrada']): ?>
                                    <div>
                                        <span class="block text-base text-slate-400 uppercase font-bold mb-1">Entrada</span>
                                        <p class="text-base font-light text-slate-600"><?php echo $sl['entrada']; ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if ($sl['postre']): ?>
                                    <div>
                                        <span class="block text-base text-slate-400 uppercase font-bold mb-1">Postre</span>
                                        <p class="text-base font-light text-slate-600"><?php echo $sl['postre']; ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>


                    <?php if ($sl['principal_noche']): ?>
                        <div class="pt-6 border-t border-slate-100">
                            <span class="inline-block text-base bg-slate-800 text-white px-2 py-1 uppercase  font-bold mb-4">Noche</span>
                            <h3 class="text-xl font-medium text-slate-900 leading-tight mb-4">
                                <?php echo $sl['principal_noche']; ?>
                            </h3>
                            <div class="flex gap-8">
                                <?php if ($sl['entrada_noche']): ?>
                                    <div>
                                        <span class="block text-base text-slate-400 uppercase font-bold mb-1">Entrada</span>
                                        <p class="text-base font-light text-slate-600"><?php echo $sl['entrada_noche']; ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if ($sl['postre_noche']): ?>
                                    <div>
                                        <span class="block text-base text-slate-400 uppercase font-bold mb-1">Postre</span>
                                        <p class="text-base font-light text-slate-600"><?php echo $sl['postre_noche']; ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>


                    <?php if ($sl['pri_st']): ?>
                        <div class="pt-8 border-t border-slate-300 border-dashed">
                            <span class="inline-block text-base font-bold text-slate-900 uppercase  border border-slate-900 px-2 py-1 mb-4">
                                Opción Sin TACC
                            </span>
                            <h4 class="text-lg font-medium text-slate-800 mb-4">
                                <?php echo $sl['pri_st']; ?>
                            </h4>
                            <div class="flex gap-8">
                                <?php if ($sl['ent_st']): ?>
                                    <div>
                                        <span class="block text-base text-slate-400 uppercase font-bold mb-1">Entrada</span>
                                        <p class="text-base font-light text-slate-600"><?php echo $sl['ent_st']; ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if ($sl['pos_st']): ?>
                                    <div>
                                        <span class="block text-base text-slate-400 uppercase font-bold mb-1">Postre</span>
                                        <p class="text-base font-light text-slate-600"><?php echo $sl['pos_st']; ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </article>


            <article class="md:pl-16 flex flex-col h-full border-t md:border-t-0 border-slate-200 pt-16 md:pt-0">
                <h2 class="text-xs font-bold text-[#e67e22] uppercase  mb-8 pb-4 border-b border-slate-200">
                    Sede Villa Mercedes
                </h2>

                <div class="flex-grow space-y-10">


                    <?php if ($vm['principal']): ?>
                        <div>
                            <span class="inline-block text-base bg-slate-100 text-slate-600 px-2 py-1 uppercase  font-bold mb-4">Mediodía</span>
                            <h3 class="text-2xl font-medium text-slate-900 leading-tight mb-4">
                                <?php echo $vm['principal']; ?>
                            </h3>
                            <div class="flex gap-8">
                                <?php if ($vm['entrada']): ?>
                                    <div>
                                        <span class="block text-base text-slate-400 uppercase font-bold mb-1">Entrada</span>
                                        <p class="text-base font-light text-slate-600"><?php echo $vm['entrada']; ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if ($vm['postre']): ?>
                                    <div>
                                        <span class="block text-base text-slate-400 uppercase font-bold mb-1">Postre</span>
                                        <p class="text-base font-light text-slate-600"><?php echo $vm['postre']; ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>


                    <?php if ($vm['principal_noche']): ?>
                        <div class="pt-6 border-t border-slate-100">
                            <span class="inline-block text-base bg-slate-800 text-white px-2 py-1 uppercase  font-bold mb-4">Noche</span>
                            <h3 class="text-xl font-medium text-slate-900 leading-tight mb-4">
                                <?php echo $vm['principal_noche']; ?>
                            </h3>
                            <div class="flex gap-8">
                                <?php if ($vm['entrada_noche']): ?>
                                    <div>
                                        <span class="block text-base text-slate-400 uppercase font-bold mb-1">Entrada</span>
                                        <p class="text-base font-light text-slate-600"><?php echo $vm['entrada_noche']; ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if ($vm['postre_noche']): ?>
                                    <div>
                                        <span class="block text-base text-slate-400 uppercase font-bold mb-1">Postre</span>
                                        <p class="text-base font-light text-slate-600"><?php echo $vm['postre_noche']; ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </article>

        </div>


        <div class="max-w-5xl mx-auto mt-24 text-center border-t border-slate-200 pt-16">
            <button id="btn-suscribir-single" class="inline-flex items-center gap-3 px-10 py-4 bg-slate-900 text-white text-xs font-bold uppercase  hover:bg-[#005eb8] transition-colors duration-300">
                Suscribirse al menú diario
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
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