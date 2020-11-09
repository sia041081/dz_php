
<form action="" method="POST">
    <label><h1>Введите ваш текст</h1>
        <textarea name="text" cols="100" rows="10"></textarea>
    </label>
    <button type="submit">Запись</button>
</form>
<?php
$string = $_POST['text'];
$fd = fopen("message.txt", 'w+') ;
fwrite($fd, $string);
fclose($fd);
$message = file_get_contents("message.txt");
?>
<div class="answer">
<h2><?=$message?></h2>
</div>
