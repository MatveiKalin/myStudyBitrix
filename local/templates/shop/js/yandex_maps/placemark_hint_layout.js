ymaps.ready(init);

function init () {
    var myMap = new ymaps.Map(
            "banner", /* ID элемента, где будет отрисовываться */
            {
                center: [59.935687, 30.327232],
                zoom: 15,
                controls: []
            }, 
            {
                searchControlProvider: 'yandex#search'
            }
        ),
        
        // Создание макета содержимого хинта.
        // Макет создается через фабрику макетов с помощью текстового шаблона.
        HintLayout = ymaps.templateLayoutFactory.createClass( "<div class='my-hint'>" +
            "<b>{{ properties.object }}</b><br />" +
            "{{ properties.address }}" +
            "</div>", {
                // Определяем метод getShape, который
                // будет возвращать размеры макета хинта.
                // Это необходимо для того, чтобы хинт автоматически
                // сдвигал позицию при выходе за пределы карты.
                getShape: function () {
                    var el = this.getElement(),
                        result = null;
                    if (el) {
                        var firstChild = el.firstChild;
                        result = new ymaps.shape.Rectangle(
                            new ymaps.geometry.pixel.Rectangle([
                                [0, 0],
                                [firstChild.offsetWidth, firstChild.offsetHeight]
                            ])
                        );
                    }
                    return result;
                }
            }
        );

    var myPlacemark = new ymaps.Placemark([59.935687, 30.327232], {
        address: "г.Санкт-Петербург, набережная канала Грибоедова, 16",
        object: 'ООО "Магзик"'
    }, {
        hintLayout: HintLayout
    });

    myMap.geoObjects.add(myPlacemark);
    
     myMap.behaviors
        // Отключаем часть включенных по умолчанию поведений:
        //  - drag - перемещение карты при нажатой левой кнопки мыши;
        //  - magnifier.rightButton - увеличение области, выделенной правой кнопкой мыши.
        .disable(['drag', 'rightMouseButtonMagnifier', 'scrollZoom']);
}