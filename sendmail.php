<?php

$firstname  = $_POST['firstname'];
$email  = $_POST['email'];
$text  = $_POST['subject'];

$to = "lyubov.vishnevetskaya@yandex.ru";
$date = date("d.m.Y");
$time = date("h:i");
$from = $email;
$subject = "Заявка с сайта";

$message = "
Имя: $firstname \n 
email: $email \n 
Сообщение: $text";
if (mail($to, $subject, $message, "From: $from")) {
    echo '
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<p>Спасибо! Сообщение отправлено</p>
    <p>Нажмите на кнопку, чтобы вернуться на главную страницу</p> 
    <br>
    <button> <a href="index.html"> Главная </a> </button>';

}
else {
    echo '
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <p>К сожалению сообщение не удалось отправить</p>
    <p>Вы можете попробовать снова</p> 
    <br>
    <button> <a href="contacts.html"> Контакты </a> </button>';
}
?> 