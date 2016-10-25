<?php
	require_once('common.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="style.css">
<title>あなたへの言葉</title>
</head>
<body>
<div class="container">
	<div class="content">
		<h1><?php print date('Y年n月j日(D)h時i分');?>の<br>あなたへの言葉</h1>
		<h2>
	
			<?php 
				$gen=mt_rand(0,count($msg)-1);	
				print '【ラッキーカラー】<br>'.$msg[$gen]['color'].'<br>';
				print '【あなたへの言葉】<br>'.$msg[$gen]['msg'].'<br>';
			?>
	
		</h2>
		<div class="box">
			<ul>
				<?php 
					foreach($msg as $p_val){
						foreach($p_val as $title => $msg){
							print '<li>'.$title.'|'.$msg.'</li>';

						}
					}


				?>
			</ul>
		</div>
	</div>
</div>
</body>
</html>