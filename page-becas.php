<?php

/**
 * Template Name: Departamento de Becas
 */
get_header();
?>

<main class="bg-white font-sans">

    <?php while (have_posts()) : the_post(); ?>

        <section class="bg-slate-900 py-32 border-b border-slate-800 text-center">
            <div class="container mx-auto px-6 max-w-4xl relative z-10">
                <nav class="flex justify-center items-center gap-3 text-[10px] font-bold  uppercase text-slate-400 mb-8">
                    <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors">Inicio</a>
                    <span>/</span>
                    <span class="text-[#005eb8]">Departamento de Becas</span>
                </nav>

                <h1 class="text-4xl md:text-6xl font-light text-white leading-tight mb-8 tracking-tight">
                    Becas y <strong class="font-semibold">beneficios</strong>
                </h1>

                <p class="text-xl text-slate-400 font-light leading-relaxed max-w-2xl mx-auto">
                    Gestionamos programas de apoyo económico para garantizar la igualdad de oportunidades y la permanencia en tus estudios universitarios.
                </p>
            </div>
        </section>

        <section class="py-24 bg-white">
            <div class="container mx-auto px-6 max-w-7xl">
                <div class="grid md:grid-cols-[1.5fr_1fr] gap-16 items-start">

                    <div>
                        <h2 class="text-3xl font-light text-slate-900 tracking-tight mb-8">
                            Gestión y <strong class="font-semibold">acompañamiento</strong>
                        </h2>

                        <p class="text-lg text-slate-600 font-light leading-relaxed mb-12">
                            Actuamos en los tres Centros Universitarios (San Luis, Villa Mercedes y Villa de Merlo), realizando el seguimiento administrativo y académico de los beneficiarios durante todo el año.
                        </p>

                        <div class="grid sm:grid-cols-2 gap-x-12 gap-y-10">
                            <div class="border-t border-slate-200 pt-5">
                                <h3 class="text-xs uppercase  font-bold text-slate-900 mb-2">Convocatorias</h3>
                                <p class="text-slate-500 font-light text-sm">Gestión anual de inscripciones e información para postulantes.</p>
                            </div>
                            <div class="border-t border-slate-200 pt-5">
                                <h3 class="text-xs uppercase  font-bold text-slate-900 mb-2">Adjudicación</h3>
                                <p class="text-slate-500 font-light text-sm">Proceso transparente de preselección y otorgamiento.</p>
                            </div>
                            <div class="border-t border-slate-200 pt-5">
                                <h3 class="text-xs uppercase  font-bold text-slate-900 mb-2">Control académico</h3>
                                <p class="text-slate-500 font-light text-sm">Seguimiento continuo del rendimiento para mantener beneficios.</p>
                            </div>
                            <div class="border-t border-slate-200 pt-5">
                                <h3 class="text-xs uppercase  font-bold text-slate-900 mb-2">Pagos</h3>
                                <p class="text-slate-500 font-light text-sm">Administración y gestión mensual de los depósitos.</p>
                            </div>
                        </div>
                    </div>

                    <div class="md:pl-12 md:border-l border-slate-200 sticky top-24">
                        <h3 class="text-xs font-bold text-slate-400 uppercase  mb-6">Contacto</h3>
                        <div class="space-y-6">
                            <div>
                                <span class="block text-[10px] uppercase  text-slate-400 mb-1">Correo Electrónico</span>
                                <a href="mailto:becasunsl@gmail.com" class="text-lg text-slate-900 hover:text-[#005eb8] transition-colors">becasunsl@gmail.com</a>
                            </div>
                            <div>
                                <span class="block text-[10px] uppercase  text-slate-400 mb-1">Teléfono Directo</span>
                                <a href="tel:02664422818" class="text-lg text-slate-900 hover:text-[#005eb8] transition-colors">0266-4422818 <span class="text-sm text-slate-500">int. 8134</span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-24 bg-slate-50 border-y border-slate-200">
            <div class="container mx-auto px-6 max-w-7xl">

                <div class="mb-16 md:flex justify-between items-end">
                    <div class="max-w-2xl">
                        <h2 class="text-3xl font-light text-slate-900 tracking-tight mb-4">
                            Nuestra oferta de <strong class="font-semibold">becas</strong>
                        </h2>
                        <p class="text-lg text-slate-500 font-light">Disponemos de 9 tipos de beneficios diseñados para acompañar las distintas realidades de nuestra comunidad estudiantil.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-16">
                    <?php

                    $becas = [
                        [
                            'titulo' => 'Ayuda Económica',
                            'subtitulo' => 'Monto mensual para gastos',
                            'desc' => 'Monto de dinero depositado mensualmente para gastos relacionados a la actividad estudiantil (apuntes, conectividad, librería).',
                            'detalles' => ['100% Gratuita', 'Depósito bancario'],
                            'video' => get_template_directory_uri() . '/assets/videos/ayuda-economica.mp4'
                        ],
                        [
                            'titulo' => 'Comedor Universitario',
                            'subtitulo' => 'Alimentación nutricional',
                            'desc' => 'Consiste en 24 viandas mensuales del Comedor universitario sin costo alguno. Cobertura de marzo a diciembre.',
                            'detalles' => ['Ingresantes y avanzados', 'Marzo a diciembre'],
                            'video' => get_template_directory_uri() . '/assets/videos/comedor.mp4'
                        ],
                        [
                            'titulo' => 'Transporte',
                            'subtitulo' => 'Traslado interurbano',
                            'desc' => 'Monto mensual durante 10 meses para estudiantes con domicilio en localidades aledañas que deban viajar para cursar.',
                            'detalles' => ['Cobertura 10 meses', 'Req: Localidad aledaña'],
                            'video' => get_template_directory_uri() . '/assets/videos/transporte.mp4'
                        ],
                        [
                            'titulo' => 'Cuidados Infantiles',
                            'subtitulo' => 'Apoyo familiar',
                            'desc' => 'Monto mensual (10 meses) para estudiantes con hijos/as menores de 4 años (o hasta 18 si poseen discapacidad).',
                            'detalles' => ['Hijos/as < 4 años', 'Ingresantes y avanzados'],
                            'video' => get_template_directory_uri() . '/assets/videos/cuidados-infantiles.mp4'
                        ],
                        [
                            'titulo' => 'Contraprestación',
                            'subtitulo' => 'Servicios',
                            'desc' => 'Para estudiantes que realicen tareas de apoyo (gremiales, sociales, deportivas) en la Universidad.',
                            'detalles' => ['Máx. 10 horas/semana', 'Requiere 1º año cursado'],
                            'video' => get_template_directory_uri() . '/assets/videos/contraprestacion.mp4'
                        ],
                        [
                            'titulo' => 'Beca Integral',
                            'subtitulo' => 'Doble monto',
                            'desc' => 'Otorga el doble del monto de ayuda económica. Requiere haber rendido el 70% de las materias del plan de estudios del año anterior.',
                            'detalles' => ['A partir de 2º año', '70% materias aprobadas'],
                            'video' => get_template_directory_uri() . '/assets/videos/integral.mp4'
                        ],
                        [
                            'titulo' => 'Beca Excepcional',
                            'subtitulo' => 'Situaciones urgentes',
                            'desc' => 'Para casos de cambio brusco en la situación socio-económica. Se otorga por única vez en toda la carrera mediante nota formal.',
                            'detalles' => ['Por única vez', 'Solicitud por nota'],
                            'video' => get_template_directory_uri() . '/assets/videos/excepcional.mp4'
                        ],
                        [
                            'titulo' => 'Beca CREER',
                            'subtitulo' => 'Mérito Académico',
                            'desc' => 'Para estudiantes de nivel medio con promedio superior a 8 en los dos últimos años, inscriptos en carreras prioritarias.',
                            'detalles' => ['Promedio > 8', 'Carreras prioritarias'],
                            'video' => null
                        ]
                    ];

                    foreach ($becas as $index => $beca) : ?>
                        <article class="flex flex-col h-full border-t border-slate-200 pt-6 group">

                            <span class="text-[10px] font-bold text-[#005eb8] uppercase  mb-2 block">
                                <?php echo $beca['subtitulo']; ?>
                            </span>

                            <h3 class="text-xl font-medium text-slate-900 mb-4">
                                <?php echo $beca['titulo']; ?>
                            </h3>

                            <p class="text-slate-600 text-sm font-light leading-relaxed mb-6 flex-1">
                                <?php echo $beca['desc']; ?>
                            </p>

                            <div class="mt-auto">
                                <div class="flex flex-wrap gap-x-4 gap-y-2 mb-6">
                                    <?php foreach ($beca['detalles'] as $detalle): ?>
                                        <span class="text-xs text-slate-500 font-medium bg-slate-100 px-2 py-1">
                                            <?php echo $detalle; ?>
                                        </span>
                                    <?php endforeach; ?>
                                </div>

                                <?php if ($beca['video']) : ?>
                                    <button
                                        data-video="<?php echo esc_url($beca['video']); ?>"
                                        data-titulo="<?php echo esc_attr($beca['titulo']); ?>"
                                        class="btn-ver-video inline-flex items-center gap-2 text-xs font-bold uppercase  text-slate-900 hover:text-[#005eb8] transition-colors border-b border-slate-900 hover:border-[#005eb8] pb-1">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8 5v14l11-7z" />
                                        </svg>
                                        Ver en LSA
                                    </button>
                                <?php endif; ?>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>

        <section class="py-24 bg-white">
            <div class="container mx-auto px-6 max-w-4xl">

                <h2 class="text-3xl font-light text-slate-900 text-center mb-16 tracking-tight">
                    Preguntas <strong class="font-semibold">frecuentes</strong>
                </h2>

                <div class="space-y-4">
                    <details class="group border-b border-slate-200 pb-4 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer text-lg font-medium text-slate-900 hover:text-[#005eb8] transition-colors list-none">

                            ¿Puedo solicitar más de una beca?
                            <span class="transition duration-300 group-open:-rotate-180">
                                <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </span>

                        </summary>
                        <p class="text-slate-500 font-light mt-4 leading-relaxed pr-8">
                            Dependiendo el tipo de beca podés combinar diferentes becas según tu situación. Por ejemplo, podés tener una Beca de Comedor y una de Transporte al mismo tiempo. No se puede combinar Comedor y Ayuda Económica, ya que ambas cubren gastos relacionados a la alimentación.
                        </p>
                    </details>

                    <details class="group border-b border-slate-200 pb-4 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer text-lg font-medium text-slate-900 hover:text-[#005eb8] transition-colors list-none">
                            ¿Cuándo abren las convocatorias?
                            <span class="transition duration-300 group-open:-rotate-180">
                                <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-slate-500 font-light mt-4 leading-relaxed pr-8">
                            Las convocatorias se abren generalmente al inicio del ciclo lectivo. Te recomendamos estar atento a las comunicaciones oficiales de la universidad y a esta misma página.
                        </p>
                    </details>

                    <details class="group border-b border-slate-200 pb-4 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer text-lg font-medium text-slate-900 hover:text-[#005eb8] transition-colors list-none">
                            ¿Los ingresantes pueden solicitar becas?
                            <span class="transition duration-300 group-open:-rotate-180">
                                <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-slate-500 font-light mt-4 leading-relaxed pr-8">
                            ¡Sí! La mayoría de las becas (Ayuda Económica, Comedor, Transporte, Cuidados Infantiles) están disponibles tanto para ingresantes como para estudiantes que ya estén cursando carreras de grado.
                        </p>
                    </details>
                </div>

            </div>
        </section>

        <?php

        saebu_noticias_departamento(array(
            'slug'        => 'becas',
            'nombre'      => 'Becas',
            'color'       => 'blue',
            'descripcion' => 'Últimos comunicados, fechas de cobro y convocatorias activas.',
            'posts_count' => 3,
            'icono'       => ''
        ));
        ?>

        <section class="bg-slate-900 py-24 text-white text-center border-t border-slate-800">
            <div class="container mx-auto px-6 max-w-3xl">

                <h2 class="text-3xl font-light mb-6 tracking-tight">¿Dudas sobre tu postulación?</h2>
                <p class="text-slate-400 font-light text-lg mb-12">
                    Comunicate con nuestra jefatura para resolver casos particulares o recibir orientación sobre qué beca se adapta a tu situación.
                </p>

                <div class="mb-12 border-t border-slate-700 pt-8 inline-block">
                    <h3 class="text-lg font-medium text-white mb-1">Sr. Daniel Rúa</h3>
                    <p class="text-xs text-[#005eb8] uppercase  font-bold">Jefe de Departamento de Becas</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="mailto:becasunsl@gmail.com" class="inline-block bg-white text-slate-900 px-10 py-4 text-sm font-bold uppercase  hover:bg-slate-100  transition-all duration-300">
                        Enviar Consulta
                    </a>
                    <a href="tel:2664927534" class="inline-block border border-slate-600 text-white px-10 py-4 text-sm font-bold uppercase  hover:bg-slate-800 transition-all duration-300">
                        266492-7534
                    </a>
                </div>

            </div>
        </section>

    <?php endwhile; ?>

    <div id="video-modal" class="fixed inset-0 bg-slate-900/90 backdrop-blur-sm z-[10000] hidden items-center justify-center p-4">
        <div class="relative w-full max-w-5xl bg-black rounded overflow-hidden shadow-2xl">

            <div class="absolute top-0 left-0 w-full flex items-center justify-between p-4 bg-gradient-to-b from-black/80 to-transparent z-10">
                <h3 id="modal-titulo" class="text-lg font-medium text-white"></h3>
                <button id="cerrar-modal" class="p-2 text-white hover:text-red-400 transition-colors" aria-label="Cerrar video">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <div class="relative aspect-video w-full bg-black">
                <video
                    id="video-player"
                    class="w-full h-full"
                    controls
                    preload="metadata"
                    aria-label="Video explicativo de la beca en LSA">
                    <source src="" type="video/mp4">
                    Tu navegador no soporta la reproducción de videos.
                </video>
            </div>

            <div class="p-4 bg-slate-900">
                <p class="text-xs text-slate-400 uppercase  text-center">
                    Interpretación oficial en Lengua de Señas Argentina (LSA)
                </p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('video-modal');
            const videoPlayer = document.getElementById('video-player');
            const videoSource = videoPlayer.querySelector('source');
            const modalTitulo = document.getElementById('modal-titulo');
            const cerrarModal = document.getElementById('cerrar-modal');
            const botonesVideo = document.querySelectorAll('.btn-ver-video');
            botonesVideo.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const videoUrl = this.getAttribute('data-video');
                    const titulo = this.getAttribute('data-titulo');
                    modalTitulo.textContent = titulo;
                    videoSource.src = videoUrl;
                    videoPlayer.load();
                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                    document.body.style.overflow = 'hidden';
                    videoPlayer.play().catch(err => {
                        console.log('Autoplay bloqueado:', err);
                    });
                });
            });

            function closeModal() {
                videoPlayer.pause();
                videoPlayer.currentTime = 0;
                videoSource.src = '';
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.style.overflow = '';
            }
            cerrarModal.addEventListener('click', closeModal);
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    closeModal();
                }
            });
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                    closeModal();
                }
            });
            window.addEventListener('beforeunload', function() {
                if (!videoPlayer.paused) {
                    videoPlayer.pause();
                }
            });
        });
    </script>
</main>

<?php get_footer(); ?>