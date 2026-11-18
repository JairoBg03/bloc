<?php

declare(strict_types=1);

/**
 * ============================================================================
 * ROUTER PRINCIPAL DEL BLOG (VERCEL PHP SERVERLESS)
 * ============================================================================
 * Estructura de carpetas para editar rápido:
 *   - api/datos/perfil.php         -> Tus datos, Sobre mí, Línea de trabajo y Hobbies
 *   - api/datos/articulos.php      -> Artículos de tu blog
 *   - api/datos/proyectos.php      -> Tus proyectos de GitHub y slider destacado
 *   - api/datos/publicaciones.php  -> Tus papers científicos y DOIs
 *   - api/componentes/             -> head, navbar, footer, scripts y helpers SVG
 *   - api/secciones/               -> Vistas de cada página
 * ============================================================================
 */

// 1. Servir imágenes WebP embebidas en api/assets/img/ si Vercel enruta vía PHP
$requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$assetParam = $_GET['asset'] ?? '';

$allowedAssets = [
    'jairo-perfil.webp' => __DIR__ . '/assets/img/jairo-perfil.webp',
    'uns-logo.webp'     => __DIR__ . '/assets/img/uns-logo.webp',
];

$requestedAssetName = '';
if ($assetParam !== '' && isset($allowedAssets[$assetParam])) {
    $requestedAssetName = $assetParam;
} elseif (preg_match('#^/assets/img/(jairo-perfil\.webp|uns-logo\.webp)$#', $requestPath, $m)) {
    $requestedAssetName = $m[1];
}

if ($requestedAssetName !== '' && is_file($allowedAssets[$requestedAssetName])) {
    header('Content-Type: image/webp');
    header('Cache-Control: public, max-age=86400');
    readfile($allowedAssets[$requestedAssetName]);
    exit;
}

// 2. Cargar helpers y archivos modulares de datos
require_once __DIR__ . '/componentes/helpers.php';
require_once __DIR__ . '/datos/perfil.php';
require_once __DIR__ . '/datos/publicaciones.php';
require_once __DIR__ . '/datos/articulos.php';
require_once __DIR__ . '/datos/proyectos.php';

// 3. Resolver la ruta / sección solicitada
$postSlug = isset($_GET['post']) ? trim((string)$_GET['post']) : '';
$page = isset($_GET['page']) ? trim((string)$_GET['page']) : 'inicio';

if ($postSlug !== '') {
    $activePage = 'articulos';
    $sectionFile = __DIR__ . '/secciones/articulo_detalle.php';
    $pageTitle = 'Artículo | ' . $perfil['nombre'];
} else {
    $routes = [
        'inicio'        => ['file' => __DIR__ . '/secciones/portada.php',       'title' => $perfil['nombre'] . ' — Blog Personal & Investigación'],
        'articulos'     => ['file' => __DIR__ . '/secciones/articulos.php',     'title' => 'Artículos | ' . $perfil['nombre']],
        'investigacion' => ['file' => __DIR__ . '/secciones/investigacion.php', 'title' => 'Investigación | ' . $perfil['nombre']],
        'proyectos'     => ['file' => __DIR__ . '/secciones/proyectos.php',     'title' => 'Proyectos | ' . $perfil['nombre']],
        'sobre-mi'      => ['file' => __DIR__ . '/secciones/sobre_mi.php',      'title' => 'Sobre mí | ' . $perfil['nombre']],
    ];

    if (!isset($routes[$page])) {
        $page = 'inicio';
    }
    $activePage = $page;
    $sectionFile = $routes[$page]['file'];
    $pageTitle = $routes[$page]['title'];
}

// 4. Ensamblar plantilla final por componentes
include __DIR__ . '/componentes/head.php';
include __DIR__ . '/componentes/navbar.php';
?>

  <main class="max-w-6xl mx-auto px-4 sm:px-6">
    <?php include $sectionFile; ?>
  </main>

<?php
include __DIR__ . '/componentes/footer.php';
include __DIR__ . '/componentes/scripts.php';
