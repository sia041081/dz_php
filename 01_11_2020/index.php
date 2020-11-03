<?php
echo '<h3>Задача 1</h3>';
echo '<br>';
/*1. В строке текста записаны слова, разделенные пробелами
 в произвольном количестве. Сжатие текста состоит в том, что между
 словами оставляется по одному пробелу, а после последнего слова пробелы
 удаляются (пробелы перед первым словом сохраняются).
 Сжатый текст записать в другую переменную. Если строка содержит только пробелы,
 то все они сохраняются. */

$str = "        Пример строки,
охватывающей несколько строк,
с использованием    heredoc-синтаксиса.        ";
function rem_spaces($str)
{
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

echo rem_spaces($str);
/*2. В произвольном тексте найти и вывести на экран все слова
длина которых не менее трёх символов и не более пяти.
*/
echo "<h3>Задача 2</h3>";
echo '<br>';
$str = "Объекты, как и массивы, являются итерируемыми сущностями.
 Обход объектов идет по их видимым в данном контексте свойствам, причем ключами
  служат имена свойств.";
function find_word($str)
{
    $str = explode(' ', $str);
    for ($y = 0; $y < count($str); $y++) {
        if (mb_strlen($str[$y]) >= 3 && mb_strlen($str[$y]) <= 5) {
            echo $str[$y] . ' ';
        }
    }
}

echo find_word($str);
echo '<br>';
echo '<br>';
echo '<br>';
/*3. Вводится строка. Удалить из нее все пробелы.
После этого определить, является ли она палиндромом (перевертышем),
 т.е. одинаково пишется как с начала, так и с конца.*/
echo "<h3>Задача 3</h3>";
echo '<br>';
$str = "Объекты, как и массивы, являются итерируемыми сущностями.";
<<<<<<< HEAD
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

echo palindrom($str);

=======
for ($z = 0; $z < mb_strlen($str); $z++) {

    $str = str_replace(" ", "", $str);
    $str = str_replace(",", "", $str);
}
if ($str == strrev($str)) {
    $answer = "<h4>Строка</h4><br> $str <br> <h4>является палиндромом</h4>";
} else {
    $answer = "<h4>Строка</h4><br> $str <br> <h4>не является палиндромом</h4>";
}

echo $answer;
>>>>>>> 6454a9d01840c052b608acd58be8c71cfcae6cb1
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
/*4.Найти самое длинное слово и вывести его на экран.
Случай, когда самых длинных слов может быть несколько, не обрабатывать.*/
echo '<h3>Задача 4</h3>';
echo '<br>';
<<<<<<< HEAD
$str = "Однако такая  итерация по видимым свойствам зачастую бывает совершенно бесполезной";
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
=======
$str_task4 = "Однако такая  итерация по видимым свойствам зачастую бывает  совершенно бесполезной";
$arr_task4 = explode(" ", $str_task4); // Перевёл в  строку массив
$max_word = $arr_task4[0];
$counter = 1;
for ($r = 1; $r < count($arr_task4); $r++) {
    if (mb_strlen($arr_task4[$r]) > mb_strlen($max_word)) {
        $max_word = $arr_task4[$r];
        $counter = 1;
    } elseif (mb_strlen($arr_task4[$r]) == mb_strlen($max_word)) {
        $counter = $counter + 1;
>>>>>>> 6454a9d01840c052b608acd58be8c71cfcae6cb1

        }
    }

    if ($counter == 1) {
        echo $max_word;
    } else {
        echo $str . ' ' . ' Содержит несколько слов одинаковой длины.';
    }
}
echo long_word($str);
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


//5. Посчитать количество строчных и прописных букв в строке
echo '<h3>Задача 5</h3>';
echo '<br>';
$str = "Другая формулировка задачи: среди элементов массива с четными индексами,
               найти тот, который имеет максимальное значение.";
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
    }
    echo $min . ' ' . 'символов в нижнем регистре' . '<br>';
    echo $max . ' ' . 'символов в верхнем регистре' . '<br>';
}
<<<<<<< HEAD
echo upper_char($str);
=======
echo $min . ' ' . 'символов в нижнем регистре' . '<br>';
echo $max . ' ' . 'символов в верхнем регистре' . '<br>';
>>>>>>> 6454a9d01840c052b608acd58be8c71cfcae6cb1
