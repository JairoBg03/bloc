<?php

declare(strict_types=1);

/**
 * ============================================================================
 * COMPONENTE: LÓGICA INTERACTIVA (JAVASCRIPT VANILLA)
 * ============================================================================
 * Bloques incluidos:
 *   1. Toggle de Tema Claro / Oscuro
 *   2. Menú Desplegable Móvil
 *   3. Controlador de Sliders / Carruseles (botones, puntos, autoplay, swipe)
 *   4. Buscador y Filtro en Tiempo Real de Artículos
 *   5. Filtro por Categoría de Proyectos
 *   6. Animación Reveal al Hacer Scroll
 *   7. Barra de Progreso de Lectura en Artículos
 *   8. Copiar al Portapapeles (BibTeX y Bloques de Código)
 * ============================================================================
 */
?>
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
