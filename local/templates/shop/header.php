<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE HTML>
<html>
	<head>
        <?$APPLICATION->ShowHead();?>
		
        <title>
            <?$APPLICATION->ShowTitle();?>
        </title>
	</head>
	<body class="is-preload">
        
        <div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
        
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						<h1><a href="index.html" id="logo">Arcana <em>by HTML5 UP</em></a></h1>

					<!-- Nav -->
                    <?
                        $APPLICATION->IncludeComponent(
                            "bitrix:menu", 
                            "top_custom_template", 
                            array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(
                                ),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "ROOT_MENU_TYPE" => "top",
                                "USE_EXT" => "N",
                                "COMPONENT_TEMPLATE" => "top"
                            ),
                            false
                        );
                    ?>

				</div>	