<?php

return [
    'resource' => [
        'label' => '数据保护评估',
        'plural_label' => '数据保护评估',
    ],

    'fields' => [
        'title' => '标题',
        'processing_activity' => '处理活动',
        'description' => '处理说明',
        'benefits' => '收益',
        'necessity' => '必要性与相称性',
        'risks' => '风险',
        'risk_title' => '风险',
        'threat' => '威胁（LINDDUN）',
        'likelihood' => '可能性',
        'impact' => '影响',
        'measures' => '保障措施',
        'residual_likelihood' => '保障措施后的可能性',
        'residual_impact' => '保障措施后的影响',
        'status' => '状态',
        'inherent_risk' => '最高风险',
        'residual_risk' => '最高剩余风险',
        'next_review_at' => '下次审查',
        'approved_by' => '批准人',
    ],

    'help' => [
        'description' => '处理活动、其目的及所使用的个人数据。',
        'benefits' => '对您、消费者、其他相关方及公众的直接与间接收益，并与风险进行权衡。',
        'necessity' => '处理为何对其目的而言合理必要且相称。',
        'risks' => '风险等级 = 可能性 × 影响：1-2 低，3-4 中，6-9 高。若无保障措施后的评分，剩余风险即为固有风险。',
        'candidates' => '个人数据被用于定向广告、出售、画像或属于敏感数据，且尚无数据保护评估的处理活动。',
        'no_candidates' => '所有此类处理活动都已有评估。',
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
        'linking' => '关联',
        'identifying' => '识别',
        'non_repudiation' => '不可否认',
        'detecting' => '检测',
        'data_disclosure' => '数据泄露',
        'unawareness' => '不知情',
        'non_compliance' => '不合规',
    ],

    'statuses' => [
        'draft' => '草稿',
        'approved' => '已批准',
        'review_due' => '需要审查',
    ],

    'reasons' => [
        'targeted_advertising' => '定向广告',
        'sale' => '出售个人数据',
        'profiling' => '画像分析',
        'sensitive_data' => '敏感数据',
    ],

    'actions' => [
        'approve' => '批准',
        'export' => '导出（JSON）',
        'candidates' => '缺少的评估',
        'close' => '关闭',
    ],

    'notifications' => [
        'approved' => '数据保护评估已批准',
        'no_risks' => '批准前请至少评估一项风险。',
    ],
];
