<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    
$name=htmlspecialchars($_POST['name'],ENT_QUOTES);
$email=htmlspecialchars($_POST['email'],ENT_QUOTES);    
$msg=htmlspecialchars($_POST['msg'],ENT_QUOTES);    
   
   
}else{
    echo 'このファイルへの直接アクセスは禁止されています。';
    exit;
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>三項演算子練習</title>
<link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="content">
        <h1>送信内容チェック</h1>
        <h2>あなたのお名前</h2>
        <p><?php echo $name!=''?$name:'入力されていません';?></p>
        <h2>あなたのメールアドレス</h2>
        <p><?php echo $email!=''?$email:'入力されていません';?></p>
        <h2>あなたのメッセージ</h2>
        <p><?php echo $msg!=''?$msg:'入力されていません';?></p>
        <form action="" method="post">
            <button type="button" onclick="history.back()">戻る</button>
			<?php if($name!='' && $email!='' && $msg!=''):?>
				<input type="submit" value="送信する">
			<?php endif; ?>



        </form>
    </div>
</div>


</body>
</html>