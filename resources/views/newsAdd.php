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
    <h1>Добавить новость</h1>
    <form action="#">
        <label for="title">заголовок:</label>
        <input type="text" id="title"><br>
        <label for="shortText">краткое содержание:</label>
        <input type="text" id="shortText"><br>
        <label for="longText">полное содержание:</label>
        <input type="text" id="longText"><br>
        <input type="submit" value="Добавить новость">
    </form>
</body>
</html>