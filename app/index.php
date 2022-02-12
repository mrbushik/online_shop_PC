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
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://fonts.googleleapis.com/css?family=Roboto:500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/libs.min.css">
    <link rel="stylesheet" href="./css/style.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<header class="header">
    <div class="container">
        <div class="header-iner">
            <div class="header-logotip">
                <a class="header-logo"><span class="header-logo-strong">пк</span>мастер</a>
            </div>
            <div class="header-menu">
                <ul>
                    <li class="header-list">
                        <a class="header-link" href="html/pay.php">оплата</a>
                    </li>
                    <li class="header-list">
                        <a class="header-link" href="html/map.php">самовывоз</a>
                    </li>
                    <li class="header-list">
                        <a class="header-link" href="html/contact.php">контакты</a>
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
    	<p> <a class="info__menu-btn" href="index.php?logout='1'">Выйти</a> </p>
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
                            <a class="info-menu" href=" html/main_noterbook.php">Ноутбуки</a>
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
                            <a class="info-menu" href="test/test.php">Полный список товаров</a>
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
      
                        <li><a href=" html/main_noterbook.php">Ноутбуки</a></li>
                        <li><a>Наушники</a></li>
                        <li><a>Системные блоки</a></li>
                        <li><a>Прочее</a></li>
                        <li><a href="test/test.php">Полное наличие</a></li>
                    </ul>
                    <div class="header__nav-drop">
                        <ul>
                            <li><a href="html/pay.php">Оплата</a></li>
                            <li><a href="html/map.php">Самовывоз</a></li>
                            <li><a href="html/contact.php">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
                  </nav>
                <div class="catalog-container">
                    <div class="catalog-list">
                        <div class="catalog-item">

                            <div class="slider__item-element">
                                <div class="slider__item"><img src="img/slider1_2.jpg">
                                    <!-- <div class="slider__item-title">Apple</div> -->
                                    <!-- <div class="slider-subtitle slide1">Большой выбор ноутбуков Apple</div> -->
                                    <!-- <div class="slider-price">от 2290 BYN</div>                            
                                    <a href="html/slider1.php" class="slider-buy">Купить</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="catalog-item">
                            <div class="slider__item-element">
                                <div class="slider__item"><img src="img/slider2_2.jpg">
                                    <!-- <div class="slider__item-title">Apple Watch</div>
                                    <div class="slider-subtitle">Series 5</div>
                                    <div class="slider-price">ОТ 890 BYN</div>
                                    <a href="html/slider2.php" class="slider-buy">Купить</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="catalog-item">
                            <div class="slider__item-element">
                                <!-- <div class="slider-subtitle" id="monster-beasts">Monster
                                    Beats</div>
                                <div class="slider-price" id="prise-monster-beats-slider">от 2290 BYN</div>
                                <a href="html/slader3.php" class="slider-buy" id="buy-slider">Купить</a> -->
                                <div class="slider__item"><img id="slider-img" src="img/slider3_2.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="recommemded-products">
    <div class="container">
        <div class="rec-title _anim-items">Рекомендуемые товары</div>
        <div class="rec-border">
        </div>
        <div class="recommemded-container">
            <div class="rec-item-container">
                <div class="rec-main-img"><img src="img/rec_main_produkt.png">
                    <div class="rec-main-title">IPhone X</div>
                    <div class="rec-main-price">ОТ 1099 BYN</div>
                    <form action="html/IphoneX.php">
                    <button class="rec-main-btn">Купить</button>
                    </form>
                </div>
            </div>
            <div class="rec-container">
                    <div class="rec-item">
                        <img class="rec-img" src="img/rec1.png">
                        <div class="rec-imformation">Apple MacBook Air 13
                            (розовый)</div>
                        <div class="rec-price">2900 BYN</div>
                        <a class="rec-buy" href="html/product1.php">Купить</a>
                    </div>     
                    <div class="rec-item">
                        <img class="rec-img" src="img/rec2.png">
                        <div class="rec-imformation">Apple MacBook Pro13
                            (серебристый)</div>
                        <div class="rec-price">3700 BYN</div>
                        <a class="rec-buy" href="html/product2.php">Купить</a>
                    </div>
                    <div class="rec-item">
                        <img class="rec-img" src="img/rec3.png">
                        <div class="rec-imformation">Apple MacBook Air 13
                            (серебристый)</div>
                        <div class="rec-price">2900 BYN</div>
                        <a class="rec-buy" href="html/product3.php">Купить</a>
                    </div>
                    <div class="rec-item">
                        <img class="rec-img" style="margin-left: 30%;" src="img/rec4.png">
                        <div class="rec-imformation">Apple AirPods 2</div>
                        <div class="rec-price">490 BYN</div>
                        <a class="rec-buy" href="html/product4.php">Купить</a>
                    </div>
                    <div class="rec-item">
                        <img class="rec-img" src="img/rec5.png">
                        <div class="rec-imformation">Apple AirPods Pro</div>
                        <div class="rec-price">790 BYN</div>
                        <a class="rec-buy" href="html/product5.php">Купить</a>
                    </div>
                    <div class="rec-item">
                        <img class="rec-img" style="margin-left: 28%;" src="img/rec6.png">
                        <div class="rec-imformation">Apple AirPods Max</div>
                        <div class="rec-price">1890 BYN</div>
                        <a class="rec-buy" href="html/product6.php">Купить</a>
                    </div> 
            </div>
        </div>
    </div>
</section>
<!-- new section -->
<section class="watch">
    <div class="container">
        <div class="rec-title">Каталог</div>
        <div class="rec-border">
        </div>
        <div class="products__inner-btn">
            <button class="watch-filter" type="button" data-filter="all">All</button>
            <button class="watch-filter" type="button" data-filter=".watch">Часы</button>
            <button class="watch-filter" type="button" data-filter=".phone">Телефоны</button>
            <button class="watch-filter" type="button" data-filter=".airpods">Наушники</button>
            <button class="watch-filter" type="button" data-filter=".notebook">Ноутбуки</button>
            <button class="watch-filter" type="button" data-filter=".system">Системные блоки</button>
        </div>
        <div class="watch-container">
            <a name="watch"></a>
            <!-- часы -->
            <div class="watch-item mix watch" data-order="1">
                <a name="watch"></a>
                <img class="watch-img" src="img/watchS3.png">
                <div class="rec-imformation">Apple Watch <br>Series 3</div>
                <div class="rec-price">790 BYN</div>
                <a class="rec-buy" href="html/watch1.php">Купить</a>
            </div>
            <div class="watch-item mix watch category-popular" data-order="2">
                <img class="watch-img" src="img/watchSE.png">
                <div class="rec-imformation">Apple Watch<br> Series SE</div>
                <div class="rec-price">1190 BYN</div>
                <a class="rec-buy" href="html/watch2.php">Купить</a>
            </div>
            <div class="watch-item mix watch" data-order="3">
                <img class="watch-img" src="img/watch7-1.png">
                <div class="rec-imformation">Apple Watch<br> Series 7</div>
                <div class="rec-price">1490 BYN</div>
                <a class="rec-buy" href="html/watch3.php">Купить</a>
            </div>
            <div class="watch-item mix watch" data-order="4">
                <img class="watch-img" src="img/watch7-2.png">
                <div class="rec-imformation">Apple Watch <br>Series 7</div>
                <div class="rec-price">1490 BYN</div>
                <a class="rec-buy" href="html/watch4.php">Купить</a>
            </div>
            <!-- телефоны -->
            <a name="phone"></a>
            <div class="watch-item mix phone category-popular" data-order="5">
                <img class="Iphone-img" src="img/IPhone11.png">
                <div class="rec-imformation">Apple IPhone 11</div>
                <div class="rec-price">1790 BYN</div>
                <a class="rec-buy" href="html/iphine1.php">Купить</a>
            </div>
            <div class="watch-item mix phone category-new" data-order="6">
                <img class="Iphone-img" src="img/IPhone12.png">
                <div class="rec-imformation">Applee IPhone 12</div>
                <div class="rec-price">2190 BYN</div>
                <a class="rec-buy" href="html/iphone2.php">Купить</a>
            </div>
            <div class="watch-item mix phone" data-order="7">
                <img class="Iphone-img" src="img/Iphone12mini.png">
                <div class="rec-imformation">Apple IPhone 12 mini</div>
                <div class="rec-price">1990 BYN</div>
                <a class="rec-buy" href="html/iphone3.php">Купить</a>
            </div>
            <div class="watch-item mix phone" data-order="8">
                <img class="Iphone-img" src="img/IPhoneSE.png">
                <div class="rec-imformation">Apple IPhone SE</div>
                <div class="rec-price">1390 BYN</div>
                <a class="rec-buy" href="html/iphone4.php">Купить</a>
            </div>
            <!-- Наушники -->
            <a name="airpods"></a>
            <div class="watch-item mix airpods" data-order="9">
                <img class="rec-img" style="margin-left: 30%;" src="img/rec4.png">
                <div class="rec-imformation">Apple AirPods 2</div>
                <div class="rec-price">490 BYN</div>
                <a class="rec-buy" href="html/product4.php">Купить</a>
            </div>
            <div class="watch-item mix airpods" data-order="10">
                <img class="rec-img" src="img/rec5.png">
                <div class="rec-imformation">Apple AirPods Pro</div>
                <div class="rec-price">790 BYN</div>
                <a class="rec-buy" href="html/product5.php">Купить</a>
            </div>
            <div class="watch-item mix airpods category-new" data-order="11">
                <img class="rec-img" style="margin-left: 21%;" src="img/rec6.png">
                <div class="rec-imformation">Apple AirPods Max</div>
                <div class="rec-price">1890 BYN</div>
                <a class="rec-buy" href="html/product6.php">Купить</a>
            </div>
            <div class="watch-item mix airpods" data-order="12">
                <img class="rec-img" style="margin-left: 21%;" src="img/Слой 31.png">
                <div class="rec-imformation">Apple AirPods 3</div>
                <div class="rec-price">690 BYN</div>
                <a class="rec-buy" href="html/product8.php">Купить</a>
            </div>
            <!-- ноуты -->
            <a name="notebook"></a>
            <div class="watch-item mix notebook" data-order="13">
                <img class="rec-img" src="img/rec1.png">
                <div class="rec-imformation">Apple MacBook Air 13
                    (розовый)</div>
                <div class="rec-price">2900 BYN</div>
                <a class="rec-buy" href="html/product1.php">Купить</a>
            </div>
            <div class="watch-item mix notebook" data-order="14">
                <img class="rec-img" src="img/rec2.png">
                <div class="rec-imformation">Apple MacBook Pro13
                    (серебристый)</div>
                <div class="rec-price">3700 BYN</div>
                <a class="rec-buy" href="html/product2.php">Купить</a>
            </div>
            <div class="watch-item mix notebook category-popular" data-order="15">
                <img class="rec-img" src="img/rec3.png">
                <div class="rec-imformation">Apple MacBook Air 13
                    (серебристый)</div>
                <div class="rec-price">2900 BYN</div>
                <a class="rec-buy" href="html/product3.php">Купить</a>
            </div>
            <div class="watch-item mix notebook category-new" data-order="16">
                <img class="rec-img" src="img/мак4.png">
                <div class="rec-imformation">Apple MacBook Pro 13
                    (золотой)</div>
                <div class="rec-price">3700 BYN</div>
                <a class="rec-buy" href="html/product7.php">Купить</a>
            </div>
            <!-- start pc -->
            <a name="pc"></a>
            <div class="watch-item mix system">
                <img class="rec-img" src="img/pc1.png">
                <div class="rec-imformation">Компьютер на базе AMD Ryzen 5 3600X</div>
                <div class="rec-price">2999 BYN</div>
                <a class="rec-buy" href="html/pc1.php">Купить</a>
            </div>
            <div class="watch-item mix system" data-order="18">
                <img class="rec-img" src="img/pc2.png">
                <div class="rec-imformation">Компьютер на базе AMD Ryzen 3 3200G </div>
                <div class="rec-price">1290 BYN</div>
                <a class="rec-buy" href="html/pc2.php">Купить</a>
            </div>
            <div class="watch-item mix system category-popular" data-order="19">
                <img class="rec-img" src="img/pc3.png">
                <div class="rec-imformation">Компьютер на базе Intel Core i5-9400F</div>
                <div class="rec-price">3590 BYN</div>
                <a class="rec-buy" href="html/pc3.php">Купить</a>
            </div>
            <div class="watch-item mix system category-new" data-order="20">
                <img class="rec-img" src="img/pc4.png">
                <div class="rec-imformation">Компьютер на базе Intel Core i7-9700</div>
                <div class="rec-price">1900 BYN</div>
                <a class="rec-buy" href="html/pc4.php">Купить</a>
            </div>
        </div>
            <div class="products__bottom-btn">
                <button type="button" data-filter=".category-new">Новинки</button>
                <button type="button" data-filter=".category-popular">Популярное</button>
            </div>
    </div>
</section>
<section class="repair">
    <div class="container">
    <div class="repair__item-title repair__item-unvisible">Так же мы предоставляем услуги ремонта ваших гаджетов</div>
    <div class="repair__inner">
        <div class="repair__item ">
            <img  class="repair__item-img" src="img/repair__img.jpg">
        </div>
        <div class="repair__item">
        <div class="repair__item-title repair__item-adaptive">Так же мы предоставляем услуги ремонта ваших гаджетов</div>
        <div class="repair__item-subtitle">У Вас сломался телефон? Пролили кофе на ноутбук? Мы знаем как вам помочь!</div>
        <div class="repair__item-rectangle"><a href="https://pcmaster-grodno1.000webhostapp.com" class="repair__item-link"> узнать подробности</a></div>
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
                    <div class="footer__col-text _anim-items">К вниманию клиентов оплата принимается только наличными, к
                        сожалению в пункте выдачи
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
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./js/mixitup.js"></script>
<script src="./js/sort.js"></script>
<script src="./js/main.js"></script>
</body>
</html>
</body>
</html>