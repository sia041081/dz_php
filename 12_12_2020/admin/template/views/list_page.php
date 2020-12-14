<?php
$sql = "SELECT * from pages";
$res = mysqli_query($connection, $sql);
$pages = mysqli_fetch_all($res, MYSQLI_ASSOC);

?>

<div id="page-wrapper">
    <a href="/admin/?action=add_page" class="btn btn-sm btn-success"> Добавить статью</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Название</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($pages as $page): ?>
            <tr>
                <td>
                    <div>
                        <a href="/admin/?action=view_page&id=<?= $page['id'] ?>">
                            <?= $page['title'] ?>&nbsp &nbsp &nbsp
                    </div>
                    <div>
                        <img src="<?= $page['img'] ?>" width="10%" alt="">
                    </div>
                    </a>
                </td>
                <td>
                    <a href="/admin/?action=add_page&id=<?= $page['id'] ?>">Редактировать</a>&nbsp &nbsp
                    <a href="/admin/?action=delete_page&id=<?= $page['id'] ?>">Удалить</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>