<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once 'config/connect.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

    $product_id = $_GET['id'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$product_id'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $product = mysqli_fetch_assoc($product);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Изменение Товара</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="../css/style.min.css">
</head>
<style>
   .update__title{
    position: absolute;
    top: 0;
}
.update{
    display: flex;
    justify-content: center;
    margin-top: 20px;
} 
</style>
<body>
<header class="header">
    <div class="container">
        <div class="header-iner">
            <div class="header-logotip">
                <a class="header-logo" href="../index.php"><span class="header-logo-strong">пк</span>мастер</a>
            </div>
            <div class="header-menu">
            </div>
        </div>
    </div>
    
</header>
    <div class="update">
    <h3 class="update__title">Изменение товара</h3>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <p>Название</p>
        <input type="text" name="title" value="<?= $product['title'] ?>">
        <p>Описание</p>
        <textarea name="description"><?= $product['description'] ?></textarea>
        <p>Цена</p>
        <input type="number" name="price" value="<?= $product['price'] ?>"> <br> <br>
        <button type="submit">Изменить</button>
    </form>
    </div>
</body>
</html>