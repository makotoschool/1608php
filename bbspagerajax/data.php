<?php
header("Content-type:text/html;charset=utf-8");
//pear Pager読み込み
require_once('Pager/Pager.php');

//DBに接続
require_once(__DIR__.'./lib/dbh.php');
//sqlを発行する

$stmt = $dbh->query('SELECT * FROM bbs1 ORDER BY id DESC');
$result=$stmt->fetchall(PDO::FETCH_ASSOC);
/*
echo '<pre>';
var_dump($result);
echo '</pre>';
*/
//パラメーターを設定
$params=array(
	'itemData'=>$result,
	'perPage'=>5,
	'prevImg' => '前へ',
	'nextImg'=> '次へ'

);


//実行
$pager=Pager::factory($params);
$navi=$pager->getLinks();//ナビゲーション
$data=$pager->getPageData();

?>
		<nav class="pager">

			<?php echo $navi['all'];?><br>
			<span class="pager_info">
			<?php echo $pager->numItems( );?>投稿中
			<?php 
				$clientpage=$pager->getOffsetByPageId();
				echo $clientpage[0]-1;
			?>番目から
			<?php echo $clientpage[1];?>番目を表示中
			</span>
		</nav>
		<?php foreach($data as $row): ?>
			<div class="msg">
				<h2>【投稿者名】<?php echo $row['name'];?>(<?php echo $row['time']?>)</h2>
				<p>
					投稿内容<br>
					<?php echo $row['msg'];?>
				</p>
				<button class="del" type="button" value="<?php echo $row['id'] ;?>">削除する</button>
				<a href="edit.php?editid=<?php echo $row['id'];?>">編集する</a>
			</div>
		<?php endforeach; ?>




