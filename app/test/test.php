<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'config/connect.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
    <link rel="stylesheet" type="text/css" href="../css/style.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
      .print {
    margin-left: 50%;
    margin-top: 20px;
    border-radius: 5%;
}
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
    @media print{
        body{
            visibility: hidden;
        }
        .print{
            visibility: visible;
        }
    }
    .out__link{
        text-decoration: none;
        padding-botton: 20px;
color: #111;
font-size: 18px;
position: absolute;
margin-left: 3%;
    }
    .product__table{
        margin: 0 auto;
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
                <ul>
                    <li class="header-list">
                        <a class="header-link" href="../html/pay.php">оплата</a>
                    </li>
                    <li class="header-list">
                        <a class="header-link" href="../html/map.php">самовывоз</a>
                    </li>
                    <li class="header-list">
                        <a class="header-link" href="../html/contact.php">контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
</header>
   
    <table class="product__table">
        <tr>
            <th>номер</th>
            <th>название</th>
            <th>описание</th>
            <th>цена</th>
        </tr>
<div class="list">полный список товара!</div>
<div class="list__info">При самовывозе назовите номер товара мастеру</div>
<button  calss="print" onclick="javascrypt:window.print()">печать</button>  
 <?php

            /*
             * Делаем выборку всех строк из таблицы "products"
             */

            $products = mysqli_query($connect, "SELECT * FROM `products`");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $products = mysqli_fetch_all($products);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - title
             * Ключ 2 - price
             * Ключ 3 - description
             */

            foreach ($products as $product) {
                ?>
                    <tr class='print'>
                        <td><?= $product[0] ?></td>
                        <td><?= $product[1] ?></td>
                        <td><?= $product[3] ?></td>
                        <td><?= $product[2] ?>BYN</td>
                    </tr>
                <?php
            }
        ?>
    </table>