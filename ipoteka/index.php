<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "ИПОТЕКА");
$APPLICATION->SetTitle("ОДОБРИТЬ ИПОТЕКУ");
?>

    <section class="section">
        <div class="wrapper">
            <h3 class="--pink --mgb40">Купить квартиру, имея лишь 100 000 рублей?</h3>
            <div class="section__big-text">
                <p>
                    Миссия выполнима!
                </p>
            </div>
        </div>
    </section>


    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "CLASS_TABS_FLEX" => "g-flex-align-center center ",
            "DONT_SHOW_BIG_TITLE" => "Y",
            "DONT_SHOW_SLIDER_TITLE" => "Y",
            "PATH" => "/include/command-dream-realty.php"
        )
    );?>

<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "CLASS_TABS_FLEX" => "g-flex-align-center center ",
        "DONT_SHOW_BIG_TITLE" => "Y",
        "DONT_SHOW_SLIDER_TITLE" => "Y",
        "PATH" => "/include/ipoteka/text.php"
    )
);?>

    <section class="section --pdt0 --pdb0" id="formBlockSmooth">
        <div class="wrapper">
            <h3 class="--pink --mgb90">С нами кредитные ставки ниже, <br> а условия комфортнее</h3>
            <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/check-credit-history.php');?>
        </div>
    </section>

    <section class="section">
        <div class="wrapper">
            <div class="section__big-text --mgb30">
                <p>
                    суперброкеры <br>
                    dream realty
                </p>
            </div>
            <h3 class="text-align-end --pink --mgb20">устраняют препятствия там, где сдаются <br>
                обычные агенты по недвижимости</h3>
        </div>
    </section>

<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "CLASS_TABS_FLEX" => "g-flex-align-center center ",
        "DONT_SHOW_BIG_TITLE" => "Y",
        "DONT_SHOW_SLIDER_TITLE" => "Y",
        "PATH" => "/include/ipoteka/options.php"
    )
);?>

<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "CLASS_TABS_FLEX" => "g-flex-align-center center ",
        "DONT_SHOW_BIG_TITLE" => "Y",
        "DONT_SHOW_SLIDER_TITLE" => "Y",
        "PATH" => "/include/ipoteka/honor.php"
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


                <a target="_blank" href="<?= $options['youtube'] ?>" class="section__edge-button wow fadeInLeft   g-flex-align-center --mgt30">
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

    <?
    $idpodcasts = $APPLICATION->GetProperty("podcasts");
    if ($idpodcasts) :
        $idpodcasts = explode(',', $idpodcasts);
        ?>

        <section class="section podcasts">
            <div class="wrapper">
                <h2 class="section__title --mgb60"><span class="--<? $APPLICATION->ShowProperty("color") ?>">Советы</span> наших экспертов </h2>
                <div class="section__podcasts g-flex-between g-flex-align-stretch g-flex-wrap">
                    <?php foreach ($idpodcasts as $video) :?>
                        <?
                        #Получаем Видео из хайлоада
                        $MY_HL_BLOCK_ID = 5;
                        $entity_data_class = GetEntityDataClass($MY_HL_BLOCK_ID);

                        $rsData = $entity_data_class::getList(array(
                            'select' => array('*'),
                            'filter' => array("ID" => $video),
                            'cache' => ['ttl' => 604800]
                        ));
                        while ($el = $rsData->fetch()) :?>
                            <?
                            $URL = CFile::GetFileArray($el['UF_PHOTO']);
                            $URL = $URL["SRC"];
                            $audio = CFile::GetFileArray($el['UF_FILE']);
                            $audio = $audio["SRC"];

                            $video = $el['UF_URL'];
                            $title =  $el['UF_TITLE'];
                            ?>

                            <div class="section__podcast g-flex-column" style="background-image: url(<?=$URL?>);">
                                <div class="section__podcast_name"><?= $title ?></div>
                                <img loading="lazy" src="<?= SITE_TEMPLATE_PATH ?>/assets/svg/PodcastIcon.svg" alt="" class="section__podcast_icon --mgb40">
                                <audio data-status="stopped" controls src="<?= $audio ?>" class="section__podcast_audio-tag">
                                    Тег audio не поддерживается вашим браузером.
                                </audio>
                                <div class="section__podcast_audio g-flex-align-center">
                                    <img loading="lazy" src="<?= SITE_TEMPLATE_PATH ?>/assets/svg/Audio--Play.svg" data-pause="<?= SITE_TEMPLATE_PATH ?>/assets/svg/pause.svg" data-play="<?= SITE_TEMPLATE_PATH ?>/assets/svg/Audio--Play.svg" alt="" class="js_play-pause">
                                    <div class="timeline">
                                        <div class="currentTime"></div>
                                        <span class="curNumTime">00:00</span>
                                        <span class="allTime">00:00</span>
                                    </div>
                                    <a href="<?= $options['tg'] ?>" target="_blank" class="section__podcast_comment g-flex-align-center">
                                        <img loading="lazy" src="<?= SITE_TEMPLATE_PATH ?>/assets/svg/Comment.svg" alt="">
                                        Комментировать
                                    </a>
                                </div>
                            </div>
                        <?php endwhile;?>

                    <?php endforeach;?>
                </div>

                <a href="/dream-media/podcasts/" target="_blank" class="section__edge-button wow fadeInLeft   g-flex-align-center --mgt30">
                    <div class="arrow g-flex-align-center g-flex-justify-center">
                        <svg class="icon">
                            <use xlink:href="#ArrowSquare"></use>
                        </svg>
                    </div>
                    Все подкасты
                </a>
            </div>
        </section>
    <?php endif;?>

    <section class="section how-it-works --pdt0 --pdb0">
        <div class="wrapper">
            <div class="section__content-changer g-flex-column">
                <div class="section__content-slider slider">
                    <div class="section__content-slide">
                        <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/mortgage-broker.php');?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?
/*
    $advantagesIds = [30, 31];
    $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/buy_advantages_section.php",
            "ADV_PAGE" => "/ipoteka/advantages.php",
            "ADVANTAGES_IDS" => $advantagesIds,
            "SECTION_TITLE" => '<span class="--pink">Преимущества</span> одобрения ипотеки с нами',
            "MIN_TEXT_CLASS" => "Y",
        )
    );
*/
?>

<?
global $benefitsFilter;
$benefitsFilter['PROPERTY_URL'] = '%'.$APPLICATION->GetCurPage().'%';
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "benefits-simple",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
            0 => "NAME",
            1 => "SORT",
            2 => "PREVIEW_TEXT",
            3 => "PREVIEW_PICTURE",
            4 => "DETAIL_TEXT",
            5 => "DETAIL_PICTURE",
            6 => "",
        ),
        "FILTER_NAME" => "benefitsFilter",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "12",
        "IBLOCK_TYPE" => "advantages",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "SECTION_ID" => "6",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "600",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "BTN_NAME",
            1 => "URL",
            2 => "BTN_LINK",
            3 => "PREVIEW",
            4 => "",
            5 => "",
        ),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "STRICT_SECTION_CHECK" => "N",
        "COMPONENT_TEMPLATE" => "benefits",
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_BY2" => "NAME",
        "SORT_ORDER2" => "ASC",
        "TITLE" => '<span class="--pink">Преимущества</span> одобрения ипотеки с нами',
        "ID_SECTION" => 'advantageBuy',
        "URL" => '/ipoteka/advantages.php'
    ),
    false
);?>

    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "FORM_ID" => "orderConsultationModal",
            "PATH" => "/include/section_have_questions.php"
        )
    );?>
    <br>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>