# Blog Personal & Investigación — Jairo Manuel Blas García

Sitio web personal construido en **PHP 8 modular** listo para desplegar en **Vercel** usando el runtime `vercel-php@0.7.3`.

---

## Estructura del Proyecto (Dónde editar cada parte)

```text
dev/
├── README.md                          # Esta guía rápida
├── vercel.json                        # Configuración de rutas y runtime PHP en Vercel
├── assets/img/                        # Imágenes estáticas en formato .webp
└── api/
    ├── index.php                      # Router principal (~75 líneas)
    ├── datos/                         # 👈 AQUÍ EDITAS TU CONTENIDO (sin tocar HTML)
    │   ├── perfil.php                 # Nombre, bio, "Cosas sobre mí", Línea de trabajo, Hobbies y Stack
    │   ├── articulos.php              # Entradas del blog (con plantilla para agregar nuevos posts)
    │   ├── proyectos.php              # Lista de proyectos de GitHub y slider destacado
    │   └── publicaciones.php          # Artículos científicos, DOIs y citas BibTeX
    ├── componentes/                   # 👈 AQUÍ EDITAS EL DISEÑO GLOBAL Y JS
    │   ├── head.php                   # Fuentes, Tailwind CSS y estilos base
    │   ├── navbar.php                 # Barra superior, enlaces del menú y botón claro/oscuro
    │   ├── footer.php                 # Pie de página con escudo UNS y redes sociales
    │   ├── scripts.php                # JavaScript de sliders, filtros, buscador y copiar texto
    │   └── helpers.php                # Iconos SVG e ilustraciones vectoriales de portada
    ├── secciones/                     # 👈 AQUÍ EDITAS EL DISEÑO DE CADA PÁGINA
    │   ├── portada.php                # Página de inicio (Sobre mí -> Línea de trabajo -> Hobbies -> Sliders -> Blog)
    │   ├── articulos.php              # Archivo completo de artículos
    │   ├── articulo_detalle.php       # Vista de lectura de un artículo individual (?post=slug)
    │   ├── proyectos.php              # Slider + rejilla filtrable de repositorios
    │   ├── investigacion.php          # Página académica con publicaciones y ORCID
    │   └── sobre_mi.php               # Perfil completo, UNS y stack tecnológico
    └── assets/img/                    # Copia de respaldo de las imágenes .webp para Vercel Serverless
```

---

## Cómo actualizar tu blog rápidamente

### 1. Editar tu bio, "Cosas sobre mí", Línea de trabajo o Hobbies
Abre **`api/datos/perfil.php`**. Cada bloque está numerado y comentado:
* `sobre_mi_parrafos` y `sobre_mi_vinetas`
* `linea_trabajo` (tus 4 pilares profesionales con sus viñetas)
* `hobbies` (tus pasatiempos e intereses con sus viñetas)
* `stack` (las tecnologías que aparecen en la página *Sobre mí*)

### 2. Agregar un nuevo artículo del blog
Abre **`api/datos/articulos.php`**, copia la plantilla comentada al inicio del archivo y agrégala al arreglo `$articulos`. Puedes elegir cualquiera de las ilustraciones incluidas en `api/componentes/helpers.php` (`research-web`, `skin-cnn`, `asl-fusion`, `rsa-crypto`, `eventify-app`, `chsp-genetic`, etc.).

### 3. Agregar un nuevo proyecto o destacarlo en el Slider
Abre **`api/datos/proyectos.php`**. Si colocas `'destacado' => true`, el proyecto aparecerá automáticamente en el carrusel principal.

### 4. Agregar una publicación científica o paper
Abre **`api/datos/publicaciones.php`** y pega un nuevo bloque con tu título, autores, DOI, viñetas y BibTeX.

### 5. Cambiar tu foto de perfil o el escudo universitario
Reemplaza `jairo-perfil.webp` o `uns-logo.webp` tanto en **`assets/img/`** como en **`api/assets/img/`** manteniendo exactamente los mismos nombres de archivo.

### 6. Modificar colores, menú o pie de página
* Menú superior: **`api/componentes/navbar.php`**
* Fuentes, paleta y modo oscuro: **`api/componentes/head.php`**
* Pie de página y redes: **`api/componentes/footer.php`**

---

## Despliegue en Vercel

1. Sube el contenido de esta carpeta a tu repositorio en GitHub (`JairoBg03/bloc`).
2. En Vercel, haz clic en **Add New → Project** e importa el repositorio.
3. Vercel leerá `vercel.json` automáticamente y desplegará el sitio sin configuración adicional.
