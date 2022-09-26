<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "ПРЕИМУЩЕСТВА РАБОТЫ У НАС");
$APPLICATION->SetTitle("ПРЕИМУЩЕСТВА РАБОТЫ У НАС");
?>
    <link rel="stylesheet" href="/bitrix/templates/realty/assets/css/advantages.css?v=<?=rand(0, 255)?>">

    <section class="section advantages-page grayHalfBG">
        <div class="wrapper">
            <div class="section__big-text --mgb40">
                <p>агентство мечты</p>
            </div>
            <div class="section__advantages--full g-flex-wrap g-flex-between --mgt180">
                <a href="#advant_pop-up1" class="section__advantage g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/advant-full9.png);background-size: 100%;">
                    <span class="num">1</span>
                    <div class="g-flex-align-center g-flex-justify-center"><p>Работа в <span class="--orange">бирюзовой организации</span></p></div>
                </a>
                <a href="#advant_pop-up2" class="section__advantage g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/advant-full10.png);background-size: 100%;">
                    <span class="num">2</span>
                    <div class="g-flex-align-center g-flex-justify-center"><p>Атмосфера <span class="--orange">позитива и доверия</span></p></div>
                </a>
                <a href="#advant_pop-up3" class="section__advantage g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/advant-full11.png);background-size: 100%;">
                    <span class="num">3</span>
                    <div class="g-flex-align-center g-flex-justify-center"><p>Мотивация на <span class="--orange">развитие и успех</span></p></div>
                </a>
                <a href="#advant_pop-up4" class="section__advantage g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/advant-full12.png);background-size: 110%;">
                    <span class="num">4</span>
                    <div class="g-flex-align-center g-flex-justify-center"><p><span class="--orange">Наставничество</span> и поддержка</p></div>
                </a>
            </div>
        </div>
    </section>

    <section class="section how-it-works">
        <div class="wrapper">
            <div class="section__big-text --mgb60">
                <p>Команда</p>
            </div>
            <div class="section__content-changer g-flex-column">
                <div class="section__content-tabs top g-flex-between g-flex-align-center center g-flex-wrap --mgb30">
                    <div class="section__content-tab active --nowarp">
                        Руководство
                    </div>
                    <div class="section__content-tab --nowarp">
                        Районные агенты
                    </div>
                    <div class="section__content-tab --nowarp">
                        Эксперты по новостройкам
                    </div>
                    <div class="section__content-tab --nowarp">
                        Юристы
                    </div>
                </div>
                <div class="section__content-tabs bottom g-flex-between g-flex-align-center center g-flex-wrap --mgb30">
                    <div class="section__content-tab">
                        Кредитные брокеры
                    </div>
                    <div class="section__content-tab">
                        Операторы
                    </div>
                    <div class="section__content-tab">
                        Маркетологи
                    </div>
                </div>
                <svg class="--lightViolet" viewBox="0 0 32 32">
                    <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <div class="section__content-slider slider">
                        <!-- + Руководители -->
                        <div class="section__content-slide">
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
                                <a href="/about/" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgb90">
                                    <div class="arrow g-flex-align-center g-flex-justify-center">
                                        <svg class="icon">
                                            <use xlink:href="#ArrowSquare"></use>
                                        </svg>
                                    </div>
                                    О компании
                                </a>
                            </div>

                            <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                                <h3>Отправить <span class="--lightViolet">сообщение</span></h3>
                                <label>
                                    <input type="text" placeholder="Имя*" required>
                                </label>
                                <label>
                                    <input type="tel" class="phone" placeholder="Телефон*" required>
                                </label>
                                <label>
                                    <input type="email" class="email" placeholder="Email*" required>
                                </label>
                                <label class="w66 w100-xs" style="height: 100px;">
                                    <input type="text" style="height: 100px;border-radius: 30px;" placeholder="Комментарий">
                                </label>
                                <label class="inputCheckbox">
                                    <button type="submit" class="btn --mgb20 --lightViolet">Отправить сообщение</button>
                                    <input type="checkbox" required checked>
                                    <span>Нажимая на кнопку "Отправить сообщение", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                                </label>
                            </form>
                        </div>

                        <!-- + Районные агенты -->
                        <div class="section__content-slide">
                            <div class="slider_rayon_block_wrap">
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

                            <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                                <h3>Выбрать <span class="--<? $APPLICATION->ShowProperty("color") ?>">районного агента</span></h3>
                                <label>
                                    <input type="text" placeholder="Имя*" required>
                                </label>
                                <label>
                                    <input type="tel" class="phone" placeholder="Телефон*" required>
                                </label>
                                <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Отправить заявку</button>
                                <label>
                                    <select  multiple="multiple"  data-placeholder="Район продажи*" required>
                                        <option value="">&nbsp;</option>
                                        <optgroup label="ЦАО">
                                            <option>Арбат</option>
                                            <option>Басманный</option>
                                            <option>Замоскворечье</option>
                                            <option>Красносельский</option>
                                            <option>Мещанский</option>
                                            <option>Пресненский</option>
                                            <option>Таганский</option>
                                            <option>Тверской</option>
                                            <option>Хамовники</option>
                                            <option>Якиманка</option>
                                        </optgroup>
                                        <optgroup label="САО">
                                            <option>Аэропорт</option>
                                            <option>Беговой</option>
                                            <option>Бескудниковский</option>
                                            <option>Войковский</option>
                                            <option>Восточное Дегунино</option>
                                            <option>Головинский</option>
                                            <option>Дмитровский</option>
                                            <option>Западное Дегунино</option>
                                            <option>Коптево</option>
                                            <option>Левобережный</option>
                                            <option>Молжаниновский</option>
                                            <option>Савёловский</option>
                                            <option>Сокол</option>
                                            <option>Тимирязевский</option>
                                            <option>Ховрино</option>
                                            <option>Хорошёвский</option>
                                        </optgroup>
                                        <optgroup label="СВАО">
                                            <option>Алексеевский</option>
                                            <option>Алтуфьевский</option>
                                            <option>Бабушкинский</option>
                                            <option>Бибирево</option>
                                            <option>Бутырский</option>
                                            <option>Лианозово</option>
                                            <option>Лосиноостровский</option>
                                            <option>Марфино</option>
                                            <option>Марьина роща</option>
                                            <option>Останкинский</option>
                                            <option>Отрадное</option>
                                            <option>Ростокино</option>
                                            <option>Свиблово</option>
                                            <option>Северный</option>
                                            <option>Северное Медведково</option>
                                            <option>Южное Медведково</option>
                                            <option>Ярославский</option>
                                        </optgroup>
                                        <optgroup label="ВАО">
                                            <option>Богородское</option>
                                            <option>Вешняки</option>
                                            <option>Восточный</option>
                                            <option>Восточное Измайлово</option>
                                            <option>Гольяново</option>
                                            <option>Ивановское</option>
                                            <option>Измайлово</option>
                                            <option>Косино-Ухтомский</option>
                                            <option>Метрогородок</option>
                                            <option>Новогиреево</option>
                                            <option>Новокосино</option>
                                            <option>Перово</option>
                                            <option>Преображенское</option>
                                            <option>Северное Измайлово</option>
                                            <option>Соколиная Гора</option>
                                            <option>Сокольники</option>
                                        </optgroup>
                                        <optgroup label="ЮВАО">
                                            <option>Выхино-Жулебино</option>
                                            <option>Капотня</option>
                                            <option>Кузьминки</option>
                                            <option>Лефортово</option>
                                            <option>Люблино</option>
                                            <option>Марьино</option>
                                            <option>Некрасовка</option>
                                            <option>Нижегородский</option>
                                            <option>Печатники</option>
                                            <option>Рязанский</option>
                                            <option>Текстильщики</option>
                                            <option>Южнопортовый</option>
                                        </optgroup>
                                        <optgroup label="ЮАО">
                                            <option>Бирюлёво Восточное</option>
                                            <option>Бирюлёво Западное</option>
                                            <option>Братеево</option>
                                            <option>Даниловский</option>
                                            <option>Донской</option>
                                            <option>Зябликово</option>
                                            <option>Москворечье-Сабурово</option>
                                            <option>Нагатино-Садовники</option>
                                            <option>Нагатинский Затон</option>
                                            <option>Нагорный</option>
                                            <option>Орехово-Борисово Сев</option>
                                            <option>Орехово-Борисово Юж</option>
                                            <option>Царицыно</option>
                                            <option>Чертаново Северное</option>
                                            <option>Чертаново Центр</option>
                                            <option>Чертаново Южное</option>
                                        </optgroup>
                                        <optgroup label="ЮЗАО">
                                            <option>Академический</option>
                                            <option>Гагаринский</option>
                                            <option>Зюзино</option>
                                            <option>Коньково</option>
                                            <option>Котловка</option>
                                            <option>Ломоносовский</option>
                                            <option>Обручевский</option>
                                            <option>Северное Бутово</option>
                                            <option>Тёплый Стан</option>
                                            <option>Черёмушки</option>
                                            <option>Южное Бутово</option>
                                            <option>Ясенево</option>
                                        </optgroup>
                                        <optgroup label="ЗАО">
                                            <option>Внуково</option>
                                            <option>Дорогомилово</option>
                                            <option>Крылатское</option>
                                            <option>Кунцево</option>
                                            <option>Можайский</option>
                                            <option>Ново-Переделкино</option>
                                            <option>Очаково-Матвеевское</option>
                                            <option>Проспект Вернадского</option>
                                            <option>Раменки</option>
                                            <option>Солнцево</option>
                                            <option>Тропарёво-Никулино</option>
                                            <option>Филёвский Парк</option>
                                            <option>Фили-Давыдково</option>
                                        </optgroup>
                                        <optgroup label="СЗАО">
                                            <option>Куркино</option>
                                            <option>Митино</option>
                                            <option>Покровское-Стрешнево</option>
                                            <option>Северное Тушино</option>
                                            <option>Строгино</option>
                                            <option>Хорошёво-Щукино-Матвеевское</option>
                                            <option>Щукино</option>
                                            <option>Южное Тушино</option>
                                        </optgroup>
                                        <optgroup label="ЗелАО">
                                            <option>Матушкино</option>
                                            <option>Савёлки</option>
                                            <option>Старое Крюково</option>
                                            <option>Силино</option>
                                            <option>Крюково</option>
                                        </optgroup>
                                        <optgroup label="НАО">
                                            <option>Воскресенское</option>
                                            <option>Внуковское</option>
                                            <option>Десёновское</option>
                                            <option>Кокошкино</option>
                                            <option>Марушкинское</option>
                                            <option>Московский</option>
                                            <option>Мосрентген</option>
                                            <option>Рязановское</option>
                                            <option>Сосенское</option>
                                            <option>Филимонковское</option>
                                            <option>Щербинка</option>
                                        </optgroup>
                                        <optgroup label="ТАО">
                                            <option>Вороновское</option>
                                            <option>Киевский</option>
                                            <option>Клёновское</option>
                                            <option>Краснопахорское</option>
                                            <option>Михайлово-Ярцевское</option>
                                            <option>Новофёдоровское</option>
                                            <option>Первомайское</option>
                                            <option>Роговское</option>
                                            <option>Троицк</option>
                                            <option>Щаповское</option>
                                        </optgroup>
                                    </select>
                                </label>
                                <label>
                                    <input type="text" placeholder="Адрес, кол-во комнат">
                                </label>
                                <label class="inputCheckbox">
                                    <input type="checkbox" required checked>
                                    <span>Нажимая на кнопку "Отправить заявку", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                                </label>
                            </form>
                        </div>

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

                            <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                                <h3>Заказать <span class="--<? $APPLICATION->ShowProperty("color") ?>">консультацию</span> юриста по недвижимости</h3>
                                <label>
                                    <input type="text" placeholder="Имя*" required>
                                </label>
                                <label>
                                    <input type="tel" class="phone" placeholder="Телефон*" required>
                                </label>
                                <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Отправить заявку</button>
                                <label>
                                    <select  multiple="multiple"  data-placeholder="Тип услуги*" required>
                                        <option value="">&nbsp;</option>
                                        <option>первичная консультация</option>
                                        <option>покупка новостройки</option>
                                        <option>покупка вторички</option>
                                        <option>продажа вторички</option>
                                        <option>альтернативная сделка</option>
                                    </select>
                                </label>
                                <label>
                                    <input type="text" placeholder="Адрес, кол-во комнат">
                                </label>
                                <label class="inputCheckbox">
                                    <input type="checkbox" required checked>
                                    <span>Нажимая на кнопку "Отправить заявку", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                                </label>
                            </form>
                        </div>

                        <!-- + Эксперты по коммерции -->
                        <div class="section__content-slide">
                            <div class="slider_expert2_block_wrap">
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

                            <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                                <h3>Выбрать <span class="--<? $APPLICATION->ShowProperty("color") ?>">районного агента</span></h3>
                                <label>
                                    <input type="text" placeholder="Имя*" required>
                                </label>
                                <label>
                                    <input type="tel" class="phone" placeholder="Телефон*" required>
                                </label>
                                <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Отправить заявку</button>
                                <label>
                                    <select  multiple="multiple"  data-placeholder="Район продажи*" required>
                                        <option value="">&nbsp;</option>
                                        <optgroup label="ЦАО">
                                            <option>Арбат</option>
                                            <option>Басманный</option>
                                            <option>Замоскворечье</option>
                                            <option>Красносельский</option>
                                            <option>Мещанский</option>
                                            <option>Пресненский</option>
                                            <option>Таганский</option>
                                            <option>Тверской</option>
                                            <option>Хамовники</option>
                                            <option>Якиманка</option>
                                        </optgroup>
                                        <optgroup label="САО">
                                            <option>Аэропорт</option>
                                            <option>Беговой</option>
                                            <option>Бескудниковский</option>
                                            <option>Войковский</option>
                                            <option>Восточное Дегунино</option>
                                            <option>Головинский</option>
                                            <option>Дмитровский</option>
                                            <option>Западное Дегунино</option>
                                            <option>Коптево</option>
                                            <option>Левобережный</option>
                                            <option>Молжаниновский</option>
                                            <option>Савёловский</option>
                                            <option>Сокол</option>
                                            <option>Тимирязевский</option>
                                            <option>Ховрино</option>
                                            <option>Хорошёвский</option>
                                        </optgroup>
                                        <optgroup label="СВАО">
                                            <option>Алексеевский</option>
                                            <option>Алтуфьевский</option>
                                            <option>Бабушкинский</option>
                                            <option>Бибирево</option>
                                            <option>Бутырский</option>
                                            <option>Лианозово</option>
                                            <option>Лосиноостровский</option>
                                            <option>Марфино</option>
                                            <option>Марьина роща</option>
                                            <option>Останкинский</option>
                                            <option>Отрадное</option>
                                            <option>Ростокино</option>
                                            <option>Свиблово</option>
                                            <option>Северный</option>
                                            <option>Северное Медведково</option>
                                            <option>Южное Медведково</option>
                                            <option>Ярославский</option>
                                        </optgroup>
                                        <optgroup label="ВАО">
                                            <option>Богородское</option>
                                            <option>Вешняки</option>
                                            <option>Восточный</option>
                                            <option>Восточное Измайлово</option>
                                            <option>Гольяново</option>
                                            <option>Ивановское</option>
                                            <option>Измайлово</option>
                                            <option>Косино-Ухтомский</option>
                                            <option>Метрогородок</option>
                                            <option>Новогиреево</option>
                                            <option>Новокосино</option>
                                            <option>Перово</option>
                                            <option>Преображенское</option>
                                            <option>Северное Измайлово</option>
                                            <option>Соколиная Гора</option>
                                            <option>Сокольники</option>
                                        </optgroup>
                                        <optgroup label="ЮВАО">
                                            <option>Выхино-Жулебино</option>
                                            <option>Капотня</option>
                                            <option>Кузьминки</option>
                                            <option>Лефортово</option>
                                            <option>Люблино</option>
                                            <option>Марьино</option>
                                            <option>Некрасовка</option>
                                            <option>Нижегородский</option>
                                            <option>Печатники</option>
                                            <option>Рязанский</option>
                                            <option>Текстильщики</option>
                                            <option>Южнопортовый</option>
                                        </optgroup>
                                        <optgroup label="ЮАО">
                                            <option>Бирюлёво Восточное</option>
                                            <option>Бирюлёво Западное</option>
                                            <option>Братеево</option>
                                            <option>Даниловский</option>
                                            <option>Донской</option>
                                            <option>Зябликово</option>
                                            <option>Москворечье-Сабурово</option>
                                            <option>Нагатино-Садовники</option>
                                            <option>Нагатинский Затон</option>
                                            <option>Нагорный</option>
                                            <option>Орехово-Борисово Сев</option>
                                            <option>Орехово-Борисово Юж</option>
                                            <option>Царицыно</option>
                                            <option>Чертаново Северное</option>
                                            <option>Чертаново Центр</option>
                                            <option>Чертаново Южное</option>
                                        </optgroup>
                                        <optgroup label="ЮЗАО">
                                            <option>Академический</option>
                                            <option>Гагаринский</option>
                                            <option>Зюзино</option>
                                            <option>Коньково</option>
                                            <option>Котловка</option>
                                            <option>Ломоносовский</option>
                                            <option>Обручевский</option>
                                            <option>Северное Бутово</option>
                                            <option>Тёплый Стан</option>
                                            <option>Черёмушки</option>
                                            <option>Южное Бутово</option>
                                            <option>Ясенево</option>
                                        </optgroup>
                                        <optgroup label="ЗАО">
                                            <option>Внуково</option>
                                            <option>Дорогомилово</option>
                                            <option>Крылатское</option>
                                            <option>Кунцево</option>
                                            <option>Можайский</option>
                                            <option>Ново-Переделкино</option>
                                            <option>Очаково-Матвеевское</option>
                                            <option>Проспект Вернадского</option>
                                            <option>Раменки</option>
                                            <option>Солнцево</option>
                                            <option>Тропарёво-Никулино</option>
                                            <option>Филёвский Парк</option>
                                            <option>Фили-Давыдково</option>
                                        </optgroup>
                                        <optgroup label="СЗАО">
                                            <option>Куркино</option>
                                            <option>Митино</option>
                                            <option>Покровское-Стрешнево</option>
                                            <option>Северное Тушино</option>
                                            <option>Строгино</option>
                                            <option>Хорошёво-Щукино-Матвеевское</option>
                                            <option>Щукино</option>
                                            <option>Южное Тушино</option>
                                        </optgroup>
                                        <optgroup label="ЗелАО">
                                            <option>Матушкино</option>
                                            <option>Савёлки</option>
                                            <option>Старое Крюково</option>
                                            <option>Силино</option>
                                            <option>Крюково</option>
                                        </optgroup>
                                        <optgroup label="НАО">
                                            <option>Воскресенское</option>
                                            <option>Внуковское</option>
                                            <option>Десёновское</option>
                                            <option>Кокошкино</option>
                                            <option>Марушкинское</option>
                                            <option>Московский</option>
                                            <option>Мосрентген</option>
                                            <option>Рязановское</option>
                                            <option>Сосенское</option>
                                            <option>Филимонковское</option>
                                            <option>Щербинка</option>
                                        </optgroup>
                                        <optgroup label="ТАО">
                                            <option>Вороновское</option>
                                            <option>Киевский</option>
                                            <option>Клёновское</option>
                                            <option>Краснопахорское</option>
                                            <option>Михайлово-Ярцевское</option>
                                            <option>Новофёдоровское</option>
                                            <option>Первомайское</option>
                                            <option>Роговское</option>
                                            <option>Троицк</option>
                                            <option>Щаповское</option>
                                        </optgroup>
                                    </select>
                                </label>
                                <label>
                                    <input type="text" placeholder="Адрес, кол-во комнат">
                                </label>
                                <label class="inputCheckbox">
                                    <input type="checkbox" required checked>
                                    <span>Нажимая на кнопку "Отправить заявку", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
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

                            <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                                <h3>Заказать <span class="--<? $APPLICATION->ShowProperty("color") ?>">консультацию</span> юриста по недвижимости</h3>
                                <label>
                                    <input type="text" placeholder="Имя*" required>
                                </label>
                                <label>
                                    <input type="tel" class="phone" placeholder="Телефон*" required>
                                </label>
                                <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Отправить заявку</button>
                                <label>
                                    <select  multiple="multiple"  data-placeholder="Тип услуги*" required>
                                        <option value="">&nbsp;</option>
                                        <option>первичная консультация</option>
                                        <option>покупка новостройки</option>
                                        <option>покупка вторички</option>
                                        <option>продажа вторички</option>
                                        <option>альтернативная сделка</option>
                                    </select>
                                </label>
                                <label>
                                    <input type="text" placeholder="Адрес, кол-во комнат">
                                </label>
                                <label class="inputCheckbox">
                                    <input type="checkbox" required checked>
                                    <span>Нажимая на кнопку "Отправить заявку", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
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

                            <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                                <h3>Разместить <span class="--<? $APPLICATION->ShowProperty("color") ?>">объект в рекламу</span></h3>
                                <label>
                                    <input type="text" placeholder="Имя*" required>
                                </label>
                                <label>
                                    <input type="tel" class="phone" placeholder="Телефон*" required>
                                </label>
                                <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Заказать звонок</button>
                                <label>
                                    <select  multiple="multiple"  data-placeholder="Район продажи*" required>
                                        <option value="">&nbsp;</option>
                                        <optgroup label="ЦАО">
                                            <option>Арбат</option>
                                            <option>Басманный</option>
                                            <option>Замоскворечье</option>
                                            <option>Красносельский</option>
                                            <option>Мещанский</option>
                                            <option>Пресненский</option>
                                            <option>Таганский</option>
                                            <option>Тверской</option>
                                            <option>Хамовники</option>
                                            <option>Якиманка</option>
                                        </optgroup>
                                        <optgroup label="САО">
                                            <option>Аэропорт</option>
                                            <option>Беговой</option>
                                            <option>Бескудниковский</option>
                                            <option>Войковский</option>
                                            <option>Восточное Дегунино</option>
                                            <option>Головинский</option>
                                            <option>Дмитровский</option>
                                            <option>Западное Дегунино</option>
                                            <option>Коптево</option>
                                            <option>Левобережный</option>
                                            <option>Молжаниновский</option>
                                            <option>Савёловский</option>
                                            <option>Сокол</option>
                                            <option>Тимирязевский</option>
                                            <option>Ховрино</option>
                                            <option>Хорошёвский</option>
                                        </optgroup>
                                        <optgroup label="СВАО">
                                            <option>Алексеевский</option>
                                            <option>Алтуфьевский</option>
                                            <option>Бабушкинский</option>
                                            <option>Бибирево</option>
                                            <option>Бутырский</option>
                                            <option>Лианозово</option>
                                            <option>Лосиноостровский</option>
                                            <option>Марфино</option>
                                            <option>Марьина роща</option>
                                            <option>Останкинский</option>
                                            <option>Отрадное</option>
                                            <option>Ростокино</option>
                                            <option>Свиблово</option>
                                            <option>Северный</option>
                                            <option>Северное Медведково</option>
                                            <option>Южное Медведково</option>
                                            <option>Ярославский</option>
                                        </optgroup>
                                        <optgroup label="ВАО">
                                            <option>Богородское</option>
                                            <option>Вешняки</option>
                                            <option>Восточный</option>
                                            <option>Восточное Измайлово</option>
                                            <option>Гольяново</option>
                                            <option>Ивановское</option>
                                            <option>Измайлово</option>
                                            <option>Косино-Ухтомский</option>
                                            <option>Метрогородок</option>
                                            <option>Новогиреево</option>
                                            <option>Новокосино</option>
                                            <option>Перово</option>
                                            <option>Преображенское</option>
                                            <option>Северное Измайлово</option>
                                            <option>Соколиная Гора</option>
                                            <option>Сокольники</option>
                                        </optgroup>
                                        <optgroup label="ЮВАО">
                                            <option>Выхино-Жулебино</option>
                                            <option>Капотня</option>
                                            <option>Кузьминки</option>
                                            <option>Лефортово</option>
                                            <option>Люблино</option>
                                            <option>Марьино</option>
                                            <option>Некрасовка</option>
                                            <option>Нижегородский</option>
                                            <option>Печатники</option>
                                            <option>Рязанский</option>
                                            <option>Текстильщики</option>
                                            <option>Южнопортовый</option>
                                        </optgroup>
                                        <optgroup label="ЮАО">
                                            <option>Бирюлёво Восточное</option>
                                            <option>Бирюлёво Западное</option>
                                            <option>Братеево</option>
                                            <option>Даниловский</option>
                                            <option>Донской</option>
                                            <option>Зябликово</option>
                                            <option>Москворечье-Сабурово</option>
                                            <option>Нагатино-Садовники</option>
                                            <option>Нагатинский Затон</option>
                                            <option>Нагорный</option>
                                            <option>Орехово-Борисово Сев</option>
                                            <option>Орехово-Борисово Юж</option>
                                            <option>Царицыно</option>
                                            <option>Чертаново Северное</option>
                                            <option>Чертаново Центр</option>
                                            <option>Чертаново Южное</option>
                                        </optgroup>
                                        <optgroup label="ЮЗАО">
                                            <option>Академический</option>
                                            <option>Гагаринский</option>
                                            <option>Зюзино</option>
                                            <option>Коньково</option>
                                            <option>Котловка</option>
                                            <option>Ломоносовский</option>
                                            <option>Обручевский</option>
                                            <option>Северное Бутово</option>
                                            <option>Тёплый Стан</option>
                                            <option>Черёмушки</option>
                                            <option>Южное Бутово</option>
                                            <option>Ясенево</option>
                                        </optgroup>
                                        <optgroup label="ЗАО">
                                            <option>Внуково</option>
                                            <option>Дорогомилово</option>
                                            <option>Крылатское</option>
                                            <option>Кунцево</option>
                                            <option>Можайский</option>
                                            <option>Ново-Переделкино</option>
                                            <option>Очаково-Матвеевское</option>
                                            <option>Проспект Вернадского</option>
                                            <option>Раменки</option>
                                            <option>Солнцево</option>
                                            <option>Тропарёво-Никулино</option>
                                            <option>Филёвский Парк</option>
                                            <option>Фили-Давыдково</option>
                                        </optgroup>
                                        <optgroup label="СЗАО">
                                            <option>Куркино</option>
                                            <option>Митино</option>
                                            <option>Покровское-Стрешнево</option>
                                            <option>Северное Тушино</option>
                                            <option>Строгино</option>
                                            <option>Хорошёво-Щукино-Матвеевское</option>
                                            <option>Щукино</option>
                                            <option>Южное Тушино</option>
                                        </optgroup>
                                        <optgroup label="ЗелАО">
                                            <option>Матушкино</option>
                                            <option>Савёлки</option>
                                            <option>Старое Крюково</option>
                                            <option>Силино</option>
                                            <option>Крюково</option>
                                        </optgroup>
                                        <optgroup label="НАО">
                                            <option>Воскресенское</option>
                                            <option>Внуковское</option>
                                            <option>Десёновское</option>
                                            <option>Кокошкино</option>
                                            <option>Марушкинское</option>
                                            <option>Московский</option>
                                            <option>Мосрентген</option>
                                            <option>Рязановское</option>
                                            <option>Сосенское</option>
                                            <option>Филимонковское</option>
                                            <option>Щербинка</option>
                                        </optgroup>
                                        <optgroup label="ТАО">
                                            <option>Вороновское</option>
                                            <option>Киевский</option>
                                            <option>Клёновское</option>
                                            <option>Краснопахорское</option>
                                            <option>Михайлово-Ярцевское</option>
                                            <option>Новофёдоровское</option>
                                            <option>Первомайское</option>
                                            <option>Роговское</option>
                                            <option>Троицк</option>
                                            <option>Щаповское</option>
                                        </optgroup>
                                    </select>
                                </label>
                                <label>
                                    <input type="text" placeholder="Адрес, кол-во комнат">
                                </label>
                                <label class="inputCheckbox">
                                    <input type="checkbox" required checked>
                                    <span>Нажимая на кнопку "Заказать звонок", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                                </label>
                            </form>
                        </div>

                        <!-- + Маркетологи -->
                        <div class="section__content-slide">
                            <div class="slider_market_block_wrap">
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

                            <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                                <h3>Разместить <span class="--<? $APPLICATION->ShowProperty("color") ?>">объект в рекламу</span></h3>
                                <label>
                                    <input type="text" placeholder="Имя*" required>
                                </label>
                                <label>
                                    <input type="tel" class="phone" placeholder="Телефон*" required>
                                </label>
                                <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Заказать звонок</button>
                                <label>
                                    <select  multiple="multiple"  data-placeholder="Район продажи*" required>
                                        <option value="">&nbsp;</option>
                                        <optgroup label="ЦАО">
                                            <option>Арбат</option>
                                            <option>Басманный</option>
                                            <option>Замоскворечье</option>
                                            <option>Красносельский</option>
                                            <option>Мещанский</option>
                                            <option>Пресненский</option>
                                            <option>Таганский</option>
                                            <option>Тверской</option>
                                            <option>Хамовники</option>
                                            <option>Якиманка</option>
                                        </optgroup>
                                        <optgroup label="САО">
                                            <option>Аэропорт</option>
                                            <option>Беговой</option>
                                            <option>Бескудниковский</option>
                                            <option>Войковский</option>
                                            <option>Восточное Дегунино</option>
                                            <option>Головинский</option>
                                            <option>Дмитровский</option>
                                            <option>Западное Дегунино</option>
                                            <option>Коптево</option>
                                            <option>Левобережный</option>
                                            <option>Молжаниновский</option>
                                            <option>Савёловский</option>
                                            <option>Сокол</option>
                                            <option>Тимирязевский</option>
                                            <option>Ховрино</option>
                                            <option>Хорошёвский</option>
                                        </optgroup>
                                        <optgroup label="СВАО">
                                            <option>Алексеевский</option>
                                            <option>Алтуфьевский</option>
                                            <option>Бабушкинский</option>
                                            <option>Бибирево</option>
                                            <option>Бутырский</option>
                                            <option>Лианозово</option>
                                            <option>Лосиноостровский</option>
                                            <option>Марфино</option>
                                            <option>Марьина роща</option>
                                            <option>Останкинский</option>
                                            <option>Отрадное</option>
                                            <option>Ростокино</option>
                                            <option>Свиблово</option>
                                            <option>Северный</option>
                                            <option>Северное Медведково</option>
                                            <option>Южное Медведково</option>
                                            <option>Ярославский</option>
                                        </optgroup>
                                        <optgroup label="ВАО">
                                            <option>Богородское</option>
                                            <option>Вешняки</option>
                                            <option>Восточный</option>
                                            <option>Восточное Измайлово</option>
                                            <option>Гольяново</option>
                                            <option>Ивановское</option>
                                            <option>Измайлово</option>
                                            <option>Косино-Ухтомский</option>
                                            <option>Метрогородок</option>
                                            <option>Новогиреево</option>
                                            <option>Новокосино</option>
                                            <option>Перово</option>
                                            <option>Преображенское</option>
                                            <option>Северное Измайлово</option>
                                            <option>Соколиная Гора</option>
                                            <option>Сокольники</option>
                                        </optgroup>
                                        <optgroup label="ЮВАО">
                                            <option>Выхино-Жулебино</option>
                                            <option>Капотня</option>
                                            <option>Кузьминки</option>
                                            <option>Лефортово</option>
                                            <option>Люблино</option>
                                            <option>Марьино</option>
                                            <option>Некрасовка</option>
                                            <option>Нижегородский</option>
                                            <option>Печатники</option>
                                            <option>Рязанский</option>
                                            <option>Текстильщики</option>
                                            <option>Южнопортовый</option>
                                        </optgroup>
                                        <optgroup label="ЮАО">
                                            <option>Бирюлёво Восточное</option>
                                            <option>Бирюлёво Западное</option>
                                            <option>Братеево</option>
                                            <option>Даниловский</option>
                                            <option>Донской</option>
                                            <option>Зябликово</option>
                                            <option>Москворечье-Сабурово</option>
                                            <option>Нагатино-Садовники</option>
                                            <option>Нагатинский Затон</option>
                                            <option>Нагорный</option>
                                            <option>Орехово-Борисово Сев</option>
                                            <option>Орехово-Борисово Юж</option>
                                            <option>Царицыно</option>
                                            <option>Чертаново Северное</option>
                                            <option>Чертаново Центр</option>
                                            <option>Чертаново Южное</option>
                                        </optgroup>
                                        <optgroup label="ЮЗАО">
                                            <option>Академический</option>
                                            <option>Гагаринский</option>
                                            <option>Зюзино</option>
                                            <option>Коньково</option>
                                            <option>Котловка</option>
                                            <option>Ломоносовский</option>
                                            <option>Обручевский</option>
                                            <option>Северное Бутово</option>
                                            <option>Тёплый Стан</option>
                                            <option>Черёмушки</option>
                                            <option>Южное Бутово</option>
                                            <option>Ясенево</option>
                                        </optgroup>
                                        <optgroup label="ЗАО">
                                            <option>Внуково</option>
                                            <option>Дорогомилово</option>
                                            <option>Крылатское</option>
                                            <option>Кунцево</option>
                                            <option>Можайский</option>
                                            <option>Ново-Переделкино</option>
                                            <option>Очаково-Матвеевское</option>
                                            <option>Проспект Вернадского</option>
                                            <option>Раменки</option>
                                            <option>Солнцево</option>
                                            <option>Тропарёво-Никулино</option>
                                            <option>Филёвский Парк</option>
                                            <option>Фили-Давыдково</option>
                                        </optgroup>
                                        <optgroup label="СЗАО">
                                            <option>Куркино</option>
                                            <option>Митино</option>
                                            <option>Покровское-Стрешнево</option>
                                            <option>Северное Тушино</option>
                                            <option>Строгино</option>
                                            <option>Хорошёво-Щукино-Матвеевское</option>
                                            <option>Щукино</option>
                                            <option>Южное Тушино</option>
                                        </optgroup>
                                        <optgroup label="ЗелАО">
                                            <option>Матушкино</option>
                                            <option>Савёлки</option>
                                            <option>Старое Крюково</option>
                                            <option>Силино</option>
                                            <option>Крюково</option>
                                        </optgroup>
                                        <optgroup label="НАО">
                                            <option>Воскресенское</option>
                                            <option>Внуковское</option>
                                            <option>Десёновское</option>
                                            <option>Кокошкино</option>
                                            <option>Марушкинское</option>
                                            <option>Московский</option>
                                            <option>Мосрентген</option>
                                            <option>Рязановское</option>
                                            <option>Сосенское</option>
                                            <option>Филимонковское</option>
                                            <option>Щербинка</option>
                                        </optgroup>
                                        <optgroup label="ТАО">
                                            <option>Вороновское</option>
                                            <option>Киевский</option>
                                            <option>Клёновское</option>
                                            <option>Краснопахорское</option>
                                            <option>Михайлово-Ярцевское</option>
                                            <option>Новофёдоровское</option>
                                            <option>Первомайское</option>
                                            <option>Роговское</option>
                                            <option>Троицк</option>
                                            <option>Щаповское</option>
                                        </optgroup>
                                    </select>
                                </label>
                                <label>
                                    <input type="text" placeholder="Адрес, кол-во комнат">
                                </label>
                                <label class="inputCheckbox">
                                    <input type="checkbox" required checked>
                                    <span>Нажимая на кнопку "Заказать звонок", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                                </label>
                            </form>
                        </div>

                        <!-- + Операторы -->
                        <div class="section__content-slide">
                            <div class="slider_operator_block_wrap">
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

                            <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                                <h3>Заказать <span class="--<? $APPLICATION->ShowProperty("color") ?>">звонок</span></h3>
                                <label>
                                    <input type="text" placeholder="Имя*" required>
                                </label>
                                <label>
                                    <input type="tel" class="phone" placeholder="Телефон*" required>
                                </label>
                                <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Заказать звонок</button>
                                <label>
                                    <select  multiple="multiple"  data-placeholder="Район продажи*" required>
                                        <option value="">&nbsp;</option>
                                        <optgroup label="ЦАО">
                                            <option>Арбат</option>
                                            <option>Басманный</option>
                                            <option>Замоскворечье</option>
                                            <option>Красносельский</option>
                                            <option>Мещанский</option>
                                            <option>Пресненский</option>
                                            <option>Таганский</option>
                                            <option>Тверской</option>
                                            <option>Хамовники</option>
                                            <option>Якиманка</option>
                                        </optgroup>
                                        <optgroup label="САО">
                                            <option>Аэропорт</option>
                                            <option>Беговой</option>
                                            <option>Бескудниковский</option>
                                            <option>Войковский</option>
                                            <option>Восточное Дегунино</option>
                                            <option>Головинский</option>
                                            <option>Дмитровский</option>
                                            <option>Западное Дегунино</option>
                                            <option>Коптево</option>
                                            <option>Левобережный</option>
                                            <option>Молжаниновский</option>
                                            <option>Савёловский</option>
                                            <option>Сокол</option>
                                            <option>Тимирязевский</option>
                                            <option>Ховрино</option>
                                            <option>Хорошёвский</option>
                                        </optgroup>
                                        <optgroup label="СВАО">
                                            <option>Алексеевский</option>
                                            <option>Алтуфьевский</option>
                                            <option>Бабушкинский</option>
                                            <option>Бибирево</option>
                                            <option>Бутырский</option>
                                            <option>Лианозово</option>
                                            <option>Лосиноостровский</option>
                                            <option>Марфино</option>
                                            <option>Марьина роща</option>
                                            <option>Останкинский</option>
                                            <option>Отрадное</option>
                                            <option>Ростокино</option>
                                            <option>Свиблово</option>
                                            <option>Северный</option>
                                            <option>Северное Медведково</option>
                                            <option>Южное Медведково</option>
                                            <option>Ярославский</option>
                                        </optgroup>
                                        <optgroup label="ВАО">
                                            <option>Богородское</option>
                                            <option>Вешняки</option>
                                            <option>Восточный</option>
                                            <option>Восточное Измайлово</option>
                                            <option>Гольяново</option>
                                            <option>Ивановское</option>
                                            <option>Измайлово</option>
                                            <option>Косино-Ухтомский</option>
                                            <option>Метрогородок</option>
                                            <option>Новогиреево</option>
                                            <option>Новокосино</option>
                                            <option>Перово</option>
                                            <option>Преображенское</option>
                                            <option>Северное Измайлово</option>
                                            <option>Соколиная Гора</option>
                                            <option>Сокольники</option>
                                        </optgroup>
                                        <optgroup label="ЮВАО">
                                            <option>Выхино-Жулебино</option>
                                            <option>Капотня</option>
                                            <option>Кузьминки</option>
                                            <option>Лефортово</option>
                                            <option>Люблино</option>
                                            <option>Марьино</option>
                                            <option>Некрасовка</option>
                                            <option>Нижегородский</option>
                                            <option>Печатники</option>
                                            <option>Рязанский</option>
                                            <option>Текстильщики</option>
                                            <option>Южнопортовый</option>
                                        </optgroup>
                                        <optgroup label="ЮАО">
                                            <option>Бирюлёво Восточное</option>
                                            <option>Бирюлёво Западное</option>
                                            <option>Братеево</option>
                                            <option>Даниловский</option>
                                            <option>Донской</option>
                                            <option>Зябликово</option>
                                            <option>Москворечье-Сабурово</option>
                                            <option>Нагатино-Садовники</option>
                                            <option>Нагатинский Затон</option>
                                            <option>Нагорный</option>
                                            <option>Орехово-Борисово Сев</option>
                                            <option>Орехово-Борисово Юж</option>
                                            <option>Царицыно</option>
                                            <option>Чертаново Северное</option>
                                            <option>Чертаново Центр</option>
                                            <option>Чертаново Южное</option>
                                        </optgroup>
                                        <optgroup label="ЮЗАО">
                                            <option>Академический</option>
                                            <option>Гагаринский</option>
                                            <option>Зюзино</option>
                                            <option>Коньково</option>
                                            <option>Котловка</option>
                                            <option>Ломоносовский</option>
                                            <option>Обручевский</option>
                                            <option>Северное Бутово</option>
                                            <option>Тёплый Стан</option>
                                            <option>Черёмушки</option>
                                            <option>Южное Бутово</option>
                                            <option>Ясенево</option>
                                        </optgroup>
                                        <optgroup label="ЗАО">
                                            <option>Внуково</option>
                                            <option>Дорогомилово</option>
                                            <option>Крылатское</option>
                                            <option>Кунцево</option>
                                            <option>Можайский</option>
                                            <option>Ново-Переделкино</option>
                                            <option>Очаково-Матвеевское</option>
                                            <option>Проспект Вернадского</option>
                                            <option>Раменки</option>
                                            <option>Солнцево</option>
                                            <option>Тропарёво-Никулино</option>
                                            <option>Филёвский Парк</option>
                                            <option>Фили-Давыдково</option>
                                        </optgroup>
                                        <optgroup label="СЗАО">
                                            <option>Куркино</option>
                                            <option>Митино</option>
                                            <option>Покровское-Стрешнево</option>
                                            <option>Северное Тушино</option>
                                            <option>Строгино</option>
                                            <option>Хорошёво-Щукино-Матвеевское</option>
                                            <option>Щукино</option>
                                            <option>Южное Тушино</option>
                                        </optgroup>
                                        <optgroup label="ЗелАО">
                                            <option>Матушкино</option>
                                            <option>Савёлки</option>
                                            <option>Старое Крюково</option>
                                            <option>Силино</option>
                                            <option>Крюково</option>
                                        </optgroup>
                                        <optgroup label="НАО">
                                            <option>Воскресенское</option>
                                            <option>Внуковское</option>
                                            <option>Десёновское</option>
                                            <option>Кокошкино</option>
                                            <option>Марушкинское</option>
                                            <option>Московский</option>
                                            <option>Мосрентген</option>
                                            <option>Рязановское</option>
                                            <option>Сосенское</option>
                                            <option>Филимонковское</option>
                                            <option>Щербинка</option>
                                        </optgroup>
                                        <optgroup label="ТАО">
                                            <option>Вороновское</option>
                                            <option>Киевский</option>
                                            <option>Клёновское</option>
                                            <option>Краснопахорское</option>
                                            <option>Михайлово-Ярцевское</option>
                                            <option>Новофёдоровское</option>
                                            <option>Первомайское</option>
                                            <option>Роговское</option>
                                            <option>Троицк</option>
                                            <option>Щаповское</option>
                                        </optgroup>
                                    </select>
                                </label>
                                <label>
                                    <input type="text" placeholder="Адрес, кол-во комнат">
                                </label>
                                <label class="inputCheckbox">
                                    <input type="checkbox" required checked>
                                    <span>Нажимая на кнопку "Заказать звонок", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                                </label>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <section class="section cta-big-text">
        <div class="wrapper relative">
            <div class="section__big-text --mgb60">
                <p>Остались <br>вопросы?</p>
            </div>
            <a href="#sendReq" class="btn section__absolute-button right --orange js--transparent_pop-up">
                <svg class="icon">
                    <use xlink:href="#PhoneCall"></use>
                </svg>
                Заказать звонок
            </a>
        </div>
    </section>



    <div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="sendReq">
        <div class="wrapper">
            <div class="text-block">

                <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Заказать <span class="--lightViolet">звонок</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <button type="submit" class="btn --lightViolet">Заказать звонок</button>
                    <label class="w66 w100-xs">
                        <input type="text" placeholder="Комментарии">
                    </label>
                    <label class="inputCheckbox w100-xs">
                        <input type="checkbox" required checked>
                        <span>Нажимая на кнопку "Заказать звонок", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                    </label>
                </form>
            </div>
        </div>
    </div>

    <div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="formBlock">
        <div class="wrapper">
            <div class="text-block">

                <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt90 full-width" enctype="multipart/form-data" method="post">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Отправить <span class="--orange">резюме</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <label>
                        <input type="email" placeholder="Email*" required>
                    </label>
                    <label>
                        <select data-placeholder="Выберите отдел*" required>
                            <option value=""></option>
                            <option value="1">вторичка</option>
                            <option value="2">новостройка</option>
                        </select>
                    </label>
                    <label>
                        <input type="text" placeholder="Комментарий">
                    </label>
                    <label>
                        <input type="file">
                        <span>Прикрепить файл</span>
                    </label>
                    <label class="inputCheckbox w66">
                        <input type="checkbox" required checked>
                        <span>Нажимая на кнопку "Отправить", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                    </label>
                    <button type="submit" class="btn --orange">Отправить</button>
                </form>
            </div>
        </div>
    </div>

    <div class="advantages-pop-up advantages-pop-up-vacancyes pop-up g-flex-column --pdb90" id="advant_pop-up1">
        <div class="pop-up-container-wrap">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="wrapper">
                        <h3 class="title">Работа <span class="--green">в бирюзовой организации</span></h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/vacancyes-advantages--1.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№1</div>
                                    <p class="--mgb30"><b>Dream Realty - бирюзовая организация</b>, поэтому у нас:</p>
                                    <ul class="--min-lh">
                                        <li>нет бюрократии, планов продаж и многочисленных начальников,</li>
                                        <li>есть собственные ценности, стандарты и технологии работы,</li>
                                        <li>поощряется инициатива и трансформационные идеи,</li>
                                        <li>цели компании распространяются далеко за рамками прибыли и сферы недвижимости.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section --mgt90">
                    <div class="wrapper">
                        <h3 class="--mgb90"><span class="--green">Мечтайте</span> о большем! <br><span class="--green">Растите</span> с нами!</h3>
                        <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt90 full-width" enctype="multipart/form-data" method="post">
                            <h3>Отправить <span class="--green">резюме</span></h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <label>
                                <input type="email" placeholder="Email*" required>
                            </label>
                            <label>
                                <select data-placeholder="Выберите отдел*" required>
                                    <option value=""></option>
                                    <option value="1">вторичка</option>
                                    <option value="2">новостройка</option>
                                </select>
                            </label>
                            <label>
                                <input type="text" placeholder="Комментарий">
                            </label>
                            <label>
                                <input type="file">
                                <span>Прикрепить файл</span>
                            </label>
                            <label class="inputCheckbox w66">
                                <input type="checkbox" required checked>
                                <span>Нажимая на кнопку "Отправить", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                            </label>
                            <button type="submit" class="btn --orange">Отправить</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div class="advantages-pop-up advantages-pop-up-vacancyes pop-up g-flex-column --pdb90" id="advant_pop-up2">
        <div class="pop-up-container-wrap">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="wrapper">
                        <h3 class="title">Атмосфера <span class="--green">позитива и доверия</span></h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/vacancyes-advantages--2.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№2</div>
                                    <p class="--mgb30"><b>Dream Realty - компания мечты</b>, потому что для нас:</p>
                                    <ul class="--min-lh">
                                        <li>интересы клиента - наивысшая ценность,</li>
                                        <li>сотрудник - главный ресурс компании, а не инструмент по извлечению прибыли,</li>
                                        <li>успех бизнеса измеряется социальной значимостью проекта и высоким уровенем лояльности со стороны клиентов, сотрудников и партнеров компании,</li>
                                        <li>доверие важнее договора и именно поэтому мы не заставляем своих клиентов подписывать “эксклюзив”.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section --mgt90">
                    <div class="wrapper">
                        <h3 class="--mgb90">Думая о деле, <br><span class="--green">мы думаем о людях!</span></h3>
                        <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt90 full-width" enctype="multipart/form-data" method="post">
                            <h3>Отправить <span class="--green">резюме</span></h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <label>
                                <input type="email" placeholder="Email*" required>
                            </label>
                            <label>
                                <select data-placeholder="Выберите отдел*" required>
                                    <option value=""></option>
                                    <option value="1">вторичка</option>
                                    <option value="2">новостройка</option>
                                </select>
                            </label>
                            <label>
                                <input type="text" placeholder="Комментарий">
                            </label>
                            <label>
                                <input type="file">
                                <span>Прикрепить файл</span>
                            </label>
                            <label class="inputCheckbox w66">
                                <input type="checkbox" required checked>
                                <span>Нажимая на кнопку "Отправить", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                            </label>
                            <button type="submit" class="btn --orange">Отправить</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>

    </div>

    <div class="advantages-pop-up advantages-pop-up-vacancyes pop-up g-flex-column --pdb90" id="advant_pop-up3">
        <div class="pop-up-container-wrap">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="wrapper">
                        <h3 class="title">Мотивация на <span class="--green">развитие и успех</span></h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/vacancyes-advantages--3.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№3</div>
                                    <p class="--mgb30"><b>Dream Realty - команда top экспертов</b>, поскольку мы:</p>
                                    <ul class="--min-lh">
                                        <li>продаем и покупаем с ощутимой выгодой для клиентов,</li>
                                        <li>научились сами и обучаем других зарабатывать на инвестировании,</li>
                                        <li>стремимся к WoW сервису, превосходя ожидания клиента даже в мелочах,</li>
                                        <li>делимся экспертным мнением и собственными наработками на своих каналах в YouTube и Telegram.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section --mgt90">
                    <div class="wrapper">
                        <h3 class="--mgb90"><span class="--green">Ценность</span> того, что мы делаем, <br>значительно <span class="--green">выше наших тарифов!</span></h3>
                        <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt90 full-width" enctype="multipart/form-data" method="post">
                            <h3>Отправить <span class="--green">резюме</span></h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <label>
                                <input type="email" placeholder="Email*" required>
                            </label>
                            <label>
                                <select data-placeholder="Выберите отдел*" required>
                                    <option value=""></option>
                                    <option value="1">вторичка</option>
                                    <option value="2">новостройка</option>
                                </select>
                            </label>
                            <label>
                                <input type="text" placeholder="Комментарий">
                            </label>
                            <label>
                                <input type="file">
                                <span>Прикрепить файл</span>
                            </label>
                            <label class="inputCheckbox w66">
                                <input type="checkbox" required checked>
                                <span>Нажимая на кнопку "Отправить", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                            </label>
                            <button type="submit" class="btn --orange">Отправить</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>

    </div>

    <div class="advantages-pop-up advantages-pop-up-vacancyes pop-up g-flex-column --pdb90" id="advant_pop-up4">
        <div class="pop-up-container-wrap">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="wrapper">
                        <h3 class="title"><span class="--green">Наставничество</span> и поддержка</h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/vacancyes-advantages--4.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№4</div>
                                    <p class="--mgb30"><b>Dream Realty - устойчивая эко-система</b>, в которой мы:</p>
                                    <ul class="--min-lh">
                                        <li>открыто взаимодействуя, развиваемся лично и раскрываем возможности друг друга,</li>
                                        <li>не сравниваем себя с другими, а сравниваем с собой вчерашними и стремимся к лучшей версии себя,</li>
                                        <li>стараемся жить осознанно, мыслить масштабно, действовать экологично, общаться уважительно, вступать в обмен с превышением,</li>
                                        <li>настолько доверяем друг другу, что делимся клиентами, отдыхаем семьями и общаемся вне офиса.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section --mgt90">
                    <div class="wrapper">
                        <h3 class="--mgb90">Как будто мы специально <span class="--green">лучше всех :)</span></h3>
                        <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt90 full-width" enctype="multipart/form-data" method="post">
                            <h3>Отправить <span class="--green">резюме</span></h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <label>
                                <input type="email" placeholder="Email*" required>
                            </label>
                            <label>
                                <select data-placeholder="Выберите отдел*" required>
                                    <option value=""></option>
                                    <option value="1">вторичка</option>
                                    <option value="2">новостройка</option>
                                </select>
                            </label>
                            <label>
                                <input type="text" placeholder="Комментарий">
                            </label>
                            <label>
                                <input type="file">
                                <span>Прикрепить файл</span>
                            </label>
                            <label class="inputCheckbox w66">
                                <input type="checkbox" required checked>
                                <span>Нажимая на кнопку "Отправить", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                            </label>
                            <button type="submit" class="btn --orange">Отправить</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>

    </div>

    <div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="summary">
        <div class="wrapper">
            <div class="text-block">

                <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt90 full-width" enctype="multipart/form-data" method="post">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Отправить <span class="text--orange">резюме</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <label>
                        <input type="email" placeholder="Email*" required>
                    </label>
                    <label>
                        <select data-placeholder="Выберите отдел*" required>
                            <option value=""></option>
                            <option value="1">вторичка</option>
                            <option value="2">новостройка</option>
                        </select>
                    </label>
                    <label>
                        <input type="text" placeholder="Комментарий">
                    </label>
                    <label>
                        <input type="file">
                        <span>Прикрепить файл</span>
                    </label>
                    <label class="inputCheckbox w66">
                        <input type="checkbox" required checked>
                        <span>Нажимая на кнопку "Отправить", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                    </label>
                    <button type="submit" class="btn --orange">Отправить</button>
                </form>
            </div>
        </div>
    </div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>