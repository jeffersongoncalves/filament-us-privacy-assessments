<?php

return [
    'resource' => [
        'label' => 'Datenschutz-Folgenabschätzung',
        'plural_label' => 'Datenschutz-Folgenabschätzungen',
    ],

    'fields' => [
        'title' => 'Titel',
        'processing_activity' => 'Verarbeitungstätigkeit',
        'description' => 'Beschreibung der Verarbeitung',
        'benefits' => 'Nutzen',
        'necessity' => 'Notwendigkeit und Verhältnismäßigkeit',
        'risks' => 'Risiken',
        'risk_title' => 'Risiko',
        'threat' => 'Bedrohung (LINDDUN)',
        'likelihood' => 'Eintrittswahrscheinlichkeit',
        'impact' => 'Auswirkung',
        'measures' => 'Schutzmaßnahmen',
        'residual_likelihood' => 'Wahrscheinlichkeit nach Schutzmaßnahmen',
        'residual_impact' => 'Auswirkung nach Schutzmaßnahmen',
        'status' => 'Status',
        'inherent_risk' => 'Höchstes Risiko',
        'residual_risk' => 'Höchstes Restrisiko',
        'next_review_at' => 'Nächste Prüfung',
        'approved_by' => 'Genehmigt von',
    ],

    'help' => [
        'description' => 'Die Verarbeitung, ihr Zweck und die personenbezogenen Daten, die sie nutzt.',
        'benefits' => 'Der direkte und indirekte Nutzen für Sie, den Verbraucher, andere Beteiligte und die Öffentlichkeit, abgewogen gegen die Risiken.',
        'necessity' => 'Warum die Verarbeitung für ihren Zweck vernünftigerweise erforderlich und verhältnismäßig ist.',
        'risks' => 'Risikostufe = Wahrscheinlichkeit x Auswirkung: 1-2 niedrig, 3-4 mittel, 6-9 hoch. Ohne die Werte nach Schutzmaßnahmen ist das Restrisiko das inhärente.',
        'candidates' => 'Verarbeitungstätigkeiten, deren personenbezogene Daten für gezielte Werbung genutzt, verkauft, für Profiling verwendet werden oder sensibel sind, und für die noch keine Datenschutz-Folgenabschätzung vorliegt.',
        'no_candidates' => 'Für jede dieser Verarbeitungstätigkeiten gibt es eine Abschätzung.',
    ],

    'scale' => [
        '1' => '1 - Niedrig',
        '2' => '2 - Mittel',
        '3' => '3 - Hoch',
    ],

    'levels' => [
        'low' => 'Niedrig',
        'medium' => 'Mittel',
        'high' => 'Hoch',
    ],

    'threats' => [
        'linking' => 'Verknüpfung',
        'identifying' => 'Identifizierung',
        'non_repudiation' => 'Nichtabstreitbarkeit',
        'detecting' => 'Erkennung',
        'data_disclosure' => 'Offenlegung von Daten',
        'unawareness' => 'Unkenntnis',
        'non_compliance' => 'Nichteinhaltung',
    ],

    'statuses' => [
        'draft' => 'Entwurf',
        'approved' => 'Genehmigt',
        'review_due' => 'Prüfung fällig',
    ],

    'reasons' => [
        'targeted_advertising' => 'gezielte Werbung',
        'sale' => 'Verkauf personenbezogener Daten',
        'profiling' => 'Profiling',
        'sensitive_data' => 'sensible Daten',
    ],

    'actions' => [
        'approve' => 'Genehmigen',
        'export' => 'Exportieren (JSON)',
        'candidates' => 'Fehlende Abschätzungen',
        'close' => 'Schließen',
    ],

    'notifications' => [
        'approved' => 'Datenschutz-Folgenabschätzung genehmigt',
        'no_risks' => 'Bewerten Sie vor der Genehmigung mindestens ein Risiko.',
    ],
];
