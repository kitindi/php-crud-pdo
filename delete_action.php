<?php
$pdo = require "config/db_conn.php";



try {
    $id = (int)$_GET['u_id'];
    $sql = "DELETE FROM users WHERE id = :id";

    $statement = $pdo->prepare($sql);
    $statement -> bindParam(":id", $id, PDO::PARAM_INT);
    $statement->execute();

    header("Location: index.php");
    exit;
}catch (Exception $e){
    echo $e->getMessage();
}