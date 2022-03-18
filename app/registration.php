<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header class="header"></header>
  <div class="reg__inner">
  	<h2 class="title">Регистрация</h2>
  
	
  <form class="header__info-form reg" method="post" action="registration.php">
  	<?php include('errors.php'); ?>
		  <div class="input-group">
  	  <label >Имя</label>
  	  <input class="imput__name" type="text" name="username" value="<?php echo $username; ?>">
  	      </div>
  	<div class="input-group">
  	  <label >Email</label>
  	  <input class="imput__email" type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label >Пароль</label>
  	  <input class="imput__pass" type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Повторите пароль</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button class="form__btn" type="submit" class="registration-btn"  name="reg_user">Зарегестрироваться</button>
  	</div>
  	<p>
  		Уже зарегестрированны? <a href="login.php" class="header__info-link">Войти</a>
  	</p>
  </form>
  </div>
</div>
</header>
</body>
</html>