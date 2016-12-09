<?php
if(!empty($_POST['data'])){

$postdata=$_POST['data'];
$count=1;
foreach($postdata as $data){
		echo '('.$count.')'.htmlspecialchars($data,ENT_QUOTES).'<br>';
		$count++;
	}

}




