<?php
session_start();

//直アクセス禁止のしくみ
if($_SERVER['REQUEST_METHOD']==='POST'){
print_r($_SESSION['name'].'<br>');
print_r($_SESSION['msg']);



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
	<h1>投稿完了</h1>
	<div class="content">
		<p>正常に投稿できました</p>
		

	</div>
</div>
</body>
</html>