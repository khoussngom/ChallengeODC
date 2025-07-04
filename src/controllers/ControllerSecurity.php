<?php

namespace App\Controller;

use App\Config\AbstractController;
use App\Repository\Repositorie;
use App\Repository\PersonneRepository;

class ControllerSecurity extends AbstractController
{
    public function create(): void{
        $this->renderHtml('login.php');
    }

    public function index(): void{

    }


        public function store(): void
        {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $login = $_POST['login'] ?? '';
                $password = $_POST['password'] ?? '';

                $pdo = Repositorie::ConnectToDatabase();
                $personneRepo = new PersonneRepository($pdo);
                $vendeur = $personneRepo->findLogin($login, $password);

                if ($vendeur) {
                    session_start();
                    $_SESSION['user'] = $vendeur['login'];
                    header('Location: /lister_commande');
                    exit;
                } else {
                    $error = "Identifiants invalides";
                    require_once './../template/login.php';
                }
            } else {
                require_once './../template/login.php';
            }
        }
        public function update(): void{}
        public function show(): void{}
        public function edit(): void{}
        public function destroy(): void{} 
    
}