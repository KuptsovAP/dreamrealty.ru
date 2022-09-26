<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "ПРОДАТЬ");
$APPLICATION->SetTitle("ПРЕИМУЩЕСТВА ПРОДАЖИ КВАРТИРЫ С НАМИ");
?>
<link rel="stylesheet" href="/bitrix/templates/realty/assets/css/advantages.css?v=<?=rand(0, 255)?>">
        
        <section class="section advantages-page grayHalfBG">
            <div class="wrapper"> 
                <div class="section__big-text --mgb40">
                    <p>агентство мечты</p>
                </div>
                <div class="section__advantages--full g-flex-wrap g-flex-between --mgt180">
                    <a href="#advant_pop-up1" class="section__advantage --skm110 g-flex-column g-flex-justify-end --bg-cover-xs" style="background-image: url(/html/assets/img/illustrations/red/01.svg);">
                        <span class="num">1</span>
                        <div class="g-flex-align-center g-flex-justify-center"><p>Cвой агент <span class="--red">в каждом районе</span> Москвы и Подмосковья</p></div>
                    </a> 
                    <a href="#advant_pop-up2" class="section__advantage --skm110 g-flex-column g-flex-justify-end --bg-cover-xs" style="background-image: url(/html/assets/img/illustrations/red/02.svg);">
                        <span class="num">2</span>
                        <div class="g-flex-align-center g-flex-justify-center"><p><span class="--red">Авторская технология</span> продажи</p></div>
                    </a>
                    <a href="#advant_pop-up3" class="section__advantage --skm110 g-flex-column g-flex-justify-end --bg-cover-xs" style="background-image: url(/html/assets/img/illustrations/red/03.svg);">
                        <span class="num">3</span>
                        <div class="g-flex-align-center g-flex-justify-center"><p><span class="--red">Еженедельные отчеты</span> на e-mail</p></div>
                    </a>
                    <a href="#advant_pop-up4" class="section__advantage g-flex-column g-flex-justify-end --bg-cover-xs" style="background-image: url(/html/assets/img/illustrations/red/04.svg);">
                        <span class="num">4</span>
                        <div class="g-flex-align-center g-flex-justify-center"><p><span class="--red">Профильный юрист</span> на авансе и сделке</p></div>
                    </a>
                    <a href="#advant_pop-up5" class="section__advantage --skm110 g-flex-column g-flex-justify-end --bg-cover-xs" style="background-image: url(/html/assets/img/illustrations/red/05.svg);">
                        <span class="num">5</span>
                        <div class="g-flex-align-center g-flex-justify-center"><p><span class="--red">Удобные и прозрачные</span> тарифы</div>
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
                    <div class="section__content-tabs -m-left g-flex-justify-center g-flex-align-center fit-content center --mgb60">
                        <div class="section__content-tab active">
                            Районные агенты
                        </div>
                        <div class="section__content-tab">
                            Юристы
                        </div>
                        <div class="section__content-tab">
                            Маркетологи
                        </div>
                        <div class="section__content-tab">
                            Операторы
                        </div>
                    </div>
                    <svg class="--red" viewBox="0 0 32 32">
                        <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="section__content-slider slider">

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
                                <h3>Выбрать <span class="--red">районного агента</span></h3>
                                <label>
                                    <input type="text" placeholder="Имя*" required>
                                </label>
                                <label>
                                    <input type="tel" class="phone" placeholder="Телефон*" required>
                                </label>
                                <button type="submit" class="btn --red">Отправить заявку</button>
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
                                    <span>Нажимая на кнопку "Отправить заявку", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
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
                                <h3>Заказать <span class="--red">консультацию</span> юриста по недвижимости</h3>
                                <label>
                                    <input type="text" placeholder="Имя*" required>
                                </label>
                                <label>
                                    <input type="tel" class="phone" placeholder="Телефон*" required>
                                </label>
                                <button type="submit" class="btn --red">Отправить заявку</button>
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
                                    <span>Нажимая на кнопку "Отправить заявку", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
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
                                <h3>Разместить <span class="--red">объект в рекламу</span></h3>
                                <label>
                                    <input type="text" placeholder="Имя*" required>
                                </label>
                                <label>
                                    <input type="tel" class="phone" placeholder="Телефон*" required>
                                </label>
                                <button type="submit" class="btn --red">Заказать звонок</button>
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
                                    <span>Нажимая на кнопку "Заказать звонок", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
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

                            <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                                <h3>Заказать <span class="--red">звонок</span></h3>
                                <label>
                                    <input type="text" placeholder="Имя*" required>
                                </label>
                                <label>
                                    <input type="tel" class="phone" placeholder="Телефон*" required>
                                </label>
                                <button type="submit" class="btn --red">Заказать звонок</button>
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
                                    <span>Нажимая на кнопку "Заказать звонок", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                                </label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="section how-it-works">
            <div class="wrapper">
                <h2 class="section__title --mgb20">хотите узнать, <span class="--red">как мы будем продавать</span> вашу квартиру?</h2>
                <p class="section__descriptor descriptor --mgb60">Процессом продажи будут заниматься минимум 5 специалистов</p>
                <div class="section__content-changer g-flex-column">
                    <div class="section__content-tabs g-flex-between g-flex-align-center center --mgb60">
                        <div class="section__content-tab active">
                            Агент
                        </div>
                        <div class="section__content-tab">
                            Фотограф
                        </div>
                        <div class="section__content-tab">
                            Маркетолог
                        </div>
                        <div class="section__content-tab">
                            Оператор
                        </div>
                        <div class="section__content-tab">
                            Юрист
                        </div>
                    </div>
                    <svg class="--red" viewBox="0 0 32 32">
                        <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="section__content-slider slider">
                        <!-- Агент -->
                        <div class="section__content-slide">
                            <div class="section__content-advantages w25per g-flex-wrap g-flex-between g-flex-align-start">
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/PlaceAndMap--red.svg" alt="">
                                    <p>Живет и работает в вашем районе</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/Bedroom-ok--red.svg" alt="">
                                    <p>Оценивает квартиру</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/OptimalTech--red.svg" alt="">
                                    <p>Выбирает оптимальную технологию продажи</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/HandHouse--red.svg" alt="">
                                    <p>Помогает подготовить объект к продаже</p>
                                </div>
                            </div>
                            <a href="/team/#district_agents" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt60 --mgb90">
                                <div class="arrow g-flex-align-center g-flex-justify-center">
                                    <svg class="icon">
                                        <use xlink:href="#ArrowSquare"></use>
                                    </svg>
                                </div>
                                Все подробности
                            </a>
                        </div>
                        <!-- Фотограф -->
                        <div class="section__content-slide">
                            <div class="section__content-advantages g-flex-wrap g-flex-between g-flex-align-start">
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/Camera--red.svg" alt="">
                                    <p>Фотографирует вашу квартиру широкоугольным объективом</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/Racourses--red.svg" alt="">
                                    <p>Выбирает выгодные ракурсы</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/Neurostatic--red.svg" alt="">
                                    <p>Применяет знания нейроэстетики и маркетинга</p>
                                </div>
                            </div>
                            <a href="/team/#marketers" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt60 --mgb90">
                                <div class="arrow g-flex-align-center g-flex-justify-center">
                                    <svg class="icon">
                                        <use xlink:href="#ArrowSquare"></use>
                                    </svg>
                                </div>
                                Все подробности
                            </a>
                        </div>
                        <!-- Маркетолог -->
                        <div class="section__content-slide">
                            <div class="section__content-advantages g-flex-wrap g-flex-between g-flex-align-start">
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/Selfie--red.svg" alt="">
                                    <p>Координирует фотографирование вашего объекта</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/DocShield--red.svg" alt="">
                                    <p>Утверждает рекламный текст</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/RKSettings--red.svg" alt="">
                                    <p>Готовит рекламную кампанию</p>
                                </div>
                            </div>
                            <a href="/team/#marketers" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt60 --mgb90">
                                <div class="arrow g-flex-align-center g-flex-justify-center">
                                    <svg class="icon">
                                        <use xlink:href="#ArrowSquare"></use>
                                    </svg>
                                </div>
                                Все подробности
                            </a>
                        </div>
                        <!-- Оператор -->
                        <div class="section__content-slide">
                            <div class="section__content-advantages g-flex-wrap g-flex-between g-flex-align-start">
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/Operator--red.svg" alt="">
                                    <p>Оперативно принимает звонки</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/WomanQuestions--red.svg" alt="">
                                    <p>Отвечает на возникающие вопросы</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/AgentPhone--red.svg" alt="">
                                    <p>Переключает звонки на вашего агента</p>
                                </div>
                            </div>
                            <a href="/team/#operators" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt60 --mgb90">
                                <div class="arrow g-flex-align-center g-flex-justify-center">
                                    <svg class="icon">
                                        <use xlink:href="#ArrowSquare"></use>
                                    </svg>
                                </div>
                                Все подробности
                            </a>
                        </div>
                        <!-- Юрист -->
                        <div class="section__content-slide">
                            <div class="section__content-advantages g-flex-wrap g-flex-between g-flex-align-start">
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/DocsShield--red.svg" alt="">
                                    <p>Анализирует документы и дает свои рекомендации</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/NalogOptimize--red.svg" alt="">
                                    <p>Оптимизирует налоги, расходы и схему сделки</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/LoyerDocs--red.svg" alt="">
                                    <p>Готовит договоры и иные документы к авансу и сделке</p>
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
                    </div>
                </div>

            </div>
        </section>


    <div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center">
        <div class="wrapper">
            <div class="text-block">
                
                <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Выбрать <span class="--red">районного агента</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <button type="submit" class="btn --red">Отправить заявку</button>
                    <label>
                        <select   multiple="multiple"  data-placeholder="Район продажи*" required>
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
                        <span>Нажимая на кнопку "Отправить заявку", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                    </label>
                </form>
            </div>
        </div>
    </div>

    <!-- 1 -->
    <div class="advantages-pop-up pop-up g-flex-column --pdb90" id="advant_pop-up1">
        <div class="pop-up-container-wrap popup">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="wrapper">
                        <h3 class="title">Свой агент <span class="--red">в каждом районе</span> Москвы и Подмосковья</h3>
                    </div>
                    <div class="pop-up__header_gray differences g-flex-column --next_advantages">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/sell-advantages--1.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№1</div>
                                    <p>Суперагент Dream Realty <b>живет и работает в том же районе, где вы продаете квартиру</b>. Он знает характеристики каждого дома и особенности спроса.</p>
                                    <p><b>Он ваш сосед</b>, заинтересованный в обратной связи и рекомендациях от вас.</p>
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
                                    <p>Обычный агент <br>по недвижимости</p>
                                </div>
                                <ul class="gray-disc">
                                    <li>оценит вашу квартиру, учитывая рекламные цены в объявлениях</li>
                                    <li>занят показами квартир по всему городу</li>
                                    <li>часто “застревает в пробках” и может оставить вас один на один с покупателем </li>
                                </ul>
                            </div>
                            <div class="advantage-pop-up__difference">
                                <div class="advantage-pop-up__difference_title g-flex-align-center g-flex-justify-center --red">
                                    <img loading="lazy" src="/html/assets/svg/AdvantDiff2.svg" alt="">
                                    <p>Суперэксперт <br>Dream Realty</p>
                                </div>
                                <ul>
                                    <li>оценит вашу квартиру, учитывая реальные и архивные цены сделок</li>
                                    <li>всегда рядом и готов обсудить возникающие вопросы за чашкой кофе</li>
                                    <li>сам показывает квартиру и отвечает на неудобные вопросы покупателей о цене</li>
                                </ul>
                            </div>
                        </div>
                        <div class="section__big-text --mgt40 --mgb20 for-pop-up">
                            <p>ВАША ВЫГОДА</p>
                        </div>
                        <h3 class="--mgb90">Продажа квартиры становится <span class="--red">легкой и комфортной</span></h3>
                        <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key">
                            <h3>Заказать <span class="--red">оценку</span> квартиры прямо сейчас</h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --red">Заказать оценку</button>
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
                                <span>Нажимая на кнопку "Заказать оценку", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                            </label>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- 2 -->
    <div class="advantages-pop-up pop-up g-flex-column --pdb90" id="advant_pop-up2">
        <div class="pop-up-container-wrap">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="wrapper">
                        <h3 class="title"><span class="--red">авторская технология</span> продажи</h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/sell-advantages--2.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№2</div>
                                    <p>Наш <b>агент выявляет “туристов”</b> уже на этапе приема звонков. Поэтому никаких случайных людей в роли покупателей вы не увидите, а все <b>просмотры квартиры будут целевыми</b>.</p>
                                    <p>Суперагент Dream Realty не просто контролирует процесс продажи квартиры ОТ и ДО. С каждым звонком потенциального покупателя он <b>усиливает ценовую позицию вашей квартиры в рекламе и на показах</b>.</p>
                                    <p>Раз в две недели (и даже чаще) районный агент анализирует цены конкурентов и лично просматривает их объекты.</p>
                                </div>
                            </div>
                            <div class="pop-up__header_bottom">
                                <p>Эта информация, а также понимание законов рынка позволяет ему не только удерживать цену на вашу квартиру, но и <b>повышать ее в процессе продажи</b>.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="wrapper">
                        <div class="section__big-text --mgt40 --mgb20 for-pop-up">
                            <p>ВАША ВЫГОДА</p>
                        </div>
                        <h3 class="--mgb90">Квартира продается <span class="--red">по цене выше рынка</span>, <br>а <span class="--red">срок продажи сокращается</span> до 2-3 месяцев</h3>
                        <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key">
                            <h3>Заказать <span class="--red">звонок агента</span></h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --red">Заказать звонок</button>
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
                                <span>Нажимая на кнопку "Заказать звонок", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                            </label>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- 3 -->
    <div class="advantages-pop-up pop-up g-flex-column --pdb90" id="advant_pop-up3">
        <div class="pop-up-container-wrap">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="wrapper">
                        <h3 class="title"><span class="--red">еженедельные отчеты</span> на e-mail</h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/sell-advantages--3.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№3</div>
                                    <p><b>Каждую неделю</b> суперагент Dream Realty будет отправлять вам совершенно прозрачную информацию:</p>
                                    <ul>
                                        <li>где и как <b>рекламируется</b> ваша квартира;</li>
                                        <li>сколько <b>принято звонков</b>;</li>
                                        <li>сколько <b>проведено показов</b> и получено предложений по цене;</li>
                                        <li>сколько раз была <b>повышена цена</b> в процессе продажи.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pop-up__header_bottom">
                                <p>Наши отчеты – это удобный способ отслеживать объем и качество проделанной работы. <br>
                                    Мы убеждены в том, что каждый такой отчет повысит доверие к нам и приведет к выгодной и комфортной сделке.
                                </p>
                                <a href="#download_3up" data-id="#advant_pop-up3" class="js__pop_up_smoothScroll"><img loading="lazy" src="/html/assets/svg/Download--red.svg" alt="">Скачать образец еженедельного отчета  </a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="wrapper">
                        <div class="section__big-text --mgt40 --mgb20 for-pop-up">
                            <p>ВАША ВЫГОДА</p>
                        </div>
                        <h3 class="--mgb90">Весь процесс продажи у вас <span class="--red">под контролем</span></h3>
                        <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key" id="download_3up">
                            <h3>Скачать <span class="--red">образец еженедельного отчета</span> </h3>
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
                            <button type="submit" class="btn --red">Скачать</button>
                            <label class="inputCheckbox">
                                <input type="checkbox" required checked>
                                <span>Нажимая на кнопку "Скачать", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                            </label>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- 4 -->
    <div class="advantages-pop-up pop-up g-flex-column --pdb90" id="advant_pop-up4">
        <div class="pop-up-container-wrap">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="wrapper">
                        <h3 class="title"><span class="--red">Профильный юрист</span> на авансе и сделке</h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between g-flex-align-stretch">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/sell-advantages--4.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№4</div>
                                    <p>Еще до начала продажи объекта наш юрист <b>проконсультирует</b> вас по всем вопросам <b>и поделится своим профессиональным мнением</b>.</p>
                                    <p>А как только районный агент найдет покупателя на вашу квартиру, он <b>подключится ко всем переговорам и встречам</b>.</p>
                                    <p>Наш юрист <b>оптимизирует все расходы и налоги</b> по будущей сделке.</p>
                                    <p><b>Работа юриста включена в стоимость</b> услуги.</p>
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
                        <h3 class="--mgb90">Вы <span class="--red">спокойны и уверены в безопасности</span> сделки</h3>
                        <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key">
                            <h3>Заказать <span class="--red">консультацию</span> юриста</h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --red">Заказать консультацию</button>
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
                                <input type="text" placeholder="Комментарии">
                            </label>
                            <label class="inputCheckbox">
                                <input type="checkbox" required checked>
                                <span>Нажимая на кнопку "Заказать консультацию", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                            </label>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- 5 -->
    <div class="advantages-pop-up pop-up g-flex-column --pdb90" id="advant_pop-up5">
        <div class="pop-up-container-wrap">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="wrapper">
                        <h3 class="title"><span class="--red">удобные и прозрачные</span> тарифы</h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between g-flex-align-stretch">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/sell-advantages--5.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№5</div>
                                    <p>Для нас, доверие важнее договора.</p>
                                    <p>Мы <b>не берем предоплат, не требуем “эксклюзив” и не заключаем договор</b> до момента нахождения реального покупателя.</p>
                                    <p>Стоимость наших услуг всегда доступна на сайте и напрямую <b>зависит от цены объекта, а не от личных амбиций агента</b>.</p>
                                    <p>Для повторных обращений и клиентов по рекомендациям, а также льготных категорий, у нас предусмотрены <b>скидки и бонусы до 10%</b>. </p>
                                </div>
                            </div>
                            <div class="pop-up__header_bottom">
                                <a href="/tarifs/#hash__sell" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt30">
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
                        <h3 class="--mgb90">Вы <span class="--red">платите</span> только тогда, <br><span class="--red">когда результат вас устроил</span></h3>
                        <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key">
                            <h3>Заказать <span class="--red">звонок</span></h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --red">Заказать звонок</button>
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
                                <input type="text" placeholder="Комментарии">
                            </label>
                            <label class="inputCheckbox">
                                <input type="checkbox" required checked>
                                <span>Нажимая на кнопку "Заказать звонок", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                            </label>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>