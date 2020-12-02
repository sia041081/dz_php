<?php

if (isset($_GET['id']) && !empty($_GET['id']) && $_GET['action'] == 'add_page') {
    $id = $_GET['id'];
    $stmt = mysqli_prepare($connection, "SELECT * FROM pages WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "d", $id);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);
    $page = mysqli_fetch_all($res);
}

$sql = "SELECT * FROM category";
$query = mysqli_query($connection, $sql);
$categories = mysqli_fetch_all($query, MYSQLI_ASSOC);


$url = isset($_GET['id']) ? '/admin/?action=edit_page&id=' . $_GET['id'] : '/admin/?action=save_page';

?>
<div style="margin: 10px;">
    <div class="row">
        <form role="form" method="post" action="<?= $url ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label>Заголовок</label>
                <input class="form-control" name="title" value="<?= $page['title'] ?? '' ?>">
            </div>
            <div class="form-group">
                <label>Выберите изображение</label>
                <input class="form-control" name="page_img" type="file">
            </div>
            <div class="form-group">
                <label>Автор</label>
                <input class="form-control" name="author" value="<?= $page['author'] ?? '' ?>">
            </div>
            <div class="form-group">
                <label>Категория статьи</label>
                <select class="form-control" name="category">
                    <?php foreach ($categories as $category) : ?>
                        <option value="<?= $category['id_category'] ?>"><?= $category['category_name'] ?></option>
                    <?php endforeach; ?>
                </select>

            </div>
            <label>Введите текст</label>
            <textarea class="form-control" cols="4444" rows="3" cols="4444" name="content"
                      autofocus><?= $page['content'] ?? '' ?></textarea>
    </div>
    <br>
    <br>
    <br>
    <button type="submit" class="btn btn-default">Сохранить</button>

    </form>
</div>
</div>