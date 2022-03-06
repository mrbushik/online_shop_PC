<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <style>
        .info__img {
    width: 400px;
    margin: 100px auto 20px;
    font-size: 24px;
}
.info__text{
    color: #1d36b4;
    font-size: 18px;
}
.form__img{
    margin: 52px auto;
width: 253px;
}
.file{
    margin-bottom: 20px;
}
    </style>
<?php
if(isset($_POST['submit']) and $_FILES){
        move_uploaded_file($_FILES['file']['tmp_name'], "uploades/".$_FILES['file']['name']);
        echo "загруженно успешно";
} else echo "";

?>
<div class="info__img">
    <p>Загрузите нужное изображение</p>
<p class="info__text">после загрузки обязательно впишите полное название изображения
     с расширением и нажмите добавить товар</p>
</div>
<div class="form__img">
<form method="post" action="" enctype="multipart/form-data">
<input class='file' type="file" name="file"><br>
<input type="submit" name="submit" value="Загрузить">
</form>
</div>

</body>
</html>