<?php
header("Content-type:text/html;charset=utf-8");
//DBに接続
require_once(__DIR__.'./lib/dbh.php');
//sqlを発行する

$stmt = $dbh->query('SELECT * FROM bbs1 ORDER BY id DESC');
?>

		<?php foreach($stmt as $row): ?>
			<div class="msg">
				<h2>【投稿者名】<?php echo $row['name'];?>(<?php echo $row['time']?>)</h2>
				<p>
					投稿内容<br>
					<?php echo $row['msg'];?>
				</p>
				<button type="button">削除する</button>
				<a href="edit.php?editid=<?php echo $row['id'];?>">編集する</a>
			</div>
		<?php endforeach; ?>




