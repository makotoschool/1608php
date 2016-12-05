<?php
require_once(__DIR__.'/lib/init.php');
$y = date('Y');
$m = date('n');

// 日付の指定がある場合
if(!empty($_GET['date'])){
$arr_date = explode('-', htmlspecialchars($_GET['date'], ENT_QUOTES));
    if(count($arr_date) == 2 and is_numeric($arr_date[0]) and is_numeric($arr_date[1])){
    $y = (int)$arr_date[0];
    $m = (int)$arr_date[1];
    }
}

$national_holiday=holiday($y);
$start_week = date("N", mktime(0, 0, 0,$m,1,$y));//mktimeで曜日を取得 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="./css/main.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="./js/main.js"></script>
<title>carender</title>
</head>
<body>
    <div class="container">
        <div class="order_calendar">
        <table class="head">
            <tr>
            <td><a href="./?date=<?php echo date('Y-m', strtotime($y .'-' . $m . ' -1 month')); ?>">&lt; 前の月</a></td>
            <td><?php echo $y ?>年<?php echo $m ?>月</td>
            <td><a href="./?date=<?php echo date('Y-m', strtotime($y .'-' . $m . ' +1 month')); ?>">次の月 &gt;</a></td>
            </tr>
        </table>    
        <table id="calendar" class="body">
            <tr>

            <th>月</th>
            <th>火</th>
            <th>水</th>
            <th>木</th>
            <th>金</th>
            <th>土</th>
            <th>日</th>
            </tr>
            <tr>
        
        <?php
            if ($start_week != 1){//月曜始まりでなければ空セル挿入
                for($i=2 ; $i<=$start_week ; $i++){
                echo '<td class="no-day"> </td>';
                $fold++;
                }
            }
            for ($day = 1; checkdate($m, $day, $y); $day++ ){//checkdate関数で
                
                if(!empty($national_holiday[date("Y-m-d", mktime(0, 0, 0, $m, $day, $y))])){
                    echo '<td class="n-holiday">'.$day.'<span class="h-name">'.$national_holiday[date("Y-m-d", mktime(0, 0, 0, $m, $day, $y))].'</span></td>';
                    }else{
                    echo '<td class="day">'.$day.'</td>';//日付が存在しなくなるまでforで回す  
                    }
                
                $fold++;
                if ($fold ==7){
                echo "</tr><tr>";//<tr>挿入で折り返し
                $fold =0;//折り返しカウンタリセット
                }
            }
            if ($fold!=0){//日曜終りでなければ空セル挿入
                while ($fold<7){
                echo '<td class="no-day"> </td>';
                $fold++; 
                } 
            }
        ?>
        </tr>
        </table>
        <button id="go">選択日確認</button>
        </div>
</div>
</body>
</html>