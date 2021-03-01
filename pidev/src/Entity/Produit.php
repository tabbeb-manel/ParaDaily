<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
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
    private $Id_produit;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom_produit;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Ref_produit;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Marque_produit;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Fournisseur;

    /**
     * @ORM\Column(type="string", length=255)
     * * @ORM\ManyToOne(targetEntity="pidev\Entity\Categorie", inversedBy="Produit")
     */
    private $Categorie;

    /**
     * @ORM\Column(type="float")
     */
    private $Prix;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Horaire_utilisation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Type_peau;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNomProduit(): ?string
    {
        return $this->Nom_produit;
    }

    public function setNomProduit(string $Nom_produit): self
    {
        $this->Nom_produit = $Nom_produit;

        return $this;
    }

    public function getRefProduit(): ?string
    {
        return $this->Ref_produit;
    }

    public function setRefProduit(string $Ref_produit): self
    {
        $this->Ref_produit = $Ref_produit;

        return $this;
    }

    public function getMarqueProduit(): ?string
    {
        return $this->Marque_produit;
    }

    public function setMarqueProduit(string $Marque_produit): self
    {
        $this->Marque_produit = $Marque_produit;

        return $this;
    }

    public function getFournisseur(): ?string
    {
        return $this->Fournisseur;
    }

    public function setFournisseur(string $Fournisseur): self
    {
        $this->Fournisseur = $Fournisseur;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->Categorie;
    }

    public function setCategorie(string $Categorie): self
    {
        $this->Categorie = $Categorie;

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

    public function getHoraireUtilisation(): ?string
    {
        return $this->Horaire_utilisation;
    }

    public function setHoraireUtilisation(string $Horaire_utilisation): self
    {
        $this->Horaire_utilisation = $Horaire_utilisation;

        return $this;
    }

    public function getTypePeau(): ?string
    {
        return $this->Type_peau;
    }

    public function setTypePeau(string $Type_peau): self
    {
        $this->Type_peau = $Type_peau;

        return $this;
    }
}
