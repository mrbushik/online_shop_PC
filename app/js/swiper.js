const catalog = document.querySelector(".catalog-container");
const catalog_items = document.querySelectorAll(".catalog-item");
const catalog_list = document.querySelector(".catalog-list");
catalog.classList.add("swiper");
catalog.classList.add("mySwiper");
catalog_list.classList.add("swiper-wrapper");
catalog_items.forEach(element => {
    element.classList.add("swiper-slide")
});

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 30,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    
  });

  $(".header__menu-btn").on("click", function(){
    $(".header__menu ul").slideToggle();
 });
 $(function(){
  $(".product-slider__inner").slick({
    dots: true,
    arrows: false,
     slidesToShow: 1,
     slidesToScroll: 1
 });
  var mixer = mixitup('.watch-container');
  
});