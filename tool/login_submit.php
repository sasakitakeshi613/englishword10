<?php
session_start();
if(empty($_POST["u_name"]) || empty($_POST["pass"]) || empty($_SESSION["token"])){
	header("Location: login.php?err=1");
	exit();
}
if($_POST["token"] != $_SESSION["token"]) {
	header("Location: login.php?err=2");
	exit();
}

require_once("config.php");
$sql = "SELECT * FROM users WHERE u_name = :u_name";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":u_name", $_POST["u_name"], PDO::PARAM_STR);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$flag = password_verify($_POST["pass"], $row["pass"]);

if($flag) {
	$_SESSION["login"] = true;
	$_SESSION["u_name"] = $row["u_name"];
	unset($_SESSION["token"]);
	header("Location: wordtouroku.php");
} else {
	$_SESSION = [];
	header("Location: login.php");
}
?>
