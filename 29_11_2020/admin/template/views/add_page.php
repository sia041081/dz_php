<?php
if (isset($_GET['id']) && !empty($_GET['id']) && $_GET['action'] == 'add_page') {
    $sql = "SELECT * from pages where id = " . $_GET['id'];
    $res = mysqli_query($connection, $sql);
    $page = mysqli_fetch_assoc($res);
}

$url = isset($page['id']) ? '/admin/?action=edit_page&id=' . $page['id'] : '/admin/?action=save_page';


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
                <input class="form-control" name="category" value="<?= $page['category'] ?? '' ?>">
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