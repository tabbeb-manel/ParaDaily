<?php

namespace App\Entity;

use App\Repository\AdministrateurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdministrateurRepository::class)
 */
class Administrateur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_administrateur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdAdministrateur(): ?int
    {
        return $this->id_administrateur;
    }

    public function setIdAdministrateur(int $id_administrateur): self
    {
        $this->id_administrateur = $id_administrateur;

        return $this;
    }
}
