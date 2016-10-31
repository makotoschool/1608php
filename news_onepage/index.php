<?php
if(isset($_GET['top_val'])){
$val=htmlspecialchars($_GET['top_val'],ENT_QUOTES);

$url='http://news.google.com/news?hl=ja&ned=us&ie=UTF-8&oe=UTF-8&output=rss&topic='.$val.'&num=100';

}

$obj=simplexml_load_file($url);



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="./css/main.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="./js/main.js"></script>
<title>news onepage</title>
</head>
<body>
<div class="container">
	<h1>ニュース</h1>
	<nav>
		<ul>
			<li><a href="index.php?top_val=ir">top</a></li>
			<li><a href="index.php?top_val=y">社会</a></li>
			<li><a href="index.php?top_val=s">スポーツ</a></li>

		</ul>
	</nav>	
	<div class="content">
		<?php
			foreach($obj->channel->item as $item){
				echo '<h2>'.$item->title.'</h2>';
				echo '<p>'.$item->description.'</p>';



			}

		
		?>
	</div>
</div>
</body>
</html>