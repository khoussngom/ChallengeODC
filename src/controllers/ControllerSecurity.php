<?php

namespace App\Controller;
use App\Services\SecuriteServices;
use App\Config\AbstractController;
use App\Utils\Validator;


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
                $validator = new Validator();

                $validator->validateRequired('login', $login, 'Le login est requis.');
                $validator->validateEmail('login', $login, 'Le login doit être un email valide.');
                $validator->validateRequired('password', $password, 'Le mot de passe est requis.');

                if (!$validator->isValid()) {
                    $errors = $validator->getErrors();
                    $this->renderHtml('login.php', ['errors' => $errors, 'login' => $login]);
                    return;
                }

                $securite = new SecuriteServices();
                $vendeur = $securite->login($login, $password);

                if ($vendeur) {
                    session_start();
                    $_SESSION['user'] = $vendeur['login'];
                    header('Location: /lister_commande');
                    exit;
                } else {
                    $errors = ['login' => ['Identifiants invalides']];
                    $this->renderHtml('login.php', ['errors' => $errors, 'login' => $login]);
                }
            } else {
                $this->renderHtml('login.php');
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