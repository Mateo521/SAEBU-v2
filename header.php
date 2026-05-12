<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white overflow-x-hidden'); ?> x-data="{ mobileMenuOpen: false }" :class="{ 'overflow-hidden': mobileMenuOpen }">
    <?php wp_body_open(); ?>

    <header class="bg-white border-b border-gray-200 sticky top-0 z-50 shadow-sm transition-all duration-300">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-20">

                <div class="site-branding flex items-center gap-3 relative px-2 py-1">
                    <?php if (has_custom_logo()) : ?>
                        <div class="custom-logo-container">
                            <?php the_custom_logo(); ?>
                        </div>
                    <?php else : ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3 group">
                            <div class="w-12 h-12 bg-[#005eb8] rounded-xl flex items-center justify-center shadow-lg group-hover:scale-105 transition-transform">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <div>
                                <h1 class="text-xl md:text-2xl font-bold text-slate-800 leading-tight group-hover:text-[#005eb8] transition-colors">
                                    <?php bloginfo('name'); ?>
                                </h1>
                                <p class="text-[10px] md:text-xs text-slate-500 uppercase tracking-wide">
                                    <?php bloginfo('description'); ?>
                                </p>
                            </div>
                        </a>
                    <?php endif; ?>
                </div>

                <nav class="hidden xl:flex gap-4 items-center">

                    <div class="gtranslate_wrapper"></div>

                    <button @click="searchOpen = true" class="p-2 text-slate-600 hover:text-[#005eb8] transition-colors" aria-label="Buscar Noticias">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>

                    <div class="h-6 w-px bg-slate-200 mx-2"></div>

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
                        echo '<ul class="flex items-center gap-1">';
                        echo '<li><a href="' . esc_url(home_url('/')) . '" class="px-4 py-2 text-slate-700 hover:text-[#005eb8] font-medium rounded-lg hover:bg-slate-50 transition-colors">Inicio</a></li>';
                        echo '</ul>';
                    }
                    ?>
                </nav>

                <button
                    type="button"
                    @click="mobileMenuOpen = !mobileMenuOpen"
                    class="xl:hidden relative z-[9999] w-10 h-10 flex items-center justify-center text-slate-800 hover:bg-slate-100 rounded-lg transition-colors focus:outline-none"
                    :class="{ 'text-slate-900': mobileMenuOpen }"
                    :aria-expanded="mobileMenuOpen.toString()"
                    aria-label="Toggle menu">
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-cloak>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>


    <div
        x-show="mobileMenuOpen"
        x-transition:enter="transition-opacity ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @click="mobileMenuOpen = false"
        class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-[9990] xl:hidden"
        x-cloak></div>

    <nav
        x-show="mobileMenuOpen"
        x-transition:enter="transition-transform ease-out duration-300"
        x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition-transform ease-in duration-200"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        class="fixed top-0 right-0 bottom-0 w-80 max-w-[85vw] bg-white shadow-2xl z-[9995] xl:hidden overflow-y-auto"
        x-cloak>
        <div class="p-6 pt-24">

            <div class="mb-8 border-b border-slate-100 pb-8">
                <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="relative">
                    <input type="hidden" name="post_type" value="noticia" />
                    <input type="search" name="s" placeholder="Buscar noticias..." class="w-full bg-slate-50 border-0 border-b-2 border-slate-200 focus:border-[#005eb8] focus:ring-0 pl-10 pr-4 py-3 text-sm text-slate-900 placeholder:text-slate-400" required>
                    <svg class="w-4 h-4 text-slate-400 absolute left-3 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </form>
            </div>

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
                    echo '<li><a href="' . esc_url(home_url('/')) . '" class="block px-4 py-3 text-slate-800 hover:bg-slate-50 hover:text-[#005eb8] rounded-lg font-medium transition-colors">Inicio</a></li>';
                    echo '</ul>';
                }
                ?>
                <div class="pl-4 py-4">
                    <div class="gtranslate_wrapper"></div>
                </div>
            </div>
        </div>
    </nav>
    <div
        x-show="searchOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="fixed inset-0 z-[10000] bg-white/95 backdrop-blur-md flex items-center justify-center"
        x-cloak>
        <button @click="searchOpen = false" class="absolute top-8 right-8 md:top-12 md:right-12 p-2 text-slate-400 hover:text-slate-900 transition-colors" aria-label="Cerrar buscador">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <div class="w-full max-w-4xl px-6">
            <span class="text-[10px] font-bold text-[#005eb8] uppercase tracking-widest block mb-4">Portal de noticias</span>
            <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                <input type="hidden" name="post_type" value="noticia" />
                <input type="search" name="s" placeholder="¿Qué estás buscando?" class="w-full bg-transparent border-0 border-b-2 border-slate-300 focus:border-[#005eb8] focus:ring-0 px-0 py-4 text-4xl md:text-6xl font-light text-slate-900 placeholder:text-slate-300 transition-colors" x-ref="searchInput" x-init="$watch('searchOpen', value => { if(value) setTimeout(() => $refs.searchInput.focus(), 100) })" required>
            </form>
            <p class="text-xs text-slate-400 uppercase tracking-widest mt-6">Escribí tu consulta y presioná Enter</p>
        </div>
    </div>
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    <!--link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/js/a11y-toolbar-master/css/a11y-toolbar.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/js/a11y-toolbar-master/css/a11y-custom.css"-->
    <!--script src="<?php echo get_template_directory_uri(); ?>/assets/js/a11y-toolbar-master/js/a11y-custom.js"></script-->
    <script>
        window.gtranslateSettings = {
            "default_language": "es",
            "native_language_names": true,
            "detect_browser_language": true,
            "languages": ["en", "es", "pt", "de"],
            "globe_color": "#071629ff",
            "wrapper_selector": ".gtranslate_wrapper",
            "alt_flags": {
                "en": "usa",
                "pt": "brazil",
                "es": "argentina"
            },
            "globe_size": 20
        }
    </script>
    <script src="https://cdn.gtranslate.net/widgets/latest/globe.js" defer></script>