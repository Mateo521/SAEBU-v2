<?php

/**
 * Template Name: Comedor universitario
 * Description: Página informativa del servicio de comedor, tarifas y requisitos.
 */
get_header();

$precio_ticket   = get_field('precio_ticket_diario') ?: '$2.800';
$precio_bandeja  = get_field('precio_bandeja_vianda') ?: '$600';
$chequera_5      = get_field('precio_chequera_5') ?: '$12.500';
$chequera_10     = get_field('precio_chequera_10') ?: '$25.000';
$chequera_20     = get_field('precio_chequera_20') ?: '$50.000';
$chequera_25     = get_field('precio_chequera_25') ?: '$62.500';
?>

<main class="bg-white font-sans text-slate-900">

    <?php while (have_posts()) : the_post(); ?>

        <section class="bg-slate-900 py-32 border-b border-slate-800 text-center">
            <div class="container mx-auto px-6 max-w-4xl relative z-10">

                <nav class="flex justify-center items-center gap-3 text-base font-bold  uppercase text-slate-500 mb-8">
                    <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors">Inicio</a>
                    <span>/</span>
                    <a href="<?php echo home_url('/servicios'); ?>" class="hover:text-white transition-colors">Servicios</a>
                    <span>/</span>
                    <span class="text-[#005eb8]"><?php the_title(); ?></span>
                </nav>

                <h1 class="text-4xl md:text-6xl font-light text-white leading-tight mb-8 tracking-tight">
                    Comedor <strong class="font-semibold">universitario</strong>
                </h1>

                <p class="text-xl text-slate-400 font-light leading-relaxed max-w-2xl mx-auto">
                    <?php
                    if (has_excerpt()) {
                        echo get_the_excerpt();
                    } else {
                        echo 'Servicio de alimentación nutricional, accesible y de calidad, diseñado para acompañar el rendimiento académico.';
                    }
                    ?>
                </p>
            </div>
        </section>

        <div class="bg-[#005eb8] text-white py-4 text-center">
            <span class="text-xs md:text-base font-bold uppercase ">
                Servicio exclusivo para estudiantes regulares que cursen una carrera en la UNSL
            </span>
        </div>

        <section class="py-24 bg-slate-50 border-b border-slate-200">
            <div class="container mx-auto px-6 max-w-5xl">

                <div class="text-center mb-16">
                    <h2 class="text-3xl font-light text-slate-900 tracking-tight mb-2">
                        Sedes y <strong class="font-semibold">horarios</strong>
                    </h2>
                    <p class="text-lg text-slate-500 font-light">Ubicación y franjas de servicio en nuestros centros universitarios.</p>
                </div>

                <div class="grid md:grid-cols-2 gap-12">
                    <div class="bg-white border border-slate-200 p-8 shadow-sm group hover:border-[#005eb8] transition-colors">
                        <span class="text-base font-bold text-[#005eb8] uppercase  block mb-2">Sede Central</span>
                        <h3 class="text-2xl font-medium text-slate-900 mb-8">San Luis</h3>

                        <div class="space-y-6">
                            <div class="border-t border-slate-100 pt-4">
                                <strong class="block text-base font-bold text-slate-400 uppercase  mb-2">Ubicación Física</strong>
                                <span class="text-base font-light text-slate-700">Rivadavia 1029</span>
                            </div>
                            <div class="border-t border-slate-100 pt-4">
                                <strong class="block text-base font-bold text-slate-400 uppercase  mb-2">Horarios de Servicio</strong>
                                <ul class="space-y-2">
                                    <li class="text-base font-light text-slate-700"><strong class="font-medium text-slate-900">Almuerzo:</strong> 12:00 a 14:00 hs</li>
                                    <li class="text-base font-light text-slate-700"><strong class="font-medium text-slate-900">Cena:</strong> 21:00 a 22:30 hs</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white border border-slate-200 p-8 shadow-sm group hover:border-[#e67e22] transition-colors">
                        <span class="text-base font-bold text-[#e67e22] uppercase  block mb-2">Sede Regional</span>
                        <h3 class="text-2xl font-medium text-slate-900 mb-8">Villa Mercedes</h3>

                        <div class="space-y-6">
                            <div class="border-t border-slate-100 pt-4">
                                <strong class="block text-base font-bold text-slate-400 uppercase  mb-2">Ubicación Física</strong>
                                <span class="text-base font-light text-slate-700">Campus Universitario<br>Ruta Provincial 55 (extremo norte)</span>
                            </div>
                            <div class="border-t border-slate-100 pt-4">
                                <strong class="block text-base font-bold text-slate-400 uppercase  mb-2">Horarios de Servicio</strong>
                                <ul class="space-y-2">
                                    <li class="text-base font-light text-slate-700"><strong class="font-medium text-slate-900">Almuerzo únicamente:</strong> 12:00 a 14:00 hs</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="py-24 bg-white">
            <div class="container mx-auto px-6 max-w-6xl">

                <div class="mb-16">
                    <h2 class="text-3xl font-light text-slate-900 tracking-tight mb-2">
                        Inscripción y <strong class="font-semibold">requisitos</strong>
                    </h2>
                    <p class="text-lg text-slate-500 font-light">Documentación necesaria a presentar en la Mesa de Entradas correspondiente.</p>
                </div>

                <div class="grid md:grid-cols-2 gap-16 md:divide-x divide-slate-200">

                    <div class="md:pr-8">
                        <span class="text-base font-bold text-[#005eb8] uppercase  block mb-4">Estudiantes de primer año</span>
                        <h3 class="text-2xl font-medium text-slate-900 mb-8">Ingresantes</h3>

                        <ul class="space-y-6">
                            <li class="border-t border-slate-100 pt-4">
                                <strong class="block text-base font-medium text-slate-900 mb-1">Documento de Identidad</strong>
                                <span class="text-base font-light text-slate-500">DNI físico original.</span>
                            </li>
                            <li class="border-t border-slate-100 pt-4">
                                <strong class="block text-base font-medium text-slate-900 mb-1">Certificación académica</strong>
                                <span class="text-base font-light text-slate-500">Certificado de alumno regular vigente. En su defecto, se acepta el comprobante oficial de inscripción a la carrera.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="md:pl-16">
                        <span class="text-base font-bold text-[#005eb8] uppercase  block mb-4">Estudiantes avanzados</span>
                        <h3 class="text-2xl font-medium text-slate-900 mb-8">Renovantes</h3>

                        <ul class="space-y-6">
                            <li class="border-t border-slate-100 pt-4">
                                <strong class="block text-base font-medium text-slate-900 mb-1">Documento de Identidad</strong>
                                <span class="text-base font-light text-slate-500">DNI físico original.</span>
                            </li>
                            <li class="border-t border-slate-100 pt-4">
                                <strong class="block text-base font-medium text-slate-900 mb-1">Certificación de regularidad</strong>
                                <span class="text-base font-light text-slate-500">Certificado de alumno regular vigente expedido por la facultad.</span>
                            </li>
                            <li class="border-t border-slate-100 pt-4">
                                <strong class="block text-base font-medium text-slate-900 mb-1">Actividad académica</strong>
                                <span class="text-base font-light text-slate-500">Comprobante de inscripción a materias del cuatrimestre correspondiente.</span>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="mt-16 pt-6 border-t border-slate-900 inline-block">
                    <span class="text-base font-bold text-slate-900 uppercase  block mb-2">Modalidad de presentación</span>
                    <p class="text-base font-light text-slate-600">La documentación requerida puede ser presentada tanto de <strong>manera física</strong> como en <strong>formato digital</strong> al momento de realizar el trámite.</p>
                </div>

            </div>
        </section>

        <section class="py-24 bg-slate-50 border-y border-slate-200">
            <div class="container mx-auto px-6 max-w-6xl">

                <div class="grid lg:grid-cols-[1fr_1.5fr] gap-16 items-start">

                    <div>
                        <div class="mb-12">
                            <h2 class="text-3xl font-light text-slate-900 tracking-tight mb-8">
                                Valor del <strong class="font-semibold">Ticket</strong>
                            </h2>
                            <div class="flex items-baseline gap-2 mb-4">
                                <span class="text-6xl font-light text-slate-900 tracking-tighter"><?php echo esc_html($precio_ticket); ?></span>
                                <span class="text-base font-medium text-slate-400 uppercase ">/ día</span>
                            </div>
                            <span class="inline-block border border-slate-300 bg-white text-base font-bold text-slate-600 uppercase  px-3 py-1 mb-8">
                                Disponible pago mediante QR
                            </span>

                            <h3 class="text-base font-bold text-slate-400 uppercase  mb-4 border-b border-slate-200 pb-2">El menú diario incluye</h3>
                            <ul class="text-base text-slate-700 font-light space-y-2 mb-12">
                                <li>— 1er plato (Entrada)</li>
                                <li>— 2do plato (Principal)</li>
                                <li>— Pan</li>
                                <li>— Fruta (Postre)</li>
                            </ul>
                        </div>

                        <div class="border-t border-slate-200 pt-8">
                            <h3 class="text-base font-bold text-[#005eb8] uppercase  mb-4">Modalidad viandas </h3>
                            <p class="text-base text-slate-600 font-light mb-4">Podés retirar tu comida del comedor mediante dos opciones:</p>
                            <ul class="space-y-3">
                                <li class="text-base text-slate-800">
                                    <strong class="font-medium">1. Con tupper propio:</strong> Sin costo adicional.
                                </li>
                                <li class="text-base text-slate-800">
                                    <strong class="font-medium">2. Compra de bandeja:</strong> Adquiriendo una bandeja descartable en el comedor por un valor de <strong><?php echo esc_html($precio_bandeja); ?></strong>.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-white border border-slate-200 p-8 md:p-12 shadow-sm">
                        <div class="mb-10 border-b border-slate-100 pb-8">
                            <span class="text-base font-bold text-[#005eb8] uppercase  block mb-2">Recomendación SAEBU</span>
                            <h3 class="text-3xl font-light text-slate-900 tracking-tight mb-4">
                                Sistema de <strong class="font-semibold">chequeras</strong>
                            </h3>
                            <p class="text-base text-slate-500 font-light leading-relaxed">
                                Una forma más rápida y económica de acceder a tus comidas. Recomendamos su uso para retirar tus tickets de manera más ágil, evitar filas diarias y organizar mejor tus gastos mensuales.
                            </p>
                        </div>

                        <div class="space-y-0 divide-y divide-slate-100">
                            <div class="flex justify-between items-center py-5 group hover:bg-slate-50 transition-colors px-4 -mx-4">
                                <span class="text-lg font-medium text-slate-900">5 Comidas</span>
                                <span class="text-xl font-light text-slate-500 group-hover:text-[#005eb8] transition-colors"><?php echo esc_html($chequera_5); ?></span>
                            </div>

                            <div class="flex justify-between items-center py-5 group hover:bg-slate-50 transition-colors px-4 -mx-4">
                                <span class="text-lg font-medium text-slate-900">10 Comidas</span>
                                <span class="text-xl font-light text-slate-500 group-hover:text-[#005eb8] transition-colors"><?php echo esc_html($chequera_10); ?></span>
                            </div>

                            <div class="flex justify-between items-center py-5 group hover:bg-slate-50 transition-colors px-4 -mx-4">
                                <span class="text-lg font-medium text-slate-900">20 Comidas</span>
                                <span class="text-xl font-light text-slate-500 group-hover:text-[#005eb8] transition-colors"><?php echo esc_html($chequera_20); ?></span>
                            </div>

                            <div class="flex justify-between items-center py-5 group hover:bg-slate-50 transition-colors px-4 -mx-4">
                                <span class="text-lg font-medium text-slate-900">25 Comidas</span>
                                <span class="text-xl font-light text-slate-500 group-hover:text-[#005eb8] transition-colors"><?php echo esc_html($chequera_25); ?></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-24 bg-white">
            <div class="container mx-auto px-6 max-w-4xl text-center">

                <span class="inline-block border border-slate-900 text-slate-900 text-base font-bold uppercase  px-3 py-1 mb-6">
                    Solo sede San Luis
                </span>

                <h2 class="text-3xl font-light text-slate-900 tracking-tight mb-8">
                    Menú <strong class="font-semibold">Sin TACC</strong> (Celíacos)
                </h2>

                <p class="text-lg text-slate-500 font-light mb-12">
                    Para acceder al servicio de cocina exclusivo libre de gluten, se debe cumplir con los siguientes requisitos adicionales en la dependencia correspondiente:
                </p>

                <div class="grid sm:grid-cols-3 gap-8 text-left border-t border-slate-200 pt-12">
                    <div>

                        <h4 class="text-base font-medium text-slate-900 mb-2">Inscripción activa</h4>
                        <p class="text-xs text-slate-500 font-light leading-relaxed">Debe estar formalmente inscripto/a al comedor como ingresante o renovante.</p>
                    </div>
                    <div>

                        <h4 class="text-base font-medium text-slate-900 mb-2">Certificado médico</h4>
                        <p class="text-xs text-slate-500 font-light leading-relaxed">Presentar certificado médico original actualizado expedido por especialista.</p>
                    </div>
                    <div>

                        <h4 class="text-base font-medium text-slate-900 mb-2">Estudio clínico</h4>
                        <p class="text-xs text-slate-500 font-light leading-relaxed">Presentar fotocopia del estudio de biopsia confirmatorio.</p>
                    </div>
                </div>

            </div>
        </section>

        <section class="bg-slate-900 py-24 text-white text-center border-t border-slate-800">
            <div class="container mx-auto px-6 max-w-3xl">

                <h2 class="text-3xl font-light mb-6 tracking-tight">¿Tenés dudas sobre tu trámite?</h2>
                <p class="text-slate-400 font-light text-lg mb-12">
                    Si te falta documentación o necesitás saber a qué mesa de entradas dirigirte, contactate con nuestra administración.
                </p>

                <div class="flex justify-center">
                    <a href="<?php echo esc_url(home_url('/dpto-mesa-de-entradas')); ?>" class="inline-block bg-white text-slate-900 px-10 py-4 text-base font-bold uppercase  hover:bg-slate-100 hover:scale-105 transition-all duration-300">
                        Consultar Mesa de Entradas
                    </a>
                </div>

            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>