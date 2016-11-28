<?php
header('Content-type: text/html');

require_once(__DIR__.'./dbh.php');

$stmt=$dbh->query('SELECT * FROM file_info ORDER BY id DESC');

?>
<ul>
	<?php foreach($stmt as $data):?>
		<li>
			<h2><?php echo $data['title'];?></h2>
			<img src="img/<?php echo $data['path']?>" width="200px">
		</li>
	<?php endforeach; ?>
</ul>
