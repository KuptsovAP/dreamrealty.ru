<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ПРЕИМУЩЕСТВА ПОКУПКИ НОВОСТРОЙКИ С НАМИ");
?>    <link rel="stylesheet" href="/bitrix/templates/realty/assets/css/advantages.css?v=<?=rand(0, 255)?>">

<?
global $benefitsFilter;
$benefitsFilter['PROPERTY_URL'] = '%'.$APPLICATION->GetCurPage().'%';
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "benefits",
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
        "TITLE" => 'агентство мечты'
    ),
    false
);?>

    <section class="section how-it-works">
        <div class="wrapper">
            <div class="section__big-text --mgb40">
                <p>Команда</p>
            </div>
            <div class="section__content-changer g-flex-column">
                <div class="section__content-tabs -m-left g-flex-justify-center g-flex-align-center fit-content center --mgb60">
                    <div class="section__content-tab active">
                        Эксперты по новостройкам
                    </div>
                    <div class="section__content-tab">
                        Юристы
                    </div>
                    <div class="section__content-tab">
                        Кредитные брокеры
                    </div>
                </div>
                <svg class="--green" viewBox="0 0 32 32">
                    <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="section__content-slider slider">
                    <!-- + Эксперты по новостройкам -->
                    <div class="section__content-slide">
                        <div class="slider_expert_block_wrap">
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

                        <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30 --key">
                            <h3>Выбрать <span class="--green">эксперта по новостройкам</span></h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --green">Отправить заявку</button>
                            <label>
                                <select data-placeholder="Цель покупки*" required>
                                    <option value="">&nbsp;</option>
                                    <option>жить</option>
                                    <option>сдавать</option>
                                    <option>инвестировать</option>
                                    <option>нет определенности</option>
                                </select>
                            </label>
                            <label>
                                <select data-placeholder="Бюджет*">
                                    <option value="">&nbsp;</option>
                                    <option>до 10 млн.</option>
                                    <option>от 10 до 20 млн.</option>
                                    <option>от 20 до 30 млн.</option>
                                    <option>от 30 млн.</option>
                                </select>
                            </label>
                            <label class="inputCheckbox">
                                <input type="checkbox" required checked>
                                <span>Нажимая на кнопку "Отправить заявку", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                            </label>
                            <label class="w66 w100-xs">
                                <input type="text" placeholder="Комментарии">
                            </label>
                        </form>
                    </div>
                    <!-- + Юристы -->
                    <div class="section__content-slide">
                        <div class="slider_adv_block_wrap">
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

                        <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30 --key">
                            <h3>Заказать <span class="--green">консультацию</span> юриста по недвижимости</h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --green">Заказать консультацию</button>
                            <label>
                                <select data-placeholder="Тип услуги*" required>
                                    <option value="">&nbsp;</option>
                                    <option>первичная консультация</option>
                                    <option>покупка новостройки</option>
                                    <option>покупка вторички</option>
                                    <option>продажа вторички</option>
                                    <option>альтернативная сделка</option>
                                </select>
                            </label>
                            <label>
                                <input type="text" placeholder="Комментарии">
                            </label>
                            <label class="inputCheckbox">
                                <input type="checkbox" required checked>
                                <span>Нажимая на кнопку "Заказать консультацию", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                            </label>
                        </form>
                    </div>
                    <!-- + Кредитные брокеры -->
                    <div class="section__content-slide">
                        <div class="slider_broker_block_wrap">
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

                        <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30 --key">
                            <h3>Заказать <span class="--green">консультацию кредитного брокера</span></h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --green">Заказать консультацию</button>
                            <label>
                                <select data-placeholder="Тип услуги*" required>
                                    <option value="">&nbsp;</option>
                                    <option>ипотека</option>
                                    <option>рефинансирование</option>
                                    <option>проверка кредитной истории</option>
                                </select>
                            </label>
                            <label>
                                <input type="text" placeholder="Комментарии">
                            </label>
                            <label class="inputCheckbox">
                                <input type="checkbox" required checked>
                                <span>Нажимая на кнопку "Заказать консультацию", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                            </label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section how-it-works">
        <div class="wrapper">
            <h2 class="section__title --mgb20">Хотите узнать, <span class="--green">как мы будем покупать</span> ВАм квартиру?</h2>
            <p class="section__descriptor descriptor --mgb60">Процессом покупки будут заниматься минимум два специалиста</p>
            <div class="section__content-changer g-flex-column">
                <div class="section__content-tabs g-flex-between g-flex-align-center center --mgb60">
                    <div class="section__content-tab active">
                        Эксперт по новостройкам
                    </div>
                    <div class="section__content-tab">
                        Юрист
                    </div>
                    <div class="section__content-tab">
                        Кредитный брокер
                    </div>
                </div>
                <svg class="--green" viewBox="0 0 32 32">
                    <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="section__content-slider slider">
                    <div class="section__content-slide">
                        <div class="section__content-advantages g-flex-wrap g-flex-between g-flex-align-start">
                            <div class="section__content-advantage g-flex-column g-flex-align-start">
                                <img loading="lazy" src="/html/assets/svg/Bedroom.svg" alt="">
                                <p>В деталях изучит ваши требования к квартире мечты</p>
                            </div>
                            <div class="section__content-advantage g-flex-column g-flex-align-start">
                                <img loading="lazy" src="/html/assets/svg/Presentation.svg" alt="">
                                <p>Познакомит с надежными застройщиками и современными ЖК</p>
                            </div>
                            <div class="section__content-advantage g-flex-column g-flex-align-start">
                                <img loading="lazy" src="/html/assets/svg/ErrorFind.svg" alt="">
                                <p>На этапе поиска отсеет неликвидные и рисковые объекты</p>
                            </div>
                        </div>
                        <a href="/buy/?id=2" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt10 --mgb60">
                            <div class="arrow g-flex-align-center g-flex-justify-center">
                                <svg class="icon">
                                    <use xlink:href="#ArrowSquare"></use>
                                </svg>
                            </div>
                            Все подробности
                        </a>
                    </div>
                    <div class="section__content-slide">
                        <div class="section__content-advantages g-flex-wrap g-flex-between g-flex-align-start">
                            <div class="section__content-advantage g-flex-column g-flex-align-start">
                                <img loading="lazy" src="/html/assets/svg/AskAndQuestion.svg" alt="">
                                <p>Анализирует документы и отвечает на все вопросы</p>
                            </div>
                            <div class="section__content-advantage g-flex-column g-flex-align-start">
                                <img loading="lazy" src="/html/assets/svg/ShieldDocuments.svg" alt="">
                                <p>Проверяет объект и готовит правовой отчет с рекомендациями</p>
                            </div>
                            <div class="section__content-advantage g-flex-column g-flex-align-start">
                                <img loading="lazy" src="/html/assets/svg/ReversedSettings.svg" alt="">
                                <p>Оптимизирует налоги, расходы и схему сделки</p>
                            </div>
                        </div>
                        <a href="/buy/?id=3" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt60 --mgb90">
                            <div class="arrow g-flex-align-center g-flex-justify-center">
                                <svg class="icon">
                                    <use xlink:href="#ArrowSquare"></use>
                                </svg>
                            </div>
                            Все подробности
                        </a>
                    </div>
                    <div class="section__content-slide">
                        <div class="section__content-advantages g-flex-wrap g-flex-between g-flex-align-start">
                            <div class="section__content-advantage g-flex-column g-flex-align-start">
                                <img loading="lazy" src="/html/assets/svg/ErrorFind.svg" alt="">
                                <p>Проверит вашу кредитную историю</p>
                            </div>
                            <div class="section__content-advantage g-flex-column g-flex-align-start">
                                <img loading="lazy" src="/html/assets/svg/DoneCircle.svg" alt="">
                                <p>Оценит шансы на одобрение ипотеки</p>
                            </div>
                            <div class="section__content-advantage g-flex-column g-flex-align-start">
                                <img loading="lazy" src="/html/assets/svg/RoubleHands.svg" alt="">
                                <p>Подберет лучшие ипотечные программы с учетом вашей ситуации</p>
                            </div>
                        </div>
                        <a href="/buy/?id=4" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt60 --mgb90">
                            <div class="arrow g-flex-align-center g-flex-justify-center">
                                <svg class="icon">
                                    <use xlink:href="#ArrowSquare"></use>
                                </svg>
                            </div>
                            Все подробности
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" role="document">
        <div class="wrapper">
            <div class="text-block">

                <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt40 --key">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Выбрать <span class="--green">эксперта по новостройкам</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <button type="submit" class="btn --green">Отправить заявку</button>
                    <label>
                        <select  miltiple="miltiple" data-placeholder="Цель покупки*" required>
                            <option value="">&nbsp;</option>
                            <option>жить</option>
                            <option>сдавать</option>
                            <option>инвестировать</option>
                            <option>нет определенности</option>
                        </select>
                    </label>
                    <label>
                        <select data-placeholder="Бюджет">
                            <option value="">&nbsp;</option>
                            <option>до 10 млн.</option>
                            <option>от 10 до 20 млн.</option>
                            <option>от 20 до 30 млн.</option>
                            <option>от 30 млн.</option>
                        </select>
                    </label>
                    <label class="inputCheckbox">
                        <input type="checkbox" required checked>
                        <span>Нажимая на кнопку "Отправить заявку", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                    </label>
                    <label class="w66 w100-xs">
                        <input type="text" placeholder="Комментарии">
                    </label>
                </form>
            </div>
        </div>
    </div>

    <div class="transparent_pop-up obespet-platezh z-15 g-flex-align-center g-flex-justify-center" role="document">
        <div class="text-block">
            <div class="pop-up__close_z-index">
                <svg class="icon">
                    <use xlink:href="#Close"></use>
                </svg>
            </div>
            <h3 class="--mgb20 obespet-platezh__link">Что такое <span class="--green">обеспечительный платеж</span>, и зачем он нужен?</h3>
            <p><b style="font-size: 1.2rem" class="--green">Обеспечительный платеж</b> - это денежная сумма, которую вы вносите для организации полноценной консультации и начала содержательной работы с экспертом отдела новостроек компании Dream Realty, которая возвращается вам или засчитывается в счет будущей оплаты услуг компании.</p>
            <p>По сути, он подтверждает серьезность ваших намерений и фиксирует наши обязательства по поиску и бронированию наиболее подходящего под ваш запрос объекта недвижимости.</p>
            <p><b>Исходя из нашей практики:</b></p>
            <ul>
                <li>5 из 10 обратившихся к нам клиентов покупают желаемую недвижимость уже в первый месяц нашего сотрудничества;</li>
                <li>Еще трое – в течение первых трех месяцев работы с нами;</li>
                <li>Оставшиеся покупатели в силу разных финансовых причин (продажа другой квартиры, срочный вклад в банке, коррекция на фондовом рынке и т.п.) обычно возвращаются в течение следующих шести месяцев.</li>
            </ul>
        </div>
    </div>

    <div class="transparent_pop-up obespet-platezh__form20k z-15 g-flex-align-start g-flex-justify-center" role="dialog" tabindex="-1" id="obespet-platezh__form20k_online">
        <div class="wrapper" role="document">
            <div class="pop-up__close_z-index">
                <svg class="icon">
                    <use xlink:href="#Close"></use>
                </svg>
            </div>
            <h3>Оставить заявку</h3>
            <p class="--big">Комплексная работа. Обеспечительный платеж 20 000 р.</p>
            <form>
                <p class="--mgb20 --mgt20">Пожалуйста, заполните все поля ниже</p>
                <label>
                    <input type="text" placeholder="Имя*" required>
                </label>
                <label>
                    <input type="text" placeholder="Фамилия*" required>
                </label>
                <label>
                    <input type="number" class="" placeholder="Телефон*" required>
                </label>
                <label>
                    <input type="email" placeholder="E-mail">
                </label>
                <label>
                    <select data-placeholder="Цель покупки*" required>
                        <option value="">&nbsp;</option>
                        <option>Жить</option>
                        <option>Сдавать</option>
                        <option>Инвестировать</option>
                        <option>Нет определенности</option>
                    </select>
                </label>
                <label>
                    <select data-placeholder="Бюджет покупки">
                        <option value="">&nbsp;</option>
                        <option>до 10 млн.</option>
                        <option>от 10 до 20 млн.</option>
                        <option>от 20 до 30 млн.</option>
                        <option>от 30 млн.</option>
                    </select>
                </label>
                <label>
                    <input type="text" placeholder="Город">
                </label>
                <p class="--mgt20 --mgb20">Выберите эксперта или напишите пожелания по выбору эксперта</p>
                <label>
                    <select data-placeholder="Выбрать эксперта">
                        <option value="">&nbsp;</option>
                        <option>Любой эксперт</option>
                        <option>Михаил Савельев</option>
                        <option>Александр Родионов</option>
                        <option>Ерлан Ажибаев</option>
                        <option>Антон Борисов</option>
                        <option>Александр Тиховский</option>
                    </select>
                </label>
                <label>
                    <input type="text" placeholder="Напишите пожелания, если необходимо">
                </label>
                <label>
                    <input type="text" placeholder="Пожелания по датам и времени встречи">
                </label>
                <p class="--mgt40 --mgb20 --text-center"><b class="--big">Сумма: 20 000 р.</b></p>
                <div class="section__centered-button g-flex-justify-center --mgb40">
                    <button type="submit" class="btn --green">Перейти к оплате</button>
                </div>
                <p class="--text-center --mgb30"><b>Вы будете перенаправлены на сайт платежной системы. После успешной оплаты мы свяжемся с Вами в течение одного рабочего дня и подтвердим встречу.</b></p>
                <p class="--text-center">Заполняя эту заявку и производя оплату, вы соглашаетесь с условиями <a href="https://test.dreamrealty.ru/upload/publichnyy-dogovor-oferta2.pdf">Публичного договора</a>.</p>
            </form>
        </div>
    </div>

    <div class="transparent_pop-up obespet-platezh__form30k z-15 g-flex-align-start g-flex-justify-center" role="dialog" tabindex="-1" id="obespet-platezh__form30k_online">
        <div class="pop-up-content">
            <div class="pop-up-dialog wrapper" role="document">
                <div class="pop-up__close_z-index">
                    <svg class="icon">
                        <use xlink:href="#Close"></use>
                    </svg>
                </div>
                <h3>Оставить заявку</h3>
                <p class="--big">Комплексная работа. Обеспечительный платеж 30 000 р.</p>
                <form>
                    <p class="--mgb20 --mgt20">Пожалуйста, заполните все поля ниже</p>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="text" placeholder="Фамилия*" required>
                    </label>
                    <label>
                        <input type="number" class="" placeholder="Телефон*" required>
                    </label>
                    <label>
                        <input type="email" placeholder="E-mail">
                    </label>
                    <label>
                        <select data-placeholder="Цель покупки*" required>
                            <option value="">&nbsp;</option>
                            <option>Жить</option>
                            <option>Сдавать</option>
                            <option>Инвестировать</option>
                            <option>Нет определенности</option>
                        </select>
                    </label>
                    <label>
                        <select data-placeholder="Бюджет покупки">
                            <option value="">&nbsp;</option>
                            <option>до 10 млн.</option>
                            <option>от 10 до 20 млн.</option>
                            <option>от 20 до 30 млн.</option>
                            <option>от 30 млн.</option>
                        </select>
                    </label>
                    <label>
                        <input type="text" placeholder="Город">
                    </label>
                    <p class="--mgt20 --mgb20">Выберите эксперта или напишите пожелания по выбору эксперта</p>
                    <label>
                        <select data-placeholder="Выбрать эксперта">
                            <option value="">&nbsp;</option>
                            <option>Любой эксперт</option>
                            <option>Михаил Савельев</option>
                            <option>Александр Родионов</option>
                            <option>Ерлан Ажибаев</option>
                            <option>Антон Борисов</option>
                            <option>Александр Тиховский</option>
                        </select>
                    </label>
                    <label>
                        <input type="text" placeholder="Напишите пожелания, если необходимо">
                    </label>
                    <label>
                        <input type="text" placeholder="Пожелания по датам и времени встречи">
                    </label>
                    <p class="--mgt40 --mgb20 --text-center"><b class="--big">Сумма: 30 000 р.</b></p>
                    <div class="section__centered-button g-flex-justify-center --mgb40">
                        <button type="submit" class="btn --green">Перейти к оплате</button>
                    </div>
                    <p class="--text-center --mgb30"><b>Вы будете перенаправлены на сайт платежной системы. После успешной оплаты мы свяжемся с Вами в течение одного рабочего дня и подтвердим встречу.</b></p>
                    <p class="--text-center">Заполняя эту заявку и производя оплату, вы соглашаетесь с условиями <a href="https://test.dreamrealty.ru/upload/publichnyy-dogovor-oferta2.pdf">Публичного договора</a>.</p>
                </form>
            </div>
        </div>
    </div>

    <div class="transparent_pop-up obespet-platezh__form20k z-15 g-flex-align-start g-flex-justify-center" role="dialog" tabindex="-1" id="obespet-platezh__form20k_offline">
        <div class="wrapper" role="document">
            <div class="pop-up__close_z-index">
                <svg class="icon">
                    <use xlink:href="#Close"></use>
                </svg>
            </div>
            <h3>Оставить заявку</h3>
            <p class="--big">Комплексная работа. Обеспечительный платеж 20 000 р.</p>
            <form>
                <p class="--mgb20 --mgt20">Пожалуйста, заполните все поля ниже</p>
                <label>
                    <input type="text" placeholder="Имя*" required>
                </label>
                <label>
                    <input type="text" placeholder="Фамилия*" required>
                </label>
                <label>
                    <input type="number" class="" placeholder="Телефон*" required>
                </label>
                <label>
                    <input type="email" placeholder="E-mail">
                </label>
                <label>
                    <select data-placeholder="Цель покупки*" required>
                        <option value="">&nbsp;</option>
                        <option>Жить</option>
                        <option>Сдавать</option>
                        <option>Инвестировать</option>
                        <option>Нет определенности</option>
                    </select>
                </label>
                <label>
                    <select data-placeholder="Бюджет покупки">
                        <option value="">&nbsp;</option>
                        <option>до 10 млн.</option>
                        <option>от 10 до 20 млн.</option>
                        <option>от 20 до 30 млн.</option>
                        <option>от 30 млн.</option>
                    </select>
                </label>
                <label>
                    <input type="text" placeholder="Город">
                </label>
                <p class="--mgt20 --mgb20">Выберите эксперта или напишите пожелания по выбору эксперта</p>
                <label>
                    <select data-placeholder="Выбрать эксперта">
                        <option value="">&nbsp;</option>
                        <option>Любой эксперт</option>
                        <option>Михаил Савельев</option>
                        <option>Александр Родионов</option>
                        <option>Ерлан Ажибаев</option>
                        <option>Антон Борисов</option>
                        <option>Александр Тиховский</option>
                    </select>
                </label>
                <label>
                    <input type="text" placeholder="Напишите пожелания, если необходимо">
                </label>
                <label>
                    <input type="text" placeholder="Пожелания по датам и времени встречи">
                </label>
                <div class="section__centered-button g-flex-justify-center --mgb40 --mgt40">
                    <button type="submit" class="btn --green">Записаться</button>
                </div>
                <p class="--text-center --mgb30"><b>Мы свяжемся с Вами в течение одного рабочего дня и подтвердим встречу.</b></p>
                <p class="--text-center">Заполняя эту заявку и производя оплату, вы соглашаетесь с условиями <a href="https://test.dreamrealty.ru/upload/publichnyy-dogovor-oferta2.pdf">Публичного договора</a>.</p>
            </form>
        </div>
    </div>

    <div class="transparent_pop-up obespet-platezh__form30k z-15 g-flex-align-start g-flex-justify-center" role="dialog" tabindex="-1" id="obespet-platezh__form30k_offline">
        <div class="wrapper" role="document">
            <div class="pop-up__close_z-index">
                <svg class="icon">
                    <use xlink:href="#Close"></use>
                </svg>
            </div>
            <h3>Оставить заявку</h3>
            <p class="--big">Комплексная работа. Обеспечительный платеж 30 000 р.</p>
            <form>
                <p class="--mgb20 --mgt20">Пожалуйста, заполните все поля ниже</p>
                <label>
                    <input type="text" placeholder="Имя*" required>
                </label>
                <label>
                    <input type="text" placeholder="Фамилия*" required>
                </label>
                <label>
                    <input type="number" class="" placeholder="Телефон*" required>
                </label>
                <label>
                    <input type="email" placeholder="E-mail">
                </label>
                <label>
                    <select data-placeholder="Цель покупки*" required>
                        <option value="">&nbsp;</option>
                        <option>Жить</option>
                        <option>Сдавать</option>
                        <option>Инвестировать</option>
                        <option>Нет определенности</option>
                    </select>
                </label>
                <label>
                    <select data-placeholder="Бюджет покупки">
                        <option value="">&nbsp;</option>
                        <option>до 10 млн.</option>
                        <option>от 10 до 20 млн.</option>
                        <option>от 20 до 30 млн.</option>
                        <option>от 30 млн.</option>
                    </select>
                </label>
                <label>
                    <input type="text" placeholder="Город">
                </label>
                <p class="--mgt20 --mgb20">Выберите эксперта или напишите пожелания по выбору эксперта</p>
                <label>
                    <select data-placeholder="Выбрать эксперта">
                        <option value="">&nbsp;</option>
                        <option>Любой эксперт</option>
                        <option>Михаил Савельев</option>
                        <option>Александр Родионов</option>
                        <option>Ерлан Ажибаев</option>
                        <option>Антон Борисов</option>
                        <option>Александр Тиховский</option>
                    </select>
                </label>
                <label>
                    <input type="text" placeholder="Напишите пожелания, если необходимо">
                </label>
                <label>
                    <input type="text" placeholder="Пожелания по датам и времени встречи">
                </label>
                <div class="section__centered-button g-flex-justify-center --mgb40 --mgt40">
                    <button type="submit" class="btn --green">Записаться</button>
                </div>
                <p class="--text-center --mgb30"><b>Вы будете перенаправлены на сайт платежной системы. После успешной оплаты мы свяжемся с Вами в течение одного рабочего дня и подтвердим встречу.</b></p>
                <p class="--text-center">Заполняя эту заявку и производя оплату, вы соглашаетесь с условиями <a href="https://test.dreamrealty.ru/upload/publichnyy-dogovor-oferta2.pdf">Публичного договора</a>.</p>
            </form>
        </div>
    </div>

    <div class="transparent_pop-up obespet-platezh__form30k z-15 g-flex-align-start g-flex-justify-center" role="dialog" tabindex="-1" id="obespet-platezh__formExpert">
        <div class="wrapper" role="document">
            <div class="pop-up__close_z-index">
                <svg class="icon">
                    <use xlink:href="#Close"></use>
                </svg>
            </div>
            <h3>Оставить заявку</h3>
            <p class="--big">Консультация on-line. 100% предоплата 15 000 р.</p>
            <form>
                <p class="--mgb20 --mgt20">Пожалуйста, заполните все поля ниже</p>
                <label>
                    <input type="text" placeholder="Имя*" required>
                </label>
                <label>
                    <input type="text" placeholder="Фамилия*" required>
                </label>
                <label>
                    <input type="number" class="" placeholder="Телефон*" required>
                </label>
                <label>
                    <input type="email" placeholder="E-mail">
                </label>
                <label>
                    <select data-placeholder="Цель покупки*" required>
                        <option value="">&nbsp;</option>
                        <option>Жить</option>
                        <option>Сдавать</option>
                        <option>Инвестировать</option>
                        <option>Нет определенности</option>
                    </select>
                </label>
                <label>
                    <select data-placeholder="Бюджет покупки">
                        <option value="">&nbsp;</option>
                        <option>до 10 млн.</option>
                        <option>от 10 до 20 млн.</option>
                        <option>от 20 до 30 млн.</option>
                        <option>от 30 млн.</option>
                    </select>
                </label>
                <label>
                    <input type="text" placeholder="Город">
                </label>
                <p class="--mgt20 --mgb20">Выберите эксперта или напишите пожелания по выбору эксперта</p>
                <label>
                    <select data-placeholder="Выбрать эксперта">
                        <option value="">&nbsp;</option>
                        <option>Любой эксперт</option>
                        <option>Михаил Савельев</option>
                        <option>Александр Родионов</option>
                        <option>Ерлан Ажибаев</option>
                        <option>Антон Борисов</option>
                        <option>Александр Тиховский</option>
                    </select>
                </label>
                <label>
                    <input type="text" placeholder="Напишите пожелания, если необходимо">
                </label>
                <label>
                    <input type="text" placeholder="Пожелания по датам и времени встречи">
                </label>
                <p class="--mgt40 --mgb20 --text-center"><b class="--big">Сумма: 15 000 р.</b></p>
                <div class="section__centered-button g-flex-justify-center --mgb40">
                    <button type="submit" class="btn --green">Перейти к оплате</button>
                </div>
                <p class="--text-center --mgb30"><b>Вы будете перенаправлены на сайт платежной системы. После успешной оплаты мы свяжемся с Вами в течение одного рабочего дня и подтвердим встречу.</b></p>
                <p class="--text-center">Заполняя эту заявку и производя оплату, вы соглашаетесь с условиями <a href="https://test.dreamrealty.ru/upload/publichnyy-dogovor-oferta2.pdf">Публичного договора</a>.</p>
            </form>
        </div>
    </div>

    <div class="transparent_pop-up obespet-platezh__form30k z-15 g-flex-align-start g-flex-justify-center" role="dialog" tabindex="-1" id="obespet-platezh__formTopExpert">
        <div class="wrapper" role="document">
            <div class="pop-up__close_z-index">
                <svg class="icon">
                    <use xlink:href="#Close"></use>
                </svg>
            </div>
            <h3>Оставить заявку</h3>
            <p class="--big">Консультация on-line. 100% предоплата 20 000 р.</p>
            <form>
                <p class="--mgb20 --mgt20">Пожалуйста, заполните все поля ниже</p>
                <label>
                    <input type="text" placeholder="Имя*" required>
                </label>
                <label>
                    <input type="text" placeholder="Фамилия*" required>
                </label>
                <label>
                    <input type="number" class="" placeholder="Телефон*" required>
                </label>
                <label>
                    <input type="email" placeholder="E-mail">
                </label>
                <label>
                    <select data-placeholder="Цель покупки*" required>
                        <option value="">&nbsp;</option>
                        <option>Жить</option>
                        <option>Сдавать</option>
                        <option>Инвестировать</option>
                        <option>Нет определенности</option>
                    </select>
                </label>
                <label>
                    <select data-placeholder="Бюджет покупки">
                        <option value="">&nbsp;</option>
                        <option>до 10 млн.</option>
                        <option>от 10 до 20 млн.</option>
                        <option>от 20 до 30 млн.</option>
                        <option>от 30 млн.</option>
                    </select>
                </label>
                <label>
                    <input type="text" placeholder="Город">
                </label>
                <p class="--mgt20 --mgb20">Выберите эксперта или напишите пожелания по выбору эксперта</p>
                <label>
                    <select data-placeholder="Выбрать эксперта">
                        <option value="">&nbsp;</option>
                        <option>Любой эксперт</option>
                        <option>Михаил Савельев</option>
                        <option>Александр Родионов</option>
                        <option>Ерлан Ажибаев</option>
                        <option>Антон Борисов</option>
                        <option>Александр Тиховский</option>
                    </select>
                </label>
                <label>
                    <input type="text" placeholder="Напишите пожелания, если необходимо">
                </label>
                <label>
                    <input type="text" placeholder="Пожелания по датам и времени встречи">
                </label>
                <p class="--mgt40 --mgb20 --text-center"><b class="--big">Сумма: 20 000 р.</b></p>
                <div class="section__centered-button g-flex-justify-center --mgb40">
                    <button type="submit" class="btn --green">Перейти к оплате</button>
                </div>
                <p class="--text-center --mgb30"><b>Вы будете перенаправлены на сайт платежной системы. После успешной оплаты мы свяжемся с Вами в течение одного рабочего дня и подтвердим встречу.</b></p>
                <p class="--text-center">Заполняя эту заявку и производя оплату, вы соглашаетесь с условиями <a href="https://test.dreamrealty.ru/upload/publichnyy-dogovor-oferta2.pdf">Публичного договора</a>.</p>
            </form>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>