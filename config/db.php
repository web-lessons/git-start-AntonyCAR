<?php
$host = "127.0.0.1";
$login = "root";
$password = "";
$database = "eks";
 
$conn = mysqli_connect($host, $login, $password, $database);

if(!$conn){
    die("Ошибка подключения: ".mysqli_connect_error());
}