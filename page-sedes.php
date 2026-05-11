<?php

/**
 * Template Name: Sedes regionales
 * Description: Listado de Sedes de la SAEBU
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
                    <span class="text-[#005eb8]">Sedes regionales</span>
                </nav>

                <h1 class="text-4xl md:text-6xl font-light text-white leading-tight mb-8 tracking-tight">
                    Presencia <strong class="font-semibold">Institucional</strong>
                </h1>

                <p class="text-xl text-slate-400 font-light leading-relaxed max-w-2xl mx-auto">
                    <?php
                    if (has_excerpt()) {
                        echo get_the_excerpt();
                    } else {
                        echo 'La Secretaría de Asuntos Estudiantiles extiende sus servicios a través de la provincia para garantizar el bienestar de toda la comunidad universitaria.';
                    }
                    ?>
                </p>
            </div>
        </section>

        <section class="py-24 bg-white">
            <div class="container mx-auto px-6 max-w-7xl">

                <div class="grid lg:grid-cols-3 gap-16 md:divide-x divide-slate-200">

                    <article class="flex flex-col h-full group md:pr-8">
                        <div class="mb-8">
                            <span class="text-[10px] font-bold text-[#005eb8] uppercase  mb-3 block">Sede central</span>
                            <h2 class="text-3xl font-medium text-slate-900 mb-4">San Luis</h2>
                            <p class="text-sm text-slate-500 font-light leading-relaxed">Administración central y coordinación general de servicios estudiantiles.</p>
                        </div>

                        <div class="space-y-6 mb-12 flex-1">
                            <div>
                                <span class="block text-[10px] font-bold text-slate-400 uppercase  mb-1">Dirección</span>
                                <p class="text-sm text-slate-700 font-light">Rivadavia 1029</p>
                            </div>
                            <div>
                                <span class="block text-[10px] font-bold text-slate-400 uppercase  mb-1">Teléfono</span>
                                <a href="tel:02664520300" class="text-sm text-slate-700 font-medium hover:text-[#005eb8] transition-colors">(0266) 4520300</a>
                            </div>
                            <div>
                                <span class="block text-[10px] font-bold text-slate-400 uppercase  mb-1">Correo Electrónico</span>
                                <a href="mailto:saebuunsl@unsl.edu.ar" class="text-sm text-slate-500 font-light hover:text-[#005eb8] transition-colors">saebuunsl@unsl.edu.ar</a>
                            </div>
                        </div>

                        <div class="mt-auto pt-6 border-t border-slate-100">
                            <a href="<?php echo home_url('/contacto'); ?>" class="inline-flex items-center gap-2 text-xs font-bold uppercase  text-slate-900 group-hover:text-[#005eb8] transition-colors">
                                Ver administración
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </article>

                    <article class="flex flex-col h-full group md:px-8 border-t md:border-t-0 border-slate-200 pt-12 md:pt-0">
                        <div class="mb-8">
                            <span class="text-[10px] font-bold text-purple-600 uppercase  mb-3 block">Sede regional</span>
                            <h2 class="text-3xl font-medium text-slate-900 mb-4">Villa Mercedes</h2>
                            <p class="text-sm text-slate-500 font-light leading-relaxed">Centro de servicios para facultades de ingeniería y ciencias económico-jurídicas.</p>
                        </div>

                        <div class="space-y-6 mb-12 flex-1">
                            <div>
                                <span class="block text-[10px] font-bold text-slate-400 uppercase  mb-1">Dirección</span>
                                <p class="text-sm text-slate-700 font-light">Junín 269</p>
                            </div>
                            <div>
                                <span class="block text-[10px] font-bold text-slate-400 uppercase  mb-1">Teléfono</span>
                                <a href="tel:2657420565" class="text-sm text-slate-700 font-medium hover:text-purple-600 transition-colors">2657 420565</a>
                            </div>
                            <div>
                                <span class="block text-[10px] font-bold text-slate-400 uppercase  mb-1">Correo Electrónico</span>
                                <a href="mailto:subsaebu@gmail.com" class="text-sm text-slate-500 font-light hover:text-purple-600 transition-colors">subsaebu@gmail.com</a>
                            </div>
                        </div>

                        <div class="mt-auto pt-6 border-t border-slate-100">
                            <a href="<?php echo home_url('/saebu-villa-mercedes'); ?>" class="inline-flex items-center gap-2 text-xs font-bold uppercase  text-slate-900 group-hover:text-purple-600 transition-colors">
                                Ir a sede local
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </article>

                    <article class="flex flex-col h-full group md:pl-8 border-t md:border-t-0 border-slate-200 pt-12 md:pt-0">
                        <div class="mb-8">
                            <span class="text-[10px] font-bold text-teal-600 uppercase  mb-3 block">Sede regional</span>
                            <h2 class="text-3xl font-medium text-slate-900 mb-4">Villa de Merlo</h2>
                            <p class="text-sm text-slate-500 font-light leading-relaxed">Atención a estudiantes de la Facultad de Turismo y Urbanismo (FTU).</p>
                        </div>

                        <div class="space-y-6 mb-12 flex-1">
                            <div>
                                <span class="block text-[10px] font-bold text-slate-400 uppercase  mb-1">Dirección</span>
                                <p class="text-sm text-slate-700 font-light">Av. del Libertador S/N</p>
                            </div>
                            <div>
                                <span class="block text-[10px] font-bold text-slate-400 uppercase  mb-1">Teléfono</span>
                                <a href="tel:2664409340" class="text-sm text-slate-700 font-medium hover:text-teal-600 transition-colors">2664 409340</a>
                            </div>
                            <div>
                                <span class="block text-[10px] font-bold text-slate-400 uppercase  mb-1">Correo Electrónico</span>
                                <a href="mailto:saebumerloftu@gmail.com" class="text-sm text-slate-500 font-light hover:text-teal-600 transition-colors">saebumerloftu@gmail.com</a>
                            </div>
                        </div>

                        <div class="mt-auto pt-6 border-t border-slate-100">
                            <a href="<?php echo home_url('/saebu-merlo'); ?>" class="inline-flex items-center gap-2 text-xs font-bold uppercase  text-slate-900 group-hover:text-teal-600 transition-colors">
                                Ir a sede local
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </article>

                </div>
            </div>
        </section>

        <section class="py-24 bg-slate-50 border-y border-slate-200">
            <div class="container mx-auto px-6 max-w-5xl">

                <div class="text-center mb-16">
                    <h2 class="text-3xl font-light text-slate-900 tracking-tight mb-4">
                        Alcance <strong class="font-semibold">provincial</strong>
                    </h2>
                    <p class="text-lg text-slate-500 font-light">La Universidad Nacional de San Luis garantiza la presencia institucional y el acceso a beneficios en sus tres principales centros académicos.</p>
                </div>

                <div class="relative mt-8">
                    <div class="hidden md:block absolute top-1/2 left-[10%] right-[10%] h-px bg-slate-300 -translate-y-1/2 z-0"></div>

                    <div class="flex flex-col md:flex-row items-center justify-between gap-12 md:gap-0 relative z-10">

                        <div class="bg-slate-50 px-6 py-2 text-center">
                            <div class="w-3 h-3 bg-teal-600 rounded-full mx-auto mb-3 ring-4 ring-teal-50"></div>
                            <h3 class="font-medium text-slate-900">Villa de Merlo</h3>

                        </div>

                        <div class="bg-slate-50 px-6 py-2 text-center">
                            <div class="w-4 h-4 bg-[#005eb8] rounded-full mx-auto mb-3 ring-4 ring-blue-50"></div>
                            <h3 class="font-medium text-slate-900">San Luis</h3>
                            <span class="block text-[10px] uppercase  text-slate-400 mt-1">Sede Central</span>
                        </div>

                        <div class="bg-slate-50 px-6 py-2 text-center">
                            <div class="w-3 h-3 bg-purple-600 rounded-full mx-auto mb-3 ring-4 ring-purple-50"></div>
                            <h3 class="font-medium text-slate-900">Villa Mercedes</h3>

                        </div>

                    </div>
                </div>

            </div>
        </section>

        <section class="bg-slate-900 py-24 text-white text-center border-t border-slate-800">
            <div class="container mx-auto px-6 max-w-3xl">

                <h2 class="text-3xl font-light mb-6 tracking-tight">Mesa de Entradas General</h2>
                <p class="text-slate-400 font-light text-lg mb-12">
                    Para consultas generales, expedientes o derivaciones que requieran articulación entre sedes, dirigite al área central de atención.
                </p>

                <div class="flex justify-center">
                    <a href="<?php echo esc_url(home_url('/contacto')); ?>" class="inline-block bg-white text-slate-900 px-10 py-4 text-sm font-bold uppercase  hover:bg-slate-100 hover:scale-105 transition-all duration-300">
                        Contactar Administración Central
                    </a>
                </div>

            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>