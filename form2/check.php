<?php
session_start();

if(!isset($_POST['submit'])){
	print '直接のアクセスは禁止されております<br>';
	print '<a href="index.php">トップページに戻る</a>';
	
	exit;

}

require_once('common.php');

$name=h($_POST['onamae']);
$email =h($_POST['e-mail']);
$msg = nl2br($_POST['msg']);
$msg=strip_tags($msg,'<br>');

//セッション変数を定義し代入
$_SESSION['name']=$name;
$_SESSION['email']=$email;
$_SESSION['msg']=$msg;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="style.css">
<title>入力チェック</title>
</head>
<body class="check">
<div class="container">
	<div class="content">
		<h1>入力確認</h1>
			<?php
				if($name==''){
						print '<p>名前を入力してください</p>';
					}else{
						print '<p>あなたの名前は<br>'.$name.'ですね';
					}
				if($email==''){
						print '<p>e-mailを入力してください</p>';
					}else{
						print '<p>あなたのe-mailは<br>'.$email.'ですね';
					}
				if($msg==''){
						print '<p>問い合わせ内容を入力してください</p>';
					}else{
						print '<p>あなたの問い合わせ内容は<br>'.$msg.'ですね';
					}
			?>
			<p>
				<button onclick="location.href='index.php'">戻る</button>
				
				<?php if($name!=''&& $email!='' && $msg!=''):?>
					<form action="thanks.php" method="POST">
					
					<input name="submit" type="submit">								
					</form>
				<?php endif ;?>

				<!--
				<form action="thanks.php" method="POST">
					<input type="submit">				
				
				</form>
				-->
		
				
			</p>



		<!--
		<p>
			あなたのお名前は<br><?php print $name; ?>ですね
		</p>
		<p>
			あなたのe-mailは<br><?php print $email; ?><br>ですね
		</p>
		<p>
			あなたの問い合わせ内容は<br><?php print $msg; ?><br>ですね
		</p>
		-->
	</div>
</div>

</body>
</html>