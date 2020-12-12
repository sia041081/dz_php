<?php
var_dump($_POST);
$id = $_GET['id'];
//$name_cat = $_POST['name_category'];
$sql = mysqli_prepare($connection_shop, 'DELETE FROM product_type WHERE id = ?');
mysqli_stmt_bind_param($sql, "s", $id);
mysqli_stmt_execute($sql);
echo "<h2>Категория удалена</h2>";
?>
    <meta http-equiv="refresh" content="2; url=http://homestead.test/admin/?action=add_type">

<?php
