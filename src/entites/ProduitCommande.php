<?php

namespace App\Entite;
use App\Config\AbstractEntity;


class ProduitCommande extends AbstractEntity
{
    private int $id;
    private Produit $produit;
    private Commande $commande;
    private int $qte;
    private float $montant;
    
    public function __construct(Produit $produit, Commande $commande, int $qte, float $montant)
    {
        $this->produit = $produit;
        $this->commande = $commande;
        $this->qte = $qte;$this->montant = $montant;
    }
	
	public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getqte()
    {
        return $this->qte;
    }

    public function setqte($qte)
    {
        $this->qte = $qte;

        return $this;
    }

    public function getMontant()
    {
        return $this->montant;
    }


    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }


    public function getId_produit()
    {
        return $this->produit;
    }


    public function setId_produit($produit)
    {
        $this->produit = $produit;

        return $this;
    }


    public function getId_commande()
    {
        return $this->commande;
    }


    public function setId_commande($commande)
    {
        $this->commande = $commande;

        return $this;
    }

        public static function toObject(array $data)
    {
            $produit = isset($data['produit']) && is_array($data['produit']) 
                        ? Produit::toObject($data['produit']) 
                        : $data['produit'];

            $commande = isset($data['commande']) && is_array($data['commande']) 
                        ? Commande::toObject($data['commande']) 
                        : $data['commande'];
            return new self(
                $produit,
                $commande,
                $data['qte'] ?? 0,
                $data['montant'] ?? 0.0
            );
        }

    public function toArray(): array
    {
        return [
            'produit' => $this->getId_produit() ? $this->getId_produit()->toArray() : null,

            'commande' => $this->getId_commande() ? $this->getId_commande()->toArray() : null,

            'qte' => $this->getqte(),

            'montant' => $this->getMontant()
        ];
    }



}