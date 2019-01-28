<?php
namespace CS\PortfolioCs\Controller;

/***
 *
 * This file is part of the "PortfolioCasa" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Julien VITTE <vitte.julien@gmail.com>
 *           Louis Réjou <lrejou@u-bordeaux.fr>
 *           Arthur Cargnelli <arthur.cargnelli@etu.u-bordeaux.fr>
 *           Arthur Derichard <aderichard@u-bordeaux.fr>
 *           Sophie Candau <scandau@u-bordeaux.fr>
 *
 ***/

/**
 * TrainingController
 */
class TrainingController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

     /**
     * trainingRepository
     * 
     * @var \CS\PortfolioCs\Domain\Repository\TrainingRepository
     * @inject
     */
    protected $trainingRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $trainings = $this->trainingRepository->findAll();
        $this->view->assign('trainings', $trainings);
    }

    /**
     * action new
     * 
     * @param \CS\PortfolioCs\Domain\Model\Training $training
     * @return void
     */
    public function newAction(\CS\PortfolioCs\Domain\Model\Training $training)
    {
        $this->view->assign('training', $training);
    }

    /**
     * action show
     * 
     * @param \CS\PortfolioCs\Domain\Model\Training $training
     * @return void
     */
    public function showAction(\CS\PortfolioCs\Domain\Model\Training $training)
    {
        $this->view->assign('training', $training);
    }

    /**
     * action search
     * 
     * @return void
     */
    public function searchAction()
    {

    }
}
