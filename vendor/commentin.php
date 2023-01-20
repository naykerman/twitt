<?php
session_start();
include "connect.php";

$text = $_POST['text'];
$user_name = $_POST['login'];


if ($_POST['token'] == $_SESSION['lastToken']) {
}
elseif(empty($_POST['text'])){ 
}
else
{     
      $_SESSION['lastToken'] = $_POST['token'];
   $result = mysqli_query($connect, "INSERT INTO `comments` (`id`, `pubdate`, `text`, `user_name`) VALUES (NULL, CURRENT_TIMESTAMP, '$text', '".$_SESSION['user']['login']."')");
}

