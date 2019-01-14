<?php
namespace CS\PortfolioCs\Domain\Model;

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
 * Job
 */
class Job extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * poste
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $jobName = '';

    /**
     * nom de l'entreprise
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $companyName = '';

    /**
     * Fiche poste
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $description = '';

    /**
     * Date de debut
     * 
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $dateStart = null;

    /**
     * Date de fin
     * 
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $dateEnd = null;

    /**
     * type de contrat
     * 
     * @var int
     */
    protected $contract = 0;

    /**
     * localisation
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $location = '';

    /**
     * Compétences
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CS\PortfolioCs\Domain\Model\Skill>
     * @lazy
     */
    protected $skills = null;

    /**
     * Returns the jobName
     * 
     * @return string $jobName
     */
    public function getJobName()
    {
        return $this->jobName;
    }

    /**
     * Sets the jobName
     * 
     * @param string $jobName
     * @return void
     */
    public function setJobName($jobName)
    {
        $this->jobName = $jobName;
    }

    /**
     * Returns the companyName
     * 
     * @return string $companyName
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets the companyName
     * 
     * @param string $companyName
     * @return void
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }

    /**
     * Returns the description
     * 
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the dateStart
     * 
     * @return \DateTime $dateStart
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Sets the dateStart
     * 
     * @param \DateTime $dateStart
     * @return void
     */
    public function setDateStart(\DateTime $dateStart)
    {
        $this->dateStart = $dateStart;
    }

    /**
     * Returns the dateEnd
     * 
     * @return \DateTime $dateEnd
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Sets the dateEnd
     * 
     * @param \DateTime $dateEnd
     * @return void
     */
    public function setDateEnd(\DateTime $dateEnd)
    {
        $this->dateEnd = $dateEnd;
    }

    /**
     * Returns the contract
     * 
     * @return int $contract
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets the contract
     * 
     * @param int $contract
     * @return void
     */
    public function setContract($contract)
    {
        $this->contract = $contract;
    }

    /**
     * Returns the location
     * 
     * @return string $location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets the location
     * 
     * @param string $location
     * @return void
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->skills = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Skill
     * 
     * @param \CS\PortfolioCs\Domain\Model\Skill $skill
     * @return void
     */
    public function addSkill(\CS\PortfolioCs\Domain\Model\Skill $skill)
    {
        $this->skills->attach($skill);
    }

    /**
     * Removes a Skill
     * 
     * @param \CS\PortfolioCs\Domain\Model\Skill $skillToRemove The Skill to be removed
     * @return void
     */
    public function removeSkill(\CS\PortfolioCs\Domain\Model\Skill $skillToRemove)
    {
        $this->skills->detach($skillToRemove);
    }

    /**
     * Returns the skills
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CS\PortfolioCs\Domain\Model\Skill> $skills
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Sets the skills
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CS\PortfolioCs\Domain\Model\Skill> $skills
     * @return void
     */
    public function setSkills(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $skills)
    {
        $this->skills = $skills;
    }
}
