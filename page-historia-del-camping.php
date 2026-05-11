<?php

/**
 * Template Name: Historia del Camping
 * Description: Archivo histórico del Complejo Turístico La Florida
 */

get_header();
?>

<main class="bg-white font-sans">

    <section class="relative bg-[#1a4731] py-32 border-b border-[#0f2e1f] overflow-hidden text-center">
        <?php $hero_image = get_template_directory_uri() . '/assets/images/camping/banner.jpg'; ?>
        <img fetchpriority="high" class="absolute inset-0 w-full h-full object-cover opacity-20 mix-blend-luminosity" src="<?php echo esc_url($hero_image); ?>" alt="Archivo histórico La Florida">
        <div class="absolute inset-0 bg-gradient-to-t from-[#1a4731] to-transparent opacity-90"></div>

        <div class="container mx-auto px-6 max-w-4xl relative z-10">

            <nav class="flex justify-center items-center gap-3 text-[10px] font-bold  uppercase text-green-400/70 mb-8">
                <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors">Inicio</a>
                <span>/</span>
                <a href="<?php echo home_url('/camping-universitario'); ?>" class="hover:text-white transition-colors">Camping</a>
                <span>/</span>
                <span class="text-white">Historia</span>
            </nav>

            <h1 class="text-4xl md:text-6xl font-light text-white leading-tight mb-8 tracking-tight">
                Archivo <strong class="font-semibold">Histórico</strong>
            </h1>
 
            <p class="text-xl text-green-100/80 font-light leading-relaxed max-w-2xl mx-auto">
                Crónica del desarrollo y construcción del Complejo Turístico y Recreativo La Florida, un legado preservado para nuestra comunidad universitaria.
            </p>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 max-w-4xl text-center">
            <h2 class="text-xs font-bold uppercase  text-slate-400 mb-6">
                Génesis del Proyecto
            </h2>
            <p class="text-2xl md:text-3xl font-light text-slate-800 leading-relaxed">
                El Complejo Turístico La Florida nace como una iniciativa para brindar un espacio de esparcimiento y conexión con la naturaleza. A través de los años, se ha transformado mediante <strong class="font-medium text-[#1a4731]">obras de infraestructura clave</strong> que hoy permiten disfrutar de un servicio de excelencia.
            </p>
        </div>
    </section>

    <section class="py-24 bg-slate-50 border-y border-slate-200">
        <div class="container mx-auto px-6 max-w-5xl">

            <div class="grid md:grid-cols-[1fr_2fr] gap-8 md:gap-16 py-12 border-b border-slate-200 items-start">
                <div class="md:text-right">
                    <span class="text-4xl md:text-5xl font-light text-[#1a4731] tracking-tighter block mb-1">1988</span>
                    <span class="text-[10px] font-bold uppercase  text-slate-400">Inicio del Proyecto</span>
                </div>
                <div>
                    <h3 class="text-xl font-medium text-slate-900 mb-3">Primeros movimientos</h3>
                    <p class="text-slate-600 font-light leading-relaxed">
                        Se da inicio formal al proyecto con los primeros relevamientos topográficos y la planificación general del predio, marcando el nacimiento de lo que sería el complejo universitario.
                    </p>
                </div>
            </div>

            <div class="grid md:grid-cols-[1fr_2fr] gap-8 md:gap-16 py-12 border-b border-slate-200 items-start">
                <div class="md:text-right">
                    <span class="text-4xl md:text-5xl font-light text-[#1a4731] tracking-tighter block mb-1">Fase I</span>
                    <span class="text-[10px] font-bold uppercase  text-slate-400">Infraestructura base</span>
                </div>
                <div>
                    <h3 class="text-xl font-medium text-slate-900 mb-3">Cimientos del complejo</h3>
                    <p class="text-slate-600 font-light leading-relaxed mb-6">
                        Se establecieron los cimientos operativos. Esta etapa incluyó la construcción de los primeros quinchos, baterías de baños, asadores iniciales y la casa de ingreso para el cuidador del predio.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-6 text-sm font-medium text-slate-700">
                        <span class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#1a4731]"></span> Planta de agua potable
                        </span>
                        <span class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#1a4731]"></span> Red eléctrica e iluminación
                        </span>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-[1fr_2fr] gap-8 md:gap-16 py-12 border-b border-slate-200 items-start">
                <div class="md:text-right">
                    <span class="text-4xl md:text-5xl font-light text-[#1a4731] tracking-tighter block mb-1">Flora</span>
                    <span class="text-[10px] font-bold uppercase  text-slate-400">Medio ambiente</span>
                </div>
                <div>
                    <h3 class="text-xl font-medium text-slate-900 mb-3">Plan de forestación</h3>
                    <p class="text-slate-600 font-light leading-relaxed">
                        Se llevó a cabo un plan intensivo de forestación e intervención paisajística con más de <strong>5.000 especies arbóreas</strong>, transformando el terreno agreste en el pulmón verde que la comunidad disfruta hoy en día.
                    </p>
                </div>
            </div>

            <div class="grid md:grid-cols-[1fr_2fr] gap-8 md:gap-16 py-12 border-b border-slate-200 items-start">
                <div class="md:text-right">
                    <span class="text-4xl md:text-5xl font-light text-[#1a4731] tracking-tighter block mb-1">1989</span>
                    <span class="text-[10px] font-bold uppercase  text-slate-400">Expansión</span>
                </div>
                <div>
                    <h3 class="text-xl font-medium text-slate-900 mb-3">Salón de usos múltiples</h3>
                    <p class="text-slate-600 font-light leading-relaxed">
                        Inauguración del gran salón cubierto (quincho principal) con una superficie de <strong>200 m²</strong>. Esta obra fue fundamental para permitir el desarrollo de actividades sociales y recreativas durante todo el año, independientemente del clima.
                    </p>
                </div>
            </div>

            <div class="grid md:grid-cols-[1fr_2fr] gap-8 md:gap-16 py-12 items-start">
                <div class="md:text-right">
                    <span class="text-4xl md:text-5xl font-light text-[#1a4731] tracking-tighter block mb-1">1990</span>
                    <span class="text-[10px] font-bold uppercase  text-slate-400">Mayo</span>
                </div>
                <div>
                    <h3 class="text-xl font-medium text-slate-900 mb-3">Consolidación de servicios</h3>
                    <p class="text-slate-600 font-light leading-relaxed">
                        Habilitación de la cocina totalmente equipada, construcción de nuevos asadores, ampliación del bloque de sanitarios y barras de servicio. Con esta etapa se completó la infraestructura básica requerida para la concesión y operatividad total del complejo.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 max-w-7xl">

            <div class="text-center mb-16">
                <h2 class="text-3xl font-light text-slate-900 tracking-tight mb-4">Registro <strong class="font-semibold">fotográfico</strong></h2>
                <p class="text-slate-500 font-light">Archivo documental visual de la evolución del predio.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <?php
                $fotos = array(
                    ['id' => 1, 'alt' => 'Bungalow individual en fase de construcción', 'titulo' => '-', 'fecha' => 'Fase I'],
                    ['id' => 2, 'alt' => 'Vista panorámica del dique desde el complejo', 'titulo' => '-', 'fecha' => 'Fase I'],
                    ['id' => 3, 'alt' => 'Obreros trabajando en el terreno', 'titulo' => '-', 'fecha' => '1988'],
                    ['id' => 4, 'alt' => 'Estructura de sanitarios en obra', 'titulo' => '-', 'fecha' => 'Fase I'],
                    ['id' => 5, 'alt' => 'Levantamiento de paredes del comedor', 'titulo' => '-', 'fecha' => '1989'],
                    ['id' => 6, 'alt' => 'Piso y alambrado de cancha de paddle', 'titulo' => '-', 'fecha' => '1990'],
                    ['id' => 7, 'alt' => 'Bungalow terminado', 'titulo' => '-', 'fecha' => 'Mayo 1990'],
                    ['id' => 8, 'alt' => 'Preparación del terreno para voley', 'titulo' => '-', 'fecha' => '1990'],
                    ['id' => 9, 'alt' => 'Conjunto de bungalows', 'titulo' => '-', 'fecha' => 'Fase I'],
                );

                foreach ($fotos as $index => $foto) :
                    // URL de imagen (Mantengo tu lógica)
                    $imagen_url = get_template_directory_uri() . '/assets/images/camping/archivo(' . $foto['id'] . ').jpeg';
                ?>
                    <div class="gallery-item cursor-pointer group" data-index="<?php echo $index; ?>">

                        <div class="aspect-[4/3] bg-slate-100 overflow-hidden mb-4 relative">
                            <img
                                src="<?php echo esc_url($imagen_url); ?>"
                                alt="<?php echo esc_attr($foto['alt']); ?>"
                                class="w-full h-full object-cover transition-transform duration-700 group- filter grayscale-[80%] group-hover:grayscale-0 sepia-[20%]">

                            <div class="absolute inset-0 bg-[#1a4731]/0 group-hover:bg-[#1a4731]/20 transition-colors duration-300 flex items-center justify-center">
                                <span class="bg-white/90 text-[#1a4731] text-[10px] uppercase  font-bold px-4 py-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 transform translate-y-2 group-hover:translate-y-0">
                                    Ampliar
                                </span>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between items-baseline mb-1">
                                <h3 class="text-base font-medium text-slate-900"><?php echo $foto['titulo']; ?></h3>
                                <span class="text-[10px] font-bold text-[#1a4731] uppercase "><?php echo $foto['fecha']; ?></span>
                            </div>
                            <p class="text-sm text-slate-500 font-light truncate"><?php echo $foto['alt']; ?></p>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>

            <div class="mt-20 pt-8 border-t border-slate-200 text-center">
                <span class="text-xs text-slate-400 font-light uppercase ">
                    Fuente: Archivo Histórico y Documental Institucional UNSL
                </span>
            </div>

        </div>
    </section>

</main>

<div id="lightbox" class="fixed inset-0 bg-slate-900/95 backdrop-blur-md z-[100] hidden items-center justify-center p-4" role="dialog" aria-modal="true">

    <button id="close-lightbox" class="absolute top-6 right-6 p-2 text-slate-400 hover:text-white transition-colors z-50" aria-label="Cerrar galería">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>

    <div class="flex items-center justify-between w-full max-w-7xl gap-4 relative">

        <button id="prev-image" class="absolute left-0 md:static p-3 text-slate-400 hover:text-white transition-colors z-10 bg-slate-900/50 md:bg-transparent rounded-full" aria-label="Imagen anterior">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>

        <div class="max-h-[90vh] flex flex-col items-center w-full px-12 md:px-0">
            <img id="lightbox-image" src="" alt="" class="max-w-full max-h-[75vh] object-contain shadow-2xl">
            <div class="mt-6 text-center">
                <h4 id="lightbox-title" class="text-white text-xl font-medium tracking-tight mb-1"></h4>
                <p id="lightbox-caption" class="text-slate-400 text-sm font-light"></p>
            </div>
        </div>

        <button id="next-image" class="absolute right-0 md:static p-3 text-slate-400 hover:text-white transition-colors z-10 bg-slate-900/50 md:bg-transparent rounded-full" aria-label="Siguiente imagen">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = document.getElementById('lightbox-image');
        const lightboxTitle = document.getElementById('lightbox-title');
        const lightboxCaption = document.getElementById('lightbox-caption');
        const items = document.querySelectorAll('.gallery-item');
        let currentIndex = 0;

        items.forEach((item, index) => {
            item.addEventListener('click', () => {
                const img = item.querySelector('img');
                const title = item.querySelector('h3').innerText;
                const desc = item.querySelector('p').innerText;

                lightboxImage.src = img.src;
                lightboxTitle.innerText = title;
                lightboxCaption.innerText = desc;

                currentIndex = index;
                lightbox.classList.remove('hidden');
                lightbox.classList.add('flex');
                document.body.style.overflow = 'hidden';
            });
        });

        const closeBtn = document.getElementById('close-lightbox');
        const nextBtn = document.getElementById('next-image');
        const prevBtn = document.getElementById('prev-image');

        const close = () => {
            lightbox.classList.add('hidden');
            lightbox.classList.remove('flex');
            document.body.style.overflow = '';
        };

        const navigate = (direction) => {
            currentIndex = (currentIndex + direction + items.length) % items.length;
            const newItem = items[currentIndex];
            lightboxImage.src = newItem.querySelector('img').src;
            lightboxTitle.innerText = newItem.querySelector('h3').innerText;
            lightboxCaption.innerText = newItem.querySelector('p').innerText;
        };

        closeBtn.addEventListener('click', close);
        nextBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            navigate(1);
        });
        prevBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            navigate(-1);
        });

        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) close();
        });

        document.addEventListener('keydown', (e) => {
            if (lightbox.classList.contains('hidden')) return;
            if (e.key === 'Escape') close();
            if (e.key === 'ArrowRight') navigate(1);
            if (e.key === 'ArrowLeft') navigate(-1);
        });
    });
</script>

<?php get_footer(); ?>