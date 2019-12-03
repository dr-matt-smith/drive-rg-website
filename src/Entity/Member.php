<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MemberRepository")
 */
class Member
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $qualifications;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $position;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $website;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bio;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $bioImage;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MemberStatus", inversedBy="members")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Member", inversedBy="students")
     */
    private $supervisor;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Member", mappedBy="supervisor")
     */
    private $students;

    public function __construct()
    {
        $this->pubs = new ArrayCollection();
        $this->students = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getQualifications(): ?string
    {
        return $this->qualifications;
    }

    public function setQualifications(string $qualifications): self
    {
        $this->qualifications = $qualifications;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(string $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(string $website): self
    {
        $this->website = $website;

        return $this;
    }

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function setBio(string $bio): self
    {
        $this->bio = $bio;

        return $this;
    }

    public function getBioImage(): ?string
    {
        return $this->bioImage;
    }

    public function setBioImage(string $bioImage): self
    {
        $this->bioImage = $bioImage;

        return $this;
    }



    public function getStatus(): ?MemberStatus
    {
        return $this->status;
    }

    public function setStatus(?MemberStatus $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getSupervisor(): ?self
    {
        return $this->supervisor;
    }

    public function setSupervisor(?self $supervisor): self
    {
        $this->supervisor = $supervisor;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getStudents(): Collection
    {
        return $this->students;
    }

    public function addStudent(self $student): self
    {
        if (!$this->students->contains($student)) {
            $this->students[] = $student;
            $student->setSupervisor($this);
        }

        return $this;
    }

    public function removeStudent(self $student): self
    {
        if ($this->students->contains($student)) {
            $this->students->removeElement($student);
            // set the owning side to null (unless already changed)
            if ($student->getSupervisor() === $this) {
                $student->setSupervisor(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }
}
