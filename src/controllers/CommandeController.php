<?php

namespace App\Controller;

use App\Config\AbstractController;
// use App\Repository\CommandeRepository;
// use App\Services\CommandeService;

class CommandeController extends AbstractController
{
    // private CommandeService $commandeService;

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
        $this->renderHtml('Commande/enregistrerCommande.php');
    }

    public function index(): void
    {
        $this->requireAuth();

        $pdo = \App\Repository\Repositorie::ConnectToDatabase();
        $commandeRepo = new \App\Repository\CommandeRepository($pdo);
        $commandes = $commandeRepo->findAllAvecDetails();
        $this->renderHtml('Commande/listerCommande.php', ['commandes' => $commandes]);
    }


        public function store(): void{}
        public function update(): void{}
        public function show(): void{}
        public function edit(): void{}
        public function destroy(): void{} 
    
}