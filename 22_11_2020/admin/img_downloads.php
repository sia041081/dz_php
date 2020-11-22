<?php
require_once '../db.php';
$uploads_dir = '/uploads';
$name = $_FILES['img_down']['tmp_name'];
move_uploaded_file ($_FILES['img_down']['tmp_name'], "$uploads_dir/$name" );
if (!empty($_POST)) {
$sql2 = "INSERT INTO `pages` (`img_down`)
VALUES ('{$_FILES['img_down']['name']}')";
mysqli_query($connection, $sql2);
}