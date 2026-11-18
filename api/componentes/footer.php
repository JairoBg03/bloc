<?php

declare(strict_types=1);

/**
 * ============================================================================
 * COMPONENTE: PIE DE PÁGINA Y NOTIFICACIÓN TOAST
 * ============================================================================
 */
?>
  <!-- Pie de Página Editorial -->
  <footer class="border-t border-stone-200 dark:border-slate-800 bg-white/70 dark:bg-slate-950 mt-8">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-8 flex flex-col sm:flex-row items-center justify-between gap-4">
      <div class="flex items-center gap-3">
        <img
          src="<?= e($perfil['logo_uns']) ?>"
          onerror="this.onerror=null;this.src='<?= e($perfil['logo_uns_fallback']) ?>';"
          alt="<?= e($perfil['universidad']) ?>"
          class="w-9 h-9 rounded-full object-cover border border-red-200 dark:border-red-900 bg-white shrink-0"
        />
        <div class="text-xs">
          <p class="font-bold text-slate-900 dark:text-white"><?= e($perfil['nombre']) ?></p>
          <p class="text-stone-500 dark:text-slate-400"><?= e($perfil['universidad']) ?> · <?= e($perfil['ubicacion']) ?></p>
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

  <!-- Toast de Notificación para Copiar Código o BibTeX -->
  <div id="toast" class="fixed bottom-5 right-5 z-50 hidden items-center gap-2 px-4 py-2.5 rounded-xl bg-slate-900 dark:bg-blue-600 text-white text-xs font-semibold shadow-lg">
    <?= renderIcon('check', 'w-4 h-4 text-emerald-400 dark:text-white') ?>
    <span id="toast-msg">Copiado al portapapeles</span>
  </div>
