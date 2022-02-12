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
                    <div class="info-list-rectangle ">
                    <ul class="info-list">
                        <!-- <li class="info-list-marker">
                            <a class="info-menu" href="#watch"><div class="info-menu-text">Часы</div></a>
                        </li>
             -->
                        <li class="info-list-marker">
                            <a class="info-menu" href="#notebook">Ноутбуки</a>
                        </li>
                        <li class="info-list-marker">
                            <a class="info-menu" href="#airpods">Наушники</a>
                        </li>
                        <li class="info-list-marker">
                            <a class="info-menu" href="#pc">Системные блоки</a>
                        </li>
                        <li class="info-list-marker">
                            <a class="info-menu" href="#phone">Прочее</a>
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
      
                        <li><a>Ноутбуки</a></li>
                        <li><a>Наушники</a></li>
                        <li><a>Системные блоки</a></li>
                        <li><a>Прочее</a></li>
                        <li><a href='../test/test.php'>Полное наличие</a></li>
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
   <section class='filter'>
     <div class="container">
       <div class="clients__info">Уважаемые клиенты в этом разделе вы можете подобрать подходящий вам 
         товар выбрав нужный для вас параметр</div>
         <img class='bird__img' src="../img/bird.png">
<div class="filter__inner">
  <div class="filter__sort">

  </div>
  <div class="products__inner-btn filter__btn">
    <button class="watch-filter" type="button" data-filter="all">Все товары</button>
    <button class="watch-filter" type="button" data-filter=".watch">Дешевле 1500 BYN</button>
    <button class="watch-filter" type="button" data-filter=".phone">Для работы</button>
    <button class="watch-filter" type="button" data-filter=".airpods">Для сложных задач</button>
    <button class="watch-filter" type="button" data-filter=".notebook">Игровой</button>
</div>
<div class="watch-container">
    <a name="watch"></a>
    <!-- часы -->
    <div class="watch-item mix watch phone" data-order="1">
        <a name="watch"></a>
        <img class="watch-img img__main-product" src="../img/notebook1.jpg">
        <div class="rec-imformation">Asus Vivobook 14<br>X409FA-BV606
</div>
        <div class="rec-price">1255 BYN</div>
        <a class="rec-buy" href="html/watch1.php">Купить</a>
    </div>
    <div class="watch-item mix airpods notebook" data-order="2">
    <img class="watch-img img__main-product" src="../img/notebook2.jpg">
        <div class="rec-imformation"> Asus TUF Gaming F15</div>
        <div class="rec-price">2655 BYN</div>
        <a class="rec-buy" href="html/watch2.php">Купить</a>
    </div>
    <div class="watch-item mix watch phone" data-order="3">
    <img class="watch-img img__main-product" src="../img/notebook3.jpg">
        <div class="rec-imformation"> Lenovo IdeaPad 3 
<br>15ALC6 </div>
        <div class="rec-price">1497 BYN</div>
        <a class="rec-buy" href="html/watch3.php">Купить</a>
    </div>
    <div class="watch-item mix watch" data-order="4">
    <img class="watch-img img__main-product" src="../img/notebook4.jpg">
        <div class="rec-imformation">ASUS VivoBook<br>E410MA-BV1517</div>
        <div class="rec-price">955 BYN</div>
        <a class="rec-buy" href="html/watch4.php">Купить</a>
    </div>
    <!-- телефоны -->
  
    <div class="watch-item mix watch" data-order="5">
    <img class="watch-img img__main-product" src="../img/notebook5.jpg">
        <div class="rec-imformation">Haier U1520EM
</div>
        <div class="rec-price">808 BYN</div>
        <a class="rec-buy" href="html/iphine1.php">Купить</a>
    </div>
    <div class="watch-item mix category-new" data-order="6">
    <img class="watch-img img__main-product" src="../img/notebook6.jpg">
        <div class="rec-imformation">HP 15s-fq2051ur</div>
        <div class="rec-price">1597 BYN</div>
        <a class="rec-buy" href="html/iphone2.php">Купить</a>
    </div>
    <div class="watch-item mix phone" data-order="7">
    <img class="watch-img img__main-product" src="../img/notebook7.jpg">
        <div class="rec-imformation"> Honor MagicBook X14 NBR-WAI9</div>
        <div class="rec-price">1697 BYN</div>
        <a class="rec-buy" href="html/iphone3.php">Купить</a>
    </div>
    <div class="watch-item mix airpods notebook" data-order="8">
    <img class="watch-img img__main-product" src="../img/notebook8.jpg">
        <div class="rec-imformation">HP Pavilion Gaming 15-ec1040ur </div>
        <div class="rec-price">2815 BYN</div>
        <a class="rec-buy" href="html/iphone4.php">Купить</a>
    </div>
   
    <!-- ноуты -->
    <a name="notebook"></a>
    <div class="watch-item mix  phone" data-order="13">
        <img class="rec-img" src="../img/rec1.png">
        <div class="rec-imformation">Apple MacBook Air 13
            (розовый)</div>
        <div class="rec-price">2900 BYN</div>
        <a class="rec-buy" href="html/product1.php">Купить</a>
    </div>
    <div class="watch-item mix airpods" data-order="14">
        <img class="rec-img" src="../img/rec2.png">
        <div class="rec-imformation">Apple MacBook Pro13
            (серебристый)</div>
        <div class="rec-price">3700 BYN</div>
        <a class="rec-buy" href="html/product2.php">Купить</a>
    </div>
    <div class="watch-item mix phone" data-order="15">
        <img class="rec-img" src="../img/rec3.png">
        <div class="rec-imformation">Apple MacBook Air 13
            (серебристый)</div>
        <div class="rec-price">2900 BYN</div>
        <a class="rec-buy" href="html/product3.php">Купить</a>
    </div>
    <div class="watch-item mix airpods" data-order="16">
        <img class="rec-img" src="../img/мак4.png">
        <div class="rec-imformation">Apple MacBook Pro 13
            (золотой)</div>
        <div class="rec-price">3700 BYN</div>
        <a class="rec-buy" href="html/product7.php">Купить</a>
    </div>
    <!-- start pc -->
  
</div>
</div>
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
      <script src="../js/mixitup.js"></script>`
      <script src="../js/btn.js"></script>
      <script src="../js/sort.js"></script>
      <script src="../js/swiper.js"></script>
     
</body>
</html>