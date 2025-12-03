<?php

/**
 * Template Name: Departamento Contable
 */
get_header();
?>

<main class="bg-gradient-to-b from-white to-slate-50/30">

    <?php while (have_posts()) : the_post(); ?>

        <!-- Hero con gradiente financiero -->
        <section class="relative py-16 md:py-24 bg-gradient-to-br from-slate-700 via-slate-800 to-slate-900 overflow-hidden">
            <!-- Patrón decorativo -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;"></div>
            </div>

            <!-- Formas decorativas -->
            <div class="absolute top-20 right-10 w-72 h-72 bg-emerald-500/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 left-10 w-96 h-96 bg-blue-400/20 rounded-full blur-3xl"></div>

            <div class="container mx-auto px-4 relative">
                <div class="max-w-5xl mx-auto text-center">
                    <!-- Breadcrumb -->
                    <div class="mb-6">
                        <nav class="inline-flex items-center gap-2 text-sm text-slate-300">
                            <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors">Inicio</a>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            <span class="text-white font-medium">Departamento Contable</span>
                        </nav>
                    </div>

                    <!-- Badge -->
                    <div class="inline-block mb-6">
                        <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-xl text-white px-5 py-2.5 rounded-full text-sm font-semibold border border-white/20 shadow-lg">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                            Gestión Financiera
                        </span>
                    </div>

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                        Departamento Contable
                    </h1>

                    <p class="text-xl text-slate-200 max-w-3xl mx-auto leading-relaxed mb-8">
                        Administramos los recursos financieros de la SAEBU para que todos los servicios estudiantiles funcionen correctamente
                    </p>

                    <!-- Stats rápidas -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-3xl mx-auto">
                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-xl p-4">
                            <div class="text-3xl font-bold text-emerald-400 mb-1">💰</div>
                            <div class="text-xs text-slate-200">Gestión de Becas</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-xl p-4">
                            <div class="text-3xl font-bold text-blue-400 mb-1">🏪</div>
                            <div class="text-xs text-slate-200">Comedor</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-xl p-4">
                            <div class="text-3xl font-bold text-purple-400 mb-1">🏖️</div>
                            <div class="text-xs text-slate-200">La Florida</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-xl p-4">
                            <div class="text-3xl font-bold text-orange-400 mb-1">📊</div>
                            <div class="text-xs text-slate-200">Control Total</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Función Principal -->
        <section class="py-16 md:py-20">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Intro con dependencia -->
                    <div class="bg-gradient-to-br from-slate-50 to-blue-50 border-2 border-slate-300 rounded-3xl p-8 md:p-12 shadow-xl mb-12">
                        <div class="flex items-start gap-6 mb-8">
                            <div class="w-16 h-16 bg-gradient-to-br from-slate-600 to-slate-800 text-white rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="inline-flex items-center gap-2 bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                    Dependencia Directa
                                </div>
                                <h2 class="text-3xl font-bold text-slate-900 mb-4">Función del Departamento</h2>
                                <p class="text-gray-700 text-lg leading-relaxed mb-4">
                                    El Departamento Contable tiene <strong>dependencia inmediata de la Dirección Administrativo-Contable</strong>. Esta oficina tiene una función muy importante ya que tiene a su cargo, dentro de la estructura de la Secretaría, toda la <strong>administración financiera</strong> de la misma.
                                </p>
                                <div class="bg-amber-50 border-2 border-amber-200 rounded-xl p-5">
                                    <div class="flex items-start gap-3">
                                        <svg class="w-5 h-5 text-amber-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                        </svg>
                                        <p class="text-amber-900 font-semibold">
                                            Es un <strong>área muy sensible</strong> debido a que todas las demás oficinas administrativas, asistenciales y de salud, deportivas y de recreación como así también de esparcimiento <strong>convergen en la misma</strong>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Tareas del Departamento -->
        <section class="py-16 md:py-20 bg-gradient-to-br from-slate-50 to-blue-50">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Título -->
                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-slate-700 text-white px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                            </svg>
                            6 Áreas Principales
                        </div>
                        <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Tareas a Nuestro Cargo</h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Gestión integral de todos los aspectos financieros de la Secretaría</p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">

                        <!-- TAREA 1: Control y Administración -->
                        <div class="bg-white border-2 border-slate-300 rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all group">
                            <div class="bg-gradient-to-r from-slate-600 to-slate-800 text-white p-6">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-white/20 backdrop-blur-xl rounded-xl flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold mb-1">Control y Administración</h3>
                                        <p class="text-slate-200 text-sm">Gestión financiera integral</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <p class="text-gray-700 leading-relaxed">
                                    <strong>Control y Administración Contable y Financiera</strong> de las cuentas corrientes de la SAEBU.
                                </p>
                                <div class="mt-4 flex items-center gap-2 text-sm text-slate-600">
                                    <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>Supervisión continua</span>
                                </div>
                            </div>
                        </div>

                        <!-- TAREA 2: Pago de Becas -->
                        <div class="bg-white border-2 border-emerald-300 rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all group">
                            <div class="bg-gradient-to-r from-emerald-500 to-green-600 text-white p-6">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-white/20 backdrop-blur-xl rounded-xl flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold mb-1">Pago de Becas</h3>
                                        <p class="text-emerald-100 text-sm">Apoyo directo a estudiantes</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <p class="text-gray-700 leading-relaxed mb-4">
                                    El <strong>pago de las becas</strong> de Ayuda Económica, CREER, de Contraprestación y +Conectados.
                                </p>

                                <div class="bg-emerald-50 border-2 border-emerald-200 rounded-xl p-4">
                                    <div class="flex items-start gap-3">
                                        <svg class="w-5 h-5 text-emerald-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div>
                                            <p class="text-emerald-900 font-semibold text-sm mb-2">
                                                Tarea de <strong>carácter sumamente importante</strong>
                                            </p>
                                            <p class="text-emerald-800 text-sm">
                                                Significa una ayuda enorme para los estudiantes en esta difícil situación económica y resulta un alivio para que puedan cursar sus estudios
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 space-y-2">
                                    <div class="flex items-center gap-2 text-sm text-gray-600">
                                        <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Ayuda Económica</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-sm text-gray-600">
                                        <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Beca CREER</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-sm text-gray-600">
                                        <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Contraprestación</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-sm text-gray-600">
                                        <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>+Conectados (acceso digital)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- TAREA 3: Comedor -->
                        <div class="bg-white border-2 border-blue-300 rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all group">
                            <div class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white p-6">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-white/20 backdrop-blur-xl rounded-xl flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold mb-1">Comedor Universitario</h3>
                                        <p class="text-blue-100 text-sm">Gestión de cuenta corriente</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <p class="text-gray-700 leading-relaxed">
                                    El <strong>manejo y cobro de cuenta corriente</strong> del servicio del comedor universitario.
                                </p>
                                <div class="mt-4 grid grid-cols-2 gap-3">
                                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-3 text-center">
                                        <p class="text-2xl font-bold text-blue-600 mb-1">📊</p>
                                        <p class="text-xs text-blue-900 font-semibold">Control de cuentas</p>
                                    </div>
                                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-3 text-center">
                                        <p class="text-2xl font-bold text-blue-600 mb-1">💳</p>
                                        <p class="text-xs text-blue-900 font-semibold">Gestión de cobros</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- TAREA 4: Proveedores -->
                        <div class="bg-white border-2 border-purple-300 rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all group">
                            <div class="bg-gradient-to-r from-purple-500 to-pink-600 text-white p-6">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-white/20 backdrop-blur-xl rounded-xl flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold mb-1">Pago de Proveedores</h3>
                                        <p class="text-purple-100 text-sm">Gestión de pagos externos</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <p class="text-gray-700 leading-relaxed">
                                    <strong>Pago de Proveedores</strong> que brindan servicios y productos a la Secretaría.
                                </p>
                                <div class="mt-4 flex items-center gap-2 text-sm text-slate-600">
                                    <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>Pagos en tiempo y forma</span>
                                </div>
                            </div>
                        </div>

                        <!-- TAREA 5: Servicios Contratados -->
                        <div class="bg-white border-2 border-orange-300 rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all group">
                            <div class="bg-gradient-to-r from-orange-500 to-red-600 text-white p-6">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-white/20 backdrop-blur-xl rounded-xl flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold mb-1">Servicios Contratados</h3>
                                        <p class="text-orange-100 text-sm">Incluye Residencia Estudiantil</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <p class="text-gray-700 leading-relaxed mb-4">
                                    <strong>Pago de los servicios contratados</strong> por Secretaría.
                                </p>

                                <div class="bg-orange-50 border-2 border-orange-200 rounded-xl p-4">
                                    <div class="flex items-start gap-3">
                                        <svg class="w-5 h-5 text-orange-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                        </svg>
                                        <p class="text-orange-900 font-semibold text-sm">
                                            Es de destacar que algunos de ellos son destinados a la <strong>residencia estudiantil</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- TAREA 6: La Florida -->
                        <div class="bg-white border-2 border-cyan-300 rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all group">
                            <div class="bg-gradient-to-r from-cyan-500 to-teal-600 text-white p-6">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-white/20 backdrop-blur-xl rounded-xl flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold mb-1">Complejo La Florida</h3>
                                        <p class="text-cyan-100 text-sm">Gestión turística y recreativa</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <p class="text-gray-700 leading-relaxed">
                                    <strong>Coordinación y administración contable y financiera</strong> del Complejo Turístico y Recreativo La Florida.
                                </p>
                                <div class="mt-4 grid grid-cols-2 gap-3">
                                    <div class="bg-cyan-50 border border-cyan-200 rounded-lg p-3 text-center">
                                        <p class="text-2xl font-bold text-cyan-600 mb-1">🏖️</p>
                                        <p class="text-xs text-cyan-900 font-semibold">Complejo turístico</p>
                                    </div>
                                    <div class="bg-cyan-50 border border-cyan-200 rounded-lg p-3 text-center">
                                        <p class="text-2xl font-bold text-cyan-600 mb-1">💰</p>
                                        <p class="text-xs text-cyan-900 font-semibold">Gestión financiera</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- Reconocimiento al Equipo -->
        <section class="py-16 md:py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="max-w-5xl mx-auto">

                    <div class="bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 border-2 border-emerald-300 rounded-3xl p-8 md:p-12 shadow-2xl">
                        <div class="flex flex-col md:flex-row items-start gap-8">

                            <!-- Icono destacado -->
                            <div class="w-20 h-20 bg-gradient-to-br from-emerald-500 to-teal-600 text-white rounded-3xl flex items-center justify-center flex-shrink-0 shadow-xl">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>

                            <div class="flex-1">
                                <div class="inline-flex items-center gap-2 bg-emerald-500 text-white px-4 py-2 rounded-full font-semibold mb-4">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                    </svg>
                                    Trabajo Destacado
                                </div>

                                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6">
                                    Compromiso Durante la Pandemia
                                </h2>

                                <div class="prose prose-lg max-w-none">
                                    <p class="text-gray-700 text-lg leading-relaxed mb-6">
                                        Es importante destacar la tarea que ha venido haciendo el <strong>equipo de trabajo que conforma el Departamento Contable</strong> desde el inicio de la pandemia y a lo largo de la misma.
                                    </p>

                                    <div class="bg-white border-2 border-emerald-200 rounded-2xl p-6 mb-6">
                                        <div class="flex items-start gap-4">
                                            <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <h3 class="font-bold text-emerald-900 mb-2 text-xl">Labor Ininterrumpida</h3>
                                                <p class="text-gray-700">
                                                    Esta oficina <strong>siempre ha estado realizando su labor de manera ininterrumpida</strong>, ya sea de manera <strong>presencial o remota</strong>, de modo que todas las necesidades de la Secretaría pudieran ser resueltas en <strong>tiempo y forma</strong>.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modalidades de trabajo -->
                                    <div class="grid md:grid-cols-2 gap-4">
                                        <div class="bg-white border border-emerald-200 rounded-xl p-5">
                                            <div class="flex items-center gap-3 mb-3">
                                                <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center">
                                                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                                    </svg>
                                                </div>
                                                <h4 class="font-bold text-slate-900">Trabajo Presencial</h4>
                                            </div>
                                            <p class="text-sm text-gray-600">Atención en oficina cuando fue necesario</p>
                                        </div>

                                        <div class="bg-white border border-emerald-200 rounded-xl p-5">
                                            <div class="flex items-center gap-3 mb-3">
                                                <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center">
                                                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                    </svg>
                                                </div>
                                                <h4 class="font-bold text-slate-900">Trabajo Remoto</h4>
                                            </div>
                                            <p class="text-sm text-gray-600">Gestión digital sin interrupciones</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Visualización del Flujo de Trabajo -->
        <section class="py-16 md:py-20 bg-gradient-to-br from-slate-100 to-blue-100">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-slate-700 text-white px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            Proceso Integrado
                        </div>
                        <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Conexión con Todas las Áreas</h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">El Departamento Contable es el punto central de convergencia financiera</p>
                    </div>

                    <!-- Diagrama visual -->
                    <div class="relative">
                        <!-- Centro: Departamento Contable -->
                        <div class="bg-gradient-to-br from-slate-700 to-slate-900 border-4 border-slate-500 text-white rounded-3xl p-8 max-w-md mx-auto relative z-10 shadow-2xl">
                            <div class="text-center">
                                <div class="w-16 h-16 bg-white/20 backdrop-blur-xl rounded-2xl flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold mb-2">Departamento Contable</h3>
                                <p class="text-slate-300 text-sm">Centro de Administración Financiera</p>
                            </div>
                        </div>

                        <!-- Áreas conectadas -->
                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 mt-12">

                            <!-- Área 1 -->
                            <div class="bg-white border-2 border-emerald-300 rounded-2xl p-5 shadow-lg hover:shadow-xl transition-all">
                                <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mb-3">
                                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <h4 class="font-bold text-slate-900 mb-2">Oficinas Administrativas</h4>
                                <p class="text-sm text-gray-600">Coordinación operativa</p>
                            </div>

                            <!-- Área 2 -->
                            <div class="bg-white border-2 border-blue-300 rounded-2xl p-5 shadow-lg hover:shadow-xl transition-all">
                                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-3">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </div>
                                <h4 class="font-bold text-slate-900 mb-2">Asistenciales y Salud</h4>
                                <p class="text-sm text-gray-600">Servicios estudiantiles</p>
                            </div>

                            <!-- Área 3 -->
                            <div class="bg-white border-2 border-purple-300 rounded-2xl p-5 shadow-lg hover:shadow-xl transition-all">
                                <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mb-3">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h4 class="font-bold text-slate-900 mb-2">Deportivas y Recreación</h4>
                                <p class="text-sm text-gray-600">Actividades físicas</p>
                            </div>

                            <!-- Área 4 -->
                            <div class="bg-white border-2 border-orange-300 rounded-2xl p-5 shadow-lg hover:shadow-xl transition-all">
                                <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mb-3">
                                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h4 class="font-bold text-slate-900 mb-2">Esparcimiento</h4>
                                <p class="text-sm text-gray-600">Actividades culturales</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Firma del Responsable -->
        <section class="py-16 md:py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="max-w-3xl mx-auto">

                    <div class="bg-gradient-to-br from-slate-50 to-blue-50 border-2 border-slate-300 rounded-3xl p-8 md:p-10 shadow-xl">
                        <div class="flex items-start gap-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-slate-600 to-slate-800 text-white rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-slate-600 mb-4 text-lg">Atentamente,</p>
                                <p class="text-2xl font-bold text-slate-900 mb-2">Gustavo Garay</p>
                                <p class="text-slate-600 font-semibold">Departamento Contable</p>
                                <p class="text-slate-500 text-sm">SAEBU - UNSL</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- CTA de Contacto -->
        <section class="py-16 md:py-20 bg-gradient-to-br from-slate-700 via-slate-800 to-slate-900">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto text-center">

                    <div class="inline-block bg-white/10 backdrop-blur-xl text-white px-5 py-2 rounded-full font-semibold mb-6 border border-white/20">
                        💼 ¿Necesitás Información Contable?
                    </div>

                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                        Estamos para Atenderte
                    </h2>

                    <p class="text-xl text-slate-200 mb-10 max-w-2xl mx-auto">
                        Nuestro equipo está disponible para resolver tus consultas sobre pagos, becas y administración financiera
                    </p>

                    <div class="flex flex-wrap gap-4 justify-center mb-12">
                        <a href="mailto:contable@saebu.unsl.edu.ar" class="inline-flex items-center gap-2 bg-white text-slate-700 px-8 py-4 rounded-xl font-bold text-lg hover:bg-slate-100 transition-all shadow-xl hover:shadow-2xl hover:scale-105">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            Enviar Email
                        </a>

                        <a href="tel:02664520300" class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-xl text-white border-2 border-white/30 px-8 py-4 rounded-xl font-bold text-lg hover:bg-white/20 transition-all">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            Llamar al Departamento
                        </a>
                    </div>

                    <!-- Info adicional -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl p-6">
                            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-white font-bold mb-2">Atención Continua</h3>
                            <p class="text-slate-300 text-sm">Trabajo ininterrumpido presencial y remoto</p>
                        </div>

                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl p-6">
                            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-white font-bold mb-2">Pagos Puntuales</h3>
                            <p class="text-slate-300 text-sm">Gestión en tiempo y forma</p>
                        </div>

                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl p-6">
                            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-white font-bold mb-2">Equipo Comprometido</h3>
                            <p class="text-slate-300 text-sm">Profesionales dedicados</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- FAQ Rápido Contable -->
        <section class="py-16 md:py-20 bg-gradient-to-br from-gray-50 to-slate-50">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">

                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-slate-700 text-white px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Preguntas Frecuentes
                        </div>
                        <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Consultas Comunes</h2>
                    </div>

                    <div class="space-y-4">

                        <!-- FAQ 1 -->
                        <details class="bg-white border-2 border-slate-300 rounded-2xl overflow-hidden group">
                            <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-slate-50 transition-colors">
                                <span class="font-bold text-slate-900 text-lg">¿Cuándo se realizan los pagos de becas?</span>
                                <svg class="w-5 h-5 text-slate-600 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="p-6 pt-0 text-gray-700">
                                <p>El Departamento Contable procesa los pagos de becas de manera mensual. Las fechas específicas pueden variar, pero siempre se gestionan en tiempo y forma para asegurar que los estudiantes reciban su ayuda puntualmente.</p>
                            </div>
                        </details>

                        <!-- FAQ 2 -->
                        <details class="bg-white border-2 border-slate-300 rounded-2xl overflow-hidden group">
                            <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-slate-50 transition-colors">
                                <span class="font-bold text-slate-900 text-lg">¿Qué becas gestiona el Departamento Contable?</span>
                                <svg class="w-5 h-5 text-slate-600 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="p-6 pt-0 text-gray-700">
                                <p>Gestionamos el pago de: Becas de Ayuda Económica, Beca CREER (mérito académico), Becas de Contraprestación de Servicios, y el Programa +Conectados que permite a los estudiantes seguir cursando vía smartphone.</p>
                            </div>
                        </details>

                        <!-- FAQ 3 -->
                        <details class="bg-white border-2 border-slate-300 rounded-2xl overflow-hidden group">
                            <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-slate-50 transition-colors">
                                <span class="font-bold text-slate-900 text-lg">¿Cómo funciona la cuenta corriente del comedor?</span>
                                <svg class="w-5 h-5 text-slate-600 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="p-6 pt-0 text-gray-700">
                                <p>El Departamento Contable maneja y controla la cuenta corriente del comedor universitario, gestionando tanto el cobro de servicios como la administración financiera del sistema de viandas para estudiantes.</p>
                            </div>
                        </details>

                        <!-- FAQ 4 -->
                        <details class="bg-white border-2 border-slate-300 rounded-2xl overflow-hidden group">
                            <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-slate-50 transition-colors">
                                <span class="font-bold text-slate-900 text-lg">¿El departamento siguió funcionando durante la pandemia?</span>
                                <svg class="w-5 h-5 text-slate-600 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="p-6 pt-0 text-gray-700">
                                <p>Sí, el Departamento Contable trabajó de manera ininterrumpida durante toda la pandemia, tanto de forma presencial como remota, asegurando que todas las necesidades financieras de la Secretaría fueran resueltas en tiempo y forma.</p>
                            </div>
                        </details>

                        <!-- FAQ 5 -->
                        <details class="bg-white border-2 border-slate-300 rounded-2xl overflow-hidden group">
                            <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-slate-50 transition-colors">
                                <span class="font-bold text-slate-900 text-lg">¿Qué servicios del Complejo La Florida gestiona el departamento?</span>
                                <svg class="w-5 h-5 text-slate-600 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="p-6 pt-0 text-gray-700">
                                <p>Nos encargamos de toda la coordinación y administración contable y financiera del Complejo Turístico y Recreativo La Florida, incluyendo ingresos, gastos operativos y gestión de recursos del complejo.</p>
                            </div>
                        </details>

                        <!-- FAQ 6 -->
                        <details class="bg-white border-2 border-slate-300 rounded-2xl overflow-hidden group">
                            <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-slate-50 transition-colors">
                                <span class="font-bold text-slate-900 text-lg">¿Con qué áreas de la SAEBU trabaja el Departamento Contable?</span>
                                <svg class="w-5 h-5 text-slate-600 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="p-6 pt-0 text-gray-700">
                                <p>Trabajamos con todas las áreas: oficinas administrativas, servicios asistenciales y de salud, deportivas y de recreación, y actividades de esparcimiento. Somos el punto de convergencia financiera de toda la Secretaría.</p>
                            </div>
                        </details>

                    </div>

                    <!-- CTA final FAQ -->
                    <div class="mt-12 text-center bg-gradient-to-r from-slate-700 to-slate-900 text-white rounded-2xl p-8">
                        <h3 class="text-2xl font-bold mb-3">¿Tenés otra consulta?</h3>
                        <p class="text-slate-300 mb-6">Contactate con el Departamento Contable para más información</p>
                        <a href="mailto:contable@saebu.unsl.edu.ar" class="inline-flex items-center gap-2 bg-white text-slate-800 px-6 py-3 rounded-lg font-bold hover:bg-slate-100 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            Enviar Consulta
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- Estadísticas Visuales -->
        <section class="py-16 md:py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <div class="text-center mb-12">
                        <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Nuestro Alcance</h2>
                        <p class="text-lg text-gray-600">Impacto del Departamento Contable en números</p>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

                        <!-- Stat 1 -->
                        <div class="bg-gradient-to-br from-emerald-500 to-green-600 rounded-2xl p-6 text-white shadow-xl">
                            <div class="text-5xl font-bold mb-2">💰</div>
                            <div class="text-3xl font-bold mb-2">4</div>
                            <div class="text-emerald-100">Tipos de Becas Gestionadas</div>
                        </div>

                        <!-- Stat 2 -->
                        <div class="bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl p-6 text-white shadow-xl">
                            <div class="text-5xl font-bold mb-2">🏪</div>
                            <div class="text-3xl font-bold mb-2">1</div>
                            <div class="text-blue-100">Comedor Universitario</div>
                        </div>

                        <!-- Stat 3 -->
                        <div class="bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl p-6 text-white shadow-xl">
                            <div class="text-5xl font-bold mb-2">📊</div>
                            <div class="text-3xl font-bold mb-2">6</div>
                            <div class="text-purple-100">Áreas de Gestión</div>
                        </div>

                        <!-- Stat 4 -->
                        <div class="bg-gradient-to-br from-orange-500 to-red-600 rounded-2xl p-6 text-white shadow-xl">
                            <div class="text-5xl font-bold mb-2">⚡</div>
                            <div class="text-3xl font-bold mb-2">100%</div>
                            <div class="text-orange-100">Operativo (Pandemia)</div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- Beneficios Clave -->
        <section class="py-16 md:py-20 bg-gradient-to-br from-slate-50 to-blue-50">
            <div class="container mx-auto px-4">
                <div class="max-w-5xl mx-auto">

                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-slate-700 text-white px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                            </svg>
                            Por Qué Somos Importantes
                        </div>
                        <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Beneficios de Una Gestión Eficiente</h2>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">

                        <!-- Beneficio 1 -->
                        <div class="bg-white border-2 border-emerald-300 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-slate-900 text-lg mb-2">Pagos Puntuales</h3>
                                    <p class="text-gray-600">Las becas se pagan en tiempo y forma, brindando seguridad financiera a los estudiantes para que puedan concentrarse en sus estudios.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Beneficio 2 -->
                        <div class="bg-white border-2 border-blue-300 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-slate-900 text-lg mb-2">Transparencia Total</h3>
                                    <p class="text-gray-600">Control y administración contable rigurosa que garantiza el uso correcto de los recursos de la SAEBU.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Beneficio 3 -->
                        <div class="bg-white border-2 border-purple-300 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-slate-900 text-lg mb-2">Agilidad Operativa</h3>
                                    <p class="text-gray-600">Respuesta rápida a las necesidades de todas las áreas de la Secretaría, manteniendo la continuidad de los servicios.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Beneficio 4 -->
                        <div class="bg-white border-2 border-orange-300 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-slate-900 text-lg mb-2">Compromiso Continuo</h3>
                                    <p class="text-gray-600">Trabajo ininterrumpido incluso en situaciones adversas, garantizando estabilidad financiera permanente.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- Servicios Destacados -->
        <section class="py-16 md:py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <div class="text-center mb-12">
                        <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Servicios Prioritarios</h2>
                        <p class="text-lg text-gray-600">Actividades clave que impactan directamente en la comunidad estudiantil</p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-6">

                        <!-- Servicio 1: Becas -->
                        <div class="group">
                            <div class="bg-gradient-to-br from-emerald-50 to-green-50 border-2 border-emerald-300 rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all h-full">
                                <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-green-600 text-white rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-slate-900 mb-4">Gestión de Becas</h3>
                                <ul class="space-y-3">
                                    <li class="flex items-start gap-2 text-gray-700">
                                        <svg class="w-5 h-5 text-emerald-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Ayuda Económica</span>
                                    </li>
                                    <li class="flex items-start gap-2 text-gray-700">
                                        <svg class="w-5 h-5 text-emerald-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Beca CREER</span>
                                    </li>
                                    <li class="flex items-start gap-2 text-gray-700">
                                        <svg class="w-5 h-5 text-emerald-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Contraprestación</span>
                                    </li>
                                    <li class="flex items-start gap-2 text-gray-700">
                                        <svg class="w-5 h-5 text-emerald-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>+Conectados</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Servicio 2: Operaciones -->
                        <div class="group">
                            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 border-2 border-blue-300 rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all h-full">
                                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 text-white rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-slate-900 mb-4">Operaciones Diarias</h3>
                                <ul class="space-y-3">
                                    <li class="flex items-start gap-2 text-gray-700">
                                        <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Control de cuentas</span>
                                    </li>
                                    <li class="flex items-start gap-2 text-gray-700">
                                        <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Comedor universitario</span>
                                    </li>
                                    <li class="flex items-start gap-2 text-gray-700">
                                        <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Pago a proveedores</span>
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

                        <!-- Servicio 3: La Florida -->
                        <div class="group">
                            <div class="bg-gradient-to-br from-cyan-50 to-teal-50 border-2 border-cyan-300 rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all h-full">
                                <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-teal-600 text-white rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-slate-900 mb-4">Complejo La Florida</h3>
                                <ul class="space-y-3">
                                    <li class="flex items-start gap-2 text-gray-700">
                                        <svg class="w-5 h-5 text-cyan-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Gestión financiera</span>
                                    </li>
                                    <li class="flex items-start gap-2 text-gray-700">
                                        <svg class="w-5 h-5 text-cyan-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Coordinación contable</span>
                                    </li>
                                    <li class="flex items-start gap-2 text-gray-700">
                                        <svg class="w-5 h-5 text-cyan-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Control de ingresos</span>
                                    </li>
                                    <li class="flex items-start gap-2 text-gray-700">
                                        <svg class="w-5 h-5 text-cyan-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Administración turística</span>
                                    </li>
                                </ul>
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