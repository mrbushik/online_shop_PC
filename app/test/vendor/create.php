<?php
require_once '../config/connect.php';
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$img = $_POST['file'];
// $img = $_FILES['file']['name'];


mysqli_query($connect, query:"INSERT INTO `products` (`id`, `title`, `price`, `description`, `img` ) VALUES (NULL, '$title', '$price', '$description', '$img')");
header('location: ../index.php');