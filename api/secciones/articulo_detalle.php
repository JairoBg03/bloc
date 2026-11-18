<?php
$slugActual = $_GET['post'] ?? '';
$indiceActual = 0;
$articuloActual = $articulos[0];

foreach ($articulos as $idx => $art) {
    if ($art['slug'] === $slugActual) {
        $indiceActual = $idx;
        $articuloActual = $art;
        break;
    }
}

$anterior = $articulos[$indiceActual - 1] ?? null;
$siguiente = $articulos[$indiceActual + 1] ?? null;
?>

<!-- Barra superior de progreso de lectura -->
<div class="fixed top-0 left-0 right-0 h-1 z-50 bg-transparent pointer-events-none">
  <div id="reading-progress" class="h-full bg-blue-600 transition-all duration-100" style="width: 0%;"></div>
</div>

<div class="pt-6 pb-14">
  <!-- Breadcrumb -->
  <div class="flex flex-wrap items-center gap-2 text-xs text-stone-500 dark:text-slate-400 mb-6">
    <a href="/" class="hover:text-blue-600 transition-colors inline-flex items-center gap-1">
      <?= renderIcon('arrow-left', 'w-3.5 h-3.5') ?>
      <span>Inicio</span>
    </a>
    <span>/</span>
    <a href="?page=articulos" class="hover:text-blue-600 transition-colors">Artículos</a>
    <span>/</span>
    <span class="text-slate-800 dark:text-slate-200 font-medium"><?= e($articuloActual['categoria']) ?></span>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
    <!-- Columna Principal Editorial -->
    <article class="lg:col-span-8 bg-white dark:bg-slate-900 rounded-3xl border border-stone-200 dark:border-slate-800 p-6 sm:p-10 shadow-sm space-y-6">
      <header class="space-y-4 pb-6 border-b border-stone-200 dark:border-slate-800">
        <div class="flex flex-wrap items-center gap-3 text-xs">
          <span class="px-3 py-1 rounded-full bg-blue-50 dark:bg-blue-950/60 text-blue-700 dark:text-blue-300 font-semibold">
            <?= e($articuloActual['categoria']) ?>
          </span>
          <span class="font-mono-code text-stone-500 dark:text-slate-400 inline-flex items-center gap-1">
            <?= renderIcon('calendar', 'w-3.5 h-3.5') ?>
            <?= e($articuloActual['fecha']) ?>
          </span>
          <span class="font-mono-code text-stone-500 dark:text-slate-400 inline-flex items-center gap-1">
            <?= renderIcon('clock', 'w-3.5 h-3.5') ?>
            <?= e($articuloActual['lectura']) ?>
          </span>
        </div>

        <h1 class="font-serif-ed text-2xl sm:text-3xl lg:text-4xl font-bold text-slate-900 dark:text-white leading-tight">
          <?= e($articuloActual['titulo']) ?>
        </h1>

        <p class="text-base text-stone-600 dark:text-slate-300 leading-relaxed">
          <?= e($articuloActual['extracto']) ?>
        </p>

        <!-- Autor con Foto Circular + Escudo Circular UNS -->
        <div class="flex flex-wrap items-center justify-between gap-4 pt-2">
          <div class="flex items-center gap-3">
            <img
              src="<?= e($perfil['foto_perfil']) ?>"
              onerror="this.onerror=null;this.src='<?= e($perfil['foto_perfil_fallback']) ?>';"
              alt="<?= e($perfil['nombre']) ?>"
              class="w-11 h-11 rounded-full object-cover border-2 border-blue-100 dark:border-slate-700"
            />
            <div>
              <p class="text-sm font-bold text-slate-900 dark:text-white leading-tight"><?= e($perfil['nombre']) ?></p>
              <p class="text-xs text-stone-500 dark:text-slate-400"><?= e($perfil['universidad']) ?></p>
            </div>
          </div>

          <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-stone-50 dark:bg-slate-800 border border-stone-200 dark:border-slate-700">
            <img
              src="<?= e($perfil['logo_uns']) ?>"
              onerror="this.onerror=null;this.src='<?= e($perfil['logo_uns_fallback']) ?>';"
              alt="UNS"
              class="w-5 h-5 rounded-full object-cover"
            />
            <span class="text-[11px] font-medium text-stone-600 dark:text-slate-300">Sistemas · UNS</span>
          </div>
        </div>
      </header>

      <!-- Ilustración de Portada del Artículo -->
      <div class="rounded-2xl overflow-hidden border border-stone-200 dark:border-slate-700 bg-stone-50 aspect-[16/7]">
        <?= renderCoverIllustration($articuloActual['ilustracion']) ?>
      </div>

      <!-- Secciones del Contenido -->
      <div class="space-y-6 text-slate-800 dark:text-slate-200 leading-relaxed">
        <?php foreach ($articuloActual['secciones'] as $sec): ?>
          <section id="<?= e($sec['id']) ?>" class="scroll-mt-24 space-y-2">
            <h2 class="text-xl font-bold text-slate-900 dark:text-white"><?= e($sec['subtitulo']) ?></h2>
            <p class="text-[15px] text-stone-700 dark:text-slate-300 leading-7"><?= e($sec['contenido']) ?></p>
          </section>
        <?php endforeach; ?>

        <!-- Nota Editorial Destacada -->
        <blockquote class="rounded-2xl bg-blue-50/70 dark:bg-blue-950/30 border-l-4 border-blue-600 p-5 text-sm text-slate-800 dark:text-slate-200">
          <p class="font-semibold text-blue-900 dark:text-blue-300 mb-1">Idea clave de ingeniería</p>
          <p class="leading-relaxed"><?= e($articuloActual['nota_destacada']) ?></p>
        </blockquote>

        <!-- Bloque de Código con Botón Copiar -->
        <div id="codigo-fuente" class="scroll-mt-24 rounded-2xl overflow-hidden border border-slate-800 bg-slate-950 text-slate-100 shadow-sm">
          <div class="px-4 py-2.5 bg-slate-900 border-b border-slate-800 flex items-center justify-between">
            <span class="font-mono-code text-xs text-slate-300 inline-flex items-center gap-2">
              <?= renderIcon('code', 'w-3.5 h-3.5 text-blue-400') ?>
              <?= e($articuloActual['codigo_titulo']) ?>
            </span>
            <button
              type="button"
              class="copy-btn inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-slate-800 hover:bg-slate-700 text-xs text-slate-200 transition cursor-pointer"
              data-copy="<?= e($articuloActual['codigo']) ?>"
            >
              <?= renderIcon('copy', 'w-3.5 h-3.5') ?>
              <span>Copiar</span>
            </button>
          </div>
          <pre class="p-4 overflow-x-auto font-mono-code text-xs leading-6 text-slate-100"><code><?= e($articuloActual['codigo']) ?></code></pre>
        </div>
      </div>

      <!-- Navegación Anterior / Siguiente -->
      <nav class="pt-6 border-t border-stone-200 dark:border-slate-800 grid grid-cols-1 sm:grid-cols-2 gap-4">
        <?php if ($anterior): ?>
          <a href="?post=<?= e($anterior['slug']) ?>" class="p-4 rounded-2xl border border-stone-200 dark:border-slate-800 hover:border-blue-500 transition group">
            <span class="text-[11px] font-mono-code text-stone-400 inline-flex items-center gap-1">
              <?= renderIcon('arrow-left', 'w-3 h-3') ?> Anterior
            </span>
            <p class="text-sm font-bold text-slate-900 dark:text-white mt-1 group-hover:text-blue-600 line-clamp-2"><?= e($anterior['titulo']) ?></p>
          </a>
        <?php else: ?>
          <div></div>
        <?php endif; ?>

        <?php if ($siguiente): ?>
          <a href="?post=<?= e($siguiente['slug']) ?>" class="p-4 rounded-2xl border border-stone-200 dark:border-slate-800 hover:border-blue-500 transition group text-right">
            <span class="text-[11px] font-mono-code text-stone-400 inline-flex items-center gap-1 justify-end">
              Siguiente <?= renderIcon('arrow-right', 'w-3 h-3') ?>
            </span>
            <p class="text-sm font-bold text-slate-900 dark:text-white mt-1 group-hover:text-blue-600 line-clamp-2"><?= e($siguiente['titulo']) ?></p>
          </a>
        <?php endif; ?>
      </nav>
    </article>

    <!-- Barra Lateral Sticky: Tabla de Contenido y Recurso Relacionado -->
    <aside class="lg:col-span-4 space-y-5 lg:sticky lg:top-24">
      <div class="rounded-2xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-800 p-5 shadow-sm space-y-3">
        <p class="font-mono-code text-xs font-bold uppercase tracking-wider text-blue-600 dark:text-blue-400">En este artículo</p>
        <ul class="space-y-2 text-xs text-stone-600 dark:text-slate-300">
          <?php foreach ($articuloActual['secciones'] as $sec): ?>
            <li>
              <a href="#<?= e($sec['id']) ?>" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors block py-0.5">
                <?= e($sec['subtitulo']) ?>
              </a>
            </li>
          <?php endforeach; ?>
          <li>
            <a href="#codigo-fuente" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors block py-0.5 font-mono-code">
              4. Fragmento de código
            </a>
          </li>
        </ul>
      </div>

      <div class="rounded-2xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-800 p-5 shadow-sm space-y-3">
        <p class="font-mono-code text-xs font-bold uppercase tracking-wider text-stone-500 dark:text-slate-400">Fuente / Paper Asociado</p>
        <p class="text-sm font-bold text-slate-900 dark:text-white break-all"><?= e($articuloActual['repo_etiqueta']) ?></p>
        <a href="<?= e($articuloActual['repo_relacionado']) ?>" target="_blank" rel="noopener noreferrer"
          class="inline-flex items-center justify-center gap-2 w-full px-4 py-2.5 rounded-xl bg-slate-900 dark:bg-blue-600 text-white text-xs font-semibold hover:opacity-90 transition">
          <span>Abrir recurso externo</span>
          <?= renderIcon('external', 'w-3.5 h-3.5') ?>
        </a>
      </div>
    </aside>
  </div>
</div>
