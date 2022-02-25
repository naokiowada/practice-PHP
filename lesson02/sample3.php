<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $db = new mysqli('localhost:8889', 'root', 'root', 'mydb');
        $message = "フォームから入力した値";
        $rt = $db->query('insert into memos(memo) values ("PHPからのメモです")');
        if ($rt) {
            echo 'データを挿入しました';
        } else {
            echo $db->error;
        }
    ?>
</body>
</html>