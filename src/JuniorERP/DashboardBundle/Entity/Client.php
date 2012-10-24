<?php

namespace JuniorERP\DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JuniorDashboard\ClientsBundle\Entity\Client
 *
 * @ORM\Table(name="jERP_client")
 * @ORM\Entity(repositoryClass="JuniorERP\DashboardBundle\Repository\ClientRepository")
 */
class Client extends Contact
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
     * @var string $societe
     *
     * @ORM\Column(name="societe", type="string", length=255)
     */
    private $societe;
    
    /**
     * 
     * @var String $fonction
     * @ORM\Column(name="fonction", type="string", length=255)
     */
    private $fonction;

    /**
     * 
     * @var unknown
     * @ORM\Column(name="refClient", type="string", length=4)
     */
    private $refClient;
    
    /**
     * 
     * @ORM\OneToMany(targetEntity="JuniorERP\DashboardBundle\Entity\Etude", mappedBy="client")
     */
    private $etudes;
    
    public function __construct()
    {
        $this->etudes = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set societe
     *
     * @param string $societe
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;
    }

    /**
     * Get societe
     *
     * @return string 
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;
    }

    /**
     * Get fonction
     *
     * @return string 
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Add etudes
     *
     * @param JuniorERP\DashboardBundle\Entity\Etude $etudes
     */
    public function addEtude(\JuniorERP\DashboardBundle\Entity\Etude $etudes)
    {
        $this->etudes[] = $etudes;
    }

    /**
     * Get etudes
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getEtudes()
    {
        return $this->etudes;
    }
}