<?php

namespace App\Controller;
use App\Services\SecuriteServices;
use App\Config\AbstractController;


class ControllerSecurity extends AbstractController
{

    
    public function __construct($layout = null)
    {
            parent::__construct('./../template/layout/security/securityLayout.html.php');
    }
    public function create(): void{
        self::renderHtml('login.php');
    }

    public function index(): void{

    }


        public function store(): void
        {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $login = $_POST['login'] ?? '';
                $password = $_POST['password'] ?? '';

                $securite = new SecuriteServices();
                $vendeur = $securite->Login($login, $password);
                
                if ($vendeur) {
                    session_start();
                    $_SESSION['user'] = $vendeur['login'];
                    header('Location: /lister_commande');
                    exit;
                } else {
                    $error = "Identifiants invalides";
                    $this->renderHtml('login.php');
                }
                
            } else {
                    self::renderHtml('login.php');
            }
        }

        public function logout()
        {
            $this->deconnexion();
        }

        public function update(): void{}
        public function show(): void{}
        public function edit(): void{}
        public function destroy(): void{}

        public function renderHtml(string $view, $data = [])
        {
            
            $this->layout ;
            parent::renderHtml($view,$data);
        }
    
}