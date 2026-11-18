<?php

declare(strict_types=1);

/**
 * ============================================================================
 * COMPONENTE: <head> GLOBAL, TIPOGRAFÍAS Y ESTILOS EDITORIALES
 * ============================================================================
 */
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
    // Aplicar el tema elegido por el visitante antes del primer renderizado
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
