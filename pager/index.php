<?php
require_once('Pager/Pager.php');

//実験用のデータ（配列）を作る
for($i=0;$i<100;$i++){
$item[$i]['title']=$i.'番目のタイトル';
$item[$i]['content']=$i.'番目の本文です。';		
}
/*
echo '<pre>';
var_dump($item);

echo '</pre>';
*/

//パラメーターを設定
$params=array(
	'itemData'=>$item,
	'perPage'=>20,
	'prevImg' => '前へ',
	'nextImg'=> '次へ'


);


//実行
$pager=Pager::factory($params);
$navi=$pager->getLinks();//ナビゲーション
$data=$pager->getPageData();
/*
echo '<pre>';
var_dump($data);
echo '</pre>';
*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="style.css">
<title>ページングサンプル</title>
</head>
<body>
<div class="container">
	<h1>ページング練習</h1>
	<div class="content">
		<nav>
			<?php echo $navi['all'];?><br>
			<?php echo $pager->numItems( );?>件中
			<?php 
				$clientpage=$pager->getOffsetByPageId();
				//var_dump($clientpage);
				echo $clientpage[0]-1;
			?>番目から
			<?php echo $clientpage[1];?>番目を表示
			

		</nav>
		<div class="post">
			<?php echo $pager->isLastPage()?'最後のページです':'';?>
			<?php echo $pager->isFastPage()?'最後のページです':'';?>
			<?php foreach($data as $msg):?>
				<h2><?php echo $msg['title'];?></h2>
				<p><?php echo $msg['content'];?></p>

			<?php endforeach; ?>
		</div>	
	</div>
</div?
</body>
</html>