<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Utilisateur;
use AppBundle\Entity\Actualite;

/**
 * CommentaireNews
 *
 * @ORM\Table(name="commentaire_news")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommentaireNewsRepository")
 */
class CommentaireNews
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Utilisateur", inversedBy="commentaires_news")
     */
    private $auteur;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Actualite", inversedBy="commentaires_news")
     */
    private $actualite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecreation", type="datetimetz")
     */
    private $datecreation;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_commentaire", type="string", length=255)
     */
    private $texteCommentaire;

    /**
     * @var int
     *
     * @ORM\Column(name="note", type="integer")
     */
    private $note;


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
     * Set datecreation
     *
     * @param \DateTime $datecreation
     *
     * @return CommentaireNews
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set texteCommentaire
     *
     * @param string $texteCommentaire
     *
     * @return CommentaireNews
     */
    public function setTexteCommentaire($texteCommentaire)
    {
        $this->texteCommentaire = $texteCommentaire;

        return $this;
    }

    /**
     * Get texteCommentaire
     *
     * @return string
     */
    public function getTexteCommentaire()
    {
        return $this->texteCommentaire;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return CommentaireNews
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return int
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set auteur
     *
     * @param \AppBundle\Entity\Utilisateur $auteur
     *
     * @return CommentaireNews
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
     * Set actualite
     *
     * @param \AppBundle\Entity\Actualite $actualite
     *
     * @return CommentaireNews
     */
    public function setActualite(\AppBundle\Entity\Actualite $actualite = null)
    {
        $this->actualite = $actualite;

        return $this;
    }

    /**
     * Get actualite
     *
     * @return \AppBundle\Entity\Actualite
     */
    public function getActualite()
    {
        return $this->actualite;
    }
}
