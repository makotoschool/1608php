<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
print_r($_POST['msg']);

$dbh=new PDO();


}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="style.css">
<title>db投稿検証</title>
</head>
<body>
<form action="index.php" method="post">
	<input type="text" name="msg">
	<input type="submit">


</from>
</body>
</html>