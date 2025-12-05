<?php
/**
 * Template Name: Departamento de Becas
 */
get_header();
?>

<main class="bg-gray-50">

    <?php while (have_posts()) : the_post(); ?>

        <section class="relative bg-slate-900 text-white py-20 border-b-4 border-[#005eb8]">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMSIgY3k9IjEiIHI9IjEiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4wNSkiLz48L3N2Zz4=')] opacity-20"></div>
            
            <div class="container mx-auto px-4 relative z-10">
                <div class="max-w-4xl mx-auto text-center">
                    <nav class="flex justify-center items-center gap-2 text-sm text-gray-400 mb-6">
                        <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors">Inicio</a>
                        <span>/</span>
                        <span class="text-white font-medium">Departamento de Becas</span>
                    </nav>

                    <h1 class="text-3xl md:text-5xl font-bold mb-6 leading-tight">
                        Becas y Beneficios
                    </h1>
                    
                    <div class="w-24 h-1 bg-[#416ed2] mx-auto mb-6"></div>

                    <p class="text-xl text-gray-300 max-w-2xl mx-auto font-light leading-relaxed">
                        Gestionamos programas de apoyo económico para garantizar la igualdad de oportunidades y la permanencia en tus estudios universitarios.
                    </p>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white border-b border-gray-200">
            <div class="container mx-auto px-4">
                <div class="grid lg:grid-cols-3 gap-12 max-w-6xl mx-auto">
                    
                    <div class="lg:col-span-2">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-3">
                            <span class="w-2 h-8 bg-[#416ed2] rounded-sm"></span>
                            Gestión de Becas
                        </h2>
                        <p class="text-gray-600 text-lg mb-8">
                            El Departamento de Becas actúa en los tres Centros Universitarios (San Luis, Villa Mercedes y Villa de Merlo), realizando el seguimiento administrativo y académico de los beneficiarios durante todo el año.
                        </p>

                        <div class="grid sm:grid-cols-2 gap-4">
                            <div class="flex gap-4 p-4 border border-gray-100 rounded-lg hover:border-gray-300 transition-colors">
                                <div class="text-[#005eb8]"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg></div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Convocatorias</h4>
                                    <p class="text-sm text-gray-500">Gestión anual de inscripciones.</p>
                                </div>
                            </div>
                            <div class="flex gap-4 p-4 border border-gray-100 rounded-lg hover:border-gray-300 transition-colors">
                                <div class="text-[#005eb8]"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Adjudicación</h4>
                                    <p class="text-sm text-gray-500">Preselección y otorgamiento.</p>
                                </div>
                            </div>
                            <div class="flex gap-4 p-4 border border-gray-100 rounded-lg hover:border-gray-300 transition-colors">
                                <div class="text-[#005eb8]"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg></div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Control Académico</h4>
                                    <p class="text-sm text-gray-500">Seguimiento de rendimiento.</p>
                                </div>
                            </div>
                            <div class="flex gap-4 p-4 border border-gray-100 rounded-lg hover:border-gray-300 transition-colors">
                                <div class="text-[#005eb8]"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Pagos</h4>
                                    <p class="text-sm text-gray-500">Gestión mensual de beneficios.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-1">
                        <div class="bg-slate-50 border border-gray-200 rounded-lg p-6 shadow-sm sticky top-24">
                            <h3 class="text-lg font-bold text-gray-900 mb-4 border-b border-gray-200 pb-2">Contacto</h3>
                            
                            <ul class="space-y-4">
                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 bg-white border border-gray-200 rounded flex items-center justify-center text-[#005eb8] flex-shrink-0">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    </div>
                                    <div>
                                        <span class="block text-xs font-bold text-gray-500 uppercase">Email</span>
                                        <a href="mailto:becasunsl@gmail.com" class="text-[#005eb8] font-semibold hover:underline">becasunsl@gmail.com</a>
                                    </div>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 bg-white border border-gray-200 rounded flex items-center justify-center text-[#005eb8] flex-shrink-0">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    </div>
                                    <div>
                                        <span class="block text-xs font-bold text-gray-500 uppercase">Teléfono</span>
                                        <a href="tel:02664422818" class="text-gray-700 font-medium hover:text-[#005eb8]">0266-4422818 int. 8134</a>
                                    </div>
                                </li>
                            </ul>
                            
                            <div class="mt-6 pt-4 border-t border-gray-200">
                                <a href="mailto:becasunsl@gmail.com" class="block w-full text-center bg-[#416ed2] hover:bg-[#004a99] text-white font-bold py-2 px-4 rounded transition-colors text-sm">
                                    Enviar Consulta
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="max-w-7xl mx-auto">
                    
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Nuestra Oferta de Becas</h2>
                        <div class="w-16 h-1 bg-gray-300 mx-auto mb-4"></div>
                        <p class="text-gray-600 max-w-2xl mx-auto">
                            Disponemos de 9 tipos de beneficios diseñados para acompañar las distintas necesidades de la comunidad estudiantil.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <?php
                        // Array de Becas para mantener el código limpio y consistente
                        $becas = [
                            [
                                'titulo' => 'Ayuda Económica',
                                'subtitulo' => 'Monto mensual para gastos',
                                'icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                                'desc' => 'Monto de dinero depositado mensualmente para gastos relacionados a la actividad estudiantil (apuntes, conectividad, librería).',
                                'detalles' => [
                                    '100% Gratuita',
                                    'Depósito bancario'
                                ]
                            ],
                            [
                                'titulo' => 'Comedor Universitario',
                                'subtitulo' => 'Alimentación nutricional',
                                'icon' => 'M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z',
                                'desc' => 'Consiste en 24 viandas mensuales del comedor universitario sin costo alguno. Cobertura de marzo a diciembre.',
                                'detalles' => [
                                    'Para ingresantes y avanzados',
                                    'Marzo a Diciembre'
                                ]
                            ],
                            [
                                'titulo' => 'Transporte',
                                'subtitulo' => 'Traslado interurbano',
                                'icon' => 'M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4',
                                'desc' => 'Monto mensual durante 10 meses para estudiantes con domicilio en localidades aledañas que deban viajar para cursar.',
                                'detalles' => [
                                    'Cobertura 10 meses',
                                    'Req: Localidad aledaña'
                                ]
                            ],
                            [
                                'titulo' => 'Cuidados Infantiles',
                                'subtitulo' => 'Apoyo familiar',
                                'icon' => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z',
                                'desc' => 'Monto mensual (10 meses) para estudiantes con hijos/as menores de 4 años (o hasta 18 si poseen discapacidad).',
                                'detalles' => [
                                    'Hijos/as < 4 años',
                                    'Para ingresantes y avanzados'
                                ]
                            ],
                            [
                                'titulo' => 'Contraprestación',
                                'subtitulo' => 'Servicios',
                                'icon' => 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                                'desc' => 'Para estudiantes que realicen tareas de apoyo (gremiales, sociales, deportivas) en la Universidad. Máximo 10hs semanales.',
                                'detalles' => [
                                    'Máx. 10 horas semanales',
                                    'Requiere 1º año cursado'
                                ]
                            ],
                            [
                                'titulo' => 'Residencia',
                                'subtitulo' => 'Alojamiento',
                                'icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6',
                                'desc' => 'Alojamiento para estudiantes que vivan a más de 30 km de la sede universitaria. Disponible en San Luis y Villa Mercedes.',
                                'detalles' => [
                                    'Distancia > 30km',
                                    'Toda la carrera'
                                ]
                            ],
                            [
                                'titulo' => 'Beca Integral',
                                'subtitulo' => 'Doble monto',
                                'icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z',
                                'desc' => 'Otorga el doble del monto de ayuda económica. Requiere haber rendido el 70% de las materias del plan de estudios del año anterior.',
                                'detalles' => [
                                    'A partir de 2º año',
                                    '70% materias aprobadas'
                                ]
                            ],
                            [
                                'titulo' => 'Beca Excepcional',
                                'subtitulo' => 'Situaciones urgentes',
                                'icon' => 'M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z',
                                'desc' => 'Para casos de cambio brusco en la situación socio-económica. Se otorga por única vez en toda la carrera mediante nota formal.',
                                'detalles' => [
                                    'Por única vez',
                                    'Solicitud por nota'
                                ]
                            ],
                            [
                                'titulo' => 'Beca CREER',
                                'subtitulo' => 'Mérito Académico',
                                'icon' => 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z',
                                'desc' => 'Para estudiantes de nivel medio con promedio superior a 8 en los dos últimos años, inscriptos en carreras prioritarias.',
                                'detalles' => [
                                    'Promedio > 8',
                                    'Carreras Prioritarias'
                                ]
                            ]
                        ];

                        foreach ($becas as $beca) : ?>
                            <article class="bg-white border border-gray-200 rounded-md p-6 hover:shadow-lg hover:border-[#005eb8] transition-all duration-300 group flex flex-col h-full">
                                <div class="flex items-start gap-4 mb-4">
                                    <div class="w-12 h-12 bg-blue-50 rounded-md flex items-center justify-center flex-shrink-0 group-hover:bg-[#416ed2] transition-colors duration-300">
                                        <svg class="w-6 h-6 text-[#005eb8] group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo $beca['icon']; ?>"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-gray-900 text-lg leading-tight group-hover:text-[#005eb8] transition-colors"><?php echo $beca['titulo']; ?></h3>
                                        <span class="text-xs font-semibold text-gray-500 uppercase tracking-wide"><?php echo $beca['subtitulo']; ?></span>
                                    </div>
                                </div>
                                
                                <p class="text-gray-600 text-sm leading-relaxed mb-6 flex-1">
                                    <?php echo $beca['desc']; ?>
                                </p>

                                <div class="border-t border-gray-100 pt-4 mt-auto">
                                    <ul class="space-y-2 mb-4">
                                        <?php foreach($beca['detalles'] as $detalle): ?>
                                            <li class="flex items-center text-xs text-gray-500 font-medium">
                                                <svg class="w-4 h-4 text-[#005eb8] mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                                <?php echo $detalle; ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    
                                    <button class="w-full py-2 bg-gray-50 text-gray-600 text-xs font-bold rounded hover:bg-gray-100 transition-colors flex items-center justify-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        Ver Video Explicativo
                                    </button>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>

                    <div class="mt-8 bg-blue-50 border border-blue-100 rounded-md p-4 flex items-center justify-center gap-3 text-[#005eb8] text-sm font-medium">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path></svg>
                        Toda la información está disponible en Lengua de Señas Argentina.
                    </div>

                </div>
            </div>
        </section>

        <section class="py-16 bg-white border-t border-gray-200">
            <div class="container mx-auto px-4 max-w-4xl">
                <h2 class="text-2xl font-bold text-center text-gray-900 mb-10">Preguntas Frecuentes</h2>
                
                <div class="space-y-2">
                    <details class="group bg-white border border-gray-200 rounded-md">
                        <summary class="flex items-center justify-between p-4 cursor-pointer font-medium text-gray-800 hover:bg-gray-50 transition-colors">
                            ¿Puedo solicitar más de una beca?
                            <span class="text-gray-400 group-open:rotate-180 transition-transform"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></span>
                        </summary>
                        <div class="p-4 pt-0 text-gray-600 text-sm leading-relaxed border-t border-transparent group-open:border-gray-100 mt-2">
                            Sí, podés combinar diferentes becas según tu situación. Por ejemplo, podés tener una Beca de Ayuda Económica y una de Comedor al mismo tiempo, siempre que cumplas con los requisitos de cada una.
                        </div>
                    </details>

                    <details class="group bg-white border border-gray-200 rounded-md">
                        <summary class="flex items-center justify-between p-4 cursor-pointer font-medium text-gray-800 hover:bg-gray-50 transition-colors">
                            ¿Cuándo abren las convocatorias?
                            <span class="text-gray-400 group-open:rotate-180 transition-transform"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></span>
                        </summary>
                        <div class="p-4 pt-0 text-gray-600 text-sm leading-relaxed border-t border-transparent group-open:border-gray-100 mt-2">
                            Las convocatorias se abren generalmente al inicio del ciclo lectivo. Te recomendamos estar atento a las comunicaciones oficiales de la universidad.
                        </div>
                    </details>

                    <details class="group bg-white border border-gray-200 rounded-md">
                        <summary class="flex items-center justify-between p-4 cursor-pointer font-medium text-gray-800 hover:bg-gray-50 transition-colors">
                            ¿Los ingresantes pueden solicitar becas?
                            <span class="text-gray-400 group-open:rotate-180 transition-transform"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></span>
                        </summary>
                        <div class="p-4 pt-0 text-gray-600 text-sm leading-relaxed border-t border-transparent group-open:border-gray-100 mt-2">
                            ¡Sí! La mayoría de las becas (Ayuda Económica, Comedor, Transporte, Cuidados Infantiles) están disponibles tanto para ingresantes como para estudiantes que ya estén cursando.
                        </div>
                    </details>
                </div>
            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php
get_footer();
?>