<?php


namespace App;


use App\Controllers\BaseController;
use App\Controllers\BlogController;
use App\Controllers\CatalogController;
use App\Controllers\HomeController;

class Router
{
    private static $routes = [
        '/' => HomeController::class . '@index',
        '/blog/(\w+)' => BlogController::class . '@showPage',
        '/catalog/(\w+)' => CatalogController::class . '@showCatalog',
    ];

    private static $route_args = [];

    public function getRoute()
    {
        $url = explode('?', $_SERVER['REQUEST_URI']);
        $url = $url[0];
        $controller = null;
        foreach (self::$routes as $pattern => $callback) {
            $pattern = '/^' . str_replace('/', '\/', $pattern) . '$/';
            preg_match($pattern, $url, $params);

            if ($params) {
                $routeParams = explode('@', $callback);
                $controller = new $routeParams[0];
                array_shift($params);
                $controller->{$routeParams[1]}();

//                var_dump($routeParams);
                break;
            }
        }
//        print_r($url);

    }
    public static function getRouteArgs()
    {
        return self::$routeArgs;
    }
}