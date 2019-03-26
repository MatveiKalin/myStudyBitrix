<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
        <!-- Footer -->
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <?
                            $APPLICATION->IncludeComponent(
                                "bitrix:menu", 
                                "bottom_menu_custom_template", 
                                Array(
                                    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                                    "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                                    "DELAY" => "N",	// Откладывать выполнение шаблона меню
                                    "MAX_LEVEL" => "1",	// Уровень вложенности меню
                                    "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                                        0 => "",
                                    ),
                                    "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                                    "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                                    "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                                    "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                                    "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                                ),
                                false
                            );
                        ?>
                        
                        <?
                            $APPLICATION->IncludeComponent(
                                "bitrix:news.line", 
                                "bottom_arcticles_custom_template", 
                                Array(
                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                                    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                                    "CACHE_TIME" => "300",	// Время кеширования (сек.)
                                    "CACHE_TYPE" => "A",	// Тип кеширования
                                    "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
                                    "FIELD_CODE" => array(	// Поля
                                        0 => "",
                                        1 => "",
                                    ),
                                    "IBLOCKS" => array(	// Код информационного блока
                                        0 => "2",
                                    ),
                                    "IBLOCK_TYPE" => "articles",	// Тип информационного блока
                                    "NEWS_COUNT" => "7",	// Количество новостей на странице
                                    "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                                    "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                                    "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                                    "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                                ),
                                false
                            );
                        ?>
                        
                        <section class="col-6 col-12-narrower">
                            <h3>Get In Touch</h3>
                            <form>
                                <div class="row gtr-50">
                                    <div class="col-6 col-12-mobilep">
                                        <input type="text" name="name" id="name" placeholder="Name" />
                                    </div>
                                    <div class="col-6 col-12-mobilep">
                                        <input type="email" name="email" id="email" placeholder="Email" />
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" id="message" placeholder="Message" rows="5"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <ul class="actions">
                                            <li><input type="submit" class="button alt" value="Send Message" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>

                <!-- Icons -->
                    <ul class="icons">
                        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
                        <li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
                        <li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
                    </ul>

                <!-- Copyright -->
                    <div class="copyright">
                        <ul class="menu">
                            <li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                        </ul>
                    </div>

            </div>
		</div>
	</body>
</html>