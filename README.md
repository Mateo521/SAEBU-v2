# SAEBU Theme - Guía de Instalación

## Requisitos
- WordPress 6.8.3 o superior
- PHP 7.4 o superior
- MySQL 5.6 o superior

## Instalación

### 1. Subir el theme
1. Descarga o clona este repositorio
2. Copia la carpeta `saebu` a `/wp-content/themes/`
3. Ve a Apariencia > Temas en el panel de WordPress
4. Activa el theme "SAEBU Theme"

### 2. Configurar permalinks
1. Ve a Ajustes > Enlaces permanentes
2. Selecciona "Nombre de la entrada"
3. Guarda los cambios
4. Ve a Ajustes > Enlaces permanentes nuevamente y guarda otra vez (esto regenera las reglas de reescritura)

### 3. Crear las páginas estáticas

Crea las siguientes páginas desde Páginas > Añadir nueva:

#### Páginas simples (sin template específico):
- Institucional
- Contacto
- SAEBU Villa Mercedes
- SAEBU Merlo
- Historia del Camping
- Dpto Mesa de Entradas
- Dpto Contable

#### Páginas con templates personalizados:

**Becas**
- Título: Becas
- Slug: becas
- Template: Página Becas

**Camping**
- Título: Camping
- Slug: camping
- Template: Página Camping

**CESEU**
- Título: CESEU
- Slug: ceseu
- Template: Página CESEU

**Trabajo Social**
- Título: Trabajo Social
- Slug: trabajo-social
- Template: Página Trabajo Social

**Club Universitario**
- Título: Club Universitario
- Slug: club-universitario
- Template: Página Club Universitario

**Dpto Deportes**
- Título: Dpto Deportes
- Slug: dpto-deportes
- Template: Página Dpto Deportes

### 4. Configurar la página de inicio
1. Ve a Ajustes > Lectura
2. Selecciona "Una página estática"
3. En "Página de inicio" selecciona "Inicio" (créala si no existe)
4. Guarda los cambios

### 5. Crear menús
1. Ve a Apariencia > Menús
2. Crea un menú llamado "Menú Principal"
3. Añade las páginas que desees
4. Asigna el menú a "Menú Principal"
5. Crea otro menú llamado "Menú Footer" y asígnalo a "Menú Footer"

### 6. Configurar widgets (opcional)
1. Ve a Apariencia > Widgets
2. Arrastra widgets a "Sidebar" o "Footer" según necesites

## Uso

### Crear noticias

1. Ve a Noticias > Añadir nueva
2. Escribe el título y contenido
3. Añade una imagen destacada
4. Selecciona el departamento correspondiente en la caja "Departamentos"
5. (Opcional) Marca como "Noticia Destacada" para que aparezca con prioridad
6. Publica

### Noticias por departamento

Las noticias se organizan automáticamente por departamento:

- **Noticias de Becas**: `/becas` y `/becas/noticias`
- **Noticias de Camping**: `/camping` y `/camping/noticias`
- **Noticias de CESEU**: `/ceseu` y `/ceseu/noticias`
- **Noticias de Trabajo Social**: `/trabajo-social` y `/trabajo-social/noticias`
- **Noticias de Club Universitario**: `/club-universitario` y `/club-universitario/noticias`
- **Noticias de Dpto Deportes**: `/dpto-deportes` y `/dpto-deportes/noticias`
- **Todas las noticias**: `/noticias`

### URLs de noticias individuales

Las noticias se acceden mediante:
- `/noticia/slug-de-la-noticia`
- Alternativamente: `/departamento/noticia/slug-de-la-noticia`

### Agregar información de contacto

En las páginas de departamento o contacto:

1. Edita la página
2. Desplázate hasta la caja "Información de Contacto"
3. Completa los campos: teléfono, email, dirección, horario
4. Actualiza la página
5. Usa el shortcode `[contact_info]` en el contenido para mostrar la info

## Personalización

### Colores

Para cambiar los colores del sitio, edita las variables CSS en `assets/css/main.css`:

```css
:root {
    --color-primary: #3b82f6;      /* Azul principal */
    --color-secondary: #8b5cf6;    /* Púrpura secundario */
    --color-dark: #1e293b;         /* Texto oscuro */
    --color-light: #f8fafc;        /* Fondo claro */
    --color-white: #ffffff;        /* Blanco */
    --color-gray: #64748b;         /* Gris para textos secundarios */
}
