<?php
session_start();

if(!isset($_POST['submit'])){
	print '直接のアクセスは禁止されております<br>';
	print '<a href="index.php">トップページに戻る</a>';
	
	exit;

}

require_once('common.php');

//$name=h($_SESSION['name']);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="style.css">
<title>ありがとうございました</title>
</head>
<body>
<div class="container">
	<div class="content">
		<h1>お問い合わせは送信されました。</h1>
		<p>	お問い合わせ内容は以下の通りです</p>
		<hr>
		<dl>
			<dt>【お名前】</dt>
			<dd><?php print h($_SESSION['name']); ?></dd>
			<dt>【メールアドレス】</dt>
			<dd><?php print h($_SESSION['email']); ?></dd>
			<dt>【問い合わせ内容】</dt>	
			<dd><?php print h($_SESSION['msg']); ?></dd>	
		</dl>
		<button onclick="location.href='index.php'">トップページに戻る</button>





	</div>
</div>

</body>
</html>