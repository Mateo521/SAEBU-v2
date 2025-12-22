<?php

/**
 * Template Name: Departamentos (Institucional)
 * Description: Diseño sobrio y elegante para listado de áreas
 */

get_header();

// Datos (Mantenemos la misma estructura, pero ignoraremos los colores individuales en el HTML para unificar)
$departamentos = array(
    array(
        'titulo' => 'Becas',
        'slug' => 'becas',
        'descripcion' => 'Apoyo económico para la continuidad académica.',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
    ),
    array(
        'titulo' => 'Mesa de Entradas y Personal',
        'slug' => 'dpto-mesa-de-entradas',
        'descripcion' => 'Gestión administrativa y recursos humanos.',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>',
    ),
    array(
        'titulo' => 'Compras y Contrataciones',
        'slug' => 'dpto-compras',
        'descripcion' => 'Adquisiciones y procesos licitatorios.',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>',
    ),
    array(
        'titulo' => 'Club Universitario',
        'slug' => 'club-universitario',
        'descripcion' => 'Espacio social, recreativo y de esparcimiento.',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
    ),
    array(
        'titulo' => 'Contable',
        'slug' => 'dpto-contable',
        'descripcion' => 'Administración financiera y presupuestaria.',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>',
    ),
    array(
        'titulo' => 'Educación Física y Deporte',
        'slug' => 'dpto-deportes',
        'descripcion' => 'Actividades deportivas y gimnasio universitario.',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>',
        'badge' => 'Gimnasio'
    ),
    array(
        'titulo' => 'Trabajo Social',
        'slug' => 'dpto-trabajo-social',
        'descripcion' => '',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>',
        'badge' => 'Salud'
    ),
    array(
        'titulo' => 'Complejo Turístico y Recreativo La Florida',
        'slug' => 'camping-universitario',
        'descripcion' => '',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
    ),
    array(
        'titulo' => 'Comedor universitario',
        'slug' => 'comedor-universitario',
        'descripcion' => 'Servicio de alimentación nutricional.',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>',
    ),
);

// Sedes
$sedes = array(
    array(
        'titulo' => 'Sede San Luis',
        'slug' => 'san-luis',
        'direccion' => 'Rivadavia 1029',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>',
    ),
    array(
        'titulo' => 'Sede Villa Mercedes',
        'slug' => 'saebu-villa-mercedes',
        'direccion' => 'Junín 132',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>',
    ),
    array(
        'titulo' => 'Sede Merlo',
        'slug' => 'saebu-merlo',
        'direccion' => 'Campus Universitario',
        'icono' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>',
    ),
);
?>

<main class="bg-white min-h-screen font-sans text-slate-800">

    <?php while (have_posts()) : the_post(); ?>

        <header class="pt-20 pb-16 border-b border-gray-100">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto text-center">

                    <nav class="flex justify-center items-center gap-2 text-xs font-bold text-gray-700 uppercase tracking-widest mb-6">
                        <a href="<?php echo home_url(); ?>" class="hover:text-gray-900 transition-colors">Inicio</a>
                        <span class="text-gray-300">/</span>
                        <span class="text-gray-900">Departamentos</span>
                    </nav>

                    <h1 class="text-4xl md:text-5xl  font-bold text-slate-900 mb-6 tracking-tight">
                        Estructura
                    </h1>

                    <p class="text-lg text-slate-500 font-light max-w-2xl mx-auto leading-relaxed">
                        Departamentos y servicios dependientes de la SAEBU.
                    </p>
                </div>
            </div>
        </header>

        <section class="py-16 md:py-24">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-8">
                        <?php foreach ($departamentos as $dpto) : ?>
                            <a href="<?php echo esc_url(home_url('/' . $dpto['slug'])); ?>"
                                class="group block h-full bg-white border-t-2 border-gray-100 p-8 hover:border-[#003366] hover:bg-gray-50 transition-all duration-300 relative">

                                <div class="flex items-start justify-between mb-6">
                                    <div class="text-slate-700 group-hover:text-[#003366] transition-colors duration-300">
                                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <?php echo $dpto['icono']; ?>
                                        </svg>
                                    </div>

                                    <?php if (isset($dpto['badge'])) : ?>
                                        <span class="inline-block px-2 py-1 bg-gray-100 text-gray-600 text-[10px] font-bold uppercase tracking-widest border border-gray-200">
                                            <?php echo $dpto['badge']; ?>
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <div>
                                    <h1 class="text-xl  font-bold text-slate-900 mb-3 group-hover:text-[#003366] transition-colors">
                                        <?php echo esc_html($dpto['titulo']); ?>
                                    </h1>
                                    <p class="text-slate-500 text-sm leading-relaxed mb-6">
                                        <?php echo esc_html($dpto['descripcion']); ?>
                                    </p>
                                </div>

                                <div class="flex items-center text-sm font-bold text-slate-700 group-hover:text-[#003366] transition-colors mt-auto">
                                    <span class="mr-2">Ver más</span>
                                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-slate-50 border-t border-gray-200 py-20">
            <div class="container mx-auto px-4">
                <div class="max-w-5xl mx-auto">
 
                    <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 border-b border-gray-200 pb-4">
                        <div>
                            <h2 class="text-2xl  font-bold text-slate-900">Sedes regionales</h2>
                            <p class="text-slate-500 text-sm mt-1">Ubicación de centros de atención administrativa.</p>
                        </div>
                        <div class="mt-4 md:mt-0">
                            <a href="#" class="text-sm font-bold text-[#003366] hover:underline">Ver mapa completo &rarr;</a>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-3 gap-6">
                        <?php foreach ($sedes as $sede) : ?>
                            <div class="bg-white p-6 border border-gray-200 shadow-sm flex items-start gap-4">
                                <div class="flex-shrink-0 text-slate-700">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <?php echo $sede['icono']; ?>
                                    </svg>
                                </div>
                                <div>
                                    <h1 class="text-sm font-bold text-slate-900 uppercase tracking-wide mb-1">
                                        <?php echo esc_html($sede['titulo']); ?>
                                    </h1>
                                    <p class="text-slate-500 text-sm  italic">
                                        <?php echo esc_html($sede['direccion']); ?>
                                    </p>
                                    <div class="mt-3">
                                        <a href="<?php echo esc_url(home_url('/' . $sede['slug'])); ?>" class="text-xs font-semibold text-slate-700 hover:text-[#003366] transition-colors">
                                            + Información
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </section>

        <section class="bg-[#003366] text-white py-16">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto flex flex-col md:flex-row items-center justify-between gap-8">
                    <div>
                        <h2 class="text-2xl  font-bold mb-2">Mesa de Entradas General</h2>
                        <p class="text-blue-200 text-sm max-w-lg">
                            Para consultas generales, expedientes o derivaciones, diríjase al área central de atención.
                        </p>
                    </div>
                    <div>
                        <a href="<?php echo esc_url(home_url('/contacto')); ?>" class="inline-block border border-white/30 bg-white/5 px-6 py-3 text-sm font-bold uppercase tracking-wider hover:bg-white hover:text-[#003366] transition-all">
                            Contactar Administración
                        </a>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>