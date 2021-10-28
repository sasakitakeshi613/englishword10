<?php
session_start();
$token = bin2hex(random_bytes(32));
$_SESSION["token"] = $token;
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>
		<div id="container">
			<h1>ログインページ</h1>
				<form action="login_submit.php" method="post">
					<p>
						<label for="name">名前:</label>
						<input type="text" name="u_name" id="name">
					</p>
					<p>
						<label for="pass">パスワード:</label>
						<input type="password" name="pass" id="pass">
					</p>
					<input type="hidden" name="token" value="<?php echo $token; ?>">
					<button type="submit">go</button>
				</form>
		</div>
	</body>
</html>
