<?php
$store = [
    ["name" => 'Iphone', 'description' => 'Мобильный телефон Apple Iphone 12.', 'active' => true, 'price' => 1500],
    ["name" => 'Huawei', 'description' => 'Мобильный телефон Huawei Mate 58.', 'active' => false, 'price' => 500],
    ["name" => 'Samsung', 'description' => 'Мобильный телефон Samsung Galaxy S450.', 'active' => true, 'price' => 2000],
    ["name" => 'Xiaomi', 'description' => 'Мобильный телефон Xiaomi Redmi 597.', 'active' => true, 'price' => 150],
    ["name" => 'Meizu', 'description' => 'Мобильный телефон Meizu 599.', 'active' => false, 'price' => 200]
];
foreach ($store as $item) {
    if ($item['active']) {
        $msg = 'есть в наличии. По цене' . ' ' . $item['price'] . ' ' . 'американских рублей';
    } else {
        $msg = 'товара нет на складе.';
    }
    echo 'Товар' . ' ' . $item['description'] . '' . $msg . '<br>';
    echo '<br>';
}
echo '<br>';
echo '<br>';
echo '<br>';




// Таблица умножения

$rows = 10;
$cols = 10;

$table = '<table>';
for ($tr = 1; $tr <= $rows; $tr++) {
    $table .= '<tr>';
    for ($td = 1; $td <= $cols; $td++) {
        if ($tr === 1 or $td === 1) {
            $table .= '<th style="color:#fff;background-color:#7FFF00;">' . $tr * $td . '</th>';
        } else {
            $table .= '<td>' . $tr * $td . '</td>';
        }
    }
    $table .= '</tr>';
}
$table .= '</table>';
echo $table;
