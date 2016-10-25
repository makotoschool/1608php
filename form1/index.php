<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="style.css">
<title>form練習1</title>
</head>
<body>
<div class="container">
	<div class="content">
		<h1>お問い合わせはこちらからどうぞ</h1>
		<form>
			<p>
				<label for="name">お名前</label>
				<input id="name" type="text">
			</p>
			<p>
				<label for="e-mail">E-mail</label>
				<input id="e-mail" type="e-mail">
			</p>
			<p>
				<label for="msg">お問い合わせ内容</label>			
			</p>
			<p>
				<textarea id="msg"></textarea>
			</p>
			<p>
				<input type="submit" value="確認">
			</p>	
		</form>
	</div>
</div>

</body>
</html>