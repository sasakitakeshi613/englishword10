<?php
	if(empty($_POST["english"]) || empty($_POST["japanese"]) || empty($_POST["difficult"])){
		header('Location: wordtouroku.php?=1');
		exit();
	}
require_once("config.php");
	
	$dsn = "mysql:host=".HOST.";dbname=".DBNAME.";charset=utf8";
	$pdo = new PDO($dsn, DBUSER, DBPASS);
	$sql = "INSERT INTO englishwordtable(english, japanese, d_id) VALUES (:english, :japanese, :difficult)";
	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(":english", $_POST["english"], PDO::PARAM_STR);
	$stmt->bindValue(":japanese", $_POST["japanese"], PDO::PARAM_STR);
	$stmt->bindValue(":difficult", $_POST["difficult"], PDO::PARAM_STR);
	$stmt->execute();
	header('Location: wordtouroku.php');
	
	
?>
