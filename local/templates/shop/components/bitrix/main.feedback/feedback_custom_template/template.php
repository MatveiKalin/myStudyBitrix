<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<section class="col-6 col-12-narrower">
    <h3>Отправьте нам сообщение</h3>
    
    <?if(!empty($arResult["ERROR_MESSAGE"]))
    {
        foreach($arResult["ERROR_MESSAGE"] as $v)
            ShowError($v);
    }
    
    if(strlen($arResult["OK_MESSAGE"]) > 0)
    {
    ?>
        <div class="mf-ok-text">
            <?=$arResult["OK_MESSAGE"]?>
        </div>
    <?
    }
    ?>
    
    <form action="<?=POST_FORM_ACTION_URI?>" method="POST">
        <?=bitrix_sessid_post()?>
        <div class="row gtr-50">
            
            <div class="col-6 col-12-mobilep">
                <input type="text" name="user_name" placeholder="Имя" value="<?=$arResult["AUTHOR_NAME"]?>">
            </div>
            
            <div class="col-6 col-12-mobilep">
                <input type="email" name="user_email" placeholder="e-mail" value="<?=$arResult["AUTHOR_EMAIL"]?>">
            </div>
            
            <div class="col-12">
                <textarea name="MESSAGE" placeholder="Сообщение" rows="5"><? if(isset($arResult["MESSAGE"]) && !empty($arResult["MESSAGE"])): ?><?= trim($arResult["MESSAGE"]) ?><? endif; ?></textarea>
            </div>
            
            <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
            
            <?if($arParams["USE_CAPTCHA"] == "Y"):?>
                <div class="mf-captcha">
                    <div class="g-recaptcha" data-sitekey="6LeSsJMUAAAAADj8SrWGVqiygmI4zU-iSHYJ0_t4"></div>
                </div>
            <?endif;?>
            
            <div class="col-12">
                <ul class="actions">
                    <li>
                        <input type="submit" name="submit" class="button alt"value="<?=GetMessage("MFT_SUBMIT")?>">
                    </li>
                </ul>
            </div>
        </div>
    </form>
</section>