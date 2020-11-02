<?php
/*1. В строке текста записаны слова, разделенные пробелами
 в произвольном количестве. Сжатие текста состоит в том, что между
 словами оставляется по одному пробелу, а после последнего слова пробелы
 удаляются (пробелы перед первым словом сохраняются).
 Сжатый текст записать в другую переменную. Если строка содержит только пробелы,
 то все они сохраняются. */
echo "<h3>Задача 1</h3>";
echo '<br>';
$str = "        Пример строки,
охватывающей несколько строк,
с использованием    heredoc-синтаксиса.        ";
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
echo $str_next;
echo "<br/>";
echo "<br/>";

/*2. В произвольном тексте найти и вывести на экран все слова
длина которых не менее трёх символов и не более пяти.
*/
echo "<h3>Задача 2</h3>";
echo '<br>';
$str_task2 = "Объекты, как и массивы, являются итерируемыми сущностями.
 Обход объектов идет по их видимым в данном контексте свойствам, причем ключами
  служат имена свойств.";
$str_arr2 = explode(' ', $str_task2);
for ($y = 0; $y < count($str_arr2); $y++) {
    if (mb_strlen($str_arr2[$y]) >= 3 && mb_strlen($str_arr2[$y]) <= 5) {
        echo $str_arr2[$y] . ' ';
    }
}

echo '<br>';
echo '<br>';
echo '<br>';
/*3. Вводится строка. Удалить из нее все пробелы.
После этого определить, является ли она палиндромом (перевертышем),
 т.е. одинаково пишется как с начала, так и с конца.*/
echo "<h3>Задача 3</h3>";
echo '<br>';
$str_task_3 = "Объекты, как и массивы, являются итерируемыми сущностями.";
for ($z = 0; $z < mb_strlen($str_task_3); $z++) {

    $char_2 = substr($str_task_3, $z, 1);
    if ($char_2 == ' ') {

        $str_task_3 = substr_replace($str_task_3, '', $z, 1);
        $z--;
    }
    if ($char_2 == ',') {

        $str_task_3 = substr_replace($str_task_3, '', $z, 1);
        $z--;
    }
    if ($str_task_3 == strrev($str_task_3)) {
        $answer = "<h4>Строка</h4><br> $str_task_3 <br> <h4>является палиндромом</h4>";
    } else {
        $answer = "<h4>Строка</h4><br> $str_task_3 <br> <h4>не является палиндромом</h4>";
    }
}

echo $answer;

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
/*4.Найти самое длинное слово и вывести его на экран.
Случай, когда самых длинных слов может быть несколько, не обрабатывать.*/
echo '<h3>Задача 4</h3>';
echo '<br>';
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

    }
}

if ($counter == 1) {
    echo $max_word;
} else {
    echo $str_task4 . ' ' . ' Содержит несколько слов одинаковой длины.';
}
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


//5. Посчитать количество строчных и прописных букв в строке
echo '<h3>Задача 5</h3>';
echo '<br>';
$str_task_5 = "Другая формулировка задачи: среди элементов массива с четными индексами,
               найти тот, который имеет максимальное значение.";
$str_arr_5 = mb_str_split($str_task_5);
$min = 0;
$max = 0;
for ($t = 0; $t < count($str_arr_5); $t++) {
    if ($str_arr_5[$t] >= "а" && $str_arr_5[$t] <= "я") {
        $min++;
    } elseif ($str_arr_5[$t] >= "А" && $str_arr_5[$t] <= "Я") {
        $max++;
    }
}
echo $min . ' ' . 'символов в нижнем регистре' . '<br>';
echo $max . ' ' . 'символов в верхнем регистре' . '<br>';
