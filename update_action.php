<?php
$pdo = require "config/db_conn.php";

try {

    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $id = (int) $_POST['id'];
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $country = filter_input(INPUT_POST, "country", FILTER_SANITIZE_SPECIAL_CHARS);

        $statement = $pdo->prepare("UPDATE users SET name = :name, email = :email, country = :country WHERE id = :id");

        $statement -> bindParam(":name", $name);
        $statement -> bindParam(":email", $email);
        $statement -> bindParam(":country", $country);
        $statement -> bindParam(":id", $id, PDO::PARAM_INT);

        $statement->execute();
        header("Location: index.php");
        exit;
    }else{
        die("No data sent");
    }

}catch (Exception $e){
    echo $e->getMessage();
}