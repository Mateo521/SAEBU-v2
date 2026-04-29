<?php

/**
 * Template Name: Departamento Contable
 */
get_header();
?>

<main class="bg-white font-sans">

    <?php while (have_posts()) : the_post(); ?>

        <section class="bg-slate-900 py-32 border-b border-slate-800 text-center">
            <div class="container mx-auto px-6 max-w-4xl relative z-10">

                <nav class="flex justify-center items-center gap-3 text-[10px] font-bold tracking-widest uppercase text-slate-500 mb-8">
                    <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors">Inicio</a>
                    <span>/</span>
                    <?php
                    global $post;
                    if (is_page() && $post->post_parent) {
                        $ancestors = array_reverse(get_post_ancestors($post->ID));
                        foreach ($ancestors as $ancestor_id) {
                    ?>
                            <a href="<?php echo get_permalink($ancestor_id); ?>" class="hover:text-white transition-colors">
                                <?php echo get_the_title($ancestor_id); ?>
                            </a>
                            <span>/</span>
                    <?php
                        }
                    }
                    ?>
                    <span class="text-[#005eb8]"><?php the_title(); ?></span>
                </nav>

                <h1 class="text-4xl md:text-6xl font-light text-white leading-tight mb-8 tracking-tight">
                    Departamento <strong class="font-semibold">Contable</strong>
                </h1>

                <p class="text-xl text-slate-400 font-light leading-relaxed max-w-2xl mx-auto">
                    <?php
                    if (has_excerpt()) {
                        echo get_the_excerpt();
                    } else {
                        echo 'Centro de gestión administrativa y financiera. Asegurando la transparencia y optimización de los recursos institucionales.';
                    }
                    ?>
                </p>
            </div>
        </section>

        <section class="py-24 bg-white">
            <div class="container mx-auto px-6 max-w-7xl">
                <div class="grid md:grid-cols-[1fr_2fr] gap-16 items-start">

                    <div class="sticky top-10">
                        <h2 class="text-3xl font-light text-slate-900 tracking-tight">
                            Función <strong class="font-semibold">Estratégica</strong>
                        </h2>
                        <div class="h-px w-12 bg-slate-900 mt-8 mb-8"></div>
                        <span class="inline-block border border-slate-200 text-[10px] font-bold uppercase tracking-widest text-slate-500 px-4 py-2">
                            Dir. Administrativo-Contable
                        </span>
                    </div>

                    <div>
                        <p class="text-2xl font-light text-slate-700 leading-relaxed">
                            Este Departamento desempeña una función transversal centralizando la <strong class="font-medium text-slate-900">administración financiera</strong> de toda la estructura de la Secretaría.
                        </p>
                        <p class="text-lg text-slate-500 font-light leading-relaxed mt-6">
                            Coordina y supervisa la ejecución presupuestaria, actuando como un componente clave para la planificación, priorización y optimización de los recursos destinados a las áreas administrativas, asistenciales, de salud, deportivas, recreativas y de becas.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-24 bg-slate-50 border-y border-slate-200">
            <div class="container mx-auto px-6 max-w-7xl">

                <div class="mb-16">
                    <h2 class="text-3xl font-light text-slate-900 tracking-tight mb-4">
                        Áreas de <strong class="font-semibold">Gestión</strong>
                    </h2>
                    <p class="text-lg text-slate-500 font-light">Responsabilidades y competencias principales del departamento.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-12">

                    <div class="border-t border-slate-200 pt-5 group">
                        <span class="text-[10px] font-bold text-slate-400 tracking-widest block mb-3 group-hover:text-[#005eb8] transition-colors">01</span>
                        <h3 class="text-lg font-medium text-slate-900 mb-2">Control y Administración</h3>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">Supervisión contable y financiera de las cuentas corrientes de la SAEBU, asegurando transparencia y orden documental.</p>
                    </div>

                    <div class="border-t border-slate-200 pt-5 group">
                        <span class="text-[10px] font-bold text-slate-400 tracking-widest block mb-3 group-hover:text-[#005eb8] transition-colors">02</span>
                        <h3 class="text-lg font-medium text-slate-900 mb-2">Pago de Becas</h3>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">Gestión operativa y ejecución de pagos de Ayuda Económica, Beca CREER y planes de Contraprestación.</p>
                    </div>

                    <div class="border-t border-slate-200 pt-5 group">
                        <span class="text-[10px] font-bold text-slate-400 tracking-widest block mb-3 group-hover:text-[#005eb8] transition-colors">03</span>
                        <h3 class="text-lg font-medium text-slate-900 mb-2">Comedor Universitario</h3>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">Manejo y control de la cuenta corriente del comedor, abarcando la gestión de cobros y el pago a proveedores de alimentos.</p>
                    </div>

                    <div class="border-t border-slate-200 pt-5 group">
                        <span class="text-[10px] font-bold text-slate-400 tracking-widest block mb-3 group-hover:text-[#005eb8] transition-colors">04</span>
                        <h3 class="text-lg font-medium text-slate-900 mb-2">Proveedores</h3>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">Procesamiento y pago a proveedores de bienes y servicios vinculados a todas las dependencias de la Secretaría.</p>
                    </div>

                    <div class="border-t border-slate-200 pt-5 group">
                        <span class="text-[10px] font-bold text-slate-400 tracking-widest block mb-3 group-hover:text-[#005eb8] transition-colors">05</span>
                        <h3 class="text-lg font-medium text-slate-900 mb-2">Servicios Contratados</h3>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">Administración de contratos de servicios externos, incluyendo mantenimiento edilicio y seguridad de la Residencia.</p>
                    </div>

                    <div class="border-t border-slate-200 pt-5 group">
                        <span class="text-[10px] font-bold text-slate-400 tracking-widest block mb-3 group-hover:text-[#005eb8] transition-colors">06</span>
                        <h3 class="text-lg font-medium text-slate-900 mb-2">Complejo La Florida</h3>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">Coordinación contable de los ingresos y egresos derivados de la actividad del Complejo Turístico y Recreativo.</p>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-24 bg-white">
            <div class="container mx-auto px-6 max-w-5xl text-center">
                <h2 class="text-3xl font-light text-slate-900 tracking-tight mb-16">
                    Articulación <strong class="font-semibold">Operativa</strong>
                </h2>

                <div class="grid md:grid-cols-3 gap-8 items-stretch">

                    <div class="flex flex-col justify-center border border-slate-200 p-8">
                        <span class="text-[10px] uppercase tracking-widest text-slate-400 font-bold mb-4 block">Demandas Internas</span>
                        <ul class="text-sm text-slate-600 font-light space-y-2">
                            <li>Administración General</li>
                            <li>Salud Estudiantil</li>
                            <li>Deportes y Recreación</li>
                        </ul>
                    </div>

                    <div class="flex flex-col justify-center bg-slate-900 text-white p-8 scale-105 shadow-xl z-10">
                        <span class="text-[10px] uppercase tracking-widest text-[#005eb8] font-bold mb-2 block">Nodo Central</span>
                        <h3 class="text-lg font-medium mb-2">Dpto. Contable</h3>
                        <p class="text-xs text-slate-400 font-light">Procesamiento y Gestión Financiera</p>
                    </div>

                    <div class="flex flex-col justify-center border border-slate-200 p-8 bg-slate-50">
                        <span class="text-[10px] uppercase tracking-widest text-slate-400 font-bold mb-4 block">Ejecución de Servicios</span>
                        <ul class="text-sm text-slate-600 font-light space-y-2">
                            <li>Sistema de Becas</li>
                            <li>Comedor Universitario</li>
                            <li>Residencias y Mantenimiento</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-24 bg-slate-50 border-t border-slate-200">
            <div class="container mx-auto px-6 max-w-4xl">

                <h2 class="text-3xl font-light text-slate-900 text-center mb-16 tracking-tight">
                    Consultas <strong class="font-semibold">frecuentes</strong>
                </h2>

                <div class="space-y-4">
                    <details class="group border-b border-slate-200 pb-4 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer text-lg font-medium text-slate-900 hover:text-[#005eb8] transition-colors list-none">
                            ¿Cuándo se realizan los pagos de becas?
                            <span class="transition duration-300 group-open:-rotate-180">
                                <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-slate-500 font-light mt-4 leading-relaxed pr-8">
                            El Departamento Contable procesa los pagos de becas de manera mensual. Las fechas específicas pueden variar según el calendario financiero, pero siempre se gestionan con prioridad para asegurar la recepción del beneficio.
                        </p>
                    </details>

                    <details class="group border-b border-slate-200 pb-4 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer text-lg font-medium text-slate-900 hover:text-[#005eb8] transition-colors list-none">
                            ¿Cómo funciona la cuenta corriente del comedor?
                            <span class="transition duration-300 group-open:-rotate-180">
                                <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-slate-500 font-light mt-4 leading-relaxed pr-8">
                            Nos encargamos del control de saldos, auditoría y gestión de cobros del sistema de viandas, asegurando la trazabilidad de los fondos y la sostenibilidad del servicio de alimentación.
                        </p>
                    </details>

                    <details class="group border-b border-slate-200 pb-4 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer text-lg font-medium text-slate-900 hover:text-[#005eb8] transition-colors list-none">
                            ¿Qué becas audita el departamento?
                            <span class="transition duration-300 group-open:-rotate-180">
                                <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-slate-500 font-light mt-4 leading-relaxed pr-8">
                            Gestionamos financieramente todas las líneas principales: Becas de Ayuda Económica, CREER, programas de Contraprestación de Servicios y fondos especiales como +Conectados.
                        </p>
                    </details>
                </div>

            </div>
        </section>

        <section class="bg-slate-900 py-24 text-white text-center border-t border-slate-800">
            <div class="container mx-auto px-6 max-w-3xl">

                <h2 class="text-3xl font-light mb-12 tracking-tight">Canales de Contacto</h2>

                <div class="mb-12 inline-block">
                    <h3 class="text-xl font-medium text-white mb-2">Téc. Gustavo Garay</h3>
                    <p class="text-xs text-[#005eb8] uppercase tracking-widest font-bold">Jefe de Departamento Contable</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="mailto:saebucontable@gmail.com" class="inline-block bg-white text-slate-900 px-10 py-4 text-sm font-bold uppercase tracking-widest hover:bg-slate-100  transition-all duration-300">
                        Enviar Correo
                    </a>
                    <a href="tel:26644520300" class="inline-block border border-slate-600 text-white px-10 py-4 text-sm font-bold uppercase tracking-widest hover:bg-slate-800 transition-all duration-300">
                        Llamar a Interno
                    </a>
                </div>

                <p class="text-xs text-slate-500 font-light mt-8">Línea rotativa: 2664 4520300 — Interno: 8131</p>

            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>