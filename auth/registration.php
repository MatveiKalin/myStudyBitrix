<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?>

<!-- Main -->
<section class="wrapper style1">
    <div class="container">
        <div class="row gtr-200">
            <div class="col-8 col-12-narrower">
                <div id="content">

                    <!-- Content -->
                        <article>
                            <header>
                                <h2>Регистрация пользователя</h2>
                                <p>Введите логин и пароль, если забыли, восстановите. </p>
                            </header>
                            
                            <?
                                $APPLICATION->IncludeComponent(
                                    "bitrix:main.register", 
                                    "registration_custom_template", 
                                    Array(
                                        "AUTH" => "Y",	// Автоматически авторизовать пользователей
                                        "REQUIRED_FIELDS" => "",	// Поля, обязательные для заполнения
                                        "SET_TITLE" => "Y",	// Устанавливать заголовок страницы
                                        "SHOW_FIELDS" => "",	// Поля, которые показывать в форме
                                        "SUCCESS_PAGE" => "",	// Страница окончания регистрации
                                        "USER_PROPERTY" => "",	// Показывать доп. свойства
                                        "USER_PROPERTY_NAME" => "",	// Название блока пользовательских свойств
                                        "USE_BACKURL" => "Y",	// Отправлять пользователя по обратной ссылке, если она есть
                                    ),
                                    false
                                );
                            ?>
                        </article>

                </div>
            </div>
            <div class="col-4 col-12-narrower">
                <div id="sidebar">

                    <!-- Sidebar -->
                    
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_RECURSIVE" => "Y",
                            "AREA_FILE_SHOW" => "sect",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => ""
                        )
                    );?>
                </div>
            </div>
        </div>
    </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>