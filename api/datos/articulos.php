<?php

declare(strict_types=1);

/**
 * ============================================================================
 * ARTÍCULOS DEL BLOG PERSONAL
 * ============================================================================
 * Para publicar un nuevo artículo, copia la plantilla de abajo al inicio de
 * $articulos (aparecerá primero en el blog).
 *
 * Ilustraciones disponibles ('ilustracion'):
 *   'research-web', 'skin-cnn', 'asl-fusion', 'fatigue-vision',
 *   'rsa-crypto', 'eventify-app', 'chsp-genetic', 'skills-ai',
 *   'noticias-php', 'java-mvvm'
 *
 * PLANTILLA PARA COPIAR Y PEGAR:
 * [
 *     'slug' => 'titulo-url-amigable',
 *     'categoria' => 'Personal & Bitácora',
 *     'fecha' => '20 Nov 2026',
 *     'lectura' => '4 min lectura',
 *     'titulo' => 'Título de tu nuevo artículo',
 *     'extracto' => 'Resumen corto que aparece en la tarjeta de portada.',
 *     'ilustracion' => 'research-web',
 *     'repo_relacionado' => 'https://github.com/JairoBg03',
 *     'repo_etiqueta' => 'github.com/JairoBg03',
 *     'destacado' => false,
 *     'secciones' => [
 *         [
 *             'id' => 'primera-parte',
 *             'subtitulo' => '1. Primer subtítulo',
 *             'contenido' => 'Texto completo de esta sección...',
 *         ],
 *     ],
 *     'nota_destacada' => 'Cita o aprendizaje clave que quieres resaltar.',
 *     'codigo_titulo' => 'ejemplo.py',
 *     'codigo' => "print('Hola desde mi blog')",
 * ],
 * ============================================================================
 */

$articulos = [
    [
        'slug' => 'bienvenido-a-mi-blog-personal-jairo-blas',
        'categoria' => 'Personal & Bitácora',
        'fecha' => '18 Nov 2026',
        'lectura' => '4 min lectura',
        'titulo' => 'Por qué creé este blog personal: entre la ingeniería en la UNS, la IA y mis proyectos',
        'extracto' => 'Un recorrido personal por cómo estudio Ingeniería de Sistemas en Nuevo Chimbote, cómo organizo mis investigaciones y qué encontrarás en este espacio.',
        'ilustracion' => 'research-web',
        'repo_relacionado' => 'https://github.com/JairoBg03',
        'repo_etiqueta' => 'github.com/JairoBg03',
        'destacado' => true,
        'secciones' => [
            [
                'id' => 'origen-blog',
                'subtitulo' => '1. De apuntes dispersos a un hogar propio en PHP',
                'contenido' => 'Durante mi etapa universitaria en la Universidad Nacional del Santa (UNS) acumulé cuadernos, repositorios y experimentos que muchas veces quedaban guardados solo en carpetas locales o en commits aislados. Quise construir este sitio ligero en PHP Serverless sobre Vercel para documentar mis ideas con claridad y calma.',
            ],
            [
                'id' => 'equilibrio-investigacion-codigo',
                'subtitulo' => '2. Un pie en la investigación y otro en el software real',
                'contenido' => 'Mi línea de trabajo combina el rigor académico —como el procesamiento de imágenes para salud o detección de fatiga— con la ingeniería cotidiana: aplicaciones móviles en Kotlin, criptografía con RSA-2048 o herramientas prácticas en Python y Java.',
            ],
            [
                'id' => 'mas-alla-codigo',
                'subtitulo' => '3. Qué viene en las próximas entradas',
                'contenido' => 'Aquí iré publicando tanto desgloses técnicos de mis papers y repositorios como reflexiones personales sobre hábitos de estudio, diseño limpio de interfaces y proyectos de fin de semana.',
            ],
        ],
        'nota_destacada' => 'Escribir lo que construyes te obliga a entenderlo dos veces: una vez cuando funciona en código y otra cuando lo explicas con palabras claras.',
        'codigo_titulo' => 'vercel.json',
        'codigo' => "{\n  \"functions\": {\n    \"api/index.php\": { \"runtime\": \"vercel-php@0.7.3\" }\n  },\n  \"routes\": [\n    { \"handle\": \"filesystem\" },\n    { \"src\": \"/(.*)\", \"dest\": \"/api/index.php\" }\n  ]\n}",
    ],
    [
        'slug' => 'diagnostico-dermatologico-cnn-case-cbaft',
        'categoria' => 'Visión Computacional',
        'fecha' => '18 Nov 2026',
        'lectura' => '6 min lectura',
        'titulo' => 'Diagnóstico multiclase de enfermedades de la piel con CNNs y preprocesamiento CASE + C-BAFT',
        'extracto' => 'Cómo mejorar la sensibilidad de redes neuronales convolucionales sobre imágenes clínicas RGB reduciendo artefactos de iluminación y realzando bordes lesionales.',
        'ilustracion' => 'skin-cnn',
        'repo_relacionado' => 'https://doi.org/10.2139/ssrn.6367882',
        'repo_etiqueta' => 'DOI: 10.2139/ssrn.6367882',
        'destacado' => true,
        'secciones' => [
            [
                'id' => 'desafios-rgb',
                'subtitulo' => '1. El reto de las imágenes clínicas RGB',
                'contenido' => 'A diferencia de los conjuntos dermatoscópicos controlados, las fotografías clínicas RGB tomadas en consulta presentan variaciones severas de iluminación, sombras, tonos de piel y presencia de ruido periférico. Si alimentamos directamente estos fotogramas a una arquitectura convolucional estándar, los filtros iniciales tienden a sobreajustarse al fondo.',
            ],
            [
                'id' => 'pipeline-case-cbaft',
                'subtitulo' => '2. Pipeline con CASE y C-BAFT',
                'contenido' => 'En nuestra investigación publicada como preprint en SSRN (DOI 10.2139/ssrn.6367882), introducimos una etapa determinista de preprocesamiento previa al entrenamiento. Las técnicas CASE y C-BAFT normalizan el contraste adaptativo local mientras preservan los contornos cromáticos de la lesión cutánea, estabilizando los gradientes durante el ajuste fino de la CNN.',
            ],
            [
                'id' => 'evaluacion-multiclase',
                'subtitulo' => '3. Impacto en clasificación multiclase',
                'contenido' => 'Al reducir la varianza fotométrica entre muestras clínicas, el extractor convolucional concentra su activación sobre la morfología y textura dermatológica real, logrando métricas más equilibradas entre clases minoritarias y mayor robustez clínica.',
            ],
        ],
        'nota_destacada' => 'La calidad del preprocesamiento de dominio específico suele aportar ganancias de generalización superiores a simplemente incrementar el número de parámetros del modelo.',
        'codigo_titulo' => 'pipeline_skin_preproc.py',
        'codigo' => "def preprocess_clinical_rgb(image_rgb):\n    \"\"\"Pipeline simplificado previo a la ingesta en la CNN multiclase.\"\"\"\n    enhanced = apply_case_contrast(image_rgb)\n    filtered = apply_cbaft_boundary_filter(enhanced)\n    tensor = normalize_imagenet(resize_tensor(filtered, (224, 224)))\n    return tensor",
    ],
    [
        'slug' => 'asl-code-landmarks-mobilenetv3-gradcam',
        'categoria' => 'Deep Learning',
        'fecha' => '24 Jul 2026',
        'lectura' => '5 min lectura',
        'titulo' => 'ASL-Code: Fusión de Landmarks y MobileNetV3 con Grad-CAM para lenguaje de señas',
        'extracto' => 'Por qué los modelos basados solo en píxeles fallan fuera de su dataset original y cómo una arquitectura de doble rama resuelve la generalización LODO.',
        'ilustracion' => 'asl-fusion',
        'repo_relacionado' => 'https://github.com/JairoBg03/ASL-Code',
        'repo_etiqueta' => 'github.com/JairoBg03/ASL-Code',
        'destacado' => true,
        'secciones' => [
            [
                'id' => 'problema-lodo',
                'subtitulo' => '1. Generalización Cross-Dataset (LODO)',
                'contenido' => 'Un clasificador del alfabeto ASL puede alcanzar 99% de exactitud dentro de un mismo repositorio de entrenamiento y desplomarse al probarse en usuarios o cámaras distintas. Para medir este fenómeno con rigor implementamos evaluación Leave-One-Dataset-Out (LODO) en ASL-Code.',
            ],
            [
                'id' => 'arquitectura-doble-rama',
                'subtitulo' => '2. Arquitectura Two-Branch: Píxeles + Landmarks',
                'contenido' => 'La rama visual emplea MobileNetV3 para capturar textura y oclusiones sutiles, mientras la rama geométrica procesa las coordenadas normalizadas de las articulaciones de la mano. Al concatenar ambos vectores latentes antes del cabezal de clasificación, el modelo gana invariancia frente a fondos complejos.',
            ],
            [
                'id' => 'explicabilidad-gradcam',
                'subtitulo' => '3. Verificación visual mediante Grad-CAM',
                'contenido' => 'Integrar Grad-CAM sobre las últimas capas convolucionales permite auditar qué regiones de la mano activan cada letra predicha, descartando correlaciones espurias con la ropa o el entorno.',
            ],
        ],
        'nota_destacada' => 'Evaluar con particiones aleatorias dentro de un mismo dataset oculta el sobreajuste al fondo; la validación cross-dataset LODO expone la capacidad real del modelo.',
        'codigo_titulo' => 'two_branch_fusion.py',
        'codigo' => "class TwoBranchASLFusion(nn.Module):\n    def forward(self, img_tensor, hand_landmarks):\n        vis_feat = self.mobilenet_backbone(img_tensor)\n        geo_feat = self.landmark_mlp(hand_landmarks)\n        fused = torch.cat([vis_feat, geo_feat], dim=1)\n        return self.classifier(fused)  # Compatible con hooks Grad-CAM",
    ],
    [
        'slug' => 'firma-digital-pdf-rsa2048-x509-python',
        'categoria' => 'Ciberseguridad',
        'fecha' => '24 Jun 2026',
        'lectura' => '5 min lectura',
        'titulo' => 'Arquitectura de Firma Digital PDF con RSA-2048, PSS (PKCS#1 v2.1) y certificados X.509',
        'extracto' => 'Diseño práctico de una plataforma web en Python capaz de emitir certificados locales, firmar documentos PDF y verificar su integridad criptográfica.',
        'ilustracion' => 'rsa-crypto',
        'repo_relacionado' => 'https://github.com/JairoBg03/sistema-firma-digital',
        'repo_etiqueta' => 'github.com/JairoBg03/sistema-firma-digital',
        'destacado' => false,
        'secciones' => [
            [
                'id' => 'integridad-documental',
                'subtitulo' => '1. Más allá de una imagen pegada en el PDF',
                'contenido' => 'Una firma digital auténtica garantiza integridad, autenticidad y no repudio mediante criptografía asimétrica. En sistema-firma-digital construimos una plataforma interactiva en Python que separa el flujo de emisión de identidad del proceso de firma y verificación.',
            ],
            [
                'id' => 'rsa-pss-sha256',
                'subtitulo' => '2. Por qué RSA-2048 con relleno PSS y SHA-256',
                'contenido' => 'El esquema probabilístico PSS (PKCS#1 v2.1) combinado con resúmenes SHA-256 ofrece propiedades de seguridad demostrables superiores al relleno determinista PKCS#1 v1.5, resistiendo ataques de falsificación adaptativa.',
            ],
            [
                'id' => 'ca-local-x509',
                'subtitulo' => '3. Simulación de Autoridad Certificadora X.509',
                'contenido' => 'La aplicación genera una CA raíz local que firma certificados X.509 para usuarios firmantes. Durante la verificación se valida tanto el hash del documento PDF como la cadena de confianza del certificado emitido.',
            ],
        ],
        'nota_destacada' => 'Incluso la alteración de un único byte en el PDF modifica por completo el digest SHA-256 e invalida inmediatamente la firma al verificar con la clave pública.',
        'codigo_titulo' => 'firma_digital.py',
        'codigo' => "signature = private_key.sign(\n    pdf_bytes,\n    padding.PSS(\n        mgf=padding.MGF1(hashes.SHA256()),\n        salt_length=padding.PSS.MAX_LENGTH\n    ),\n    hashes.SHA256()\n)",
    ],
    [
        'slug' => 'eventify-arquitectura-android-kotlin-material3',
        'categoria' => 'Desarrollo Móvil',
        'fecha' => '30 Jul 2026',
        'lectura' => '6 min lectura',
        'titulo' => 'Eventify: Desarrollo Android moderno con Kotlin, Material 3, Firestore Offline y Google Maps',
        'extracto' => 'Cómo estructuré una aplicación nativa de eventos tecnológicos con soporte claro/oscuro, caché offline y mapas interactivos en Kotlin.',
        'ilustracion' => 'eventify-app',
        'repo_relacionado' => 'https://github.com/JairoBg03/Eventify',
        'repo_etiqueta' => 'github.com/JairoBg03/Eventify',
        'destacado' => false,
        'secciones' => [
            [
                'id' => 'arquitectura-mvvm',
                'subtitulo' => '1. Separación limpia con ViewModel y LiveData',
                'contenido' => 'Eventify nació como proyecto de aplicaciones móviles para descubrir cronogramas, ponentes y sedes de eventos tech. Para mantener la interfaz desacoplada del origen de datos, implementamos el patrón MVVM usando ViewModel, LiveData y ViewBinding en cada fragmento.',
            ],
            [
                'id' => 'firestore-offline',
                'subtitulo' => '2. Persistencia Offline con Firebase Firestore',
                'contenido' => 'En auditorios o eventos presenciales la conectividad suele ser inestable. Al habilitar la persistencia offline nativa de Firestore y combinarla con ListAdapter + DiffUtil en RecyclerView, las actualizaciones de agenda se reflejan de forma fluida sin recargar toda la pantalla.',
            ],
            [
                'id' => 'material3-maps',
                'subtitulo' => '3. Material 3 DayNight y Google Maps SDK',
                'contenido' => 'La app adapta automáticamente su paleta con temas DayNight de Material 3, carga imágenes optimizadas mediante Glide e integra Google Maps SDK para ubicar con precisión cada auditorio.',
            ],
        ],
        'nota_destacada' => 'Combinar ListAdapter + DiffUtil con persistencia local de Firestore elimina los parpadeos de lista y permite navegar la agenda completa incluso sin red.',
        'codigo_titulo' => 'EventViewModel.kt',
        'codigo' => "class EventViewModel(private val repo: EventRepository) : ViewModel() {\n    val events: LiveData<List<TechEvent>> = repo.observeEventsOfflineFirst()\n    fun toggleBookmark(eventId: String) = repo.savePreference(eventId)\n}",
    ],
    [
        'slug' => 'algoritmos-geneticos-programacion-audiencias-chsp',
        'categoria' => 'Optimización & IA',
        'fecha' => '05 Jul 2026',
        'lectura' => '5 min lectura',
        'titulo' => 'Algoritmos Genéticos aplicados al problema de programación de audiencias judiciales (CHSP)',
        'extracto' => 'Modelado de restricciones duras y blandas mediante computación evolutiva, visualización de diagramas de Gantt y análisis de convergencia en Streamlit.',
        'ilustracion' => 'chsp-genetic',
        'repo_relacionado' => 'https://github.com/JairoBg03/Algotitmos-Evolutivos',
        'repo_etiqueta' => 'github.com/JairoBg03/Algotitmos-Evolutivos',
        'destacado' => false,
        'secciones' => [
            [
                'id' => 'complejidad-chsp',
                'subtitulo' => '1. El problema CHSP (Court Hearing Scheduling)',
                'contenido' => 'Asignar salas, jueces, fiscales y bloques horarios sin solapamientos ni tiempos muertos constituye un problema combinatorio NP-duro. Las reglas rígidas tradicionales se quiebran cuando crece el número de expedientes.',
            ],
            [
                'id' => 'operadores-geneticos',
                'subtitulo' => '2. Diseño de cromosoma y función de aptitud',
                'contenido' => 'En Algotitmos-Evolutivos definimos una representación cromosómica orientada a franjas horarias junto con penalizaciones graduadas para restricciones duras (choques de juez o sala) y blandas (continuidad de agenda). La selección por torneo, cruce y mutación dirigida hacen evolucionar soluciones factibles en segundos.',
            ],
            [
                'id' => 'streamlit-gantt',
                'subtitulo' => '3. Tablero interactivo en Streamlit',
                'contenido' => 'La interfaz permite calibrar tasa de mutación, tamaño de población y generaciones, mostrando la curva de convergencia del fitness, el diagrama de Gantt final y exportación directa a CSV.',
            ],
        ],
        'nota_destacada' => 'Separar las penalizaciones de restricciones duras y blandas en la función fitness permite diagnosticar en la curva de convergencia en qué generación la población alcanza factibilidad completa.',
        'codigo_titulo' => 'ga_chsp.py',
        'codigo' => "def evolve_schedule(population, generations=120, mutation_rate=0.08):\n    for gen in range(generations):\n        scored = sorted(population, key=fitness_chsp)\n        population = elitism_and_crossover(scored, mutation_rate)\n    return scored[0]  # Mejor cronograma factible",
    ],
];
