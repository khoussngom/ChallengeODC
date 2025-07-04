<?php
namespace App\Repository;

class PersonneRepository extends Repositorie
{
    public function findLogin(string $login, string $password): ?array
    {
        $cursor = $this->pdo->prepare("SELECT * FROM Personne WHERE login = :login AND password = :password AND type = 'vendeur'");
        $cursor->execute([
            'login' => $login,
            'password' => $password
        ]);
        $vendeur = $cursor->fetch(\PDO::FETCH_ASSOC);
        return $vendeur ?: null;
    }
}



