<?php

//フォームから送信されたデータを受ける
$word = htmlspecialchars($_POST['word'],ENT_QUOTES);

//リクエストをする
$request = 'http://news.google.com/news?hl=ja&ned=us&ie=UTF-8&oe=UTF-8
&output=rss&topic=y&num=500';
$result=simplexml_load_file($request);

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
		<h2>検索結果</h2>
		<?php
			foreach($result->channel->item as $item):
				$search = mb_strpos($item->title,$word,0,'UTF-8');	
				if($search!==false):?>
					<div class="box">
					<a href="<?php echo $item->link ;?>" target="blank">
						<h2><?php echo $item->title; ?></h2>
					</a>	
					<p><?php echo $item->description; ?></p>
					</div>
				<?php else: ?>
					<h2>検索にタイトルが一致するニュースはありません</h2>
				<?php exit; ?>

				<?php endif; ?>
		<?php endforeach;	?>

	</div>
</div>
</body>
</html>