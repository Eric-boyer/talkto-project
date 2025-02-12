<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Table()]
#[ORM\Entity()]
#[ORM\Index(columns: ['position', 'label', 'code'], name: 'ecommerce_country')]
class Country
{
    use TraitPositionable;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * Nom du pays.
     */
    #[ORM\Column(length: 255)]
    private ?string $label = null;

    /**
     * Code du pays sur 2 caractères.
     */
    #[ORM\Column(length: 255)]
    private ?string $code = null;

    // AUTOGENERATED CODE BELLOW

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
