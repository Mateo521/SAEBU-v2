<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS con Typography Plugin -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    typography: {
                        DEFAULT: {
                            css: {
                                maxWidth: 'none',
                                img: {
                                    borderRadius: '1rem',
                                    marginTop: '2rem',
                                    marginBottom: '2rem',
                                    boxShadow: '0 10px 15px -3px rgb(0 0 0 / 0.1)',
                                },
                            },
                        },
                    },
                },
            },
        }
    </script>


    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white'); ?>>

    <!-- Top Bar -->
    <div class="bg-slate-800 text-white py-2 text-sm">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center">
                <div class="flex gap-6">
                    <span> info@saebu.edu.ar</span>
                    <span> (266) 123-4567</span>
                </div>
                <div class="flex gap-4">
                    <a href="#" class="hover:text-blue-300">Acceso Estudiantes</a>
                    <a href="#" class="hover:text-blue-300">Contacto</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="bg-white border-b border-gray-200 sticky top-0 z-50 shadow-sm">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="site-branding flex items-center gap-4">
                    <?php if (has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <div>
                            <h1 class="text-2xl font-bold text-slate-800 leading-tight">
                                <a href="<?php echo home_url('/'); ?>" class="hover:text-blue-600">
                                    <?php bloginfo('name'); ?>
                                </a>
                            </h1>
                            <p class="text-xs text-gray-600 uppercase tracking-wide"><?php bloginfo('description'); ?></p>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden lg:block">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-principal',
                        'container' => false,
                        'menu_class' => 'flex items-center gap-8',
                        'fallback_cb' => 'saebu_default_menu',
                    ));
                    ?>
                </nav>

                <!-- Mobile Menu Toggle -->
                <button id="mobile-menu-toggle" class="lg:hidden text-slate-800 p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <nav id="mobile-menu" class="hidden lg:hidden border-t border-gray-200 py-4">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-principal',
                    'container' => false,
                    'menu_class' => 'flex flex-col gap-2',
                    'fallback_cb' => 'saebu_default_menu',
                ));
                ?>
            </nav>
        </div>
    </header>