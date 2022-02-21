<?php 
// 現在時刻を表示しよう
// date_default_timezone_set('Asia/Tokyo');
// echo date('G時　i分　s秒');

// オブジェクトで日付を扱おう
// $today = new DateTime();
//  $today->setTimezone(new DateTimeZone('Asia/Tokyo'));
// echo '現在は' . $today->format('G時 i分 s秒') . 'です'

//  while構文
// while ($i < 100):
//     $i = $i + 1;
//     echo $i . '<br>';
// endwhile;

// // for構文
// for($i = 0; $i < 100; $i++ ):
//     echo $i . '<br>';
// endfor;

// 一年後までのカレンダーを作ってみよう

// まずは今日の日付を出力してみよう
// ①timezoneを日本に合わせて
date_default_timezone_set('Asia/Tokyo');
// ②strtotime()を使い何日後、何ヶ月後かの時間を取得できる。指定した時間を取得できる
// '+1 day'を使うことで1日後を取得できる
// ③date()functionを使うことにより本日の日付を取得できる第一引数に'n/j(D)'を指定することにより日付の出し方を指定できる
// 第二引数でどの日付でも取得できる

        // $time = strtotime('+1 day');
        // $day = date('n/j(D)', $time);
        // echo $day . '<br>';

// 上記の処理を繰り返せば、カレンダーが作れそう、、、for構文を使う

 for($i=0; $i<366; $i++):
        $time = strtotime('+' . $i . 'day');
        $day = date('n/j(D)', $time);
        echo $day . '<br>';
 endfor;
?>

