<?php

return [
    'resource' => [
        'label' => 'Évaluation de la protection des données',
        'plural_label' => 'Évaluations de la protection des données',
    ],

    'fields' => [
        'title' => 'Titre',
        'processing_activity' => 'Activité de traitement',
        'description' => 'Description du traitement',
        'benefits' => 'Avantages',
        'necessity' => 'Nécessité et proportionnalité',
        'risks' => 'Risques',
        'risk_title' => 'Risque',
        'threat' => 'Menace (LINDDUN)',
        'likelihood' => 'Vraisemblance',
        'impact' => 'Impact',
        'measures' => 'Garanties',
        'residual_likelihood' => 'Probabilité après garanties',
        'residual_impact' => 'Impact après garanties',
        'status' => 'Statut',
        'inherent_risk' => 'Risque le plus élevé',
        'residual_risk' => 'Risque résiduel le plus élevé',
        'next_review_at' => 'Prochaine revue',
        'approved_by' => 'Approuvé par',
    ],

    'help' => [
        'description' => 'Le traitement, sa finalité et les données personnelles qu\'il utilise.',
        'benefits' => 'Les avantages directs et indirects pour vous, le consommateur, les autres parties prenantes et le public, mis en balance avec les risques.',
        'necessity' => 'Pourquoi le traitement est raisonnablement nécessaire et proportionné à sa finalité.',
        'risks' => 'Niveau de risque = probabilité x impact : 1-2 faible, 3-4 moyen, 6-9 élevé. Sans les notes après garanties, le risque résiduel est le risque inhérent.',
        'candidates' => 'Activités de traitement dont les données personnelles servent à la publicité ciblée, sont vendues, servent au profilage ou sont sensibles, et qui n\'ont pas encore d\'évaluation de la protection des données.',
        'no_candidates' => 'Chacune de ces activités a une analyse.',
    ],

    'scale' => [
        '1' => '1 - Faible',
        '2' => '2 - Moyen',
        '3' => '3 - Élevé',
    ],

    'levels' => [
        'low' => 'Faible',
        'medium' => 'Moyen',
        'high' => 'Élevé',
    ],

    'threats' => [
        'linking' => 'Mise en relation',
        'identifying' => 'Identification',
        'non_repudiation' => 'Non-répudiation',
        'detecting' => 'Détection',
        'data_disclosure' => 'Divulgation de données',
        'unawareness' => 'Méconnaissance',
        'non_compliance' => 'Non-conformité',
    ],

    'statuses' => [
        'draft' => 'Brouillon',
        'approved' => 'Approuvée',
        'review_due' => 'Revue à faire',
    ],

    'reasons' => [
        'targeted_advertising' => 'publicité ciblée',
        'sale' => 'vente de données personnelles',
        'profiling' => 'profilage',
        'sensitive_data' => 'données sensibles',
    ],

    'actions' => [
        'approve' => 'Approuver',
        'export' => 'Exporter (JSON)',
        'candidates' => 'Analyses manquantes',
        'close' => 'Fermer',
    ],

    'notifications' => [
        'approved' => 'Évaluation de la protection des données approuvée',
        'no_risks' => 'Évaluez au moins un risque avant d\'approuver.',
    ],
];
