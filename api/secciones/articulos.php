<?php
$categoriasArticulos = array_values(array_unique(array_map(static fn(array $a): string => $a['categoria'], $articulos)));
$destacado = $articulos[0];
?>

<section class="pt-6 pb-8 border-b border-stone-200 dark:border-slate-800 reveal-on-scroll">
  <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
    <div>
      <p class="font-mono-code text-xs uppercase tracking-widest text-blue-600 dark:text-blue-400 font-semibold">Archivo Editorial</p>
      <h1 class="font-serif-ed text-3xl sm:text-4xl font-bold text-slate-900 dark:text-white mt-1">Artículos &amp; Apuntes Técnicos</h1>
      <p class="text-sm text-stone-600 dark:text-slate-300 mt-2 max-w-2xl">
        Guías de arquitectura, análisis de papers en Visión Computacional, criptografía aplicada y lecciones de mis repositorios en GitHub.
      </p>
    </div>

    <div class="relative">
      <span class="absolute left-3 top-1/2 -translate-y-1/2 text-stone-400">
        <?= renderIcon('search', 'w-4 h-4') ?>
      </span>
      <input
        type="search"
        id="article-search"
        placeholder="Filtrar por tema o tecnología..."
        class="pl-9 pr-4 py-2 rounded-xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-700 text-xs text-slate-800 dark:text-slate-200 focus:outline-none focus:border-blue-500 w-full sm:w-64"
      />
    </div>
  </div>
</section>

<!-- Artículo Destacado -->
<section class="py-8 reveal-on-scroll">
  <div class="rounded-2xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-800 overflow-hidden shadow-sm grid grid-cols-1 lg:grid-cols-12">
    <div class="lg:col-span-5 bg-stone-50 dark:bg-slate-800 border-b lg:border-b-0 lg:border-r border-stone-200 dark:border-slate-800 p-5 flex items-center justify-center">
      <div class="w-full aspect-[16/9] rounded-xl overflow-hidden border border-stone-200 dark:border-slate-700 bg-white">
        <?= renderCoverIllustration($destacado['ilustracion']) ?>
      </div>
    </div>
    <div class="lg:col-span-7 p-6 sm:p-8 flex flex-col justify-between gap-4">
      <div class="space-y-2.5">
        <div class="flex flex-wrap items-center gap-2 text-xs">
          <span class="px-2.5 py-0.5 rounded-full bg-blue-600 text-white font-semibold">Lectura Destacada</span>
          <span class="font-mono-code text-stone-500 dark:text-slate-400"><?= e($destacado['fecha']) ?> · <?= e($destacado['lectura']) ?></span>
        </div>
        <h2 class="font-serif-ed text-2xl font-bold text-slate-900 dark:text-white leading-snug">
          <a href="?post=<?= e($destacado['slug']) ?>" class="hover:text-blue-600 transition-colors"><?= e($destacado['titulo']) ?></a>
        </h2>
        <p class="text-sm text-stone-600 dark:text-slate-300 leading-relaxed"><?= e($destacado['extracto']) ?></p>
      </div>
      <div>
        <a href="?post=<?= e($destacado['slug']) ?>" class="inline-flex items-center gap-2 text-sm font-semibold text-blue-600 dark:text-blue-400 hover:underline">
          <span>Leer artículo completo</span>
          <?= renderIcon('arrow-right', 'w-4 h-4') ?>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Filtros y Rejilla Completa -->
<section class="pb-12 reveal-on-scroll">
  <div class="flex flex-wrap items-center gap-2 mb-6" id="article-filters">
    <button type="button" data-filter="todos" class="filter-chip px-3 py-1.5 rounded-full text-xs font-semibold bg-slate-900 text-white dark:bg-blue-600 cursor-pointer transition">
      Todos (<?= count($articulos) ?>)
    </button>
    <?php foreach ($categoriasArticulos as $cat): ?>
      <button type="button" data-filter="<?= e($cat) ?>" class="filter-chip px-3 py-1.5 rounded-full text-xs font-medium bg-white dark:bg-slate-900 text-stone-700 dark:text-slate-300 border border-stone-200 dark:border-slate-700 hover:border-blue-500 cursor-pointer transition">
        <?= e($cat) ?>
      </button>
    <?php endforeach; ?>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5" id="articles-grid">
    <?php foreach ($articulos as $art): ?>
      <article
        class="article-card group rounded-2xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-800 overflow-hidden shadow-sm hover:shadow-md hover:border-blue-400 transition-all duration-300 flex flex-col justify-between hover:-translate-y-1"
        data-category="<?= e($art['categoria']) ?>"
        data-title="<?= e(mb_strtolower($art['titulo'] . ' ' . $art['extracto'])) ?>"
      >
        <div>
          <a href="?post=<?= e($art['slug']) ?>" class="block aspect-[16/8] overflow-hidden border-b border-stone-100 dark:border-slate-800 bg-stone-50">
            <div class="w-full h-full transition-transform duration-500 group-hover:scale-[1.03]">
              <?= renderCoverIllustration($art['ilustracion']) ?>
            </div>
          </a>
          <div class="p-5 space-y-2.5">
            <div class="flex items-center justify-between gap-2 text-[11px] font-mono-code text-stone-500 dark:text-slate-400">
              <span class="font-sans font-semibold px-2.5 py-0.5 rounded-full bg-blue-50 dark:bg-blue-950/60 text-blue-700 dark:text-blue-300">
                <?= e($art['categoria']) ?>
              </span>
              <span class="inline-flex items-center gap-1">
                <?= renderIcon('clock', 'w-3 h-3') ?>
                <?= e($art['lectura']) ?>
              </span>
            </div>
            <h3 class="text-base font-bold text-slate-900 dark:text-white leading-snug group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
              <a href="?post=<?= e($art['slug']) ?>"><?= e($art['titulo']) ?></a>
            </h3>
            <p class="text-xs text-stone-600 dark:text-slate-400 leading-relaxed"><?= e($art['extracto']) ?></p>
          </div>
        </div>

        <div class="px-5 py-3.5 border-t border-stone-100 dark:border-slate-800 flex items-center justify-between text-xs">
          <span class="font-mono-code text-[11px] text-stone-400"><?= e($art['fecha']) ?></span>
          <a href="?post=<?= e($art['slug']) ?>" class="inline-flex items-center gap-1 font-semibold text-blue-600 dark:text-blue-400">
            <span>Leer</span>
            <?= renderIcon('arrow-right', 'w-3.5 h-3.5') ?>
          </a>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>
