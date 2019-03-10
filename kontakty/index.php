<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle("Контакты");

    // Использовать пространство имен для использования класса "Asset"
    use Bitrix\Main\Page\Asset;
?>

<?  
    // Подключение API Яндекс карт
    // Укажите свой API-ключ. Тестовый ключ НЕ БУДЕТ работать на других сайтах.
    // Получить ключ можно в Кабинете разработчика: https://developer.tech.yandex.ru/keys/
    Asset::getInstance()->addJs("https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<ваш API-ключ>"); 

    // Подключение самого скрипта
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/yandex_maps/placemark_hint_layout.js"); 

    
    // Подключение стилей для карты
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/yandex_maps/my-hint.css");
?>

<div id="map"></div>

<!-- Banner -->
<section id="banner">
    <header>
        <h2>Адрес: <em>г.Санкт-Петербург, набережная канала Грибоедова, 16</em></h2>
        <a href="#footer" class="button">Написать сообщение</a>
    </header>
</section>

<!-- Posts -->
<section class="wrapper style1">
    <div class="container">
        <div class="row">
            <section class="col-6 col-12-narrower">
                <div class="box post">
                    <h3>Контакты</h3>
                    
                    <p>
                        г.Санкт-Петербург, набережная канала Грибоедова, 16
                        
                        <br />
                        
                        +7 812 345-67-89
                        
                        <br />
                        
                        <a href="mailto:manager@magazin.ru">manager@magazin.ru</a>
                    </p>
                    
                    <p>
                        Время работы: пн - пт с 10<sup>
                                                    <span style="text-decoration: underline;">00</span>
                                                </sup> 
                                            до 20<sup>
                                                    <span style="text-decoration: underline;">00</span>
                                                </sup> 
                    </p>
                </div>
            </section>
            
            <section class="col-6 col-12-narrower">
                <div class="box post">
                    <h3>ООО "Магзик"</h3>
                    <p>
                        ИНН 12312312312312 <br />
                        КПП 12333333123123 <br />
                        БИК 12312321 <br />
                        ОКПО 123123213 <br />
                        ОКАТО 123123123123 <br />
                    </p>
                </div>
            </section>
        </div>
    </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>