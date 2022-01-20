<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="css/style.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.min.css">
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header-iner">
            <div class="header-logotip">
                <a class="header-logo"><span class="header-logo-strong">пк</span>мастер</a>
            </div>
        </div>
    </div>
</header>
  <div class="login">
  <div  style="height: 385px; width: 332px;"class="log_container">
  	<h2 style="padding: 10px 0 0 0;color: #2E0C69">Регистрация</h2>	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Имя</label>
  	  <input type="text" name="username" placeholder="Введите имя" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Почта</label>
  	  <input type="email" name="email"placeholder="Введите почту" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Пароль</label>
  	  <input type="password" name="password_1"placeholder=" Ваш пароль">
  	</div>
  	<div class="input-group">
  	  <label>Повторите пароль</label>
  	  <input type="password" name="password_2" placeholder="Повторите пароль">
  	</div>
  	<div class="input-group">
  	  <button style="  background-color: #5A26B5;border: none;color: #fff;padding: 10px 15px;border-radius: 5%"; type="submit" class="btn" name="reg_user">Зарегестрироваться</button>
  	</div>
  	<p style="color: #2E0C69">
  		Уже зарегестрированны? <a style="color: #fff" href="login.php">Авторизация</a>
  	</p>
  </form>
  </div>
  </div>
</body>
</html>