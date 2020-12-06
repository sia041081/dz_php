<?php
session_start();



$action = $_GET['action'] ?? 'list_page';

define('BASE_PATH', __DIR__);

$fullPath = BASE_PATH.'/template/views/'.$action.'.php';
require_once BASE_PATH.'/../core/db.php';





if(!isset($_SESSION['session_user']) && empty($_SESSION['session_user'])){

    require_once BASE_PATH . '/template/login.php';
}else{
    require_once BASE_PATH.'/template/admin_layout.php';
}


