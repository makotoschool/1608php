<?php
//リクエストをする
$request = 'http://news.google.com/news?hl=ja&ned=us&ie=UTF-8&oe=UTF-8
&output=rss&topic=y&num=5';
 
$result=simplexml_load_file($request);
/*
echo '<pre>';
print_r($result);

echo '</pre>';
*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="./css/main.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="./js/main.js"></script>
<title>news</title>
</head>
<body>
<div class="container">
	<h1>Googleニュース検索</h1>
	<nav>
		<ul>
			<li><a href="index.php">top</a></li>
			<li><a href="syakai.php">社会</a></li>
			<li><a href="sports.php">スポーツ</a></li>
			<li><a href="entame.php">エンタメ</a></li>

		</ul>
	</nav>
	<div class="content">
		<h2>トップニュース</h2>
		<?php
			foreach($result->channel->item as $item):?>
				<div class="box">
				<a href="<?php echo $item->link ;?>" target="blank"><h2><?php echo $item->title; ?></h2></a>	
				<p><?php echo $item->description; ?></p>
				</div>
			<?php endforeach; ?>

	</div>
</div>
</body>
</html>