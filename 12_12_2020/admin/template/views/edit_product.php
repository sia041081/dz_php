<?php
//var_dump($_POST);
$id = $_GET['id'];
mysqli_query($connection_shop, 'SET NAMES "utf8"');

$query = "UPDATE goods SET name_product = ?, descript_product = ?, price = ?, img_product = ? ";
if (!empty($_POST)) {
    $name_product = $_POST['name_product'];
    $descript_product = $_POST['descript_product'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $brand = $_POST['brand'];
    $type_product = $_POST['type_product'];
    $imgUrl = $_FILES['page_img']['name'];

}
if ($_FILES['page_img']['size'] > 0) {
    $imgurl = '../images/' . $_FILES['page_img']['name'];
//    $query .= "img = " . "'$img_url'" . ", ";
    move_uploaded_file($_FILES['page_img']['tmp_name'], '../images/' . $_FILES['page_img']['name']);
    $query .= "WHERE id = {$_GET['id']}";

    $sql = mysqli_prepare($connection_shop, $query);
    mysqli_stmt_bind_param($sql, 'ssds', $name_product, $descript_product, $price, $imgUrl);
    mysqli_stmt_execute($sql);
    $goods_id = mysqli_insert_id($connection_shop);

    $query_2 = 'UPDATE product SET category_id = ?, brand_id = ?, product_type_id = ?,  price = ?, goods_id = ?)
VALUES (?, ?, ?, ?, ?);';
    $sql_2 = mysqli_prepare($connection_shop, $query_2);
    mysqli_stmt_bind_param($sql_2, "ddddd", $category, $brand, $type_product, $price, $goods_id);
    mysqli_stmt_execute($sql_2);
} else {
    $query = "UPDATE goods SET name_product = ?, descript_product = ?, price = ? ";
    $query .= "WHERE id = {$_GET['id']}";

    $sql = mysqli_prepare($connection_shop, $query);
    mysqli_stmt_bind_param($sql, 'ssd', $name_product, $descript_product, $price);
    mysqli_stmt_execute($sql);
    $goods_id = mysqli_insert_id($connection_shop);

}



?>
<h2>Запись сохранена</h2>
<meta http-equiv="refresh" content="2; url=http://homestead.test/admin/?action=list_product&id=<?=$id?>">

