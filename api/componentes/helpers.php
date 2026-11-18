<?php

declare(strict_types=1);

/**
 * ============================================================================
 * HELPERS GLOBALES DE PLANTILLA, ICONOS E ILUSTRACIONES SVG
 * ============================================================================
 */

function e(string $texto): string
{
    return htmlspecialchars($texto, ENT_QUOTES, 'UTF-8');
}

function renderIcon(string $name, string $class = 'w-4 h-4'): string
{
    $icons = [
        'github' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>',
        'linkedin' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M19 3a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h14m-.5 15.5v-5.3a3.26 3.26 0 00-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 011.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 001.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 00-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/></svg>',
        'orcid' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.86 16.5H6.44V8.97h1.42v7.53zm-.71-8.57a.85.85 0 110-1.7.85.85 0 010 1.7zm6.05 8.57h-3.13V8.97h3.1c2.88 0 4.38 1.78 4.38 3.76 0 2.09-1.56 3.77-4.35 3.77zm-.1-6.28h-1.6v5.03h1.58c2.04 0 2.97-1.16 2.97-2.52 0-1.36-.92-2.51-2.95-2.51z"/></svg>',
        'arrow-right' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>',
        'arrow-left' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>',
        'chevron-left' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m15 18-6-6 6-6"/></svg>',
        'chevron-right' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg>',
        'clock' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
        'calendar' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="18" height="18" x="3" y="4" rx="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>',
        'book' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"/></svg>',
        'code' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>',
        'copy' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>',
        'check' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>',
        'search' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>',
        'external' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" x2="21" y1="14" y2="3"/></svg>',
        'sun' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/></svg>',
        'moon' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/></svg>',
        'graduation' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>',
        'cpu' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="16" height="16" x="4" y="4" rx="2"/><rect width="6" height="6" x="9" y="9" rx="1"/><path d="M15 2v2"/><path d="M15 20v2"/><path d="M2 15h2"/><path d="M2 9h2"/><path d="M20 15h2"/><path d="M20 9h2"/><path d="M9 2v2"/><path d="M9 20v2"/></svg>',
        'shield' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/></svg>',
        'layers' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>',
        'menu' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>',
        'sparkles' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3v18M3 12h18M5.6 5.6l12.8 12.8M18.4 5.6 5.6 18.4"/></svg>',
    ];

    return $icons[$name] ?? '';
}

function renderCoverIllustration(string $key): string
{
    $plates = [
        'skin-cnn' => <<<'SVG'
<svg viewBox="0 0 480 220" class="w-full h-full" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Diagrama pipeline CNN con CASE y C-BAFT">
  <rect width="480" height="220" fill="#F1F5F9"/>
  <path d="M0 40H480M0 110H480M0 180H480M80 0V220M240 0V220M400 0V220" stroke="#E2E8F0" stroke-width="1"/>
  <rect x="28" y="66" width="84" height="88" rx="10" fill="#FFFFFF" stroke="#CBD5E1" stroke-width="1.5"/>
  <circle cx="70" cy="106" r="22" fill="#FEE2E2" stroke="#B91C1C" stroke-width="1.5"/>
  <circle cx="70" cy="106" r="9" fill="#B91C1C" opacity="0.75"/>
  <text x="70" y="143" text-anchor="middle" font-size="10" font-family="monospace" fill="#334155">RGB Input</text>
  <path d="M118 110H148" stroke="#2563EB" stroke-width="2" stroke-dasharray="4 3"/>
  <rect x="152" y="54" width="102" height="112" rx="10" fill="#EFF6FF" stroke="#2563EB" stroke-width="1.5"/>
  <text x="203" y="88" text-anchor="middle" font-size="11" font-weight="700" font-family="sans-serif" fill="#1E3A8A">CASE +</text>
  <text x="203" y="106" text-anchor="middle" font-size="11" font-weight="700" font-family="sans-serif" fill="#1E3A8A">C-BAFT</text>
  <rect x="171" y="122" width="64" height="24" rx="5" fill="#DBEAFE"/>
  <text x="203" y="138" text-anchor="middle" font-size="9" font-family="monospace" fill="#1D4ED8">Enhancement</text>
  <path d="M260 110H290" stroke="#2563EB" stroke-width="2"/>
  <rect x="294" y="62" width="68" height="96" rx="8" fill="#FFFFFF" stroke="#475569" stroke-width="1.5"/>
  <rect x="306" y="76" width="12" height="68" rx="3" fill="#2563EB" opacity="0.25"/>
  <rect x="323" y="84" width="12" height="52" rx="3" fill="#2563EB" opacity="0.55"/>
  <rect x="340" y="92" width="12" height="36" rx="3" fill="#2563EB"/>
  <text x="328" y="175" text-anchor="middle" font-size="10" font-family="monospace" fill="#334155">CNN Layers</text>
  <path d="M366 110H392" stroke="#2563EB" stroke-width="2"/>
  <rect x="396" y="76" width="58" height="68" rx="10" fill="#1E293B"/>
  <text x="425" y="105" text-anchor="middle" font-size="10" font-weight="700" font-family="monospace" fill="#F8FAFC">Class</text>
  <text x="425" y="122" text-anchor="middle" font-size="9" font-family="monospace" fill="#93C5FD">Softmax</text>
</svg>
SVG,
        'asl-fusion' => <<<'SVG'
<svg viewBox="0 0 480 220" class="w-full h-full" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Diagrama fusión de dos ramas ASL-Code">
  <rect width="480" height="220" fill="#EFF6FF"/>
  <path d="M0 55H480M0 165H480M120 0V220M360 0V220" stroke="#DBEAFE" stroke-width="1"/>
  <rect x="30" y="34" width="142" height="64" rx="10" fill="#FFFFFF" stroke="#2563EB" stroke-width="1.5"/>
  <text x="101" y="61" text-anchor="middle" font-size="11" font-weight="700" font-family="sans-serif" fill="#0F172A">Rama 1: Píxeles</text>
  <text x="101" y="80" text-anchor="middle" font-size="10" font-family="monospace" fill="#2563EB">MobileNetV3 + GradCAM</text>
  <rect x="30" y="122" width="142" height="64" rx="10" fill="#FFFFFF" stroke="#0F766E" stroke-width="1.5"/>
  <text x="101" y="149" text-anchor="middle" font-size="11" font-weight="700" font-family="sans-serif" fill="#0F172A">Rama 2: Geometría</text>
  <text x="101" y="168" text-anchor="middle" font-size="10" font-family="monospace" fill="#0F766E">21 Hand Landmarks</text>
  <path d="M174 66C215 66 215 110 250 110" fill="none" stroke="#2563EB" stroke-width="2"/>
  <path d="M174 154C215 154 215 110 250 110" fill="none" stroke="#0F766E" stroke-width="2"/>
  <circle cx="272" cy="110" r="24" fill="#1E293B"/>
  <text x="272" y="114" text-anchor="middle" font-size="10" font-weight="700" font-family="monospace" fill="#FFFFFF">CONCAT</text>
  <path d="M298 110H342" stroke="#1E293B" stroke-width="2"/>
  <rect x="346" y="68" width="104" height="84" rx="12" fill="#FFFFFF" stroke="#CBD5E1" stroke-width="1.5"/>
  <text x="398" y="101" text-anchor="middle" font-size="11" font-weight="700" font-family="sans-serif" fill="#0F172A">ASL LODO</text>
  <text x="398" y="120" text-anchor="middle" font-size="10" font-family="monospace" fill="#475569">Cross-Dataset</text>
  <rect x="372" y="130" width="52" height="10" rx="4" fill="#2563EB" opacity="0.2"/>
</svg>
SVG,
        'fatigue-vision' => <<<'SVG'
<svg viewBox="0 0 480 220" class="w-full h-full" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Sistema detección de fatiga Springer">
  <rect width="480" height="220" fill="#F8FAFC"/>
  <rect x="28" y="30" width="424" height="160" rx="14" fill="#FFFFFF" stroke="#CBD5E1" stroke-width="1.5"/>
  <circle cx="135" cy="110" r="48" fill="#EFF6FF" stroke="#2563EB" stroke-width="1.5" stroke-dasharray="5 4"/>
  <ellipse cx="118" cy="102" rx="10" ry="6" fill="#FFFFFF" stroke="#1E3A8A" stroke-width="1.8"/>
  <circle cx="118" cy="102" r="3" fill="#2563EB"/>
  <ellipse cx="152" cy="102" rx="10" ry="6" fill="#FFFFFF" stroke="#1E3A8A" stroke-width="1.8"/>
  <circle cx="152" cy="102" r="3" fill="#2563EB"/>
  <path d="M122 128Q135 135 148 128" fill="none" stroke="#64748B" stroke-width="1.8"/>
  <path d="M210 92H415M210 120H380M210 148H340" stroke="#E2E8F0" stroke-width="8" stroke-linecap="round"/>
  <path d="M210 92H330" stroke="#2563EB" stroke-width="8" stroke-linecap="round"/>
  <path d="M210 120H295" stroke="#0F766E" stroke-width="8" stroke-linecap="round"/>
  <text x="210" y="68" font-size="12" font-weight="700" font-family="sans-serif" fill="#0F172A">EAR · MAR · Image Processing Pipeline</text>
  <text x="210" y="174" font-size="10" font-family="monospace" fill="#64748B">Springer DOI: 10.1007/978-3-032-12882-9_15</text>
</svg>
SVG,
        'rsa-crypto' => <<<'SVG'
<svg viewBox="0 0 480 220" class="w-full h-full" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Esquema firma digital RSA-2048 y X.509">
  <rect width="480" height="220" fill="#F5F5F4"/>
  <rect x="34" y="42" width="110" height="136" rx="10" fill="#FFFFFF" stroke="#D6D3D1" stroke-width="1.5"/>
  <path d="M54 74H124M54 94H124M54 114H106" stroke="#94A3B8" stroke-width="4" stroke-linecap="round"/>
  <rect x="54" y="136" width="70" height="22" rx="4" fill="#FEE2E2"/>
  <text x="89" y="151" text-anchor="middle" font-size="10" font-weight="700" font-family="monospace" fill="#B91C1C">PDF DOC</text>
  <path d="M150 110H186" stroke="#475569" stroke-width="2"/>
  <rect x="190" y="54" width="120" height="112" rx="12" fill="#1E293B"/>
  <text x="250" y="88" text-anchor="middle" font-size="11" font-weight="700" font-family="monospace" fill="#FFFFFF">RSA-2048</text>
  <text x="250" y="109" text-anchor="middle" font-size="10" font-family="monospace" fill="#93C5FD">PSS · PKCS#1</text>
  <text x="250" y="128" text-anchor="middle" font-size="10" font-family="monospace" fill="#93C5FD">SHA-256</text>
  <rect x="212" y="140" width="76" height="12" rx="3" fill="#2563EB"/>
  <path d="M316 110H350" stroke="#475569" stroke-width="2"/>
  <rect x="354" y="52" width="94" height="116" rx="10" fill="#FFFFFF" stroke="#15803D" stroke-width="1.8"/>
  <circle cx="401" cy="96" r="18" fill="#DCFCE7"/>
  <path d="M393 96l6 6 11-12" fill="none" stroke="#15803D" stroke-width="2.5" stroke-linecap="round"/>
  <text x="401" y="134" text-anchor="middle" font-size="10" font-weight="700" font-family="sans-serif" fill="#14532D">X.509 CA</text>
  <text x="401" y="150" text-anchor="middle" font-size="9" font-family="monospace" fill="#15803D">VERIFIED</text>
</svg>
SVG,
        'eventify-app' => <<<'SVG'
<svg viewBox="0 0 480 220" class="w-full h-full" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Mockup móvil Eventify Kotlin Material 3">
  <rect width="480" height="220" fill="#EEF2FF"/>
  <rect x="176" y="18" width="128" height="184" rx="20" fill="#FFFFFF" stroke="#312E81" stroke-width="2"/>
  <rect x="220" y="26" width="40" height="5" rx="2.5" fill="#CBD5E1"/>
  <rect x="190" y="42" width="100" height="44" rx="8" fill="#2563EB"/>
  <text x="240" y="68" text-anchor="middle" font-size="11" font-weight="700" font-family="sans-serif" fill="#FFFFFF">Eventify M3</text>
  <rect x="190" y="96" width="100" height="26" rx="6" fill="#F1F5F9" stroke="#E2E8F0"/>
  <circle cx="204" cy="109" r="5" fill="#4F46E5"/>
  <rect x="215" y="106" width="60" height="6" rx="3" fill="#94A3B8"/>
  <rect x="190" y="130" width="100" height="26" rx="6" fill="#F1F5F9" stroke="#E2E8F0"/>
  <circle cx="204" cy="143" r="5" fill="#0EA5E9"/>
  <rect x="215" y="140" width="52" height="6" rx="3" fill="#94A3B8"/>
  <rect x="190" y="164" width="100" height="24" rx="6" fill="#DCFCE7"/>
  <text x="240" y="180" text-anchor="middle" font-size="9" font-weight="700" font-family="monospace" fill="#166534">Firestore Sync</text>
  <rect x="42" y="64" width="106" height="46" rx="10" fill="#FFFFFF" stroke="#C7D2FE" stroke-width="1.5"/>
  <text x="95" y="91" text-anchor="middle" font-size="10" font-weight="700" font-family="monospace" fill="#3730A3">ViewModel</text>
  <rect x="332" y="108" width="106" height="46" rx="10" fill="#FFFFFF" stroke="#C7D2FE" stroke-width="1.5"/>
  <text x="385" y="135" text-anchor="middle" font-size="10" font-weight="700" font-family="monospace" fill="#3730A3">Maps SDK</text>
</svg>
SVG,
        'chsp-genetic' => <<<'SVG'
<svg viewBox="0 0 480 220" class="w-full h-full" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Curva de convergencia y Gantt CHSP">
  <rect width="480" height="220" fill="#FFFBEB"/>
  <rect x="30" y="28" width="200" height="164" rx="10" fill="#FFFFFF" stroke="#FDE68A" stroke-width="1.5"/>
  <text x="46" y="52" font-size="10" font-weight="700" font-family="monospace" fill="#92400E">FITNESS CONVERGENCE</text>
  <polyline points="48,164 80,126 112,102 146,84 182,76 212,74" fill="none" stroke="#D97706" stroke-width="3" stroke-linecap="round"/>
  <line x1="48" y1="168" x2="212" y2="168" stroke="#CBD5E1" stroke-width="1.5"/>
  <rect x="248" y="28" width="202" height="164" rx="10" fill="#FFFFFF" stroke="#FDE68A" stroke-width="1.5"/>
  <text x="264" y="52" font-size="10" font-weight="700" font-family="monospace" fill="#92400E">GANTT SCHEDULE (CHSP)</text>
  <rect x="264" y="72" width="76" height="18" rx="4" fill="#2563EB"/>
  <rect x="350" y="72" width="60" height="18" rx="4" fill="#93C5FD"/>
  <rect x="284" y="102" width="98" height="18" rx="4" fill="#D97706"/>
  <rect x="264" y="132" width="64" height="18" rx="4" fill="#0F766E"/>
  <rect x="336" y="132" width="88" height="18" rx="4" fill="#5EEAD4"/>
  <text x="264" y="174" font-size="9" font-family="monospace" fill="#64748B">Streamlit · Genetic Algorithm</text>
</svg>
SVG,
        'skills-ai' => <<<'SVG'
<svg viewBox="0 0 480 220" class="w-full h-full" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Arquitectura Skills para Agentes IA">
  <rect width="480" height="220" fill="#F8FAFC"/>
  <rect x="44" y="34" width="180" height="68" rx="10" fill="#FFFFFF" stroke="#CBD5E1" stroke-width="1.5"/>
  <text x="134" y="64" text-anchor="middle" font-size="11" font-weight="700" font-family="monospace" fill="#0F172A">landing-pages/</text>
  <text x="134" y="83" text-anchor="middle" font-size="10" font-family="sans-serif" fill="#475569">Astro · Tailwind v4 · GSAP</text>
  <rect x="256" y="34" width="180" height="68" rx="10" fill="#FFFFFF" stroke="#CBD5E1" stroke-width="1.5"/>
  <text x="346" y="64" text-anchor="middle" font-size="11" font-weight="700" font-family="monospace" fill="#0F172A">web-systems/</text>
  <text x="346" y="83" text-anchor="middle" font-size="10" font-family="sans-serif" fill="#475569">Next.js · Drizzle · Auth</text>
  <rect x="44" y="120" width="180" height="68" rx="10" fill="#FFFFFF" stroke="#CBD5E1" stroke-width="1.5"/>
  <text x="134" y="150" text-anchor="middle" font-size="11" font-weight="700" font-family="monospace" fill="#0F172A">dashboards/</text>
  <text x="134" y="169" text-anchor="middle" font-size="10" font-family="sans-serif" fill="#475569">Apache ECharts · KPIs</text>
  <rect x="256" y="120" width="180" height="68" rx="10" fill="#1E293B"/>
  <text x="346" y="150" text-anchor="middle" font-size="11" font-weight="700" font-family="monospace" fill="#FFFFFF">architecture-audit/</text>
  <text x="346" y="169" text-anchor="middle" font-size="10" font-family="sans-serif" fill="#93C5FD">PHP · Python · Java · TS</text>
</svg>
SVG,
        'noticias-php' => <<<'SVG'
<svg viewBox="0 0 480 220" class="w-full h-full" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Arquitectura PHP Serverless en Vercel">
  <rect width="480" height="220" fill="#F1F5F9"/>
  <rect x="40" y="34" width="400" height="152" rx="12" fill="#FFFFFF" stroke="#CBD5E1" stroke-width="1.5"/>
  <rect x="40" y="34" width="400" height="32" rx="12" fill="#0F172A"/>
  <text x="64" y="54" font-size="11" font-weight="700" font-family="monospace" fill="#F8FAFC">vercel.json -> vercel-php@0.7.3</text>
  <rect x="64" y="84" width="160" height="80" rx="8" fill="#EFF6FF" stroke="#2563EB"/>
  <text x="144" y="118" text-anchor="middle" font-size="11" font-weight="700" font-family="monospace" fill="#1E3A8A">/api/index.php</text>
  <text x="144" y="138" text-anchor="middle" font-size="10" font-family="sans-serif" fill="#475569">Serverless Router</text>
  <path d="M232 124H264" stroke="#2563EB" stroke-width="2"/>
  <rect x="272" y="84" width="144" height="80" rx="8" fill="#F8FAFC" stroke="#94A3B8"/>
  <text x="344" y="114" text-anchor="middle" font-size="10" font-weight="700" font-family="monospace" fill="#0F172A">api/secciones/</text>
  <text x="344" y="134" text-anchor="middle" font-size="9" font-family="monospace" fill="#64748B">Módulos PHP</text>
</svg>
SVG,
        'research-web' => <<<'SVG'
<svg viewBox="0 0 480 220" class="w-full h-full" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Portal web académico y de investigación">
  <rect width="480" height="220" fill="#F8FAFC"/>
  <rect x="52" y="32" width="376" height="156" rx="12" fill="#FFFFFF" stroke="#CBD5E1" stroke-width="1.5"/>
  <rect x="76" y="54" width="120" height="14" rx="4" fill="#2563EB"/>
  <rect x="76" y="82" width="320" height="12" rx="4" fill="#E2E8F0"/>
  <rect x="76" y="104" width="260" height="12" rx="4" fill="#E2E8F0"/>
  <rect x="76" y="132" width="150" height="36" rx="8" fill="#EFF6FF" stroke="#BFDBFE"/>
  <rect x="242" y="132" width="150" height="36" rx="8" fill="#EFF6FF" stroke="#BFDBFE"/>
</svg>
SVG,
        'java-mvvm' => <<<'SVG'
<svg viewBox="0 0 480 220" class="w-full h-full" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Arquitectura Java MVVM y Patrones">
  <rect width="480" height="220" fill="#FAF8F5"/>
  <rect x="42" y="68" width="110" height="84" rx="10" fill="#FFFFFF" stroke="#B91C1C" stroke-width="1.5"/>
  <text x="97" y="114" text-anchor="middle" font-size="11" font-weight="700" font-family="monospace" fill="#991B1B">View</text>
  <path d="M156 110H182" stroke="#64748B" stroke-width="2"/>
  <rect x="186" y="68" width="110" height="84" rx="10" fill="#FFFFFF" stroke="#2563EB" stroke-width="1.5"/>
  <text x="241" y="114" text-anchor="middle" font-size="11" font-weight="700" font-family="monospace" fill="#1E40AF">ViewModel</text>
  <path d="M300 110H326" stroke="#64748B" stroke-width="2"/>
  <rect x="330" y="68" width="110" height="84" rx="10" fill="#FFFFFF" stroke="#0F172A" stroke-width="1.5"/>
  <text x="385" y="114" text-anchor="middle" font-size="11" font-weight="700" font-family="monospace" fill="#0F172A">Model</text>
</svg>
SVG,
    ];

    return $plates[$key] ?? $plates['research-web'];
}
