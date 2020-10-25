<?php
$arr = [
    ['name' => 'The best', 'product' => 'kent'],
    ['name' => 'Worst', 'product' => 'l&m'],
    ['name' => 'The best', 'product' => 'winston'],
    ['name' => 'Worst', 'product' => 'прима'],
    ['name' => 'The best', 'product' => 'marlboro']
];
echo is_array($arr) ? 'Массив' : 'Не массив';
echo "<br>";

$no = 'это строка';

echo is_array($no) ? 'Массив' : 'Не массив';
