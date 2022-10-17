<?php

namespace App\Entity;

use App\Repository\PokedexRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PokedexRepository::class)]
class Pokedex
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $number = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 21)]
    private ?string $firstType = null;

    #[ORM\Column(length: 21, nullable: true)]
    private ?string $secondType = null;

    #[ORM\Column]
    private ?int $hp = null;

    #[ORM\Column]
    private ?int $attack = null;

    #[ORM\Column]
    private ?int $defense = null;

    #[ORM\Column]
    private ?int $spAttack = null;

    #[ORM\Column]
    private ?int $spDefense = null;

    #[ORM\Column]
    private ?int $speed = null;

    #[ORM\Column(length: 21, nullable: true)]
    private ?string $img = null;

    #[ORM\Column(length: 21, nullable: true)]
    private ?string $sprites = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(int $number): self
    {
        $this->number = $number;

        return $this;
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

    public function getHp(): ?int
    {
        return $this->hp;
    }

    public function setHp(int $hp): self
    {
        $this->hp = $hp;

        return $this;
    }

    public function getAttack(): ?int
    {
        return $this->attack;
    }

    public function setAttack(int $attack): self
    {
        $this->attack = $attack;

        return $this;
    }

    public function getDefense(): ?int
    {
        return $this->defense;
    }

    public function setDefense(int $defense): self
    {
        $this->defense = $defense;

        return $this;
    }

    public function getSpAttack(): ?int
    {
        return $this->spAttack;
    }

    public function setSpAttack(int $spAttack): self
    {
        $this->spAttack = $spAttack;

        return $this;
    }

    public function getSpDefense(): ?int
    {
        return $this->spDefense;
    }

    public function setSpDefense(int $spDefense): self
    {
        $this->spDefense = $spDefense;

        return $this;
    }

    public function getSpeed(): ?int
    {
        return $this->speed;
    }

    public function setSpeed(int $speed): self
    {
        $this->speed = $speed;

        return $this;
    }

    public function getFirstType(): ?string
    {
        return $this->firstType;
    }

    public function setFirstType(string $firstType): self
    {
        $this->firstType = $firstType;

        return $this;
    }

    public function getSecondType(): ?string
    {
        return $this->secondType;
    }

    public function setSecondType(?string $secondType): self
    {
        $this->secondType = $secondType;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(?string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getSprites(): ?string
    {
        return $this->sprites;
    }

    public function setSprites(?string $sprites): self
    {
        $this->sprites = $sprites;

        return $this;
    }
}
