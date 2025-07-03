<?php

namespace App\Services;

use App\Repository\CommandeRepository;

class CommandeService
{
    private CommandeRepository $commandeRepository;

    public function __construct(CommandeRepository $commandeRepository)
    {
        $this->commandeRepository = $commandeRepository;
    }

    public function enregistrerCommandeProduits(array $commandeData, array $produits): int
    {
        return $this->commandeRepository->enregistrerCommandeProduits($commandeData, $produits);
    }

    public function getAllCommandes(): array
    {
        return $this->commandeRepository->findAllCommandes();
    }
    public function getCommandeById(int $id): ?array
    {
        return $this->commandeRepository->findCommandeById($id);
    }

}