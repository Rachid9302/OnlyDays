<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Utilisateur;
use AppBundle\Entity\Annonce;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReservationRepository")
 */
class Reservation
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Utilisateur", inversedBy="reservations")
     */
    private $auteur;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Annonce", inversedBy="reservations")
     */
    private $annonce;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="datetimetz")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="datetimetz")
     */
    private $dateFin;

    /**
     * @var bool
     *
     * @ORM\Column(name="accepte", type="boolean", nullable=true)
     */
    private $accepte;


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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Reservation
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Reservation
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set accepte
     *
     * @param boolean $accepte
     *
     * @return Reservation
     */
    public function setAccepte($accepte)
    {
        $this->accepte = $accepte;

        return $this;
    }

    /**
     * Get accepte
     *
     * @return boolean
     */
    public function getAccepte()
    {
        return $this->accepte;
    }

    /**
     * Set auteur
     *
     * @param \AppBundle\Entity\Utilisateur $auteur
     *
     * @return Reservation
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
     * Set annonce
     *
     * @param \AppBundle\Entity\Annonce $annonce
     *
     * @return Reservation
     */
    public function setAnnonce(\AppBundle\Entity\Annonce $annonce = null)
    {
        $this->annonce = $annonce;

        return $this;
    }

    /**
     * Get annonce
     *
     * @return \AppBundle\Entity\Annonce
     */
    public function getAnnonce()
    {
        return $this->annonce;
    }
}
