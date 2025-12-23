<?php

/**
 * Template Name: Sedes regionales
 * Description: Listado de Sedes de la SAEBU
 */
get_header();
?>

<main class="bg-gray-50">

    <?php while (have_posts()) : the_post(); ?>

        <section class="relative bg-slate-900 text-white py-24 border-b-4 border-slate-700">
            <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>

            <div class="container mx-auto px-4 relative z-10">
                <div class="max-w-4xl mx-auto text-center">
                    <nav class="flex justify-center items-center gap-2 text-sm text-slate-400 mb-6">
                        <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors">Inicio</a>
                        <span>/</span>
                        <span class="text-white font-medium">Sedes</span>
                    </nav>

                    <h1 class="text-3xl md:text-5xl font-bold mb-6 leading-tight tracking-tight">
                        Sedes y Centros Regionales
                    </h1>

                    <div class="w-24 h-1 bg-slate-500 mx-auto mb-6"></div>

                    <p class="text-xl text-slate-300 max-w-2xl mx-auto font-light leading-relaxed">
                        La Secretaría de Asuntos Estudiantiles extiende sus servicios a través de la provincia para garantizar el bienestar de toda la comunidad universitaria.
                    </p>
                </div>
            </div>
        </section>

        <section class="py-20">
            <div class="container mx-auto px-4">
                <div class="grid md:grid-cols-3 gap-8 max-w-7xl mx-auto">

                    <article class="bg-white rounded-lg shadow-sm hover:shadow-2xl transition-all duration-300 border border-gray-200 overflow-hidden flex flex-col group">
                        <div class="h-2 w-full bg-[#416ed2]"></div>

                        <div class="p-8 flex-1 flex flex-col">
                            <div class="flex items-center justify-between mb-6">
                                <div class="w-14 h-14 bg-blue-50 text-[#005eb8] rounded-lg flex items-center justify-center group-hover:bg-[#416ed2] group-hover:text-white transition-colors">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <span class="text-xs font-bold uppercase tracking-wider text-gray-700 border border-gray-200 px-2 py-1 rounded">Sede Central</span>
                            </div>

                            <h2 class="text-2xl font-bold text-gray-900 mb-2">San Luis</h2>
                            <p class="text-gray-500 text-sm mb-6">Administración central y coordinación general de servicios estudiantiles.</p>

                            <div class="space-y-3 mb-8 flex-1">
                                <div class="flex items-start gap-3 text-sm text-gray-600">
                                    <svg class="w-5 h-5 text-gray-700 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <span>Rivadavia 1029</span>
                                </div>
                                <div class="flex items-start gap-3 text-sm text-gray-600">
                                    <svg class="w-5 h-5 text-gray-700 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                    <span>(0266) 4520300</span>
                                </div>
                                <div class="flex items-start gap-3 text-sm text-gray-600">
                                    <svg class="w-5 h-5 text-gray-700 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    <span class="break-all">saebuunsl@unsl.edu.ar</span>
                                </div>
                            </div>

                            <a href="<?php echo home_url('/contacto'); ?>" class="block w-full text-center py-3 rounded-md border border-gray-300 text-gray-700 font-semibold hover:border-[#005eb8] hover:text-[#005eb8] transition-all">
                                Ver información
                            </a>
                        </div>
                    </article>

                    <article class="bg-white rounded-lg shadow-sm hover:shadow-2xl transition-all duration-300 border border-gray-200 overflow-hidden flex flex-col group">
                        <div class="h-2 w-full bg-purple-600"></div>

                        <div class="p-8 flex-1 flex flex-col">
                            <div class="flex items-center justify-between mb-6">
                                <div class="w-14 h-14 bg-purple-50 text-purple-600 rounded-lg flex items-center justify-center group-hover:bg-purple-600 group-hover:text-white transition-colors">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                                    </svg>
                                </div>
                                <span class="text-xs font-bold uppercase tracking-wider text-gray-700 border border-gray-200 px-2 py-1 rounded">Sede Regional</span>
                            </div>

                            <h2 class="text-2xl font-bold text-gray-900 mb-2">Villa Mercedes</h2>
                            <p class="text-gray-500 text-sm mb-6">Centro de servicios para facultades de ingeniería y ciencias económico-jurídicas.</p>

                            <div class="space-y-3 mb-8 flex-1">
                                <div class="flex items-start gap-3 text-sm text-gray-600">
                                    <svg class="w-5 h-5 text-gray-700 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <span>Junín 269</span>
                                </div>
                                <div class="flex items-start gap-3 text-sm text-gray-600">
                                    <svg class="w-5 h-5 text-gray-700 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                    <span>2657 420565</span>
                                </div>
                                <div class="flex items-start gap-3 text-sm text-gray-600">
                                    <svg class="w-5 h-5 text-gray-700 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    <span class="break-all">subsaebu@gmail.com</span>
                                </div>
                            </div>

                            <a href="<?php echo home_url('/saebu-villa-mercedes'); ?>" class="block w-full text-center py-3 rounded-md bg-purple-600 text-white font-semibold hover:bg-purple-700 transition-all shadow-md hover:shadow-lg">
                                Ir a Sede Villa Mercedes
                            </a>
                        </div>
                    </article>

                    <article class="bg-white rounded-lg shadow-sm hover:shadow-2xl transition-all duration-300 border border-gray-200 overflow-hidden flex flex-col group">
                        <div class="h-2 w-full bg-teal-700"></div>

                        <div class="p-8 flex-1 flex flex-col">
                            <div class="flex items-center justify-between mb-6">
                                <div class="w-14 h-14 bg-teal-50 text-teal-600 rounded-lg flex items-center justify-center group-hover:bg-teal-700 group-hover:text-white transition-colors">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
                                    </svg>
                                </div>
                                <span class="text-xs font-bold uppercase tracking-wider text-gray-700 border border-gray-200 px-2 py-1 rounded">Sede Regional</span>
                            </div>

                            <h2 class="text-2xl font-bold text-gray-900 mb-2">Villa de Merlo</h2>
                            <p class="text-gray-500 text-sm mb-6">Atención a estudiantes de la Facultad de Turismo y Urbanismo (FTU).</p>

                            <div class="space-y-3 mb-8 flex-1">
                                <div class="flex items-start gap-3 text-sm text-gray-600">
                                    <svg class="w-5 h-5 text-gray-700 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <span>Av. del Libertador S/N</span>
                                </div>
                                <div class="flex items-start gap-3 text-sm text-gray-600">
                                    <svg class="w-5 h-5 text-gray-700 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                    <span>2664 409340</span>
                                </div>
                                <div class="flex items-start gap-3 text-sm text-gray-600">
                                    <svg class="w-5 h-5 text-gray-700 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    <span class="break-all">saebumerloftu@gmail.com</span>
                                </div>
                            </div>

                            <a href="<?php echo home_url('/saebu-merlo'); ?>" class="block w-full text-center py-3 rounded-md bg-teal-700 text-white font-semibold hover:bg-teal-800 transition-all shadow-md hover:shadow-lg">
                                Ir a Sede Merlo
                            </a>
                        </div>
                    </article>

                </div>
            </div>
        </section>

        <section class="py-16 bg-white border-t border-gray-200">
            <div class="container mx-auto px-4 text-center">
                <!--h2 class="text-2xl font-bold text-slate-900 mb-8">Alcance Provincial</h2-->
                <div class="max-w-4xl mx-auto bg-slate-50 rounded-2xl p-8 border border-gray-200">
                    <div class="flex flex-col md:flex-row items-center justify-center gap-8 md:gap-16">
                        <div class="text-center">
                            <div class="w-4 h-4 bg-teal-700 rounded-full mx-auto mb-2"></div>
                            <p class="font-bold text-gray-800 w-[115px]">Merlo</p>
                            <!--p class="text-xs text-gray-500">Norte</p-->
                        </div>
                        <div class="hidden md:block h-px w-24 bg-gray-300"></div>
                        <div class="text-center">
                            <div class="w-6 h-6 bg-[#416ed2] rounded-full mx-auto mb-2 ring-4 ring-blue-100"></div>
                            <p class="font-bold text-gray-800 w-[115px]">San Luis</p>
                            <!--p class="text-xs text-gray-500">Norte</p-->
                        </div>
                        <div class="hidden md:block h-px w-24 bg-gray-300"></div>
                        <div class="text-center">
                            <div class="w-4 h-4 bg-purple-600 rounded-full mx-auto mb-2"></div>
                            <p class="font-bold text-gray-800 w-[115px]">Villa Mercedes</p>
                             <!--p class="text-xs text-gray-500">Norte</p-->
                        </div>
                    </div>
                    <p class="mt-8 text-gray-600 text-sm">
                        La Universidad Nacional de San Luis garantiza la presencia institucional y el acceso a beneficios en sus tres principales centros académicos.
                    </p>
                </div>
            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>