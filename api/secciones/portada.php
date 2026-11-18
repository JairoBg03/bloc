<?php
$proyectosDestacados = array_values(array_filter($proyectos, static fn(array $p): bool => !empty($p['destacado'])));
$categoriasArticulos = array_values(array_unique(array_map(static fn(array $a): string => $a['categoria'], $articulos)));
?>

<!-- 1. PRESENTACIÓN PERSONAL & COSAS SOBRE MÍ -->
<section class="pt-6 pb-10 border-b border-stone-200 dark:border-slate-800 reveal-on-scroll">
  <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
    <div class="lg:col-span-8 space-y-4">
      <div class="inline-flex items-center gap-2.5 px-3 py-1.5 rounded-full bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-700 shadow-sm">
        <img
          src="<?= e($perfil['logo_uns']) ?>"
          onerror="this.onerror=null;this.src='<?= e($perfil['logo_uns_fallback']) ?>';"
          alt="Escudo Universidad Nacional del Santa"
          class="w-6 h-6 rounded-full object-cover border border-red-200 dark:border-red-900 bg-white shrink-0"
        />
        <span class="text-xs font-medium text-stone-700 dark:text-slate-300">
          <?= e($perfil['universidad']) ?> · <?= e($perfil['ubicacion']) ?>
        </span>
      </div>

      <h1 class="font-serif-ed text-3xl sm:text-4xl lg:text-[2.6rem] font-bold text-slate-900 dark:text-slate-50 leading-[1.15] tracking-tight">
        <?= e($perfil['titular_editorial']) ?>
      </h1>

      <div class="space-y-2.5 text-sm sm:text-base text-stone-600 dark:text-slate-300 leading-relaxed max-w-2xl">
        <?php foreach ($perfil['sobre_mi_parrafos'] as $parrafo): ?>
          <p><?= e($parrafo) ?></p>
        <?php endforeach; ?>
      </div>

      <!-- Viñetas rápidas sobre mí -->
      <div class="rounded-2xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-800 p-4 sm:p-5 shadow-sm max-w-2xl">
        <p class="font-mono-code text-xs font-bold uppercase tracking-wider text-blue-600 dark:text-blue-400 mb-2.5">Cosas sobre mí</p>
        <ul class="space-y-2 text-xs sm:text-sm text-stone-700 dark:text-slate-300">
          <?php foreach ($perfil['sobre_mi_vinetas'] as $punto): ?>
            <li class="flex items-start gap-2.5">
              <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-blue-600 dark:bg-blue-400 shrink-0"></span>
              <span><?= e($punto) ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="flex flex-wrap items-center gap-3 pt-1">
        <a href="?page=sobre-mi" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold shadow-sm transition-all hover:-translate-y-0.5">
          <?= renderIcon('book', 'w-4 h-4') ?>
          <span>Más sobre mí</span>
        </a>
        <a href="<?= e($perfil['enlaces']['github']) ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-3.5 py-2.5 rounded-xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-700 hover:border-blue-500 text-slate-800 dark:text-slate-200 text-sm font-medium transition-all hover:-translate-y-0.5">
          <?= renderIcon('github', 'w-4 h-4') ?>
          <span>GitHub</span>
        </a>
        <a href="<?= e($perfil['enlaces']['linkedin']) ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-3.5 py-2.5 rounded-xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-700 hover:border-blue-500 text-slate-800 dark:text-slate-200 text-sm font-medium transition-all hover:-translate-y-0.5">
          <?= renderIcon('linkedin', 'w-4 h-4 text-blue-600') ?>
          <span>LinkedIn</span>
        </a>
        <a href="<?= e($perfil['enlaces']['orcid']) ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-3.5 py-2.5 rounded-xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-700 hover:border-emerald-600 text-slate-800 dark:text-slate-200 text-sm font-medium transition-all hover:-translate-y-0.5">
          <?= renderIcon('orcid', 'w-4 h-4 text-emerald-600') ?>
          <span>ORCID</span>
        </a>
      </div>
    </div>

    <!-- Retrato Circular + Sello Circular UNS -->
    <div class="lg:col-span-4 flex flex-col items-center lg:items-end">
      <div class="relative p-6 rounded-3xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-800 shadow-sm w-full max-w-xs text-center">
        <div class="relative mx-auto w-36 h-36 sm:w-40 sm:h-40">
          <div class="w-full h-full rounded-full p-1.5 bg-gradient-to-br from-stone-200 via-blue-100 to-stone-200 dark:from-slate-700 dark:via-blue-900 dark:to-slate-800 shadow-md overflow-hidden group">
            <img
              src="<?= e($perfil['foto_perfil']) ?>"
              onerror="this.onerror=null;this.src='<?= e($perfil['foto_perfil_fallback']) ?>';"
              alt="Foto de perfil de Jairo Manuel Blas García"
              class="w-full h-full rounded-full object-cover transition-transform duration-500 group-hover:scale-105"
            />
          </div>
          <div class="absolute -bottom-1 -right-1 w-12 h-12 rounded-full bg-white dark:bg-slate-900 p-1 shadow-md border border-stone-200 dark:border-slate-700" title="Universidad Nacional del Santa">
            <img
              src="<?= e($perfil['logo_uns']) ?>"
              onerror="this.onerror=null;this.src='<?= e($perfil['logo_uns_fallback']) ?>';"
              alt="Logo circular UNS"
              class="w-full h-full rounded-full object-cover"
            />
          </div>
        </div>

        <div class="mt-4 space-y-1">
          <p class="font-bold text-slate-900 dark:text-white text-base"><?= e($perfil['nombre']) ?></p>
          <p class="font-mono-code text-xs text-blue-600 dark:text-blue-400"><?= e($perfil['usuario']) ?></p>
          <p class="text-xs text-stone-500 dark:text-slate-400 pt-0.5">Ing. de Sistemas e Informática</p>
        </div>

        <div class="grid grid-cols-2 gap-2 mt-4 pt-4 border-t border-stone-100 dark:border-slate-800 text-left">
          <?php foreach ($perfil['metricas'] as $m): ?>
            <div class="p-2 rounded-xl bg-stone-50 dark:bg-slate-800/70">
              <div class="text-sm font-bold text-slate-900 dark:text-white leading-none"><?= e($m['valor']) ?></div>
              <div class="text-[11px] text-stone-500 dark:text-slate-400 mt-1 leading-tight"><?= e($m['etiqueta']) ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 2. MI LÍNEA DE TRABAJO (CON VIÑETAS) -->
<section class="py-10 border-b border-stone-200 dark:border-slate-800 reveal-on-scroll">
  <div class="mb-6">
    <p class="font-mono-code text-xs uppercase tracking-widest text-blue-600 dark:text-blue-400 font-semibold">Enfoque Técnico</p>
    <h2 class="font-serif-ed text-2xl font-bold text-slate-900 dark:text-white mt-0.5">Mi Línea de Trabajo</h2>
    <p class="text-sm text-stone-600 dark:text-slate-300 mt-1">Áreas principales en las que investigo, diseño arquitecturas y construyo software.</p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
    <?php foreach ($perfil['linea_trabajo'] as $linea): ?>
      <div class="rounded-2xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-800 p-6 shadow-sm hover:border-blue-400/70 transition-colors space-y-3">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-xl bg-blue-50 dark:bg-blue-950/60 text-blue-600 dark:text-blue-400 flex items-center justify-center shrink-0">
            <?= renderIcon($linea['icono'], 'w-5 h-5') ?>
          </div>
          <div>
            <h3 class="text-base font-bold text-slate-900 dark:text-white"><?= e($linea['titulo']) ?></h3>
            <p class="text-xs text-stone-500 dark:text-slate-400"><?= e($linea['resumen']) ?></p>
          </div>
        </div>
        <ul class="space-y-2 pt-2 border-t border-stone-100 dark:border-slate-800 text-xs sm:text-[13px] text-stone-700 dark:text-slate-300">
          <?php foreach ($linea['vinetas'] as $item): ?>
            <li class="flex items-start gap-2.5 leading-relaxed">
              <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-blue-600 dark:bg-blue-400 shrink-0"></span>
              <span><?= e($item) ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- 3. ALGUNOS HOBBIES E INTERESES PERSONALES (CON VIÑETAS) -->
<section class="py-10 border-b border-stone-200 dark:border-slate-800 reveal-on-scroll">
  <div class="mb-6">
    <p class="font-mono-code text-xs uppercase tracking-widest text-emerald-700 dark:text-emerald-400 font-semibold">Fuera de la Rutina</p>
    <h2 class="font-serif-ed text-2xl font-bold text-slate-900 dark:text-white mt-0.5">Algunos Hobbies e Intereses</h2>
    <p class="text-sm text-stone-600 dark:text-slate-300 mt-1">Actividades que disfruto en mi tiempo libre y alimentan mi curiosidad diaria.</p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
    <?php foreach ($perfil['hobbies'] as $hobby): ?>
      <div class="rounded-2xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-800 p-5 shadow-sm space-y-3">
        <div class="flex items-center gap-2.5">
          <div class="w-9 h-9 rounded-xl bg-emerald-50 dark:bg-emerald-950/50 text-emerald-700 dark:text-emerald-400 flex items-center justify-center shrink-0">
            <?= renderIcon($hobby['icono'], 'w-4 h-4') ?>
          </div>
          <h3 class="text-sm font-bold text-slate-900 dark:text-white"><?= e($hobby['titulo']) ?></h3>
        </div>
        <ul class="space-y-2 text-xs text-stone-600 dark:text-slate-300 leading-relaxed">
          <?php foreach ($hobby['vinetas'] as $hv): ?>
            <li class="flex items-start gap-2">
              <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-emerald-600 dark:bg-emerald-400 shrink-0"></span>
              <span><?= e($hv) ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- 4. MIS TRABAJOS Y PROYECTOS (SLIDER INTERACTIVO + VIÑETAS) -->
<section class="py-10 border-b border-stone-200 dark:border-slate-800 reveal-on-scroll" data-carousel="proyectos">
  <div class="flex flex-wrap items-end justify-between gap-4 mb-5">
    <div>
      <p class="font-mono-code text-xs uppercase tracking-widest text-blue-600 dark:text-blue-400 font-semibold">Portafolio Técnico</p>
      <h2 class="font-serif-ed text-2xl font-bold text-slate-900 dark:text-white mt-0.5">Trabajos &amp; Proyectos Destacados</h2>
    </div>
    <div class="flex items-center gap-2">
      <span class="font-mono-code text-xs text-stone-500 dark:text-slate-400 mr-1" data-carousel-counter>01 / <?= str_pad((string)count($proyectosDestacados), 2, '0', STR_PAD_LEFT) ?></span>
      <button type="button" data-carousel-prev aria-label="Proyecto anterior" class="p-2 rounded-xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-700 text-slate-700 dark:text-slate-200 hover:border-blue-500 hover:text-blue-600 transition cursor-pointer">
        <?= renderIcon('chevron-left', 'w-4 h-4') ?>
      </button>
      <button type="button" data-carousel-next aria-label="Siguiente proyecto" class="p-2 rounded-xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-700 text-slate-700 dark:text-slate-200 hover:border-blue-500 hover:text-blue-600 transition cursor-pointer">
        <?= renderIcon('chevron-right', 'w-4 h-4') ?>
      </button>
      <a href="?page=proyectos" class="ml-1 text-xs font-semibold text-blue-600 dark:text-blue-400 hover:underline hidden sm:inline-flex items-center gap-1">
        <span>Ver los 12</span>
        <?= renderIcon('arrow-right', 'w-3.5 h-3.5') ?>
      </a>
    </div>
  </div>

  <div class="overflow-hidden rounded-2xl border border-stone-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-sm">
    <div class="flex transition-transform duration-500 ease-out" data-carousel-track>
      <?php foreach ($proyectosDestacados as $proj): ?>
        <div class="w-full shrink-0 grid grid-cols-1 md:grid-cols-12 items-stretch">
          <div class="md:col-span-5 bg-stone-50 dark:bg-slate-800/60 border-b md:border-b-0 md:border-r border-stone-200 dark:border-slate-800 p-4 flex items-center justify-center">
            <div class="w-full aspect-[16/9] md:aspect-[4/3] rounded-xl overflow-hidden border border-stone-200/80 dark:border-slate-700 shadow-inner bg-white">
              <?= renderCoverIllustration($proj['ilustracion']) ?>
            </div>
          </div>
          <div class="md:col-span-7 p-6 sm:p-8 flex flex-col justify-between gap-4">
            <div class="space-y-3">
              <div class="flex flex-wrap items-center gap-2 text-xs">
                <span class="px-2.5 py-1 rounded-full bg-blue-50 dark:bg-blue-950/60 text-blue-700 dark:text-blue-300 font-semibold border border-blue-200/70 dark:border-blue-800">
                  <?= e($proj['categoria']) ?>
                </span>
                <span class="font-mono-code text-stone-500 dark:text-slate-400"><?= e($proj['lenguaje']) ?> · <?= e($proj['anio']) ?></span>
              </div>
              <h3 class="text-xl sm:text-2xl font-bold text-slate-900 dark:text-white"><?= e($proj['nombre']) ?></h3>
              <p class="text-sm text-stone-600 dark:text-slate-300 leading-relaxed"><?= e($proj['resumen']) ?></p>

              <?php if (!empty($proj['vinetas'])): ?>
                <ul class="space-y-1.5 text-xs text-stone-700 dark:text-slate-300 pt-1">
                  <?php foreach ($proj['vinetas'] as $pv): ?>
                    <li class="flex items-start gap-2">
                      <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-blue-600 dark:bg-blue-400 shrink-0"></span>
                      <span><?= e($pv) ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>

              <div class="flex flex-wrap gap-1.5 pt-1">
                <?php foreach ($proj['tags'] as $tag): ?>
                  <span class="font-mono-code text-[11px] px-2.5 py-0.5 rounded-md bg-stone-100 dark:bg-slate-800 text-stone-700 dark:text-slate-300 border border-stone-200/80 dark:border-slate-700">
                    <?= e($tag) ?>
                  </span>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="flex items-center justify-between pt-3 border-t border-stone-100 dark:border-slate-800">
              <a href="<?= e($proj['url']) ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-semibold text-blue-600 dark:text-blue-400 hover:underline">
                <?= renderIcon('github', 'w-4 h-4') ?>
                <span>Ver repositorio en GitHub</span>
                <?= renderIcon('external', 'w-3.5 h-3.5') ?>
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="flex items-center justify-center gap-2 mt-4" data-carousel-dots>
    <?php foreach ($proyectosDestacados as $idx => $proj): ?>
      <button type="button" data-carousel-dot="<?= $idx ?>" aria-label="Ir al proyecto <?= $idx + 1 ?>"
        class="h-2 rounded-full transition-all cursor-pointer <?= $idx === 0 ? 'w-6 bg-blue-600' : 'w-2 bg-stone-300 dark:bg-slate-700' ?>">
      </button>
    <?php endforeach; ?>
  </div>
</section>

<!-- 5. PUBLICACIONES CIENTÍFICAS (SLIDER INTERACTIVO + VIÑETAS) -->
<section class="py-10 border-b border-stone-200 dark:border-slate-800 reveal-on-scroll" data-carousel="publicaciones">
  <div class="flex flex-wrap items-end justify-between gap-4 mb-5">
    <div>
      <p class="font-mono-code text-xs uppercase tracking-widest text-red-700 dark:text-red-400 font-semibold">Investigación &amp; Academia</p>
      <h2 class="font-serif-ed text-2xl font-bold text-slate-900 dark:text-white mt-0.5">Publicaciones Científicas e Indexadas</h2>
    </div>
    <div class="flex items-center gap-2">
      <span class="font-mono-code text-xs text-stone-500 dark:text-slate-400 mr-1" data-carousel-counter>01 / <?= str_pad((string)count($publicaciones), 2, '0', STR_PAD_LEFT) ?></span>
      <button type="button" data-carousel-prev aria-label="Publicación anterior" class="p-2 rounded-xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-700 text-slate-700 dark:text-slate-200 hover:border-blue-500 transition cursor-pointer">
        <?= renderIcon('chevron-left', 'w-4 h-4') ?>
      </button>
      <button type="button" data-carousel-next aria-label="Siguiente publicación" class="p-2 rounded-xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-700 text-slate-700 dark:text-slate-200 hover:border-blue-500 transition cursor-pointer">
        <?= renderIcon('chevron-right', 'w-4 h-4') ?>
      </button>
      <a href="?page=investigacion" class="ml-1 text-xs font-semibold text-blue-600 dark:text-blue-400 hover:underline hidden sm:inline-flex items-center gap-1">
        <span>Ver sección académica</span>
        <?= renderIcon('arrow-right', 'w-3.5 h-3.5') ?>
      </a>
    </div>
  </div>

  <div class="overflow-hidden rounded-2xl border border-stone-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-sm">
    <div class="flex transition-transform duration-500 ease-out" data-carousel-track>
      <?php foreach ($publicaciones as $pub): ?>
        <div class="w-full shrink-0 p-6 sm:p-8 grid grid-cols-1 md:grid-cols-12 gap-6 items-center">
          <div class="md:col-span-7 space-y-3">
            <div class="flex flex-wrap items-center gap-2">
              <span class="text-[11px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-full bg-red-50 dark:bg-red-950/50 text-red-800 dark:text-red-300 border border-red-200/70 dark:border-red-900">
                <?= e($pub['tipo']) ?>
              </span>
              <span class="font-mono-code text-xs text-stone-500 dark:text-slate-400"><?= e($pub['anio']) ?> · <?= e($pub['medio']) ?></span>
            </div>
            <h3 class="font-serif-ed text-xl font-bold text-slate-900 dark:text-white leading-snug"><?= e($pub['titulo']) ?></h3>
            <p class="text-xs text-stone-500 dark:text-slate-400"><strong>Autores:</strong> <?= e($pub['autores']) ?></p>
            <p class="text-sm text-stone-600 dark:text-slate-300 leading-relaxed"><?= e($pub['resumen']) ?></p>

            <?php if (!empty($pub['vinetas'])): ?>
              <ul class="space-y-1.5 text-xs text-stone-700 dark:text-slate-300">
                <?php foreach ($pub['vinetas'] as $pubV): ?>
                  <li class="flex items-start gap-2">
                    <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-red-700 dark:bg-red-400 shrink-0"></span>
                    <span><?= e($pubV) ?></span>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>

            <div class="flex flex-wrap items-center gap-3 pt-2">
              <a href="<?= e($pub['url']) ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-xl bg-slate-900 dark:bg-blue-600 text-white text-xs font-semibold hover:opacity-90 transition">
                <span>DOI / Enlace: <?= e($pub['doi']) ?></span>
                <?= renderIcon('external', 'w-3.5 h-3.5') ?>
              </a>
              <button
                type="button"
                class="copy-btn inline-flex items-center gap-1.5 px-3 py-2 rounded-xl bg-stone-100 dark:bg-slate-800 text-slate-800 dark:text-slate-200 text-xs font-medium border border-stone-200 dark:border-slate-700 hover:border-blue-500 transition cursor-pointer"
                data-copy="<?= e($pub['bibtex']) ?>"
              >
                <?= renderIcon('copy', 'w-3.5 h-3.5') ?>
                <span>Copiar BibTeX</span>
              </button>
            </div>
          </div>
          <div class="md:col-span-5">
            <div class="rounded-xl overflow-hidden border border-stone-200 dark:border-slate-700 bg-stone-50 aspect-[16/9]">
              <?= renderCoverIllustration($pub['ilustracion']) ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="flex items-center justify-center gap-2 mt-4" data-carousel-dots>
    <?php foreach ($publicaciones as $idx => $pub): ?>
      <button type="button" data-carousel-dot="<?= $idx ?>" aria-label="Ir a publicación <?= $idx + 1 ?>"
        class="h-2 rounded-full transition-all cursor-pointer <?= $idx === 0 ? 'w-6 bg-red-700' : 'w-2 bg-stone-300 dark:bg-slate-700' ?>">
      </button>
    <?php endforeach; ?>
  </div>
</section>

<!-- 6. ENTRADAS DEL BLOG PERSONAL + FILTROS -->
<section class="py-10 reveal-on-scroll">
  <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-6">
    <div>
      <p class="font-mono-code text-xs uppercase tracking-widest text-blue-600 dark:text-blue-400 font-semibold">Bitácora Personal &amp; Técnica</p>
      <h2 class="font-serif-ed text-2xl font-bold text-slate-900 dark:text-white mt-0.5">Artículos del Blog</h2>
    </div>

    <div class="flex flex-wrap items-center gap-2">
      <div class="relative">
        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-stone-400">
          <?= renderIcon('search', 'w-3.5 h-3.5') ?>
        </span>
        <input
          type="search"
          id="article-search"
          placeholder="Buscar artículo..."
          class="pl-8 pr-3 py-1.5 rounded-xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-700 text-xs text-slate-800 dark:text-slate-200 focus:outline-none focus:border-blue-500 w-48 sm:w-56"
        />
      </div>
    </div>
  </div>

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
        class="article-card group rounded-2xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-800 overflow-hidden shadow-sm hover:shadow-md hover:border-blue-400/70 transition-all duration-300 flex flex-col justify-between hover:-translate-y-1"
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
            <p class="text-xs text-stone-600 dark:text-slate-400 leading-relaxed line-clamp-3">
              <?= e($art['extracto']) ?>
            </p>
          </div>
        </div>

        <div class="px-5 py-3.5 border-t border-stone-100 dark:border-slate-800 flex items-center justify-between text-xs">
          <span class="font-mono-code text-[11px] text-stone-400 inline-flex items-center gap-1">
            <?= renderIcon('calendar', 'w-3 h-3') ?>
            <?= e($art['fecha']) ?>
          </span>
          <a href="?post=<?= e($art['slug']) ?>" class="inline-flex items-center gap-1 font-semibold text-blue-600 dark:text-blue-400 group-hover:translate-x-0.5 transition-transform">
            <span>Leer artículo</span>
            <?= renderIcon('arrow-right', 'w-3.5 h-3.5') ?>
          </a>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>
