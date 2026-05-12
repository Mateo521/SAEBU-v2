<?php

/**
 * Template Name: Centro de Salud estudiantil
 */
get_header();
?>

<main class="bg-white font-sans">

    <?php while (have_posts()) : the_post(); ?>

        <section class="bg-slate-900 py-32 border-b border-slate-800 text-center">
            <div class="container mx-auto px-6 max-w-4xl relative z-10">

                <nav class="flex justify-center items-center gap-3 text-[10px] font-bold  uppercase text-slate-500 mb-8">
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
                    <span class="text-[#005eb8]">CeSEU</span>
                </nav>

                <h1 class="text-4xl md:text-6xl font-light text-white leading-tight mb-8 tracking-tight">
                    Centro de Salud <br><strong class="font-semibold">Estudiantil Universitaria</strong>
                </h1>

                <p class="text-xl text-slate-400 font-light leading-relaxed max-w-2xl mx-auto">
                    <?php
                    if (has_excerpt()) {
                        echo get_the_excerpt();
                    } else {
                        echo 'Brindamos atención primaria, prevención y cuidado integral para asegurar el bienestar de nuestra comunidad estudiantil.';
                    }
                    ?>
                </p>
            </div>
        </section>

        <section class="py-24 bg-white">
            <div class="container mx-auto px-6 max-w-7xl">

                <div class="text-center mb-16">
                    <h2 class="text-3xl font-light text-slate-900 tracking-tight mb-4">
                        Nuestras <strong class="font-semibold">Sedes</strong>
                    </h2>
                    <p class="text-lg text-slate-500 font-light">Atención presencial en San Luis y Villa Mercedes.</p>
                </div>

                <div class="grid md:grid-cols-2 gap-12">

                    <div class="border-t border-slate-200 pt-8">
                        <span class="text-[10px] font-bold text-[#005eb8] uppercase  mb-3 block">Sede Capital</span>
                        <h3 class="text-2xl font-medium text-slate-900 mb-6">San Luis</h3>

                        <div class="space-y-4">
                            <div>
                                <span class="block text-xs font-bold text-slate-400 uppercase  mb-1">Dirección</span>
                                <p class="text-sm text-slate-700 font-light">Rivadavia 1359 (entre Av. España y Tomás Jofré)</p>
                            </div>
                            <div>
                                <span class="block text-xs font-bold text-slate-400 uppercase  mb-1">Horario de Atención</span>
                                <p class="text-sm text-slate-700 font-light">Lunes a viernes de 8:00 a 13:00 hs</p>
                            </div>
                            <div>
                                <span class="block text-xs font-bold text-slate-400 uppercase  mb-1">Contacto</span>
                                <a href="tel:02664520300" class="text-sm text-slate-700 font-medium hover:text-[#005eb8] transition-colors">(0266) 4520300 Int. 8820</a><br>
                                <a href="mailto:ceseu.saebu.unsl@gmail.com" class="text-sm text-slate-500 font-light hover:text-[#005eb8] transition-colors">ceseu.saebu.unsl@gmail.com</a>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-slate-200 pt-8">
                        <span class="text-[10px] font-bold text-[#005eb8] uppercase  mb-3 block">Sede Regional</span>
                        <h3 class="text-2xl font-medium text-slate-900 mb-6">Villa Mercedes</h3>

                        <div class="space-y-4">
                            <div>
                                <span class="block text-xs font-bold text-slate-400 uppercase  mb-1">Dirección</span>
                                <p class="text-sm text-slate-700 font-light">Buenos Aires 122 (Gral. Paz y San Martin)</p>
                            </div>
                            <div>
                                <span class="block text-xs font-bold text-slate-400 uppercase  mb-1">Horario de Atención</span>
                                <p class="text-sm text-slate-700 font-light">Lunes a viernes de 8:00 a 13:00 hs</p>
                            </div>
                            <div>
                                <span class="block text-xs font-bold text-slate-400 uppercase  mb-1">Contacto</span>
                                <a href="tel:2657420565" class="text-sm text-slate-700 font-medium hover:text-[#005eb8] transition-colors">2657 420565</a><br>
                                <a href="mailto:cuseunsl@gmail.com" class="text-sm text-slate-500 font-light hover:text-[#005eb8] transition-colors">cuseunsl@gmail.com</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="mt-16 pt-8 border-t border-slate-100 flex flex-wrap justify-center gap-x-12 gap-y-4 text-sm font-light text-slate-500">
                    <span class="uppercase  text-[10px] font-bold text-slate-400 self-center">Equipo Administrativo:</span>
                    <span><strong>Natalia Villegas</strong> (Adm)</span>
                    <span><strong>Juana Sarmiento</strong> (Adm)</span>
                    <span><strong>Patricia Agüero</strong> (Servicios Grales)</span>
                </div>
            </div>
        </section>

        <section class="py-24 bg-slate-50 border-y border-slate-200">
            <div class="container mx-auto px-6 max-w-5xl">

                <div class="text-center mb-16">
                    <span class="text-[10px] font-bold text-[#005eb8] uppercase  mb-4 block">Ingresantes</span>
                    <h2 class="text-3xl font-light text-slate-900 tracking-tight">
                        Certificado de <strong class="font-semibold">Salud Estudiantil</strong>
                    </h2>
                </div>

                <div class="grid md:grid-cols-3 gap-12 relative">

                    <div class="relative z-10">
                         
                        <h3 class="text-lg font-medium text-slate-900 mb-3">Análisis clínicos</h3>
                        <p class="text-sm text-slate-500 font-light leading-relaxed mb-4">
                            Deben realizarse en una entidad pública o privada. <strong>Tienen 4 meses de validez</strong> desde su extracción.
                        </p>
                        <div class="bg-white p-4 border border-slate-200">
                            <ul class="grid grid-cols-2 gap-y-2 text-xs text-slate-700 font-medium">
                                <li>Hemograma</li>
                                <li>Glucemia</li>
                                <li>Colesterol Total</li>
                                <li>Chagas</li>
                                <li>VDRL</li>
                                <li>VSG</li>
                                <li>Grupo / Factor</li>
                                <li>Orina Completa</li>
                            </ul>
                        </div>
                    </div>

                    <div class="relative z-10 md:mt-12">
                        <span class="text-3xl font-light text-slate-300 block mb-4">02</span>
                        <h3 class="text-lg font-medium text-slate-900 mb-3">Registro Digital</h3>
                        <p class="text-sm text-slate-500 font-light leading-relaxed mb-6">
                            Una vez obtenidos todos los resultados del laboratorio, es obligatorio completar el registro en nuestro sistema web.
                        </p>
                        <a href="https://forms.gle/PPMiDUpoN5prNDAA7" target="_blank" class="inline-flex items-center gap-2 text-sm font-bold uppercase  text-[#005eb8] border-b border-[#005eb8] pb-1 hover:text-slate-900 hover:border-slate-900 transition-colors">
                            Completar Formulario
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </a>
                    </div>

                    <div class="relative z-10">
                        <span class="text-3xl font-light text-slate-300 block mb-4">03</span>
                        <h3 class="text-lg font-medium text-slate-900 mb-3">Presentación</h3>
                        <p class="text-sm text-slate-500 font-light leading-relaxed mb-4">
                            Presentarse con el <strong>resultado físico</strong> de los análisis en Sede San Luis (Rivadavia 1359). La atención es por orden de llegada.
                        </p>
                        <ul class="text-xs text-slate-600 font-medium space-y-1">
                            <li><span class="text-slate-400">Lun, Jue y Vie:</span> 7:30 a 13:30 hs.</li>
                            <li><span class="text-slate-400">Martes:</span> 9:00 a 12:00 hs.</li>
                            <li><span class="text-slate-400">Miércoles:</span> 7:30 a 16:30 hs.</li>
                        </ul>
                    </div>

                </div>

            </div>
        </section>

        <section class="py-24 bg-white">
            <div class="container mx-auto px-6 max-w-7xl">

                <div class="mb-16 md:flex justify-between items-end">
                    <div class="max-w-2xl">
                        <h2 class="text-3xl font-light text-slate-900 tracking-tight mb-4">
                            Especialidades <strong class="font-semibold">Médicas</strong>
                        </h2>
                        <p class="text-lg text-slate-500 font-light">Plantel de profesionales y modalidad de atención por área.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-16 gap-y-10">
                    <?php
                    $especialidades = [
                        [
                            'nombre' => 'Medicina General',
                            'profesionales' => ['Méd. Luis Marsichano', 'Méd. Mariana Adaro Batlle'],
                            'modalidad' => 'Atención por orden de llegada.',
                        ],
                        [
                            'nombre' => 'Psicología',
                            'profesionales' => ['Lic. Sonia Laborda', 'Lic. Marisa Eliana López'],
                            'modalidad' => 'Requiere instancia de admisión previa para asignación de turnos.',
                        ],
                        [
                            'nombre' => 'Kinesiología y Fisiatría',
                            'profesionales' => ['Lic. Matías Lucero Sastre'],
                            'modalidad' => 'Atención con turno previo.',
                        ],
                        [
                            'nombre' => 'Odontología',
                            'profesionales' => ['Od. Ana Cecilia Salonia'],
                            'modalidad' => 'Atención con turno previo.',
                        ],
                        [
                            'nombre' => 'Ginecología',
                            'profesionales' => ['Méd. Martín Olivera'],
                            'modalidad' => 'Se asiste a la sede CeSEU para retirar derivación hacia el consultorio particular del profesional.',
                        ],
                        [
                            'nombre' => 'Nutrición',
                            'profesionales' => ['Lic. María Fernanda Bruno'],
                            'modalidad' => 'Consultar disponibilidad de turnos en administración.',
                        ],
                        [
                            'nombre' => 'Oftalmología',
                            'profesionales' => ['María Cecilia Batistelli'],
                            'modalidad' => 'Consultar disponibilidad de turnos en administración.',
                        ]
                    ];

                    foreach ($especialidades as $esp):
                    ?>
                        <div class="flex flex-col sm:flex-row gap-6 border-b border-slate-100 pb-6">
                            <div class="sm:w-1/3">
                                <h3 class="text-lg font-medium text-slate-900"><?php echo $esp['nombre']; ?></h3>
                            </div>

                            <div class="sm:w-2/3 border-l-2 border-[#005eb8] pl-6">
                                <ul class="text-sm font-medium text-slate-700 mb-3 space-y-1">
                                    <?php foreach ($esp['profesionales'] as $profesional): ?>
                                        <li><?php echo $profesional; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <p class="text-xs text-slate-500 font-light">
                                    <strong class="uppercase  text-[10px] text-slate-400 mr-1">Atención:</strong>
                                    <?php echo $esp['modalidad']; ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>

        <section class="py-16 bg-[#005eb8] text-white">
            <div class="container mx-auto px-6 max-w-5xl flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="md:w-1/3">
                    <h3 class="text-[10px] font-bold uppercase  text-blue-200 mb-2">Programa Nacional</h3>
                    <div class="text-4xl font-light tracking-tight">Plan <strong class="font-semibold">REMEDIAR</strong></div>
                </div>
                <div class="md:w-2/3 md:border-l border-blue-400/30 md:pl-8">
                    <p class="text-blue-50 font-light text-lg leading-relaxed">
                        Entrega gratuita de medicamentos recetados (sujeto a disponibilidad de stock) en ambas sedes durante el horario de atención. Destinado a garantizar el acceso a tratamientos médicos esenciales para nuestros estudiantes.
                    </p>
                </div>
            </div>
        </section>

        <section class="py-24 bg-white border-b border-slate-200">
            <div class="container mx-auto px-6 max-w-7xl">

                <div class="flex items-end justify-between mb-16 border-b border-slate-200 pb-6">
                    <h2 class="text-3xl font-light text-slate-900 tracking-tight">Novedades CeSEU</h2>
                    <a href="<?php echo get_post_type_archive_link('noticia'); ?>" class="text-sm text-[#005eb8] font-medium uppercase  hover:text-slate-900 transition-colors">
                        Ver archivo
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    <?php
                    $args = array(
                        'post_type'      => 'noticia',
                        'posts_per_page' => 3,
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                        'tax_query'      => array(
                            array(
                                'taxonomy' => 'departamento',
                                'field'    => 'slug',
                                'terms'    => 'ceseu',
                            ),
                        ),
                    );
                    $news_query = new WP_Query($args);

                    if ($news_query->have_posts()) :
                        while ($news_query->have_posts()) : $news_query->the_post();
                    ?>
                            <article class="flex flex-col h-full group">
                                <a title="Enlace a <?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>" class="block mb-6 overflow-hidden bg-slate-100 aspect-[4/3]">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover transition-transform duration-700 group- filter grayscale-[20%] group-hover:grayscale-0')); ?>
                                    <?php else : ?>
                                        <div class="w-full h-full flex items-center justify-center text-slate-300 font-light text-sm uppercase ">
                                            Sin Foto
                                        </div>
                                    <?php endif; ?>
                                </a>

                                <div class="flex-1 flex flex-col">
                                    <div class="text-[10px] font-bold text-[#005eb8] uppercase  mb-3">
                                        <?php echo get_the_date('d M Y'); ?>
                                    </div>

                                    <h3 class="text-xl font-medium text-slate-900 leading-tight mb-3">
                                        <a href="<?php the_permalink(); ?>" class="hover:text-[#005eb8] transition-colors">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>

                                    <div class="text-slate-500 text-sm font-light leading-relaxed line-clamp-3 mb-4">
                                        <?php echo wp_trim_words(get_the_excerpt(), 18); ?>
                                    </div>
                                </div>
                            </article>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        ?>
                        <div class="col-span-3 text-center py-16 border border-slate-100 bg-slate-50">
                            <p class="text-slate-400 font-light">No hay comunicados recientes de salud.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="bg-slate-900 py-24 text-white text-center">
            <div class="container mx-auto px-6 max-w-3xl">

                <h2 class="text-3xl font-light mb-6 tracking-tight">¿Consultas Médicas?</h2>
                <p class="text-slate-400 font-light text-lg mb-12">
                    Comunicate con nuestra coordinación o con tu sede más cercana para solicitar turnos o recibir asesoramiento específico.
                </p>

                <div class="mb-12 border-t border-slate-700 pt-8 inline-block">
                    <h3 class="text-xl font-medium text-white mb-2">Esp. María Agustina Romero Vieyra</h3>
                    <p class="text-xs text-[#005eb8] uppercase  font-bold">Coordinadora del CeSEU</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="mailto:ceseu.saebu.unsl@gmail.com" class="inline-block bg-white text-slate-900 px-10 py-4 text-sm font-bold uppercase  hover:bg-slate-100  transition-all duration-300">
                        Enviar Correo
                    </a>
                    <div class="inline-block border border-slate-600 text-white px-10 py-4 text-sm font-bold uppercase  cursor-default">
                        Sede SL: Int. 8820
                    </div>
                </div>

            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>