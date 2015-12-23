<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity(repositoryClass="EntityBundle\Repository\CommentaireRepository")
 */
class Commentaire
{



    /**
     * @ORM\ManyToOne(targetEntity="Article")
     * @ORM\JoinColumn(nullable=false)
     */
    private $article;

    public function setArticle(Article $article)
    {
        $this->article = $article;

        return $this;
    }

    public function getArticle()
    {
        return $this->Article;
    }


    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var string
     *
     * @ORM\Column(name="isvalid", type="string", length=1)
     */
    private $isvalid;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=255)
     */
    private $pseudo;

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
     * Set isvalide
     *
     * @param string $isvalide
     *
     * @return Article
     */
    public function setIsvalide($isvalide)
    {
        $this->isvalid = $isvalide;

        return $this;
    }

    /**
     * Get isvalide
     *
     * @return string
     */
    public function getIsvalide()
    {
        return $this->isvalide;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return Article
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Commentaire
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }
}

