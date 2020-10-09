<?php

namespace App\Entity;

use App\Repository\TownRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TownRepository::class)
 * @ApiResource()
 */
class Town
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Country")
     * @ORM\JoinColumn(nullable=false)
     */
    private $country;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lang;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\InternationalAirport", mappedBy="town")
     */
    private $internationalAirport;

    public function __construct()
    {
        $this->internationalAirport = new ArrayCollection();
    }

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

    public function getCountry(): ?Country
    {
        return $this->country;
    }

    public function setCountry(?Country $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return Collection|InternationalAirport[]
     */
    public function getInternationalAirport(): Collection
    {
        return $this->internationalAirport;
    }

    public function addInternationalAirport(InternationalAirport $internationalAirport): self
    {
        if (!$this->internationalAirport->contains($internationalAirport)) {
            $this->internationalAirport[] = $internationalAirport;
            $internationalAirport->setTown($this);
        }

        return $this;
    }

    public function removeInternationalAirport(InternationalAirport $internationalAirport): self
    {
        if ($this->internationalAirport->contains($internationalAirport)) {
            $this->internationalAirport->removeElement($internationalAirport);
            // set the owning side to null (unless already changed)
            if ($internationalAirport->getTown() === $this) {
                $internationalAirport->setTown(null);
            }
        }

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
