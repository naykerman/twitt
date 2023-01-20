<?php

include "connect.php";


$id = $_POST['id'];
$pubdate = $_POST['pubdate'];
$text = $_POST['text'];
$likes = $_POST['likes'];
$user_name = $_POST['login'];

$result = mysqli_query($connect, "SELECT * FROM `comments`ORDER BY `id` DESC");



