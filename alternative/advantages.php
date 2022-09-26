<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "ОБМЕН");
$APPLICATION->SetTitle("ПРЕИМУЩЕСТВА ПРОДАЖИ И ПОКУПКИ КВАРТИР С НАМИ");
?>

<link rel="stylesheet" href="/bitrix/templates/realty/assets/css/advantages.css?v=<?=rand(0, 255)?>">
    
        <section class="section advantages-page grayHalfBG">
            <div class="wrapper">
                <div class="section__big-text --mgb40">
                    <p>агентство мечты</p>
                </div>
                <div class="section__advantages--full g-flex-wrap g-flex-between --mgt180">
                    <a href="#advant_pop-up1" class="section__advantage --pkm110 g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/illustrations/burgundy/01.svg);background-position-y: -100px;">
                        <span class="num">1</span>
                        <div class="g-flex-align-center g-flex-justify-center"><p>Команда из <span class="--darkViolet" style="font-weight: bold;">двух районных</span> агентов</p></div>
                    </a>
                    <a href="#advant_pop-up2" class="section__advantage --phm130 --white g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/illustrations/burgundy/02.svg);background-position-x: -40px;">
                        <span class="num">2</span>
                        <div class="g-flex-align-center g-flex-justify-center"><p>Вычисляем <span class="--darkViolet" style="font-weight: bold;">псевдо покупателей и неликвид</span></p></div>
                    </a>
                    <a href="#advant_pop-up3" class="section__advantage --phm130 --white g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/illustrations/burgundy/03.svg);">
                        <span class="num">3</span>
                        <div class="g-flex-align-center g-flex-justify-center"><p><span class="--darkViolet" style="font-weight: bold;">Еженедельные отчеты</span> на e-mail</p></div>
                    </a>
                    <a href="#advant_pop-up4" class="section__advantage --white g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/illustrations/burgundy/04.svg);background-position-y: -20px;">
                        <span class="num">4</span>
                        <div class="g-flex-align-center g-flex-justify-center"><p><span class="--darkViolet" style="font-weight: bold;">Профильный юрист</span> на авансах и сделке</p></div>
                    </a>
                    <a href="#advant_pop-up5" class="section__advantage --white g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/illustrations/burgundy/05.svg);">
                        <span class="num">5</span>
                        <div class="g-flex-align-center g-flex-justify-center"><p>Официальный <span class="--darkViolet" style="font-weight: bold;">отчет о проверке квартиры</span></p></div>
                    </a>
                    <a href="#advant_pop-up6" class="section__advantage --phm120 --white g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/illustrations/burgundy/06.svg);">
                        <span class="num">6</span>
                        <div class="g-flex-align-center g-flex-justify-center"><p><span class="--darkViolet" style="font-weight: bold;">Удобные и прозрачные</span> тарифы</p></div>
                    </a>
                </div>
            </div>
        </section>

        <section class="section how-it-works --pdb0">
            <div class="wrapper">
                <div class="section__big-text --mgb40">
                    <p>Команда</p>
                </div>
                <div class="section__content-changer g-flex-column">
                    <div class="section__content-tabs top g-flex-justify-center g-flex-align-center fit-content center --mgb20">
                        <div class="section__content-tab active">
                            Районные агенты
                        </div>
                        <div class="section__content-tab">
                            Эксперты по новостройкам
                        </div>
                        <div class="section__content-tab">
                            Юристы
                        </div>
                        <div class="section__content-tab">
                            Кредитные брокеры
                        </div>
                    </div>
                    <div class="section__content-tabs bottom g-flex-justify-center g-flex-align-center fit-content center --mgb40">
                        <div class="section__content-tab">
                            Маркетологи
                        </div>
                        <div class="section__content-tab">
                            Операторы
                        </div>
                    </div>
                    <svg class="--darkViolet" viewBox="0 0 32 32">
                        <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="section__content-slider slider">
                        <!-- + Районные агенты -->
                        <div class="section__content-slide">
                            <div class="slider_rayon_block_wrap">
                                <!--slider_agent_block_head-->
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
                                                <option <? if ($_GET['sort'] == 'PROPERTY_SURNAME') {echo "selected ";}?> <?=($_GET['sort'] ? "" : "selected")?> value="sort=PROPERTY_SURNAME&order=ASC">По фамилии от А до Я</option>
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

                            <form class="g-flex-wrap g-flex-between g-flex-align-center w100 --mgt30 margin-lr-0">
                                <h3>Выбрать <span class="--darkViolet">районного агента</span></h3>
                                <label>
                                    <input type="text" placeholder="Имя*" required>
                                </label>
                                <label>
                                    <input type="tel" class="phone" placeholder="Телефон*" required>
                                </label>
                                <button type="submit" class="btn --darkViolet">Отправить заявку</button>
                                <label>
                                    <select data-placeholder="Район продажи*" required>
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
                                            <option <? if ($_GET['sort'] == 'PROPERTY_SURNAME') {echo "selected ";}?> <?=($_GET['sort'] ? "" : "selected")?> value="sort=PROPERTY_SURNAME&order=ASC">По фамилии от А до Я</option>
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

                            <form class="g-flex-wrap g-flex-between g-flex-align-center w100 --mg0 --key">
                                <h3>Выбрать <span class="--darkViolet">эксперта по новостройкам</span></h3>
                                <label>
                                    <input type="text" placeholder="Имя*" required>
                                </label>
                                <label>
                                    <input type="tel" class="phone" placeholder="Телефон*" required>
                                </label>
                                <button type="submit" class="btn --darkViolet">Отправить заявку</button>
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
                                    <span>Нажимая на кнопку "Отправить заявку", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
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
                                            <option <? if ($_GET['sort'] == 'PROPERTY_SURNAME') {echo "selected ";}?> <?=($_GET['sort'] ? "" : "selected")?> value="?sort=PROPERTY_SURNAME&order=ASC">По фамилии от А до Я</option>
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

                            <form class="g-flex-wrap g-flex-between g-flex-align-center w100 --mg0 --key">
                                <h3>Заказать <span class="--darkViolet">консультацию</span> юриста по недвижимости</h3>
                                <label>
                                    <input type="text" placeholder="Имя*" required>
                                </label>
                                <label>
                                    <input type="tel" class="phone" placeholder="Телефон*" required>
                                </label>
                                <button type="submit" class="btn --darkViolet">Отправить заявку</button>
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
                                    <input type="text" placeholder="Комментарий">
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
                                            <option <? if ($_GET['sort'] == 'PROPERTY_SURNAME') {echo "selected ";}?> <?=($_GET['sort'] ? "" : "selected")?> value="?sort=PROPERTY_SURNAME&order=ASC">По фамилии от А до Я</option>
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

                            <form class="g-flex-wrap g-flex-between g-flex-align-center w100 --mg0 --key">
                                <h3>Заказать <span class="--darkViolet">консультацию кредитного брокера</span></h3>
                                <label>
                                    <input type="text" placeholder="Имя*" required>
                                </label>
                                <label>
                                    <input type="tel" class="phone" placeholder="Телефон*" required>
                                </label>
                                <button type="submit" class="btn --darkViolet">Заказать консультацию</button>
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
                                    <input type="text" placeholder="Комментарий">
                                </label>
                                <label class="inputCheckbox">
                                    <input type="checkbox" required checked>
                                    <span>Нажимая на кнопку "Заказать консультацию", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
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
                                            <option <? if ($_GET['sort'] == 'PROPERTY_RATING') {echo "selected ";}?>value="?sort=PROPERTY_RATING&order=DESC">Сортировать по рейтингу</option>
                                            <option <? if ($_GET['sort'] == 'PROPERTY_SURNAME') {echo "selected ";}?> <?=($_GET['sort'] ? "" : "selected")?> value="?sort=PROPERTY_SURNAME&order=ASC"> Сортировать по фамилии от А до Я</option>
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

                            <form class="g-flex-wrap g-flex-between g-flex-align-center w100 --mg0 --key">
                                <h3>Разместить <span class="--darkViolet">объект в рекламу</span></h3>
                                <label>
                                    <input type="text" placeholder="Имя*" required>
                                </label>
                                <label>
                                    <input type="tel" class="phone" placeholder="Телефон*" required>
                                </label>
                                <button type="submit" class="btn --darkViolet">Отправить заявку</button>
                                <label>
                                    <select data-placeholder="Район продажи*" required>
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

                        <!-- + Операторы -->
                        <div class="section__content-slide">
                            <div class="slider_operator_block_wrap">
                                <div class="section__title_buttons g-flex-between g-flex-align-center --mgb60 slider_operator_block_head">
                                    <h3>Операторы</h3>
                                    <div class="buttons g-flex-align-center --nomobile">
                                        <select onchange="ajaxUpdateAgent('slider_operator_block_wrap')" class="block_sort_select" name="sort_peaple" data-placeholder="Сортировать по рейтингу">
                                            <option value="">&nbsp;</option>
                                            <option <? if ($_GET['sort'] == 'PROPERTY_RATING') {echo "selected ";}?>value="?sort=PROPERTY_RATING&order=DESC">Сортировать по рейтингу</option>
                                            <option <? if ($_GET['sort'] == 'PROPERTY_SURNAME') {echo "selected ";}?> <?=($_GET['sort'] ? "" : "selected")?> value="?sort=PROPERTY_SURNAME&order=ASC"> Сортировать по фамилии от А до Я</option>
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

                            <form class="g-flex-wrap g-flex-between g-flex-align-center w100 --mg0 --key">
                                <h3>Заказать <span class="--darkViolet">звонок</span></h3>
                                <label>
                                    <input type="text" placeholder="Имя*" required>
                                </label>
                                <label>
                                    <input type="tel" class="phone" placeholder="Телефон*" required>
                                </label>
                                <button type="submit" class="btn --darkViolet">Заказать звонок</button>
                                <label>
                                    <select data-placeholder="Район продажи*" required>
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
                                    <input type="text" placeholder="Комментарий">
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

        <section class="section how-it-works">
            <div class="wrapper">
                <h2 class="section__title --mgb20">Хотите узнать, <span class="--darkViolet">как мы будем</span> <br><span class="--darkViolet">продавать и покупать</span> вам квартиры?</h2>
                <p class="section__descriptor descriptor --mgb60">Процессом продажи и покупки будут заниматься минимум 6 специалистов</p>
                <div class="section__content-changer g-flex-column">
                    <div class="section__content-tabs top g-flex-between g-flex-align-center center --mgb30">
                        <div class="section__content-tab active">
                            Агент по продаже
                        </div>
                        <div class="section__content-tab">
                            Агент по покупке
                        </div>
                    </div>
                    <div class="section__content-tabs bottom g-flex-between g-flex-align-center center --mgb40">
                        <div class="section__content-tab">
                            Юрист
                        </div>
                        <div class="section__content-tab">
                            Маркетолог
                        </div>
                        <div class="section__content-tab">
                            Фотограф
                        </div>
                        <div class="section__content-tab">
                            Оператор
                        </div>
                    </div>
                    <svg class="--darkViolet" viewBox="0 0 32 32">
                        <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="section__content-slider slider">
                        <div class="section__content-slide">
                            <div class="section__content-advantages w25per g-flex-wrap g-flex-between g-flex-align-start">
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/PlaceAndMap--violet.svg" alt="">
                                    <p>Живет и работает в вашем районе</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/Bedroom-ok--violet.svg" alt="">
                                    <p>Оценивает квартиру</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/OptimalTech--violet.svg" alt="">
                                    <p>Выбирает оптимальную технологию продажи</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/HandHouse--violet.svg" alt="">
                                    <p>Помогает подготовить объект к продаже</p>
                                </div>
                            </div>
                            <a href="/team/#district_agents" target="_blank" class="zo_section__edge-button  section__edge-button wow fadeInLeft  g-flex-align-center --mgt40 --mgb40">
                                <div class="arrow g-flex-align-center g-flex-justify-center">
                                    <svg class="icon">
                                        <use xlink:href="#ArrowSquare"></use>
                                    </svg>
                                </div>
                                Все подробности
                            </a>
                        </div>
                        <div class="section__content-slide">
                            <div class="section__content-advantages w25per g-flex-wrap g-flex-between g-flex-align-start">
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/PlaceAndMap--violet.svg" alt="">
                                    <p>Живет и работает в районе приобретения квартиры</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/Bedroom--violet.svg" alt="">
                                    <p>Изучает ваши пожелания к квартире мечты</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/FindUncoorect--violet.svg" alt="">
                                    <p>На этапе поиска сразу отсекает “неликвид”</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/OptimiseSettings--violet.svg" alt="">
                                    <p>Назначает просмотры и оптимизирует маршрут</p>
                                </div>
                            </div>
                            <a href="/team/#district_agents" target="_blank" class="zo_section__edge-button section__edge-button wow fadeInLeft  g-flex-align-center --mgt40 --mgb40">
                                <div class="arrow g-flex-align-center g-flex-justify-center">
                                    <svg class="icon">
                                        <use xlink:href="#ArrowSquare"></use>
                                    </svg>
                                </div>
                                Все подробности
                            </a>
                        </div>
                        <div class="section__content-slide">
                            <div class="section__content-advantages w25per g-flex-wrap g-flex-between g-flex-align-start">
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/QuestionAndAnswers--violet.svg" alt="">
                                    <p>Анализирует документы и отвечает на все вопросы</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/ShieldDocuments--violet.svg" alt="">
                                    <p>Проверяет квартиру и готовит правовой отчет с рекомендациями</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/ReversedSettings--violet.svg" alt="">
                                    <p>Оптимизирует налоги, расходы и схему альтернативной сделки</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/LoyerDocuments--violet.svg" alt="">
                                    <p>Готовит договоры и иные документы к авансам и сделке</p>
                                </div>
                            </div>
                            <a href="/team/#lawyers" target="_blank" class="zo_section__edge-button section__edge-button wow fadeInLeft  g-flex-align-center --mgt40 --mgb40">
                                <div class="arrow g-flex-align-center g-flex-justify-center">
                                    <svg class="icon">
                                        <use xlink:href="#ArrowSquare"></use>
                                    </svg>
                                </div>
                                Все подробности
                            </a>
                        </div>
                        <div class="section__content-slide">
                            <div class="section__content-advantages w25per g-flex-wrap g-flex-between g-flex-align-start">
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/Selfie--violet.svg" alt="">
                                    <p>Координирует фотографирование вашего объекта</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/DocShield--violet.svg" alt="">
                                    <p>Утверждает рекламный текст</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/RKSettings--violet.svg" alt="">
                                    <p>Готовит рекламную кампанию</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/Planet--violet.svg" alt="">
                                    <p>Запускает рекламу на 20+ сайтах о недвижимости</p>
                                </div>
                            </div>
                            <a href="/team/#marketers" target="_blank" class="zo_section__edge-button section__edge-button wow fadeInLeft  g-flex-align-center --mgt40 --mgb40">
                                <div class="arrow g-flex-align-center g-flex-justify-center">
                                    <svg class="icon">
                                        <use xlink:href="#ArrowSquare"></use>
                                    </svg>
                                </div>
                                Все подробности
                            </a>
                        </div>
                        <div class="section__content-slide">
                            <div class="section__content-advantages w25per g-flex-wrap g-flex-between g-flex-align-start">
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/Camera--violet.svg" alt="">
                                    <p>Фотографирует вашу квартиру широкоугольным объективом</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/Racourses--violet.svg" alt="">
                                    <p>Выбирает выгодные ракурсы</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/Neurostatic--violet.svg" alt="">
                                    <p>Применяет знания нейроэстетики и маркетинга</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/Sale--violet.svg" alt="">
                                    <p>Создает "продающие" фотографии</p>
                                </div>
                            </div>
                            <a href="/team/#operators" target="_blank" class="zo_section__edge-button section__edge-button wow fadeInLeft  g-flex-align-center --mgt40 --mgb40">
                                <div class="arrow g-flex-align-center g-flex-justify-center">
                                    <svg class="icon">
                                        <use xlink:href="#ArrowSquare"></use>
                                    </svg>
                                </div>
                                Все подробности
                            </a>
                        </div>
                        <div class="section__content-slide">
                            <div class="section__content-advantages w25per g-flex-wrap g-flex-between g-flex-align-start">
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/Operator--violet.svg" alt="">
                                    <p>Оперативно принимает звонки</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/WomanQuestions--violet.svg" alt="">
                                    <p>Отвечает на возникающие вопросы </p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/AgentPhone--violet.svg" alt="">
                                    <p>Переключает звонки на вашего агента</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/CRM--violet.svg" alt="">
                                    <p>Фиксирует все детали в CRM системе</p>
                                </div>
                            </div>
                            <a href="/team/#operators" target="_blank" class="zo_section__edge-button section__edge-button wow fadeInLeft  g-flex-align-center --mgt40 --mgb40">
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

    

    <div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="sendReq">
        <div class="wrapper">
            <div class="text-block">
                
                <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt40 --key">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Выбрать <span class="--darkViolet">районного агента</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <button type="submit" class="btn --darkViolet">Отправить заявку</button>
                    <label>
                        <select multiple="multiple" data-placeholder="Район продажи*" required>
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
        </div>
    </div>

    <!-- 1 -->
    <div class="advantages-pop-up pop-up g-flex-column" id="advant_pop-up1">
        <div class="pop-up-container-wrap">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="wrapper">
                        <h3 class="title d-block">Команда из <span class="--darkViolet --pd0">двух районных агентов</span></h3>
                    </div>
                    <div class="pop-up__header_gray differences g-flex-column --next_advantages">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/alternative-advantages--1.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№1</div>
                                    <p>
                                        Еще до начала работы наш юрист <strong>проконсультирует</strong> вас по всем вопросам, связанным с недвижимостью и
                                        <strong>поделится своим профессиональным мнением</strong>. Он <strong>изучит вашу ситуацию и документы</strong>, выяснит на какой
                                        стадии находится подготовка к сделке, выслушает ваши пожелания, <strong>проговорит потенциальные риски</strong> и
                                        <strong>предложит готовый алгоритм действий</strong>.
                                    </p>
                                    <p>Для вашего удобства консультация может быть организована как <strong>онлайн</strong> (по телефону или в zoom), так и в <strong>офисе</strong>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section differences">
                    <div class="wrapper">
                        <div class="advantage-pop-up__differences p-0 --differences g-flex-between g-flex-align-start">
                            <div class="advantage-pop-up__difference" style="border: 1px solid #D9112F;">
                                <div class="advantage-pop-up__difference_title g-flex-align-center g-flex-justify-center --red">
                                    <img loading="lazy" src="/html/assets/svg/AdvantDiff2.svg" alt="">
                                    <p>Районный агент <br>по продаже</p>
                                </div>
                                <ul class="red-disc">
                                    <li>живет и работает в районе, где вы продаете квартиру</li>
                                    <li>оценит вашу квартиру, учитывая реальные и архивные цены сделок</li>
                                    <li>знает преимущества вашего дома и особенности спроса в районе</li>
                                    <li>продаст квартиру выше рынка и сократит срок продажи до 2-3 месяцев</li>
                                </ul>
                            </div>

                            <div class="advantage-pop-up__difference" style="border: 1px solid #005453;">
                                <div class="advantage-pop-up__difference_title g-flex-align-center g-flex-justify-center --greenGreen">
                                    <img loading="lazy" src="/html/assets/svg/AdvantDiff2.svg" alt="">
                                    <p>Районный агент <br>по покупке</p>
                                </div>
                                <ul class="green-disc">
                                    <li>живет и работает там, куда вы планируете переехать</li>
                                    <li>разбирается в ценах и и дает практические рекомендации по выбору дома и квартиры</li>
                                    <li>пользуется инфраструктурой района, знает историю строительства домов и перспективы развития округа</li>
                                    <li>сэкономит ваше время и бюджет на приобретение квартиры</li>
                                </ul>
                            </div>
                        </div>
                        <div class="section__big-text --mgt40 --mgb20 for-pop-up">
                            <p>ВАША ВЫГОДА</p>
                        </div>
                        <h3 class="--mgb40">Альтернативная сделка проходит <span class="--darkViolet">легко <br>и с ощутимой выгодой</span></h3>

                        <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key">
                            <h3>Заказать <span class="--darkViolet">оценку</span> квартиры прямо сейчас</h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --darkViolet">Заказать оценку</button>
                            <label>
                                <select multiple="multiple" data-placeholder="Район продажи*" required>
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
                                <span>Нажимая на кнопку "Заказать оценку", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                            </label>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- 2 -->
    <div class="advantages-pop-up pop-up g-flex-column" id="advant_pop-up2">
        <div class="pop-up-container-wrap">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="wrapper">
                        <h3 class="title d-block">Вычисляем <span class="--darkViolet --pd0">псевдо покупателей и неликвид</span></h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/alternative-advantages--2.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№2</div>
                                    <p>Уже на этапе телефонных переговоров наши агенты умело <b>вычисляют псевдо покупателей и неликвидные объекты</b>: </p>
                                    <ul>
                                        <li><span class="--red --bold">агент по продаже</span> отсеивает “нецелевых покупателей”, “туристов”, “домушников” и приглашает на показ только реальных покупателей</li>
                                        <li><span class="--greenGreen --bold">агент по покупке</span> отсеивает ложные объявления и несуществующие объекты, делая ставку на квартиры, которые в будущем вырастут в цене.</li>
                                    </ul>
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
                        <h3 class="--mgb40">Ваше время и активы — <br><span class="--darkViolet">под защитой Dream Realty</span></h3>
                        <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key">
                            <h3>Заказать <span class="--darkViolet">звонок агента</span></h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --darkViolet">Заказать звонок</button>
                            <label>
                                <select multiple="multiple" data-placeholder="Район продажи*" required>
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
                </section>
            </div>
        </div>
    </div>
    <!-- 3 -->
    <div class="advantages-pop-up pop-up g-flex-column" id="advant_pop-up3">
        <div class="pop-up-container-wrap">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="wrapper">
                        <h3 class="title d-block"><span class="--darkViolet --pd0">еженедельные отчеты</span> на e-mail</h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/alternative-advantages--3.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№3</div>
                                    <p class="--mgb30"><strong>Каждую неделю</strong> суперагенты Dream Realty будут отправлять вам совершенно прозрачную информацию</p>
                                    <p>по <span class="--red --bold">продаваемой</span> квартире:</p>
                                    <ul class="--mgb30 --min-lh">
                                        <li>как проходит <strong>рекламная кампания</strong>,</li>
                                        <li>сколько <strong>принято звонков, проведено показов</strong> и получено предложений по цене,</li>
                                        <li>сколько раз была <strong>повышена цена</strong> в процессе продажи,</li>
                                    </ul>
                                    <p>по <span class="--greenGreen --bold">приобретаемой</span> квартире:</p>
                                    <ul class="--min-lh">
                                        <li>сколько <strong>отобрано квартир</strong> для просмотра,</li>
                                        <li>сколько <strong>проведено просмотров</strong> и какие из них повторно,</li>
                                        <li><strong>результаты переговоров</strong> по цене и условиям будущей сделки.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pop-up__header_bottom">
                                <p>Наши отчеты – это удобный способ отслеживать объем и качество проделанной работы. <br>
                                    Мы убеждены в том, что каждый такой отчет повысит доверие к нам и приведет к выгодной и комфортной сделке.
                                </p>
                                <a href="#download_3up" data-id="#advant_pop-up3" class="js__pop_up_smoothScroll"><img loading="lazy" src="/html/assets/svg/Download--darkViolet.svg" alt="">Скачать образец еженедельного отчета  </a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="wrapper">
                        <div class="section__big-text --mgt40 --mgb20 for-pop-up">
                            <p>ВАША ВЫГОДА</p>
                        </div>
                        <h3 class="--mgb40">Весь процесс продажи у вас <span class="--darkViolet">под контролем</span></h3>
                        <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key" id="download_3up">
                            <h3>Скачать <span class="--darkViolet">образец еженедельного отчета</span> </h3>
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
                            <button type="submit" class="btn --darkViolet">Скачать</button>
                            <label class="inputCheckbox">
                                <input type="checkbox" required checked>
                                <span>Нажимая на кнопку "Скачать", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                            </label>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- 4 -->
    <div class="advantages-pop-up pop-up g-flex-column" id="advant_pop-up4">
        <div class="pop-up-container-wrap">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="wrapper">
                        <h3 class="title d-block"><span class="--darkViolet" style="padding: 0">Профильный юрист</span> на авансах и сделке</h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between g-flex-align-stretch">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/alternative-advantages--4.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№4</div>
                                    <p>Альтернативная сделка в силу своей специфики и сложности <b>требует больших усилий, внимания и контроля</b>.</p>
                                    <p>Именно поэтому, еще до начала продажи, наш <b>юрист проконсультирует</b> вас по всем вопросам <b>и поделится своим профессиональным мнением</b>. А когда районные агенты найдут покупателя и квартиру мечты, он <b>подключится ко всем переговорам, встречам и проверит юридическую чистоту квартиры</b>.</p>
                                    <p>Наш юрист <b>оптимизирует все расходы и налоги</b> по будущей сделке. Работа юриста <b>включена в стоимость услуги</b>.</p>
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
                        <h3 class="--mgb40">Вы <span class="--darkViolet">чувствуете себя спокойно</span> <br><span class="--darkViolet">и уверены в безопасности</span> сделки</h3>
                        <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key">
                            <h3>Заказать <span class="--darkViolet">консультацию</span> юриста по недвижимости</h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --darkViolet">Заказать консультацию</button>
                            <label>
                                <select multiple="multiple" data-placeholder="Тип услуги*" required>
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
                                <span>Нажимая на кнопку "Заказать консультацию", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                            </label>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- 5 -->
    <div class="advantages-pop-up pop-up g-flex-column" id="advant_pop-up5">
        <div class="pop-up-container-wrap">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="wrapper">
                        <h3 class="title d-block"><span class="--darkViolet" style="padding: 0">Официальный отчет о проверке квартиры</span></h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between g-flex-align-stretch">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/alternative-advantages--5.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№5</div>
                                    <p>Наш правовой отчет это <b>не просто сведения из ЕГРН</b>. Это полноценный документ, который содержит:</p>
                                    <ul>
                                        <li>подробное <b>описание истории квартиры</b>,</li>
                                        <li><b>архивные данные</b> о зарегистрированных в объекте лицах,</li>
                                        <li><b>анализ финансового состояния продавца</b>, в том числе на предмет возможного банкротства,</li>
                                        <li>информацию <b>о судебных спорах, исполнительных производствах и обременениях</b>,</li>
                                        <li>описание возможных <b>рисков и последствий</b>,</li>
                                        <li><b>выводы и рекомендации</b> юриста.</li>
                                    </ul>
                                    <p>Если <b>квартира окажется проблемной, мы будем отговаривать</b> вас от ее приобретения. А если вы будете настаивать на сделке, мы будем вынуждены отказаться от ее сопровождения. </p>
                                </div>
                            </div>
                            <div class="pop-up__header_bottom">
                                <p>Мы хотим, чтобы <b>с покупкой новой квартиры в вашу жизнь пришли радость и комфорт</b>, а не судебные разбирательства. </p>
                                <a href="#download_5up" data-id="#advant_pop-up5" class="js__pop_up_smoothScroll"><img loading="lazy" src="/html/assets/svg/Download--darkViolet.svg" alt="">Скачать образец отчета о проверке квартиры</a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="wrapper">
                        <div class="section__big-text --mgt40 --mgb20 for-pop-up">
                            <p>ВАША ВЫГОДА</p>
                        </div>
                        <h3 class="--mgb40">Покупка квартиры <br><span class="--darkViolet">без рисков и негативных последствий</span>!</h3>
                        <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key" id="download_5up">
                            <h3>Скачать <span class="--darkViolet" style="padding: 0">образец еженедельного отчета</span></h3>
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
                            <button type="submit" class="btn --darkViolet">Скачать</button>
                            <label class="inputCheckbox">
                                <input type="checkbox" required checked>
                                <span>Нажимая на кнопку "Скачать", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                            </label>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- 6 -->
    <div class="advantages-pop-up pop-up g-flex-column" id="advant_pop-up6">
        <div class="pop-up-container-wrap">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="wrapper">
                        <h3 class="title d-block"><span class="--darkViolet" style="padding: 0">Удобные и прозрачные</span> тарифы</h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between g-flex-align-stretch">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/alternative-advantages--6.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№6</div>
                                    <p>Для нас, доверие важнее договора.</p>
                                    <p>Мы <b>не берем предоплат, не требуем “эксклюзив” и не заключаем договор</b> до момента нахождения реального покупателя и квартиры мечты.</p>
                                    <p><b>Комиссия за альтернативную сделку составит 3%</b> (но не менее 300 000 рублей) от наибольшей стоимости недвижимости (вне зависимости от того, продается она или покупается).</p>
                                    <p>Для повторных обращений и клиентов по рекомендациям, а также льготных категорий, у нас предусмотрены <b>скидки и бонусы до 10%.</b> </p>
                                </div>
                            </div>
                            <div class="pop-up__header_bottom">
                                <a href="tarifs.html#hash__alternate" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt60">
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
                        <h3 class="--mgb40">Вы <span class="--darkViolet">платите</span> только тогда, <br><span class="--darkViolet">когда результат вас устроил</span></h3>
                        <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key">
                            <h3>Заказать <span class="--darkViolet">звонок</span></h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --darkViolet">Заказать звонок</button>
                            <label>
                                <select multiple="multiple" data-placeholder="Район продажи*" required>
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
                                <input type="text" placeholder="Комментарии">
                            </label>
                            <label class="inputCheckbox">
                                <input type="checkbox" required checked>
                                <span>Нажимая на кнопку "Заказать звонок", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                            </label>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>