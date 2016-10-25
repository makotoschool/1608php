<?php

$name = htmlspecialchars($_POST['onamae'],ENT_QUOTES);
$email = htmlspecialchars($_POST['e-mail'],ENT_QUOTES);
$msg = htmlspecialchars($_POST['msg'],ENT_QUOTES);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="style.css">
<title>入力チェック</title>
</head>
<body>
<div class="container">
	<div class="content">
		<h1>入力確認</h1>
			<?php
				if($name===''){
					print '<p>お名前を入力してください</p>';
				}else{
					print '<p>あなたの名前は<br>'.$name.'ですね';
				}

				if($email===''){
					print '<p>e-mailを入力してください</p>';
				}else{
					print '<p>あなたのe-mailは<br>'.$email.'ですね';
				}

				if($msg===''){
					print '<p>メッセージを入力してください</p>';
				}else{
					print '<p>あなたのメッセージは<br>'.$msg.'ですね';
				}






			?>
<!--
		<p>
			あなたのお名前は<br><?php print $name; ?>ですね
		</p>
		<p>
			あなたのe-mailは<br><?php print $email; ?><br>ですね
		</p>
		<p>
			あなたの問い合わせ内容は<br><?php print $msg; ?><br>ですね
		</p>
-->
	</div>
</div>

</body>
</html>