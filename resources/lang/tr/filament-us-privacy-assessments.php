<?php

return [
    'resource' => [
        'label' => 'Veri koruma değerlendirmesi',
        'plural_label' => 'Veri koruma değerlendirmeleri',
    ],

    'fields' => [
        'title' => 'Başlık',
        'processing_activity' => 'İşleme faaliyeti',
        'description' => 'İşlemenin tanımı',
        'benefits' => 'Faydalar',
        'necessity' => 'Gereklilik ve orantılılık',
        'risks' => 'Riskler',
        'risk_title' => 'Risk',
        'threat' => 'Tehdit (LINDDUN)',
        'likelihood' => 'Olasılık',
        'impact' => 'Etki',
        'measures' => 'Güvenceler',
        'residual_likelihood' => 'Güvencelerden sonra olasılık',
        'residual_impact' => 'Güvencelerden sonra etki',
        'status' => 'Durum',
        'inherent_risk' => 'En yüksek risk',
        'residual_risk' => 'En yüksek kalıntı risk',
        'next_review_at' => 'Sonraki inceleme',
        'approved_by' => 'Onaylayan',
    ],

    'help' => [
        'description' => 'İşleme, amacı ve kullandığı kişisel veriler.',
        'benefits' => 'Size, tüketiciye, diğer paydaşlara ve kamuya doğrudan ve dolaylı faydalar, risklerle tartılarak.',
        'necessity' => 'İşlemenin amacına makul ölçüde gerekli ve orantılı olma nedeni.',
        'risks' => 'Risk seviyesi = olasılık x etki: 1-2 düşük, 3-4 orta, 6-9 yüksek. Güvence sonrası puanlar yoksa artık risk, doğal risktir.',
        'candidates' => 'Kişisel verileri hedefli reklam için kullanılan, satılan, profilleme için kullanılan veya hassas olan ve henüz veri koruma değerlendirmesi bulunmayan işleme faaliyetleri.',
        'no_candidates' => 'Bu işleme faaliyetlerinin hepsinin değerlendirmesi var.',
    ],

    'scale' => [
        '1' => '1 - Düşük',
        '2' => '2 - Orta',
        '3' => '3 - Yüksek',
    ],

    'levels' => [
        'low' => 'Düşük',
        'medium' => 'Orta',
        'high' => 'Yüksek',
    ],

    'threats' => [
        'linking' => 'Bağlantılama',
        'identifying' => 'Tanımlama',
        'non_repudiation' => 'İnkâr edilemezlik',
        'detecting' => 'Tespit',
        'data_disclosure' => 'Verilerin ifşası',
        'unawareness' => 'Habersizlik',
        'non_compliance' => 'Uyumsuzluk',
    ],

    'statuses' => [
        'draft' => 'Taslak',
        'approved' => 'Onaylandı',
        'review_due' => 'İnceleme zamanı geldi',
    ],

    'reasons' => [
        'targeted_advertising' => 'hedefli reklamcılık',
        'sale' => 'kişisel verilerin satışı',
        'profiling' => 'profilleme',
        'sensitive_data' => 'hassas veriler',
    ],

    'actions' => [
        'approve' => 'Onayla',
        'export' => 'Dışa aktar (JSON)',
        'candidates' => 'Eksik değerlendirmeler',
        'close' => 'Kapat',
    ],

    'notifications' => [
        'approved' => 'Veri koruma değerlendirmesi onaylandı',
        'no_risks' => 'Onaylamadan önce en az bir riski değerlendirin.',
    ],
];
