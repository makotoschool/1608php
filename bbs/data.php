<?php
//DBに接続
require_once(__DIR__.'./lib/dbh.php');
//sqlを発行する

$stmt = $dbh->query('SELECT * FROM bbs1');

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="./css/main.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="./js/main.js"></script>
<title>一覧表示</title>
</head>
<body>
<div class="container">
	<h1>投稿一覧</h1>
	<div class="content">
		<?php
			foreach($stmt as $row){
				echo $row['name'].'<br>';


			}


		?>
	</div>
</div>
</body>
</html>