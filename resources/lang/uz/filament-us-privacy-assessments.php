<?php

return [
    'resource' => [
        'label' => 'Ma\'lumotlarni himoya qilish bahosi',
        'plural_label' => 'Ma\'lumotlarni himoya qilish baholari',
    ],

    'fields' => [
        'title' => 'Sarlavha',
        'processing_activity' => 'Ishlov berish faoliyati',
        'description' => 'Ishlov berish tavsifi',
        'benefits' => 'Foydalar',
        'necessity' => 'Zaruriyat va mutanosiblik',
        'risks' => 'Xavflar',
        'risk_title' => 'Xavf',
        'threat' => 'Tahdid (LINDDUN)',
        'likelihood' => 'Ehtimollik',
        'impact' => 'Ta\'sir',
        'measures' => 'Himoya choralari',
        'residual_likelihood' => 'Himoya choralaridan keyingi ehtimollik',
        'residual_impact' => 'Himoya choralaridan keyingi ta\'sir',
        'status' => 'Holat',
        'inherent_risk' => 'Eng yuqori xavf',
        'residual_risk' => 'Eng yuqori qoldiq xavf',
        'next_review_at' => 'Keyingi tekshiruv',
        'approved_by' => 'Tasdiqlagan',
    ],

    'help' => [
        'description' => 'Ishlov berish, uning maqsadi va foydalanadigan shaxsiy ma\'lumotlar.',
        'benefits' => 'Siz, iste\'molchi, boshqa manfaatdor tomonlar va jamoatchilik uchun bevosita va bilvosita foydalar, xavflar bilan solishtirilgan.',
        'necessity' => 'Ishlov berish nima uchun maqsadiga oqilona zarur va mutanosib ekanligi.',
        'risks' => 'Xavf darajasi = ehtimollik x ta\'sir: 1-2 past, 3-4 o\'rta, 6-9 yuqori. Himoya choralaridan keyingi ballar bo\'lmasa, qoldiq xavf dastlabki xavfga teng.',
        'candidates' => 'Shaxsiy ma\'lumotlari maqsadli reklama uchun ishlatiladigan, sotiladigan, profillash uchun ishlatiladigan yoki nozik bo\'lgan va hali ma\'lumotlarni himoya qilish bahosi bo\'lmagan ishlov berish faoliyatlari.',
        'no_candidates' => 'Bunday faoliyatlarning barchasida baholash bor.',
    ],

    'scale' => [
        '1' => '1 - Past',
        '2' => '2 - O\'rta',
        '3' => '3 - Yuqori',
    ],

    'levels' => [
        'low' => 'Past',
        'medium' => 'O\'rta',
        'high' => 'Yuqori',
    ],

    'threats' => [
        'linking' => 'Bog\'lash',
        'identifying' => 'Identifikatsiya',
        'non_repudiation' => 'Rad etib bo\'lmaslik',
        'detecting' => 'Aniqlash',
        'data_disclosure' => 'Ma\'lumotlarni oshkor qilish',
        'unawareness' => 'Xabarsizlik',
        'non_compliance' => 'Nomuvofiqlik',
    ],

    'statuses' => [
        'draft' => 'Qoralama',
        'approved' => 'Tasdiqlangan',
        'review_due' => 'Tekshiruv vaqti keldi',
    ],

    'reasons' => [
        'targeted_advertising' => 'maqsadli reklama',
        'sale' => 'shaxsiy ma\'lumotlarni sotish',
        'profiling' => 'profillash',
        'sensitive_data' => 'nozik ma\'lumotlar',
    ],

    'actions' => [
        'approve' => 'Tasdiqlash',
        'export' => 'Eksport (JSON)',
        'candidates' => 'Yetishmayotgan baholashlar',
        'close' => 'Yopish',
    ],

    'notifications' => [
        'approved' => 'Ma\'lumotlarni himoya qilish bahosi tasdiqlandi',
        'no_risks' => 'Tasdiqlashdan oldin kamida bitta xavfni baholang.',
    ],
];
