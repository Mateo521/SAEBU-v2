<?php
/**
 * Template Name: Departamentos
 * Description: Página índice de todos los departamentos
 */

get_header();

// Lista de departamentos de SAEBU
$departamentos = array(
    array(
        'titulo' => 'Becas',
        'slug' => 'becas',
        'descripcion' => 'Apoyo económico para continuar tus estudios universitarios',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
        'color' => 'from-blue-500 to-indigo-600',
        'color_bg' => 'from-blue-50 to-indigo-50',
        'color_icon' => 'bg-blue-100 text-blue-600',
    ),
    array(
        'titulo' => 'Mesa de Entradas y Personal',
        'slug' => 'mesa-entradas-personal',
        'descripcion' => 'Gestión de trámites administrativos y recursos humanos',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>',
        'color' => 'from-slate-500 to-gray-600',
        'color_bg' => 'from-slate-50 to-gray-50',
        'color_icon' => 'bg-slate-100 text-slate-600',
    ),
    array(
        'titulo' => 'Compras y Contrataciones',
        'slug' => 'compras-contrataciones',
        'descripcion' => 'Gestión de adquisiciones y contrataciones institucionales',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>',
        'color' => 'from-amber-500 to-orange-600',
        'color_bg' => 'from-amber-50 to-orange-50',
        'color_icon' => 'bg-amber-100 text-amber-600',
    ),
    array(
        'titulo' => 'Club Universitario',
        'slug' => 'club-universitario',
        'descripcion' => 'Espacio de recreación, deportes y actividades sociales',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
        'color' => 'from-emerald-500 to-green-600',
        'color_bg' => 'from-emerald-50 to-green-50',
        'color_icon' => 'bg-emerald-100 text-emerald-600',
    ),
    array(
        'titulo' => 'Contable',
        'slug' => 'contable',
        'descripcion' => 'Administración financiera y control presupuestario',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>',
        'color' => 'from-teal-500 to-cyan-600',
        'color_bg' => 'from-teal-50 to-cyan-50',
        'color_icon' => 'bg-teal-100 text-teal-600',
    ),
    array(
        'titulo' => 'Educación Física y Deporte',
        'slug' => 'educacion-fisica-deporte',
        'descripcion' => 'Actividades deportivas, recreativas y gimnasio universitario',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>',
        'color' => 'from-green-500 to-lime-600',
        'color_bg' => 'from-green-50 to-lime-50',
        'color_icon' => 'bg-green-100 text-green-600',
        'submenu' => true,
        'badge' => 'Incluye Gimnasio'
    ),
    array(
        'titulo' => 'Trabajo Social',
        'slug' => 'dpto-trabajo-social',
        'descripcion' => 'Acompañamiento social y Centro de Salud Estudiantil',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>',
        'color' => 'from-pink-500 to-rose-600',
        'color_bg' => 'from-pink-50 to-rose-50',
        'color_icon' => 'bg-pink-100 text-pink-600',
        'submenu' => true,
        'badge' => 'Con Centro de Salud'
    ),
    array(
        'titulo' => 'Complejo Turístico La Florida',
        'slug' => 'complejo-la-florida',
        'descripcion' => 'Centro recreativo y turístico con camping e historia',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
        'color' => 'from-sky-500 to-blue-600',
        'color_bg' => 'from-sky-50 to-blue-50',
        'color_icon' => 'bg-sky-100 text-sky-600',
        'submenu' => true,
        'badge' => 'Historia del Camping'
    ),
    array(
        'titulo' => 'Comedor Universitario',
        'slug' => 'comedor-universitario',
        'descripcion' => 'Alimentación saludable y nutritiva para estudiantes',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>',
        'color' => 'from-orange-500 to-red-600',
        'color_bg' => 'from-orange-50 to-red-50',
        'color_icon' => 'bg-orange-100 text-orange-600',
    ),
);

// Sedes de SAEBU
$sedes = array(
    array(
        'titulo' => 'SAEBU San Luis',
        'slug' => 'san-luis',
        'descripcion' => 'Sede central - San Luis Capital',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>',
        'color' => 'from-blue-600 to-indigo-700',
        'color_bg' => 'from-blue-50 to-indigo-50',
        'color_icon' => 'bg-blue-100 text-blue-700',
    ),
    array(
        'titulo' => 'SAEBU Villa Mercedes',
        'slug' => 'villa-mercedes',
        'descripcion' => 'Sede Villa Mercedes',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>',
        'color' => 'from-purple-600 to-violet-700',
        'color_bg' => 'from-purple-50 to-violet-50',
        'color_icon' => 'bg-purple-100 text-purple-700',
    ),
    array(
        'titulo' => 'SAEBU Merlo',
        'slug' => 'merlo',
        'descripcion' => 'Sede Merlo',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>',
        'color' => 'from-green-600 to-emerald-700',
        'color_bg' => 'from-green-50 to-emerald-50',
        'color_icon' => 'bg-green-100 text-green-700',
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
            <h1 class="text-xl md:text-2xl lg:text-4xl font-bold mb-6">
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
                <h2 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">
                    Departamentos y Servicios
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Cada departamento está comprometido con tu desarrollo integral. Haz clic en cualquier tarjeta para conocer más detalles.
                </p>
            </div>

            <!-- Grid de departamentos -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($departamentos as $dpto) : ?>
                    <a href="<?php echo esc_url(home_url('/departamento-' . $dpto['slug'])); ?>" 
                       class="group block bg-gradient-to-br <?php echo $dpto['color_bg']; ?> rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100 relative overflow-hidden">
                        
                        <!-- Badge si tiene submenú -->
                        <?php if (isset($dpto['submenu']) && $dpto['submenu']) : ?>
                            <div class="absolute top-4 right-4">
                                <span class="inline-flex items-center gap-1 px-3 py-1 bg-white/80 backdrop-blur-sm rounded-full text-xs font-semibold text-gray-700 shadow-sm">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                    <?php echo isset($dpto['badge']) ? $dpto['badge'] : 'Con subsecciones'; ?>
                                </span>
                            </div>
                        <?php endif; ?>
                        
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

        </div>
    </div>
</section>

<!-- Sedes SAEBU -->
<section class="py-20 bg-gradient-to-br from-slate-50 to-blue-50">
    <div class="container mx-auto px-4">
        <div class="max-w-7xl mx-auto">
            
            <!-- Header -->
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold mb-4">
                    Presencia Provincial
                </span>
                <h2 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">
                    Nuestras Sedes
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    SAEBU está presente en las principales ciudades de San Luis
                </p>
            </div>

            <!-- Grid de sedes -->
            <div class="grid md:grid-cols-3 gap-8">
                <?php foreach ($sedes as $sede) : ?>
                    <a href="<?php echo esc_url(home_url('/sede-' . $sede['slug'])); ?>" 
                       class="group block bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-2 border-transparent hover:border-blue-200">
                        
                        <!-- Icono -->
                        <div class="w-20 h-20 <?php echo $sede['color_icon']; ?> rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform shadow-md mx-auto mb-6">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <?php echo $sede['icono']; ?>
                            </svg>
                        </div>

                        <!-- Contenido -->
                        <h3 class="text-xl font-bold text-gray-900 mb-3 text-center group-hover:text-blue-600 transition-colors">
                            <?php echo esc_html($sede['titulo']); ?>
                        </h3>
                        <p class="text-gray-600 text-center leading-relaxed mb-6">
                            <?php echo esc_html($sede['descripcion']); ?>
                        </p>

                        <!-- CTA -->
                        <div class="text-center">
                            <span class="inline-flex items-center gap-2 text-sm font-semibold text-blue-600">
                                Ver información
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </span>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-indigo-700">
    <div class="container mx-auto px-4">
        <div class="max-w-5xl mx-auto">
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center text-white">
                <div>
                    <div class="text-2xl md:text-5xl font-bold mb-2"><?php echo count($departamentos); ?></div>
                    <div class="text-blue-100">Departamentos</div>
                </div>
                <div>
                    <div class="text-2xl md:text-5xl font-bold mb-2"><?php echo count($sedes); ?></div>
                    <div class="text-blue-100">Sedes en San Luis</div>
                </div>
                <div>
                    <div class="text-2xl md:text-5xl font-bold mb-2">24/7</div>
                    <div class="text-blue-100">Atención Disponible</div>
                </div>
                <div>
                    <div class="text-2xl md:text-5xl font-bold mb-2">100%</div>
                    <div class="text-blue-100">Compromiso</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-xl md:text-2xl font-bold text-gray-900 mb-6">
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
