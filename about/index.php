<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О КОМПАНИИ");
?>
<h2></h2>

<main>

    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "FORM_ID" => "",
            "PATH" => "/include/about/about.php"
        )
    );?>

    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "FORM_ID" => "",
            "PATH" => "/include/about/missions.php"
        )
    );?>

    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "FORM_ID" => "",
            "PATH" => "/include/about/prices.php"
        )
    );?>

    <?
    $idvideo = $APPLICATION->GetProperty("idvideo");
    if ($idvideo) :
        $idvideo = explode(',', $idvideo);
        ?>

        <section class="section video-media">
            <div class="wrapper">
                <div class="section__big-text --mgb40">
                    <p>DREAM Media</p>
                </div>
                <div class="section__video-slider slider">
                    <?php foreach ($idvideo as $video) :?>
                        <?
                        #Получаем Видео из хайлоада
                        $MY_HL_BLOCK_ID = 4;
                        $entity_data_class = GetEntityDataClass($MY_HL_BLOCK_ID);

                        $rsData = $entity_data_class::getList(array(
                            'select' => array('*'),
                            'filter' => array("ID" => $video),
                            'cache' => ['ttl' => 604800]
                        ));

                        while ($el = $rsData->fetch()):
                            $URL = CFile::GetFileArray($el['UF_PHOTO']);
                            $URL = $URL["SRC"];
                            $video = $el['UF_URL']; ?>

                            <div class="section__video-slide js_video-ratio" data-video="<?= $video ?>" style="background-image: url(<?= $URL ?>);">
                                <img loading="lazy" src="<?= SITE_TEMPLATE_PATH ?>/assets/svg/VideoButton--<? $APPLICATION->ShowProperty("color") ?>.svg" alt="">
                            </div>
                        <?php endwhile;?>

                    <?php endforeach;?>
                </div>

                <?php if(count($idvideo) > 1) :?>
                    <div class="section__video-slider_navs g-flex-justify-end g-flex-align-stretch slider-navs">
                        <button class="js-prev">
                            <svg class="icon">
                                <use xlink:href="#ArrowSquare"></use>
                            </svg>
                        </button>
                        <button class="js-next">
                            <svg class="icon">
                                <use xlink:href="#ArrowSquare"></use>
                            </svg>
                        </button>
                    </div>
                <?php endif;?>

                <a href="<?= $options['youtube'] ?>" class="section__edge-button wow fadeInLeft   g-flex-align-center --mgt30">
                    <div class="arrow g-flex-align-center g-flex-justify-center">
                        <svg class="icon">
                            <use xlink:href="#ArrowSquare"></use>
                        </svg>
                    </div>
                    Канал Dream Realty
                </a>
            </div>
        </section>
    <?php endif;?>

    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "FORM_ID" => "",
            "PATH" => "/include/about/advantages.php"
        )
    );?>

    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/reviews_slider.php"
        )
    );?>

    <section class="section">
        <div class="wrapper">
            <div class="section__big-text --mgb40">
                <p>Офис Dream</p>
            </div>
            <div class="section__map-contacts --mgb40">
                <div class="section__map-contacts_map" id="map">

                </div>
                <div class="section__map-contacts_desc">
                    <div>
                        <p>
                            <svg class="icon">
                                <use xlink:href="#Place"></use>
                            </svg>
                            <?= $options['adress']; ?>
                        </p>
                        <a href="tel:<?= $options['phone']; ?>">
                            <svg class="icon">
                                <use xlink:href="#PhoneCall"></use>
                            </svg>
                            <?= $options['phone']; ?>
                        </a>
                        <a href=" <?= $options['tg']; ?>">
                            <svg class="icon">
                                <use xlink:href="#Telegram"></use>
                            </svg>
                            @dreamrealty
                        </a>
                        <hr>
                        <a href="<?= $options['ig']; ?>">
                            <svg class="icon">
                                <use xlink:href="#Instagram"></use>
                            </svg>
                            @andream_realty
                        </a>
                        <a href="  <?= $options['youtube']; ?>">
                            <svg class="icon">
                                <use xlink:href="#YouTube"></use>
                            </svg>
                            Канал Dream Media
                        </a>
                    </div>
                </div>
            </div>

            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "FORM_ID" => "",
                    "PATH" => "/include/about/how_to_reach.php"
                )
            );?>
        </div>
    </section>

    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "FORM_ID" => "",
            "PATH" => "/include/section_have_questions.php"
        )
    );?>


</main>

<?
$APPLICATION->IncludeFile(
    '/local/inc/about/map.php',
    [], // Передаваемый параметры
    ['MODE' => 'html'] // text, html, php
);
?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
