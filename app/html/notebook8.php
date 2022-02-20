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
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleleapis.com/css?family=Roboto:500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/libs.min.css">
    <link rel="stylesheet" href="../css/style.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<header class="header">
        <div class="container">
            <div class="header-iner">
                <div class="header-logotip">
                    <a href="../index.php" class="header-logo"><span class="header-logo-strong">пк</span>мастер</a>
                </div>
                <div class="header-menu">
                    <ul>
                    <li class="header-list">
                            <a class="header-link" href="pay.php">оплата</a>
                        </li>
                        <li class="header-list">
                            <a class="header-link" href="map.php">самовывоз</a>
                        </li>
                        <li class="header-list">
                            <a class="header-link" href="contact.php">контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <section class="info">
        <div class="container">
            <div class="info__container-flex">
                <div class="info-retangle"></div>
                <div class="info-flex">
                    <div class="info-menu">
                    <div class="info-registration"><p class="registration-link" href="registration.html"> <?php  if (isset($_SESSION['username'])) : ?>
    	<p><?php echo $_SESSION['username']; ?></p>
    	<p> <a class="info__menu-btn" href="../index.php?logout='1'">Выйти</a> </p>
    <?php endif ?>    
                    </div>
                        <div class="info-rectangle">
                            <div class="info-elemensts">
                                <div class="row-container">
                                    <div class="header-row"></div>
                                    <div class="header-row"></div>
                                    <div class="header-row"></div>
                                </div>
                                <div class="info-title _anim-items">В наличии</div>
                            </div>
                        </div>
                    </div>
                    <div class="info-list-rectangle">
                    <ul class="info-list">
                        <!-- <li class="info-list-marker">
                            <a class="info-menu" href="#watch"><div class="info-menu-text">Часы</div></a>
                        </li>
             -->
                        <li class="info-list-marker">
                            <a class="info-menu" href=" main_noterbook.php">Ноутбуки</a>
                        </li>
                        <li class="info-list-marker">
                            <a class="info-menu" href="main_headphones.php">Наушники</a>
                        </li>
                        <li class="info-list-marker">
                            <a class="info-menu" href="main_pc.php">Системные блоки</a>
                        </li>
                        <li class="info-list-marker">
                            <a class="info-menu" href="main_others.php">Прочее</a>
                        </li>
                        <li class="info-list-marker">
                            <a class="info-menu" href="../test/test.php">Полный список товаров</a>
                        </li>
                    </ul>
                </div>
                <nav class="header__menu">
                    <div class="header__menu-btn">
                      <div class="drop-row"></div>
                      <div class="drop-row"></div>
                      <div class="drop-row"></div>          
                    <div class="header__drop-menu">
                    <ul>
                        <li class="reg__ingo-drop"><p class="registration-link" href="registration.html"> <?php  if (isset($_SESSION['username'])) : ?>
    	<p class="info__menu-name">Здравствуйте<strong class="info__menu-user"><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a class="info__menu-btn  info__menu-btn--red" href="index.php?logout='1'">Выйти</a> </p>
    <?php endif ?> </li>
                        <!-- <li><a>Часы</a></li> -->
      
                        <li><a href=" main_noterbook.php">Ноутбуки</a></li>
                        <li><a href="main_headphones.php">Наушники</a></li>
                        <li><a href="main_pc.php">Системные блоки</a></li>
                        <li><a href="main_others.php">Прочее</a></li>
                        <li><a href="../test/test.php">Полное наличие</a></li>
                    </ul>
                                <div class="header__nav-drop">
                                    <ul>
                                    <li><a href="pay.php">Оплата</a></li>
                                        <li><a href="map.php">Самовывоз</a></li>
                                        <li><a href="contact.php">Контакты</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="product__title">HP Pavilion Gaming</div>
            <div class="product__container">
                <div class="pdoduct__img">
                    <img src="../img/produkt/notebook5.jpg">
                </div>
                <div class="function__list">
                    <ul>
                        <li>Основные характеристики</li>
                        <li>  Экран:  15.6 " 1920x1080 p, IPS 144 Гц</li>
                        <li>Процессор:  AMD Ryzen 5 4600H 6 -ядерный, 3.0 ГГц - 4.0 ГГц, Renoir</li>
                        <li>Видеокарта:  Дискретная NVIDIA GeForce GTX 1650Ti 4 ГБ </li>
                        <li>Память:  ОЗУ 8 ГБ DDR4 , SSD 512 ГБ</li>
                    </ul>
                </div>
            </div>
            <div class="price">Цена 2815 BYN</div>
        </div>
    </section>
    <footer class="footer">
        <div class="footer__content">
          <div class="container">
            <div class="footer__inner">
                <a name="contacts"></a>
              <div class="footer__col">
                <div class="footer__col-title">
                  Контакты 
                </div>
                <div class="footer__col-text _anim-items">Офис находится по адрессу Великая Ольшанка 7а.</div>
                  <div class="footer__info _anim-items">Контактный номер</div>
                  <a class="footer__info footer__info-phone _anim-items" href="tel:375298855398">+375 29 8855398</a>
              </div>
              <a name="pay"></a>
              <div class="footer__col fooler__col-menu">
                <div class="footer__col-title">
                  Оплата 
                </div>
                <div class="footer__col-text _anim-items">К вниманию клиентов оплата принимается только наличными, к сожалению в пункте выдачи
                     по адрессу Великая Ольшанка 7а оплата картой недоступна</div>
              </div>
              <a name="dostavka"></a>
              <div class="footer__col fooler__col-menu">
                <div class="footer__col-title">
                  Самовывоз
                </div>
                <div class="footer__col-text _anim-items">Самовывоз производится только по следующим датам</div>
                <ul class="footer__col-list _anim-items">
                  <li class=" _anim-items">Понедельник- Пятница 10-19</li>
                  <li class=" _anim-items">Суббота 10-17</li>
                
                </ul>
              </div>
            </div>
          </div>
          <div class="footer__copy">
            <div class="container">
              <div class="footer__copy-text">
                ИП Болбат Александр Борисович
              </div>
            </div>
          </div>
        </div>
      </footer>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="../js/btn.js"></script>
      <script src="../js/sort.js"></script>
</body>
</html>