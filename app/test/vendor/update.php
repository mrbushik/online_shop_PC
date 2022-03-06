<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once '../config/connect.php';
$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

mysqli_query($connect, query:"UPDATE `products` SET `title` = '$title', `price` = '$price', `description`,  = '$description' WHERE `products`.`id` = '$id'");
header('location: ../index.php');