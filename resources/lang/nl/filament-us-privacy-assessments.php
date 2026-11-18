<?php

return [
    'resource' => [
        'label' => 'Gegevensbeschermingsbeoordeling',
        'plural_label' => 'Gegevensbeschermingsbeoordelingen',
    ],

    'fields' => [
        'title' => 'Titel',
        'processing_activity' => 'Verwerkingsactiviteit',
        'description' => 'Beschrijving van de verwerking',
        'benefits' => 'Voordelen',
        'necessity' => 'Noodzaak en evenredigheid',
        'risks' => 'Risico\'s',
        'risk_title' => 'Risico',
        'threat' => 'Dreiging (LINDDUN)',
        'likelihood' => 'Waarschijnlijkheid',
        'impact' => 'Impact',
        'measures' => 'Waarborgen',
        'residual_likelihood' => 'Kans na waarborgen',
        'residual_impact' => 'Impact na waarborgen',
        'status' => 'Status',
        'inherent_risk' => 'Hoogste risico',
        'residual_risk' => 'Hoogste restrisico',
        'next_review_at' => 'Volgende beoordeling',
        'approved_by' => 'Goedgekeurd door',
    ],

    'help' => [
        'description' => 'De verwerking, het doel ervan en de persoonsgegevens die ze gebruikt.',
        'benefits' => 'De directe en indirecte voordelen voor u, de consument, andere belanghebbenden en het publiek, afgewogen tegen de risico\'s.',
        'necessity' => 'Waarom de verwerking redelijkerwijs noodzakelijk en evenredig is voor het doel.',
        'risks' => 'Risiconiveau = kans x impact: 1-2 laag, 3-4 middel, 6-9 hoog. Zonder scores na waarborgen is het restrisico gelijk aan het inherente risico.',
        'candidates' => 'Verwerkingsactiviteiten waarvan de persoonsgegevens worden gebruikt voor gerichte reclame, verkocht, gebruikt voor profilering of gevoelig zijn, en die nog geen gegevensbeschermingsbeoordeling hebben.',
        'no_candidates' => 'Elk van deze verwerkingsactiviteiten heeft een beoordeling.',
    ],

    'scale' => [
        '1' => '1 - Laag',
        '2' => '2 - Gemiddeld',
        '3' => '3 - Hoog',
    ],

    'levels' => [
        'low' => 'Laag',
        'medium' => 'Gemiddeld',
        'high' => 'Hoog',
    ],

    'threats' => [
        'linking' => 'Koppeling',
        'identifying' => 'Identificatie',
        'non_repudiation' => 'Onweerlegbaarheid',
        'detecting' => 'Detectie',
        'data_disclosure' => 'Openbaarmaking van gegevens',
        'unawareness' => 'Onwetendheid',
        'non_compliance' => 'Niet-naleving',
    ],

    'statuses' => [
        'draft' => 'Concept',
        'approved' => 'Goedgekeurd',
        'review_due' => 'Beoordeling nodig',
    ],

    'reasons' => [
        'targeted_advertising' => 'gerichte reclame',
        'sale' => 'verkoop van persoonsgegevens',
        'profiling' => 'profilering',
        'sensitive_data' => 'gevoelige gegevens',
    ],

    'actions' => [
        'approve' => 'Goedkeuren',
        'export' => 'Exporteren (JSON)',
        'candidates' => 'Ontbrekende beoordelingen',
        'close' => 'Sluiten',
    ],

    'notifications' => [
        'approved' => 'Gegevensbeschermingsbeoordeling goedgekeurd',
        'no_risks' => 'Beoordeel ten minste één risico voordat u goedkeurt.',
    ],
];
