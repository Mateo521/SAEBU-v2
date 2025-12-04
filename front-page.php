<?php get_header(); ?>



<!-- Hero Banner Unificado con Menú del Día -->
<section class="relative min-h-screen overflow-hidden">
    <!-- Imagen de fondo con overlay -->
    <div class="absolute inset-0 z-0">
        <?php
        // Obtener imagen destacada de la página de inicio o imagen por defecto
        $hero_image = get_theme_mod('hero_background_image');
        if (!$hero_image && has_post_thumbnail()) {
            $hero_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
        }
        if (!$hero_image) {
            $hero_image = get_template_directory_uri() . '/assets/images/hero-default.jpg';
        }
        ?>
        <img src="<?php echo esc_url($hero_image); ?>"
            alt="Banner SAEBU"
            class="w-full h-full object-cover scale-105">

        <!-- Overlay con gradiente más fuerte -->
        <div class="absolute inset-0 bg-gradient-to-b from-blue-900/85 via-slate-900/80 to-slate-900/90"></div>
    </div>

    <!-- Contenido -->
    <div class="relative z-10 container mx-auto px-4 py-16 md:py-20">

        <!-- Header Section -->
        <div class="text-center mb-12 md:mb-16">
            <!-- Badge superior -->
            <div class="inline-block mb-6 animate-fade-in">

                <span class="bg-white/10 flex items-center gap-3 backdrop-blur-xl text-white px-5 py-2.5 rounded-full text-sm font-medium border border-white/20 shadow-lg">
                    <img class="w-7 h-auto" src="<?php echo get_template_directory_uri(); ?>/logo-unsl-2.png" alt="">
                    Universidad Nacional de San Luis
                </span>
            </div>

            <!-- Título principal -->
            <h1 class="text-2xl md:text-2xl lg:text-5xl font-bold text-white mb-6 leading-tight animate-fade-in-up">
                Secretaría de Asuntos Estudiantiles<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-blue-200">
                    Bienestar Universitario
                </span>
            </h1>

            <p class="text-lg md:text-xl text-gray-200 mb-8 leading-relaxed mx-auto animate-fade-in-up">
                Asistencia y acompañamiento para contribuir a un óptimo desempeño académico
            </p>
        </div>

        <!-- Grid: Menú del Día + Botones -->
        <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-6 md:gap-8 items-start">

            <!-- Menú del Día Card -->
            <?php
            $menu_dia = saebu_get_menu_del_dia();
            if ($menu_dia) :
                $fecha = get_post_meta($menu_dia->ID, '_menu_fecha', true);
                $entrada = get_post_meta($menu_dia->ID, '_menu_entrada', true);
                $principal = get_post_meta($menu_dia->ID, '_menu_principal', true);
                $postre = get_post_meta($menu_dia->ID, '_menu_postre', true);
                $precio = get_post_meta($menu_dia->ID, '_menu_precio', true);
            ?>
                <div class="bg-white/10 backdrop-blur-2xl rounded border border-white/20 overflow-hidden shadow-2xl hover:bg-white/15 transition-all duration-300 animate-slide-in-left">

                    <!-- Header del menú integrado -->
                    <div class="p-6 md:p-8 border-b border-white/20">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center border border-white/30">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl md:text-2xl font-bold text-white">Menú del Día</h3>
                                    <p class="text-blue-200 text-sm">Comedor Universitario</p>
                                </div>
                            </div>

                            <!-- Fecha badge -->
                            <div class="bg-white/20 backdrop-blur-sm border border-white/30 rounded-xl px-3 py-2 text-center min-w-[70px]">
                                <div class="text-xs font-semibold uppercase text-blue-200">
                                    <?php echo date_i18n('M', strtotime($fecha)); ?>
                                </div>
                                <div class="text-2xl font-bold text-white leading-none mt-0.5">
                                    <?php echo date_i18n('d', strtotime($fecha)); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contenido del menú -->
                    <div class="p-6 md:p-8 space-y-4">

                        <?php if ($entrada) : ?>
                            <div class="flex items-start gap-3 group">
                                <div class="flex-shrink-0 w-8 h-8 bg-blue-400/20 rounded-lg flex items-center justify-center mt-0.5 group-hover:bg-blue-400/30 transition-colors">
                                    <svg class="w-4 h-4 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="text-xs font-semibold text-blue-200 uppercase tracking-wider mb-1">Entrada</h4>
                                    <p class="text-base md:text-lg text-white font-medium"><?php echo esc_html($entrada); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ($principal) : ?>
                            <div class="flex items-start gap-3 group">
                                <div class="flex-shrink-0 w-8 h-8 bg-purple-400/20 rounded-lg flex items-center justify-center mt-0.5 group-hover:bg-purple-400/30 transition-colors">
                                    <svg class="w-4 h-4 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="text-xs font-semibold text-purple-200 uppercase tracking-wider mb-1">Plato Principal</h4>
                                    <p class="text-base md:text-lg text-white font-medium"><?php echo esc_html($principal); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ($postre) : ?>
                            <div class="flex items-start gap-3 group">
                                <div class="flex-shrink-0 w-8 h-8 bg-pink-400/20 rounded-lg flex items-center justify-center mt-0.5 group-hover:bg-pink-400/30 transition-colors">
                                    <svg class="w-4 h-4 text-pink-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="text-xs font-semibold text-pink-200 uppercase tracking-wider mb-1">Postre</h4>
                                    <p class="text-base md:text-lg text-white font-medium"><?php echo esc_html($postre); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ($precio) : ?>
                            <!-- Precio integrado -->
                            <div class="pt-4 mt-4 border-t border-white/20">
                                <div class="flex items-center justify-between">
                                    <span class="text-white/80 font-medium">Precio</span>
                                    <span class="text-2xl md:text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-cyan-300">
                                        <?php echo esc_html($precio); ?>
                                    </span>
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- Botón de notificaciones compacto -->
                        <button id="suscribir-menu-btn"
                            class="w-full mt-4 bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/30 text-white px-4 py-3 rounded-xl font-medium transition-all duration-300 hover:scale-[1.02] active:scale-[0.98] flex items-center justify-center gap-2 text-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                            </svg>
                            Recibir notificaciones
                        </button>
                    </div>

                    <!-- Footer con indicador -->
                    <div class="px-6 pb-6">
                        <div class="flex items-center justify-center gap-2 text-xs text-white/60">
                            <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
                            <span>Actualizado hoy</span>
                        </div>
                    </div>

                </div>
            <?php endif; ?>

            <!-- Columna derecha: Acciones y Info -->
            <div class="space-y-6 animate-slide-in-right">

                <!-- Botones de acción principales -->
                <div class="bg-white/10 backdrop-blur-2xl rounded border border-white/20 p-6 md:p-8 shadow-2xl">
                    <h3 class="text-xl font-bold text-white mb-6">¿Qué estás buscando?</h3>

                    <div class="space-y-3">
                        <a href="<?php echo home_url('/noticias'); ?>"
                            class="group w-full flex items-center justify-between bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/20 text-white px-6 py-4 rounded-xl font-semibold transition-all duration-300 hover:scale-[1.02]">
                            <span class="flex items-center gap-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                </svg>
                                Ver Noticias
                            </span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>

                        <a href="<?php echo home_url('/institucional'); ?>"
                            class="group w-full flex items-center justify-between bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/20 text-white px-6 py-4 rounded-xl font-semibold transition-all duration-300 hover:scale-[1.02]">
                            <span class="flex items-center gap-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Conocer más sobre SAEBU
                            </span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>

                        <a href="<?php echo home_url('/servicios'); ?>"
                            class="group w-full flex items-center justify-between bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/20 text-white px-6 py-4 rounded-xl font-semibold transition-all duration-300 hover:scale-[1.02]">
                            <span class="flex items-center gap-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                                Nuestros Servicios
                            </span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Información destacada -->
                <div class="bg-gradient-to-br from-blue-500/20 to-purple-500/20 backdrop-blur-2xl rounded border border-white/20 p-6 md:p-8 shadow-2xl">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-white mb-2">¿Necesitás ayuda?</h4>
                            <p class="text-white/80 text-sm leading-relaxed mb-4">
                                Nuestro equipo está disponible para asesorarte en todo lo que necesites
                            </p>
                            <a href="#contacto"
                                class="inline-flex items-center gap-2 text-blue-300 hover:text-blue-200 font-semibold text-sm transition-colors">
                                Contactar ahora
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Scroll indicator -->
        <div class="absolute flex justify-center w-full bottom-2 left-0">
            <a href="#servicios" class="flex flex-col items-center gap-2 text-white/60 hover:text-white/80 transition-colors">
                <span class="text-xs uppercase tracking-wider font-medium">Explorar</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </a>
        </div>

    </div>
</section>

<style>
    /* Animaciones personalizadas */
    @keyframes fade-in {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fade-in-up {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slide-in-left {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slide-in-right {
        from {
            opacity: 0;
            transform: translateX(30px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .animate-fade-in {
        animation: fade-in 0.6s ease-out;
    }

    .animate-fade-in-up {
        animation: fade-in-up 0.8s ease-out;
        animation-delay: 0.2s;
        animation-fill-mode: both;
    }

    .animate-slide-in-left {
        animation: slide-in-left 0.8s ease-out;
        animation-delay: 0.4s;
        animation-fill-mode: both;
    }

    .animate-slide-in-right {
        animation: slide-in-right 0.8s ease-out;
        animation-delay: 0.6s;
        animation-fill-mode: both;
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.5;
        }
    }

    .animate-pulse {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    /* Backdrop blur fallback */
    @supports not (backdrop-filter: blur(40px)) {
        .backdrop-blur-2xl {
            background-color: rgba(0, 0, 0, 0.5);
        }
    }
</style>





<!-- Departamentos -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-2xl font-bold text-slate-900 mb-4">Departamentos</h2>
            <p class="text-lg text-gray-600 mx-auto">
                Servicios especializados para apoyar tu desarrollo universitario
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto">
            <?php
            $departamentos = array(
                array(
                    'name' => 'Becas',
                    'slug' => 'becas',
                    'description' => 'Apoyo económico para continuar tus estudios',
                    'svg' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>'
                ),
                array(
                    'name' => 'Mesa de Entradas',
                    'slug' => 'dpto-mesa-de-entradas',
                    'description' => 'Gestión de trámites administrativos',
                    'svg' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>'
                ),
                array(
                    'name' => 'Compras y Contrataciones',
                    'slug' => 'dpto-compras',
                    'description' => 'Gestión de adquisiciones institucionales',
                    'svg' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>'
                ),
                array(
                    'name' => 'Club Universitario',
                    'slug' => 'club-universitario',
                    'description' => 'Actividades deportivas y sociales',
                    'svg' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>'
                ),
                array(
                    'name' => 'Departamento Contable',
                    'slug' => 'dpto-contable',
                    'description' => 'Administración financiera y presupuestaria',
                    'svg' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>'
                ),
                array(
                    'name' => 'Departamento de Deportes',
                    'slug' => 'dpto-deportes',
                    'description' => 'Promoción de la actividad física',
                    'svg' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>'
                ),
                array(
                    'name' => 'Trabajo Social',
                    'slug' => 'dpto-trabajo-social',
                    'description' => 'Asistencia y orientación social',
                    'svg' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>'
                ),
                array(
                    'name' => 'CeSEU',
                    'slug' => 'ceseu',
                    'description' => 'Centro de Salud Estudiantil Universitario',
                    'svg' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>'
                ),
                array(
                    'name' => 'Camping Universitario',
                    'slug' => 'camping-universitario',
                    'description' => 'Espacio recreativo y de esparcimiento',
                    'svg' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>'
                ),
            );

            foreach ($departamentos as $depto) :
            ?>
                <a href="<?php echo home_url('/' . $depto['slug']); ?>"
                    class="group bg-white border border-gray-200 rounded-lg px-4 py-6 hover:border-blue-500 hover:shadow-lg transition-all duration-300">
                    <div class="text-[#416ed2] mb-4 transform transition-transform duration-300">
                        <?php echo $depto['svg']; ?>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-[#416ed2] transition-colors">
                        <?php echo $depto['name']; ?>
                    </h3>
                    <p class="text-gray-600 text-sm mb-4">
                        <?php echo $depto['description']; ?>
                    </p>
                    <span class="text-[#416ed2] text-sm font-medium">
                        Más información →
                    </span>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- Botón Ver Todos -->
        <div class="text-center mt-12">
            <a href="<?php echo home_url('/departamentos'); ?>"
                class="inline-flex items-center gap-2 bg-[#416ed2] text-white px-8 py-4 rounded-lg font-bold hover:bg-[#2d4d9e] transition-all hover:scale-105 shadow-lg">
                <span>Ver Todos los Departamentos</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>





<!-- Últimas Noticias - Overlay Elegante -->
<section class="py-12 md:py-16 bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between mb-8 md:mb-10">
            <div>
                <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-2">Últimas Noticias</h2>
                <p class="text-sm text-gray-600">Mantente informado sobre nuestras actividades</p>
            </div>
            <a href="<?php echo get_post_type_archive_link('noticia'); ?>"
                class="hidden md:inline-flex items-center gap-2 text-[#416ed2] font-semibold hover:gap-3 transition-all group">
                Ver todas
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto">
            <?php
            $latest_news = new WP_Query(array(
                'post_type' => 'noticia',
                'posts_per_page' => 6,
            ));

            if ($latest_news->have_posts()) :
                while ($latest_news->have_posts()) : $latest_news->the_post();
            ?>
                    <article class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500">

                        <!-- Imagen con overlay -->
                        <div class="relative h-64 overflow-hidden">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover group-hover:scale-110 transition-transform duration-700')); ?>
                            <?php else : ?>
                                <div class="w-full h-full bg-gradient-to-br from-blue-100 via-purple-100 to-pink-100 flex items-center justify-center">
                                    <svg class="w-20 h-20 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            <?php endif; ?>

                            <!-- Overlay con degradado -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>

                            <!-- Contenido sobre imagen -->
                            <div class="absolute bottom-0 left-0 right-0 p-5 text-white">

                                <!-- Tags y fecha -->
                                <div class="flex items-center gap-2 mb-3">
                                    <?php
                                    $terms = get_the_terms(get_the_ID(), 'departamento');
                                    if ($terms && !is_wp_error($terms)) :
                                        $term = array_shift($terms);
                                    ?>
                                        <span class="inline-flex items-center gap-1 bg-white/20 backdrop-blur-md text-white text-xs font-bold px-3 py-1.5 rounded-full border border-white/30">
                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                                            </svg>
                                            <?php echo esc_html($term->name); ?>
                                        </span>
                                    <?php endif; ?>

                                    <span class="text-white/80 text-xs font-medium flex items-center gap-1">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <?php echo get_the_date('d M, Y'); ?>
                                    </span>
                                </div>

                                <!-- Título -->
                                <h3 class="text-lg font-bold leading-tight line-clamp-2 mb-2">
                                    <a href="<?php the_permalink(); ?>" class="text-white hover:text-blue-200 transition-colors">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>

                                <!-- Extracto (opcional, solo en desktop) -->
                                <p class="text-white/90 text-sm line-clamp-2 hidden md:block mb-3">
                                    <?php echo wp_trim_words(get_the_excerpt(), 12); ?>
                                </p>

                                <!-- Botón leer más -->
                                <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-1 text-white font-semibold text-sm hover:gap-2 transition-all group/link">
                                    Leer más
                                    <svg class="w-4 h-4 group-hover/link:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <div class="col-span-full text-center py-12">
                    <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-gray-100 mb-4">
                        <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <p class="text-gray-600 font-medium">No hay noticias disponibles</p>
                    <p class="text-gray-400 text-sm mt-1">Vuelve pronto para ver las novedades</p>
                </div>
            <?php endif; ?>
        </div>

        <!-- Botón Ver Todas -->
        <div class="text-center mt-10">
            <a href="<?php echo get_post_type_archive_link('noticia'); ?>"
                class="inline-flex items-center gap-2 bg-[#416ed2] text-white px-8 py-3.5 rounded-xl font-bold text-sm hover:bg-blue-700 transition-all shadow-lg hover:shadow-xl hover:scale-105 active:scale-95">
                Ver todas las noticias
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>






<?php get_footer(); ?>