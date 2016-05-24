ymaps.ready(init);
        
function init() {
    var myMap = new ymaps.Map('map', {
            center: [58.021782, 56.169313],
            zoom: 16,
            controls: [],
            
        }),
        myPlacemark = new ymaps.Placemark([58.021782, 56.165313], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Это красивая метка'
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: img.url + 'marker.png',
            // Размеры метки.
            iconImageSize: [62, 82],
            iconImageOffset: [-31, -80]            
        }); 
    
    myMap.behaviors.disable('scrollZoom');
    myMap.geoObjects.add(myPlacemark);
}