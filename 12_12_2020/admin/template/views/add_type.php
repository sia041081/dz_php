<?php
mysqli_query($connection_shop, 'SET NAMES "utf8"');
if (!empty($_POST)) {
    $new_category = $_POST['new_cat'];
    $new_cat_query = "INSERT INTO product_type (name_type) VALUES (?);";
    $sql_2 = mysqli_prepare($connection_shop, $new_cat_query);
    mysqli_stmt_bind_param($sql_2, "s", $new_category);
    mysqli_stmt_execute($sql_2);
//    var_dump($_POST);
}
mysqli_query($connection_shop, 'SET NAMES "utf8"');
$query = "SELECT * FROM product_type";
$res = mysqli_query($connection_shop, $query);
$category = mysqli_fetch_all($res, MYSQLI_ASSOC);
//echo $category;

?>
    <tbody>
<?php foreach ($category as $categories): ?>
    <tr>
        <td>
            <div>
                <div>Категория: <?= $categories['name_type'] ?><br>
                    <a href="/admin/?action=delete_type&id=<?= $categories['id'] ?>">
                        <button>Удалить</button>
                    </a>
                </div>
        </td>
    </tr>
<?php endforeach; ?>
    <br>
    <form action="" method="post">
        <label>Добавить тип товара</label>
        <div class="new_cat">
            <h3>Введите тип товара</h3>
            <input type="text" class="form-control" name="new_cat">
        </div>
        <div style="padding: 10px;">
            <input type="submit" value="Добавить">
        </div>
    </form>

<?php
