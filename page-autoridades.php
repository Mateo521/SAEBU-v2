<?php
/**
 * Template Name: Autoridades (Directorio)
 * Description: Diseño de grilla tipo directorio/staff
 */
get_header();

// --- DATOS (Unificados para el directorio) ---
// Agregamos una clave 'categoria' para el filtro
$staff = [
    [
        'nombre' => 'Lic. Raúl "Rulo" González',
        'cargo' => 'Secretario General',
        'area' => 'Conducción',
        'email' => 'secretario.saebu@unsl.edu.ar',
        'telefono' => 'Int. 5500',
        'imagen' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=800&auto=format&fit=crop',
        'categoria' => 'conduccion'
    ],
    [
        'nombre' => 'Lic. Mariana Vega',
        'cargo' => 'Subsecretaria',
        'area' => 'Conducción',
        'email' => 'subsecretaria@saebu.unsl.edu.ar',
        'telefono' => 'Int. 5502',
        'imagen' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=800&auto=format&fit=crop',
        'categoria' => 'conduccion'
    ],
    [
        'nombre' => 'CPN. María Eugenia López',
        'cargo' => 'Directora Contable',
        'area' => 'Administración',
        'email' => 'contable@saebu.unsl.edu.ar',
        'telefono' => 'Int. 8139',
        'imagen' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=800&auto=format&fit=crop',
        'categoria' => 'departamentos'
    ],
    [
        'nombre' => 'Lic. Carlos Rodriguez',
        'cargo' => 'Director de Deportes',
        'area' => 'Deportes',
        'email' => 'deportes@saebu.unsl.edu.ar',
        'telefono' => 'Int. 8450',
        'imagen' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=800&auto=format&fit=crop',
        'categoria' => 'departamentos'
    ],
    [
        'nombre' => 'Dra. Ana Sofía Martinez',
        'cargo' => 'Coordinadora Médica',
        'area' => 'Salud (CeSEU)',
        'email' => 'salud@saebu.unsl.edu.ar',
        'telefono' => 'Int. 8820',
        'imagen' => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?q=80&w=800&auto=format&fit=crop',
        'categoria' => 'departamentos'
    ],
    [
        'nombre' => 'Tec. Jorge Luis Torres',
        'cargo' => 'Jefe de Servicio',
        'area' => 'Comedor',
        'email' => 'comedor@saebu.unsl.edu.ar',
        'telefono' => 'Int. 8112',
        'imagen' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=800&auto=format&fit=crop',
        'categoria' => 'departamentos'
    ],
    [
        'nombre' => 'Lic. Patricia Venecia',
        'cargo' => 'Jefa de Becas',
        'area' => 'Becas',
        'email' => 'becas@saebu.unsl.edu.ar',
        'telefono' => 'Int. 8134',
        'imagen' => 'https://images.unsplash.com/photo-1598550874175-4d7112ee5365?q=80&w=800&auto=format&fit=crop',
        'categoria' => 'departamentos'
    ],
    [
        'nombre' => 'Sr. Roberto Mendez',
        'cargo' => 'Responsable La Florida',
        'area' => 'Turismo',
        'email' => 'camping@saebu.unsl.edu.ar',
        'telefono' => 'Int. 5200',
        'imagen' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=800&auto=format&fit=crop',
        'categoria' => 'departamentos'
    ],
    [
        'nombre' => 'Lic. Ricardo Gomez',
        'cargo' => 'Jefe de Compras',
        'area' => 'Compras',
        'email' => 'compras@saebu.unsl.edu.ar',
        'telefono' => 'Int. 8140',
        'imagen' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=800&auto=format&fit=crop',
        'categoria' => 'departamentos'
    ],
    [
        'nombre' => 'Sra. Laura Diaz',
        'cargo' => 'Responsable Administrativa',
        'area' => 'Mesa de Entrada',
        'email' => 'entrada@saebu.unsl.edu.ar',
        'telefono' => 'Int. 8100',
        'imagen' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=800&auto=format&fit=crop',
        'categoria' => 'departamentos'
    ]
];
?>

<style>
    /* Estilos para la animación de filtrado */
    .staff-card {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .staff-card.hidden {
        display: none;
        opacity: 0;
        transform: scale(0.95);
    }

    .staff-card.visible {
        display: block;
        opacity: 1;
        transform: scale(1);
        animation: fadeIn 0.5s forwards;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Hover suave en botones de filtro */
    .filter-btn.active {
        background-color: #0f172a; /* Slate 900 */
        color: white;
        border-color: #0f172a;
    }
</style>

<main class="bg-gray-50 min-h-screen">

    <section class="bg-white border-b border-gray-200 pt-24 pb-12">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Directorio de Autoridades</h1>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                Equipo de gestión de la Secretaría de Asuntos Estudiantiles y Bienestar Universitario.
            </p>

            <div class="flex flex-wrap justify-center gap-3 mt-8">
                <button onclick="filterStaff('todos')" class="filter-btn active px-6 py-2 rounded-full border border-slate-200 text-slate-600 font-semibold hover:border-slate-900 hover:text-slate-900 transition-all text-sm">
                    Todos
                </button>
                <button onclick="filterStaff('conduccion')" class="filter-btn px-6 py-2 rounded-full border border-slate-200 text-slate-600 font-semibold hover:border-slate-900 hover:text-slate-900 transition-all text-sm">
                    Conducción
                </button>
                <button onclick="filterStaff('departamentos')" class="filter-btn px-6 py-2 rounded-full border border-slate-200 text-slate-600 font-semibold hover:border-slate-900 hover:text-slate-900 transition-all text-sm">
                    Departamentos
                </button>
            </div>
        </div>
    </section>

    <section class="py-16 px-4">
        <div class="container mx-auto max-w-7xl">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="staff-grid">
                
                <?php foreach ($staff as $persona) : ?>
                    <div class="staff-card visible bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:shadow-xl hover:border-blue-200 transition-all duration-300 group" data-category="<?php echo $persona['categoria']; ?>">
                        
                        <div class="flex items-start justify-between mb-6">
                            <div class="relative">
                                <div class="w-20 h-20 rounded-full overflow-hidden border-2 border-white shadow-md group-hover:ring-2 ring-blue-100 transition-all">
                                    <img src="<?php echo esc_url($persona['imagen']); ?>" 
                                         alt="<?php echo esc_attr($persona['nombre']); ?>" 
                                         class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-500">
                                </div>
                                <div class="absolute bottom-1 right-1 w-4 h-4 bg-green-400 border-2 border-white rounded-full" title="Disponible"></div>
                            </div>
                            
                            <span class="inline-block px-3 py-1 bg-slate-50 text-slate-600 text-[10px] font-bold uppercase tracking-wider rounded-lg border border-slate-100">
                                <?php echo esc_html($persona['area']); ?>
                            </span>
                        </div>

                        <div class="mb-6">
                            <h3 class="text-lg font-bold text-slate-900 leading-tight mb-1 group-hover:text-blue-700 transition-colors">
                                <?php echo esc_html($persona['nombre']); ?>
                            </h3>
                            <p class="text-sm text-blue-600 font-medium">
                                <?php echo esc_html($persona['cargo']); ?>
                            </p>
                        </div>

                        <div class="space-y-3 pt-4 border-t border-gray-50">
                            <a href="mailto:<?php echo $persona['email']; ?>" class="flex items-center gap-3 text-sm text-gray-500 hover:text-slate-900 transition-colors p-2 rounded-lg hover:bg-gray-50 -mx-2">
                                <div class="w-8 h-8 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <span class="truncate"><?php echo esc_html($persona['email']); ?></span>
                            </a>
                            
                            <div class="flex items-center gap-3 text-sm text-gray-500 p-2 rounded-lg -mx-2">
                                <div class="w-8 h-8 rounded-full bg-slate-50 text-slate-600 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                </div>
                                <span><?php echo esc_html($persona['telefono']); ?></span>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>

    <section class="bg-white border-t border-gray-200 py-12">
        <div class="container mx-auto text-center">
            <p class="text-gray-500 mb-4">¿Necesitas comunicarte con un área específica?</p>
            <a href="<?php echo home_url('/contacto'); ?>" class="inline-flex items-center gap-2 text-slate-900 font-bold hover:text-blue-600 transition-colors">
                Ir al Formulario de Contacto
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        </div>
    </section>

</main>

<script>
    function filterStaff(category) {
        const cards = document.querySelectorAll('.staff-card');
        const buttons = document.querySelectorAll('.filter-btn');

        // Actualizar botones
        buttons.forEach(btn => {
            btn.classList.remove('active');
            if (btn.textContent.trim().toLowerCase().includes(category) || (category === 'todos' && btn.textContent.trim() === 'Todos') || (category === 'departamentos' && btn.textContent.trim() === 'Departamentos')) {
                 // Simple lógica para coincidencia de texto, idealmente usar IDs
                 if(btn.getAttribute('onclick').includes(category)) {
                     btn.classList.add('active');
                 }
            }
        });

        // Filtrar tarjetas
        cards.forEach(card => {
            if (category === 'todos' || card.dataset.category === category) {
                card.classList.remove('hidden');
                card.classList.add('visible');
            } else {
                card.classList.remove('visible');
                card.classList.add('hidden');
            }
        });
    }
</script>

<?php get_footer(); ?>