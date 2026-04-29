<?php

/**
 * Template Name: Educación Física y Deportes
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
                    <span class="text-orange-500"><?php the_title(); ?></span>
                </nav>

                <h1 class="text-4xl md:text-6xl font-light text-white leading-tight mb-8 tracking-tight">
                    Educación Física y <strong class="font-semibold">Deportes</strong>
                </h1>

                <p class="text-xl text-slate-400 font-light leading-relaxed max-w-2xl mx-auto">
                    <?php
                    if (has_excerpt()) {
                        echo get_the_excerpt();
                    } else {
                        echo 'Fomentamos la actividad física, el bienestar integral y el sentido de pertenencia a través de la práctica deportiva universitaria.';
                    }
                    ?>
                </p>
            </div>
        </section>

        <section class="py-24 bg-white">
            <div class="container mx-auto px-6 max-w-7xl">
                <div class="grid lg:grid-cols-[1fr_1fr] gap-16 items-start">

                    <div>
                        <h2 class="text-3xl font-light text-slate-900 tracking-tight mb-8">
                            Deporte para el <strong class="font-semibold">Desarrollo Integral</strong>
                        </h2>

                        <div class="space-y-6 text-lg text-slate-500 font-light leading-relaxed">
                            <p>
                                En la Universidad Nacional de San Luis, entendemos que el deporte es una parte fundamental del desarrollo integral de nuestros estudiantes y de la comunidad universitaria en general.
                            </p>
                            <p>
                                Por ello, ofrecemos un programa de deporte universitario que no solo busca fomentar la actividad física, sino también cultivar valores como el trabajo en equipo, la disciplina y la superación personal.
                            </p>

                            <blockquote class="pl-6 border-l-2 border-orange-500 py-2 my-8 text-slate-700 italic">
                                Diseñado para ser <strong>inclusivo y accesible para todos</strong> los estudiantes, promoviendo un estilo de vida saludable y activo en un ambiente de camaradería.
                            </blockquote>

                            <p>
                                Invitamos a todos a unirse a nuestras actividades y a formar parte del <strong>Club Universitario</strong>. Las competiciones y eventos se organizan regularmente, brindando la oportunidad de representar a la universidad a nivel regional y nacional.
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-x-8 gap-y-16 pt-2 lg:pl-16 lg:border-l border-slate-200">
                        <div>
                            <span class="block text-5xl md:text-7xl font-light text-slate-900 tracking-tighter mb-2">+15</span>
                            <span class="text-xs font-bold uppercase tracking-widest text-orange-600 block mb-1">Disciplinas</span>
                            <p class="text-sm text-slate-500 font-light">Disponibles en modalidades recreativas y competitivas.</p>
                        </div>
                        <div>
                            <span class="block text-5xl md:text-7xl font-light text-slate-900 tracking-tighter mb-2">100%</span>
                            <span class="text-xs font-bold uppercase tracking-widest text-orange-600 block mb-1">Gratuito</span>
                            <p class="text-sm text-slate-500 font-light">Para todos los alumnos regulares de la UNSL.</p>
                        </div>
                        <div>
                            <span class="block text-5xl md:text-7xl font-light text-slate-900 tracking-tighter mb-2">03</span>
                            <span class="text-xs font-bold uppercase tracking-widest text-orange-600 block mb-1">Centros</span>
                            <p class="text-sm text-slate-500 font-light">Infraestructura deportiva distribuida en las distintas sedes.</p>
                        </div>
                        <div>
                            <span class="block text-5xl md:text-7xl font-light text-slate-900 tracking-tighter mb-2">Seguro</span>
                            <span class="text-xs font-bold uppercase tracking-widest text-orange-600 block mb-1">Cobertura</span>
                            <p class="text-sm text-slate-500 font-light">Incluye seguro de asistencia deportiva total.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="bg-slate-50 border-y border-slate-200 py-16">
            <div class="container mx-auto px-6 max-w-7xl flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="md:w-1/3">
                    <h3 class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-2">Competencia Regional</h3>
                    <div class="text-4xl font-light text-slate-900 tracking-tight">Juegos <strong class="font-medium">JUR</strong></div>
                </div>
                <div class="md:w-2/3 md:border-l border-slate-300 md:pl-8">
                    <p class="text-slate-600 font-light text-lg mb-4">
                        Nuestros equipos de élite representan a la UNSL en competencias organizadas por la <strong class="font-medium text-slate-900">FEDUA</strong> (Federación del Deporte Universitario Argentino).
                    </p>
                    <div class="flex flex-wrap gap-x-6 gap-y-2 text-sm font-medium text-orange-600 uppercase tracking-wider">
                        <span>San Luis</span> • <span>Mendoza</span> • <span>San Juan</span> • <span>La Rioja</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="disciplinas" class="py-24 bg-white">
            <div class="container mx-auto px-6 max-w-7xl text-center">

                <h2 class="text-3xl font-light text-slate-900 tracking-tight mb-4">
                    Nuestras <strong class="font-semibold">Disciplinas</strong>
                </h2>
                <p class="text-lg text-slate-500 font-light mb-16">Disponibles en modalidad formativa, recreativa y competitiva.</p>

                <div class="flex flex-wrap justify-center gap-3 md:gap-4 max-w-4xl mx-auto">
                    <?php

                    $disciplinas = [
                        'Atletismo',
                        'Básquetbol',
                        'Fútbol',
                        'Vóley',
                        'Rugby',
                        'Hockey',
                        'Hándball',
                        'Tenis de Mesa',
                        'Ajedrez',
                        'Karate',
                        'Yoga',
                        'Aeróbica',
                        'Ritmos',
                        'Gimnasio',
                        'Funcional'
                    ];

                    foreach ($disciplinas as $deporte) : ?>
                        <div class="px-6 py-3 border border-slate-200 text-slate-700 font-medium text-sm hover:border-orange-500 hover:text-orange-600 transition-colors cursor-default">
                            <?php echo $deporte; ?>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>

        <section class="py-24 bg-slate-50 border-t border-slate-200">
            <div class="container mx-auto px-6 max-w-7xl">

                <h2 class="text-3xl font-light text-slate-900 tracking-tight mb-16 text-center">
                    Centros <strong class="font-semibold">Deportivos</strong>
                </h2>

                <div class="grid md:grid-cols-3 gap-8">

                    <div class="bg-white border border-slate-200 p-8 flex flex-col justify-between">
                        <div>
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2 block">Sede Principal</span>
                            <h3 class="text-xl font-medium text-slate-900 mb-4">San Luis</h3>
                            <p class="text-sm text-slate-500 font-light leading-relaxed mb-8">Centro principal de actividades deportivas de salón, gimnasio y gestión administrativa del departamento.</p>
                        </div>
                        <div class="pt-4 border-t border-slate-100 text-xs text-slate-900 font-medium uppercase tracking-wider">
                            Rivadavia 1029 (1er Piso)
                        </div>
                    </div>

                    <div class="bg-white border border-slate-200 p-8 flex flex-col justify-between">
                        <div>
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2 block">Sede Regional</span>
                            <h3 class="text-xl font-medium text-slate-900 mb-4">Villa Mercedes</h3>
                            <p class="text-sm text-slate-500 font-light leading-relaxed mb-8">Instalaciones deportivas completas integradas al campus de las facultades de ingeniería y ciencias.</p>
                        </div>
                        <div class="pt-4 border-t border-slate-100 text-xs text-slate-900 font-medium uppercase tracking-wider">
                            Consultar en Campus
                        </div>
                    </div>

                    <div class="bg-white border border-slate-200 p-8 flex flex-col justify-between">
                        <div>
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2 block">Sede Regional</span>
                            <h3 class="text-xl font-medium text-slate-900 mb-4">Villa de Merlo</h3>
                            <p class="text-sm text-slate-500 font-light leading-relaxed mb-8">Desarrollo de actividades recreativas, turismo universitario y deportes al aire libre.</p>
                        </div>
                        <div class="pt-4 border-t border-slate-100 text-xs text-slate-900 font-medium uppercase tracking-wider">
                            Campus Barranca Colorada
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-24 bg-white border-t border-slate-200">
            <div class="container mx-auto px-6 max-w-7xl">

                <div class="flex items-end justify-between mb-16 border-b border-slate-200 pb-6">
                    <h2 class="text-3xl font-light text-slate-900 tracking-tight">Actualidad Deportiva</h2>
                    <a href="<?php echo get_category_link(get_cat_ID('deportes')); ?>" class="text-sm text-orange-600 font-medium uppercase tracking-widest hover:text-slate-900 transition-colors">
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
                                'terms'    => 'dpto-deportes',
                            ),
                        ),
                    );

                    $deportes_query = new WP_Query($args);

                    if ($deportes_query->have_posts()) :
                        while ($deportes_query->have_posts()) : $deportes_query->the_post();
                    ?>
                            <article class="flex flex-col h-full group">
                                <a title="Enlace a <?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>" class="block mb-6 overflow-hidden bg-slate-100 aspect-[4/3]">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover transition-transform duration-700 group-')); ?>
                                    <?php else : ?>
                                        <div class="w-full h-full flex items-center justify-center text-slate-300 font-light text-sm uppercase tracking-widest">
                                            Sin Foto
                                        </div>
                                    <?php endif; ?>
                                </a>

                                <div class="flex-1 flex flex-col">
                                    <div class="text-[10px] font-bold text-orange-500 uppercase tracking-widest mb-3">
                                        <?php echo get_the_date('d M Y'); ?>
                                    </div>

                                    <h3 class="text-xl font-medium text-slate-900 leading-tight mb-3">
                                        <a href="<?php the_permalink(); ?>" class="hover:text-orange-600 transition-colors">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>
                                </div>
                            </article>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        ?>
                        <div class="col-span-3 text-center py-16 border border-slate-100 bg-slate-50">
                            <p class="text-slate-400 font-light">No hay noticias deportivas recientes.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section id="contacto" class="bg-slate-900 py-24 text-white text-center border-t border-slate-800">
            <div class="container mx-auto px-6 max-w-3xl">

                <h2 class="text-3xl font-light mb-12 tracking-tight">Sumate al Deporte Universitario</h2>

                <div class="mb-12 inline-block">
                    <h3 class="text-xl font-medium text-white mb-2">Téc. Jorge Francisco Verón</h3>
                    <p class="text-xs text-orange-500 uppercase tracking-widest font-bold">Jefe de Dpto. Educación Física y Deportes</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="mailto:unsldeportes@gmail.com" class="inline-block bg-white text-slate-900 px-10 py-4 text-sm font-bold uppercase tracking-widest hover:bg-slate-100  transition-all duration-300">
                        Enviar Correo
                    </a>
                    <a href="tel:+8133" class="inline-block border border-slate-600 text-white px-10 py-4 text-sm font-bold uppercase tracking-widest hover:bg-slate-800 transition-all duration-300">
                        Interno 8133
                    </a>
                </div>

            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>