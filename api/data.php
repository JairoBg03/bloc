<?php

declare(strict_types=1);

$perfil = [
    'nombre' => 'Jairo Manuel Blas García',
    'nombre_corto' => 'Jairo Blas',
    'usuario' => '@JairoBg03',
    'rol' => 'Ingeniero de Sistemas e Informática · Desarrollador de Software & Investigador en IA',
    'titular_editorial' => 'Mi espacio personal sobre Sistemas, Visión Computacional, Software e Investigación.',
    'bio' => 'Estudiante e investigador en la Escuela Profesional de Ingeniería de Sistemas e Informática de la Universidad Nacional del Santa (UNS), Nuevo Chimbote, Perú. Construyo modelos de aprendizaje profundo aplicables a salud e inclusión, sistemas criptográficos y aplicaciones móviles y web serverless.',
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
    'universidad' => 'Universidad Nacional del Santa (UNS)',
    'escuela' => 'Escuela Profesional de Ingeniería de Sistemas e Informática',
    'ubicacion' => 'Nuevo Chimbote, Áncash, Perú',
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
    'metricas' => [
        ['valor' => '12', 'etiqueta' => 'Repositorios Públicos'],
        ['valor' => '2', 'etiqueta' => 'Publicaciones con DOI'],
        ['valor' => '5+', 'etiqueta' => 'Áreas de Ingeniería'],
        ['valor' => 'UNS', 'etiqueta' => 'Chimbote · Perú'],
    ],
    'stack' => [
        'IA & Visión Computacional' => ['Python', 'PyTorch / TensorFlow', 'CNN · MobileNetV3', 'Grad-CAM', 'Algoritmos Genéticos', 'Streamlit'],
        'Móvil & Backend' => ['Kotlin', 'Material 3', 'ViewModel + LiveData', 'Firebase Firestore', 'Java Maven (MVVM)', 'PHP Serverless'],
        'Web & Herramientas' => ['Astro', 'Next.js', 'TypeScript', 'Tailwind CSS', 'RSA-2048 / X.509', 'Vercel'],
    ],
];

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
  <text x="344" y="134" text-anchor="middle" font-size="9" font-family="monospace" fill="#64748B">19 módulos PHP</text>
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
