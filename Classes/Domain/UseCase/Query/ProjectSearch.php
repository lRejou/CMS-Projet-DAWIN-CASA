<?php
namespace CS\PortfolioCs\Domain\UseCase\Query;

class ProjectSearch {
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

}
