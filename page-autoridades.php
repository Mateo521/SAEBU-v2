<?php
/**
 * Template Name: Autoridades (Conducción Única)
 * Description: 1 Secretario, 1 Subsecretario y departamentos divididos por sede.
 */
get_header();

$organizacion = [
    'secretario' => [
        'nombre' => 'Nombre del Secretario',
        'cargo'  => 'Secretario',
        'area'   => 'Conducción General',
        'email'  => 'secretario.saebu@unsl.edu.ar',
        'telefono'=> 'Int. 5500',
        'imagen' => '' 
    ],
    'subsecretario' => [
        'nombre' => 'Nombre del Subsecretario',
        'cargo'  => 'Subsecretario',
        'area'   => 'Gestión Institucional',
        'email'  => 'subsecretaria@saebu.unsl.edu.ar',
        'telefono'=> 'Int. 5502',
        'imagen' => ''
    ],
    'departamentos' => [
        'san_luis' => [
            ['nombre' => 'Nombre', 'cargo' => 'Directora Contable', 'area' => 'Administración', 'email' => 'contable@saebu.unsl.edu.ar', 'telefono' => 'Int. 8139', 'imagen' => ''],
            ['nombre' => 'Nombre', 'cargo' => 'Director de Deportes', 'area' => 'Deportes', 'email' => 'deportes@saebu.unsl.edu.ar', 'telefono' => 'Int. 8450', 'imagen' => ''],
            ['nombre' => 'Nombre', 'cargo' => 'Coordinadora Médica', 'area' => 'Salud (CeSEU)', 'email' => 'salud@saebu.unsl.edu.ar', 'telefono' => 'Int. 8820', 'imagen' => ''],
            ['nombre' => 'Nombre', 'cargo' => 'Jefe de Servicio', 'area' => 'Comedor', 'email' => 'comedor@saebu.unsl.edu.ar', 'telefono' => 'Int. 8112', 'imagen' => ''],
            ['nombre' => 'Nombre', 'cargo' => 'Jefa de Becas', 'area' => 'Becas', 'email' => 'becas@saebu.unsl.edu.ar', 'telefono' => 'Int. 8134', 'imagen' => ''],
            ['nombre' => 'Nombre', 'cargo' => 'Responsable La Florida', 'area' => 'Turismo', 'email' => 'camping@saebu.unsl.edu.ar', 'telefono' => 'Int. 5200', 'imagen' => '']
        ],
        'villa_mercedes' => [
            ['nombre' => 'Nombre', 'cargo' => 'Jefe de Compras', 'area' => 'Compras', 'email' => 'compras.vm@saebu.unsl.edu.ar', 'telefono' => 'Int. 6140', 'imagen' => ''],
            ['nombre' => 'Nombre', 'cargo' => 'Responsable Administrativa', 'area' => 'Mesa de Entrada', 'email' => 'entrada.vm@saebu.unsl.edu.ar', 'telefono' => 'Int. 6100', 'imagen' => ''],
            ['nombre' => 'Nombre', 'cargo' => 'Coordinador de Deportes', 'area' => 'Deportes VM', 'email' => 'deportes.vm@saebu.unsl.edu.ar', 'telefono' => 'Int. 6450', 'imagen' => ''],
            ['nombre' => 'Nombre', 'cargo' => 'Jefa de Comedor', 'area' => 'Servicios Alimentarios', 'email' => 'comedor.vm@saebu.unsl.edu.ar', 'telefono' => 'Int. 6112', 'imagen' => '']
        ]
    ]
];
?>

<style>
    .font-serif-inst { font-family: 'Merriweather', serif; }
    .org-connector-v { width: 2px; background-color: #cbd5e1; margin: 0 auto; }
    
    .filter-tab { position: relative; color: #64748b; transition: all 0.3s ease; cursor: pointer; }
    .filter-tab::after {
        content: ''; position: absolute; bottom: -2px; left: 0; width: 100%; height: 2px;
        background-color: #1e3a8a; transform: scaleX(0); transition: transform 0.3s ease;
    }
    .filter-tab.active { color: #1e3a8a; font-weight: 700; }
    .filter-tab.active::after { transform: scaleX(1); }

    .fade-element { transition: opacity 0.3s ease, transform 0.3s ease; }
    .hidden-org { display: none !important; opacity: 0; transform: translateY(10px); }
</style>

<main class="bg-gray-50 min-h-screen py-16 px-4">
    <header class="max-w-4xl mx-auto text-center mb-12">
        <h1 class="text-3xl md:text-4xl font-serif-inst font-bold text-slate-900 mb-4 uppercase tracking-tight">Autoridades</h1>
        <div class="h-1.5 w-16 bg-blue-900 mx-auto mb-8"></div>
        
        <div class="flex justify-center gap-6 md:gap-12 mt-10 border-b border-gray-200">
            <button onclick="filterRegion('todas')" class="filter-tab active px-4 py-3 text-xs font-bold uppercase tracking-widest" data-region="todas">Todas las Sedes</button>
            <button onclick="filterRegion('San Luis')" class="filter-tab px-4 py-3 text-xs font-bold uppercase tracking-widest" data-region="San Luis">Sede San Luis</button>
            <button onclick="filterRegion('Villa Mercedes')" class="filter-tab px-4 py-3 text-xs font-bold uppercase tracking-widest" data-region="Villa Mercedes">Sede Villa Mercedes</button>
        </div>
    </header>

    <div class="max-w-7xl mx-auto">
        
        <section class="flex flex-col items-center">
            <div class="max-w-sm w-full">
                <div class="bg-white rounded-xl shadow-lg border-t-4 border-b-4 border-blue-900 p-8 text-center transition-transform ">
                    <div class="w-40 h-40 mx-auto mb-6 rounded-full overflow-hidden border-4 border-slate-100 shadow-inner">
                        <img src="<?php echo esc_url($organizacion['secretario']['imagen']); ?>" alt="Secretario" class="w-full h-full object-cover">
                    </div>
                    <h2 class="text-xl font-bold text-slate-900 mb-1"><?php echo esc_html($organizacion['secretario']['nombre']); ?></h2>
                    <p class="text-xs font-black text-blue-900 uppercase tracking-widest mb-4"><?php echo esc_html($organizacion['secretario']['cargo']); ?></p>
                    <div class="text-xs text-slate-500 space-y-1 border-t pt-4">
                        <p><?php echo esc_html($organizacion['secretario']['email']); ?></p>
                        <p><?php echo esc_html($organizacion['secretario']['telefono']); ?></p>
                    </div>
                </div>
            </div>
            <div class="org-connector-v h-12"></div>
        </section>

        <section class="flex flex-col items-center">
            <div class="max-w-sm w-full">
                <div class="bg-white rounded-xl shadow-md border-t-4 border-b-4 border-slate-500 p-6 text-center transition-transform ">
                    <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden border-2 border-slate-100">
                        <img src="<?php echo esc_url($organizacion['subsecretario']['imagen']); ?>" alt="Subsecretario" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-1"><?php echo esc_html($organizacion['subsecretario']['nombre']); ?></h3>
                    <p class="text-[10px] font-bold text-slate-600 uppercase tracking-wider mb-3"><?php echo esc_html($organizacion['subsecretario']['cargo']); ?></p>
                    <div class="text-[11px] text-slate-500 space-y-1">
                        <p><?php echo esc_html($organizacion['subsecretario']['email']); ?></p>
                        <p><?php echo esc_html($organizacion['subsecretario']['telefono']); ?></p>
                    </div>
                </div>
            </div>
            <div class="org-connector-v h-16"></div>
        </section>

        <section class="relative">
            <div class="flex items-center justify-center mb-12">
                <div class="h-px bg-slate-300 flex-grow max-w-[100px]"></div>
                <h4 class="px-6 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Direcciones por Sede</h4>
                <div class="h-px bg-slate-300 flex-grow max-w-[100px]"></div>
            </div>

            <div class="dept-group fade-element" data-region="San Luis">
                <h5 class="text-center text-blue-900 font-bold text-sm mb-8 uppercase tracking-widest">Sede San Luis</h5>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-16">
                    <?php foreach ($organizacion['departamentos']['san_luis'] as $depto) : ?>
                        <div class="bg-white rounded-lg border border-slate-200 p-5 flex flex-col items-center text-center group hover:border-blue-400 transition-all shadow-sm">
                            <div class="w-24 h-24 rounded-full overflow-hidden mb-4 border border-slate-100 group-hover:scale-105 transition-transform">
                                <img src="<?php echo esc_url($depto['imagen']); ?>" class="w-full h-full object-cover">
                            </div>
                            <h4 class="text-sm font-bold text-slate-900"><?php echo esc_html($depto['nombre']); ?></h4>
                            <p class="text-[10px] text-blue-800 font-bold uppercase mb-1"><?php echo esc_html($depto['cargo']); ?></p>
                            <p class="text-[9px] text-slate-400 italic"><?php echo esc_html($depto['area']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="dept-group fade-element" data-region="Villa Mercedes">
                <h5 class="text-center text-emerald-700 font-bold text-sm mb-8 uppercase tracking-widest">Sede Villa Mercedes</h5>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <?php foreach ($organizacion['departamentos']['villa_mercedes'] as $depto) : ?>
                        <div class="bg-white rounded-lg border border-slate-200 p-5 flex flex-col items-center text-center group hover:border-emerald-400 transition-all shadow-sm">
                            <div class="w-24 h-24 rounded-full overflow-hidden mb-4 border border-slate-100 group-hover:scale-105 transition-transform">
                                <img src="<?php echo esc_url($depto['imagen']); ?>" class="w-full h-full object-cover">
                            </div>
                            <h4 class="text-sm font-bold text-slate-900"><?php echo esc_html($depto['nombre']); ?></h4>
                            <p class="text-[10px] text-emerald-800 font-bold uppercase mb-1"><?php echo esc_html($depto['cargo']); ?></p>
                            <p class="text-[9px] text-slate-400 italic"><?php echo esc_html($depto['area']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>

    <footer class="max-w-2xl mx-auto text-center mt-20 pt-8 border-t border-slate-200">
        <a href="<?php echo esc_url(home_url('/contacto')); ?>" class="text-xs font-bold text-slate-500 hover:text-blue-900 transition-colors uppercase tracking-widest">
            Contacto Institucional
        </a>
    </footer>
</main>

<script>
    function filterRegion(region) {
        // Actualizar Tabs
        document.querySelectorAll('.filter-tab').forEach(tab => {
            tab.classList.toggle('active', tab.dataset.region === region);
        });

        // Filtrar Departamentos
        document.querySelectorAll('.dept-group').forEach(group => {
            if (region === 'todas') {
                group.classList.remove('hidden-org');
            } else {
                group.classList.toggle('hidden-org', group.dataset.region !== region);
            }
        });
    }
</script>

<?php get_footer(); ?>