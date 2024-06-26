<?php

$hostname = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'register';

//$conn = mysqli_connect($hostname, $username, $password, $dbname);
//
//if(!$conn) {
//    die('Connection Failed' . mysqli_connect_error());
//}

$dsn = "mysql:dbname={$dbname};host={$hostname};charset=utf8mb4";

$opt = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

$db = new PDO($dsn, $username, $password);