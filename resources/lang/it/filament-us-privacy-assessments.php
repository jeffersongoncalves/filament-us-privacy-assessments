<?php

return [
    'resource' => [
        'label' => 'Valutazione della protezione dei dati',
        'plural_label' => 'Valutazioni della protezione dei dati',
    ],

    'fields' => [
        'title' => 'Titolo',
        'processing_activity' => 'Attività di trattamento',
        'description' => 'Descrizione del trattamento',
        'benefits' => 'Benefici',
        'necessity' => 'Necessità e proporzionalità',
        'risks' => 'Rischi',
        'risk_title' => 'Rischio',
        'threat' => 'Minaccia (LINDDUN)',
        'likelihood' => 'Probabilità',
        'impact' => 'Impatto',
        'measures' => 'Garanzie',
        'residual_likelihood' => 'Probabilità dopo le garanzie',
        'residual_impact' => 'Impatto dopo le garanzie',
        'status' => 'Stato',
        'inherent_risk' => 'Rischio più alto',
        'residual_risk' => 'Rischio residuo più alto',
        'next_review_at' => 'Prossima revisione',
        'approved_by' => 'Approvato da',
    ],

    'help' => [
        'description' => 'Il trattamento, la sua finalità e i dati personali che utilizza.',
        'benefits' => 'I benefici diretti e indiretti per te, il consumatore, gli altri interessati e il pubblico, bilanciati con i rischi.',
        'necessity' => 'Perché il trattamento è ragionevolmente necessario e proporzionato alla sua finalità.',
        'risks' => 'Livello di rischio = probabilità x impatto: 1-2 basso, 3-4 medio, 6-9 alto. Senza i punteggi dopo le garanzie, il rischio residuo è quello intrinseco.',
        'candidates' => 'Attività di trattamento i cui dati personali sono usati per pubblicità mirata, venduti, usati per la profilazione o sensibili, e che non hanno ancora una valutazione della protezione dei dati.',
        'no_candidates' => 'Ognuna di queste attività ha una valutazione.',
    ],

    'scale' => [
        '1' => '1 - Bassa',
        '2' => '2 - Media',
        '3' => '3 - Alta',
    ],

    'levels' => [
        'low' => 'Basso',
        'medium' => 'Medio',
        'high' => 'Alto',
    ],

    'threats' => [
        'linking' => 'Collegamento',
        'identifying' => 'Identificazione',
        'non_repudiation' => 'Non ripudio',
        'detecting' => 'Rilevamento',
        'data_disclosure' => 'Divulgazione dei dati',
        'unawareness' => 'Inconsapevolezza',
        'non_compliance' => 'Non conformità',
    ],

    'statuses' => [
        'draft' => 'Bozza',
        'approved' => 'Approvata',
        'review_due' => 'Revisione da fare',
    ],

    'reasons' => [
        'targeted_advertising' => 'pubblicità mirata',
        'sale' => 'vendita di dati personali',
        'profiling' => 'profilazione',
        'sensitive_data' => 'dati sensibili',
    ],

    'actions' => [
        'approve' => 'Approva',
        'export' => 'Esporta (JSON)',
        'candidates' => 'Valutazioni mancanti',
        'close' => 'Chiudi',
    ],

    'notifications' => [
        'approved' => 'Valutazione della protezione dei dati approvata',
        'no_risks' => 'Valuta almeno un rischio prima di approvare.',
    ],
];
