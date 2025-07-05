<?php

namespace App\Config;

abstract class AbstractController{

            
    protected ?string $layout;


    public function __construct( $layout = null)
    {
        $this->layout = ($layout==null) ? require_once './../template/layout/base.layout.php' : require_once     $layout;
    }

    abstract public  function index(): void;
    abstract public function create(): void;
    abstract public function store(): void;
    abstract public function update(): void;
    abstract public function show(): void;
    abstract public function edit(): void;
    abstract public function destroy();

    public function renderHtml(string $view,$data=[])
    {
        $this->layout;
        extract($data);
        ob_start();
        require_once './../template/'.$view;
        $contentForLayout = ob_get_clean();
        echo $contentForLayout;
    }

    public function requireAuth(): void
    {
        session_start();
        if (empty($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
    }

    public function deconnexion(): void
    {
        session_destroy();
        if (empty($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
    }
}