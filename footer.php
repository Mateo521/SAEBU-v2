<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-info">
                <h3>SAEBU</h3>
                <p>Secretaría de Asuntos Estudiantiles y Bienestar Universitario</p>
            </div>
            
            <nav class="footer-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_class'     => 'footer-menu',
                    'container'      => false,
                ));
                ?>
            </nav>
        </div>
        
        <div class="footer-bottom">
            <p>© <?php echo date('Y'); ?> SAEBU. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
