<?php require_once __DIR__ . '/headers/' . $name . '_header.php';?>
<div class="container">
    <?php

    mysqli_query($connection_shop, 'SET NAMES "utf8"');
if (isset($_SESSION['cart'])) {
    $product_cart = $_SESSION['cart'];
    //    var_dump($product_cart);
    foreach ($product_cart as $key) {
            $query = "SELECT * FROM goods WHERE id = {$key};";
            $sql = mysqli_query($connection_shop, $query);
            $prod = mysqli_fetch_assoc($sql);
//            var_dump($prod);
            $arr = $prod['id'];
            echo "{$prod['name_product']}<br>";
            echo "<img src='{$prod['img_product']}' width='30%'> <br>";
            echo "<br>";
            echo $prod['descript_product'] . "<br>";
            echo "<h3>Цена</h3>". $prod['price'] . " $";
        }

    }else{
    echo "Корзина пуста";

}
    ?>

