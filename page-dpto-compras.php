<?php
/**
 * Template Name: Departamento de Compras
 */
get_header();
?>

<main class="bg-gray-50">

    <?php while (have_posts()) : the_post(); ?>

        <section class="relative bg-slate-900 text-white py-20 border-b-4 border-indigo-600">
            <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'40\' height=\'40\' viewBox=\'0 0 40 40\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\' fill-rule=\'evenodd\'%3E%3Cpath d=\'M0 40L40 0H20L0 20M40 40V20L20 40\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
            
            <div class="container mx-auto px-4 relative z-10">
                <div class="max-w-4xl mx-auto text-center">
                    <nav class="flex justify-center items-center gap-2 text-sm text-slate-400 mb-6">
                        <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors">Inicio</a>
                        <span>/</span>
                        <span class="text-white font-medium">Administración</span>
                    </nav>

                    <h1 class="text-3xl md:text-5xl font-bold mb-6 leading-tight">
                        Departamento de Compras
                    </h1>
                    
                    <div class="w-24 h-1 bg-indigo-600 mx-auto mb-6"></div>

                    <p class="text-xl text-slate-300 max-w-2xl mx-auto font-light leading-relaxed">
                        Gestión centralizada de adquisiciones, licitaciones y suministros para el funcionamiento integral de la Secretaría.
                    </p>

                    <div class="mt-8">
                        <a href="https://compras.unsl.edu.ar" target="_blank" class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-md font-bold transition-all shadow-lg border border-indigo-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                            Ir al Portal de Compras UNSL
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white border-b border-gray-200">
            <div class="container mx-auto px-4">
                <div class="max-w-5xl mx-auto">
                    <div class="flex flex-col md:flex-row gap-12 items-start">
                        <div class="flex-1">
                            <h2 class="text-2xl font-bold text-slate-900 mb-4 border-l-4 border-indigo-600 pl-4">Función del Área</h2>
                            <p class="text-gray-600 text-lg leading-relaxed mb-6">
                                El Departamento de Compras ejecuta los procesos administrativos necesarios para la adquisición de bienes y servicios requeridos por todas las áreas de la SAEBU.
                            </p>
                            <p class="text-gray-600 text-lg leading-relaxed">
                                Desde insumos alimenticios para el Comedor Universitario hasta equipamiento deportivo complejo, asegurando el cumplimiento de la normativa vigente y la transparencia en la gestión pública.
                            </p>
                        </div>
                        
                        <div class="w-full md:w-1/3 bg-slate-50 border border-gray-200 rounded-lg p-6">
                            <h3 class="font-bold text-slate-900 mb-4">Áreas Asistidas</h3>
                            <ul class="space-y-3">
                                <li class="flex items-center gap-3 text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-indigo-500 rounded-full"></div>
                                    Comedor Universitario
                                </li>
                                <li class="flex items-center gap-3 text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-indigo-500 rounded-full"></div>
                                    Departamento de Deportes
                                </li>
                                <li class="flex items-center gap-3 text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-indigo-500 rounded-full"></div>
                                    Complejo La Florida
                                </li>
                                <li class="flex items-center gap-3 text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-indigo-500 rounded-full"></div>
                                    Centros de Salud
                                </li>
                                <li class="flex items-center gap-3 text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-indigo-500 rounded-full"></div>
                                    Administración Central
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl font-bold text-slate-900">Modalidades de Adquisición</h2>
                        <p class="text-gray-500 mt-2">Procedimientos administrativos según normativa</p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="bg-white p-8 rounded-lg border border-gray-200 shadow-sm hover:border-indigo-500 transition-all group">
                            <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-lg flex items-center justify-center mb-6 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-3">Licitación Privada</h3>
                            <p class="text-sm text-gray-600 mb-4 leading-relaxed">
                                Procedimiento formal utilizado para compras de gran volumen, como los insumos alimenticios del comedor. Requiere pliegos y múltiples oferentes.
                            </p>
                            <span class="text-xs font-semibold text-indigo-600 uppercase tracking-wide">Alta Complejidad</span>
                        </div>

                        <div class="bg-white p-8 rounded-lg border border-gray-200 shadow-sm hover:border-indigo-500 transition-all group">
                            <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-lg flex items-center justify-center mb-6 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-3">Compra Directa</h3>
                            <p class="text-sm text-gray-600 mb-4 leading-relaxed">
                                Procedimiento ágil por compulsa abreviada. Se utiliza para necesidades urgentes, montos menores o proveedores específicos.
                            </p>
                            <span class="text-xs font-semibold text-indigo-600 uppercase tracking-wide">Respuesta Rápida</span>
                        </div>

                        <div class="bg-white p-8 rounded-lg border border-gray-200 shadow-sm hover:border-indigo-500 transition-all group">
                            <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-lg flex items-center justify-center mb-6 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-3">Plan Anual</h3>
                            <p class="text-sm text-gray-600 mb-4 leading-relaxed">
                                Planificación estratégica de adquisiciones recurrentes para todo el año fiscal, optimizando recursos y tiempos administrativos.
                            </p>
                            <span class="text-xs font-semibold text-indigo-600 uppercase tracking-wide">Planificación</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white border-t border-gray-200">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-2xl font-bold text-center text-slate-900 mb-12">Circuito Administrativo</h2>
                    
                    <div class="relative">
                        <div class="hidden md:block absolute top-1/2 left-0 w-full h-0.5 bg-gray-200 -translate-y-1/2 z-0"></div>

                        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative z-10">
                            <div class="bg-white p-4 text-center">
                                <div class="w-10 h-10 bg-indigo-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold border-4 border-white">1</div>
                                <h4 class="font-bold text-slate-900 mb-2">Solicitud</h4>
                                <p class="text-xs text-gray-500">El departamento requirente envía el pedido formal.</p>
                            </div>

                            <div class="bg-white p-4 text-center">
                                <div class="w-10 h-10 bg-indigo-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold border-4 border-white">2</div>
                                <h4 class="font-bold text-slate-900 mb-2">Evaluación</h4>
                                <p class="text-xs text-gray-500">Compras clasifica y selecciona el procedimiento.</p>
                            </div>

                            <div class="bg-white p-4 text-center">
                                <div class="w-10 h-10 bg-indigo-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold border-4 border-white">3</div>
                                <h4 class="font-bold text-slate-900 mb-2">Tramitación</h4>
                                <p class="text-xs text-gray-500">Pliegos, presupuestos y selección de proveedor.</p>
                            </div>

                            <div class="bg-white p-4 text-center">
                                <div class="w-10 h-10 bg-indigo-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold border-4 border-white">4</div>
                                <h4 class="font-bold text-slate-900 mb-2">Adjudicación</h4>
                                <p class="text-xs text-gray-500">Compra efectiva y entrega del insumo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-slate-900 text-white">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto bg-indigo-700 rounded-lg p-8 md:p-12 flex flex-col md:flex-row items-center justify-between gap-8 shadow-2xl">
                    <div>
                        <h2 class="text-2xl font-bold mb-2">Portal de Compras UNSL</h2>
                        <p class="text-indigo-200 mb-4">Acceso a licitaciones, proveedores y estado de trámites.</p>
                        <div class="flex items-center gap-2 text-xs text-indigo-300">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                            Sitio seguro y oficial
                        </div>
                    </div>
                    <a href="https://compras.unsl.edu.ar" target="_blank" class="px-8 py-4 bg-white text-indigo-700 font-bold rounded hover:bg-gray-100 transition-colors shadow-md text-center whitespace-nowrap">
                        Ingresar al Portal
                    </a>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-2xl font-bold text-slate-900 mb-8">Contacto Directo</h2>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="p-6 border border-gray-200 rounded-lg hover:border-indigo-500 transition-colors">
                            <div class="w-10 h-10 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-4 text-slate-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <h4 class="font-bold text-slate-900 mb-1">Correo Electrónico</h4>
                            <a href="mailto:dptocomprassaebu@gmail.com" class="text-indigo-600 font-medium hover:underline">dptocomprassaebu@gmail.com</a>
                            <p class="text-xs text-gray-500 mt-2">Consultas y envío de solicitudes</p>
                        </div>

                        <div class="p-6 border border-gray-200 rounded-lg hover:border-indigo-500 transition-colors">
                            <div class="w-10 h-10 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-4 text-slate-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <h4 class="font-bold text-slate-900 mb-1">Teléfono Interno</h4>
                            <p class="text-indigo-600 font-medium text-lg">8139</p>
                            <p class="text-xs text-gray-500 mt-2">Red interna UNSL</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>