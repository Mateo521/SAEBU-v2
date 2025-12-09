<?php
/**
 * Template Name: Departamentos
 * Description: Página índice de todos los departamentos
 */

get_header();

// Lista de departamentos de SAEBU (Datos provistos)
$departamentos = array(
    array(
        'titulo' => 'Becas',
        'slug' => 'becas',
        'descripcion' => 'Apoyo económico para continuar tus estudios universitarios',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
        'color' => 'from-blue-500 to-indigo-600',
        'color_bg' => 'from-blue-50 to-indigo-50',
        'color_icon' => 'bg-blue-50 text-blue-700', // Ajustado para contraste
    ),
    array(
        'titulo' => 'Mesa de Entradas y Personal',
        'slug' => 'dpto-mesa-de-entradas',
        'descripcion' => 'Gestión de trámites administrativos y recursos humanos',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>',
        'color' => 'from-slate-500 to-gray-600',
        'color_bg' => 'from-slate-50 to-gray-50',
        'color_icon' => 'bg-slate-100 text-slate-700',
    ),
    array(
        'titulo' => 'Compras y Contrataciones',
        'slug' => 'dpto-compras',
        'descripcion' => 'Gestión de adquisiciones y contrataciones institucionales',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>',
        'color' => 'from-amber-500 to-orange-600',
        'color_bg' => 'from-amber-50 to-orange-50',
        'color_icon' => 'bg-amber-50 text-amber-700',
    ),
    array(
        'titulo' => 'Club Universitario',
        'slug' => 'club-universitario',
        'descripcion' => 'Espacio de recreación, deportes y actividades sociales',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
        'color' => 'from-emerald-500 to-green-600',
        'color_bg' => 'from-emerald-50 to-green-50',
        'color_icon' => 'bg-emerald-50 text-emerald-700',
    ),
    array(
        'titulo' => 'Contable',
        'slug' => 'dpto-contable',
        'descripcion' => 'Administración financiera y control presupuestario',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>',
        'color' => 'from-teal-500 to-cyan-600',
        'color_bg' => 'from-teal-50 to-cyan-50',
        'color_icon' => 'bg-teal-50 text-teal-700',
    ),
    array(
        'titulo' => 'Educación Física y Deporte',
        'slug' => 'dpto-deportes',
        'descripcion' => 'Actividades deportivas, recreativas y gimnasio universitario',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>',
        'color' => 'from-green-500 to-lime-600',
        'color_bg' => 'from-green-50 to-lime-50',
        'color_icon' => 'bg-green-50 text-green-700',
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
        'color_icon' => 'bg-pink-50 text-pink-700',
        'submenu' => true,
        'badge' => 'Con Centro de Salud'
    ),
    array(
        'titulo' => 'Complejo Turístico La Florida',
        'slug' => 'camping-universitario',
        'descripcion' => 'Centro recreativo y turístico con camping e historia',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
        'color' => 'from-sky-500 to-blue-600',
        'color_bg' => 'from-sky-50 to-blue-50',
        'color_icon' => 'bg-sky-50 text-sky-700',
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
        'color_icon' => 'bg-orange-50 text-orange-700',
    ),
);

// Sedes de SAEBU
$sedes = array(
    array(
        'titulo' => 'SAEBU San Luis',
        'slug' => 'san-luis',
        'descripcion' => 'Sede Central',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>',
        'color_bar' => 'bg-blue-600', // Color de barra superior
        'color_icon' => 'bg-blue-50 text-blue-700',
    ),
    array(
        'titulo' => 'SAEBU Villa Mercedes',
        'slug' => 'saebu-villa-mercedes',
        'descripcion' => 'Centro Regional',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>',
        'color_bar' => 'bg-purple-600',
        'color_icon' => 'bg-purple-50 text-purple-700',
    ),
    array(
        'titulo' => 'SAEBU Merlo',
        'slug' => 'saebu-merlo',
        'descripcion' => 'Sede Turística',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>',
        'color_bar' => 'bg-teal-600',
        'color_icon' => 'bg-teal-50 text-teal-700',
    ),
);
?>

<main class="bg-gray-50">

    <?php while (have_posts()) : the_post(); ?>

        <section class="relative bg-slate-900 text-white py-20 border-b-4 border-[#005eb8]">
            <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'20\' height=\'20\' viewBox=\'0 0 20 20\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\' fill-rule=\'evenodd\'%3E%3Ccircle cx=\'3\' cy=\'3\' r=\'3\'/%3E%3Ccircle cx=\'13\' cy=\'13\' r=\'3\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
            
            <div class="container mx-auto px-4 relative z-10">
                <div class="max-w-4xl mx-auto text-center">
                    <nav class="flex justify-center items-center gap-2 text-sm text-gray-400 mb-6">
                        <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors">Inicio</a>
                        <span>/</span>
                        <span class="text-white font-medium">Departamentos y servicios</span>
                    </nav>

                    <h1 class="text-3xl md:text-5xl font-bold mb-6 leading-tight">
                        Departamentos y Servicios
                    </h1>
                    
                    <div class="w-24 h-1 bg-[#416ed2] mx-auto mb-6"></div>

                    <p class="text-xl text-gray-300 max-w-2xl mx-auto font-light leading-relaxed">
                        Estructura organizativa de la Secretaría de Asuntos Estudiantiles, diseñada para brindar bienestar integral a la comunidad universitaria.
                    </p>
                </div>
            </div>
        </section>

        <section class="py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="max-w-7xl mx-auto">
                    
                    <div class="flex items-center justify-between mb-10 border-b border-gray-200 pb-4">
                        <h2 class="text-2xl font-bold text-gray-900">Áreas de Gestión</h2>
                        <span class="text-sm text-gray-500"><?php echo count($departamentos); ?> Departamentos Activos</span>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <?php foreach ($departamentos as $dpto) : ?>
                            <a href="<?php echo esc_url(home_url('/' . $dpto['slug'])); ?>" 
                               class="group bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg hover:border-gray-300 transition-all duration-300 flex flex-col h-full relative overflow-hidden">
                                
                                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r <?php echo $dpto['color']; ?> opacity-0 group-hover:opacity-100 transition-opacity"></div>

                                <div class="flex items-start justify-between mb-4">
                                    <div class="w-14 h-14 rounded-md flex items-center justify-center <?php echo $dpto['color_icon']; ?>">
                                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <?php echo $dpto['icono']; ?>
                                        </svg>
                                    </div>

                                    <?php if (isset($dpto['badge'])) : ?>
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                            <?php echo $dpto['badge']; ?>
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-[#005eb8] transition-colors">
                                    <?php echo esc_html($dpto['titulo']); ?>
                                </h3>
                                
                                <p class="text-gray-600 text-sm leading-relaxed mb-6 flex-1">
                                    <?php echo esc_html($dpto['descripcion']); ?>
                                </p>

                                <div class="mt-auto pt-4 border-t border-gray-50 flex items-center text-[#005eb8] font-semibold text-sm group-hover:translate-x-1 transition-transform">
                                    Acceder al área
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-gray-50 border-t border-gray-200">
            <div class="container mx-auto px-4">
                <div class="max-w-7xl mx-auto">
                    
                    <div class="text-center mb-12">
                        <h2 class="text-2xl font-bold text-gray-900 mb-3">Sedes Regionales</h2>
                        <p class="text-gray-600 max-w-2xl mx-auto">
                            Puntos de atención y servicios distribuidos en la provincia para estar cerca de cada estudiante.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <?php foreach ($sedes as $sede) : ?>
                            <a href="<?php echo esc_url(home_url('/' . $sede['slug'])); ?>" 
                               class="block bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-all group">
                                
                                <div class="h-2 w-full <?php echo $sede['color_bar']; ?>"></div>
                                
                                <div class="p-8 text-center">
                                    <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 <?php echo $sede['color_icon']; ?> transition-transform group-hover:scale-110">
                                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <?php echo $sede['icono']; ?>
                                        </svg>
                                    </div>

                                    <h3 class="text-lg font-bold text-gray-900 mb-2"><?php echo esc_html($sede['titulo']); ?></h3>
                                    <p class="text-gray-500 text-sm mb-6"><?php echo esc_html($sede['descripcion']); ?></p>

                                    <span class="inline-flex items-center text-sm font-semibold text-gray-600 group-hover:text-gray-900">
                                        Ver información
                                        <svg class="w-4 h-4 ml-1 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                    </span>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-12 bg-white border-t border-gray-200">
            <div class="container mx-auto px-4">
                <div class="max-w-5xl mx-auto">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-x divide-gray-100">
                        <div>
                            <div class="text-3xl font-bold text-[#005eb8] mb-1"><?php echo count($departamentos); ?></div>
                            <div class="text-xs font-bold text-gray-500 uppercase tracking-wide">Áreas de Gestión</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-[#005eb8] mb-1"><?php echo count($sedes); ?></div>
                            <div class="text-xs font-bold text-gray-500 uppercase tracking-wide">Sedes Provinciales</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-[#005eb8] mb-1">100%</div>
                            <div class="text-xs font-bold text-gray-500 uppercase tracking-wide">Gratuito</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-[#005eb8] mb-1">24/7</div>
                            <div class="text-xs font-bold text-gray-500 uppercase tracking-wide">Acceso Online</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-[#416ed2] text-white">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-2xl font-bold mb-4">¿No encontrás lo que buscás?</h2>
                <p class="text-blue-100 mb-8 max-w-2xl mx-auto">
                    Nuestro equipo de Mesa de Entrada está disponible para orientarte y derivarte al área correspondiente.
                </p>
                <a href="<?php echo esc_url(home_url('/contacto')); ?>" class="inline-flex items-center justify-center gap-2 bg-white text-[#005eb8] px-8 py-3 rounded-md font-bold hover:bg-gray-100 transition-colors shadow-sm">
                    Contactar Mesa de Entrada
                </a>
            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>