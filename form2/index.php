<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="style.css">
<title>form練習2</title>
</head>
<body>
<div class="container">
	<div class="content">
		<h1>お問い合わせはこちらからどうぞ</h1>
		<p>（セッションを使って）</p>
		<form action="check.php" method="POST">
			<p>
			<label for="name">お名前</label>
			<input name="onamae" id="name" type="text" <?php 
				if(isset($_SESSION['name'])){
						print 'value="'.$_SESSION['name'].'"';
					}
			?>>
			</p>
			<p>
				<label for="e-mail">E-mail</label>
				<input name="e-mail" id="e-mail" type="email" <?php 
					if(isset($_SESSION['email'])){
						print 'value="'.$_SESSION['email'].'"';
					}

				?>>
			</p>
			<p>
				<label for="msg">お問い合わせ内容</label>			
			</p>
			<p>
				<textarea name="msg" id="msg"><?php 
				if(isset($_SESSION['msg'])){
							//print $_SESSION['msg'];
					print str_replace('<br />','',$_SESSION['msg']);
					/*
					システムの改行はバックスラッシュ+n
					バックスラッシュがwinでは￥になるため
					<br />を空白に置き換える　で代用
					*/
				}
					?></textarea>
			</p>
			<p>
				<input name="submit" type="submit" value="確認">
			</p>	
		</form>
	</div>
</div>

</body>
</html>