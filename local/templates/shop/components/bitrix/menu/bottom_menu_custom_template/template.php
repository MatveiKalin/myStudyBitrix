<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<section class="col-3 col-6-narrower col-12-mobilep">
    
    <?if (!empty($arResult)):?>
    
        <h3>Ссылки главного меню</h3>

        <ul class="links">
            
            <? foreach($arResult as $arItem): ?>  
                <li>
                    <a href="<?=$arItem["LINK"]?>">
                        <?=$arItem["TEXT"]?>
                    </a>
                </li>
            <? endforeach; ?>
        </ul>
    <?endif?>
</section>
