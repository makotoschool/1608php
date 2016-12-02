<?php
session_start();

//直アクセス禁止のしくみ
if($_SERVER['REQUEST_METHOD']==='POST'){
$name=htmlspecialchars($_POST['name'],ENT_QUOTES);
$msg=nl2br($_POST['msg']);
$msg=strip_tags($msg,'<br>');
//セッション変数に詰め替える
$_SESSION['name']=$name;
$_SESSION['msg']=$msg;


}else{
echo '直アクセスは禁止です';
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
<title>入力チェック</title>
</head>
<body>
<div class="container">
	<h1>入力確認</h1>
	<div class="content">
		<form action="confirm.php" method="post">
			<p>あなたの名前は<?php echo $name;?>ですね</p>
			<p>	
			【メッセージ内容】<br>
			<?php echo $msg;?>
			</p>
			<button type="button" onclick="history.back();">戻る</button>
			
			<input type="submit" value="投稿">
		</form>
	</div>
</div>
</body>
</html>