<?php

return [
    'resource' => [
        'label' => 'Avaliação de proteção de dados',
        'plural_label' => 'Avaliações de proteção de dados',
    ],

    'fields' => [
        'title' => 'Título',
        'processing_activity' => 'Atividade de tratamento',
        'description' => 'Descrição do tratamento',
        'benefits' => 'Benefícios',
        'necessity' => 'Necessidade e proporcionalidade',
        'risks' => 'Riscos',
        'risk_title' => 'Risco',
        'threat' => 'Ameaça (LINDDUN)',
        'likelihood' => 'Probabilidade',
        'impact' => 'Impacto',
        'measures' => 'Salvaguardas',
        'residual_likelihood' => 'Probabilidade após as salvaguardas',
        'residual_impact' => 'Impacto após as salvaguardas',
        'status' => 'Situação',
        'inherent_risk' => 'Maior risco',
        'residual_risk' => 'Maior risco residual',
        'next_review_at' => 'Próxima revisão',
        'approved_by' => 'Aprovado por',
    ],

    'help' => [
        'description' => 'O tratamento, sua finalidade e os dados pessoais que utiliza.',
        'benefits' => 'Os benefícios diretos e indiretos para você, o consumidor, outras partes interessadas e o público, ponderados contra os riscos.',
        'necessity' => 'Por que o tratamento é razoavelmente necessário e proporcional à sua finalidade.',
        'risks' => 'Nível de risco = probabilidade x impacto: 1-2 baixo, 3-4 médio, 6-9 alto. Sem as notas após as salvaguardas, o risco residual é o inerente.',
        'candidates' => 'Atividades de tratamento cujos dados pessoais são usados em publicidade direcionada, vendidos, usados em perfilamento ou sensíveis, e que ainda não têm avaliação de proteção de dados.',
        'no_candidates' => 'Todas essas atividades de tratamento têm relatório.',
    ],

    'scale' => [
        '1' => '1 - Baixa',
        '2' => '2 - Média',
        '3' => '3 - Alta',
    ],

    'levels' => [
        'low' => 'Baixo',
        'medium' => 'Médio',
        'high' => 'Alto',
    ],

    'threats' => [
        'linking' => 'Vinculação',
        'identifying' => 'Identificação',
        'non_repudiation' => 'Não repúdio',
        'detecting' => 'Detecção',
        'data_disclosure' => 'Divulgação de dados',
        'unawareness' => 'Desconhecimento do titular',
        'non_compliance' => 'Não conformidade',
    ],

    'statuses' => [
        'draft' => 'Rascunho',
        'approved' => 'Aprovado',
        'review_due' => 'Revisão pendente',
    ],

    'reasons' => [
        'targeted_advertising' => 'publicidade direcionada',
        'sale' => 'venda de dados pessoais',
        'profiling' => 'perfilamento',
        'sensitive_data' => 'dados sensíveis',
    ],

    'actions' => [
        'approve' => 'Aprovar',
        'export' => 'Exportar (JSON)',
        'candidates' => 'Relatórios faltando',
        'close' => 'Fechar',
    ],

    'notifications' => [
        'approved' => 'Avaliação de proteção de dados aprovada',
        'no_risks' => 'Avalie ao menos um risco antes de aprovar.',
    ],
];
