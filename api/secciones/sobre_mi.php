<section class="pt-6 pb-10 border-b border-stone-200 dark:border-slate-800 reveal-on-scroll">
  <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
    <div class="lg:col-span-4 flex justify-center">
      <div class="relative p-3 rounded-full bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-800 shadow-md">
        <div class="w-48 h-48 sm:w-52 sm:h-52 rounded-full overflow-hidden border-4 border-stone-100 dark:border-slate-800">
          <img
            src="<?= e($perfil['foto_perfil']) ?>"
            onerror="this.onerror=null;this.src='<?= e($perfil['foto_perfil_fallback']) ?>';"
            alt="Retrato de Jairo Manuel Blas García"
            class="w-full h-full object-cover"
          />
        </div>
        <div class="absolute bottom-2 right-2 w-14 h-14 rounded-full bg-white dark:bg-slate-900 p-1 shadow-lg border border-stone-200 dark:border-slate-700">
          <img
            src="<?= e($perfil['logo_uns']) ?>"
            onerror="this.onerror=null;this.src='<?= e($perfil['logo_uns_fallback']) ?>';"
            alt="Escudo UNS"
            class="w-full h-full rounded-full object-cover"
          />
        </div>
      </div>
    </div>

    <div class="lg:col-span-8 space-y-4">
      <p class="font-mono-code text-xs uppercase tracking-widest text-blue-600 dark:text-blue-400 font-semibold">Sobre mí</p>
      <h1 class="font-serif-ed text-3xl sm:text-4xl font-bold text-slate-900 dark:text-white">
        <?= e($perfil['nombre']) ?>
      </h1>
      <p class="text-sm font-medium text-blue-700 dark:text-blue-400">
        <?= e($perfil['rol']) ?>
      </p>
      <div class="space-y-2 text-sm sm:text-base text-stone-600 dark:text-slate-300 leading-relaxed">
        <?php foreach ($perfil['sobre_mi_parrafos'] as $p): ?>
          <p><?= e($p) ?></p>
        <?php endforeach; ?>
      </div>

      <ul class="space-y-2 text-xs sm:text-sm text-stone-700 dark:text-slate-300 pt-1">
        <?php foreach ($perfil['sobre_mi_vinetas'] as $punto): ?>
          <li class="flex items-start gap-2.5">
            <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-blue-600 dark:bg-blue-400 shrink-0"></span>
            <span><?= e($punto) ?></span>
          </li>
        <?php endforeach; ?>
      </ul>

      <div class="flex flex-wrap gap-3 pt-2">
        <a href="<?= e($perfil['enlaces']['github']) ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-slate-900 dark:bg-blue-600 text-white text-xs font-semibold hover:opacity-90 transition">
          <?= renderIcon('github', 'w-4 h-4') ?>
          <span>GitHub (@JairoBg03)</span>
        </a>
        <a href="<?= e($perfil['enlaces']['linkedin']) ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-700 text-xs font-semibold text-slate-800 dark:text-slate-200 hover:border-blue-500 transition">
          <?= renderIcon('linkedin', 'w-4 h-4 text-blue-600') ?>
          <span>LinkedIn</span>
        </a>
        <a href="<?= e($perfil['enlaces']['orcid']) ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-700 text-xs font-semibold text-slate-800 dark:text-slate-200 hover:border-emerald-600 transition">
          <?= renderIcon('orcid', 'w-4 h-4 text-emerald-600') ?>
          <span>ORCID <?= e($perfil['enlaces']['orcid_id']) ?></span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Formación y Casa de Estudios -->
<section class="py-10 border-b border-stone-200 dark:border-slate-800 reveal-on-scroll">
  <div class="rounded-3xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-800 p-6 sm:p-8 shadow-sm flex flex-col sm:flex-row items-start sm:items-center gap-6">
    <div class="w-20 h-20 rounded-full p-1.5 bg-red-50 dark:bg-red-950/40 border border-red-200 dark:border-red-900 shrink-0">
      <img
        src="<?= e($perfil['logo_uns']) ?>"
        onerror="this.onerror=null;this.src='<?= e($perfil['logo_uns_fallback']) ?>';"
        alt="Universidad Nacional del Santa"
        class="w-full h-full rounded-full object-cover bg-white"
      />
    </div>
    <div class="space-y-1.5">
      <div class="inline-flex items-center gap-1.5 text-xs font-semibold text-red-700 dark:text-red-400">
        <?= renderIcon('graduation', 'w-4 h-4') ?>
        <span>Casa de Estudios &amp; Filiación Académica</span>
      </div>
      <h2 class="text-xl font-bold text-slate-900 dark:text-white"><?= e($perfil['universidad']) ?></h2>
      <p class="text-sm text-stone-600 dark:text-slate-300"><?= e($perfil['escuela']) ?> — <?= e($perfil['ubicacion']) ?></p>
      <p class="text-xs text-stone-500 dark:text-slate-400 leading-relaxed pt-1">
        Participación activa en investigación aplicada en Inteligencia Artificial, representación estudiantil universitaria y desarrollo de proyectos de ingeniería de software de código abierto.
      </p>
    </div>
  </div>
</section>

<!-- Mi Línea de Trabajo (con viñetas) -->
<section class="py-10 border-b border-stone-200 dark:border-slate-800 reveal-on-scroll">
  <div class="mb-6">
    <p class="font-mono-code text-xs uppercase tracking-widest text-blue-600 dark:text-blue-400 font-semibold">Especialización</p>
    <h2 class="font-serif-ed text-2xl font-bold text-slate-900 dark:text-white mt-0.5">Mi Línea de Trabajo</h2>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
    <?php foreach ($perfil['linea_trabajo'] as $linea): ?>
      <div class="rounded-2xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-800 p-6 shadow-sm space-y-3">
        <div class="flex items-center gap-3">
          <div class="w-9 h-9 rounded-xl bg-blue-50 dark:bg-blue-950/60 text-blue-600 dark:text-blue-400 flex items-center justify-center shrink-0">
            <?= renderIcon($linea['icono'], 'w-5 h-5') ?>
          </div>
          <div>
            <h3 class="text-sm font-bold text-slate-900 dark:text-white"><?= e($linea['titulo']) ?></h3>
            <p class="text-xs text-stone-500 dark:text-slate-400"><?= e($linea['resumen']) ?></p>
          </div>
        </div>
        <ul class="space-y-1.5 pt-2 border-t border-stone-100 dark:border-slate-800 text-xs text-stone-700 dark:text-slate-300">
          <?php foreach ($linea['vinetas'] as $item): ?>
            <li class="flex items-start gap-2">
              <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-blue-600 dark:bg-blue-400 shrink-0"></span>
              <span><?= e($item) ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- Hobbies e Intereses (con viñetas) -->
<section class="py-10 border-b border-stone-200 dark:border-slate-800 reveal-on-scroll">
  <div class="mb-6">
    <p class="font-mono-code text-xs uppercase tracking-widest text-emerald-700 dark:text-emerald-400 font-semibold">Lado Personal</p>
    <h2 class="font-serif-ed text-2xl font-bold text-slate-900 dark:text-white mt-0.5">Mis Hobbies e Intereses</h2>
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
        <ul class="space-y-1.5 text-xs text-stone-600 dark:text-slate-300">
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

<!-- Stack Técnico -->
<section class="py-10 reveal-on-scroll">
  <div class="mb-6">
    <p class="font-mono-code text-xs uppercase tracking-widest text-blue-600 dark:text-blue-400 font-semibold">Capacidades Técnicas</p>
    <h2 class="font-serif-ed text-2xl font-bold text-slate-900 dark:text-white mt-0.5">Tecnologías y Herramientas</h2>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
    <?php
    $iconMap = [
        'IA & Visión Computacional' => 'cpu',
        'Móvil & Backend' => 'layers',
        'Web & Herramientas' => 'shield',
    ];
    foreach ($perfil['stack'] as $grupo => $items):
        $ic = $iconMap[$grupo] ?? 'code';
    ?>
      <div class="rounded-2xl bg-white dark:bg-slate-900 border border-stone-200 dark:border-slate-800 p-6 shadow-sm space-y-4">
        <div class="flex items-center gap-2.5">
          <div class="w-9 h-9 rounded-xl bg-blue-50 dark:bg-blue-950/60 text-blue-600 dark:text-blue-400 flex items-center justify-center">
            <?= renderIcon($ic, 'w-5 h-5') ?>
          </div>
          <h3 class="text-sm font-bold text-slate-900 dark:text-white"><?= e($grupo) ?></h3>
        </div>
        <div class="flex flex-wrap gap-2">
          <?php foreach ($items as $tec): ?>
            <span class="font-mono-code text-xs px-2.5 py-1 rounded-lg bg-stone-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 border border-stone-200/80 dark:border-slate-700">
              <?= e($tec) ?>
            </span>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
