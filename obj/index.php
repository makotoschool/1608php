<?php
//オブジェクト(設計図)を作る
class Product {
 //商品名
	public $name='さんま';
	public $price=250;

}

$obj = new Product;



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="./css/main.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="./js/main.js"></script>
<title>オブジェクト練習</title>
</head>
<body>
<div class="container">
	<div class="content">
		<?php echo $obj->name.$obj->price.'円';  ?>

	</div>
</div>
</body>
</html>