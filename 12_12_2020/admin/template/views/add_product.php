<?php

if (isset($_GET['id']) && !empty($_GET['id']) && $_GET['action'] == 'add_product') {
    $id = $_GET['id'];
    $sql = "SELECT * FROM  goods WHERE id = ?;";
    mysqli_query($connection_shop, 'SET NAMES "utf8"');
    $stmt = mysqli_prepare($connection_shop, $sql);
    mysqli_stmt_bind_param($stmt, "d", $id);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);
    $page = mysqli_fetch_array($res, MYSQLI_ASSOC);
//    echo mysqli_error($res);
}

$sql_4 = "SELECT * FROM category";
mysqli_query($connection_shop, 'SET NAMES "utf8"');
$query = mysqli_query($connection_shop, $sql_4);
$categories = mysqli_fetch_all($query, MYSQLI_ASSOC);

$sql_2 = "SELECT * FROM brand";
mysqli_query($connection_shop, 'SET NAMES "utf8"');
$query_2 = mysqli_query($connection_shop, $sql_2);
$categories_2 = mysqli_fetch_all($query_2, MYSQLI_ASSOC);

$sql_3 = "SELECT * FROM product_type";
mysqli_query($connection_shop, 'SET NAMES "utf8"');
$query_3 = mysqli_query($connection_shop, $sql_3);
$categories_3 = mysqli_fetch_all($query_3, MYSQLI_ASSOC);


$url = isset($_GET['id']) ? '/admin/?action=edit_product&id=' . $_GET['id'] : '/admin/?action=save_product';

?>
<div style="margin: 10px;">
    <div class="row">
        <form role="form" method="post" action="<?= $url ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label>Наименование товара</label>
                <input class="form-control" name="name_product" value="<?= $page['name_product'] ?? '' ?>">
                <!--                --><?//=var_dump($page[])?>
            </div>
            <div class="form-group">
                <label>Выберите изображение</label>
                <input class="form-control" name="page_img" type="file">
            </div>
            <div class="form-group">
                <label>Цена</label>
                <input class="form-control" name="price" type="number" min="0.00" max="10000.00" step="0.01" value="<?= $page['price'] ?? '' ?>">
            </div>
            <div class="form-group">
                <label>Категория товара</label>
                <select class="form-control" name="category">
                    <?php foreach ($categories as $category) : ?>
                        <option value="<?= $category['id'] ?>"><?= $category['name_category'] ?></option>
                    <?php endforeach; ?>
                </select>

            </div>
            <div class="form-group">
                <label>Брэнд</label>
                <select class="form-control" name="brand">
                    <?php foreach ($categories_2 as $category_2) : ?>
                        <option value="<?= $category_2['id'] ?>"><?= $category_2['name_brand'] ?></option>
                    <?php endforeach; ?>
                </select>

            </div>
            <div class="form-group">
                <label>Тип товара</label>
                <select class="form-control" name="type_product">
                    <?php foreach ($categories_3 as $category_3) : ?>
                        <option value="<?= $category_3['id'] ?>"><?=$category_3['name_type'] ?></option>
                    <?php endforeach; ?>
                </select>

            </div>
            <label>Введите текст</label>
            <textarea class="form-control" cols="4444" rows="3" cols="4444" name="descript_product"
                      ><?= $page['descript_product'] ?? '' ?></textarea>
    </div>
    <br>
    <br>
    <br>
    <button type="submit" class="btn btn-default">Сохранить</button>

    </form>
</div>
</div>