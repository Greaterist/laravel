<?php include_once "menu.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>NEWS</h1>
    <?php foreach ($news as $item): ?>
        <a href="<?=route('newsOne', $item['id'])?>"><?=$item['title']?></a><br>
    <?php endforeach; ?>
</body>
</html>