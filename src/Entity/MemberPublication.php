<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MemberPublicationRepository")
 */
class MemberPublication
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Publication")
     */
    private $publication;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Member")
     */
    private $author;

    /**
     * @ORM\Column(type="integer")
     */
    private $authorSequence;



    public function __construct()
    {
     //   $this->author = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPublication(): ?Publication
    {
        return $this->publication;
    }

    public function setPublication(?Publication $publication): self
    {
        $this->publication = $publication;

        return $this;
    }

    public function getAuthor(): ?Member
    {
        return $this->author;
    }

    public function setAuthor(?Member $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getAuthorSequence(): ?int
    {
        return $this->authorSequence;
    }

    public function setAuthorSequence(int $authorSequence): self
    {
        $this->authorSequence = $authorSequence;

        return $this;
    }


}
