<?php
namespace App\Services;
use App\Repository\Repositorie;
use App\Repository\PersonneRepository;
class SecuriteServices
{
    function login(string $login,string $password)
    {
        $pdo = Repositorie::ConnectToDatabase();
        $personneRepo = new PersonneRepository($pdo);
        $vendeur = $personneRepo->findLogin($login, $password);
        return $vendeur;
    }
}