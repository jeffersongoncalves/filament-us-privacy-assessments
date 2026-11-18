<?php

return [
    'resource' => [
        'label' => 'Məlumatların qorunması üzrə qiymətləndirmə',
        'plural_label' => 'Məlumatların qorunması üzrə qiymətləndirmələr',
    ],

    'fields' => [
        'title' => 'Başlıq',
        'processing_activity' => 'Emal fəaliyyəti',
        'description' => 'Emalın təsviri',
        'benefits' => 'Faydalar',
        'necessity' => 'Zərurət və mütənasiblik',
        'risks' => 'Risklər',
        'risk_title' => 'Risk',
        'threat' => 'Təhlükə (LINDDUN)',
        'likelihood' => 'Ehtimal',
        'impact' => 'Təsir',
        'measures' => 'Təminatlar',
        'residual_likelihood' => 'Təminatlardan sonra ehtimal',
        'residual_impact' => 'Təminatlardan sonra təsir',
        'status' => 'Status',
        'inherent_risk' => 'Ən yüksək risk',
        'residual_risk' => 'Ən yüksək qalıq risk',
        'next_review_at' => 'Növbəti yoxlama',
        'approved_by' => 'Təsdiq edən',
    ],

    'help' => [
        'description' => 'Emal, onun məqsədi və istifadə etdiyi şəxsi məlumatlar.',
        'benefits' => 'Siz, istehlakçı, digər maraqlı tərəflər və ictimaiyyət üçün birbaşa və dolayı faydalar, risklərlə müqayisədə.',
        'necessity' => 'Emalın niyə məqsədinə əsaslı şəkildə zəruri və mütənasib olduğu.',
        'risks' => 'Risk səviyyəsi = ehtimal x təsir: 1-2 aşağı, 3-4 orta, 6-9 yüksək. Təminatlardan sonrakı ballar olmadan qalıq risk ilkin riskdir.',
        'candidates' => 'Şəxsi məlumatları hədəfli reklam üçün istifadə edilən, satılan, profilləşdirmə üçün istifadə edilən və ya həssas olan və hələ məlumatların qorunması üzrə qiymətləndirməsi olmayan emal fəaliyyətləri.',
        'no_candidates' => 'Belə fəaliyyətlərin hamısının qiymətləndirməsi var.',
    ],

    'scale' => [
        '1' => '1 - Aşağı',
        '2' => '2 - Orta',
        '3' => '3 - Yüksək',
    ],

    'levels' => [
        'low' => 'Aşağı',
        'medium' => 'Orta',
        'high' => 'Yüksək',
    ],

    'threats' => [
        'linking' => 'Əlaqələndirmə',
        'identifying' => 'İdentifikasiya',
        'non_repudiation' => 'İnkar edilməzlik',
        'detecting' => 'Aşkarlama',
        'data_disclosure' => 'Məlumatların ifşası',
        'unawareness' => 'Xəbərsizlik',
        'non_compliance' => 'Uyğunsuzluq',
    ],

    'statuses' => [
        'draft' => 'Qaralama',
        'approved' => 'Təsdiqlənib',
        'review_due' => 'Yoxlama vaxtı çatıb',
    ],

    'reasons' => [
        'targeted_advertising' => 'hədəfli reklam',
        'sale' => 'şəxsi məlumatların satışı',
        'profiling' => 'profilləşdirmə',
        'sensitive_data' => 'həssas məlumatlar',
    ],

    'actions' => [
        'approve' => 'Təsdiq et',
        'export' => 'İxrac (JSON)',
        'candidates' => 'Çatışmayan qiymətləndirmələr',
        'close' => 'Bağla',
    ],

    'notifications' => [
        'approved' => 'Məlumatların qorunması üzrə qiymətləndirmə təsdiqləndi',
        'no_risks' => 'Təsdiqdən əvvəl ən azı bir riski qiymətləndirin.',
    ],
];
