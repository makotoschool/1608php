<?php
if($_SERVER['REQUEST_METHOD']==='POST'){

//チェックしたい
//$error_msg='画像ファイルをアップしてください';
//ファイルのサイズ（容量）
if(isset($_FILES['up_file']['tmp_name'])){
 echo 'うまくいってるよ';

/*
	if($_FILES['up_file']['size']>1024){
		$error_msg='ファイルの上限は1Mです';

	}

*/
}




//ファイルの拡張子



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