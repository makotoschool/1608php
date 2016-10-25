<?php
$myname = '井村真琴';
$age = 40;
//普通の配列
$data1 = array('赤','青','黄','オレンジ');

//連想配列（ラベル名が文字列の配列）
$data2 = array(
			'性別'=>'男',
			'pref'=>'兵庫県',
			'city'=>'神戸市灘区',
			'address'=>'箕岡通2-2-2',
 			'tel'=>'078-111-1111'

		);
/*
print '<pre>';
print_r($data2);
print '</pre>';
*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="style.css">
<title>PHP練習</title>
</head>
<body>
<div class="container">
	<div class="content">
		<h1>私の名前は<?php echo $myname.'('.$age.')' ;?>です。</h1>
		<p>好きな色は<?php print $data1[2]; ?></p>
		<p>性別:<?php print $data2['性別']; ?></p>
		<p>住所:<?php print $data2['pref'].$data2['city'].$data2['address']; ?></p>
		<hr>
		<ul>
			<?php 
				//配列の値だけ取り出すとき
				foreach($data2 as $val){
					print '<li>'.$val.'</li>';

				}


			?>
		</ul>
		<hr>
		<ul>
			<?php 
				foreach($data2 as $title => $val){
					print '<li>'.$title.':'.$val.'</li>';
				
				}
			
			?>
		</ul>
	</div>	
</div>
</body>
</html>