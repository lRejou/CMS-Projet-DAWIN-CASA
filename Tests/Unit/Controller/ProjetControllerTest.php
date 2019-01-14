<?php
namespace CS\PortfolioCs\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Julien VITTE <vitte.julien@gmail.com>
 * @author Louis Réjou <lrejou@u-bordeaux.fr>
 * @author Arthur Cargnelli <arthur.cargnelli@etu.u-bordeaux.fr>
 * @author Arthur Derichard <aderichard@u-bordeaux.fr>
 * @author Sophie Candau <scandau@u-bordeaux.fr>
 */
class ProjetControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \CS\PortfolioCs\Controller\ProjetController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\CS\PortfolioCs\Controller\ProjetController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllProjetsFromRepositoryAndAssignsThemToView()
    {

        $allProjets = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $projetRepository = $this->getMockBuilder(\CS\PortfolioCs\Domain\Repository\ProjetRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $projetRepository->expects(self::once())->method('findAll')->will(self::returnValue($allProjets));
        $this->inject($this->subject, 'projetRepository', $projetRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('projets', $allProjets);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenProjetToView()
    {
        $projet = new \CS\PortfolioCs\Domain\Model\Projet();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('projet', $projet);

        $this->subject->showAction($projet);
    }
}
