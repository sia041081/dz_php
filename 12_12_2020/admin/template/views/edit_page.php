<?php
var_dump($_POST);
$id = $_GET['id'];
$query = "UPDATE pages SET title = ?, content = ?, author = ?, category = ?, img = ? ";
if (!empty($_POST)) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];
    $category = $_POST['category'];

}
if ($_FILES['page_img']['size'] > 0) {
    $imgurl = '../images/' . $_FILES['page_img']['name'];
//    $query .= "img = " . "'$img_url'" . ", ";
    move_uploaded_file($_FILES['page_img']['tmp_name'], '../images/' . $_FILES['page_img']['name']);
    $query .= "WHERE id = {$_GET['id']}";

    $sql = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($sql, 'sssds', $title,$content, $author, $category, $imgurl);
    mysqli_stmt_execute($sql);
} else {
    $query = "UPDATE pages SET title = ?, content = ?, author = ?, category = ? ";
    $query .= "WHERE id = {$_GET['id']}";

    $sql = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($sql, 'sssd', $title,$content, $author, $category);
    mysqli_stmt_execute($sql);
}

?>
<h2>Запись сохранена</h2>
<!--<meta http-equiv="refresh" content="2; url=http://homestead.test/admin/?action=view_page&id=--><?//=$id?><!--">-->

