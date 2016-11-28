<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="style.css">
<title>画像ファイルアップロード</title>
</head>
<body>
<div class="container">
	<div class="content">
		<h1>画像をアップロードしてください</h1>
		<form action="index.php" method="post">
			<label for="title">タイトル</label><br>	
			<input type="text" name="title" id="title"><br>
			<label for="up_file">ファイルを選択してください</label><br>
			<input type="file" name="up_file" id="up_file"><br>
			<input type="submit" value="投稿する">


		</form>
	</div>
</div>
</body>
</html>