<?php
/**
 * Template Name: Historia del Camping
 * Description: Archivo Histórico del Complejo Turístico La Florida
 */

get_header();
?>

<section class="relative bg-[#1a4731] text-white py-20 border-b-4 border-green-700">
    <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'40\' height=\'40\' viewBox=\'0 0 40 40\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\' fill-rule=\'evenodd\'%3E%3Cpath d=\'M0 40L40 0H20L0 20M40 40V20L20 40\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <nav class="flex justify-center items-center gap-2 text-sm text-green-200 mb-6">
                <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors">Inicio</a>
                <span>/</span>
                <a href="<?php echo home_url('/camping-universitario'); ?>" class="hover:text-white transition-colors">Camping</a>
                <span>/</span>
                <span class="text-white font-medium">Historia</span>
            </nav>

            <h1 class="text-3xl md:text-5xl font-bold mb-6 serif tracking-wide">
                Archivo Histórico
            </h1>
            
            <div class="w-16 h-1 bg-green-500 mx-auto mb-6"></div>

            <p class="text-xl text-gray-300 max-w-2xl mx-auto font-light leading-relaxed">
                Crónica del desarrollo y construcción del Complejo Turístico y Recreativo La Florida, un legado para la comunidad universitaria.
            </p>
        </div>
    </div>
</section>

<section class="py-16 bg-white border-b border-gray-200">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="flex flex-col md:flex-row gap-8 items-center">
                <div class="md:w-1/4 text-center md:text-left">
                    <div class="inline-block p-4 border-2 border-green-700 rounded-lg">
                        <span class="block text-4xl font-bold text-green-800">1988</span>
                        <span class="block text-sm text-gray-500 uppercase mt-1">Inicio del Proyecto</span>
                    </div>
                </div>
                <div class="md:w-3/4">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Génesis del Proyecto</h2>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        El Complejo Turístico La Florida nace como una iniciativa para brindar un espacio de esparcimiento y conexión con la naturaleza. A través de los años, se ha transformado mediante obras de infraestructura clave que hoy permiten disfrutar de un servicio de calidad.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            
            <div class="relative border-l-2 border-gray-300 ml-4 md:ml-6 space-y-12">
                
                <div class="relative pl-8 md:pl-12">
                    <div class="absolute -left-[9px] top-0 w-5 h-5 bg-green-600 rounded-full border-4 border-white"></div>
                    
                    <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                        <span class="text-sm font-bold text-green-700 uppercase tracking-wide mb-2 block">Fase I</span>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Infraestructura Base</h3>
                        <p class="text-gray-600 mb-4">
                            Se establecieron los cimientos del complejo. Esta etapa incluyó la construcción de quinchos, baterías de baños, asadores y la casa de ingreso para el cuidador.
                        </p>
                        <ul class="grid sm:grid-cols-2 gap-2 text-sm text-gray-500">
                            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Planta de agua potable</li>
                            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Red eléctrica e iluminación</li>
                        </ul>
                    </div>
                </div>

                <div class="relative pl-8 md:pl-12">
                    <div class="absolute -left-[9px] top-0 w-5 h-5 bg-green-600 rounded-full border-4 border-white"></div>
                    
                    <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                        <span class="text-sm font-bold text-green-700 uppercase tracking-wide mb-2 block">Medio Ambiente</span>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Forestación</h3>
                        <p class="text-gray-600">
                            Se llevó a cabo un plan intensivo de forestación con más de <strong>5.000 especies</strong>, transformando el terreno en el pulmón verde que conocemos hoy.
                        </p>
                    </div>
                </div>

                <div class="relative pl-8 md:pl-12">
                    <div class="absolute -left-[9px] top-0 w-5 h-5 bg-green-600 rounded-full border-4 border-white"></div>
                    
                    <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                        <span class="text-sm font-bold text-green-700 uppercase tracking-wide mb-2 block">1989</span>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Quincho Cerrado</h3>
                        <p class="text-gray-600">
                            Inauguración del salón de usos múltiples (Quincho Cerrado) con una superficie cubierta de <strong>200 m²</strong>, permitiendo actividades durante todo el año.
                        </p>
                    </div>
                </div>

                <div class="relative pl-8 md:pl-12">
                    <div class="absolute -left-[9px] top-0 w-5 h-5 bg-green-600 rounded-full border-4 border-white"></div>
                    
                    <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                        <span class="text-sm font-bold text-green-700 uppercase tracking-wide mb-2 block">Mayo 1990</span>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Consolidación de Servicios</h3>
                        <p class="text-gray-600">
                            Habilitación de la cocina equipada, nuevos asadores, ampliación de sanitarios y barras de servicio, completando la infraestructura básica para la concesión del complejo.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<section class="py-16 bg-white border-t border-gray-200">
    <div class="container mx-auto px-4">
        <div class="max-w-7xl mx-auto">

            <div class="text-center mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Registro Fotográfico</h2>
                <div class="w-16 h-1 bg-gray-200 mx-auto"></div>
                <p class="text-gray-500 mt-4 text-sm uppercase tracking-widest">Archivo Documental</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $fotos = array(
                    ['id' => 1, 'alt' => 'Obras iniciales', 'titulo' => 'Movimiento de Suelos', 'fecha' => 'Fase I'],
                    ['id' => 2, 'alt' => 'Estructura de quinchos', 'titulo' => 'Estructura de Quinchos', 'fecha' => 'Fase I'],
                    ['id' => 3, 'alt' => 'Forestación temprana', 'titulo' => 'Inicio de Forestación', 'fecha' => '1988'],
                    ['id' => 4, 'alt' => 'Instalaciones sanitarias', 'titulo' => 'Obra Sanitaria', 'fecha' => 'Fase I'],
                    ['id' => 5, 'alt' => 'Quincho cerrado', 'titulo' => 'Techado del SUM', 'fecha' => '1989'],
                    ['id' => 6, 'alt' => 'Vista del dique', 'titulo' => 'Entorno Natural', 'fecha' => '1990'],
                    ['id' => 7, 'alt' => 'Cocina', 'titulo' => 'Equipamiento de Cocina', 'fecha' => 'Mayo 1990'],
                    ['id' => 8, 'alt' => 'Asadores', 'titulo' => 'Zona de Asadores', 'fecha' => '1990'],
                    ['id' => 9, 'alt' => 'Planta tratamiento', 'titulo' => 'Infraestructura de Agua', 'fecha' => 'Fase I'],
                );

                foreach ($fotos as $index => $foto) :
                    // Simulación de URL de imagen (reemplazar con función real)
                    $imagen_url = get_template_directory_uri() . '/assets/images/camping/archivo(' . $foto['id'] . ').jpeg';
                ?>
                    <div class="gallery-item cursor-pointer group" data-index="<?php echo $index; ?>">
                        <div class="aspect-[4/3] bg-gray-100 overflow-hidden rounded border border-gray-200 relative">
                            <img 
                                src="<?php echo esc_url($imagen_url); ?>" 
                                alt="<?php echo esc_attr($foto['alt']); ?>" 
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 filter grayscale group-hover:grayscale-0"
                            >
                            <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-300"></div>
                            
                            <div class="absolute top-3 right-3 bg-white/90 p-2 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300 shadow-sm">
                                <svg class="w-4 h-4 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"></path></svg>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="flex justify-between items-baseline">
                                <h3 class="text-sm font-bold text-gray-900"><?php echo $foto['titulo']; ?></h3>
                                <span class="text-xs font-mono text-green-700 bg-green-50 px-2 py-0.5 rounded border border-green-100"><?php echo $foto['fecha']; ?></span>
                            </div>
                            <p class="text-xs text-gray-500 mt-1 truncate"><?php echo $foto['alt']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <div class="mt-16 pt-8 border-t border-gray-200 flex items-center gap-4 justify-center text-gray-500">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 00-2 2v2M7 7h10"></path></svg>
                <span class="text-sm italic">Fuente: Archivo Histórico y Documental UNSL</span>
            </div>

        </div>
    </div>
</section>

<div id="lightbox" class="fixed inset-0 bg-slate-900/95 z-50 hidden items-center justify-center p-4 backdrop-blur-sm">
    <button id="close-lightbox" class="absolute top-4 right-4 p-2 text-gray-400 hover:text-white transition-colors z-50">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
    </button>

    <div class="flex items-center justify-between w-full max-w-7xl gap-4">
        <button id="prev-image" class="p-3 text-gray-400 hover:text-white hover:bg-white/10 rounded-full transition-all">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
        </button>

        <div class="max-h-[85vh] flex flex-col items-center">
            <img id="lightbox-image" src="" alt="" class="max-w-full max-h-[75vh] object-contain shadow-2xl border-4 border-white/5 rounded-sm">
            <div class="mt-4 text-center">
                <h4 id="lightbox-title" class="text-white text-lg font-medium tracking-wide"></h4>
                <p id="lightbox-caption" class="text-gray-400 text-sm mt-1 font-light"></p>
            </div>
        </div>

        <button id="next-image" class="p-3 text-gray-400 hover:text-white hover:bg-white/10 rounded-full transition-all">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </button>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    const lightboxTitle = document.getElementById('lightbox-title');
    const lightboxCaption = document.getElementById('lightbox-caption');
    
    // Datos de las imágenes (Sincronizar con PHP)
    const imagesData = [
        { src: '...', title: 'Movimiento de Suelos', desc: 'Fase I - Preparación del terreno' },
        // ... llenar con los datos reales o pasarlos vía data-attributes en el HTML
    ];

    // Recuperar datos directamente del DOM para evitar duplicar arrays
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
    nextBtn.addEventListener('click', (e) => { e.stopPropagation(); navigate(1); });
    prevBtn.addEventListener('click', (e) => { e.stopPropagation(); navigate(-1); });
    
    // Close on background click
    lightbox.addEventListener('click', (e) => {
        if(e.target === lightbox) close();
    });

    // Keyboard nav
    document.addEventListener('keydown', (e) => {
        if (lightbox.classList.contains('hidden')) return;
        if (e.key === 'Escape') close();
        if (e.key === 'ArrowRight') navigate(1);
        if (e.key === 'ArrowLeft') navigate(-1);
    });
});
</script>

<?php get_footer(); ?>