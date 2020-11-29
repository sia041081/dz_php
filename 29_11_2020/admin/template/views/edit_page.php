<?php
$id = $_GET['id'];
$query = "UPDATE pages SET ";

if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
        $query .= "{$key} = '$value', ";
    }
    if ($_FILES['page_img']['size'] > 0) {
        $img_url = '../images/' . $_FILES['page_img']['name'];
        $query .= "img = " . "'$img_url'" .", ";
        move_uploaded_file($_FILES['page_img']['tmp_name'], '../images/' . $_FILES['page_img']['name']);
    }
    $query = substr($query,0, -2);
    $query .= " WHERE id = ".$_GET['id'];
}
$sql = mysqli_prepare($connection, $query);
mysqli_stmt_execute($sql);
?>
<h2>Запись сохранена</h2>
<meta http-equiv="refresh" content="2; url=http://homestead.test/admin/?action=view_page&id=<?=$id?>">

