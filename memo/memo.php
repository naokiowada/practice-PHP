<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メモ詳細</title>
</head>
<body>
    <?php
    require('dbconnect.php');
    $stmt = $db->prepare('select * from memos where id=?');
    if (!$stmt) {
        die($db->error);
    }
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    // $id = 1;
    $stmt->bind_param('i', $id);
    $stmt->execute();
    // queryを使ったときの値の取り出し方(fetch_assoc())とは違く、prepareの場合特殊になる。引数にはカラムの値が前から順番に割り当てられる。
    $stmt->bind_result($id, $memo, $created);
    $stmt->fetch();
    ?>

    <div><pre><?php echo htmlspecialchars($memo); ?></pre></div>

    <a href="update.php?id=<?php echo $id; ?>">編集する</a> | <a href="../memo">一覧へ</a>
</body>
</html>