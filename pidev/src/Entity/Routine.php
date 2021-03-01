<?php

namespace App\Entity;

use App\Repository\RoutineRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RoutineRepository::class)
 */
class Routine
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom_routine;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Notification;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_produit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomRoutine(): ?string
    {
        return $this->Nom_routine;
    }

    public function setNomRoutine(string $Nom_routine): self
    {
        $this->Nom_routine = $Nom_routine;

        return $this;
    }

    public function getNotification(): ?string
    {
        return $this->Notification;
    }

    public function setNotification(string $Notification): self
    {
        $this->Notification = $Notification;

        return $this;
    }

    public function getIdProduit(): ?int
    {
        return $this->id_produit;
    }

    public function setIdProduit(int $id_produit): self
    {
        $this->id_produit = $id_produit;

        return $this;
    }
}
