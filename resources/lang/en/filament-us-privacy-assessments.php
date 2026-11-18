<?php

return [
    'resource' => [
        'label' => 'Data protection assessment',
        'plural_label' => 'Data protection assessments',
    ],

    'fields' => [
        'title' => 'Title',
        'processing_activity' => 'Processing activity',
        'description' => 'Description of the processing',
        'benefits' => 'Benefits',
        'necessity' => 'Necessity and proportionality',
        'risks' => 'Risks',
        'risk_title' => 'Risk',
        'threat' => 'Threat (LINDDUN)',
        'likelihood' => 'Likelihood',
        'impact' => 'Impact',
        'measures' => 'Safeguards',
        'residual_likelihood' => 'Likelihood after safeguards',
        'residual_impact' => 'Impact after safeguards',
        'status' => 'Status',
        'inherent_risk' => 'Highest risk',
        'residual_risk' => 'Highest residual risk',
        'next_review_at' => 'Next review',
        'approved_by' => 'Approved by',
    ],

    'help' => [
        'description' => 'The processing, its purpose and the personal data it uses.',
        'benefits' => 'The direct and indirect benefits to you, the consumer, other stakeholders and the public, weighed against the risks.',
        'necessity' => 'Why the processing is reasonably necessary and proportionate to its purpose.',
        'risks' => 'Risk level = likelihood x impact: 1-2 low, 3-4 medium, 6-9 high. Without the after-safeguards scores, the residual risk is the inherent one.',
        'candidates' => 'Processing activities whose personal data is used for targeted advertising, sold, used for profiling or sensitive, and that have no data protection assessment yet.',
        'no_candidates' => 'Every such processing activity has an assessment.',
    ],

    'scale' => [
        1 => '1 - Low',
        2 => '2 - Medium',
        3 => '3 - High',
    ],

    'levels' => [
        'low' => 'Low',
        'medium' => 'Medium',
        'high' => 'High',
    ],

    'threats' => [
        'linking' => 'Linking',
        'identifying' => 'Identifying',
        'non_repudiation' => 'Non-repudiation',
        'detecting' => 'Detecting',
        'data_disclosure' => 'Data disclosure',
        'unawareness' => 'Unawareness',
        'non_compliance' => 'Non-compliance',
    ],

    'statuses' => [
        'draft' => 'Draft',
        'approved' => 'Approved',
        'review_due' => 'Review due',
    ],

    'reasons' => [
        'targeted_advertising' => 'targeted advertising',
        'sale' => 'sale of personal data',
        'profiling' => 'profiling',
        'sensitive_data' => 'sensitive data',
    ],

    'actions' => [
        'approve' => 'Approve',
        'export' => 'Export (JSON)',
        'candidates' => 'Missing assessments',
        'close' => 'Close',
    ],

    'notifications' => [
        'approved' => 'Data protection assessment approved',
        'no_risks' => 'Assess at least one risk before approving.',
    ],
];
