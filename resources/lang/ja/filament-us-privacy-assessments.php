<?php

return [
    'resource' => [
        'label' => 'データ保護評価',
        'plural_label' => 'データ保護評価',
    ],

    'fields' => [
        'title' => 'タイトル',
        'processing_activity' => '処理活動',
        'description' => '処理の説明',
        'benefits' => '便益',
        'necessity' => '必要性と比例性',
        'risks' => 'リスク',
        'risk_title' => 'リスク',
        'threat' => '脅威（LINDDUN）',
        'likelihood' => '発生可能性',
        'impact' => '影響度',
        'measures' => '保護措置',
        'residual_likelihood' => '保護措置後の発生可能性',
        'residual_impact' => '保護措置後の影響',
        'status' => 'ステータス',
        'inherent_risk' => '最大のリスク',
        'residual_risk' => '最大の残存リスク',
        'next_review_at' => '次回レビュー',
        'approved_by' => '承認者',
    ],

    'help' => [
        'description' => '処理の内容、その目的、使用する個人データ。',
        'benefits' => '事業者、消費者、その他の利害関係者、社会にとっての直接・間接の便益を、リスクと比較衡量したもの。',
        'necessity' => '処理が目的に照らして合理的に必要かつ相当である理由。',
        'risks' => 'リスクレベル = 発生可能性 × 影響：1-2 低、3-4 中、6-9 高。保護措置後の評価がない場合、残存リスクは固有リスクと同じです。',
        'candidates' => '個人データがターゲティング広告、販売、プロファイリングに使われる、またはセンシティブであり、まだデータ保護評価がない処理活動。',
        'no_candidates' => '該当する処理活動はすべて評価済みです。',
    ],

    'scale' => [
        '1' => '1 - 低',
        '2' => '2 - 中',
        '3' => '3 - 高',
    ],

    'levels' => [
        'low' => '低',
        'medium' => '中',
        'high' => '高',
    ],

    'threats' => [
        'linking' => 'リンク付け',
        'identifying' => '識別',
        'non_repudiation' => '否認防止',
        'detecting' => '検知',
        'data_disclosure' => 'データの開示',
        'unawareness' => '認識の欠如',
        'non_compliance' => '非遵守',
    ],

    'statuses' => [
        'draft' => '下書き',
        'approved' => '承認済み',
        'review_due' => 'レビュー期限',
    ],

    'reasons' => [
        'targeted_advertising' => 'ターゲティング広告',
        'sale' => '個人データの販売',
        'profiling' => 'プロファイリング',
        'sensitive_data' => 'センシティブデータ',
    ],

    'actions' => [
        'approve' => '承認',
        'export' => 'エクスポート（JSON）',
        'candidates' => '不足している評価',
        'close' => '閉じる',
    ],

    'notifications' => [
        'approved' => 'データ保護評価を承認しました',
        'no_risks' => '承認する前に少なくとも1つのリスクを評価してください。',
    ],
];
