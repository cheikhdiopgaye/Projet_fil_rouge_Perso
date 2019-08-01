<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\DepotRepository")
 */
class Depot
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $MontantdeDepot;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateDeDepot;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\compteBancaire", inversedBy="depots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $numeroCompte;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontantdeDepot(): ?int
    {
        return $this->MontantdeDepot;
    }

    public function setMontantdeDepot(int $MontantdeDepot): self
    {
        $this->MontantdeDepot = $MontantdeDepot;

        return $this;
    }

    public function getDateDeDepot(): ?\DateTimeInterface
    {
        return $this->dateDeDepot;
    }

    public function setDateDeDepot(\DateTimeInterface $dateDeDepot): self
    {
        $this->dateDeDepot = $dateDeDepot;

        return $this;
    }

    public function getNumeroCompte(): ?compteBancaire
    {
        return $this->numeroCompte;
    }

    public function setNumeroCompte(?compteBancaire $numeroCompte): self
    {
        $this->numeroCompte = $numeroCompte;

        return $this;
    }
}
