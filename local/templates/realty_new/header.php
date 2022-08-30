<!DOCTYPE html>
<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;
$assets = Asset::getInstance();

include 'functions.php';
include 'getOptions.php';
?>

<html lang="ru" class="modal-test">
<head>
    <?
    $APPLICATION->ShowHead();

    # head strings

    $assets->addString('<meta charset="UTF-8">', true);
    $assets->addString('<meta http-equiv="X-UA-Compatible" content="IE=edge">', true);
    $assets->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0">', true);

    $assets->addString('', true);
    $assets->addString('', true);
    ?>

    <title><?$APPLICATION->ShowTitle()?></title>

    <link rel="apple-touch-icon" sizes="57x57" href="<?=SITE_TEMPLATE_PATH?>/assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=SITE_TEMPLATE_PATH?>/assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=SITE_TEMPLATE_PATH?>/assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=SITE_TEMPLATE_PATH?>/assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=SITE_TEMPLATE_PATH?>/assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=SITE_TEMPLATE_PATH?>/assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=SITE_TEMPLATE_PATH?>/assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=SITE_TEMPLATE_PATH?>/assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=SITE_TEMPLATE_PATH?>/assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?=SITE_TEMPLATE_PATH?>/assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=SITE_TEMPLATE_PATH?>/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?=SITE_TEMPLATE_PATH?>/assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=SITE_TEMPLATE_PATH?>/assets/img/favicon/favicon-16x16.png">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?=SITE_TEMPLATE_PATH?>/assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">

    <?$assets->addCss(SITE_TEMPLATE_PATH . "/assets/css/vendor.css"); ?>

</head>
<body>
<? $APPLICATION->ShowPanel();?>

    <?php if ($APPLICATION->GetCurPage() != "/") : ?>

        <?
        $color = $APPLICATION->GetProperty("color");
        if (!empty($color)) {
            $assets->addCss(SITE_TEMPLATE_PATH . "/assets/css/main--".$APPLICATION->GetProperty("color").".css");
        } ?>
        <?$assets->addCss(SITE_TEMPLATE_PATH . "/assets/plugins/WOW/css/libs/animate.css"); ?>
        <?$assets->addJs(SITE_TEMPLATE_PATH . "/assets/plugins/WOW/dist/wow.min.js"); ?>
        <?$assets->addJs(SITE_TEMPLATE_PATH . "/assets/js/vendor-1b267619c4812cc46ee281747884ca50.js"); ?>
        <?$assets->addJs(SITE_TEMPLATE_PATH . "/assets/js/main.js"); ?>
        <?$assets->addJs(SITE_TEMPLATE_PATH . "/assets/custom.js"); ?>

        <? if ($APPLICATION->GetCurPage() == "/partners/") : ?>
            <?$assets->addCss(SITE_TEMPLATE_PATH . "/assets/plugins/ion.rangeSlider/css/ion.rangeSlider.min.css?v=".rand(0, 255)); ?>
            <?$assets->addCss(SITE_TEMPLATE_PATH . "/assets/css/main--blue.css?v=".rand(0, 255)); ?>
            <?$assets->addCss(SITE_TEMPLATE_PATH . "/assets/css/main--blue-partners.css?v=".rand(0, 255)); ?>

            <?$assets->addJs(SITE_TEMPLATE_PATH . "/assets/plugins/ion.rangeSlider/js/ion.rangeSlider.min.js?v=".rand(0, 255)); ?>

        <? endif ?>

        <?$assets->addCss(SITE_TEMPLATE_PATH . "/assets/css/fast-fixes.css"); ?>

        <script>
            new WOW().init();
        </script>


        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/main/SVG.php"
            )
        );?>

        <noscript>
            <strong>В вашем браузере отключен JavaScript. Без этой опции некоторые части сайта могут работать некорректно!</strong>
        </noscript>

        <!-- Nav Bar -->
        <nav>
            <div class="wrapper">
                <a href="/" class="logo">
                    <img loading="lazy" src="<?=SITE_TEMPLATE_PATH?>/assets/svg/logo.svg" alt="Dream Realty - Logo">
                </a>

                <div class="nav-content">
                    <div class="for nav__menu">
                        <span>Для тех:</span>
                        <div class="for_item nav__menu_item">
                            <div class="title">
                                <svg width='32' height='32' viewBox='0 0 32 32' fill='none'><path d='M11 13L15.2426 17.2426L19.4852 13' stroke-linecap='round' stroke-linejoin='round'/><circle cx='15.5' cy='14.5' r='14' /></svg>
                                <p>У кого <br>есть мечта</p>
                            </div>

                            <? $APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "top",
                                array(
                                    "ROOT_MENU_TYPE" => "dream",
                                    "MENU_CACHE_TYPE" => "Y",
                                    "MENU_CACHE_TIME" => "36000000",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => array(
                                    ),
                                    "MAX_LEVEL" => "1",
                                    "CHILD_MENU_TYPE" => "left",
                                    "USE_EXT" => "N",
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "COMPONENT_TEMPLATE" => "top",
                                    "DELAY" => "N"
                                ),
                                false
                            ); ?>

                        </div>
                        <div class="for_item nav__menu_item">
                            <div class="title">
                                <svg width='32' height='32' viewBox='0 0 32 32' fill='none'><path d='M11 13L15.2426 17.2426L19.4852 13' stroke-linecap='round' stroke-linejoin='round'/><circle cx='15.5' cy='14.5' r='14' /></svg>
                                <p>кому важны <br>детали</p>
                            </div>

                            <? $APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "top",
                                array(
                                    "ROOT_MENU_TYPE" => "details",
                                    "MENU_CACHE_TYPE" => "Y",
                                    "MENU_CACHE_TIME" => "36000000",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => array(
                                    ),
                                    "MAX_LEVEL" => "1",
                                    "CHILD_MENU_TYPE" => "details",
                                    "USE_EXT" => "N",
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "COMPONENT_TEMPLATE" => "top",
                                    "DELAY" => "N"
                                ),
                                false
                            ); ?>
                        </div>
                        <div class="for_item nav__menu_item">
                            <div class="title">
                                <svg width='32' height='32' viewBox='0 0 32 32' fill='none'><path d='M11 13L15.2426 17.2426L19.4852 13' stroke-linecap='round' stroke-linejoin='round'/><circle cx='15.5' cy='14.5' r='14' /></svg>
                                <p>Кто ищет <br>своих</p>
                            </div>

                            <? $APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "top",
                                array(
                                    "ROOT_MENU_TYPE" => "find",
                                    "MENU_CACHE_TYPE" => "Y",
                                    "MENU_CACHE_TIME" => "36000000",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => array(),
                                    "MAX_LEVEL" => "1",
                                    "CHILD_MENU_TYPE" => "left",
                                    "USE_EXT" => "N",
                                    "ALLOW_MULTI_SELECT" => "N"
                                ),
                                false
                            ); ?>

                        </div>
                    </div>
                    <div class="burger nav__menu_burger">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="burger_menu">
            <div class="wrapper">
                <div class="top">
                    <a href="index.html"><img loading="lazy" src="<?=SITE_TEMPLATE_PATH?>/assets/svg/burger-menu_logo.svg" alt=""></a>
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="lists">
                        <div class="list-item">
                            <p class="title">для тех:</p>
                        </div>
                        <div class="list-item">
                            <p class="title --lightGreen">у кого есть <br>мечта</p>
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "top",
                                array(
                                    "ROOT_MENU_TYPE" => "dream",
                                    "MENU_CACHE_TYPE" => "Y",
                                    "MENU_CACHE_TIME" => "36000000",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => array(),
                                    "MAX_LEVEL" => "1",
                                    "CHILD_MENU_TYPE" => "left",
                                    "USE_EXT" => "N",
                                    "ALLOW_MULTI_SELECT" => "N"
                                ),
                                false
                            ); ?>
                        </div>
                        <div class="group-list">
                            <div class="list-item">
                                <p class="title --lightBlue">кому важны <br>детали</p>
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:menu",
                                    "top",
                                    array(
                                        "ROOT_MENU_TYPE" => "details",
                                        "MENU_CACHE_TYPE" => "Y",
                                        "MENU_CACHE_TIME" => "36000000",
                                        "MENU_CACHE_USE_GROUPS" => "Y",
                                        "MENU_CACHE_GET_VARS" => array(),
                                        "MAX_LEVEL" => "1",
                                        "CHILD_MENU_TYPE" => "left",
                                        "USE_EXT" => "N",
                                        "ALLOW_MULTI_SELECT" => "N"
                                    ),
                                    false
                                ); ?>
                            </div>
                            <div class="list-item">
                                <p class="title --lightOrange">кто ищет <br>своих</p>
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:menu",
                                    "top",
                                    array(
                                        "ROOT_MENU_TYPE" => "find",
                                        "MENU_CACHE_TYPE" => "Y",
                                        "MENU_CACHE_TIME" => "36000000",
                                        "MENU_CACHE_USE_GROUPS" => "Y",
                                        "MENU_CACHE_GET_VARS" => array(),
                                        "MAX_LEVEL" => "1",
                                        "CHILD_MENU_TYPE" => "left",
                                        "USE_EXT" => "N",
                                        "ALLOW_MULTI_SELECT" => "N"
                                    ),
                                    false
                                ); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom">
                    <div class="lists">
                        <div class="list-item">

                        </div>

                        <?php if ($options['adress']):?>
                            <div class="list-item">
                                <p>
                                    <svg class="icon">
                                        <use xlink:href="#Place"></use>
                                    </svg>
                                    <?=$options['adress']?>
                                </p>
                            </div>
                        <?php endif;?>

                        <?php if ($options['phone']):?>
                            <div class="list-item">
                                <a href="tel:<?=$options['phone']?>">
                                    <svg class="icon">
                                        <use xlink:href="#PhoneCall"></use>
                                    </svg>
                                    <?=$options['phone']?>
                                </a>
                            </div>
                        <?php endif;?>

                        <?php if ($options['ig'] || $options['tg']  || $options['youtube']) :?>
                            <div class="list-item soc-magic">
                                <div class="soc-icons">
                                    <?php if ($options['tg']):?>
                                        <a href="<?=$options['tg']?>">
                                            <svg class="icon">
                                                <use xlink:href="#Telegram"></use>
                                            </svg>
                                        </a>
                                    <?php endif;?>

                                    <?php if ($options['ig']):?>
                                        <a href="<?=$options['ig']?>">
                                            <svg class="icon">
                                                <use xlink:href="#Instagram"></use>
                                            </svg>
                                        </a>
                                    <?php endif;?>

                                    <?php if ($options['youtube']):?>
                                        <a href="<?=$options['youtube']?>">
                                            <svg class="icon">
                                                <use xlink:href="#YouTube"></use>
                                            </svg>
                                        </a>
                                    <?php endif;?>
                                </div>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->

    <?else:?>
        <?$assets->addCss(SITE_TEMPLATE_PATH . "/assets/css/fast-fixes.css"); ?>
    <?php endif ?>

    <? if ($APPLICATION->GetCurPage() != "/partners/") : ?>
        <?php
        //Получаем backgound для header из Хайлоад блока
        $idback = $APPLICATION->GetProperty("idbackground");
        $MY_HL_BLOCK_ID = 3;
        $entity_data_class = GetEntityDataClass($MY_HL_BLOCK_ID);

        $rsData = $entity_data_class::getList(array(
            'select' => array('*'),
            'filter' => array("ID" => $idback),
            'cache' => ['ttl' => 604800]
        ));
        while ($el = $rsData->fetch()) {
            $URL = CFile::GetFileArray($el['UF_BACKGOUND']);
            $URL = $URL["SRC"];
        }
        ?>

        <header class="header g-flex-align-center" style="background-image: url(<?= $URL ?>);">
            <div class="wrapper">
                <h1 class="--white">
                    <? $APPLICATION->ShowProperty("h1_title") ?>
                    <?$APPLICATION->ShowTitle(false);?></h1>
                <p>
                    <? $APPLICATION->ShowProperty("p_title") ?>
                </p>

                <div class="header__buttons g-flex-align-stretch">
                    <? if ($APPLICATION->GetProperty("but1link") != ''
                        && $APPLICATION->GetProperty("but1link") != 'www') { ?>

                        <a href="<? $APPLICATION->ShowProperty("but1link") ?>"
                           class="btn --<? $APPLICATION->ShowProperty("color") ?>
                                <?php if ($APPLICATION->GetProperty("but1link_noPopup") != 'Y') {
                                    echo "js__open-hash_pop-up";
                                }?>">
                            <? $APPLICATION->ShowProperty("but1title") ?>
                        </a>

                    <?} ?>


                    <? if ($APPLICATION->GetProperty("but2link") != ''
                        && $APPLICATION->GetProperty("but2link") != 'www') { ?>

                        <a href="<? $APPLICATION->ShowProperty("but2link") ?>"
                           class="btn --<? $APPLICATION->ShowProperty("color") ?>
                           <?php if ($APPLICATION->GetProperty("but2link") != '#sale_block') {
                               echo 'js--transparent_pop-up2';
                           } ?>">

                            <? $APPLICATION->ShowProperty("but2title") ?>
                        </a>
                    <?} ?>
                </div>


                <div class="header__soc">
                    <?php if ($options['tg']):?>
                        <a href="<?= $options['tg'] ?>">
                            <svg class="icon">
                                <use xlink:href="#Telegram"></use>
                            </svg>
                        </a>
                    <?php endif;?>

                    <?php if ($options['phone']):?>
                        <a href="tel:<?= $options['phone'] ?>">
                            <svg class="icon">
                                <use xlink:href="#PhoneCall"></use>
                            </svg>
                        </a>
                    <?php endif;?>
                </div>
            </div>
        </header>
    <?php endif ?>

    <main>