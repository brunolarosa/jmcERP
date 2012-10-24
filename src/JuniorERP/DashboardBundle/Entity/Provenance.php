<?php

namespace JuniorERP\DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JuniorDashboard\EtudesBundle\Entity\Provenance
 *
 * @ORM\Table(name="jERP_provenance")
 * @ORM\Entity(repositoryClass="JuniorERP\DashboardBundle\Repository\ProvenanceRepository")
 */
class Provenance
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
     * @var string $nom
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;


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
     * Set nom
     *
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }
}