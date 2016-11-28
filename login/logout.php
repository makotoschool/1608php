<?php
session_start();
$_SESSION=array();//SESSION変数を空の配列で上書き
session_destroy();




?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="style.css">
<title>ログイン</title>
</head>
<body>
<div class="container">
	<div class="content">
		<h1>ログアウト完了しました</h1>
		<a href="index.html">ログイントップへ</a>
	</div>
</div>
</body>
</html>