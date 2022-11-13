<?php

$db_name = 'ninidelivery';
$db_server = 'localhost';
$db_username = 'root';
$db_password = '';

$currency = 'RM';
$conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);

if(mysqli_connect_errno()) // if have connection error
   echo 'Fail to connect: '.mysqli_connect_error(); // show what error
?>











