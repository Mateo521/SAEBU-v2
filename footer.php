<footer class="bg-slate-800 text-white mt-16">
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Info -->
            <div>
                <h3 class="text-xl font-bold mb-4"><?php bloginfo('name'); ?></h3>
                <p class="text-gray-300"><?php bloginfo('description'); ?></p>
            </div>

            <!-- Enlaces -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Enlaces Rápidos</h4>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-footer',
                    'container' => false,
                    'menu_class' => 'space-y-2 text-gray-300',
                    'fallback_cb' => false,
                ));
                ?>
            </div>

            <!-- Contacto -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Contacto</h4>
                <p class="text-gray-300">Email: info@saebu.edu</p>
                <p class="text-gray-300">Tel: (266) 123-4567</p>
            </div>
        </div>

        <div class="border-t border-gray-700 mt-8 pt-6 text-center text-gray-400">
            <p>© <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>

<!-- Scroll to Top -->
<button id="scroll-to-top" class="fixed bottom-8 right-8 bg-gradient-to-r from-blue-600 to-purple-600 text-white w-12 h-12 rounded-full shadow-lg opacity-0 invisible transition-all duration-300 hover:scale-110 flex items-center justify-center">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
    </svg>
</button>

<?php wp_footer(); ?>
</body>
</html>
