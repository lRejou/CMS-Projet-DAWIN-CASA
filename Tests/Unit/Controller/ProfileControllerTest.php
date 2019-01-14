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
class ProfileControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \CS\PortfolioCs\Controller\ProfileController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\CS\PortfolioCs\Controller\ProfileController::class)
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
    public function listActionFetchesAllProfilesFromRepositoryAndAssignsThemToView()
    {

        $allProfiles = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $profileRepository = $this->getMockBuilder(\CS\PortfolioCs\Domain\Repository\ProfileRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $profileRepository->expects(self::once())->method('findAll')->will(self::returnValue($allProfiles));
        $this->inject($this->subject, 'profileRepository', $profileRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('profiles', $allProfiles);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenProfileToView()
    {
        $profile = new \CS\PortfolioCs\Domain\Model\Profile();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('profile', $profile);

        $this->subject->showAction($profile);
    }
}
