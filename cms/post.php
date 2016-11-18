<?php
if(isset($_GET['post_id'])){
require_once(__DIR__.'/lib/dbh.php');
$id=htmlspecialchars($_GET['post_id'],ENT_QUOTES);
$stmt=$dbh->prepare('SELECT * FROM posts WHERE id=?');
$stmt->execute(array($id));


}else{
echo '直接このページへのアクセスは禁止されています';
exit;

}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>mycms</title>
<link type="text/css" rel="stylesheet" href="css/main.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="js/main.js"></script>
</head>
<body>
<div class="container">
	<header id="global_header clearfix">
		<a href="">
			<h1 class="logo">
				<span class="invisible">ここに見出し（CSSで非表示にしているので検索エンジンには見えても、人間には見えないよ）</span>
			</h1>
		</a>
		<nav class="utility_nav clearfix">
			<ul>
			<li><a href="">NEWS</a></li>
			<li><a href="">SITEMAP</a></li>
			<li><a href="">PRIVACY</a></li>
			</ul>
		</nav>

	</header>
	<nav id="nav" class="main_nav clear clearfix">
		<ul>
		<li><a href="index.php">top</a></li>
		<li><a href="">menu</a></li>
		<li><a href="">menu</a></li>
		<li><a href="">menu</a></li>
		<li><a href="">menu</a></li>
		<li><a href="">menu</a></li>
		</ul>
	</nav>
	<main>
		<div class="gloval_main">
			<section class="contents">
                <article class="content_sentence">
					<?php foreach($stmt as $data): ?>
                    <h2 class="mid padding20"><?php echo $data['title'];?></h2>
                    <div class="news post">
						<p><?php echo $data['content'];?></p>
 
                    </div>
					<?php endforeach; ?>
                </article>
				
                		

			</section>


		</div>


	</main>

</div>
</body>
</html>