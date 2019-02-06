<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'CS.PortfolioCs',
            'Trainings',
            [
                'Training' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Training' => 'search'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'CS.PortfolioCs',
            'Profile',
            [
                'Profile' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Projet' => '',
                'Profile' => '',
                'Training' => '',
                'Skill' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'CS.PortfolioCs',
            'Project',
            [
                'Project' => 'list, show, highlight, skills'
            ],
            // non-cacheable actions
            [
                'Project' => 'search'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    trainings {
                        iconIdentifier = portfolio_cs-plugin-trainings
                        title = LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfolio_cs_trainings.name
                        description = LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfolio_cs_trainings.description
                        tt_content_defValues {
                            CType = list
                            list_type = portfoliocs_trainings
                        }
                    }
                    profile {
                        iconIdentifier = portfolio_cs-plugin-profile
                        title = LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfolio_cs_profile.name
                        description = LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfolio_cs_profile.description
                        tt_content_defValues {
                            CType = list
                            list_type = portfoliocs_profile
                        }
                    }
                    project {
                        iconIdentifier = portfolio_cs-plugin-project
                        title = LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfolio_cs_project.name
                        description = LLL:EXT:portfolio_cs/Resources/Private/Language/locallang_db.xlf:tx_portfolio_cs_project.description
                        tt_content_defValues {
                            CType = list
                            list_type = portfoliocs_project
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'portfolio_cs-plugin-trainings',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:portfolio_cs/Resources/Public/Icons/user_plugin_trainings.svg']
			);
		
			$iconRegistry->registerIcon(
				'portfolio_cs-plugin-profile',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:portfolio_cs/Resources/Public/Icons/user_plugin_profile.svg']
			);
		
			$iconRegistry->registerIcon(
				'portfolio_cs-plugin-project',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:portfolio_cs/Resources/Public/Icons/user_plugin_project.svg']
			);
		
    }
);
