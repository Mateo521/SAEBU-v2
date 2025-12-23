<?php get_header(); ?>

<section class="relative min-h-[85vh] flex items-center bg-slate-900">
    <div class="absolute inset-0 z-0 overflow-hidden bg-slate-900">
        <?php
        // 1. Configuración
        $folder_path = get_template_directory() . '/assets/images/hero-slides/'; // Ruta del servidor
        $folder_url  = get_template_directory_uri() . '/assets/images/hero-slides/'; // URL del navegador
        // 2. Buscar imágenes disponibles
        $images = glob($folder_path . '*.{jpg,jpeg,png,webp}', GLOB_BRACE);
        $final_image_url = '';
        // 3. Lógica de selección
        if ($images && !empty($images)) {

            // Elegimos una clave aleatoria del array de imágenes encontradas
            $random_key = array_rand($images);
            $selected_path = $images[$random_key];
            // Construimos la URL final
            $final_image_url = $folder_url . basename($selected_path);
        } else {
            // --- FALLBACK (Si la carpeta está vacía) ---
            $hero_image = get_theme_mod('hero_background_image');
            if (!$hero_image && has_post_thumbnail()) {
                $hero_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
            }
            if (!$hero_image) {
                $hero_image = get_template_directory_uri() . '/assets/images/hero-default.jpg';
            }
            $final_image_url = $hero_image;
        }
        ?>
        <?php if (!empty($final_image_url)) : ?>
            <img src="<?php echo esc_url($final_image_url); ?>"
                alt="Fondo UNSL"
                fetchpriority="high"
                class="absolute inset-0 w-full h-full object-cover opacity-40">
        <?php endif; ?>
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/70 to-slate-900/20 z-10"></div>
    </div>
    <div class="relative z-10 container mx-auto px-4 py-12">
        <div class="grid lg:grid-cols-[1.5fr_1fr] gap-12 items-center">
            <div class="space-y-6">
                <div class="inline-flex items-center gap-3 border-l-4 border-[#005eb8] pl-4">
                    <img class="w-8" src="<?php echo esc_url(get_template_directory_uri()); ?>/logo-unsl-2.png" alt="">
                    <span class="text-sm text-gray-300 font-medium tracking-wide uppercase">Universidad Nacional de San Luis</span>
                </div>
                <div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-4">
                        Secretaría de <br>
                        Asuntos Estudiantiles y Bienestar Universitario
                    </h1>
                    <p class="text-lg text-gray-300 max-w-2xl leading-relaxed font-light">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit minima earum modi eligendi voluptatum
                    </p>
                </div>
                <div class="flex flex-wrap items-center gap-4 pt-4">


                    <a href="<?php echo home_url('/servicios'); ?>"
                        class="inline-flex items-center gap-2 bg-[#416ed2] hover:bg-[#004a99] text-white px-8 py-3 rounded-md font-semibold transition-colors duration-300 shadow-sm">
                        <span>Lorem</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                    <a href="<?php echo home_url('/institucional'); ?>"
                        class="inline-flex items-center gap-2 bg-transparent border border-white/30 hover:bg-white/10 text-white px-8 py-3 rounded-md font-medium transition-all duration-300">
                        <span>Institucional</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<section>



    <?php
    /**
     * Componente: Menú del Día - Doble Sede Institucional (Full Fields)
     */

    if (function_exists('saebu_get_menu_del_dia')) {
        $menu_dia = saebu_get_menu_del_dia();
    } else {
        $menu_dia = false;
    }

    if ($menu_dia) :
        $post_id = $menu_dia->ID;

        // --- SEDE SAN LUIS ---
        $sl = array(
            'fecha'     => get_post_meta($post_id, '_menu_sl_fecha', true),
            'precio'    => get_post_meta($post_id, '_menu_sl_precio', true),
            'principal' => get_post_meta($post_id, '_menu_sl_principal', true),
            'entrada'   => get_post_meta($post_id, '_menu_sl_entrada', true),
            'postre'    => get_post_meta($post_id, '_menu_sl_postre', true),
            'pri_st'    => get_post_meta($post_id, '_menu_sl_pri_st', true),
            'ent_st'    => get_post_meta($post_id, '_menu_sl_ent_st', true), // Campo agregado
            'pos_st'    => get_post_meta($post_id, '_menu_sl_pos_st', true), // Campo agregado
        );
        // --- SEDE VILLA MERCEDES ---
        $vm = array(
            'precio'    => get_post_meta($post_id, '_menu_vm_precio', true),
            'principal' => get_post_meta($post_id, '_menu_vm_principal', true),
            'entrada'   => get_post_meta($post_id, '_menu_vm_entrada', true),
            'postre'    => get_post_meta($post_id, '_menu_vm_postre', true),
            'pri_st'    => get_post_meta($post_id, '_menu_vm_pri_st', true),
            'ent_st'    => get_post_meta($post_id, '_menu_vm_ent_st', true), // Campo agregado
            'pos_st'    => get_post_meta($post_id, '_menu_vm_pos_st', true), // Campo agregado
        );

        $timestamp = strtotime($sl['fecha']);
    ?>

        <div class="bg-white   overflow-hidden border border-slate-100  font-sans"> <!-- shadow-2xl rounded-2xl -->

            <div class="bg-[#00305d] p-8 flex flex-col md:flex-row items-center justify-between text-white relative">
                <div class="absolute inset-0 opacity-10 pointer-events-none">
                    <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <path d="M0 100 C 20 0 50 0 100 100 Z" fill="black"></path>
                    </svg>
                </div>

                <div class="flex items-center gap-6 relative z-10">
                    <div class="text-center md:text-left border-r border-white/20 pr-6">
                        <span class="text-5xl font-black leading-none block"><?php echo date_i18n('d', $timestamp); ?></span>
                        <span class="text-xs font-bold uppercase tracking-[0.2em] opacity-80"><?php echo date_i18n('F', $timestamp); ?></span>
                    </div>
                    <div>
                        <h1 class="text-xl md:text-2xl font-bold tracking-tight uppercase">Menú</h1>
                        <p class="text-xs font-medium text-white/70 tracking-widest uppercase italic">San Luis & Villa Mercedes</p>
                    </div>
                </div>

                <!--div class="mt-6 md:mt-0 relative z-10 flex items-center gap-3 bg-black/10 px-5 py-2.5 rounded-full border border-white/10 backdrop-blur-md">
                    <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
                    <span class="uppercase text-[10px] font-extrabold tracking-[0.15em]">Servicio Activo</span>
                </div-->
            </div>

            <div class="flex flex-col lg:flex-row max-w-7xl mx-auto">

                <div class="flex-1 p-8 md:p-10 border-b lg:border-b-0 lg:border-r border-slate-100 ">
                    <div class="flex items-center gap-3 mb-8">
                        <div class="w-1 h-8 bg-[#005eb8]"></div>
                        <h1 class="text-sm font-black uppercase tracking-[0.2em] text-[#005eb8]">Sede San Luis</h1>
                    </div>

                    <div class="space-y-8">
                        <div>
                            <span class="text-[10px] font-bold text-slate-700 uppercase tracking-widest block mb-2">Plato Principal</span>
                            <p class="text-2xl font-bold text-slate-900  leading-tight mb-4"><?php echo $sl['principal'] ?: 'No cargado'; ?></p>

                            <div class="flex gap-6">
                                <?php if ($sl['entrada']): ?>
                                    <div class="flex flex-col">
                                        <span class="text-[8px] font-bold text-slate-700 uppercase tracking-tighter">Entrada</span>
                                        <span class="text-sm font-semibold text-slate-600 "><?php echo $sl['entrada']; ?></span>
                                    </div>
                                <?php endif; ?>
                                <?php if ($sl['postre']): ?>
                                    <div class="flex flex-col">
                                        <span class="text-[8px] font-bold text-slate-700 uppercase tracking-tighter">Postre</span>
                                        <span class="text-sm font-semibold text-slate-600 "><?php echo $sl['postre']; ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <?php if ($sl['pri_st'] || $sl['ent_st'] || $sl['pos_st']): ?>
                            <div class="bg-blue-50/50  border border-blue-100  rounded-xl p-5">
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="bg-[#3d6812] text-white text-[8px] font-black px-2 py-0.5 rounded uppercase">Sin TACC</span>
                                </div>
                                <p class="text-base font-bold text-slate-800  mb-3"><?php echo $sl['pri_st'] ?: 'Principal ST'; ?></p>
                                <div class="flex gap-4">
                                    <?php if ($sl['ent_st']): ?>
                                        <span class="text-[11px] text-slate-500"><strong class="text-slate-700 font-normal">Entrada:</strong> <?php echo $sl['ent_st']; ?></span>
                                    <?php endif; ?>
                                    <?php if ($sl['pos_st']): ?>
                                        <span class="text-[11px] text-slate-500"><strong class="text-slate-700 font-normal">Postre:</strong> <?php echo $sl['pos_st']; ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="flex items-center gap-2 pt-2">
                            <span class="text-[10px] font-bold text-slate-700 uppercase">Ticket</span>
                            <span class="text-3xl font-black text-[#005eb8]"><?php echo $sl['precio']; ?></span>
                        </div>
                    </div>
                </div>

                <div class="flex-1 p-8 md:p-10 bg-slate-50/50 ">
                    <div class="flex items-center gap-3 mb-8">
                        <div class="w-1 h-8 bg-[#63350c]"></div>
                        <h1 class="text-sm font-black uppercase tracking-[0.2em] text-[#63350c]">Sede Villa Mercedes</h1>
                    </div>

                    <div class="space-y-8">
                        <div>
                            <span class="text-[10px] font-bold text-slate-700 uppercase tracking-widest block mb-2">Plato Principal</span>
                            <p class="text-2xl font-bold text-slate-900  leading-tight mb-4"><?php echo $vm['principal'] ?: 'No cargado'; ?></p>

                            <div class="flex gap-6">
                                <?php if ($vm['entrada']): ?>
                                    <div class="flex flex-col">
                                        <span class="text-[8px] font-bold text-slate-700 uppercase tracking-tighter">Entrada</span>
                                        <span class="text-sm font-semibold text-slate-600 "><?php echo $vm['entrada']; ?></span>
                                    </div>
                                <?php endif; ?>
                                <?php if ($vm['postre']): ?>
                                    <div class="flex flex-col">
                                        <span class="text-[8px] font-bold text-slate-700 uppercase tracking-tighter">Postre</span>
                                        <span class="text-sm font-semibold text-slate-600 "><?php echo $vm['postre']; ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <?php if ($vm['pri_st'] || $vm['ent_st'] || $vm['pos_st']): ?>
                            <div class="bg-orange-50/50  border border-orange-100  rounded-xl p-5">
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="bg-[#3d6812] text-white text-[8px] font-black px-2 py-0.5 rounded uppercase">Sin TACC</span>
                                </div>
                                <p class="text-base font-bold text-slate-800  mb-3"><?php echo $vm['pri_st'] ?: 'Principal ST'; ?></p>
                                <div class="flex gap-4">
                                    <?php if ($vm['ent_st']): ?>
                                        <span class="text-[11px] text-slate-500"><strong class="text-slate-700 font-normal">Entrada:</strong> <?php echo $vm['ent_st']; ?></span>
                                    <?php endif; ?>
                                    <?php if ($vm['pos_st']): ?>
                                        <span class="text-[11px] text-slate-500"><strong class="text-slate-700 font-normal">Postre:</strong> <?php echo $vm['pos_st']; ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="flex items-center gap-2 pt-2">
                            <span class="text-[10px] font-bold text-slate-700 uppercase">Ticket</span>
                            <span class="text-3xl font-black text-[#63350c]"><?php echo $vm['precio']; ?></span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="p-6 bg-white  border-t border-slate-100  flex items-center justify-center">
                <button id="btn-suscribir-menu" class="group bg-slate-900 hover:bg-[#005eb8] text-white transition-all duration-300 rounded px-8 py-3 flex items-center gap-3 shadow-lg font-bold text-xs uppercase tracking-widest">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span>Suscribirse al menú</span>
                </button>





            </div>
        </div>

    <?php endif; ?>





    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const botones = document.querySelectorAll('#btn-suscribir-menu, #btn-suscribir-single');
            botones.forEach(function(boton) {
                boton.addEventListener('click', function(e) {
                    e.preventDefault();
                    // Detectar dispositivo
                    const userAgent = navigator.userAgent;
                    const isIOS = /iPhone|iPad|iPod/.test(userAgent);
                    const isAndroid = /Android/.test(userAgent);
                    const isStandalone = window.matchMedia('(display-mode: standalone)').matches;
                    // Si es iOS y NO está instalada la PWA
                    if (isIOS && !isStandalone) {
                        mostrarInstruccionesIOS();
                        return;
                    }
                    // Si es Android y NO está instalada
                    if (isAndroid && !isStandalone) {
                        mostrarInstruccionesAndroid();
                        return;
                    }
                    // Si ya está instalada o es desktop, mostrar prompt normal
                    activarNotificaciones(boton);
                });
            });
            // Función para mostrar instrucciones iOS
            function mostrarInstruccionesIOS() {
                const modal = document.createElement('div');
                modal.innerHTML = `
                <div style="position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.8); z-index: 9999; display: flex; align-items: center; justify-content: center; padding: 20px;">
                    <div style="background: white; border-radius: 20px; padding: 30px; max-width: 400px; text-align: center; box-shadow: 0 10px 40px rgba(0,0,0,0.3);">
                        <div style="font-size: 50px; margin-bottom: 15px;">📱</div>
                        <h3 style="font-size: 22px; font-weight: bold; color: #005eb8; margin-bottom: 15px;">
                            Instala la App
                        </h3>
                        <p style="color: #666; margin-bottom: 20px; line-height: 1.6;">
                            Para recibir notificaciones en iPhone, necesitas instalar nuestra app:
                        </p>
                        
                        <div style="text-align: left; background: #f5f5f5; padding: 20px; border-radius: 10px; margin-bottom: 20px;">
                            <div style="display: flex; align-items: start; margin-bottom: 15px;">
                                <span style="background: #005eb8; color: white; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: bold; margin-right: 10px; flex-shrink: 0;">1</span>
                                <span style="color: #333;">Toca el botón <strong>Compartir</strong> <svg style="display: inline; width: 16px; height: 16px;" fill="currentColor" viewBox="0 0 24 24"><path d="M16 5l-1.42 1.42-1.59-1.59V16h-1.98V4.83L9.42 6.42 8 5l4-4 4 4zm4 5v11c0 1.1-.9 2-2 2H6c-1.11 0-2-.9-2-2V10c0-1.11.89-2 2-2h3v2H6v11h12V10h-3V8h3c1.1 0 2 .89 2 2z"/></svg> en Safari</span>
                            </div>
                            <div style="display: flex; align-items: start; margin-bottom: 15px;">
                                <span style="background: #005eb8; color: white; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: bold; margin-right: 10px; flex-shrink: 0;">2</span>
                                <span style="color: #333;">Selecciona <strong>"Agregar a pantalla de inicio"</strong></span>
                            </div>
                            <div style="display: flex; align-items: start;">
                                <span style="background: #005eb8; color: white; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: bold; margin-right: 10px; flex-shrink: 0;">3</span>
                                <span style="color: #333;">Abre la app desde tu pantalla de inicio y vuelve acá</span>
                            </div>
                        </div>
                        <button onclick="this.closest('div').parentElement.remove()" style="background: #005eb8; color: white; border: none; padding: 12px 30px; border-radius: 8px; font-weight: bold; font-size: 16px; cursor: pointer; width: 100%;">
                            Entendido
                        </button>
                    </div>
                </div>
            `;
                document.body.appendChild(modal);
            }
            // Función para mostrar instrucciones Android
            function mostrarInstruccionesAndroid() {
                const modal = document.createElement('div');
                modal.innerHTML = `
                <div style="position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.8); z-index: 9999; display: flex; align-items: center; justify-content: center; padding: 20px;">
                    <div style="background: white; border-radius: 20px; padding: 30px; max-width: 400px; text-align: center; box-shadow: 0 10px 40px rgba(0,0,0,0.3);">
                        <div style="font-size: 50px; margin-bottom: 15px;">📱</div>
                        <h3 style="font-size: 22px; font-weight: bold; color: #005eb8; margin-bottom: 15px;">
                            Instala la App
                        </h3>
                        <p style="color: #666; margin-bottom: 20px; line-height: 1.6;">
                            Para una mejor experiencia y recibir notificaciones:
                        </p>
                        
                        <div style="text-align: left; background: #f5f5f5; padding: 20px; border-radius: 10px; margin-bottom: 20px;">
                            <div style="display: flex; align-items: start; margin-bottom: 15px;">
                                <span style="background: #005eb8; color: white; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: bold; margin-right: 10px; flex-shrink: 0;">1</span>
                                <span style="color: #333;">Toca el menú <strong>⋮</strong> (tres puntos) en tu navegador</span>
                            </div>
                            <div style="display: flex; align-items: start; margin-bottom: 15px;">
                                <span style="background: #005eb8; color: white; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: bold; margin-right: 10px; flex-shrink: 0;">2</span>
                                <span style="color: #333;">Selecciona <strong>"Instalar app"</strong> o <strong>"Agregar a pantalla de inicio"</strong></span>
                            </div>
                            <div style="display: flex; align-items: start;">
                                <span style="background: #005eb8; color: white; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: bold; margin-right: 10px; flex-shrink: 0;">3</span>
                                <span style="color: #333;">Abrí la app y volvé a activar las notificaciones</span>
                            </div>
                        </div>
                        <button onclick="this.closest('div').parentElement.remove()" style="background: #005eb8; color: white; border: none; padding: 12px 30px; border-radius: 8px; font-weight: bold; font-size: 16px; cursor: pointer; width: 100%;">
                            Entendido
                        </button>
                    </div>
                </div>
            `;
                document.body.appendChild(modal);
            }

            function activarNotificaciones(boton) {
                const textoOriginal = boton.innerHTML;
                boton.innerHTML = '<span class="text-xs">Procesando...</span>';

                window.OneSignal = window.OneSignal || [];
                window.OneSignal.push(function() {

                    // 1. Obtener el estado del permiso con la sintaxis moderna
                    // Los valores posibles son: "default", "granted", o "denied"
                    const currentPermission = OneSignal.Notifications.permissionNative;

                    if (currentPermission === 'denied') {
                        alert("Has bloqueado las notificaciones en tu navegador. Por favor, haz clic en el icono del candado junto a la URL para restablecer los permisos.");
                        boton.innerHTML = textoOriginal;
                        return;
                    }

                    if (currentPermission === 'granted') {
                        alert("Ya tenés las notificaciones activadas. ¡Gracias!");
                        boton.innerHTML = textoOriginal;
                        return;
                    }

                    // 2. Ejecutar el Slidedown personalizado
                    // En el SDK moderno se usa OneSignal.Slidedown.promptPush
                    try {
                        OneSignal.Slidedown.promptPush({
                            force: true
                        });
                    } catch (e) {
                        console.error("Error al intentar mostrar el prompt:", e);
                        // Fallback en caso de que el Slidedown falle por configuración
                        OneSignal.Notifications.requestPermission();
                    }
                });

                setTimeout(() => {
                    boton.innerHTML = textoOriginal;
                }, 2000);
            }

        });
    </script>
</section>





<section class="bg-[#416ed2] py-8">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-white text-center divide-y md:divide-y-0 md:divide-x divide-white/20">
            <div class="px-4 py-2">
                <p class="text-3xl font-bold mb-1">lorem</p>
                <p class="text-sm text-white uppercase tracking-wider">Departamentos</p>
            </div>
            <div class="px-4 py-2">
                <p class="text-3xl font-bold mb-1">lorem</p>
                <p class="text-sm text-white uppercase tracking-wider">Servicios al estudiante</p>
            </div>
            <div class="px-4 py-2">
                <p class="text-3xl font-bold mb-1">lorem</p>
                <p class="text-sm text-white uppercase tracking-wider">Compromiso público</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50 border-b border-gray-200">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-center max-w-7xl mx-auto">

            <div class="order-2 md:order-1">
                <h2 class="text-3xl font-bold text-gray-900 mb-6 border-b-2 border-[#005eb8] inline-block pb-2">
                    Sobre SAEBU
                </h2>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    La Secretaría de Asuntos Estudiantiles y Bienestar Universitario trabaja día a día para garantizar la igualdad de oportunidades y la permanencia de los estudiantes en la Universidad Nacional de San Luis.
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-[#005eb8] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Acompañamiento integral al estudiante.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-[#005eb8] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Gestión de becas y beneficios económicos.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-[#005eb8] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Promoción de la salud y el deporte.</span>
                    </li>
                </ul>
                <a href="<?php echo home_url('/institucional'); ?>" class="text-[#005eb8] font-semibold hover:text-[#004a99] transition-colors inline-flex items-center gap-2">
                    Conocer nuestras autoridades
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>

            <div class="order-1 md:order-2">
                <div class="relative bg-white p-2 rounded shadow-lg border border-gray-200">
                    <div class="aspect-video bg-gray-900 relative group overflow-hidden">
                        <video id="video-institucional-player"
                            class="w-full h-full object-cover"
                            poster="<?php echo get_template_directory_uri(); ?>/assets/images/video-poster.png">
                            <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/becas.mp4" type="video/mp4">
                        </video>

                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 group-hover:bg-black/20 transition-all cursor-pointer" id="play-pause-btn">
                            <div class="w-16 h-16 bg-white/90 rounded-full flex items-center justify-center shadow-md hover:scale-105 transition-transform play-icon">
                                <svg class="w-6 h-6 text-[#005eb8] ml-1" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="servydep" class="py-20 bg-[#cda2ff47]">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-3">Departamentos y áreas</h2>
            <div class="w-20 h-1 bg-[#416ed2] mx-auto mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">Estructura organizativa al servicio de la comunidad universitaria.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto">
            <?php

            $departamentos = array(
                // Becas: Prioridad alta
                [
                    'name' => 'Dpto. Becas',
                    'slug' => 'becas',
                    'desc' => 'Programas de apoyo económico y equidad.',
                    'icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z'
                ],
                // CeSEU
                [
                    'name' => 'Centro de Salud Estudiantil Universitaria (CeSEU)',
                    'slug' => 'ceseu',
                    'desc' => 'Atención primaria, prevención y cuidado.',
                    'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'
                ],
                // Camping
                [
                    'name' => 'Complejo Turístico y Recreativo La Florida',
                    'slug' => 'camping-universitario',
                    'desc' => 'Turismo, naturaleza y esparcimiento.',
                    'icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z'
                ],

                // Deportes
                [
                    'name' => 'Dpto. de Educación Física y Deporte',
                    'slug' => 'dpto-deportes',
                    'desc' => 'Actividad física, recreación y competencia.',
                    'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'
                ],
                // Trabajo Social
                [
                    'name' => 'Dpto. Trabajo Social',
                    'slug' => 'dpto-trabajo-social',
                    'desc' => 'Orientación, acompañamiento y asistencia.',
                    'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'
                ],
                // Mesa de Entradas
                [
                    'name' => 'Dpto. Mesa de Entradas',
                    'slug' => 'dpto-mesa-de-entradas',
                    'desc' => 'Recepción y gestión de trámites.',
                    'icon' => 'M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4'
                ],
                // Contable
                [
                    'name' => 'Dpto. Contable',
                    'slug' => 'dpto-contable',
                    'desc' => 'Administración financiera y presupuestaria.',
                    'icon' => 'M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z'
                ],
                // Compras
                [
                    'name' => 'Dpto. de Compras',
                    'slug' => 'dpto-compras',
                    'desc' => 'Contrataciones y adquisiciones institucionales.',
                    'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01'
                ],
                // Comedor
                [
                    'name' => 'Comedor universitario',
                    'slug' => 'comedor',
                    'desc' => 'Alimentación nutricional accesible.',
                    'icon' => 'M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z'
                ],
                // Club Universitario
                [
                    'name' => 'Club Universitario',
                    'slug' => 'club-universitario',
                    'desc' => 'Espacio social y recreativo.',
                    'icon' => 'M5 14v7M5 4.971v9.541c5.6-5.538 8.4 2.64 14-.086v-9.54C13.4 7.61 10.6-.568 5 4.97Z'
                ],
                [
                    'name' => 'Gimnasio',
                    'slug' => 'gimnasio',
                    'desc' => 'Espacio para actividad física y bienestar.',
                    'icon' => 'M20 16v-4a8 8 0 1 0-16 0v4m16 0v2a2 2 0 0 1-2 2h-2v-6h2a2 2 0 0 1 2 2ZM4 16v2a2 2 0 0 0 2 2h2v-6H6a2 2 0 0 0-2 2Z'
                ],
                [
                    'name' => 'Sedes',
                    'slug' => 'sedes',
                    'desc' => 'Coordinación de actividades en sedes regionales.',
                    'icon' => 'M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z'
                ]
            );


            foreach ($departamentos as $depto) : ?>
                <a href="<?php echo home_url('/' . $depto['slug']); ?>"
                    class="group bg-white border border-gray-200 rounded-md p-6 hover:border-[#005eb8] hover:shadow-md transition-all duration-300 flex items-start gap-4">
                    <div class="text-gray-700 group-hover:text-[#005eb8] transition-colors">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo $depto['icon']; ?>"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 group-hover:text-[#005eb8] mb-1 transition-colors"><?php echo $depto['name']; ?></h3>
                        <p class="text-sm text-gray-500"><?php echo $depto['desc']; ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-10">
            <a href="<?php echo home_url('/departamentos'); ?>" class="text-gray-600 hover:text-[#005eb8] font-medium text-sm underline decoration-gray-300 hover:decoration-[#005eb8] transition-all">
                Ver organigrama completo
            </a>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-100 border-t border-gray-200">
    <div class="container mx-auto px-4 ">
        <div class="flex items-center justify-between mb-10 max-w-7xl mx-auto">
            <h2 class="text-2xl font-bold text-gray-900 border-l-4 border-[#005eb8] pl-3">Novedades</h2>
            <a href="<?php echo get_post_type_archive_link('noticia'); ?>" class="text-sm font-semibold text-[#005eb8] hover:underline">Ver más →</a>
        </div>

        <div class="max-w-7xl mx-auto relative">
            <!-- Contenedor con padding solo para las flechas -->
            <div class="px-12 lg:px-16 relative">
                <!-- Swiper Container -->
                <div class="swiper noticias-swiper pb-12">
                    <div class="swiper-wrapper">
                        <?php
                        $latest_news = new WP_Query(array(
                            'post_type' => 'noticia',
                            'posts_per_page' => 6,
                        ));

                        if ($latest_news->have_posts()) :
                            while ($latest_news->have_posts()) : $latest_news->the_post();
                        ?>
                                <div class="swiper-slide">
                                    <article class="bg-white rounded-sm shadow-sm border border-gray-200 hover:shadow-md transition-shadow duration-300 flex flex-col h-full">
                                        <a title="Link <?php the_title(); ?>" href="<?php the_permalink(); ?>" class="block relative aspect-video overflow-hidden bg-gray-200">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover transition-transform duration-500 hover:scale-105')); ?>
                                            <?php else : ?>
                                                <div class="w-full h-full flex items-center justify-center text-gray-700">
                                                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                    </svg>
                                                </div>
                                            <?php endif; ?>
                                            <?php
                                            $terms = get_the_terms(get_the_ID(), 'departamento');
                                            if ($terms && !is_wp_error($terms)) :
                                                $term = array_shift($terms);
                                            ?>
                                                <span class="absolute bottom-0 left-0 bg-[#416ed2] text-white text-xs font-bold px-3 py-1">
                                                    <?php echo esc_html($term->name); ?>
                                                </span>
                                            <?php endif; ?>
                                        </a>

                                        <div class="p-5 flex-1 flex flex-col">
                                            <div class="text-xs text-gray-500 mb-2 font-medium">
                                                <?php echo get_the_date('d \d\e F, Y'); ?>
                                            </div>

                                            <h3 class="text-lg font-bold text-gray-900 leading-tight mb-3 flex-1">
                                                <a href="<?php the_permalink(); ?>" class="hover:text-[#005eb8] transition-colors">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h3>

                                            <div class="text-gray-600 text-sm line-clamp-3 mb-4">
                                                <?php the_excerpt(); ?>
                                            </div>

                                            <a href="<?php the_permalink(); ?>" class="text-[#005eb8] text-sm font-semibold hover:underline mt-auto inline-block">
                                                Ver más
                                            </a>
                                        </div>
                                    </article>
                                </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>

                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                </div>

                <!-- Navigation Buttons -->
                <div class="swiper-button-prev-noticias"></div>
                <div class="swiper-button-next-noticias"></div>
            </div>
        </div>





    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const video = document.getElementById('video-institucional-player');
        const playBtn = document.getElementById('play-pause-btn');

        if (video && playBtn) {
            playBtn.addEventListener('click', function() {
                if (video.paused) {
                    video.play();
                    video.controls = true; // Activar controles nativos al reproducir
                    playBtn.style.display = 'none';
                }
            });

            video.addEventListener('pause', function() {
                if (!video.seeking) { // No mostrar overlay si solo se está moviendo la barra
                    video.controls = false;
                    playBtn.style.display = 'flex';
                }
            });
        }
    });
</script>

<?php get_footer(); ?>