<?php
if(isset($_POST['program'])) {$program = $_POST['program'];}
if(isset($_POST['message'])) {$message = $_POST['message'];}
if(isset($_POST['first-name'])) {$first_name = $_POST['first-name'];}
if(isset($_POST['last-name'])) {$last_name = $_POST['last-name'];}
if(isset($_POST['email'])) {$email = $_POST['email'];}
if(isset($_POST['phone'])) {$phone = $_POST['phone'];}


if(empty($_POST['program'])) {
    echo 'Выберите программу';
    exit;
}
else if(empty($_POST['message'])) {
    echo 'Введите ваш вопрос';
    exit;
}
else if(empty($_POST['first-name'])) {
    echo 'Введите имя';
    exit;
}
else if(empty($_POST['last-name'])) {
    echo 'Введите фамилию';
    exit;
}
else if(empty($_POST['email'])) {
    echo 'Введите email';
    exit;
}
else if(empty($_POST['phone'])) {
    echo 'Введите телефон';
    exit;
}


$to = 'adm@lcu.edu.ua';
$subject = 'Вопрос с сайта';
$text = "Программа: $program\n";
$text .= "Имя: $first_name\n";
$text .= "Фамилия: $last_name\n";
$text .= "Email: $email\n";
$text .= "Телефон: $phone\n";
$text .= "Сообщение: $message\n";
$headers = "Content-type:text/plain;charset=utf-8";
$send = mail($to, $subject, $text, $headers);


if($send == true) {
    echo 'Сообщение отправлено';
}
else {
    echo 'Сообщение не отправлено';
}

?>