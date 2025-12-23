<?php
/* Template Name: Contacto Tailwind v2 */

$mensaje_exito = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['enviar_consulta'])) {
    $nombre  = sanitize_text_field($_POST['nombre']);
    $email   = sanitize_email($_POST['email']);
    $asunto  = sanitize_text_field($_POST['asunto']);
    $mensaje = wp_kses_post($_POST['mensaje']);

    $nueva_consulta = array(
        'post_title'   => $asunto . ' - ' . $nombre,
        'post_content' => $mensaje,
        'post_status'  => 'publish',
        'post_type'    => 'consulta',
    );

    $post_id = wp_insert_post($nueva_consulta);
    if ($post_id && !is_wp_error($post_id)) {
        update_post_meta($post_id, '_email_remitente', $email);
        update_post_meta($post_id, '_nombre_remitente', $nombre);
        $mensaje_exito = "Su consulta se envió con éxito.";
    }
}

get_header(); ?>

<main class="min-h-[90vh] flex items-center bg-gray-50/50 py-12 px-6">
    <div class="max-w-6xl mx-auto w-full bg-white shadow-2xl overflow-hidden border border-gray-100 flex flex-col lg:flex-row">

        <section class="lg:w-5/12 bg-unsl-blue p-8 lg:p-16  flex flex-col justify-between">
            <div>
                <span class="text-unsl-blue-light opacity-80  font-bold uppercase text-xl mb-4 block">Contacto</span>
                <!--h1 class="text-4xl lg:text-5xl font-extralight leading-none mb-8">
                    Estamos para <br><span class="font-bold">ayudarte.</span>
                </h1-->

                <div class="space-y-8 mt-12">
                    <div class="flex items-start gap-4">
                        <svg class="w-6 h-6 mt-1 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <div>
                            <h3 class="text-xs font-bold uppercase tracking-widest opacity-60 mb-1">Dirección</h3>
                            <p class="text-lg font-light italic">Rivadavia 1029, San Luis</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <svg class="w-6 h-6 mt-1 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <div>
                            <h3 class="text-xs font-bold uppercase tracking-widest opacity-60 mb-1">Consultas</h3>
                            <a href="mailto:saebuunsl@unsl.edu.ar" class="block text-base hover:underline decoration-1 underline-offset-4">saebuunsl@unsl.edu.ar</a>
                            <a href="mailto:saebu.unsl.edu@gmail.com" class="block text-base hover:underline decoration-1 underline-offset-4">saebu.unsl.edu@gmail.com</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <svg class="w-6 h-6 mt-1 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div>
                            <h3 class="text-xs font-bold uppercase tracking-widest opacity-60 mb-1">Horario de atención</h3>
                            <p class="text-base font-light">Lunes a Viernes<br>08:00 hs — 14:00 hs</p>
                        </div>
                    </div>
                </div>
            </div>

            <!--div class="mt-12 pt-8 border-t border-white/10 text-xs opacity-50 font-light italic">
                Secretaría de Asuntos Estudiantiles y Bienestar Universitario - UNSL
            </div-->
        </section>

        <section class="lg:w-7/12 p-8 lg:p-16 bg-white">
            <?php if ($mensaje_exito): ?>
                <div class="mb-10 p-5 bg-green-50 border-l-2 border-green-500 text-green-800 text-sm flex items-center gap-3">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    <?php echo $mensaje_exito; ?>
                </div>
            <?php endif; ?>

            <form action="<?php the_permalink(); ?>" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-10">

                <div class="col-span-1">
                    <label for="nombre" class="text-xl font-black uppercase  text-gray-700 mb-2 block">Nombre completo</label>
                    <input type="text" name="nombre" id="nombre" required
                        class="w-full border-b border-gray-200 py-2 focus:border-unsl-blue outline-none transition-colors placeholder-gray-800 text-sm" placeholder="Ej. Juan Pérez">
                </div>

                <div class="col-span-1">
                    <label for="email" class="text-xl font-black uppercase  text-gray-700 mb-2 block">Correo electrónico</label>
                    <input type="email" name="email" id="email" required
                        class="w-full border-b border-gray-200 py-2 focus:border-unsl-blue outline-none transition-colors placeholder-gray-800 text-sm" placeholder="email@dominio.com">
                </div>

                <div class="col-span-full">
                    <label for="asunto" class="text-xl font-black uppercase  text-gray-700 mb-2 block">Asunto de la consulta</label>
                    <input type="text" name="asunto" id="asunto" required
                        class="w-full border-b border-gray-200 py-2 focus:border-unsl-blue outline-none transition-colors placeholder-gray-800 text-sm" placeholder="Ej. Beca, Comedor, Residencia...">
                </div>

                <div class="col-span-full">
                    <label for="mensaje" class="text-xl font-black uppercase  text-gray-700 mb-2 block">Mensaje</label>
                    <textarea name="mensaje" id="mensaje" rows="4" required
                        class="w-full border border-gray-100 bg-gray-50/50 p-4 focus:border-unsl-blue outline-none transition-colors text-sm resize-none" placeholder="Describí tu consulta detalladamente..."></textarea>
                </div>

                <div class="col-span-full pt-4">
                    <a href="#!">
                        <button type="submit" name="enviar_consulta"
                            class="group relative inline-flex items-center gap-4 bg-[#416ed2] px-12 py-4  text-xs font-bold uppercase text-white hover:text-black hover:bg-[#F1E4FF] transition-all duration-500 ">
                            Enviar Consulta
                            <svg class="w-4 h-4 transform group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </button>
                    </a>
                </div>
            </form>
        </section>
    </div>
</main>

<?php get_footer(); ?>