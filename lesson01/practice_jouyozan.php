<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>剰余算について</title>
</head>
<body>
    <table>
        <?php for ($i = 1; $i <= 10; $i ++): ?>
            <?php if ($i %  2 === 1): ?>
        <tr style="background-color: #ccc">
            <?php else: ?>
                <tr>
            <?php endif; ?>
            <td><?php echo $i; ?> 行目</td>
            <td>abc</td>
        </tr>
        <?php endfor; ?>
    </table>
</body>
</html>

