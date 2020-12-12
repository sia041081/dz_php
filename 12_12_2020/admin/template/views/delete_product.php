<?php
$id = $_GET['id'];
$sql = mysqli_prepare($connection_shop, 'DELETE FROM goods WHERE id = ?');
mysqli_stmt_bind_param($sql, "d", $id);
mysqli_stmt_execute($sql);

$sql = mysqli_prepare($connection_shop, 'DELETE FROM product WHERE goods_id = ?');
mysqli_stmt_bind_param($sql, "d", $id);
mysqli_stmt_execute($sql);
if ($sql) {
    echo "<h3>Запись удалена</h3>";
}
?>
    <a href="/admin/"><h2>Назад</h2></a>
    <meta http-equiv="refresh" content="1; url=http://homestead.test/admin/?action=view_products">
<?php
