<?php

namespace App\Entity;

use App\Repository\InternationalAirportRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InternationalAirportRepository::class)
 * @ApiResource()
 */
class InternationalAirport
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $wording;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lang;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Town")
     * @ORM\JoinColumn(nullable=false)
     */
    private $town;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWording(): ?string
    {
        return $this->wording;
    }

    public function setWording(?string $wording): self
    {
        $this->wording = $wording;

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

    public function getTown(): ?Town
    {
        return $this->town;
    }

    public function setTown(?Town $town): self
    {
        $this->town = $town;

        return $this;
    }

    public function getLang(): ?string
    {
        return $this->lang;
    }

    public function setLang(string $lang): self
    {
        $this->lang = $lang;

        return $this;
    }
}
