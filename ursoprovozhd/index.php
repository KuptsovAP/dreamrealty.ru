<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "ЮРИДИЧЕСКОЕ СОПРОВОЖДЕНИЕ");
$APPLICATION->SetTitle("СОПРОВОДИТЬ СДЕЛКУ С НАМИ");
?>
<?php
if($_GET['q'] && !empty($_GET['q'])) {
    if ((CModule::IncludeModule('search'))&&(CModule::IncludeModule('iblock'))){
        $q = $_REQUEST['q'];
        $obSearch = new CSearch;
        $obSearch->Search(array(
                "QUERY" => $q,
                "SITE_ID" => LANG,
                "MODULE_ID" => 'iblock',
                "CHECK_DATES" => 'Y',
                "PARAM2" => "7",
            )
        );
        $result = array();
        while ($res = $obSearch->GetNext()){
            $id = $res['ITEM_ID'];

            $searchElemsIds[] = $res['ITEM_ID'];
        }
    }
}
?>

<?php
$arElems = [];
$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_*");

if(!empty($searchElemsIds)) {
    $arFilter = Array("IBLOCK_ID"=>IntVal(7), "SECTION_CODE" => "yurist", "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "ID" => $searchElemsIds);
}else {
    $arFilter = Array("IBLOCK_ID"=>IntVal(7), "SECTION_CODE" => "yurist", "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y",);
}

$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>600), $arSelect);
while($ob = $res->GetNextElement())
{
    $arFields = $ob->GetFields();
    $arProps = $ob->GetProperties();

    $arElems[$arFields['ID']] = $arFields;
    $arElems[$arFields['ID']]['PROPS'] = $arProps;
}
?>

<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "FORM_ID" => "",
        "PATH" => "/include/ursoprovozhd/task.php"
    )
);?>

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


    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/we-are-trusted.php"
        )
    );?>

    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/code-on-honor.php"
        )
    );?>

    <section class="section">
        <div class="wrapper">
            <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/choose-lawyer.php');?>
        </div>
    </section>

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

    <section class="section questions-search --mgb60" id="search_result">
        <div class="wrapper">
            <div class="section__big-text for-pop-up --mgb60">
                <p>Вопрос-ответ</p>
            </div>
            <div class="section__search g-flex-align-center g-flex-between">
                <h3>Вопрос-ответ <span class="--blue">юристу</span></h3>
                <form  class="search no-js" method="GET" action="/ursoprovozhd/faq.php">
                    <input name="q" value="<?=$_GET['q']?>" type="text" placeholder="Поиск">
                    <button type="submit">
                        <svg class="icon">
                            <use xlink:href="#Loupe"></use>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <?php if(!empty($arElems)):?>
        <section class="section questions --grayBlock --pdb40" style="background: #F4F4F4;">
            <div class="wrapper">
                <div class="section__content-changer g-flex-column">
                    <div class="section__content-slider slider --with-dots">
                        <?$i = 0;?>
                        <?php foreach ($arElems as $arElem):?>
                            <?php if($i == 0):?>
                                <div class="section__content-slide">
                            <?php endif;?>

                                    <a href="#question_<?=$arElem['ID']?>" <?=(!empty($arElem['PROPS']['FILTER_TAG']['VALUE']) ? "data-issue='".$arElem['PROPS']['FILTER_TAG']['VALUE']."'" : "")?> class="section__question g-flex-align-center js__open-hash_pop-up --notlink">
                                        <svg class="icon">
                                            <use xlink:href="#Question"></use>
                                        </svg>
                                        <?=$arElem['NAME']?>
                                        <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                                    </a>

                            <?php if($i == 8):?>
                                </div>
                            <?php endif;?>
                        <?php $i++;
                        if($i == 9) $i = 0;
                        endforeach;?>
                    </div>
                </div>
                <div class="section__feedback_navs g-flex-justify-end g-flex-align-stretch slider-navs">
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
                <a href="/ursoprovozhd/faq.php" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt40">
                    <div class="arrow g-flex-align-center g-flex-justify-center">
                        <svg class="icon">
                            <use xlink:href="#ArrowSquare"></use>
                        </svg>
                    </div>
                    Все вопросы
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
            "PATH" => "/include/reviews_slider.php"
        )
    );?>

    <?
    $advantagesIds = [24, 25, 26, 27, 28, 29];
    $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/buy_advantages_section.php",
            "ADV_PAGE" => "/ursoprovozhd/advantages.php",
            "ADVANTAGES_IDS" => $advantagesIds,
            "SECTION_TITLE" => '<span class="--blue">Преимущества</span> сопровождения сделки с нами',
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
            "FORM_ID" => "",
            "PATH" => "/include/section_have_questions.php"
        )
    );?>


    <?php if(!empty($arElems)):?>
        <?php foreach ($arElems as $arElem):?>
            <div class="advantages-pop-up pop-up g-flex-column advantages-pop-up__question pop-up_fixed"
                 id="question_<?=$arElem['ID']?>">
                <div class="content wrapper">
                    <section class="section pop-up__header">
                        <div class="pop-up__close">
                            <svg class="icon">
                                <use xlink:href="#Close"></use>
                            </svg>
                        </div>
                        <h3 class="--blue" style="margin-right: 60px"><?= $arElem['NAME'];?></h3>
                    </section>

                    <div class="content-scroll">
                        <div class="wrapper">
                            <div class="pop-up__text">
                                <?=$arElem['PROPS']['QUESTION']['~VALUE']['TEXT']?>
                            </div>

                            <section class="--mgt60">
                                <?=$arElem['PROPS']['FORM_HTML']['~VALUE']['TEXT']?>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    <?php endif;?>

<style>
    /* TODO: Change placement */
    .pop-up_fixed {
        left : 50%;
        top: 50%;
        height: auto;
        padding-bottom: 24px;
    }

    .pop-up_fixed.openned {
        -webkit-transform: translate(-50%, -50%) !important;
        transform: translate(-50%, -50%) !important;
    }

    .pop-up_fixed::-webkit-scrollbar {
        display: none;
    }

    .pop-up_fixed .content-scroll {
        overflow: hidden;
        overflow-y: auto;
        max-height: 60vh;
        padding-right: 20px;
    }

    .pop-up_fixed .content-scroll::-webkit-scrollbar {
        width: 5px;
        position: relative;
    }
    .pop-up_fixed .content-scroll::-webkit-scrollbar-thumb {
        background-color: #194FB9;
        border-radius: 10px;
        outline: none;
    }

    .pop-up_fixed .content-scroll::-webkit-scrollbar-track {
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .advantages-pop-up__question .pop-up__close {
        right: 60px !important;
    }

    .slider-navs {
        width: 100%;
    }
</style>
<br>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>