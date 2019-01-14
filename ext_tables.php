<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'CS.PortfolioCs',
            'Trainings',
            'catalogue de formation'
        );

        $pluginSignature = str_replace('_', '', 'portfolio_cs') . '_trainings';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:portfolio_cs/Configuration/FlexForms/flexform_trainings.xml');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'CS.PortfolioCs',
            'Profile',
            'CVteque'
        );

        $pluginSignature = str_replace('_', '', 'portfolio_cs') . '_profile';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:portfolio_cs/Configuration/FlexForms/flexform_profile.xml');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'CS.PortfolioCs',
            'Project',
            'Projets'
        );

        $pluginSignature = str_replace('_', '', 'portfolio_cs') . '_project';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:portfolio_cs/Configuration/FlexForms/flexform_project.xml');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('portfolio_cs', 'Configuration/TypoScript', 'PortfolioCasa');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfoliocs_domain_model_projet', 'EXT:portfolio_cs/Resources/Private/Language/locallang_csh_tx_portfoliocs_domain_model_projet.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfoliocs_domain_model_projet');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfoliocs_domain_model_profile', 'EXT:portfolio_cs/Resources/Private/Language/locallang_csh_tx_portfoliocs_domain_model_profile.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfoliocs_domain_model_profile');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfoliocs_domain_model_training', 'EXT:portfolio_cs/Resources/Private/Language/locallang_csh_tx_portfoliocs_domain_model_training.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfoliocs_domain_model_training');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfoliocs_domain_model_job', 'EXT:portfolio_cs/Resources/Private/Language/locallang_csh_tx_portfoliocs_domain_model_job.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfoliocs_domain_model_job');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfoliocs_domain_model_skill', 'EXT:portfolio_cs/Resources/Private/Language/locallang_csh_tx_portfoliocs_domain_model_skill.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfoliocs_domain_model_skill');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfoliocs_domain_model_category', 'EXT:portfolio_cs/Resources/Private/Language/locallang_csh_tx_portfoliocs_domain_model_category.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfoliocs_domain_model_category');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfoliocs_domain_model_social', 'EXT:portfolio_cs/Resources/Private/Language/locallang_csh_tx_portfoliocs_domain_model_social.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfoliocs_domain_model_social');

    }
);
