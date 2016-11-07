<?php
//DBへの接続
//定数で必要情報を保存
define('DSN','mysql:dbname=bbs;host=localhost');
define('USR','root');
define('PASSWD','@Pass2222');

//例外処理（DBに接続できなかったときにエラーメッセージを出す）

try{
$dbh = new PDO(DSN,USR,PASSWD);
//DBの文字コード指定
$dbh->query('SET NAMES utf8 ');

}catch(PDOException $e){
echo '接続エラー<br>';
echo $e->getMessage();

}




