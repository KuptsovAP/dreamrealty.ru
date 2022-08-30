<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "ЮРИДИЧЕСКОЕ СОПРОВОЖДЕНИЕ");
$APPLICATION->SetTitle("ПРЕИМУЩЕСТВА СОПРОВОЖДЕНИЯ СДЕЛКИ С НАМИ"); ?>

    <link rel="stylesheet" href="/bitrix/templates/realty/assets/css/advantages.css?v=<?=rand(0, 255)?>">


    <section class="section advantages-page grayHalfBG">
        <div class="wrapper">
            <div class="section__big-text --mgb40">
                <p>агентство мечты</p>
            </div>
            <div class="section__advantages--full g-flex-wrap g-flex-between --mgt180">
                <a href="#advant_pop-up1" class="section__advantage g-flex-column g-flex-justify-end --bg-cover-xs" style="background-image: url(/html/assets/img/illustrations/blue/01.svg);">
                    <span class="num">1</span>
                    <div class="g-flex-align-center g-flex-justify-center"><p><span class="--blue">Бесплатная</span> юридическая консультация</div>
                </a>
                <a href="#advant_pop-up2" class="section__advantage --phm110 g-flex-column g-flex-justify-end --bg-cover-xs" style="background-image: url(/html/assets/img/illustrations/blue/02.svg);">
                    <span class="num">2</span>
                    <div class="g-flex-align-center g-flex-justify-center"><p>Юрист с опытом работы <span class="--blue">в недвижимости</span></p></div>
                </a>
                <a href="#advant_pop-up3" class="section__advantage --phm110 g-flex-column g-flex-justify-end --bg-cover-xs" style="background-image: url(/html/assets/img/illustrations/blue/03.svg);">
                    <span class="num">3</span>
                    <div class="g-flex-align-center g-flex-justify-center"><p>Работаем <span class="--blue">"под ключ"</span></p></div>
                </a>
                <a href="#advant_pop-up4" class="section__advantage --phm110 g-flex-column g-flex-justify-end --bg-cover-xs" style="background-image: url(/html/assets/img/illustrations/blue/04.svg);">
                    <span class="num">4</span>
                    <div class="g-flex-align-center g-flex-justify-center"><p><span class="--blue">Правовой отчет</span> о проверке квартиры</p></div>
                </a>
                <a href="#advant_pop-up5" class="section__advantage --phm110 g-flex-column g-flex-justify-end --bg-cover-xs" style="background-image: url(/html/assets/img/illustrations/blue/05.svg);">
                    <span class="num">5</span>
                    <div class="g-flex-align-center g-flex-justify-center"><p><span class="--blue">Оптимизация расходов, налогов и схемы</span> сделки</p></div>
                </a>
                <a href="#advant_pop-up6" class="section__advantage --phm110 g-flex-column g-flex-justify-end --bg-cover-xs" style="background-image: url(/html/assets/img/illustrations/blue/06.svg);">
                    <span class="num">6</span>
                    <div class="g-flex-align-center g-flex-justify-center"><p><span class="--blue">Удобные и прозрачные</span> тарифы</p></div>
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
                <div class="section__content-slider slider">
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
                                <span>Нажимая на кнопку "Отправить заявку", вы даете согласие на обработку персональных данных</span>
                            </label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section how-it-works relative">
        <div class="wrapper">
            <h2 class="section__title --mgb60">Истории <span class="--blue">наших клиентов</span></h2>
            <div class="section__content-changer g-flex-column">
                <div class="section__content-slider slider">
                    <div class="section__content-slide">
                        <div class="section__histories">
                            <div class="section__history">
                                <div class="img">
                                    <img loading="lazy" src="/html/assets/img//advant-full13.png" alt="">
                                </div>
                                <div class="desc">
                                    <h4>Про самонадеянность</h4>
                                    <p class="--mgb20">Пытаемся без агента купить новую квартиру и одновременно продать старую. “Квартира мечты” найдена, покупка планируется с использованием субсидии. Все было легко и понятно, пока продавец не начал оттягивать момент принятия аванса за свою квартиру и беспокоиться по любому поводу...</p>
                                    <a href="/ursoprovozhd/stories.php">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section__content-slide">
                        <div class="section__histories">
                            <div class="section__history">
                                <div class="img">
                                    <img loading="lazy" src="/html/assets/img//advant-full13.png" alt="">
                                </div>
                                <div class="desc">
                                    <h4>Слайдер работает и всегда работал!</h4>
                                    <p class="--mgb20">Слайдер работает, он работал всегда и работает сейчас, я просто вставил этот текст чтобы поняли что он работает. Он работает. Слайдер работает, он работал всегда и работает сейчас, я просто вставил этот текст чтобы поняли что он работает. Он работает.<br>Слайдер работает...</p>
                                    <a href="/ursoprovozhd/stories.php">Подробнее</a>
                                </div>
                            </div>
                        </div>
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
            <a href="/ursoprovozhd/stories.php" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgb90">
                <div class="arrow g-flex-align-center g-flex-justify-center">
                    <svg class="icon">
                        <use xlink:href="#ArrowSquare"></use>
                    </svg>
                </div>
                Все истории
            </a>
        </div>
    </section>

    <section class="section how-it-works">
        <div class="wrapper">
            <h2 class="section__title --mgb20">Хотите узнать, <span class="--blue">как мы будем сопровождать</span> вашу сделку?</h2>
            <p class="section__descriptor descriptor --mgb60">Сопровождением вашей сделки будет заниматься профильный юрист, а не обычный агент</p>
            <div class="section__content-changer g-flex-column">
                <div class="section__content-tabs g-flex-between g-flex-align-center center --mgb60">
                    <div class="section__content-tab active">
                        Юрист по покупке вторички
                    </div>
                    <div class="section__content-tab">
                        Юрист по покупке новостройки
                    </div>
                    <div class="section__content-tab">
                        Юрист по продаже
                    </div>
                </div>
                <svg class="--blue" viewBox="0 0 32 32">
                    <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="section__content-slider slider">
                    <div class="section__content-slide">
                        <div class="section__content-advantages g-flex-wrap g-flex-between g-flex-align-start">
                            <div class="section__content-advantage g-flex-column g-flex-align-start">
                                <img loading="lazy" src="/html/assets/svg/QuestionAndAnswers--blue.svg" alt="">
                                <p>Анализирует документы продавца и отвечает на все вопросы</p>
                            </div>
                            <div class="section__content-advantage g-flex-column g-flex-align-start">
                                <img loading="lazy" src="/html/assets/svg/ShieldDocuments--blue.svg" alt="">
                                <p>Проверяет объект и готовит правовой отчет с рекомендациями</p>
                            </div>
                            <div class="section__content-advantage g-flex-column g-flex-align-start">
                                <img loading="lazy" src="/html/assets/svg/ReversedSettings.svg" alt="">
                                <p>Оптимизирует налоги, расходы и схему сделки</p>
                            </div>
                        </div>
                        <a href="/ursoprovozhd/#mainSlider-1" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt60" style="margin-left: 0px !important; padding-left: 22px !important">
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
                                <img loading="lazy" src="/html/assets/svg/QuestionAndAnswers--blue.svg" alt="">
                                <p>Анализирует документы застройщика и отвечает на все вопросы</p>
                            </div>
                            <div class="section__content-advantage g-flex-column g-flex-align-start">
                                <img loading="lazy" src="/html/assets/svg/ShieldDocuments--blue.svg" alt="">
                                <p>Проверяет объект и застройщика, готовит правовой отчет с рекомендациями</p>
                            </div>
                            <div class="section__content-advantage g-flex-column g-flex-align-start">
                                <img loading="lazy" src="/html/assets/svg/ReversedSettings--blue.svg" alt="">
                                <p>Оптимизирует налоги, расходы и схему сделки</p>
                            </div>
                        </div>
                        <a href="/ursoprovozhd/#mainSlider-2" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt60" style="margin-left: 0px !important; padding-left: 22px !important">
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
                                <img loading="lazy" src="/html/assets/svg/QuestionAndAnswers--blue.svg" alt="">
                                <p>Анализирует документы и дает свои рекомендации</p>
                            </div>
                            <div class="section__content-advantage g-flex-column g-flex-align-start">
                                <img loading="lazy" src="/html/assets/svg/ShieldDocuments--blue.svg" alt="">
                                <p>Оптимизирует налоги, расходы и схему сделки</p>
                            </div>
                            <div class="section__content-advantage g-flex-column g-flex-align-start">
                                <img loading="lazy" src="/html/assets/svg/ReversedSettings--blue.svg" alt="">
                                <p>Готовит договоры и иные документы к авансу и сделке</p>
                            </div>
                        </div>
                        <a href="/ursoprovozhd/#mainSlider-3" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt60" style="margin-left: 0px !important; padding-left: 22px !important">
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

    <section class="section cta-big-text">
        <div class="wrapper relative">
            <div class="section__big-text --mgb60">
                <p>Остались <br>вопросы?</p>
            </div>
            <a href="#sendReq" class="btn section__absolute-button right --blue js--transparent_pop-up">
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
                    <h3>Заказать <span class="--blue">звонок</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <button type="submit" class="btn --blue">Заказать звонок</button>
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

    <div class="transparent_pop-up transparent_pop-up1 place-agent-choose g-flex-align-center g-flex-justify-center">
        <div class="wrapper">
            <div class="text-block">

                <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Заказать консультацию <span class="--blue">юриста по недвижимости</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <button type="submit" class="btn --blue">Заказать консультацию</button>
                    <label>
                        <select multiple="multiple" data-placeholder="Тип услуги*" required>
                            <option value="">&nbsp;</option>
                            <option>покупка новостройки</option>
                            <option>покупка вторички</option>
                            <option>продажа вторички</option>
                            <option>альтернативная сделка</option>
                            <option>первичная консультация</option>
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

    <div class="transparent_pop-up transparent_pop-up2 place-agent-choose g-flex-align-center g-flex-justify-center">
        <div class="wrapper">
            <div class="text-block">

                <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Выбрать <span class="--blue">юриста по недвижимости</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <button type="submit" class="btn --blue">Отправить заявку</button>
                    <label>
                        <select multiple="multiple" data-placeholder="Тип услуги*" required>
                            <option value="">&nbsp;</option>
                            <option>покупка новостройки</option>
                            <option>покупка вторички</option>
                            <option>продажа вторички</option>
                            <option>альтернативная сделка</option>
                            <option>первичная консультация</option>
                        </select>
                    </label>
                    <label>
                        <input type="text" placeholder="Комментарии">
                    </label>
                    <label class="inputCheckbox">
                        <input type="checkbox" required checked>
                        <span>Нажимая на кнопку "Отправить заявку", вы даете согласие на обработку персональных данных</span>
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
                        <h3 class="title d-block"><span class="--blue --pd0">Бесплатная</span> юридическая <span class="--blue">консультация</span></h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/ursoprovozhd-advantages--1.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№1</div>
                                    <p>Еще до начала работы наш юрист <b>проконсультирует</b> вас по всем вопросам, связанным с недвижимостью и <b>поделится своим профессиональным мнением</b>. Он <b>изучит вашу ситуацию и документы</b>, выяснит на какой стадии находится подготовка к сделке, выслушает ваши пожелания, <b>проговорит потенциальные риски</b> и <b>предложит готовый алгоритм действий</b>.</p>
                                    <p>Для вашего удобства консультация может быть организована как <b>онлайн</b> (по телефону или в zoom), так и в <b>офисе</b>.</p>
                                </div>
                            </div>
                            <div class="pop-up__header_bottom">
                                <p>Консультация нашего юриста <b>сэкономит не только ваши деньги, но и время</b>.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="wrapper">
                        <div class="section__big-text --mgt40 --mgb20 for-pop-up">
                            <p>ВАША ВЫГОДА</p>
                        </div>
                        <h3 class="--mgb40">вы бесплатно получаете <br><span class="--blue">готовый алгоритм будущей сделки</span></h3>
                        <form class="g-flex-wrap g-flex-between g-flex-align-center --key">
                            <h3>Заказать консультацию <span class="--blue">юриста по недвижимости</span></h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --blue">Заказать консультацию</button>
                            <label>
                                <select multiple="multiple" data-placeholder="Тип услуги*" required>
                                    <option value="">&nbsp;</option>
                                    <option>покупка новостройки</option>
                                    <option>покупка вторички</option>
                                    <option>продажа вторички</option>
                                    <option>альтернативная сделка</option>
                                    <option>первичная консультация</option>
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
                        <h3 class="title d-block">Юрист <span class="--blue --pd0">с опытом работы в недвижимости</span></h3>
                    </div>
                    <div class="pop-up__header_gray differences g-flex-column --next_advantages">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/ursoprovozhd-advantages--2.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№2</div>
                                    <p>У каждого нашего юриста за плечами обширный опыт сопровождения сделок и глубокое знание судебной практики, поэтому в своей работе они <b>учитывают и правовые, и психологические аспекты сделки. Ключевая задача</b> наших юристов не столько демонстрировать свои знания и навыки, сколько <b>обеспечить вам безрисковую и спокойную сделку</b>.</p>
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
                                    <p>Обычный юрист</p>
                                </div>
                                <ul>
                                    <li>в лучшем случае, юрист общей практики, а чаще всего - агент без юридического образования</li>
                                    <li>Один обслуживает все сделки агентства, что негативно отражается на качестве и оперативности</li>
                                    <li>Сопровождает сделки клиентов по телефону</li>
                                    <li>Готовит документы по шаблону и не учитывает потенциальные риски и психологический портрет участников сделки</li>
                                    <li>При сопровождении сделки на покупку недвижимости устно сообщает о том, можно приобретать данный объект или нет</li>
                                </ul>
                            </div>
                            <div class="advantage-pop-up__difference">
                                <div class="advantage-pop-up__difference_title g-flex-align-center g-flex-justify-center --green">
                                    <img loading="lazy" src="/html/assets/svg/AdvantDiff2.svg" alt="">
                                    <p>Суперюрист <br>Dream Realty</p>
                                </div>
                                <ul>
                                    <li>Юрист с многолетним опытом работы именно в сфере недвижимости</li>
                                    <li>Будучи частью команды юристов, обеспечивает оперативность, качество и безопасность вашей сделки</li>
                                    <li>Лично присутствует на каждом этапе вашей сделки</li>
                                    <li>Готовит пакет документов и саму сделку с учетом вашей ситуации и пожеланий; для снижения потенциальных рисков привлекает на сделку врача (психиатра-нарколога) и/или нотариуса, а также иным образом нивелирует ваши риски</li>
                                    <li>При сопровождении сделки на покупку недвижимости проводит комплексную проверку объекта, готовит официальный правовой отчет, в котором отражает всю информацию о выбранном объекте, истории перехода прав собственности, зарегистрированных в объекте лиц и потенциальных рисках</li>
                                </ul>
                            </div>
                        </div>
                        <div class="section__big-text --mgt40 --mgb20 for-pop-up">
                            <p>ВАША ВЫГОДА</p>
                        </div>
                        <h3 class="--mgb40">вы <span class="--blue">чувствуете себя спокойно <br>и уверены в безопасности сделки</span></h3>
                        <form class="g-flex-wrap g-flex-between g-flex-align-center --key">
                            <h3>Заказать <span class="--blue">услугу юридического сопровождения сделки</span></h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --blue">Заказать услугу</button>
                            <label>
                                <select multiple="multiple" data-placeholder="Тип услуги*" required>
                                    <option value="">&nbsp;</option>
                                    <option>покупка новостройки</option>
                                    <option>покупка вторички</option>
                                    <option>продажа вторички</option>
                                    <option>альтернативная сделка</option>
                                    <option>первичная консультация</option>
                                </select>
                            </label>
                            <label>
                                <input type="text" placeholder="Комментарии">
                            </label>
                            <label class="inputCheckbox">
                                <input type="checkbox" required checked>
                                <span>Нажимая на кнопку "Заказать услугу", вы даете согласие на обработку персональных данных</span>
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
                        <h3 class="title d-block">Работаем <span class="--blue --pd0">"под ключ"</span></h3>
                    </div>
                    <div class="pop-up__header_gray differences g-flex-column --next_advantages">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/ursoprovozhd-advantages--3.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№3</div>
                                    <p>Работа юриста по сопровождению сделки включена в стоимость таких услуг, как продажа, покупка и обмен недвижимости. Услуги, связанные с одобрением сделки в органах опеки и одобрением объекта в ипотечной сделке, оплачиваются дополнительно в размере 20 000 рублей за каждую услугу.</p>
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
                                    <p>Обычный юрист</p>
                                </div>
                                <ul>
                                    <li>в лучшем случае, юрист общей практики, а чаще всего - агент без юридического образования</li>
                                    <li>Один обслуживает все сделки агентства, что негативно отражается на качестве и оперативности</li>
                                    <li>Сопровождает сделки клиентов по телефону</li>
                                    <li>Готовит документы по шаблону и не учитывает потенциальные риски и психологический портрет участников сделки</li>
                                    <li>При сопровождении сделки на покупку недвижимости устно сообщает о том, можно приобретать данный объект или нет</li>
                                </ul>
                            </div>
                            <div class="advantage-pop-up__difference">
                                <div class="advantage-pop-up__difference_title g-flex-align-center g-flex-justify-center --green">
                                    <img loading="lazy" src="/html/assets/svg/AdvantDiff2.svg" alt="">
                                    <p>Суперюрист <br>Dream Realty</p>
                                </div>
                                <ul>
                                    <li>Юрист с многолетним опытом работы именно в сфере недвижимости</li>
                                    <li>Будучи частью команды юристов, обеспечивает оперативность, качество и безопасность вашей сделки</li>
                                    <li>Лично присутствует на каждом этапе вашей сделки</li>
                                    <li>Готовит пакет документов и саму сделку с учетом вашей ситуации и пожеланий; для снижения потенциальных рисков привлекает на сделку врача (психиатра-нарколога) и/или нотариуса, а также иным образом нивелирует ваши риски</li>
                                    <li>При сопровождении сделки на покупку недвижимости проводит комплексную проверку объекта, готовит официальный правовой отчет, в котором отражает всю информацию о выбранном объекте, истории перехода прав собственности, зарегистрированных в объекте лиц и потенциальных рисках</li>
                                </ul>
                            </div>
                        </div>
                        <div class="section__big-text --mgt40 --mgb20 for-pop-up">
                            <p>ВАША ВЫГОДА</p>
                        </div>
                        <h3 class="--mgb40">вы получаете не только безрисковую сделку, <br>но и <span class="--blue">удовольствие в процессе ее сопровождения</span></h3>
                        <form class="g-flex-wrap g-flex-between g-flex-align-center --key">
                            <h3>Заказать <span class="--blue">услугу юридического сопровождения сделки</span></h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --blue">Заказать услугу</button>
                            <label>
                                <select multiple="multiple" data-placeholder="Тип услуги*" required>
                                    <option value="">&nbsp;</option>
                                    <option>покупка новостройки</option>
                                    <option>покупка вторички</option>
                                    <option>продажа вторички</option>
                                    <option>альтернативная сделка</option>
                                    <option>первичная консультация</option>
                                </select>
                            </label>
                            <label>
                                <input type="text" placeholder="Комментарии">
                            </label>
                            <label class="inputCheckbox">
                                <input type="checkbox" required checked>
                                <span>Нажимая на кнопку "Заказать услугу", вы даете согласие на обработку персональных данных</span>
                            </label>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="advantages-pop-up pop-up g-flex-column" id="advant_pop-up3__backup">
        <div class="pop-up-container-wrap">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="wrapper">
                        <h3 class="title d-block">Работаем <span class="--blue --pd0">"под ключ"</span></h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/ursoprovozhd-advantages--3.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№3</div>
                                    <p>Наш юрист <b>проходит с вами весь путь - от момента первичной консультации до подписания акта приема-передачи недвижимости:</b></p>
                                    <ul class="default-disc small-disc" style="margin: 0px;">
                                        <li>анализирует документы и текущую ситуацию,</li>
                                        <li>берет на себя переговоры со всеми участниками сделки,</li>
                                        <li>в случае альтернативной и многоуровневой сделки, берет </li>
                                        <li>на себя организацию и контроль соблюдения всех договоренностей,</li>
                                        <li>помогает получить согласие органов опеки на сделку с участием несовершеннолетних,</li>
                                        <li>оптимизирует налоги, расходы и схему будущей сделки,</li>
                                        <li>готовит договоры и иные документы к авансу/задатку, сделке и ее закрытию,</li>
                                        <li>лично присутствует на всех этапах сопровождения сделки,</li>
                                        <li>в случае необходимости привлекает и контролирует работу таких специалистов, как: оценщик, ипотечный брокер, нотариус, сотрудник банка, врач на сделку (психиатр-нарколог) и т.п.,</li>
                                        <li>контролирует безопасность расчетов и регистрацию сделки,</li>
                                    </ul>
                                    <p style="margin: 0px;">а <b>в случае покупки недвижимости</b> еще и:</p>
                                    <ul class="default-disc small-disc" style="margin: 0px;">
                                        <li>согласовывает получение материнского капитала, </li>
                                        <li>участвует в одобрении объекта по ипотеке,</li>
                                        <li>тщательно проверяет приобретаемый объект,</li>
                                        <li>готовит правовой отчет по результатам проверки с выводами и рекомендациями.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pop-up__header_bottom">
                                <p>Работа юриста по сопровождению сделки <b>включена в стоимость</b> таких услуг, как продажа, покупка и обмен недвижимости. Услуги, связанные с одобрением сделки в органах опеки и одобрением объекта в ипотечной сделке, <b>оплачиваются дополнительно в размере 20 000 рублей за каждую услугу.</b></p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="wrapper">
                        <div class="section__big-text --mgt40 --mgb20 for-pop-up">
                            <p>ВАША ВЫГОДА</p>
                        </div>
                        <h3 class="--mgb40">вы получаете не только безрисковую сделку, <br>но и <span class="--blue">удовольствие в процессе ее сопровождения</span></h3>
                        <form class="g-flex-wrap g-flex-between g-flex-align-center --key">
                            <h3>Заказать <span class="--blue">услугу юридического сопровождения сделки</span></h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --blue">Заказать услугу</button>
                            <label>
                                <select multiple="multiple" data-placeholder="Тип услуги*" required>
                                    <option value="">&nbsp;</option>
                                    <option>покупка новостройки</option>
                                    <option>покупка вторички</option>
                                    <option>продажа вторички</option>
                                    <option>альтернативная сделка</option>
                                    <option>первичная консультация</option>
                                </select>
                            </label>
                            <label>
                                <input type="text" placeholder="Комментарии">
                            </label>
                            <label class="inputCheckbox">
                                <input type="checkbox" required checked>
                                <span>Нажимая на кнопку "Заказать услугу", вы даете согласие на обработку персональных данных</span>
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
                        <h3 class="title d-block">Официальный <span class="--blue --pd0">отчет о проверке объекта недвижимости</span></h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/ursoprovozhd-advantages--4.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№4</div>
                                    <p>Наш правовой отчет это не просто сведения из ЕГРН. <br>Это полноценный документ, который в случае покупки объекта <b class="--blue">на вторичке</b> содержит:</p>
                                    <ul class="default-disc small-disc">
                                        <li>подробное описание истории перехода права собственности на объект недвижимости,</li>
                                        <li>архивные данные о зарегистрированных в объекте лицах</li>
                                        <li>анализ финансового состояния продавца, в том числе на предмет возможного банкротства</li>
                                        <li>информацию о судебных спорах, исполнительных производствах и обременениях,</li>
                                        <li>описание возможных рисков и последствий,</li>
                                        <li>выводы и рекомендации юриста,</li>
                                    </ul>
                                    <p><b class="--blue">в новостройке</b> содержит:</p>
                                    <ul class="default-disc small-disc">
                                        <li>описание документации проекта и застройщика,</li>
                                        <li>информацию о его учредителях и конечных бенефициарах,</li>
                                        <li>анализ его финансового состояния,</li>
                                        <li>информацию о судебных спорах и обременениях,</li>
                                        <li>информацию о земельном участке,</li>
                                        <li>анализ договора участия в долевом строительстве, </li>
                                        <li>описание возможных рисков и последствий,</li>
                                        <li>выводы и рекомендации юриста.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pop-up__header_bottom">
                                <p>Если объект или застройщик <b>окажутся потенциально проблемными, мы будем отговаривать вас от приобретения</b> такой недвижимости. А если вы будете настаивать на сделке, мы будем вынуждены отказаться от ее сопровождения. </p>
                                <p>Мы хотим, чтобы с покупкой новой квартиры в вашу жизнь пришли радость и комфорт, а не судебные разбирательства. <br>Правовой отчет оплачивается дополнительно, когда комиссию нам платит застройщик. И включен в стоимость услуги, когда комиссию платите вы.</p>
                                <a href="#download_4up" data-id="#advant_pop-up4" class="js__pop_up_smoothScroll" id="downVtor"><img loading="lazy" src="/html/assets/svg/Download--blue.svg" alt="">Скачать образец отчета о проверке квартиры <span class="--blue">на вторичке</span> </a>
                                <a href="#download_4up" data-id="#advant_pop-up4" class="js__pop_up_smoothScroll" id="downNovstr"><img loading="lazy" src="/html/assets/svg/Download--blue.svg" alt="">Скачать образец отчета о проверке объекта в <span class="--blue">новостройке</span> и застройщика </a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="wrapper">
                        <div class="section__big-text --mgt40 --mgb20 for-pop-up">
                            <p>ВАША ВЫГОДА</p>
                        </div>
                        <h3 class="--mgb40">вы покупаете квартиру <span class="--blue">без рисков <br>и негативных последствий!</span></h3>
                        <div class="section__content-changer g-flex-column" id="download_4up" style="width: calc(100% + 80px);margin-left: -40px;">
                            <div class="section__content-tabs -m-left g-flex-justify-center g-flex-align-center fit-content center --mgb60">
                                <div class="section__content-tab active">
                                    Вторичка
                                </div>
                                <div class="section__content-tab">
                                    Новостройка
                                </div>
                            </div>
                            <svg class="--blue" viewBox="0 0 32 32">
                                <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="section__content-slider slider" id="down">
                                <div class="section__content-slide">
                                    <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30 --key">
                                        <h3>Скачать <span class="--blue">образец отчета о проверке квартиры на вторичке</span></h3>
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
                                        <button type="submit" class="btn --blue">Скачать</button>
                                        <label class="inputCheckbox">
                                            <input type="checkbox" required checked>
                                            <span>Нажимая на кнопку "Скачать", вы даете согласие на обработку персональных данных</span>
                                        </label>
                                    </form>
                                </div>
                                <div class="section__content-slide">
                                    <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                                        <h3>Скачать <span class="--blue">образец отчета о проверке объекта <br>в новостройке и застройщика</span></h3>
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
                                        <button type="submit" class="btn --blue">Скачать</button>
                                        <label class="inputCheckbox">
                                            <input type="checkbox" required checked>
                                            <span>Нажимая на кнопку "Скачать", вы даете согласие на обработку персональных данных</span>
                                        </label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <script>
                    $("#downVtor, #downNovstr").on("click", function(){
                        $("#down").slick("o")
                    });
                </script>
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
                        <h3 class="title d-block"><span class="--blue --pd0">Оптимизация расходов и налогов</span> по сделке</h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/ursoprovozhd-advantages--5.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№5</div>
                                    <p>Наш юрист позаботится о том, чтобы сделка была не только безопасной, но и выгодной. <br>Он <b>оптимизирует все расходы</b> и налоги по вашей сделке, включая<br><b class="--blue">расходы на</b>:</p>
                                    <ul class="--mgb30 --min-lh">
                                        <li>услуги банковских и страховых организаций (аренда ячейки, аккредитив, проверка и пересчет купюр, страхование жизни и объекта по ипотеке, титульное страхование),</li>
                                        <li>нотариуса,</li>
                                        <li>оценщика,</li>
                                        <li>сбор и ускорение готовности документов (БТИ, согласование перепланировки, выписка из ЕГРН и т.п.),</li>
                                    </ul>
                                    <p><b class="--blue">налоги на:</b></p>
                                    <ul class="--mgb30 --min-lh">
                                        <li>доходы физических лиц (в т.ч. если вы являетесь налоговым нерезидентом),</li>
                                        <li>прибыль юридических лиц,</li>
                                        <li>имущество,</li>
                                        <li>роскошь,</li>
                                        <li>дарение.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pop-up__header_bottom">
                                <p>После сделки наш юрист подскажет вам, как и когда правильно отчитаться по налогам и получить имущественный налоговый вычет.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="wrapper">
                        <div class="section__big-text --mgt40 --mgb20 for-pop-up">
                            <p>ВАША ВЫГОДА</p>
                        </div>
                        <h3 class="--mgb40">сопровождение сделки проходит <span class="--blue">легко <br>и с ощутимой выгодой</span></h3>
                        <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30 --key">
                            <h3>Заказать <span class="--blue">услугу юридического сопровождения сделки</span></h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --blue">Заказать услугу</button>
                            <label>
                                <select multiple="multiple" data-placeholder="Тип услуги*" required>
                                    <option value="">&nbsp;</option>
                                    <option>покупка новостройки</option>
                                    <option>покупка вторички</option>
                                    <option>продажа вторички</option>
                                    <option>альтернативная сделка</option>
                                    <option>первичная консультация</option>
                                </select>
                            </label>
                            <label>
                                <input type="text" placeholder="Комментарии">
                            </label>
                            <label class="inputCheckbox">
                                <input type="checkbox" required checked>
                                <span>Нажимая на кнопку "Заказать услугу", вы даете согласие на обработку персональных данных</span>
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
                        <h3 class="title d-block"><span class="--blue --pd0">удобные и прозрачные</span> тарифы</h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/ursoprovozhd-advantages--6.png" alt="">
                                </div>
                                <div class="pop-up__header_text">
                                    <div class="num">№6</div>
                                    <p>Наши тарифы всегда находятся в открытом доступе на сайте. Стоимость юридического сопровождения составляет <b>1% от стоимости продаваемого или приобретаемого вами объекта.</b> Также у комиссии есть верхнее ограничение в рамках выбранного ценового диапазона, поэтому <b>вы можете увеличивать свой бюджет по сделке, не переплачивая за наши услуги.</b></p>
                                    <p>Юридическое сопровождение мы осуществляем по минимальной <b>предоплате в размере 20 000 руб.</b> Оставшуюся часть суммы Вы вносите только при условии выхода на сделку.</p>
                                </div>
                            </div>
                            <div class="pop-up__header_bottom">
                                <p>Услуги, связанные с одобрением сделки в органах опеки и одобрением объекта в ипотечной сделке, <b>оплачиваются дополнительно в размере 20 000 рублей за каждую услугу.</b></p>
                                <a href="tarifs.html#hash__ursopr" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt60">
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
                        <h3 class="--mgb40">вы <span class="--blue">платите</span> только тогда, <br><span class="--blue">когда результат вас устроил</span></h3>
                        <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30 --key">
                            <h3>Заказать консультацию <span class="--blue">юриста по недвижимости</span></h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --blue">Заказать консультацию</button>
                            <label>
                                <select multiple="multiple" data-placeholder="Тип услуги*" required>
                                    <option value="">&nbsp;</option>
                                    <option>покупка новостройки</option>
                                    <option>покупка вторички</option>
                                    <option>продажа вторички</option>
                                    <option>альтернативная сделка</option>
                                    <option>первичная консультация</option>
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

    <div class="transparent_pop-up transparent_pop-up1 place-agent-choose g-flex-align-center g-flex-justify-center" id="ursoprovozhd-popup">
        <div class="wrapper">
            <div class="text-block">

                <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Заказать консультацию <span class="--blue">юриста по недвижимости</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <button type="submit" class="btn --blue">Заказать консультацию</button>
                    <label>
                        <select multiple="multiple" data-placeholder="Тип услуги*" required>
                            <option value="">&nbsp;</option>
                            <option>покупка новостройки</option>
                            <option>покупка вторички</option>
                            <option>продажа вторички</option>
                            <option>альтернативная сделка</option>
                            <option>первичная консультация</option>
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

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>