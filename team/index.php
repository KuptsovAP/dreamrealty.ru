<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("КОМАНДА");
$people_filter = array();
if ($_GET['sort_people'] == 'by_name') {
    $people_filter['NAME'] = 'ASC';
}
?>

<section class="section how-it-works">
    <div class="wrapper">
        <div class="section__content-changer g-flex-column">
            <div class="section__content-tabs top g-flex-between g-flex-align-center center g-flex-wrap --mgb30">
                <div class="section__content-tab active" id="leaders">
                    Руководители
                </div>
                <div class="section__content-tab --nowarp" id="district_agents">
                    Районные агенты
                </div>
                <div class="section__content-tab --nowarp" id="new_building_experts">
                    Эксперты по новостройкам
                </div>
                <div class="section__content-tab --nowarp" id="commerce_experts">
                    Эксперты по коммерции
                </div>
            </div>
            <div class="section__content-tabs bottom g-flex-between g-flex-align-center center g-flex-wrap --mgb30">
                <div class="section__content-tab --nowarp" id="lawyers">
                    Юристы
                </div>
                <div class="section__content-tab" id="credit_brokers">
                    Кредитные брокеры
                </div>
                <div class="section__content-tab" id="marketers">
                    Маркетологи
                </div>
                <div class="section__content-tab" id="operators">
                    Операторы
                </div>
            </div>
            <svg class="--lightViolet" viewBox="0 0 32 32">
                <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <div class="section__content-slider slider">
                <!-- + Руководители -->
                <div class="section__content-slide">
                    <div class="section__big-text --mgb20">
                        <p>Команда</p>
                    </div>
                    <div class="section__title_buttons g-flex-between g-flex-align-center --mgb60">
                        <h3>Руководители</h3>
                    </div>
                    <div class="slider_lead_block_wrap">

                        <div class="section__peoples justify_center_none slider_content_block g-flex-wrap g-flex-between g-flex-align-start">
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
                            $GLOBALS['arrWorkers']['SECTION_ID']= 2;

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
                        <a href="/about/" target="_blank" class="zo_section__edge-button section__edge-button wow fadeInLeft  g-flex-align-center --mgb90">
                            <div class="arrow g-flex-align-center g-flex-justify-center">
                                <svg class="icon">
                                    <use xlink:href="#ArrowSquare"></use>
                                </svg>
                            </div>
                            О компании
                        </a>

                        <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/send-message.php');?>

                    </div>
                </div>

                <!-- + Районные агенты -->
                <div class="section__content-slide">
                    <div class="slider_rayon_block_wrap">
                        <!--slider_agent_block_head-->
                        <div class="section__big-text --mgb20">
                            <p>Команда</p>
                        </div>
                        <div class="section__title_buttons g-flex-between g-flex-align-center --mgb60">
                            <h3>Районные агенты</h3>


                            <div class="buttons g-flex-align-center --nomobile filter_wrap">
                                <select id="selectOkrug22" class="okrug_select" multiple onchange="ajaxUpdateAgent('slider_rayon_block_wrap')" data-placeholder="Округ Москвы" style="width: 200px;">
                                    <option value="">&nbsp;</option>
                                    <option value="ЦАО">ЦАО</option>
                                    <option value="САО">САО</option>
                                    <option value="СВАО">СВАО</option>
                                    <option value="ВАО">ВАО</option>
                                    <option value="ЮВАО">ЮВАО</option>
                                    <option value="ЮАО">ЮАО</option>
                                    <option value="ЮЗАО">ЮЗАО</option>
                                    <option value="ЗАО">ЗАО</option>
                                    <option value="СЗАО">СЗАО</option>
                                    <option value="ЗелАО">ЗелАО</option>
                                    <option value="НАО">НАО</option>
                                    <option value="ТАО" value="ТАО">ТАО</option>
                                </select>

                                <div class="buttons g-flex-align-center --nomobile">
                                    <select onchange="ajaxUpdateAgent('slider_rayon_block_wrap')" class="block_sort_select" name="sort_peaple" data-placeholder="По рейтингу">
                                        <option value="">&nbsp;</option>
                                        <option <? if ($_GET['sort'] == 'PROPERTY_RATING') {echo "selected ";}?>value="sort=PROPERTY_RATING&order=DESC">По рейтингу</option>
                                        <option <? if ($_GET['sort'] == 'PROPERTY_SURNAME') {echo "selected ";}?> <?=($_GET['sort'] ? "" : "selected")?> value="sort=PROPERTY_SURNAME&order=ASC"> По фамилии от А до Я</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="section__peoples justify_center_none slider_content_block g-flex-wrap g-flex-between g-flex-align-start">
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
                            $GLOBALS['arrWorkers']['SECTION_ID']= 3;

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
                    </div>

                    <a href="/about/" target="_blank" class="zo_section__edge-button section__edge-button wow fadeInLeft  g-flex-align-center --mgb90">
                        <div class="arrow g-flex-align-center g-flex-justify-center">
                            <svg class="icon">
                                <use xlink:href="#ArrowSquare"></use>
                            </svg>
                        </div>
                        О компании
                    </a>

                    <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/choose-local-agent-sell.php');?>
                </div>

                <!-- + Эксперты по новостройкам -->
                <div class="section__content-slide">
                    <div class="slider_expert_block_wrap">
                        <div class="section__big-text --mgb20">
                            <p>Команда</p>
                        </div>
                        <div class="section__title_buttons g-flex-between g-flex-align-center --mgb60 slider_expert_block_head">
                            <h3>Эксперты по новостройкам</h3>

                            <div class="buttons g-flex-align-center --nomobile">
                                <select onchange="ajaxUpdateAgent('slider_expert_block_wrap')" class="block_sort_select" name="sort_peaple" data-placeholder="По рейтингу">
                                    <option value="">&nbsp;</option>
                                    <option <? if ($_GET['sort'] == 'PROPERTY_RATING') {echo "selected ";}?>value="sort=PROPERTY_RATING&order=DESC">По рейтингу</option>
                                    <option <? if ($_GET['sort'] == 'PROPERTY_SURNAME') {echo "selected ";}?> <?=($_GET['sort'] ? "" : "selected")?> value="sort=PROPERTY_SURNAME&order=ASC"> По фамилии от А до Я</option>
                                </select>
                            </div>
                        </div>

                        <div class="section__peoples justify_center_none slider_content_block g-flex-wrap g-flex-between g-flex-align-start">
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
                            $GLOBALS['arrWorkers']['SECTION_ID']= 4;

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
                            <br>
                        </div>
                    </div>

                    <a href="/about/" target="_blank" class="zo_section__edge-button section__edge-button wow fadeInLeft  g-flex-align-center --mgb90">
                        <div class="arrow g-flex-align-center g-flex-justify-center">
                            <svg class="icon">
                                <use xlink:href="#ArrowSquare"></use>
                            </svg>
                        </div>
                        О компании
                    </a>

                    <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/choose-expert-new-buildings.php');?>
                </div>

                <!-- + Эксперты по коммерции -->
                <div class="section__content-slide">
                    <div class="slider_expert2_block_wrap">
                        <div class="section__big-text --mgb20">
                            <p>Команда</p>
                        </div>
                        <div class="section__title_buttons g-flex-between g-flex-align-center --mgb60 slider_expert2_block_head">
                            <h3>Эксперты по коммерции</h3>

                            <div class="buttons g-flex-align-center --nomobile">
                                <select id="selectOkrug" class="okrug_select" multiple onchange="ajaxUpdateAgent('slider_expert2_block_wrap')" data-placeholder="Округ Москвы" style="width: 200px;">
                                    <option value="">&nbsp;</option>
                                    <option value="ЦАО">ЦАО</option>
                                    <option value="САО">САО</option>
                                    <option value="СВАО">СВАО</option>
                                    <option value="ВАО">ВАО</option>
                                    <option value="ЮВАО">ЮВАО</option>
                                    <option value="ЮАО">ЮАО</option>
                                    <option value="ЮЗАО">ЮЗАО</option>
                                    <option value="ЗАО">ЗАО</option>
                                    <option value="СЗАО">СЗАО</option>
                                    <option value="ЗелАО">ЗелАО</option>
                                    <option value="НАО">НАО</option>
                                    <option value="ТАО" value="ТАО">ТАО</option>
                                </select>
                            </div>
                        </div>

                        <div class="section__peoples justify_center_none slider_content_block g-flex-wrap g-flex-between g-flex-align-start">
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
                            $GLOBALS['arrWorkers']['SECTION_ID']= 5;

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
                    </div>

                    <a href="/about/" target="_blank" class="zo_section__edge-button section__edge-button wow fadeInLeft  g-flex-align-center --mgb90">
                        <div class="arrow g-flex-align-center g-flex-justify-center">
                            <svg class="icon">
                                <use xlink:href="#ArrowSquare"></use>
                            </svg>
                        </div>
                        О компании
                    </a>

                    <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/choose-comercial-expert.php');?>
                </div>

                <!-- + Юристы -->
                <div class="section__content-slide">
                    <div class="slider_adv_block_wrap">
                        <div class="section__big-text --mgb20">
                            <p>Команда</p>
                        </div>
                        <div class="section__title_buttons g-flex-between g-flex-align-center --mgb60 slider_adv_block_head">
                            <h3>Юристы</h3>

                            <div class="buttons g-flex-align-center --nomobile">
                                <select onchange="ajaxUpdateAgent('slider_adv_block_wrap')" class="block_sort_select" name="sort_peaple" data-placeholder="По рейтингу">
                                    <option value="">&nbsp;</option>
                                    <option <? if ($_GET['sort'] == 'PROPERTY_RATING') {echo "selected ";}?>value="?sort=PROPERTY_RATING&order=DESC">По рейтингу</option>
                                    <option <? if ($_GET['sort'] == 'PROPERTY_SURNAME') {echo "selected ";}?> <?=($_GET['sort'] ? "" : "selected")?> value="?sort=PROPERTY_SURNAME&order=ASC"> По фамилии от А до Я</option>
                                </select>
                            </div>
                        </div>

                        <div class="section__peoples justify_center_none slider_content_block g-flex-wrap g-flex-between g-flex-align-start">
                            <?
                            $arSort = "PROPERTY_SURNAME";
                            $arOrder = "ASC";

                            if($_GET['sort']) {
                                $arSort = $_GET['sort'];
                            }

                            if($_GET['order']) {
                                $arOrder = $_GET['order'];
                            }

                            $GLOBALS['arrWorkers']=array("SECTION_ID" => 6);

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
                            <br>
                        </div>
                    </div>

                    <a href="/about/" target="_blank" class="zo_section__edge-button section__edge-button wow fadeInLeft  g-flex-align-center --mgb90">
                        <div class="arrow g-flex-align-center g-flex-justify-center">
                            <svg class="icon">
                                <use xlink:href="#ArrowSquare"></use>
                            </svg>
                        </div>
                        О компании
                    </a>

                    <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/choose-lawyer.php');?>
                </div>

                <!-- + Кредитные брокеры -->
                <div class="section__content-slide">
                    <div class="slider_broker_block_wrap">
                        <div class="section__big-text --mgb20">
                            <p>Команда</p>
                        </div>
                        <div class="section__title_buttons g-flex-between g-flex-align-center --mgb60 slider_broker_block_head">
                            <h3>Кредитные брокеры</h3>
                            <div class="buttons g-flex-align-center --nomobile">
                                <select onchange="ajaxUpdateAgent('slider_broker_block_wrap')" class="block_sort_select" name="sort_peaple" data-placeholder="По рейтингу">
                                    <option value="">&nbsp;</option>
                                    <option <? if ($_GET['sort'] == 'PROPERTY_RATING') {echo "selected ";}?>value="?sort=PROPERTY_RATING&order=DESC">По рейтингу</option>
                                    <option <? if ($_GET['sort'] == 'PROPERTY_SURNAME') {echo "selected ";}?> <?=($_GET['sort'] ? "" : "selected")?> value="?sort=PROPERTY_SURNAME&order=ASC"> По фамилии от А до Я</option>
                                </select>
                            </div>
                        </div>

                        <div class="section__peoples justify_center_none slider_content_block g-flex-wrap g-flex-between g-flex-align-start">
                            <?
                            $arSort = "PROPERTY_SURNAME";
                            $arOrder = "ASC";

                            if($_GET['sort']) {
                                $arSort = $_GET['sort'];
                            }

                            if($_GET['order']) {
                                $arOrder = $_GET['order'];
                            }

                            $GLOBALS['arrWorkers']=array("SECTION_ID" => 7);

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
                    </div>

                    <a href="/about/" target="_blank" class="zo_section__edge-button section__edge-button wow fadeInLeft  g-flex-align-center --mgb90">
                        <div class="arrow g-flex-align-center g-flex-justify-center">
                            <svg class="icon">
                                <use xlink:href="#ArrowSquare"></use>
                            </svg>
                        </div>
                        О компании
                    </a>

                    <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/choose-lawyer.php');?>
                </div>

                <!-- + Маркетологи -->
                <div class="section__content-slide">
                    <div class="slider_market_block_wrap">
                        <div class="section__big-text --mgb20">
                            <p>Команда</p>
                        </div>
                        <div class="section__title_buttons g-flex-between g-flex-align-center --mgb60 slider_market_block_head">
                            <h3>Маркетологи</h3>
                            <div class="buttons g-flex-align-center --nomobile">
                                <select onchange="ajaxUpdateAgent('slider_market_block_wrap')" class="block_sort_select" name="sort_peaple" data-placeholder="По рейтингу">
                                    <option value="">&nbsp;</option>
                                    <option <? if ($_GET['sort'] == 'PROPERTY_RATING') {echo "selected ";}?>value="?sort=PROPERTY_RATING&order=DESC">По рейтингу</option>
                                    <option <? if ($_GET['sort'] == 'PROPERTY_SURNAME') {echo "selected ";}?> <?=($_GET['sort'] ? "" : "selected")?> value="?sort=PROPERTY_SURNAME&order=ASC"> По фамилии от А до Я</option>
                                </select>
                            </div>
                        </div>

                        <div class="section__peoples justify_center_none slider_content_block g-flex-wrap g-flex-between g-flex-align-start">
                            <?
                            $arSort = "PROPERTY_SURNAME";
                            $arOrder = "ASC";

                            if($_GET['sort']) {
                                $arSort = $_GET['sort'];
                            }

                            if($_GET['order']) {
                                $arOrder = $_GET['order'];
                            }

                            $GLOBALS['arrWorkers']=array("SECTION_ID" => 8);

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
                    </div>

                    <a href="/about/" target="_blank" class="zo_section__edge-button section__edge-button wow fadeInLeft  g-flex-align-center --mgb90">
                        <div class="arrow g-flex-align-center g-flex-justify-center">
                            <svg class="icon">
                                <use xlink:href="#ArrowSquare"></use>
                            </svg>
                        </div>
                        О компании
                    </a>

                    <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/choose-lawyer.php');?>
                </div>

                <!-- + Операторы -->
                <div class="section__content-slide">
                    <div class="slider_operator_block_wrap">
                        <div class="section__big-text --mgb20">
                            <p>Команда</p>
                        </div>
                        <div class="section__title_buttons g-flex-between g-flex-align-center --mgb60 slider_operator_block_head">
                            <h3>Операторы</h3>
                            <div class="buttons g-flex-align-center --nomobile">
                                <select onchange="ajaxUpdateAgent('slider_operator_block_wrap')" class="block_sort_select" name="sort_peaple" data-placeholder="По рейтингу">
                                    <option value="">&nbsp;</option>
                                    <option <? if ($_GET['sort'] == 'PROPERTY_RATING') {echo "selected ";}?>value="?sort=PROPERTY_RATING&order=DESC">По рейтингу</option>
                                    <option <? if ($_GET['sort'] == 'PROPERTY_SURNAME') {echo "selected ";}?> <?=($_GET['sort'] ? "" : "selected")?> value="?sort=PROPERTY_SURNAME&order=ASC"> По фамилии от А до Я</option>
                                </select>
                            </div>
                        </div>

                        <div class="section__peoples justify_center_none slider_content_block g-flex-wrap g-flex-between g-flex-align-start">
                            <?
                            $arSort = "PROPERTY_SURNAME";
                            $arOrder = "ASC";

                            if($_GET['sort']) {
                                $arSort = $_GET['sort'];
                            }

                            if($_GET['order']) {
                                $arOrder = $_GET['order'];
                            }

                            $GLOBALS['arrWorkers']=array("SECTION_ID" => 9);

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
                    </div>

                    <a href="/about/" target="_blank" class="zo_section__edge-button section__edge-button wow fadeInLeft  g-flex-align-center --mgb90">
                        <div class="arrow g-flex-align-center g-flex-justify-center">
                            <svg class="icon">
                                <use xlink:href="#ArrowSquare"></use>
                            </svg>
                        </div>
                        О компании
                    </a>

                    <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/choose-lawyer.php');?>
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
        "FORM_ID" => "",
        "PATH" => "/include/section_have_questions.php"
    )
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>