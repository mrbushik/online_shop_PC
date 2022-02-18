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
    <button class="watch-filter" type="button" data-filter=".watch">До 100 BYN</button>
    <button class="watch-filter" type="button" data-filter=".phone">С шумоподавлением</button>
    <button class="watch-filter" type="button" data-filter=".airpods">Безупречный звук</button>
    <button class="watch-filter" type="button" data-filter=".notebook">Вкладыши</button>
</div>
<div class="watch-container">
    <a name="watch"></a>
    <!-- часы -->
    <div class="watch-item mix watch " data-order="1">
        <a name="watch"></a>
        <img class="watch-img img__main-product" src="../img/hear1.jpg">
        <div class="rec-imformation">Panasonic <br>RB-HF520BGEK
</div>
        <div class="rec-price">109 BYN</div>
        <a class="rec-buy" href="html/watch1.php">Купить</a>
    </div>
    <div class="watch-item mix watch" data-order="2">
    <img class="watch-img img__main-product" src="../img/hear2.jpg">
        <div class="rec-imformation">  JBL Tune 510BT (розовый)</div>
        <div class="rec-price">79 BYN</div>
        <a class="rec-buy" href="html/watch2.php">Купить</a>
    </div>
    <div class="watch-item mix " data-order="3">
    <img class="watch-img img__main-product" src="../img/hear3.jpg">
        <div class="rec-imformation">  JBL Tune 500BT (синий)
 </div>
        <div class="rec-price">109 BYN</div>
        <a class="rec-buy" href="html/watch3.php">Купить</a>
    </div>
    <div class="watch-item mix watch" data-order="4">
    <img class="watch-img img__main-product" src="../img/hear4.jpg">
        <div class="rec-imformation">Sony WH-CH510 (белый)</div>
        <div class="rec-price">99 BYN</div>
        <a class="rec-buy" href="html/watch4.php">Купить</a>
    </div>
    <!-- телефоны -->
  
    <div class="watch-item mix " data-order="5">
    <img class="watch-img img__main-product" src="../img/hear5.jpg">
        <div class="rec-imformation"> JBL Tune 710BT (черный)

</div>
        <div class="rec-price">130 BYN</div>
        <a class="rec-buy" href="html/iphine1.php">Купить</a>
    </div>
    <div class="watch-item mix phone airpods" data-order="6">
    <img class="watch-img img__main-product" src="../img/hear6.jpg">
        <div class="rec-imformation"> Marshall Major IV</div>
        <div class="rec-price">350 BYN</div>
        <a class="rec-buy" href="html/iphone2.php">Купить</a>
    </div>
    <div class="watch-item mix watch" data-order="7">
    <img class="watch-img img__main-product" src="../img/hear7.jpg">
        <div class="rec-imformation">BL JR310BT (зеленый)</div>
        <div class="rec-price">89 BYN</div>
        <a class="rec-buy" href="html/iphone3.php">Купить</a>
    </div>
    <div class="watch-item mix watch" data-order="8">
    <img class="watch-img img__main-product" src="../img/hear8.jpg">
        <div class="rec-imformation">Sony WH-CH510 (синий)</div>
        <div class="rec-price">99 BYN</div>
        <a class="rec-buy" href="html/iphone4.php">Купить</a>
    </div>
   
    <!-- ноуты -->
    <div class="watch-item mix airpods notebook" data-order="9">
                <img class="rec-img" style="margin-left: 30%;" src="../img/rec4.png">
                <div class="rec-imformation">Apple AirPods 2</div>
                <div class="rec-price">490 BYN</div>
                <a class="rec-buy" href="html/product4.php">Купить</a>
            </div>
            <div class="watch-item mix phone airpods notebook" data-order="10">
                <img class="rec-img" src="../img/rec5.png">
                <div class="rec-imformation">Apple AirPods Pro</div>
                <div class="rec-price">790 BYN</div>
                <a class="rec-buy" href="html/product5.php">Купить</a>
            </div>
            <div class="watch-item mix phone airpods" data-order="11">
                <img class="rec-img" style="margin-left: 21%;" src="../img/rec6.png">
                <div class="rec-imformation">Apple AirPods Max</div>
                <div class="rec-price">1890 BYN</div>
                <a class="rec-buy" href="html/product6.php">Купить</a>
            </div>
            <div class="watch-item mix airpods notebook" data-order="12">
                <img class="rec-img" style="margin-left: 21%;" src="../img/Слой 31.png">
                <div class="rec-imformation">Apple AirPods 3</div>
                <div class="rec-price">690 BYN</div>
                <a class="rec-buy" href="html/product8.php">Купить</a>
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