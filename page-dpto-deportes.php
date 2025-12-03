<?php

/**
 * Template Name: Educación Física y Deportes
 */
get_header();
?>

<main class="bg-gradient-to-b from-white to-orange-50/30">

    <?php while (have_posts()) : the_post(); ?>

        <!-- Hero con gradiente deportivo -->
        <section class="relative py-16 md:py-24 bg-gradient-to-br from-orange-600 via-red-600 to-pink-700 overflow-hidden">
            <!-- Patrón decorativo -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;"></div>
            </div>

            <!-- Formas decorativas -->
            <div class="absolute top-20 right-10 w-72 h-72 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 left-10 w-96 h-96 bg-orange-300/20 rounded-full blur-3xl"></div>

            <div class="container mx-auto px-4 relative">
                <div class="max-w-5xl mx-auto text-center">
                    <!-- Breadcrumb -->
                    <div class="mb-6">
                        <nav class="inline-flex items-center gap-2 text-sm text-orange-100">
                            <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors">Inicio</a>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            <span class="text-white font-medium">Deportes</span>
                        </nav>
                    </div>

                    <!-- Badge -->
                    <div class="inline-block mb-6">
                        <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-xl text-white px-5 py-2.5 rounded-full text-sm font-semibold border border-white/20 shadow-lg">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"></path>
                            </svg>
                            Vida Saludable
                        </span>
                    </div>

                    <h1 class="text-xl md:text-2xl lg:text-3xl font-bold text-white mb-6 leading-tight">
                        Educación Física y Deportes
                    </h1>

                    <p class="text-xl text-orange-100 max-w-3xl mx-auto leading-relaxed mb-8">
                        Fomentamos el deporte y la vida saludable como elementos fundamentales del sistema educativo universitario
                    </p>

                    <!-- Stats rápidas -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-3xl mx-auto">
                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded p-4">
                            <div class="text-2xl font-bold text-white mb-1">16</div>
                            <div class="text-xs text-orange-100">Disciplinas deportivas</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded p-4">
                            <div class="text-2xl font-bold text-white mb-1">3</div>
                            <div class="text-xs text-orange-100">Centros disponibles</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded p-4">
                            <div class="text-2xl font-bold text-white mb-1">100%</div>
                            <div class="text-xs text-orange-100">Gratuito</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded p-4">
                            <div class="text-2xl font-bold text-white mb-1">JUR</div>
                            <div class="text-xs text-orange-100">Juegos Regionales</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Nuestra Visión -->
        <section class="py-16 md:py-20">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Título -->
                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-orange-100 text-orange-700 px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                            Nuestra Visión
                        </div>
                        <h2 class="text-2xl md:text-4xl font-bold text-slate-900 mb-4">El Deporte en la Universidad</h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Más que actividad física, una herramienta de formación integral</p>
                    </div>

                    <!-- Grid de beneficios -->
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">

                        <!-- Beneficio 1 -->
                        <div class="bg-white border-2 border-orange-200 rounded-xl p-8 hover:shadow-xl transition-all group">
                            <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-red-600 text-white rounded flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-base font-bold text-slate-900 mb-3">Salud y Bienestar</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Importante en el <strong>mantenimiento de la salud</strong> y elemento fundamental del sistema educativo.
                            </p>
                        </div>

                        <!-- Beneficio 2 -->
                        <div class="bg-white border-2 border-blue-200 rounded-xl p-8 hover:shadow-xl transition-all group">
                            <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-indigo-600 text-white rounded flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-base font-bold text-slate-900 mb-3">Igualdad Social</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Factor corrector de <strong>desequilibrios sociales</strong> que contribuye al desarrollo de la igualdad entre estudiantes.
                            </p>
                        </div>

                        <!-- Beneficio 3 -->
                        <div class="bg-white border-2 border-green-200 rounded-xl p-8 hover:shadow-xl transition-all group">
                            <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-emerald-600 text-white rounded flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-base font-bold text-slate-900 mb-3">Inserción Social</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Crea <strong>hábitos favorecedores</strong> para la inserción social de los estudiantes en la comunidad.
                            </p>
                        </div>

                        <!-- Beneficio 4 -->
                        <div class="bg-white border-2 border-purple-200 rounded-xl p-8 hover:shadow-xl transition-all group">
                            <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-pink-600 text-white rounded flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-base font-bold text-slate-900 mb-3">Solidaridad</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Su práctica en equipo <strong>fomenta la solidaridad</strong> y el trabajo colaborativo.
                            </p>
                        </div>

                        <!-- Beneficio 5 -->
                        <div class="bg-white border-2 border-yellow-200 rounded-xl p-8 hover:shadow-xl transition-all group">
                            <div class="w-14 h-14 bg-gradient-to-br from-yellow-500 to-orange-600 text-white rounded flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                            <h3 class="text-base font-bold text-slate-900 mb-3">Calidad de Vida</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Elemento determinante en la <strong>calidad de vida</strong> de las personas, especialmente estudiantes.
                            </p>
                        </div>

                        <!-- Beneficio 6 -->
                        <div class="bg-white border-2 border-red-200 rounded-xl p-8 hover:shadow-xl transition-all group">
                            <div class="w-14 h-14 bg-gradient-to-br from-red-500 to-rose-600 text-white rounded flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <h3 class="text-base font-bold text-slate-900 mb-3">Formación en Valores</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Forma estudiantes en <strong>valores con sentido de pertenencia</strong> a la institución.
                            </p>
                        </div>

                    </div>

                    <!-- Destacado principal -->
                    <div class="bg-gradient-to-br from-orange-500 to-red-600 text-white rounded p-8 md:p-12 shadow-2xl">
                        <div class="flex items-start gap-6">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-xl rounded-xl flex items-center justify-center flex-shrink-0 border-2 border-white/30">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl md:text-2xl font-bold mb-4">Nuestra Misión</h3>
                                <p class="text-orange-100 text-lg leading-relaxed">
                                    Todo esto conforma a la <strong>Educación Física y el Deporte como elemento determinante</strong> en la calidad de vida de las personas y más aún en los estudiantes, <strong>formándolos en valores con sentido de pertenencia</strong> a la institución.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Disciplinas Deportivas -->
        <section class="py-16 md:py-20 bg-gradient-to-br from-gray-50 to-blue-50">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Título -->
                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-blue-100 text-blue-700 px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"></path>
                            </svg>
                            16 Disciplinas
                        </div>
                        <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Actividades Deportivas</h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Practicá de forma recreativa o competitiva, en ambas ramas, sin costo alguno</p>
                    </div>

                    <!-- Grid de disciplinas -->
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mb-12">

                        <?php
                        $disciplinas = array(
                            array('nombre' => 'Atletismo', 'icono' => 'M13 10V3L4 14h7v7l9-11h-7z', 'color' => 'orange'),
                            array('nombre' => 'Aeróbica', 'icono' => 'M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'color' => 'pink'),
                            array('nombre' => 'Ajedrez', 'icono' => 'M11 6.5h2M11 18h2m-7-5v-2m12 2v-2M5 8h2a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1Zm0 12h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1Zm12 0h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1Zm0-12h2a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1Z', 'color' => 'purple'),
                            array('nombre' => 'Básquetbol', 'icono' => 'M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'color' => 'orange'),
                            array('nombre' => 'Danza', 'icono' => 'M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3', 'color' => 'purple'),
                            array('nombre' => 'Gimnasio', 'icono' => 'M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4', 'color' => 'red'),
                            array('nombre' => 'Hándball', 'icono' => 'M21 12a9 9 0 11-18 0 9 9 0 0118 0z M9 10h.01 M15 10h.01', 'color' => 'blue'),
                            array('nombre' => 'Hockey', 'icono' => 'M13 10V3L4 14h7v7l9-11h-7z', 'color' => 'green'),
                            array('nombre' => 'Futbol 11 y 5', 'icono' => 'M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'color' => 'green'),
                            array('nombre' => 'Rugby', 'icono' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z', 'color' => 'yellow'),
                            array('nombre' => 'Karate', 'icono' => 'M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z', 'color' => 'red'),
                            array('nombre' => 'Yoga', 'icono' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z', 'color' => 'purple'),
                            array('nombre' => 'Voleibol', 'icono' => 'M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5', 'color' => 'blue'),
                            array('nombre' => 'Ritmos Latinos', 'icono' => 'M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3', 'color' => 'pink'),
                            array('nombre' => 'Cestoball', 'icono' => 'M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'color' => 'indigo'),
                            array('nombre' => 'Funcional', 'icono' => 'M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4', 'color' => 'orange'),
                        );



                        foreach ($disciplinas as $disciplina) :
                            $color = $disciplina['color'];
                        ?>
                            <div class="bg-white border-2 border-<?php echo $color; ?>-200 rounded p-6 hover:shadow-xl transition-all group cursor-pointer hover:-translate-y-1">
                                <div class="w-12 h-12 bg-gradient-to-br from-<?php echo $color; ?>-500 to-<?php echo $color; ?>-600 text-white rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform mx-auto">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo $disciplina['icono']; ?>"></path>
                                    </svg>
                                </div>
                                <h3 class="text-center font-bold text-slate-900 text-sm"><?php echo $disciplina['nombre']; ?></h3>
                            </div>
                        <?php endforeach; ?>

                    </div>

                    <!-- Beneficios de participar -->
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="bg-white border-2 border-green-200 rounded-xl p-6">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-green-100 text-green-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-1">100% Gratuito</h4>
                                    <p class="text-sm text-gray-600">En ambas ramas, sin costo alguno</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border-2 border-blue-200 rounded-xl p-6">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">




                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-1">Seguro Incluido</h4>
                                    <p class="text-sm text-gray-600">Con seguro de asistencia deportiva</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border-2 border-purple-200 rounded-xl p-6">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-1">Recreativo o Competitivo</h4>
                                    <p class="text-sm text-gray-600">Elegí tu modalidad preferida</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Centros Deportivos -->
        <section class="py-16 md:py-20">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Título -->
                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-red-100 text-red-700 px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            3 Ubicaciones
                        </div>
                        <h2 class="text-2xl md:text-4xl font-bold text-slate-900 mb-4">Nuestros Centros</h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Instalaciones deportivas en las principales ciudades de la provincia</p>
                    </div>

                    <!-- Grid de centros -->
                    <div class="grid md:grid-cols-3 gap-8">

                        <!-- Centro San Luis -->
                        <div class="bg-white border-2 border-red-200 rounded-xl overflow-hidden hover:shadow-2xl transition-all group">
                            <div class="bg-gradient-to-br from-red-500 to-rose-600 text-white p-6">
                                <div class="w-14 h-14 bg-white/20 backdrop-blur-xl rounded flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold">San Luis</h3>
                            </div>
                            <div class="p-6">
                                <div class="flex items-start gap-3 mb-4">
                                    <svg class="w-5 h-5 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <p class="text-gray-700">
                                        <strong>Rivadavia 1029</strong><br>
                                        1er Piso - Comedor Universitario
                                    </p>
                                </div>
                                <div class="bg-red-50 border border-red-200 rounded-lg p-3">
                                    <p class="text-sm text-red-800 font-semibold">Centro Principal</p>
                                </div>
                            </div>
                        </div>

                        <!-- Centro Villa Mercedes -->
                        <div class="bg-white border-2 border-blue-200 rounded-xl overflow-hidden hover:shadow-2xl transition-all group">
                            <div class="bg-gradient-to-br from-blue-500 to-indigo-600 text-white p-6">
                                <div class="w-14 h-14 bg-white/20 backdrop-blur-xl rounded flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold">Villa Mercedes</h3>
                            </div>
                            <div class="p-6">
                                <div class="flex items-start gap-3 mb-4">
                                    <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <p class="text-gray-700">
                                        Sede Villa Mercedes<br>
                                        <span class="text-sm text-gray-600">Actividades disponibles</span>
                                    </p>
                                </div>
                                <div class="bg-blue-50 border border-blue-200 rounded-lg p-3">
                                    <p class="text-sm text-blue-800 font-semibold">Sede Regional</p>
                                </div>
                            </div>
                        </div>

                        <!-- Centro Villa de Merlo -->
                        <div class="bg-white border-2 border-green-200 rounded-xl overflow-hidden hover:shadow-2xl transition-all group">
                            <div class="bg-gradient-to-br from-green-500 to-emerald-600 text-white p-6">
                                <div class="w-14 h-14 bg-white/20 backdrop-blur-xl rounded flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold">Villa de Merlo</h3>
                            </div>
                            <div class="p-6">
                                <div class="flex items-start gap-3 mb-4">
                                    <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <p class="text-gray-700">
                                        Sede Villa de Merlo<br>
                                        <span class="text-sm text-gray-600">Actividades disponibles</span>
                                    </p>
                                </div>
                                <div class="bg-green-50 border border-green-200 rounded-lg p-3">
                                    <p class="text-sm text-green-800 font-semibold">Sede Regional</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- Juegos Universitarios JUR -->
        <section class="py-16 md:py-20 bg-gradient-to-br from-indigo-50 to-purple-50">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Título -->
                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-indigo-100 text-indigo-700 px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                            </svg>
                            Competencias
                        </div>
                        <h2 class="text-2xl md:text-4xl font-bold text-slate-900 mb-4">Juegos Universitarios Regionales</h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Representá a la UNSL en competencias regionales</p>
                    </div>

                    <div class="bg-white border-2 border-indigo-200 rounded overflow-hidden shadow-xl">

                        <!-- Header con gradiente -->
                        <div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-600 text-white p-3 md:p-6">
                            <div class="flex items-start gap-6">
                                <div class="w-16 h-16 bg-white/20 backdrop-blur-xl rounded-xl flex items-center justify-center flex-shrink-0 border-2 border-white/30">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl md:text-2xl font-bold mb-2">JUR - Juegos Universitarios Regionales</h3>
                                    <p class="text-indigo-100 text-lg">
                                        Competencias organizadas por FEDUA
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Contenido -->
                        <div class="p-3 md:p-6">

                            <p class="text-gray-700 text-lg leading-relaxed mb-8">
                                Los estudiantes que participen de los <strong>Deportes competitivos</strong> tienen la posibilidad de <strong>representar a la Universidad Nacional de San Luis</strong> en los <strong>JUR (Juegos Universitarios Regionales)</strong>.
                            </p>

                            <!-- Provincias participantes -->
                            <div class="mb-8">
                                <h4 class="text-xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Provincias Participantes
                                </h4>
                                <div class="grid md:grid-cols-4 gap-4">
                                    <div class="bg-gradient-to-br from-indigo-50 to-purple-50 border-2 border-indigo-200 rounded p-4 text-center hover:shadow-lg transition-all">
                                        <div class="text-2xl mb-2">🏔️</div>
                                        <p class="font-bold text-slate-900">Mendoza</p>
                                    </div>
                                    <div class="bg-gradient-to-br from-purple-50 to-pink-50 border-2 border-purple-200 rounded p-4 text-center hover:shadow-lg transition-all">
                                        <div class="text-2xl mb-2">⛰️</div>
                                        <p class="font-bold text-slate-900">San Juan</p>
                                    </div>
                                    <div class="bg-gradient-to-br from-pink-50 to-red-50 border-2 border-pink-200 rounded p-4 text-center hover:shadow-lg transition-all">
                                        <div class="text-2xl mb-2">🌄</div>
                                        <p class="font-bold text-slate-900">La Rioja</p>
                                    </div>
                                    <div class="bg-gradient-to-br from-orange-50 to-yellow-50 border-2 border-orange-200 rounded p-4 text-center hover:shadow-lg transition-all">
                                        <div class="text-2xl mb-2">🏞️</div>
                                        <p class="font-bold text-slate-900">San Luis</p>
                                    </div>
                                </div>
                            </div>

                            <!-- FEDUA -->
                            <div class="bg-gradient-to-br from-indigo-500 to-purple-600 text-white rounded-xl p-8">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-white/20 backdrop-blur-xl rounded flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="text-xl font-bold mb-2">FEDUA</h5>
                                        <p class="text-indigo-100">
                                            <strong>Federación del Deporte Universitario Argentina</strong> - Organizadora de los Juegos Universitarios Regionales según cronograma anual.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Beneficios de participar -->
                            <div class="mt-8 grid md:grid-cols-3 gap-6">
                                <div class="bg-indigo-50 border-2 border-indigo-200 rounded p-6">
                                    <div class="w-10 h-10 bg-indigo-100 text-indigo-600 rounded-lg flex items-center justify-center mb-3">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                    </div>
                                    <h5 class="font-bold text-slate-900 mb-2">Representación</h5>
                                    <p class="text-sm text-gray-600">Representá a la UNSL en competencias regionales</p>
                                </div>

                                <div class="bg-purple-50 border-2 border-purple-200 rounded p-6">
                                    <div class="w-10 h-10 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center mb-3">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                                        </svg>
                                    </div>
                                    <h5 class="font-bold text-slate-900 mb-2">Experiencia</h5>
                                    <p class="text-sm text-gray-600">Viví competencias universitarias de alto nivel</p>
                                </div>

                                <div class="bg-pink-50 border-2 border-pink-200 rounded p-6">
                                    <div class="w-10 h-10 bg-pink-100 text-pink-600 rounded-lg flex items-center justify-center mb-3">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <h5 class="font-bold text-slate-900 mb-2">Networking</h5>
                                    <p class="text-sm text-gray-600">Conocé estudiantes de otras universidades</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Club Universitario -->
        <section class="py-16 md:py-20 bg-gradient-to-br from-blue-50 to-cyan-50">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Título -->
                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-blue-100 text-blue-700 px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                            </svg>
                            Nuevo 2024
                        </div>
                        <h2 class="text-2xl md:text-4xl font-bold text-slate-900 mb-4">Club Universitario UNSL</h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Vinculando a la comunidad universitaria a través del deporte y la salud</p>
                    </div>

                    <div class="bg-white border-2 border-blue-200 rounded overflow-hidden shadow-xl">

                        <!-- Header con gradiente -->
                        <div class="bg-gradient-to-r from-blue-500 via-cyan-500 to-teal-600 text-white p-3 md:p-6">
                            <div class="flex items-center gap-6">
                                <div class="w-20 h-20 bg-white/20 backdrop-blur-xl rounded-xl flex items-center justify-center flex-shrink-0 border-2 border-white/30">
                                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="inline-block bg-white/20 backdrop-blur-xl px-4 py-1.5 rounded-full text-sm font-semibold mb-3">
                                        ⭐ Creado este año
                                    </div>
                                    <h3 class="text-xl md:text-2xl font-bold">Club Universitario Universidad Nacional de San Luis</h3>
                                </div>
                            </div>
                        </div>

                        <!-- Contenido -->
                        <div class="p-3 md:p-6">

                            <!-- Misión -->
                            <div class="mb-8">
                                <div class="flex items-start gap-4 mb-6">
                                    <div class="w-12 h-12 bg-blue-500 text-white rounded flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                        </svg>
                                    </div>

                                    <div>

                                        <h4 class="text-base font-bold text-slate-900 mb-3">Nuestra Misión</h4>
                                        <p class="text-gray-700 text-lg leading-relaxed">
                                            Vincular a todos los integrantes de la <strong>población universitaria y la comunidad en general</strong> a través del deporte y la salud, intentando lograr que <strong>más niños, adolescentes, adultos y personas discapacitadas</strong> tengan la posibilidad de disfrutar de una vida <strong>Deportiva, Recreativa, Social y Cultural</strong> en un ambiente acorde a sus necesidades e intereses.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Beneficiarios -->
                            <div class="mb-8">
                                <h4 class="text-xl font-bold text-slate-900 mb-6 flex items-center gap-2">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                    </svg>
                                    ¿Para quién?
                                </h4>

                                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                                    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 border-2 border-blue-200 rounded p-6 text-center hover:shadow-lg transition-all group">
                                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-600 text-white rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                        <h5 class="font-bold text-slate-900 mb-1">Niños</h5>
                                        <p class="text-sm text-gray-600">Formación deportiva temprana</p>
                                    </div>

                                    <div class="bg-gradient-to-br from-purple-50 to-pink-50 border-2 border-purple-200 rounded p-6 text-center hover:shadow-lg transition-all group">
                                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 text-white rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                            </svg>
                                        </div>
                                        <h5 class="font-bold text-slate-900 mb-1">Adolescentes</h5>
                                        <p class="text-sm text-gray-600">Desarrollo integral</p>
                                    </div>

                                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 border-2 border-green-200 rounded p-6 text-center hover:shadow-lg transition-all group">
                                        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 text-white rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                            </svg>
                                        </div>
                                        <h5 class="font-bold text-slate-900 mb-1">Adultos</h5>
                                        <p class="text-sm text-gray-600">Vida activa y saludable</p>
                                    </div>

                                    <div class="bg-gradient-to-br from-orange-50 to-yellow-50 border-2 border-orange-200 rounded p-6 text-center hover:shadow-lg transition-all group">
                                        <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-yellow-600 text-white rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                            </svg>
                                        </div>
                                        <h5 class="font-bold text-slate-900 mb-1">Discapacitados</h5>
                                        <p class="text-sm text-gray-600">Inclusión deportiva</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Áreas del Club -->
                            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 border-2 border-blue-200 rounded-xl p-8">
                                <h4 class="text-xl font-bold text-slate-900 mb-6 text-center">Vida en el Club</h4>
                                <div class="grid md:grid-cols-4 gap-6">
                                    <div class="text-center">
                                        <div class="w-14 h-14 bg-blue-500 text-white rounded flex items-center justify-center mx-auto mb-3">
                                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"></path>
                                            </svg>
                                        </div>
                                        <p class="font-bold text-slate-900">Deportiva</p>
                                    </div>

                                    <div class="text-center">
                                        <div class="w-14 h-14 bg-green-500 text-white rounded flex items-center justify-center mx-auto mb-3">
                                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                        <p class="font-bold text-slate-900">Recreativa</p>
                                    </div>

                                    <div class="text-center">
                                        <div class="w-14 h-14 bg-purple-500 text-white rounded flex items-center justify-center mx-auto mb-3">
                                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                            </svg>
                                        </div>
                                        <p class="font-bold text-slate-900">Social</p>
                                    </div>

                                    <div class="text-center">
                                        <div class="w-14 h-14 bg-pink-500 text-white rounded flex items-center justify-center mx-auto mb-3">
                                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                            </svg>
                                        </div>
                                        <p class="font-bold text-slate-900">Cultural</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Contacto e Información -->
        <section id="contacto" class="py-16 md:py-20 bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Título -->
                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-xl text-white px-5 py-2 rounded-full font-semibold mb-4 border border-white/20">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            Contacto
                        </div>
                        <h2 class="text-2xl md:text-4xl font-bold text-white mb-4">¿Querés participar?</h2>
                        <p class="text-lg text-blue-200 max-w-3xl mx-auto">Comunicate con el Departamento de Educación Física y Deportes</p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8">

                        <!-- Tarjeta de contacto principal -->
                        <div class="bg-white/10 backdrop-blur-xl border-2 border-white/20 rounded p-8 shadow-2xl">
                            <div class="flex items-start gap-4 mb-8">
                                <div class="w-14 h-14 bg-orange-500 text-white rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-white mb-2">SAEBU</h3>
                                    <p class="text-blue-200">Departamento de Educación Física y Deporte UNSL</p>
                                </div>
                            </div>

                            <!-- Dirección -->
                            <div class="space-y-6">
                                <div class="flex items-start gap-4 bg-white/5 rounded p-5 border border-white/10">
                                    <div class="w-10 h-10 bg-blue-500/20 text-blue-300 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-white mb-1">Dirección</p>
                                        <p class="text-blue-200">Rivadavia 1029 - 1er Piso</p>
                                        <p class="text-blue-200 text-sm">Comedor Universitario</p>
                                    </div>
                                </div>

                                <!-- Horarios -->
                                <div class="flex items-start gap-4 bg-white/5 rounded p-5 border border-white/10">
                                    <div class="w-10 h-10 bg-green-500/20 text-green-300 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-white mb-1">Horarios de Atención</p>
                                        <p class="text-blue-200">Lunes a Viernes</p>
                                        <p class="text-blue-200 text-sm">8:00 a 13:00 hs • 18:00 a 20:00 hs</p>
                                    </div>
                                </div>

                                <!-- Teléfono -->
                                <div class="flex items-start gap-4 bg-white/5 rounded p-5 border border-white/10">
                                    <div class="w-10 h-10 bg-purple-500/20 text-purple-300 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-white mb-1">Teléfono</p>
                                        <a href="tel:+542664426046" class="text-blue-300 hover:text-blue-200 transition-colors text-lg font-bold">
                                            2664 442-6046
                                        </a>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="flex items-start gap-4 bg-white/5 rounded p-5 border border-white/10">
                                    <div class="w-10 h-10 bg-pink-500/20 text-pink-300 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-white mb-1">Email</p>
                                        <a href="mailto:unsldeportes@gmail.com" class="text-blue-300 hover:text-blue-200 transition-colors break-all">
                                            unsldeportes@gmail.com
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Llamado a la acción -->
                        <div class="space-y-6">

                            <!-- Inscribite -->
                            <div class="bg-gradient-to-br from-orange-500 to-red-600 text-white rounded p-8 shadow-2xl">
                                <div class="flex items-start gap-4 mb-6">
                                    <div class="w-12 h-12 bg-white/20 backdrop-blur-xl rounded flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold mb-2">¡Inscribite Ya!</h3>
                                        <p class="text-orange-100 mb-4">
                                            Empezá tu vida deportiva universitaria hoy mismo. Todas las disciplinas están disponibles para vos.
                                        </p>
                                        <a href="#contacto" class="inline-flex items-center gap-2 bg-white text-orange-600 px-6 py-3 rounded font-bold hover:bg-orange-50 transition-all shadow-lg hover:shadow-xl">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            Comenzar
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Beneficios rápidos -->
                            <div class="bg-white/10 backdrop-blur-xl border-2 border-white/20 rounded p-8">
                                <h4 class="text-xl font-bold text-white mb-6">¿Por qué elegir SAEBU Deportes?</h4>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 bg-green-500 text-white rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                        <p class="text-blue-200">Totalmente gratuito para estudiantes</p>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 bg-green-500 text-white rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                        <p class="text-blue-200">16 disciplinas disponibles</p>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 bg-green-500 text-white rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                        <p class="text-blue-200">Seguro de asistencia incluido</p>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 bg-green-500 text-white rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                        <p class="text-blue-200">Participación en JUR</p>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 bg-green-500 text-white rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                        <p class="text-blue-200">Instalaciones en 3 ciudades</p>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 bg-green-500 text-white rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                        <p class="text-blue-200">Club Universitario inclusivo</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- Redes sociales (opcional) -->
                    <div class="mt-12 text-center">
                        <p class="text-blue-200 mb-4">Seguinos en nuestras redes sociales</p>
                        <div class="flex justify-center gap-4">
                            <a href="#" class="w-12 h-12 bg-white/10 backdrop-blur-xl border border-white/20 rounded flex items-center justify-center text-white hover:bg-white/20 transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-white/10 backdrop-blur-xl border border-white/20 rounded flex items-center justify-center text-white hover:bg-white/20 transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-white/10 backdrop-blur-xl border border-white/20 rounded flex items-center justify-center text-white hover:bg-white/20 transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Últimas Noticias -->
        <section class="py-16 md:py-20 bg-gradient-to-br from-gray-50 to-blue-50">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <!-- Título -->
                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-blue-100 text-blue-700 px-5 py-2 rounded-full font-semibold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                            </svg>
                            Actualidad Deportiva
                        </div>
                        <h2 class="text-2xl md:text-4xl font-bold text-slate-900 mb-4">Últimas Noticias</h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Mantenete informado sobre actividades, competencias y novedades</p>
                    </div>

                    <?php
                    // Query para obtener las últimas noticias de deportes
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'category_name' => 'deportes', // Ajusta según tu categoría
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );

                    $deportes_query = new WP_Query($args);

                    if ($deportes_query->have_posts()) : ?>

                        <div class="grid md:grid-cols-3 gap-8">
                            <?php while ($deportes_query->have_posts()) : $deportes_query->the_post(); ?>
                                <article class="bg-white border-2 border-gray-200 rounded-xl overflow-hidden hover:shadow-2xl transition-all group">

                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="aspect-video overflow-hidden bg-gray-200">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover group-hover:scale-110 transition-transform duration-500')); ?>
                                            </a>
                                        </div>
                                    <?php else : ?>
                                        <div class="aspect-video bg-gradient-to-br from-orange-500 to-red-600 flex items-center justify-center">
                                            <svg class="w-16 h-16 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"></path>
                                            </svg>
                                        </div>
                                    <?php endif; ?>

                                    <div class="p-6">
                                        <!-- Fecha -->
                                        <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                            <time datetime="<?php echo get_the_date('c'); ?>">
                                                <?php echo get_the_date('j F, Y'); ?>
                                            </time>
                                        </div>

                                        <!-- Título -->
                                        <h3 class="text-base font-bold text-slate-900 mb-3 group-hover:text-orange-600 transition-colors">
                                            <a href="<?php the_permalink(); ?>" class="hover:underline">
                                                <?php the_title(); ?>
                                            </a>
                                        </h3>

                                        <!-- Excerpt -->
                                        <p class="text-gray-600 mb-4 line-clamp-3">
                                            <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                        </p>

                                        <!-- Leer más -->
                                        <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-2 text-orange-600 font-semibold hover:text-orange-700 transition-colors group/link">
                                            Leer más
                                            <svg class="w-4 h-4 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                        </div>

                        <!-- Ver todas las noticias -->
                        <div class="text-center mt-12">
                            <a href="<?php echo get_category_link(get_cat_ID('deportes')); ?>" class="inline-flex items-center gap-2 bg-orange-600 text-white px-8 py-4 rounded font-bold text-lg hover:bg-orange-700 transition-all shadow-lg hover:shadow-xl hover:scale-105">
                                Ver Todas las Noticias
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </a>
                        </div>

                    <?php else : ?>

                        <!-- Mensaje si no hay noticias -->
                        <div class="bg-white border-2 border-blue-200 rounded-xl p-12 text-center">
                            <div class="w-20 h-20 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mx-auto mb-6">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                </svg>
                            </div>
                            <h3 class="text-base font-bold text-slate-900 mb-3">Próximamente</h3>
                            <p class="text-gray-600 max-w-md mx-auto">
                                Estamos preparando noticias y actualizaciones sobre nuestras actividades deportivas.
                            </p>
                        </div>

                    <?php endif;
                    wp_reset_postdata();
                    ?>

                </div>
            </div>
        </section>

        <!-- CTA Final -->
        <section class="py-16 md:py-20 bg-gradient-to-br from-orange-600 via-red-600 to-pink-700">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto text-center">

                    <div class="inline-block bg-white/10 backdrop-blur-xl text-white px-5 py-2 rounded-full font-semibold mb-6 border border-white/20">
                        ¡Sumate al Deporte Universitario!
                    </div>

                    <h2 class="text-2xl md:text-4xl font-bold text-white mb-6">
                        Tu Vida Deportiva Empieza Hoy
                    </h2>

                    <p class="text-xl text-orange-100 mb-10 max-w-2xl mx-auto">
                        Formá parte de la familia deportiva UNSL. Elegí tu disciplina, conocé gente nueva y llevá una vida más saludable.
                    </p>

                    <div class="flex flex-wrap gap-4 justify-center">
                        <a href="#contacto" class="inline-flex items-center gap-2 bg-white text-orange-600 px-8 py-4 rounded font-bold text-lg hover:bg-orange-50 transition-all shadow-xl hover:shadow-2xl hover:scale-105">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            Contactanos
                        </a>

                        <a href="tel:+542664426046" class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-xl text-white border-2 border-white/30 px-8 py-4 rounded font-bold text-lg hover:bg-white/20 transition-all">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            Llamar Ahora
                        </a>
                    </div>

                    <!-- Destacados finales -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-16">
                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-xl p-6">
                            <div class="w-12 h-12 bg-white/20 rounded flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-white font-bold mb-2">Sin Costo</h3>
                            <p class="text-orange-100 text-sm">100% gratuito con seguro incluido</p>
                        </div>

                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-xl p-6">
                            <div class="w-12 h-12 bg-white/20 rounded flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-white font-bold mb-2">Para Todos</h3>
                            <p class="text-orange-100 text-sm">Estudiantes y comunidad en general</p>
                        </div>

                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-xl p-6">
                            <div class="w-12 h-12 bg-white/20 rounded flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                </svg>
                            </div>
                            <h3 class="text-white font-bold mb-2">Calidad</h3>
                            <p class="text-orange-100 text-sm">Instalaciones profesionales</p>
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