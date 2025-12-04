<?php

/**
 * Template Name: Becas y Residencia Universitaria
 */
get_header();
?>

<main class="bg-gradient-to-b from-white to-blue-50/30">

    <?php while (have_posts()) : the_post(); ?>

        <!-- Hero con gradiente azul -->
        <section class="relative py-16 md:py-24 bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 overflow-hidden">
            <!-- Patrón decorativo -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;"></div>
            </div>

            <!-- Formas decorativas -->
            <div class="absolute top-20 right-10 w-72 h-72 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 left-10 w-96 h-96 bg-blue-300/20 rounded-full blur-3xl"></div>

            <div class="container mx-auto px-4 relative">
                <div class="max-w-5xl mx-auto text-center">
                    <!-- Breadcrumb -->
                    <div class="mb-6">
                        <nav class="inline-flex items-center gap-2 text-sm text-blue-100">
                            <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors">Inicio</a>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            <span class="text-white font-medium">Becas</span>
                        </nav>
                    </div>

                    <!-- Badge -->
                    <div class="inline-block mb-6">
                        <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-xl text-white px-5 py-2.5 rounded-full text-sm font-semibold border border-white/20 shadow-lg">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            Apoyo Estudiantil
                        </span>
                    </div>

                    <h1 class="text-2xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                        Departamento de Trabajo Social
                    </h1>

                    <p class="text-xl text-blue-100 max-w-3xl mx-auto leading-relaxed mb-8">
                        Accedé a beneficios económicos y alojamiento universitario para acompañar tu trayectoria académica
                    </p>

                    <!-- Stats rápidas -->
                    <!--div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-3xl mx-auto">
                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-xl p-4">
                            <div class="text-xl font-bold text-white mb-1">40</div>
                            <div class="text-xs text-blue-100">Módulos disponibles</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-xl p-4">
                            <div class="text-xl font-bold text-white mb-1">36</div>
                            <div class="text-xs text-blue-100">Estudiantes alojados</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-xl p-4">
                            <div class="text-xl font-bold text-white mb-1">2</div>
                            <div class="text-xs text-blue-100">Convocatorias anuales</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-xl p-4">
                            <div class="text-xl font-bold text-white mb-1">12</div>
                            <div class="text-xs text-blue-100">Cuotas mensuales</div>
                        </div>
                    </div-->
                </div>
            </div>
        </section>

        <!-- Circuito de Becas -->
        <section class="py-16 md:py-20">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Título -->
                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-blue-100 text-blue-700 px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                            </svg>
                            Proceso
                        </div>
                        <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Circuito de Becas</h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Conocé el proceso completo desde el asesoramiento hasta la adjudicación</p>
                    </div>

                    <!-- Timeline del proceso -->
                    <div class="relative">
                        <!-- Línea vertical -->
                        <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-gradient-to-b from-blue-200 via-indigo-200 to-purple-200 hidden md:block"></div>

                        <!-- Pasos -->
                        <div class="space-y-8">

                            <!-- Paso 1 -->
                            <div class="relative flex gap-6">
                                <div class="flex-shrink-0">
                                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 text-white rounded-2xl flex items-center justify-center shadow-lg font-bold text-xl relative z-10">
                                        1
                                    </div>
                                </div>
                                <div class="flex-1 bg-white border-2 border-blue-200 rounded-2xl p-6 md:p-8 hover:shadow-xl transition-all">
                                    <h3 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2">
                                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        Asesoramiento
                                    </h3>
                                    <p class="text-gray-700 leading-relaxed">
                                        En la Promoción de Carreras, brindamos información sobre las becas que otorga la Universidad, como así también los beneficios que ofrece el <strong>Ministerio de Educación de la Nación</strong> a través del <strong>Programa Nacional de Becas Progresar</strong>.
                                    </p>
                                </div>
                            </div>

                            <!-- Paso 2 -->
                            <div class="relative flex gap-6">
                                <div class="flex-shrink-0">
                                    <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-indigo-600 text-white rounded-2xl flex items-center justify-center shadow-lg font-bold text-xl relative z-10">
                                        2
                                    </div>
                                </div>
                                <div class="flex-1 bg-white border-2 border-indigo-200 rounded-2xl p-6 md:p-8 hover:shadow-xl transition-all">
                                    <h3 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2">
                                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                        Apertura de Convocatoria
                                    </h3>
                                    <p class="text-gray-700 leading-relaxed">
                                        Apertura de convocatoria a becas por <strong>sistema informático</strong> (tarea coordinada con el Departamento de Becas).
                                    </p>
                                </div>
                            </div>

                            <!-- Paso 3 -->
                            <div class="relative flex gap-6">
                                <div class="flex-shrink-0">
                                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 text-white rounded-2xl flex items-center justify-center shadow-lg font-bold text-xl relative z-10">
                                        3
                                    </div>
                                </div>
                                <div class="flex-1 bg-white border-2 border-purple-200 rounded-2xl p-6 md:p-8 hover:shadow-xl transition-all">
                                    <h3 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2">
                                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                        </svg>
                                        Entrevistas
                                    </h3>
                                    <p class="text-gray-700 leading-relaxed">
                                        Realización de entrevistas a cada uno/a de los/as estudiantes preseleccionados/as para evaluar su situación particular.
                                    </p>
                                </div>
                            </div>

                            <!-- Paso 4 -->
                            <div class="relative flex gap-6">
                                <div class="flex-shrink-0">
                                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 text-white rounded-2xl flex items-center justify-center shadow-lg font-bold text-xl relative z-10">
                                        4
                                    </div>
                                </div>
                                <div class="flex-1 bg-white border-2 border-green-200 rounded-2xl p-6 md:p-8 hover:shadow-xl transition-all">
                                    <h3 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2">
                                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                        </svg>
                                        Adjudicación
                                    </h3>
                                    <p class="text-gray-700 leading-relaxed">
                                        Adjudicación de las becas a través de la <strong>Comisión de Becas y Residencias</strong> (órgano evaluador y ejecutor de las directivas de la Secretaría - SAEBU).
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Info adicional -->
                    <div class="mt-12 bg-gradient-to-br from-blue-50 to-indigo-50 border-2 border-blue-200 rounded-2xl p-8">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-500 text-white rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-slate-900 mb-2">Comisión de Becas y Residencias</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    El Departamento forma parte de esta comisión, que actúa como órgano evaluador y ejecutor de las directivas de la Secretaría (SAEBU).
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Residencia Universitaria -->
        <section class="py-16 md:py-20 bg-gradient-to-br from-indigo-50 to-purple-50">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Título -->
                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-indigo-100 text-indigo-700 px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            Alojamiento
                        </div>
                        <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Residencia Universitaria</h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Un espacio de convivencia y apoyo para estudiantes</p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8">

                        <!-- Objetivo -->
                        <div class="bg-white border-2 border-indigo-200 rounded-xl p-8 shadow-lg">
                            <div class="flex items-start gap-4 mb-6">
                                <div class="w-14 h-14 bg-gradient-to-br from-indigo-500 to-indigo-600 text-white rounded-xl flex items-center justify-center shadow-lg flex-shrink-0">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-slate-900 mb-2">Objetivo Principal</h3>
                                    <p class="text-sm text-indigo-600 font-medium">Nuestro compromiso</p>
                                </div>
                            </div>

                            <p class="text-gray-700 leading-relaxed mb-6">
                                Atender cada una de las necesidades de los/as estudiantes en lo referido a la <strong>convivencia entre pares</strong>, como también coordinar entre ellos y las autoridades correspondientes las demandas que emergen en cuestiones de <strong>infraestructura</strong>, y que impliquen un obstáculo en su cotidianidad.
                            </p>

                            <!-- Estadísticas -->
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-indigo-50 border border-indigo-200 rounded-xl p-4 text-center">
                                    <div class="text-xl font-bold text-indigo-600 mb-1">40</div>
                                    <div class="text-xs text-gray-600">Módulos disponibles</div>
                                </div>
                                <div class="bg-indigo-50 border border-indigo-200 rounded-xl p-4 text-center">
                                    <div class="text-xl font-bold text-indigo-600 mb-1">36</div>
                                    <div class="text-xs text-gray-600">Estudiantes actualmente</div>
                                </div>
                            </div>
                        </div>

                        <!-- Ubicación e info -->
                        <div class="bg-white border-2 border-indigo-200 rounded-xl p-8 shadow-lg">
                            <div class="flex items-start gap-4 mb-6">
                                <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-600 text-white rounded-xl flex items-center justify-center shadow-lg flex-shrink-0">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-slate-900 mb-2">Ubicación</h3>
                                    <p class="text-sm text-purple-600 font-medium">San Luis Capital</p>
                                </div>
                            </div>

                            <div class="bg-gradient-to-br from-purple-50 to-indigo-50 border border-purple-200 rounded-xl p-6 mb-6">
                                <p class="text-gray-800 font-semibold mb-2 flex items-center gap-2">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    Dirección
                                </p>
                                <p class="text-gray-700 text-lg">
                                    Calle <strong>Justo Daract Nº 1661</strong><br>
                                    San Luis, Capital
                                </p>
                            </div>

                            <div class="space-y-4">
                                <div class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-purple-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <p class="text-sm text-gray-700">
                                        <strong>40 módulos</strong> divididos en sector varones y mujeres
                                    </p>
                                </div>
                                <div class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-purple-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <p class="text-sm text-gray-700">
                                        <strong>36 estudiantes</strong> usufructúan actualmente este beneficio
                                    </p>
                                </div>
                                <div class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-purple-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <p class="text-sm text-gray-700">
                                        La mayoría posee algún tipo de beca (SAEBU o Programa Nacional de Becas)
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Flexibilización del reglamento -->
                    <div class="mt-8 bg-white border-2 border-blue-200 rounded-2xl p-8">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-slate-900 mb-2">Flexibilización del Reglamento</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Desde <strong>2012</strong> se trabaja en la implementación de la flexibilización del Reglamento de Becas para los alumnos que cuentan con Residencia a través de <strong>Acuerdos Académicos</strong>, con el objetivo de <strong>evitar una posible deserción</strong>.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Programa Nacional de Becas Progresar -->
        <section class="py-16 md:py-20">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Título -->
                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-green-100 text-green-700 px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Becas Nacionales
                        </div>
                        <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Programa Nacional de Becas Progresar</h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Apoyo económico del Ministerio de Educación de la Nación para estudiantes universitarios</p>
                    </div>

                    <!-- Novedades destacadas -->
                    <div class="bg-gradient-to-br from-green-500 to-emerald-600 text-white rounded-xl p-8 md:p-10 mb-12 shadow-2xl">
                        <h3 class="text-2xl font-bold mb-6 flex items-center gap-3">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            Novedades 2024
                        </h3>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-xl p-5">
                                <div class="flex items-start gap-3">
                                    <div class="w-8 h-8 bg-white/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-bold mb-1">2 convocatorias por año</p>
                                        <p class="text-sm text-green-100">Mayor flexibilidad para inscribirte</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-xl p-5">
                                <div class="flex items-start gap-3">
                                    <div class="w-8 h-8 bg-white/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-bold mb-1">12 cuotas mensuales</p>
                                        <p class="text-sm text-green-100">Para inscriptos en primera convocatoria</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-xl p-5">
                                <div class="flex items-start gap-3">
                                    <div class="w-8 h-8 bg-white/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-bold mb-1">App para celulares</p>
                                        <p class="text-sm text-green-100">Inscribite y gestioná desde tu móvil</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-xl p-5">
                                <div class="flex items-start gap-3">
                                    <div class="w-8 h-8 bg-white/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-bold mb-1">Aumentos de hasta 135%</p>
                                        <p class="text-sm text-green-100">En Progresar Enfermería</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-xl p-5">
                                <div class="flex items-start gap-3">
                                    <div class="w-8 h-8 bg-white/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-bold mb-1">Requisitos flexibilizados</p>
                                        <p class="text-sm text-green-100">Anulación excepcional del 50% de materias</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-xl p-5">
                                <div class="flex items-start gap-3">
                                    <div class="w-8 h-8 bg-white/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-bold mb-1">Personas refugiadas</p>
                                        <p class="text-sm text-green-100">Incluidas en vulnerabilidad multidimensional</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Inscripciones -->
                    <div class="bg-white border-2 border-blue-200 rounded-xl overflow-hidden shadow-xl mb-8">
                        <div class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white p-6 md:p-8">
                            <h3 class="text-2xl font-bold flex items-center gap-3">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Inscripciones
                            </h3>
                        </div>

                        <div class="p-6 md:p-8">
                            <!-- Período -->
                            <div class="bg-blue-50 border-2 border-blue-200 rounded-xl p-6 mb-6">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-blue-500 text-white rounded-xl flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-bold text-slate-900 mb-2">Primera Convocatoria 2024</h4>
                                        <p class="text-gray-700 mb-3">
                                            Las inscripciones se desarrollan entre el <strong class="text-blue-600">1 de marzo y el 30 de abril</strong>.
                                        </p>
                                        <p class="text-sm text-gray-600">
                                            Podrán realizarse exclusivamente a través de: <br>
                                            <a href="https://www.argentina.gob.ar/educacion/progresar" target="_blank" rel="noopener" class="text-blue-600 font-semibold hover:text-blue-700 underline">
                                                argentina.gob.ar/educacion/progresar
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Alerta importante -->
                            <div class="bg-amber-50 border-2 border-amber-300 rounded-xl p-6 mb-6">
                                <div class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-amber-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                    </svg>
                                    <div>
                                        <p class="font-bold text-amber-900 mb-1"> Importante</p>
                                        <p class="text-sm text-amber-800">
                                            Los formularios de inscripción de <strong>ANSES no tienen ningún tipo de validez</strong> en el nivel universitario y serán rechazados.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Requisitos -->
                    <div class="bg-white border-2 border-purple-200 rounded-xl overflow-hidden shadow-xl mb-8">
                        <div class="bg-gradient-to-r from-purple-500 to-purple-600 text-white p-6 md:p-8">
                            <h3 class="text-2xl font-bold flex items-center gap-3">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                </svg>
                                Requisitos
                            </h3>
                        </div>

                        <div class="p-6 md:p-8">
                            <div class="space-y-4">

                                <div class="flex items-start gap-4 p-4 bg-purple-50 rounded-xl">
                                    <div class="w-8 h-8 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center flex-shrink-0 font-bold">
                                        1
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-gray-800 leading-relaxed">
                                            Ser <strong>argentino/a nativo/a o naturalizado/a</strong> o <strong>extranjero/a</strong> con residencia legal de <strong>5 años</strong> en el país y DNI.
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4 p-4 bg-purple-50 rounded-xl">
                                    <div class="w-8 h-8 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center flex-shrink-0 font-bold">
                                        2
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-gray-800 leading-relaxed">
                                            Tener al momento del cierre de convocatoria entre <strong>18 y 24 años</strong> cumplidos siendo ingresante y hasta <strong>30 años</strong> cumplidos en el caso de ser estudiante avanzado/a.
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4 p-4 bg-purple-50 rounded-xl">
                                    <div class="w-8 h-8 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center flex-shrink-0 font-bold">
                                        3
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-gray-800 leading-relaxed">
                                            Ingresos del/a joven y los de su grupo familiar no deben ser superiores a <strong>3 Salarios Mínimos, Vitales y Móviles (SMVM)</strong>.
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4 p-4 bg-purple-50 rounded-xl">
                                    <div class="w-8 h-8 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center flex-shrink-0 font-bold">
                                        4
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-gray-800 leading-relaxed">
                                            Ser <strong>estudiante regular</strong> de una institución educativa y/o tener <strong>2 materias aprobadas</strong>.
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <!-- Excepciones -->
                            <div class="mt-8 bg-gradient-to-br from-indigo-50 to-purple-50 border-2 border-indigo-200 rounded-2xl p-6">
                                <h4 class="text-lg font-bold text-slate-900 mb-4 flex items-center gap-2">
                                    <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                    Grupos de vulnerabilidad multidimensional
                                </h4>

                                <div class="space-y-3 text-sm text-gray-700">
                                    <p class="flex items-start gap-2">
                                        <svg class="w-5 h-5 text-indigo-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                        </svg>
                                        Se extiende hasta <strong>35 años de edad</strong> para personas con hijos/as de hasta 18 años que se encuentren a cargo de un hogar monoparental.
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <svg class="w-5 h-5 text-indigo-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                        </svg>
                                        <strong>SIN LÍMITE DE EDAD</strong> para personas Trans, de Pueblos Indígenas, con discapacidad o refugiadas.
                                    </p>
                                    <p class="flex items-start gap-2">
                                        <svg class="w-5 h-5 text-indigo-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                        </svg>
                                        Debido al contexto de pandemia (COVID-19), se anula de manera excepcional el requisito del <strong>50% de materias aprobadas</strong>.
                                    </p>
                                </div>
                            </div>

                            <!-- Anulaciones -->
                            <div class="mt-6 bg-green-50 border-2 border-green-200 rounded-xl p-6">
                                <h4 class="text-lg font-bold text-slate-900 mb-3 flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Nuevas flexibilizaciones
                                </h4>
                                <ul class="space-y-2 text-sm text-gray-700">
                                    <li class="flex items-start gap-2">
                                        <span class="text-green-600 font-bold">✓</span>
                                        <span>Anulación de penalidades por cambio de carrera y/o universidad</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="text-green-600 font-bold">✓</span>
                                        <span>Anulación excepcional del requisito del 50% de materias aprobadas</span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!-- Montos y Pagos -->
                    <div class="bg-white border-2 border-green-200 rounded-xl overflow-hidden shadow-xl mb-8">
                        <div class="bg-gradient-to-r from-green-500 to-emerald-600 text-white p-6 md:p-8">
                            <h3 class="text-2xl font-bold flex items-center gap-3">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Montos y Pagos
                            </h3>
                        </div>

                        <div class="p-6 md:p-8">
                            <!-- Info de pagos -->
                            <div class="bg-green-50 border-2 border-green-200 rounded-xl p-6 mb-8">
                                <h4 class="text-lg font-bold text-slate-900 mb-3"> Modalidad de pago</h4>
                                <ul class="space-y-2 text-gray-700">
                                    <li class="flex items-start gap-2">
                                        <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Se abonan mediante <strong>ANSES</strong></span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span><strong>12 cuotas mensuales</strong> para adjudicados/as en primera convocatoria</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span><strong>6 cuotas mensuales</strong> para adjudicados/as en segunda convocatoria</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Tabla Universidad General -->
                            <div class="mb-8">
                                <h4 class="text-xl font-bold text-slate-900 mb-4"> Montos - Universidad</h4>
                                <div class="overflow-x-auto">
                                    <table class="w-full border-collapse">
                                        <thead>
                                            <tr class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white">
                                                <th class="border-2 border-blue-400 p-4 text-left">Año</th>
                                                <th class="border-2 border-blue-400 p-4 text-center">Universidad Estratégica</th>
                                                <th class="border-2 border-blue-400 p-4 text-center">Universidad No Estratégica</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="hover:bg-blue-50">
                                                <td class="border-2 border-gray-300 p-4 font-semibold bg-gray-50">1° Año</td>
                                                <td class="border-2 border-gray-300 p-4 text-center text-gray-400">-</td>
                                                <td class="border-2 border-gray-300 p-4 text-center font-bold text-blue-600">$3.600</td>
                                            </tr>
                                            <tr class="hover:bg-blue-50">
                                                <td class="border-2 border-gray-300 p-4 font-semibold bg-gray-50">2° Año</td>
                                                <td class="border-2 border-gray-300 p-4 text-center font-bold text-indigo-600">$4.340</td>
                                                <td class="border-2 border-gray-300 p-4 text-center font-bold text-blue-600">$3.600</td>
                                            </tr>
                                            <tr class="hover:bg-blue-50">
                                                <td class="border-2 border-gray-300 p-4 font-semibold bg-gray-50">3° Año</td>
                                                <td class="border-2 border-gray-300 p-4 text-center font-bold text-indigo-600">$5.740</td>
                                                <td class="border-2 border-gray-300 p-4 text-center font-bold text-blue-600">$3.800</td>
                                            </tr>
                                            <tr class="hover:bg-blue-50">
                                                <td class="border-2 border-gray-300 p-4 font-semibold bg-gray-50">4° Año</td>
                                                <td class="border-2 border-gray-300 p-4 text-center font-bold text-indigo-600">$7.490</td>
                                                <td class="border-2 border-gray-300 p-4 text-center font-bold text-blue-600">$3.800</td>
                                            </tr>
                                            <tr class="hover:bg-blue-50">
                                                <td class="border-2 border-gray-300 p-4 font-semibold bg-gray-50">5° Año</td>
                                                <td class="border-2 border-gray-300 p-4 text-center font-bold text-indigo-600">$9.960</td>
                                                <td class="border-2 border-gray-300 p-4 text-center font-bold text-blue-600">$4.600</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Tabla Enfermería -->
                            <div>
                                <h4 class="text-xl font-bold text-slate-900 mb-4"> Montos - Progresar Enfermería (ex PRONAFE)</h4>
                                <div class="overflow-x-auto">
                                    <table class="w-full border-collapse">
                                        <thead>
                                            <tr class="bg-gradient-to-r from-pink-500 to-rose-600 text-white">
                                                <th class="border-2 border-pink-400 p-4 text-left">Año</th>
                                                <th class="border-2 border-pink-400 p-4 text-center">Enfermería Universitaria</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="hover:bg-pink-50">
                                                <td class="border-2 border-gray-300 p-4 font-semibold bg-gray-50">1° Año</td>
                                                <td class="border-2 border-gray-300 p-4 text-center font-bold text-pink-600">$5.000</td>
                                            </tr>
                                            <tr class="hover:bg-pink-50">
                                                <td class="border-2 border-gray-300 p-4 font-semibold bg-gray-50">2° Año</td>
                                                <td class="border-2 border-gray-300 p-4 text-center font-bold text-pink-600">$6.000</td>
                                            </tr>
                                            <tr class="hover:bg-pink-50">
                                                <td class="border-2 border-gray-300 p-4 font-semibold bg-gray-50">3° Año</td>
                                                <td class="border-2 border-gray-300 p-4 text-center font-bold text-pink-600">$7.000</td>
                                            </tr>
                                            <tr class="hover:bg-pink-50">
                                                <td class="border-2 border-gray-300 p-4 font-semibold bg-gray-50">4° Año</td>
                                                <td class="border-2 border-gray-300 p-4 text-center font-bold text-pink-600">$8.000</td>
                                            </tr>
                                            <tr class="hover:bg-pink-50">
                                                <td class="border-2 border-gray-300 p-4 font-semibold bg-gray-50">5° Año</td>
                                                <td class="border-2 border-gray-300 p-4 text-center font-bold text-pink-600">$9.700</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Nota de aumentos -->
                            <div class="mt-6 bg-gradient-to-r from-green-50 to-emerald-50 border-2 border-green-300 rounded-xl p-5">
                                <div class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-green-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                    </svg>
                                    <div>
                                        <p class="font-bold text-green-900 mb-1"> Aumentos significativos</p>
                                        <p class="text-sm text-green-800">
                                            Aumentos en los montos de hasta un <strong>92%</strong> en Progresar Universitario y hasta un <strong>135%</strong> en el caso de Progresar Enfermería.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Reclamos -->
                    <div class="bg-white border-2 border-red-200 rounded-xl overflow-hidden shadow-xl">
                        <div class="bg-gradient-to-r from-red-500 to-rose-600 text-white p-6 md:p-8">
                            <h3 class="text-2xl font-bold flex items-center gap-3">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                </svg>
                                Reclamos
                            </h3>
                        </div>

                        <div class="p-6 md:p-8">
                            <div class="bg-red-50 border-2 border-red-200 rounded-xl p-6">
                                <p class="text-gray-800 leading-relaxed mb-4">
                                    En el caso de haber reclamos respecto al resultado de la postulación, los mismos podrán realizarse hasta <strong class="text-red-600">20 (veinte) días después de la notificación del rechazo</strong>.
                                </p>
                                <div class="flex items-start gap-3 bg-white border border-red-200 rounded-lg p-4">
                                    <svg class="w-5 h-5 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <div>
                                        <p class="text-sm font-semibold text-slate-900 mb-1">Medio de reclamo:</p>
                                        <p class="text-sm text-gray-700">
                                            Los reclamos deben realizarse mediante la plataforma web oficial de Progresar:
                                        </p>
                                        <a href="https://www.argentina.gob.ar/educacion/progresar" target="_blank" rel="noopener" class="inline-block mt-2 text-red-600 font-semibold hover:text-red-700 underline text-sm">
                                            argentina.gob.ar/educacion/progresar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Promoción de la SAEBU -->
        <section class="py-16 md:py-20 bg-gradient-to-br from-blue-50 to-indigo-50">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Título -->
                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-blue-100 text-blue-700 px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                            </svg>
                            Difusión
                        </div>
                        <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Promoción de la SAEBU</h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Acercamos los beneficios a todos los estudiantes</p>
                    </div>

                    <div class="bg-white border-2 border-blue-200 rounded-xl p-8 md:p-10 shadow-xl">
                        <div class="flex items-start gap-6 mb-8">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 text-white rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-slate-900 mb-3">Desde 2007</h3>
                                <p class="text-gray-700 leading-relaxed mb-6">
                                    La Secretaría trabaja en una <strong>fuerte promoción de los servicios y beneficios</strong> que ofrece. Para ello, Trabajo Social aporta tareas de información, tanto en <strong>promoción de carreras</strong> como en los <strong>cursos de ingreso</strong> mediante talleres informativos.
                                </p>

                                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 border-2 border-blue-200 rounded-xl p-6 mb-6">
                                    <h4 class="text-lg font-bold text-slate-900 mb-3 flex items-center gap-2">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        Objetivo
                                    </h4>
                                    <p class="text-gray-700 leading-relaxed">
                                        Esto permite un <strong>acercamiento más eficiente</strong> entre la Secretaría y el Estudiante, logrando que este último a corto plazo pueda usufructuar toda la amplia gama de beneficios que se encuentran a su disposición.
                                    </p>
                                </div>

                                <!-- Grid de beneficios -->
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                    <div class="bg-white border-2 border-blue-200 rounded-xl p-4 text-center hover:shadow-lg transition-all">
                                        <div class="w-10 h-10 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                        <p class="text-sm font-semibold text-gray-800">Becas</p>
                                    </div>

                                    <div class="bg-white border-2 border-blue-200 rounded-xl p-4 text-center hover:shadow-lg transition-all">
                                        <div class="w-10 h-10 bg-red-100 text-red-600 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                            </svg>
                                        </div>
                                        <p class="text-sm font-semibold text-gray-800">Salud Estudiantil</p>
                                    </div>

                                    <div class="bg-white border-2 border-blue-200 rounded-xl p-4 text-center hover:shadow-lg transition-all">
                                        <div class="w-10 h-10 bg-indigo-100 text-indigo-600 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                            </svg>
                                        </div>
                                        <p class="text-sm font-semibold text-gray-800">Residencia</p>
                                    </div>

                                    <div class="bg-white border-2 border-blue-200 rounded-xl p-4 text-center hover:shadow-lg transition-all">
                                        <div class="w-10 h-10 bg-green-100 text-green-600 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                            </svg>
                                        </div>
                                        <p class="text-sm font-semibold text-gray-800">Remediar</p>
                                    </div>

                                    <div class="bg-white border-2 border-blue-200 rounded-xl p-4 text-center hover:shadow-lg transition-all">
                                        <div class="w-10 h-10 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"></path>
                                            </svg>
                                        </div>
                                        <p class="text-sm font-semibold text-gray-800">Deportes</p>
                                    </div>

                                    <div class="bg-white border-2 border-blue-200 rounded-xl p-4 text-center hover:shadow-lg transition-all">
                                        <div class="w-10 h-10 bg-orange-100 text-orange-600 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                            </svg>
                                        </div>
                                        <p class="text-sm font-semibold text-gray-800">Comedor</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Trabajo Social y Discapacidad -->
        <section class="py-16 md:py-20 bg-gradient-to-br from-purple-50 to-pink-50">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Título -->
                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-purple-100 text-purple-700 px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                            Inclusión
                        </div>
                        <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Trabajo Social y Discapacidad</h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Inclusión e integración de estudiantes en situación de discapacidad</p>
                    </div>

                    <div class="bg-white border-2 border-purple-200 rounded-xl overflow-hidden shadow-xl">

                        <!-- Header con gradiente -->
                        <div class="bg-gradient-to-r from-purple-500 to-pink-600 text-white p-8 md:p-10">
                            <div class="flex items-start gap-6">
                                <div class="w-16 h-16 bg-white/20 backdrop-blur-xl rounded-2xl flex items-center justify-center flex-shrink-0 border-2 border-white/30">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-2xl md:text-xl font-bold mb-2">Desde 2008</h3>
                                    <p class="text-purple-100 text-lg">
                                        Trabajando en pos de la inclusión e integración
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Contenido -->
                        <div class="p-8 md:p-10">

                            <p class="text-gray-700 text-lg leading-relaxed mb-8">
                                Se trabaja en pos de lograr la <strong>inclusión e integración de alumnos en situación de discapacidad</strong> a la Universidad Nacional de San Luis. Para ello se han presentado proyectos que avalen no solo el quehacer profesional, sino también para que forme parte de la <strong>agenda política</strong>.
                            </p>

                            <!-- Resultados -->
                            <div class="bg-gradient-to-br from-purple-50 to-pink-50 border-2 border-purple-200 rounded-2xl p-8 mb-8">
                                <div class="flex items-start gap-4 mb-6">
                                    <div class="w-12 h-12 bg-purple-500 text-white rounded-xl flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-slate-900 mb-2">Resultados Positivos</h4>
                                        <p class="text-gray-700 leading-relaxed">
                                            Se ha logrado <strong>avanzar en la temática</strong>, donde se trabaja con alumnos en situación de Discapacidad en todo lo concerniente a su <strong>vida Universitaria</strong>.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Atención que se brinda -->
                            <div class="mb-8">
                                <h4 class="text-xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                    </svg>
                                    Atención General
                                </h4>
                                <p class="text-gray-700 leading-relaxed mb-4">
                                    Se ofrece una <strong>atención general a cada una de las necesidades</strong> de los estudiantes en situación de discapacidad. Esto implica:
                                </p>

                                <div class="grid md:grid-cols-2 gap-4">
                                    <div class="bg-white border-2 border-purple-200 rounded-xl p-5 hover:shadow-lg transition-all">
                                        <div class="flex items-start gap-3">
                                            <div class="w-8 h-8 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-slate-900 mb-1">Recursos Materiales</p>
                                                <p class="text-sm text-gray-600">Gestión de elementos necesarios</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-white border-2 border-purple-200 rounded-xl p-5 hover:shadow-lg transition-all">
                                        <div class="flex items-start gap-3">
                                            <div class="w-8 h-8 bg-pink-100 text-pink-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-slate-900 mb-1">Recursos Humanos</p>
                                                <p class="text-sm text-gray-600">Acompañamiento profesional</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-white border-2 border-purple-200 rounded-xl p-5 hover:shadow-lg transition-all">
                                        <div class="flex items-start gap-3">
                                            <div class="w-8 h-8 bg-indigo-100 text-indigo-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-slate-900 mb-1">Recursos Económicos</p>
                                                <p class="text-sm text-gray-600">Apoyo financiero y becas</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-white border-2 border-purple-200 rounded-xl p-5 hover:shadow-lg transition-all">
                                        <div class="flex items-start gap-3">
                                            <div class="w-8 h-8 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-slate-900 mb-1">Recursos Tecnológicos</p>
                                                <p class="text-sm text-gray-600">Herramientas de accesibilidad</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Compromiso -->
                            <div class="bg-gradient-to-r from-purple-500 to-pink-600 text-white rounded-2xl p-8">
                                <div class="flex items-start gap-4">



                                    <svg class="w-8 h-8 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                    <div>
                                        <h5 class="text-xl font-bold mb-2">Nuestro Compromiso</h5>
                                        <p class="text-purple-100">
                                            Gestión y movilización de todos los recursos necesarios para garantizar la <strong>plena integración</strong> y el <strong>éxito académico</strong> de estudiantes en situación de discapacidad en la Universidad Nacional de San Luis.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- CTA Final -->
        <section class="py-16 md:py-20 bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700">
            <div class="container mx-auto px-4">
                <div class="max-w-7xl mx-auto text-center">
                    <div class="inline-block bg-white/10 backdrop-blur-xl text-white px-5 py-2 rounded-full font-semibold mb-6 border border-white/20">
                        ¿Necesitás más información?
                    </div>

                    <h2 class="text-xl md:text-2xl font-bold text-white mb-6">
                        Estamos para Ayudarte
                    </h2>

                    <p class="text-xl text-blue-100 mb-10 mx-auto">
                        Nuestro equipo de Trabajo Social está disponible para asesorarte sobre becas, residencia y todos los beneficios disponibles
                    </p>

                    <div class="flex flex-wrap gap-4 justify-center">
                        <a href="#contacto" class="inline-flex items-center gap-2 bg-white text-blue-600 px-8 py-4 rounded-xl font-bold text-lg hover:bg-blue-50 transition-all shadow-xl hover:shadow-2xl hover:scale-105">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            Contactanos
                        </a>

                        <a href="https://www.argentina.gob.ar/educacion/progresar" target="_blank" rel="noopener" class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-xl text-white border-2 border-white/30 px-8 py-4 rounded-xl font-bold text-lg hover:bg-white/20 transition-all">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                            Inscribirse a Progresar
                        </a>
                    </div>

                    <!-- Iconos informativos -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-16">
                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl p-6">
                            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-white font-bold mb-2">Atención Continua</h3>
                            <p class="text-blue-100 text-sm">Asesoramiento durante todo el año</p>
                        </div>

                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl p-6">
                            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-white font-bold mb-2">Equipo Profesional</h3>
                            <p class="text-blue-100 text-sm">Trabajadores sociales especializados</p>
                        </div>

                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl p-6">
                            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <h3 class="text-white font-bold mb-2">Confidencialidad</h3>
                            <p class="text-blue-100 text-sm">Atención personalizada y reservada</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    <?php endwhile; ?>

</main>

<?php
get_footer();
?>