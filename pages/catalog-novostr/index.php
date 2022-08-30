<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "КАТАЛОГ");
$APPLICATION->SetTitle("КАТАЛОГ КВАРТИР В НОВОСТРОЙКЕ");

$arrFilter = [
    "=PROPERTY_ISBUILD_VALUE"  => "Y",
    "=PROPERTY_SALETYPE_VALUE" => "Продажа"
];
?>

<?php $APPLICATION->IncludeComponent(
    "bitrix:news",
    "catalog",
    [
        "COMPONENT_TEMPLATE"              => "catalog",
        "IBLOCK_TYPE"                     => "catalog",
        "IBLOCK_ID"                       => "10",
        "NEWS_COUNT"                      => "5",
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
            "LAYOUT_FILE" => 'saleNewBuilds.php',
            "LAYOUT_DETAIL_FILE" => 'saleNewBuildsDetail.php'
        ]
    ],
    false
); ?>

        <section class="section">
            <div class="wrapper">
                <h3 class="section__text --mgb40"><span>Не нашли квартиру мечты среди<br>предложенных вариантов?</span></h3>
                <h3 class="text-align-end --mgb20"><span class="--green" style="text-align: left;display: inline-block;">С суперагентами Dream Realty<br>миссия выполнима</span></h3>
                <div class="section__big-text"><p class="text-align-end">на 100%</p></div>
            </div>
        </section>

        <section class="section how-it-works --pdt0" id="formBlockSmooth">
            <div class="wrapper">
            <form class="g-flex-wrap g-flex-between g-flex-align-center --green --key">
                <h3>Заказать консультацию <span class="--green">эксперта</span></h3>
                <label>
                    <input type="text" placeholder="Имя*" required>
                </label>
                <label>
                    <input type="tel" class="phone" placeholder="Телефон*" required>
                </label>
                <button type="submit" class="btn --green">Заказать консультацию</button>
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
                    <span>Нажимая на кнопку "Заказать консультацию", вы даете согласие на обработку персональных данных</span>
                </label>
                <label class="w66 w100-xs">
                    <input type="text" placeholder="Комментарии">
                </label>
            </form>
            </div>
        </section>

        <section class="section video-media">
            <div class="wrapper">
                <div class="section__big-text --mgb60">
                    <p>DREAM Media</p>
                </div>
                <div class="section__video-slider slider">
                    <div class="section__video-slide js_video-ratio" data-video="https://www.youtube.com/embed/sxBmS4VYU_0" style="background-image: url(/html/assets/img/video14.png);">
                        <img loading="lazy" src="/html/assets/svg/VideoButton.svg" alt="">
                    </div>
                    <div class="section__video-slide js_video-ratio" data-video="https://www.youtube.com/embed/CoINVBkSbU0" style="background-image: url(/html/assets/img/video1.png);">
                        <img loading="lazy" src="/html/assets/svg/VideoButton.svg" alt="">
                    </div>
                    <div class="section__video-slide js_video-ratio" data-video="https://www.youtube.com/embed/hw6Yn1yuWD0" style="background-image: url(/html/assets/img/video2.png);">
                        <img loading="lazy" src="/html/assets/svg/VideoButton.svg" alt="">
                    </div>
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
                <a href="https://www.youtube.com/c/dreamrealty" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt30">
                    <div class="arrow g-flex-align-center g-flex-justify-center">
                        <svg class="icon">
                            <use xlink:href="#ArrowSquare"></use>
                        </svg>
                    </div>
                    Канал Dream Realty
                </a>
            </div>
        </section>

        <section class="section podcasts">
            <div class="wrapper">
                <h2 class="section__title --mgb60"><span class="--green">Советы</span> наших экспертов </h2>
                <div class="section__podcasts g-flex-between g-flex-align-stretch g-flex-wrap">
                    <div class="section__podcast g-flex-column" style="background-image: url(/html/assets/img/podcast25.png);">
                        <div class="section__podcast_name">Две стратегии покупки жилья в новостройке через агентство недвижимости</div>
                        <img loading="lazy" src="/html/assets/svg/PodcastIcon.svg" alt="" class="section__podcast_icon --mgb40">
                        <audio data-status="stopped" controls src="/html/assets/audio/Luna.mp3" class="section__podcast_audio-tag">
                            Тег audio не поддерживается вашим браузером.
                        </audio>
                        <div class="section__podcast_audio g-flex-align-center">
                            <img loading="lazy" src="/html/assets/svg/Audio--Play.svg" data-pause="/html/assets/svg/pause.svg" data-play="/html/assets/svg/Audio--Play.svg" alt="" class="js_play-pause">
                            <div class="timeline">
                                <div class="currentTime"></div>
                                <span class="curNumTime">00:00</span>
                                <span class="allTime">00:00</span>
                            </div>
                            <a href="https://t.me/FromDreamToRealty" target="_blank" class="section__podcast_comment g-flex-align-center">
                                <img loading="lazy" src="/html/assets/svg/Comment.svg" alt="">
                                Комментировать
                            </a>
                        </div>
                    </div>
                    <div class="section__podcast g-flex-column" style="background-image: url(/html/assets/img/podcast26.png);">
                        <div class="section__podcast_name">Как получить доступ к самым лучшим квартирам застройщика, которые он "приберёг на будущее"?</div>
                        <img loading="lazy" src="/html/assets/svg/PodcastIcon.svg" alt="" class="section__podcast_icon --mgb40">
                        <audio data-status="stopped" controls src="/html/assets/audio/Luna.mp3" class="section__podcast_audio-tag">
                            Тег audio не поддерживается вашим браузером.
                        </audio>
                        <div class="section__podcast_audio g-flex-align-center">
                            <img loading="lazy" src="/html/assets/svg/Audio--Play.svg" data-pause="/html/assets/svg/pause.svg" data-play="/html/assets/svg/Audio--Play.svg" alt="" class="js_play-pause">
                            <div class="timeline">
                                <div class="currentTime"></div>
                                <span class="curNumTime">00:00</span>
                                <span class="allTime">00:00</span>
                            </div>
                            <a href="https://t.me/FromDreamToRealty" target="_blank" class="section__podcast_comment g-flex-align-center">
                                <img loading="lazy" src="/html/assets/svg/Comment.svg" alt="">
                                Комментировать
                            </a>
                        </div>
                    </div>
                    <div class="section__podcast g-flex-column" style="background-image: url(/html/assets/img/podcast27.png);">
                        <div class="section__podcast_name">как найти идеальную новостройку для жизни</div>
                        <img loading="lazy" src="/html/assets/svg/PodcastIcon.svg" alt="" class="section__podcast_icon --mgb40">
                        <audio data-status="stopped" controls src="/html/assets/audio/Luna.mp3" class="section__podcast_audio-tag">
                            Тег audio не поддерживается вашим браузером.
                        </audio>
                        <div class="section__podcast_audio g-flex-align-center">
                            <img loading="lazy" src="/html/assets/svg/Audio--Play.svg" data-pause="/html/assets/svg/pause.svg" data-play="/html/assets/svg/Audio--Play.svg" alt="" class="js_play-pause">
                            <div class="timeline">
                                <div class="currentTime"></div>
                                <span class="curNumTime">00:00</span>
                                <span class="allTime">00:00</span>
                            </div>
                            <a href="https://t.me/FromDreamToRealty" target="_blank" class="section__podcast_comment g-flex-align-center">
                                <img loading="lazy" src="/html/assets/svg/Comment.svg" alt="">
                                Комментировать
                            </a>
                        </div>
                    </div>
                    <div class="section__podcast g-flex-column" style="background-image: url(/html/assets/img/podcast28.png);">
                        <div class="section__podcast_name">Как купить лучшее предложение до старта продаж жилого комплекса?</div>
                        <img loading="lazy" src="/html/assets/svg/PodcastIcon.svg" alt="" class="section__podcast_icon --mgb40">
                        <audio data-status="stopped" controls src="/html/assets/audio/Luna.mp3" class="section__podcast_audio-tag">
                            Тег audio не поддерживается вашим браузером.
                        </audio>
                        <div class="section__podcast_audio g-flex-align-center">
                            <img loading="lazy" src="/html/assets/svg/Audio--Play.svg" data-pause="/html/assets/svg/pause.svg" data-play="/html/assets/svg/Audio--Play.svg" alt="" class="js_play-pause">
                            <div class="timeline">
                                <div class="currentTime"></div>
                                <span class="curNumTime">00:00</span>
                                <span class="allTime">00:00</span>
                            </div>
                            <a href="https://t.me/FromDreamToRealty" target="_blank" class="section__podcast_comment g-flex-align-center">
                                <img loading="lazy" src="/html/assets/svg/Comment.svg" alt="">
                                Комментировать
                            </a>
                        </div>
                    </div>
                </div>
                <a href="/dream-media/podcasts/" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt30">
                    <div class="arrow g-flex-align-center g-flex-justify-center">
                        <svg class="icon">
                            <use xlink:href="#ArrowSquare"></use>
                        </svg>
                    </div>
                    Все подкасты
                </a>
            </div>
        </section> 

        <section class="section advantage-cards relative grayHalfBG --pdb60">
            <div class="wrapper">
                <h2 class="section__title --mgb60"><span class="--green">Преимущества</span> покупки квартиры в новостройке с нами</h2>
                <div class="section__advantage-cards_slider slider --min-text">
                    <div class="section__advantage-cards_slide">
                        <a href="/buy/advantages-new/#advant_pop-up1" class="section__advantage-card relative g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/illustrations/green/01.1.svg);">
                            <div class="g-flex-align-center g-flex-justify-center"><p><span class="--green">Работаем на вас</span>, а не на застройщика</p></div>
                            <span class="num">1</span>
                        </a>
                    </div>
                    <div class="section__advantage-cards_slide">
                        <a href="/buy/advantages-new/#advant_pop-up2" class="section__advantage-card relative g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/illustrations/green/02.svg);">
                            <div class="g-flex-align-center g-flex-justify-center"><p>Оцениваем <span class="--green">инвестиционный потенциал</span></p></div>
                            <span class="num">2</span>
                        </a>
                    </div>
                    <div class="section__advantage-cards_slide">
                        <a href="/buy/advantages-new/#advant_pop-up3" class="section__advantage-card relative g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/illustrations/green/03.1.svg);">
                            <div class="g-flex-align-center g-flex-justify-center"><p>Работаем <span class="--green">“под ключ”</span></p></div>
                            <span class="num">3</span>
                        </a>
                    </div>
                    <div class="section__advantage-cards_slide">
                        <a href="/buy/advantages-new/#advant_pop-up4" class="section__advantage-card relative g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/illustrations/green/04.svg);">
                            <div class="g-flex-align-center g-flex-justify-center"><p>Владеем <span class="--green">инсайдерской информацией</span></p></div>
                            <span class="num">4</span>
                        </a>
                    </div>
                    <div class="section__advantage-cards_slide">
                        <a href="/buy/advantages-new/#advant_pop-up5" class="section__advantage-card relative g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/illustrations/green/05.1.svg);">
                            <div class="g-flex-align-center g-flex-justify-center"><p>Предлагаем <span class="--green">100% рынка новостроек</span></p></div>
                            <span class="num">5</span>
                        </a>
                    </div>
                    <div class="section__advantage-cards_slide">
                        <a href="/buy/advantages-new/#advant_pop-up6" class="section__advantage-card relative g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/illustrations/green/06.svg);">
                            <div class="g-flex-align-center g-flex-justify-center"><p><span class="--green">Помогаем сформировать</span> бюджет на покупку</p></div>
                            <span class="num">6</span>
                        </a>
                    </div>
                    <div class="section__advantage-cards_slide">
                        <a href="/buy/advantages-new/#advant_pop-up7" class="section__advantage-card relative g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/illustrations/green/07.svg);">
                            <div class="g-flex-align-center g-flex-justify-center"><p><span class="--green">Официальный отчет о проверке</span> объекта и застройщика</p></div>
                            <span class="num">7</span>
                        </a>
                    </div>
                    <div class="section__advantage-cards_slide">
                        <a href="/buy/advantages-new/#advant_pop-up8" class="section__advantage-card relative g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/illustrations/green/08.svg);">
                            <div class="g-flex-align-center g-flex-justify-center"><p><span class="--green">Свой YouTube канал</span> о новостройках</p></div>
                            <span class="num">8</span>
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
                <a href="/buy/advantages-new/" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center">
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
                <a href="#sendReqtwo" class="js__open-hash_pop-up btn section__absolute-button right --green">
                <svg class="icon">
                        <use xlink:href="#PhoneCall"></use>
                    </svg>
                    Заказать звонок
                </a>
            </div>
        </section>

    </main>
    <!-- Main End -->

    <div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="sendReqtwo">
        <div class="wrapper">
            <div class="text-block">
                
                <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Заказать <span class="--green">звонок</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон">
                    </label>
                    <button type="submit" class="btn --green">Заказать звонок</button>
                    <label class="w66 w100-xs">
                        <input type="text" placeholder="Комментарии">
                    </label>
                    <label class="inputCheckbox w100">
                        <input type="checkbox" required checked>
                        <span>Нажимая на кнопку "Заказать звонок", вы даете согласие на обработку персональных данных</span>
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
                <svg class="--green" viewBox="0 0 32 32">
                    <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="section__content-slider slider">
                    <div class="section__content-slide">
                        <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                            <h3>Выбрать <span class="--green">районного агента</span></h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --green">Отправить заявку</button>
                            <label>
                                <select multiple="multiple" data-placeholder="Район покупки*" required>
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
                                <span>Нажимая на кнопку "Отправить заявку", вы даете согласие на обработку персональных данных</span>
                            </label>
                        </form>
                    </div>
                    <div class="section__content-slide">
                        <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                            <h3>Выбрать <span class="--green">эксперта по новостройкам</span></h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --green">Отправить заявку</button>
                            <label>
                                <select multiple="multiple" data-placeholder="Цель покупки*" required>
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
        </div>
    </section>
    
    <div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="download">
        <div class="wrapper">
            <div class="text-block">
                
                <form class="--key g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Скачать <span class="--green">презентацию</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <label></label>
                    <label>
                        <input type="email" class="email" placeholder="Email*" required>
                    </label>
                    <button type="submit" class="btn --green">Скачать</button>
                    
                    <label class="inputCheckbox">
                        <input type="checkbox" required checked>
                        <span>Нажимая на кнопку "Скачать", вы даете согласие на обработку персональных данных</span>
                    </label>
                </form>
            </div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>



