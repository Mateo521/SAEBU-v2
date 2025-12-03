<?php
/**
 * Template Name: Departamentos
 * Description: Página índice de todos los departamentos
 */

get_header();

// Lista de departamentos con sus datos
$departamentos = array(
    array(
        'titulo' => 'Salud',
        'slug' => 'salud',
        'descripcion' => 'Atención médica integral y prevención de la salud',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>',
        'color' => 'from-red-500 to-pink-600',
        'color_bg' => 'from-red-50 to-pink-50',
        'color_icon' => 'bg-red-100 text-red-600',
    ),
    array(
        'titulo' => 'Comedor',
        'slug' => 'comedor',
        'descripcion' => 'Alimentación saludable y nutritiva para estudiantes',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>',
        'color' => 'from-orange-500 to-amber-600',
        'color_bg' => 'from-orange-50 to-amber-50',
        'color_icon' => 'bg-orange-100 text-orange-600',
    ),
    array(
        'titulo' => 'Deportes',
        'slug' => 'deportes',
        'descripcion' => 'Actividades deportivas y recreativas para todos',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
        'color' => 'from-green-500 to-emerald-600',
        'color_bg' => 'from-green-50 to-emerald-50',
        'color_icon' => 'bg-green-100 text-green-600',
    ),
    array(
        'titulo' => 'Becas',
        'slug' => 'becas',
        'descripcion' => 'Apoyo económico para continuar tus estudios',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
        'color' => 'from-blue-500 to-indigo-600',
        'color_bg' => 'from-blue-50 to-indigo-50',
        'color_icon' => 'bg-blue-100 text-blue-600',
    ),
    array(
        'titulo' => 'Residencias',
        'slug' => 'residencias',
        'descripcion' => 'Alojamiento seguro y cómodo para estudiantes',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>',
        'color' => 'from-purple-500 to-violet-600',
        'color_bg' => 'from-purple-50 to-violet-50',
        'color_icon' => 'bg-purple-100 text-purple-600',
    ),
    array(
        'titulo' => 'Cultura',
        'slug' => 'cultura',
        'descripcion' => 'Actividades culturales y artísticas',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>',
        'color' => 'from-pink-500 to-rose-600',
        'color_bg' => 'from-pink-50 to-rose-50',
        'color_icon' => 'bg-pink-100 text-pink-600',
    ),
    array(
        'titulo' => 'Trabajo Social',
        'slug' => 'trabajo-social',
        'descripcion' => 'Acompañamiento y orientación social',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>',
        'color' => 'from-cyan-500 to-teal-600',
        'color_bg' => 'from-cyan-50 to-teal-50',
        'color_icon' => 'bg-cyan-100 text-cyan-600',
    ),
    array(
        'titulo' => 'Psicología',
        'slug' => 'psicologia',
        'descripcion' => 'Apoyo psicológico y orientación estudiantil',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>',
        'color' => 'from-indigo-500 to-blue-600',
        'color_bg' => 'from-indigo-50 to-blue-50',
        'color_icon' => 'bg-indigo-100 text-indigo-600',
    ),
);
?>

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 text-white py-20">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl mb-6">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                Nuestros Departamentos
            </h1>
            <p class="text-lg md:text-xl text-blue-100 max-w-2xl mx-auto">
                Conoce todos los servicios y áreas que trabajan para tu bienestar universitario
            </p>
        </div>
    </div>
   
</section>

<!-- Departamentos Grid -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-7xl mx-auto">
            
            <!-- Intro text -->
            <div class="text-center mb-16">
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Cada departamento está comprometido con tu desarrollo integral. Haz clic en cualquier tarjeta para conocer más detalles.
                </p>
            </div>

            <!-- Grid de departamentos -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($departamentos as $dpto) : ?>
                    <a href="<?php echo esc_url(home_url('/departamento-' . $dpto['slug'])); ?>" 
                       class="group block bg-gradient-to-br <?php echo $dpto['color_bg']; ?> rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
                        
                        <!-- Icono -->
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-16 h-16 <?php echo $dpto['color_icon']; ?> rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform shadow-md">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <?php echo $dpto['icono']; ?>
                                </svg>
                            </div>
                            
                            <!-- Arrow icon -->
                            <div class="w-10 h-10 bg-white/50 rounded-full flex items-center justify-center group-hover:bg-white transition-colors">
                                <svg class="w-5 h-5 text-gray-600 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Contenido -->
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                            <?php echo esc_html($dpto['titulo']); ?>
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            <?php echo esc_html($dpto['descripcion']); ?>
                        </p>

                        <!-- Badge decorativo -->
                        <div class="mt-6 pt-6 border-t border-gray-200/50">
                            <span class="inline-flex items-center gap-2 text-sm font-semibold text-blue-600">
                                Ver más información
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </span>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>

            <!-- Stats Section -->
            <div class="mt-20 bg-gradient-to-r from-blue-600 to-indigo-700 rounded-3xl p-8 md:p-12 text-white">
                <div class="grid sm:grid-cols-3 gap-8 text-center">
                    <div>
                        <div class="text-4xl md:text-5xl font-bold mb-2"><?php echo count($departamentos); ?></div>
                        <div class="text-blue-100">Departamentos</div>
                    </div>
                    <div>
                        <div class="text-4xl md:text-5xl font-bold mb-2">24/7</div>
                        <div class="text-blue-100">Atención Disponible</div>
                    </div>
                    <div>
                        <div class="text-4xl md:text-5xl font-bold mb-2">100%</div>
                        <div class="text-blue-100">Compromiso</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gradient-to-br from-slate-50 to-blue-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                ¿Necesitas más información?
            </h2>
            <p class="text-lg text-gray-600 mb-8">
                Nuestro equipo está disponible para responder todas tus consultas
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo esc_url(home_url('/contacto')); ?>" 
                   class="inline-flex items-center justify-center gap-2 bg-blue-600 text-white px-8 py-4 rounded-xl font-bold hover:bg-blue-700 transition-all hover:scale-105 shadow-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <span>Contáctanos</span>
                </a>
                <a href="<?php echo esc_url(home_url('/institucional')); ?>" 
                   class="inline-flex items-center justify-center gap-2 bg-white text-blue-600 px-8 py-4 rounded-xl font-bold hover:bg-gray-50 transition-all border-2 border-blue-200">
                    <span>Conoce más sobre SAEBU</span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
