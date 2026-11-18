<?php
$categoriasProj = array_values(array_unique(array_map(static fn(array $p): string => $p['categoria'], $proyectos)));
$destacadosProj = array_values(array_filter($proyectos, static fn(array $p): bool => !empty($p['destacado'])));
?>

<section class="pt-6 pb-8 border-b border-stone-200 dark:border-slate-800 reveal-on-scroll">
  <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4">
    <div>
      <p class="font-mono-code text-xs uppercase tracking-widest text-blue-600 dark:text-blue-400 font-semibold">Código Abierto</p>
      <h1 class="font-serif-ed text-3xl sm:text-4xl font-bold text-slate-900 dark:text-white mt-1">Proyectos en GitHub (<?= count($proyectos) ?>)</h1>
      <p class="text-sm text-stone-600 dark:text-slate-300 mt-2 max-w-2xl">
        Catálogo completo de mis repositorios públicos en <strong>@JairoBg03</strong>: Deep Learning, Android (Kotlin), Seguridad RSA, Algoritmos Genéticos, Web Serverless y Java MVVM.
      </p>
    </div>
    <a href="<?= e($perfil['enlaces']['github']) ?>" target="_blank" rel="noopener noreferrer"
      class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-slate-900 dark:bg-blue-600 text-white text-xs font-semibold hover:opacity-90 transition shrink-0">
      <?= renderIcon('github', 'w-4 h-4') ?>
      <span>Ir a github.com/JairoBg03</span>
      <?= renderIcon('external', 'w-3.5 h-3.5') ?>
    </a>
  </div>
</section>

<!-- Carrusel Rápido de Proyectos Principales -->
<section class="py-8 border-b border-stone-200 dark:border-slate-800 reveal-on-scroll" data-carousel="proyectos-page">
  <div class="flex items-center justify-between mb-4">
    <h2 class="text-sm font-bold uppercase tracking-wider text-stone-500 dark:text-slate-400">Selección Destacada</h2>
    <div class="flex items-center gap-2">
      <span class="font-mono-code text-xs text-stone-500 dark:text-slate-400" data-carousel-counter>01 / <?= str_pad((string)count($destacadosProj), 2, '0', STR_PAD_LEFT) ?></span>
      <button type="button" data-carousel-prev aria-label="Anterior" class="p-1.5 rounded-lg bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-700 cursor-pointer">
        <?= renderIcon('chevron-left', 'w-4 h-4') ?>
      </button>
      <button type="button" data-carousel-next aria-label="Siguiente" class="p-1.5 rounded-lg bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-700 cursor-pointer">
        <?= renderIcon('chevron-right', 'w-4 h-4') ?>
      </button>
    </div>
  </div>
  <div class="overflow-hidden rounded-2xl border border-stone-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-sm">
    <div class="flex transition-transform duration-500 ease-out" data-carousel-track>
      <?php foreach ($destacadosProj as $proj): ?>
        <div class="w-full shrink-0 grid grid-cols-1 md:grid-cols-12 items-center">
          <div class="md:col-span-5 bg-stone-50 dark:bg-slate-800/60 p-4 border-b md:border-b-0 md:border-r border-stone-200 dark:border-slate-800">
            <div class="aspect-[16/9] rounded-xl overflow-hidden border border-stone-200 dark:border-slate-700 bg-white">
              <?= renderCoverIllustration($proj['ilustracion']) ?>
            </div>
          </div>
          <div class="md:col-span-7 p-6 space-y-3">
            <div class="flex items-center gap-2 text-xs">
              <span class="px-2.5 py-0.5 rounded-full bg-blue-50 dark:bg-blue-950/60 text-blue-700 dark:text-blue-300 font-semibold"><?= e($proj['categoria']) ?></span>
              <span class="font-mono-code text-stone-500"><?= e($proj['lenguaje']) ?></span>
            </div>
            <h3 class="text-xl font-bold text-slate-900 dark:text-white"><?= e($proj['nombre']) ?></h3>
            <p class="text-sm text-stone-600 dark:text-slate-300 leading-relaxed"><?= e($proj['resumen']) ?></p>
            <?php if (!empty($proj['vinetas'])): ?>
              <ul class="space-y-1 text-xs text-stone-700 dark:text-slate-300">
                <?php foreach ($proj['vinetas'] as $pv): ?>
                  <li class="flex items-start gap-2">
                    <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-blue-600 dark:bg-blue-400 shrink-0"></span>
                    <span><?= e($pv) ?></span>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
            <a href="<?= e($proj['url']) ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-xs font-semibold text-blue-600 dark:text-blue-400 hover:underline pt-1">
              <?= renderIcon('github', 'w-4 h-4') ?>
              <span>Explorar código fuente</span>
              <?= renderIcon('external', 'w-3 h-3') ?>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="flex items-center justify-center gap-2 mt-3" data-carousel-dots>
    <?php foreach ($destacadosProj as $idx => $proj): ?>
      <button type="button" data-carousel-dot="<?= $idx ?>" class="h-2 rounded-full transition-all cursor-pointer <?= $idx === 0 ? 'w-6 bg-blue-600' : 'w-2 bg-stone-300 dark:bg-slate-700' ?>"></button>
    <?php endforeach; ?>
  </div>
</section>

<!-- Filtros y Rejilla de los 12 Repositorios -->
<section class="py-10 reveal-on-scroll">
  <div class="flex flex-wrap items-center gap-2 mb-6" id="project-filters">
    <button type="button" data-pfilter="todos" class="pfilter-chip px-3 py-1.5 rounded-full text-xs font-semibold bg-slate-900 text-white dark:bg-blue-600 cursor-pointer transition">
      Todos (<?= count($proyectos) ?>)
    </button>
    <?php foreach ($categoriasProj as $cat): ?>
      <button type="button" data-pfilter="<?= e($cat) ?>" class="pfilter-chip px-3 py-1.5 rounded-full text-xs font-medium bg-white dark:bg-slate-900 text-stone-700 dark:text-slate-300 border border-stone-200 dark:border-slate-700 hover:border-blue-500 cursor-pointer transition">
        <?= e($cat) ?>
      </button>
    <?php endforeach; ?>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5" id="projects-grid">
    <?php foreach ($proyectos as $proj): ?>
      <article class="project-card group rounded-2xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-800 p-5 shadow-sm hover:shadow-md hover:border-blue-400 transition-all duration-300 flex flex-col justify-between gap-4 hover:-translate-y-1"
        data-pcategory="<?= e($proj['categoria']) ?>">
        <div class="space-y-3">
          <div class="flex items-center justify-between gap-2 text-xs">
            <span class="font-mono-code px-2.5 py-0.5 rounded-md bg-stone-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 font-medium">
              <?= e($proj['lenguaje']) ?>
            </span>
            <span class="font-mono-code text-[11px] text-stone-400"><?= e($proj['anio']) ?></span>
          </div>
          <h3 class="text-base font-bold text-slate-900 dark:text-white group-hover:text-blue-600 transition-colors">
            <?= e($proj['nombre']) ?>
          </h3>
          <p class="text-xs text-stone-600 dark:text-slate-400 leading-relaxed">
            <?= e($proj['resumen']) ?>
          </p>
          <?php if (!empty($proj['vinetas'])): ?>
            <ul class="space-y-1 text-[11px] text-stone-600 dark:text-slate-300">
              <?php foreach ($proj['vinetas'] as $pv): ?>
                <li class="flex items-start gap-2">
                  <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-blue-600 dark:bg-blue-400 shrink-0"></span>
                  <span><?= e($pv) ?></span>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
          <div class="flex flex-wrap gap-1.5">
            <?php foreach ($proj['tags'] as $tag): ?>
              <span class="text-[11px] px-2 py-0.5 rounded bg-blue-50/70 dark:bg-blue-950/50 text-blue-700 dark:text-blue-300">
                <?= e($tag) ?>
              </span>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="pt-3 border-t border-stone-100 dark:border-slate-800 flex items-center justify-between">
          <span class="text-[11px] text-stone-400"><?= e($proj['categoria']) ?></span>
          <a href="<?= e($proj['url']) ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-xs font-semibold text-blue-600 dark:text-blue-400 hover:underline">
            <?= renderIcon('github', 'w-3.5 h-3.5') ?>
            <span>Ver Repo</span>
            <?= renderIcon('external', 'w-3 h-3') ?>
          </a>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>
