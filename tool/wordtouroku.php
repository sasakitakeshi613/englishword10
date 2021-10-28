<?php
session_start();
if($_SESSION["login"] != true){
	header("Location: login.php?err=log");
};

require_once("config.php");
$sql = "SELECT * FROM englishwordtable";
$rs = $pdo->query($sql);

?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<title>word登録</title>
		<meta name="viewport" content="width=device-width">
		<meta charset="utf-8">
		<link rel="stylesheet" href="../css/style2.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
		<script src="../js/jquery-3.6.0.min.js"></script>
	</head>
	<body>
		<a href="../englishword.php">
			<i class="fab fa-amilia"></i> 英語10連へ  
		</a>
		<span class="bar"> | </span>
		<a href="logout.php">ログアウト</a>
	<div id="container">
		<div id="top">
			<h1>word登録</h1>
				<form action="dbtouroku.php" method="post" id="submit">
					<p>
						<label for="english">英単語</label>
						<input type="text" name="english" id="english" value="" spellcheck="true">
						</input>
					</p>
					<p>
						<label for="Japanese">日本語</label>
						<input type="text" name="japanese" id="japanese"></input>
					</p>
					<p>
						<input type="radio" name="difficult" id="easy" value=1><label for="easy">easy</label></input>
						<input type="radio" name="difficult" id="normal" value=2><label for="normal">normal</label></input>
						<input type="radio" name="difficult" id="hard" value=3><label for="hard">hard</label></input>
					</p>
					<button type="submit">登録する</button>
				</form>
				<form class="wordSearch" action="https://www.google.com/search" method="get" target="_blank">
					<input type="text" name="q" id="search" value=""></input>
					<button>検索</button>
				</form>
			</div>
			<div id="under">
			<table>
				<tr>
					<th>ID</th>
					<th>英単語</th>
					<th>日本語</th>
					<th>難易度</th>
			</tr>
			<?php while($row = $rs->fetch(PDO::FETCH_ASSOC)): ?>
				<tr>
					<td>
						<?php echo $row["e_id"] ; ?>
					</td>
					<td>
						<?php echo $row["english"] ; ?>
					</td>
					<td>
						<?php echo $row["japanese"] ; ?>
					</td>
					<td>
						<?php if($row["d_id"] == 1): ?>
							<?php echo "easy"; ?>
						<?php elseif($row["d_id"] == 2): ?>
							<?php echo "normal"; ?>
						<?php else: ?>
							<?php echo "hard"; ?>
						<?php endif; ?>
					</td>
				</tr>
			<?php endwhile; ?>
		</table>
			<a href="#">上へ</a>
			</div>
		</div>
		<script src="../js/word_make.js"></script>
	</body>
</html>
