<?php
	require_once("tool/config.php");
	
	$num1 = [];
	
	if($_GET["d_id"] == 4){
		$sql = "SELECT * FROM englishwordtable ORDER BY rand() LIMIT 1";
		$rs = $pdo->query($sql);
		$num1 = $rs->fetch(PDO::FETCH_ASSOC);
		echo json_encode($num1);
	} else {
		$sql = "SELECT * FROM englishwordtable"; 
		$sql .= " WHERE d_id=:d_id ORDER BY rand() LIMIT 1";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(":d_id", $_GET['d_id'], PDO::PARAM_INT);
		$stmt->execute();
		$num1 = $stmt->fetch(PDO::FETCH_ASSOC);
		echo json_encode($num1);
	}
?>
