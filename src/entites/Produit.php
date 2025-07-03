<?php 
namespace App\Entite;
use App\Config\AbstractEntity;

class Produit extends AbstractEntity
{
    private int $id;
    private string $libelle;
    private float $prix;
    private int $qteStock;
    private array $commande;
    public function __construct(int $id,string $libelle, float $prix, int $qteStock,array $commande)
    {
        $this->id = $id;
        $this->prix = $prix;
        $this->qteStock = $qteStock;
        $this->commande = $commande;
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


    public function getLibelle()
    {
        return $this->libelle;
    }


    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getPrix()
    {
        return $this->prix;
    }


    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }
    public function getQteStock()
    {
        return $this->qteStock;
    }

    
    public function setQteStock($qteStock)
    {
        $this->qteStock = $qteStock;

        return $this;
    }


    public function getCommande()
    {
        return $this->commande;
    }


    public function setCommande($commande)
    {
        $this->commande = $commande;

        return $this;
    }

        public static function toObject(array $data)
    {
            $commande = [];
            if (isset($data['commande']) && is_array($data['commande'])) {
                foreach ($data['commande'] as $cmd) {
                    $commande[] = is_array($cmd) ? Commande::toObject($cmd) : $cmd;
                }
            }

            $produit = new self(
                $data['id'] ?? 0,
                $data['libelle'],
                $data['prix'] ?? 0.0,
                $data['qteStock'] ?? 0,
                $commande
            );
            return $produit;
        }


    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'prix' => $this->getPrix(),
            'qteStock' => $this->getQteStock(),
            'commande' => array_map(fn($cmd) => method_exists($cmd, 'toArray') ? $cmd->toArray() : $cmd, $this->getCommande())
        ];
    }


}