<?php

namespace App\Controller;

use App\Config\AbstractController;

class FactureController extends AbstractController
{
        public function show(): void{
        $this->renderHtml('Commande/facture.php');
        }

        public function index(): void{
            require_once __DIR__ . '/../../template/Commande/';
        }
        

        public function create(): void
        {

        }
        public function store(): void{}
        public function update(): void{}
        public function edit(): void{}
        public function destroy(): void{} 
}