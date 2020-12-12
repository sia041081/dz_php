<?php


$sql = "SELECT * FROM product 
            LEFT JOIN brand ON product.brand_id = brand.id 
            LEFT JOIN product_type ON product.product_type_id = product_type.id
            LEFT JOIN category ON product.category_id = category.id
            LEFT JOIN goods ON product.goods_id = goods.id;";
mysqli_query($connection_shop, 'SET NAMES "utf8"');
$res = mysqli_query($connection_shop, $sql);
$pages = mysqli_fetch_all($res, MYSQLI_ASSOC);
$sql_2 = "SELECT name_product, price FROM goods";
$res_2 = mysqli_query($connection_shop, $sql_2);
$name = mysqli_fetch_all($res_2, MYSQLI_ASSOC);
//$page = $pages['product']['id'];
//var_dump($name);

?>

<div id="page-wrapper">
    <a href="/admin/?action=add_product" class="btn btn-sm btn-success"> Добавить товар</a>
    <a href="/admin/?action=add_category" class="btn btn-sm btn-success"> Добавить категорию</a>
    <a href="/admin/?action=add_type" class="btn btn-sm btn-success"> Добавить тип товара</a>
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
                    <div class="products">
                        <div class="name_product" style="width: 25%; padding-right: 10px;">
                            <label>Наименование товара</label>
                            <br>
                            <a href="/admin/?action=list_product&id=<?= $page['id']?>" style="text-decoration: none; width: 25%"">
                            <?= $page['name_product'] ?>
                            &nbsp &nbsp &nbsp
                            &nbsp &nbsp &nbsp
                            </a>
                        </div>
                        <div class="type_product" style="width: 25%">
                        <label>Тип товара</label>
                        <br>
                        <a href="" style="text-decoration: none; width: 25%"">
                            <?= $page['name_type'] ?>
                            &nbsp &nbsp &nbsp
                            &nbsp &nbsp &nbsp
                        </a>
                        </div>
                        <div class="brand" style="width: 25%">
                            <label> Бренд </label>
                            <br>
                            <a href="/admin/?action=view_page&id=<?= $page['id'] ?>" style="text-decoration: none;">
                                <?= $page['name_brand'] ?>
                                &nbsp &nbsp &nbsp
                            </a>
                        </div>
                        <div class="category" style="width: 25%">
                        <label>Категория</label>
                        <br>
                        <a href=""  style="text-decoration: none;">
                            <?= $page['name_category'] ?>
                            &nbsp &nbsp &nbsp
                        </a>
                        </div>
                        <div class="price_product" style="width: 25%">
                        <label>Цена <br><?= $page['price'] ?></label>
                        </div>
                    </div>
                </td>
                <td>
                    <a href="/admin/?action=add_product&id=<?= $page['id'] ?>">Редактировать</a>&nbsp &nbsp
                    <a href="/admin/?action=delete_product&id=<?= $page['id'] ?>">Удалить</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>