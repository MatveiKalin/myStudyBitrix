<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Восстановления пароля");
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
                                <p>
                                    Если вы забыли пароль, введите логин или E-Mail. <br />
                                    Контрольная строка для смены пароля, а также ваши регистрационные данные, будут высланы вам по E-Mail.
                                </p>
                            </header>
                            
                            <?$APPLICATION->IncludeComponent("bitrix:system.auth.forgotpasswd", "forget_custom_template", Array(
	
	),
	false
);?>

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