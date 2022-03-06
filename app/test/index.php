<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
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
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="../css/style.min.css">
</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #395240;
        color: #fff;
    }

    td {
        background: #D3EBDA;
    }
    .orientation{
    text-align: center;
display: flex;
justify-content: center;
margin-bottom: 50px;
}
a{
    text-decoration: none;
}
.nav_out{
    color: #fff;
}
.rename{
    color: #7E829E;
}
delete{
color:#57231E;
}
.orientation__add{
    text-align: center;
display: inline;
justify-content: center;
margin-bottom: 50px;
}
.btn__product{
    margin-bottom: 20px;
width: 124px;
height: 40px;
background-color: black;
color: #fff;
border-radius: 10%;
margin: 25px auto;
}
.out__tosite{
    color: antiquewhite;
}
.product{
    max-width: 600px;
margin: 0 auto;
}
.img__upload{
    color: red;
    margin-left: 10px;
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
    
</
<div class="orientation">
    <table class="product">
        <!-- !!!! Если надо будет Меню того что редачим -->
        <!-- <tr>
            <th>Номер</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Цена</th>
        </tr> -->

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
                    <tr>
                        <td><?= $product[1] ?></td>
                        <td><?= $product[3] ?></td>
                        <td><?= $product[2] ?>BYN</td>
                        <td><?= $product[4] ?></td>
                        <td><a   class="rename"href="update.php?id=<?= $product[0] ?>">Изменить</a></td>
                        <td><a class="delete" style="color: #57231E;" href="vendor/delete.php?id=<?= $product[0] ?>">Удалить</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    </div>
    <!-- !!!Добавление нового продукта -->
    <div class="orientation__add">
    <h3>Добавление продукта</h3>
    <form action="vendor/create.php" method="post">
        <p>Название</p>
        <input type="text" name="title">
        <p>Описание</p>
        <textarea name="description"></textarea>
        <p>Цена</p>
        <input type="номер" name="price"> <br> <br>
        <p>Полное название картинки с расширением</p>
        <input  name="file"><br>
       <p>для загрузки самой картинки нажмите<a   class ='img__upload'href='img.php'> сюда</a></p> 
        <button  class="btn__product" type="submit">Добавить новый продукт</button>
    </form>
    
    </div>
</body>
</html>