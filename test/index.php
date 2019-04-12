<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Раздел для испытаний");
?>

<?

// Подключаем модуль инфоблоки
if(CModule::IncludeModule("iblock")) {
    $iblock_id = 1;

    //IBLOCK_ID и ID обязательно должны быть указаны
    $arSelect = Array(
//                    "ID",
//                    "NAME", 
//                    "DATE_ACTIVE_FROM",
//                    "PROPERTY_*",
                    "PREVIEW_TEXT",
//                    "*" /* Для того, чтобы вывести все поля инфоблока */
                );
    
    $arFilter = Array(
                    "IBLOCK_ID"=>IntVal($iblock_id), 
                    "ACTIVE_DATE"=>"Y", 
                    "ACTIVE"=>"Y"
                );
    
    $res = CIBlockElement::GetList(
                                Array(
                                    "DATE_ACTIVE_FROM" => "ASC",
                                    "SORT" => "DESC"
                                ), 
                                $arFilter, // Фильтр данных
                                false, // Группировка данных
                                Array("nPageSize" => 50), // Постраничная навигация
                                $arSelect // Массив для выборки
                            );
    
    while($ob = $res->GetNextElement()) { 
        $arFields = $ob->GetFields();
        echo '<pre>';
            print_r($arFields);
        echo '</pre>';
        
        $arProps = $ob->GetProperties();
        echo '<pre>';
            print_r($arProps);
        echo '</pre>';
        
        echo '---------------------';
    }
}
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>