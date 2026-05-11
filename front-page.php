<?php get_header(); ?>

<section class="relative min-h-[85vh] flex items-center bg-slate-900 font-sans">
    <div class="absolute inset-0 z-0 overflow-hidden ">
        <?php
        $folder_path = get_template_directory() . '/assets/images/hero-slides/';
        $folder_url  = get_template_directory_uri() . '/assets/images/hero-slides/';
        $images = glob($folder_path . '*.{jpg,jpeg,png,webp}', GLOB_BRACE);
        $final_image_url = '';

        if ($images && !empty($images)) {
            $random_key = array_rand($images);
            $selected_path = $images[$random_key];
            $final_image_url = $folder_url . basename($selected_path);
        } else {
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
                class="absolute inset-0 w-full h-full object-cover opacity-30 mix-blend-luminosity">
        <?php endif; ?>
        <div class="absolute inset-0 bg-slate-900/40 z-10"></div>
    </div>

    <div class="relative z-10 container mx-auto px-6 py-12 max-w-7xl">
        <div class="max-w-7xl space-y-8">
            <div class="inline-flex items-center gap-4">
                <img class="w-10 opacity-90" src="<?php echo esc_url(get_template_directory_uri()); ?>/logo-unsl-2.png" alt="UNSL Logo">
                <span class="text-sm text-slate-300 font-medium  uppercase">Universidad Nacional de San Luis</span>
            </div>

            <div>
                <h1 class="text-4xl md:text-5xl lg:text-7xl font-light text-white leading-tight mb-6 tracking-tight">
                    Secretaría de   
                    <strong class="font-semibold">Asuntos Estudiantiles <br> y Bienestar Universitario</strong>
                </h1>
                <p class="text-lg md:text-xl text-slate-300 max-w-2xl leading-relaxed font-light">
                    Acompañamos a las y los estudiantes durante su trayectoria universitaria, promoviendo el bienestar integral y la participación activa en la vida académica y social.
                </p>
            </div>

            <div class="pt-4">
                <a href="<?php echo home_url('/institucional'); ?>"
                    class="inline-flex items-center gap-3 bg-white text-slate-900 hover:bg-slate-100 px-8 py-4 text-sm uppercase  font-semibold transition-colors duration-300">
                    Institucional
                </a>
            </div>
        </div>
    </div>
</section>

<section class="bg-slate-50 border-b border-slate-200 py-10 font-sans">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-slate-200">
            <div class="px-6 py-2">
                <h3 class="text-sm text-slate-500 uppercase  mb-1">Organización</h3>
                <p class="text-lg text-slate-900 font-medium">Departamentos</p>
            </div>
            <div class="px-6 py-2">
                <h3 class="text-sm text-slate-500 uppercase  mb-1">Comunidad</h3>
                <p class="text-lg text-slate-900 font-medium">Servicios al estudiante</p>
            </div>
            <div class="px-6 py-2">
                <h3 class="text-sm text-slate-500 uppercase  mb-1">Extensión</h3>
                <p class="text-lg text-slate-900 font-medium">Compromiso público</p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-white font-sans">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="grid md:grid-cols-[1fr_1.2fr] gap-16 items-center">

            <div class="space-y-8 order-2 md:order-1">
                <h2 class="text-3xl md:text-4xl font-light text-slate-900 tracking-tight">
                    Sobre <strong class="font-semibold">SAEBU</strong>
                </h2>
                <div class="h-px w-16 bg-slate-900"></div>

                <p class="text-lg text-slate-600 leading-relaxed font-light">
                    Trabajamos día a día para garantizar la igualdad de oportunidades y la permanencia de los estudiantes en la Universidad Nacional de San Luis.
                </p>

                <ul class="space-y-4 text-slate-700">
                    <li class="flex items-start gap-4">
                        <span class="text-slate-300 mt-1">—</span>
                        <span>Acompañamiento integral al estudiante.</span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="text-slate-300 mt-1">—</span>
                        <span>Gestión de becas y beneficios económicos.</span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="text-slate-300 mt-1">—</span>
                        <span>Promoción de la salud y el deporte.</span>
                    </li>
                </ul>

                <div class="pt-4">
                    <a href="<?php echo home_url('/institucional'); ?>" class="text-slate-900 font-medium hover:text-[#005eb8] transition-colors inline-flex items-center gap-2 border-b border-slate-900 hover:border-[#005eb8] pb-1">
                        Conocé nuestro personal
                    </a>
                </div>
            </div>

            <div class="order-1 md:order-2 relative">
                <div class="aspect-video bg-slate-100 relative group">
                    <video id="video-institucional-player"
                        class="w-full h-full object-cover mix-blend-multiply"
                        poster="<?php echo get_template_directory_uri(); ?>/assets/images/video-poster.png">
                        <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/becas.mp4" type="video/mp4">
                    </video>

                    <button id="play-pause-btn" class="absolute inset-0 w-full h-full flex items-center justify-center bg-slate-900/10 hover:bg-slate-900/20 transition-all cursor-pointer">
                        <span class="bg-white text-slate-900 text-xs font-bold uppercase  px-6 py-3 rounded-full shadow-sm  transition-transform">
                            Ver Video
                        </span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
if (function_exists('saebu_get_menu_del_dia')) {
    $menu_dia = saebu_get_menu_del_dia();
} else {
    $menu_dia = false;
}

if ($menu_dia) :
    $post_id = $menu_dia->ID;


    $sl = array(
        'fecha'     => get_post_meta($post_id, '_menu_sl_fecha', true),
        'precio'    => get_post_meta($post_id, '_menu_sl_precio', true),
        'principal' => get_post_meta($post_id, '_menu_sl_principal', true),
        'entrada'   => get_post_meta($post_id, '_menu_sl_entrada', true),
        'postre'    => get_post_meta($post_id, '_menu_sl_postre', true),
        'pri_st'    => get_post_meta($post_id, '_menu_sl_pri_st', true),
        'ent_st'    => get_post_meta($post_id, '_menu_sl_ent_st', true),
        'pos_st'    => get_post_meta($post_id, '_menu_sl_pos_st', true),
    );
    $vm = array(
        'precio'    => get_post_meta($post_id, '_menu_vm_precio', true),
        'principal' => get_post_meta($post_id, '_menu_vm_principal', true),
        'entrada'   => get_post_meta($post_id, '_menu_vm_entrada', true),
        'postre'    => get_post_meta($post_id, '_menu_vm_postre', true),
        'pri_st'    => get_post_meta($post_id, '_menu_vm_pri_st', true),
        'ent_st'    => get_post_meta($post_id, '_menu_vm_ent_st', true),
        'pos_st'    => get_post_meta($post_id, '_menu_vm_pos_st', true),
    );
    $timestamp = strtotime($sl['fecha']);
?>
    <!--section class="py-24 bg-slate-50 border-t border-slate-200 font-sans">
        <div class="container mx-auto px-6 max-w-5xl">

            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 border-b border-slate-200 pb-6">
                <div>
                    <h2 class="text-3xl font-light text-slate-900 tracking-tight">Menú del Día</h2>
                    <p class="text-slate-500 mt-2"><?php echo date_i18n('l, d \d\e F', $timestamp); ?></p>
                </div>
                <button id="btn-suscribir-menu" class="mt-4 md:mt-0 text-sm text-[#005eb8] font-medium uppercase  hover:text-slate-900 transition-colors">
                    Suscribirse al Menú
                </button>
            </div>

            <div class="grid md:grid-cols-2 gap-16">
                <div>
                    <h3 class="text-xs text-slate-400 font-bold uppercase  mb-6 pb-2 border-b border-slate-200">Sede San Luis</h3>

                    <div class="space-y-6">
                        <div>
                            <span class="text-xs text-slate-500 uppercase tracking-wider block mb-1">Principal</span>
                            <p class="text-xl text-slate-900 font-medium"><?php echo $sl['principal'] ?: 'No cargado'; ?></p>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <?php if ($sl['entrada']): ?>
                                <div>
                                    <span class="text-xs text-slate-500 uppercase tracking-wider block mb-1">Entrada</span>
                                    <p class="text-slate-700"><?php echo $sl['entrada']; ?></p>
                                </div>
                            <?php endif; ?>
                            <?php if ($sl['postre']): ?>
                                <div>
                                    <span class="text-xs text-slate-500 uppercase tracking-wider block mb-1">Postre</span>
                                    <p class="text-slate-700"><?php echo $sl['postre']; ?></p>
                                </div>
                            <?php endif; ?>
                        </div>

                        <?php if ($sl['pri_st'] || $sl['ent_st'] || $sl['pos_st']): ?>
                            <div class="pt-6 mt-6 border-t border-slate-200 border-dashed">
                                <span class="text-xs text-slate-900 font-bold uppercase tracking-wider block mb-2">Opción Sin TACC</span>
                                <p class="text-slate-800 font-medium"><?php echo $sl['pri_st'] ?: 'Principal ST'; ?></p>
                                <div class="text-sm text-slate-600 mt-2 space-y-1">
                                    <?php if ($sl['ent_st']) echo "<p>Entrada: {$sl['ent_st']}</p>"; ?>
                                    <?php if ($sl['pos_st']) echo "<p>Postre: {$sl['pos_st']}</p>"; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="pt-6 mt-6 border-t border-slate-200">
                            <span class="text-sm text-slate-500 uppercase tracking-wider mr-2">Ticket:</span>
                            <span class="text-2xl font-light text-slate-900"><?php echo $sl['precio']; ?></span>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-xs text-slate-400 font-bold uppercase  mb-6 pb-2 border-b border-slate-200">Sede Villa Mercedes</h3>

                    <div class="space-y-6">
                        <div>
                            <span class="text-xs text-slate-500 uppercase tracking-wider block mb-1">Principal</span>
                            <p class="text-xl text-slate-900 font-medium"><?php echo $vm['principal'] ?: 'No cargado'; ?></p>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <?php if ($vm['entrada']): ?>
                                <div>
                                    <span class="text-xs text-slate-500 uppercase tracking-wider block mb-1">Entrada</span>
                                    <p class="text-slate-700"><?php echo $vm['entrada']; ?></p>
                                </div>
                            <?php endif; ?>
                            <?php if ($vm['postre']): ?>
                                <div>
                                    <span class="text-xs text-slate-500 uppercase tracking-wider block mb-1">Postre</span>
                                    <p class="text-slate-700"><?php echo $vm['postre']; ?></p>
                                </div>
                            <?php endif; ?>
                        </div>

                        <?php if ($vm['pri_st'] || $vm['ent_st'] || $vm['pos_st']): ?>
                            <div class="pt-6 mt-6 border-t border-slate-200 border-dashed">
                                <span class="text-xs text-slate-900 font-bold uppercase tracking-wider block mb-2">Opción Sin TACC</span>
                                <p class="text-slate-800 font-medium"><?php echo $vm['pri_st'] ?: 'Principal ST'; ?></p>
                                <div class="text-sm text-slate-600 mt-2 space-y-1">
                                    <?php if ($vm['ent_st']) echo "<p>Entrada: {$vm['ent_st']}</p>"; ?>
                                    <?php if ($vm['pos_st']) echo "<p>Postre: {$vm['pos_st']}</p>"; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="pt-6 mt-6 border-t border-slate-200">
                            <span class="text-sm text-slate-500 uppercase tracking-wider mr-2">Ticket:</span>
                            <span class="text-2xl font-light text-slate-900"><?php echo $vm['precio']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section-->
<?php endif; ?>

<section id="servydep" class="py-24 font-sans relative">
    <div class="container mx-auto px-6 max-w-7xl relative z-10">

        <div class="mb-12 md:flex justify-between items-end bg-white/95 backdrop-blur-sm p-8 shadow-sm">
            <div class="max-w-2xl">
                <h2 class="text-3xl font-light text-slate-900 tracking-tight mb-3">Departamentos y áreas</h2>
                <p class="text-lg text-slate-500 font-light">Estructura organizativa al servicio de la comunidad universitaria.</p>
            </div>
            <a href="<?php echo home_url('/departamentos'); ?>" class="hidden md:inline-block text-sm text-[#005eb8] font-medium uppercase  hover:text-slate-900 transition-colors">
                Ver organigrama
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php

            $departamentos = array(
                ['name' => 'Dpto. Becas', 'slug' => 'becas', 'desc' => 'Programas de apoyo económico y equidad.'],
                ['name' => 'CeSEU', 'slug' => 'ceseu', 'desc' => 'Atención primaria, prevención y cuidado estudiantil.'],
                ['name' => 'Camping La Florida', 'slug' => 'camping-universitario', 'desc' => 'Turismo, naturaleza y esparcimiento.'],
                ['name' => 'Deportes', 'slug' => 'dpto-deportes', 'desc' => 'Actividad física, recreación y competencia.'],
                ['name' => 'Trabajo Social', 'slug' => 'dpto-trabajo-social', 'desc' => 'Orientación, acompañamiento y asistencia.'],
                ['name' => 'Mesa de Entradas', 'slug' => 'dpto-mesa-de-entradas', 'desc' => 'Recepción y gestión de trámites.'],
                ['name' => 'Dpto. Contable', 'slug' => 'dpto-contable', 'desc' => 'Administración financiera y presupuestaria.'],
                ['name' => 'Dpto. de Compras', 'slug' => 'dpto-compras', 'desc' => 'Contrataciones y adquisiciones institucionales.'],
                ['name' => 'Comedor Universitario', 'slug' => 'comedor', 'desc' => 'Alimentación nutricional accesible.'],
                ['name' => 'Club Universitario', 'slug' => 'club-universitario', 'desc' => 'Espacio social y recreativo institucional.'],
                ['name' => 'Gimnasio', 'slug' => 'gimnasio', 'desc' => 'Espacio acondicionado para actividad física.'],
                ['name' => 'Sedes', 'slug' => 'sedes', 'desc' => 'Coordinación de actividades en sedes regionales.']
            );

            foreach ($departamentos as $depto) : ?>
            
                <a href="<?php echo home_url('/' . $depto['slug']); ?>"
                    class="group block bg-white/95 backdrop-blur-sm p-8 hover:border-[#005eb8] shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                    <h3 class="text-lg font-medium text-slate-900 group-hover:text-[#005eb8] transition-colors mb-2">
                        <?php echo $depto['name']; ?>
                    </h3>
                    <p class="text-sm text-slate-500 font-light leading-relaxed">  
                        <?php echo $depto['desc']; ?>
                    </p>
                </a>

            <?php endforeach; ?>
        </div>

        <div class="mt-8 text-center md:hidden">
            <a href="<?php echo home_url('/departamentos'); ?>" class="inline-block bg-white/95 backdrop-blur-sm px-6 py-4 text-sm text-[#005eb8] font-medium uppercase  hover:text-slate-900 shadow-sm transition-colors">
                Ver Organigrama completo
            </a>
        </div>

    </div>
</section>




<section class="py-24 bg-slate-50 border-t border-slate-200 font-sans">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="flex items-end justify-between mb-16 border-b border-slate-200 pb-6">
            <h2 class="text-3xl font-light text-slate-900 tracking-tight">Noticias</h2>
            <a href="<?php echo get_post_type_archive_link('noticia'); ?>" class="text-sm text-[#005eb8] font-medium uppercase  hover:text-slate-900 transition-colors">
                Ver más
            </a>
        </div>

        <div class="relative">
            <div class="swiper noticias-swiper pb-16">
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
                                <article class="flex flex-col h-full group">
                                    <a title="Link <?php the_title(); ?>" href="<?php the_permalink(); ?>" class="block mb-6 overflow-hidden bg-slate-200 aspect-[4/3]">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover transition-transform duration-700 group-')); ?>
                                        <?php else : ?>
                                            <div class="w-full h-full flex items-center justify-center bg-slate-200 text-slate-400">
                                                Sin imagen
                                            </div>
                                        <?php endif; ?>
                                    </a>

                                    <div class="flex-1 flex flex-col">
                                        <div class="text-xs text-slate-400 uppercase  mb-3">
                                            <?php echo get_the_date('d F, Y'); ?>
                                        </div>

                                        <h3 class="text-xl font-medium text-slate-900 leading-tight mb-3">
                                            <a href="<?php the_permalink(); ?>" class="hover:text-[#005eb8] transition-colors">
                                                <?php the_title(); ?>
                                            </a>
                                        </h3>

                                        <div class="text-slate-600 text-sm font-light leading-relaxed line-clamp-3">
                                            <?php the_excerpt(); ?>
                                        </div>
                                    </div>
                                </article>
                            </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
                <div class="swiper-pagination"></div>
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
                    video.controls = true;
                    playBtn.style.display = 'none';
                }
            });

            video.addEventListener('pause', function() {
                if (!video.seeking) {
                    video.controls = false;
                    playBtn.style.display = 'flex';
                }
            });
        }


        const botones = document.querySelectorAll('#btn-suscribir-menu, #btn-suscribir-single');
        botones.forEach(function(boton) {
            boton.addEventListener('click', function(e) {
                e.preventDefault();
                const userAgent = navigator.userAgent;
                const isIOS = /iPhone|iPad|iPod/.test(userAgent);
                const isAndroid = /Android/.test(userAgent);
                const isStandalone = window.matchMedia('(display-mode: standalone)').matches;

                if (isIOS && !isStandalone) {
                    mostrarInstruccionesIOS();
                    return;
                }

                if (isAndroid && !isStandalone) {
                    mostrarInstruccionesAndroid();
                    return;
                }

                activarNotificaciones(boton);
            });
        });

        function mostrarInstruccionesIOS() {

            const modal = document.createElement('div');
            modal.innerHTML = `
            <div style="position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.8); z-index: 9999; display: flex; align-items: center; justify-content: center; padding: 20px;">
                <div style="background: white; border-radius: 20px; padding: 30px; max-width: 400px; text-align: center; box-shadow: 0 10px 40px rgba(0,0,0,0.3);">
                    <div style="font-size: 50px; margin-bottom: 15px;">📱</div>
                    <h3 style="font-size: 22px; font-weight: bold; color: #005eb8; margin-bottom: 15px;">Instala la App</h3>
                    <p style="color: #666; margin-bottom: 20px; line-height: 1.6;">Para recibir notificaciones en iPhone, necesitas instalar nuestra app:</p>
                    <div style="text-align: left; background: #f5f5f5; padding: 20px; border-radius: 10px; margin-bottom: 20px;">
                        <div style="display: flex; align-items: start; margin-bottom: 15px;">
                            <span style="background: #005eb8; color: white; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: bold; margin-right: 10px; flex-shrink: 0;">1</span>
                            <span style="color: #333;">Toca el botón <strong>Compartir</strong> en Safari</span>
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
                    <button onclick="this.closest('div').parentElement.remove()" style="background: #005eb8; color: white; border: none; padding: 12px 30px; border-radius: 8px; font-weight: bold; font-size: 16px; cursor: pointer; width: 100%;">Entendido</button>
                </div>
            </div>`;
            document.body.appendChild(modal);
        }

        function mostrarInstruccionesAndroid() {

            const modal = document.createElement('div');
            modal.innerHTML = `
            <div style="position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.8); z-index: 9999; display: flex; align-items: center; justify-content: center; padding: 20px;">
                <div style="background: white; border-radius: 20px; padding: 30px; max-width: 400px; text-align: center; box-shadow: 0 10px 40px rgba(0,0,0,0.3);">
                    <div style="font-size: 50px; margin-bottom: 15px;">📱</div>
                    <h3 style="font-size: 22px; font-weight: bold; color: #005eb8; margin-bottom: 15px;">Instala la App</h3>
                    <p style="color: #666; margin-bottom: 20px; line-height: 1.6;">Para una mejor experiencia y recibir notificaciones:</p>
                    <div style="text-align: left; background: #f5f5f5; padding: 20px; border-radius: 10px; margin-bottom: 20px;">
                        <div style="display: flex; align-items: start; margin-bottom: 15px;">
                            <span style="background: #005eb8; color: white; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: bold; margin-right: 10px; flex-shrink: 0;">1</span>
                            <span style="color: #333;">Toca el menú <strong>⋮</strong> en tu navegador</span>
                        </div>
                        <div style="display: flex; align-items: start; margin-bottom: 15px;">
                            <span style="background: #005eb8; color: white; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: bold; margin-right: 10px; flex-shrink: 0;">2</span>
                            <span style="color: #333;">Selecciona <strong>"Instalar app"</strong> o <strong>"Agregar a pantalla..."</strong></span>
                        </div>
                        <div style="display: flex; align-items: start;">
                            <span style="background: #005eb8; color: white; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: bold; margin-right: 10px; flex-shrink: 0;">3</span>
                            <span style="color: #333;">Abrí la app y volvé a activar las notificaciones</span>
                        </div>
                    </div>
                    <button onclick="this.closest('div').parentElement.remove()" style="background: #005eb8; color: white; border: none; padding: 12px 30px; border-radius: 8px; font-weight: bold; font-size: 16px; cursor: pointer; width: 100%;">Entendido</button>
                </div>
            </div>`;
            document.body.appendChild(modal);
        }

        function activarNotificaciones(boton) {
            const textoOriginal = boton.innerHTML;
            boton.innerHTML = 'Procesando...';

            window.OneSignal = window.OneSignal || [];
            window.OneSignal.push(function() {
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
                try {
                    OneSignal.Slidedown.promptPush({
                        force: true
                    });
                } catch (e) {
                    console.error("Error al intentar mostrar el prompt:", e);
                    OneSignal.Notifications.requestPermission();
                }
            });

            setTimeout(() => {
                boton.innerHTML = textoOriginal;
            }, 2000);
        }
    });
</script>

<?php get_footer(); ?>