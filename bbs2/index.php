<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="./css/main.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="./js/main.js"></script>
<title>BBS</title>
</head>
<body>
<div class="container">
	<h1>掲示板</h1>
	<div class="content">
		<form action="check.php" method="post">
			<p>お名前<br>
			<input name="name" type="text">
			</p>
			<p>投稿内容<br>
			<textarea name="msg"></textarea>
			</p>
			<input type="submit" value="投稿確認">	
		</form>
		<div class="msgbord">

			<?php require_once(__DIR__.'./data.php');?>

		</div>
	</div>
</div>
</body>
</html>