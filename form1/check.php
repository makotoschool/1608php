<?php
$name = htmlspecialchars($_POST['onamae'],ENT_QUOTES);


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
		<p>
			あなたのお名前は<?php print $name; ?>ですね
		</p>
	</div>
</div>

</body>
</html>