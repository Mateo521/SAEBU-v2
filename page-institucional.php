<?php
/**
 * Template Name: Institucional
 * Description: Página de Misión, Visión y Valores 
 */

get_header();
?>

<section class="bg-slate-900 py-32 font-sans border-b border-slate-800">
    <div class="container mx-auto px-6 max-w-7xl text-center">
        <span class="text-xs font-bold  uppercase text-slate-400 mb-6 block">
            Sobre Nosotros
        </span>
        <h1 class="text-4xl md:text-6xl font-light text-white leading-tight mb-8 tracking-tight">
            Misión, Visión y <strong class="font-semibold">Valores</strong>
        </h1>
        <p class="text-xl text-slate-400 font-light leading-relaxed">
            Los pilares fundamentales que sostienen nuestro compromiso con la comunidad universitaria y guían nuestro accionar diario en la UNSL.
        </p>
    </div>
</section>

<section class="py-24 bg-white font-sans">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="grid md:grid-cols-[1fr_2fr] gap-16 items-start">
            
            <div class="sticky top-10">
                <h2 class="text-3xl font-light text-slate-900 tracking-tight">
                    Nuestra <strong class="font-semibold">Misión</strong>
                </h2>
                <div class="h-px w-12 bg-slate-900 mt-8"></div>
            </div>

            <div>
                <p class="text-2xl md:text-3xl font-light text-slate-700 leading-relaxed mb-16">
                    Brindar asistencia y acompañamiento continuo para contribuir a un <strong class="font-medium text-slate-900">óptimo desempeño académico</strong>, promoviendo el bienestar individual y colectivo como elemento clave de la formación integral.
                </p>
                
                <div class="grid sm:grid-cols-2 gap-x-12 gap-y-10">
                    <div class="border-t border-slate-200 pt-5">
                        <h3 class="text-xs uppercase  font-bold text-slate-900 mb-2">Alimentación Óptima</h3>
                        <p class="text-slate-500 font-light text-sm leading-relaxed">Garantizamos acceso a nutrición equilibrada y accesible para toda la comunidad estudiantil.</p>
                    </div>
                    <div class="border-t border-slate-200 pt-5">
                        <h3 class="text-xs uppercase  font-bold text-slate-900 mb-2">Atención Primaria</h3>
                        <p class="text-slate-500 font-light text-sm leading-relaxed">Brindamos cobertura integral, contención y prevención en salud a través de nuestros centros.</p>
                    </div>
                    <div class="border-t border-slate-200 pt-5">
                        <h3 class="text-xs uppercase  font-bold text-slate-900 mb-2">Formación Integral</h3>
                        <p class="text-slate-500 font-light text-sm leading-relaxed">Fomentamos el desarrollo humano mediante prácticas deportivas, recreativas y culturales.</p>
                    </div>
                    <div class="border-t border-slate-200 pt-5">
                        <h3 class="text-xs uppercase  font-bold text-slate-900 mb-2">Equidad e Igualdad</h3>
                        <p class="text-slate-500 font-light text-sm leading-relaxed">Gestionamos becas y residencias para sostener el acceso irrestricto a la educación superior.</p>
                    </div>
                </div>
            </div> 

        </div>
    </div>
</section>

<section class="py-32 bg-slate-50 font-sans border-y border-slate-200">
    <div class="container mx-auto px-6 max-w-5xl text-center">
        <h2 class="text-xs font-bold uppercase  text-slate-400 mb-10">Nuestra Visión</h2>
        <p class="text-xl md:text-2xl font-light text-slate-900 leading-tight">
            "Constituirnos en la <strong class="font-medium text-[#005eb8]">primera Secretaría</strong> de Asuntos Estudiantiles y Bienestar Universitario en el ámbito de la Educación Superior dentro de los próximos 6 años, impulsados por nuestro compromiso de liderazgo y cambio."
        </p>
    </div>
</section>

<section class="py-24 bg-white font-sans">
    <div class="container mx-auto px-6 max-w-7xl">
        
        <div class="mb-16 md:flex justify-between items-end">
            <div class="max-w-2xl">
                <h2 class="text-3xl font-light text-slate-900 tracking-tight mb-4">
                    Nuestros <strong class="font-semibold">Valores</strong>
                </h2>
                <p class="text-lg text-slate-500 font-light">Principios éticos que fundamentan nuestra cultura institucional.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-12 gap-y-12">
            <?php
            // El mismo array de valores, pero simplificado, ya no necesitamos la clave 'icon'
            $valores = [
                ['titulo' => 'Respeto', 'desc' => 'Valoramos la dignidad de cada persona, promoviendo un trato justo e igualitario.'],
                ['titulo' => 'Empatía', 'desc' => 'Comprendemos y compartimos las realidades de nuestros estudiantes para brindar un apoyo real.'],
                ['titulo' => 'Equidad', 'desc' => 'Trabajamos incansablemente por la igualdad de oportunidades para todos.'],
                ['titulo' => 'Solidaridad', 'desc' => 'Fomentamos el apoyo mutuo y el trabajo colaborativo en nuestra comunidad.'],
                ['titulo' => 'Compromiso', 'desc' => 'Dedicación total con nuestra misión y con el bienestar estudiantil.'],
                ['titulo' => 'Identidad', 'desc' => 'Cultivamos el sentido de pertenencia y orgullo por nuestra institución.'],
                ['titulo' => 'Transparencia', 'desc' => 'Mantenemos claridad, ética y responsabilidad en todas nuestras gestiones.'],
                ['titulo' => 'Inclusión', 'desc' => 'Garantizamos apertura absoluta y respeto profundo a la diversidad.']
            ];

            foreach ($valores as $index => $valor) : ?>
                <div class="border-t border-slate-200 pt-5 group">
                    <span class="text-[10px] font-bold text-slate-400  block mb-3 group-hover:text-[#005eb8] transition-colors">
                        0<?php echo $index + 1; ?>
                    </span>
                    <h3 class="text-lg font-medium text-slate-900 mb-2"><?php echo $valor['titulo']; ?></h3>
                    <p class="text-sm text-slate-500 font-light leading-relaxed"><?php echo $valor['desc']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<section class="py-24 bg-slate-900 font-sans text-center">
    <div class="container mx-auto px-6 max-w-3xl">
        <h2 class="text-3xl font-light text-white mb-6 tracking-tight">
            Comprometidos con tu desarrollo integral
        </h2>
        <p class="text-slate-400 font-light text-lg mb-12">
            Si tenés dudas sobre nuestros programas de becas, atención de la salud, espacios recreativos o deportes, estamos acá para orientarte.
        </p>
        <a href="<?php echo esc_url(home_url('/contacto')); ?>" 
           class="inline-block bg-white text-slate-900 px-10 py-4 text-sm font-bold uppercase  hover:bg-slate-100  transition-all duration-300">
            Contactar a un área
        </a>
    </div>
</section>

<?php get_footer(); ?>