<?php

namespace App\Controller;

use App\Config\AbstractController;

class FactureController extends AbstractController
{
        public function show(): void{
        $this->requireAuth();
        self::renderHtml('Commande/facture.php');
        }

        public function index(): void{
        $this->requireAuth();
            require_once __DIR__ . '/../../template/Commande/';
        }
        

        public function create(): void
        {

        }
        public function store(): void{}
        public function update(): void{}
        public function edit(): void{}
        public function destroy(): void{}

        public function renderHtml(string $view, $data = [])
        {
            require_once './../template/layout/base.layout.php';
            parent::renderHtml($view,$data);
        }


}