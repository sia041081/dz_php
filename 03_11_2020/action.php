<?php
require_once('function.php');
$str = $_POST['name'];
if (isset($_POST["rem_spaces"])) {
    echo "<center><h4>Задача №1</h4></center> В строке текста записаны слова, разделенные пробелами
          в произвольном количестве. Сжатие текста состоит в том, что между
          словами оставляется по одному пробелу, а после последнего слова пробелы
          удаляются (пробелы перед первым словом сохраняются).
          Сжатый текст записать в другую переменную. Если строка содержит только пробелы,
          то все они сохраняются.<br/>";
    echo '<br>';
    rem_spaces($str);
}
if (isset($_POST["find_word"])) {
    echo "<center><h4>Задача №2</h4></center> В произвольном тексте найти и вывести на экран все слова
          длина которых не менее трёх символов и не более пяти.";
    echo '<br>';
    find_word($str);
}
if (isset($_POST["palindrom"])) {
    echo "<center><h4>Задача №3</h4></center> Вводится строка. Удалить из нее все пробелы.
          После этого определить, является ли она палиндромом (перевертышем),
          т.е. одинаково пишется как с начала, так и с конца.";
    echo '<br>';
    palindrom($str);
}
if (isset($_POST["long_word"])) {
    echo "<center><h4>Задача №4</h4></center> Найти самое длинное слово и вывести его на экран.
          Случай, когда самых длинных слов может быть несколько, не обрабатывать.";
    echo '<br>';
    long_word($str);
}
if (isset($_POST["upper_char"])) {
    echo "<center><h4>Задача №5</h4></center> Посчитать количество строчных и прописных букв в строке";
    echo '<br>';
    upper_char($str);
}