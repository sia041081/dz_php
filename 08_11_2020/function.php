<?php

function rem_spaces($str)
{  //удалить пробелы

    $str = rtrim($str);
    $skip_spaces = true;
    for ($i = 0; $i < strlen($str); $i++) {

        $char = substr($str, $i, 1);
        if ($char = ctype_space($str)) {
            break;
        } elseif ($char != " ") {

            $skip_spaces = false;
        }

        if ($char == " " && !$skip_spaces) {
            $next_char = substr($str, $i + 1, 1);

            if ($char == $next_char) {
                $str = substr_replace($str, '', $i, 1);
                $i--;
            }
        }
    }
    $str_next = $str;
    return $str_next;
}

function find_word($str) //поиск слова
{
    $str = explode(' ', $str);
    for ($y = 0; $y < count($str); $y++) {
        if (mb_strlen($str[$y]) >= 3 && mb_strlen($str[$y]) <= 5) {
            $founf_word = $str[$y] . ' ';
        } else {
            $founf_word = "<h4>Таких слов нет</h4>";
        }
    }
    return $founf_word;
}

function palindrom($str)
{
    for ($z = 0; $z < mb_strlen($str); $z++) {

        $str = str_replace(" ", "", $str);
        $str = str_replace(",", "", $str);
    }
    if ($str == strrev($str)) {
        $answer = "<h4>Строка</h4><br> $str <br> <h4>является палиндромом</h4>";
    } else {
        $answer = "<h4>Строка</h4><br> $str <br> <h4>не является палиндромом</h4>";
    }
    return $answer;
}

function long_word($str)
{
    $arr = explode(" ", $str); // Перевёл в  строку массив
    $max_word = $arr[0];
    $counter = 1;
    for ($r = 1; $r < count($arr); $r++) {
        if (mb_strlen($arr[$r]) > mb_strlen($max_word)) {
            $max_word = $arr[$r];
            $counter = 1;
        } elseif (mb_strlen($arr[$r]) == mb_strlen($max_word)) {
            $counter = $counter + 1;

        }
    }

    if ($counter == 1) {
        $long_word = $max_word;
    } else {
        $long_word = $str . ' ' . ' Содержит несколько слов одинаковой длины.';
    }
    return $long_word;
}

function upper_char($str)
{
    $arr = mb_str_split($str);
    $min = 0;
    $max = 0;
    for ($t = 0; $t < count($arr); $t++) {
        if ($arr[$t] >= "а" && $arr[$t] <= "я") {
            $min++;
        } elseif ($arr[$t] >= "А" && $arr[$t] <= "Я") {
            $max++;
        }
        if ($arr[$t] >= "a" && $arr[$t] <= "z") {
            $min++;
        } elseif ($arr[$t] >= "A" && $arr[$t] <= "Z") {
            $max++;
        }
    }
    echo $min . ' ' . 'символов в нижнем регистре' . '<br>';
    echo $max . ' ' . 'символов в верхнем регистре' . '<br>';

}