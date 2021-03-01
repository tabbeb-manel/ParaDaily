<?php

namespace App\Entity;

use App\Repository\ProfilClientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProfilClientRepository::class)
 */
class ProfilClient
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
    private $id_client;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_client;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom_client;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $age_client;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail_client;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse_client;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type_peau;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdClient(): ?int
    {
        return $this->id_client;
    }

    public function setIdClient(int $id_client): self
    {
        $this->id_client = $id_client;

        return $this;
    }

    public function getNomClient(): ?string
    {
        return $this->nom_client;
    }

    public function setNomClient(string $nom_client): self
    {
        $this->nom_client = $nom_client;

        return $this;
    }

    public function getPrenomClient(): ?string
    {
        return $this->prenom_client;
    }

    public function setPrenomClient(string $prenom_client): self
    {
        $this->prenom_client = $prenom_client;

        return $this;
    }

    public function getAgeClient(): ?string
    {
        return $this->age_client;
    }

    public function setAgeClient(string $age_client): self
    {
        $this->age_client = $age_client;

        return $this;
    }

    public function getMailClient(): ?string
    {
        return $this->mail_client;
    }

    public function setMailClient(string $mail_client): self
    {
        $this->mail_client = $mail_client;

        return $this;
    }

    public function getAdresseClient(): ?string
    {
        return $this->adresse_client;
    }

    public function setAdresseClient(string $adresse_client): self
    {
        $this->adresse_client = $adresse_client;

        return $this;
    }

    public function getTypePeau(): ?string
    {
        return $this->type_peau;
    }

    public function setTypePeau(string $type_peau): self
    {
        $this->type_peau = $type_peau;

        return $this;
    }
}
