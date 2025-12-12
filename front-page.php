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
            // --- OPCIÓN RANDOM SIMPLE ---
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
                <div class="flex flex-wrap gap-4 pt-4">
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
    $menu_dia = saebu_get_menu_del_dia();

    if ($menu_dia) :
        // Obtención de datos
        $fecha     = get_post_meta($menu_dia->ID, '_menu_fecha', true);
        $entrada   = get_post_meta($menu_dia->ID, '_menu_entrada', true);
        $principal = get_post_meta($menu_dia->ID, '_menu_principal', true);
        $postre    = get_post_meta($menu_dia->ID, '_menu_postre', true);
        $precio    = get_post_meta($menu_dia->ID, '_menu_precio', true);

        // Sin TACC
        $entrada_st   = get_post_meta($menu_dia->ID, '_menu_entrada_sintacc', true);
        $principal_st = get_post_meta($menu_dia->ID, '_menu_principal_sintacc', true);
        $postre_st    = get_post_meta($menu_dia->ID, '_menu_postre_sintacc', true);
    ?>

        <div class="w-full bg-white  shadow-lg border-l-4 border-r-4 border-[#005eb8] overflow-hidden"> <!--  my-6 -->  

            <div class="grid grid-cols-1 lg:grid-cols-12 min-h-[140px]">

                <div class="bg-gray-50 p-4 flex flex-row lg:flex-col justify-between lg:justify-center items-center text-center border-b lg:border-b-0 lg:border-r border-gray-100 lg:col-span-2">
                    <div class="mb-0 lg:mb-2">
                        <h3 class="text-xs font-bold text-gray-500 uppercase tracking-wider">Menú del</h3>
                        <div class="flex items-center justify-center gap-1 text-[#005eb8]">
                            <span class="text-3xl font-bold leading-none"><?php echo date_i18n('d', strtotime($fecha)); ?></span>
                            <div class="flex flex-col text-xs font-bold uppercase leading-none text-left">
                                <span><?php echo date_i18n('M', strtotime($fecha)); ?></span>
                                <span><?php echo date_i18n('Y', strtotime($fecha)); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="hidden lg:block mt-2">
                        <span class="inline-flex items-center gap-1 px-2 py-1 rounded-full bg-blue-100 text-blue-800 text-[10px] font-bold uppercase">
                            Comedor UNSL
                        </span>
                    </div>
                </div>

                <div class="p-5 flex flex-col justify-center border-b lg:border-b-0 lg:border-r border-gray-100 lg:col-span-4 relative">
                    <div class="absolute top-2 right-2 opacity-5 pointer-events-none">
                        <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M11 9H9V2H7v7H5V2H3v7c0 2.12 1.66 3.84 3.75 3.97V22h2.5v-9.03C11.34 12.84 13 11.12 13 9V2h-2v7zm5-3v8h2.5v8H21V2c-2.76 0-5 2.24-5 4z" />
                        </svg>
                    </div>

                    <div class="space-y-3 z-10">
                        <?php if ($entrada): ?>
                            <div class="flex items-baseline gap-2">
                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wide w-16 shrink-0">Entrada</span>
                                <span class="text-sm text-gray-600 font-medium leading-tight"><?php echo esc_html($entrada); ?></span>
                            </div>
                        <?php endif; ?>

                        <?php if ($principal): ?>
                            <div class="flex items-baseline gap-2">
                                <span class="text-[10px] font-bold text-[#005eb8] uppercase tracking-wide w-16 shrink-0">Principal</span>
                                <span class="text-lg text-gray-900 font-bold leading-tight"><?php echo esc_html($principal); ?></span>
                            </div>
                        <?php endif; ?>

                        <?php if ($postre): ?>
                            <div class="flex items-baseline gap-2">
                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wide w-16 shrink-0">Postre</span>
                                <span class="text-sm text-gray-600 font-medium leading-tight"><?php echo esc_html($postre); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if ($principal_st || $entrada_st): ?>
                    <div class="p-5 flex flex-col justify-center bg-[#fcfdfa] border-b lg:border-b-0 lg:border-r border-dashed border-gray-200 lg:col-span-3">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="w-2 h-2 rounded-full bg-[#70b62c]"></span>
                            <h4 class="text-xs font-bold text-[#437017] uppercase tracking-wider">Opción Sin TACC</h4>
                        </div>

                        <div class="space-y-2 pl-2 border-l-2 border-[#70b62c]/20">
                            <?php if ($principal_st): ?>
                                <div>
                                    <p class="text-[10px] text-[#437017] font-bold uppercase mb-0.5">Principal</p>
                                    <p class="text-sm font-semibold text-gray-800 leading-tight"><?php echo esc_html($principal_st); ?></p>
                                </div>
                            <?php endif; ?>

                            <?php if ($entrada_st || $postre_st): ?>
                                <div class="text-xs text-gray-500 mt-1">
                                    <?php if ($entrada_st) echo '<span class="mr-2">Ent: ' . esc_html($entrada_st) . '</span>'; ?>
                                    <?php if ($postre_st) echo '<span>Pos: ' . esc_html($postre_st) . '</span>'; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="hidden lg:block lg:col-span-3 bg-gray-50/50"></div>
                <?php endif; ?>

                <div class="p-4 flex flex-col justify-between items-center text-center bg-gray-50 lg:col-span-3">
                    <?php if ($precio): ?>
                        <div class="mt-2 mb-3">
                            <span class="block text-[10px] text-gray-500 uppercase font-semibold">Valor Ticket</span>
                            <span class="text-2xl font-bold text-[#005eb8]"><?php echo esc_html($precio); ?></span>
                        </div>
                    <?php endif; ?>

                    <button id="btn-suscribir-menu" class="group w-full bg-white hover:bg-[#005eb8] text-[#005eb8] hover:text-white border border-[#005eb8] font-bold py-2 px-3 rounded text-xs transition-all duration-200 flex items-center justify-center gap-2 shadow-sm hover:shadow-md">
                        <svg class="w-4 h-4 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                        </svg>
                        <span>Notificarme</span>
                    </button>
                </div>

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
                                <span style="color: #333;">Abre la app desde tu pantalla de inicio y vuelve aquí</span>
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
            // Función para activar notificaciones (cuando ya está instalada)
            function activarNotificaciones(boton) {
                const textoOriginal = boton.innerHTML;
                boton.innerHTML = '<span class="text-xs">Procesando...</span>';
                window.OneSignal = window.OneSignal || [];
                window.OneSignal.push(function() {
                    if (typeof window.OneSignal.showSlidedownPrompt === 'function') {
                        window.OneSignal.showSlidedownPrompt({
                            force: true
                        });
                    } else if (typeof window.OneSignal.Slidedown === 'object' &&
                        typeof window.OneSignal.Slidedown.promptPush === 'function') {
                        window.OneSignal.Slidedown.promptPush({
                            force: true
                        });
                    } else if (typeof window.OneSignal.showNativePrompt === 'function') {
                        window.OneSignal.showNativePrompt();
                    } else {
                        window.OneSignal.registerForPushNotifications();
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
                <p class="text-3xl font-bold mb-1">+5</p>
                <p class="text-sm text-white uppercase tracking-wider">Departamentos</p>
            </div>
            <div class="px-4 py-2">
                <p class="text-3xl font-bold mb-1">+10</p>
                <p class="text-sm text-white uppercase tracking-wider">Servicios al Estudiante</p>
            </div>
            <div class="px-4 py-2">
                <p class="text-3xl font-bold mb-1">UNSL</p>
                <p class="text-sm text-white uppercase tracking-wider">Compromiso Público</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50 border-b border-gray-200">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">

            <div class="order-2 md:order-1">
                <h2 class="text-3xl font-bold text-gray-900 mb-6 border-b-2 border-[#005eb8] inline-block pb-2">
                    Sobre SAEBU
                </h2>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    La Secretaría de Asuntos Estudiantiles trabaja día a día para garantizar la igualdad de oportunidades y la permanencia de los estudiantes en la Universidad Nacional de San Luis.
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
            <h2 class="text-3xl font-bold text-gray-900 mb-3">Departamentos y Áreas</h2>
            <div class="w-20 h-1 bg-[#416ed2] mx-auto mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">Estructura organizativa al servicio de la comunidad universitaria.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto">
            <?php

            $departamentos = array(
                // Becas: Prioridad alta
                [
                    'name' => 'Becas',
                    'slug' => 'becas',
                    'desc' => 'Programas de apoyo económico y equidad.',
                    'icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z'
                ],
                // CeSEU
                [
                    'name' => 'Salud Estudiantil',
                    'slug' => 'ceseu',
                    'desc' => 'Atención primaria, prevención y cuidado.',
                    'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'
                ],
                // Comedor
                [
                    'name' => 'Comedor Universitario',
                    'slug' => 'comedor',
                    'desc' => 'Alimentación nutricional accesible.',
                    'icon' => 'M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z'
                ],
                // Deportes
                [
                    'name' => 'Deportes',
                    'slug' => 'dpto-deportes',
                    'desc' => 'Actividad física, recreación y competencia.',
                    'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'
                ],
                // Trabajo Social
                [
                    'name' => 'Trabajo Social',
                    'slug' => 'dpto-trabajo-social',
                    'desc' => 'Orientación, acompañamiento y asistencia.',
                    'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'
                ],
                // Mesa de Entradas
                [
                    'name' => 'Mesa de Entradas',
                    'slug' => 'dpto-mesa-de-entradas',
                    'desc' => 'Recepción y gestión de trámites.',
                    'icon' => 'M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4'
                ],
                // Contable
                [
                    'name' => 'Contable',
                    'slug' => 'dpto-contable',
                    'desc' => 'Administración financiera y presupuestaria.',
                    'icon' => 'M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z'
                ],
                // Compras
                [
                    'name' => 'Compras',
                    'slug' => 'dpto-compras',
                    'desc' => 'Contrataciones y adquisiciones institucionales.',
                    'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01'
                ],
                // Camping
                [
                    'name' => 'Camping',
                    'slug' => 'camping-universitario',
                    'desc' => 'Turismo, naturaleza y esparcimiento.',
                    'icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z'
                ],
                // Club Universitario
                [
                    'name' => 'Club Universitario',
                    'slug' => 'club-universitario',
                    'desc' => 'Espacio social y recreativo.',
                    'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'
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
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between mb-10 max-w-7xl mx-auto">
            <h2 class="text-2xl font-bold text-gray-900 border-l-4 border-[#005eb8] pl-3">Novedades Institucionales</h2>
            <a href="<?php echo get_post_type_archive_link('noticia'); ?>" class="text-sm font-semibold text-[#005eb8] hover:underline">Ver archivo de noticias &rarr;</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            <?php
            $latest_news = new WP_Query(array(
                'post_type' => 'noticia',
                'posts_per_page' => 3,
            ));

            if ($latest_news->have_posts()) :
                while ($latest_news->have_posts()) : $latest_news->the_post();
            ?>
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
                                Leer noticia completa
                            </a>
                        </div>
                    </article>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
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