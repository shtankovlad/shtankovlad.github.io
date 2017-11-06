<?php
//Принимаем постовые данные
$name=$_POST['name'];
$email=$_POST['email'];
$messag=$_POST['messag'];
//Тут указываем на какой ящик посылать письмо
$to = "vladislav.shtancko@yandex.ua";
//Далее идет тема и само сообщение
$subject = "Заявка с первого сайта";
$message = "
Имя человека: ".htmlspecialchars($name)."<br />
Email: ".htmlspecialchars($email)."<br />
Сообщение: ".htmlspecialchars($messag);
$headers = "From: homework.ls <vlad@fullstack.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
header('Location: thanks.html');
exit();
?> 