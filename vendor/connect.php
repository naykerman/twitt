<?php

$connect = mysqli_connect('localhost', 'root', '', 'twitt');
if(!$connect){
   die('Error connect to Database!');
}