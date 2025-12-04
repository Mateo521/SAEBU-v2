<?php
/**
 * Template Name: Departamento de Compras
 */
get_header();
?>

<main class="bg-gradient-to-b from-white to-slate-50/30">

    <?php while (have_posts()) : the_post(); ?>

        <!-- Hero con gradiente de compras -->
        <section class="relative py-16 md:py-24 bg-gradient-to-br from-indigo-700 via-purple-700 to-pink-700 overflow-hidden">
            <!-- Patrón decorativo -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;"></div>
            </div>
            
            <!-- Formas decorativas -->
            <div class="absolute top-20 right-10 w-72 h-72 bg-blue-400/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 left-10 w-96 h-96 bg-pink-400/20 rounded-full blur-3xl"></div>
            
            <div class="container mx-auto px-4 relative">
                <div class="max-w-5xl mx-auto text-center">
                    <!-- Breadcrumb -->
                    <div class="mb-6">
                        <nav class="inline-flex items-center gap-2 text-sm text-indigo-200">
                            <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors">Inicio</a>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            <span class="text-white font-medium">Departamento de Compras</span>
                        </nav>
                    </div>

                    <!-- Badge -->
                    <div class="inline-block mb-6">
                        <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-xl text-white px-5 py-2.5 rounded-full text-sm font-semibold border border-white/20 shadow-lg">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            Gestión de Adquisiciones
                        </span>
                    </div>

                    <h1 class="text-2xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                        Departamento de Compras
                    </h1>
                    
                    <p class="text-xl text-indigo-100 max-w-3xl mx-auto leading-relaxed mb-8">
                        Gestionamos todas las adquisiciones necesarias para el funcionamiento de la SAEBU, desde insumos de comedor hasta equipamiento deportivo
                    </p>

                    <!-- Stats rápidas -->
                    <!--div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-3xl mx-auto">
                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-xl p-4">
                            <div class="text-xl font-bold text-yellow-300 mb-1">📋</div>
                            <div class="text-xs text-indigo-100">Licitaciones</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-xl p-4">
                            <div class="text-xl font-bold text-green-300 mb-1">⚡</div>
                            <div class="text-xs text-indigo-100">Compras Directas</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-xl p-4">
                            <div class="text-xl font-bold text-blue-300 mb-1">🍽️</div>
                            <div class="text-xs text-indigo-100">Insumos Comedor</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-xl p-4">
                            <div class="text-xl font-bold text-pink-300 mb-1">📊</div>
                            <div class="text-xs text-indigo-100">Plan Anual</div>
                        </div>
                    </div-->
                </div>
            </div>
        </section>

        <!-- Información Principal -->
        <section class="py-16 md:py-20">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Intro del departamento -->
                    <div class="bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 border-2 border-indigo-300 rounded-xl p-8 md:p-12 shadow-xl mb-12">
                        <div class="flex items-start gap-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-indigo-600 to-purple-700 text-white rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-xl font-bold text-slate-900 mb-4">¿Qué Hacemos?</h2>
                                <p class="text-gray-700 text-lg leading-relaxed">
                                    En el Departamento de Compras se llevan a cabo los <strong>trámites de Licitación Privada</strong> para adquirir los insumos de alimentos necesarios para prestar el servicio de comedor. Como también se inicia todo trámite de Compras requerido por los demás departamentos de SAEBU (Dpto. Deportes, Complejo recreativo y turístico La Florida, entre otros), ya sea por <strong>Licitación Privada</strong>, <strong>Compra Directa por Compulsa Abreviada</strong> en casos de urgencia, o para incluir en el <strong>Plan Anual de Compras</strong>.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Tipos de Compras -->
        <section class="py-16 md:py-20 bg-gradient-to-br from-slate-50 to-indigo-50">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Título -->
                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-indigo-600 text-white px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                            </svg>
                            Modalidades de Adquisición
                        </div>
                        <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Tipos de Compras que Gestionamos</h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Diferentes procedimientos según la necesidad y urgencia</p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-6">

                        <!-- TIPO 1: Licitación Privada -->
                        <div class="bg-white border-2 border-indigo-300 rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transition-all group">
                            <div class="bg-gradient-to-r from-indigo-600 to-purple-700 text-white p-6">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-white/20 backdrop-blur-xl rounded-xl flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold mb-1">Licitación Privada</h3>
                                        <p class="text-indigo-100 text-sm">Proceso formal de compra</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <p class="text-gray-700 leading-relaxed mb-4">
                                    Procedimiento utilizado principalmente para <strong>insumos de alimentos del comedor</strong> y compras de gran volumen.
                                </p>
                                
                                <div class="space-y-2">
                                    <div class="flex items-center gap-2 text-sm text-gray-600">
                                        <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Proceso transparente</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-sm text-gray-600">
                                        <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Múltiples proveedores</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-sm text-gray-600">
                                        <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Mejor precio-calidad</span>
                                    </div>
                                </div>

                                <div class="mt-4 bg-indigo-50 border border-indigo-200 rounded-xl p-3">
                                    <p class="text-xs text-indigo-900 font-semibold">
                                        <svg class="w-4 h-4 inline text-indigo-600 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        Ideal para: Compras programadas de gran volumen
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- TIPO 2: Compra Directa -->
                        <div class="bg-white border-2 border-green-300 rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transition-all group">
                            <div class="bg-gradient-to-r from-green-500 to-emerald-600 text-white p-6">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-white/20 backdrop-blur-xl rounded-xl flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold mb-1">Compra Directa</h3>
                                        <p class="text-green-100 text-sm">Compulsa abreviada</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <p class="text-gray-700 leading-relaxed mb-4">
                                    Procedimiento <strong>rápido y ágil</strong> utilizado en casos de urgencia o para compras de menor monto.
                                </p>
                                
                                <div class="space-y-2">
                                    <div class="flex items-center gap-2 text-sm text-gray-600">
                                        <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Proceso acelerado</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-sm text-gray-600">
                                        <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Para urgencias</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-sm text-gray-600">
                                        <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Menor trámite</span>
                                    </div>
                                </div>

                                <div class="mt-4 bg-green-50 border border-green-200 rounded-xl p-3">
                                    <p class="text-xs text-green-900 font-semibold">
                                        <svg class="w-4 h-4 inline text-green-600 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        Ideal para: Necesidades inmediatas y montos menores
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- TIPO 3: Plan Anual -->
                        <div class="bg-white border-2 border-blue-300 rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transition-all group">
                            <div class="bg-gradient-to-r from-blue-500 to-cyan-600 text-white p-6">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-white/20 backdrop-blur-xl rounded-xl flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold mb-1">Plan Anual de Compras</h3>
                                        <p class="text-blue-100 text-sm">Planificación estratégica</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <p class="text-gray-700 leading-relaxed mb-4">
                                    <strong>Planificación anticipada</strong> de todas las compras programadas para el año fiscal.
                                </p>
                                
                                <div class="space-y-2">
                                    <div class="flex items-center gap-2 text-sm text-gray-600">
                                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Visión a largo plazo</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-sm text-gray-600">
                                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Presupuesto organizado</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-sm text-gray-600">
                                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Optimización de recursos</span>
                                    </div>
                                </div>

                                <div class="mt-4 bg-blue-50 border border-blue-200 rounded-xl p-3">
                                    <p class="text-xs text-blue-900 font-semibold">
                                        <svg class="w-4 h-4 inline text-blue-600 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        Ideal para: Compras recurrentes y planificadas
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- Departamentos que Atendemos -->
        <section class="py-16 md:py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-purple-600 text-white px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            Nuestros Clientes Internos
                        </div>
                        <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Departamentos que Atendemos</h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Gestionamos las compras para todas las áreas de la SAEBU</p>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        
                        <!-- Comedor -->
                        <div class="bg-gradient-to-br from-orange-50 to-red-50 border-2 border-orange-300 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all">
                            <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-red-600 text-white rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Comedor Universitario</h3>
                            <p class="text-gray-700 text-sm">Insumos de alimentos y productos necesarios para el servicio diario</p>
                        </div>

                        <!-- Deportes -->
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 border-2 border-blue-300 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all">
                            <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-indigo-600 text-white rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Departamento de Deportes</h3>
                            <p class="text-gray-700 text-sm">Equipamiento deportivo, materiales e insumos para actividades físicas</p>
                        </div>

                        <!-- La Florida -->
                        <div class="bg-gradient-to-br from-cyan-50 to-teal-50 border-2 border-cyan-300 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all">
                            <div class="w-14 h-14 bg-gradient-to-br from-cyan-500 to-teal-600 text-white rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Complejo La Florida</h3>
                            <p class="text-gray-700 text-sm">Insumos para el complejo turístico y recreativo</p>
                        </div>

                        <!-- Otros Departamentos -->
                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 border-2 border-purple-300 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all md:col-span-2 lg:col-span-3">
                            <div class="flex items-start gap-4">
                                <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-pink-600 text-white rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">Otros Departamentos de SAEBU</h3>
                                    <p class="text-gray-700">También gestionamos las compras para todas las demás áreas administrativas, asistenciales, de salud y servicios que requieran adquisiciones de insumos, equipamiento o servicios.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- Proceso de Compra -->
        <section class="py-16 md:py-20 bg-gradient-to-br from-gray-50 to-slate-50">
            <div class="container mx-auto px-4">
                <div class="max-w-5xl mx-auto">

                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-indigo-600 text-white px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                            </svg>
                            ¿Cómo Funciona?
                        </div>
                        <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Proceso de Compra Paso a Paso</h2>
                        <p class="text-lg text-gray-600">Seguimos un procedimiento ordenado y transparente</p>
                    </div>

                    <!-- Timeline de proceso -->
                    <div class="relative">
                        <!-- Línea vertical conectora -->
                        <div class="absolute left-8 top-8 bottom-8 w-1 bg-gradient-to-b from-indigo-300 via-purple-300 to-pink-300 hidden md:block"></div>

                        <div class="space-y-8">
                            
                            <!-- Paso 1 -->
                            <div class="relative flex items-start gap-6">
                                <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 text-white rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg relative z-10">
                                    <span class="text-2xl font-bold">1</span>
                                </div>
                                <div class="bg-white border-2 border-indigo-200 rounded-2xl p-6 shadow-lg flex-1">
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">Solicitud del Departamento</h3>
                                    <p class="text-gray-700">Los departamentos de SAEBU envían su requerimiento de compra especificando productos, cantidades y necesidad.</p>
                                </div>
                            </div>

                            <!-- Paso 2 -->
                            <div class="relative flex items-start gap-6">
                                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 text-white rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg relative z-10">
                                    <span class="text-2xl font-bold">2</span>
                                </div>
                                <div class="bg-white border-2 border-purple-200 rounded-2xl p-6 shadow-lg flex-1">
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">Evaluación y Clasificación</h3>
                                    <p class="text-gray-700">El Departamento de Compras analiza la solicitud y determina el tipo de procedimiento: Licitación Privada, Compra Directa o inclusión en Plan Anual.</p>
                                </div>
                            </div>

                            <!-- Paso 3 -->
                            <div class="relative flex items-start gap-6">
                                <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-red-600 text-white rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg relative z-10">
                                    <span class="text-2xl font-bold">3</span>
                                </div>
                                <div class="bg-white border-2 border-pink-200 rounded-2xl p-6 shadow-lg flex-1">
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">Tramitación del Procedimiento</h3>
                                    <p class="text-gray-700">Se inicia el trámite correspondiente: preparación de pliegos, solicitud de presupuestos o cotizaciones según el caso.</p>
                                </div>
                            </div>

                            <!-- Paso 4 -->
                            <div class="relative flex items-start gap-6">
                                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-600 text-white rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg relative z-10">
                                    <span class="text-2xl font-bold">4</span>
                                </div>
                                <div class="bg-white border-2 border-blue-200 rounded-2xl p-6 shadow-lg flex-1">
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">Selección de Proveedor</h3>
                                    <p class="text-gray-700">Se evalúan las ofertas recibidas y se selecciona al proveedor que mejor cumple con los requisitos de precio, calidad y condiciones.</p>
                                </div>
                            </div>

                            <!-- Paso 5 -->
                            <div class="relative flex items-start gap-6">
                                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 text-white rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg relative z-10">
                                    <span class="text-2xl font-bold">5</span>
                                </div>
                                <div class="bg-white border-2 border-green-200 rounded-2xl p-6 shadow-lg flex-1">
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">Adjudicación y Entrega</h3>
                                    <p class="text-gray-700">Se formaliza la compra con el proveedor seleccionado y se coordina la entrega de los productos o servicios al departamento solicitante.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Portal de Compras -->
        <section class="py-16 md:py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="max-w-5xl mx-auto">

                    <div class="bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 rounded-xl overflow-hidden shadow-2xl">
                        <div class="grid md:grid-cols-2 gap-8 items-center">
                            
                            <!-- Contenido -->
                            <div class="p-8 md:p-12 text-white">
                                <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-xl px-4 py-2 rounded-full text-sm font-semibold mb-6 border border-white/30">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                                    </svg>
                                    Portal Web Oficial
                                </div>

                                <h2 class="text-xl md:text-2xl font-bold mb-6">Portal de Compras UNSL</h2>
                                
                                <p class="text-indigo-100 text-lg leading-relaxed mb-8">
                                    Accedé al portal oficial de compras de la Universidad Nacional de San Luis para consultar licitaciones, procedimientos y resultados.
                                </p>

                                <a href="https://compras.unsl.edu.ar" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-3 bg-white text-indigo-700 px-8 py-4 rounded-xl font-bold text-lg hover:bg-indigo-50 transition-all shadow-xl hover:shadow-2xl hover:scale-105">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                    Ir al Portal de Compras
                                </a>

                                <div class="mt-6 flex items-center gap-2 text-indigo-100 text-sm">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                    <span>Sitio seguro y oficial de la UNSL</span>
                                </div>
                            </div>

                            <!-- Imagen/Icono decorativo -->
                            <div class="hidden md:flex items-center justify-center p-12 bg-white/10 backdrop-blur-xl">
                                <div class="relative">
                                    <div class="w-64 h-64 bg-white/20 rounded-xl flex items-center justify-center backdrop-blur-xl border-2 border-white/30 shadow-2xl">
                                        <svg class="w-32 h-32 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <!-- Decoración flotante -->
                                    <div class="absolute -top-4 -right-4 w-20 h-20 bg-yellow-400/30 rounded-full blur-xl"></div>
                                    <div class="absolute -bottom-4 -left-4 w-24 h-24 bg-pink-400/30 rounded-full blur-xl"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Información de Contacto -->
        <section class="py-16 md:py-20 bg-gradient-to-br from-slate-50 to-indigo-50">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-indigo-600 text-white px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            Contactanos
                        </div>
                        <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Información de Contacto</h2>
                        <p class="text-lg text-gray-600">Estamos disponibles para resolver tus consultas sobre compras</p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-6">
                        
                        <!-- Teléfono -->
                        <div class="bg-white border-2 border-indigo-300 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all text-center group">
                            <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 text-white rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform shadow-lg">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Teléfono Interno</h3>
                            <a href="tel:8139" class="text-2xl font-bold text-indigo-600 hover:text-indigo-700 transition-colors">
                                8139
                            </a>
                            <p class="text-gray-600 text-sm mt-2">Interno UNSL</p>
                        </div>

                        <!-- Email -->
                        <div class="bg-white border-2 border-purple-300 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all text-center group">
                            <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 text-white rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform shadow-lg">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Correo Electrónico</h3>
                            <a href="mailto:dptocomprassaebu@gmail.com" class="text-lg font-bold text-purple-600 hover:text-purple-700 transition-colors break-all">
                                dptocomprassaebu@gmail.com
                            </a>
                            <p class="text-gray-600 text-sm mt-2">Respuesta en 24-48hs</p>
                        </div>

                        <!-- Portal Web -->
                        <div class="bg-white border-2 border-blue-300 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all text-center group">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-600 text-white rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform shadow-lg">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Portal de Compras</h3>
                            <a href="https://compras.unsl.edu.ar" target="_blank" rel="noopener noreferrer" class="text-lg font-bold text-blue-600 hover:text-blue-700 transition-colors inline-flex items-center gap-2">
                                compras.unsl.edu.ar
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                            <p class="text-gray-600 text-sm mt-2">Portal oficial UNSL</p>
                        </div>

                    </div>

                    <!-- CTA Destacado -->
                    <div class="mt-12 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 text-white rounded-2xl p-8 text-center shadow-2xl">
                        <h3 class="text-2xl md:text-xl font-bold mb-4">¿Necesitás Iniciar un Trámite de Compra?</h3>
                        <p class="text-indigo-100 text-lg mb-6 max-w-2xl mx-auto">
                            Contactate con nosotros para asesorarte sobre el mejor procedimiento según tu necesidad
                        </p>
                        <div class="flex flex-wrap gap-4 justify-center">
                            <a href="mailto:dptocomprassaebu@gmail.com" class="inline-flex items-center gap-2 bg-white text-indigo-700 px-8 py-4 rounded-xl font-bold text-lg hover:bg-indigo-50 transition-all shadow-xl hover:scale-105">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                Enviar Consulta por Email
                            </a>
                            <a href="tel:8139" class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-xl text-white border-2 border-white/30 px-8 py-4 rounded-xl font-bold text-lg hover:bg-white/20 transition-all">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                Llamar al Interno 8139
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section class="py-16 md:py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">
                    
                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-indigo-600 text-white px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Preguntas Frecuentes
                        </div>
                        <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Consultas Comunes sobre Compras</h2>
                    </div>

                    <div class="space-y-4">
                        
                        <!-- FAQ 1 -->
                        <details class="bg-gradient-to-br from-indigo-50 to-purple-50 border-2 border-indigo-300 rounded-2xl overflow-hidden group">
                            <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-white/50 transition-colors">
                                <span class="font-bold text-slate-900 text-lg">¿Cómo solicito una compra para mi departamento?</span>
                                <svg class="w-5 h-5 text-indigo-600 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="p-6 pt-0 text-gray-700">
                                <p>Debés contactarte con el Departamento de Compras enviando un email a <strong>dptocomprassaebu@gmail.com</strong> o llamando al interno <strong>8139</strong>. Enviá la solicitud con el detalle de los productos o servicios necesarios, cantidades y justificación.</p>
                            </div>
                        </details>

                        <!-- FAQ 2 -->
                        <details class="bg-gradient-to-br from-indigo-50 to-purple-50 border-2 border-indigo-300 rounded-2xl overflow-hidden group">
                            <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-white/50 transition-colors">
                                <span class="font-bold text-slate-900 text-lg">¿Cuál es la diferencia entre Licitación Privada y Compra Directa?</span>
                                <svg class="w-5 h-5 text-indigo-600 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="p-6 pt-0 text-gray-700">
                                <p>La <strong>Licitación Privada</strong> es un proceso formal con pliego de condiciones y múltiples oferentes, usado para compras de mayor envergadura. La <strong>Compra Directa por Compulsa Abreviada</strong> es un procedimiento más ágil para casos de urgencia o montos menores.</p>
                            </div>
                        </details>

                        <!-- FAQ 3 -->
                        <details class="bg-gradient-to-br from-indigo-50 to-purple-50 border-2 border-indigo-300 rounded-2xl overflow-hidden group">
                            <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-white/50 transition-colors">
                                <span class="font-bold text-slate-900 text-lg">¿Cuánto tiempo demora un trámite de compra?</span>
                                <svg class="w-5 h-5 text-indigo-600 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="p-6 pt-0 text-gray-700">
                                <p>Depende del tipo de procedimiento: Las <strong>Compras Directas</strong> pueden resolverse en pocos días, mientras que las <strong>Licitaciones Privadas</strong> requieren más tiempo por su proceso formal. Consultanos para estimar el tiempo según tu caso específico.</p>
                            </div>
                        </details>

                        <!-- FAQ 4 -->
                        <details class="bg-gradient-to-br from-indigo-50 to-purple-50 border-2 border-indigo-300 rounded-2xl overflow-hidden group">
                            <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-white/50 transition-colors">
                                <span class="font-bold text-slate-900 text-lg">¿Qué es el Plan Anual de Compras?</span>
                                <svg class="w-5 h-5 text-indigo-600 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="p-6 pt-0 text-gray-700">
                                <p>Es la <strong>planificación anticipada</strong> de todas las compras que se realizarán durante el año fiscal. Permite organizar mejor el presupuesto y agilizar los procesos. Las compras recurrentes se incluyen en este plan.</p>
                            </div>
                        </details>

                        <!-- FAQ 5 -->
                        <details class="bg-gradient-to-br from-indigo-50 to-purple-50 border-2 border-indigo-300 rounded-2xl overflow-hidden group">
                            <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-white/50 transition-colors">
                                <span class="font-bold text-slate-900 text-lg">¿Puedo consultar el estado de mi solicitud de compra?</span>
                                <svg class="w-5 h-5 text-indigo-600 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="p-6 pt-0 text-gray-700">
                                <p>Sí, podés comunicarte con nosotros por email o teléfono para consultar el estado de tu trámite. Te informaremos en qué etapa del proceso se encuentra tu solicitud.</p>
                            </div>
                        </details>

                        <!-- FAQ 6 -->
                        <details class="bg-gradient-to-br from-indigo-50 to-purple-50 border-2 border-indigo-300 rounded-2xl overflow-hidden group">
                            <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-white/50 transition-colors">
                                <span class="font-bold text-slate-900 text-lg">¿Qué departamentos pueden solicitar compras?</span>
                                <svg class="w-5 h-5 text-indigo-600 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="p-6 pt-0 text-gray-700">
                                <p>Todos los departamentos de SAEBU pueden solicitar compras: Comedor, Deportes, Complejo La Florida, áreas administrativas, asistenciales, de salud y cualquier otra dependencia que requiera insumos o servicios.</p>
                            </div>
                        </details>

                    </div>

                </div>
            </div>
        </section>

        <!-- Características del Servicio -->
        <section class="py-16 md:py-20 bg-gradient-to-br from-slate-100 to-indigo-100">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <div class="text-center mb-12">
                        <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">¿Por Qué Elegirnos?</h2>
                        <p class="text-lg text-gray-600">Nuestro compromiso con la excelencia en gestión de compras</p>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                        
                        <!-- Característica 1 -->
                        <div class="bg-white border-2 border-indigo-300 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all text-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 text-white rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Transparencia Total</h3>
                            <p class="text-gray-600 text-sm">Procesos claros y auditables</p>
                        </div>

                        <!-- Característica 2 -->
                        <div class="bg-white border-2 border-green-300 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all text-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 text-white rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Agilidad</h3>
                            <p class="text-gray-600 text-sm">Respuesta rápida a urgencias</p>
                        </div>

                        <!-- Característica 3 -->
                        <div class="bg-white border-2 border-blue-300 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all text-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-600 text-white rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Mejor Precio</h3>
                            <p class="text-gray-600 text-sm">Optimización de recursos</p>
                        </div>

                        <!-- Característica 4 -->
                        <div class="bg-white border-2 border-purple-300 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all text-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 text-white rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Atención Personalizada</h3>
                            <p class="text-gray-600 text-sm">Asesoramiento constante</p>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- Compras Principales -->
        <section class="py-16 md:py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="max-w-5xl mx-auto">

                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-orange-600 text-white px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            Áreas Prioritarias
                        </div>
                        <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Principales Compras que Gestionamos</h2>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        
                        <!-- Insumos Comedor -->
                        <div class="bg-gradient-to-br from-orange-50 to-red-50 border-2 border-orange-300 rounded-xl p-8 shadow-xl">
                            <div class="flex items-start gap-4 mb-6">
                                <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-red-600 text-white rounded-2xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-slate-900 mb-2">Insumos de Comedor</h3>
                                    <p class="text-orange-800 text-sm font-semibold">Área principal de gestión</p>
                                </div>
                            </div>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-2 text-gray-700">
                                    <svg class="w-5 h-5 text-orange-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>Alimentos frescos y secos</span>
                                </li>
                                <li class="flex items-start gap-2 text-gray-700">
                                    <svg class="w-5 h-5 text-orange-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>Carnes, frutas y verduras</span>
                                </li>
                                <li class="flex items-start gap-2 text-gray-700">
                                    <svg class="w-5 h-5 text-orange-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>Productos de almacén</span>
                                </li>
                                <li class="flex items-start gap-2 text-gray-700">
                                    <svg class="w-5 h-5 text-orange-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>Artículos de limpieza</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Equipamiento -->
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 border-2 border-blue-300 rounded-xl p-8 shadow-xl">
                            <div class="flex items-start gap-4 mb-6">
                                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-indigo-600 text-white rounded-2xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-slate-900 mb-2">Equipamiento y Servicios</h3>
                                    <p class="text-blue-800 text-sm font-semibold">Infraestructura y operaciones</p>
                                </div>
                            </div>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-2 text-gray-700">
                                    <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>Material deportivo</span>
                                </li>
                                <li class="flex items-start gap-2 text-gray-700">
                                    <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>Equipos de oficina</span>
                                </li>
                                <li class="flex items-start gap-2 text-gray-700">
                                    <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>Insumos para La Florida</span>
                                </li>
                                <li class="flex items-start gap-2 text-gray-700">
                                    <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>Servicios contratados</span>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- Estadísticas del Departamento -->
        <section class="py-16 md:py-20 bg-gradient-to-br from-indigo-700 via-purple-700 to-pink-700">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto text-center text-white">
                    
                    <h2 class="text-xl md:text-2xl font-bold mb-12">Nuestro Impacto</h2>

                    <div class="grid md:grid-cols-3 gap-8">
                        
                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl p-6">
                            <div class="text-5xl font-bold mb-2">3</div>
                            <div class="text-lg text-indigo-100">Tipos de Procedimientos</div>
                            <p class="text-sm text-indigo-200 mt-2">Licitación, Compra Directa, Plan Anual</p>
                        </div>

                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl p-6">
                            <div class="text-5xl font-bold mb-2">+10</div>
                            <div class="text-lg text-indigo-100">Departamentos Atendidos</div>
                            <p class="text-sm text-indigo-200 mt-2">Todas las áreas de SAEBU</p>
                        </div>

                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl p-6">
                            <div class="text-5xl font-bold mb-2">365</div>
                            <div class="text-lg text-indigo-100">Días al Año</div>
                            <p class="text-sm text-indigo-200 mt-2">Gestión continua</p>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- Recursos Útiles -->
        <section class="py-16 md:py-20 bg-gradient-to-br from-slate-50 to-blue-50">
            <div class="container mx-auto px-4">
                <div class="max-w-5xl mx-auto">

                    <div class="text-center mb-12">
                        <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Recursos y Enlaces Útiles</h2>
                        <p class="text-lg text-gray-600">Información adicional para proveedores y departamentos</p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        
                        <!-- Recurso 1 -->
                        <div class="bg-white border-2 border-indigo-300 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-slate-900 mb-2">Portal de Compras UNSL</h3>
                                    <p class="text-gray-600 text-sm mb-3">Accedé al sistema oficial de compras de la universidad</p>
                                    <a href="https://compras.unsl.edu.ar" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 text-indigo-600 hover:text-indigo-700 font-semibold text-sm">
                                        Visitar portal
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Recurso 2 -->
                        <div class="bg-white border-2 border-purple-300 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-slate-900 mb-2">Plan Anual de Compras</h3>
                                    <p class="text-gray-600 text-sm mb-3">Consultá las compras planificadas para el año en curso</p>
                                    <span class="inline-flex items-center gap-1 text-purple-600 font-semibold text-sm">
                                        Disponible en el portal
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Recurso 3 -->
                        <div class="bg-white border-2 border-blue-300 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-slate-900 mb-2">Formulario de Solicitud</h3>
                                    <p class="text-gray-600 text-sm mb-3">Descargá el formulario para solicitar compras</p>
                                    <span class="inline-flex items-center gap-1 text-blue-600 font-semibold text-sm">
                                        Solicitalo por email
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Recurso 4 -->
                        <div class="bg-white border-2 border-green-300 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-slate-900 mb-2">Guía para Proveedores</h3>
                                    <p class="text-gray-600 text-sm mb-3">Información sobre cómo participar en licitaciones</p>
                                    <span class="inline-flex items-center gap-1 text-green-600 font-semibold text-sm">
                                        Consultanos por info
                                    </span>
                                </div>
                            </div>
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

