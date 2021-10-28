<?php
	require_once("tool/config.php");
	
	$num1 = [];
	for($i = 0; $i < 10; $i++){
		$sql = "SELECT * FROM englishwordtable"; 
		$sql .= " WHERE d_id=:d_id ORDER BY rand() LIMIT 1";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(":d_id", $_GET["d_id"], PDO::PARAM_INT);
		$stmt->execute();
		$num1[] = $stmt->fetch(PDO::FETCH_ASSOC);
	}
	echo json_encode($num1);
?>
