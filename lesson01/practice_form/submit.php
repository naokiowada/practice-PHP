<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice-form</title>
</head>
<body>
    <?php if(empty($_REQUEST['my_name'])):
    echo 'お名前が入力されていません。';
    endif;    
    ?>
    <p>お名前: <?php echo htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES);?></p>
</body>
</html>