<div id="page-wrapper">
    <div class="row">
        <?php
        var_dump($_POST);
        mysqli_query($connection_shop, 'SET NAMES "utf8"');

        $name_product = $_POST['name_product'];
        $descript_product = $_POST['descript_product'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $brand = $_POST['brand'];
        $type_product = $_POST['type_product'];
        $imgUrl = $_FILES['page_img']['name'];
        var_dump($_POST);
        if (!empty($_POST)) {
            if ($_FILES['page_img']['size'] > 0) {
                $imgUrl = '/images/' . $_FILES['page_img']['name'];
                move_uploaded_file($_FILES['page_img']['tmp_name'],
                    '../images/' . $_FILES['page_img']['name']);
            }
        }
        $query = 'INSERT INTO goods (`name_product`, `descript_product`, `price`, `img_product`)
VALUES (?, ?, ?, ?);';
        $sql = mysqli_prepare($connection_shop, $query);
        mysqli_stmt_bind_param($sql, "ssds", $name_product, $descript_product, $price, $imgUrl);
        mysqli_stmt_execute($sql);

//        $query_id = 'SELECT id FROM goods';
//        var_dump($query_id);
//        $q_id = mysqli_query($connection_shop, $query_id);
        $goods_id = mysqli_insert_id($connection_shop);

        $query_2 = 'INSERT INTO product (`category_id`, `brand_id`, `product_type_id`, `price`, `goods_id`)
VALUES (?, ?, ?, ?, ?);';
        $sql_2 = mysqli_prepare($connection_shop, $query_2);
        mysqli_stmt_bind_param($sql_2, "ddddd", $category, $brand, $type_product, $price, $goods_id);
        mysqli_stmt_execute($sql_2);

        ?>

    </div>
</div>
<meta http-equiv="refresh" content="2; url=http://homestead.test/admin/?action=list_products">