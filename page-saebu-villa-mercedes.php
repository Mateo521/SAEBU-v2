<?php

/**
 * Template Name: SAEBU Villa Mercedes
 * Description: Sede Villa Mercedes
 */
get_header();
?>

<main class="bg-white font-sans">

    <?php while (have_posts()) : the_post(); ?>

        <section class="bg-slate-900 py-32 border-b border-slate-800 text-center">
            <div class="container mx-auto px-6 max-w-4xl relative z-10">

                <nav class="flex justify-center items-center gap-3 text-[10px] font-bold  uppercase text-slate-500 mb-8">
                    <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors">Inicio</a>
                    <span>/</span>
                    <?php
                    global $post;
                    if (is_page() && $post->post_parent) {
                        $ancestors = array_reverse(get_post_ancestors($post->ID));
                        foreach ($ancestors as $ancestor_id) {
                    ?>
                            <a href="<?php echo get_permalink($ancestor_id); ?>" class="hover:text-white transition-colors">
                                <?php echo get_the_title($ancestor_id); ?>
                            </a>
                            <span>/</span>
                    <?php
                        }
                    }
                    ?>
                    <span class="text-purple-500">Sede Regional</span>
                </nav>

                <h1 class="text-4xl md:text-6xl font-light text-white leading-tight mb-8 tracking-tight">
                    Sede <strong class="font-semibold">Villa Mercedes</strong>
                </h1>

                <p class="text-xl text-slate-400 font-light leading-relaxed max-w-2xl mx-auto">
                    <?php
                    if (has_excerpt()) {
                        echo get_the_excerpt();
                    } else {
                        echo 'Centro regional de servicios estudiantiles y atención administrativa para la comunidad universitaria de Villa Mercedes.';
                    }
                    ?>
                </p>
            </div>
        </section>

        <section class="relative z-20 -mt-12 mb-12">
            <div class="container mx-auto px-6 max-w-6xl">
                <div class="bg-white border border-slate-200 shadow-sm grid md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-slate-200">

                    <div class="p-8 text-center md:text-left flex flex-col justify-center">
                        <span class="text-[10px] font-bold text-slate-400 uppercase  mb-2 block">Ubicación Física</span>
                        <h3 class="text-lg font-medium text-slate-900 leading-snug">Ruta Provincial 55 extremo norte</h3>
                    </div>

                    <div class="p-8 text-center md:text-left flex flex-col justify-center">
                        <span class="text-[10px] font-bold text-slate-400 uppercase  mb-2 block">Atención al Público</span>
                        <h3 class="text-lg font-medium text-slate-900 leading-snug">Lunes a Viernes</h3>
                        <p class="text-sm text-slate-500 font-light">8:00 a 12:00 hs</p>
                    </div>

                    <div class="p-8 text-center md:text-left flex flex-col justify-center bg-slate-50">
                        <span class="text-[10px] font-bold text-purple-600 uppercase  mb-2 block">Contacto Directo</span>
                        <a href="tel:2657420565" class="text-lg font-medium text-slate-900 hover:text-purple-600 transition-colors leading-snug block">
                            (2657) 420565
                        </a>
                        <a href="mailto:subsaebu@gmail.com" class="text-sm text-purple-600 hover:text-slate-900 transition-colors font-light">
                            subsaebu@gmail.com
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-24 bg-white">
            <div class="container mx-auto px-6 max-w-7xl">

                <div class="mb-16 md:flex justify-between items-end">
                    <div class="max-w-2xl">
                        <h2 class="text-3xl font-light text-slate-900 tracking-tight mb-4">
                            Servicios en <strong class="font-semibold">Sede</strong>
                        </h2>
                        <p class="text-lg text-slate-500 font-light">Gestiones administrativas y asistencia directa para garantizar tu bienestar estudiantil.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-x-12 gap-y-12">

                    <div class="border-t border-slate-200 pt-5 group">

                        <h3 class="text-xl font-medium text-slate-900 mb-3">Becas y Beneficios</h3>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">
                            Asesoramiento personalizado, recepción de documentación y seguimiento de expedientes para todos los programas de ayuda económica.
                        </p>
                    </div>

                    <div class="border-t border-slate-200 pt-5 group">

                        <h3 class="text-xl font-medium text-slate-900 mb-3">Comedor Universitario</h3>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">
                            Gestión de cuenta corriente, inscripciones al servicio de alimentación, renovación de beneficios y menú para celíacos.
                        </p>
                    </div>

                    <div class="border-t border-slate-200 pt-5 group">

                        <h3 class="text-xl font-medium text-slate-900 mb-3">Salud (CeSEU)</h3>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">
                            Atención primaria, tramitación del certificado médico de ingreso, y coordinación de turnos para especialidades clínicas.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-24 bg-slate-50 border-y border-slate-200">
            <div class="container mx-auto px-6 max-w-7xl">
                <div class="grid lg:grid-cols-[1fr_2fr] gap-16 items-start">

                    <div class="sticky top-10">
                        <h2 class="text-2xl font-light text-slate-900 tracking-tight mb-8">
                            Redes
                        </h2>
                        <p class="text-slate-500 font-light text-sm mb-8 leading-relaxed">
                            Seguinos en nuestras plataformas para enterarte de convocatorias, vencimientos y novedades de la sede Villa Mercedes.
                        </p>

                        <div class="space-y-4">
                            <a href="https://www.facebook.com/SsAEBU" target="_blank" class="block border border-slate-200 bg-white p-4 hover:border-purple-500 hover:shadow-sm transition-all group">
                                <span class="block text-[10px] font-bold text-slate-400 uppercase  mb-1">Facebook</span>
                                <span class="text-sm font-medium text-slate-900 group-hover:text-purple-600 transition-colors">@SsAEBU</span>
                            </a>
                            <a href="https://www.instagram.com/ssaebuu" target="_blank" class="block border border-slate-200 bg-white p-4 hover:border-purple-500 hover:shadow-sm transition-all group">
                                <span class="block text-[10px] font-bold text-slate-400 uppercase  mb-1">Instagram</span>
                                <span class="text-sm font-medium text-slate-900 group-hover:text-purple-600 transition-colors">@ssaebuu</span>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="bg-white p-2 border border-slate-200 shadow-sm">
                            <div class="aspect-square md:aspect-video w-full bg-slate-200 relative overflow-hidden">
                                <iframe title="Mapa de Google - Sede Villa Mercedes"
src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1108.4269164908467!2d-65.44854390978057!3d-33.643485104844096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95d16baf7a99e9cf%3A0x2fc3cfeb14dd2139!2sComedor%20UNIVERSITARIO%20FICA!5e0!3m2!1ses!2sar!4v1778594467379!5m2!1ses!2sar"

                                    width="100%"
                                    height="100%"
                                    style="border:0;"
                                    allowfullscreen=""
                                    loading="lazy"
                                    class="w-full h-full filter grayscale opacity-90 hover:grayscale-0 hover:opacity-100 transition-all duration-700">
                                </iframe>
                            </div>
                        </div>
                        <p class="text-right text-[10px] text-slate-400 uppercase  mt-3 font-bold">
                            Ubicación Geográfica
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <section class="bg-slate-900 py-24 text-white text-center border-t border-slate-800">
            <div class="container mx-auto px-6 max-w-3xl">

                <h2 class="text-3xl font-light mb-6 tracking-tight">¿Necesitás iniciar un trámite?</h2>
                <p class="text-slate-400 font-light text-lg mb-12">
                    Podés enviarnos tu consulta por correo electrónico o acercarte personalmente a nuestras oficinas en Villa Mercedes.
                </p>

                <div class="mb-12 border-t border-slate-700 pt-8 inline-block">
                    <h3 class="text-xl font-medium text-white mb-2">Administración Sede V. Mercedes</h3>
                    <p class="text-xs text-purple-500 uppercase  font-bold">Atención a la Comunidad</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="mailto:subsaebu@gmail.com" class="inline-block bg-white text-slate-900 px-10 py-4 text-sm font-bold uppercase  hover:bg-slate-100 hover:scale-105 transition-all duration-300">
                        Enviar Email
                    </a>
                    <a href="tel:2657420565" class="inline-block border border-slate-600 text-white px-10 py-4 text-sm font-bold uppercase  hover:bg-slate-800 transition-all duration-300">
                        Llamar a Sede
                    </a>
                </div>

            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>