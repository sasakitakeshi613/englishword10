<?php
require_once("config.php");
$name = "sasaki";
$pass = "takeshi";

$sql = "INSERT INTO users(u_name, pass) VALUES(:u_name, :pass)";
$stmt =$pdo->prepare($sql);
$stmt->bindValue(":u_name", $name, PDO::PARAM_STR);
$stmt->bindValue(":pass", password_hash($pass, PASSWORD_DEFAULT), PDO::PARAM_STR);
$stmt->execute();
?>
