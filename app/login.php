<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="./css/style.min.css">
</head>
<body>
	<header class="header">
	<div class="login__inner">
  	<h2 class="title reg__title-name">Вход</h2>
  
	 
  <form class="header__info-form" method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label class='reg__form-name'>Имя</label>
  		<input type="text" name="username" class="input__name">
  	</div>
  	<div class="input-group">
  		<label class='reg__form-name'>Пароль</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="form__btn" name="login_user">Войти</button>
  	</div>
  	<p class='reg__info'>
  		Вы ещё не зарегестрированны? <a class="header__info-link" href="registration.php">Зарегестрироваться</a>
  	</p>
  </form>
</div>
</header>
</body>
</html>