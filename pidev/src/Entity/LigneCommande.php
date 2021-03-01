<?php

namespace App\Entity;

use App\Repository\LigneCommandeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LigneCommandeRepository::class)
 */
class LigneCommande
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
    private $Id_lignecommande;

    /**
     * @ORM\Column(type="integer")
     * @OneToMany(targetEntity="Categorie", mappedBy="Produit")
     */
    private $Id_produit;

    /**
     * @ORM\Column(type="integer")
     *  @OneToMany(targetEntity="LigneCommande", mappedBy="Commande")
     */
    private $Id_commande;

    /**
     * @ORM\Column(type="float")
     */
    private $Prix;

    /**
     * @ORM\Column(type="integer")
     */
    private $Quantite;

    /**
     * @ORM\Column(type="float")
     */
    private $Totale;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdLignecommande(): ?int
    {
        return $this->Id_lignecommande;
    }

    public function setIdLignecommande(int $Id_lignecommande): self
    {
        $this->Id_lignecommande = $Id_lignecommande;

        return $this;
    }

    public function getIdProduit(): ?int
    {
        return $this->Id_produit;
    }

    public function setIdProduit(int $Id_produit): self
    {
        $this->Id_produit = $Id_produit;

        return $this;
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

    public function getPrix(): ?float
    {
        return $this->Prix;
    }

    public function setPrix(float $Prix): self
    {
        $this->Prix = $Prix;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->Quantite;
    }

    public function setQuantite(int $Quantite): self
    {
        $this->Quantite = $Quantite;

        return $this;
    }

    public function getTotale(): ?float
    {
        return $this->Totale;
    }

    public function setTotale(float $Totale): self
    {
        $this->Totale = $Totale;

        return $this;
    }
}
