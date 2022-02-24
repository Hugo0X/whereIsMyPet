<?php

namespace App\Entity;

use App\Repository\MovementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MovementRepository::class)
 */
class Movement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateTime;

    /**
     * @ORM\ManyToOne(targetEntity=Pet::class, inversedBy="movements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Pet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateTime(): ?\DateTimeInterface
    {
        return $this->dateTime;
    }

    public function setDateTime(\DateTimeInterface $dateTime): self
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    public function getPet(): ?Pet
    {
        return $this->Pet;
    }

    public function setPet(?Pet $Pet): self
    {
        $this->Pet = $Pet;

        return $this;
    }
}
