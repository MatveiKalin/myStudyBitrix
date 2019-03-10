<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?='<pre style="text-align: left;">'?>
    <? 
//        print_r($arParams);
//        print_r($arResult);
    ?>
<?='</pre>'?>

<article>
    <header>
        <?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
            <h2>
                <?=$arResult["NAME"]?>
            </h2>
        <?endif;?>
        
        <?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
            <p>
                <?=$arResult["DISPLAY_ACTIVE_FROM"]?>
            </p>
        <?endif;?>
    </header>
    
    
    <?if(
        $arParams["DISPLAY_PICTURE"]!="N" && 
        is_array($arResult["DETAIL_PICTURE"]) &&
        empty($arResult["DISPLAY_PROPERTIES"]["VIDEO"]["DISPLAY_VALUE"])
    ):?>
        <span class="image featured">
            <img
                src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
                width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
                height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
                alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
                title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
            />
        </span>
    <?endif?>
    
    
    <?foreach($arResult["DISPLAY_PROPERTIES"] as $pid => $arProperty):?>
        <?=$arProperty["NAME"]?>:&nbsp;
        <?if(is_array($arProperty["DISPLAY_VALUE"])):?>

            <? if($pid == "VIDEO"): ?>
                <iframe 
                    width="773" 
                    height="315" 
                    src="https://www.youtube.com/embed/<?= $arProperty["DISPLAY_VALUE"] ?>?start=1" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen
                ></iframe>
            <? elseif($pid == "PRICELIST"): ?>
                <? foreach ($arProperty["FILE_VALUE"] as $priceList): ?>
                    <a href="<?=$priceList["SRC"]?>">
                        <?=$priceList["ORIGINAL_NAME"]?>
                    </a>

                    &nbsp;
                <? endforeach; ?>
            <? else: ?>
                <?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
            <? endif; ?>
        <?else:?>
            <? if($pid == "VIDEO"): ?>
                <iframe 
                    width="773" 
                    height="315" 
                    src="https://www.youtube.com/embed/<?= $arProperty["DISPLAY_VALUE"] ?>?start=1" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen
                ></iframe>
            <? else: ?>
                <? if($pid == "PRICELIST"): ?> 
                    <a href="<?=$arProperty["FILE_VALUE"]["SRC"]?>">
                        <?=$arProperty["FILE_VALUE"]["ORIGINAL_NAME"]?>
                    </a>
                <? else: ?>
                    <?=$arProperty["DISPLAY_VALUE"];?> 
                    <? if($pid == "PRICE"): ?> &#8381; <? endif;?>
                <? endif; ?>
            <? endif; ?>
        <?endif?>
        <br />
    <?endforeach;?>
    <br />    
        
    <?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?>
            <?=$arResult["NAV_STRING"]?>
            
            <br />
        <?endif;?>
        
        <p>
            <?echo $arResult["NAV_TEXT"];?>
        </p>
        
        <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
            <br />
            
            <?=$arResult["NAV_STRING"]?>
        <?endif;?>
	<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
        <p>
            <?echo $arResult["DETAIL_TEXT"];?>
        </p>    
    <?else:?>
        <p>
            <?echo $arResult["PREVIEW_TEXT"];?>
        </p>
	<?endif?>
</article>