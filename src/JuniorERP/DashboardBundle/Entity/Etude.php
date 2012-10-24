<?php

namespace JuniorERP\DashboardBundle\Entity;

use JuniorERP\UserBundle\Entity\User;

use Doctrine\ORM\Mapping as ORM;

/**
 * JuniorDashboard\EtudesBundle\Entity\Etude
 *
 * @ORM\Table(name="jERP_etude")
 * @ORM\Entity(repositoryClass="JuniorERP\DashboardBundle\Repository\EtudeRepository")
 */
class Etude
{
	/**
	 * @var integer $id
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * 
	 * @var string $refEtude
	 * 
	 * @ORM\Column(name="refEtude", type="string", length=255)
	 */
	private $refEtude;
	
	/**
	 * 
	 * @var string $intitule
	 * @ORM\Column(name="intitule", type="string", length=255)
	 */
	private $intitule;
	
	/**
	 * 
	 * @var string $objectif
	 * @ORM\Column(name="objectif", type="string", length=255)
	 */
	private $objectif;
	
	/**
	 * 
	 * @var string $resumeRapide
	 * @ORM\Column(name="resumeRapide", type="string", length=255, nullable=true)
	 */
	private $resumeRapide;
	
	/**
	 * @ORM\ManyToOne(targetEntity="JuniorERP\DashboardBundle\Entity\Provenance")
     * @ORM\JoinColumn(nullable=false) 
	 */
	private $provenance;
	
	/**
	 * @ORM\ManyToOne(targetEntity="JuniorERP\DashboardBundle\Entity\Client", inversedBy="etudes")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $client;
	
	
	/**
	 * 
	 * @var Domain $domain
	 * @ORM\ManyToOne(targetEntity="JuniorERP\DashboardBundle\Entity\Domaine")
     * @ORM\JoinColumn(nullable=false)
	 */
	private $domaine;
	
	/**
	 * 
	 * @var User $chefProjet
	 *@ORM\ManyToOne(targetEntity="JuniorERP\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
	 * 
	 */
	private $chefProjet;
	
	/**
	 * 
	 * @var User $suiveurQualite
	 * @ORM\ManyToOne(targetEntity="JuniorERP\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     * 
	 */
	private $suiveurQualite;
	
	/**
	 * 
	 * @var Integer duree
	 * @ORM\Column(type="integer") 
	 */
	private $duree;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set refEtude
     *
     * @param string $refEtude
     */
    public function setRefEtude($refEtude)
    {
        $this->refEtude = $refEtude;
    }

    /**
     * Get refEtude
     *
     * @return string 
     */
    public function getRefEtude()
    {
        return $this->refEtude;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;
    }

    /**
     * Get intitule
     *
     * @return string 
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set objectif
     *
     * @param string $objectif
     */
    public function setObjectif($objectif)
    {
        $this->objectif = $objectif;
    }

    /**
     * Get objectif
     *
     * @return string 
     */
    public function getObjectif()
    {
        return $this->objectif;
    }

    /**
     * Set resumeRapide
     *
     * @param string $resumeRapide
     */
    public function setResumeRapide($resumeRapide)
    {
        $this->resumeRapide = $resumeRapide;
    }

    /**
     * Get resumeRapide
     *
     * @return string 
     */
    public function getResumeRapide()
    {
        return $this->resumeRapide;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;
    }

    /**
     * Get duree
     *
     * @return integer 
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set provenance
     *
     * @param JuniorERP\DashboardBundle\Entity\Provenance $provenance
     */
    public function setProvenance(\JuniorERP\DashboardBundle\Entity\Provenance $provenance)
    {
        $this->provenance = $provenance;
    }

    /**
     * Get provenance
     *
     * @return JuniorERP\DashboardBundle\Entity\Provenance 
     */
    public function getProvenance()
    {
        return $this->provenance;
    }

    /**
     * Set client
     *
     * @param JuniorERP\DashboardBundle\Entity\Client $client
     */
    public function setClient(\JuniorERP\DashboardBundle\Entity\Client $client)
    {
        $this->client = $client;
    }

    /**
     * Get client
     *
     * @return JuniorERP\DashboardBundle\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set domaine
     *
     * @param JuniorERP\DashboardBundle\Entity\Domaine $domaine
     */
    public function setDomaine(\JuniorERP\DashboardBundle\Entity\Domaine $domaine)
    {
        $this->domaine = $domaine;
    }

    /**
     * Get domaine
     *
     * @return JuniorERP\DashboardBundle\Entity\Domaine 
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Set chefProjet
     *
     * @param JuniorERP\UserBundle\Entity\User $chefProjet
     */
    public function setChefProjet(\JuniorERP\UserBundle\Entity\User $chefProjet)
    {
        $this->chefProjet = $chefProjet;
    }

    /**
     * Get chefProjet
     *
     * @return JuniorERP\UserBundle\Entity\User 
     */
    public function getChefProjet()
    {
        return $this->chefProjet;
    }

    /**
     * Set suiveurQualite
     *
     * @param JuniorERP\UserBundle\Entity\User $suiveurQualite
     */
    public function setSuiveurQualite(\JuniorERP\UserBundle\Entity\User $suiveurQualite)
    {
        $this->suiveurQualite = $suiveurQualite;
    }

    /**
     * Get suiveurQualite
     *
     * @return JuniorERP\UserBundle\Entity\User 
     */
    public function getSuiveurQualite()
    {
        return $this->suiveurQualite;
    }
}