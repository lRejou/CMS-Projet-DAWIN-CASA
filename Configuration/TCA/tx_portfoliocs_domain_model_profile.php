<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfoliocs_domain_model_profile',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'name,lastname,birth_day,driving_licence,phone,mail,address,photo,projects,jobs,socials,training',
        'iconfile' => 'EXT:portfolio_cs/Resources/Public/Icons/tx_portfoliocs_domain_model_profile.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, lastname, birth_day, driving_licence, phone, mail, address, photo, projects, jobs, socials, training',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, lastname, birth_day, driving_licence, phone, mail, address, photo, projects, jobs, socials, training, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_portfoliocs_domain_model_profile',
                'foreign_table_where' => 'AND tx_portfoliocs_domain_model_profile.pid=###CURRENT_PID### AND tx_portfoliocs_domain_model_profile.sys_language_uid IN (-1,0)',
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

        'name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfoliocs_domain_model_profile.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'lastname' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfoliocs_domain_model_profile.lastname',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'birth_day' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfoliocs_domain_model_profile.birth_day',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 10,
                'eval' => 'datetime,required',
                'default' => time()
            ],
        ],
        'driving_licence' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfoliocs_domain_model_profile.driving_licence',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
            
        ],
        'phone' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfoliocs_domain_model_profile.phone',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'mail' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfoliocs_domain_model_profile.mail',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'address' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfoliocs_domain_model_profile.address',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'photo' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfoliocs_domain_model_profile.photo',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'photo',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'foreign_types' => [
                        '0' => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ]
                    ],
                    'maxitems' => 1
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],
        'projects' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfoliocs_domain_model_profile.projects',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_portfoliocs_domain_model_projet',
                'foreign_field' => 'profile',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],
        'jobs' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfoliocs_domain_model_profile.jobs',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_portfoliocs_domain_model_job',
                'foreign_field' => 'profile',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],
        'socials' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfoliocs_domain_model_profile.socials',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_portfoliocs_domain_model_social',
                'foreign_field' => 'profile',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],
        'training' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfoliocs_domain_model_profile.training',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_portfoliocs_domain_model_training',
                'foreign_field' => 'profile',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],
    
    ],
];
