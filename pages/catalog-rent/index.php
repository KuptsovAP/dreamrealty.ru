<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("КАТАЛОГ КВАРТИР В АРЕНДУ");

$arrFilter = [
    "!PROPERTY_ISBUILD_VALUE"  => "Y",
    "=PROPERTY_SALETYPE_VALUE" => "Аренда"
];
?>

<?php $APPLICATION->IncludeComponent(
    "bitrix:news",
    "catalog",
    [
        "COMPONENT_TEMPLATE"              => "catalog",
        "IBLOCK_TYPE"                     => "catalog",
        "IBLOCK_ID"                       => "10",
        "NEWS_COUNT"                      => "8",
        "USE_SEARCH"                      => "N",
        "USE_RSS"                         => "N",
        "USE_RATING"                      => "N",
        "USE_CATEGORIES"                  => "N",
        "USE_FILTER"                      => "Y",
        "FILTER_NAME"                     => "arrFilter",
        "SORT_BY1"                        => "ACTIVE_FROM",
        "SORT_ORDER1"                     => "DESC",
        "SORT_BY2"                        => "SORT",
        "SORT_ORDER2"                     => "ASC",
        "CHECK_DATES"                     => "Y",
        "SEF_MODE"                        => "N",
        "AJAX_MODE"                       => "N",
        "AJAX_OPTION_JUMP"                => "N",
        "AJAX_OPTION_STYLE"               => "Y",
        "AJAX_OPTION_HISTORY"             => "N",
        "AJAX_OPTION_ADDITIONAL"          => "",
        "CACHE_TYPE"                      => "A",
        "CACHE_TIME"                      => "36000000",
        "CACHE_FILTER"                    => "N",
        "CACHE_GROUPS"                    => "Y",
        "SET_LAST_MODIFIED"               => "N",
        "SET_TITLE"                       => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN"       => "Y",
        "ADD_SECTIONS_CHAIN"              => "Y",
        "ADD_ELEMENT_CHAIN"               => "N",
        "USE_PERMISSIONS"                 => "N",
        "STRICT_SECTION_CHECK"            => "N",
        "DISPLAY_DATE"                    => "Y",
        "DISPLAY_PICTURE"                 => "Y",
        "DISPLAY_PREVIEW_TEXT"            => "Y",
        "USE_SHARE"                       => "N",
        "PREVIEW_TRUNCATE_LEN"            => "",
        "LIST_ACTIVE_DATE_FORMAT"         => "d.m.Y",
        "LIST_FIELD_CODE"                 => [
            0 => "",
            1 => "",
        ],
        "LIST_PROPERTY_CODE"              => [
            0  => "ADDRESS",
            1  => "METRO",
            2  => "SQUARE_ALL",
            3  => "SQUARE_LIVING",
            4  => "SQUARE_KITCHEN",
            5  => "SQUARE_ROOMS",
            6  => "PLANTYPE",
            7  => "HEIGHT",
            8  => "BATHROOMS",
            9  => "BALCONY",
            10 => "VIEWS_VINDOW",
            11 => "FLOOR",
            12 => "HOUSE_TYPE",
            13 => "BUILD_YEAR",
            14 => "RENOVATION",
            15 => "FURNITURE",
            16 => "TECH",
            17 => "CLIMATIC",
            18 => "GARBAGE",
            19 => "PARKING",
            20 => "SELF_AREA",
            21 => "GUARD",
            22 => "VODEOCAM",
            23 => "CONCIERGE",
            24 => "INTERCOM",
            25 => "TYPE_CONTRACT",
            26 => "GARANT",
            27 => "YEAR_OWN",
            28 => "AMOUNT_OWN",
            29 => "PRICE",
            30 => "TEXT",
            31 => "DISTRICT",
            32 => "TIPEOBJECT",
            33 => "AMOUNT_ROOMS",
            34 => "AGENT",
            35 => "TIME_METRO",
            36 => "COMPLEX",
            37 => "SALETYPE",
            38 => "TIMETOSTART",
            39 => "MARKET",
            40 => "FLOORS",
            41 => "CONDITION",
            42 => "ELEVATOR",
            43 => "LAT",
            44 => "LNG",
            45 => "COMPANY",
            46 => "ISBUILD",
            47 => "PDF",
            48 => "PICTURES",
            49 => "INFRASTRUCTURE",
            50 => "PRESENTATION",
            51 => "SQUARE_BUILDING",
            52 => "CORPUSES_COUNT",
            53 => "FLATS_COUNT",
            54 => "APPARTMENTS_COUNT",
            55 => "SQUARE_FLATS",
            56 => "FLOORS_COUNT",
            57 => "PLAN_DECISIONS",
            58 => "FINISHING_VARIANTS",
            59 => "ENGINEERING",
        ],
        "HIDE_LINK_WHEN_NO_DETAIL"        => "N",
        "DISPLAY_NAME"                    => "Y",
        "META_KEYWORDS"                   => "-",
        "META_DESCRIPTION"                => "-",
        "BROWSER_TITLE"                   => "-",
        "DETAIL_SET_CANONICAL_URL"        => "N",
        "DETAIL_ACTIVE_DATE_FORMAT"       => "d.m.Y",
        "DETAIL_FIELD_CODE"               => [
            0 => "",
            1 => "",
        ],
        "DETAIL_PROPERTY_CODE"            => [
            0  => "ADDRESS",
            1  => "METRO",
            2  => "SQUARE_ALL",
            3  => "SQUARE_LIVING",
            4  => "SQUARE_KITCHEN",
            5  => "SQUARE_ROOMS",
            6  => "PLANTYPE",
            7  => "HEIGHT",
            8  => "BATHROOMS",
            9  => "BALCONY",
            10 => "VIEWS_VINDOW",
            11 => "FLOOR",
            12 => "HOUSE_TYPE",
            13 => "BUILD_YEAR",
            14 => "RENOVATION",
            15 => "FURNITURE",
            16 => "TECH",
            17 => "CLIMATIC",
            18 => "GARBAGE",
            19 => "PARKING",
            20 => "SELF_AREA",
            21 => "GUARD",
            22 => "VODEOCAM",
            23 => "CONCIERGE",
            24 => "INTERCOM",
            25 => "TYPE_CONTRACT",
            26 => "GARANT",
            27 => "YEAR_OWN",
            28 => "AMOUNT_OWN",
            29 => "PRICE",
            30 => "TEXT",
            31 => "DISTRICT",
            32 => "TIPEOBJECT",
            33 => "AMOUNT_ROOMS",
            34 => "AGENT",
            35 => "TIME_METRO",
            36 => "COMPLEX",
            37 => "SALETYPE",
            38 => "TIMETOSTART",
            39 => "MARKET",
            40 => "FLOORS",
            41 => "CONDITION",
            42 => "ELEVATOR",
            43 => "LAT",
            44 => "LNG",
            45 => "COMPANY",
            46 => "ISBUILD",
            47 => "PDF",
            48 => "PICTURES",
            49 => "INFRASTRUCTURE",
            50 => "PRESENTATION",
            51 => "SQUARE_BUILDING",
            52 => "CORPUSES_COUNT",
            53 => "FLATS_COUNT",
            54 => "APPARTMENTS_COUNT",
            55 => "SQUARE_FLATS",
            56 => "FLOORS_COUNT",
            57 => "PLAN_DECISIONS",
            58 => "FINISHING_VARIANTS",
            59 => "ENGINEERING",
        ],
        "DETAIL_DISPLAY_TOP_PAGER"        => "N",
        "DETAIL_DISPLAY_BOTTOM_PAGER"     => "Y",
        "DETAIL_PAGER_TITLE"              => "Страница",
        "DETAIL_PAGER_TEMPLATE"           => "",
        "DETAIL_PAGER_SHOW_ALL"           => "Y",
        "PAGER_TEMPLATE"                  => "custom",
        "DISPLAY_TOP_PAGER"               => "N",
        "DISPLAY_BOTTOM_PAGER"            => "Y",
        "PAGER_TITLE"                     => "Новости",
        "PAGER_SHOW_ALWAYS"               => "N",
        "PAGER_DESC_NUMBERING"            => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL"                  => "N",
        "PAGER_BASE_LINK_ENABLE"          => "N",
        "SET_STATUS_404"                  => "N",
        "SHOW_404"                        => "N",
        "MESSAGE_404"                     => "",
        "VARIABLE_ALIASES"                => [
            "SECTION_ID" => "SECTION_ID",
            "ELEMENT_ID" => "ELEMENT_ID",
        ],
        "CUSTOM" => [
            "LAYOUT_FILE" => 'saleOldBuilds.php',
            "LAYOUT_DETAIL_FILE" => 'saleOldBuildsDetail.php'
        ]
    ],
    false
); ?>

        <section class="section">
            <div class="wrapper">
                <h3 class="section__text --mgb40"><span>Не нашли квартиру мечты среди<br>предложенных вариантов?</span></h3>
                <h3 class="text-align-end --mgb20"><span class="--lightBlue" style="text-align: left;display: inline-block;">С суперагентами Dream Realty миссия <br>альтернативной сделки выполнима</span></h3>
                <div class="section__big-text"><p class="text-align-end">на 100%</p></div>
            </div>
        </section>

        <section class="section how-it-works --pdt0" id="formBlockSmooth">
            <div class="wrapper">
                <form class="g-flex-wrap g-flex-between g-flex-align-center --lightBlue --key">
                    <h3>Заказать консультацию <span class="--lightBlue">районного агента</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <button type="submit" class="btn --lightBlue">Отправить заявку</button>
                    <label>
                        <select multiple="multiple" data-placeholder="Район покупки*" data-searchInputPlaceholder="Район" required>
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
                        <input type="text" placeholder="Бюджет, кол-во комнат">
                    </label>
                    <label class="inputCheckbox">
                        <input type="checkbox" required checked>
                        <span>Нажимая на кнопку "Отправить заявку", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                    </label>
                </form>
            </div>
        </section>

        <?
    $idvideo = $APPLICATION->GetProperty("idvideo");
    if ($idvideo) {
        $idvideo = explode(',', $idvideo);
    ?>
        <section class="section video-media">
            <div class="wrapper">
                <div class="section__big-text --mgb40">
                    <p>DREAM Media</p>
                </div>
                <div class="section__video-slider slider">
                    <?php
                    foreach ($idvideo as $video) {
                        $MY_HL_BLOCK_ID = 4;
                        CModule::IncludeModule('highloadblock');
                        $entity_data_class = GetEntityDataClass($MY_HL_BLOCK_ID);
                        $rsData = $entity_data_class::getList(array(
                            'select' => array('*'),
                            'order' => array("ID" => "DESC"),
                            'filter' => array("ID" => $video),
                        ));
                        while ($el = $rsData->fetch()) {
                            //  print_r($el);
                            $URL = CFile::GetFileArray($el['UF_PHOTO']);

                            //	var_dump($URL);
                            $URL = $URL["SRC"];
                            $video = $el['UF_URL'];
                    ?>
                        <?php }
                        ?>
                        <div class="section__video-slide js_video-ratio" data-video="<?= $video ?>" style="background-image: url(<?= $URL ?>);">
                            <img loading="lazy" src="<?= SITE_TEMPLATE_PATH ?>/assets/svg/VideoButton--<? $APPLICATION->ShowProperty("color") ?>.svg" alt="">
                        </div>
                    <?
                    }
                    ?>


                </div>
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
    <? } ?>

    <?
    $idpodcasts = $APPLICATION->GetProperty("podcasts");
    if ($idpodcasts) {
        $idpodcasts = explode(',', $idpodcasts);
    ?>

        <section class="section podcasts">
            <div class="wrapper">
                <h2 class="section__title --mgb60"><span class="--<? $APPLICATION->ShowProperty("color") ?>">Советы</span> наших экспертов </h2>
                <div class="section__podcasts g-flex-between g-flex-align-stretch g-flex-wrap">
                    <?php
                    foreach ($idpodcasts as $video) {
                        $MY_HL_BLOCK_ID = 5;
                        CModule::IncludeModule('highloadblock');
                        $entity_data_class = GetEntityDataClass($MY_HL_BLOCK_ID);
                        $rsData = $entity_data_class::getList(array(
                            'select' => array('*'),
                            'order' => array("ID" => "DESC"),
                            'filter' => array("ID" => $video),
                        ));
                        while ($el = $rsData->fetch()) {
                            //  print_r($el);
                            $URL = CFile::GetFileArray($el['UF_PHOTO']);
                            $audio = CFile::GetFileArray($el['UF_FILE']);
                            //	var_dump($URL);
                            $URL = $URL["SRC"];
                            $video = $el['UF_URL'];
                            $audio = $audio["SRC"];
                            $title =  $el['UF_TITLE'];
                    ?>
                        <?php }
                        ?>
                        <div class="section__podcast g-flex-column" style="background-image: url(<?= $URL ?>);">
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
                    <?
                    }
                    ?>



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
    <? } ?>

    <section class="section questions-search">
            <div class="wrapper">
                <div class="section__big-text for-pop-up --mgb40">
                    <p>Вопрос-ответ</p>
                </div>
                <div class="section__search g-flex-align-center g-flex-between">
                    <h3>Вопрос-ответ <span class="--lightBlue">юристу</span></h3>

                    <form  class="search no-js" method="GET" action="/ursoprovozhd/search.php">
                        <input name="q" value="" type="text" placeholder="Поиск">
                        <button type="submit">
                            <svg class="icon">
                                <use xlink:href="#Loupe"></use>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <section class="section questions --grayBlock --pdb40" style="background: #F4F4F4;">
            <div class="wrapper">
                <div class="section__content-changer g-flex-column">
                    <div class="section__content-slider slider --with-dots">
                        <div class="section__content-slide">
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Как внести аванс за квартиру?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Как внести задаток за квартиру?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Как вносить аванс за квартиру в агентство недвижимости?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Нужно ли согласие супруга при продаже квартиры?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Как проверить паспорт продавца?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Проверяет ли банк квартиру?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Ипотека и неузаконенная перепланировка. Можно ли совместить?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Альтернативная сделка: особенности проведения и расчетов
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Как продать квартиру с несовершеннолетним собственником?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                        </div>
                        <div class="section__content-slide">
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Как продать / купить квартиру с неузаконенной перепланировкой?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Как купить квартиру в залоге у банка?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Как купить ипотечную квартиру в ипотеку?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Как передать деньги при покупке квартиры?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Продажа квартиры в долларах / евро: миф или реальность?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Банк для сделки с недвижимостью. Как не ошибиться в выборе?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Продажа квартиры нерезидентом: как рассчитать НДФЛ?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Срок продажи квартиры: от чего зависит и как можно его оптимизировать?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Что такое физическое освобождение квартиры и как рассчитать его срок?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                        </div>
                        <div class="section__content-slide">
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Что будет, если не подписать акт приема-передачи квартиры?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Когда выписываться из квартиры или как рассчитать срок юридического освобождения объекта?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Продавец зарегистрирован в квартире и отказывается от снятия с регистрационного учета до сделки?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Право пожизненного пользования или отказ от приватизации: последствия и способы нейтрализации при продаже квартиры
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Приостановка сделки или отказ в регистрации в рамках альтернативной сделки: причины и последствия
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Срок регистрации перехода права собственности: от чего зависит и в каких случаях может быть продлен?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Расходы продавца квартиры
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Расходы покупателя квартиры
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Сделка купли-продажи квартиры не состоялась, а срок авансового договора истек. Что можно сделать в таком случае?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                        </div>
                        <div class="section__content-slide">
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Возврат аванса. Что делать, если одна из сторон решила отказаться от сделки купли-продажи квартиры?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Предварительный договор купли-продажи квартиры: причины заключения, условия и последствия расторжения
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Какие документы нужны для сделки по квартире?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Как самостоятельно проверить квартиру?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Несовершеннолетний собственник квартиры. Как пройти опеку и получить одобрение сделки?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Сделки несовершеннолетних с родственниками: причины и последствия заключения
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Ячейка для сделки с недвижимостью. Как выбрать банк и забронировать ячейку?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Валютные риски при расчетах за недвижимость
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Расчеты через ячейку: согласовываем условия доступа
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                        </div>
                        <div class="section__content-slide">
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Расчеты через аккредитив: согласовываем условия раскрытия
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Участник сделки - юридическое лицо
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Нотариальное обязательство наследника
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Нотариальное обязательство членов семьи собственника
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Отказ от преимущественного права
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Врач на сделку: зачем приглашать и как выбрать?
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Неполная стоимость: риски такого договора и способы фиксации полной оплаты
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Расчеты при продаже квартиры в ипотеку
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                            <a href="/ursoprovozhd/" class="section__question g-flex-align-center">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                Договор купли-продажи квартиры: условия, сроки, риски
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>
                        </div>
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

        <section class="section how-it-works" id="formBlockSmooth">
            <div class="wrapper">
                <form class="--key g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                    <h3>Заказать консультацию <span class="--lightBlue">юриста по недвижимости</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <button type="submit" class="btn --lightBlue">Заказать консультацию</button>
                    <label>
                        <select multiple="multiple"  data-minimumResultsForSearch="-1" data-placeholder="Тип услуги*" required>
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
        
        <section class="section advantage-cards relative grayHalfBG --pdb60">
            <div class="wrapper">
                <h2 class="section__title --mgb60"><span class="--lightBlue">Преимущества</span> аренды с нами</h2>
                <div class="section__advantage-cards_slider slider --min-text">
                    <div class="section__advantage-cards_slide">
                        <a href="/rent/advantages/#advant_pop-up1" class="section__advantage-card relative g-flex-column g-flex-justify-end" style="background-image: url(/bitrix/templates/realty/assets/img/illustrations/blue/01.1.svg);">
                            <div class="g-flex-align-center g-flex-justify-center"><p>Cвой агент <span class="--lightBlue">в каждом районе</span> Москвы и Подмосковья</p></div>
                            <span class="num">1</span>
                        </a>
                    </div>
                    <div class="section__advantage-cards_slide">
                        <a href="/rent/advantages/#advant_pop-up2" class="section__advantage-card relative g-flex-column g-flex-justify-end" style="background-image: url(/bitrix/templates/realty/assets/img/illustrations/blue/02.1.svg);">
                        <div class="g-flex-align-center g-flex-justify-center"><p><span class="--lightBlue">Авторская технология</span> сдачи в аренду</p></div>
                            <span class="num">2</span>
                        </a>
                    </div>
                    <div class="section__advantage-cards_slide">
                        <a href="/rent/advantages/#advant_pop-up3" class="section__advantage-card relative g-flex-column g-flex-justify-end" style="background-image: url(/bitrix/templates/realty/assets/img/illustrations/blue/03.1.svg);">
                        <div class="g-flex-align-center g-flex-justify-center"><p><span class="--lightBlue">Еженедельные отчеты</span> на e-mail</p></div>
                            <span class="num">3</span>
                        </a>
                    </div>
                    <div class="section__advantage-cards_slide">
                        <a href="/rent/advantages/#advant_pop-up4" class="section__advantage-card relative g-flex-column g-flex-justify-end" style="background-image: url(/bitrix/templates/realty/assets/img/illustrations/blue/04.1.svg);">
                            <div class="g-flex-align-center g-flex-justify-center"><p><span class="--lightBlue">Профильный юрист</span> на сделке</p></div>
                            <span class="num">4</span>
                        </a>
                    </div>
                    <div class="section__advantage-cards_slide">
                        <a href="/rent/advantages/#advant_pop-up5" class="section__advantage-card relative g-flex-column g-flex-justify-end" style="background-image: url(/bitrix/templates/realty/assets/img/illustrations/blue/05.1.svg);">
                            <div class="g-flex-align-center g-flex-justify-center"><p><span class="--lightBlue">Удобные и прозрачные</span> тарифы</div>
                            <span class="num">5</span>
                        </a>
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
                <a href="/rent/advantages/" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center">
                    <div class="arrow g-flex-align-center g-flex-justify-center">
                        <svg class="icon">
                            <use xlink:href="#ArrowSquare"></use>
                        </svg>
                    </div>
                    Все преимущества
                </a>
            </div>
        </section>

        <section class="section cta-big-text">
            <div class="wrapper relative">
                <div class="section__big-text --mgb60">
                    <p>Остались <br>вопросы?</p>
                </div>
                <a href="#sendReq" class="btn section__absolute-button right --lightBlue js--transparent_pop-up">
                    
                    Заказать звонок
                </a>
            </div>
        </section>



    <div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="sendReq">
        <div class="wrapper">
            <div class="text-block">
                
                <form class="--key g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Заказать <span class="--lightBlue">звонок</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <button type="submit" class="btn --lightBlue">Заказать звонок</button>
                    <label class="w66 w100-xs">
                        <input type="text" placeholder="Комментарии">
                    </label>
                    <label class="inputCheckbox w100">
                        <input type="checkbox" required checked>
                        <span>Нажимая на кнопку "Заказать звонок", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                    </label>
                </form>
            </div>
        </div>
    </div>

    <section class="section pop-up send-request how-it-works --pdt0">
        <div class="pop-up__close">
            <svg class="icon">
                <use xlink:href="#Close"></use>
            </svg>
        </div>
        <div class="wrapper">
            <div class="section__content-changer g-flex-column">
                <div class="section__content-tabs -m-left g-flex-justify-center g-flex-align-center fit-content center --mgb60">
                    <div class="section__content-tab active">
                        Вторичка
                    </div>
                    <div class="section__content-tab">
                        Новостройка
                    </div>
                </div>
                <div class="section__content-slider slider">
                    <div class="section__content-slide">
                        <form class="--key g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                            <h3>Выбрать <span class="--lightBlue">районного агента</span></h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --lightBlue">Отправить заявку</button>
                            <label>
                                <select multiple="multiple" data-placeholder="Район покупки*" data-searchInputPlaceholder="Район" required>
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
                                <input type="text" placeholder="Бюджет, кол-во комнат">
                            </label>
                            <label class="inputCheckbox">
                                <input type="checkbox" required checked>
                                <span>Нажимая на кнопку "Отправить заявку", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                            </label>
                        </form>
                    </div>
                    <div class="section__content-slide">
                        <form class="--key g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                            <h3>Выбрать <span class="--lightBlue">эксперта по новостройкам</span></h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --lightBlue">Отправить заявку</button>
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
                                <span>Нажимая на кнопку "Отправить заявку", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                            </label>
                            <label class="w66 w100-xs">
                                <input type="text" placeholder="Комментарии">
                            </label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>



