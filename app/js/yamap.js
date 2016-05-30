$('.contacts__content_region').on("change", function () {
    var active_center = $(this).val().split(",");
    var arr = [];
    active_center.forEach( function(item, i, active_center) {
        arr.push(parseFloat(item, 10));
    });

    var selected = $(this).find('option:selected');
    var active_marker =selected.data('marker').split(",");
    console.log(active_marker);

    var arr_marker = [];
    active_marker.forEach( function(item, i, active_marker) {
        arr_marker.push(parseFloat(item, 10));
    });

    $('#map').empty();
    init1(arr, arr_marker);

});

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
        
function init1(center , marker) {
        var myMap = new ymaps.Map('map', {
            center: center,
            zoom: 16,
            controls: [],            
        }),
        myPlacemark = new ymaps.Placemark( marker, {
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