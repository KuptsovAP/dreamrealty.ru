<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("СДАТЬ НЕДВИЖИМОСТЬ С НАМИ");
?>

<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/command-dream-realty.php"
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

    <section class="section how-it-works" id="form">
        <div class="wrapper">
            <div class="section__content-changer g-flex-column">
                <div class="section__content-tabs g-flex-between center g-flex-align-center --mgb0">
                    <div class="section__content-tab active">
                        Жилая
                    </div>
                    <div class="section__content-tab">
                        Коммерческая
                    </div>
                </div>
                <svg class="--lightBlue" viewBox="0 0 32 32">
                    <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="section__content-slider slider">
                    <div class="section__content-slide">
                        <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/choose-local-agent-rent.php');?>
                    </div>
                    <div class="section__content-slide">
                        <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/choose-agent-realty.php');?>
                    </div>
                </div>
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
        "PATH" => "/include/reviews_slider.php"
    )
);?>


<?
$advantagesIds = [14, 15, 16, 17, 18];
$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/buy_advantages_section.php",
        "ADV_PAGE" => "/rentTo/advantages/",
        "ADVANTAGES_IDS" => $advantagesIds,
        "SECTION_TITLE" => '<span class="--lightBlue">Преимущества</span> аренды с нами',
        "MIN_TEXT_CLASS" => "Y",
    )
);?>

<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "FORM_ID" => "feedbackPop2rent",
        "PATH" => "/include/section_have_questions.php"
    )
);?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>