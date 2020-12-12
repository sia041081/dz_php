<?php

$name = $_POST["name"];
$first_name = $_POST['firstname'];
$email = $_POST["email"];
$phone = $_POST["phone"];
$text_comment = $_POST["text_comment"];
if ($name == "" or $email == "" or $phone == "" or $text_comment == "") {
    echo "Заполните все поля";
} else {

    $to = "your_mail@mail.ru";
    $subject = "Письмо с обратной связи";
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: <test@mail.ru>\r\n";


    $message .= "Имя пользователя: " . $name . "\n";
    $message .= "Фамилия: " . $first_name . "\n";
    $message .= "Почта: " . $email . "\n";
    $message .= "Телефон: " . $phone . "\n";
    $message .= "Сообщение: " . $text_comment . "\n";

    $send = mail($to, $subject, $message, $headers);

    if ($send == "true") {
        echo "Ваше сообщение отправлено.\r\n";
    } else {
        echo "Не удалось отправить, попробуйте снова!";
    }
}
$file = 'message.txt';
$current = file_get_contents($file);
$current = "$message";
file_put_contents($file, $current, FILE_APPEND);