<?php
/**
 * Template Name: Departamento Contable
 */
get_header();
?>

<main class="bg-gray-50">

    <?php while (have_posts()) : the_post(); ?>

        <section class="relative bg-slate-800 text-white py-20 border-b-4 border-emerald-600">
            <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(rgba(255, 255, 255, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 255, 255, 0.1) 1px, transparent 1px); background-size: 20px 20px;"></div>
            
            <div class="container mx-auto px-4 relative z-10">
                <div class="max-w-4xl mx-auto text-center">
                    <nav class="flex justify-center items-center gap-2 text-sm text-gray-400 mb-6 font-sans uppercase tracking-widest text-xs">
                        <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors font-bold">INICIO</a>
                        <span class="text-gray-600">/</span>
                        <?php
                        // Lógica para detectar padres (Jerarquía)
                        global $post;
                        if (is_page() && $post->post_parent) {
                            // Obtener ancestros (padres, abuelos...)
                            $ancestors = get_post_ancestors($post->ID);
                            // Invertimos el orden para que vaya de Padre -> Hijo
                            $ancestors = array_reverse($ancestors);
                            foreach ($ancestors as $ancestor_id) {
                        ?>
                                <a href="<?php echo get_permalink($ancestor_id); ?>" class="hover:text-white transition-colors font-bold">
                                    <?php echo get_the_title($ancestor_id); ?>
                                </a>
                                <span class="text-gray-600">/</span>
                        <?php
                            }
                        }
                        ?>
                        <span class="text-white font-bold">
                            <?php the_title(); ?>
                        </span>
                    </nav>
                    <h1 class="text-3xl md:text-5xl font-bold mb-6 leading-tight  tracking-tight text-white">
                        <?php the_title(); ?>
                    </h1>
                    <div class="w-24 h-1 bg-[#416ed2] mx-auto mb-6"></div>
                    <div class="text-xl text-gray-300 max-w-2xl mx-auto font-light leading-relaxed font-sans">
                        <?php
                        if (has_excerpt()) {
                            echo get_the_excerpt();
                        } else {
                            // Fallback opcional si no cargaron extracto
                            echo 'Información institucional y servicios de ' . get_the_title();
                        }
                        ?>
                    </div>
                </div>
            </div>

        </section>

        <section class="py-16 bg-white border-b border-gray-200">
            <div class="container mx-auto px-4">
                <div class="max-w-5xl mx-auto">
                    
                    <div class="bg-white border-l-4 border-slate-500 shadow-sm rounded-r-lg p-8 flex flex-col md:flex-row items-start gap-8">
                        <div class="flex-1">
                            <h2 class="text-2xl font-bold text-slate-900 mb-4">Función Institucional</h2>
                            <p class="text-gray-600 text-lg leading-relaxed mb-6">
                                Esta oficina tiene una función crítica, ya que centraliza la <strong>administración financiera</strong> de toda la estructura de la Secretaría. Es el punto de convergencia donde se gestionan los recursos de las oficinas administrativas, asistenciales, de salud, deportivas y recreativas.
                            </p>
                            
                            <div class="inline-flex items-center gap-3 bg-slate-100 px-4 py-2 rounded-md border border-slate-200">
                                <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                <span class="text-sm font-semibold text-slate-700">Dependencia: Dirección Administrativo-Contable</span>
                            </div>
                        </div>
                        
                        <div class="hidden md:flex items-center justify-center w-1/3">
                            <div class="w-32 h-32 bg-emerald-50 rounded-full flex items-center justify-center">
                                <svg class="w-16 h-16 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl font-bold text-slate-900 mb-2">Áreas de Gestión</h2>
                        <p class="text-gray-500">Tareas principales a cargo del departamento</p>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        
                        <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm hover:border-emerald-500 hover:shadow-md transition-all duration-300 group">
                            <div class="w-12 h-12 bg-slate-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-emerald-600 transition-colors">
                                <svg class="w-6 h-6 text-slate-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Control y Administración</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                Supervisión contable y financiera de las cuentas corrientes de la SAEBU, asegurando transparencia y orden.
                            </p>
                        </div>

                        <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm hover:border-emerald-500 hover:shadow-md transition-all duration-300 group">
                            <div class="w-12 h-12 bg-slate-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-emerald-600 transition-colors">
                                <svg class="w-6 h-6 text-slate-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Pago de Becas</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                Gestión de pagos de Ayuda Económica, Beca CREER, Contraprestación y programa +Conectados.
                            </p>
                        </div>

                        <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm hover:border-emerald-500 hover:shadow-md transition-all duration-300 group">
                            <div class="w-12 h-12 bg-slate-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-emerald-600 transition-colors">
                                <svg class="w-6 h-6 text-slate-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Comedor Universitario</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                Manejo y control de la cuenta corriente del comedor, incluyendo la gestión de cobros y proveedores de alimentos.
                            </p>
                        </div>

                        <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm hover:border-emerald-500 hover:shadow-md transition-all duration-300 group">
                            <div class="w-12 h-12 bg-slate-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-emerald-600 transition-colors">
                                <svg class="w-6 h-6 text-slate-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Proveedores</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                Procesamiento y pago a proveedores de bienes y servicios de todas las áreas de la Secretaría.
                            </p>
                        </div>

                        <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm hover:border-emerald-500 hover:shadow-md transition-all duration-300 group">
                            <div class="w-12 h-12 bg-slate-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-emerald-600 transition-colors">
                                <svg class="w-6 h-6 text-slate-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Servicios Contratados</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                Administración de contratos de servicios externos, incluyendo mantenimiento y seguridad de la Residencia.
                            </p>
                        </div>

                        <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm hover:border-emerald-500 hover:shadow-md transition-all duration-300 group">
                            <div class="w-12 h-12 bg-slate-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-emerald-600 transition-colors">
                                <svg class="w-6 h-6 text-slate-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path></svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Complejo La Florida</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                Coordinación contable de ingresos y egresos del Complejo Turístico y Recreativo La Florida.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="max-w-5xl mx-auto">
                    <h2 class="text-2xl font-bold text-center text-slate-900 mb-10">Articulación Administrativa</h2>
                    
                    <div class="flex flex-col md:flex-row items-center justify-center gap-8">
                        <div class="flex flex-col gap-4 w-full md:w-1/3">
                            <div class="p-4 bg-gray-50 border border-gray-200 rounded text-center text-sm text-gray-600 font-medium">Administración</div>
                            <div class="p-4 bg-gray-50 border border-gray-200 rounded text-center text-sm text-gray-600 font-medium">Salud Estudiantil</div>
                            <div class="p-4 bg-gray-50 border border-gray-200 rounded text-center text-sm text-gray-600 font-medium">Deportes y Recreación</div>
                        </div>

                        <div class="hidden md:flex flex-col items-center justify-center text-slate-300">
                            <div class="w-8 h-0.5 bg-slate-300"></div>
                            <div class="h-20 w-0.5 bg-slate-300"></div>
                            <div class="w-8 h-0.5 bg-slate-300"></div>
                        </div>
                        
                        <div class="w-full md:w-1/3">
                            <div class="bg-slate-800 text-white p-8 rounded-lg text-center shadow-lg border-t-4 border-emerald-500">
                                <svg class="w-12 h-12 mx-auto mb-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                <h3 class="text-xl font-bold mb-1">Departamento Contable</h3>
                                <p class="text-slate-400 text-sm">Centro de Gestión Financiera</p>
                            </div>
                        </div>

                        <div class="hidden md:flex flex-col items-center justify-center text-slate-300">
                            <div class="w-8 h-0.5 bg-slate-300"></div>
                        </div>

                        <div class="w-full md:w-1/3">
                            <div class="p-6 bg-emerald-50 border border-emerald-200 rounded text-center">
                                <p class="text-emerald-800 font-semibold text-sm">Funcionamiento de Servicios</p>
                                <p class="text-xs text-emerald-600 mt-1">Becas, Comedor, Residencia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-gray-50 border-t border-gray-200">
            <div class="container mx-auto px-4 max-w-3xl">
                <h2 class="text-2xl font-bold text-center text-slate-900 mb-8">Preguntas Frecuentes</h2>
                
                <div class="space-y-3">
                    <details class="group bg-white border border-gray-200 rounded-lg">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-4 hover:bg-gray-50 transition-colors">
                            <span>¿Cuándo se realizan los pagos de becas?</span>
                            <span class="transition group-open:rotate-180"><svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg></span>
                        </summary>
                        <div class="text-gray-600 mt-3 group-open:animate-fadeIn p-4 pt-0 text-sm">
                            El Departamento Contable procesa los pagos de becas de manera mensual. Las fechas específicas pueden variar, pero siempre se gestionan para asegurar la recepción puntual del beneficio.
                        </div>
                    </details>

                    <details class="group bg-white border border-gray-200 rounded-lg">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-4 hover:bg-gray-50 transition-colors">
                            <span>¿Cómo funciona la cuenta corriente del comedor?</span>
                            <span class="transition group-open:rotate-180"><svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg></span>
                        </summary>
                        <div class="text-gray-600 mt-3 group-open:animate-fadeIn p-4 pt-0 text-sm">
                            Nos encargamos del control de saldos y gestión de cobros del sistema de viandas, asegurando la sostenibilidad del servicio de alimentación.
                        </div>
                    </details>

                    <details class="group bg-white border border-gray-200 rounded-lg">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-4 hover:bg-gray-50 transition-colors">
                            <span>¿Qué becas se gestionan?</span>
                            <span class="transition group-open:rotate-180"><svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg></span>
                        </summary>
                        <div class="text-gray-600 mt-3 group-open:animate-fadeIn p-4 pt-0 text-sm">
                            Gestionamos financieramente las Becas de Ayuda Económica, CREER, Contraprestación de Servicios y el programa +Conectados.
                        </div>
                    </details>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white border-t border-gray-200">
            <div class="container mx-auto px-4 text-center max-w-3xl">
                <div class="inline-block p-2 rounded-full bg-slate-100 mb-4">
                    <div class="w-12 h-12 bg-slate-200 rounded-full flex items-center justify-center text-slate-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-slate-900">Gustavo Garay</h3>
                <p class="text-sm text-slate-500 mb-8">Responsable Departamento Contable</p>

                <div class="flex justify-center gap-4">
                    <a href="mailto:contable@saebu.unsl.edu.ar" class="inline-flex items-center gap-2 px-6 py-3 bg-slate-800 text-white rounded-md hover:bg-slate-700 transition-colors font-medium">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        contable@saebu.unsl.edu.ar
                    </a>
                    <a href="tel:02664520300" class="inline-flex items-center gap-2 px-6 py-3 border border-slate-300 text-slate-700 rounded-md hover:bg-slate-50 transition-colors font-medium">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        0266 452-0300
                    </a>
                </div>
            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>