<form action="" method="post">
    <p><input type="text" name="name" id="string" placeholder='Ваше значение:'/></p>
    <p>
        <select name="task">
            <option value="rem_spaces">"Задача №1"</option>
            <option value="find_word">"Задача №2</option>
            <option value="palindrom">"Задача №3"</option>
            <option value="long_word">"Задача №4"</option>
            <option value="upper_char">"Задача №5"</option>
        </select>
    </p>
    <p><input type="submit" value="Проверить"/></p>
</form>
<div class="container">
    <div class="answer">
        <?php
        include_once 'function.php';
        $str = $_POST['name'];

        if ($_POST["task"] == "rem_spaces") {
            echo "<h4>Задача №1</h4>  В строке текста записаны слова, разделенные пробелами
в произвольном количестве. Сжатие текста состоит в том, что между
словами оставляется по одному пробелу, а после последнего слова пробелы
удаляются (пробелы перед первым словом сохраняются).
Сжатый текст записать в другую переменную. Если строка содержит только пробелы,
то все они сохраняются.<br/>";
            echo '<br>';
            echo rem_spaces($str);
        }
        if ($_POST["task"] == "find_word") {
            echo "<h4>Задача №2</h4> В произвольном тексте найти и вывести на экран все слова
длина которых не менее трёх символов и не более пяти.";
            echo '<br>';
            echo find_word($str);
        }
        if ($_POST["task"] == "palindrom") {
            echo "<h4>Задача №3</h4> Вводится строка. Удалить из нее все пробелы.
После этого определить, является ли она палиндромом (перевертышем),
т.е. одинаково пишется как с начала, так и с конца.";
            echo '<br>';
            echo palindrom($str);
        }
        if ($_POST["task"] == "long_word") {
            echo "<h4>Задача №4</h4> Найти самое длинное слово и вывести его на экран.
Случай, когда самых длинных слов может быть несколько, не обрабатывать.";
            echo '<br>';
            echo long_word($str);
        }
        if ($_POST["task"] == "upper_char") {
            echo "<h4>Задача №5</h4> Посчитать количество строчных и прописных букв в строке";
            echo '<br>';
            echo upper_char($str);
        }
        ?>
    </div>
</div>
