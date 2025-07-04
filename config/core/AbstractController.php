<?php

namespace App\Config;

abstract class AbstractController{

    abstract public  function index(): void;
    abstract public function create(): void;
    abstract public function store(): void;
    abstract public function update(): void;
    abstract public function show(): void;
    abstract public function edit(): void;
    abstract public function destroy();

    public function renderHtml(string $view,$data=[])
    {
        extract($data);
        ob_start();
        $contentForLayout = ob_get_clean();
        require_once './../template/layout/base.layout.php';
        require_once './../template/'.$view;
    }

    public function requireAuth(): void
    {
        session_start();
        if (empty($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
    }
}