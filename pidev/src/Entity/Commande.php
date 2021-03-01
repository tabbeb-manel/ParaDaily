<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 */
class Commande
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
    private $Id_commande;

    /**
     * @ORM\Column(type="integer")
     * @ManyToOne(targetEntity="Commande", inversedBy="ProfilClient")
     */
    private $Id_client;

    /**
     * @ORM\Column(type="date")
     */
    private $Date_commande;

    /**
     * @ORM\Column(type="date")
     */
    private $Date_livraison;

    /**
     * @ORM\Column(type="float")
     */
    private $Montant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCommande(): ?int
    {
        return $this->Id_commande;
    }

    public function setIdCommande(int $Id_commande): self
    {
        $this->Id_commande = $Id_commande;

        return $this;
    }

    public function getIdClient(): ?int
    {
        return $this->Id_client;
    }

    public function setIdClient(int $Id_client): self
    {
        $this->Id_client = $Id_client;

        return $this;
    }

    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->Date_commande;
    }

    public function setDateCommande(\DateTimeInterface $Date_commande): self
    {
        $this->Date_commande = $Date_commande;

        return $this;
    }

    public function getDateLivraison(): ?\DateTimeInterface
    {
        return $this->Date_livraison;
    }

    public function setDateLivraison(\DateTimeInterface $Date_livraison): self
    {
        $this->Date_livraison = $Date_livraison;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->Montant;
    }

    public function setMontant(float $Montant): self
    {
        $this->Montant = $Montant;

        return $this;
    }
}
