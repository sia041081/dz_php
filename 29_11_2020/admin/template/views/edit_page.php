<?php
$id = $_GET['id'];
//var_dump($_POST);
//var_dump($_FILES);
$query = "UPDATE pages SET ";

if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
        $query .= "{$key} = '$value', ";
    }
    if ($_FILES['page_img']['size'] > 0) {
        $img_url = '../images/' . $_FILES['page_img']['name'];
        var_dump($img_url);
        $query .= "img = " . "'$img_url'" .", ";
        move_uploaded_file($_FILES['page_img']['tmp_name'], '../images/' . $_FILES['page_img']['name']);
        var_dump($query);
    }
    $query = substr($query,0, -2);
    $query .= " WHERE id = ".$_GET['id'];
}
$sql = mysqli_prepare($connection, $query);
//mysqli_stmt_bind_param($sql, "s", $id);
mysqli_stmt_execute($sql);

//mysqli_query($connection, $sql);
//var_dump($connection);
//var_dump($sql);
?>
<h2>Запись сохранена</h2>
<meta http-equiv="refresh" content="2; url=http://homestead.test/admin/?action=view_page&id=<?=$id?>">

