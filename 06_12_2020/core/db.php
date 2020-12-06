<?php
$connection = mysqli_connect('localhost', 'homestead', 'secret', 'test_blog');

if (!$connection) {
    var_dump(mysqli_connect_error());
    die();
}

$connection_shop = mysqli_connect('localhost', 'homestead', 'secret', 'shop');

if (!$connection) {
    var_dump(mysqli_connect_error());
    die();
}

mysqli_set_charset($connection, "utf8");


mysqli_set_charset($connection, "utf8");
