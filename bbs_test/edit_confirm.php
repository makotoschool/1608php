<?php
$name=htmlspecialchars($_POST['edit_name'],ENT_QUOTES);
$id=htmlspecialchars($_POST['edit_id'],ENT_QUOTES);
$msg=nl2br($_POST['edit_msg']);//\nを<br>に変換
$msg=strip_tags($msg,'<br>');//<br>以外は無効
require_once(__DIR__.'./lib/dbh.php');
$stmt=$dbh->prepare('UPDATE bbs1 SET name=:name,msg=:msg WHERE id=:id');
$stmt->execute(array(
				':name'=>$name,
				':msg'=>$msg,
				':id'=>$id

));


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="./css/main.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="./js/main.js"></script>
<title>編集完了</title>
</head>
<body>
<div class="container">
	<h1>編集完了しました</h1>
	<div class="content">
	<button type="button" onclick="location.href='index.php'">投稿一覧に戻る</button>
	</div>
</div>
</body>
</html>