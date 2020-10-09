<?php

namespace App\Entity;

use App\Repository\CountryRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass=CountryRepository::class)
 * @ApiResource()
 */
class Country
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
    private $wording;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Town", mappedBy="country")
     */
    private $town;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lang;

    public function __construct()
    {
        $this->town = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWording(): ?string
    {
        return $this->wording;
    }

    public function setWording(string $wording): self
    {
        $this->wording = $wording;

        return $this;
    }

    /**
     * @return Collection|Town[]
     */
    public function getTown(): Collection
    {
        return $this->town;
    }

    public function addTown(Town $town): self
    {
        if (!$this->town->contains($town)) {
            $this->town[] = $town;
            $town->setCountry($this);
        }

        return $this;
    }

    public function removeTown(Town $town): self
    {
        if ($this->town->contains($town)) {
            $this->town->removeElement($town);
            // set the owning side to null (unless already changed)
            if ($town->getCountry() === $this) {
                $town->setCountry(null);
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
