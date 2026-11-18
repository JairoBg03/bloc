<?php

declare(strict_types=1);

/**
 * ============================================================================
 * COMPONENTE: BARRA DE NAVEGACIÓN SUPERIOR Y MENÚ MÓVIL
 * ============================================================================
 */

$navItems = [
    'inicio'        => ['label' => 'Inicio',        'href' => '/'],
    'articulos'     => ['label' => 'Artículos',     'href' => '/?page=articulos'],
    'investigacion' => ['label' => 'Investigación', 'href' => '/?page=investigacion'],
    'proyectos'     => ['label' => 'Proyectos',     'href' => '/?page=proyectos'],
    'sobre-mi'      => ['label' => 'Sobre mí',      'href' => '/?page=sobre-mi'],
];
?>
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
        <?php foreach ($navItems as $key => $item): ?>
          <?php $isActive = ($activePage === $key); ?>
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
