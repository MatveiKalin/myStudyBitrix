<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if (isset($_REQUEST["backurl"]) && strlen($_REQUEST["backurl"])>0) 
	LocalRedirect($backurl);

$APPLICATION->SetTitle("Авторизация");
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
                                <h2>Авторизация пользователя</h2>
                                <p>Вы зарегистрированы и успешно авторизовались.</p>
                            </header>
                            
                            <?
                                $APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"auth_custom_template", 
	array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "sect",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => "auth_custom_template",
		"REGISTER_URL" => "/auth/registration.php",
		"FORGOT_PASSWORD_URL" => "/auth/forget.php",
		"PROFILE_URL" => "/auth/",
		"SHOW_ERRORS" => "Y"
	),
	false
);
                            ?>

                            <p>Используйте административную панель в верхней части экрана для быстрого доступа к функциям управления структурой и информационным наполнением сайта. Набор кнопок верхней панели отличается для различных разделов сайта. Так отдельные наборы действий предусмотрены для управления статическим содержимым страниц, динамическими публикациями (новостями, каталогом, фотогалереей) и т.п.</p>

                            <p><a href="<?=SITE_DIR?>">Вернуться на главную страницу</a></p>
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