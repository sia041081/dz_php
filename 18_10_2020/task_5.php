<?php
$store = [
        'laptops' =>
            ['name'=>'Ноутбук Macbook Air','categories' =>'Ноутбуки', 'prices'=> 500, 'on_stock'=> true],
            ['name'=>'Ноутбук Lenovo','categories' =>'Ноутбуки', 'prices'=> 500, 'on_stock'=> false],
            ['name'=>'Ноутбук Hewlett Packard','categories' =>'Ноутбуки', 'prices'=> 500, 'on_stock'=> true],

        'mobile' =>
            ['name'=> 'Мобильный телефон Apple IPHONE 12','categories' =>'Мобильные телефоны', 'prices'=> 500, 'on_stock'=> true],
            ['name'=> 'Мобильный телефон Xiaomi Redmi 56', 'categories' =>'Мобильные телефоны', 'prices'=> 500, 'on_stock'=> true],
            ['name'=>'Мобильный телефон Huawei mate 20', 'categories' =>'Мобильные телефоны', 'prices'=> 500, 'on_stock'=> false],

        'tv' =>
            ['name'=> 'ЖК телевизор Samsung 55 дюймов', 'categories' =>'Телевизоры', 'prices'=> 500, 'on_stock'=> true],
            ['name'=> 'OLED телевизор LG 65 дюймов', 'categories' =>'Телевизоры', 'prices'=> 500, 'on_stock'=> false ],
            ['name'=> 'LED телевизор Xiaomi 52 дюйма', 'categories' =>'Телевизоры', 'prices'=> 500, 'on_stock'=> true]

];
foreach ($store as $item) {
    if ($item['on_stock']) {
        $msg = 'есть в наличии. По цене' . ' ' . $item['prices'] . ' ' . 'американских рублей';
    } else {
        $msg = 'товара нет на складе.';
    }
    echo '<h2>'. $item['categories'].'</h2>';
    echo 'Товар' . ' ' . $item['name'] . '  ' . $msg . '<br>';

}