<?php require_once './connect.php'?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='template/style.css'>
    <title>Список товаров</title>
</head>
<body>
<div class="wrapper">
    <header>
        <div class='container header'>
            <ul class="clearfix">
                <li class="left"><a href="index.php" class="">Главная</a></li>
                <li class="right"><a href="faker.php" class="">Faker</a></li>
                <li class="right"><a href="" class="active">Список товаров</a></li>
            </ul>
        </div>
    </header>
    <main class="main">
        <h1>Список товаров из базы данных</h1>
        <div class="product_table"></div>
        <button type="submit" id="button">Нажать</button>
    </main>
</div>


<footer></footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="application/javascript" src="template/main.js"></script>
</body>
</html>
