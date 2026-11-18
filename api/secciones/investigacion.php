<section class="pt-6 pb-8 border-b border-stone-200 dark:border-slate-800 reveal-on-scroll">
  <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center">
    <div class="lg:col-span-8 space-y-3">
      <p class="font-mono-code text-xs uppercase tracking-widest text-red-700 dark:text-red-400 font-semibold">Producción Académica</p>
      <h1 class="font-serif-ed text-3xl sm:text-4xl font-bold text-slate-900 dark:text-white">Investigación &amp; Publicaciones</h1>
      <p class="text-sm text-stone-600 dark:text-slate-300 leading-relaxed max-w-2xl">
        Líneas de trabajo en Visión Computacional, Diagnóstico Médico asistido por Redes Neuronales Convolucionales (CNN) y Procesamiento Digital de Imágenes desarrolladas desde la <strong><?= e($perfil['universidad']) ?></strong>.
      </p>
    </div>
    <div class="lg:col-span-4">
      <div class="rounded-2xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-800 p-4 flex items-center gap-4 shadow-sm">
        <img
          src="<?= e($perfil['logo_uns']) ?>"
          onerror="this.onerror=null;this.src='<?= e($perfil['logo_uns_fallback']) ?>';"
          alt="Escudo UNS"
          class="w-14 h-14 rounded-full object-cover border border-red-200 dark:border-red-900 shrink-0 bg-white"
        />
        <div class="space-y-1">
          <p class="text-xs font-bold text-slate-900 dark:text-white">Registro ORCID Verificado</p>
          <p class="font-mono-code text-xs text-emerald-700 dark:text-emerald-400"><?= e($perfil['enlaces']['orcid_id']) ?></p>
          <a href="<?= e($perfil['enlaces']['orcid']) ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 text-xs font-semibold text-blue-600 dark:text-blue-400 hover:underline">
            <span>Ver perfil en orcid.org</span>
            <?= renderIcon('external', 'w-3 h-3') ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Lista de Publicaciones Científicas -->
<section class="py-10 space-y-6 reveal-on-scroll">
  <?php foreach ($publicaciones as $pub): ?>
    <article class="rounded-3xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-800 overflow-hidden shadow-sm grid grid-cols-1 lg:grid-cols-12">
      <div class="lg:col-span-4 bg-stone-50 dark:bg-slate-800/70 p-5 border-b lg:border-b-0 lg:border-r border-stone-200 dark:border-slate-800 flex items-center justify-center">
        <div class="w-full aspect-[16/9] rounded-xl overflow-hidden border border-stone-200 dark:border-slate-700 bg-white">
          <?= renderCoverIllustration($pub['ilustracion']) ?>
        </div>
      </div>
      <div class="lg:col-span-8 p-6 sm:p-8 space-y-4">
        <div class="flex flex-wrap items-center justify-between gap-2">
          <span class="text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded-full bg-red-50 dark:bg-red-950/50 text-red-800 dark:text-red-300 border border-red-200 dark:border-red-900">
            <?= e($pub['tipo']) ?>
          </span>
          <span class="font-mono-code text-xs text-stone-500 dark:text-slate-400"><?= e($pub['medio']) ?> · <?= e($pub['anio']) ?></span>
        </div>

        <h2 class="font-serif-ed text-xl sm:text-2xl font-bold text-slate-900 dark:text-white leading-snug">
          <?= e($pub['titulo']) ?>
        </h2>

        <p class="text-xs text-stone-500 dark:text-slate-400">
          <strong class="text-slate-800 dark:text-slate-200">Autores:</strong> <?= e($pub['autores']) ?>
        </p>

        <p class="text-sm text-stone-600 dark:text-slate-300 leading-relaxed">
          <?= e($pub['resumen']) ?>
        </p>

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

        <div class="flex flex-wrap gap-1.5">
          <?php foreach ($pub['palabras_clave'] as $kw): ?>
            <span class="font-mono-code text-[11px] px-2.5 py-0.5 rounded-md bg-stone-100 dark:bg-slate-800 text-stone-700 dark:text-slate-300">
              <?= e($kw) ?>
            </span>
          <?php endforeach; ?>
        </div>

        <div class="flex flex-wrap items-center gap-3 pt-2 border-t border-stone-100 dark:border-slate-800">
          <a href="<?= e($pub['url']) ?>" target="_blank" rel="noopener noreferrer"
            class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold transition">
            <span>DOI / Documento: <?= e($pub['doi']) ?></span>
            <?= renderIcon('external', 'w-3.5 h-3.5') ?>
          </a>
          <button type="button" class="copy-btn inline-flex items-center gap-1.5 px-3.5 py-2 rounded-xl bg-stone-100 dark:bg-slate-800 border border-stone-200 dark:border-slate-700 text-xs font-semibold text-slate-800 dark:text-slate-200 hover:border-blue-500 transition cursor-pointer"
            data-copy="<?= e($pub['bibtex']) ?>">
            <?= renderIcon('copy', 'w-3.5 h-3.5') ?>
            <span>Copiar Cita BibTeX</span>
          </button>
        </div>
      </div>
    </article>
  <?php endforeach; ?>
</section>
