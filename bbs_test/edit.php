<?php
//GET送信があればの世界でくるむ＊そのままだとエラーが出る
if($_SERVER['REQUEST_METHOD']==='GET'){
$id=htmlspecialchars($_GET['editid'],ENT_QUOTES);
//DB接続
require_once(__DIR__.'./lib/dbh.php');
//SQL発行と内容の取得(PDOインスタンスは$dbhに入っている)
$stmt=$dbh->prepare('SELECT * FROM bbs1 WHERE id=?');//動的にSQL文を組み立てる時、ハッカー対策にプリぺアードステートメントの仕組みでSQL発行
$stmt->execute(array($id));


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
	<?php foreach($stmt as $row):?>
		<form action="edit_confirm.php" method="post">
			<p>お名前<br>
			<input name="edit_name" type="text" value="<?php echo $row['name'];?>">
			</p>
			<p>投稿内容<br>
			<textarea name="edit_msg"><?php echo str_replace('<br />','',$row['msg']);?></textarea>
			</p>
			<input type="hidden" name="edit_id" value="<?php echo $id;?>">
			<input type="submit" value="決定">
			<button type="button" onclick="location.href='index.php'">一覧に戻る</button>	
		</form>
	<?php endforeach; ?>
	</div>

</div>
</body>
</html>