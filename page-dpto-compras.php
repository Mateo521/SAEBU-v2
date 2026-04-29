<?php

/**
 * Template Name: Departamento de Compras
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
                    Departamento de <strong class="font-semibold">Compras</strong>
                </h1>

                <p class="text-xl text-slate-400 font-light leading-relaxed max-w-2xl mx-auto">
                    <?php
                    if (has_excerpt()) {
                        echo get_the_excerpt();
                    } else {
                        echo 'Ejecutamos los procesos administrativos para la adquisición de bienes y servicios, garantizando el cumplimiento normativo y la transparencia en la gestión.';
                    }
                    ?>
                </p>
            </div>
        </section>

        <section class="py-24 bg-white">
            <div class="container mx-auto px-6 max-w-7xl">
                <div class="grid md:grid-cols-[1.5fr_1fr] gap-16 items-start">

                    <div>
                        <h2 class="text-3xl font-light text-slate-900 tracking-tight mb-8">
                            Gestión de <strong class="font-semibold">Adquisiciones</strong>
                        </h2>
                        <div class="space-y-6 text-lg text-slate-600 font-light leading-relaxed">
                            <p>
                                El Departamento de Compras ejecuta los procedimientos administrativos necesarios para proveer de bienes y servicios a todas las dependencias que integran la SAEBU.
                            </p>
                            <p>
                                Nuestra labor abarca desde la compra de insumos alimenticios a gran escala para el Comedor Universitario, hasta el equipamiento técnico o deportivo más específico. Todo el proceso se realiza bajo estrictos estándares de control, asegurando el cumplimiento de la normativa vigente aplicable a la Universidad Nacional y la <strong class="font-medium text-slate-900">transparencia absoluta en el manejo de los fondos públicos</strong>.
                            </p>
                        </div>
                    </div>

                    <div class="md:pl-12 md:border-l border-slate-200">
                        <h3 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-6">Áreas Asistidas</h3>
                        <ul class="space-y-4">
                            <li class="border-b border-slate-100 pb-4">
                                <span class="block text-sm font-medium text-slate-900">Comedor Universitario</span>
                            </li>
                            <li class="border-b border-slate-100 pb-4">
                                <span class="block text-sm font-medium text-slate-900">Departamento de Deportes</span>
                            </li>
                            <li class="border-b border-slate-100 pb-4">
                                <span class="block text-sm font-medium text-slate-900">Complejo Turístico La Florida</span>
                            </li>
                            <li class="border-b border-slate-100 pb-4">
                                <span class="block text-sm font-medium text-slate-900">Centros de Salud (CeSEU)</span>
                            </li>
                            <li class="pt-2">
                                <span class="block text-sm font-medium text-slate-900">Administración Central y Residencias</span>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-24 bg-slate-50 border-y border-slate-200">
            <div class="container mx-auto px-6 max-w-7xl">

                <div class="mb-16">
                    <h2 class="text-3xl font-light text-slate-900 tracking-tight mb-4">
                        Modalidades de <strong class="font-semibold">Contratación</strong>
                    </h2>
                    <p class="text-lg text-slate-500 font-light">Procedimientos administrativos aplicados según normativa y volumen de compra.</p>
                </div>

                <div class="grid md:grid-cols-3 gap-12">

                    <div class="border-t border-slate-300 pt-6 group">
                        <span class="text-[10px] font-bold text-[#005eb8] uppercase tracking-widest mb-3 block">Alta Complejidad</span>
                        <h3 class="text-xl font-medium text-slate-900 mb-3">Licitación Privada / Pública</h3>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">
                            Procedimiento formal y riguroso utilizado para adquisiciones de gran volumen (ej. insumos alimenticios anuales). Requiere la elaboración de pliegos, publicación oficial y compulsa de múltiples oferentes.
                        </p>
                    </div>

                    <div class="border-t border-slate-300 pt-6 group">
                        <span class="text-[10px] font-bold text-[#005eb8] uppercase tracking-widest mb-3 block">Respuesta Rápida</span>
                        <h3 class="text-xl font-medium text-slate-900 mb-3">Compra Directa</h3>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">
                            Procedimiento ágil por compulsa abreviada de precios. Se aplica para resolver necesidades urgentes, adquisiciones de montos menores o proveedores únicos y específicos.
                        </p>
                    </div>

                    <div class="border-t border-slate-300 pt-6 group">
                        <span class="text-[10px] font-bold text-[#005eb8] uppercase tracking-widest mb-3 block">Planificación</span>
                        <h3 class="text-xl font-medium text-slate-900 mb-3">Plan Anual de Compras</h3>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">
                            Estrategia de consolidación de adquisiciones recurrentes proyectadas para todo el año fiscal. Permite optimizar los recursos económicos y reducir los tiempos administrativos.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-24 bg-white">
            <div class="container mx-auto px-6 max-w-7xl">

                <h2 class="text-3xl font-light text-slate-900 text-center tracking-tight mb-16">
                    Circuito <strong class="font-semibold">Administrativo</strong>
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

                    <div class="border-t-2 border-slate-900 pt-4">
                        <span class="text-3xl font-light text-slate-300 block mb-2">01</span>
                        <h3 class="text-base font-bold text-slate-900 mb-2 uppercase tracking-wide">Solicitud</h3>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">El departamento o área requirente elabora y envía el pedido formal justificando la necesidad.</p>
                    </div>

                    <div class="border-t-2 border-slate-900 pt-4 mt-4 md:mt-0 opacity-80 hover:opacity-100 transition-opacity">
                        <span class="text-3xl font-light text-slate-300 block mb-2">02</span>
                        <h3 class="text-base font-bold text-slate-900 mb-2 uppercase tracking-wide">Evaluación</h3>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">Compras clasifica el requerimiento, verifica fondos y selecciona el procedimiento normativo adecuado.</p>
                    </div>

                    <div class="border-t-2 border-slate-900 pt-4 mt-4 md:mt-0 opacity-60 hover:opacity-100 transition-opacity">
                        <span class="text-3xl font-light text-slate-300 block mb-2">03</span>
                        <h3 class="text-base font-bold text-slate-900 mb-2 uppercase tracking-wide">Tramitación</h3>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">Elaboración de pliegos, solicitud de presupuestos, evaluación de ofertas y selección del proveedor.</p>
                    </div>

                    <div class="border-t-2 border-[#005eb8] pt-4 mt-4 md:mt-0">
                        <span class="text-3xl font-light text-[#005eb8] block mb-2">04</span>
                        <h3 class="text-base font-bold text-[#005eb8] mb-2 uppercase tracking-wide">Adjudicación</h3>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">Emisión de orden de compra, recepción conforme del bien/servicio y pase a pago.</p>
                    </div>

                </div>

            </div>
        </section>

        <section class="py-20 bg-[#005eb8] text-white text-center">
            <div class="container mx-auto px-6 max-w-4xl">
                <h2 class="text-xs font-bold uppercase tracking-widest text-blue-200 mb-4">Acceso a Proveedores</h2>
                <h3 class="text-3xl md:text-4xl font-light mb-6">Portal de Compras UNSL</h3>
                <p class="text-blue-100 font-light text-lg mb-10 max-w-2xl mx-auto">
                    Plataforma oficial para acceder a las licitaciones públicas y privadas, inscribirse como proveedor y consultar el estado de los expedientes en curso.
                </p>
                <a href="https://compras.unsl.edu.ar" target="_blank" rel="noopener noreferrer"
                    class="inline-block bg-white text-[#005eb8] px-10 py-4 text-sm font-bold uppercase tracking-widest hover:bg-slate-100  transition-all duration-300">
                    Ingresar al Portal Oficial
                </a>
            </div>
        </section>

        <section class="bg-slate-900 py-24 text-white text-center">
            <div class="container mx-auto px-6 max-w-3xl">

                <h2 class="text-3xl font-light mb-6 tracking-tight">Contacto Directo</h2>
                <p class="text-slate-400 font-light text-lg mb-12">
                    Para consultas sobre trámites en curso o inscripción como proveedores de la Secretaría.
                </p>

                <div class="mb-12 inline-block">
                    <h3 class="text-xl font-medium text-white mb-2">Téc. Inés Moreno</h3>
                    <p class="text-xs text-[#005eb8] uppercase tracking-widest font-bold">Jefa de Departamento de Compras</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="mailto:dptocomprassaebu@gmail.com" class="inline-block bg-white text-slate-900 px-10 py-4 text-sm font-bold uppercase tracking-widest hover:bg-slate-100  transition-all duration-300">
                        Enviar Correo
                    </a>
                    <div class="inline-block border border-slate-600 text-white px-10 py-4 text-sm font-bold uppercase tracking-widest cursor-default">
                        Interno 8135
                    </div>
                </div>

            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>