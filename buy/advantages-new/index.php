<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ПРЕИМУЩЕСТВА ПОКУПКИ НОВОСТРОЙКИ С НАМИ");
?>    <link rel="stylesheet" href="/bitrix/templates/realty/assets/css/advantages.css?v=<?=rand(0, 255)?>">


    <section class="section advantages-page grayHalfBG">
        <div class="wrapper">
            <div class="section__big-text --mgb40">
                <p>агентство мечты</p>
            </div>
            <div class="section__advantages--full g-flex-wrap g-flex-between --mgt180">
                <a href="#advant_pop-up1" class="section__advantage --phm110 --bg-cover-xs g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/illustrations/green/01.1.svg); background-position-y: -80px;">
                    <span class="num">1</span>
                    <div class="g-flex-align-center g-flex-justify-center"><p><span class="--green">Работаем на вас</span>, а не на застройщика</p></div>
                </a>
                <a href="#advant_pop-up2" class="section__advantage --pkm90 g-flex-column g-flex-justify-end --bg-cover-xs" style="background-image: url(/html/assets/img/illustrations/green/02.svg);">
                    <span class="num">2</span>
                    <div class="g-flex-align-center g-flex-justify-center"><p>Оцениваем <span class="--green">инвестиционный потенциал</span></p></div>
                </a>
                <a href="#advant_pop-up3" class="section__advantage --pkm90 g-flex-column g-flex-justify-end --bg-cover-xs" style="background-image: url(/html/assets/img/illustrations/green/03.1.svg);">
                    <span class="num">3</span>
                    <div class="g-flex-align-center g-flex-justify-center"><p>Работаем <span class="--green">“под ключ”</span></p></div>
                </a>
                <a href="#advant_pop-up4" class="section__advantage --pkm90 g-flex-column g-flex-justify-end --bg-cover-xs" style="background-image: url(/html/assets/img/illustrations/green/04.svg);">
                    <span class="num">4</span>
                    <div class="g-flex-align-center g-flex-justify-center"><p>Владеем <span class="--green">инсайдерской информацией</span></p></div>
                </a>
                <a href="#advant_pop-up5" class="section__advantage --pkm90 g-flex-column g-flex-justify-end --bg-cover-xs" style="background-image: url(/html/assets/img/illustrations/green/05.1.svg);">
                    <span class="num">5</span>
                    <div class="g-flex-align-center g-flex-justify-center"><p>Предлагаем <span class="--green">100% рынка новостроек</span></div>
                </a>
                <a href="#advant_pop-up6" class="section__advantage --pkm90 g-flex-column g-flex-justify-end --bg-cover-xs" style="background-image: url(/html/assets/img/illustrations/green/06.svg);">
                    <span class="num">6</span>
                    <div class="g-flex-align-center g-flex-justify-center"><p><span class="--green">Помогаем сформировать</span> бюджет на покупку</div>
                </a>
                <a href="#advant_pop-up7" class="section__advantage --pkm90 g-flex-column g-flex-justify-end --bg-cover-xs" style="background-image: url(/html/assets/img/illustrations/green/07.svg);">
                    <span class="num">7</span>
                    <div class="g-flex-align-center g-flex-justify-center"><p><span class="--green">Официальный отчет о проверке</span> объекта и застройщика</div>
                </a>
                <a href="#advant_pop-up8" class="section__advantage --pkm90 g-flex-column g-flex-justify-end --bg-cover-xs" style="background-image: url(/html/assets/img/illustrations/green/08.svg);background-position-y: -30px;">
                    <span class="num">8</span>
                    <div class="g-flex-align-center g-flex-justify-center"><p><span class="--green">Свой YouTube канал</span> о новостройках</div>
                </a>
            </div>
        </div>
    </section>

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
                                <span>Нажимая на кнопку "Отправить заявку", вы даете согласие на обработку персональных данных</span>
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
                                <span>Нажимая на кнопку "Заказать консультацию", вы даете согласие на обработку персональных данных</span>
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
                                <span>Нажимая на кнопку "Заказать консультацию", вы даете согласие на обработку персональных данных</span>
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
                        <a href="/team/#new_building_experts" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt60 --mgb90">
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
                        <a href="/team/#lawyers" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt60 --mgb90">
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
                        <a href="/team/#credit_brokers" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt60 --mgb90">
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
                        <span>Нажимая на кнопку "Отправить заявку", вы даете согласие на обработку персональных данных</span>
                    </label>
                    <label class="w66 w100-xs">
                        <input type="text" placeholder="Комментарии">
                    </label>
                </form>
            </div>
        </div>
    </div>

    <!-- 1: Работаем на вас , а не на застройщика -->
    <div class="advantages-pop-up pop-up g-flex-column" role="document" id="advant_pop-up1">
        <div class="pop-up-container-wrap">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="wrapper">
                        <h3 class="title d-block"><span class="--green --pd0">Работаем на вас</span>, а не на застройщика</h3>
                    </div>
                    <div class="pop-up__header_gray differences g-flex-column --next_advantages" style="padding-bottom: 218px;">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/buy-advantages-novostr--1.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№1</div>
                                    <p>Наши эксперты делают все, чтобы забронировать для вас самое лакомое предложение и <b>рекомендуют только то, во что инвестируют или хотели бы вложиться сами.</b> </p>
                                    <p>“В чем ваш интерес?” - спросите вы, зная, что за работу нам платит застройщик. </p>
                                    <p><b>Ваше повторное обращение и рекомендация – вот, что ценится нами дороже денег!</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section differences">
                    <div class="wrapper">
                        <div class="advantage-pop-up__differences g-flex-between g-flex-align-start">
                            <div class="advantage-pop-up__difference">
                                <div class="advantage-pop-up__difference_title g-flex-align-center g-flex-justify-center --gray">
                                    <img loading="lazy" src="/html/assets/svg/AdvantDiff1.svg" alt="">
                                    <p>Обычный агент <br>по новостройкам</p>
                                </div>
                                <ul>
                                    <li>знакомит только с теми ЖК, по которым застройщик выплачивает комиссию, ограничивая в вас выборе</li>
                                    <li>уговаривает купить квартиру там, где комиссия от застройщика выше</li>
                                    <li>избегает скидок и рассрочек при покупке квартиры, чтобы больше и быстрее заработать на сделке</li>
                                    <li>активно предлагает дисконтные и неликвидные квартиры, зарабатывая “баллы” у застройщика</li>
                                    <li>при поиске ЖК на высокой стадии готовности предлагает выбрать квартиру из остатков застройщика по высоким ценам</li>
                                    <li>закрывает глаза на качество и сроки постройки дома, а также репутацию застройщика</li>
                                </ul>
                            </div>
                            <div class="advantage-pop-up__difference">
                                <div class="advantage-pop-up__difference_title g-flex-align-center g-flex-justify-center --green">
                                    <img loading="lazy" src="/html/assets/svg/AdvantDiff2.svg" alt="">
                                    <p>Суперэксперт <br>Dream Realty</p>
                                </div>
                                <ul>
                                    <li>не ограничивает вас в выборе жилых комплексов, предлагая весь рынок, в том числе свежую вторичку и квартиры по уступке</li>
                                    <li>объективно рассказывает о плюсах и минусах каждого ЖК, оставляя выбор за вами</li>
                                    <li>добивается наилучших условий по цене и срокам оплаты, делая ставку не на разовую комиссию, а на долгосрочную работу с вами</li>
                                    <li>отсекает неудачные планировки и этажи, а также неликвидные квартиры, предлагаемые застройщиком</li>
                                    <li>при поиске ЖК на высокой стадии готовности предлагает покупать квартиру не у застройщика, а по уступке с хорошей экономией по цене</li>
                                    <li>раскрывает глаза на реальное состояние дел застройщика и конкретных ЖК</li>
                                </ul>
                            </div>
                        </div>
                        <div class="section__big-text --mgt40 --mgb20 for-pop-up">
                            <p>ВАША ВЫГОДА</p>
                        </div>
                        <h3 class="--mgb40">вы получаете <span class="--green">честную и выгодную сделку</span></h3>
                        <h4 class="--mgb60">Выбрать <span class="--green">удобный формат работы</span> прямо сейчас</h4>
                        <div class="section__content-changer g-flex-column">
                            <div class="section__content-tabs g-flex-justify-center g-flex-align-center fit-content center --mgb60 -m-left">
                                <div class="section__content-tab active">
                                    Комплексная работа
                                </div>
                                <div class="section__content-tab">
                                    Разовая консультация
                                </div>
                            </div>
                            <svg class="--green" viewBox="0 0 32 32">
                                <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="section__content-slider slider ">
                                <div class="section__content-slide">
                                    <div class="section__advantage-pop-up_video center js_video-ratio --mgb60" data-video="https://www.youtube.com/embed/DnjgQK6bHlY" style="background-image: url(/html/assets/img/Play-pop-up.png);"></div>

                                    <div class="section__advantage-pop-up_text-block">
                                        <p class="--mgb40"><b>Подойдет тем, кто:</b></p>
                                        <ul class="--mgb30">
                                            <li>не определился с локацией и/или целями покупки (жить, сдавать или заработать на перепродаже),</li>
                                            <li>планирует или уже инвестирует в недвижимость,</li>
                                            <li>рассчитывает на объективную детальную проработку своего запроса (предложение и обсуждение конкретных вариантов, разработка плана дальнейших действий, поездки по районам и жилым комплексам, переговоры с застройщиками, подготовка и сопровождение сделки и др.),</li>
                                            <li>рассчитывает получить спец.условия, редкие планировочные решения, скидки, рассрочку по покупке новостройки через нас,</li>
                                            <li>интересуется не только покупкой новостройки, но и другими вопросами в сфере недвижимости (продажа, покупка, аренда вторичной или коммерческой недвижимости, юридическое сопровождение сделки, одобрение ипотеки),</li>
                                            <li>высоко ценит сервис и отношение к клиенту в таких мелочах, как свежесваренный кофе или чай с выпечкой, наглядные презентации проектов, оперативное подключение экспертов другого отдела и многое другое. </li>
                                        </ul>
                                        <div class="docs_block g-flex-align-center g-flex-between">
                                            <p><b>Мы гарантируем строгое соблюдение всех договоренностей, сроков и иных условий, прописанных в договоре!</b></p>
                                            <a href="https://dreamrealty.ru/upload/publichnyy-dogovor-oferta2.pdf" target="_blank" class="doc g-flex-align-center">
                                                <svg class="icon">
                                                    <use xlink:href="#PDFIcon"></use>
                                                </svg>
                                                Публичный <br>договор&nbsp;оферты
                                            </a>
                                        </div>
                                    </div>

                                    <h4 class="--mgt60 obespet-platezh__link">Что такое <a href="" class="--green">обеспечительный платеж</a>, и зачем он нужен?</h4>

                                    <div class="section__content-changer g-flex-column --mgt60">
                                        <div class="section__content-tabs g-flex-justify-center g-flex-align-center fit-content center --mgb60 -m-left">
                                            <div class="section__content-tab active">
                                                <p class="--text-center">Обеспечительный платеж <br>20 000 рублей на 3 месяца</p>
                                            </div>
                                            <div class="section__content-tab">
                                                <p class="--text-center">Обеспечительный платеж <br>30 000 рублей на 6 месяцев</p>
                                            </div>
                                        </div>
                                        <svg class="--green" viewBox="0 0 32 32">
                                            <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <div class="section__content-slider slider">
                                            <div class="section__content-slide g-flex-column-xs g-flex-justify-center g-flex-align-center" style="display: flex;">
                                                <a href="#obespet-platezh__form20k_online" class="btn --green w100-xs --max-content --mgr60-sm --mgr0-xs js__open-hash_pop-up">Записаться и оплатить он-лайн</a>
                                                <a href="#obespet-platezh__form20k_offline" class="btn --green --max-content js__open-hash_pop-up w100-xs">Записаться и оплатить в офисе</a>
                                            </div>
                                            <div class="section__content-slide g-flex-column-xs g-flex-justify-center g-flex-align-center" style="display: flex;">
                                                <a href="#obespet-platezh__form30k_online" class="btn --green w100-xs --max-content --mgr60-sm --mgr0-xs js__open-hash_pop-up">Записаться и оплатить он-лайн</a>
                                                <a href="#obespet-platezh__form30k_offline" class="btn --green --max-content js__open-hash_pop-up w100-xs">Записаться и оплатить в офисе</a>
                                            </div>
                                        </div>
                                    </div>

                                    <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt20 --key">
                                        <h3>Заказать <span class="--green">звонок</span></h3>
                                        <label>
                                            <input type="text" placeholder="Имя*" required>
                                        </label>
                                        <label>
                                            <input type="tel" class="phone" placeholder="Телефон*" required>
                                        </label>
                                        <button type="submit" class="btn --green">Заказать звонок</button>
                                        <label class="w66 w100-xs">
                                            <input type="text" placeholder="Комментарии">
                                        </label>
                                        <label class="inputCheckbox">
                                            <input type="checkbox" required checked>
                                            <span>Нажимая на кнопку "Заказать звонок", вы даете согласие на обработку персональных данных</span>
                                        </label>
                                    </form>

                                </div>
                                <div class="section__content-slide">
                                    <div class="section__advantage-pop-up_video center js_video-ratio --mgb60" data-video="https://www.youtube.com/embed/XPTJ0MGodMk" style="background-image: url(/html/assets/img/Play-pop-up2.png);">

                                    </div>
                                    <div class="section__advantage-pop-up_text-block">
                                        <p class="--mgb40"><b>Подойдет тем, кто:</b></p>
                                        <ul class="--mgb30">
                                            <li>хочет получить объективный совет эксперта по выбору одного из 2-3 жилых комплексов, корпусов или планировки в конкретном ЖК, мнение о застройщике, соотношении "цена-качество" и др.</li>
                                            <li>определился с целями покупки (жить, сдавать или заработать на перепродаже) и даже ориентируется в конкретных застройщиках и их ЖК,</li>
                                            <li>рассчитывает на независимую общую консультацию и поддержание связи путем дистанционного взаимодействия в дальнейшем,</li>
                                            <li>планирует сделать выбор и забронировать объект недвижимости в будущем,</li>
                                            <li>интересуется не только покупкой новостройки, но и одобрением ипотеки в московских банках.</li>
                                        </ul>
                                        <div class="docs_block g-flex-align-center g-flex-between">
                                            <p><b>Мы гарантируем строгое соблюдение всех договоренностей, сроков и иных условий, прописанных в договоре!</b></p>
                                            <a href="https://dreamrealty.ru/upload/publichnyy-dogovor-oferta2.pdf" target="_blank" class="doc g-flex-align-center">
                                                <svg class="icon">
                                                    <use xlink:href="#PDFIcon"></use>
                                                </svg>
                                                Публичный <br>договор&nbsp;оферты
                                            </a>
                                        </div>
                                    </div>
                                    <div class="section__content-changer g-flex-column --mgt60">
                                        <div class="section__content-tabs g-flex-justify-center g-flex-align-center fit-content center --mgb60 -m-left">
                                            <div class="section__content-tab active">
                                                <p class="--text-center">Консультация эксперта <br>15 000 рублей</p>
                                            </div>
                                            <div class="section__content-tab">
                                                <p class="--text-center">Консультация топового эксперта <br>20 000 рублей</p>
                                            </div>
                                        </div>
                                        <svg class="--green" viewBox="0 0 32 32">
                                            <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <div class="section__content-slider slider">
                                            <div class="section__content-slide g-flex-justify-center g-flex-align-center g-flex-column-xs" style="display: flex;">
                                                <a href="#obespet-platezh__formExpert" class="btn --green w100-xs --max-content --mgr60-sm --mgr0-xs js__open-hash_pop-up">Записаться и оплатить он-лайн</a>
                                            </div>
                                            <div class="section__content-slide g-flex-justify-center g-flex-align-center g-flex-column-xs" style="display: flex;">
                                                <a href="#obespet-platezh__formTopExpert" class="btn --green w100-xs --max-content --mgr60-sm --mgr0-xs js__open-hash_pop-up">Записаться и оплатить он-лайн</a>
                                            </div>
                                        </div>
                                    </div>

                                    <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key">
                                        <h3>Заказать <span class="--green">звонок</span></h3>
                                        <label>
                                            <input type="text" placeholder="Имя*" required>
                                        </label>
                                        <label>
                                            <input type="tel" class="phone" placeholder="Телефон*" required>
                                        </label>
                                        <button type="submit" class="btn --green">Заказать звонок</button>
                                        <label class="w66 w100-xs">
                                            <input type="text" placeholder="Комментарии">
                                        </label>
                                        <label class="inputCheckbox">
                                            <input type="checkbox" required checked>
                                            <span>Нажимая на кнопку "Заказать звонок", вы даете согласие на обработку персональных данных</span>
                                        </label>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- 2 -->
    <div class="advantages-pop-up pop-up g-flex-column" role="document" id="advant_pop-up2">
        <div class="pop-up-container-wrap">
            <div class="content wrapper">
            <section class="section pop-up__header">
                <div class="pop-up__close">
                    <svg class="icon">
                        <use xlink:href="#Close"></use>
                    </svg>
                </div>
                <div class="wrapper">
                    <h3 class="title d-block">Оцениваем <span class="--green --pd0">Инвестиционный потенциал</span></h3>
                </div>
                <div class="pop-up__header_gray g-flex-column">
                    <div class="wrapper">
                        <div class="pop-up__header_top g-flex-between">
                            <div class="pop-up__header_img">
                                <img loading="lazy" src="/html/assets/img/advantages/buy-advantages-novostr--2.png" alt="">
                            </div>
                            <div class="pop-up__header_text">
                                <div class="num">№2</div>
                                <p>Наши эксперты <b>детально анализируют каждый жилой комплекс</b>, который рекомендуют к просмотру. Еще до старта продаж они изучают и оценивают его локацию, соответствие заявленному классу жилья, качество постройки, видовые характеристики, планировочные решения и другие факторы. </p>
                                <p>Неважно, вы покупаете квартиру для жизни, для сдачи в аренду или дальнейшей перепродажи, наш эксперт аргументированно посоветует только то, что <b>будет расти в цене</b> и даст <b>максимальную доходность на выходе</b>. Поверьте, это дорогого стоит!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="wrapper">
                    <div class="section__big-text --mgt40 --mgb20 for-pop-up">
                        <p>ВАША ВЫГОДА</p>
                    </div>
                    <h3 class="--mgb40">вы получаете <span class="--green">инвестиционно привлекательную</span> <br>квартиру и <span class="--green">сверхприбыль</span></h3>
                    <h4 class="--mgb60">Выбрать <span class="--green">удобный формат работы</span> прямо сейчас</h4>
                    <div class="section__content-changer g-flex-column">
                        <div class="section__content-tabs g-flex-justify-center g-flex-align-center fit-content center --mgb60 -m-left">
                            <div class="section__content-tab active">
                                Комплексная работа
                            </div>
                            <div class="section__content-tab">
                                Разовая консультация
                            </div>
                        </div>
                        <svg class="--green" viewBox="0 0 32 32">
                            <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="section__content-slider slider">
                            <div class="section__content-slide">
                                <div class="section__advantage-pop-up_video center js_video-ratio --mgb60" data-video="https://www.youtube.com/embed/DnjgQK6bHlY" style="background-image: url(/html/assets/img/Play-pop-up.png);">

                                </div>
                                <div class="section__advantage-pop-up_text-block">
                                    <p class="--mgb40"><b>Подойдет тем, кто:</b></p>
                                    <ul class="--mgb30">
                                        <li>не определился с локацией и/или целями покупки (жить, сдавать или заработать на перепродаже),</li>
                                        <li>планирует или уже инвестирует в недвижимость,</li>
                                        <li>рассчитывает на объективную детальную проработку своего запроса (предложение и обсуждение конкретных вариантов, разработка плана дальнейших действий, поездки по районам и жилым комплексам, переговоры с застройщиками, подготовка и сопровождение сделки и др.),</li>
                                        <li>рассчитывает получить спец.условия, редкие планировочные решения, скидки, рассрочку по покупке новостройки через нас,</li>
                                        <li>интересуется не только покупкой новостройки, но и другими вопросами в сфере недвижимости (продажа, покупка, аренда вторичной или коммерческой недвижимости, юридическое сопровождение сделки, одобрение ипотеки),</li>
                                        <li>высоко ценит сервис и отношение к клиенту в таких мелочах, как свежесваренный кофе или чай с выпечкой, наглядные презентации проектов, оперативное подключение экспертов другого отдела и многое другое. </li>
                                    </ul>
                                    <div class="docs_block g-flex-align-center g-flex-between">
                                        <p><b>Мы гарантируем строгое соблюдение всех договоренностей, сроков и иных условий, прописанных в договоре!</b></p>
                                        <a href="https://dreamrealty.ru/upload/publichnyy-dogovor-oferta2.pdf" target="_blank" class="doc g-flex-align-center">
                                            <svg class="icon">
                                                <use xlink:href="#PDFIcon"></use>
                                            </svg>
                                            Публичный <br>договор&nbsp;оферты
                                        </a>
                                    </div>
                                </div>
                                <h4 class="--mgt60 obespet-platezh__link">Что такое <a href="" class="--green">обеспечительный платеж</a>, и зачем он нужен?</h4>
                                <div class="section__content-changer g-flex-column --mgt60">
                                    <div class="section__content-tabs g-flex-justify-center g-flex-align-center fit-content center --mgb60 -m-left">
                                        <div class="section__content-tab active">
                                            <p class="--text-center">Обеспечительный платеж <br>20 000 рублей на 3 месяца</p>
                                        </div>
                                        <div class="section__content-tab">
                                            <p class="--text-center">Обеспечительный платеж <br>30 000 рублей на 6 месяцев</p>
                                        </div>
                                    </div>
                                    <svg class="--green" viewBox="0 0 32 32">
                                        <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="section__content-slider slider">
                                        <div class="section__content-slide g-flex-justify-center g-flex-align-center g-flex-column-xs" style="display: flex;">
                                            <a href="#obespet-platezh__form20k_online" class="btn --green w100-xs --max-content --mgr60-sm --mgr0-xs js__open-hash_pop-up">Записаться и оплатить он-лайн</a>
                                            <a href="#obespet-platezh__form20k_offline" class="btn --green --max-content js__open-hash_pop-up w100-xs">Записаться и оплатить в офисе</a>
                                        </div>
                                        <div class="section__content-slide g-flex-justify-center g-flex-align-center g-flex-column-xs" style="display: flex;">
                                            <a href="#obespet-platezh__form30k_online" class="btn --green w100-xs --max-content --mgr60-sm --mgr0-xs js__open-hash_pop-up">Записаться и оплатить он-лайн</a>
                                            <a href="#obespet-platezh__form30k_offline" class="btn --green --max-content js__open-hash_pop-up w100-xs">Записаться и оплатить в офисе</a>
                                        </div>
                                    </div>
                                </div>
                                <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key">
                                    <h3>Заказать <span class="--green">звонок</span></h3>
                                    <label>
                                        <input type="text" placeholder="Имя*" required>
                                    </label>
                                    <label>
                                        <input type="tel" class="phone" placeholder="Телефон*" required>
                                    </label>
                                    <button type="submit" class="btn --green">Заказать звонок</button>
                                    <label class="w66 w100-xs">
                                        <input type="text" placeholder="Комментарии">
                                    </label>
                                    <label class="inputCheckbox">
                                        <input type="checkbox" required checked>
                                        <span>Нажимая на кнопку "Заказать звонок", вы даете согласие на обработку персональных данных</span>
                                    </label>
                                </form>
                            </div>
                            <div class="section__content-slide">
                                <div class="section__advantage-pop-up_video center js_video-ratio --mgb60" data-video="https://www.youtube.com/embed/XPTJ0MGodMk" style="background-image: url(/html/assets/img/Play-pop-up2.png);">

                                </div>
                                <div class="section__advantage-pop-up_text-block">
                                    <p class="--mgb40"><b>Подойдет тем, кто:</b></p>
                                    <ul class="--mgb30">
                                        <li>хочет получить объективный совет эксперта по выбору одного из 2-3 жилых комплексов, корпусов или планировки в конкретном ЖК, мнение о застройщике, соотношении "цена-качество" и др.</li>
                                        <li>определился с целями покупки (жить, сдавать или заработать на перепродаже) и даже ориентируется в конкретных застройщиках и их ЖК,</li>
                                        <li>рассчитывает на независимую общую консультацию и поддержание связи путем дистанционного взаимодействия в дальнейшем,</li>
                                        <li>планирует сделать выбор и забронировать объект недвижимости в будущем,</li>
                                        <li>интересуется не только покупкой новостройки, но и одобрением ипотеки в московских банках.</li>
                                    </ul>
                                    <div class="docs_block g-flex-align-center g-flex-between">
                                        <p><b>Мы гарантируем строгое соблюдение всех договоренностей, сроков и иных условий, прописанных в договоре!</b></p>
                                        <a href="https://dreamrealty.ru/upload/publichnyy-dogovor-oferta2.pdf" target="_blank" class="doc g-flex-align-center">
                                            <svg class="icon">
                                                <use xlink:href="#PDFIcon"></use>
                                            </svg>
                                            Публичный <br>договор&nbsp;оферты
                                        </a>
                                    </div>
                                </div>
                                <div class="section__content-changer g-flex-column --mgt60">
                                    <div class="section__content-tabs g-flex-justify-center g-flex-align-center fit-content center --mgb60 -m-left">
                                        <div class="section__content-tab active">
                                            <p class="--text-center">Консультация эксперта <br>15 000 рублей</p>
                                        </div>
                                        <div class="section__content-tab">
                                            <p class="--text-center">Консультация топового эксперта <br>20 000 рублей</p>
                                        </div>
                                    </div>
                                    <svg class="--green" viewBox="0 0 32 32">
                                        <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="section__content-slider slider">
                                        <div class="section__content-slide g-flex-justify-center g-flex-align-center g-flex-column-xs" style="display: flex;">
                                            <a href="#obespet-platezh__formExpert" class="btn --green w100-xs --max-content --mgr60-sm --mgr0-xs js__open-hash_pop-up">Записаться и оплатить он-лайн</a>
                                        </div>
                                        <div class="section__content-slide g-flex-justify-center g-flex-align-center g-flex-column-xs" style="display: flex;">
                                            <a href="#obespet-platezh__formTopExpert" class="btn --green w100-xs --max-content --mgr60-sm --mgr0-xs js__open-hash_pop-up">Записаться и оплатить он-лайн</a>
                                        </div>
                                    </div>
                                </div>
                                <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key">
                                    <h3>Заказать <span class="--green">звонок</span></h3>
                                    <label>
                                        <input type="text" placeholder="Имя*" required>
                                    </label>
                                    <label>
                                        <input type="tel" class="phone" placeholder="Телефон*" required>
                                    </label>
                                    <button type="submit" class="btn --green">Заказать звонок</button>
                                    <label class="w66 w100-xs">
                                        <input type="text" placeholder="Комментарии">
                                    </label>
                                    <label class="inputCheckbox">
                                        <input type="checkbox" required checked>
                                        <span>Нажимая на кнопку "Заказать звонок", вы даете согласие на обработку персональных данных</span>
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        </div>
    </div>
    <!-- 3 -->
    <div class="advantages-pop-up pop-up g-flex-column" role="document" id="advant_pop-up3">
        <div class="pop-up-container-wrap">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="wrapper">
                        <h3 class="title" style="display: block">Работаем <span class="--green">“под ключ”</span></h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/buy-advantages-novostr--3.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№3</div>
									<p>Наш эксперт проходит с вами <b>весь путь - от выбора квартиры до приемки:</b></p>
                                    <ul>
                                        <li>уточняет цели приобретения и оптимальный бюджет,</li>
                                        <li>знакомит с подходящими застройщиками и ЖК,</li>
                                        <li>лично проводит экскурсию и знакомит с инфраструктурой района,</li>
                                        <li>организует просмотры и переговоры на объектах,</li>
                                        <li>добивается максимально выгодных условий покупки (скидка, рассрочка),</li>
                                        <li>информирует о закрытых продажах и спецпредложениях,</li>
                                        <li>при необходимости подключает <span class="--underline">агента по вторичке</span>, <span class="--underline">кредитного брокера</span> или <span class="--underline">юриста</span>,</li>
                                        <li>оперативно бронирует понравившуюся квартиру,</li>
                                        <li>присутствует на подписании документов,</li>
                                        <li>отправляет актуальные фото и видео о ходе строительства,</li>
                                        <li>сообщает о выдаче ключей,</li>
                                        <li>организует приемку квартиры и подписание акта приема-передачи,</li>
                                    </ul>
                                    <p><b>а в случае инвестиционной покупки еще и:</b></p>
                                    <ul>
                                        <li>предлагает удачный момент для продажи инвестиционной квартиры,</li>
                                        <li>находит самого заинтересованного покупателя.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pop-up__header_bottom" style="margin-top: -135px;">
                                <a href="/tarifs/#hash__buy" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt60">
                                    <div class="arrow g-flex-align-center g-flex-justify-center">
                                        <svg class="icon">
                                            <use xlink:href="#ArrowSquare"></use>
                                        </svg>
                                    </div>
                                    Наши тарифы
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="wrapper">
                        <div class="section__big-text --mgt40 --mgb20 for-pop-up">
                            <p>ВАША ВЫГОДА</p>
                        </div>
                        <h3 class="--mgb40">вы получаете не только выгодную сделку, <br>но и <span class="--green">удовольствие в процессе выбора</span> квартиры</h3>
                        <h4 class="--mgb60">Выбрать <span class="--green">удобный формат работы</span> прямо сейчас</h4>
                        <div class="section__content-changer g-flex-column">
                            <div class="section__content-tabs g-flex-justify-center g-flex-align-center fit-content center --mgb60 -m-left">
                                <div class="section__content-tab active">
                                    Комплексная работа
                                </div>
                                <div class="section__content-tab">
                                    Разовая консультация
                                </div>
                            </div>
                            <svg class="--green" viewBox="0 0 32 32">
                                <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="section__content-slider slider">
                                <div class="section__content-slide">
                                    <div class="section__advantage-pop-up_video center js_video-ratio --mgb60" data-video="https://www.youtube.com/embed/DnjgQK6bHlY" style="background-image: url(/html/assets/img/Play-pop-up.png);">

                                    </div>
                                    <div class="section__advantage-pop-up_text-block">
                                        <p class="--mgb40"><b>Подойдет тем, кто:</b></p>
                                        <ul class="--mgb30">
                                            <li>не определился с локацией и/или целями покупки (жить, сдавать или заработать на перепродаже),</li>
                                            <li>планирует или уже инвестирует в недвижимость,</li>
                                            <li>рассчитывает на объективную детальную проработку своего запроса (предложение и обсуждение конкретных вариантов, разработка плана дальнейших действий, поездки по районам и жилым комплексам, переговоры с застройщиками, подготовка и сопровождение сделки и др.),</li>
                                            <li>рассчитывает получить спец.условия, редкие планировочные решения, скидки, рассрочку по покупке новостройки через нас,</li>
                                            <li>интересуется не только покупкой новостройки, но и другими вопросами в сфере недвижимости (продажа, покупка, аренда вторичной или коммерческой недвижимости, юридическое сопровождение сделки, одобрение ипотеки),</li>
                                            <li>высоко ценит сервис и отношение к клиенту в таких мелочах, как свежесваренный кофе или чай с выпечкой, наглядные презентации проектов, оперативное подключение экспертов другого отдела и многое другое. </li>
                                        </ul>
                                        <div class="docs_block g-flex-align-center g-flex-between">
                                            <p><b>Мы гарантируем строгое соблюдение всех договоренностей, сроков и иных условий, прописанных в договоре!</b></p>
                                            <a href="https://dreamrealty.ru/upload/publichnyy-dogovor-oferta2.pdf" target="_blank" class="doc g-flex-align-center">
                                                <svg class="icon">
                                                    <use xlink:href="#PDFIcon"></use>
                                                </svg>
                                                Публичный <br>договор&nbsp;оферты
                                            </a>
                                        </div>
                                    </div>
                                    <h4 class="--mgt60 obespet-platezh__link">Что такое <a href="" class="--green">обеспечительный платеж</a>, и зачем он нужен?</h4>
                                    <div class="section__content-changer g-flex-column --mgt60">
                                        <div class="section__content-tabs g-flex-justify-center g-flex-align-center fit-content center --mgb60 -m-left">
                                            <div class="section__content-tab active">
                                                <p class="--text-center">Обеспечительный платеж <br>20 000 рублей на 3 месяца</p>
                                            </div>
                                            <div class="section__content-tab">
                                                <p class="--text-center">Обеспечительный платеж <br>30 000 рублей на 6 месяцев</p>
                                            </div>
                                        </div>
                                        <svg class="--green" viewBox="0 0 32 32">
                                            <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <div class="section__content-slider slider">
                                            <div class="section__content-slide g-flex-justify-center g-flex-align-center g-flex-column-xs" style="display: flex;">
                                                <a href="#obespet-platezh__form20k_online" class="btn --green w100-xs --max-content --mgr60-sm --mgr0-xs js__open-hash_pop-up">Записаться и оплатить он-лайн</a>
                                                <a href="#obespet-platezh__form20k_offline" class="btn --green --max-content js__open-hash_pop-up w100-xs">Записаться и оплатить в офисе</a>
                                            </div>
                                            <div class="section__content-slide g-flex-justify-center g-flex-align-center g-flex-column-xs" style="display: flex;">
                                                <a href="#obespet-platezh__form30k_online" class="btn --green w100-xs --max-content --mgr60-sm --mgr0-xs js__open-hash_pop-up">Записаться и оплатить он-лайн</a>
                                                <a href="#obespet-platezh__form30k_offline" class="btn --green --max-content js__open-hash_pop-up w100-xs">Записаться и оплатить в офисе</a>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key">
                                        <h3>Заказать <span class="--green">звонок</span></h3>
                                        <label>
                                            <input type="text" placeholder="Имя*" required>
                                        </label>
                                        <label>
                                            <input type="tel" class="phone" placeholder="Телефон*" required>
                                        </label>
                                        <button type="submit" class="btn --green">Заказать звонок</button>
                                        <label class="w66 w100-xs">
                                            <input type="text" placeholder="Комментарии">
                                        </label>
                                        <label class="inputCheckbox">
                                            <input type="checkbox" required checked>
                                            <span>Нажимая на кнопку "Заказать звонок", вы даете согласие на обработку персональных данных</span>
                                        </label>
                                    </form>
                                </div>
                                <div class="section__content-slide">
                                    <div class="section__advantage-pop-up_video center js_video-ratio --mgb60" data-video="https://www.youtube.com/embed/XPTJ0MGodMk" style="background-image: url(/html/assets/img/Play-pop-up2.png);">

                                    </div>
                                    <div class="section__advantage-pop-up_text-block">
                                        <p class="--mgb40"><b>Подойдет тем, кто:</b></p>
                                        <ul class="--mgb30">
                                            <li>хочет получить объективный совет эксперта по выбору одного из 2-3 жилых комплексов, корпусов или планировки в конкретном ЖК, мнение о застройщике, соотношении "цена-качество" и др.</li>
                                            <li>определился с целями покупки (жить, сдавать или заработать на перепродаже) и даже ориентируется в конкретных застройщиках и их ЖК,</li>
                                            <li>рассчитывает на независимую общую консультацию и поддержание связи путем дистанционного взаимодействия в дальнейшем,</li>
                                            <li>планирует сделать выбор и забронировать объект недвижимости в будущем,</li>
                                            <li>интересуется не только покупкой новостройки, но и одобрением ипотеки в московских банках.</li>
                                        </ul>
                                        <div class="docs_block g-flex-align-center g-flex-between">
                                            <p><b>Мы гарантируем строгое соблюдение всех договоренностей, сроков и иных условий, прописанных в договоре!</b></p>
                                            <a href="https://dreamrealty.ru/upload/publichnyy-dogovor-oferta2.pdf" target="_blank" class="doc g-flex-align-center">
                                                <svg class="icon">
                                                    <use xlink:href="#PDFIcon"></use>
                                                </svg>
                                                Публичный <br>договор&nbsp;оферты
                                            </a>
                                        </div>
                                    </div>
                                    <div class="section__content-changer g-flex-column --mgt60">
                                        <div class="section__content-tabs g-flex-justify-center g-flex-align-center fit-content center --mgb60 -m-left">
                                            <div class="section__content-tab active">
                                                <p class="--text-center">Консультация эксперта <br>15 000 рублей</p>
                                            </div>
                                            <div class="section__content-tab">
                                                <p class="--text-center">Консультация топового эксперта <br>20 000 рублей</p>
                                            </div>
                                        </div>
                                        <svg class="--green" viewBox="0 0 32 32">
                                            <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <div class="section__content-slider slider">
                                            <div class="section__content-slide g-flex-justify-center g-flex-align-center g-flex-column-xs" style="display: flex;">
                                                <a href="#obespet-platezh__formExpert" class="btn --green w100-xs --max-content --mgr60-sm --mgr0-xs js__open-hash_pop-up">Записаться и оплатить он-лайн</a>
                                            </div>
                                            <div class="section__content-slide g-flex-justify-center g-flex-align-center g-flex-column-xs" style="display: flex;">
                                                <a href="#obespet-platezh__formTopExpert" class="btn --green w100-xs --max-content --mgr60-sm --mgr0-xs js__open-hash_pop-up">Записаться и оплатить он-лайн</a>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key">
                                        <h3>Заказать <span class="--green">звонок</span></h3>
                                        <label>
                                            <input type="text" placeholder="Имя*" required>
                                        </label>
                                        <label>
                                            <input type="tel" class="phone" placeholder="Телефон*" required>
                                        </label>
                                        <button type="submit" class="btn --green">Заказать звонок</button>
                                        <label class="w66 w100-xs">
                                            <input type="text" placeholder="Комментарии">
                                        </label>
                                        <label class="inputCheckbox">
                                            <input type="checkbox" required checked>
                                            <span>Нажимая на кнопку "Заказать звонок", вы даете согласие на обработку персональных данных</span>
                                        </label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- 4 -->
    <div class="advantages-pop-up pop-up g-flex-column" role="document" id="advant_pop-up4">
        <div class="pop-up-container-wrap">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="wrapper">
                        <h3 class="title" style="display: block">Владеем <span class="--green">инсайдерской информацией</span></h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/buy-advantages-novostr--4.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№4</div>
                                    <p>Наши эксперты узнают о новых ЖК <b>задолго до выхода на открытый рынок</b>, поскольку <b>участвуют в обсуждении</b> планировок и цен будущего проекта <b>по просьбе застройщика</b>.</p>
                                    <p>С нами вы всегда будете знать <b>о старте закрытых продаж</b> самых ликвидных московских новостроек!</p>
                                    <p>Наш эксперт <b>согласует для вас выгодное предложение</b>, даже тогда, когда застройщик приостановил продажи в связи с повышением цен.</p>
                                </div>
                            </div>
                            <div class="pop-up__header_bottom">
                                <p>Все эти возможности доступны нам, поскольку <b>мы являемся профессиональными участниками рынка недвижимости и аккредитованными партнерами застройщиков</b>.  </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="wrapper">
                        <div class="section__big-text --mgt40 --mgb20 for-pop-up">
                            <p>ВАША ВЫГОДА</p>
                        </div>
                        <h3 class="--mgb40">вы бронируете квартиру <span class="--green">по самой выгодной цене</span> и <span class="--green">в самый удачный момент</span></h3>
                        <h4 class="--mgb60">Выбрать <span class="--green">удобный формат работы</span> прямо сейчас</h4>
                        <div class="section__content-changer g-flex-column">
                            <div class="section__content-tabs g-flex-justify-center g-flex-align-center fit-content center --mgb60 -m-left">
                                <div class="section__content-tab active">
                                    Комплексная работа
                                </div>
                                <div class="section__content-tab">
                                    Разовая консультация
                                </div>
                            </div>
                            <svg class="--green" viewBox="0 0 32 32">
                                <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="section__content-slider slider">
                                <div class="section__content-slide">
                                    <div class="section__advantage-pop-up_video center js_video-ratio --mgb60" data-video="https://www.youtube.com/embed/DnjgQK6bHlY" style="background-image: url(/html/assets/img/Play-pop-up.png);">

                                    </div>
                                    <div class="section__advantage-pop-up_text-block">
                                        <p class="--mgb40"><b>Подойдет тем, кто:</b></p>
                                        <ul class="--mgb30">
                                            <li>не определился с локацией и/или целями покупки (жить, сдавать или заработать на перепродаже),</li>
                                            <li>планирует или уже инвестирует в недвижимость,</li>
                                            <li>рассчитывает на объективную детальную проработку своего запроса (предложение и обсуждение конкретных вариантов, разработка плана дальнейших действий, поездки по районам и жилым комплексам, переговоры с застройщиками, подготовка и сопровождение сделки и др.),</li>
                                            <li>рассчитывает получить спец.условия, редкие планировочные решения, скидки, рассрочку по покупке новостройки через нас,</li>
                                            <li>интересуется не только покупкой новостройки, но и другими вопросами в сфере недвижимости (продажа, покупка, аренда вторичной или коммерческой недвижимости, юридическое сопровождение сделки, одобрение ипотеки),</li>
                                            <li>высоко ценит сервис и отношение к клиенту в таких мелочах, как свежесваренный кофе или чай с выпечкой, наглядные презентации проектов, оперативное подключение экспертов другого отдела и многое другое. </li>
                                        </ul>
                                        <div class="docs_block g-flex-align-center g-flex-between">
                                            <p><b>Мы гарантируем строгое соблюдение всех договоренностей, сроков и иных условий, прописанных в договоре!</b></p>
                                            <a href="https://dreamrealty.ru/upload/publichnyy-dogovor-oferta2.pdf" target="_blank" class="doc g-flex-align-center">
                                                <svg class="icon">
                                                    <use xlink:href="#PDFIcon"></use>
                                                </svg>
                                                Публичный <br>договор&nbsp;оферты
                                            </a>
                                        </div>
                                    </div>
                                    <div class="section__content-changer g-flex-column --mgt60">
                                        <div class="section__content-tabs g-flex-justify-center g-flex-align-center fit-content center --mgb60 -m-left">
                                            <div class="section__content-tab active">
                                                <p class="--text-center">Обеспечительный платеж <br>20 000 рублей на 3 месяца</p>
                                            </div>
                                            <div class="section__content-tab">
                                                <p class="--text-center">Обеспечительный платеж <br>30 000 рублей на 6 месяцев</p>
                                            </div>
                                        </div>
                                        <svg class="--green" viewBox="0 0 32 32">
                                            <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <div class="section__content-slider slider ">
                                            <div class="section__content-slide g-flex-justify-center g-flex-align-center g-flex-column-xs" style="display: flex;">
                                                <a href="#obespet-platezh__form20k_online" class="btn --green w100-xs --max-content --mgr60-sm --mgr0-xs js__open-hash_pop-up">Записаться и оплатить он-лайн</a>
                                                <a href="#obespet-platezh__form20k_offline" class="btn --green --max-content js__open-hash_pop-up w100-xs">Записаться и оплатить в офисе</a>
                                            </div>
                                            <div class="section__content-slide g-flex-justify-center g-flex-align-center g-flex-column-xs" style="display: flex;">
                                                <a href="#obespet-platezh__form30k_online" class="btn --green w100-xs --max-content --mgr60-sm --mgr0-xs js__open-hash_pop-up">Записаться и оплатить он-лайн</a>
                                                <a href="#obespet-platezh__form30k_offline" class="btn --green --max-content js__open-hash_pop-up w100-xs">Записаться и оплатить в офисе</a>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key">
                                        <h3>Заказать <span class="--green">звонок</span></h3>
                                        <label>
                                            <input type="text" placeholder="Имя*" required>
                                        </label>
                                        <label>
                                            <input type="tel" class="phone" placeholder="Телефон*" required>
                                        </label>
                                        <button type="submit" class="btn --green">Заказать звонок</button>
                                        <label class="w66 w100-xs">
                                            <input type="text" placeholder="Комментарии">
                                        </label>
                                        <label class="inputCheckbox">
                                            <input type="checkbox" required checked>
                                            <span>Нажимая на кнопку "Заказать звонок", вы даете согласие на обработку персональных данных</span>
                                        </label>
                                    </form>
                                </div>
                                <div class="section__content-slide">
                                    <div class="section__advantage-pop-up_video center js_video-ratio --mgb60" data-video="https://www.youtube.com/embed/XPTJ0MGodMk" style="background-image: url(/html/assets/img/Play-pop-up2.png);">

                                    </div>
                                    <div class="section__advantage-pop-up_text-block">
                                        <p class="--mgb40"><b>Подойдет тем, кто:</b></p>
                                        <ul class="--mgb30">
                                            <li>хочет получить объективный совет эксперта по выбору одного из 2-3 жилых комплексов, корпусов или планировки в конкретном ЖК, мнение о застройщике, соотношении "цена-качество" и др.</li>
                                            <li>определился с целями покупки (жить, сдавать или заработать на перепродаже) и даже ориентируется в конкретных застройщиках и их ЖК,</li>
                                            <li>рассчитывает на независимую общую консультацию и поддержание связи путем дистанционного взаимодействия в дальнейшем,</li>
                                            <li>планирует сделать выбор и забронировать объект недвижимости в будущем,</li>
                                            <li>интересуется не только покупкой новостройки, но и одобрением ипотеки в московских банках.</li>
                                        </ul>
                                        <div class="docs_block g-flex-align-center g-flex-between">
                                            <p><b>Мы гарантируем строгое соблюдение всех договоренностей, сроков и иных условий, прописанных в договоре!</b></p>
                                            <a href="https://dreamrealty.ru/upload/publichnyy-dogovor-oferta2.pdf" target="_blank" class="doc g-flex-align-center">
                                                <svg class="icon">
                                                    <use xlink:href="#PDFIcon"></use>
                                                </svg>
                                                Публичный <br>договор&nbsp;оферты
                                            </a>
                                        </div>
                                    </div>
                                    <h4 class="--mgt60 obespet-platezh__link">Что такое <a href="" class="--green">обеспечительный платеж</a>, и зачем он нужен?</h4>
                                    <div class="section__content-changer g-flex-column --mgt60">
                                        <div class="section__content-tabs g-flex-justify-center g-flex-align-center fit-content center --mgb60 -m-left">
                                            <div class="section__content-tab active">
                                                <p class="--text-center">Консультация эксперта <br>15 000 рублей</p>
                                            </div>
                                            <div class="section__content-tab">
                                                <p class="--text-center">Консультация топового эксперта <br>20 000 рублей</p>
                                            </div>
                                        </div>
                                        <svg class="--green" viewBox="0 0 32 32">
                                            <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <div class="section__content-slider slider ">
                                            <div class="section__content-slide g-flex-justify-center g-flex-align-center g-flex-column-xs" style="display: flex;">
                                                <a href="#obespet-platezh__formExpert" class="btn --green w100-xs --max-content --mgr60-sm --mgr0-xs js__open-hash_pop-up">Записаться и оплатить он-лайн</a>
                                            </div>
                                            <div class="section__content-slide g-flex-justify-center g-flex-align-center g-flex-column-xs" style="display: flex;">
                                                <a href="#obespet-platezh__formTopExpert" class="btn --green w100-xs --max-content --mgr60-sm --mgr0-xs js__open-hash_pop-up">Записаться и оплатить он-лайн</a>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key">
                                        <h3>Заказать <span class="--green">звонок</span></h3>
                                        <label>
                                            <input type="text" placeholder="Имя*" required>
                                        </label>
                                        <label>
                                            <input type="tel" class="phone" placeholder="Телефон*" required>
                                        </label>
                                        <button type="submit" class="btn --green">Заказать звонок</button>
                                        <label class="w66 w100-xs">
                                            <input type="text" placeholder="Комментарии">
                                        </label>
                                        <label class="inputCheckbox">
                                            <input type="checkbox" required checked>
                                            <span>Нажимая на кнопку "Заказать звонок", вы даете согласие на обработку персональных данных</span>
                                        </label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- 5 -->
    <div class="advantages-pop-up pop-up g-flex-column" role="document" id="advant_pop-up5">
        <div class="pop-up-container-wrap">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="wrapper">
                        <h3 class="title" style="display: block">Предлагаем <span class="--green">100% рынка новостроек</span></h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/buy-advantages-novostr--5.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№5</div>
                                    <p>Принято считать, что рынок новостроек - это исключительно предложения от застройщиков. На самом деле <b>существуют еще уступки от физических лиц и свежая вторичка</b>, которые по своей выгоде и ликвидности не уступают, а зачастую и превосходят варианты застройщиков.</p>
                                    <p>В отличие от других агентств, <b>мы не ограничиваем наших клиентов</b> предложениями застройщиков или партнеров, которые платят агентствам <b>комиссию, мы предлагаем клиентам весь рынок</b>. Поскольку, ваша экономия на комиссии - это 2-3% от стоимости квартиры, а потенциальная доходность инвестиций в новостройку - от 20% годовых. Но выбор всегда за вами!</p>
                                    <p>Если вы не хотите платить комиссию, наш эксперт <b>познакомит вас с предложениями из списка</b> партнеров, которые готовы заплатить комиссию вместо вас. И это <b>никак не повлияет на качество работы</b> нашего эксперта. Он добьется для вас лучшей цены и условий.</p>
                                </div>
                            </div>
                            <div class="pop-up__header_bottom">
                                <p>Если <b>вы ищете что-то особенное, а в приоритете будущая доходность, мы расширим поиск по всему рынку</b>, включая: уступку, свежую вторичку, проекты от застройщиков, с которыми у нас нет партнерских соглашений.</p>
                                <p>В таком случае, комиссия будет рассчитываться согласно Тарифам. И вы можете быть уверены в том, что наш эксперт <b>найдет самое выгодное и ликвидное предложение на всем рынке, что окупит ваши расходы</b>.</p>
                            </div>
                            <a href="/tarifs/#hash__buy" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt60">
                                <div class="arrow g-flex-align-center g-flex-justify-center">
                                    <svg class="icon">
                                        <use xlink:href="#ArrowSquare"></use>
                                    </svg>
                                </div>
                                Наши тарифы
                            </a>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="wrapper">
                        <div class="section__big-text --mgt40 --mgb20 for-pop-up">
                            <p>ВАША ВЫГОДА</p>
                        </div>
                        <h3 class="--mgb40">вы выбираете новостройку, <span class="--green">не ограничивая себя предложениями от застройщиков</span></h3>
                        <h4 class="--mgb60">Выбрать <span class="--green">удобный формат работы</span> прямо сейчас</h4>
                        <div class="section__content-changer g-flex-column">
                            <div class="section__content-tabs g-flex-justify-center g-flex-align-center fit-content center --mgb60 -m-left">
                                <div class="section__content-tab active">
                                    Комплексная работа
                                </div>
                                <div class="section__content-tab">
                                    Разовая консультация
                                </div>
                            </div>
                            <svg class="--green" viewBox="0 0 32 32">
                                <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="section__content-slider slider">
                                <div class="section__content-slide">
                                    <div class="section__advantage-pop-up_video center js_video-ratio --mgb60" data-video="https://www.youtube.com/embed/DnjgQK6bHlY" style="background-image: url(/html/assets/img/Play-pop-up.png);">

                                    </div>
                                    <div class="section__advantage-pop-up_text-block">
                                        <p class="--mgb40"><b>Подойдет тем, кто:</b></p>
                                        <ul class="--mgb30">
                                            <li>не определился с локацией и/или целями покупки (жить, сдавать или заработать на перепродаже),</li>
                                            <li>планирует или уже инвестирует в недвижимость,</li>
                                            <li>рассчитывает на объективную детальную проработку своего запроса (предложение и обсуждение конкретных вариантов, разработка плана дальнейших действий, поездки по районам и жилым комплексам, переговоры с застройщиками, подготовка и сопровождение сделки и др.),</li>
                                            <li>рассчитывает получить спец.условия, редкие планировочные решения, скидки, рассрочку по покупке новостройки через нас,</li>
                                            <li>интересуется не только покупкой новостройки, но и другими вопросами в сфере недвижимости (продажа, покупка, аренда вторичной или коммерческой недвижимости, юридическое сопровождение сделки, одобрение ипотеки),</li>
                                            <li>высоко ценит сервис и отношение к клиенту в таких мелочах, как свежесваренный кофе или чай с выпечкой, наглядные презентации проектов, оперативное подключение экспертов другого отдела и многое другое. </li>
                                        </ul>
                                        <div class="docs_block g-flex-align-center g-flex-between">
                                            <p><b>Мы гарантируем строгое соблюдение всех договоренностей, сроков и иных условий, прописанных в договоре!</b></p>
                                            <a href="https://dreamrealty.ru/upload/publichnyy-dogovor-oferta2.pdf" target="_blank" class="doc g-flex-align-center">
                                                <svg class="icon">
                                                    <use xlink:href="#PDFIcon"></use>
                                                </svg>
                                                Публичный <br>договор&nbsp;оферты
                                            </a>
                                        </div>
                                    </div>
                                    <div class="section__content-changer g-flex-column --mgt60">
                                        <div class="section__content-tabs g-flex-justify-center g-flex-align-center fit-content center --mgb60 -m-left">
                                            <div class="section__content-tab active">
                                                <p class="--text-center">Обеспечительный платеж <br>20 000 рублей на 3 месяца</p>
                                            </div>
                                            <div class="section__content-tab">
                                                <p class="--text-center">Обеспечительный платеж <br>30 000 рублей на 6 месяцев</p>
                                            </div>
                                        </div>
                                        <svg class="--green" viewBox="0 0 32 32">
                                            <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <div class="section__content-slider slider ">
                                            <div class="section__content-slide g-flex-justify-center g-flex-align-center g-flex-column-xs" style="display: flex;">
                                                <a href="#obespet-platezh__form20k_online" class="btn --green w100-xs --max-content --mgr60-sm --mgr0-xs js__open-hash_pop-up">Записаться и оплатить он-лайн</a>
                                                <a href="#obespet-platezh__form20k_offline" class="btn --green --max-content js__open-hash_pop-up w100-xs">Записаться и оплатить в офисе</a>
                                            </div>
                                            <div class="section__content-slide g-flex-justify-center g-flex-align-center g-flex-column-xs" style="display: flex;">
                                                <a href="#obespet-platezh__form30k_online" class="btn --green w100-xs --max-content --mgr60-sm --mgr0-xs js__open-hash_pop-up">Записаться и оплатить он-лайн</a>
                                                <a href="#obespet-platezh__form30k_offline" class="btn --green --max-content js__open-hash_pop-up w100-xs">Записаться и оплатить в офисе</a>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key">
                                        <h3>Заказать <span class="--green">звонок</span></h3>
                                        <label>
                                            <input type="text" placeholder="Имя*" required>
                                        </label>
                                        <label>
                                            <input type="tel" class="phone" placeholder="Телефон*" required>
                                        </label>
                                        <button type="submit" class="btn --green">Заказать звонок</button>
                                        <label class="w66 w100-xs">
                                            <input type="text" placeholder="Комментарии">
                                        </label>
                                        <label class="inputCheckbox">
                                            <input type="checkbox" required checked>
                                            <span>Нажимая на кнопку "Заказать звонок", вы даете согласие на обработку персональных данных</span>
                                        </label>
                                    </form>
                                </div>
                                <div class="section__content-slide">
                                    <div class="section__advantage-pop-up_video center js_video-ratio --mgb60" data-video="https://www.youtube.com/embed/XPTJ0MGodMk" style="background-image: url(/html/assets/img/Play-pop-up2.png);">

                                    </div>
                                    <div class="section__advantage-pop-up_text-block">
                                        <p class="--mgb40"><b>Подойдет тем, кто:</b></p>
                                        <ul class="--mgb30">
                                            <li>хочет получить объективный совет эксперта по выбору одного из 2-3 жилых комплексов, корпусов или планировки в конкретном ЖК, мнение о застройщике, соотношении "цена-качество" и др.</li>
                                            <li>определился с целями покупки (жить, сдавать или заработать на перепродаже) и даже ориентируется в конкретных застройщиках и их ЖК,</li>
                                            <li>рассчитывает на независимую общую консультацию и поддержание связи путем дистанционного взаимодействия в дальнейшем,</li>
                                            <li>планирует сделать выбор и забронировать объект недвижимости в будущем,</li>
                                            <li>интересуется не только покупкой новостройки, но и одобрением ипотеки в московских банках.</li>
                                        </ul>
                                        <div class="docs_block g-flex-align-center g-flex-between">
                                            <p><b>Мы гарантируем строгое соблюдение всех договоренностей, сроков и иных условий, прописанных в договоре!</b></p>
                                            <a href="https://dreamrealty.ru/upload/publichnyy-dogovor-oferta2.pdf" target="_blank" class="doc g-flex-align-center">
                                                <svg class="icon">
                                                    <use xlink:href="#PDFIcon"></use>
                                                </svg>
                                                Публичный <br>договор&nbsp;оферты
                                            </a>
                                        </div>
                                    </div>
                                    <h4 class="--mgt60 obespet-platezh__link">Что такое <a href="" class="--green">обеспечительный платеж</a>, и зачем он нужен?</h4>
                                    <div class="section__content-changer g-flex-column --mgt60">
                                        <div class="section__content-tabs g-flex-justify-center g-flex-align-center fit-content center --mgb60 -m-left">
                                            <div class="section__content-tab active">
                                                <p class="--text-center">Консультация эксперта <br>15 000 рублей</p>
                                            </div>
                                            <div class="section__content-tab">
                                                <p class="--text-center">Консультация топового эксперта <br>20 000 рублей</p>
                                            </div>
                                        </div>
                                        <svg class="--green" viewBox="0 0 32 32">
                                            <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <div class="section__content-slider slider">
                                            <div class="section__content-slide g-flex-justify-center g-flex-align-center g-flex-column-xs" style="display: flex;">
                                                <a href="#obespet-platezh__formExpert" class="btn --green w100-xs --max-content --mgr60-sm --mgr0-xs js__open-hash_pop-up">Записаться и оплатить он-лайн</a>
                                            </div>
                                            <div class="section__content-slide g-flex-justify-center g-flex-align-center g-flex-column-xs" style="display: flex;">
                                                <a href="#obespet-platezh__formTopExpert" class="btn --green w100-xs --max-content --mgr60-sm --mgr0-xs js__open-hash_pop-up">Записаться и оплатить он-лайн</a>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key">
                                        <h3>Заказать <span class="--green">звонок</span></h3>
                                        <label>
                                            <input type="text" placeholder="Имя*" required>
                                        </label>
                                        <label>
                                            <input type="tel" class="phone" placeholder="Телефон*" required>
                                        </label>
                                        <button type="submit" class="btn --green">Заказать звонок</button>
                                        <label class="w66 w100-xs">
                                            <input type="text" placeholder="Комментарии">
                                        </label>
                                        <label class="inputCheckbox">
                                            <input type="checkbox" required checked>
                                            <span>Нажимая на кнопку "Заказать звонок", вы даете согласие на обработку персональных данных</span>
                                        </label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- 6 -->
    <div class="advantages-pop-up pop-up g-flex-column" role="document" id="advant_pop-up6">
        <div class="pop-up-container-wrap">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="wrapper">
                        <h3 class="title" style="display: block"><span class="--green">Помогаем сформировать</span> бюджет на покупку</h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/buy-advantages-novostr--6.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№6</div>
                                    <p>Бывают ситуации, когда в процессе выбора квартиры <b>захотелось не идти на компромиссы</b> и <b>увеличить бюджет</b>. И чтобы заветная сделка состоялась, наши эксперты помогут вам использовать дополнительные источники его увеличения, например:</p>
                                    <ul>
                                        <li><a href="/ipoteka/">одобрить ипотеку</a> (в т.ч. льготную) на фиксированных и привлекательных условиях,</li>
                                        <li><a href="/ursoprovozhd/">согласовать получение материнского капитала</a>,</li>
                                        <li><a href="/sell/">продать другую недвижимость</a>.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pop-up__header_bottom">
                                <a href="/tarifs/#hash__buy" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt30">
                                    <div class="arrow g-flex-align-center g-flex-justify-center">
                                        <svg class="icon">
                                            <use xlink:href="#ArrowSquare"></use>
                                        </svg>
                                    </div>
                                    Наши тарифы
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="wrapper">
                        <div class="section__big-text --mgt40 --mgb20 for-pop-up">
                            <p>ВАША ВЫГОДА</p>
                        </div>
                        <h3 class="--mgb40">вы выбираете квартиру, <br><span class="--green">не ограничивая себя в бюджете</span></h3>
                        <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt60 full-width">
                            <h3>Заказать консультацию кредитного брокера</h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --green">Заказать консультацию</button>
                            <label>
                                <select miltiple="miltiple"  data-placeholder="Тип услуги*" required>
                                    <option value="">&nbsp;</option>
                                    <option>проверка кредитной истории</option>
                                    <option>первичная консультация</option>
                                    <option>ипотека</option>
                                    <option>рефинансирование</option>
                                </select>
                            </label>
                            <label>
                                <input type="text" placeholder="Комментарии">
                            </label>
                            <label class="inputCheckbox">
                                <input type="checkbox" required checked>
                                <span>Нажимая на кнопку "Заказать консультацию", вы даете согласие на обработку персональных данных</span>
                            </label>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- 7 -->
    <div class="advantages-pop-up pop-up g-flex-column" role="document" id="advant_pop-up7">
        <div class="pop-up-container-wrap">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="wrapper">
                        <h3 class="title" style="display: block"><span class="--green">Официальный отчет о проверке</span> объекта и застройщика</h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/buy-advantages-novostr--7.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№7</div>

                                    <p>Наш правовой отчет - это полноценный документ, который содержит:</p>
                                    <ul class="--min-lh">
                                        <li>описание документации проекта и застройщика,</li>
                                        <li>информацию о его учредителях и конечных бенефициарах,</li>
                                        <li>анализ его финансового состояния,</li>
                                        <li>информацию о судебных спорах и обременениях,</li>
                                        <li>информацию о земельном участке,</li>
                                        <li>анализ договора участия в долевом строительстве,</li>
                                        <li>описание возможных рисков и последствий,</li>
                                        <li>выводы и рекомендации юриста.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pop-up__header_bottom">
                                <p>Если <b>объект или застройщик окажутся потенциально проблемными, мы будем отговаривать</b> вас от приобретения. А если вы будете настаивать на сделке, мы будем вынуждены отказаться от ее сопровождения.</p>
                                <p>Правовой отчет оплачивается отдельно, когда комиссию нам платит застройщик. И включен в стоимость услуги, когда комиссию платите вы.</p>
                                <p>Мы хотим, чтобы <b>с покупкой квартиры в новом доме в вашу жизнь пришли радость и комфорт</b>, а не судебные разбирательства.</p>
                                <a href="#download_7up" data-id="#advant_pop-up7" class="js__pop_up_smoothScroll"><img loading="lazy" src="/html/assets/svg/Download.svg" alt="">Скачать образец отчета о проверке объекта в новостройке и застройщика</a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="wrapper">
                        <div class="section__big-text --mgt40 --mgb20 for-pop-up">
                            <p>ВАША ВЫГОДА</p>
                        </div>
                        <h3 class="--mgb40">вы покупаете квартиру <span class="--green">без риска недостроя</span></h3>
                        <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt60 full-width" id="download_7up">
                            <h3>Скачать <span class="--green">образец отчета о проверке объекта и застройщика</span></h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <label></label>
                            <label>
                                <input type="email" placeholder="E-mail*" required>
                            </label>
                            <button type="submit" class="btn --green">Скачать</button>
                            <label class="inputCheckbox">
                                <input type="checkbox" required checked>
                                <span>Нажимая на кнопку "Скачать", вы даете согласие на обработку персональных данных</span>
                            </label>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- 8 -->
    <div class="advantages-pop-up pop-up g-flex-column" role="document" id="advant_pop-up8">
        <div class="pop-up-container-wrap">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="wrapper">
                        <h3 class="title" style="display: block"><span class="--green">Свой YouTube</span> канал о новостройках</h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/buy-advantages-novostr--8.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№8</div>
                                    <p><b>Мы создали собственный YouTube канал</b>, чтобы делиться с вами объективной и полезной информацией о рынке новостроек и способах инвестирования в недвижимость.</p>
                                    <p>Несмотря на растущую популярность канала (более 20 тыс. подписчиков), мы по-прежнему <b>ориентируемся не на имидж и просьбы застройщиков, а на ваши интересы</b>.</p>
                                    <p><b>Подпишитесь на канал, чтобы не упустить:</b></p>
                                    <ul class="--min-lh">
                                        <li>информацию о старте новых ЖК,</li>
                                        <li>новости и возможности рынка,</li>
                                        <li>авторские обзоры и рейтинги проектов,</li>
                                        <li>актуальные советы и лайфхаки от топовых экспертов.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pop-up__header_bottom">
                                <a href="https://www.youtube.com/channel/UCHgEZ046MQqobA4-kMIllEg" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt30">
                                    <div class="arrow g-flex-align-center g-flex-justify-center">
                                        <svg class="icon">
                                            <use xlink:href="#ArrowSquare"></use>
                                        </svg>
                                    </div>
                                    Подписаться
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="wrapper">
                        <div class="section__big-text --mgt40 --mgb20 for-pop-up">
                            <p>ВАША ВЫГОДА</p>
                        </div>
                        <h3 class="--mgb40">вы <span class="--green">принимаете решение на основе объективной</span>, <br>а не рекламной <span class="--green">информации о рынке новостроек</span></h3>
                        <h4 class="--mgb60">Выбрать <span class="--green">удобный формат работы</span> прямо сейчас</h4>
                        <div class="section__content-changer g-flex-column">
                            <div class="section__content-tabs g-flex-justify-center g-flex-align-center fit-content center --mgb60 -m-left">
                                <div class="section__content-tab active">
                                    Комплексная работа
                                </div>
                                <div class="section__content-tab">
                                    Разовая консультация
                                </div>
                            </div>
                            <svg class="--green" viewBox="0 0 32 32">
                                <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="section__content-slider slider">
                                <div class="section__content-slide">
                                    <div class="section__advantage-pop-up_video center js_video-ratio --mgb60" data-video="https://www.youtube.com/embed/DnjgQK6bHlY" style="background-image: url(/html/assets/img/Play-pop-up.png);">

                                    </div>
                                    <div class="section__advantage-pop-up_text-block">
                                        <p class="--mgb40"><b>Подойдет тем, кто:</b></p>
                                        <ul class="--mgb30">
                                            <li>не определился с локацией и/или целями покупки (жить, сдавать или заработать на перепродаже),</li>
                                            <li>планирует или уже инвестирует в недвижимость,</li>
                                            <li>рассчитывает на объективную детальную проработку своего запроса (предложение и обсуждение конкретных вариантов, разработка плана дальнейших действий, поездки по районам и жилым комплексам, переговоры с застройщиками, подготовка и сопровождение сделки и др.),</li>
                                            <li>рассчитывает получить спец.условия, редкие планировочные решения, скидки, рассрочку по покупке новостройки через нас,</li>
                                            <li>интересуется не только покупкой новостройки, но и другими вопросами в сфере недвижимости (продажа, покупка, аренда вторичной или коммерческой недвижимости, юридическое сопровождение сделки, одобрение ипотеки),</li>
                                            <li>высоко ценит сервис и отношение к клиенту в таких мелочах, как свежесваренный кофе или чай с выпечкой, наглядные презентации проектов, оперативное подключение экспертов другого отдела и многое другое. </li>
                                        </ul>
                                        <div class="docs_block g-flex-align-center g-flex-between">
                                            <p><b>Мы гарантируем строгое соблюдение всех договоренностей, сроков и иных условий, прописанных в договоре!</b></p>
                                            <a href="https://dreamrealty.ru/upload/publichnyy-dogovor-oferta2.pdf" target="_blank" class="doc g-flex-align-center">
                                                <svg class="icon">
                                                    <use xlink:href="#PDFIcon"></use>
                                                </svg>
                                                Публичный <br>договор&nbsp;оферты
                                            </a>
                                        </div>
                                    </div>
                                    <h4 class="--mgt60 obespet-platezh__link">Что такое <a href="" class="--green">обеспечительный платеж</a>, и зачем он нужен?</h4>
                                    <div class="section__content-changer g-flex-column --mgt60">
                                        <div class="section__content-tabs g-flex-justify-center g-flex-align-center fit-content center --mgb60 -m-left">
                                            <div class="section__content-tab active">
                                                <p class="--text-center">Обеспечительный платеж <br>20 000 рублей на 3 месяца</p>
                                            </div>
                                            <div class="section__content-tab">
                                                <p class="--text-center">Обеспечительный платеж <br>30 000 рублей на 6 месяцев</p>
                                            </div>
                                        </div>
                                        <svg class="--green" viewBox="0 0 32 32">
                                            <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <div class="section__content-slider slider ">
                                            <div class="section__content-slide g-flex-justify-center g-flex-align-center g-flex-column-xs" style="display: flex;">
                                                <a href="#obespet-platezh__form20k_online" class="btn --green w100-xs --max-content --mgr60-sm --mgr0-xs js__open-hash_pop-up">Записаться и оплатить он-лайн</a>
                                                <a href="#obespet-platezh__form20k_offline" class="btn --green --max-content js__open-hash_pop-up w100-xs">Записаться и оплатить в офисе</a>
                                            </div>
                                            <div class="section__content-slide g-flex-justify-center g-flex-align-center g-flex-column-xs" style="display: flex;">
                                                <a href="#obespet-platezh__form30k_online" class="btn --green w100-xs --max-content --mgr60-sm --mgr0-xs js__open-hash_pop-up">Записаться и оплатить он-лайн</a>
                                                <a href="#obespet-platezh__form30k_offline" class="btn --green --max-content js__open-hash_pop-up w100-xs">Записаться и оплатить в офисе</a>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key">
                                        <h3>Заказать <span class="--green">звонок</span></h3>
                                        <label>
                                            <input type="text" placeholder="Имя*" required>
                                        </label>
                                        <label>
                                            <input type="tel" class="phone" placeholder="Телефон*" required>
                                        </label>
                                        <button type="submit" class="btn --green">Заказать звонок</button>
                                        <label class="w66 w100-xs">
                                            <input type="text" placeholder="Комментарии">
                                        </label>
                                        <label class="inputCheckbox">
                                            <input type="checkbox" required checked>
                                            <span>Нажимая на кнопку "Заказать звонок", вы даете согласие на обработку персональных данных</span>
                                        </label>
                                    </form>
                                </div>
                                <div class="section__content-slide">
                                    <div class="section__advantage-pop-up_video center js_video-ratio --mgb60" data-video="https://www.youtube.com/embed/XPTJ0MGodMk" style="background-image: url(/html/assets/img/Play-pop-up2.png);">

                                    </div>
                                    <div class="section__advantage-pop-up_text-block">
                                        <p class="--mgb40"><b>Подойдет тем, кто:</b></p>
                                        <ul class="--mgb30">
                                            <li>хочет получить объективный совет эксперта по выбору одного из 2-3 жилых комплексов, корпусов или планировки в конкретном ЖК, мнение о застройщике, соотношении "цена-качество" и др.</li>
                                            <li>определился с целями покупки (жить, сдавать или заработать на перепродаже) и даже ориентируется в конкретных застройщиках и их ЖК,</li>
                                            <li>рассчитывает на независимую общую консультацию и поддержание связи путем дистанционного взаимодействия в дальнейшем,</li>
                                            <li>планирует сделать выбор и забронировать объект недвижимости в будущем,</li>
                                            <li>интересуется не только покупкой новостройки, но и одобрением ипотеки в московских банках.</li>
                                        </ul>
                                        <div class="docs_block g-flex-align-center g-flex-between">
                                            <p><b>Мы гарантируем строгое соблюдение всех договоренностей, сроков и иных условий, прописанных в договоре!</b></p>
                                            <a href="https://dreamrealty.ru/upload/publichnyy-dogovor-oferta2.pdf" target="_blank" class="doc g-flex-align-center">
                                                <svg class="icon">
                                                    <use xlink:href="#PDFIcon"></use>
                                                </svg>
                                                Публичный <br>договор&nbsp;оферты
                                            </a>
                                        </div>
                                    </div>
                                    <div class="section__content-changer g-flex-column --mgt60">
                                        <div class="section__content-tabs g-flex-justify-center g-flex-align-center fit-content center --mgb60 -m-left">
                                            <div class="section__content-tab active">
                                                <p class="--text-center">Консультация эксперта <br>15 000 рублей</p>
                                            </div>
                                            <div class="section__content-tab">
                                                <p class="--text-center">Консультация топового эксперта <br>20 000 рублей</p>
                                            </div>
                                        </div>
                                        <svg class="--green" viewBox="0 0 32 32">
                                            <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <div class="section__content-slider slider">
                                            <div class="section__content-slide g-flex-justify-center g-flex-align-center g-flex-column-xs" style="display: flex;">
                                                <a href="#obespet-platezh__formExpert" class="btn --green w100-xs --max-content --mgr60-sm --mgr0-xs js__open-hash_pop-up">Записаться и оплатить он-лайн</a>
                                            </div>
                                            <div class="section__content-slide g-flex-justify-center g-flex-align-center g-flex-column-xs" style="display: flex;">
                                                <a href="#obespet-platezh__formTopExpert" class="btn --green w100-xs --max-content --mgr60-sm --mgr0-xs js__open-hash_pop-up">Записаться и оплатить он-лайн</a>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key">
                                        <h3>Заказать <span class="--green">звонок</span></h3>
                                        <label>
                                            <input type="text" placeholder="Имя*" required>
                                        </label>
                                        <label>
                                            <input type="tel" class="phone" placeholder="Телефон*" required>
                                        </label>
                                        <button type="submit" class="btn --green">Заказать звонок</button>
                                        <label class="w66 w100-xs">
                                            <input type="text" placeholder="Комментарии">
                                        </label>
                                        <label class="inputCheckbox">
                                            <input type="checkbox" required checked>
                                            <span>Нажимая на кнопку "Заказать звонок", вы даете согласие на обработку персональных данных</span>
                                        </label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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
            <h3 class="--mgb60 obespet-platezh__link">Что такое <span class="--green">обеспечительный платеж</span>, и зачем он нужен?</h3>
            <p>Обеспечительный платеж - это денежная сумма, которую вы вносите для организации полноценной консультации и начала содержательной работы с экспертом отдела новостроек компании Dream Realty, которая возвращается вам или засчитывается в счет будущей оплаты услуг компании.</p>
            <p>По сути, он подтверждает серьезность ваших намерений и фиксирует наши обязательства по поиску и бронированию наиболее подходящего под ваш запрос объекта недвижимости.</p>
            <p><b>Исходя из нашей практики:</b></p>
            <ul>
                <li>5 из 10 обратившихся к нам клиентов покупают желаемую недвижимость уже в первый месяц нашего сотрудничества;</li>
                <li>Еще трое – в течение первых трех месяцев работы с нами;</li>
                <li>Оставшиеся покупатели – в силу разных финансовых причин (продажа другой квартиры, срочный вклад в банке, коррекция на фондовом рынке и т.п.) обычно возвращаются в течение следующих шести месяцев.</li>
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
                <p class="--mgb40 --mgt40">Пожалуйста, заполните все поля ниже</p>
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
                <p class="--text-center">Заполняя эту заявку и производя оплату, вы соглашаетесь с условиями <a href="">Публичного договора</a>.</p>
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
                    <p class="--mgb40 --mgt40">Пожалуйста, заполните все поля ниже</p>
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
                    <p class="--text-center">Заполняя эту заявку и производя оплату, вы соглашаетесь с условиями <a href="">Публичного договора</a>.</p>
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
                <p class="--mgb40 --mgt40">Пожалуйста, заполните все поля ниже</p>
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
                <p class="--text-center">Заполняя эту заявку и производя оплату, вы соглашаетесь с условиями <a href="">Публичного договора</a>.</p>
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
                <p class="--mgb40 --mgt40">Пожалуйста, заполните все поля ниже</p>
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
                <p class="--text-center">Заполняя эту заявку и производя оплату, вы соглашаетесь с условиями <a href="">Публичного договора</a>.</p>
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
                <p class="--mgb40 --mgt40">Пожалуйста, заполните все поля ниже</p>
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
                <p class="--text-center">Заполняя эту заявку и производя оплату, вы соглашаетесь с условиями <a href="">Публичного договора</a>.</p>
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
                <p class="--mgb40 --mgt40">Пожалуйста, заполните все поля ниже</p>
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
                <p class="--text-center">Заполняя эту заявку и производя оплату, вы соглашаетесь с условиями <a href="">Публичного договора</a>.</p>
            </form>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>