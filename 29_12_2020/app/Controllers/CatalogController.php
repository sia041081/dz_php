<?php


namespace App\Controllers;


use App\core\BaseController;
use App\Helpers\Debugger;
use App\Router;

class CatalogController extends BaseController
{
    public function index()
    {
        Debugger::debug(Router::getRouteArgs());
        echo '<h1>Catalog page</h1>';

    }
    public function showCatalog()
    {
        Debugger::debug(Router::getRouteArgs());
        echo '<h1>Catalog page</h1>';

    }
}