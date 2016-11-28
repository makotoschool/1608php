<?php
if($_SERVER['REQUEST_METHOD']==='POST'){

//チェックしたい
//$error_msg='画像ファイルをアップしてください';

if(isset($_FILES['up_file']['tmp_name'])){
	
	$maxsize=1024*1024*1;
	$tmpfile=pathinfo($_FILES['up_file']['name']);//ファイル名情報取得

	if($_FILES['up_file']['size']>$maxsize){
		//ファイルのサイズ（容量）チェック
		$error_msg='ファイルの上限を超えました';	
	}else if($tmpfile['extension']!=='jpg'){
		//拡張子チェック
		$error_msg='ファイルの種類が違います';

	}
}








}
?>
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
		<form action="index.php" method="post" enctype="multipart/form-data">
			<label for="title">タイトル</label><br>	
			<input type="text" name="title" id="title"><br>
			<label for="up_file">ファイルを選択してください</label><br>
			<input type="file" name="up_file" id="up_file"><br>
			<?php				
				if(isset($error_msg)){
					echo '<p>'.$error_msg.'</p>';
				}
			?>
			<input type="submit" value="投稿する">


		</form>
	</div>
</div>
</body>
</html>