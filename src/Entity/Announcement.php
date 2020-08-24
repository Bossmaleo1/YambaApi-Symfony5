<?php

namespace App\Entity;

use App\Repository\AnnouncementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AnnouncementRepository::class)
 */
class Announcement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $departureTime;

    /**
     * @ORM\Column(type="datetime")
     */
    private $arrivingTime;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="float")
     */
    private $numberOfKilogramme;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $meetingPlaces1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $meetingPlace2;

    /**
     * @ORM\Column(type="datetime")
     */
    private $published;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDepartureTime(): ?\DateTimeInterface
    {
        return $this->departureTime;
    }

    public function setDepartureTime(\DateTimeInterface $departureTime): self
    {
        $this->departureTime = $departureTime;

        return $this;
    }

    public function getArrivingTime(): ?\DateTimeInterface
    {
        return $this->arrivingTime;
    }

    public function setArrivingTime(\DateTimeInterface $arrivingTime): self
    {
        $this->arrivingTime = $arrivingTime;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getNumberOfKilogramme(): ?float
    {
        return $this->numberOfKilogramme;
    }

    public function setNumberOfKilogramme(float $numberOfKilogramme): self
    {
        $this->numberOfKilogramme = $numberOfKilogramme;

        return $this;
    }

    public function getMeetingPlaces1(): ?string
    {
        return $this->meetingPlaces1;
    }

    public function setMeetingPlaces1(string $meetingPlaces1): self
    {
        $this->meetingPlaces1 = $meetingPlaces1;

        return $this;
    }

    public function getMeetingPlace2(): ?string
    {
        return $this->meetingPlace2;
    }

    public function setMeetingPlace2(string $meetingPlace2): self
    {
        $this->meetingPlace2 = $meetingPlace2;

        return $this;
    }

    public function getPublished(): ?\DateTimeInterface
    {
        return $this->published;
    }

    public function setPublished(\DateTimeInterface $published): self
    {
        $this->published = $published;

        return $this;
    }
}
