<?php
$arr = [
    ['name' => 'The best', 'product' => 'kent'],
    ['name' => 'Worst', 'product' => 'l&m'],
    ['name' => 'The best', 'product' => 'winston'],
    ['name' => 'Worst', 'product' => 'прима'],
    ['name' => 'The best', 'product' => 'marlboro']
];
foreach ($arr as $product) {
    if (in_array('The best', $product))
    echo  $product['product'] . ' ' . 'лучшие' . '<br>';
}