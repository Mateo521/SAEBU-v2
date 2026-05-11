<?php

/**
 * Template Name: Departamentos (Institucional)
 * Description: Diseño sobrio y elegante para listado de áreas
 */

get_header();

$departamentos = array(
    array(
        'titulo' => 'Becas',
        'slug' => 'becas',
        'descripcion' => 'Apoyo económico para la continuidad y permanencia académica.',
        'badge' => 'Asistencia'
    ),
    array(
        'titulo' => 'Mesa de Entradas y Personal',
        'slug' => 'dpto-mesa-de-entradas',
        'descripcion' => 'Gestión administrativa, expedientes y recursos humanos.',
        'badge' => 'Administración'
    ),
    array(
        'titulo' => 'Compras y Contrataciones',
        'slug' => 'dpto-compras',
        'descripcion' => 'Adquisiciones, licitaciones y portal de proveedores institucionales.',
        'badge' => 'Administración'
    ),
    array(
        'titulo' => 'Club Universitario',
        'slug' => 'club-universitario',
        'descripcion' => 'Espacio social, recreativo y de esparcimiento para la comunidad.',
        'badge' => 'Comunidad'
    ),
    array(
        'titulo' => 'Departamento Contable',
        'slug' => 'dpto-contable',
        'descripcion' => 'Administración financiera, control presupuestario y pagos.',
        'badge' => 'Administración'
    ),
    array(
        'titulo' => 'Educación Física y Deporte',
        'slug' => 'dpto-deportes',
        'descripcion' => 'Actividades deportivas, gimnasio universitario y competencias.',
        'badge' => 'Gimnasio'
    ),
    array(
        'titulo' => 'Trabajo Social',
        'slug' => 'dpto-trabajo-social',
        'descripcion' => 'Acompañamiento integral, área de discapacidad y contención estudiantil.',
        'badge' => 'Salud Integral'
    ),
    array(
        'titulo' => 'Complejo Turístico La Florida',
        'slug' => 'camping-universitario',
        'descripcion' => 'Servicio de camping, cabañas y actividades náuticas en el dique.',
        'badge' => 'Recreación'
    ),
    array(
        'titulo' => 'Comedor Universitario',
        'slug' => 'comedor-universitario',
        'descripcion' => 'Servicio de alimentación nutricional, viandas y menú sin TACC.',
        'badge' => 'Servicios'
    ),
);

// Sedes limpias
$sedes = array(
    array(
        'titulo' => 'Sede San Luis',
        'slug' => 'san-luis',
        'direccion' => 'Rivadavia 1029, Capital',
    ),
    array(
        'titulo' => 'Sede Villa Mercedes',
        'slug' => 'saebu-villa-mercedes',
        'direccion' => 'Junín 132, Villa Mercedes',
    ),
    array(
        'titulo' => 'Sede Merlo',
        'slug' => 'saebu-merlo',
        'direccion' => 'Campus Universitario Barranca Colorada',
    ),
);
?>

<main class="bg-white font-sans text-slate-800">

    <?php while (have_posts()) : the_post(); ?>

        <section class="bg-slate-900 py-32 border-b border-slate-800 text-center">
            <div class="container mx-auto px-6 max-w-4xl relative z-10">

                <nav class="flex justify-center items-center gap-3 text-[10px] font-bold  uppercase text-slate-500 mb-8">
                    <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors">Inicio</a>
                    <span>/</span>
                    <span class="text-[#005eb8]">Institucional</span>
                </nav>

                <h1 class="text-4xl md:text-6xl font-light text-white leading-tight mb-8 tracking-tight">
                    Estructura <strong class="font-semibold">organizativa</strong>
                </h1>

                <p class="text-xl text-slate-400 font-light leading-relaxed max-w-2xl mx-auto">
                    <?php
                    if (has_excerpt()) {
                        echo get_the_excerpt();
                    } else {
                        echo 'Conocé los departamentos y áreas de servicio que integran la Secretaría de Asuntos Estudiantiles y Bienestar Universitario.';
                    }
                    ?>
                </p>
            </div>
        </section>

        <section class="py-24 bg-white">
            <div class="container mx-auto px-6 max-w-7xl">

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-16">
                    <?php
                    $contador = 1;
                    foreach ($departamentos as $dpto) :
                        $numero = str_pad($contador, 2, '0', STR_PAD_LEFT);
                    ?>
                        <a href="<?php echo esc_url(home_url('/' . $dpto['slug'])); ?>"
                            class="group block border-t border-slate-200 pt-6 hover:border-[#005eb8] transition-colors duration-300 flex flex-col h-full">

                            <div class="flex justify-between items-start mb-4">
                                <!--span class="text-3xl font-light text-slate-300 group-hover:text-[#005eb8] transition-colors">
                                    <?php echo $numero; ?>
                                </span-->

                                <?php if (isset($dpto['badge'])) : ?>
                                    <span class="text-[10px] font-bold text-[#005eb8] uppercase ">
                                        <?php echo $dpto['badge']; ?>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <h2 class="text-xl font-medium text-slate-900 mb-3 group-hover:text-[#005eb8] transition-colors">
                                <?php echo esc_html($dpto['titulo']); ?>
                            </h2>

                            <p class="text-slate-500 font-light text-sm leading-relaxed mb-6 flex-1">
                                <?php echo esc_html($dpto['descripcion']); ?>
                            </p>

                            <div class="mt-auto inline-flex items-center gap-2 text-xs font-bold uppercase  text-slate-900 group-hover:text-[#005eb8] transition-colors">
                                Ingresar al área
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </div>
                        </a>
                    <?php
                        $contador++;
                    endforeach;
                    ?>
                </div>

            </div>
        </section>

        <section class="bg-slate-50 border-y border-slate-200 py-24">
            <div class="container mx-auto px-6 max-w-7xl">

                <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 border-b border-slate-200 pb-6">
                    <div>
                        <h2 class="text-3xl font-light text-slate-900 tracking-tight">Sedes <strong class="font-semibold">regionales</strong></h2>
                        <p class="text-slate-500 font-light mt-2">Ubicación de centros de atención administrativa y de servicios.</p>
                    </div>
                </div>

                <div class="grid md:grid-cols-3 gap-12">
                    <?php foreach ($sedes as $sede) : ?>
                        <div class="flex flex-col">
                            <span class="text-[10px] font-bold text-slate-400 uppercase  mb-2 block">Delegación</span>
                            <h3 class="text-xl font-medium text-slate-900 mb-2">
                                <?php echo esc_html($sede['titulo']); ?>
                            </h3>
                            <p class="text-slate-600 font-light text-sm mb-6">
                                <?php echo esc_html($sede['direccion']); ?>
                            </p>

                            <a href="<?php echo esc_url(home_url('/' . $sede['slug'])); ?>" class="inline-block text-xs font-bold text-[#005eb8] uppercase  hover:text-slate-900 transition-colors mt-auto">
                                Ver más &rarr;
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>

        <section class="bg-slate-900 text-white py-24 text-center border-t border-slate-800">
            <div class="container mx-auto px-6 max-w-3xl">

                <h2 class="text-3xl font-light mb-6 tracking-tight">Mesa de Entradas General</h2>
                <p class="text-slate-400 font-light text-lg mb-12">
                    Para consultas generales, inicio de expedientes o derivaciones, comunicate con el área central de atención.
                </p>

                <a href="<?php echo esc_url(home_url('/dpto-mesa-de-entradas')); ?>" class="inline-block bg-white text-slate-900 px-10 py-4 text-sm font-bold uppercase  hover:bg-slate-100  transition-all duration-300">
                    Contactar Administración
                </a>

            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>