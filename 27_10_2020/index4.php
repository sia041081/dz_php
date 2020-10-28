<?php
echo '<h3>Найти два наименьших (минимальных) элемента массива</h3><br>';
$arr = [1, 2, 5, 100, 25, 33, 77];
for ($i = 0; $i < count($arr); $i++) {
    for ($s = 0; $s < count($arr); $s++) {
        if ($arr[$s] > $arr[$i]) {
            $raw = $arr[$i];
            $arr[$i] = $arr[$s];
            $arr[$s] = $raw;
        }
    }
}
for ($i = 0; $i < count($arr); $i++) ;
echo '<h3>Наименьшие значения массива равны</h3><br/>';
echo $arr[0] . '<br/n>';
echo $arr[1] . '<br/n>';
