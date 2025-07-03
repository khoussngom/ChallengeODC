<?php

namespace App\Entite;

class Vendeur extends Personne
{
    private string $login;
    private string $password;
    private ?array $commande;
    private ?array $paiement;

    public function __construct(int $id ,string $login,string $password,string $nom) {
        parent::__construct($id,$nom,TYPE::VENDEUR);
        $this->login = $login;
        $this->password = $password;
        $this->commande = [];
        $this->paiement = [];

    }


    public function getLogin()
    {
        return $this->login;
    }


    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }


    public function getPassword()
    {
        return $this->password;
    }


    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }


    public function getCommande()
    {
        return $this->commande;
    }


    public function addCommande($commande)
    {
        $this->commande[] = $commande;

        return $this;
    }

    public function getPaiement()
    {
        return $this->paiement;
    }


    public function setPaiement($paiement)
    {
        $this->paiement = $paiement;

        return $this;
    }

    public static function toObject(array $data = []): static
    {
        $vendeur = new self(
            $data['id'] ?? '',
            $data['login'] ?? '',
            $data['password'] ?? '',
            $data['nom'] ?? ''
        );
        if (isset($data['id'])) $vendeur->setId($data['id']);
        if (isset($data['commande']) && is_array($data['commande'])) {
            foreach ($data['commande'] as $cmd) {
                $vendeur->addCommande($cmd);
            }
        }
        if (isset($data['paiement'])) $vendeur->setPaiement($data['paiement']);
        return $vendeur;
    }



    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            [
                'login' => $this->getLogin(),
                'password' => $this->getPassword(),
                'commande' => $this->getCommande(),
                'paiement' => $this->getPaiement()
            ]
        );
    }
}