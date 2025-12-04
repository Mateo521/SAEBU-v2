<?php

/**
 * Template Name: Departamento de Becas
 */
get_header();
?>

<main class="bg-gradient-to-b from-white to-blue-50/30">

    <?php while (have_posts()) : the_post(); ?>

        <!-- Hero con gradiente -->
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
                            <span class="text-white font-medium">Departamento de Becas</span>
                        </nav>
                    </div>

                    <!-- Badge -->
                    <div class="inline-block mb-6">
                        <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-xl text-white px-5 py-2.5 rounded-full text-sm font-semibold border border-white/20 shadow-lg">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Apoyo Económico
                        </span>
                    </div>

                    <h1 class="text-2xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                        Departamento de Becas
                    </h1>

                    <p class="text-xl text-blue-100 max-w-3xl mx-auto leading-relaxed mb-8">
                        Gestionamos becas y beneficios para que puedas concentrarte en lo más importante: tu formación académica
                    </p>

                    <!-- Stats rápidas -->
                    <!--div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-3xl mx-auto">
                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-xl p-4">
                            <div class="text-xl font-bold text-white mb-1">9</div>
                            <div class="text-xs text-blue-100">Tipos de becas</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-xl p-4">
                            <div class="text-xl font-bold text-white mb-1">3</div>
                            <div class="text-xs text-blue-100">Centros universitarios</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-xl p-4">
                            <div class="text-xl font-bold text-white mb-1">12</div>
                            <div class="text-xs text-blue-100">Meses de cobertura</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-xl p-4">
                            <div class="text-xl font-bold text-white mb-1">100%</div>
                            <div class="text-xs text-blue-100">Gratuito</div>
                        </div>
                    </div-->
                </div>
            </div>
        </section>

        <!-- Información del Departamento -->
        <section class="py-16 md:py-20">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Intro -->
                    <div class="bg-white border-2 border-blue-200 rounded-xl p-8 md:p-12 shadow-xl mb-12">
                        <div class="flex items-start gap-6 mb-8">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 text-white rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-xl font-bold text-slate-900 mb-4">¿Quiénes Somos?</h2>
                                <p class="text-gray-700 text-lg leading-relaxed mb-6">
                                    El Departamento de Becas, perteneciente a la <strong>Secretaría de Asuntos Estudiantiles y Bienestar Universitario</strong> de la Universidad Nacional de San Luis, actúa en <strong>tres Centros Universitarios</strong>:
                                </p>

                                <!-- Centros -->
                                <div class="grid md:grid-cols-3 gap-4">
                                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 border-2 border-blue-200 rounded-xl p-4 text-center">
                                        <div class="text-xl mb-2">🏛️</div>
                                        <p class="font-bold text-slate-900">San Luis</p>
                                    </div>
                                    <div class="bg-gradient-to-br from-indigo-50 to-purple-50 border-2 border-indigo-200 rounded-xl p-4 text-center">
                                        <div class="text-xl mb-2">🏞️</div>
                                        <p class="font-bold text-slate-900">Villa de Merlo</p>
                                    </div>
                                    <div class="bg-gradient-to-br from-purple-50 to-pink-50 border-2 border-purple-200 rounded-xl p-4 text-center">
                                        <div class="text-xl mb-2">🏙️</div>
                                        <p class="font-bold text-slate-900">Villa Mercedes</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Contacto destacado -->
                        <div class="bg-gradient-to-br from-blue-500 to-indigo-600 text-white rounded-2xl p-6">
                            <h3 class="text-xl font-bold mb-4">Contacto del Departamento</h3>
                            <div class="grid md:grid-cols-2 gap-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm text-blue-100">Email</p>
                                        <a href="mailto:becasunsl@gmail.com" class="font-bold hover:text-blue-200 transition-colors">becasunsl@gmail.com</a>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm text-blue-100">Teléfono</p>
                                        <a href="tel:02664422818" class="font-bold hover:text-blue-200 transition-colors">0266-4422818 int. 8134</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Actividades -->
                    <div class="mb-12">
                        <div class="text-center mb-8">
                            <div class="inline-flex items-center gap-2 bg-indigo-100 text-indigo-700 px-5 py-2 rounded-full font-semibold mb-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                </svg>
                                Nuestras Actividades
                            </div>
                            <h2 class="text-xl md:text-2xl font-bold text-slate-900">¿Qué Hacemos?</h2>
                        </div>

                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                            <!-- Actividad 1 -->
                            <div class="bg-white border-2 border-blue-200 rounded-2xl p-6 hover:shadow-xl transition-all group">
                                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 text-white rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-bold text-slate-900 mb-2">Apertura de Convocatorias</h3>
                                <p class="text-gray-600 text-sm">Publicación y gestión de las convocatorias anuales de becas</p>
                            </div>

                            <!-- Actividad 2 -->
                            <div class="bg-white border-2 border-indigo-200 rounded-2xl p-6 hover:shadow-xl transition-all group">
                                <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 text-white rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-bold text-slate-900 mb-2">Preselección</h3>
                                <p class="text-gray-600 text-sm">Evaluación de estudiantes que accederán a las becas</p>
                            </div>

                            <!-- Actividad 3 -->
                            <div class="bg-white border-2 border-purple-200 rounded-2xl p-6 hover:shadow-xl transition-all group">
                                <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 text-white rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-bold text-slate-900 mb-2">Control Académico</h3>
                                <p class="text-gray-600 text-sm">Seguimiento del rendimiento para mantener la beca</p>
                            </div>

                            <!-- Actividad 4 -->
                            <div class="bg-white border-2 border-green-200 rounded-2xl p-6 hover:shadow-xl transition-all group">
                                <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 text-white rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-bold text-slate-900 mb-2">Autorizaciones de Pago</h3>
                                <p class="text-gray-600 text-sm">Gestión de pagos mensuales a los becados</p>
                            </div>

                            <!-- Actividad 5 -->
                            <div class="bg-white border-2 border-orange-200 rounded-2xl p-6 hover:shadow-xl transition-all group">
                                <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-600 text-white rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-bold text-slate-900 mb-2">Planillas de Control</h3>
                                <p class="text-gray-600 text-sm">Confección y administración de documentación</p>
                            </div>

                            <!-- Actividad 6 -->
                            <div class="bg-white border-2 border-yellow-200 rounded-2xl p-6 hover:shadow-xl transition-all group">
                                <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-orange-600 text-white rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                                    </svg>
                                </div>
                                <h3 class="font-bold text-slate-900 mb-2">Bajas y Altas</h3>
                                <p class="text-gray-600 text-sm">Control anual coordinado con Trabajo Social</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Oferta de Becas -->
        <section class="py-16 md:py-20 bg-gradient-to-br from-slate-50 to-blue-50">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Título principal -->
                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-blue-100 text-blue-700 px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            9 Tipos de Becas
                        </div>
                        <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Esta es la Oferta de Becas que Tenemos para Vos</h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Encontrá la beca que se adapte a tus necesidades</p>
                    </div>

                    <div class="space-y-8">

                        <!-- BECA 1: Ayuda Económica -->
                        <div class="bg-white border-2 border-blue-200 rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transition-all">
                            <div class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white p-6 md:p-8">
                                <div class="flex items-start gap-4">
                                    <div class="w-14 h-14 bg-white/20 backdrop-blur-xl rounded-2xl flex items-center justify-center flex-shrink-0">
                                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-2xl md:text-xl font-bold mb-2">Beca de Ayuda Económica</h3>
                                        <p class="text-blue-100">Monto mensual para gastos estudiantiles</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 md:p-8">
                                <p class="text-gray-700 text-lg leading-relaxed mb-6">
                                    Esta beca consiste en un <strong>monto de dinero que se deposita mensualmente</strong> con la finalidad de ser usado en gastos relacionados a la actividad estudiantil (fotocopias, apuntes, artículos de librería, pago de internet, etc).
                                </p>

                                <div class="bg-blue-50 border-2 border-blue-200 rounded-xl p-5 mb-6">
                                    <div class="flex items-start gap-3">
                                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-2xl md:text-xl font-bold mb-2">Beca de Comedor</h3>
                                        <p class="text-orange-100">24 viandas mensuales gratuitas</p>
                                    </div>
                                    <div class="hidden md:block">
                                        <span class="inline-flex items-center gap-1 bg-white/20 backdrop-blur-xl px-4 py-2 rounded-full text-sm font-bold">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                            </svg>
                                            Video disponible
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 md:p-8">
                                <p class="text-gray-700 text-lg leading-relaxed mb-6">
                                    Esta beca consiste en <strong>24 viandas del comedor universitario por mes</strong>, las cuales se podrán consumir de <strong>marzo a diciembre sin costo</strong>.
                                </p>

                                <div class="bg-orange-50 border-2 border-orange-200 rounded-xl p-5 mb-6">
                                    <div class="flex items-start gap-3">
                                        <svg class="w-5 h-5 text-orange-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <p class="text-orange-900 font-semibold">
                                            Pueden acceder <strong>estudiantes ingresantes</strong> y <strong>estudiantes que ya estén cursando</strong> al momento de la inscripción
                                        </p>
                                    </div>
                                </div>

                                <!-- Placeholder para video -->
                                <div class="bg-gradient-to-br from-orange-100 to-red-100 border-2 border-orange-300 rounded-xl p-8 text-center">
                                    <div class="w-16 h-16 bg-orange-500 text-white rounded-full flex items-center justify-center mx-auto mb-4">
                                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <p class="text-orange-900 font-semibold">Video explicativo disponible</p>
                                    <p class="text-sm text-orange-700 mt-2">Mirá cómo funciona la Beca de Comedor</p>
                                </div>
                            </div>
                        </div>

                        <!-- BECA 3: Transporte -->
                        <div class="bg-white border-2 border-green-200 rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transition-all">
                            <div class="bg-gradient-to-r from-green-500 to-emerald-600 text-white p-6 md:p-8">
                                <div class="flex items-start gap-4">
                                    <div class="w-14 h-14 bg-white/20 backdrop-blur-xl rounded-2xl flex items-center justify-center flex-shrink-0">
                                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-2xl md:text-xl font-bold mb-2">Beca de Transporte</h3>
                                        <p class="text-green-100">Apoyo para traslados interurbanos</p>
                                    </div>
                                    <div class="hidden md:block">
                                        <span class="inline-flex items-center gap-1 bg-white/20 backdrop-blur-xl px-4 py-2 rounded-full text-sm font-bold">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                            </svg>
                                            Video disponible
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 md:p-8">
                                <p class="text-gray-700 text-lg leading-relaxed mb-6">
                                    Esta beca consiste en un <strong>monto de dinero que se depositará mensualmente, durante 10 meses</strong>. Para poder inscribirte a esta beca, el domicilio del estudiante debe ser de una <strong>localidad aledaña a la ciudad de San Luis</strong>, y que por lo tanto debas usar el <strong>servicio de transporte interurbano</strong> para asistir a cursar.
                                </p>

                                <div class="bg-green-50 border-2 border-green-200 rounded-xl p-5 mb-6">
                                    <div class="flex items-start gap-3">
                                        <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <p class="text-green-900 font-semibold">
                                            Pueden acceder <strong>estudiantes ingresantes</strong> y <strong>estudiantes que ya estén cursando</strong> al momento de la inscripción
                                        </p>
                                    </div>
                                </div>

                                <div class="grid md:grid-cols-2 gap-4">
                                    <div class="bg-green-100 border border-green-300 rounded-lg p-4">
                                        <div class="flex items-center gap-2 mb-2">
                                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <p class="font-bold text-green-900">Duración</p>
                                        </div>
                                        <p class="text-sm text-green-800">10 meses de cobertura</p>
                                    </div>
                                    <div class="bg-green-100 border border-green-300 rounded-lg p-4">
                                        <div class="flex items-center gap-2 mb-2">
                                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                            <p class="font-bold text-green-900">Requisito</p>
                                        </div>
                                        <p class="text-sm text-green-800">Localidad aledaña a San Luis</p>
                                    </div>
                                </div>

                                <!-- Placeholder para video -->
                                <div class="mt-6 bg-gradient-to-br from-green-100 to-emerald-100 border-2 border-green-300 rounded-xl p-8 text-center">
                                    <div class="w-16 h-16 bg-green-500 text-white rounded-full flex items-center justify-center mx-auto mb-4">
                                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <p class="text-green-900 font-semibold">Video explicativo disponible</p>
                                    <p class="text-sm text-green-700 mt-2">Conocé más sobre la Beca de Transporte</p>
                                </div>
                            </div>
                        </div>

                        <!-- BECA 4: Cuidados Infantiles -->
                        <div class="bg-white border-2 border-pink-200 rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transition-all">
                            <div class="bg-gradient-to-r from-pink-500 to-rose-600 text-white p-6 md:p-8">
                                <div class="flex items-start gap-4">
                                    <div class="w-14 h-14 bg-white/20 backdrop-blur-xl rounded-2xl flex items-center justify-center flex-shrink-0">
                                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-2xl md:text-xl font-bold mb-2">Beca para Cuidados Infantiles</h3>
                                        <p class="text-pink-100">Apoyo para estudiantes con hijos/as</p>
                                    </div>
                                    <div class="hidden md:block">
                                        <span class="inline-flex items-center gap-1 bg-white/20 backdrop-blur-xl px-4 py-2 rounded-full text-sm font-bold">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                            </svg>
                                            Video disponible
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 md:p-8">
                                <p class="text-gray-700 text-lg leading-relaxed mb-6">
                                    Esta beca otorga un <strong>monto de dinero que se depositará mensualmente durante 10 meses</strong>. Podrán inscribirse quienes tengan <strong>hijos/as menores de 4 años</strong>, al momento de inscribirse en la beca.
                                </p>

                                <div class="bg-pink-50 border-2 border-pink-200 rounded-xl p-5 mb-6">
                                    <div class="flex items-start gap-3">
                                        <svg class="w-5 h-5 text-pink-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div>
                                            <p class="text-pink-900 font-semibold mb-2">
                                                En caso de que los/as estudiantes tengan <strong>hijos/as con discapacidad</strong>, el límite de edad de ellos/as puede ser <strong>hasta los 18 años</strong>.
                                            </p>
                                            <p class="text-pink-800 text-sm">
                                                Pueden acceder estudiantes ingresantes y estudiantes que ya estén cursando al momento de la inscripción
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid md:grid-cols-2 gap-4 mb-6">
                                    <div class="bg-pink-100 border border-pink-300 rounded-lg p-4">
                                        <div class="flex items-center gap-2 mb-2">
                                            <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <p class="font-bold text-pink-900">Duración</p>
                                        </div>
                                        <p class="text-sm text-pink-800">10 meses de cobertura</p>
                                    </div>
                                    <div class="bg-pink-100 border border-pink-300 rounded-lg p-4">
                                        <div class="flex items-center gap-2 mb-2">
                                            <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                            </svg>
                                            <p class="font-bold text-pink-900">Requisito</p>
                                        </div>
                                        <p class="text-sm text-pink-800">Hijos/as menores de 4 años (18 con discapacidad)</p>
                                    </div>
                                </div>

                                <!-- Placeholder para video -->
                                <div class="bg-gradient-to-br from-pink-100 to-rose-100 border-2 border-pink-300 rounded-xl p-8 text-center">
                                    <div class="w-16 h-16 bg-pink-500 text-white rounded-full flex items-center justify-center mx-auto mb-4">
                                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <p class="text-pink-900 font-semibold">Video explicativo disponible</p>
                                    <p class="text-sm text-pink-700 mt-2">Información sobre Cuidados Infantiles</p>
                                </div>
                            </div>
                        </div>

                        <!-- BECA 5: Contraprestación de Servicios -->
                        <div class="bg-white border-2 border-purple-200 rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transition-all">
                            <div class="bg-gradient-to-r from-purple-500 to-indigo-600 text-white p-6 md:p-8">
                                <div class="flex items-start gap-4">
                                    <div class="w-14 h-14 bg-white/20 backdrop-blur-xl rounded-2xl flex items-center justify-center flex-shrink-0">
                                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-2xl md:text-xl font-bold mb-2">Beca por Contraprestación de Servicios</h3>
                                        <p class="text-purple-100">Colaboración en actividades universitarias</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 md:p-8">
                                <p class="text-gray-700 text-lg leading-relaxed mb-6">
                                    Se otorgará a los estudiantes que realicen <strong>tareas de apoyo en dependencias de la Universidad</strong> y que se aboquen a realizar tareas enfocadas en la <strong>actividad estudiantil</strong>, por ejemplo actividades gremiales, sociales, deportivas, etc.
                                </p>

                                <div class="bg-purple-50 border-2 border-purple-200 rounded-xl p-5 mb-6">
                                    <div class="flex items-start gap-3">
                                        <svg class="w-5 h-5 text-purple-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <p class="text-purple-900 font-semibold">
                                            Estas actividades <strong>no deberán superar las 10 horas semanales</strong>
                                        </p>
                                    </div>
                                </div>

                                <div class="grid md:grid-cols-2 gap-4">
                                    <div class="bg-purple-100 border border-purple-300 rounded-lg p-4">
                                        <div class="flex items-center gap-2 mb-2">
                                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <p class="font-bold text-purple-900">Equivalencia</p>
                                        </div>
                                        <p class="text-sm text-purple-800">Beca de Comedor o Ayuda Económica</p>
                                    </div>
                                    <div class="bg-purple-100 border border-purple-300 rounded-lg p-4">
                                        <div class="flex items-center gap-2 mb-2">
                                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <p class="font-bold text-purple-900">Requisito</p>
                                        </div>
                                        <p class="text-sm text-purple-800">Primer año cursado + 2 materias rendidas</p>
                                    </div>
                                </div>

                                <!-- Video en lengua de señas -->
                                <div class="mt-6 bg-gradient-to-br from-purple-100 to-indigo-100 border-2 border-purple-300 rounded-xl p-6">
                                    <div class="flex items-center gap-3">
                                        <div class="w-12 h-12 bg-purple-500 text-white rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-bold text-purple-900"> Beca en Lengua de Señas</p>
                                            <p class="text-sm text-purple-700">Video informativo accesible disponible</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- BECA 6: Residencia Universitaria -->
                        <div class="bg-white border-2 border-cyan-200 rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transition-all">
                            <div class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white p-6 md:p-8">
                                <div class="flex items-start gap-4">
                                    <div class="w-14 h-14 bg-white/20 backdrop-blur-xl rounded-2xl flex items-center justify-center flex-shrink-0">
                                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-2xl md:text-xl font-bold mb-2">Residencia Universitaria</h3>
                                        <p class="text-cyan-100">Alojamiento para estudiantes</p>
                                    </div>
                                    <div class="hidden md:block">
                                        <span class="inline-flex items-center gap-1 bg-white/20 backdrop-blur-xl px-4 py-2 rounded-full text-sm font-bold">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                            </svg>
                                            Video disponible
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 md:p-8">
                                <p class="text-gray-700 text-lg leading-relaxed mb-6">
                                    Este beneficio tiene el objetivo de <strong>alojar a los estudiantes que vivan a más de 30 km de la UNSL</strong>. Disponible tanto en <strong>ciudad capital como Villa Mercedes</strong>. Disponible tanto en <strong>ciudad capital como Villa Mercedes</strong>.
                                </p>

                                <div class="bg-cyan-50 border-2 border-cyan-200 rounded-xl p-5 mb-6">
                                    <div class="flex items-start gap-3">
                                        <svg class="w-5 h-5 text-cyan-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <p class="text-cyan-900 font-semibold">
                                            Podés mantener el beneficio <strong>durante toda la carrera</strong>, siempre que mantengas las condiciones académicas y socio-económicas que justificaron el otorgamiento.
                                        </p>
                                    </div>
                                </div>

                                <div class="grid md:grid-cols-2 gap-4 mb-6">
                                    <div class="bg-cyan-100 border border-cyan-300 rounded-lg p-4">
                                        <div class="flex items-center gap-2 mb-2">
                                            <svg class="w-5 h-5 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                            <p class="font-bold text-cyan-900">Requisito de Distancia</p>
                                        </div>
                                        <p class="text-sm text-cyan-800">Más de 30 km de la UNSL</p>
                                    </div>
                                    <div class="bg-cyan-100 border border-cyan-300 rounded-lg p-4">
                                        <div class="flex items-center gap-2 mb-2">
                                            <svg class="w-5 h-5 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                            </svg>
                                            <p class="font-bold text-cyan-900">Ubicaciones</p>
                                        </div>
                                        <p class="text-sm text-cyan-800">San Luis y Villa Mercedes</p>
                                    </div>
                                </div>

                                <!-- Video en lengua de señas -->
                                <div class="bg-gradient-to-br from-cyan-100 to-blue-100 border-2 border-cyan-300 rounded-xl p-6">
                                    <div class="flex items-center gap-3">
                                        <div class="w-12 h-12 bg-cyan-500 text-white rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-bold text-cyan-900"> Beca en Lengua de Señas</p>
                                            <p class="text-sm text-cyan-700">Video informativo accesible disponible</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- BECA 7: Integral -->
                        <div class="bg-white border-2 border-yellow-200 rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transition-all">
                            <div class="bg-gradient-to-r from-yellow-500 to-orange-600 text-white p-6 md:p-8">
                                <div class="flex items-start gap-4">
                                    <div class="w-14 h-14 bg-white/20 backdrop-blur-xl rounded-2xl flex items-center justify-center flex-shrink-0">
                                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-2xl md:text-xl font-bold mb-2">Beca Integral</h3>
                                        <p class="text-yellow-100">Doble monto por excelencia académica</p>
                                    </div>
                                    <div class="hidden md:block">
                                        <span class="inline-flex items-center gap-1 bg-white/20 backdrop-blur-xl px-4 py-2 rounded-full text-sm font-bold">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                            </svg>
                                            Video disponible
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 md:p-8">
                                <p class="text-gray-700 text-lg leading-relaxed mb-6">
                                    Esta beca está destinada a estudiantes que <strong>cursen materias de segundo año de la carrera en adelante</strong>. Para poder inscribirte, debes haber rendido al menos el <strong>70% de las materias</strong> que figuran en el plan de estudios del año anterior correspondiente.
                                </p>

                                <div class="bg-yellow-50 border-2 border-yellow-200 rounded-xl p-5 mb-6">
                                    <div class="flex items-start gap-3">
                                        <svg class="w-5 h-5 text-yellow-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <p class="text-yellow-900 font-semibold">
                                            La beca integral otorga el <strong>doble del monto</strong> de dinero que la beca de ayuda económica
                                        </p>
                                    </div>
                                </div>

                                <div class="grid md:grid-cols-2 gap-4 mb-6">
                                    <div class="bg-yellow-100 border border-yellow-300 rounded-lg p-4">
                                        <div class="flex items-center gap-2 mb-2">
                                            <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <p class="font-bold text-yellow-900">Requisito Académico</p>
                                        </div>
                                        <p class="text-sm text-yellow-800">70% de materias aprobadas</p>
                                    </div>
                                    <div class="bg-yellow-100 border border-yellow-300 rounded-lg p-4">
                                        <div class="flex items-center gap-2 mb-2">
                                            <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                            </svg>
                                            <p class="font-bold text-yellow-900">Año Mínimo</p>
                                        </div>
                                        <p class="text-sm text-yellow-800">A partir de segundo año</p>
                                    </div>
                                </div>

                                <!-- Placeholder para video -->
                                <div class="bg-gradient-to-br from-yellow-100 to-orange-100 border-2 border-yellow-300 rounded-xl p-8 text-center">
                                    <div class="w-16 h-16 bg-yellow-500 text-white rounded-full flex items-center justify-center mx-auto mb-4">
                                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <p class="text-yellow-900 font-semibold">Video explicativo disponible</p>
                                    <p class="text-sm text-yellow-700 mt-2">Conocé más sobre la Beca Integral</p>
                                </div>
                            </div>
                        </div>

                        <!-- BECA 8: Excepcional -->
                        <div class="bg-white border-2 border-red-200 rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transition-all">
                            <div class="bg-gradient-to-r from-red-500 to-rose-600 text-white p-6 md:p-8">
                                <div class="flex items-start gap-4">
                                    <div class="w-14 h-14 bg-white/20 backdrop-blur-xl rounded-2xl flex items-center justify-center flex-shrink-0">
                                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-2xl md:text-xl font-bold mb-2">Beca Excepcional</h3>
                                        <p class="text-red-100">Para situaciones socioeconómicas imprevistas</p>
                                    </div>
                                    <div class="hidden md:block">
                                        <span class="inline-flex items-center gap-1 bg-white/20 backdrop-blur-xl px-4 py-2 rounded-full text-sm font-bold">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                            </svg>
                                            Video disponible
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 md:p-8">
                                <p class="text-gray-700 text-lg leading-relaxed mb-6">
                                    Esta beca, <strong>equivalente a la beca de ayuda económica o de comedor</strong>, podrá ser solicitada en el caso del <strong>cambio brusco de la situación socio-económica</strong> del estudiante.
                                </p>

                                <div class="bg-red-50 border-2 border-red-200 rounded-xl p-5 mb-6">
                                    <div class="flex items-start gap-3">
                                        <svg class="w-5 h-5 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                        </svg>
                                        <div>
                                            <p class="text-red-900 font-semibold mb-2">
                                                Esta beca se puede otorgar <strong>sólo una vez</strong>, desde que inicia sus estudios hasta que los finaliza
                                            </p>
                                            <p class="text-red-800 text-sm">
                                                Para solicitarla, el estudiante deberá hacerlo mediante una nota
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid md:grid-cols-2 gap-4 mb-6">
                                    <div class="bg-red-100 border border-red-300 rounded-lg p-4">
                                        <div class="flex items-center gap-2 mb-2">
                                            <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                            </svg>
                                            <p class="font-bold text-red-900">Solicitud</p>
                                        </div>
                                        <p class="text-sm text-red-800">Mediante nota formal</p>
                                    </div>
                                    <div class="bg-red-100 border border-red-300 rounded-lg p-4">
                                        <div class="flex items-center gap-2 mb-2">
                                            <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <p class="font-bold text-red-900">Límite</p>
                                        </div>
                                        <p class="text-sm text-red-800">Una sola vez en toda la carrera</p>
                                    </div>
                                </div>

                                <!-- Video en lengua de señas -->
                                <div class="bg-gradient-to-br from-red-100 to-rose-100 border-2 border-red-300 rounded-xl p-6">
                                    <div class="flex items-center gap-3">
                                        <div class="w-12 h-12 bg-red-500 text-white rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-bold text-red-900"> Beca en Lengua de Señas</p>
                                            <p class="text-sm text-red-700">Video informativo accesible disponible</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- BECA 9: CREER (Mérito Académico) -->
                        <div class="bg-white border-2 border-indigo-200 rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transition-all">
                            <div class="bg-gradient-to-r from-indigo-500 via-purple-600 to-pink-600 text-white p-6 md:p-8">
                                <div class="flex items-start gap-4">
                                    <div class="w-14 h-14 bg-white/20 backdrop-blur-xl rounded-2xl flex items-center justify-center flex-shrink-0">
                                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-2xl md:text-xl font-bold mb-2">Beca CREER - Mérito Académico</h3>
                                        <p class="text-indigo-100">Para estudiantes destacados del secundario</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 md:p-8">
                                <p class="text-gray-700 text-lg leading-relaxed mb-6">
                                    Destinada a <strong>estudiantes de nivel medio de toda la provincia y zonas de influencia</strong> (Sur de Santa Fe, Centro y sur de Córdoba, Centro y sur de Mendoza, San Juan y La Pampa), que tengan un <strong>destacado nivel académico</strong> en los dos últimos años del secundario.
                                </p>

                                <div class="bg-gradient-to-br from-indigo-50 to-purple-50 border-2 border-indigo-200 rounded-xl p-6 mb-6">
                                    <h4 class="font-bold text-indigo-900 mb-4 flex items-center gap-2">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        Requisitos
                                    </h4>
                                    <ul class="space-y-3">
                                        <li class="flex items-start gap-3">
                                            <span class="inline-flex items-center justify-center w-6 h-6 bg-indigo-500 text-white rounded-full text-xs font-bold flex-shrink-0">1</span>
                                            <span class="text-gray-700"><strong>Promedio superior a 8</strong> en los dos últimos años del secundario</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <span class="inline-flex items-center justify-center w-6 h-6 bg-purple-500 text-white rounded-full text-xs font-bold flex-shrink-0">2</span>
                                            <span class="text-gray-700">Inscripción en una <strong>carrera prioritaria</strong> definida anualmente por la universidad</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <span class="inline-flex items-center justify-center w-6 h-6 bg-pink-500 text-white rounded-full text-xs font-bold flex-shrink-0">3</span>
                                            <span class="text-gray-700">Las carreras se definen en función del <strong>área de vacancia o importancia</strong> para cada región</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Zonas de cobertura -->
                                <div class="bg-indigo-50 border-2 border-indigo-200 rounded-xl p-5">
                                    <h4 class="font-bold text-indigo-900 mb-3 flex items-center gap-2">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        Zonas de Cobertura
                                    </h4>
                                    <div class="grid md:grid-cols-2 gap-3">
                                        <div class="flex items-center gap-2 text-sm text-indigo-800">
                                            <svg class="w-4 h-4 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span>San Luis (toda la provincia)</span>
                                        </div>
                                        <div class="flex items-center gap-2 text-sm text-indigo-800">
                                            <svg class="w-4 h-4 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span>Sur de Santa Fe</span>
                                        </div>
                                        <div class="flex items-center gap-2 text-sm text-indigo-800">
                                            <svg class="w-4 h-4 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span>Centro y Sur de Córdoba</span>
                                        </div>
                                        <div class="flex items-center gap-2 text-sm text-indigo-800">
                                            <svg class="w-4 h-4 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span>Centro y Sur de Mendoza</span>
                                        </div>
                                        <div class="flex items-center gap-2 text-sm text-indigo-800">
                                            <svg class="w-4 h-4 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span>San Juan</span>
                                        </div>
                                        <div class="flex items-center gap-2 text-sm text-indigo-800">
                                            <svg class="w-4 h-4 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span>La Pampa</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- Proceso de Control -->
        <section class="py-16 md:py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="max-w-7xl mx-auto">

                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 border-2 border-blue-200 rounded-xl p-8 md:p-12">
                        <div class="flex items-start gap-6 mb-8">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 text-white rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-xl font-bold text-slate-900 mb-4">Control y Seguimiento Anual</h2>
                                <p class="text-gray-700 text-lg leading-relaxed">
                                    Durante <strong>todo el año</strong>, este Departamento está abocado al <strong>control de bajas y altas de becas</strong>, las cuales las últimas se informan al <strong>Departamento de Trabajo Social</strong> para que los estudiantes sean entrevistados y así poder corroborar los datos colocados en la solicitud, la cual tiene <strong>carácter de declaración jurada</strong>.
                                </p>
                            </div>
                        </div>

                        <!-- Proceso visual -->
                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="bg-white border-2 border-blue-200 rounded-xl p-5 text-center">
                                <div class="w-12 h-12 bg-blue-500 text-white rounded-full flex items-center justify-center mx-auto mb-3 font-bold text-lg">1</div>
                                <h4 class="font-bold text-slate-900 mb-2">Solicitud</h4>
                                <p class="text-sm text-gray-600">El estudiante presenta su declaración jurada</p>
                            </div>
                            <div class="bg-white border-2 border-indigo-200 rounded-xl p-5 text-center">
                                <div class="w-12 h-12 bg-indigo-500 text-white rounded-full flex items-center justify-center mx-auto mb-3 font-bold text-lg">2</div>
                                <h4 class="font-bold text-slate-900 mb-2">Control</h4>
                                <p class="text-sm text-gray-600">Departamento de Becas revisa y procesa</p>
                            </div>
                            <div class="bg-white border-2 border-purple-200 rounded-xl p-5 text-center">
                                <div class="w-12 h-12 bg-purple-500 text-white rounded-full flex items-center justify-center mx-auto mb-3 font-bold text-lg">3</div>
                                <h4 class="font-bold text-slate-900 mb-2">Entrevista</h4>
                                <p class="text-sm text-gray-600">Trabajo Social corrobora los datos</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- CTA de Contacto -->
        <section class="py-16 md:py-20 bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700">
            <div class="container mx-auto px-4">
                <div class="max-w-7xl mx-auto text-center">

                    <div class="inline-block bg-white/10 backdrop-blur-xl text-white px-5 py-2 rounded-full font-semibold mb-6 border border-white/20">
                         ¿Tenés Dudas sobre las Becas?
                    </div>

                    <h2 class="text-xl md:text-2xl font-bold text-white mb-6">
                        Estamos para Ayudarte
                    </h2>

                    <p class="text-xl text-blue-100 mb-10 mx-auto">
                        Nuestro equipo está disponible para orientarte en el proceso de solicitud y resolver todas tus consultas
                    </p>

                    <div class="flex flex-wrap gap-4 justify-center mb-12">
                        <a href="mailto:becasunsl@gmail.com" class="inline-flex items-center gap-2 bg-white text-blue-600 px-8 py-4 rounded-xl font-bold text-lg hover:bg-blue-50 transition-all shadow-xl hover:shadow-2xl hover:scale-105">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            Enviar Email
                        </a>

                        <a href="tel:02664422818" class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-xl text-white border-2 border-white/30 px-8 py-4 rounded-xl font-bold text-lg hover:bg-white/20 transition-all">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            Llamar: 0266-4422818 int. 8134
                        </a>
                    </div>

                    <!-- Info adicional -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl p-6">
                            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-white font-bold mb-2">100% Gratuito</h3>
                            <p class="text-blue-100 text-sm">No hay costo para solicitar las becas</p>
                        </div>

                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl p-6">
                            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-white font-bold mb-2">Atención Continua</h3>
                            <p class="text-blue-100 text-sm">Seguimiento durante todo el año</p>
                        </div>

                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl p-6">
                            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-white font-bold mb-2">Trabajo Social</h3>
                            <p class="text-blue-100 text-sm">Asesoramiento personalizado</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- FAQ Rápido -->
        <section class="py-16 md:py-20 bg-gradient-to-br from-gray-50 to-blue-50">
            <div class="container mx-auto px-4">
                <div class="max-w-7xl mx-auto">

                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-blue-100 text-blue-700 px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Preguntas Frecuentes
                        </div>
                        <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Dudas Comunes</h2>
                    </div>

                    <div class="space-y-4">

                        <!-- FAQ 1 -->
                        <details class="bg-white border-2 border-blue-200 rounded-2xl overflow-hidden group">
                            <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-blue-50 transition-colors">
                                <span class="font-bold text-slate-900 text-lg">¿Puedo solicitar más de una beca?</span>
                                <svg class="w-5 h-5 text-blue-600 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="p-6 pt-0 text-gray-700">
                                <p>Sí, podés combinar diferentes becas según tu situación. Por ejemplo, podés tener una Beca de Ayuda Económica y una de Comedor al mismo tiempo, siempre que cumplas con los requisitos de cada una.</p>
                            </div>
                        </details>

                        <!-- FAQ 2 -->
                        <details class="bg-white border-2 border-blue-200 rounded-2xl overflow-hidden group">
                            <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-blue-50 transition-colors">
                                <span class="font-bold text-slate-900 text-lg">¿Cuándo abren las convocatorias?</span>
                                <svg class="w-5 h-5 text-blue-600 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="p-6 pt-0 text-gray-700">
                                <p>Las convocatorias se abren generalmente al inicio del ciclo lectivo. Te recomendamos estar atento a las comunicaciones oficiales de la universidad y seguir las redes sociales del Departamento de Becas para conocer las fechas exactas.</p>
                            </div>
                        </details>

                        <!-- FAQ 3 -->
                        <details class="bg-white border-2 border-blue-200 rounded-2xl overflow-hidden group">
                            <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-blue-50 transition-colors">
                                <span class="font-bold text-slate-900 text-lg">¿Qué pasa si pierdo la beca?</span>
                                <svg class="w-5 h-5 text-blue-600 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="p-6 pt-0 text-gray-700">
                                <p>Si no cumplís con los requisitos académicos o cambia tu situación socioeconómica, podés perder la beca. Sin embargo, en situaciones excepcionales, podés solicitar la Beca Excepcional una vez durante toda tu carrera.</p>
                            </div>
                        </details>

                        <!-- FAQ 4 -->
                        <details class="bg-white border-2 border-blue-200 rounded-2xl overflow-hidden group">
                            <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-blue-50 transition-colors">
                                <span class="font-bold text-slate-900 text-lg">¿Los ingresantes pueden solicitar becas?</span>
                                <svg class="w-5 h-5 text-blue-600 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="p-6 pt-0 text-gray-700">
                                <p>¡Sí! La mayoría de las becas (Ayuda Económica, Comedor, Transporte, Cuidados Infantiles) están disponibles tanto para ingresantes como para estudiantes que ya estén cursando. Algunas becas como la Integral o por Contraprestación requieren haber cursado al menos un año.</p>
                            </div>
                        </details>

                        <!-- FAQ 5 -->
                        <details class="bg-white border-2 border-blue-200 rounded-2xl overflow-hidden group">
                            <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-blue-50 transition-colors">
                                <span class="font-bold text-slate-900 text-lg">¿Necesito ser de San Luis para solicitar una beca?</span>
                                <svg class="w-5 h-5 text-blue-600 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="p-6 pt-0 text-gray-700">
                                <p>No necesariamente. Las becas están disponibles para todos los estudiantes de la UNSL, independientemente de su lugar de origen. La Beca CREER incluso alcanza a estudiantes de otras provincias como Santa Fe, Córdoba, Mendoza, San Juan y La Pampa.</p>
                            </div>
                        </details>

                    </div>

                    <!-- CTA final FAQ -->
                    <div class="mt-12 text-center bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-2xl p-8">
                        <h3 class="text-2xl font-bold mb-3">¿No encontraste tu respuesta?</h3>
                        <p class="text-blue-100 mb-6">Contactanos directamente y te ayudaremos con todas tus consultas</p>
                        <a href="mailto:becasunsl@gmail.com" class="inline-flex items-center gap-2 bg-white text-blue-600 px-6 py-3 rounded-lg font-bold hover:bg-blue-50 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            Consultar por Email
                        </a>
                    </div>

                </div>
            </div>
        </section>



    <?php endwhile; ?>

</main>

<?php
get_footer();
?>