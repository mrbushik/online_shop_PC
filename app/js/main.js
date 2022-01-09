// var mixer = mixitup('.watch-container');
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
    slidesPerView: 1,
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
//  const animItems = document.querySelectorAll('._anim-items');

//  if (animItems.length > 0){
//    window.addEventListener('scroll', animOnScroll);
//    function animOnScroll(params){
//    for (let index = 0; index < animItems.length; index++) {
//      const animItem = animItems[index];
//      const animItemHeight = animItem.offsetHeight;
//      const animItemsOffset = offset(animItem).top;
//      const animStart = 4;

//      let animItemPoint = window.innerHeight - animItemHeight / animStart;
//      if (window.innerHeight > window.innerHeight) {
//       animItemPoint = window.innerHeight - animItemHeight / animStart;
//      }
//      if((pageYOffSet > animItemsOffset - animItemPoint) && pageYOffSet < (animItemsOffset + animItemHeight)){
//        animItem.classList.add('_active');
//      }
//      else{
//        animItem.classList.remove('_active');
//      }
//    }
//   }

//  //нахождение высоты 
//  function pffset(el){
//    const rect = el.getBoundingClientRect(),
//    scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
//    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
//    return {top: rect.top + scrollTop, left: rect.left + scrollLeft}
//  }
//  animOnScroll();
// }

