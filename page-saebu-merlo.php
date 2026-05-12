<?php

/**
 * Template Name: SAEBU Merlo
 * Description: Sede Villa de Merlo
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
                    <a href="<?php echo home_url('/sedes'); ?>" class="hover:text-white transition-colors">Sedes regionales</a>
                    <span>/</span>
                    <span class="text-teal-500">Villa de Merlo</span>
                </nav>

                <h1 class="text-4xl md:text-6xl font-light text-white leading-tight mb-8 tracking-tight">
                    Sede <strong class="font-semibold">Villa de Merlo</strong>
                </h1>

                <p class="text-xl text-slate-400 font-light leading-relaxed max-w-2xl mx-auto">
                    Extensión de los servicios de bienestar estudiantil y asistencia administrativa para la comunidad universitaria de la Facultad de Turismo y Urbanismo (FTU).
                </p>
            </div>
        </section>

        <section class="relative z-20 -mt-12 mb-12">
            <div class="container mx-auto px-6 max-w-6xl">
                <div class="bg-white border border-slate-200 shadow-sm grid md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-slate-200">

                    <div class="p-8 text-center md:text-left flex flex-col justify-center">
                        <span class="text-[10px] font-bold text-slate-400 uppercase  mb-2 block">Ubicación Física</span>
                        <h3 class="text-lg font-medium text-slate-900 leading-snug">Av. del Libertador S/N</h3>
                        <p class="text-sm text-slate-500 font-light">Campus Universitario Barranca Colorada</p>
                    </div>

                    <div class="p-8 text-center md:text-left flex flex-col justify-center">
                        <span class="text-[10px] font-bold text-slate-400 uppercase  mb-2 block">Atención al Público</span>
                        <h3 class="text-lg font-medium text-slate-900 leading-snug">Lunes a Viernes</h3>
                        <p class="text-sm text-slate-500 font-light">8:00 a 13:00 hs</p>
                    </div>

                    <div class="p-8 text-center md:text-left flex flex-col justify-center bg-slate-50">
                        <span class="text-[10px] font-bold text-teal-600 uppercase  mb-2 block">Contacto Directo</span>
                        <a href="tel:2664409340" class="text-lg font-medium text-slate-900 hover:text-teal-600 transition-colors leading-snug block">
                            (266) 4409340
                        </a>
                        <a href="mailto:saebumerloftu@gmail.com" class="text-sm text-teal-600 hover:text-slate-900 transition-colors font-light">
                            saebumerloftu@gmail.com
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
                            Servicios <strong class="font-semibold">disponibles</strong>
                        </h2>
                        <p class="text-lg text-slate-500 font-light">Gestiones y programas activos para estudiantes del Campus Barranca Colorada.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-x-12 gap-y-12">

                    <div class="border-t border-slate-200 pt-5 group">

                        <h3 class="text-xl font-medium text-slate-900 mb-3">Programa de Becas</h3>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">
                            Asesoramiento integral, recepción de documentación respaldatoria y orientación sobre beneficios económicos vigentes.
                        </p>
                    </div>

                    <div class="border-t border-slate-200 pt-5 group">

                        <h3 class="text-xl font-medium text-slate-900 mb-3">Deportes y Recreación</h3>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">
                            Información, horarios e inscripciones sobre actividades formativas, recreativas y torneos universitarios desarrollados en la sede.
                        </p>
                    </div>

                    <div class="border-t border-slate-200 pt-5 group">

                        <h3 class="text-xl font-medium text-slate-900 mb-3">Salud Universitaria</h3>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">
                            Consultas sobre cobertura sanitaria para estudiantes, convenios vigentes en la localidad y requerimientos médicos de ingreso.
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
                            Novedades
                        </h2>
                        <p class="text-slate-500 font-light text-sm mb-8 leading-relaxed">
                            Seguinos en nuestras redes sociales para estar al día con los eventos, competencias y comunicados de la FTU.
                        </p>

                        <div class="space-y-4">
                            <a href="https://www.facebook.com/SAEBUMerlo" target="_blank" rel="noopener" class="block border border-slate-200 bg-white p-4 hover:border-teal-600 hover:shadow-sm transition-all group">
                                <span class="block text-[10px] font-bold text-slate-400 uppercase  mb-1">Facebook</span>
                                <span class="text-sm font-medium text-slate-900 group-hover:text-teal-600 transition-colors">@SAEBUMerlo</span>
                            </a>
                            <a href="https://www.instagram.com/saebuftu" target="_blank" rel="noopener" class="block border border-slate-200 bg-white p-4 hover:border-teal-600 hover:shadow-sm transition-all group">
                                <span class="block text-[10px] font-bold text-slate-400 uppercase  mb-1">Instagram</span>
                                <span class="text-sm font-medium text-slate-900 group-hover:text-teal-600 transition-colors">@saebuftu</span>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="bg-white p-2 border border-slate-200 shadow-sm">
                            <div class="aspect-square md:aspect-video w-full bg-slate-200 relative overflow-hidden">
                                <iframe title="Mapa de Google - Sede Merlo"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48042.246215234554!2d-65.07367909242252!3d-32.356153425402596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95d2e149a54b86c1%3A0xf2baee8df0ebf24b!2sUniversidad%20Nacional%20de%20San%20Luis%3A%20Facultad%20de%20Turismo%20y%20Urbanismo!5e0!3m2!1ses!2sar!4v1778594569884!5m2!1ses!2sar"

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
                            Ubicación: Campus Barranca Colorada
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <section class="bg-slate-900 py-24 text-white text-center border-t border-slate-800">
            <div class="container mx-auto px-6 max-w-3xl">

                <h2 class="text-3xl font-light mb-6 tracking-tight">¿Dudas o Gestiones?</h2>
                <p class="text-slate-400 font-light text-lg mb-12">
                    Estamos disponibles para resolver tus inquietudes operativas, deportivas o administrativas de forma presencial o por correo.
                </p>

                <div class="mb-12 border-t border-slate-700 pt-8 inline-block">
                    <h3 class="text-xl font-medium text-white mb-2">Administración Sede Merlo</h3>
                    <p class="text-xs text-teal-500 uppercase  font-bold">Asistencia Universitaria FTU</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="mailto:saebumerloftu@gmail.com" class="inline-block bg-white text-slate-900 px-10 py-4 text-sm font-bold uppercase  hover:bg-slate-100 hover:scale-105 transition-all duration-300">
                        Enviar Email
                    </a>
                    <a href="tel:2664409340" class="inline-block border border-slate-600 text-white px-10 py-4 text-sm font-bold uppercase  hover:bg-slate-800 transition-all duration-300">
                        Llamar a Sede
                    </a>
                </div>

            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>