<?php

/**
 * Template Name: Centro de Salud Estudiantil
 */
get_header();
?>

<main class="bg-gradient-to-b from-white to-pink-50/30">

    <?php while (have_posts()) : the_post(); ?>

        <!-- Hero con gradiente rosa/morado -->
        <section
            class="relative py-16 md:py-24 bg-gradient-to-br from-pink-500 via-purple-600 to-indigo-700 overflow-hidden">
            <!-- Patrón decorativo -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute inset-0"
                    style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;">
                </div>
            </div>

            <!-- Formas decorativas -->
            <div class="absolute top-20 right-10 w-72 h-72 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 left-10 w-96 h-96 bg-purple-300/20 rounded-full blur-3xl"></div>

            <div class="container mx-auto px-4 relative">
                <div class="max-w-5xl mx-auto text-center">
                    <!-- Breadcrumb -->
                    <div class="mb-6">
                        <nav class="inline-flex items-center gap-2 text-sm text-pink-100">
                            <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors">Inicio</a>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                            <span class="text-white font-medium">Centro de Salud Estudiantil</span>
                        </nav>
                    </div>

                    <!-- Badge -->
                    <div class="inline-block mb-6">
                        <span
                            class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-xl text-white px-5 py-2.5 rounded-full text-sm font-semibold border border-white/20 shadow-lg">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                            Salud Estudiantil
                        </span>
                    </div>

                    <h1 class="text-2xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                        Centro de Salud<br>Estudiantil Universitaria
                    </h1>

                    <p class="text-xl text-pink-100 max-w-3xl mx-auto leading-relaxed">
                        Atención primaria de la salud para estudiantes de la UNSL sin cobertura médica o con obra social que
                        no tenga cobertura en San Luis
                    </p>
                </div>
            </div>
        </section>

        <!-- Sedes -->
        <section class="py-16 md:py-20">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Título -->
                    <div class="text-center mb-12">
                        <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Nuestras Sedes</h2>
                        <p class="text-lg text-gray-600 max-w-2xl mx-auto">Contamos con dos sedes para brindarte atención de
                            calidad</p>
                    </div>

                    <!-- Grid de sedes -->
                    <div class="grid md:grid-cols-2 gap-8 mb-16">

                        <!-- Sede San Luis -->
                        <div
                            class="group bg-gradient-to-br from-white to-pink-50/50 border-2 border-pink-200 rounded-xl p-8 md:p-10 hover:shadow-2xl hover:border-pink-400 transition-all duration-500">

                            <!-- Header -->
                            <div class="flex items-center gap-4 mb-6">
                                <div
                                    class="w-16 h-16 bg-gradient-to-br from-pink-500 to-pink-600 text-white rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-slate-900">Sede San Luis</h3>
                                    <p class="text-pink-600 font-medium">Centro Principal</p>
                                </div>
                            </div>

                            <!-- Dirección -->
                            <div class="mb-6">
                                <div class="flex items-start gap-3 p-4 bg-white rounded-xl border border-pink-100">
                                    <svg class="w-5 h-5 text-pink-600 flex-shrink-0 mt-0.5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <div>
                                        <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide mb-1">
                                            Dirección</p>
                                        <p class="text-base font-bold text-slate-900">Rivadavia 1359</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Horarios -->
                            <div class="mb-6">
                                <div class="flex items-start gap-3 p-4 bg-white rounded-xl border border-pink-100">
                                    <svg class="w-5 h-5 text-pink-600 flex-shrink-0 mt-0.5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <div>
                                        <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide mb-1">Horario
                                            de atención</p>
                                        <p class="text-base font-bold text-slate-900">Lunes a viernes de 9 a 13 hs</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Contacto -->
                            <div class="space-y-3">
                                <a href="tel:2664520322"
                                    class="flex items-center gap-3 p-4 bg-pink-500 text-white rounded-xl hover:bg-pink-600 transition-colors group/link">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg>
                                    <div class="flex-1">
                                        <p class="text-xs text-pink-100 mb-0.5">Teléfono</p>
                                        <p class="font-bold">2664520322 - Interno 8820</p>
                                    </div>
                                    <svg class="w-5 h-5 group-hover/link:translate-x-1 transition-transform" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>

                                <a href="mailto:centrodesaludunsl@gmail.com"
                                    class="flex items-center gap-3 p-4 bg-white border-2 border-pink-200 text-slate-900 rounded-xl hover:bg-pink-50 hover:border-pink-400 transition-colors group/link">
                                    <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    <div class="flex-1">
                                        <p class="text-xs text-gray-500 mb-0.5">Email</p>
                                        <p class="font-bold text-sm break-all">centrodesaludunsl@gmail.com</p>
                                    </div>
                                </a>

                                <div class="flex gap-3">
                                    <a href="https://instagram.com/ceseu.unsl" target="_blank" rel="noopener"
                                        class="flex-1 flex items-center justify-center gap-2 p-3 bg-gradient-to-r from-purple-500 to-pink-500 text-white rounded-xl hover:from-purple-600 hover:to-pink-600 transition-all font-semibold text-sm">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                        </svg>
                                        Instagram
                                    </a>
                                    <a href="https://facebook.com/ceseu.unsl" target="_blank" rel="noopener"
                                        class="flex-1 flex items-center justify-center gap-2 p-3 bg-blue-600 text-white rounded-xl hover:bg-blue-700 transition-all font-semibold text-sm">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                        </svg>
                                        Facebook
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Sede Villa Mercedes -->
                        <div
                            class="group bg-gradient-to-br from-white to-purple-50/50 border-2 border-purple-200 rounded-xl p-8 md:p-10 hover:shadow-2xl hover:border-purple-400 transition-all duration-500">

                            <!-- Header -->
                            <div class="flex items-center gap-4 mb-6">
                                <div
                                    class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 text-white rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-slate-900">Sede Villa Mercedes</h3>
                                    <p class="text-purple-600 font-medium">Centro Regional</p>
                                </div>
                            </div>

                            <!-- Dirección -->
                            <div class="mb-6">
                                <div class="flex items-start gap-3 p-4 bg-white rounded-xl border border-purple-100">
                                    <svg class="w-5 h-5 text-purple-600 flex-shrink-0 mt-0.5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <div>
                                        <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide mb-1">
                                            Dirección</p>
                                        <p class="text-base font-bold text-slate-900">Junín 269 (entre 25 de Mayo y
                                            Almafuerte)</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Horarios -->
                            <div class="mb-6">
                                <div class="flex items-start gap-3 p-4 bg-white rounded-xl border border-purple-100">
                                    <svg class="w-5 h-5 text-purple-600 flex-shrink-0 mt-0.5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <div>
                                        <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide mb-1">Horario
                                            de atención</p>
                                        <p class="text-base font-bold text-slate-900">Lunes a viernes de 8 a 13 hs</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Contacto -->
                            <div class="space-y-3">
                                <a href="tel:2657531030"
                                    class="flex items-center gap-3 p-4 bg-purple-500 text-white rounded-xl hover:bg-purple-600 transition-colors group/link">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg>
                                    <div class="flex-1">
                                        <p class="text-xs text-purple-100 mb-0.5">Teléfono</p>
                                        <p class="font-bold">2657531030</p>
                                    </div>
                                    <svg class="w-5 h-5 group-hover/link:translate-x-1 transition-transform" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>

                                <a href="mailto:cuseunsl@gmail.com"
                                    class="flex items-center gap-3 p-4 bg-white border-2 border-purple-200 text-slate-900 rounded-xl hover:bg-purple-50 hover:border-purple-400 transition-colors group/link">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    <div class="flex-1">
                                        <p class="text-xs text-gray-500 mb-0.5">Email</p>
                                        <p class="font-bold text-sm">cuseunsl@gmail.com</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- Servicios / Inscripciones -->
        <section class="py-16 bg-gradient-to-br from-purple-50 to-pink-50">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Título -->
                    <div class="text-center mb-12">
                        <div
                            class="inline-flex items-center gap-2 bg-purple-100 text-purple-700 px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Inscripciones
                        </div>
                        <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Cómo Registrarse</h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Las/os estudiantes regulares de la UNSL deben
                            enviar la siguiente documentación en PDF</p>
                    </div>

                    <!-- Card de inscripción -->
                    <div class="bg-white border-2 border-purple-200 rounded-xl p-8 md:p-12 shadow-xl">

                        <!-- Requisitos -->
                        <div class="mb-10">
                            <h3 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-3">
                                <div
                                    class="w-10 h-10 bg-purple-100 text-purple-600 rounded-xl flex items-center justify-center">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                        </path>
                                    </svg>
                                </div>
                                Documentación requerida
                            </h3>

                            <div class="grid md:grid-cols-2 gap-4">
                                <div class="flex items-start gap-3 p-4 bg-purple-50 rounded-xl">
                                    <svg class="w-5 h-5 text-purple-600 flex-shrink-0 mt-0.5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <div>
                                        <p class="font-bold text-slate-900">DNI</p>
                                        <p class="text-sm text-gray-600">Frente y dorso en PDF</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-4 bg-purple-50 rounded-xl">
                                    <svg class="w-5 h-5 text-purple-600 flex-shrink-0 mt-0.5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <div>
                                        <p class="font-bold text-slate-900">Certificado de alumno regular</p>
                                        <p class="text-sm text-gray-600">Vigente</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-4 bg-purple-50 rounded-xl">
                                    <svg class="w-5 h-5 text-purple-600 flex-shrink-0 mt-0.5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <div>
                                        <p class="font-bold text-slate-900">Certificación negativa ANSES</p>
                                        <p class="text-sm text-gray-600">Solo si no tenés obra social</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-4 bg-purple-50 rounded-xl">
                                    <svg class="w-5 h-5 text-purple-600 flex-shrink-0 mt-0.5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <div>
                                        <p class="font-bold text-slate-900">Número de celular</p>
                                        <p class="text-sm text-gray-600">Para contacto</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Botones de envío -->
                        <div class="grid md:grid-cols-2 gap-6">
                            <a href="mailto:centrodesaludunsl@gmail.com"
                                class="group flex items-center gap-4 p-6 bg-gradient-to-r from-pink-500 to-pink-600 text-white rounded-2xl hover:from-pink-600 hover:to-pink-700 transition-all shadow-lg hover:shadow-xl">
                                <div
                                    class="w-14 h-14 bg-white/20 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm text-pink-100 mb-1">Enviar a San Luis</p>
                                    <p class="font-bold text-lg">centrodesaludunsl@gmail.com</p>
                                </div>
                                <svg class="w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>

                            <a href="mailto:cuseunsl@gmail.com"
                                class="group flex items-center gap-4 p-6 bg-gradient-to-r from-purple-500 to-purple-600 text-white rounded-2xl hover:from-purple-600 hover:to-purple-700 transition-all shadow-lg hover:shadow-xl">
                                <div
                                    class="w-14 h-14 bg-white/20 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm text-purple-100 mb-1">Enviar a Villa Mercedes</p>
                                    <p class="font-bold text-lg">cuseunsl@gmail.com</p>
                                </div>
                                <svg class="w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- Certificados y Servicios -->
        <section class="py-16 md:py-20">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Título -->
                    <div class="text-center mb-12">
                        <div
                            class="inline-flex items-center gap-2 bg-pink-100 text-pink-700 px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                </path>
                            </svg>
                            Servicios
                        </div>
                        <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Certificados y Turnos</h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Información importante sobre certificados y cómo
                            solicitar turnos</p>
                    </div>

                    <!-- Grid de servicios -->
                    <div class="space-y-8">

                        <!-- Certificado de Salud - Ingreso -->
                        <div
                            class="bg-gradient-to-br from-white to-pink-50/50 border-2 border-pink-200 rounded-xl p-8 md:p-10 hover:shadow-xl transition-all">
                            <div class="flex items-start gap-5 mb-6">
                                <div
                                    class="w-16 h-16 bg-gradient-to-br from-pink-500 to-pink-600 text-white rounded-2xl flex items-center justify-center shadow-lg flex-shrink-0">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-2xl font-bold text-slate-900 mb-3">Certificado de Salud - Ingreso</h3>
                                    <p class="text-gray-600 mb-6">Requisitos según tu cobertura médica</p>

                                    <div class="grid md:grid-cols-2 gap-6">
                                        <!-- Con obra social -->
                                        <div class="bg-white border-2 border-pink-100 rounded-xl p-6">
                                            <div class="flex items-center gap-2 mb-3">
                                                <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                <h4 class="font-bold text-slate-900">Con obra social</h4>
                                            </div>
                                            <p class="text-sm text-gray-600">Podés ir a tu médico y solicitar la orden de
                                                análisis directamente.</p>
                                        </div>

                                        <!-- Sin cobertura -->
                                        <div class="bg-white border-2 border-pink-100 rounded-xl p-6">
                                            <div class="flex items-center gap-2 mb-3">
                                                <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                                    </path>
                                                </svg>
                                                <h4 class="font-bold text-slate-900">Sin cobertura médica</h4>
                                            </div>
                                            <p class="text-sm text-gray-600">Podés solicitar la orden en los Centros de
                                                Salud Estudiantil.</p>
                                        </div>
                                    </div>

                                    <!-- Nota importante -->
                                    <div class="mt-6 p-5 bg-pink-50 border border-pink-200 rounded-xl">
                                        <div class="flex items-start gap-3">
                                            <svg class="w-5 h-5 text-pink-600 flex-shrink-0 mt-0.5" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <div class="flex-1">
                                                <p class="text-sm font-semibold text-slate-900 mb-2">Importante:</p>
                                                <ul class="text-sm text-gray-700 space-y-1">
                                                    <li>• Los análisis se realizan en una entidad pública o privada (no en
                                                        los centros UNSL)</li>
                                                    <li>• Enviá los resultados y el calendario de vacunación a
                                                        <strong>ceseucertificados@gmail.com</strong> (San Luis) o
                                                        <strong>cuseunsl@gmail.com</strong> (Villa Mercedes)
                                                    </li>
                                                    <li>• Completá el formulario: <a
                                                            href="https://forms.gle/dMUhyxNZgBmgbnvy8" target="_blank"
                                                            class="text-pink-600 hover:text-pink-700 font-semibold underline">forms.gle/dMUhyxNZgBmgbnvy8</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Certificado Comedor sin TACC -->
                        <div
                            class="bg-gradient-to-br from-white to-purple-50/50 border-2 border-purple-200 rounded-xl p-8 md:p-10 hover:shadow-xl transition-all">
                            <div class="flex items-start gap-5">
                                <div
                                    class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 text-white rounded-2xl flex items-center justify-center shadow-lg flex-shrink-0">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-2xl font-bold text-slate-900 mb-3">Certificado para Comedor sin TACC
                                    </h3>
                                    <p class="text-gray-600 mb-4">Para estudiantes celíacos que requieran menú especial</p>
                                    <div class="flex items-start gap-3 p-5 bg-white border border-purple-200 rounded-xl">
                                        <svg class="w-5 h-5 text-purple-600 flex-shrink-0 mt-0.5" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                        <div>
                                            <p class="font-bold text-slate-900 mb-1">Cómo solicitar:</p>
                                            <p class="text-sm text-gray-600">Solicitar turno por teléfono de lunes a viernes
                                                de 9 a 13 hs. Asistir a la consulta con estudio/s de diagnóstico.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Programa REMEDIAR -->
                        <div
                            class="bg-gradient-to-br from-white to-green-50/50 border-2 border-green-200 rounded-xl p-8 md:p-10 hover:shadow-xl transition-all">
                            <div class="flex items-start gap-5">
                                <div
                                    class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 text-white rounded-2xl flex items-center justify-center shadow-lg flex-shrink-0">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-2xl font-bold text-slate-900 mb-3">Programa REMEDIAR</h3>
                                    <p class="text-gray-600 mb-4">Medicamentos gratuitos para estudiantes</p>
                                    <div class="flex items-start gap-3 p-5 bg-white border border-green-200 rounded-xl">
                                        <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div>
                                            <p class="text-sm text-gray-700">Los medicamentos recetados que estén en stock
                                                en nuestras sedes <strong>pueden ser entregados de forma gratuita</strong>
                                                en horarios de atención (ambas sedes: San Luis y Villa Mercedes).</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- Turnos por Especialidad -->
        <section class="py-16 bg-gradient-to-br from-purple-50 via-pink-50 to-white">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Título -->
                    <div class="text-center mb-12">
                        <div
                            class="inline-flex items-center gap-2 bg-purple-100 text-purple-700 px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            Especialidades
                        </div>
                        <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Solicitar Turnos</h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Asistir a los centros de salud con turno
                            programado según protocolos COVID-19</p>
                    </div>

                    <!-- Grid por sede -->
                    <div class="grid md:grid-cols-2 gap-8">

                        <!-- Turnos San Luis -->
                        <div class="bg-white border-2 border-pink-200 rounded-xl p-8 shadow-lg">
                            <div class="flex items-center gap-3 mb-6">
                                <div
                                    class="w-12 h-12 bg-pink-100 text-pink-600 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-slate-900">Sede San Luis</h3>
                                    <p class="text-sm text-pink-600 font-medium">Lunes a viernes de 9 a 13 hs</p>
                                </div>
                            </div>

                            <div class="space-y-3">
                                <div class="flex items-center gap-3 p-4 bg-pink-50 rounded-xl border border-pink-100">
                                    <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-slate-900 font-medium">Kinesiología y Fisiatría</span>
                                </div>

                                <div class="flex items-center gap-3 p-4 bg-pink-50 rounded-xl border border-pink-100">
                                    <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-slate-900 font-medium">Nutrición</span>
                                </div>

                                <div class="flex items-center gap-3 p-4 bg-pink-50 rounded-xl border border-pink-100">
                                    <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-slate-900 font-medium">Clínica Médica</span>
                                </div>

                                <div class="flex items-center gap-3 p-4 bg-pink-50 rounded-xl border border-pink-100">
                                    <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-slate-900 font-medium">Odontología</span>
                                </div>

                                <div class="flex items-center gap-3 p-4 bg-pink-50 rounded-xl border border-pink-100">
                                    <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-slate-900 font-medium">Oftalmología</span>
                                </div>

                                <div class="flex items-center gap-3 p-4 bg-pink-50 rounded-xl border border-pink-100">
                                    <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-slate-900 font-medium">Psicología</span>
                                </div>
                            </div>

                            <a href="tel:2664520322"
                                class="mt-6 flex items-center justify-center gap-2 bg-gradient-to-r from-pink-500 to-pink-600 text-white px-6 py-4 rounded-xl font-bold hover:from-pink-600 hover:to-pink-700 transition-all shadow-lg hover:shadow-xl">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                                Solicitar Turno
                            </a>
                        </div>

                        <!-- Turnos Villa Mercedes -->
                        <div class="bg-white border-2 border-purple-200 rounded-xl p-8 shadow-lg">
                            <div class="flex items-center gap-3 mb-6">
                                <div
                                    class="w-12 h-12 bg-purple-100 text-purple-600 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-slate-900">Sede Villa Mercedes</h3>
                                    <p class="text-sm text-purple-600 font-medium">Lunes a viernes de 8 a 13 hs</p>
                                </div>
                            </div>

                            <div class="space-y-3">
                                <div class="flex items-center gap-3 p-4 bg-purple-50 rounded-xl border border-purple-100">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-slate-900 font-medium">Odontología</span>
                                </div>

                                <div class="flex items-center gap-3 p-4 bg-purple-50 rounded-xl border border-purple-100">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-slate-900 font-medium">Psicología</span>
                                </div>

                                <div class="flex items-center gap-3 p-4 bg-purple-50 rounded-xl border border-purple-100">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-slate-900 font-medium">Nutrición</span>
                                </div>

                                <div class="flex items-center gap-3 p-4 bg-purple-50 rounded-xl border border-purple-100">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-slate-900 font-medium">Clínica Médica</span>
                                </div>

                                <div class="flex items-center gap-3 p-4 bg-purple-50 rounded-xl border border-purple-100">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-slate-900 font-medium">Ginecología</span>
                                </div>
                            </div>

                            <a href="tel:2657531030"
                                class="mt-6 flex items-center justify-center gap-2 bg-gradient-to-r from-purple-500 to-purple-600 text-white px-6 py-4 rounded-xl font-bold hover:from-purple-600 hover:to-purple-700 transition-all shadow-lg hover:shadow-xl">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                                Solicitar Turno
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- Noticias Relacionadas -->
        <section class="py-16 md:py-20">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Título -->
                    <div class="text-center mb-12">
                        <div
                            class="inline-flex items-center gap-2 bg-pink-100 text-pink-700 px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z">
                                </path>
                            </svg>
                            Novedades
                        </div>
                        <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Últimas Noticias</h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Mantente informado sobre novedades del Centro de
                            Salud</p>
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
                                    'terms' => 'ceseu', // Ajusta el slug según tu taxonomía
                                ),
                            ),
                        ));

                        if ($news_query->have_posts()) :
                            while ($news_query->have_posts()) : $news_query->the_post();
                        ?>
                                <article
                                    class="group bg-white border-2 border-gray-200 rounded-2xl overflow-hidden hover:border-pink-400 hover:shadow-xl transition-all duration-300">

                                    <!-- Imagen -->
                                    <div class="relative h-48 overflow-hidden bg-gradient-to-br from-pink-100 to-purple-100">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-cover group-hover:scale-110 transition-transform duration-500')); ?>
                                        <?php else : ?>
                                            <div class="w-full h-full flex items-center justify-center">
                                                <svg class="w-16 h-16 text-pink-300" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                    </path>
                                                </svg>
                                            </div>
                                        <?php endif; ?>

                                        <!-- Badge de categoría -->
                                        <div class="absolute top-3 left-3">
                                            <span
                                                class="inline-block bg-pink-500 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg">
                                                Salud
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Contenido -->
                                    <div class="p-6">
                                        <p class="text-xs text-gray-500 mb-3 flex items-center gap-1">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                </path>
                                            </svg>
                                            <?php echo get_the_date('d/m/Y'); ?>
                                        </p>

                                        <h3
                                            class="text-lg font-bold text-slate-900 mb-3 line-clamp-2 group-hover:text-pink-600 transition-colors">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </h3>

                                        <p class="text-sm text-gray-600 line-clamp-3 mb-4 leading-relaxed">
                                            <?php echo wp_trim_words(get_the_excerpt(), 18); ?>
                                        </p>

                                        <a href="<?php the_permalink(); ?>"
                                            class="inline-flex items-center gap-1 text-pink-600 font-semibold text-sm hover:gap-2 transition-all group/link">
                                            Leer más
                                            <svg class="w-4 h-4 group-hover/link:translate-x-1 transition-transform" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
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
                                <div
                                    class="bg-gradient-to-br from-pink-50 to-purple-50 border-2 border-pink-200 rounded-2xl p-12 text-center">
                                    <div
                                        class="w-20 h-20 bg-pink-100 text-pink-400 rounded-full flex items-center justify-center mx-auto mb-4">
                                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z">
                                            </path>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">No hay noticias disponibles</h3>
                                    <p class="text-gray-600">Mantente atento a las próximas actualizaciones del Centro de Salud
                                    </p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Botón ver todas las noticias -->
                    <?php if ($news_query->have_posts() && $news_query->found_posts > 3) : ?>
                        <div class="text-center mt-10">
                            <a href="<?php echo get_post_type_archive_link('noticia'); ?>"
                                class="inline-flex items-center gap-2 bg-gradient-to-r from-pink-500 to-purple-500 text-white px-8 py-4 rounded-xl font-bold hover:from-pink-600 hover:to-purple-600 transition-all shadow-lg hover:shadow-xl">
                                Ver todas las noticias
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </section>

        <!-- CTA Final con protocolos COVID -->
        <section
            class="py-16 md:py-20 bg-gradient-to-br from-pink-500 via-purple-600 to-indigo-700 relative overflow-hidden">
            <!-- Patrón decorativo -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute inset-0"
                    style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;">
                </div>
            </div>

            <!-- Formas decorativas -->
            <div class="absolute top-10 right-10 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 left-10 w-80 h-80 bg-pink-300/20 rounded-full blur-3xl"></div>

            <div class="container mx-auto px-4 relative">
                <div class="max-w-4xl mx-auto">

                    <!-- Alerta COVID -->
                    <div class="bg-white/10 backdrop-blur-xl border-2 border-white/20 rounded-2xl p-8 mb-10">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 bg-yellow-400 text-yellow-900 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-white mb-2">Protocolo COVID-19</h3>
                                <p class="text-pink-100 leading-relaxed">
                                    Debido a los protocolos por pandemia COVID-19 solicitamos que <strong
                                        class="text-white">asistan a los centros de salud con turno programado</strong>.
                                    Esto nos permite brindar una mejor atención y garantizar la seguridad de todos.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Principal -->
                    <div class="text-center text-white">
                        <div
                            class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-xl text-white px-4 py-2 rounded-full font-semibold mb-6 border border-white/30">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            ¿Necesitás más información?
                        </div>

                        <h2 class="text-xl md:text-2xl font-bold mb-4">
                            Estamos para cuidar tu salud
                        </h2>
                        <p class="text-xl text-pink-100 mb-8 max-w-2xl mx-auto leading-relaxed">
                            Contactanos para solicitar turnos, información sobre servicios o cualquier consulta sobre tu
                            salud
                        </p>

                        <!-- Botones de contacto -->
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="tel:2664520322"
                                class="inline-flex items-center justify-center gap-3 bg-white text-pink-600 px-8 py-4 rounded-xl font-bold hover:bg-pink-50 shadow-2xl transition-all hover:scale-105">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                                Llamar a San Luis
                            </a>

                            <a href="tel:2657531030"
                                class="inline-flex items-center justify-center gap-3 bg-white/10 backdrop-blur-xl text-white border-2 border-white/30 px-8 py-4 rounded-xl font-bold hover:bg-white/20 transition-all hover:scale-105">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                                Llamar a Villa Mercedes
                            </a>
                        </div>

                        <!-- Enlaces adicionales -->
                        <div class="mt-10 pt-8 border-t border-white/20">
                            <p class="text-pink-100 mb-4">También podés escribirnos por email o seguirnos en redes sociales
                            </p>
                            <div class="flex flex-wrap justify-center gap-4">
                                <a href="mailto:centrodesaludunsl@gmail.com"
                                    class="inline-flex items-center gap-2 text-white hover:text-pink-200 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    Email San Luis
                                </a>

                                <span class="text-white/40">•</span>

                                <a href="mailto:cuseunsl@gmail.com"
                                    class="inline-flex items-center gap-2 text-white hover:text-pink-200 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    Email Villa Mercedes
                                </a>

                                <span class="text-white/40">•</span>

                                <a href="https://instagram.com/ceseu.unsl" target="_blank" rel="noopener"
                                    class="inline-flex items-center gap-2 text-white hover:text-pink-200 transition-colors">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                    </svg>
                                    @ceseu.unsl
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>