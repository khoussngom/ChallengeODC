<?php
use App\Controller\CommandeController;
use App\Controller\FactureController;
use App\Controller\ControllerSecurity;

return $routes = [
    '/' => [
        'controller' => CommandeController::class,
        'method' => 'index'
    ],
    '/lister_commande' => [
        'controller' => CommandeController::class,
        'method' => 'index'
    ],
    '/ajouter_commande' => [
        'controller' => CommandeController::class,
        'method' => 'create'
    ],
    '/generer_facture' => [
        'controller' => FactureController::class,
        'method' => 'show'
    ],
    '/login' => [
        'controller' => ControllerSecurity::class,
        'method' => 'store'
    ],
];