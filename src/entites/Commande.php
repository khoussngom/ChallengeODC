<?php

namespace App\Entite;
use App\Config\AbstractEntity;

use DateTime;

class Commande extends AbstractEntity
{
    private int $id;
	
    private DateTime $date;
    private Client $client;
    private ?Facture $facture;
    private Vendeur $vendeur;
    private array $produits;



	public function __construct(int $id, DateTime $date, Client $client,Vendeur $vendeur,array $produits)
    {
        $this->id = $id;
        $this->date = $date;
        $this->client = $client;
        $this->vendeur = $vendeur;
        $this->produits = $produits;
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


        public function getDate()
        {
                return $this->date;
        }


        public function setDate($date)
        {
                $this->date = $date;

                return $this;
        }


    public function getClient()
    {
        return $this->client;
    }

    public function setClient($client)
    {
        $this->client = $client;

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


    public function getVendeur()
    {
        return $this->vendeur;
    }


    public function setVendeur($vendeur)
    {
        $this->vendeur = $vendeur;

        return $this;
    }


    public function getProduits()
    {
        return $this->produits;
    }


    public function setProduits($produits)
    {
        $this->produits = $produits;

        return $this;
    }

        public static function toObject(array $data)
    {
            $client = isset($data['client']) && is_array($data['client']) 
                            ? Client::toObject($data['client']) 
                            : $data['client'];

            $vendeur = isset($data['vendeur']) && is_array($data['vendeur']) 
                            ? Vendeur::toObject($data['vendeur'])
                            : $data['vendeur'];

            $facture = isset($data['facture']) && is_array($data['facture']) 
            ? Facture::toObject($data['facture'])
            : null;

            $produits = [];
            if (isset($data['produits']) && is_array($data['produits'])) {
                foreach ($data['produits'] as $prod) {
                    $produits[] = is_array($prod) ? ProduitCommande::toObject($prod) : $prod;
                }
            }
            $commande = new self(
                $data['id'] ?? 0,
                isset($data['date']) ? new \DateTime($data['date']) : new \DateTime(),
                $client,
                $vendeur,
                $produits
            );
            if ($facture) $commande->setFacture($facture);
            return $commande;
        }


    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'date' => $this->getDate() ? $this->getDate()->format('Y-m-d H:i:s') : null,
            'client' => $this->getClient() ? $this->getClient()->toArray() : null,
            'vendeur' => $this->getVendeur() ? $this->getVendeur()->toArray() : null,
            'facture' => $this->getFacture() ? $this->getFacture()->toArray() : null,
            'produits' => array_map(fn($prod) => method_exists($prod, 'toArray') 
                    ? $prod->toArray()
                    :$prod, $this->getProduits() ?? [])
        ];
    }
}