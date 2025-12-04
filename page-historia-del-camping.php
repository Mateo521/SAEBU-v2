<?php

/**
 * Template Name: Historia del Camping
 * Description: Historia del Complejo Turístico La Florida
 */

get_header();
?>

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-emerald-600 via-green-700 to-teal-800 text-white py-20">
    <div class="absolute inset-0 bg-black/30"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Breadcrumb -->
            <nav class="flex justify-center mb-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-2 text-sm">
                    <li>
                        <a href="<?php echo home_url('/'); ?>" class="text-green-200 hover:text-white transition-colors">Inicio</a>
                    </li>
                    <li>
                        <span class="text-green-300">/</span>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/camping-universitario'); ?>" class="text-green-200 hover:text-white transition-colors">Camping Universitario</a>
                    </li>
                    <li>
                        <span class="text-green-300">/</span>
                    </li>
                    <li class="text-white font-semibold">Historia</li>
                </ol>
            </nav>

            <!-- Icono decorativo -->
            <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl mb-6">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
            </div>

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                Archivo Histórico
            </h1>
            <p class="text-lg md:text-xl text-green-100 max-w-2xl mx-auto">
                Complejo Turístico y Recreativo La Florida
            </p>
        </div>
    </div>

</section>

<!-- Introducción -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-8 md:p-12 border border-green-100 shadow-lg">
                <div class="flex items-start gap-4 mb-6">
                    <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                            Un Viaje por la Historia
                        </h2>
                        <p class="text-lg text-gray-700 leading-relaxed">
                            Te invitamos a conocer una parte del <span class="font-semibold text-green-700">Complejo Turístico y Recreativo La Florida</span>, un espacio que ha sido testigo de momentos inolvidables para generaciones de estudiantes universitarios.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Línea de Tiempo -->
<section class="py-20 bg-gradient-to-br from-slate-50 to-green-50">
    <div class="container mx-auto px-4">
        <div class="max-w-5xl mx-auto">

            <!-- Título de sección -->
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-2 bg-green-100 text-green-700 rounded-full text-sm font-semibold mb-4">
                    Timeline
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Desarrollo y Construcción
                </h2>
            </div>

            <!-- Timeline Items -->
            <div class="space-y-12">

                <!-- Fase Inicial -->
                <div class="relative pl-8 md:pl-12 border-l-4 border-green-500">
                    <div class="absolute -left-3 top-0 w-6 h-6 bg-green-500 rounded-full border-4 border-white shadow-lg"></div>
                    <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-xl transition-shadow">
                        <span class="inline-block px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold mb-3">
                            Fase Inicial
                        </span>
                        <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">Construcción de Infraestructura Base</h3>
                        <div class="prose prose-green max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-4">
                                En sus inicios se construyeron las instalaciones fundamentales que darían forma al complejo:
                            </p>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Quinchos para reuniones y eventos</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Sanitarios modernos</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Asadores equipados</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Casa de ingreso para el cuidador</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Planta de tratamiento de efluentes</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Planta de agua potable</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Red de electrificación e iluminación completa</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Forestación -->
                <div class="relative pl-8 md:pl-12 border-l-4 border-green-500">
                    <div class="absolute -left-3 top-0 w-6 h-6 bg-green-500 rounded-full border-4 border-white shadow-lg"></div>
                    <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-xl transition-shadow">
                        <span class="inline-block px-3 py-1 bg-emerald-100 text-emerald-700 rounded-full text-xs font-semibold mb-3">
                            Forestación
                        </span>
                        <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">Creación del Espacio Verde</h3>
                        <div class="bg-gradient-to-br from-emerald-50 to-green-50 rounded-xl p-6 border-l-4 border-emerald-500">
                            <div class="flex items-center gap-4 mb-3">
                                <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-3xl font-bold text-emerald-700">+5,000</p>
                                    <p class="text-sm text-gray-600">Especies vegetales plantadas</p>
                                </div>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                Un ambicioso proyecto de forestación que transformó el paisaje, creando un oasis verde que hoy caracteriza al complejo.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 1989 -->
                <div class="relative pl-8 md:pl-12 border-l-4 border-green-500">
                    <div class="absolute -left-3 top-0 w-6 h-6 bg-green-500 rounded-full border-4 border-white shadow-lg"></div>
                    <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-xl transition-shadow">
                        <span class="inline-block px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-semibold mb-3">
                            1989
                        </span>
                        <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">Inauguración del Quincho Cerrado</h3>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-6">
                                <div class="flex items-center gap-3 mb-3">
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span class="text-2xl font-bold text-blue-700">1989</span>
                                </div>
                                <p class="text-gray-700">Año de la inauguración</p>
                            </div>
                            <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6">
                                <div class="flex items-center gap-3 mb-3">
                                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                                    </svg>
                                    <span class="text-2xl font-bold text-purple-700">200 m²</span>
                                </div>
                                <p class="text-gray-700">Superficie cubierta</p>
                            </div>
                        </div>
                        <p class="text-gray-700 leading-relaxed mt-4">
                            Se inauguró el quincho cerrado, un espacio techado de 200 metros cuadrados diseñado para eventos y reuniones durante todo el año.
                        </p>
                    </div>
                </div>

                <!-- 1990 -->
                <div class="relative pl-8 md:pl-12 border-l-4 border-green-500">
                    <div class="absolute -left-3 top-0 w-6 h-6 bg-green-500 rounded-full border-4 border-white shadow-lg"></div>
                    <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-xl transition-shadow">
                        <span class="inline-block px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-semibold mb-3">
                            Mayo 1990
                        </span>
                        <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">Ampliación de Servicios</h3>
                        <p class="text-gray-700 leading-relaxed mb-6">
                            Se inauguraron nuevas instalaciones que completaron el equipamiento del complejo:
                        </p>
                        <div class="grid sm:grid-cols-2 gap-4 mb-6">
                            <div class="flex items-center gap-3 bg-orange-50 rounded-lg p-4">
                                <svg class="w-6 h-6 text-orange-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700 font-medium">Cocina equipada</span>
                            </div>
                            <div class="flex items-center gap-3 bg-orange-50 rounded-lg p-4">
                                <svg class="w-6 h-6 text-orange-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700 font-medium">Asadores nuevos</span>
                            </div>
                            <div class="flex items-center gap-3 bg-orange-50 rounded-lg p-4">
                                <svg class="w-6 h-6 text-orange-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700 font-medium">Sanitarios adicionales</span>
                            </div>
                            <div class="flex items-center gap-3 bg-orange-50 rounded-lg p-4">
                                <svg class="w-6 h-6 text-orange-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700 font-medium">Barras de servicio</span>
                            </div>
                        </div>
                        <div class="bg-gradient-to-r from-orange-50 to-amber-50 rounded-xl p-6 border-l-4 border-orange-500">
                            <p class="text-gray-700 leading-relaxed">
                                <span class="font-semibold">Integración completa:</span> Todos estos elementos se unificaron con el quincho existente, creando un espacio cohesivo y funcional. Además, se encontraba en preparación el llamado a licitación para otorgar la concesión del complejo.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Galería de Fotos -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-7xl mx-auto">

            <!-- Título de galería -->
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-2 bg-green-100 text-green-700 rounded-full text-sm font-semibold mb-4">
                    Galería Histórica
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Archivo Fotográfico
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Imágenes históricas del desarrollo y construcción del complejo
                </p>
            </div>

            <!-- Grid de fotos estilo Masonry -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="gallery">

                <?php
                // Array de 12 fotos de ejemplo
                $fotos = array(
                    array('id' => 1, 'alt' => 'Vista panorámica del camping en construcción', 'descripcion' => 'Primeras etapas de construcción del complejo'),
                    array('id' => 2, 'alt' => 'Construcción de quinchos', 'descripcion' => 'Edificación de los quinchos principales'),
                    array('id' => 3, 'alt' => 'Plantación de árboles', 'descripcion' => 'Proceso de forestación del predio'),
                    array('id' => 4, 'alt' => 'Instalación de servicios', 'descripcion' => 'Montaje de infraestructura de servicios'),
                    array('id' => 5, 'alt' => 'Quincho cerrado en construcción', 'descripcion' => 'Levantamiento del quincho cerrado - 1989'),
                    array('id' => 6, 'alt' => 'Vista de sanitarios', 'descripcion' => 'Instalaciones sanitarias nuevas'),
                    array('id' => 7, 'alt' => 'Cocina equipada', 'descripcion' => 'Cocina inaugurada en mayo de 1990'),
                    array('id' => 8, 'alt' => 'Asadores tradicionales', 'descripcion' => 'Zona de asadores al aire libre'),
                    array('id' => 9, 'alt' => 'Planta de tratamiento', 'descripcion' => 'Planta de tratamiento de efluentes'),
                    array('id' => 10, 'alt' => 'Sistema de iluminación', 'descripcion' => 'Red de electrificación del complejo'),
                    array('id' => 11, 'alt' => 'Entrada principal', 'descripcion' => 'Acceso principal al camping'),
                    array('id' => 12, 'alt' => 'Vista general', 'descripcion' => 'Panorámica del complejo terminado'),
                );

                foreach ($fotos as $index => $foto) :
                    // Obtener la imagen real del WordPress Media Library
                    // Reemplaza estos IDs con los IDs reales de tus imágenes
                    $imagen_url = get_template_directory_uri() . '/assets/images/camping/archivo(' . $foto['id'] . ').jpeg';
                    // O si ya tienes las imágenes subidas, usa: wp_get_attachment_image_src($foto_id, 'large');
                ?>
                    <div class="group cursor-pointer gallery-item" data-index="<?php echo $index; ?>">
                        <div class="relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 bg-gray-100">
                            <!-- Aspecto ratio variable para efecto masonry -->
                            <div class="aspect-<?php echo ($index % 3 == 0) ? '[4/3]' : (($index % 3 == 1) ? 'square' : '[3/4]'); ?>">
                                <img
                                    src="<?php echo esc_url($imagen_url); ?>"
                                    alt="<?php echo esc_attr($foto['alt']); ?>"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                    loading="lazy" />
                                <!-- Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                        <p class="font-semibold mb-1"><?php echo esc_html($foto['descripcion']); ?></p>
                                        <p class="text-sm text-gray-300">Click para ampliar</p>
                                    </div>
                                </div>
                                <!-- Icono de zoom -->
                                <div class="absolute top-4 right-4 w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div id="lightbox" class="fixed inset-0 bg-black/95 z-50 hidden items-center justify-center p-4">
    <button id="close-lightbox" class="absolute top-4 right-4 w-12 h-12 bg-white/10 hover:bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center transition-colors z-10">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>

    <button id="prev-image" class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/10 hover:bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center transition-colors">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
    </button>

    <div class="max-w-6xl max-h-[90vh] w-full">
        <img id="lightbox-image" src="" alt="" class="w-full h-full object-contain rounded-lg">
        <div class="text-center mt-4">
            <p id="lightbox-caption" class="text-white text-lg font-semibold"></p>
            <p id="lightbox-counter" class="text-gray-400 text-sm mt-2"></p>
        </div>
    </div>

    <button id="next-image" class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/10 hover:bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center transition-colors">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>
</div>

<!-- Fuente -->
<section class="py-12 bg-gradient-to-br from-slate-50 to-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-2xl p-8 shadow-lg border-l-4 border-green-500">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 uppercase tracking-wider font-semibold mb-2">Fuente</p>
                        <p class="text-lg font-semibold text-gray-900">Archivo Histórico y Documental UNSL</p>
                        <p class="text-sm text-gray-600 mt-2">Universidad Nacional de San Luis</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gradient-to-br from-green-600 to-emerald-700">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center text-white">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                ¿Querés conocer más sobre el Camping?
            </h2>
            <p class="text-lg text-green-100 mb-8">
                Descubrí todas las instalaciones y servicios que tenemos para ofrecerte
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo home_url('/camping-universitario'); ?>"
                    class="inline-flex items-center justify-center gap-2 bg-white text-green-600 px-8 py-4 rounded-xl font-bold hover:bg-green-50 transition-all hover:scale-105 shadow-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <span>Volver al Camping</span>
                </a>
                <a href="<?php echo home_url('/contacto'); ?>"
                    class="inline-flex items-center justify-center gap-2 bg-green-500 text-white px-8 py-4 rounded-xl font-bold hover:bg-green-400 transition-all hover:scale-105 shadow-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <span>Contactanos</span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>

<script>
    // Lightbox functionality
    document.addEventListener('DOMContentLoaded', function() {
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = document.getElementById('lightbox-image');
        const lightboxCaption = document.getElementById('lightbox-caption');
        const lightboxCounter = document.getElementById('lightbox-counter');
        const closeLightbox = document.getElementById('close-lightbox');
        const prevImage = document.getElementById('prev-image');
        const nextImage = document.getElementById('next-image');
        const galleryItems = document.querySelectorAll('.gallery-item');

        let currentIndex = 0;
        const totalImages = galleryItems.length;

        // Datos de las imágenes
        const imagesData = [{
                alt: 'Vista panorámica del camping en construcción',
                desc: 'Primeras etapas de construcción del complejo'
            },
            {
                alt: 'Construcción de quinchos',
                desc: 'Edificación de los quinchos principales'
            },
            {
                alt: 'Plantación de árboles',
                desc: 'Proceso de forestación del predio'
            },
            {
                alt: 'Instalación de servicios',
                desc: 'Montaje de infraestructura de servicios'
            },
            {
                alt: 'Quincho cerrado en construcción',
                desc: 'Levantamiento del quincho cerrado - 1989'
            },
            {
                alt: 'Vista de sanitarios',
                desc: 'Instalaciones sanitarias nuevas'
            },
            {
                alt: 'Cocina equipada',
                desc: 'Cocina inaugurada en mayo de 1990'
            },
            {
                alt: 'Asadores tradicionales',
                desc: 'Zona de asadores al aire libre'
            },
            {
                alt: 'Planta de tratamiento',
                desc: 'Planta de tratamiento de efluentes'
            },
            {
                alt: 'Sistema de iluminación',
                desc: 'Red de electrificación del complejo'
            },
            {
                alt: 'Entrada principal',
                desc: 'Acceso principal al camping'
            },
            {
                alt: 'Vista general',
                desc: 'Panorámica del complejo terminado'
            }
        ];

        // Abrir lightbox
        galleryItems.forEach((item, index) => {
            item.addEventListener('click', function() {
                currentIndex = index;
                openLightbox();
            });
        });

        function openLightbox() {
            const img = galleryItems[currentIndex].querySelector('img');
            lightboxImage.src = img.src;
            lightboxImage.alt = imagesData[currentIndex].alt;
            lightboxCaption.textContent = imagesData[currentIndex].desc;
            lightboxCounter.textContent = `${currentIndex + 1} / ${totalImages}`;
            lightbox.classList.remove('hidden');
            lightbox.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        // Cerrar lightbox
        closeLightbox.addEventListener('click', function() {
            lightbox.classList.add('hidden');
            lightbox.classList.remove('flex');
            document.body.style.overflow = '';
        });

        // Cerrar con ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !lightbox.classList.contains('hidden')) {
                lightbox.classList.add('hidden');
                lightbox.classList.remove('flex');
                document.body.style.overflow = '';
            }
        });

        // Cerrar al hacer click en el fondo
        lightbox.addEventListener('click', function(e) {
            if (e.target === lightbox) {
                lightbox.classList.add('hidden');
                lightbox.classList.remove('flex');
                document.body.style.overflow = '';
            }
        });

        // Imagen anterior
        prevImage.addEventListener('click', function(e) {
            e.stopPropagation();
            currentIndex = (currentIndex - 1 + totalImages) % totalImages;
            updateLightboxImage();
        });

        // Imagen siguiente
        nextImage.addEventListener('click', function(e) {
            e.stopPropagation();
            currentIndex = (currentIndex + 1) % totalImages;
            updateLightboxImage();
        });

        // Navegación con teclado
        document.addEventListener('keydown', function(e) {
            if (!lightbox.classList.contains('hidden')) {
                if (e.key === 'ArrowLeft') {
                    currentIndex = (currentIndex - 1 + totalImages) % totalImages;
                    updateLightboxImage();
                } else if (e.key === 'ArrowRight') {
                    currentIndex = (currentIndex + 1) % totalImages;
                    updateLightboxImage();
                }
            }
        });

        function updateLightboxImage() {
            const img = galleryItems[currentIndex].querySelector('img');
            lightboxImage.style.opacity = '0';
            setTimeout(() => {
                lightboxImage.src = img.src;
                lightboxImage.alt = imagesData[currentIndex].alt;
                lightboxCaption.textContent = imagesData[currentIndex].desc;
                lightboxCounter.textContent = `${currentIndex + 1} / ${totalImages}`;
                lightboxImage.style.opacity = '1';
            }, 150);
        }

        // Transición suave de opacidad
        lightboxImage.style.transition = 'opacity 0.3s ease';
    });

    // Lazy loading con Intersection Observer
    document.addEventListener('DOMContentLoaded', function() {
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src || img.src;
                        img.classList.add('fade-in');
                        observer.unobserve(img);
                    }
                });
            }, {
                rootMargin: '50px'
            });

            document.querySelectorAll('.gallery-item img').forEach(img => {
                imageObserver.observe(img);
            });
        }
    });
</script>

<style>
    /* Animaciones adicionales */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-in {
        animation: fadeIn 0.6s ease-out;
    }

    /* Smooth scroll */
    html {
        scroll-behavior: smooth;
    }

    /* Hover effect mejorado en timeline */
    .timeline-item {
        transition: all 0.3s ease;
    }

    .timeline-item:hover {
        transform: translateX(8px);
    }

    /* Lightbox backdrop blur */
    #lightbox {
        backdrop-filter: blur(10px);
    }

    /* Mejora de accesibilidad */
    .gallery-item:focus {
        outline: 3px solid #10b981;
        outline-offset: 4px;
        border-radius: 1rem;
    }

    button:focus {
        outline: 2px solid #fff;
        outline-offset: 2px;
    }

    /* Loading state para imágenes */
    .gallery-item img {
        background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
        background-size: 200% 100%;
        animation: loading 1.5s infinite;
    }

    @keyframes loading {
        0% {
            background-position: 200% 0;
        }

        100% {
            background-position: -200% 0;
        }
    }

    .gallery-item img[src] {
        animation: none;
        background: none;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {

        #prev-image,
        #next-image {
            width: 40px;
            height: 40px;
        }

        #close-lightbox {
            top: 1rem;
            right: 1rem;
            width: 40px;
            height: 40px;
        }
    }
</style>