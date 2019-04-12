<? 
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();

$arResult["ITEMS"][0]["NAME"] = "Название новости будет изменятся на это значение!"; 

//foreach ($arResult["ITEMS"] as $arItem) {
//    foreach ($arItem["FIELDS"] as $code => $value) {
//        
//        // Если есть поле с ID пользователя, то получаем сведения о пользователе.
//        if ($code == "CREATED_BY") {
//            
//            $rsUser = CUser::GetByID($value);
//            $arUser = $rsUser->Fetch();
//            
//            $photoID = $arUser["PERSONAL_PHOTO"];
//            unset($arUser["PERSONAL_PHOTO"]);
//            $arUser["PERSONAL_PHOTO"]["ID"] = $photoID;
//            $arUser["PERSONAL_PHOTO"]["SRC"] = CFile::GetPath($arUser["PERSONAL_PHOTO"]["ID"]);
//            
//            echo "<pre>"; 
//                print_r($arUser); 
//            echo "</pre>";
//        }
//    }
//}
?>

