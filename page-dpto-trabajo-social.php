<?php

/**
 * Template Name: Trabajo Social
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
                    Departamento de <strong class="font-semibold">Trabajo Social</strong>
                </h1>

                <p class="text-xl text-slate-400 font-light leading-relaxed max-w-2xl mx-auto">
                    <?php
                    if (has_excerpt()) {
                        echo get_the_excerpt();
                    } else {
                        echo 'Acompañamiento, contención y gestión de recursos para garantizar el bienestar integral y la permanencia de la comunidad estudiantil.';
                    }
                    ?>
                </p>
            </div>
        </section>

        <section class="py-24 bg-white">
            <div class="container mx-auto px-6 max-w-4xl">

                <div class="text-center mb-16">
                    <h2 class="text-3xl font-light text-slate-900 tracking-tight mb-4">
                        Circuito de Gestión de <strong class="font-semibold">Becas</strong>
                    </h2>
                    <p class="text-lg text-slate-500 font-light">El proceso integral desde el asesoramiento inicial hasta la adjudicación final del beneficio.</p>
                </div>

                <div class="relative border-l border-slate-200 pl-8 md:pl-12 space-y-12 ml-4 md:ml-0">

                    <div class="relative">
                        <div class="absolute -left-[41px] md:-left-[69px] top-1 bg-white border-2 border-[#005eb8] text-[#005eb8] w-8 h-8 md:w-10 md:h-10 rounded-full flex items-center justify-center text-xs md:text-sm font-bold">01</div>
                        <h3 class="text-xl font-medium text-slate-900 mb-2">Asesoramiento</h3>
                        <p class="text-slate-600 font-light leading-relaxed">
                            Brindamos información detallada sobre el sistema de becas de la UNSL y orientamos sobre el Programa Nacional Progresar para la promoción de carreras.
                        </p>
                    </div>

                    <div class="relative">
                        <div class="absolute -left-[41px] md:-left-[69px] top-1 bg-white border-2 border-[#005eb8] text-[#005eb8] w-8 h-8 md:w-10 md:h-10 rounded-full flex items-center justify-center text-xs md:text-sm font-bold">02</div>
                        <h3 class="text-xl font-medium text-slate-900 mb-2">Convocatoria</h3>
                        <p class="text-slate-600 font-light leading-relaxed">
                            Apertura y seguimiento de inscripciones mediante el sistema informático institucional, en estrecha coordinación con el Departamento de Becas.
                        </p>
                    </div>

                    <div class="relative">
                        <div class="absolute -left-[41px] md:-left-[69px] top-1 bg-white border-2 border-[#005eb8] text-[#005eb8] w-8 h-8 md:w-10 md:h-10 rounded-full flex items-center justify-center text-xs md:text-sm font-bold">03</div>
                        <h3 class="text-xl font-medium text-slate-900 mb-2">Entrevistas</h3>
                        <p class="text-slate-600 font-light leading-relaxed">
                            Se realizan entrevistas socioeconómicas de valoración a todos los estudiantes que soliciten asistencia, asegurando equidad en el proceso.
                        </p>
                    </div>

                    <div class="relative">
                        <div class="absolute -left-[41px] md:-left-[69px] top-1 bg-[#005eb8] text-white w-8 h-8 md:w-10 md:h-10 rounded-full flex items-center justify-center text-xs md:text-sm font-bold">04</div>
                        <h3 class="text-xl font-medium text-[#005eb8] mb-2">Adjudicación</h3>
                        <p class="text-slate-600 font-light leading-relaxed">
                            Otorgamiento formal de los beneficios a través del dictamen de la Comisión de Becas y Residencias de la SAEBU.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-24 bg-slate-50 border-y border-slate-200">
            <div class="container mx-auto px-6 max-w-7xl">

                <div class="grid lg:grid-cols-[1fr_1.5fr] gap-16 items-start">

                    <div class="sticky top-10">
                        <h2 class="text-3xl font-light text-slate-900 tracking-tight">
                            Residencia <strong class="font-semibold">Universitaria</strong>
                        </h2>
                        <div class="h-px w-12 bg-slate-900 mt-8 mb-8"></div>
                        <p class="text-lg text-slate-500 font-light leading-relaxed">
                            Nuestro objetivo principal es atender las necesidades habitacionales y de convivencia, garantizando un entorno adecuado para el desarrollo de la vida académica.
                        </p>
                    </div>

                    <div>
                        <div class="grid grid-cols-2 gap-8 mb-12 border-b border-slate-200 pb-12">
                            <div>
                                <span class="block text-4xl md:text-5xl font-light text-[#005eb8] mb-2">40</span>
                                <span class="text-xs font-bold uppercase tracking-widest text-slate-400">Módulos Habitacionales</span>
                            </div>
                            <div>
                                <span class="block text-4xl md:text-5xl font-light text-[#005eb8] mb-2">Capital</span>
                                <span class="text-xs font-bold uppercase tracking-widest text-slate-400">Sede San Luis</span>
                            </div>
                        </div>

                        <div class="space-y-8">
                            <div>
                                <h3 class="text-sm font-bold text-slate-900 uppercase tracking-widest mb-2">Ubicación y Distribución</h3>
                                <p class="text-slate-600 font-light leading-relaxed">
                                    Ubicada en <strong>Rivadavia 1029</strong> (San Luis). El complejo cuenta con sectores habitacionales divididos para varones y mujeres.
                                </p>
                            </div>

                            <div>
                                <h3 class="text-sm font-bold text-slate-900 uppercase tracking-widest mb-2">Población Objetivo</h3>
                                <p class="text-slate-600 font-light leading-relaxed">
                                    Se otorga prioridad absoluta de ingreso a estudiantes que sean beneficiarios de las <strong>Becas SAEBU</strong> y del <strong>Programa Progresar</strong>.
                                </p>
                            </div>

                            <div>
                                <h3 class="text-sm font-bold text-slate-900 uppercase tracking-widest mb-2">Acompañamiento Académico</h3>
                                <p class="text-slate-600 font-light leading-relaxed">
                                    Implementamos <strong>Acuerdos Académicos</strong> para flexibilizar las exigencias del reglamento general, previniendo la deserción universitaria y brindando apoyo a los residentes que lo necesiten.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-24 bg-white">
            <div class="container mx-auto px-6 max-w-5xl">

                <div class="text-center mb-16">
                    <span class="text-[10px] font-bold text-[#005eb8] uppercase tracking-widest mb-4 block">Programa Específico</span>
                    <h2 class="text-3xl font-light text-slate-900 tracking-tight mb-4">
                        Área de Discapacidad e <strong class="font-semibold">Inclusión</strong>
                    </h2>
                    <p class="text-lg text-slate-500 font-light max-w-3xl mx-auto">
                        Trabajamos desde 2008 para lograr la plena integración de alumnos en situación de discapacidad, proporcionando los recursos necesarios para su óptimo desarrollo.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-x-16 gap-y-12 mb-16">
                    <?php
                    $recursos_discapacidad = [
                        'Recursos Materiales' => 'Gestión y provisión de los elementos físicos y de estudio necesarios para el cursado regular.',
                        'Recursos Humanos' => 'Asignación de tutores y acompañamiento profesional personalizado durante la trayectoria académica.',
                        'Recursos Tecnológicos' => 'Implementación de herramientas de accesibilidad digital y software adaptado a cada necesidad.',
                        'Recursos Económicos' => 'Gestión prioritaria de becas, subsidios y ayudas financieras institucionales.'
                    ];

                    $contador = 1;
                    foreach ($recursos_discapacidad as $titulo => $desc):
                    ?>
                        <div class="border-t border-slate-200 pt-4">
                            <span class="text-[10px] font-bold text-slate-300 tracking-widest block mb-2">0<?php echo $contador++; ?></span>
                            <h3 class="text-lg font-medium text-slate-900 mb-2"><?php echo $titulo; ?></h3>
                            <p class="text-sm text-slate-500 font-light leading-relaxed"><?php echo $desc; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="bg-slate-50 border-l-2 border-[#005eb8] p-8 md:p-10">
                    <h3 class="text-sm font-bold text-slate-900 uppercase tracking-widest mb-3">Promoción y Difusión Temprana</h3>
                    <p class="text-slate-600 font-light leading-relaxed mb-4">
                        Realizamos talleres informativos en los cursos de ingreso y jornadas de promoción de carreras. Nuestro objetivo central es lograr que el estudiante conozca y utilice la amplia gama de beneficios a su disposición <strong>desde el primer día de clases</strong>.
                    </p>
                </div>

            </div>
        </section>

        <section id="contacto" class="bg-slate-900 py-24 text-white text-center border-t border-slate-800">
            <div class="container mx-auto px-6 max-w-3xl">

                <h2 class="text-3xl font-light mb-6 tracking-tight">¿Necesitás asesoramiento?</h2>
                <p class="text-slate-400 font-light text-lg mb-12">
                    El equipo del Departamento de Trabajo Social está a entera disposición para orientarte y gestionar tus trámites.
                </p>

                <div class="mb-12 border-t border-slate-700 pt-8 inline-block">
                    <h3 class="text-xl font-medium text-white mb-2">Lic. Rosales Vanina del Valle</h3>
                    <p class="text-xs text-[#005eb8] uppercase tracking-widest font-bold">Jefa de Dpto. de Trabajo Social</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="mailto:trabajosocial.unsl@gmail.com" class="inline-block bg-white text-slate-900 px-10 py-4 text-sm font-bold uppercase tracking-widest hover:bg-slate-100  transition-all duration-300">
                        Enviar Consulta
                    </a>
                    <a href="tel:02664520300" class="inline-block border border-slate-600 text-white px-10 py-4 text-sm font-bold uppercase tracking-widest hover:bg-slate-800 transition-all duration-300">
                        Interno 8132
                    </a>
                </div>

            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>