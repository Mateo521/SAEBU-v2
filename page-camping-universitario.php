<?php

/**
 * Template Name: Complejo Turístico La Florida
 */
get_header();
?>

<main class="bg-gradient-to-b from-white to-green-50/30">

    <?php while (have_posts()) : the_post(); ?>

        <!-- Hero con gradiente verde -->
        <section class="relative py-16 md:py-24 bg-gradient-to-br from-green-500 via-emerald-600 to-teal-700 overflow-hidden">
            <!-- Patrón decorativo -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;"></div>
            </div>

            <!-- Formas decorativas -->
            <div class="absolute top-20 right-10 w-72 h-72 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 left-10 w-96 h-96 bg-green-300/20 rounded-full blur-3xl"></div>

            <div class="container mx-auto px-4 relative">
                <div class="max-w-5xl mx-auto text-center">
                    <!-- Breadcrumb -->
                    <div class="mb-6">
                        <nav class="inline-flex items-center gap-2 text-sm text-green-100">
                            <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors">Inicio</a>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            <span class="text-white font-medium">Complejo La Florida</span>
                        </nav>
                    </div>

                    <!-- Badge -->
                    <div class="inline-block mb-6">
                        <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-xl text-white px-5 py-2.5 rounded-full text-sm font-semibold border border-white/20 shadow-lg">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            Turismo y Recreación
                        </span>
                    </div>

                    <h1 class="text-2xl md:text-xl lg:text-2xl font-bold text-white mb-6 leading-tight">
                        Complejo Turístico y<br>Recreativo La Florida
                    </h1>

                    <p class="text-xl text-green-100 max-w-3xl mx-auto leading-relaxed mb-8">
                        Un espacio natural a orillas del dique, ideal para acampar, disfrutar del día y conectar con la naturaleza
                    </p>

                    <!-- Ubicación destacada -->
                    <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-xl text-white px-6 py-3 rounded-xl border border-white/30">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="font-semibold">Ruta Provincial Nº 39, La Florida - A 45 km de San Luis</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ubicación -->
        <section class="py-12 bg-white border-b-2 border-green-100">
            <div class="container mx-auto px-4">
                <div class="max-w-7xl mx-auto">
                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 border-2 border-green-200 rounded-2xl p-8 md:p-10">
                        <div class="flex items-start gap-5">
                            <div class="w-14 h-14 bg-green-500 text-white rounded-xl flex items-center justify-center shadow-lg flex-shrink-0">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-slate-900 mb-3">¿Dónde estamos ubicados?</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    El Complejo se encuentra ubicado en la localidad de <strong>La Florida</strong> sobre la <strong>Ruta Provincial Nº 39</strong>, dentro del Departamento Pringles, a <strong>7 km de la localidad de El Trapiche</strong> y <strong>45 km de la Ciudad de San Luis</strong>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Servicios -->
        <section class="py-16 md:py-20">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Título -->
                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-green-100 text-green-700 px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Servicios
                        </div>
                        <h2 class="text-xl md:text-xl font-bold text-slate-900 mb-4">Lo que ofrecemos</h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Una variedad de servicios e instalaciones para tu comodidad y disfrute</p>
                    </div>

                    <!-- Grid de servicios -->
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                        <!-- Servicio 1 -->
                        <div class="group bg-white border-2 border-green-200 rounded-2xl p-6 hover:border-green-400 hover:shadow-xl transition-all">
                            <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-600 text-white rounded-xl flex items-center justify-center shadow-lg mb-4 group-hover:scale-110 transition-transform">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-base font-bold text-slate-900 mb-2">Programas de Recreación</h3>
                            <p class="text-sm text-gray-600">Actividades deportivas y recreativas para niños, jóvenes y adultos</p>
                        </div>

                        <!-- Servicio 2 -->
                        <div class="group bg-white border-2 border-green-200 rounded-2xl p-6 hover:border-green-400 hover:shadow-xl transition-all">
                            <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-600 text-white rounded-xl flex items-center justify-center shadow-lg mb-4 group-hover:scale-110 transition-transform">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-base font-bold text-slate-900 mb-2">Sala de Enfermería</h3>
                            <p class="text-sm text-gray-600">Servicio de enfermería y primeros auxilios disponible</p>
                        </div>

                        <!-- Servicio 3 -->
                        <div class="group bg-white border-2 border-green-200 rounded-2xl p-6 hover:border-green-400 hover:shadow-xl transition-all">
                            <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 text-white rounded-xl flex items-center justify-center shadow-lg mb-4 group-hover:scale-110 transition-transform">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                                </svg>
                            </div>
                            <h3 class="text-base font-bold text-slate-900 mb-2">Playas Habilitadas</h3>
                            <p class="text-sm text-gray-600">Playa Chica y Grande con guardavidas y boyado de seguridad</p>
                        </div>

                        <!-- Servicio 4 -->
                        <div class="group bg-white border-2 border-green-200 rounded-2xl p-6 hover:border-green-400 hover:shadow-xl transition-all">
                            <div class="w-14 h-14 bg-gradient-to-br from-amber-500 to-amber-600 text-white rounded-xl flex items-center justify-center shadow-lg mb-4 group-hover:scale-110 transition-transform">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                            <h3 class="text-base font-bold text-slate-900 mb-2">Duchas y Baños</h3>
                            <p class="text-sm text-gray-600">Agua caliente mediante calefones solares y caldera</p>
                        </div>

                        <!-- Servicio 5 -->
                        <div class="group bg-white border-2 border-green-200 rounded-2xl p-6 hover:border-green-400 hover:shadow-xl transition-all">
                            <div class="w-14 h-14 bg-gradient-to-br from-slate-500 to-slate-600 text-white rounded-xl flex items-center justify-center shadow-lg mb-4 group-hover:scale-110 transition-transform">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"></path>
                                </svg>
                            </div>
                            <h3 class="text-base font-bold text-slate-900 mb-2">Cocheras Techadas</h3>
                            <p class="text-sm text-gray-600">Estacionamiento cubierto para tu vehículo</p>
                        </div>

                        <!-- Servicio 6 -->
                        <div class="group bg-white border-2 border-green-200 rounded-2xl p-6 hover:border-green-400 hover:shadow-xl transition-all">
                            <div class="w-14 h-14 bg-gradient-to-br from-cyan-500 to-cyan-600 text-white rounded-xl flex items-center justify-center shadow-lg mb-4 group-hover:scale-110 transition-transform">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-base font-bold text-slate-900 mb-2">Desembarcadero</h3>
                            <p class="text-sm text-gray-600">Para bajada de embarcaciones, kayaks y más</p>
                        </div>

                        <!-- Servicio 7 -->
                        <div class="group bg-white border-2 border-green-200 rounded-2xl p-6 hover:border-green-400 hover:shadow-xl transition-all">
                            <div class="w-14 h-14 bg-gradient-to-br from-pink-500 to-pink-600 text-white rounded-xl flex items-center justify-center shadow-lg mb-4 group-hover:scale-110 transition-transform">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"></path>
                                </svg>
                            </div>
                            <h3 class="text-base font-bold text-slate-900 mb-2">Juegos Infantiles</h3>
                            <p class="text-sm text-gray-600">Plazas de juegos y pileta para niños/as</p>
                        </div>

                        <!-- Servicio 8 -->
                        <div class="group bg-white border-2 border-green-200 rounded-2xl p-6 hover:border-green-400 hover:shadow-xl transition-all">
                            <div class="w-14 h-14 bg-gradient-to-br from-teal-500 to-teal-600 text-white rounded-xl flex items-center justify-center shadow-lg mb-4 group-hover:scale-110 transition-transform">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                                </svg>
                            </div>
                            <h3 class="text-base font-bold text-slate-900 mb-2">Zona de Pesca</h3>
                            <p class="text-sm text-gray-600">Área habilitada para la pesca deportiva</p>
                        </div>

                        <!-- Servicio 9 -->
                        <div class="group bg-white border-2 border-green-200 rounded-2xl p-6 hover:border-green-400 hover:shadow-xl transition-all">
                            <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-600 text-white rounded-xl flex items-center justify-center shadow-lg mb-4 group-hover:scale-110 transition-transform">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-base font-bold text-slate-900 mb-2">Disponibilidad para Eventos</h3>
                            <p class="text-sm text-gray-600">Organizá tu evento en el complejo</p>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- Sectores de Acampe y Día -->
        <section class="py-16 bg-gradient-to-br from-green-50 to-emerald-50">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Título -->
                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-green-100 text-green-700 px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            Sectores e Instalaciones
                        </div>
                        <h2 class="text-xl md:text-xl font-bold text-slate-900 mb-4">Espacios para Acampar y Día de Campo</h2>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8 mb-12">

                        <!-- Sectores de Acampe -->
                        <div class="bg-white border-2 border-green-200 rounded-xl p-8 shadow-lg">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-600 text-white rounded-xl flex items-center justify-center shadow-lg">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-slate-900">Sectores de Acampe</h3>
                                    <p class="text-sm text-green-600 font-medium">Para carpas</p>
                                </div>
                            </div>

                            <div class="space-y-4">
                                <!-- Con quincho -->
                                <div class="p-5 bg-green-50 border border-green-200 rounded-xl">
                                    <div class="flex items-start gap-3 mb-3">
                                        <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <h4 class="font-bold text-slate-900">Parcelas con quincho</h4>
                                    </div>
                                    <ul class="text-sm text-gray-700 space-y-1 ml-8">
                                        <li>• Delimitados por cercos ligustrinos</li>
                                        <li>• Asadores individuales</li>
                                        <li>• Agua, luz y tomacorriente</li>
                                    </ul>
                                </div>

                                <!-- Sin quincho -->
                                <div class="p-5 bg-green-50 border border-green-200 rounded-xl">
                                    <div class="flex items-start gap-3 mb-3">
                                        <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <h4 class="font-bold text-slate-900">Parcelas sin quincho</h4>
                                    </div>
                                    <ul class="text-sm text-gray-700 space-y-1 ml-8">
                                        <li>• Delimitados por cercos ligustrinos</li>
                                        <li>• Asadores individuales</li>
                                        <li>• Agua y tomacorrientes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Para pasar el día -->
                        <div class="bg-white border-2 border-emerald-200 rounded-xl p-8 shadow-lg">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-14 h-14 bg-gradient-to-br from-emerald-500 to-emerald-600 text-white rounded-xl flex items-center justify-center shadow-lg">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-slate-900">Para Pasar el Día</h3>
                                    <p class="text-sm text-emerald-600 font-medium">Sectores de día de campo</p>
                                </div>
                            </div>

                            <div class="p-5 bg-emerald-50 border border-emerald-200 rounded-xl">
                                <div class="flex items-start gap-3 mb-3">
                                    <svg class="w-5 h-5 text-emerald-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <h4 class="font-bold text-slate-900">Quinchos metálicos</h4>
                                </div>
                                <ul class="text-sm text-gray-700 space-y-1 ml-8 mb-4">
                                    <li>• Asadores incluidos</li>
                                    <li>• Mesas disponibles</li>
                                    <li>• Agua, luz y tomacorrientes</li>
                                </ul>
                                <p class="text-sm text-emerald-700 font-medium ml-8"> Ubicados a lo largo de toda la costa del Complejo</p>
                            </div>
                        </div>

                    </div>

                    <!-- Instalaciones adicionales -->
                    <div class="grid md:grid-cols-3 gap-6">

                        <!-- Proveeduría -->
                        <div class="bg-white border-2 border-green-200 rounded-2xl p-6 hover:shadow-xl transition-all">
                            <div class="w-12 h-12 bg-amber-100 text-amber-600 rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h4 class="font-bold text-slate-900 mb-2">Proveeduría y Buffet</h4>
                            <ul class="text-sm text-gray-600 space-y-1">
                                <li>• Patio al aire libre</li>
                                <li>• Quincho cerrado</li>
                                <li>• Servicio de comida y parrilla</li>
                                <li>• Baños privados</li>
                            </ul>
                        </div>

                        <!-- SUM -->
                        <div class="bg-white border-2 border-green-200 rounded-2xl p-6 hover:shadow-xl transition-all">
                            <div class="w-12 h-12 bg-purple-100 text-purple-600 rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h4 class="font-bold text-slate-900 mb-2">Salón de Usos Múltiples (SUM)</h4>
                            <p class="text-sm text-gray-600">Capacidad para <strong class="text-slate-900">300 personas</strong></p>
                            <p class="text-xs text-green-600 mt-2 font-medium">Ideal para eventos y reuniones</p>
                        </div>

                        <!-- Deportes -->
                        <div class="bg-white border-2 border-green-200 rounded-2xl p-6 hover:shadow-xl transition-all">
                            <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h4 class="font-bold text-slate-900 mb-2">Instalaciones Deportivas</h4>
                            <ul class="text-sm text-gray-600 space-y-1">
                                <li>• Cancha de paddle</li>
                                <li>• Cancha fútbol playa</li>
                                <li>• Cancha de fútbol 11</li>
                                <li>• Cancha de vóley</li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- Cabañas -->
        <section class="py-16 md:py-20">
            <div class="container mx-auto px-4">
                <div class="max-w-5xl mx-auto">

                    <!-- Título -->
                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-teal-100 text-teal-700 px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            Alojamiento
                        </div>
                        <h2 class="text-xl md:text-xl font-bold text-slate-900 mb-4">Cabañas Disponibles</h2>
                        <p class="text-lg text-gray-600">Totalmente equipadas para tu comodidad</p>
                    </div>

                    <!-- Card de cabañas -->
                    <div class="bg-gradient-to-br from-white to-teal-50/50 border-2 border-teal-200 rounded-xl overflow-hidden shadow-xl">
                        <div class="grid md:grid-cols-2">

                            <!-- Imagen ilustrativa -->
                            <div class="relative h-64 md:h-auto bg-gradient-to-br from-teal-400 to-green-500 flex items-center justify-center p-12">
                                <svg class="w-32 h-32 text-white/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                            </div>

                            <!-- Contenido -->
                            <div class="p-8 md:p-10">
                                <h3 class="text-2xl font-bold text-slate-900 mb-6">Características</h3>

                                <div class="space-y-4">
                                    <div class="flex items-start gap-3">
                                        <div class="w-8 h-8 bg-teal-100 text-teal-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-bold text-slate-900">Vista al dique</p>
                                            <p class="text-sm text-gray-600">Vistas panorámicas al embalse</p>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-3">
                                        <div class="w-8 h-8 bg-teal-100 text-teal-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-bold text-slate-900">Accesibles</p>
                                            <p class="text-sm text-gray-600">Aptas para personas con discapacidad o dificultad física</p>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-3">
                                        <div class="w-8 h-8 bg-teal-100 text-teal-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-bold text-slate-900">Totalmente equipadas</p>
                                            <p class="text-sm text-gray-600">Con todo lo necesario para tu estadía</p>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-3">
                                        <div class="w-8 h-8 bg-teal-100 text-teal-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-bold text-slate-900">Capacidad para 6 personas</p>
                                            <p class="text-sm text-gray-600">Ideal para familias o grupos pequeños</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Badge destacado -->
                                <div class="mt-6 p-4 bg-teal-50 border border-teal-200 rounded-xl">
                                    <p class="text-sm text-teal-900 font-medium">💡 Consultá disponibilidad y precios contactándonos</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Tarifas -->
        <section class="py-16 md:py-20 bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Título -->
                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-green-100 text-green-700 px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Tarifas 2024
                        </div>
                        <h2 class="text-xl md:text-xl font-bold text-slate-900 mb-4">Precios y Tarifas</h2>
                        <p class="text-lg text-gray-600">Información actualizada sobre costos de acceso</p>
                    </div>

                    <!-- Tabla de tarifas -->
                    <div class="bg-white border-2 border-green-200 rounded-xl overflow-hidden shadow-xl">

                        <!-- Header de tabla -->
                        <div class="bg-gradient-to-r from-green-500 to-emerald-600 text-white p-6">
                            <div class="grid grid-cols-3 gap-4 font-bold text-center">
                                <div class="text-left">Categoría</div>
                                <div>Para pasar el día</div>
                                <div>Para acampar</div>
                            </div>
                        </div>

                        <!-- Filas de tabla -->
                        <div class="divide-y divide-gray-200">

                            <!-- Fila 1 -->
                            <div class="grid grid-cols-3 gap-4 p-5 hover:bg-green-50 transition-colors">
                                <div class="font-semibold text-slate-900">Estudiantes de la UNSL y Escuela Normal Juan Pascual Pringles</div>
                                <div class="text-center">
                                    <span class="inline-block bg-green-100 text-green-700 px-4 py-2 rounded-lg font-bold">
                                        <?php echo get_field('tarifa_estudiantes_dia') ?: '$XXX'; ?>
                                    </span>
                                </div>
                                <div class="text-center">
                                    <span class="inline-block bg-emerald-100 text-emerald-700 px-4 py-2 rounded-lg font-bold">
                                        <?php echo get_field('tarifa_estudiantes_acampar') ?: '$XXX'; ?>
                                    </span>
                                </div>
                            </div>

                            <!-- Fila 2 -->
                            <div class="grid grid-cols-3 gap-4 p-5 hover:bg-green-50 transition-colors">
                                <div class="font-semibold text-slate-900">Aportantes Código 77</div>
                                <div class="text-center">
                                    <span class="inline-block bg-green-100 text-green-700 px-4 py-2 rounded-lg font-bold">
                                        <?php echo get_field('tarifa_aportantes_dia') ?: '$XXX'; ?>
                                    </span>
                                </div>
                                <div class="text-center">
                                    <span class="inline-block bg-emerald-100 text-emerald-700 px-4 py-2 rounded-lg font-bold">
                                        <?php echo get_field('tarifa_aportantes_acampar') ?: '$XXX'; ?>
                                    </span>
                                </div>
                            </div>

                            <!-- Fila 3 -->
                            <div class="grid grid-cols-3 gap-4 p-5 hover:bg-green-50 transition-colors">
                                <div class="font-semibold text-slate-900">Invitados de Aportantes Código 77</div>
                                <div class="text-center">
                                    <span class="inline-block bg-green-100 text-green-700 px-4 py-2 rounded-lg font-bold">
                                        <?php echo get_field('tarifa_invitados_dia') ?: '$XXX'; ?>
                                    </span>
                                </div>
                                <div class="text-center">
                                    <span class="inline-block bg-emerald-100 text-emerald-700 px-4 py-2 rounded-lg font-bold">
                                        <?php echo get_field('tarifa_invitados_acampar') ?: '$XXX'; ?>
                                    </span>
                                </div>
                            </div>

                            <!-- Fila 4 -->
                            <div class="grid grid-cols-3 gap-4 p-5 hover:bg-green-50 transition-colors">
                                <div class="font-semibold text-slate-900">Personal Universitario</div>
                                <div class="text-center">
                                    <span class="inline-block bg-green-100 text-green-700 px-4 py-2 rounded-lg font-bold">
                                        <?php echo get_field('tarifa_personal_dia') ?: '$XXX'; ?>
                                    </span>
                                </div>
                                <div class="text-center">
                                    <span class="inline-block bg-emerald-100 text-emerald-700 px-4 py-2 rounded-lg font-bold">
                                        <?php echo get_field('tarifa_personal_acampar') ?: '$XXX'; ?>
                                    </span>
                                </div>
                            </div>

                            <!-- Fila 5 -->
                            <div class="grid grid-cols-3 gap-4 p-5 hover:bg-green-50 transition-colors">
                                <div class="font-semibold text-slate-900">Jubilados Aportantes código 77 durante 10 años consecutivos</div>
                                <div class="text-center">
                                    <span class="inline-block bg-green-100 text-green-700 px-4 py-2 rounded-lg font-bold">
                                        <?php echo get_field('tarifa_jubilados_dia') ?: '$XXX'; ?>
                                    </span>
                                </div>
                                <div class="text-center">
                                    <span class="inline-block bg-emerald-100 text-emerald-700 px-4 py-2 rounded-lg font-bold">
                                        <?php echo get_field('tarifa_jubilados_acampar') ?: '$XXX'; ?>
                                    </span>
                                </div>
                            </div>

                            <!-- Fila 6 -->
                            <div class="grid grid-cols-3 gap-4 p-5 hover:bg-green-50 transition-colors">
                                <div class="font-semibold text-slate-900">Personas con discapacidad</div>
                                <div class="text-center">
                                    <span class="inline-block bg-green-100 text-green-700 px-4 py-2 rounded-lg font-bold">
                                        <?php echo get_field('tarifa_discapacidad_dia') ?: 'GRATIS'; ?>
                                    </span>
                                </div>
                                <div class="text-center">
                                    <span class="inline-block bg-emerald-100 text-emerald-700 px-4 py-2 rounded-lg font-bold">
                                        <?php echo get_field('tarifa_discapacidad_acampar') ?: 'GRATIS'; ?>
                                    </span>
                                </div>
                            </div>

                            <!-- Fila 7 -->
                            <div class="grid grid-cols-3 gap-4 p-5 hover:bg-green-50 transition-colors">
                                <div class="font-semibold text-slate-900">Particulares</div>
                                <div class="text-center">
                                    <span class="inline-block bg-green-100 text-green-700 px-4 py-2 rounded-lg font-bold">
                                        <?php echo get_field('tarifa_particulares_dia') ?: '$XXX'; ?>
                                    </span>
                                </div>
                                <div class="text-center">
                                    <span class="inline-block bg-emerald-100 text-emerald-700 px-4 py-2 rounded-lg font-bold">
                                        <?php echo get_field('tarifa_particulares_acampar') ?: '$XXX'; ?>
                                    </span>
                                </div>
                            </div>

                            <!-- Fila 8 -->
                            <div class="grid grid-cols-3 gap-4 p-5 hover:bg-green-50 transition-colors">
                                <div class="font-semibold text-slate-900">Menores de 6 años</div>
                                <div class="text-center">
                                    <span class="inline-block bg-green-100 text-green-700 px-4 py-2 rounded-lg font-bold">
                                        <?php echo get_field('tarifa_menores_dia') ?: 'GRATIS'; ?>
                                    </span>
                                </div>
                                <div class="text-center">
                                    <span class="inline-block bg-emerald-100 text-emerald-700 px-4 py-2 rounded-lg font-bold">
                                        <?php echo get_field('tarifa_menores_acampar') ?: 'GRATIS'; ?>
                                    </span>
                                </div>
                            </div>

                            <!-- Fila 9 -->
                            <div class="grid grid-cols-3 gap-4 p-5 hover:bg-green-50 transition-colors">
                                <div class="font-semibold text-slate-900">Graduados de la UNSL</div>
                                <div class="text-center">
                                    <span class="inline-block bg-green-100 text-green-700 px-4 py-2 rounded-lg font-bold">
                                        <?php echo get_field('tarifa_graduados_dia') ?: '$XXX'; ?>
                                    </span>
                                </div>
                                <div class="text-center">
                                    <span class="inline-block bg-emerald-100 text-emerald-700 px-4 py-2 rounded-lg font-bold">
                                        <?php echo get_field('tarifa_graduados_acampar') ?: '$  '; ?>
                                    </span>
                                </div>
                            </div>

                            <!-- Fila 10 -->
                            <div class="grid grid-cols-3 gap-4 p-5 hover:bg-green-50 transition-colors">
                                <div class="font-semibold text-slate-900">Convenio UNCuyo</div>
                                <div class="text-center">
                                    <span class="inline-block bg-green-100 text-green-700 px-4 py-2 rounded-lg font-bold">
                                        <?php echo get_field('tarifa_uncuyo_dia') ?: '$XXX'; ?>
                                    </span>
                                </div>
                                <div class="text-center">
                                    <span class="inline-block bg-emerald-100 text-emerald-700 px-4 py-2 rounded-lg font-bold">
                                        <?php echo get_field('tarifa_uncuyo_acampar') ?: '$XXX'; ?>
                                    </span>
                                </div>
                            </div>

                            <!-- Fila 11 - Motor home / Casilla rodante -->
                            <div class="grid grid-cols-3 gap-4 p-5 bg-amber-50 border-t-2 border-amber-200">
                                <div class="font-semibold text-slate-900">Motor home, Casilla rodante (por día)</div>
                                <div class="col-span-2 text-center">
                                    <span class="inline-block bg-amber-100 text-amber-700 px-6 py-2 rounded-lg font-bold text-lg">
                                        <?php echo get_field('tarifa_motorhome') ?: '$XXX'; ?>
                                    </span>
                                </div>
                            </div>

                        </div>

                        <!-- Footer de tabla -->
                        <div class="bg-gray-50 p-6 border-t-2 border-gray-200">
                            <div class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <div>
                                    <p class="text-sm font-semibold text-slate-900 mb-1">Nota importante:</p>
                                    <p class="text-sm text-gray-600">Las tarifas están sujetas a cambios. Consultá disponibilidad y tarifas actualizadas al momento de tu visita.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- Noticias del Camping -->
        <section class="py-16 md:py-20">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Título -->
                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-green-100 text-green-700 px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                            </svg>
                            Novedades
                        </div>
                        <h2 class="text-xl md:text-xl font-bold text-slate-900 mb-4">Noticias del Camping</h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Mantente informado sobre las últimas novedades del Complejo La Florida</p>
                    </div>

                    <!-- Grid de noticias -->
                    <div class="grid md:grid-cols-3 gap-6">
                        <?php
                        $news_query = new WP_Query(array(
                            'post_type' => 'noticia',
                            'posts_per_page' => 3,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'departamento',
                                    'field' => 'slug',
                                    'terms' => 'camping', // Ajusta el slug según tu taxonomía
                                ),
                            ),
                        ));

                        if ($news_query->have_posts()) :
                            while ($news_query->have_posts()) : $news_query->the_post();
                        ?>
                                <article class="group bg-white border-2 border-gray-200 rounded-2xl overflow-hidden hover:border-green-400 hover:shadow-xl transition-all duration-300">

                                    <!-- Imagen -->
                                    <div class="relative h-48 overflow-hidden bg-gradient-to-br from-green-100 to-emerald-100">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-cover group-hover:scale-110 transition-transform duration-500')); ?>
                                        <?php else : ?>
                                            <div class="w-full h-full flex items-center justify-center">
                                                <svg class="w-16 h-16 text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                                </svg>
                                            </div>
                                        <?php endif; ?>

                                        <!-- Badge de categoría -->
                                        <div class="absolute top-3 left-3">
                                            <span class="inline-block bg-green-500 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg">
                                                Camping
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Contenido -->
                                    <div class="p-6">
                                        <p class="text-xs text-gray-500 mb-3 flex items-center gap-1">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                            <?php echo get_the_date('d/m/Y'); ?>
                                        </p>

                                        <h3 class="text-lg font-bold text-slate-900 mb-3 line-clamp-2 group-hover:text-green-600 transition-colors">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </h3>

                                        <p class="text-sm text-gray-600 line-clamp-3 mb-4 leading-relaxed">
                                            <?php echo wp_trim_words(get_the_excerpt(), 18); ?>
                                        </p>

                                        <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-1 text-green-600 font-semibold text-sm hover:gap-2 transition-all group/link">
                                            Leer más
                                            <svg class="w-4 h-4 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </article>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                            ?>
                            <div class="col-span-full">
                                <div class="bg-gradient-to-br from-green-50 to-emerald-50 border-2 border-green-200 rounded-2xl p-12 text-center">
                                    <div class="w-20 h-20 bg-green-100 text-green-400 rounded-full flex items-center justify-center mx-auto mb-4">
                                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">No hay noticias disponibles</h3>
                                    <p class="text-gray-600">Mantente atento a las próximas actualizaciones del Complejo La Florida</p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Botón ver todas las noticias -->
                    <?php if ($news_query->have_posts() && $news_query->found_posts > 3) : ?>
                        <div class="text-center mt-10">
                            <a href="<?php echo get_post_type_archive_link('noticia'); ?>" class="inline-flex items-center gap-2 bg-gradient-to-r from-green-500 to-emerald-500 text-white px-8 py-4 rounded-xl font-bold hover:from-green-600 hover:to-emerald-600 transition-all shadow-lg hover:shadow-xl">
                                Ver todas las noticias
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </section>

        <!-- CTA Final con mapa y contacto -->
        <section class="py-16 md:py-20 bg-gradient-to-br from-green-600 via-emerald-600 to-teal-700 relative overflow-hidden">
            <!-- Patrón decorativo -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;"></div>
            </div>

            <!-- Formas decorativas -->
            <div class="absolute top-10 right-10 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 left-10 w-80 h-80 bg-green-300/20 rounded-full blur-3xl"></div>

            <div class="container mx-auto px-4 relative">
                <div class="max-w-5xl mx-auto">

                    <!-- Contenido principal -->
                    <div class="text-center text-white mb-12">
                        <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-xl text-white px-4 py-2 rounded-full font-semibold mb-6 border border-white/30">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Planificá tu visita
                        </div>

                        <h2 class="text-xl md:text-2xl font-bold mb-4">
                            ¿Listo para disfrutar de La Florida?
                        </h2>
                        <p class="text-xl text-green-100 mb-8 mx-auto leading-relaxed">
                            Contactanos para reservas, consultas o más información sobre el complejo
                        </p>
                    </div>

                    <!-- Grid de información de contacto -->
                    <div class="grid md:grid-cols-2 gap-6 mb-10">

                        <!-- Ubicación -->
                        <div class="bg-white/10 backdrop-blur-xl border-2 border-white/20 rounded-2xl p-8">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-white mb-2">Ubicación</h3>
                                    <p class="text-green-100 leading-relaxed">
                                        Ruta Provincial Nº 39, La Florida<br>
                                        Departamento Pringles, San Luis
                                    </p>
                                    <p class="text-sm text-green-200 mt-2">
                                        A 7 km de El Trapiche<br>
                                        A 45 km de la Ciudad de San Luis
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Horarios -->
                        <div class="bg-white/10 backdrop-blur-xl border-2 border-white/20 rounded-2xl p-8">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-white mb-2">Horarios</h3>
                                    <p class="text-green-100 leading-relaxed">
                                        Temporada de verano:<br>
                                        <strong class="text-white">Abierto todos los días</strong>
                                    </p>
                                    <p class="text-sm text-green-200 mt-3">
                                        Consultá horarios y disponibilidad<br>
                                        para otras temporadas
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Botones de contacto -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center mb-10">
                        <a href="tel:XXXXXXXXXX" class="inline-flex items-center justify-center gap-3 bg-white text-green-600 px-8 py-4 rounded-xl font-bold hover:bg-green-50 shadow-2xl transition-all hover:scale-105">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            Llamar al Complejo
                        </a>

                        <a href="mailto:contacto@laflorida.unsl.edu.ar" class="inline-flex items-center justify-center gap-3 bg-white/10 backdrop-blur-xl text-white border-2 border-white/30 px-8 py-4 rounded-xl font-bold hover:bg-white/20 transition-all hover:scale-105">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            Enviar Email
                        </a>
                    </div>

                    <!-- Recomendaciones -->
                    <div class="bg-white/10 backdrop-blur-xl border-2 border-white/20 rounded-2xl p-8">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-yellow-400 text-yellow-900 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-white mb-3">Recomendaciones para tu visita</h3>
                                <ul class="text-green-100 space-y-2 leading-relaxed">
                                    <li class="flex items-start gap-2">
                                        <span class="text-white">✓</span>
                                        <span>Traé documentación que acredite tu categoría para acceder a las tarifas correspondientes</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="text-white">✓</span>
                                        <span>Respetá las normas de convivencia y cuidado del medio ambiente</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="text-white">✓</span>
                                        <span>Seguí las indicaciones del personal de guardavidas en las zonas de playa</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="text-white">✓</span>
                                        <span>Consultá disponibilidad de cabañas y sectores con anticipación en temporada alta</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Redes sociales y info adicional -->
                    <div class="mt-10 pt-8 border-t border-white/20 text-center">
                        <p class="text-green-100 mb-4">Seguinos en redes sociales para estar al tanto de novedades</p>
                        <div class="flex flex-wrap justify-center gap-4">
                            <a href="#" target="_blank" rel="noopener" class="inline-flex items-center gap-2 text-white hover:text-green-200 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                                Facebook
                            </a>

                            <span class="text-white/40">•</span>

                            <a href="#" target="_blank" rel="noopener" class="inline-flex items-center gap-2 text-white hover:text-green-200 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                                Instagram
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>