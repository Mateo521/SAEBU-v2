<?php

/**
 * Template Name: Club Universitario
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
                    Club <strong class="font-semibold">Universitario</strong>
                </h1>

                <p class="text-xl text-slate-400 font-light leading-relaxed max-w-2xl mx-auto">
                    <?php
                    if (has_excerpt()) {
                        echo get_the_excerpt();
                    } else {
                        echo 'Escuelas formativas infantiles y juveniles de la UNSL. Un espacio dedicado al desarrollo de jóvenes talentos y a la integración comunitaria.';
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
                            Formación y <strong class="font-semibold">Competitividad</strong>
                        </h2>

                        <div class="space-y-6 text-lg text-slate-600 font-light leading-relaxed">
                            <p>
                                El Club Universitario de la UNSL extiende su alcance más allá de la comunidad estudiantil, abriendo sus puertas a las <strong class="font-medium text-slate-900">escuelas formativas infantiles y juveniles</strong>.
                            </p>
                            <p>
                                Este enfoque busca detectar y nutrir el talento deportivo desde una edad temprana, ofreciendo entrenamiento especializado y oportunidades de competición para los jóvenes atletas de nuestra región.
                            </p>

                            <blockquote class="pl-6 border-l-2 border-[#005eb8] py-2 my-8 text-slate-700 italic">
                                Nuestros programas están diseñados para ser <strong>inclusivos y accesibles</strong>, fomentando la participación activa en diversas disciplinas deportivas.
                            </blockquote>

                            <p>
                                A través de entrenamientos regulares y competiciones oficiales, buscamos desarrollar habilidades técnicas y tácticas, estableciendo una base sólida que acompañe el crecimiento físico y personal de cada integrante.
                            </p>
                        </div>
                    </div>

                    <div class="lg:pl-16 lg:border-l border-slate-200">
                        <h3 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-10 pb-4 border-b border-slate-200">
                            Nuestros Valores
                        </h3>

                        <div class="space-y-10">
                            <div>

                                <h4 class="text-xl font-medium text-slate-900 mb-2">Trabajo en equipo</h4>
                                <p class="text-sm text-slate-500 font-light leading-relaxed">Fomentamos la colaboración constante y el apoyo mutuo, tanto dentro como fuera del campo de juego.</p>
                            </div>

                            <div>

                                <h4 class="text-xl font-medium text-slate-900 mb-2">Respeto</h4>
                                <p class="text-sm text-slate-500 font-light leading-relaxed">Inculcamos el juego limpio y el respeto absoluto por compañeros, rivales, árbitros y entrenadores.</p>
                            </div>

                            <div>

                                <h4 class="text-xl font-medium text-slate-900 mb-2">Perseverancia</h4>
                                <p class="text-sm text-slate-500 font-light leading-relaxed">Impulsamos la superación constante y la resiliencia ante los desafíos deportivos y personales.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-24 bg-slate-50 border-t border-slate-200">
            <div class="container mx-auto px-6 max-w-7xl">

                <div class="flex items-end justify-between mb-16 border-b border-slate-200 pb-6">
                    <h2 class="text-3xl font-light text-slate-900 tracking-tight">Noticias del club</h2>
                    <a href="<?php echo get_category_link(get_cat_ID('club-universitario')); ?>" class="text-sm text-[#005eb8] font-medium uppercase tracking-widest hover:text-slate-900 transition-colors">
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
                                'terms'    => 'club-universitario',
                            ),
                        ),
                    );

                    $club_query = new WP_Query($args);

                    if ($club_query->have_posts()) :
                        while ($club_query->have_posts()) : $club_query->the_post();
                    ?>
                            <article class="flex flex-col h-full group">
                                <a title="Enlace a <?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>" class="block mb-6 overflow-hidden bg-slate-200 aspect-[4/3]">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover transition-transform duration-700 group-')); ?>
                                    <?php else : ?>
                                        <div class="w-full h-full flex items-center justify-center text-slate-400 font-light text-sm uppercase tracking-widest">
                                            Sin Foto
                                        </div>
                                    <?php endif; ?>
                                </a>

                                <div class="flex-1 flex flex-col">
                                    <div class="text-[10px] font-bold text-[#005eb8] uppercase tracking-widest mb-3">
                                        <?php echo get_the_date('d M Y'); ?>
                                    </div>

                                    <h3 class="text-xl font-medium text-slate-900 leading-tight mb-3">
                                        <a href="<?php the_permalink(); ?>" class="hover:text-[#005eb8] transition-colors">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>

                                    <div class="text-slate-500 text-sm font-light leading-relaxed line-clamp-3">
                                        <?php echo wp_trim_words(get_the_excerpt(), 18); ?>
                                    </div>
                                </div>
                            </article>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        ?>
                        <div class="col-span-3 text-center py-16 border border-slate-200 bg-white">
                            <p class="text-slate-400 font-light">No hay noticias recientes sobre el Club Universitario.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section id="contacto" class="bg-slate-900 py-24 text-white text-center border-t border-slate-800">
            <div class="container mx-auto px-6 max-w-3xl">

                <h2 class="text-3xl font-light mb-6 tracking-tight">Sumate al Club Universitario</h2>
                <p class="text-slate-400 font-light text-lg mb-12">
                    Consultá por inscripciones, requisitos, horarios y disciplinas disponibles para las escuelas formativas.
                </p>

                <div class="mb-12 border-t border-slate-700 pt-8 inline-block">
                    <h3 class="text-xl font-medium text-white mb-2">Administración Club UNSL</h3>
                    <p class="text-xs text-[#005eb8] uppercase tracking-widest font-bold">Atención a la Comunidad</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="mailto:clubuniversitario@unsl.edu.ar" class="inline-block bg-white text-slate-900 px-10 py-4 text-sm font-bold uppercase tracking-widest hover:bg-slate-100  transition-all duration-300">
                        Enviar Correo
                    </a>
                    <a href="tel:+542664426046" class="inline-block border border-slate-600 text-white px-10 py-4 text-sm font-bold uppercase tracking-widest hover:bg-slate-800 transition-all duration-300">
                        266 442-6046
                    </a>
                </div>

            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>