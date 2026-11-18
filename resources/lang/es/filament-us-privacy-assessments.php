<?php

return [
    'resource' => [
        'label' => 'Evaluación de protección de datos',
        'plural_label' => 'Evaluaciones de protección de datos',
    ],

    'fields' => [
        'title' => 'Título',
        'processing_activity' => 'Actividad de tratamiento',
        'description' => 'Descripción del tratamiento',
        'benefits' => 'Beneficios',
        'necessity' => 'Necesidad y proporcionalidad',
        'risks' => 'Riesgos',
        'risk_title' => 'Riesgo',
        'threat' => 'Amenaza (LINDDUN)',
        'likelihood' => 'Probabilidad',
        'impact' => 'Impacto',
        'measures' => 'Salvaguardas',
        'residual_likelihood' => 'Probabilidad tras las salvaguardas',
        'residual_impact' => 'Impacto tras las salvaguardas',
        'status' => 'Estado',
        'inherent_risk' => 'Riesgo más alto',
        'residual_risk' => 'Riesgo residual más alto',
        'next_review_at' => 'Próxima revisión',
        'approved_by' => 'Aprobado por',
    ],

    'help' => [
        'description' => 'El tratamiento, su finalidad y los datos personales que utiliza.',
        'benefits' => 'Los beneficios directos e indirectos para usted, el consumidor, otras partes interesadas y el público, sopesados frente a los riesgos.',
        'necessity' => 'Por qué el tratamiento es razonablemente necesario y proporcionado a su finalidad.',
        'risks' => 'Nivel de riesgo = probabilidad x impacto: 1-2 bajo, 3-4 medio, 6-9 alto. Sin las puntuaciones tras las salvaguardas, el riesgo residual es el inherente.',
        'candidates' => 'Actividades de tratamiento cuyos datos personales se usan para publicidad dirigida, se venden, se usan para elaborar perfiles o son sensibles, y que aún no tienen evaluación de protección de datos.',
        'no_candidates' => 'Todas esas actividades de tratamiento tienen evaluación.',
    ],

    'scale' => [
        '1' => '1 - Baja',
        '2' => '2 - Media',
        '3' => '3 - Alta',
    ],

    'levels' => [
        'low' => 'Bajo',
        'medium' => 'Medio',
        'high' => 'Alto',
    ],

    'threats' => [
        'linking' => 'Vinculación',
        'identifying' => 'Identificación',
        'non_repudiation' => 'No repudio',
        'detecting' => 'Detección',
        'data_disclosure' => 'Divulgación de datos',
        'unawareness' => 'Desconocimiento',
        'non_compliance' => 'Incumplimiento',
    ],

    'statuses' => [
        'draft' => 'Borrador',
        'approved' => 'Aprobada',
        'review_due' => 'Revisión pendiente',
    ],

    'reasons' => [
        'targeted_advertising' => 'publicidad dirigida',
        'sale' => 'venta de datos personales',
        'profiling' => 'elaboración de perfiles',
        'sensitive_data' => 'datos sensibles',
    ],

    'actions' => [
        'approve' => 'Aprobar',
        'export' => 'Exportar (JSON)',
        'candidates' => 'Evaluaciones faltantes',
        'close' => 'Cerrar',
    ],

    'notifications' => [
        'approved' => 'Evaluación de protección de datos aprobada',
        'no_risks' => 'Evalúe al menos un riesgo antes de aprobar.',
    ],
];
