let center = [53.621447070907834, 23.81796749999991];

function init() {
  let map = new ymaps.Map('map', {
    center: center,
    zoom: 17
  });
  let placemark = new ymaps.Placemark(center, {}, {
    iconLayout: 'default#image',
    iconImageHref: 'https://cdn-icons-png.flaticon.com/512/684/684908.png',
    iconImageSize: [25, 25],
    iconImageOffset: [0, 0]
  });
  // map.controls.remove('geolocationControl'); // удаляем геолокацию
  map.controls.remove('searchControl'); // удаляем поиск
  map.controls.remove('trafficControl'); // удаляем контроль трафика
    // map.controls.remove('typeSelector'); // удаляем тип
    // map.controls.remove('fullscreenControl'); // удаляем кнопку перехода в полноэкранный режим
    // map.controls.remove('zoomControl'); // удаляем контрол зуммирования
  map.controls.remove('rulerControl'); // удаляем контрол правил
  map.behaviors.disable(['scrollZoom']); // отключаем скролл карты (опционально)
  map.geoObjects.add(placemark);
}

ymaps.ready(init);