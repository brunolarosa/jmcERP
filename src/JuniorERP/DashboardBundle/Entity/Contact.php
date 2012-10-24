<?php

namespace JuniorERP\DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JuniorDashboard\ClientsBundle\Entity\Contact
 *
 * @ORM\Table(name="jERP_contact")
 * @ORM\Entity(repositoryClass="JuniorERP\DashboardBundle\Repository\ContactRepository")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"client" = "Client"})
 */
class Contact {
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
	 * @var string $prenom
	 *
	 * @ORM\Column(name="prenom", type="string", length=255)
	 */
	private $prenom;
	
	/**
	 * @var string $mail
	 *
	 * @ORM\Column(name="mail", type="string", length=255)
	 */
	private $email;
	
	/**
	 *
	 * @var unknown
	 * @ORM\Column(name="telPortable", type="string", length=255, nullable=true)
	 */
	private $telPortable;
	
	/**
	 *
	 * @var unknown
	 * @ORM\Column(name="telFixe", type="string", length=255, nullable=true)
	 */
	private $telFixe;

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

    /**
     * Set prenom
     *
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telPortable
     *
     * @param string $telPortable
     */
    public function setTelPortable($telPortable)
    {
        $this->telPortable = $telPortable;
    }

    /**
     * Get telPortable
     *
     * @return string 
     */
    public function getTelPortable()
    {
        return $this->telPortable;
    }

    /**
     * Set telFixe
     *
     * @param string $telFixe
     */
    public function setTelFixe($telFixe)
    {
        $this->telFixe = $telFixe;
    }

    /**
     * Get telFixe
     *
     * @return string 
     */
    public function getTelFixe()
    {
        return $this->telFixe;
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
}