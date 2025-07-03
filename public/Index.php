<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Controller\CommandeController;
use App\Config\Router;

$routes = require_once '../routes/route.web.php';

Router::resolve($routes);
