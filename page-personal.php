<?php

/**
 * Template Name: Autoridades 
 */
get_header();

$args = [
    'post_type'      => 'autoridad',
    'posts_per_page' => -1,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
];
$query_autoridades = new WP_Query($args);

$jerarquia = [
    'secretario'         => [],
    'subsecretario'      => [],
    'director'           => [],
    'jefe_personal'      => [],
    'jefe_departamento'  => [],
    'coordinador'        => []
];

if ($query_autoridades->have_posts()) {
    while ($query_autoridades->have_posts()) {
        $query_autoridades->the_post();


        $cargo_id = get_field('cargo') ?: get_post_meta(get_the_ID(), 'cargo', true);

        if (array_key_exists($cargo_id, $jerarquia)) {
            $jerarquia[$cargo_id][] = get_post();
        }
    }
    wp_reset_postdata();
}

$placeholder = get_template_directory_uri() . '/assets/images/placeholder-autoridad.jpg';


function renderizar_tarjeta_unica($post, $placeholder)
{
    $foto = get_the_post_thumbnail_url($post->ID, 'large') ?: $placeholder;
    $cargo_raw = get_field('cargo', $post->ID) ?: get_post_meta($post->ID, 'cargo', true);
    $cargo_label = str_replace('_', ' ', $cargo_raw);
    $email = get_field('email', $post->ID);
    $tel   = get_field('telefono', $post->ID);
?>
    <div class="border-b border-slate-200 py-16 flex flex-col md:flex-row gap-10 items-center md:items-start group">
        <div class="w-56 h-56 shrink-0 overflow-hidden bg-slate-100">
            <img src="<?php echo esc_url($foto); ?>"
                alt="<?php echo esc_attr($post->post_title); ?>"
                class="w-full h-full object-cover filter  transition-all duration-700">
        </div>

        <div class="text-center md:text-left flex-1 pt-2">
            <span class="text-xs font-bold text-[#005eb8] uppercase  block mb-3">
                <?php echo esc_html($cargo_label); ?>
            </span>
            <h2 class="text-3xl font-light text-slate-900 mb-6 tracking-tight">
                <?php echo esc_html($post->post_title); ?>
            </h2>

            <div class="space-y-3 text-sm font-light text-slate-500 mt-8">
                <?php if ($email): ?>
                    <p class="flex items-center justify-center md:justify-start gap-4">
                        <span class="uppercase  text-[10px] text-slate-900 font-bold w-12">Email</span>
                        <a href="mailto:<?php echo esc_attr($email); ?>" class="hover:text-[#005eb8] transition-colors">
                            <?php echo esc_html($email); ?>
                        </a>
                    </p>
                <?php endif; ?>

                <?php if ($tel): ?>
                    <p class="flex items-center justify-center md:justify-start gap-4">
                        <span class="uppercase  text-[10px] text-slate-900 font-bold w-12">Tel</span>
                        <a href="tel:<?php echo esc_attr($tel); ?>" class="hover:text-[#005eb8] transition-colors">
                            <?php echo esc_html($tel); ?>
                        </a>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php
}


function renderizar_tarjeta_grilla($post, $placeholder)
{
    $foto = get_the_post_thumbnail_url($post->ID, 'medium') ?: $placeholder;
    $area = get_field('area', $post->ID);
?>
    <div class="group flex flex-col">
        <div class="aspect-square w-full overflow-hidden bg-slate-100 mb-6">
            <img src="<?php echo esc_url($foto); ?>"
                alt="<?php echo esc_attr($post->post_title); ?>"
                class="w-full h-full object-cover filter  transition-all duration-700 group-">
        </div>

        <div>
            <h4 class="text-lg font-medium text-slate-900 leading-tight mb-2">
                <?php echo esc_html($post->post_title); ?>
            </h4>
            <p class="text-[11px] font-bold uppercase  text-slate-400">
                <?php echo esc_html($area); ?>
            </p>
        </div>
    </div>
<?php
}
?>

<section class="bg-slate-900 py-32 font-sans border-b border-slate-800">
    <div class="container mx-auto px-6 max-w-7xl text-center">
        <span class="text-xs font-bold  uppercase text-slate-400 mb-6 block">
            Directorio institucional
        </span>
        <h1 class="text-4xl md:text-6xl font-light text-white leading-tight mb-8 tracking-tight">
            Nuestro <strong class="font-semibold">personal</strong>
        </h1>
        <p class="text-xl text-slate-400 font-light leading-relaxed">
            Estructura organizativa y equipo de gestión de la Secretaría de Asuntos Estudiantiles y Bienestar Universitario.
        </p>
    </div>
</section>

<main class="bg-white font-sans">
    <div class="container mx-auto px-6 max-w-5xl py-24">

        <div class="mb-32 border-t border-slate-200">
            <?php
            $niveles_unicos = ['secretario', 'subsecretario', 'director', 'jefe_personal'];

            foreach ($niveles_unicos as $nivel) {
                if (!empty($jerarquia[$nivel])) {

                    renderizar_tarjeta_unica($jerarquia[$nivel][0], $placeholder);
                }
            }
            ?>
        </div>

        <?php if (!empty($jerarquia['jefe_departamento']) || !empty($jerarquia['coordinador'])) : ?>

            <div class="mb-16">
                <h2 class="text-3xl font-light text-slate-900 tracking-tight">
                    Jefaturas y <strong class="font-semibold">Coordinaciones</strong>
                </h2>
                <div class="h-px w-12 bg-slate-900 mt-6"></div>
            </div>

            <?php if (!empty($jerarquia['jefe_departamento'])) : ?>
                <div class="mb-24">
                    <h3 class="text-xs font-bold text-slate-400 uppercase  mb-10 pb-4 border-b border-slate-200">
                        Jefes de Departamento
                    </h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-x-8 gap-y-16">
                        <?php foreach ($jerarquia['jefe_departamento'] as $post) {
                            renderizar_tarjeta_grilla($post, $placeholder);
                        } ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (!empty($jerarquia['coordinador'])) : ?>
                <div class="mb-24">
                    <h3 class="text-xs font-bold text-slate-400 uppercase  mb-10 pb-4 border-b border-slate-200">
                        Coordinadores de Área
                    </h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-x-8 gap-y-16">
                        <?php foreach ($jerarquia['coordinador'] as $post) {
                            renderizar_tarjeta_grilla($post, $placeholder);
                        } ?>
                    </div>
                </div>
            <?php endif; ?>

        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>