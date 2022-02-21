<?php
$value = '変数に保存した値です';
setcookie('message', 'Cookieに保存した値です', time() + 60 * 60 * 24 * 14);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKIE</title>
</head>
<body>
    <a href="page02.php">
        ２ぺーじめへ
    </a>
</body>
</html>