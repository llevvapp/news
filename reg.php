<?php $connect = mysqli_connect('127.0.0.1','root','', 'web');
$query = mysqli_query($connect,"INSERT INTO user (name,mail,password,login) VALUES ('".$_POST['name']."','".$_POST['mail']."','".$_POST['password']."','".$_POST['login']."')");
$welcome = 'Вы успешно зарегистрировались на сайте!';
$logpas = 'Ваш логин и пароль:';
mail($_POST['mail'], $welcome, $logpas.$_POST['login'].' '.$_POST['password']); 
header('Location: http://news/index.php?q=1'); ?>