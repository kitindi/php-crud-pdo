<?php
$pdo = include "config/db_conn.php";

$nameError = $emailError = $countryError = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $country = filter_input(INPUT_POST, "country", FILTER_SANITIZE_SPECIAL_CHARS);

    if (!$name){
        $nameError ="Username is required";
    }
    if (!$email){
        $emailError ="Email is required";
    }
    if (!$country){
        $countryError ="Country name is required";
    }

    if(empty($nameError) && empty($emailError) && empty($countryError)){
        $sql = "INSERT INTO users (name, email, country) VALUES (:name, :email, :country)";
        $statement = $pdo->prepare($sql);
        $statement->execute([
            "name" => $name,
            "email" => $email,
            "country" => $country
        ]);
        header("Location: index.php");
        exit;

    }
    else{
        header("Location: form.php");
    }
    exit;

}


