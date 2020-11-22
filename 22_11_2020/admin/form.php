<form action="" method="post">
    <input type="text" name="title" />
    <br>
    <input type="text" name="img" />
    <form action=""
          enctype="multipart/form-data" method="post">
        <p>Загрузите файл с картинкой</p>
        <p><input type="file" name="pic"></p>
    </form>
    <br>
    <textarea name="content" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="text" name="author" />
    <br>
    <input type="text" name="category" />
    <br>
    <button type="submit">Save</button>
</form>

<?php
if (!empty($_POST)){
   $sql = "INSERT INTO `pages` (`title`, `img`, `content`, `author`, `category`)
    VALUES ('{$_POST['title']}', '{$_POST['img']}', '{$_POST['content']}', '{$_POST['author']}','{$_POST['category']}')";
   mysqli_query($connection, $sql);
}

if (isset($_POST['submit'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "uploads/" . $_FILES['img']['name']);
}
