<?php
//オブジェクト(設計図)を作る
class Product {
 //商品名
	private $name;
	private $price;
//設定	
	public function setName($val){
		$this->name=$val;
		
	}
	
	public function setPrice($val){
		$this->price=$val;
	}


//取得
	public function getName(){
		return $this->name;
	}

	public function getPrice(){
		return $this->price;
	}


}

$sanma = new Product;
$sanma->setName('さんま');
$sanma->setPrice(198);

$tai=new Product;
$tai->setName('鯛');
$tai->setPrice(789);


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
		<?php echo $sanma->getName().$sanma->getPrice().'円';  ?>
		<hr>
		<?php echo $tai->getName(). $tai->getPrice().'円';?>

	</div>
</div>
</body>
</html>