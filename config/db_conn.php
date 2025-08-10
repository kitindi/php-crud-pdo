<?php
$host ="localhost";
$dbname = "web_app";
$username = "root";
$password ="";

try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;

}catch (Exception $e){
    echo  $e->getMessage();
}
$conn = null;