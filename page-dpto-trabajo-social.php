<?php

/**
 * Template Name: Becas y Residencia universitaria
 */
get_header();
?>

<main class="bg-gray-50">

    <?php while (have_posts()) : the_post(); ?>

        <section class="relative bg-slate-900 text-white py-20 border-b-4 border-[#005eb8]">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMSIgY3k9IjEiIHI9IjEiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4wNSkiLz48L3N2Zz4=')] opacity-20"></div>



            <div class="container mx-auto px-4 relative z-10">
                <div class="max-w-4xl mx-auto text-center">
                    <nav class="flex justify-center items-center gap-2 text-sm text-gray-400 mb-6 font-sans uppercase tracking-widest text-xs">
                        <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors font-bold">INICIO</a>
                        <span class="text-gray-600">/</span>
                        <?php
                        // Lógica para detectar padres (Jerarquía)
                        global $post;
                        if (is_page() && $post->post_parent) {
                            // Obtener ancestros (padres, abuelos...)
                            $ancestors = get_post_ancestors($post->ID);
                            // Invertimos el orden para que vaya de Padre -> Hijo
                            $ancestors = array_reverse($ancestors);
                            foreach ($ancestors as $ancestor_id) {
                        ?>
                                <a href="<?php echo get_permalink($ancestor_id); ?>" class="hover:text-white transition-colors font-bold">
                                    <?php echo get_the_title($ancestor_id); ?>
                                </a>
                                <span class="text-gray-600">/</span>
                        <?php
                            }
                        }
                        ?>
                        <span class="text-white font-bold">
                            <?php the_title(); ?>
                        </span>
                    </nav>
                    <h1 class="text-3xl md:text-5xl font-bold mb-6 leading-tight  tracking-tight text-white">
                        <?php the_title(); ?>
                    </h1>
                    <div class="w-24 h-1 bg-[#416ed2] mx-auto mb-6"></div>
                    <div class="text-xl text-gray-300 max-w-2xl mx-auto font-light leading-relaxed font-sans">
                        <?php
                        if (has_excerpt()) {
                            echo get_the_excerpt();
                        } else {
                            // Fallback opcional si no cargaron extracto
                            echo 'Información institucional y servicios de ' . get_the_title();
                        }
                        ?>
                    </div>
                </div>
            </div>

        </section>

        <section class="py-16 bg-white border-b border-gray-200">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <div class="text-center mb-12">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Circuito de Gestión de Becas</h2>
                        <p class="text-gray-600 max-w-3xl mx-auto">
                            El proceso integral desde la solicitud hasta la adjudicación del beneficio.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-4 gap-6">
                        <?php
                        $pasos = [
                            ['num' => '01', 'titulo' => 'Asesoramiento', 'desc' => 'Información sobre becas UNSL y Programa Nacional Progresar en la Promoción de Carreras.'],
                            ['num' => '02', 'titulo' => 'Convocatoria', 'desc' => 'Apertura de inscripciones mediante el sistema informático, coordinado con el Dpto. de Becas.'],
                            ['num' => '03', 'titulo' => 'Entrevistas', 'desc' => 'Evaluación individual de la situación socioeconómica de los estudiantes preseleccionados.'],
                            ['num' => '04', 'titulo' => 'Adjudicación', 'desc' => 'Otorgamiento a través de la Comisión de Becas y Residencias (SAEBU).']
                        ];

                        foreach ($pasos as $paso) : ?>
                            <div class="relative p-6 border border-gray-200 rounded-lg hover:border-[#005eb8] transition-all duration-300 group">
                                <div class="text-4xl font-bold text-gray-800 mb-4 group-hover:text-[#005eb8] transition-colors">
                                    <?php echo $paso['num']; ?>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 mb-2"><?php echo $paso['titulo']; ?></h3>
                                <p class="text-sm text-gray-600"><?php echo $paso['desc']; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">

                    <div class="grid lg:grid-cols-2 gap-12 items-start">
                        <div>
                            <div class="flex items-center gap-3 mb-6">
                                <div class="p-3 bg-[#416ed2] rounded text-white">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                    </svg>
                                </div>
                                <h2 class="text-2xl font-bold text-gray-900">Residencia universitaria</h2>
                            </div>

                            <div class="prose prose-gray text-gray-600 mb-8">
                                <p>
                                    Nuestro objetivo es atender las necesidades habitacionales y de convivencia de los estudiantes, coordinando con las autoridades las demandas de infraestructura para garantizar una estadía adecuada.
                                </p>
                                <p class="mt-4">
                                    <strong>Flexibilización del Reglamento:</strong> Desde 2012 implementamos Acuerdos Académicos para estudiantes residentes, con el fin de evitar la deserción universitaria.
                                </p>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-white p-4 rounded border border-gray-200">
                                    <span class="block text-3xl font-bold text-[#005eb8] mb-1">40</span>
                                    <span class="text-sm text-gray-500 uppercase tracking-wide font-semibold">Módulos Habitacionales</span>
                                </div>
                                <div class="bg-white p-4 rounded border border-gray-200">
                                    <span class="block text-3xl font-bold text-[#005eb8] mb-1">San Luis</span>
                                    <span class="text-sm text-gray-500 uppercase tracking-wide font-semibold">Sede Capital</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border-l-4 border-[#005eb8] shadow-sm p-8 rounded-r-lg">
                            <h3 class="text-xl font-bold text-gray-900 mb-6">Información de la Sede</h3>

                            <ul class="space-y-6">
                                <li class="flex gap-4">
                                    <svg class="w-6 h-6 text-gray-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <div>
                                        <span class="block font-bold text-gray-900">Dirección</span>
                                        <span class="text-gray-600">Calle Justo Daract Nº 1661, San Luis Capital.</span>
                                    </div>
                                </li>
                                <li class="flex gap-4">
                                    <svg class="w-6 h-6 text-gray-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h1"></path>
                                    </svg>
                                    <div>
                                        <span class="block font-bold text-gray-900">Distribución</span>
                                        <span class="text-gray-600">Sectores divididos para varones y mujeres.</span>
                                    </div>
                                </li>
                                <li class="flex gap-4">
                                    <svg class="w-6 h-6 text-gray-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    <div>
                                        <span class="block font-bold text-gray-900">Población</span>
                                        <span class="text-gray-600">Prioridad a becarios SAEBU y Progresar.</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-16 bg-white border-t border-gray-200">
            <div class="container mx-auto px-4">
                <div class="max-w-5xl mx-auto">

                    <div class="mb-10 flex items-center justify-between border-b border-gray-200 pb-4">
                        <h2 class="text-2xl font-bold text-gray-900">Programa Nacional de Becas Progresar</h2>
                        <a href="https://www.argentina.gob.ar/educacion/progresar" target="_blank" class="text-sm text-[#005eb8] font-bold hover:underline">Sitio oficial &rarr;</a>
                    </div>

                    <div class="bg-amber-50 border-l-4 border-amber-500 p-4 mb-8">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-amber-800">
                                    <strong>Importante:</strong> Los formularios de ANSES no tienen validez en el nivel universitario. La inscripción es exclusivamente digital.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8 mb-12">
                        <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                            <h3 class="font-bold text-gray-900 mb-4 uppercase text-sm tracking-wider">Requisitos Generales</h3>
                            <ul class="space-y-3 text-sm text-gray-700">
                                <li class="flex items-start gap-2"><span class="text-[#005eb8] font-bold">•</span> Nacionalidad argentina (nativa/naturalizada) o residencia legal de 5 años.</li>
                                <li class="flex items-start gap-2"><span class="text-[#005eb8] font-bold">•</span> Edad: 18-24 años (ingresantes), hasta 30 años (avanzados).</li>
                                <li class="flex items-start gap-2"><span class="text-[#005eb8] font-bold">•</span> Ingresos grupo familiar: Hasta 3 Salarios Mínimos (SMVM).</li>
                                <li class="flex items-start gap-2"><span class="text-[#005eb8] font-bold">•</span> Condición académica: Estudiante regular o 2 materias aprobadas.</li>
                            </ul>
                        </div>

                        <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                            <h3 class="font-bold text-gray-900 mb-4 uppercase text-sm tracking-wider">Excepciones y Grupos Prioritarios</h3>
                            <ul class="space-y-3 text-sm text-gray-700">
                                <li class="flex items-start gap-2"><span class="text-[#005eb8] font-bold">•</span> <strong>Hogares Monoparentales:</strong> Hasta 35 años (hijos menores de 18).</li>
                                <li class="flex items-start gap-2"><span class="text-[#005eb8] font-bold">•</span> <strong>Sin límite de edad:</strong> Personas Trans, Pueblos Indígenas, Discapacidad, Refugiados.</li>
                                <li class="flex items-start gap-2"><span class="text-[#005eb8] font-bold">•</span> <strong>Enfermería:</strong> Montos diferenciales y requisitos específicos.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-8">
                        <div>
                            <h1 class="font-bold text-gray-900 mb-3 text-sm">Montos Universidad General</h1>
                            <div class="border border-gray-200 rounded-lg overflow-hidden">
                                <table class="w-full text-sm text-left">
                                    <thead class="bg-[#416ed2] text-white">
                                        <tr>
                                            <th class="px-4 py-3">Año</th>
                                            <th class="px-4 py-3 text-right">Estratégica</th>
                                            <th class="px-4 py-3 text-right">No Estratégica</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">
                                        <tr>
                                            <td class="px-4 py-2 font-medium">1° Año</td>
                                            <td class="px-4 py-2 text-right">-</td>
                                            <td class="px-4 py-2 text-right">$3.600</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 font-medium">2° Año</td>
                                            <td class="px-4 py-2 text-right">$4.340</td>
                                            <td class="px-4 py-2 text-right">$3.600</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 font-medium">3° Año</td>
                                            <td class="px-4 py-2 text-right">$5.740</td>
                                            <td class="px-4 py-2 text-right">$3.800</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 font-medium">4° Año</td>
                                            <td class="px-4 py-2 text-right">$7.490</td>
                                            <td class="px-4 py-2 text-right">$3.800</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 font-medium">5° Año</td>
                                            <td class="px-4 py-2 text-right">$9.960</td>
                                            <td class="px-4 py-2 text-right">$4.600</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div>
                            <h1 class="font-bold text-gray-900 mb-3 text-sm">Montos Enfermería</h1>
                            <div class="border border-gray-200 rounded-lg overflow-hidden">
                                <table class="w-full text-sm text-left">
                                    <thead class="bg-gray-800 text-white">
                                        <tr>
                                            <th class="px-4 py-3">Año de Cursada</th>
                                            <th class="px-4 py-3 text-right">Monto Mensual</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">
                                        <tr>
                                            <td class="px-4 py-2 font-medium">1° Año</td>
                                            <td class="px-4 py-2 text-right">$5.000</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 font-medium">2° Año</td>
                                            <td class="px-4 py-2 text-right">$6.000</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 font-medium">3° Año</td>
                                            <td class="px-4 py-2 text-right">$7.000</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 font-medium">4° Año</td>
                                            <td class="px-4 py-2 text-right">$8.000</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 font-medium">5° Año</td>
                                            <td class="px-4 py-2 text-right">$9.700</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-16 bg-gray-50 border-t border-gray-200">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-2xl font-bold text-gray-900 mb-8 border-l-4 border-[#005eb8] pl-3">
                        Área de Discapacidad e Inclusión
                    </h2>

                    <div class="grid md:grid-cols-2 gap-8">
                        <div>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                Trabajamos desde 2008 para lograr la plena integración de alumnos en situación de discapacidad en la vida universitaria, proporcionando los recursos necesarios para su desarrollo académico.
                            </p>
                            <h1 class="font-bold text-base text-gray-900 mb-4">Nuestros Servicios:</h1>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <?php
                                $recursos_discapacidad = [
                                    'Recursos Materiales' => 'Gestión de elementos necesarios para el cursado.',
                                    'Recursos Humanos' => 'Acompañamiento profesional personalizado.',
                                    'Recursos Tecnológicos' => 'Herramientas de accesibilidad digital.',
                                    'Recursos Económicos' => 'Gestión de becas y ayudas financieras.'
                                ];
                                foreach ($recursos_discapacidad as $titulo => $desc):
                                ?>
                                    <div class="bg-white p-4 border border-gray-200 rounded-md">
                                        <h1 class="text-[#005eb8] font-bold text-sm mb-1"><?php echo $titulo; ?></h1>
                                        <p class="text-xs text-gray-500"><?php echo $desc; ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="bg-white p-6 border border-gray-200 rounded-lg shadow-sm">
                            <h1 class="font-bold text-base text-gray-900 mb-4">Promoción y Difusión</h1>
                            <p class="text-sm text-gray-600 mb-4">
                                Realizamos talleres informativos en cursos de ingreso y promoción de carreras para acercar los beneficios al estudiante de manera temprana.
                            </p>
                            <div class="bg-blue-50 p-4 rounded text-sm text-[#005eb8]">
                                <strong>Objetivo:</strong> Lograr que el estudiante conozca y utilice la amplia gama de beneficios a su disposición desde el primer día.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-[#416ed2] text-white" id="contacto">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-2xl font-bold mb-4">¿Necesitás asesoramiento?</h2>
                <p class="text-white mb-8 max-w-2xl mx-auto">
                    El equipo de Trabajo Social está disponible para guiarte en tus trámites.
                </p>
                <div class="flex justify-center gap-4">
                    <a href="<?php echo home_url('/contacto'); ?>" class="inline-block bg-white text-[#005eb8] font-bold py-3 px-8 rounded hover:bg-gray-100 transition-colors">
                        Contactar área
                    </a>
                </div>
            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php
get_footer();
?>