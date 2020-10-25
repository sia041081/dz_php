<?php
$arr = ['утки', 'гуси', 'быки'];
$arr_farm = ['заяц', 'волк', 'медведь'];
$nature = array_merge($arr, $arr_farm);
print_r($nature);