<?php
//GET送信があればの世界でくるむ＊そのままだとエラーが出る
if($_SERVER['REQUEST_METHOD']==='GET'){
$id=htmlspecialchars($_GET['editid'],ENT_QUOTES);
print_r($id);

}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="./css/main.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="./js/main.js"></script>
<title>投稿を編集</title>
</head>
<body>
<div class="container">
	<h1>投稿を編集する</h1>
	<div class="content">
		<form action="" method="post">
			<p>お名前<br>
			<input name="name" type="text">
			</p>
			<p>投稿内容<br>
			<textarea name="msg"></textarea>
			</p>
			<input type="submit" value="投稿確認">	
		</form>
	</div>
</div>
</body>
</html>