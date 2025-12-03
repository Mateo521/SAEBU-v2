<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Alpine.js desde CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white'); ?> x-data="{ mobileMenuOpen: false }" :class="{ 'overflow-hidden': mobileMenuOpen }">
    <?php wp_body_open(); ?>

    <!-- Top Bar -->
    <div class="bg-gradient-to-r from-slate-800 via-slate-700 to-slate-800 text-white py-2.5 text-sm border-b border-slate-600">
        <div class="container mx-auto px-4">
            <div class="flex flex-col sm:flex-row justify-between items-center gap-2 sm:gap-0">
                <div class="flex flex-wrap items-center gap-4 sm:gap-6">
                    <a href="mailto:info@saebu.edu.ar" class="flex items-center gap-2 hover:text-blue-300 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span class="hidden sm:inline">info@saebu.edu.ar</span>
                        <span class="sm:hidden">Email</span>
                    </a>
                    <a href="tel:2661234567" class="flex items-center gap-2 hover:text-blue-300 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span>(266) 123-4567</span>
                    </a>
                </div>
                <div class="flex items-center gap-4">
                    <a href="#" class="hover:text-blue-300 transition-colors flex items-center gap-1.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span class="hidden sm:inline">Acceso Estudiantes</span>
                        <span class="sm:hidden">Login</span>
                    </a>
                    <a href="#" class="hover:text-blue-300 transition-colors flex items-center gap-1.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                        </svg>
                        <span>Contacto</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="bg-white border-b border-gray-200 sticky top-0 z-50 shadow-md">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-20">
                
                <!-- Logo -->
                <div class="site-branding flex items-center gap-3 relative">
                    <?php if (has_custom_logo()) : ?>
                        <div class="custom-logo-container">
                            <?php the_custom_logo(); ?>
                        </div>
                    <?php else : ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3 group">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-indigo-700 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-105 transition-transform">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <div>
                                <h1 class="text-xl md:text-2xl font-bold text-slate-800 leading-tight group-hover:text-blue-600 transition-colors">
                                    <?php bloginfo('name'); ?>
                                </h1>
                                <p class="text-[10px] md:text-xs text-gray-600 uppercase tracking-wide">
                                    <?php bloginfo('description'); ?>
                                </p>
                            </div>
                        </a>
                    <?php endif; ?>
                </div>

                <!-- Desktop Navigation with Dropdowns -->
                <nav class="hidden lg:flex items-center">
                    <?php
                    if (has_nav_menu('menu-principal')) {
                        wp_nav_menu(array(
                            'theme_location' => 'menu-principal',
                            'container'      => false,
                            'menu_class'     => 'flex items-center gap-1',
                            'walker'         => new Saebu_Desktop_Walker_Nav_Menu(),
                            'fallback_cb'    => false,
                        ));
                    } else {
                        // Menú por defecto
                        echo '<ul class="flex items-center gap-1">';
                        echo '<li><a href="' . esc_url(home_url('/')) . '" class="px-4 py-2 text-gray-700 hover:text-blue-600 font-medium rounded-lg hover:bg-blue-50 transition-colors">Inicio</a></li>';
                        echo '<li><a href="#" class="px-4 py-2 text-gray-700 hover:text-blue-600 font-medium rounded-lg hover:bg-blue-50 transition-colors">Servicios</a></li>';
                        echo '<li><a href="#" class="px-4 py-2 text-gray-700 hover:text-blue-600 font-medium rounded-lg hover:bg-blue-50 transition-colors">Contacto</a></li>';
                        echo '</ul>';
                    }
                    ?>
                </nav>

                <!-- Mobile Menu Button -->
                <button 
                    type="button"
                    @click="mobileMenuOpen = !mobileMenuOpen"
                    class="lg:hidden relative z-[9999] w-10 h-10 flex items-center justify-center text-slate-800 hover:bg-gray-100 rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500"
                    :class="{ 'text-white hover:bg-white/10': mobileMenuOpen }"
                    :aria-expanded="mobileMenuOpen.toString()"
                    aria-label="Toggle menu"
                >
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-cloak>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Menu Overlay -->
    <div 
        x-show="mobileMenuOpen"
        x-transition:enter="transition-opacity ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @click="mobileMenuOpen = false"
        class="fixed inset-0 bg-black/50 backdrop-blur-sm z-[9990] lg:hidden"
        x-cloak
    ></div>
    
    <!-- Mobile Navigation with Accordions -->
    <nav 
        x-show="mobileMenuOpen"
        x-transition:enter="transition-transform ease-out duration-300"
        x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition-transform ease-in duration-200"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        @click.away="mobileMenuOpen = false"
        @keydown.escape.window="mobileMenuOpen = false"
        class="fixed top-0 right-0 bottom-0 w-80 max-w-[85vw] bg-white shadow-2xl z-[9995] lg:hidden overflow-y-auto"
        x-cloak
    >
        <div class="p-6 pt-24">
            
            <!-- Mobile Menu Items with Accordions -->
            <div class="space-y-2 mb-8">
                <?php
                if (has_nav_menu('menu-principal')) {
                    wp_nav_menu(array(
                        'theme_location' => 'menu-principal',
                        'container'      => false,
                        'menu_class'     => 'space-y-2',
                        'walker'         => new Saebu_Mobile_Walker_Nav_Menu(),
                        'fallback_cb'    => false,
                    ));
                } else {
                    echo '<ul class="space-y-2">';
                    echo '<li><a href="' . esc_url(home_url('/')) . '" class="block px-4 py-3 text-gray-800 hover:bg-blue-50 hover:text-blue-600 rounded-lg font-medium transition-colors">Inicio</a></li>';
                    echo '<li><a href="#" class="block px-4 py-3 text-gray-800 hover:bg-blue-50 hover:text-blue-600 rounded-lg font-medium transition-colors">Servicios</a></li>';
                    echo '<li><a href="#" class="block px-4 py-3 text-gray-800 hover:bg-blue-50 hover:text-blue-600 rounded-lg font-medium transition-colors">Contacto</a></li>';
                    echo '</ul>';
                }
                ?>
            </div>

            <!-- Mobile Contact Info -->
            <div class="pt-6 border-t border-gray-200">
                <h3 class="text-sm font-bold text-gray-900 mb-4 px-4">Información de Contacto</h3>
                <div class="space-y-3">
                    <a href="mailto:info@saebu.edu.ar" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors">
                        <svg class="w-5 h-5 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span class="text-sm">info@saebu.edu.ar</span>
                    </a>
                    <a href="tel:2661234567" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors">
                        <svg class="w-5 h-5 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span class="text-sm">(266) 123-4567</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Style para x-cloak -->
    <style>
        [x-cloak] { display: none !important; }
    </style>
