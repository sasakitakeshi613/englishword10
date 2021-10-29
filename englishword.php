<?php
$now = date("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<title>英単語１０連</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
		<script src="js/jquery-3.6.0.min.js"></script>
	</head>
	<body>
		<a href="tool/wordtouroku.php">
			<i class="fab fa-amilia"></i> ワード登録
		</a>
		<span class="bar"> | </span>
		<a href="tool/logout.php">ログアウト</a>
		<div id="container">
			<h1>英単語１０連</h1>
				<p>
					<input type=radio name="difficult" value="1" id="easy" checked><label for="easy">easy</label>
					<input type=radio name="difficult" value="2" id="normal"><label for="normal">normal</label>
					<input type=radio name="difficult" value="3" id="hard"><label for="hard">hard</label>
					<input type=radio name="difficult" value="4" id="all"><label for="all">すべて</label>
				</p>
				<button input="submit" id="num">単発</button>
				<button input="submit" id="num10">１０連</button>
				<button input="submit" id="translation">翻訳</button>
			<ul id="word"></ul>
		</div>
		<footer>
			<p class="time"><?php echo $now; ?></p>
		</footer>
		<script src="js/app.js"></script>
	</body>
</html>
