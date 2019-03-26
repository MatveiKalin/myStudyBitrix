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

<div class="row">
    
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
    
        <section class="col-6 col-12-narrower" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="box post">
                
                <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                    <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="image left">
                            <img
                                src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                                alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                                title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                            />
                        </a>
                    <?else:?>
                        <img
                            src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                            alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                            title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                        />
                    <?endif;?>
                <?endif?>

                <div class="inner">
                    <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                        <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                            <h3>
                                <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
                                    <?echo $arItem["NAME"]?>
                                </a>
                            </h3>
                        <?else:?>
                            <h3>
                                <?echo $arItem["NAME"]?>
                            </h3>
                        <?endif;?>
                    <?endif;?>

                    <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                        <p>
                            <?echo $arItem["PREVIEW_TEXT"];?>
                        </p>
                    <?endif;?>
                </div>
                
                <?= '<br />' ?>
                        
                <?foreach($arItem["DISPLAY_PROPERTIES"] as $pid => $arProperty):?>
                    <small>
                        <?=$arProperty["NAME"]?>:&nbsp;
                        
                        <?if(is_array($arProperty["DISPLAY_VALUE"])):?>
                            <?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
                        <?else:?>
                            <?=$arProperty["DISPLAY_VALUE"];?>
                        <?endif?>
                        
                        <?= '<br />' ?>
                    </small>
                <?endforeach;?>
            </div>
        </section>

    <?endforeach;?>
</div>