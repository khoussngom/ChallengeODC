<?php

namespace App\Controller;

use App\Config\AbstractController;
use App\Repository\Repositorie;

use App\Repository\CommandeRepository;
// use App\Services\CommandeService;

class CommandeController extends AbstractController
{

    

    // public function __construct()
    // {
    //     $pdo = \App\Repository\Repositorie::ConnectToDatabase();
    //     $commandeRepository = new CommandeRepository($pdo);
    //     $this->commandeService = new CommandeService($commandeRepository);
    // }

    // public function enregistrerCommande(array $commandeData, array $produits): int
    // {
    //     return $this->commandeService->enregistrerCommandeProduits($commandeData, $produits);
    // }

    // public function getAllCommandes(): array
    // {
    //     return $this->commandeService->getAllCommandes();
    // }

    // public function getCommandeById(int $id): ?array
    // {
    //     return $this->commandeService->getCommandeById($id);
    // }

    
    public function create(): void{
        $this->requireAuth();
        self::renderHtml('Commande/enregistrerCommande.php',['role'=>$_SESSION['role']]);
    }

    public function index(): void
    {
        $this->requireAuth();

        $pdo =Repositorie::ConnectToDatabase();
        $commandeRepo = new CommandeRepository($pdo);
        $commandes = $commandeRepo->findAllAvecDetails();
        self::renderHtml('Commande/listerCommande.php', ['commandes' => $commandes, 'role' => $_SESSION['role']]);
    }
    
    public function validerCommande()
    {
        $this->requireAuth();
        header('Location: /generer_facture');
        exit;
    }

        public function store(): void{}
        public function update(): void{}
        public function show(): void{}
        public function edit(): void{}
        public function destroy(): void{}

        public function renderHtml(string $view, $data = [])
        {
            parent::renderHtml($view,$data);
        }
    
}