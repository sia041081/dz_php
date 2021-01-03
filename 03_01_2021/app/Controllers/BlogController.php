<?php


namespace App\Controllers;


use App\core\BaseController;
use App\Router;

class BlogController extends BaseController
{
    public function index()
    {
        $this->render('blog.category');

    }
    public function show()
    {
        $this->render('blog.category');
    }
}