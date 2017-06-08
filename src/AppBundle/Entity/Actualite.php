<?php
/**
 * Created by PhpStorm.
 * User: Rachid
 * Date: 03/06/2017
 * Time: 16:49
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Utilisateur;

/**
 * Actualite
 *
 * @ORM\Table(name="actualite")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ActualiteRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Actualite
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Utilisateur", inversedBy="annonces")
     */
    private $auteur;

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
     * @var \DateTime
     *
     * @ORM\Column(name="dateactualite", type="date", nullable=true)
     */
    private $dateactualite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateevenement", type="date", nullable=true)
     */
    private $dateevenement;

    /**
     * @var string
     *
     * @ORM\Column(name="firstimage", type="string", length=255)
     */
    private $firstimage;

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
     * Set titre
     *
     * @param string $titre
     *
     * @return Actualite
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
     * @return Actualite
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
     * Set auteur
     *
     * @param \AppBundle\Entity\Utilisateur $auteur
     *
     * @return Actualite
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
     * Set firstimage
     *
     * @param string $firstimage
     *
     * @return Actualite
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
     * Set dateactualite
     *
     * @param \DateTime $dateactualite
     *
     * @return Actualite
     */
    public function setDateactualite($dateactualite)
    {
        $this->dateactualite = $dateactualite;

        return $this;
    }

    /**
     * Get dateactualite
     *
     * @return \DateTime
     */
    public function getDateactualite()
    {
        return $this->dateactualite;
    }

    /**
     * Set dateevenement
     *
     * @param \DateTime $dateevenement
     *
     * @return Actualite
     */
    public function setDateevenement($dateevenement)
    {
        $this->dateevenement = $dateevenement;

        return $this;
    }

    /**
     * Get dateevenement
     *
     * @return \DateTime
     */
    public function getDateevenement()
    {
        return $this->dateevenement;
    }
}
