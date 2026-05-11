<?php

/**
 * 404 Error Template
 */
get_header();
?>

<main class="bg-white font-sans">

    <section class="py-24 md:py-32 text-center border-b border-slate-200">
        <div class="container mx-auto px-6 max-w-3xl">

            <span class="text-[10px] font-bold  uppercase text-[#005eb8] mb-4 block">
                Error de navegación
            </span>

            <h1 class="text-9xl md:text-[15rem] font-light text-slate-100 tracking-tighter leading-none select-none mb-8">
                404
            </h1>

            <h2 class="text-3xl md:text-4xl font-light text-slate-900 tracking-tight mb-6">
                Página no <strong class="font-semibold">encontrada</strong>
            </h2>

            <p class="text-lg text-slate-500 font-light leading-relaxed max-w-xl mx-auto mb-12">
                Lo sentimos, la dirección que estás buscando no existe, ha sido movida o se encuentra temporalmente fuera de servicio.
            </p>

            <a href="<?php echo home_url('/'); ?>"
                class="inline-block bg-slate-900 text-white px-10 py-4 text-sm font-bold uppercase  hover:bg-[#005eb8] transition-colors duration-300">
                Volver al inicio
            </a>

        </div>
    </section>

    <section class="py-24 bg-slate-50 border-b border-slate-200">
        <div class="container mx-auto px-6 max-w-6xl">
            <div class="grid md:grid-cols-[1.5fr_1fr] gap-16 md:gap-24 items-start">

                <div>
                    <h3 class="text-xs font-bold text-slate-400 uppercase  mb-8">
                        ¿Qué estabas buscando?
                    </h3>
                    <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="relative flex gap-4">
                        <input type="search"
                            name="s"
                            placeholder="Buscar en SAEBU..."
                            class="w-full bg-transparent border-0 border-b-2 border-slate-300 focus:border-slate-900 focus:ring-0 px-0 py-4 text-xl font-light text-slate-900 placeholder:text-slate-400 transition-colors"
                            required>
                        <button type="submit" class="text-sm font-bold uppercase  text-[#005eb8] hover:text-slate-900 transition-colors px-4">
                            Buscar
                        </button>
                    </form>
                </div>

                <div class="md:border-l border-slate-200 md:pl-16">
                    <h3 class="text-xs font-bold text-slate-400 uppercase  mb-8">
                        Enlaces útiles
                    </h3>
                    <ul class="space-y-4">
                        <li>
                            <a href="<?php echo home_url('/departamentos'); ?>" class="text-lg font-medium text-slate-700 hover:text-[#005eb8] transition-colors">
                                Estructura y áreas
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/becas'); ?>" class="text-lg font-medium text-slate-700 hover:text-[#005eb8] transition-colors">
                                Departamento de becas
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/comedor-universitario'); ?>" class="text-lg font-medium text-slate-700 hover:text-[#005eb8] transition-colors">
                                Comedor universitario
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/ceseu'); ?>" class="text-lg font-medium text-slate-700 hover:text-[#005eb8] transition-colors">
                                Salud estudiantil (CeSEU)
                            </a>
                        </li>
                        <li class="pt-4 mt-4 border-t border-slate-200">
                            <a href="<?php echo home_url('/contacto'); ?>" class="text-sm font-bold text-slate-900 uppercase  hover:text-[#005eb8] transition-colors">
                                Ir a contacto &rarr;
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 max-w-7xl">

            <div class="flex items-end justify-between mb-16 border-b border-slate-200 pb-6">
                <div>
                    <h2 class="text-3xl font-light text-slate-900 tracking-tight">Últimas novedades</h2>
                    <p class="text-slate-500 font-light mt-2">Mientras tanto, enterate de la actualidad institucional.</p>
                </div>
                <a href="<?php echo home_url('/noticias'); ?>" class="hidden md:inline-block text-sm text-[#005eb8] font-medium uppercase  hover:text-slate-900 transition-colors">
                    Ver Archivo
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <?php
                $recent = new WP_Query(array(
                    'post_type'      => 'noticia',
                    'posts_per_page' => 3,
                ));

                if ($recent->have_posts()) :
                    while ($recent->have_posts()) : $recent->the_post();
                ?>
                        <article class="flex flex-col h-full group">
                            <a title="Enlace a <?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>" class="block mb-6 overflow-hidden bg-slate-100 aspect-[4/3]">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover transition-transform duration-700 group-hover:scale-105')); ?>
                                <?php else : ?>
                                    <div class="w-full h-full flex items-center justify-center text-slate-300 font-light text-sm uppercase ">
                                        Sin imagen
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
                        <p class="text-slate-400 font-light">No hay noticias recientes disponibles.</p>
                    </div>
                <?php endif; ?>
            </div>

            <div class="mt-8 text-center md:hidden">
                <a href="<?php echo home_url('/noticias'); ?>" class="text-sm font-bold text-[#005eb8] uppercase ">
                    Ver archivo de noticias
                </a>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>