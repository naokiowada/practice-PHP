<!-- 配列 -->
<?php 
// 曜日を日本語にしてみるdate()関数は日本語表記に対応していない
$week_name = ['日','月','火','水','木','金','土'];
echo $week_name . '<br>';

date_default_timezone_set('Asia/Tokyo');
$week = date('w');// date('w')と指定し、曜日を数値として、0,1,2,3,4,5,6,で取得できる
echo $week_name[$week];

?>