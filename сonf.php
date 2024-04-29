<?php
$hostname = 'd119766.mysql.zonevs.eu';
$database = 'd119766_finalproject';
$username = 'd119766_karina';
$password = 'Ihate2021year';

$connection = mysqli_connect($hostname, $username, $password, $database);

// Проверка подключения
if (!$connection) {
    die("No connection with database! " . mysqli_connect_error());
}
?>