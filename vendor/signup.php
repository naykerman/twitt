<?php
session_start();
require_once 'connect.php';

$login = $_POST['login'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password === $password_confirm){
   $password = md5($password);
   mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `password`) VALUES (NULL,'$login','$password')");
   $_SESSION['message'] = 'Успішна реєстрація!';
   header('Location: ../index.php');
} else {
   $_SESSION['message'] = 'Паролі не збігаються!';
   header('Location: ../login/reg.php');
}
