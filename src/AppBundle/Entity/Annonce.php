<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Utilisateur;
use AppBundle\Entity\Commentaire;

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
     * @var \dateTime
     *
     * @ORM\Column(name="datedepot", type="date", nullable=true)
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
     * @ORM\Column(name="typepropriete", type="boolean")
     */
    private $typepropriete;

    /**
     * @ORM\OneToMany(targetEntity="Commentaire", mappedBy="annonce")
     */
    private $commentaires;



    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commentaires = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set reference
     *
     * @param integer $reference
     *
     * @return Annonce
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return integer
     */
    public function getReference()
    {
        return $this->reference;
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
     * Set predescription
     *
     * @param string $predescription
     *
     * @return Annonce
     */
    public function setPredescription($predescription)
    {
        $this->predescription = $predescription;

        return $this;
    }

    /**
     * Get predescription
     *
     * @return string
     */
    public function getPredescription()
    {
        return $this->predescription;
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
     * Set superficie
     *
     * @param integer $superficie
     *
     * @return Annonce
     */
    public function setSuperficie($superficie)
    {
        $this->superficie = $superficie;

        return $this;
    }

    /**
     * Get superficie
     *
     * @return integer
     */
    public function getSuperficie()
    {
        return $this->superficie;
    }

    /**
     * Set piece
     *
     * @param integer $piece
     *
     * @return Annonce
     */
    public function setPiece($piece)
    {
        $this->piece = $piece;

        return $this;
    }

    /**
     * Get piece
     *
     * @return integer
     */
    public function getPiece()
    {
        return $this->piece;
    }

    /**
     * Set chambre
     *
     * @param integer $chambre
     *
     * @return Annonce
     */
    public function setChambre($chambre)
    {
        $this->chambre = $chambre;

        return $this;
    }

    /**
     * Get chambre
     *
     * @return integer
     */
    public function getChambre()
    {
        return $this->chambre;
    }

    /**
     * Set lit
     *
     * @param integer $lit
     *
     * @return Annonce
     */
    public function setLit($lit)
    {
        $this->lit = $lit;

        return $this;
    }

    /**
     * Get lit
     *
     * @return integer
     */
    public function getLit()
    {
        return $this->lit;
    }

    /**
     * Set cuisine
     *
     * @param integer $cuisine
     *
     * @return Annonce
     */
    public function setCuisine($cuisine)
    {
        $this->cuisine = $cuisine;

        return $this;
    }

    /**
     * Get cuisine
     *
     * @return integer
     */
    public function getCuisine()
    {
        return $this->cuisine;
    }

    /**
     * Set voyageurmax
     *
     * @param integer $voyageurmax
     *
     * @return Annonce
     */
    public function setVoyageurmax($voyageurmax)
    {
        $this->voyageurmax = $voyageurmax;

        return $this;
    }

    /**
     * Get voyageurmax
     *
     * @return integer
     */
    public function getVoyageurmax()
    {
        return $this->voyageurmax;
    }

    /**
     * Set wifi
     *
     * @param boolean $wifi
     *
     * @return Annonce
     */
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;

        return $this;
    }

    /**
     * Get wifi
     *
     * @return boolean
     */
    public function getWifi()
    {
        return $this->wifi;
    }

    /**
     * Set prixnuit
     *
     * @param integer $prixnuit
     *
     * @return Annonce
     */
    public function setPrixnuit($prixnuit)
    {
        $this->prixnuit = $prixnuit;

        return $this;
    }

    /**
     * Get prixnuit
     *
     * @return integer
     */
    public function getPrixnuit()
    {
        return $this->prixnuit;
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
     * Set firstimage
     *
     * @param string $firstimage
     *
     * @return Annonce
     */
    public function setFirstimage($firstimage)
    {
        $this->firstimage = $firstimage;

        return $this;
    }

    /**
     * Get firstimage
     *
     * @return string
     */
    public function getFirstimage()
    {
        return $this->firstimage;
    }

    /**
     * Set localisation
     *
     * @param string $localisation
     *
     * @return Annonce
     */
    public function setLocalisation($localisation)
    {
        $this->localisation = $localisation;

        return $this;
    }

    /**
     * Get localisation
     *
     * @return string
     */
    public function getLocalisation()
    {
        return $this->localisation;
    }

    /**
     * Set typepropriete
     *
     * @param boolean $typepropriete
     *
     * @return Annonce
     */
    public function setTypepropriete($typepropriete)
    {
        $this->typepropriete = $typepropriete;

        return $this;
    }

    /**
     * Get typepropriete
     *
     * @return boolean
     */
    public function getTypepropriete()
    {
        return $this->typepropriete;
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
     * Add commentaire
     *
     * @param \AppBundle\Entity\Commentaire $commentaire
     *
     * @return Annonce
     */
    public function addCommentaire(\AppBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaires[] = $commentaire;

        return $this;
    }

    /**
     * Remove commentaire
     *
     * @param \AppBundle\Entity\Commentaire $commentaire
     */
    public function removeCommentaire(\AppBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaires->removeElement($commentaire);
    }

    /**
     * Get commentaires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }
}
