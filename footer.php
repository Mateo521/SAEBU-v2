<footer class="bg-slate-900 text-slate-400 font-sans mt-auto">
    <div class="container mx-auto px-6 py-20 max-w-7xl">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 lg:gap-16">

            <div class="md:col-span-12 lg:col-span-4">
                <div class="flex items-center gap-4 mb-6">
                    <?php if (has_site_icon()) : ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="block shrink-0">
                            <img src="<?php echo esc_url(get_site_icon_url(128)); ?>"
                                alt="Logo <?php bloginfo('name'); ?>"
                                class="w-12 h-12 object-contain opacity-90">
                        </a>
                    <?php endif; ?>
                    <div>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="text-lg font-medium text-white leading-tight block">
                            <?php bloginfo('name'); ?>
                        </a>
                        <span class="text-xs uppercase tracking-widest text-[#005eb8] font-bold">UNSL</span>
                    </div>
                </div>

                <p class="text-sm font-light leading-relaxed text-slate-400 mb-8 max-w-sm">
                    <?php bloginfo('description'); ?>
                </p>

                <div class="flex gap-5">
                    <a href="https://www.facebook.com/p/Saebu-San-Luis-100063884895090/" target="_blank" rel="noopener" class="text-slate-500 hover:text-white transition-colors" aria-label="Facebook">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/saebusan/" target="_blank" rel="noopener" class="text-slate-500 hover:text-white transition-colors" aria-label="Instagram">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                    <a href="https://x.com/saebutw" target="_blank" rel="noopener" class="text-slate-500 hover:text-white transition-colors" aria-label="Twitter">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="md:col-span-4 lg:col-span-3">
                <h3 class="text-xs font-bold text-white uppercase tracking-widest mb-6">Contacto</h3>
                <ul class="space-y-6 text-sm font-light">
                    <li>
                        <span class="block text-[10px] uppercase tracking-widest text-slate-500 mb-1">Dirección</span>
                        <span class="text-slate-300">Rivadavia 1029<br>San Luis Capital (D5700)</span>
                    </li>
                    <li>
                        <span class="block text-[10px] uppercase tracking-widest text-slate-500 mb-1">Teléfono</span>
                        <a href="tel:02664520300" class="text-slate-300 hover:text-white transition-colors">(0266) 452-0300 Int. 8139</a>
                    </li>
                    <li>
                        <span class="block text-[10px] uppercase tracking-widest text-slate-500 mb-1">Correo Electrónico</span>
                        <a href="mailto:saebuunsl@unsl.edu.ar" class="text-slate-300 hover:text-white transition-colors">saebuunsl@unsl.edu.ar</a>
                    </li>
                </ul>
            </div>

            <div class="md:col-span-4 lg:col-span-2">
                <h3 class="text-xs font-bold text-white uppercase tracking-widest mb-6">Áreas</h3>
                <ul class="space-y-3 text-sm font-light">
                    <li><a href="<?php echo home_url('/becas'); ?>" class="text-slate-400 hover:text-white transition-colors">Becas</a></li>
                    <li><a href="<?php echo home_url('/comedor'); ?>" class="text-slate-400 hover:text-white transition-colors">Comedor universitario</a></li>
                    <li><a href="<?php echo home_url('/ceseu'); ?>" class="text-slate-400 hover:text-white transition-colors">Salud (CeSEU)</a></li>
                    <li><a href="<?php echo home_url('/deportes'); ?>" class="text-slate-400 hover:text-white transition-colors">Deportes</a></li>
                    <li><a href="<?php echo home_url('/turismo'); ?>" class="text-slate-400 hover:text-white transition-colors">Complejo La Florida</a></li>
                </ul>
            </div>

            <div class="md:col-span-4 lg:col-span-3">
                <h3 class="text-xs font-bold text-white uppercase tracking-widest mb-6">Institucional</h3>
                <ul class="space-y-3 text-sm font-light">
                    <li><a href="<?php echo home_url('/autoridades'); ?>" class="text-slate-400 hover:text-white transition-colors">Autoridades</a></li>
                    <li><a href="<?php echo home_url('/sedes'); ?>" class="text-slate-400 hover:text-white transition-colors">Sedes regionales</a></li>
                    <li><a href="<?php echo home_url('/noticias'); ?>" class="text-slate-400 hover:text-white transition-colors">Noticias</a></li>
                    <li><a href="<?php echo home_url('/contacto'); ?>" class="text-slate-400 hover:text-white transition-colors">Contacto</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="bg-slate-950 border-t border-slate-800 py-8">
        <div class="container mx-auto px-6 max-w-7xl flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-slate-500 font-light">
            <p>&copy; <?php echo date('Y'); ?> Universidad Nacional de San Luis.</p>
            <p>Secretaría de Imagen y Comunicación Institucional.</p>
        </div>
    </div>
</footer>

<button id="scroll-to-top"
    class="fixed bottom-8 right-8 bg-slate-900/40 hover:bg-slate-900 border border-slate-700/50 text-white w-12 h-12 flex items-center justify-center backdrop-blur-sm opacity-0 invisible transition-all duration-300 z-50 focus:outline-none focus:ring-1 focus:ring-white group"
    aria-label="Volver arriba">
    <svg class="w-5 h-5 transition-transform group-hover:-translate-y-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 15l7-7 7 7"></path>
    </svg>
</button>

<?php wp_footer(); ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {


        const scrollBtn = document.getElementById('scroll-to-top');

        if (scrollBtn) {
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    scrollBtn.classList.remove('opacity-0', 'invisible');
                    scrollBtn.classList.add('opacity-100', 'visible');
                } else {
                    scrollBtn.classList.add('opacity-0', 'invisible');
                    scrollBtn.classList.remove('opacity-100', 'visible');
                }
            });

            scrollBtn.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }


        function adjustDropdowns() {
            if (window.innerWidth < 1024) return;

            const viewportWidth = window.innerWidth;
            const menuItems = document.querySelectorAll('.menu > .menu-item');

            menuItems.forEach((item) => {
                const dropdown = item.querySelector('.dropdown-menu');
                if (!dropdown) return;

                item.addEventListener('mouseenter', function() {
                    dropdown.classList.remove('dropdown-align-right');
                    dropdown.style.left = '0';
                    dropdown.style.right = 'auto';

                    void dropdown.offsetWidth;

                    setTimeout(() => {
                        const rect = dropdown.getBoundingClientRect();
                        if (rect.right > viewportWidth - 20) {
                            dropdown.classList.add('dropdown-align-right');
                            dropdown.style.left = 'auto';
                            dropdown.style.right = '0';
                        }
                    }, 0);
                });
            });

            const allSubMenuItems = document.querySelectorAll('.dropdown-menu .menu-item');

            allSubMenuItems.forEach((item) => {
                const submenu = item.querySelector('.dropdown-submenu');
                if (!submenu) return;

                item.addEventListener('mouseenter', function() {
                    submenu.classList.remove('dropdown-align-left');
                    submenu.style.left = '100%';
                    submenu.style.right = 'auto';
                    submenu.style.marginLeft = '0.25rem';
                    submenu.style.marginRight = '0';

                    void submenu.offsetWidth;

                    setTimeout(() => {
                        const rect = submenu.getBoundingClientRect();
                        if (rect.right > viewportWidth - 20) {
                            submenu.classList.add('dropdown-align-left');
                            submenu.style.left = 'auto';
                            submenu.style.right = '100%';
                            submenu.style.marginLeft = '0';
                            submenu.style.marginRight = '0.25rem';
                        }
                    }, 0);
                });
            });
        }

        adjustDropdowns();

        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(adjustDropdowns, 250);
        });
    });
</script>

</body>

</html>