<?php
$url="https://www.googleapis.com/youtube/v3/videos?id=DBlPgmqQNlg&key=AIzaSyA-3pfk9UDRiwDCQhdyr_7Sf9ThXdWJ3p0&fields=items(id,snippet(channelTitle,title,thumbnails),statistics)&part=snippet,contentDetails,statistics";
$data=json_decode(file_get_contents($url));
echo '<pre>';
print_r($data);
echo '</pre>';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="style.css">
<title>youtubeApi実験</title>
</head>
<body>
<?php 
foreach($data->items as $row){

echo $row->snippet->title;
echo '<img src="'.$row->snippet->thumbnails->standard->url.'">';


}

?>



</body>
</html>