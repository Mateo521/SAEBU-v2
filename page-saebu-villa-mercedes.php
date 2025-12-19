<?php
/**
 * Template Name: SAEBU Villa Mercedes
 * Description: Sede Villa Mercedes
 */
get_header();
?>

<main class="bg-gray-50">

    <?php while (have_posts()) : the_post(); ?>

        <section class="relative bg-slate-900 text-white py-20 border-b-4 border-purple-700">
            <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'40\' height=\'40\' viewBox=\'0 0 40 40\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\' fill-rule=\'evenodd\'%3E%3Cpath d=\'M0 40L40 0H20L0 20M40 40V20L20 40\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
            
            <div class="container mx-auto px-4 relative z-10">
                <div class="max-w-4xl mx-auto text-center">
                    <nav class="flex justify-center items-center gap-2 text-sm text-purple-200 mb-6">
                        <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors">Inicio</a>
                        <span>/</span>
                        <span class="text-white font-medium">Sedes regionales</span>
                    </nav>

                    <h1 class="text-3xl md:text-5xl font-bold mb-6 leading-tight">
                        Sede Villa Mercedes
                    </h1>
                    
                    <div class="w-24 h-1 bg-purple-700 mx-auto mb-6"></div>

                    <p class="text-xl text-gray-300 max-w-2xl mx-auto font-light leading-relaxed">
                        Centro regional de servicios estudiantiles para la comunidad universitaria de Villa Mercedes.
                    </p>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white border-b border-gray-200">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    
                    <div class="grid lg:grid-cols-2 gap-12 items-start">
                        
                        <div>
                            <div class="mb-8">
                                <h2 class="text-2xl font-bold text-gray-900 mb-4 border-l-4 border-purple-700 pl-4">Información de Contacto</h2>
                                <p class="text-gray-600 text-lg">
                                    Canales oficiales de comunicación y atención para estudiantes de las facultades en Villa Mercedes.
                                </p>
                            </div>

                            <div class="space-y-4">
                                <div class="bg-white border border-gray-200 rounded-lg p-6 flex items-start gap-4 hover:border-purple-500 transition-colors">
                                    <div class="bg-purple-50 p-3 rounded-md text-purple-700">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-gray-900 text-sm uppercase tracking-wide mb-1">Dirección</h3>
                                        <p class="text-gray-700 font-medium">Junín 269</p>
                                        <p class="text-gray-500 text-sm">Entre 25 de Mayo y Almafuerte</p>
                                    </div>
                                </div>

                                <div class="bg-white border border-gray-200 rounded-lg p-6 flex items-start gap-4 hover:border-purple-500 transition-colors">
                                    <div class="bg-purple-50 p-3 rounded-md text-purple-700">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-gray-900 text-sm uppercase tracking-wide mb-1">Teléfono</h3>
                                        <a href="tel:2657420565" class="text-purple-700 font-bold text-lg hover:underline">2657 420565</a>
                                        <p class="text-gray-500 text-sm">Lunes a Viernes de 8:00 a 13:00 hs</p>
                                    </div>
                                </div>

                                <div class="bg-white border border-gray-200 rounded-lg p-6 flex items-start gap-4 hover:border-purple-500 transition-colors">
                                    <div class="bg-purple-50 p-3 rounded-md text-purple-700">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-gray-900 text-sm uppercase tracking-wide mb-1">Correo electrónico</h3>
                                        <a href="mailto:subsaebu@gmail.com" class="text-purple-700 font-medium hover:underline">subsaebu@gmail.com</a>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-8 flex gap-4">
                                <a href="https://www.facebook.com/SsAEBU" target="_blank" class="flex items-center gap-2 px-4 py-2 bg-gray-100 text-gray-700 rounded hover:bg-blue-600 hover:text-white transition-all text-sm font-medium border border-gray-200">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                    Facebook
                                </a>
                                <a href="https://www.instagram.com/ssaebuu" target="_blank" class="flex items-center gap-2 px-4 py-2 bg-gray-100 text-gray-700 rounded hover:bg-pink-600 hover:text-white transition-all text-sm font-medium border border-gray-200">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" /></svg>
                                    Instagram
                                </a>
                            </div>
                        </div>

                        <div class="h-full min-h-[400px] bg-gray-100 rounded-lg overflow-hidden border border-gray-200 shadow-sm">
                             
                            <iframe  title="Mapa de Google"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3357.8!2d-65.466!3d-33.676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95d2deff0000000%3A0x0!2sBuenos%20Aires%20122%2C%20Villa%20Mercedes%2C%20San%20Luis!5e0!3m2!1ses!2sar!4v1234567890" 
                                width="100%" 
                                height="100%" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy"
                                class="w-full h-full grayscale hover:grayscale-0 transition-all duration-500">
                            </iframe>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-10">
                        <h2 class="text-2xl font-bold text-gray-900">Servicios en Sede</h2>
                        <p class="text-gray-500">Gestiones administrativas y bienestar estudiantil</p>
                    </div>
                    
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="bg-white p-6 rounded border border-gray-200 text-center group hover:border-purple-500 transition-colors">
                            <div class="w-12 h-12 bg-purple-50 text-purple-700 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            </div>
                            <h3 class="font-bold text-gray-900 mb-2 text-base">Becas</h3>
                            <p class="text-sm text-gray-600">Asesoramiento y recepción de documentación.</p>
                        </div>

                        <div class="bg-white p-6 rounded border border-gray-200 text-center group hover:border-purple-500 transition-colors">
                            <div class="w-12 h-12 bg-purple-50 text-purple-700 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </div>
                            <h3 class="font-bold text-gray-900 mb-2 text-base">Comedor</h3>
                            <p class="text-sm text-gray-600">Gestión de cuenta corriente y beneficios alimentarios.</p>
                        </div>

                        <div class="bg-white p-6 rounded border border-gray-200 text-center group hover:border-purple-500 transition-colors">
                            <div class="w-12 h-12 bg-purple-50 text-purple-700 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                            </div>
                            <h3 class="font-bold text-gray-900 mb-2 text-base">Salud</h3>
                            <p class="text-sm text-gray-600">Atención primaria y consultas médicas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>