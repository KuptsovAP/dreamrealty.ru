<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html lang="ru" class="modal-test">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?$APPLICATION->ShowTitle()?></title>
    <meta name="description" content="">
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/Marilyn_Monroe_-_publicity.JPG/210px-Marilyn_Monroe_-_publicity.JPG"/>

    <link rel="apple-touch-icon" sizes="57x57" href="local/assets/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="local/assets/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="local/assets/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="local/assets/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="local/assets/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="local/assets/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="local/assets/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="local/assets/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="local/assets/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="local/assets/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="local/assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="local/assets/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="local/assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="local/assets/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="local/assets/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">

	<?$APPLICATION->ShowHead();?>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/css/vendor.css">
	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/main.css?v=<?=rand(0, 255)?>">

</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<? if ($APPLICATION->GetCurPage() != "/") : ?>
    <?php include($root."/common/menu.php"); ?>

    <!-- Header -->
    <header class="header g-flex-align-center" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/assets/img//header-bg--rent.png);">
        <div class="wrapper">
            <h1 class="--white">Арендовать недвижимость с нами</h1>
            <p>Будьте реалистами, мечтайте о невозможном!</p>
            <div class="header__buttons g-flex-align-stretch">
                <a href="#" disabled class="btn --lightBlue disabled" style="pointer-events: none;filter: grayscale(1);">Изучить каталог</a>
                <a href="#feedbackPop2" class="btn --lightBlue js--transparent_pop-up2">Оставить заявку</a>
            </div>
            <div class="header__soc">
                <a href="https://t.me/FromDreamToRealty">
                    <svg class="icon">
                        <use xlink:href="#Telegram"></use>
                    </svg>
                </a>
                <a href="tel:84955422353">
                    <svg class="icon">
                        <use xlink:href="#PhoneCall"></use>
                    </svg>
                </a>
            </div>
        </div>
    </header>
    <!-- Header End -->

	<?php  endif ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?$APPLICATION->ShowTitle()?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />
	
	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/common.css" />
	
	
	
	<!--[if lte IE 6]>
	<style type="text/css">
		
		#support-question { 
			background-image: none;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='./images/question.png', sizingMethod = 'crop'); 
		}
		
		#support-question { left: -9px;}
		
		#banner-overlay {
			background-image: none;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='./images/overlay.png', sizingMethod = 'crop');
		}
		
	</style>
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/colors.css" />
		
</head>
<body>
		<div id="page-wrapper">
		
			
	
			<div id="header">
				<table>
					<tr>
						<td id="logo"><a href="<?=SITE_DIR?>" title="<?=GetMessage("HDR_GOTO_MAIN")?>"><?$APPLICATION->IncludeFile(
									SITE_DIR."include/company_name.php",
									Array(),
									Array("MODE"=>"html")
								);?></a></td>
						<td id="slogan"><?$APPLICATION->IncludeFile(
									SITE_DIR."include/company_slogan.php",
									Array(),
									Array("MODE"=>"html")
								);?></td>
					</tr>
				</table>

				
				<div id="search">
				<?$APPLICATION->IncludeComponent("bitrix:search.form", "flat", array(
					"PAGE" => "#SITE_DIR#search/index.php"
					),
					false
				);?>
				</div>
			</div>

<?$APPLICATION->IncludeComponent("bitrix:menu", "top", array(
	"ROOT_MENU_TYPE" => "top",
	"MENU_CACHE_TYPE" => "Y",
	"MENU_CACHE_TIME" => "36000000",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "1",
	"CHILD_MENU_TYPE" => "left",
	"USE_EXT" => "N",
	"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
				
		
			<div id="content-wrapper">
				<div id="content">
				<?if($APPLICATION->GetCurPage(false)==SITE_DIR):?>
					<div id="banner">
						<div id="banner-image"><?$APPLICATION->IncludeFile(
									SITE_DIR."include/banner.php",
									Array(),
									Array("MODE"=>"html")
								);?></div>
						<table cellspacing="0" id="banner-text">
							<tr>
								<td width="35%">&nbsp;</td>
								<td>
								<?$APPLICATION->IncludeFile(
									SITE_DIR."include/banner_text.php",
									Array(),
									Array("MODE"=>"text")
								);?>
								</td>
							</tr>
						</table>
						<div id="banner-overlay"></div>
					</div>
				<?else:?>
					<div id="breadcrumb">
						<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", ".default", array(
	"START_FROM" => "1",
	"PATH" => "",
	"SITE_ID" => SITE_ID
	),
	false
);?>
					</div>					
				<?endif?>					
					<div id="workarea-wrapper">
						<div id="left-menu">
						<?$APPLICATION->IncludeComponent("bitrix:menu", "tree", array(
							"ROOT_MENU_TYPE" => "leftfirst",
							"MENU_CACHE_TYPE" => "Y",
							"MENU_CACHE_TIME" => "36000000",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MAX_LEVEL" => "4",
							"CHILD_MENU_TYPE" => "left",
							"USE_EXT" => "N",
							"ALLOW_MULTI_SELECT" => "N"
							),
							false
						);?>
						</div>						
						<div id="workarea">
							<div id="workarea-inner">
							<h5><?$APPLICATION->ShowTitle(false);?></h5> 

						
