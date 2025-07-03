<?php

namespace App\Entite;
use App\Config\AbstractEntity;

class Paiement extends AbstractEntity
{
    private $id;

    private Vendeur $vendeur;
    private Facture $facture;

    public function __construct( $id, Vendeur $vendeur, Facture $facture)
    {
        $this->id = $id;
        $this->vendeur = $vendeur;
        $this->facture = $facture;
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

    public function getVendeur()
    {
        return $this->vendeur;
    }


    public function setVendeur($vendeur)
    {
        $this->vendeur = $vendeur;

        return $this;
    }


    public function getFacture()
    {
        return $this->facture;
    }


    public function setFacture($facture)
    {
        $this->facture = $facture;

        return $this;
    }

    public static function toObject(array $data)
    {
        return new self(
            $data['id'] ?? null,
            isset($data['vendeur']) && is_array($data['vendeur']) ? Vendeur::toObject($data['vendeur']) : $data['vendeur'],
            isset($data['facture']) && is_array($data['facture']) ? Facture::toObject($data['facture']) : $data['facture']
        );
    }


    function toArray():array
    {
        return [
            'id' => $this->getId(),
            'vendeur' => $this->getVendeur() ? $this->getVendeur()->toArray() : null,
            'facture' => $this->getFacture() ? $this->getFacture()->toArray() : null,
        ];
    }
}