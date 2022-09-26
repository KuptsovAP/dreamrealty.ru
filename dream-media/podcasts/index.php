<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ПОДКАСТЫ");
?>

        <section class="section">
            <div class="wrapper">
                <h3 class="--mgb20">подкасты</h3>
                <p class="--mgb60">Выберите интересующую вас тему или вопрос</p>
                <div class="section__hashtags --mgb30">
                    <a href="/dream-media/podcasts/" class="section__hashtag --violet active">Все подкасты</a>
                    <a href="/dream-media/podcasts/?tag=1" class="section__hashtag --violet">#СамСебеИнвестор</a>
                    <a href="/dream-media/podcasts/?tag=2" class="section__hashtag --violet">#СамСебеПродавец</a>
                </div>
                <div class="section__podcasts g-flex-between g-flex-align-stretch g-flex-wrap">

                <?
                        $MY_HL_BLOCK_ID = 5;
                        CModule::IncludeModule('highloadblock');
                        $entity_data_class = GetEntityDataClass($MY_HL_BLOCK_ID);
                        if ($_GET[tag] != '') {
                        $rsData = $entity_data_class::getList(array(
                            'select' => array('*'),
                            'order' => array("ID" => "DESC"),
                            'filter' => array("UF_HASHTAG" => $_GET[tag]),
                        ));
                    } else {
                        $rsData = $entity_data_class::getList(array(
                            'select' => array('*'),
                            'order' => array("ID" => "DESC"),
                            'filter' => array(),
                        ));
                    }
                        while ($el = $rsData->fetch()) {
                            //  print_r($el);
                            $URL = CFile::GetFileArray($el['UF_PHOTO']);
                            $audio = CFile::GetFileArray($el['UF_FILE']);
                            //	var_dump($URL);
                            $URL = $URL["SRC"];
                            $podcast_URL = $el['UF_URL'];
                            $audio = $audio["SRC"];
                            $title =  $el['UF_TITLE'];
                            $tag =  $el['UF_HASHTAG'];

                    ?>
                    <div data-tag="<? print_r($tag)?>" class="section__podcast g-flex-column" style="background-image: url(<?=$URL;?>);">
                        <div class="section__podcast_name"><?=$title;?></div>
                        <img loading="lazy" src="/html/assets/svg/PodcastIcon.svg" alt="" class="section__podcast_icon --mgb40">
                        <audio data-status="stopped" controls src="<?=$audio;?>" class="section__podcast_audio-tag">
                            Тег audio не поддерживается вашим браузером.
                        </audio>
                        <div class="section__podcast_audio g-flex-align-center">
                            <img loading="lazy" src="/html/assets/svg/Audio--Play.svg" data-pause="/html/assets/svg/pause.svg" data-play="/html/assets/svg/Audio--Play.svg" alt="" class="js_play-pause">
                            <div class="timeline">
                                <div class="currentTime"></div>
                                <span class="curNumTime">00:00</span>
                                <span class="allTime">00:00</span>
                            </div>
                            <a href="<?=(!empty($podcast_URL) ? $podcast_URL : 'https://t.me/FromDreamToRealty');?>" target="_blank" class="section__podcast_comment g-flex-align-center">
                                <img loading="lazy" src="/html/assets/svg/Comment.svg" alt="">
                                Комментировать
                            </a>
                        </div>
                    </div>
                  <?php } ?>
                </div>
                <div class="section__centered-button --mgt30 g-flex-justify-center">
                    <button class="btn --violet">Показать еще</button>
                </div>
            </div>
        </section>

        <section class="section how-it-works dream_media_section">
            <div class="wrapper">
                <div class="section__big-text --mgb60">
                    <p>Команда спикеров</p>
                </div>
                <div class="section__peoples g-flex-wrap g-flex-between g-flex-align-start">
                    <?
                    $arSort = "PROPERTY_SURNAME";
                    $arOrder = "ASC";

                    if($_GET['sort']) {
                        $arSort = $_GET['sort'];
                    }

                    if($_GET['order']) {
                        $arOrder = $_GET['order'];
                    }

                    $GLOBALS['arrWorkers'] = [];
                    $GLOBALS['arrWorkers']['SECTION_ID']= [2, 3];

                    if($_GET['filter_okrug']) {
                        $okrug = explode(",", $_GET['filter_okrug']);
                        $GLOBALS['arrWorkers']['PROPERTY_OKRUG_MSK_VALUE'] = $okrug;
                    }

                    $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "workers",
                        Array(
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
                            "FIELD_CODE" => array("", ""),
                            "FILTER_NAME" => "arrWorkers",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "8",
                            "IBLOCK_TYPE" => "team",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "SECTION_ID" =>  6,
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "60",
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
                                0 => "NAME",
                                1 => "SURNAME",
                                2 => "",
                            ),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "N",
                            "SORT_BY1" => $arSort,
                            "SORT_ORDER1" => $arOrder,
                            "STRICT_SECTION_CHECK" => "N"
                        )
                    );?>
                </div>
                <a href="/dream-media/" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt60">
                    <div class="arrow g-flex-align-center g-flex-justify-center">
                        <svg class="icon">
                            <use xlink:href="#ArrowSquare"></use>
                        </svg>
                    </div>
                    Dream Media
                </a>
            </div>
        </section>

        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "FORM_ID" => "askQuestion",
                "PATH" => "/include/section_have_questions.php"
            )
        );?>


    <div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="askQuestion" style="z-index: 2000!important;">
        <div class="wrapper">
            <div class="text-block">

                <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Задать <span class="--violet">вопрос</span> прямо сейчас</h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <label>
                        <input type="email" placeholder="E-mail*" required>
                    </label>
                    <label class="w66 w100-xs">
                        <input type="text" placeholder="Вопрос">
                    </label>
                    <button type="submit" class="btn --violet">Задать вопрос</button>
                    <label class="inputCheckbox w100">
                        <input type="checkbox" required checked>
                        <span>Нажимая на кнопку "Задать вопрос", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                    </label>
                </form>
            </div>
        </div>
    </div>

    <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>