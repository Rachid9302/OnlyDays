<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Utilisateur;
use AppBundle\Entity\Commentaire;
use AppBundle\Entity\Reservation;

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
     * @var int
     *
     * @ORM\Column(name="arrondissement", type="integer")
     */
    private $arrondissement;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Commentaire", mappedBy="annonce")
     */
    private $commentaires;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Reservation", mappedBy="annonce")
     */
    private $reservations;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="codepostal", type="string", length=5)
     */
    private $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;


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
    public function isTypepropriete()
    {
        return $this->typepropriete;
    }

    /**
     * @param bool $typepropriete
     */
    public function setTypepropriete($typepropriete)
    {
        $this->typepropriete = $typepropriete;
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
     * Get typepropriete
     *
     * @return boolean
     */
    public function getTypepropriete()
    {
        return $this->typepropriete;
    }

    /**
     * Set arrondissement
     *
     * @param integer $arrondissement
     *
     * @return Annonce
     */
    public function setArrondissement($arrondissement)
    {
        $this->arrondissement = $arrondissement;

        return $this;
    }

    /**
     * Get arrondissement
     *
     * @return integer
     */
    public function getArrondissement()
    {
        return $this->arrondissement;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commentaires = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Add reservation
     *
     * @param \AppBundle\Entity\Reservation $reservation
     *
     * @return Annonce
     */
    public function addReservation(\AppBundle\Entity\Reservation $reservation)
    {
        $this->reservations[] = $reservation;

        return $this;
    }

    /**
     * Remove reservation
     *
     * @param \AppBundle\Entity\Reservation $reservation
     */
    public function removeReservation(\AppBundle\Entity\Reservation $reservation)
    {
        $this->reservations->removeElement($reservation);
    }

    /**
     * Get reservations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * Add annonceadresse
     *
     * @param \AppBundle\Entity\Annonceadresse $annonceadresse
     *
     * @return Annonce
     */
    public function addAnnonceadresse(\AppBundle\Entity\Annonceadresse $annonceadresse)
    {
        $this->annonceadresse[] = $annonceadresse;

        return $this;
    }

    /**
     * Remove annonceadresse
     *
     * @param \AppBundle\Entity\Annonceadresse $annonceadresse
     */
    public function removeAnnonceadresse(\AppBundle\Entity\Annonceadresse $annonceadresse)
    {
        $this->annonceadresse->removeElement($annonceadresse);
    }

    /**
     * Get annonceadresse
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnnonceadresse()
    {
        return $this->annonceadresse;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Annonce
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codepostal
     *
     * @param string $codepostal
     *
     * @return Annonce
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return string
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Annonce
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return Annonce
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }
}
