<?php 
$email = stripslashes(htmlspecialchars($_POST['email']));


if(empty($email)){
    $message = "Введите Вашу почту";
    echo "<script type='text/javascript'>alert('$message');</script>";
echo '<meta http-equiv="refresh" content="2; url=http://'.$_SERVER['SERVER_NAME'].'">';
}
else{
$subject = 'Получите скидку - Mark-Tim'; // заголовок письмя
$addressat = "vadyatim7@gmail.com"; // Ваш Электронный адрес
$success_url = 'index.html';
$message = "Почта: {$email}";
$verify = mail($addressat,$subject,$message,"Content-type:text/plain;charset=utf-8\r\n");
if ($verify == 'true'){
    header('Location: '.$success_url);
    exit;
}
else 
    {
    echo '<h1 style="color:red;">Произошла ошибка!</h1>';
    }
}
?>