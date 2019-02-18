<?php
namespace CS\PortfolioCs\Domain\UseCase\Query;

class TrainingSearch {
    /**
     * @var string
     */
    protected $titre="";
    /**
     * @var DateTime
     */
    protected $dateDebut= null;
    /**
     * @var DateTime
     */
    protected $dateFin=null;
    /**
     * @var string
     */
    protected $domaine="";
    /**
     * @var string
     */
    protected $location="";
    /**
     * @var string
     */
    protected $degres="";

    public function getTitre(): string
    {
        return $this->titre;
    }
    /**
     * @param string $titre
     */
    public function setTitre(string $titre = ""): self
    {
        $this->titre=$titre;
        return $this;
    }

    public function getDateDebut(): ?DateTime 
    {
        return $this->dateDebut;
    }
    /**
     * @param \DateTime  $dateDebut
     */
    public function setDateDebut(?\DateTime $dateDebut = null):self
    {
        $this->dateDebut=$dateDebut;
        return $this;
    }


    public function getDateFin(): ?DateTime
    {
        return $this->dateFin;
    }
        /**
     * @param \DateTime  $dateFin
     */
    public function setDateFin(?\DateTime $dateFin = null):self
    {
        $this->dateFin=$dateFin;
        return $this;
    }

    public function getDomain(): string
    {
        return $this->domaine;
    }
    /**
     * @param string $domaine
     */
    public function setDomain(string $domaine = ""): self
    {
        $this->domaine=$domaine;
        return $this;
    }

    public function getLocation(): string
    {
        return $this->location;
    }
    /**
     * @param string $location
     */
    public function setLocation(string $location = ""): self
    {
        $this->location=$location;
        return $this;
    }

    public function getDegres(): string
    {
        return $this->degres;
    }
    /**
     * @param string $degres
     */
    public function setDegres(string $degres = ""): self
    {
        $this->degres=$degres;
        return $this;
    }

}
