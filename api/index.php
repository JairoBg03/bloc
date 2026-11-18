<?php

declare(strict_types=1);

// 1. Servidor ligero de imágenes WebP embebidas en api/assets/img/ para Vercel Serverless
$requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$assetParam = $_GET['asset'] ?? '';

$allowedAssets = [
    'jairo-perfil.webp' => __DIR__ . '/assets/img/jairo-perfil.webp',
    'uns-logo.webp' => __DIR__ . '/assets/img/uns-logo.webp',
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

// 2. Cargar datos editoriales y enrutar sección activa
require_once __DIR__ . '/data.php';

$postSlug = isset($_GET['post']) ? trim((string)$_GET['post']) : '';
$page = isset($_GET['page']) ? trim((string)$_GET['page']) : 'inicio';

if ($postSlug !== '') {
    $activePage = 'articulos';
    $sectionFile = __DIR__ . '/secciones/articulo_detalle.php';
    $pageTitle = 'Artículo | ' . $perfil['nombre'];
} else {
    $routes = [
        'inicio' => ['file' => __DIR__ . '/secciones/portada.php', 'title' => $perfil['nombre'] . ' — Blog Personal & Investigación'],
        'articulos' => ['file' => __DIR__ . '/secciones/articulos.php', 'title' => 'Artículos | ' . $perfil['nombre']],
        'investigacion' => ['file' => __DIR__ . '/secciones/investigacion.php', 'title' => 'Investigación | ' . $perfil['nombre']],
        'proyectos' => ['file' => __DIR__ . '/secciones/proyectos.php', 'title' => 'Proyectos | ' . $perfil['nombre']],
        'sobre-mi' => ['file' => __DIR__ . '/secciones/sobre_mi.php', 'title' => 'Sobre mí | ' . $perfil['nombre']],
    ];

    if (!isset($routes[$page])) {
        $page = 'inicio';
    }
    $activePage = $page;
    $sectionFile = $routes[$page]['file'];
    $pageTitle = $routes[$page]['title'];
}
?>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= e($pageTitle) ?></title>
  <meta name="description" content="<?= e($perfil['nombre']) ?> — <?= e($perfil['rol']) ?>. <?= e($perfil['universidad']) ?>." />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600&family=Newsreader:ital,opsz,wght@0,6..72,500;0,6..72,700;1,6..72,500&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'ui-sans-serif', 'system-ui', 'sans-serif'],
            serif: ['"Newsreader"', 'Georgia', 'serif'],
            mono: ['"JetBrains Mono"', 'ui-monospace', 'monospace'],
          }
        }
      }
    };
  </script>
  <script>
    (function() {
      try {
        if (localStorage.getItem('jairo_theme') === 'dark') {
          document.documentElement.classList.add('dark');
        }
      } catch (e) {}
    })();
  </script>

  <style>
    body {
      font-family: 'Plus Jakarta Sans', ui-sans-serif, system-ui, sans-serif;
    }
    .font-serif-ed {
      font-family: 'Newsreader', Georgia, Cambria, serif;
    }
    .font-mono-code {
      font-family: 'JetBrains Mono', ui-monospace, monospace;
    }
    .reveal-on-scroll {
      opacity: 0;
      transform: translateY(14px);
      transition: opacity 0.55s cubic-bezier(0.22, 1, 0.36, 1), transform 0.55s cubic-bezier(0.22, 1, 0.36, 1);
    }
    .reveal-on-scroll.is-visible {
      opacity: 1;
      transform: translateY(0);
    }
    .line-clamp-2 {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }
    .line-clamp-3 {
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }
  </style>
</head>
<body class="bg-[#FAF8F5] dark:bg-slate-950 text-slate-900 dark:text-slate-100 antialiased selection:bg-blue-100 selection:text-blue-900 dark:selection:bg-blue-900 dark:selection:text-white transition-colors duration-200">

  <!-- Navegación Editorial Sticky -->
  <header class="sticky top-0 z-40 border-b border-stone-200/90 dark:border-slate-800 bg-[#FAF8F5]/90 dark:bg-slate-950/90 backdrop-blur-md">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 h-16 flex items-center justify-between gap-4">
      <!-- Marca con Avatar Circular -->
      <a href="/" class="flex items-center gap-3 group">
        <div class="relative w-9 h-9 rounded-full overflow-hidden border border-stone-300 dark:border-slate-700 shadow-sm shrink-0">
          <img
            src="<?= e($perfil['foto_perfil']) ?>"
            onerror="this.onerror=null;this.src='<?= e($perfil['foto_perfil_fallback']) ?>';"
            alt="<?= e($perfil['nombre_corto']) ?>"
            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
          />
        </div>
        <div class="leading-tight">
          <span class="block text-sm font-bold text-slate-900 dark:text-white"><?= e($perfil['nombre_corto']) ?></span>
          <span class="block text-[11px] text-stone-500 dark:text-slate-400 font-mono-code"><?= e($perfil['usuario']) ?> · UNS</span>
        </div>
      </a>

      <!-- Enlaces Desktop -->
      <nav class="hidden md:flex items-center gap-1" aria-label="Navegación principal">
        <?php
        $navItems = [
            'inicio' => ['label' => 'Inicio', 'href' => '/'],
            'articulos' => ['label' => 'Artículos', 'href' => '/?page=articulos'],
            'investigacion' => ['label' => 'Investigación', 'href' => '/?page=investigacion'],
            'proyectos' => ['label' => 'Proyectos', 'href' => '/?page=proyectos'],
            'sobre-mi' => ['label' => 'Sobre mí', 'href' => '/?page=sobre-mi'],
        ];
        foreach ($navItems as $key => $item):
            $isActive = ($activePage === $key);
        ?>
          <a
            href="<?= e($item['href']) ?>"
            class="px-3.5 py-2 rounded-xl text-xs font-semibold transition-colors <?= $isActive
                ? 'bg-blue-50 dark:bg-blue-950/60 text-blue-700 dark:text-blue-300'
                : 'text-stone-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-stone-200/50 dark:hover:bg-slate-800/60' ?>"
          >
            <?= e($item['label']) ?>
          </a>
        <?php endforeach; ?>
      </nav>

      <!-- Controles Derecha: Tema Claro/Oscuro + Menú Móvil -->
      <div class="flex items-center gap-2">
        <button
          type="button"
          id="theme-toggle"
          aria-label="Cambiar tema claro u oscuro"
          class="p-2 rounded-xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-700 text-stone-700 dark:text-slate-200 hover:border-blue-500 transition cursor-pointer"
        >
          <span class="dark:hidden"><?= renderIcon('moon', 'w-4 h-4') ?></span>
          <span class="hidden dark:inline"><?= renderIcon('sun', 'w-4 h-4') ?></span>
        </button>

        <button
          type="button"
          id="mobile-menu-btn"
          aria-label="Abrir menú"
          class="md:hidden p-2 rounded-xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-700 text-stone-700 dark:text-slate-200 cursor-pointer"
        >
          <?= renderIcon('menu', 'w-4 h-4') ?>
        </button>
      </div>
    </div>

    <!-- Drawer Móvil -->
    <div id="mobile-menu" class="hidden md:hidden border-t border-stone-200 dark:border-slate-800 bg-white dark:bg-slate-950 px-4 py-3 space-y-1">
      <?php foreach ($navItems as $key => $item): ?>
        <a
          href="<?= e($item['href']) ?>"
          class="block px-3 py-2 rounded-xl text-sm font-semibold <?= $activePage === $key
              ? 'bg-blue-50 dark:bg-blue-950/60 text-blue-700 dark:text-blue-300'
              : 'text-stone-700 dark:text-slate-300' ?>"
        >
          <?= e($item['label']) ?>
        </a>
      <?php endforeach; ?>
    </div>
  </header>

  <!-- Contenido Principal -->
  <main class="max-w-6xl mx-auto px-4 sm:px-6">
    <?php include $sectionFile; ?>
  </main>

  <!-- Pie de Página Editorial -->
  <footer class="border-t border-stone-200 dark:border-slate-800 bg-white/70 dark:bg-slate-950 mt-8">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-8 flex flex-col sm:flex-row items-center justify-between gap-4">
      <div class="flex items-center gap-3">
        <img
          src="<?= e($perfil['logo_uns']) ?>"
          onerror="this.onerror=null;this.src='<?= e($perfil['logo_uns_fallback']) ?>';"
          alt="Universidad Nacional del Santa"
          class="w-9 h-9 rounded-full object-cover border border-red-200 dark:border-red-900 bg-white shrink-0"
        />
        <div class="text-xs">
          <p class="font-bold text-slate-900 dark:text-white"><?= e($perfil['nombre']) ?></p>
          <p class="text-stone-500 dark:text-slate-400"><?= e($perfil['universidad']) ?> · Nuevo Chimbote, Perú</p>
        </div>
      </div>

      <div class="flex items-center gap-3">
        <a href="<?= e($perfil['enlaces']['github']) ?>" target="_blank" rel="noopener noreferrer" aria-label="GitHub"
          class="p-2 rounded-xl border border-stone-200 dark:border-slate-800 text-stone-600 dark:text-slate-300 hover:text-blue-600 hover:border-blue-500 transition">
          <?= renderIcon('github', 'w-4 h-4') ?>
        </a>
        <a href="<?= e($perfil['enlaces']['linkedin']) ?>" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"
          class="p-2 rounded-xl border border-stone-200 dark:border-slate-800 text-stone-600 dark:text-slate-300 hover:text-blue-600 hover:border-blue-500 transition">
          <?= renderIcon('linkedin', 'w-4 h-4') ?>
        </a>
        <a href="<?= e($perfil['enlaces']['orcid']) ?>" target="_blank" rel="noopener noreferrer" aria-label="ORCID"
          class="p-2 rounded-xl border border-stone-200 dark:border-slate-800 text-stone-600 dark:text-slate-300 hover:text-emerald-600 hover:border-emerald-500 transition">
          <?= renderIcon('orcid', 'w-4 h-4') ?>
        </a>
      </div>
    </div>
  </footer>

  <!-- Toast de Notificación -->
  <div id="toast" class="fixed bottom-5 right-5 z-50 hidden items-center gap-2 px-4 py-2.5 rounded-xl bg-slate-900 dark:bg-blue-600 text-white text-xs font-semibold shadow-lg">
    <?= renderIcon('check', 'w-4 h-4 text-emerald-400 dark:text-white') ?>
    <span id="toast-msg">Copiado al portapapeles</span>
  </div>

  <!-- Lógica Interactiva: Sliders, Filtros, Tema, Progreso y Scroll Reveal -->
  <script>
    (function () {
      // 1. Toggle Tema Claro/Oscuro
      var themeBtn = document.getElementById('theme-toggle');
      if (themeBtn) {
        themeBtn.addEventListener('click', function () {
          var isDark = document.documentElement.classList.toggle('dark');
          try {
            localStorage.setItem('jairo_theme', isDark ? 'dark' : 'light');
          } catch (e) {}
        });
      }

      // 2. Menú Móvil
      var menuBtn = document.getElementById('mobile-menu-btn');
      var mobileMenu = document.getElementById('mobile-menu');
      if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', function () {
          mobileMenu.classList.toggle('hidden');
        });
      }

      // 3. Controlador Reutilizable de Sliders / Carruseles
      var carousels = document.querySelectorAll('[data-carousel]');
      carousels.forEach(function (root) {
        var track = root.querySelector('[data-carousel-track]');
        var prev = root.querySelector('[data-carousel-prev]');
        var next = root.querySelector('[data-carousel-next]');
        var counter = root.querySelector('[data-carousel-counter]');
        var dots = root.querySelectorAll('[data-carousel-dot]');
        if (!track || track.children.length === 0) return;

        var total = track.children.length;
        var index = 0;
        var timer = null;
        var isPub = root.getAttribute('data-carousel') === 'publicaciones';

        function pad(n) {
          return n < 10 ? '0' + n : String(n);
        }

        function goTo(newIdx) {
          index = (newIdx + total) % total;
          track.style.transform = 'translateX(-' + (index * 100) + '%)';
          if (counter) {
            counter.textContent = pad(index + 1) + ' / ' + pad(total);
          }
          dots.forEach(function (dot, i) {
            if (i === index) {
              dot.className = 'h-2 rounded-full transition-all cursor-pointer w-6 ' + (isPub ? 'bg-red-700' : 'bg-blue-600');
            } else {
              dot.className = 'h-2 rounded-full transition-all cursor-pointer w-2 bg-stone-300 dark:bg-slate-700';
            }
          });
        }

        if (prev) prev.addEventListener('click', function () { goTo(index - 1); });
        if (next) next.addEventListener('click', function () { goTo(index + 1); });
        dots.forEach(function (dot) {
          dot.addEventListener('click', function () {
            goTo(parseInt(dot.getAttribute('data-carousel-dot') || '0', 10));
          });
        });

        function startAuto() {
          stopAuto();
          timer = setInterval(function () { goTo(index + 1); }, 6500);
        }
        function stopAuto() {
          if (timer) {
            clearInterval(timer);
            timer = null;
          }
        }
        root.addEventListener('mouseenter', stopAuto);
        root.addEventListener('mouseleave', startAuto);

        // Soporte táctil swipe
        var touchStartX = 0;
        track.addEventListener('touchstart', function (e) {
          touchStartX = e.changedTouches[0].clientX;
        }, { passive: true });
        track.addEventListener('touchend', function (e) {
          var dx = e.changedTouches[0].clientX - touchStartX;
          if (Math.abs(dx) > 40) {
            goTo(dx < 0 ? index + 1 : index - 1);
          }
        }, { passive: true });

        startAuto();
      });

      // 4. Búsqueda y Filtro en Tiempo Real para Artículos
      var searchInput = document.getElementById('article-search');
      var filterChips = document.querySelectorAll('.filter-chip');
      var articleCards = document.querySelectorAll('.article-card');
      var currentCat = 'todos';

      function applyArticleFilter() {
        var q = searchInput ? searchInput.value.trim().toLowerCase() : '';
        articleCards.forEach(function (card) {
          var cat = card.getAttribute('data-category') || '';
          var text = card.getAttribute('data-title') || '';
          var matchCat = currentCat === 'todos' || cat === currentCat;
          var matchText = q === '' || text.indexOf(q) !== -1 || cat.toLowerCase().indexOf(q) !== -1;
          card.style.display = (matchCat && matchText) ? '' : 'none';
        });
      }

      if (searchInput) {
        searchInput.addEventListener('input', applyArticleFilter);
      }
      filterChips.forEach(function (chip) {
        chip.addEventListener('click', function () {
          currentCat = chip.getAttribute('data-filter') || 'todos';
          filterChips.forEach(function (c) {
            c.className = 'filter-chip px-3 py-1.5 rounded-full text-xs font-medium bg-white dark:bg-slate-900 text-stone-700 dark:text-slate-300 border border-stone-200 dark:border-slate-700 hover:border-blue-500 cursor-pointer transition';
          });
          chip.className = 'filter-chip px-3 py-1.5 rounded-full text-xs font-semibold bg-slate-900 text-white dark:bg-blue-600 cursor-pointer transition';
          applyArticleFilter();
        });
      });

      // 5. Filtro por Categoría para Proyectos
      var pChips = document.querySelectorAll('.pfilter-chip');
      var projectCards = document.querySelectorAll('.project-card');
      pChips.forEach(function (chip) {
        chip.addEventListener('click', function () {
          var targetCat = chip.getAttribute('data-pfilter') || 'todos';
          pChips.forEach(function (c) {
            c.className = 'pfilter-chip px-3 py-1.5 rounded-full text-xs font-medium bg-white dark:bg-slate-900 text-stone-700 dark:text-slate-300 border border-stone-200 dark:border-slate-700 hover:border-blue-500 cursor-pointer transition';
          });
          chip.className = 'pfilter-chip px-3 py-1.5 rounded-full text-xs font-semibold bg-slate-900 text-white dark:bg-blue-600 cursor-pointer transition';

          projectCards.forEach(function (card) {
            var c = card.getAttribute('data-pcategory') || '';
            card.style.display = (targetCat === 'todos' || c === targetCat) ? '' : 'none';
          });
        });
      });

      // 6. Animación Reveal al Hacer Scroll
      var reveals = document.querySelectorAll('.reveal-on-scroll');
      if ('IntersectionObserver' in window) {
        var obs = new IntersectionObserver(function (entries) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) {
              entry.target.classList.add('is-visible');
              obs.unobserve(entry.target);
            }
          });
        }, { threshold: 0.08 });
        reveals.forEach(function (el) { obs.observe(el); });
      } else {
        reveals.forEach(function (el) { el.classList.add('is-visible'); });
      }

      // 7. Barra de Progreso de Lectura en Artículos
      var progressEl = document.getElementById('reading-progress');
      if (progressEl) {
        window.addEventListener('scroll', function () {
          var docHeight = document.documentElement.scrollHeight - window.innerHeight;
          var pct = docHeight > 0 ? Math.min(100, Math.max(0, (window.scrollY / docHeight) * 100)) : 0;
          progressEl.style.width = pct.toFixed(1) + '%';
        }, { passive: true });
      }

      // 8. Copiar al Portapapeles (BibTeX y Bloques de Código)
      var toast = document.getElementById('toast');
      var toastMsg = document.getElementById('toast-msg');
      var toastTimer = null;

      function showToast(msg) {
        if (!toast || !toastMsg) return;
        toastMsg.textContent = msg;
        toast.classList.remove('hidden');
        toast.classList.add('flex');
        clearTimeout(toastTimer);
        toastTimer = setTimeout(function () {
          toast.classList.add('hidden');
          toast.classList.remove('flex');
        }, 2200);
      }

      document.querySelectorAll('.copy-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
          var text = btn.getAttribute('data-copy') || '';
          if (!text) return;
          if (navigator.clipboard && navigator.clipboard.writeText) {
            navigator.clipboard.writeText(text).then(function () {
              showToast('Copiado al portapapeles');
            }).catch(function () {
              showToast('Texto listo para copiar');
            });
          } else {
            var ta = document.createElement('textarea');
            ta.value = text;
            document.body.appendChild(ta);
            ta.select();
            try { document.execCommand('copy'); } catch (e) {}
            document.body.removeChild(ta);
            showToast('Copiado al portapapeles');
          }
        });
      });
    })();
  </script>
</body>
</html>
