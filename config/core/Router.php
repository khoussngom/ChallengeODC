<?php
namespace App\Config;
class Router
{
    public static function resolve($routes)
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if (array_key_exists($uri, $routes)) {
        $controllerName = $routes[$uri]['controller'];
        $method = $routes[$uri]['method'];

        $controller = new $controllerName();
    
        $controller->$method();

        } else {
            http_response_code(404);
            echo "404 - Page non trouvée";
        }
    }
}