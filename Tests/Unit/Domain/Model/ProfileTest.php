<?php
namespace CS\PortfolioCs\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Julien VITTE <vitte.julien@gmail.com>
 * @author Louis Réjou <lrejou@u-bordeaux.fr>
 * @author Arthur Cargnelli <arthur.cargnelli@etu.u-bordeaux.fr>
 * @author Arthur Derichard <aderichard@u-bordeaux.fr>
 * @author Sophie Candau <scandau@u-bordeaux.fr>
 */
class ProfileTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \CS\PortfolioCs\Domain\Model\Profile
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \CS\PortfolioCs\Domain\Model\Profile();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLastnameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLastname()
        );
    }

    /**
     * @test
     */
    public function setLastnameForStringSetsLastname()
    {
        $this->subject->setLastname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'lastname',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBirthDayReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getBirthDay()
        );
    }

    /**
     * @test
     */
    public function setBirthDayForDateTimeSetsBirthDay()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setBirthDay($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'birthDay',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDrivingLicenceReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getDrivingLicence()
        );
    }

    /**
     * @test
     */
    public function setDrivingLicenceForBoolSetsDrivingLicence()
    {
        $this->subject->setDrivingLicence(true);

        self::assertAttributeEquals(
            true,
            'drivingLicence',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPhoneReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPhone()
        );
    }

    /**
     * @test
     */
    public function setPhoneForStringSetsPhone()
    {
        $this->subject->setPhone('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'phone',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMail()
        );
    }

    /**
     * @test
     */
    public function setMailForStringSetsMail()
    {
        $this->subject->setMail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'mail',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAddressReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAddress()
        );
    }

    /**
     * @test
     */
    public function setAddressForStringSetsAddress()
    {
        $this->subject->setAddress('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'address',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPhotoReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getPhoto()
        );
    }

    /**
     * @test
     */
    public function setPhotoForFileReferenceSetsPhoto()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setPhoto($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'photo',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getProjectsReturnsInitialValueForProjet()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getProjects()
        );
    }

    /**
     * @test
     */
    public function setProjectsForObjectStorageContainingProjetSetsProjects()
    {
        $project = new \CS\PortfolioCs\Domain\Model\Projet();
        $objectStorageHoldingExactlyOneProjects = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneProjects->attach($project);
        $this->subject->setProjects($objectStorageHoldingExactlyOneProjects);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneProjects,
            'projects',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addProjectToObjectStorageHoldingProjects()
    {
        $project = new \CS\PortfolioCs\Domain\Model\Projet();
        $projectsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $projectsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($project));
        $this->inject($this->subject, 'projects', $projectsObjectStorageMock);

        $this->subject->addProject($project);
    }

    /**
     * @test
     */
    public function removeProjectFromObjectStorageHoldingProjects()
    {
        $project = new \CS\PortfolioCs\Domain\Model\Projet();
        $projectsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $projectsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($project));
        $this->inject($this->subject, 'projects', $projectsObjectStorageMock);

        $this->subject->removeProject($project);
    }

    /**
     * @test
     */
    public function getJobsReturnsInitialValueForJob()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getJobs()
        );
    }

    /**
     * @test
     */
    public function setJobsForObjectStorageContainingJobSetsJobs()
    {
        $job = new \CS\PortfolioCs\Domain\Model\Job();
        $objectStorageHoldingExactlyOneJobs = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneJobs->attach($job);
        $this->subject->setJobs($objectStorageHoldingExactlyOneJobs);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneJobs,
            'jobs',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addJobToObjectStorageHoldingJobs()
    {
        $job = new \CS\PortfolioCs\Domain\Model\Job();
        $jobsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $jobsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($job));
        $this->inject($this->subject, 'jobs', $jobsObjectStorageMock);

        $this->subject->addJob($job);
    }

    /**
     * @test
     */
    public function removeJobFromObjectStorageHoldingJobs()
    {
        $job = new \CS\PortfolioCs\Domain\Model\Job();
        $jobsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $jobsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($job));
        $this->inject($this->subject, 'jobs', $jobsObjectStorageMock);

        $this->subject->removeJob($job);
    }

    /**
     * @test
     */
    public function getSocialsReturnsInitialValueForSocial()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSocials()
        );
    }

    /**
     * @test
     */
    public function setSocialsForObjectStorageContainingSocialSetsSocials()
    {
        $social = new \CS\PortfolioCs\Domain\Model\Social();
        $objectStorageHoldingExactlyOneSocials = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSocials->attach($social);
        $this->subject->setSocials($objectStorageHoldingExactlyOneSocials);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSocials,
            'socials',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSocialToObjectStorageHoldingSocials()
    {
        $social = new \CS\PortfolioCs\Domain\Model\Social();
        $socialsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $socialsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($social));
        $this->inject($this->subject, 'socials', $socialsObjectStorageMock);

        $this->subject->addSocial($social);
    }

    /**
     * @test
     */
    public function removeSocialFromObjectStorageHoldingSocials()
    {
        $social = new \CS\PortfolioCs\Domain\Model\Social();
        $socialsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $socialsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($social));
        $this->inject($this->subject, 'socials', $socialsObjectStorageMock);

        $this->subject->removeSocial($social);
    }

    /**
     * @test
     */
    public function getTrainingReturnsInitialValueForTraining()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getTraining()
        );
    }

    /**
     * @test
     */
    public function setTrainingForObjectStorageContainingTrainingSetsTraining()
    {
        $training = new \CS\PortfolioCs\Domain\Model\Training();
        $objectStorageHoldingExactlyOneTraining = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneTraining->attach($training);
        $this->subject->setTraining($objectStorageHoldingExactlyOneTraining);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneTraining,
            'training',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addTrainingToObjectStorageHoldingTraining()
    {
        $training = new \CS\PortfolioCs\Domain\Model\Training();
        $trainingObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $trainingObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($training));
        $this->inject($this->subject, 'training', $trainingObjectStorageMock);

        $this->subject->addTraining($training);
    }

    /**
     * @test
     */
    public function removeTrainingFromObjectStorageHoldingTraining()
    {
        $training = new \CS\PortfolioCs\Domain\Model\Training();
        $trainingObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $trainingObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($training));
        $this->inject($this->subject, 'training', $trainingObjectStorageMock);

        $this->subject->removeTraining($training);
    }
}
