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
                       <img class="w-7 h-auto" src="<?php echo get_template_directory_uri();?>/logo-unsl-2.png" alt="">
                    Universidad Nacional de San Luis
                </span>
            </div>

            <!-- Título principal -->
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight animate-fade-in-up">
                Secretaría de Asuntos Estudiantiles<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-blue-200">
                    Bienestar Universitario
                </span>
            </h1>

            <p class="text-lg md:text-xl text-gray-200 mb-8 leading-relaxed max-w-2xl mx-auto animate-fade-in-up">
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
                <div class="bg-white/10 backdrop-blur-2xl rounded-3xl border border-white/20 overflow-hidden shadow-2xl hover:bg-white/15 transition-all duration-300 animate-slide-in-left">

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
                                    <span class="text-2xl md:text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-cyan-300">
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
                <div class="bg-white/10 backdrop-blur-2xl rounded-3xl border border-white/20 p-6 md:p-8 shadow-2xl">
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
                <div class="bg-gradient-to-br from-blue-500/20 to-purple-500/20 backdrop-blur-2xl rounded-3xl border border-white/20 p-6 md:p-8 shadow-2xl">
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
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
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




<!-- Barra de estadísticas flotante -->
<!--section class="relative -mt-20 z-10">
    <div class="container mx-auto px-4">
        <div class="bg-white rounded-2xl shadow-2xl px-4 py-6 max-w-5xl mx-auto">
            <div class="grid md:grid-cols-2 gap-8 text-center">
                <div class="border-r border-gray-200 last:border-0">
                    <h3 class="text-xl font-bold text-blue-600 mb-2">Secretario</h3>
                    <p class="text-gray-700 font-medium">Prof. Rodolfo Nahuel Sirur Flores</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-blue-600 mb-2">Secretaría de Asuntos Estudiantiles y Bienestar Universitario</h3>
                    <p class="text-gray-700 font-medium"> <span class="text-gray-100 bg-gray-600 px-2 rounded">Villa Mercedes</span> Ing. Nicolás Ariel Ramos</p>
                </div>
            </div>
        </div>
    </div>
</section-->



<!-- Departamentos -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-slate-900 mb-4">Departamentos</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Servicios especializados para apoyar tu desarrollo universitario
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
            <?php
            $departamentos = array(
                array(
                    'name' => 'Becas',
                    'slug' => 'becas',
                    'description' => 'Apoyo económico para estudiantes',
                    'svg' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>'
                ),
                array(
                    'name' => 'Camping',
                    'slug' => 'camping',
                    'description' => 'Espacio recreativo y de esparcimiento',
                    'svg' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>'
                ),
                array(
                    'name' => 'CESEU',
                    'slug' => 'ceseu',
                    'description' => 'Centro de Estudiantes Universitarios',
                    'svg' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>'
                ),
                array(
                    'name' => 'Trabajo Social',
                    'slug' => 'trabajo-social',
                    'description' => 'Asistencia y orientación social',
                    'svg' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>'
                ),
                array(
                    'name' => 'Club Universitario',
                    'slug' => 'club-universitario',
                    'description' => 'Actividades deportivas y sociales',
                    'svg' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>'
                ),
                array(
                    'name' => 'Departamento de Deportes',
                    'slug' => 'dpto-deportes',
                    'description' => 'Promoción de la actividad física',
                    'svg' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>'
                ),
            );

            foreach ($departamentos as $depto) :
            ?>
                <a href="<?php echo home_url('/' . $depto['slug']); ?>"
                    class="group bg-white border border-gray-200 rounded-lg px-4 py-6 hover:border-blue-500 hover:shadow-lg transition-all duration-300">
                    <div class="text-blue-600 mb-4 transform  transition-transform duration-300"> <!-- group-hover:scale-110 -->
                        <?php echo $depto['svg']; ?>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-blue-600 transition-colors">
                        <?php echo $depto['name']; ?>
                    </h3>
                    <p class="text-gray-600 text-sm mb-4">
                        <?php echo $depto['description']; ?>
                    </p>
                    <span class="text-blue-600 text-sm font-medium">
                        Más información →
                    </span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>






<?php get_footer(); ?>