<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfoliocs_domain_model_job',
        'label' => 'job_name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'job_name,company_name,description,date_start,date_end,contract,location,skills',
        'iconfile' => 'EXT:portfolio_cs/Resources/Public/Icons/tx_portfoliocs_domain_model_job.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, job_name, company_name, description, date_start, date_end, contract, location, skills',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, job_name, company_name, description, date_start, date_end, contract, location, skills, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_portfoliocs_domain_model_job',
                'foreign_table_where' => 'AND tx_portfoliocs_domain_model_job.pid=###CURRENT_PID### AND tx_portfoliocs_domain_model_job.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
            ],
        ],

        'job_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfoliocs_domain_model_job.job_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'company_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfoliocs_domain_model_job.company_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'description' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfoliocs_domain_model_job.description',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim,required',
            ],
            
        ],
        'date_start' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfoliocs_domain_model_job.date_start',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 7,
                'eval' => 'date,required',
                'default' => time()
            ],
        ],
        'date_end' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfoliocs_domain_model_job.date_end',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 7,
                'eval' => 'date,required',
                'default' => time()
            ],
        ],
        'contract' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfoliocs_domain_model_job.contract',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['CDI', 0],['CDD',1],['Intérim',2],['Freelance',3]
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
        'location' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfoliocs_domain_model_job.location',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'skills' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfoliocs_domain_model_job.skills',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingleBox',
                'foreign_table' => 'tx_portfoliocs_domain_model_skill',
                'MM' => 'tx_portfoliocs_job_skill_mm',
            ],
            
        ],
    
        'profile' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
