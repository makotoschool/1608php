<?php
if($_SERVER['REQUEST_METHOD']==='GET'){
$post_no=htmlspecialchars($_GET['id'],ENT_QUOTES);

require_once(__DIR__.'./lib/dbh.php');

//指定行を削除するSQLのひな形を準備する
$stmt = $dbh->prepare('DELETE FROM bbs1 WHERE id=?');
//実行時にプレースフォルダーに値をセットする
$stmt->execute(array($post_no));




}else{
echo '直アクセスは禁止されています';
exit;

}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="./css/main.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="./js/main.js"></script>
<title>投稿の削除</title>
</head>
<body>
<div class="container">
	<h1>投稿の削除</h1>
	<div class="content">
		<p>投稿は削除されました</p>
		<a href="index.php">一覧に戻る</a>


	</div>
</div>
</body>
</html>