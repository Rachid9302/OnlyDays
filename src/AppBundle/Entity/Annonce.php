<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Utilisateur;

/**
 * Annonce
 *
 * @ORM\Table(name="annonce")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnnonceRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Annonce
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="integer")
     *
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="predescription", type="string", length=255)
     */
    private $predescription;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="superficie", type="integer")
     */
    private $superficie;

    /**
     * @var int
     *
     * @ORM\Column(name="piece", type="integer")
     */
    private $piece;

    /**
     * @var int
     *
     * @ORM\Column(name="chambre", type="integer")
     */
    private $chambre;

    /**
     * @var int
     *
     * @ORM\Column(name="lit", type="integer")
     */
    private $lit;

    /**
     * @var int
     *
     * @ORM\Column(name="cuisine", type="integer")
     */
    private $cuisine;

    /**
     * @var int
     *
     * @ORM\Column(name="voyageurmax", type="integer")
     */
    private $voyageurmax;

    /**
     * @var boolean
     *
     * @ORM\Column(name="wifi", type="boolean")
     */
    private $wifi;

    /**
     * @var int
     *
     * @ORM\Column(name="prixnuit", type="integer")
     */
    private $prixnuit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDepot", type="date")
     */
    private $dateDepot;

    /**
     * @var string
     *
     * @ORM\Column(name="firstimage", type="string", length=255)
     */
    private $firstimage;

    /**
     * @var string
     *
     * @ORM\Column(name="localisation", type="string", length=255)
     */
    private $localisation;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Utilisateur", inversedBy="annonces")
     */
    private $auteur;


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Utilisateur", inversedBy="annonces_modif")
     */
    private $last_auteur;

    /**
     * @var boolean
     *
     * @ORM\Column(name="typepropiete", type="boolean")
     */
    private $typepropiete;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Annonce
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Annonce
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateDepot
     *
     * @param \DateTime $dateDepot
     *
     * @return Annonce
     */
    public function setDateDepot($dateDepot)
    {
        $this->dateDepot = $dateDepot;

        return $this;
    }

    /**
     * Get dateDepot
     *
     * @return \DateTime
     */
    public function getDateDepot()
    {
        return $this->dateDepot;
    }

    /**
     * Set auteur
     *
     * @param \AppBundle\Entity\Utilisateur $auteur
     *
     * @return Annonce
     */
    public function setAuteur(\AppBundle\Entity\Utilisateur $auteur = null)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return \AppBundle\Entity\Utilisateur
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * @ORM\PrePersist()
     */
    public function updateDateDepot()
    {
        $this->dateDepot = new \DateTime();
    }

    /**
     * Set lastAuteur
     *
     * @param \AppBundle\Entity\Utilisateur $lastAuteur
     *
     * @return Annonce
     */
    public function setLastAuteur(\AppBundle\Entity\Utilisateur $lastAuteur = null)
    {
        $this->last_auteur = $lastAuteur;

        return $this;
    }

    /**
     * Get lastAuteur
     *
     * @return \AppBundle\Entity\Utilisateur
     */
    public function getLastAuteur()
    {
        return $this->last_auteur;
    }

    /**
     * @return string
     */
    public function getFirstimage()
    {
        return $this->firstimage;
    }

    /**
     * @param string $firstimage
     */
    public function setFirstimage($firstimage)
    {
        $this->firstimage = $firstimage;
    }

    /**
     * @return string
     */
    public function getLocalisation()
    {
        return $this->localisation;
    }

    /**
     * @param string $localisation
     */
    public function setLocalisation($localisation)
    {
        $this->localisation = $localisation;
    }



    /**
     * @return int
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param int $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return int
     */
    public function getSuperficie()
    {
        return $this->superficie;
    }

    /**
     * @param int $superficie
     */
    public function setSuperficie($superficie)
    {
        $this->superficie = $superficie;
    }

    /**
     * @return int
     */
    public function getCuisine()
    {
        return $this->cuisine;
    }

    /**
     * @param int $cuisine
     */
    public function setCuisine($cuisine)
    {
        $this->cuisine = $cuisine;
    }

    /**
     * @return mixed
     */
    public function getVoyageurmax()
    {
        return $this->voyageurmax;
    }

    /**
     * @param mixed $voyageurmax
     */
    public function setVoyageurmax($voyageurmax)
    {
        $this->voyageurmax = $voyageurmax;
    }

    /**
     * @return bool
     */
    public function isWifi()
    {
        return $this->wifi;
    }

    /**
     * @param bool $wifi
     */
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;
    }



    /**
     * @return mixed
     */
    public function getChambre()
    {
        return $this->chambre;
    }

    /**
     * @param mixed $chambre
     */
    public function setChambre($chambre)
    {
        $this->chambre = $chambre;
    }

    /**
     * @return int
     */
    public function getLit()
    {
        return $this->lit;
    }

    /**
     * @param int $lit
     */
    public function setLit($lit)
    {
        $this->lit = $lit;
    }

    /**
     * @return mixed
     */
    public function getPiece()
    {
        return $this->piece;
    }

    /**
     * @param mixed $piece
     */
    public function setPiece($piece)
    {
        $this->piece = $piece;
    }

    /**
     * @return int
     */
    public function getPrixnuit()
    {
        return $this->prixnuit;
    }

    /**
     * @param int $prixnuit
     */
    public function setPrixnuit($prixnuit)
    {
        $this->prixnuit = $prixnuit;
    }

    /**
     * @return bool
     */
    public function isTypepropiete()
    {
        return $this->typepropiete;
    }

    /**
     * @param bool $typepropiete
     */
    public function setTypepropiete($typepropiete)
    {
        $this->typepropiete = $typepropiete;
    }

    /**
     * @return string
     */
    public function getPredescription()
    {
        return $this->predescription;
    }

    /**
     * @param string $predescription
     */
    public function setPredescription($predescription)
    {
        $this->predescription = $predescription;
    }

}
