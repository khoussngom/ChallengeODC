<?php

namespace App\Entite;

class Client extends Personne
{
    private string $telephone;
    private array $commande;
    


    public function __construct(int $id ,string $telephone, array $commande,string $nom)
            
    {
        parent::__construct($id,$nom,TYPE::VENDEUR);
        $this->telephone = $telephone;
        $this->commande = $commande;
        
    }
	

    public function getTelephone()
    {
        return $this->telephone;
    }



    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }


    public function getCommande()
    {
        return $this->commande;
    }


    public function addCommande($commande)
    {
        $this->commande[] = $commande;
    }




    public function toArray(): array
    {
        return array_merge (
            parent::toArray(),[
            'telephone' => $this->getTelephone(),
            'commande' => array_map(fn($cmd) => method_exists($cmd, 'toArray') ? $cmd->toArray() : $cmd, $this->getCommande())
        ]);
    }
	
    public static function toObject(array $data = []): static
    {
        $commandes = [];
        if (isset($data['commande']) && is_array($data['commande'])) {
            foreach ($data['commande'] as $cmd) {
                if (is_object($cmd)) {
                    $commandes[] = $cmd;
                } elseif (is_array($cmd) && method_exists('Commande', 'toObject')) {
                    $commandes[] = Commande::toObject($cmd);
                } else {
                    $commandes[] = $cmd;
                }
            }
        }

        return new static(
            $data['id'] ?? 0,
            $data['telephone'] ?? '',
            $commandes,
            $data['nom'] ?? ''
        );
    }
}