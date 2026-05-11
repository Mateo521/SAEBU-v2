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

                <nav class="flex justify-center items-center gap-3 text-base font-bold  uppercase text-slate-500 mb-8">
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

                            <blockquote class="pl-6   py-2 my-8 text-slate-700 italic">
                                Nuestros programas están diseñados para ser <strong>inclusivos y accesibles</strong>, fomentando la participación activa en diversas disciplinas deportivas.
                            </blockquote>

                            <p>
                                A través de entrenamientos regulares y competiciones oficiales, buscamos desarrollar habilidades técnicas y tácticas, estableciendo una base sólida que acompañe el crecimiento físico y personal de cada integrante.
                            </p>
                        </div>
                    </div>

                    <div class="lg:pl-16 lg:border-l border-slate-200">
                        <h3 class="text-xs font-bold text-slate-400 uppercase  mb-10 pb-4 border-b border-slate-200">
                            Nuestros Valores
                        </h3>

                        <div class="space-y-10">
                            <div>

                                <h4 class="text-xl font-medium text-slate-900 mb-2">Trabajo en equipo</h4>
                                <p class="text-base text-slate-500 font-light leading-relaxed">Fomentamos la colaboración constante y el apoyo mutuo, tanto dentro como fuera del campo de juego.</p>
                            </div>
                            <div>

                                <h4 class="text-xl font-medium text-slate-900 mb-2">Respeto</h4>
                                <p class="text-base text-slate-500 font-light leading-relaxed">Inculcamos el juego limpio y el respeto absoluto por compañeros, rivales, árbitros y entrenadores.</p>
                            </div>
                            <div>

                                <h4 class="text-xl font-medium text-slate-900 mb-2">Perseverancia</h4>
                                <p class="text-base text-slate-500 font-light leading-relaxed">Impulsamos la superación constante y la resiliencia ante los desafíos deportivos y personales.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-24 bg-slate-50 border-t border-slate-200">
            <div class="container mx-auto px-6 max-w-7xl text-center">

                <h2 class="text-3xl font-light text-slate-900 tracking-tight mb-4">
                    Disciplinas <strong class="font-semibold">activas</strong>
                </h2>
                <p class="text-lg text-slate-500 font-light mb-12">Escuelas formativas infantiles y juveniles.</p>

                <div class="flex flex-wrap justify-center gap-4 max-w-5xl mx-auto mb-16">

                    <div class="px-6 py-3 border border-slate-200 bg-white text-slate-700 font-medium text-base flex flex-col justify-center items-center gap-1 min-w-[200px]">
                        <span>Gimnasia Deportiva</span>
                        <span class="text-base text-slate-400 font-light">Fem: <span class="text-red-500 font-medium">Sin cupos</span> | Masc: <span class="text-green-600 font-medium">Disponible</span></span>
                    </div>

                    <?php
                    $disciplinas_club = [
                        'Vóley',
                        'Básquet',
                        'Futsal',
                        'Baby Fútbol',
                        'Handball',
                        'Atletismo'
                    ];

                    foreach ($disciplinas_club as $deporte) : ?>
                        <div class="px-6 py-3 border border-slate-200 bg-white text-slate-700 font-medium text-base flex flex-col justify-center items-center gap-1 min-w-[160px]">
                            <span><?php echo $deporte; ?></span>
                            <span class="text-base text-slate-400 font-light">Masc / Fem</span>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="max-w-3xl mx-auto bg-white border border-slate-200 p-8 shadow-sm text-left md:text-center">
                    <span class="text-base font-bold text-[#005eb8] uppercase  block mb-3">Información e Inscripciones</span>
                    <p class="text-slate-700 font-light leading-relaxed">
                        La única forma de inscribirse o realizar consultas es <strong>acercándose presencialmente</strong> al Polideportivo de Lavalle 950 o al Departamento de Deportes ubicado en el 1er piso del Comedor Universitario (Rivadavia 1029).
                    </p>
                </div>

            </div>
        </section>

        <section id="contacto" class="bg-slate-900 py-24 text-white text-center border-t border-slate-800">
            <div class="container mx-auto px-6 max-w-3xl">

                <h2 class="text-3xl font-light mb-6 tracking-tight">Comunidad del Club universitario</h2>
                <p class="text-slate-400 font-light text-lg mb-12">
                    Te invitamos a seguirnos en nuestra cuenta oficial de Instagram para enterarte de todas las novedades, fechas de competencia y actividades formativas.
                </p>

                <div class="flex justify-center">
                    <a href="https://instagram.com/clubunsl.oficial" target="_blank" rel="noopener" class="inline-flex items-center gap-3 bg-white text-slate-900 px-10 py-4 text-base font-bold uppercase  hover:bg-[#005eb8] hover:text-white transition-all duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                        Seguinos en @clubunsl.oficial
                    </a>
                </div>

            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>