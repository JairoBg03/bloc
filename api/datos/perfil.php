<?php

declare(strict_types=1);

/**
 * ============================================================================
 * PERFIL PERSONAL DE JAIRO MANUEL BLAS GARCÍA
 * ============================================================================
 * Edita este archivo cuando quieras actualizar:
 *   1. Tus datos generales, foto o redes sociales.
 *   2. La lista "Cosas sobre mí" (en viñetas).
 *   3. Tus 4 bloques de "Mi línea de trabajo".
 *   4. Tus "Hobbies e intereses personales".
 *   5. Tu "Stack tecnológico".
 * ============================================================================
 */

$perfil = [
    // 1. DATOS GENERALES Y REDES
    'nombre' => 'Jairo Manuel Blas García',
    'nombre_corto' => 'Jairo Blas',
    'usuario' => '@JairoBg03',
    'rol' => 'Ingeniero de Sistemas e Informática · Desarrollador de Software & Investigador en IA',
    'titular_editorial' => 'Mi espacio personal sobre Sistemas, Visión Computacional, Software e Investigación.',
    'bio' => 'Estudiante e investigador en la Escuela Profesional de Ingeniería de Sistemas e Informática de la Universidad Nacional del Santa (UNS), Nuevo Chimbote, Perú. Construyo modelos de aprendizaje profundo aplicables a salud e inclusión, sistemas criptográficos y aplicaciones móviles y web serverless.',
    'universidad' => 'Universidad Nacional del Santa (UNS)',
    'escuela' => 'Escuela Profesional de Ingeniería de Sistemas e Informática',
    'ubicacion' => 'Nuevo Chimbote, Áncash, Perú',

    // Imágenes circulares en formato WebP (ver carpeta assets/img/ y api/assets/img/)
    'foto_perfil' => '/assets/img/jairo-perfil.webp',
    'foto_perfil_fallback' => '/?asset=jairo-perfil.webp',
    'logo_uns' => '/assets/img/uns-logo.webp',
    'logo_uns_fallback' => '/?asset=uns-logo.webp',

    'enlaces' => [
        'github' => 'https://github.com/JairoBg03',
        'linkedin' => 'https://www.linkedin.com/in/jairo-bg/',
        'orcid' => 'https://orcid.org/0009-0009-1634-539X',
        'orcid_id' => '0009-0009-1634-539X',
    ],

    // Contadores rápidos debajo de tu foto circular
    'metricas' => [
        ['valor' => '12', 'etiqueta' => 'Repositorios Públicos'],
        ['valor' => '2', 'etiqueta' => 'Publicaciones con DOI'],
        ['valor' => '5+', 'etiqueta' => 'Áreas de Ingeniería'],
        ['valor' => 'UNS', 'etiqueta' => 'Chimbote · Perú'],
    ],

    // 2. COSAS SOBRE MÍ (Párrafos introductorios + viñetas principales)
    'sobre_mi_parrafos' => [
        'Soy Jairo Manuel Blas García, estudiante e investigador de Ingeniería de Sistemas e Informática en Nuevo Chimbote, Perú. Me interesa construir tecnología que conecte la investigación académica con aplicaciones reales para las personas.',
        'En este blog personal comparto cómo trabajo día a día, los proyectos que programo, mis pasatiempos fuera del código y las investigaciones científicas que publico junto a colegas y docentes.',
    ],
    'sobre_mi_vinetas' => [
        'Formación en la Escuela Profesional de Ingeniería de Sistemas e Informática de la Universidad Nacional del Santa (UNS).',
        'Investigador enfocado en llevar la Inteligencia Artificial y la Visión Computacional desde los papers hacia software funcional.',
        'Desarrollador multi-stack en Python, Kotlin (Android), Java (MVVM) y PHP Serverless, compartiendo código abierto en GitHub (@JairoBg03).',
        'Coautor de publicaciones científicas indexadas en Springer y SSRN con registro verificado en ORCID (0009-0009-1634-539X).',
    ],

    // 3. MI LÍNEA DE TRABAJO (Iconos disponibles: cpu, layers, shield, sparkles, code, book, graduation)
    'linea_trabajo' => [
        [
            'titulo' => 'Visión Computacional & Deep Learning',
            'icono' => 'cpu',
            'resumen' => 'Modelos convolucionales e interpretables aplicados a salud, detección de fatiga y accesibilidad.',
            'vinetas' => [
                'Diagnóstico dermatológico multiclase con CNNs y preprocesamiento de imágenes RGB (CASE y C-BAFT).',
                'Sistemas de detección inteligente de fatiga visual y facial mediante procesamiento de imágenes (Springer).',
                'Fusión multimodal de landmarks geométricos y MobileNetV3 con mapas Grad-CAM en ASL-Code.',
            ],
        ],
        [
            'titulo' => 'Desarrollo Móvil Android & Java',
            'icono' => 'layers',
            'resumen' => 'Aplicaciones nativas centradas en experiencia de usuario, persistencia offline y arquitectura limpia.',
            'vinetas' => [
                'Apps en Kotlin con Material 3 DayNight, Navigation Component y patrón MVVM (ViewModel + LiveData).',
                'Persistencia offline-first con Firebase Firestore y geolocalización con Google Maps SDK (Eventify).',
                'Sistemas de escritorio en Java Maven aplicando patrones de diseño clásicos y arquitectura MVVM.',
            ],
        ],
        [
            'titulo' => 'Ciberseguridad, Criptografía & Web Serverless',
            'icono' => 'shield',
            'resumen' => 'Integridad documental criptográfica y aplicaciones web ágiles listas para producción.',
            'vinetas' => [
                'Firmado digital y validación de documentos PDF con RSA-2048, PSS (PKCS#1 v2.1) y SHA-256.',
                'Simulación de infraestructura de clave pública (PKI) y certificados locales X.509 en Python.',
                'Despliegue de sitios y portales en PHP Serverless sobre Vercel (vercel-php), Astro y Next.js.',
            ],
        ],
        [
            'titulo' => 'Optimización & Computación Evolutiva',
            'icono' => 'sparkles',
            'resumen' => 'Búsqueda heurística para problemas combinatorios complejos y flujos con Agentes IA.',
            'vinetas' => [
                'Algoritmos Genéticos aplicados a la programación de audiencias judiciales (CHSP / CSJSA).',
                'Tableros interactivos en Streamlit con diagramas de Gantt, curvas de convergencia y exportación CSV.',
                'Creación de librerías de Skills reutilizables para automatización con Agentes de IA (skills).',
            ],
        ],
    ],

    // 4. MIS HOBBIES E INTERESES PERSONALES
    'hobbies' => [
        [
            'titulo' => 'Side-Projects & Curiosidad Tech',
            'icono' => 'code',
            'vinetas' => [
                'Probar modelos recientes de IA open-source y experimentar con agentes autónomos en fin de semana.',
                'Diseñar interfaces limpias y estudiar micro-interacciones web con Tailwind, Astro y GSAP.',
            ],
        ],
        [
            'titulo' => 'Lectura Científica & Vida UNS',
            'icono' => 'graduation',
            'vinetas' => [
                'Leer papers de visión artificial y convertir lo aprendido en apuntes sencillos para este blog.',
                'Participar en comunidad académica, proyectos colaborativos y representación estudiantil en la UNS.',
            ],
        ],
        [
            'titulo' => 'Música, Café & Desconexión',
            'icono' => 'sun',
            'vinetas' => [
                'Programar acompañado de buenas playlists de música mientras bosquejo ideas en papel.',
                'Caminar por Nuevo Chimbote, compartir tiempo con familia y amigos y recargar energía lejos de la pantalla.',
            ],
        ],
    ],

    // 5. STACK TECNOLÓGICO (Visible en la página "Sobre mí")
    'stack' => [
        'IA & Visión Computacional' => ['Python', 'PyTorch / TensorFlow', 'CNN · MobileNetV3', 'Grad-CAM', 'Algoritmos Genéticos', 'Streamlit'],
        'Móvil & Backend' => ['Kotlin', 'Material 3', 'ViewModel + LiveData', 'Firebase Firestore', 'Java Maven (MVVM)', 'PHP Serverless'],
        'Web & Herramientas' => ['Astro', 'Next.js', 'TypeScript', 'Tailwind CSS', 'RSA-2048 / X.509', 'Vercel'],
    ],
];
