<?php
    $id = $_GET['id'];
    $sql = mysqli_prepare($connection, 'DELETE FROM pages WHERE id = ?');
    mysqli_stmt_bind_param($sql, "s", $id);
    mysqli_stmt_execute($sql);
if ($sql) {
    echo "<h3>Запись удалена</h3>";
}
?>
<a href="/admin/"><h2>Назад</h2></a>
<meta http-equiv="refresh" content="1; url=http://homestead.test/admin/?action=list_page">
