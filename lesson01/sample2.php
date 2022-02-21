<?php
// 9時になったらメッセージを変えよう
// 営業時間内→ようこそ
// 営業時間外→営業時間外です
date_default_timezone_set('Asia/Tokyo');
$now = date('G'); 
$limit = 9;

if($now  < $limit):
    echo '営業時間外です';
else:
    echo 'ようこそ';
endif;