<?php

declare(strict_types=1);

/**
 * ============================================================================
 * PROYECTOS Y REPOSITORIOS DE GITHUB (@JairoBg03)
 * ============================================================================
 * Si agregas un proyecto y pones 'destacado' => true, aparecerá automáticamente
 * en el slider interactivo de la portada y de la página Proyectos.
 *
 * PLANTILLA PARA AGREGAR UN PROYECTO NUEVO:
 * [
 *     'nombre' => 'Nombre-Del-Repo',
 *     'categoria' => 'IA & Python', // Opciones: IA & Python | Mobile & Kotlin | Web & Cloud | Java & Ingeniería
 *     'lenguaje' => 'Python',
 *     'anio' => '2026',
 *     'destacado' => true,
 *     'ilustracion' => 'research-web', // Ver claves en componentes/helpers.php
 *     'resumen' => 'Descripción breve de qué hace el proyecto.',
 *     'vinetas' => [
 *         'Característica o logro principal 1',
 *         'Característica o logro principal 2',
 *     ],
 *     'tags' => ['Tag1', 'Tag2'],
 *     'url' => 'https://github.com/JairoBg03/Nombre-Del-Repo',
 * ],
 * ============================================================================
 */

$proyectos = [
    [
        'nombre' => 'ASL-Code',
        'categoria' => 'IA & Python',
        'lenguaje' => 'Python',
        'anio' => '2026',
        'destacado' => true,
        'ilustracion' => 'asl-fusion',
        'resumen' => 'Investigación y código abierto en Deep Learning para reconocimiento del alfabeto ASL con fusión de landmarks + píxeles, MobileNetV3, Grad-CAM y evaluación cross-dataset LODO.',
        'vinetas' => [
            'Arquitectura de doble rama (MobileNetV3 + landmarks de mano).',
            'Evaluación cross-dataset LODO y explicabilidad visual con Grad-CAM.',
        ],
        'tags' => ['CNN', 'MobileNetV3', 'Grad-CAM', 'LODO'],
        'url' => 'https://github.com/JairoBg03/ASL-Code',
    ],
    [
        'nombre' => 'Eventify',
        'categoria' => 'Mobile & Kotlin',
        'lenguaje' => 'Kotlin',
        'anio' => '2026',
        'destacado' => true,
        'ilustracion' => 'eventify-app',
        'resumen' => 'Aplicación móvil Android para descubrir eventos tecnológicos (agenda, ponentes, mapa de sede) con Material 3 DayNight, ViewModel + LiveData, Firebase Firestore offline y Google Maps SDK.',
        'vinetas' => [
            'Material 3 DayNight con soporte automático claro/oscuro y Glide.',
            'Persistencia offline en Firestore, ViewModel + LiveData y Google Maps SDK.',
        ],
        'tags' => ['Material 3', 'MVVM', 'Firestore Offline', 'Google Maps'],
        'url' => 'https://github.com/JairoBg03/Eventify',
    ],
    [
        'nombre' => 'sistema-firma-digital',
        'categoria' => 'IA & Python',
        'lenguaje' => 'Python',
        'anio' => '2026',
        'destacado' => true,
        'ilustracion' => 'rsa-crypto',
        'resumen' => 'Plataforma web interactiva para firmado digital y verificación criptográfica de documentos PDF utilizando RSA-2048, PSS (PKCS#1 v2.1), SHA-256 y CA local X.509 simulada.',
        'vinetas' => [
            'Firmado y validación de documentos PDF con RSA-2048, PSS y SHA-256.',
            'Emisión simulada de certificados locales X.509 mediante interfaz web.',
        ],
        'tags' => ['RSA-2048', 'PSS', 'SHA-256', 'X.509'],
        'url' => 'https://github.com/JairoBg03/sistema-firma-digital',
    ],
    [
        'nombre' => 'Algotitmos-Evolutivos',
        'categoria' => 'IA & Python',
        'lenguaje' => 'Python',
        'anio' => '2026',
        'destacado' => true,
        'ilustracion' => 'chsp-genetic',
        'resumen' => 'Aplicación Streamlit con Algoritmo Genético para resolver el Court Hearing Scheduling Problem (CHSP / CSJSA), incluyendo diagramas de Gantt, curvas de convergencia y CSV.',
        'vinetas' => [
            'Resolución combinatoria de horarios judiciales (CHSP / CSJSA).',
            'Tablero en Streamlit con diagramas de Gantt, convergencia y export CSV.',
        ],
        'tags' => ['Streamlit', 'Genetic Algorithm', 'Gantt', 'CHSP'],
        'url' => 'https://github.com/JairoBg03/Algotitmos-Evolutivos',
    ],
    [
        'nombre' => 'skills',
        'categoria' => 'Web & Cloud',
        'lenguaje' => 'CSS / Markdown',
        'anio' => '2026',
        'destacado' => true,
        'ilustracion' => 'skills-ai',
        'resumen' => 'Biblioteca personal de Skills reutilizables para Agentes IA (SKILL.md / AGENTS.md) abarcando Astro + Tailwind v4 + GSAP, Next.js + Drizzle, Apache ECharts y auditoría arquitectónica.',
        'vinetas' => [
            'Módulos para landing pages (Astro + GSAP + Lenis) y sistemas web (Next.js).',
            'Skills para dashboards en Apache ECharts y auditoría de código multi-lenguaje.',
        ],
        'tags' => ['AI Agents', 'Astro', 'Next.js', 'ECharts'],
        'url' => 'https://github.com/JairoBg03/skills',
    ],
    [
        'nombre' => 'Noticias',
        'categoria' => 'Web & Cloud',
        'lenguaje' => 'PHP',
        'anio' => '2026',
        'destacado' => true,
        'ilustracion' => 'noticias-php',
        'resumen' => 'Portal informativo en PHP modular (19 secciones temáticas) desplegado como función serverless en Vercel mediante el runtime vercel-php@0.7.3.',
        'vinetas' => [
            'Router único en /api/index.php con 19 módulos temáticos independientes.',
            'Configurado con vercel.json para despliegue directo con vercel-php@0.7.3.',
        ],
        'tags' => ['PHP 8', 'Vercel Serverless', 'Bootstrap', 'Routing'],
        'url' => 'https://github.com/JairoBg03/Noticias',
    ],
    [
        'nombre' => 'pagina-investigacion',
        'categoria' => 'Web & Cloud',
        'lenguaje' => 'Astro',
        'anio' => '2026',
        'destacado' => false,
        'ilustracion' => 'research-web',
        'resumen' => 'Sitio web orientado a difusión científica construido con Astro, TypeScript y flujos de despliegue automatizados en GitHub Actions.',
        'vinetas' => [
            'Sitio estático veloz en Astro + TypeScript para divulgación académica.',
            'Automatización de build y despliegue vía GitHub Actions.',
        ],
        'tags' => ['Astro', 'TypeScript', 'GitHub Actions'],
        'url' => 'https://github.com/JairoBg03/pagina-investigacion',
    ],
    [
        'nombre' => 'Pagina-GC',
        'categoria' => 'Web & Cloud',
        'lenguaje' => 'HTML / JS',
        'anio' => '2026',
        'destacado' => false,
        'ilustracion' => 'research-web',
        'resumen' => 'Portal web multipágina (comunidad, prácticas, repositorio) desarrollado con arquitectura frontend estática limpia en HTML5, CSS3 y JavaScript.',
        'vinetas' => [
            'Secciones dedicadas a comunidad, prácticas y repositorio.',
            'Diseño modular sin dependencias pesadas en HTML5/CSS3/JS.',
        ],
        'tags' => ['HTML5', 'CSS3', 'JavaScript'],
        'url' => 'https://github.com/JairoBg03/Pagina-GC',
    ],
    [
        'nombre' => 'cisco',
        'categoria' => 'Web & Cloud',
        'lenguaje' => 'HTML / JS',
        'anio' => '2026',
        'destacado' => false,
        'ilustracion' => 'noticias-php',
        'resumen' => 'Catálogo web modular con componentes reutilizables para equipamiento de redes y cableado estructurado.',
        'vinetas' => [
            'Fichas técnicas de switches y componentes de conectividad.',
            'Estructura organizada por componentes, iconos y hojas de estilo.',
        ],
        'tags' => ['Componentes Web', 'Networking', 'Frontend'],
        'url' => 'https://github.com/JairoBg03/cisco',
    ],
    [
        'nombre' => 'Gestion-Solicitudes-de-Libros',
        'categoria' => 'Java & Ingeniería',
        'lenguaje' => 'Java',
        'anio' => '2025',
        'destacado' => false,
        'ilustracion' => 'java-mvvm',
        'resumen' => 'Sistema de escritorio en Java Maven para el registro de usuarios, emisión de solicitudes de préstamo bibliográfico y panel de administración.',
        'vinetas' => [
            'Flujo de registro y solicitud de préstamos para usuarios.',
            'Módulo de administración construido en Java Maven.',
        ],
        'tags' => ['Java', 'Maven', 'Desktop UI'],
        'url' => 'https://github.com/JairoBg03/Gestion-Solicitudes-de-Libros',
    ],
    [
        'nombre' => 'ConversionMoneda',
        'categoria' => 'Java & Ingeniería',
        'lenguaje' => 'Java',
        'anio' => '2025',
        'destacado' => false,
        'ilustracion' => 'java-mvvm',
        'resumen' => 'Conversor de divisas (soles, dólares y reales) para compra y venta estructurado bajo el patrón arquitectónico MVVM en Java.',
        'vinetas' => [
            'Conversión de compra/venta entre PEN, USD y BRL.',
            'Separación limpia de capas usando arquitectura MVVM en Java.',
        ],
        'tags' => ['Java', 'MVVM', 'Arquitectura'],
        'url' => 'https://github.com/JairoBg03/ConversionMoneda',
    ],
    [
        'nombre' => 'Patrones-de-dise-o-de-software',
        'categoria' => 'Java & Ingeniería',
        'lenguaje' => 'Java',
        'anio' => '2024',
        'destacado' => false,
        'ilustracion' => 'java-mvvm',
        'resumen' => 'Colección de laboratorios prácticos en Java aplicando patrones clásicos de diseño y optimización algorítmica (Ejercicio Mochila).',
        'vinetas' => [
            'Implementación práctica de patrones de diseño orientados a objetos.',
            'Resolución de ejercicios algorítmicos clásicos como Problema de la Mochila.',
        ],
        'tags' => ['Design Patterns', 'Java', 'Clean Code'],
        'url' => 'https://github.com/JairoBg03/Patrones-de-dise-o-de-software',
    ],
];
