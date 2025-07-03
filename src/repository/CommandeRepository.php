<?php
namespace App\Repository;
use PDO;

class CommandeRepository extends Repositorie
{
    public function enregistrerCommande(array $data): int
    {
        return $this->insert('Commande', $data);
    }

    public function findAllCommandes(): array
    {
        return $this->findAll('Commande');
    }

    public function findCommandeById(int $id): ?array
    {
        return $this->findById('Commande', $id);
    }

    public function enregistrerCommandeProduits(array $commandeData, array $produits): int
    {
        $commandeId = $this->enregistrerCommande($commandeData);

        foreach ($produits as $produit) {
            $data = [
                'commande_id' => $commandeId,
                'produit_id'  => $produit['produit_id'],
                'qte'         => $produit['qte'],
                'montant'     => $produit['montant']
            ];
            $this->insert('ProduitCommande', $data);
        }

        return $commandeId;
    }
}