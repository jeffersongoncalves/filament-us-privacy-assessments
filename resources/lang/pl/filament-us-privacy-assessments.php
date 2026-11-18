<?php

return [
    'resource' => [
        'label' => 'Ocena ochrony danych',
        'plural_label' => 'Oceny ochrony danych',
    ],

    'fields' => [
        'title' => 'Tytuł',
        'processing_activity' => 'Czynność przetwarzania',
        'description' => 'Opis przetwarzania',
        'benefits' => 'Korzyści',
        'necessity' => 'Niezbędność i proporcjonalność',
        'risks' => 'Ryzyka',
        'risk_title' => 'Ryzyko',
        'threat' => 'Zagrożenie (LINDDUN)',
        'likelihood' => 'Prawdopodobieństwo',
        'impact' => 'Wpływ',
        'measures' => 'Zabezpieczenia',
        'residual_likelihood' => 'Prawdopodobieństwo po zabezpieczeniach',
        'residual_impact' => 'Skutek po zabezpieczeniach',
        'status' => 'Status',
        'inherent_risk' => 'Najwyższe ryzyko',
        'residual_risk' => 'Najwyższe ryzyko szczątkowe',
        'next_review_at' => 'Następny przegląd',
        'approved_by' => 'Zatwierdził',
    ],

    'help' => [
        'description' => 'Przetwarzanie, jego cel i dane osobowe, z których korzysta.',
        'benefits' => 'Bezpośrednie i pośrednie korzyści dla Ciebie, konsumenta, innych interesariuszy i ogółu, zestawione z ryzykiem.',
        'necessity' => 'Dlaczego przetwarzanie jest racjonalnie niezbędne i proporcjonalne do celu.',
        'risks' => 'Poziom ryzyka = prawdopodobieństwo x skutek: 1-2 niski, 3-4 średni, 6-9 wysoki. Bez ocen po zabezpieczeniach ryzyko szczątkowe równa się ryzyku pierwotnemu.',
        'candidates' => 'Czynności przetwarzania, których dane osobowe służą reklamie ukierunkowanej, są sprzedawane, służą profilowaniu lub są wrażliwe, a które nie mają jeszcze oceny ochrony danych.',
        'no_candidates' => 'Każda taka czynność przetwarzania ma ocenę.',
    ],

    'scale' => [
        '1' => '1 - Niskie',
        '2' => '2 - Średnie',
        '3' => '3 - Wysokie',
    ],

    'levels' => [
        'low' => 'Niskie',
        'medium' => 'Średnie',
        'high' => 'Wysokie',
    ],

    'threats' => [
        'linking' => 'Powiązanie',
        'identifying' => 'Identyfikacja',
        'non_repudiation' => 'Niezaprzeczalność',
        'detecting' => 'Wykrywanie',
        'data_disclosure' => 'Ujawnienie danych',
        'unawareness' => 'Nieświadomość',
        'non_compliance' => 'Niezgodność',
    ],

    'statuses' => [
        'draft' => 'Szkic',
        'approved' => 'Zatwierdzona',
        'review_due' => 'Wymagany przegląd',
    ],

    'reasons' => [
        'targeted_advertising' => 'reklama ukierunkowana',
        'sale' => 'sprzedaż danych osobowych',
        'profiling' => 'profilowanie',
        'sensitive_data' => 'dane wrażliwe',
    ],

    'actions' => [
        'approve' => 'Zatwierdź',
        'export' => 'Eksportuj (JSON)',
        'candidates' => 'Brakujące oceny',
        'close' => 'Zamknij',
    ],

    'notifications' => [
        'approved' => 'Ocena ochrony danych zatwierdzona',
        'no_risks' => 'Przed zatwierdzeniem oceń co najmniej jedno ryzyko.',
    ],
];
