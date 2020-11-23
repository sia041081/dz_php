<?php

$uri = $_SERVER['REQUEST_URI'];
//var_dump($uri);
if ($uri === '/') {
    require 'template/layout.php';
} elseif ($uri === '/admin') {
    require 'admin/index.php';
}
require_once './db.php';
require_once './template/layout.php';





