<?php
/**
 * Template Name: Autoridades (Organigrama Institucional)
 * Description: Diseño jerárquico sobrio, con líneas conectoras y estilo corporativo.
 */
get_header();

// --- DATOS (Misma estructura) ---
$organizacion = [
    'secretario' => [
        'nombre' => 'Lic. Raúl "Rulo" González',
        'cargo' => 'Secretario General',
        'area' => 'Conducción',
        'email' => 'secretario.saebu@unsl.edu.ar',
        'telefono' => 'Int. 5500',
        'imagen' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=500&h=500',
        'region' => 'San Luis'
    ],
    'subsecretarios' => [
        [
            'nombre' => 'Lic. Mariana Vega',
            'cargo' => 'Subsecretaria',
            'area' => 'Sede San Luis',
            'email' => 'subsecretaria@saebu.unsl.edu.ar',
            'telefono' => 'Int. 5502',
            'imagen' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=400&h=400',
            'region' => 'San Luis'
        ],
        [
            'nombre' => 'Lic. Fernando Morales',
            'cargo' => 'Subsecretario',
            'area' => 'Sede Villa Mercedes',
            'email' => 'subsecretario.vm@saebu.unsl.edu.ar',
            'telefono' => 'Int. 6502',
            'imagen' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&q=80&w=400&h=400',
            'region' => 'Villa Mercedes'
        ]
    ],
    'departamentos' => [
        'san_luis' => [
            ['nombre' => 'CPN. María Eugenia López', 'cargo' => 'Directora Contable', 'area' => 'Administración', 'email' => 'contable@saebu.unsl.edu.ar', 'telefono' => 'Int. 8139', 'imagen' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&q=80&w=400&h=400', 'region' => 'San Luis'],
            ['nombre' => 'Lic. Carlos Rodriguez', 'cargo' => 'Director de Deportes', 'area' => 'Deportes', 'email' => 'deportes@saebu.unsl.edu.ar', 'telefono' => 'Int. 8450', 'imagen' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=400&h=400', 'region' => 'San Luis'],
            ['nombre' => 'Dra. Ana Sofía Martinez', 'cargo' => 'Coordinadora Médica', 'area' => 'Salud (CeSEU)', 'email' => 'salud@saebu.unsl.edu.ar', 'telefono' => 'Int. 8820', 'imagen' => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&q=80&w=400&h=400', 'region' => 'San Luis'],
            ['nombre' => 'Tec. Jorge Luis Torres', 'cargo' => 'Jefe de Servicio', 'area' => 'Comedor', 'email' => 'comedor@saebu.unsl.edu.ar', 'telefono' => 'Int. 8112', 'imagen' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&q=80&w=400&h=400', 'region' => 'San Luis'],
            ['nombre' => 'Lic. Patricia Venecia', 'cargo' => 'Jefa de Becas', 'area' => 'Becas', 'email' => 'becas@saebu.unsl.edu.ar', 'telefono' => 'Int. 8134', 'imagen' => 'https://images.unsplash.com/photo-1598550874175-4d7112ee5365?auto=format&fit=crop&q=80&w=400&h=400', 'region' => 'San Luis'],
            ['nombre' => 'Sr. Roberto Mendez', 'cargo' => 'Responsable La Florida', 'area' => 'Turismo', 'email' => 'camping@saebu.unsl.edu.ar', 'telefono' => 'Int. 5200', 'imagen' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&q=80&w=400&h=400', 'region' => 'San Luis']
        ],
        'villa_mercedes' => [
            ['nombre' => 'Lic. Ricardo Gomez', 'cargo' => 'Jefe de Compras', 'area' => 'Compras', 'email' => 'compras.vm@saebu.unsl.edu.ar', 'telefono' => 'Int. 6140', 'imagen' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=400&h=400', 'region' => 'Villa Mercedes'],
            ['nombre' => 'Sra. Laura Diaz', 'cargo' => 'Responsable Administrativa', 'area' => 'Mesa de Entrada', 'email' => 'entrada.vm@saebu.unsl.edu.ar', 'telefono' => 'Int. 6100', 'imagen' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&q=80&w=400&h=400', 'region' => 'Villa Mercedes'],
            ['nombre' => 'Prof. Miguel Ángel Sosa', 'cargo' => 'Coordinador de Deportes', 'area' => 'Deportes VM', 'email' => 'deportes.vm@saebu.unsl.edu.ar', 'telefono' => 'Int. 6450', 'imagen' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=400&h=400', 'region' => 'Villa Mercedes'],
            ['nombre' => 'Lic. Carmen Ruiz', 'cargo' => 'Jefa de Comedor', 'area' => 'Servicios Alimentarios', 'email' => 'comedor.vm@saebu.unsl.edu.ar', 'telefono' => 'Int. 6112', 'imagen' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=400&h=400', 'region' => 'Villa Mercedes']
        ]
    ]
];
?>

<style>
    /* Tipografía Serif para autoridad */
    .font-serif-inst {
        font-family: 'Merriweather', 'Playfair Display', serif;
    }

    /* Líneas conectoras del organigrama */
    .org-connector-v {
        width: 1px;
        background-color: #cbd5e1; /* slate-300 */
        margin: 0 auto;
    }
    
    .org-connector-h {
        height: 1px;
        background-color: #cbd5e1; /* slate-300 */
        margin: 0 auto;
    }

    /* Transiciones sutiles */
    .fade-element {
        transition: opacity 0.4s ease, transform 0.4s ease;
        opacity: 1;
        transform: translateY(0);
    }
    
    .fade-element.hidden-org {
        display: none;
        opacity: 0;
        transform: translateY(10px);
    }

    /* Tabs de filtro institucionales */
    .filter-tab {
        position: relative;
        color: #64748b; /* slate-500 */
        transition: color 0.3s ease;
    }
    
    .filter-tab::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: #1e3a8a; /* blue-900 */
        transform: scaleX(0);
        transition: transform 0.3s ease;
        transform-origin: center;
    }
    
    .filter-tab.active {
        color: #1e3a8a; /* blue-900 */
        font-weight: 600;
    }
    
    .filter-tab.active::after {
        transform: scaleX(1);
    }
</style>

<main class="bg-gray-50 min-h-screen py-16 px-4">

    <header class="max-w-4xl mx-auto text-center mb-16">
        <h1 class="text-3xl md:text-4xl font-serif-inst font-bold text-slate-900 mb-4 tracking-tight">
            Autoridades
        </h1>
        <div class="h-1 w-20 bg-blue-900 mx-auto mb-6"></div> <p class="text-slate-600 text-lg max-w-2xl mx-auto font-light">
            Estructura orgánica de la Secretaría de Asuntos Estudiantiles y Bienestar Universitario.
        </p>

        <div class="flex justify-center gap-8 mt-10 border-b border-gray-200 pb-1">
            <button onclick="filterRegion('todas')" class="filter-tab active px-4 py-2 text-sm uppercase tracking-wider" data-region="todas">
                Organigrama Completo
            </button>
            <button onclick="filterRegion('San Luis')" class="filter-tab px-4 py-2 text-sm uppercase tracking-wider" data-region="San Luis">
                Sede San Luis
            </button>
            <button onclick="filterRegion('Villa Mercedes')" class="filter-tab px-4 py-2 text-sm uppercase tracking-wider" data-region="Villa Mercedes">
                Sede Villa Mercedes
            </button>
        </div>
    </header>

    <div class="max-w-7xl mx-auto">

        <section class="mb-0 relative z-20">
            <div class="max-w-md mx-auto">
                <div class="bg-white rounded-lg shadow-md border-t-4 border-blue-900 p-8 text-center relative hover:shadow-lg transition-shadow duration-300">
                    
                    <div class="w-50 h-50 mx-auto mb-6 rounded-full overflow-hidden border-4 border-gray-50 shadow-inner">
                        <img src="<?php echo esc_url($organizacion['secretario']['imagen']); ?>" 
                             alt="<?php echo esc_attr($organizacion['secretario']['nombre']); ?>" 
                             class="w-full h-full object-cover  transition-all duration-500">
                    </div>

                    <h2 class="text-2xl font-serif-inst font-bold text-slate-900 mb-1">
                        <?php echo esc_html($organizacion['secretario']['nombre']); ?>
                    </h2>
                    <p class="text-sm font-bold text-blue-900 uppercase tracking-widest mb-4">
                        <?php echo esc_html($organizacion['secretario']['cargo']); ?>
                    </p>

                    <div class="flex flex-col items-center gap-2 text-sm text-slate-500 font-light border-t border-gray-100 pt-4">
                        <a href="mailto:<?php echo $organizacion['secretario']['email']; ?>" class="hover:text-blue-900 transition-colors">
                            <?php echo esc_html($organizacion['secretario']['email']); ?>
                        </a>
                        <span><?php echo esc_html($organizacion['secretario']['telefono']); ?></span>
                    </div>
                </div>
            </div>

            <div class="org-connector-v h-12"></div>
        </section>

        <section class="relative z-10">
            <div class="max-w-3xl mx-auto relative h-8 mb-0 hidden md:block border-t border-slate-300 border-x rounded-t-xl" style="width: 60%;"></div>
            
            <div class="grid md:grid-cols-2 gap-8 md:gap-20 max-w-4xl mx-auto">
                <?php foreach ($organizacion['subsecretarios'] as $sub) : 
                     // Determinar visibilidad inicial basada en la región
                     $regionSlug = $sub['region'];
                ?>
                    <div class="subsecretario-wrapper fade-element flex flex-col items-center" data-region="<?php echo $regionSlug; ?>">
                        
                        <div class="org-connector-v h-8 md:hidden"></div>
                        
                        <div class="w-full bg-white rounded-lg shadow-sm border border-gray-200 border-t-4 border-slate-600 p-6 text-center hover:shadow-md transition-shadow">
                            <div class="w-44 h-44 mx-auto mb-4 rounded-full overflow-hidden border-2 border-gray-100">
                                <img src="<?php echo esc_url($sub['imagen']); ?>" 
                                     class="w-full h-full object-cover  transition-all duration-500">
                            </div>
                            
                            <h3 class="text-lg font-serif-inst font-bold text-slate-900 mb-1">
                                <?php echo esc_html($sub['nombre']); ?>
                            </h3>
                            <p class="text-xs font-bold text-slate-600 uppercase tracking-wider mb-2">
                                <?php echo esc_html($sub['cargo']); ?>
                            </p>
                            <span class="inline-block px-2 py-0.5 bg-gray-100 text-slate-500 text-[10px] uppercase tracking-wide rounded mb-3">
                                <?php echo esc_html($sub['area']); ?>
                            </span>

                            <div class="text-xs text-slate-400">
                                <a href="mailto:<?php echo $sub['email']; ?>" class="hover:text-slate-700 transition-colors block mb-1">
                                    <?php echo esc_html($sub['email']); ?>
                                </a>
                                <span><?php echo esc_html($sub['telefono']); ?></span>
                            </div>
                        </div>

                        <div class="org-connector-v h-8 flex-grow"></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="border-t border-slate-200 pt-8 mt-0 relative bg-white/50 rounded-xl p-6">
            
            <h3 class="text-center text-sm font-bold text-slate-400 uppercase tracking-widest mb-8">Direcciones y Departamentos</h3>

            <div class="dept-group fade-element" data-region="San Luis">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <?php foreach ($organizacion['departamentos']['san_luis'] as $depto) : ?>
                        <div class="bg-white rounded border border-gray-200 p-5 flex flex-col items-center gap-4 hover:border-blue-300 transition-colors group">
                            <div class="w-44 h-44 rounded-full overflow-hidden flex-shrink-0 border border-gray-100">
                                <img src="<?php echo esc_url($depto['imagen']); ?>" 
                                     class="w-full h-full object-cover  transition-all">
                            </div>
                            <div class="flex-grow min-w-0">
                                <h4 class="text-sm font-bold text-slate-900 truncate" title="<?php echo esc_attr($depto['nombre']); ?>">
                                    <?php echo esc_html($depto['nombre']); ?>
                                </h4>
                                <p class="text-xs text-blue-800 font-medium uppercase truncate mb-1">
                                    <?php echo esc_html($depto['cargo']); ?>
                                </p>
                                <p class="text-[10px] text-slate-400 truncate">
                                    <?php echo esc_html($depto['area']); ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="dept-group fade-element mt-8 lg:mt-0" data-region="Villa Mercedes">
                 <div class="hidden-org block h-px bg-slate-200 my-8 w-1/2 mx-auto separator-line"></div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <?php foreach ($organizacion['departamentos']['villa_mercedes'] as $depto) : ?>
                        <div class="bg-white rounded border border-gray-200 p-5 flex flex-col items-center gap-4 hover:border-emerald-300 transition-colors group">
                            <div class="w-44 h-44 rounded-full overflow-hidden flex-shrink-0 border border-gray-100">
                                <img src="<?php echo esc_url($depto['imagen']); ?>" 
                                     class="w-full h-full object-cover  transition-all">
                            </div>
                            <div class="flex-grow min-w-0">
                                <h4 class="text-sm font-bold text-slate-900 truncate" title="<?php echo esc_attr($depto['nombre']); ?>">
                                    <?php echo esc_html($depto['nombre']); ?>
                                </h4>
                                <p class="text-xs text-emerald-800 font-medium uppercase truncate mb-1">
                                    <?php echo esc_html($depto['cargo']); ?>
                                </p>
                                <p class="text-[10px] text-slate-400 truncate">
                                    <?php echo esc_html($depto['area']); ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </section>

    </div>

    <section class="max-w-2xl mx-auto text-center mt-16 border-t border-gray-200 pt-8">
        <a href="<?php echo esc_url(home_url('/contacto')); ?>" 
           class="text-sm font-serif-inst font-medium text-slate-600 hover:text-blue-900 transition-colors border-b border-transparent hover:border-blue-900 pb-0.5">
            Ir al Formulario de Contacto Institucional
        </a>
    </section>

</main>

<script>
    function filterRegion(region) {
        // 1. Gestionar Tabs
        document.querySelectorAll('.filter-tab').forEach(tab => {
            tab.classList.remove('active');
            if(tab.dataset.region === region) tab.classList.add('active');
        });

        // 2. Filtrar Elementos
        const elements = document.querySelectorAll('.subsecretario-wrapper, .dept-group');
        const separator = document.querySelector('.separator-line');

        elements.forEach(el => {
            const elRegion = el.dataset.region;

            if (region === 'todas') {
                el.classList.remove('hidden-org');
                if(separator) separator.classList.remove('hidden'); // Mostrar separador
            } else {
                if (elRegion === region) {
                    el.classList.remove('hidden-org');
                } else {
                    el.classList.add('hidden-org');
                }
                if(separator) separator.classList.add('hidden'); // Ocultar separador en vista individual
            }
        });
    }
</script>

<?php get_footer(); ?>