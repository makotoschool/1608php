<?php
//祝日取得
function holiday($year){
$api_key = 'AIzaSyBUOPS7rStSbU2TaFn-wsX7q9CTb7NdSKk';
$holidays = array();

//カレンダーID
$calendar_id=urlencode('japanese__ja@holiday.calendar.google.com');
// 取得期間
$start  = date($year."-01-01\T00:00:00\Z");
$finish = date($year."-12-31\T00:00:00\Z");  
$url = "https://www.googleapis.com/calendar/v3/calendars/{$calendar_id}/events?key={$api_key}&timeMin={$start}&timeMax={$finish}&maxResults=50&orderBy=startTime&singleEvents=true";
if ($results = file_get_contents($url, true)) {
        // JSON形式で取得した情報を配列に格納
        $results = json_decode($results);
        // 年月日をキー、祝日名を配列に格納
        foreach ($results->items as $item) {
            $date = strtotime((string) $item->start->date);
            $title = (string) $item->summary;
            $holidays[date('Y-m-d', $date)] = $title;
        }

        // 祝日の配列を並び替え
        ksort($holidays);
    }
return $holidays;
}