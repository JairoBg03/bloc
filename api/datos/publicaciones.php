<?php

declare(strict_types=1);

/**
 * ============================================================================
 * PUBLICACIONES CIENTÍFICAS E INVESTIGACIÓN
 * ============================================================================
 * Para agregar una nueva publicación o paper, copia este bloque dentro de
 * $publicaciones:
 *
 * [
 *     'id' => 'identificador-unico',
 *     'tipo' => 'Artículo de Revista / Congreso / Preprint',
 *     'badge_color' => 'cobalt', // cobalt | crimson | emerald
 *     'titulo' => 'Título completo de tu publicación',
 *     'autores' => 'Jairo Blas Garcia, ...',
 *     'medio' => 'Nombre de la editorial o congreso',
 *     'anio' => '2026',
 *     'doi' => '10.xxxx/xxxx',
 *     'url' => 'https://doi.org/10.xxxx/xxxx',
 *     'ilustracion' => 'skin-cnn', // Ver claves en componentes/helpers.php
 *     'resumen' => 'Resumen breve en español...',
 *     'vinetas' => [
 *         'Punto destacado 1',
 *         'Punto destacado 2',
 *     ],
 *     'palabras_clave' => ['Palabra 1', 'Palabra 2'],
 *     'bibtex' => "@article{clave2026,\n  title={...},\n  author={Blas Garcia, Jairo},\n  year={2026}\n}",
 * ],
 * ============================================================================
 */

$publicaciones = [
    [
        'id' => 'springer-fatigue',
        'tipo' => 'Capítulo de Libro · Springer',
        'badge_color' => 'cobalt',
        'titulo' => 'Intelligent Fatigue Detection System Based on Image Processing',
        'autores' => 'Jairo Blas Garcia, Sofia Flores Garcia, Alfredo Daza Vergaray, Luis Laiza Infantes, Steeve Cier Paredes',
        'medio' => 'Springer — Lecture Notes',
        'anio' => '2026',
        'doi' => '10.1007/978-3-032-12882-9_15',
        'url' => 'https://doi.org/10.1007/978-3-032-12882-9_15',
        'ilustracion' => 'fatigue-vision',
        'resumen' => 'Sistema inteligente para la detección temprana de fatiga mediante técnicas de procesamiento digital de imágenes y análisis visual de rasgos faciales y oculares, orientado a entornos de prevención y monitoreo.',
        'vinetas' => [
            'Publicado como capítulo de libro en Springer Lecture Notes.',
            'Extracción de indicadores oculares y faciales mediante procesamiento de imágenes.',
            'Orientado a prevención temprana de fatiga en tiempo real.',
        ],
        'palabras_clave' => ['Procesamiento de Imágenes', 'Detección de Fatiga', 'Visión Computacional', 'Springer'],
        'bibtex' => "@incollection{blas2026fatigue,\n  title={Intelligent Fatigue Detection System Based on Image Processing},\n  author={Blas Garcia, Jairo and Flores Garcia, Sofia and Daza Vergaray, Alfredo and Laiza Infantes, Luis and Cier Paredes, Steeve},\n  booktitle={Lecture Notes},\n  publisher={Springer},\n  year={2026},\n  doi={10.1007/978-3-032-12882-9_15}\n}",
    ],
    [
        'id' => 'ssrn-skin-cnn',
        'tipo' => 'Preprint Académico · SSRN',
        'badge_color' => 'crimson',
        'titulo' => 'Enhancing CNN-Based Multiclass Skin Disease Diagnosis from Clinical RGB Images Using CASE and C-BAFT Image Processing Techniques',
        'autores' => 'Jairo Blas Garcia, Sofia Flores Garcia, Alfredo Daza Vergaray, et al.',
        'medio' => 'SSRN / ResearchGate',
        'anio' => '2026',
        'doi' => '10.2139/ssrn.6367882',
        'url' => 'https://doi.org/10.2139/ssrn.6367882',
        'ilustracion' => 'skin-cnn',
        'resumen' => 'Propuesta metodológica que combina las técnicas de realce y filtrado CASE y C-BAFT sobre fotografías clínicas RGB para incrementar la capacidad discriminativa de Redes Neuronales Convolucionales en el diagnóstico multiclase de patologías dérmicas.',
        'vinetas' => [
            'Preprint indexado en SSRN con DOI 10.2139/ssrn.6367882.',
            'Preprocesamiento clínico RGB usando técnicas CASE y C-BAFT.',
            'Mejora la clasificación multiclase en redes convolucionales.',
        ],
        'palabras_clave' => ['Deep Learning Médico', 'CNN Multiclase', 'CASE', 'C-BAFT', 'Imágenes RGB'],
        'bibtex' => "@article{blas2026skin,\n  title={Enhancing CNN-Based Multiclass Skin Disease Diagnosis from Clinical RGB Images Using CASE and C-BAFT Image Processing Techniques},\n  author={Blas Garcia, Jairo and Flores Garcia, Sofia and Daza Vergaray, Alfredo},\n  journal={SSRN Electronic Journal},\n  year={2026},\n  doi={10.2139/ssrn.6367882}\n}",
    ],
    [
        'id' => 'asl-code-research',
        'tipo' => 'Investigación Abierta · MIT',
        'badge_color' => 'emerald',
        'titulo' => 'ASL-Code: Cross-Dataset American Sign Language Recognition via Two-Branch Landmark-Pixel Fusion',
        'autores' => 'Jairo Manuel Blas García',
        'medio' => 'Repositorio Científico Abierto · GitHub',
        'anio' => '2026',
        'doi' => 'github.com/JairoBg03/ASL-Code',
        'url' => 'https://github.com/JairoBg03/ASL-Code',
        'ilustracion' => 'asl-fusion',
        'resumen' => 'Arquitectura de doble rama que fusiona representaciones visuales de MobileNetV3 con coordenadas geométricas de landmarks de la mano. Evaluada bajo protocolo Leave-One-Dataset-Out (LODO) e interpretada mediante mapas de saliencia Grad-CAM.',
        'vinetas' => [
            'Fusión multimodal: rama visual MobileNetV3 + 21 hand landmarks.',
            'Evaluación rigurosa cross-dataset Leave-One-Dataset-Out (LODO).',
            'Auditoría visual con mapas de saliencia Grad-CAM y código MIT.',
        ],
        'palabras_clave' => ['MobileNetV3', 'Grad-CAM', 'LODO Evaluation', 'Lenguaje de Señas', 'PyTorch'],
        'bibtex' => "@misc{blas2026aslcode,\n  title={ASL-Code: Cross-Dataset ASL Alphabet Recognition via Two-Branch Landmark-Pixel Fusion},\n  author={Blas Garcia, Jairo Manuel},\n  year={2026},\n  howpublished={\\url{https://github.com/JairoBg03/ASL-Code}}\n}",
    ],
];
