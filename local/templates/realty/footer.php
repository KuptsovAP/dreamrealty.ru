<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? if ($APPLICATION->GetCurPage() != "/") : ?>
<? elseif($APPLICATION->GetCurPage() != "/about/"): ?>
<? elseif($APPLICATION->GetCurPage() != "/alternative/advantages.php"): ?>
<? else: ?>    
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
                <a href="dream-podcasts.html" target="_blank" class="section__edge-button wow fadeInLeft   g-flex-align-center --mgt30">
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
  
  
 <!-- <?
    $form = $APPLICATION->GetProperty("form_feedback");

    if ($form) {
        include_once('forms/'.$form.'.php');
    }

    ?>!-->
    <section class="section feedbacks">
        <div class="wrapper">
            <div class="section__big-text --mgb40">
                <p>Репутация и суперсила</p>
            </div>
            <h2 class="section__title --mgb40"><span class="--<? $APPLICATION->ShowProperty("color") ?>">Отзывы</span> клиентов</h2>
            <div class="section__feedback-slider slider">

                <?php
                function cut($string, $length)
                {
                    $string = mb_substr($string, 0, $length, 'UTF-8'); // обрезаем и работаем со всеми кодировками и указываем исходную кодировку
                    $position = mb_strrpos($string, ' ', 'UTF-8'); // определение позиции последнего пробела. Именно по нему и разделяем слова
                    $string = mb_substr($string, 0, $position, 'UTF-8'); // Обрезаем переменную по позиции
                    return $string . '...';
                }

                $MY_HL_BLOCK_ID = 7;
                CModule::IncludeModule('highloadblock');
                $entity_data_class = GetEntityDataClass($MY_HL_BLOCK_ID);
                $rsData = $entity_data_class::getList(array(
                    'select' => array('*'),
                    'order' => array("UF_ORDER" => "ASC"),
                    // 'filter' => array("ID" => $video),
                ));
                $i = 0;
                while ($el = $rsData->fetch()) {
                    //  print_r($el);
                    if ($i == 0) {
                ?>
                        <div class="section__feedback-slide g-flex-between g-flex-align-stretch">
                        <?
                    }
                    $name = $el['UF_NAME'];
                    $text = $el["UF_TEXT"];
                    if ($i == 1) {
                        $text = cut($text, 200);
                    }
                    // var_dump($text);
                    //   $title =  $el['UF_TITLE'];
                        ?>
                        <div class="section__feedback-col g-flex-column g-flex-between">
                            <div class="section__feedback-block">
                                <p><?= $text ?></p>
                                <a class="fit-content g-flex-align-center --mgt16 --<? $APPLICATION->ShowProperty("color") ?>" href="/feedbacks/">
                                    Читать далее
                                    <svg class="icon">
                                        <use xlink:href="#ArrowSquare"></use>
                                    </svg>
                                </a>
                                <span class="g-flex-align-center g-flex-justify-end --mgt16">С уважением, <?= $name ?>.</span>
                            </div>
                            <?php
                            if ($i == 1) {
                            ?>
                                <div class="section__feedback-block share --<? $APPLICATION->ShowProperty("color") ?>">
                                    <p>Хотите поделиться своими впечатлениями от работы с нами прямо сейчас?</p>
                                    <div class="section__feedback-block_buttons --mgt48 g-flex-between g-flex-align-center">
                                        <a href="#feedbackPop" class="btn --<? $APPLICATION->ShowProperty("color") ?> --white js__open-hash_pop-up">Поделиться</a>
                                        <div class="stars g-flex-align-center">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                    </div>
                                </div>
                            <?
                            }
                            ?>
                        </div>
                        <?
                        $i++;
                        if ($i > 1) {
                            $i = 0;
                        ?>
                        </div>
                <?
                        }
                    } ?>

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
            <a href="/feedbacks/" target="_blank" class="section__edge-button wow fadeInLeft   g-flex-align-center">
                <div class="arrow g-flex-align-center g-flex-justify-center">
                    <svg class="icon">
                        <use xlink:href="#ArrowSquare"></use>
                    </svg>
                </div>
                Все отзывы
            </a>
        </div>
    </section>
    <?
    $advantages = $APPLICATION->GetProperty("advantages");

    if ($advantages) {
        $advantages = explode(',', $advantages);
        $min_text = $APPLICATION->GetProperty("min-text");
    ?>

        <section class="section advantage-cards relative grayHalfBG --pdb60" id="advantageBuy">
            <div class="wrapper">
                <h2 class="section__title --mgb60"><? $APPLICATION->ShowProperty("title_advanced") ?></h2>
                <div class="section__advantage-cards_slider slider <? if ($min_text) {?>--min-text<? } ?>">
                    <?php
                    foreach ($advantages as $video) {
                        $arSelect = array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM", "PROPERTY_*");
                        $arFilter = array(
                            'IBLOCK_ID' => 6, // выборка элементов из инфоблока с ИД равным «5»
                            'ACTIVE' => 'Y',
                            'ID' => $video // выборка только активных элементов
                        );

                        $res = CIBlockElement::GetList(array(), $arFilter, false, array("nPageSize" => 50), $arSelect);

                        // вывод элементов
                        while ($el = $res->GetNextElement()) {
                            $arFields = $el->GetFields();
                          //  var_dump($arFields);

                            $URL = CFile::GetFileArray($arFields["PROPERTY_24"]);

                        //	var_dump($URL);
                    ?>
                            <div class="section__advantage-cards_slide">
                                <a href="<?=$arFields["PROPERTY_10"]?>" class="section__advantage-card relative g-flex-column g-flex-justify-end --<? $APPLICATION->ShowProperty("color") ?>" style="background-image: url(<?=$URL['SRC']?>);">
                                    <div class="g-flex-align-center g-flex-justify-center">
                                        <p><?=htmlspecialcharsBack ($arFields["PROPERTY_22"]["TEXT"])?></p>
                                    </div>
                                    <span class="num"><?=(int)$arFields["PROPERTY_25"]?></span>
                                </a>
                            </div>
                        <?
                            // $element['NAME'];
                            // и другие свойства элемента

                            /*  print_r($el);
                        $URL = CFile::GetFileArray($el['UF_PHOTO']);
                        $audio = CFile::GetFileArray($el['UF_FILE']);
                        //	var_dump($URL);
                        $URL = $URL["SRC"];
                        $video = $el['UF_URL'];
                        $audio = $audio["SRC"];
                        $title =  $el['UF_TITLE'];*/
                        }
                        ?>
                    <?php }
                    ?>



                   
                </div>
                <div class="section__feedback_navs g-flex-justify-end g-flex-align-stretch slider-navs <? if(count($advantages)<3):?>g-flex-xs <? endif ?>">
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
                <a href="<? $APPLICATION->ShowProperty("advantages_page") ?>" target="_blank" class="section__edge-button wow fadeInLeft   g-flex-align-center --mgt48">
                    <div class="arrow g-flex-align-center g-flex-justify-center">
                        <svg class="icon">
                            <use xlink:href="#ArrowSquare"></use>
                        </svg>
                    </div>
                    Все преимущества
                </a>
            </div>
        </section>
    <? }  ?>

    <section class="section cta-big-text">
        <div class="wrapper relative">
            <div class="section__big-text --mgb60">
                <p>Остались <br>вопросы?</p>
            </div>
            <a href="#feedbackPop2" class="btn section__absolute-button right --<? $APPLICATION->ShowProperty("color") ?> js--transparent_pop-up">
                <svg class="icon">
                    <use xlink:href="#PhoneCall"></use>
                </svg>
                Заказать звонок
            </a>
        </div>
    </section>
    </main>
    <?php endif ?>
    <? if ($APPLICATION->GetCurPage() != "/") : ?>
    <footer>
        <div class="wrapper g-flex-column g-flex-align-stretch --pdt48">
            <div class="footer__top g-flex-between g-flex-align-start --pdb40">
                <a href="/" class="footer__logo">
                    <img loading="lazy" src="<?= SITE_TEMPLATE_PATH ?>/assets/svg/LogoVertical.svg" alt="">
                </a>
                <div class="footer__menu g-flex-align-start">
                    <div class="footer__menu_item g-flex-column">
                        <span class="footer__menu_title">для тех:</span>
                    </div>
                    <div class="footer__menu_item g-flex-column">
                        <span class="footer__menu_title --mgb30 --lightGreen">у кого есть <br>мечта</span>
                        <ul class="footer__menu_links">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "top",
                                array(
                                    "ROOT_MENU_TYPE" => "dream",
                                    "MENU_CACHE_TYPE" => "Y",
                                    "MENU_CACHE_TIME" => "36000000",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => array(),
                                    "MAX_LEVEL" => "1",
                                    "CHILD_MENU_TYPE" => "left",
                                    "USE_EXT" => "N",
                                    "ALLOW_MULTI_SELECT" => "N"
                                ),
                                false
                            ); ?>
                        </ul>
                    </div>
                    <div class="footer__menu_item g-flex-column">
                        <span class="footer__menu_title --mgb30 --lightBlue">кому важны <br>детали</span>
                        <ul class="footer__menu_links">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "top",
                                array(
                                    "ROOT_MENU_TYPE" => "details",
                                    "MENU_CACHE_TYPE" => "Y",
                                    "MENU_CACHE_TIME" => "36000000",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => array(),
                                    "MAX_LEVEL" => "1",
                                    "CHILD_MENU_TYPE" => "left",
                                    "USE_EXT" => "N",
                                    "ALLOW_MULTI_SELECT" => "N"
                                ),
                                false
                            ); ?>
                        </ul>
                    </div>
                    <div class="footer__menu_item g-flex-column">
                        <span class="footer__menu_title --mgb30 --lightOrange">кто ищет <br>своих</span>
                        <ul class="footer__menu_links">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "top",
                                array(
                                    "ROOT_MENU_TYPE" => "find",
                                    "MENU_CACHE_TYPE" => "Y",
                                    "MENU_CACHE_TIME" => "36000000",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => array(),
                                    "MAX_LEVEL" => "1",
                                    "CHILD_MENU_TYPE" => "left",
                                    "USE_EXT" => "N",
                                    "ALLOW_MULTI_SELECT" => "N"
                                ),
                                false
                            ); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__bottom g-flex-between g-flex-align-center --pdt48 --pdb60">
                <div class="footer__copyright"><?= $options['copyright'] ?></div>
                <div class="footer__contacts g-flex-align-center">
                    <a href="https://www.google.com/maps/place/%D0%A6%D0%B2%D0%B5%D1%82%D0%BD%D0%BE%D0%B9+%D0%B1-%D1%80,+26+%D1%81%D1%82%D1%80%D0%BE%D0%B5%D0%BD%D0%B8%D0%B5+1,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+127051/@55.7714131,37.6202935,17z/data=!3m1!4b1!4m5!3m4!1s0x46b54a6be6370f97:0x445730532773f6d7!8m2!3d55.7714101!4d37.6224822" class="g-flex-align-center">
                        <svg class="icon">
                            <use xlink:href="#Place"></use>
                        </svg>
                        <?= $options['adress'] ?>
                    </a>
                    <a href="tel:<?= $options['phone'] ?>" class="g-flex-align-center">
                        <svg class="icon">
                            <use xlink:href="#PhoneCall"></use>
                        </svg>
                        <?= $options['phone'] ?>
                    </a>
                </div>
                <div class="footer__social g-flex-align-center">
                    <a href="<?= $options['tg'] ?>">
                        <svg class="icon">
                            <use xlink:href="#Telegram"></use>
                        </svg>
                    </a>
                    <a title="* Деятельность организации «Meta» признана экстремистской и запрещена на территории Российской Федерации"
                       target="_blank" href="<?= $options['ig'] ?>">
                        <svg class="icon">
                            <use xlink:href="#Instagram"></use>
                        </svg>
                    </a>
                    <a target="_blank" href="<?= $options['youtube'] ?>">
                        <svg class="icon">
                            <use xlink:href="#YouTube"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="submitRequest">
        <div class="wrapper">
            <div class="text-block">
                <form class="g-flex-wrap g-flex-between g-flex-align-center --key --mgt30">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Выбрать <span class="--red">районного агента </span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <button type="submit" class="btn --red">Отправить заявку</button>
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
                        <span>Нажимая на кнопку "Отправить заявку", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                    </label>
                </form>
            </div>
        </div>
    </div>
    <?
    $form = $APPLICATION->GetProperty("form_feedback");

    if ($form) {
        include_once('forms/'.$form.'-popup.php');
    }
    ?>
    <div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="feedbackPop3call">
        <div class="wrapper">
            <div class="text-block">

                <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt90 full-width" enctype="multipart/form-data" method="post">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Заказать <span class="--<? $APPLICATION->ShowProperty("color") ?>">звонок</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Заказать звонок</button>
                    <label class="w66 w100-xs">
                        <input type="text" placeholder="Комментарий">
                    </label>
                    <label class="inputCheckbox">
                        <input type="checkbox" required checked>
                        <span>Нажимая на кнопку "Заказать звонок", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                    </label>
                </form>
            </div>
        </div>
    </div>

    <!--sendReq456  Заказать звонок-->
    <div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="sendReq456">
        <div class="wrapper">
            <div class="text-block">

                <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt90 full-width" enctype="multipart/form-data" method="post">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Заказать <span class="--<? $APPLICATION->ShowProperty("color") ?>">звонок</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Заказать звонок</button>
                    <label class="w66 w100-xs">
                        <input type="text" placeholder="Комментарий">
                    </label>
                    <label class="inputCheckbox">
                        <input type="checkbox" required checked>
                        <span>Нажимая на кнопку "Заказать звонок", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                    </label>
                </form>
            </div>
        </div>
    </div>


    <div class="advantages-pop-up pop-up g-flex-column " id="feedbackPop2rent">
        <div class="content wrapper">
            <section class="section pop-up__header">
                <div class="pop-up__close">
                    <svg class="icon">
                        <use xlink:href="#Close"></use>
                    </svg>
                </div>
                <div class="section__content-changer g-flex-column">
                    <div class="section__content-tabs g-flex-between center g-flex-align-center" id="form">
                        <div class="section__content-tab active">
                            Жилая
                        </div>
                        <div class="section__content-tab">
                            Коммерческая
                        </div>
                    </div>
                    <svg class="--lightBlue" viewBox="0 0 32 32">
                        <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="section__content-slider slider">
                        <div class="section__content-slide">
                            <form class="g-flex-wrap g-flex-between g-flex-align-center">
                                <h3>Выбрать <span class="--lightBlue">районного агента</span></h3>
                                <label>
                                    <input type="text" placeholder="Имя*" required>
                                </label>
                                <label>
                                    <input type="tel" class="phone" placeholder="Телефон*" required>
                                </label>
                                <button type="submit" class="btn --lightBlue">Отправить заявку</button>
                                <label>
                                    <select data-placeholder="Район аренды*" required>
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
                            <form class="g-flex-wrap g-flex-between g-flex-align-center">
                                <h3>Выбрать <span class="--lightBlue">агента по недвижимости</span></h3>
                                <label>
                                    <input type="text" placeholder="Имя*" required>
                                </label>
                                <label>
                                    <input type="tel" class="phone" placeholder="Телефон*" required>
                                </label>
                                <button type="submit" class="btn --lightBlue">Отправить заявку</button>
                                <label>
                                    <select data-placeholder="Район аренды*" required>
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
                                    <span>Нажимая на кнопку "Отправить заявку", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                                </label>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center old-popup-style" id="feedbackPop2">
        <div class="wrapper">
            <div class="text-block">

                <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt90 full-width" enctype="multipart/form-data" method="post">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Оставить <span class="--<? $APPLICATION->ShowProperty("color") ?>">отзыв</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Отправить отзыв</button>
                    <label class="w66 w100-xs">
                        <input type="text" placeholder="Комментарий">
                    </label>
                    <label class="inputCheckbox">
                        <input type="checkbox" required checked>
                        <span>Нажимая на кнопку "Отправить отзыв", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                    </label>
                </form>
            </div>
        </div>
    </div>
    <div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="feedbackPop8" role="document">
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
    <div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="feedbackPop">
        <div class="wrapper">
            <div class="text-block">
                
                <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt90 --key full-width" enctype="multipart/form-data" method="post">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Оставить <span class="--<? $APPLICATION->ShowProperty("color") ?>">отзыв</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" name="UF_NAME" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" name="UF_PHONE" required>
                    </label>
                    <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Отправить отзыв</button>
                    <label class="w66 w100-xs">
                        <input type="text" placeholder="Комментарий" name="UF_COMMENT">
                    </label>
                    <label class="inputCheckbox">
                        <input type="checkbox" required checked>
                        <span>Нажимая на кнопку "Отправить отзыв", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                    </label>
                </form>
            </div>
        </div>
    </div>
    <div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="sendReq">
        <div class="wrapper">
            <div class="text-block">

                <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Выбрать <span class="--<? $APPLICATION->ShowProperty("color") ?>">районного агента</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" name="UF_NAME" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*"  name="UF_PHONE" required>
                    </label>
                    <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Отправить заявку</button>
                    <label>
                        <select  multiple="multiple" data-placeholder="Район продажи*"  name="UF_AREA" required>
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
                        <input type="text" placeholder="Адрес, кол-во комнат"  name="UF_BUDROOMS">
                    </label>
                    <label class="inputCheckbox">
                        <input type="checkbox" required checked>
                        <span>Нажимая на кнопку "Отправить заявку", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                    </label>
                </form>
            </div>
        </div>
    </div>

    <div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="sendRayonAgent">
        <div class="wrapper">
            <div class="text-block">

                <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt40 --key">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Выбрать <span class="--green">районного агента</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <button type="submit" class="btn --green">Отправить заявку</button>
                    <label>
                        <select multple="miltple" data-placeholder="Район покупки*" required>
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
                        <span>Нажимая на кнопку "Отправить заявку", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                    </label>
                </form>
            </div>
        </div>
    </div>

    <div class="transparent_pop-up done_pop-up g-flex-align-center g-flex-justify-center">
        <div class="text-block">
            <div class="pop-up__close">
                <svg class="icon">
                    <use xlink:href="#Close"></use>
                </svg>
            </div>
            Спасибо за ваше обращение! <br>Мы свяжемся с вами в ближайшее время!
        </div>
    </div>

    <!--Спасибо за ваш отзыв-->
    <div class="transparent_pop-up done_pop-up-review g-flex-align-center g-flex-justify-center">
        <div class="text-block">
            <div class="pop-up__close">
                <svg class="icon">
                    <use xlink:href="#Close"></use>
                </svg>
            </div>
            Спасибо за ваш отзыв! <br>
        </div>
    </div>

    <div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="feedbackPop3">
        <div class="wrapper">
            <div class="text-block">

                <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt90 full-width" enctype="multipart/form-data" method="post">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Оставить <span class="--lightViolet">заявку</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <button type="submit" class="btn --lightViolet">Отправить заявку</button>
                    <label class="w66 w100-xs">
                        <input type="text" placeholder="Комментарий">
                    </label>
                    <label class="inputCheckbox">
                        <input type="checkbox" required checked>
                        <span>Нажимая на кнопку "Отправить заявку", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                    </label>
                </form>
            </div>
        </div>
    </div>
    <script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/vendor-1b267619c4812cc46ee281747884ca50.js?v=<?= rand(0, 255) ?>"></script>
    <script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/main.js?v=<?= rand(0, 255) ?>"></script>
    <? if ($APPLICATION->GetCurPage() == "/pages/catalog-vtor/") : ?>
  
    <script>
        let map, table = ``, list = ``;
        function initMap(){
            map = new google.maps.Map(document.getElementById('buildings-map'), {
                center: {
                    lat: 55.7725, lng: 37.6227065
                },
                zoom: 15,
                zoomControl: false,
                mapTypeControl: false,
                scaleControl: false,
                streetViewControl: false,
                fullscreenControl: false,
                styles: [
                {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#444444"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#f2f2f2"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#d5f0c9"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 45
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#46bcec"
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#b2eafe"
                        }
                    ]
                }
            ]
            });
        }
        function shortenNumber(num, decimalPlaces) {
            var str, suffix = '';
            decimalPlaces = decimalPlaces || 0;
            num = +num;
            var factor = Math.pow(10, decimalPlaces);
            if (num < 1000) {
                str = num;
            } else if (num < 1000000) {
                str = Math.floor(num / (1000 / factor)) / factor;
                suffix = ' тыс.';
            } else if (num < 1000000000) {
                str = Math.floor(num / (1000000 / factor)) / factor;
                suffix = ' млн.';
            }
            return str + suffix;
        }

        function setfav(elem) {
            console.log(elem.dataset.itemId);
            if(elem.classList.contains('active')){
                elem.classList.remove('active');
                setCookie(elem.dataset.itemId,'0',7);
            }else {
                elem.classList.add('active');
                setCookie(elem.dataset.itemId,'1',7);
                
        }

        }

        function setCookie(name,value,days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days*24*60*60*1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "")  + expires + "; path=/";
        }
        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1,c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            }
            return null;
        }       
        
        $(function() {
            var filter = '<?php print_r($_SERVER['QUERY_STRING']);?>';
                $.ajax({
                    type: "POST",
                    url: "/local/catalog_json.php",
                    data: filter
                    }).done((data) => {
                var max = 6, current = 0;
                
                $('#lider_buildings').slick('unslick');
                var data = JSON.parse(data);
                console.log(data);
                Object.keys(data).forEach(function(obj) {
                    
                    if(max >= current){
                        var object = data[obj];
                        console.log(data[obj]);
                        var images = ``;
                        var id_coockies = getCookie(object.id);
                        var id_coockies_class = '';
                        if (id_coockies == 1) {id_coockies_class = 'active';}
                         Object.keys(object.images.special).forEach(function(image) {
                            var _images = (object.special)? data[obj].images.special[image]:data[obj].images.original[image];
                            images += `<div class="section__product-slide" style="${(object.special)?'border-radius: 25px 0 0 25px !important;overflow: hidden':'border-radius: 25px 25px 0px 0px !important;overflow: hidden'}"> 
                                    <img src="${_images}" style="" alt="">
                                </div>`;
                        });

                        table += `
                        <div class="section_product ${(object.special)?'--special':''}">
                            <button class="share">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.2343 3.99994C22.2343 5.79492 20.7793 7.25006 18.9843 7.25006C17.1893 7.25006 15.7344 5.79492 15.7344 3.99994C15.7344 2.20514 17.1893 0.75 18.9843 0.75C20.7793 0.75 22.2343 2.20514 22.2343 3.99994Z" fill="currentColor"/>
                                    <path d="M18.9843 8.00006C16.7783 8.00006 14.9844 6.20599 14.9844 3.99994C14.9844 1.79407 16.7783 0 18.9843 0C21.1904 0 22.9843 1.79407 22.9843 3.99994C22.9843 6.20599 21.1904 8.00006 18.9843 8.00006ZM18.9843 1.5C17.6053 1.5 16.4844 2.62207 16.4844 3.99994C16.4844 5.37799 17.6053 6.50006 18.9843 6.50006C20.3633 6.50006 21.4843 5.37799 21.4843 3.99994C21.4843 2.62207 20.3633 1.5 18.9843 1.5Z" fill="currentColor"/>
                                    <path d="M22.2343 20.0001C22.2343 21.7949 20.7793 23.25 18.9843 23.25C17.1893 23.25 15.7344 21.7949 15.7344 20.0001C15.7344 18.2051 17.1893 16.7499 18.9843 16.7499C20.7793 16.7499 22.2343 18.2051 22.2343 20.0001Z" fill="currentColor"/>
                                    <path d="M18.9843 24C16.7783 24 14.9844 22.2059 14.9844 20.0001C14.9844 17.794 16.7783 15.9999 18.9843 15.9999C21.1904 15.9999 22.9843 17.794 22.9843 20.0001C22.9843 22.2059 21.1904 24 18.9843 24ZM18.9843 17.4999C17.6053 17.4999 16.4844 18.622 16.4844 20.0001C16.4844 21.3779 17.6053 22.5 18.9843 22.5C20.3633 22.5 21.4843 21.3779 21.4843 20.0001C21.4843 18.622 20.3633 17.4999 18.9843 17.4999Z" fill="currentColor"/>
                                    <path d="M8.23444 12C8.23444 13.795 6.7793 15.2499 4.98431 15.2499C3.18951 15.2499 1.73438 13.795 1.73438 12C1.73438 10.205 3.18951 8.75006 4.98431 8.75006C6.7793 8.75006 8.23444 10.205 8.23444 12Z" fill="currentColor"/>
                                    <path d="M4.98431 15.9999C2.77844 15.9999 0.984375 14.2061 0.984375 12C0.984375 9.79395 2.77844 8.00006 4.98431 8.00006C7.19037 8.00006 8.98444 9.79395 8.98444 12C8.98444 14.2061 7.19037 15.9999 4.98431 15.9999ZM4.98431 9.50006C3.60535 9.50006 2.48438 10.6219 2.48438 12C2.48438 13.3781 3.60535 14.4999 4.98431 14.4999C6.36346 14.4999 7.48444 13.3781 7.48444 12C7.48444 10.6219 6.36346 9.50006 4.98431 9.50006Z" fill="currentColor"/>
                                    <path d="M7.34572 11.5201C6.99764 11.5201 6.65963 11.339 6.47561 11.0151C6.2026 10.5361 6.37069 9.92506 6.84969 9.65095L16.1286 4.36103C16.6076 4.08601 17.2186 4.2541 17.4927 4.73494C17.7657 5.21394 17.5976 5.82496 17.1186 6.09907L7.83956 11.389C7.68355 11.478 7.51363 11.5201 7.34572 11.5201Z" fill="currentColor"/>
                                    <path d="M16.6231 19.7701C16.455 19.7701 16.2851 19.728 16.1291 19.639L6.85004 14.3491C6.37104 14.076 6.20313 13.465 6.47614 12.9849C6.74805 12.505 7.35999 12.336 7.84009 12.611L17.1191 17.9009C17.5981 18.174 17.7661 18.785 17.493 19.2651C17.3081 19.589 16.9701 19.7701 16.6231 19.7701Z" fill="currentColor"/>
                                </svg>
                            </button>
                            <div class="section__product-slider slider" id="product${object.id}slider">
                                ${images}
                            </div>
                            <div class="section_product_content">
                                ${(object.special)?'<div class="special">Cпецпредложение</div>':''}
                                <a href="/pages/catalog-vtor/detail.php?id=${object.id}" class="title">${object.title} <div class="size">${object.footage} м<sup>2</sup></div></a>
                                <div class="metro_walk">
                                    <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.69915 1L6 6.96737L3.33567 1L1 9H2.7284L3.73619 5.00932L5.72138 9H6.26121L8.24639 4.97203L9.21936 9H11L8.69915 1Z" fill="#4B4A4A" stroke="#4B4A4A" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <${object.metro.name}
                                    <span>
                                        <svg width="10" height="22" viewBox="0 0 10 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.81755 11.6942L7.68122 9.2639C7.54818 9.11261 7.42586 8.80086 7.4197 8.59647L7.34111 6.07476V6.0017C7.34111 5.61313 7.03449 5.29692 6.6577 5.29692H4.56648H3.73546C3.39876 5.29692 3.02312 5.54289 2.87983 5.85698L0.0646496 12.0238C-0.0132588 12.1949 -0.0210043 12.3858 0.0427804 12.5623C0.106565 12.7385 0.234134 12.8776 0.401569 12.9537L0.816397 13.1423C0.904785 13.1825 0.999094 13.2029 1.09682 13.2029C1.36495 13.2029 1.61462 13.0458 1.7333 12.8026L3.05205 10.097V12.8165C3.04658 12.8322 3.03861 12.8465 3.0336 12.8625L0.805007 20.0602C0.712292 20.36 0.740539 20.6755 0.884738 20.9485C1.02894 21.2215 1.27041 21.4169 1.56518 21.4989L1.71417 21.5405C1.81167 21.5677 1.91281 21.5816 2.01441 21.5816C2.52719 21.5816 2.99305 21.2337 3.1475 20.7352L5.22984 14.0097L5.96838 15.8752C6.14857 16.3303 6.34311 17.1272 6.39323 17.6158L6.74655 21.0507C6.80327 21.6006 7.22493 21.9998 7.74933 21.9998C7.83522 21.9998 7.92246 21.989 8.00835 21.9676L8.15847 21.93C8.75622 21.7808 9.17857 21.1475 9.09997 20.5186L8.57671 16.3303C8.51019 15.7982 8.28763 14.9649 8.08056 14.4727L7.37392 12.7944C7.3648 12.7725 7.35182 12.7528 7.34134 12.7317V11.5944L8.61476 12.9654C8.74141 13.1019 8.9109 13.1771 9.09177 13.1771C9.2747 13.1771 9.44555 13.1005 9.57267 12.9614L9.80821 12.7035C10.0602 12.4274 10.0645 11.975 9.81755 11.6942Z" fill="#4B4A4A"/>
                                            <path d="M5.38665 4.69972C6.64321 4.69972 7.66536 3.6456 7.66536 2.34974C7.66536 1.05412 6.64321 0 5.38665 0C4.13032 0 3.1084 1.05412 3.1084 2.34974C3.10817 3.6456 4.13032 4.69972 5.38665 4.69972Z" fill="#4B4A4A"/>
                                        </svg>
                                        ${object.metro.walk} мин
                                    </span>
                                </div>
                                <div class="adress">
                                    <svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.76471 4.84615C8.76471 8.30769 4.88235 11 4.88235 11C4.88235 11 1 8.30769 1 4.84615C1 3.82609 1.40903 2.84781 2.13711 2.12651C2.8652 1.40522 3.85269 1 4.88235 1C5.91202 1 6.89951 1.40522 7.62759 2.12651C8.35567 2.84781 8.76471 3.82609 8.76471 4.84615Z" fill="#4B4A4A" stroke="#4B4A4A" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M4.88204 6.38462C5.73971 6.38462 6.43498 5.69582 6.43498 4.84616C6.43498 3.99649 5.73971 3.30769 4.88204 3.30769C4.02438 3.30769 3.3291 3.99649 3.3291 4.84616C3.3291 5.69582 4.02438 6.38462 4.88204 6.38462Z" fill="white"/>
                                    </svg>
                                    ${object.address}
                                </div>
                                <div class="floors">
                                    <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 0.5C1 0.223858 1.22386 0 1.5 0H5.5C5.77614 0 6 0.223858 6 0.5V9.5C6 9.77614 5.77614 10 5.5 10H1V0.5Z" fill="#4B4A4A"/>
                                        <path d="M8.9999 10.1H9.0999V9.99999V4.49999C9.0999 4.16862 8.83127 3.89999 8.4999 3.89999H4.4999C4.16853 3.89999 3.8999 4.16862 3.8999 4.49999V9.99999V10.1H3.9999H8.9999Z" fill="#4B4A4A" stroke="white" stroke-width="0.2"/>
                                        <path d="M9.75 10H0.25C0.111929 10 0 10.1119 0 10.25C0 10.3881 0.111929 10.5 0.25 10.5H9.75C9.88807 10.5 10 10.3881 10 10.25C10 10.1119 9.88807 10 9.75 10Z" fill="#4B4A4A"/>
                                        <path d="M2.9 1H2.1C2.04477 1 2 1.04477 2 1.1V1.9C2 1.95523 2.04477 2 2.1 2H2.9C2.95523 2 3 1.95523 3 1.9V1.1C3 1.04477 2.95523 1 2.9 1Z" fill="white"/>
                                        <path d="M5.9 5H5.1C5.04477 5 5 5.04477 5 5.1V5.9C5 5.95523 5.04477 6 5.1 6H5.9C5.95523 6 6 5.95523 6 5.9V5.1C6 5.04477 5.95523 5 5.9 5Z" fill="white"/>
                                        <path d="M7.9 5H7.1C7.04477 5 7 5.04477 7 5.1V5.9C7 5.95523 7.04477 6 7.1 6H7.9C7.95523 6 8 5.95523 8 5.9V5.1C8 5.04477 7.95523 5 7.9 5Z" fill="white"/>
                                        <path d="M5.9 7H5.1C5.04477 7 5 7.04477 5 7.1V7.9C5 7.95523 5.04477 8 5.1 8H5.9C5.95523 8 6 7.95523 6 7.9V7.1C6 7.04477 5.95523 7 5.9 7Z" fill="white"/>
                                        <path d="M7.9 7H7.1C7.04477 7 7 7.04477 7 7.1V7.9C7 7.95523 7.04477 8 7.1 8H7.9C7.95523 8 8 7.95523 8 7.9V7.1C8 7.04477 7.95523 7 7.9 7Z" fill="white"/>
                                        <path d="M5.9 9H5.1C5.04477 9 5 9.04477 5 9.1V9.9C5 9.95523 5.04477 10 5.1 10H5.9C5.95523 10 6 9.95523 6 9.9V9.1C6 9.04477 5.95523 9 5.9 9Z" fill="white"/>
                                        <path d="M7.9 9H7.1C7.04477 9 7 9.04477 7 9.1V9.9C7 9.95523 7.04477 10 7.1 10H7.9C7.95523 10 8 9.95523 8 9.9V9.1C8 9.04477 7.95523 9 7.9 9Z" fill="white"/>
                                        <path d="M4.9 1H4.1C4.04477 1 4 1.04477 4 1.1V1.9C4 1.95523 4.04477 2 4.1 2H4.9C4.95523 2 5 1.95523 5 1.9V1.1C5 1.04477 4.95523 1 4.9 1Z" fill="white"/>
                                        <path d="M2.9 3H2.1C2.04477 3 2 3.04477 2 3.1V3.9C2 3.95523 2.04477 4 2.1 4H2.9C2.95523 4 3 3.95523 3 3.9V3.1C3 3.04477 2.95523 3 2.9 3Z" fill="white"/>
                                        <path d="M4.9 3H4.1C4.04477 3 4 3.04477 4 3.1V3.9C4 3.95523 4.04477 4 4.1 4H4.9C4.95523 4 5 3.95523 5 3.9V3.1C5 3.04477 4.95523 3 4.9 3Z" fill="white"/>
                                        <path d="M2.9 5H2.1C2.04477 5 2 5.04477 2 5.1V5.9C2 5.95523 2.04477 6 2.1 6H2.9C2.95523 6 3 5.95523 3 5.9V5.1C3 5.04477 2.95523 5 2.9 5Z" fill="white"/>
                                        <path d="M2.9 7H2.1C2.04477 7 2 7.04477 2 7.1V9.9C2 9.95523 2.04477 10 2.1 10H2.9C2.95523 10 3 9.95523 3 9.9V7.1C3 7.04477 2.95523 7 2.9 7Z" fill="white"/>
                                    </svg>

                                    ${object.floors} этаж из ${object.floors_total}
                                </div>
                                ${(object.special)?'<div class="description">' + object.description + '</div>':''}
                            </div>
                            <div class="section_product_footer">
                                <button data-item-id="${object.id}" onclick='return setfav(this)' id="add_fav_${object.id}" class="favorite ${id_coockies_class}">
                                    <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.4764 18.5623C16.0018 18.5623 15.617 18.9471 15.617 19.4217C15.617 19.6613 15.5358 19.8629 15.3757 20.021C15.2077 20.1869 14.964 20.283 14.7255 20.2811C14.4903 20.2781 14.2993 20.198 14.1417 20.036L9.61579 15.3849C9.45401 15.2186 9.23186 15.1248 8.99991 15.1248C8.76797 15.1248 8.54582 15.2186 8.38404 15.3849L3.85806 20.036C3.70161 20.1968 3.50924 20.277 3.26999 20.2812C3.02893 20.2861 2.78629 20.1901 2.61944 20.0261C2.46239 19.8718 2.38277 19.6735 2.38277 19.4367V3.43746C2.38277 2.48974 3.1538 1.71871 4.10152 1.71871H13.8983C14.846 1.71871 15.617 2.48974 15.617 3.43746V15.1678C15.617 15.6424 16.0018 16.0272 16.4764 16.0272C16.951 16.0272 17.3358 15.6424 17.3358 15.1678V3.43746C17.3357 1.54206 15.7937 0 13.8983 0H4.10152C2.20608 0 0.664062 1.54206 0.664062 3.43746V19.4367C0.664062 20.1316 0.930727 20.7764 1.4149 21.2521C1.90019 21.7289 2.56835 22 3.25448 22C3.26973 22 3.28503 21.9999 3.30028 21.9996C3.99599 21.9874 4.61478 21.7229 5.08984 21.2346L8.99991 17.2164L12.91 21.2346C13.3885 21.7263 14.0088 21.9909 14.7038 21.9997C15.4014 22.0069 16.088 21.7331 16.5833 21.244C17.0685 20.7649 17.3357 20.1177 17.3357 19.4217C17.3358 18.9471 16.951 18.5623 16.4764 18.5623Z"/>
                                    </svg>
                                </button>
                                <a href="/pages/catalog-vtor/detail.php?id=${object.id}" class="price"><span>${commaSeparateNumber(object.price)} <svg class="ruble"><use xlink:href="#Rouble"></use></svg></span><span>Подробнее</span></a>
                            </div>
                        </div>`;

                        if(3 >= current){
                            const marker = new google.maps.Marker({
                                position: { lat: object.map.point.lat, lng: object.map.point.lng},
                                map,
                                optimized: true,
                                visible: false
                            });

                            var content = shortenNumber(object.price, 1)+'<svg class="ruble"><use xlink:href="#Rouble"></use></svg>';
                            const windowMarker = new google.maps.InfoWindow({content: "<div class='marker' data-id='" + object.id + "'>" + content + "</div>"});
                            windowMarker.open(marker.getMap(), marker);

                            google.maps.event.addListener(windowMarker, 'domready', function() {
                                $(".gm-style-iw-a").removeClass("--fixed").addClass("--fixed");
                                $(".gm-style-iw-a div[data-id]").on("click", function(){
                                    var id = $(this).data("id");
                                    var obj = $(".section_product[data-id="+id+"]");
                                    $(".section_product, .gm-style-iw-a div").removeClass("active")
                                    $(".section_product[data-id="+id+"], .gm-style-iw-a div[data-id="+id+"]").addClass("active");
                                    map.panTo(new google.maps.LatLng(obj.data('mapx'), obj.data('mapy')));
                                });
                            });


                            list += `
                            <div class="section_product" data-id="${object.id}" data-mapx="${object.map.point.lat}" data-mapy="${object.map.point.lng}" data-campx="${object.map.camera.lat}" data-camy="${object.map.camera.lng}" data-camzoom="${object.map.camera.zoom}">
                                <div class="section__product-image">
                                    <img src="${object.images.original[0]}" alt="">
                                </div>
                                <div class="section_product_content">
                                    <a href="/pages/catalog-vtor/detail.php?id=${object.id}" class="title">${object.title} <div class="size">${object.footage} м<sup>2</sup></div></a>
                                    <div class="metro_walk">
                                        <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.69915 1L6 6.96737L3.33567 1L1 9H2.7284L3.73619 5.00932L5.72138 9H6.26121L8.24639 4.97203L9.21936 9H11L8.69915 1Z" fill="#4B4A4A" stroke="#4B4A4A" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        ${object.metro.name}
                                        <span>
                                            <svg width="10" height="22" viewBox="0 0 10 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.81755 11.6942L7.68122 9.2639C7.54818 9.11261 7.42586 8.80086 7.4197 8.59647L7.34111 6.07476V6.0017C7.34111 5.61313 7.03449 5.29692 6.6577 5.29692H4.56648H3.73546C3.39876 5.29692 3.02312 5.54289 2.87983 5.85698L0.0646496 12.0238C-0.0132588 12.1949 -0.0210043 12.3858 0.0427804 12.5623C0.106565 12.7385 0.234134 12.8776 0.401569 12.9537L0.816397 13.1423C0.904785 13.1825 0.999094 13.2029 1.09682 13.2029C1.36495 13.2029 1.61462 13.0458 1.7333 12.8026L3.05205 10.097V12.8165C3.04658 12.8322 3.03861 12.8465 3.0336 12.8625L0.805007 20.0602C0.712292 20.36 0.740539 20.6755 0.884738 20.9485C1.02894 21.2215 1.27041 21.4169 1.56518 21.4989L1.71417 21.5405C1.81167 21.5677 1.91281 21.5816 2.01441 21.5816C2.52719 21.5816 2.99305 21.2337 3.1475 20.7352L5.22984 14.0097L5.96838 15.8752C6.14857 16.3303 6.34311 17.1272 6.39323 17.6158L6.74655 21.0507C6.80327 21.6006 7.22493 21.9998 7.74933 21.9998C7.83522 21.9998 7.92246 21.989 8.00835 21.9676L8.15847 21.93C8.75622 21.7808 9.17857 21.1475 9.09997 20.5186L8.57671 16.3303C8.51019 15.7982 8.28763 14.9649 8.08056 14.4727L7.37392 12.7944C7.3648 12.7725 7.35182 12.7528 7.34134 12.7317V11.5944L8.61476 12.9654C8.74141 13.1019 8.9109 13.1771 9.09177 13.1771C9.2747 13.1771 9.44555 13.1005 9.57267 12.9614L9.80821 12.7035C10.0602 12.4274 10.0645 11.975 9.81755 11.6942Z" fill="#4B4A4A"/>
                                                <path d="M5.38665 4.69972C6.64321 4.69972 7.66536 3.6456 7.66536 2.34974C7.66536 1.05412 6.64321 0 5.38665 0C4.13032 0 3.1084 1.05412 3.1084 2.34974C3.10817 3.6456 4.13032 4.69972 5.38665 4.69972Z" fill="#4B4A4A"/>
                                            </svg>
                                            ${object.metro.walk} мин
                                        </span>
                                    </div>
                                    <div class="adress">
                                        <svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.76471 4.84615C8.76471 8.30769 4.88235 11 4.88235 11C4.88235 11 1 8.30769 1 4.84615C1 3.82609 1.40903 2.84781 2.13711 2.12651C2.8652 1.40522 3.85269 1 4.88235 1C5.91202 1 6.89951 1.40522 7.62759 2.12651C8.35567 2.84781 8.76471 3.82609 8.76471 4.84615Z" fill="#4B4A4A" stroke="#4B4A4A" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M4.88204 6.38462C5.73971 6.38462 6.43498 5.69582 6.43498 4.84616C6.43498 3.99649 5.73971 3.30769 4.88204 3.30769C4.02438 3.30769 3.3291 3.99649 3.3291 4.84616C3.3291 5.69582 4.02438 6.38462 4.88204 6.38462Z" fill="white"/>
                                        </svg>
                                        ${object.address}
                                    </div>
                                    <div class="floors">
                                        <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 0.5C1 0.223858 1.22386 0 1.5 0H5.5C5.77614 0 6 0.223858 6 0.5V9.5C6 9.77614 5.77614 10 5.5 10H1V0.5Z" fill="#4B4A4A"/>
                                            <path d="M8.9999 10.1H9.0999V9.99999V4.49999C9.0999 4.16862 8.83127 3.89999 8.4999 3.89999H4.4999C4.16853 3.89999 3.8999 4.16862 3.8999 4.49999V9.99999V10.1H3.9999H8.9999Z" fill="#4B4A4A" stroke="white" stroke-width="0.2"/>
                                            <path d="M9.75 10H0.25C0.111929 10 0 10.1119 0 10.25C0 10.3881 0.111929 10.5 0.25 10.5H9.75C9.88807 10.5 10 10.3881 10 10.25C10 10.1119 9.88807 10 9.75 10Z" fill="#4B4A4A"/>
                                            <path d="M2.9 1H2.1C2.04477 1 2 1.04477 2 1.1V1.9C2 1.95523 2.04477 2 2.1 2H2.9C2.95523 2 3 1.95523 3 1.9V1.1C3 1.04477 2.95523 1 2.9 1Z" fill="white"/>
                                            <path d="M5.9 5H5.1C5.04477 5 5 5.04477 5 5.1V5.9C5 5.95523 5.04477 6 5.1 6H5.9C5.95523 6 6 5.95523 6 5.9V5.1C6 5.04477 5.95523 5 5.9 5Z" fill="white"/>
                                            <path d="M7.9 5H7.1C7.04477 5 7 5.04477 7 5.1V5.9C7 5.95523 7.04477 6 7.1 6H7.9C7.95523 6 8 5.95523 8 5.9V5.1C8 5.04477 7.95523 5 7.9 5Z" fill="white"/>
                                            <path d="M5.9 7H5.1C5.04477 7 5 7.04477 5 7.1V7.9C5 7.95523 5.04477 8 5.1 8H5.9C5.95523 8 6 7.95523 6 7.9V7.1C6 7.04477 5.95523 7 5.9 7Z" fill="white"/>
                                            <path d="M7.9 7H7.1C7.04477 7 7 7.04477 7 7.1V7.9C7 7.95523 7.04477 8 7.1 8H7.9C7.95523 8 8 7.95523 8 7.9V7.1C8 7.04477 7.95523 7 7.9 7Z" fill="white"/>
                                            <path d="M5.9 9H5.1C5.04477 9 5 9.04477 5 9.1V9.9C5 9.95523 5.04477 10 5.1 10H5.9C5.95523 10 6 9.95523 6 9.9V9.1C6 9.04477 5.95523 9 5.9 9Z" fill="white"/>
                                            <path d="M7.9 9H7.1C7.04477 9 7 9.04477 7 9.1V9.9C7 9.95523 7.04477 10 7.1 10H7.9C7.95523 10 8 9.95523 8 9.9V9.1C8 9.04477 7.95523 9 7.9 9Z" fill="white"/>
                                            <path d="M4.9 1H4.1C4.04477 1 4 1.04477 4 1.1V1.9C4 1.95523 4.04477 2 4.1 2H4.9C4.95523 2 5 1.95523 5 1.9V1.1C5 1.04477 4.95523 1 4.9 1Z" fill="white"/>
                                            <path d="M2.9 3H2.1C2.04477 3 2 3.04477 2 3.1V3.9C2 3.95523 2.04477 4 2.1 4H2.9C2.95523 4 3 3.95523 3 3.9V3.1C3 3.04477 2.95523 3 2.9 3Z" fill="white"/>
                                            <path d="M4.9 3H4.1C4.04477 3 4 3.04477 4 3.1V3.9C4 3.95523 4.04477 4 4.1 4H4.9C4.95523 4 5 3.95523 5 3.9V3.1C5 3.04477 4.95523 3 4.9 3Z" fill="white"/>
                                            <path d="M2.9 5H2.1C2.04477 5 2 5.04477 2 5.1V5.9C2 5.95523 2.04477 6 2.1 6H2.9C2.95523 6 3 5.95523 3 5.9V5.1C3 5.04477 2.95523 5 2.9 5Z" fill="white"/>
                                            <path d="M2.9 7H2.1C2.04477 7 2 7.04477 2 7.1V9.9C2 9.95523 2.04477 10 2.1 10H2.9C2.95523 10 3 9.95523 3 9.9V7.1C3 7.04477 2.95523 7 2.9 7Z" fill="white"/>
                                        </svg>

                                        ${object.floors} /*этаж из ${object.floors_total}*/
                                    </div>
                                    <div class="table">
                                        <div class="tr">
                                            <div class="td">Площадь кухни</div>
                                            <div class="td">${object.kitchen_area} кв.м</div>
                                        </div>
                                        <div class="tr">
                                            <div class="td">Площадь по комнатам</div>
                                            <div class="td">${object.room_area[0]}/${object.room_area[1]}/${object.room_area[2]} кв.м</div>
                                        </div>
                                        <div class="tr">
                                            <div class="td">Высота потолков</div>
                                            <div class="td">${object.ceiling_height} м</div>
                                        </div>
                                        <div class="tr">
                                            <div class="td">Балкон/лождия</div>
                                            <div class="td">${object.balcony}</div>
                                        </div>
                                        <div class="tr">
                                            <div class="td">Тип дома</div>
                                            <div class="td">${object.house_type}</div>
                                        </div>
                                        <div class="tr">
                                            <div class="td">Год постройки</div>
                                            <div class="td">${object.year}</div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="section_product_footer">
                                    <button class="favorite">
                                        <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.4764 18.5623C16.0018 18.5623 15.617 18.9471 15.617 19.4217C15.617 19.6613 15.5358 19.8629 15.3757 20.021C15.2077 20.1869 14.964 20.283 14.7255 20.2811C14.4903 20.2781 14.2993 20.198 14.1417 20.036L9.61579 15.3849C9.45401 15.2186 9.23186 15.1248 8.99991 15.1248C8.76797 15.1248 8.54582 15.2186 8.38404 15.3849L3.85806 20.036C3.70161 20.1968 3.50924 20.277 3.26999 20.2812C3.02893 20.2861 2.78629 20.1901 2.61944 20.0261C2.46239 19.8718 2.38277 19.6735 2.38277 19.4367V3.43746C2.38277 2.48974 3.1538 1.71871 4.10152 1.71871H13.8983C14.846 1.71871 15.617 2.48974 15.617 3.43746V15.1678C15.617 15.6424 16.0018 16.0272 16.4764 16.0272C16.951 16.0272 17.3358 15.6424 17.3358 15.1678V3.43746C17.3357 1.54206 15.7937 0 13.8983 0H4.10152C2.20608 0 0.664062 1.54206 0.664062 3.43746V19.4367C0.664062 20.1316 0.930727 20.7764 1.4149 21.2521C1.90019 21.7289 2.56835 22 3.25448 22C3.26973 22 3.28503 21.9999 3.30028 21.9996C3.99599 21.9874 4.61478 21.7229 5.08984 21.2346L8.99991 17.2164L12.91 21.2346C13.3885 21.7263 14.0088 21.9909 14.7038 21.9997C15.4014 22.0069 16.088 21.7331 16.5833 21.244C17.0685 20.7649 17.3357 20.1177 17.3357 19.4217C17.3358 18.9471 16.951 18.5623 16.4764 18.5623Z"/>
                                        </svg>
                                    </button>
                                    <a href="/pages/catalog-vtor/detail.php?id=${object.id}" class="price"><span>${commaSeparateNumber(object.price)} <svg class="ruble" fill="#4B4A4A"><use xlink:href="#Rouble"></use></svg></span><span>Подробнее</span></a>
                                </div>
                            </div>`;
                        }
                        current++;
                    }
                });

                var last = `
                <div class="section_product --last">
                    <div class="section_product_content">
                        <svg class="icon">
                            <use xlink:href="#CraneIcon"></use>
                        </svg>
                        <div class="info">
                            <div class='title'>Новостройки</div>
                            <p>Посмотреть схожие варианты в новостройках той же локации</p>
                        </div>
                    </div>
                    <div class="section_product_footer">
                        <button class="favorite">
                            <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.4764 18.5623C16.0018 18.5623 15.617 18.9471 15.617 19.4217C15.617 19.6613 15.5358 19.8629 15.3757 20.021C15.2077 20.1869 14.964 20.283 14.7255 20.2811C14.4903 20.2781 14.2993 20.198 14.1417 20.036L9.61579 15.3849C9.45401 15.2186 9.23186 15.1248 8.99991 15.1248C8.76797 15.1248 8.54582 15.2186 8.38404 15.3849L3.85806 20.036C3.70161 20.1968 3.50924 20.277 3.26999 20.2812C3.02893 20.2861 2.78629 20.1901 2.61944 20.0261C2.46239 19.8718 2.38277 19.6735 2.38277 19.4367V3.43746C2.38277 2.48974 3.1538 1.71871 4.10152 1.71871H13.8983C14.846 1.71871 15.617 2.48974 15.617 3.43746V15.1678C15.617 15.6424 16.0018 16.0272 16.4764 16.0272C16.951 16.0272 17.3358 15.6424 17.3358 15.1678V3.43746C17.3357 1.54206 15.7937 0 13.8983 0H4.10152C2.20608 0 0.664062 1.54206 0.664062 3.43746V19.4367C0.664062 20.1316 0.930727 20.7764 1.4149 21.2521C1.90019 21.7289 2.56835 22 3.25448 22C3.26973 22 3.28503 21.9999 3.30028 21.9996C3.99599 21.9874 4.61478 21.7229 5.08984 21.2346L8.99991 17.2164L12.91 21.2346C13.3885 21.7263 14.0088 21.9909 14.7038 21.9997C15.4014 22.0069 16.088 21.7331 16.5833 21.244C17.0685 20.7649 17.3357 20.1177 17.3357 19.4217C17.3358 18.9471 16.951 18.5623 16.4764 18.5623Z"/>
                            </svg>
                        </button>
                        <a href="/pages/catalog-novostr/" class="price">Перейти в каталог</a>
                    </div>
                </div>`;

                $("#buildings").html(table + last);
                $("#buildings-list").html(list + last);

                /*$(".section_product[data-id]").on("click", function(){
                    if($(this).hasClass("active")){
                        $(".section_product, .gm-style-iw-a .marker").removeClass("active");
                        map.panTo(new google.maps.LatLng($(this).data('mapx'), $(this).data('mapy')));
                        return;
                    }

                    var id = $(this).data("id");
                    $(".section_product, .gm-style-iw-a .marker").removeClass("active")
                    $(".section_product[data-id="+id+"], .gm-style-iw-a .marker[data-id="+id+"]").addClass("active");
                    map.panTo(new google.maps.LatLng($(this).data('mapx'), $(this).data('mapy')));
                });*/

                //activate sliders
                $('.section__product-slider').slick({
                    autoplay: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true,
                    draggable: false,
                    swipe: true,
                    adaptiveHeight: true
                });

                $(".slider-objects .slick-list").css("overflow", "visible");
                
            });
        });
        </script> 
        <style>
        
            .slider-objects.slick-initialized>.slick-list>.slick-track{
                width: 100% !important;
                max-width: 100% !important;
            }

            .slider-objects.slick-initialized>.slick-list>.slick-track>.slick-slide {
                display: none !important;
                left: 0px !important;
                width: 100% !important;
            }

            .slider-objects.slick-initialized>.slick-list>.slick-track>.slick-slide.slick-active{
                display: block !important;
                left: 0px !important;
                width: 100% !important;
            }
        </style>
        <? endif; ?>
        <? if ($APPLICATION->GetCurPage() == "/pages/catalog-novostr/") : ?>
    <script>
        let map, table = ``, list = ``;
        function initMap(){
            map = new google.maps.Map(document.getElementById('buildings-map'), {
                center: {
                    lat: 55.7725, lng: 37.6227065
                },
                zoom: 15,
                zoomControl: false,
                mapTypeControl: false,
                scaleControl: false,
                streetViewControl: false,
                fullscreenControl: false,
                styles: [
                {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#444444"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#f2f2f2"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#d5f0c9"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 45
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#46bcec"
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#b2eafe"
                        }
                    ]
                }
            ]
            });
        }
        function shortenNumber(num, decimalPlaces) {
            var str, suffix = '';
            decimalPlaces = decimalPlaces || 0;
            num = +num;
            var factor = Math.pow(10, decimalPlaces);
            if (num < 1000) {
                str = num;
            } else if (num < 1000000) {
                str = Math.floor(num / (1000 / factor)) / factor;
                suffix = ' <span>тыс.</span>';
            } else if (num < 1000000000) {
                str = Math.floor(num / (1000000 / factor)) / factor;
                suffix = ' <span>млн.</span>';
            }
            return str + suffix;
        }
        $(function() {
             $.ajax({ url: "/html/json/buildings/new.json"}).done((data) => {
                var max = 4, current = 0;
                $('#lider_buildings').slick('unslick');
                //var data = JSON.parse(data);
                Object.keys(data).forEach(function(obj) {
                    if(max >= current){
                        var object = data[obj];
                        var images = ``;
                        Object.keys(object.images.original).forEach(function(image) {
                            var _images = data[obj].images.original[image];
                            images += `<div class="section__product-slide" style="border-radius: 25px 25px 0px 0px !important;overflow: hidden">
                                    <img src="${_images}" style="width: 100%;" alt="">
                                </div>`;
                        });

                        table += `
                        <div class="section_product --novostr">
                            <button class="share">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.2343 3.99994C22.2343 5.79492 20.7793 7.25006 18.9843 7.25006C17.1893 7.25006 15.7344 5.79492 15.7344 3.99994C15.7344 2.20514 17.1893 0.75 18.9843 0.75C20.7793 0.75 22.2343 2.20514 22.2343 3.99994Z" fill="#005453"/>
                                    <path d="M18.9843 8.00006C16.7783 8.00006 14.9844 6.20599 14.9844 3.99994C14.9844 1.79407 16.7783 0 18.9843 0C21.1904 0 22.9843 1.79407 22.9843 3.99994C22.9843 6.20599 21.1904 8.00006 18.9843 8.00006ZM18.9843 1.5C17.6053 1.5 16.4844 2.62207 16.4844 3.99994C16.4844 5.37799 17.6053 6.50006 18.9843 6.50006C20.3633 6.50006 21.4843 5.37799 21.4843 3.99994C21.4843 2.62207 20.3633 1.5 18.9843 1.5Z" fill="#005453"/>
                                    <path d="M22.2343 20.0001C22.2343 21.7949 20.7793 23.25 18.9843 23.25C17.1893 23.25 15.7344 21.7949 15.7344 20.0001C15.7344 18.2051 17.1893 16.7499 18.9843 16.7499C20.7793 16.7499 22.2343 18.2051 22.2343 20.0001Z" fill="#005453"/>
                                    <path d="M18.9843 24C16.7783 24 14.9844 22.2059 14.9844 20.0001C14.9844 17.794 16.7783 15.9999 18.9843 15.9999C21.1904 15.9999 22.9843 17.794 22.9843 20.0001C22.9843 22.2059 21.1904 24 18.9843 24ZM18.9843 17.4999C17.6053 17.4999 16.4844 18.622 16.4844 20.0001C16.4844 21.3779 17.6053 22.5 18.9843 22.5C20.3633 22.5 21.4843 21.3779 21.4843 20.0001C21.4843 18.622 20.3633 17.4999 18.9843 17.4999Z" fill="#005453"/>
                                    <path d="M8.23444 12C8.23444 13.795 6.7793 15.2499 4.98431 15.2499C3.18951 15.2499 1.73438 13.795 1.73438 12C1.73438 10.205 3.18951 8.75006 4.98431 8.75006C6.7793 8.75006 8.23444 10.205 8.23444 12Z" fill="#005453"/>
                                    <path d="M4.98431 15.9999C2.77844 15.9999 0.984375 14.2061 0.984375 12C0.984375 9.79395 2.77844 8.00006 4.98431 8.00006C7.19037 8.00006 8.98444 9.79395 8.98444 12C8.98444 14.2061 7.19037 15.9999 4.98431 15.9999ZM4.98431 9.50006C3.60535 9.50006 2.48438 10.6219 2.48438 12C2.48438 13.3781 3.60535 14.4999 4.98431 14.4999C6.36346 14.4999 7.48444 13.3781 7.48444 12C7.48444 10.6219 6.36346 9.50006 4.98431 9.50006Z" fill="#005453"/>
                                    <path d="M7.34572 11.5201C6.99764 11.5201 6.65963 11.339 6.47561 11.0151C6.2026 10.5361 6.37069 9.92506 6.84969 9.65095L16.1286 4.36103C16.6076 4.08601 17.2186 4.2541 17.4927 4.73494C17.7657 5.21394 17.5976 5.82496 17.1186 6.09907L7.83956 11.389C7.68355 11.478 7.51363 11.5201 7.34572 11.5201Z" fill="#005453"/>
                                    <path d="M16.6231 19.7701C16.455 19.7701 16.2851 19.728 16.1291 19.639L6.85004 14.3491C6.37104 14.076 6.20313 13.465 6.47614 12.9849C6.74805 12.505 7.35999 12.336 7.84009 12.611L17.1191 17.9009C17.5981 18.174 17.7661 18.785 17.493 19.2651C17.3081 19.589 16.9701 19.7701 16.6231 19.7701Z" fill="#005453"/>
                                </svg>
                            </button>
                            <div class="section__product-slider slider" id="product${object.id}slider">
                                ${images}
                            </div>
                            <div class="section_product_content">
                                <a href="/pages/catalog-novostr/detail.php?id=${object.id}" class="title" style="color:#4B4A4A;">
                                    ${object.title}
                                    <div class="size">
                                        <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.69915 1L6 6.96737L3.33567 1L1 9H2.7284L3.73619 5.00932L5.72138 9H6.26121L8.24639 4.97203L9.21936 9H11L8.69915 1Z" fill="#4B4A4A" stroke="#4B4A4A" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        ${object.metro.name}
                                    </div>
                                </a>
                                <div>
                                    <small class="--green">${object.company}</small>
                                </div>
                                <div class="mt-2">
                                    <small>Площадь ${object.total_area}</small>
                                </div>
                                <div class="mt-2">
                                    <small class="--green"><strong>Cрок сдачи: ${object.completion_date}</strong></small>
                                </div>
                                <div class="description">
                                    <strong>${object.metro.name}</strong>
                                    ${object.description}
                                    <a href="#download" class="btn js--transparent_pop-up --green">скачать презентацию</a>
                                </div>
                            </div>
                            <div class="section_product_footer">
                                <button class="favorite">
                                    <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.4764 18.5623C16.0018 18.5623 15.617 18.9471 15.617 19.4217C15.617 19.6613 15.5358 19.8629 15.3757 20.021C15.2077 20.1869 14.964 20.283 14.7255 20.2811C14.4903 20.2781 14.2993 20.198 14.1417 20.036L9.61579 15.3849C9.45401 15.2186 9.23186 15.1248 8.99991 15.1248C8.76797 15.1248 8.54582 15.2186 8.38404 15.3849L3.85806 20.036C3.70161 20.1968 3.50924 20.277 3.26999 20.2812C3.02893 20.2861 2.78629 20.1901 2.61944 20.0261C2.46239 19.8718 2.38277 19.6735 2.38277 19.4367V3.43746C2.38277 2.48974 3.1538 1.71871 4.10152 1.71871H13.8983C14.846 1.71871 15.617 2.48974 15.617 3.43746V15.1678C15.617 15.6424 16.0018 16.0272 16.4764 16.0272C16.951 16.0272 17.3358 15.6424 17.3358 15.1678V3.43746C17.3357 1.54206 15.7937 0 13.8983 0H4.10152C2.20608 0 0.664062 1.54206 0.664062 3.43746V19.4367C0.664062 20.1316 0.930727 20.7764 1.4149 21.2521C1.90019 21.7289 2.56835 22 3.25448 22C3.26973 22 3.28503 21.9999 3.30028 21.9996C3.99599 21.9874 4.61478 21.7229 5.08984 21.2346L8.99991 17.2164L12.91 21.2346C13.3885 21.7263 14.0088 21.9909 14.7038 21.9997C15.4014 22.0069 16.088 21.7331 16.5833 21.244C17.0685 20.7649 17.3357 20.1177 17.3357 19.4217C17.3358 18.9471 16.951 18.5623 16.4764 18.5623Z"/>
                                    </svg>
                                </button>
                                <a href="/pages/catalog-novostr/detail.php?id=${object.id}" class="price"><span>${object.price.main}</span><span>Подробнее</span></a>
                            </div>
                        </div>`;

                        if(3 >= current){
                            const marker = new google.maps.Marker({
                                position: { lat: object.map.point.lat, lng: object.map.point.lng},
                                map,
                                optimized: true,
                                visible: false
                            });

                            var content = object.price.main;
                            const windowMarker = new google.maps.InfoWindow({content: "<div class='marker' data-id='" + object.id + "'>" + content + "</div>"});
                            windowMarker.open(marker.getMap(), marker);

                            google.maps.event.addListener(windowMarker, 'domready', function() {
                                $(".gm-style-iw-a").removeClass("--fixed").addClass("--fixed");
                                $(".gm-style-iw-a div[data-id]").on("click", function(){
                                    var id = $(this).data("id");
                                    var obj = $(".section_product[data-id="+id+"]");
                                    $(".section_product, .gm-style-iw-a div").removeClass("active")
                                    $(".section_product[data-id="+id+"], .gm-style-iw-a div[data-id="+id+"]").addClass("active");
                                    map.panTo(new google.maps.LatLng(obj.data('mapx'), obj.data('mapy')));
                                });
                            });


                            list += `
                            <div class="section_product --novostr" data-id="${object.id}" data-mapx="${object.map.point.lat}" data-mapy="${object.map.point.lng}" data-campx="${object.map.camera.lat}" data-camy="${object.map.camera.lng}" data-camzoom="${object.map.camera.zoom}">
                                <div class="section__product-image">
                                    <img src="${object.images.original[0]}" style="width: 100%;" alt="">
                                </div>
                                <div class="section_product_content">
                                    <a href="/pages/catalog-novostr/detail.php?id=${object.id}" class="title">
                                        ${object.title}  
                                    </a>
                                    <div class="small --green" style="font-size: 12px;margin-top: -12px;margin-bottom: 13px;">
                                        ${object.company}
                                    </div>
                                    <div class="metro_walk">
                                        <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.69915 1L6 6.96737L3.33567 1L1 9H2.7284L3.73619 5.00932L5.72138 9H6.26121L8.24639 4.97203L9.21936 9H11L8.69915 1Z" fill="#4B4A4A" stroke="#4B4A4A" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        ${object.metro.name}
                                        <span>
                                            <svg width="10" height="22" viewBox="0 0 10 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.81755 11.6942L7.68122 9.2639C7.54818 9.11261 7.42586 8.80086 7.4197 8.59647L7.34111 6.07476V6.0017C7.34111 5.61313 7.03449 5.29692 6.6577 5.29692H4.56648H3.73546C3.39876 5.29692 3.02312 5.54289 2.87983 5.85698L0.0646496 12.0238C-0.0132588 12.1949 -0.0210043 12.3858 0.0427804 12.5623C0.106565 12.7385 0.234134 12.8776 0.401569 12.9537L0.816397 13.1423C0.904785 13.1825 0.999094 13.2029 1.09682 13.2029C1.36495 13.2029 1.61462 13.0458 1.7333 12.8026L3.05205 10.097V12.8165C3.04658 12.8322 3.03861 12.8465 3.0336 12.8625L0.805007 20.0602C0.712292 20.36 0.740539 20.6755 0.884738 20.9485C1.02894 21.2215 1.27041 21.4169 1.56518 21.4989L1.71417 21.5405C1.81167 21.5677 1.91281 21.5816 2.01441 21.5816C2.52719 21.5816 2.99305 21.2337 3.1475 20.7352L5.22984 14.0097L5.96838 15.8752C6.14857 16.3303 6.34311 17.1272 6.39323 17.6158L6.74655 21.0507C6.80327 21.6006 7.22493 21.9998 7.74933 21.9998C7.83522 21.9998 7.92246 21.989 8.00835 21.9676L8.15847 21.93C8.75622 21.7808 9.17857 21.1475 9.09997 20.5186L8.57671 16.3303C8.51019 15.7982 8.28763 14.9649 8.08056 14.4727L7.37392 12.7944C7.3648 12.7725 7.35182 12.7528 7.34134 12.7317V11.5944L8.61476 12.9654C8.74141 13.1019 8.9109 13.1771 9.09177 13.1771C9.2747 13.1771 9.44555 13.1005 9.57267 12.9614L9.80821 12.7035C10.0602 12.4274 10.0645 11.975 9.81755 11.6942Z" fill="#4B4A4A"/>
                                                <path d="M5.38665 4.69972C6.64321 4.69972 7.66536 3.6456 7.66536 2.34974C7.66536 1.05412 6.64321 0 5.38665 0C4.13032 0 3.1084 1.05412 3.1084 2.34974C3.10817 3.6456 4.13032 4.69972 5.38665 4.69972Z" fill="#4B4A4A"/>
                                            </svg>
                                            ${object.metro.walk} мин
                                        </span>
                                    </div>
                                    <div class="small mt-2 mb-2">
                                        Площадь ${object.total_area}
                                    </div>
                                    <div class="deadline small --green">
                                        Cрок сдачи: ${object.completion_date}
                                    </div>
                                    <div class="description">
                                        ${object.description}
                                    </div>
                                </div>
                                <div class="section_product_footer">
                                    <button class="favorite">
                                        <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.4764 18.5623C16.0018 18.5623 15.617 18.9471 15.617 19.4217C15.617 19.6613 15.5358 19.8629 15.3757 20.021C15.2077 20.1869 14.964 20.283 14.7255 20.2811C14.4903 20.2781 14.2993 20.198 14.1417 20.036L9.61579 15.3849C9.45401 15.2186 9.23186 15.1248 8.99991 15.1248C8.76797 15.1248 8.54582 15.2186 8.38404 15.3849L3.85806 20.036C3.70161 20.1968 3.50924 20.277 3.26999 20.2812C3.02893 20.2861 2.78629 20.1901 2.61944 20.0261C2.46239 19.8718 2.38277 19.6735 2.38277 19.4367V3.43746C2.38277 2.48974 3.1538 1.71871 4.10152 1.71871H13.8983C14.846 1.71871 15.617 2.48974 15.617 3.43746V15.1678C15.617 15.6424 16.0018 16.0272 16.4764 16.0272C16.951 16.0272 17.3358 15.6424 17.3358 15.1678V3.43746C17.3357 1.54206 15.7937 0 13.8983 0H4.10152C2.20608 0 0.664062 1.54206 0.664062 3.43746V19.4367C0.664062 20.1316 0.930727 20.7764 1.4149 21.2521C1.90019 21.7289 2.56835 22 3.25448 22C3.26973 22 3.28503 21.9999 3.30028 21.9996C3.99599 21.9874 4.61478 21.7229 5.08984 21.2346L8.99991 17.2164L12.91 21.2346C13.3885 21.7263 14.0088 21.9909 14.7038 21.9997C15.4014 22.0069 16.088 21.7331 16.5833 21.244C17.0685 20.7649 17.3357 20.1177 17.3357 19.4217C17.3358 18.9471 16.951 18.5623 16.4764 18.5623Z"/>
                                        </svg>
                                    </button>
                                    <a href="/pages/catalog-novostr/detail.php?id=${object.id}" class="price"><span>${object.price.main}</span><span>Подробнее</span></a>
                                </div>
                            </div>`;
                        }
                        current++;
                    }
                });

                var last = `
                <div class="section_product --last">
                    <div class="section_product_content">
                        <svg class="icon">
                            <use xlink:href="#BuildingIcon"></use>
                        </svg>
                        <div class="info">
                            <div class='title'>Вторичка</div>
                            <p>Посмотреть похожие варианты на вторичке этого округа</p>
                        </div>
                    </div>
                    <div class="section_product_footer">
                        <button class="favorite">
                            <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.4764 18.5623C16.0018 18.5623 15.617 18.9471 15.617 19.4217C15.617 19.6613 15.5358 19.8629 15.3757 20.021C15.2077 20.1869 14.964 20.283 14.7255 20.2811C14.4903 20.2781 14.2993 20.198 14.1417 20.036L9.61579 15.3849C9.45401 15.2186 9.23186 15.1248 8.99991 15.1248C8.76797 15.1248 8.54582 15.2186 8.38404 15.3849L3.85806 20.036C3.70161 20.1968 3.50924 20.277 3.26999 20.2812C3.02893 20.2861 2.78629 20.1901 2.61944 20.0261C2.46239 19.8718 2.38277 19.6735 2.38277 19.4367V3.43746C2.38277 2.48974 3.1538 1.71871 4.10152 1.71871H13.8983C14.846 1.71871 15.617 2.48974 15.617 3.43746V15.1678C15.617 15.6424 16.0018 16.0272 16.4764 16.0272C16.951 16.0272 17.3358 15.6424 17.3358 15.1678V3.43746C17.3357 1.54206 15.7937 0 13.8983 0H4.10152C2.20608 0 0.664062 1.54206 0.664062 3.43746V19.4367C0.664062 20.1316 0.930727 20.7764 1.4149 21.2521C1.90019 21.7289 2.56835 22 3.25448 22C3.26973 22 3.28503 21.9999 3.30028 21.9996C3.99599 21.9874 4.61478 21.7229 5.08984 21.2346L8.99991 17.2164L12.91 21.2346C13.3885 21.7263 14.0088 21.9909 14.7038 21.9997C15.4014 22.0069 16.088 21.7331 16.5833 21.244C17.0685 20.7649 17.3357 20.1177 17.3357 19.4217C17.3358 18.9471 16.951 18.5623 16.4764 18.5623Z"/>
                            </svg>
                        </button>
                        <a href="/pages/catalog-vtor/" class="price">Перейти в каталог</a>
                    </div>
                </div>`;

                $("#buildings").html(table + last);
                $("#buildings-list").html(list + last);

                /*$(".section_product[data-id]").on("click", function(){
                    if($(this).hasClass("active")){
                        $(".section_product, .gm-style-iw-a .marker").removeClass("active");
                        map.panTo(new google.maps.LatLng($(this).data('mapx'), $(this).data('mapy')));
                        return;
                    }

                    var id = $(this).data("id");
                    $(".section_product, .gm-style-iw-a .marker").removeClass("active")
                    $(".section_product[data-id="+id+"], .gm-style-iw-a .marker[data-id="+id+"]").addClass("active");
                    map.panTo(new google.maps.LatLng($(this).data('mapx'), $(this).data('mapy')));
                });*/

                //activate sliders
                $('.section__product-slider').slick({
                    autoplay: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true,
                    draggable: false,
                    swipe: true,
                    adaptiveHeight: true
                });

                $(".slider-objects .slick-list").css("overflow", "visible");
            });
        });
        </script>
        <style>
        
        .slider-objects.slick-initialized>.slick-list>.slick-track{
            width: 100% !important;
            max-width: 100% !important;
        }

        .slider-objects.slick-initialized>.slick-list>.slick-track>.slick-slide {
            display: none !important;
            left: 0px !important;
            width: 100% !important;
        }

        .slider-objects.slick-initialized>.slick-list>.slick-track>.slick-slide.slick-active{
            display: block !important;
            left: 0px !important;
            width: 100% !important;
        }
    </style>
    <? endif; ?>
     <!--Аренда новая!-->
     <? if ($APPLICATION->GetCurPage() == "/pages/catalog-rent/") : ?>
    <script>
        let map, table = ``, list = ``;
        function initMap(){
            map = new google.maps.Map(document.getElementById('buildings-map'), {
                center: {
                    lat: 55.7725, lng: 37.6227065
                },
                zoom: 15,
                zoomControl: false,
                mapTypeControl: false,
                scaleControl: false,
                streetViewControl: false,
                fullscreenControl: false,
                styles: [
                {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#444444"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#f2f2f2"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#d5f0c9"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 45
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#46bcec"
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#b2eafe"
                        }
                    ]
                }
            ]
            });
        }
        function shortenNumber(num, decimalPlaces) {
            var str, suffix = '';
            decimalPlaces = decimalPlaces || 0;
            num = +num;
            var factor = Math.pow(10, decimalPlaces);
            if (num < 1000) {
                str = num;
            } else if (num < 1000000) {
                str = Math.floor(num / (1000 / factor)) / factor;
                suffix = ' тыс.';
            } else if (num < 1000000000) {
                str = Math.floor(num / (1000000 / factor)) / factor;
                suffix = ' млн.';
            }
            return str + suffix;
        }
        $(function() {
            var filter = '<?php print_r($_SERVER['QUERY_STRING']);?>';
                $.ajax({
                    type: "POST",
                    url: "/local/catalog-rent-json.php",
                    data: filter
                    }).done((data) => {
                var max = 6, current = 0;
                $('#lider_buildings').slick('unslick');
                var data = JSON.parse(data);

                Object.keys(data).forEach(function(obj) {
                    if(max >= current){
                        var object = data[obj];
                        var images = ``;
                        Object.keys(object.images.special).forEach(function(image) {
                            var _images = (object.special)? data[obj].images.special[image]:data[obj].images.original[image];
                            images += `<div class="section__product-slide" style="${(object.special)?'border-radius: 25px 0 0 25px !important;overflow: hidden':'border-radius: 25px 25px 0px 0px !important;overflow: hidden'}"> 
                                    <img src="${_images}" style="width: 100%;" alt="">
                                </div>`;
                        });

                        table += `
                        <div class="section_product ${(object.special)?'--special':''}">
                            <button class="share">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.2343 3.99994C22.2343 5.79492 20.7793 7.25006 18.9843 7.25006C17.1893 7.25006 15.7344 5.79492 15.7344 3.99994C15.7344 2.20514 17.1893 0.75 18.9843 0.75C20.7793 0.75 22.2343 2.20514 22.2343 3.99994Z" fill="currentColor"/>
                                    <path d="M18.9843 8.00006C16.7783 8.00006 14.9844 6.20599 14.9844 3.99994C14.9844 1.79407 16.7783 0 18.9843 0C21.1904 0 22.9843 1.79407 22.9843 3.99994C22.9843 6.20599 21.1904 8.00006 18.9843 8.00006ZM18.9843 1.5C17.6053 1.5 16.4844 2.62207 16.4844 3.99994C16.4844 5.37799 17.6053 6.50006 18.9843 6.50006C20.3633 6.50006 21.4843 5.37799 21.4843 3.99994C21.4843 2.62207 20.3633 1.5 18.9843 1.5Z" fill="currentColor"/>
                                    <path d="M22.2343 20.0001C22.2343 21.7949 20.7793 23.25 18.9843 23.25C17.1893 23.25 15.7344 21.7949 15.7344 20.0001C15.7344 18.2051 17.1893 16.7499 18.9843 16.7499C20.7793 16.7499 22.2343 18.2051 22.2343 20.0001Z" fill="currentColor"/>
                                    <path d="M18.9843 24C16.7783 24 14.9844 22.2059 14.9844 20.0001C14.9844 17.794 16.7783 15.9999 18.9843 15.9999C21.1904 15.9999 22.9843 17.794 22.9843 20.0001C22.9843 22.2059 21.1904 24 18.9843 24ZM18.9843 17.4999C17.6053 17.4999 16.4844 18.622 16.4844 20.0001C16.4844 21.3779 17.6053 22.5 18.9843 22.5C20.3633 22.5 21.4843 21.3779 21.4843 20.0001C21.4843 18.622 20.3633 17.4999 18.9843 17.4999Z" fill="currentColor"/>
                                    <path d="M8.23444 12C8.23444 13.795 6.7793 15.2499 4.98431 15.2499C3.18951 15.2499 1.73438 13.795 1.73438 12C1.73438 10.205 3.18951 8.75006 4.98431 8.75006C6.7793 8.75006 8.23444 10.205 8.23444 12Z" fill="currentColor"/>
                                    <path d="M4.98431 15.9999C2.77844 15.9999 0.984375 14.2061 0.984375 12C0.984375 9.79395 2.77844 8.00006 4.98431 8.00006C7.19037 8.00006 8.98444 9.79395 8.98444 12C8.98444 14.2061 7.19037 15.9999 4.98431 15.9999ZM4.98431 9.50006C3.60535 9.50006 2.48438 10.6219 2.48438 12C2.48438 13.3781 3.60535 14.4999 4.98431 14.4999C6.36346 14.4999 7.48444 13.3781 7.48444 12C7.48444 10.6219 6.36346 9.50006 4.98431 9.50006Z" fill="currentColor"/>
                                    <path d="M7.34572 11.5201C6.99764 11.5201 6.65963 11.339 6.47561 11.0151C6.2026 10.5361 6.37069 9.92506 6.84969 9.65095L16.1286 4.36103C16.6076 4.08601 17.2186 4.2541 17.4927 4.73494C17.7657 5.21394 17.5976 5.82496 17.1186 6.09907L7.83956 11.389C7.68355 11.478 7.51363 11.5201 7.34572 11.5201Z" fill="currentColor"/>
                                    <path d="M16.6231 19.7701C16.455 19.7701 16.2851 19.728 16.1291 19.639L6.85004 14.3491C6.37104 14.076 6.20313 13.465 6.47614 12.9849C6.74805 12.505 7.35999 12.336 7.84009 12.611L17.1191 17.9009C17.5981 18.174 17.7661 18.785 17.493 19.2651C17.3081 19.589 16.9701 19.7701 16.6231 19.7701Z" fill="currentColor"/>
                                </svg>
                            </button>
                            <div class="section__product-slider slider" id="product${object.id}slider">
                                ${images}
                            </div>
                            <div class="section_product_content">
                                ${(object.special)?'<div class="special">Cпецпредложение</div>':''}
                                <a href="/pages/catalog-rent/detail.php?id=${object.id}" class="title">${object.title} <div class="size">${object.footage} м<sup>2</sup></div></a>
                                <div class="metro_walk">
                                    <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.69915 1L6 6.96737L3.33567 1L1 9H2.7284L3.73619 5.00932L5.72138 9H6.26121L8.24639 4.97203L9.21936 9H11L8.69915 1Z" fill="#4B4A4A" stroke="#4B4A4A" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    ${object.metro.name}
                                    <span>
                                        <svg width="10" height="22" viewBox="0 0 10 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.81755 11.6942L7.68122 9.2639C7.54818 9.11261 7.42586 8.80086 7.4197 8.59647L7.34111 6.07476V6.0017C7.34111 5.61313 7.03449 5.29692 6.6577 5.29692H4.56648H3.73546C3.39876 5.29692 3.02312 5.54289 2.87983 5.85698L0.0646496 12.0238C-0.0132588 12.1949 -0.0210043 12.3858 0.0427804 12.5623C0.106565 12.7385 0.234134 12.8776 0.401569 12.9537L0.816397 13.1423C0.904785 13.1825 0.999094 13.2029 1.09682 13.2029C1.36495 13.2029 1.61462 13.0458 1.7333 12.8026L3.05205 10.097V12.8165C3.04658 12.8322 3.03861 12.8465 3.0336 12.8625L0.805007 20.0602C0.712292 20.36 0.740539 20.6755 0.884738 20.9485C1.02894 21.2215 1.27041 21.4169 1.56518 21.4989L1.71417 21.5405C1.81167 21.5677 1.91281 21.5816 2.01441 21.5816C2.52719 21.5816 2.99305 21.2337 3.1475 20.7352L5.22984 14.0097L5.96838 15.8752C6.14857 16.3303 6.34311 17.1272 6.39323 17.6158L6.74655 21.0507C6.80327 21.6006 7.22493 21.9998 7.74933 21.9998C7.83522 21.9998 7.92246 21.989 8.00835 21.9676L8.15847 21.93C8.75622 21.7808 9.17857 21.1475 9.09997 20.5186L8.57671 16.3303C8.51019 15.7982 8.28763 14.9649 8.08056 14.4727L7.37392 12.7944C7.3648 12.7725 7.35182 12.7528 7.34134 12.7317V11.5944L8.61476 12.9654C8.74141 13.1019 8.9109 13.1771 9.09177 13.1771C9.2747 13.1771 9.44555 13.1005 9.57267 12.9614L9.80821 12.7035C10.0602 12.4274 10.0645 11.975 9.81755 11.6942Z" fill="#4B4A4A"/>
                                            <path d="M5.38665 4.69972C6.64321 4.69972 7.66536 3.6456 7.66536 2.34974C7.66536 1.05412 6.64321 0 5.38665 0C4.13032 0 3.1084 1.05412 3.1084 2.34974C3.10817 3.6456 4.13032 4.69972 5.38665 4.69972Z" fill="#4B4A4A"/>
                                        </svg>
                                        ${object.metro.walk} мин
                                    </span>
                                </div>
                                <div class="adress">
                                    <svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.76471 4.84615C8.76471 8.30769 4.88235 11 4.88235 11C4.88235 11 1 8.30769 1 4.84615C1 3.82609 1.40903 2.84781 2.13711 2.12651C2.8652 1.40522 3.85269 1 4.88235 1C5.91202 1 6.89951 1.40522 7.62759 2.12651C8.35567 2.84781 8.76471 3.82609 8.76471 4.84615Z" fill="#4B4A4A" stroke="#4B4A4A" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M4.88204 6.38462C5.73971 6.38462 6.43498 5.69582 6.43498 4.84616C6.43498 3.99649 5.73971 3.30769 4.88204 3.30769C4.02438 3.30769 3.3291 3.99649 3.3291 4.84616C3.3291 5.69582 4.02438 6.38462 4.88204 6.38462Z" fill="white"/>
                                    </svg>
                                    ${object.address}
                                </div>
                                <div class="floors">
                                    <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 0.5C1 0.223858 1.22386 0 1.5 0H5.5C5.77614 0 6 0.223858 6 0.5V9.5C6 9.77614 5.77614 10 5.5 10H1V0.5Z" fill="#4B4A4A"/>
                                        <path d="M8.9999 10.1H9.0999V9.99999V4.49999C9.0999 4.16862 8.83127 3.89999 8.4999 3.89999H4.4999C4.16853 3.89999 3.8999 4.16862 3.8999 4.49999V9.99999V10.1H3.9999H8.9999Z" fill="#4B4A4A" stroke="white" stroke-width="0.2"/>
                                        <path d="M9.75 10H0.25C0.111929 10 0 10.1119 0 10.25C0 10.3881 0.111929 10.5 0.25 10.5H9.75C9.88807 10.5 10 10.3881 10 10.25C10 10.1119 9.88807 10 9.75 10Z" fill="#4B4A4A"/>
                                        <path d="M2.9 1H2.1C2.04477 1 2 1.04477 2 1.1V1.9C2 1.95523 2.04477 2 2.1 2H2.9C2.95523 2 3 1.95523 3 1.9V1.1C3 1.04477 2.95523 1 2.9 1Z" fill="white"/>
                                        <path d="M5.9 5H5.1C5.04477 5 5 5.04477 5 5.1V5.9C5 5.95523 5.04477 6 5.1 6H5.9C5.95523 6 6 5.95523 6 5.9V5.1C6 5.04477 5.95523 5 5.9 5Z" fill="white"/>
                                        <path d="M7.9 5H7.1C7.04477 5 7 5.04477 7 5.1V5.9C7 5.95523 7.04477 6 7.1 6H7.9C7.95523 6 8 5.95523 8 5.9V5.1C8 5.04477 7.95523 5 7.9 5Z" fill="white"/>
                                        <path d="M5.9 7H5.1C5.04477 7 5 7.04477 5 7.1V7.9C5 7.95523 5.04477 8 5.1 8H5.9C5.95523 8 6 7.95523 6 7.9V7.1C6 7.04477 5.95523 7 5.9 7Z" fill="white"/>
                                        <path d="M7.9 7H7.1C7.04477 7 7 7.04477 7 7.1V7.9C7 7.95523 7.04477 8 7.1 8H7.9C7.95523 8 8 7.95523 8 7.9V7.1C8 7.04477 7.95523 7 7.9 7Z" fill="white"/>
                                        <path d="M5.9 9H5.1C5.04477 9 5 9.04477 5 9.1V9.9C5 9.95523 5.04477 10 5.1 10H5.9C5.95523 10 6 9.95523 6 9.9V9.1C6 9.04477 5.95523 9 5.9 9Z" fill="white"/>
                                        <path d="M7.9 9H7.1C7.04477 9 7 9.04477 7 9.1V9.9C7 9.95523 7.04477 10 7.1 10H7.9C7.95523 10 8 9.95523 8 9.9V9.1C8 9.04477 7.95523 9 7.9 9Z" fill="white"/>
                                        <path d="M4.9 1H4.1C4.04477 1 4 1.04477 4 1.1V1.9C4 1.95523 4.04477 2 4.1 2H4.9C4.95523 2 5 1.95523 5 1.9V1.1C5 1.04477 4.95523 1 4.9 1Z" fill="white"/>
                                        <path d="M2.9 3H2.1C2.04477 3 2 3.04477 2 3.1V3.9C2 3.95523 2.04477 4 2.1 4H2.9C2.95523 4 3 3.95523 3 3.9V3.1C3 3.04477 2.95523 3 2.9 3Z" fill="white"/>
                                        <path d="M4.9 3H4.1C4.04477 3 4 3.04477 4 3.1V3.9C4 3.95523 4.04477 4 4.1 4H4.9C4.95523 4 5 3.95523 5 3.9V3.1C5 3.04477 4.95523 3 4.9 3Z" fill="white"/>
                                        <path d="M2.9 5H2.1C2.04477 5 2 5.04477 2 5.1V5.9C2 5.95523 2.04477 6 2.1 6H2.9C2.95523 6 3 5.95523 3 5.9V5.1C3 5.04477 2.95523 5 2.9 5Z" fill="white"/>
                                        <path d="M2.9 7H2.1C2.04477 7 2 7.04477 2 7.1V9.9C2 9.95523 2.04477 10 2.1 10H2.9C2.95523 10 3 9.95523 3 9.9V7.1C3 7.04477 2.95523 7 2.9 7Z" fill="white"/>
                                    </svg>

                                    ${object.floors} этаж из ${object.floors_total}
                                </div>
                                ${(object.special)?'<div class="description">' + object.description + '</div>':''}
                            </div>
                            <div class="section_product_footer">
                                <button class="favorite">
                                    <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.4764 18.5623C16.0018 18.5623 15.617 18.9471 15.617 19.4217C15.617 19.6613 15.5358 19.8629 15.3757 20.021C15.2077 20.1869 14.964 20.283 14.7255 20.2811C14.4903 20.2781 14.2993 20.198 14.1417 20.036L9.61579 15.3849C9.45401 15.2186 9.23186 15.1248 8.99991 15.1248C8.76797 15.1248 8.54582 15.2186 8.38404 15.3849L3.85806 20.036C3.70161 20.1968 3.50924 20.277 3.26999 20.2812C3.02893 20.2861 2.78629 20.1901 2.61944 20.0261C2.46239 19.8718 2.38277 19.6735 2.38277 19.4367V3.43746C2.38277 2.48974 3.1538 1.71871 4.10152 1.71871H13.8983C14.846 1.71871 15.617 2.48974 15.617 3.43746V15.1678C15.617 15.6424 16.0018 16.0272 16.4764 16.0272C16.951 16.0272 17.3358 15.6424 17.3358 15.1678V3.43746C17.3357 1.54206 15.7937 0 13.8983 0H4.10152C2.20608 0 0.664062 1.54206 0.664062 3.43746V19.4367C0.664062 20.1316 0.930727 20.7764 1.4149 21.2521C1.90019 21.7289 2.56835 22 3.25448 22C3.26973 22 3.28503 21.9999 3.30028 21.9996C3.99599 21.9874 4.61478 21.7229 5.08984 21.2346L8.99991 17.2164L12.91 21.2346C13.3885 21.7263 14.0088 21.9909 14.7038 21.9997C15.4014 22.0069 16.088 21.7331 16.5833 21.244C17.0685 20.7649 17.3357 20.1177 17.3357 19.4217C17.3358 18.9471 16.951 18.5623 16.4764 18.5623Z"/>
                                    </svg>
                                </button>
                                <a href="/pages/catalog-rent/detail.php?id=${object.id}" class="price"><span>${commaSeparateNumber(object.price)} <svg class="ruble"><use xlink:href="#Rouble"></use></svg></span><span>Подробнее</span></a>
                            </div>
                        </div>`;

                        if(3 >= current){
                            const marker = new google.maps.Marker({
                                position: { lat: object.map.point.lat, lng: object.map.point.lng},
                                map,
                                optimized: true,
                                visible: false
                            });

                            var content = shortenNumber(object.price, 1)+'<svg class="ruble"><use xlink:href="#Rouble"></use></svg>';
                            const windowMarker = new google.maps.InfoWindow({content: "<div class='marker' data-id='" + object.id + "'>" + content + "</div>"});
                            windowMarker.open(marker.getMap(), marker);

                            google.maps.event.addListener(windowMarker, 'domready', function() {
                                $(".gm-style-iw-a").removeClass("--fixed").addClass("--fixed");
                                $(".gm-style-iw-a div[data-id]").on("click", function(){
                                    var id = $(this).data("id");
                                    var obj = $(".section_product[data-id="+id+"]");
                                    $(".section_product, .gm-style-iw-a div").removeClass("active")
                                    $(".section_product[data-id="+id+"], .gm-style-iw-a div[data-id="+id+"]").addClass("active");
                                    map.panTo(new google.maps.LatLng(obj.data('mapx'), obj.data('mapy')));
                                });
                            });


                            list += `
                            <div class="section_product" data-id="${object.id}" data-mapx="${object.map.point.lat}" data-mapy="${object.map.point.lng}" data-campx="${object.map.camera.lat}" data-camy="${object.map.camera.lng}" data-camzoom="${object.map.camera.zoom}">
                                <div class="section__product-image">
                                    <img src="${object.images.original[0]}" alt="">
                                </div>
                                <div class="section_product_content">
                                    <a href="/pages/catalog-rent/detail.php?id=${object.id}" class="title">${object.title} <div class="size">${object.footage} м<sup>2</sup></div></a>
                                    <div class="metro_walk">
                                        <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.69915 1L6 6.96737L3.33567 1L1 9H2.7284L3.73619 5.00932L5.72138 9H6.26121L8.24639 4.97203L9.21936 9H11L8.69915 1Z" fill="#4B4A4A" stroke="#4B4A4A" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        ${object.metro.name}
                                        <span>
                                            <svg width="10" height="22" viewBox="0 0 10 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.81755 11.6942L7.68122 9.2639C7.54818 9.11261 7.42586 8.80086 7.4197 8.59647L7.34111 6.07476V6.0017C7.34111 5.61313 7.03449 5.29692 6.6577 5.29692H4.56648H3.73546C3.39876 5.29692 3.02312 5.54289 2.87983 5.85698L0.0646496 12.0238C-0.0132588 12.1949 -0.0210043 12.3858 0.0427804 12.5623C0.106565 12.7385 0.234134 12.8776 0.401569 12.9537L0.816397 13.1423C0.904785 13.1825 0.999094 13.2029 1.09682 13.2029C1.36495 13.2029 1.61462 13.0458 1.7333 12.8026L3.05205 10.097V12.8165C3.04658 12.8322 3.03861 12.8465 3.0336 12.8625L0.805007 20.0602C0.712292 20.36 0.740539 20.6755 0.884738 20.9485C1.02894 21.2215 1.27041 21.4169 1.56518 21.4989L1.71417 21.5405C1.81167 21.5677 1.91281 21.5816 2.01441 21.5816C2.52719 21.5816 2.99305 21.2337 3.1475 20.7352L5.22984 14.0097L5.96838 15.8752C6.14857 16.3303 6.34311 17.1272 6.39323 17.6158L6.74655 21.0507C6.80327 21.6006 7.22493 21.9998 7.74933 21.9998C7.83522 21.9998 7.92246 21.989 8.00835 21.9676L8.15847 21.93C8.75622 21.7808 9.17857 21.1475 9.09997 20.5186L8.57671 16.3303C8.51019 15.7982 8.28763 14.9649 8.08056 14.4727L7.37392 12.7944C7.3648 12.7725 7.35182 12.7528 7.34134 12.7317V11.5944L8.61476 12.9654C8.74141 13.1019 8.9109 13.1771 9.09177 13.1771C9.2747 13.1771 9.44555 13.1005 9.57267 12.9614L9.80821 12.7035C10.0602 12.4274 10.0645 11.975 9.81755 11.6942Z" fill="#4B4A4A"/>
                                                <path d="M5.38665 4.69972C6.64321 4.69972 7.66536 3.6456 7.66536 2.34974C7.66536 1.05412 6.64321 0 5.38665 0C4.13032 0 3.1084 1.05412 3.1084 2.34974C3.10817 3.6456 4.13032 4.69972 5.38665 4.69972Z" fill="#4B4A4A"/>
                                            </svg>
                                            ${object.metro.walk} мин
                                        </span>
                                    </div>
                                    <div class="adress">
                                        <svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.76471 4.84615C8.76471 8.30769 4.88235 11 4.88235 11C4.88235 11 1 8.30769 1 4.84615C1 3.82609 1.40903 2.84781 2.13711 2.12651C2.8652 1.40522 3.85269 1 4.88235 1C5.91202 1 6.89951 1.40522 7.62759 2.12651C8.35567 2.84781 8.76471 3.82609 8.76471 4.84615Z" fill="#4B4A4A" stroke="#4B4A4A" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M4.88204 6.38462C5.73971 6.38462 6.43498 5.69582 6.43498 4.84616C6.43498 3.99649 5.73971 3.30769 4.88204 3.30769C4.02438 3.30769 3.3291 3.99649 3.3291 4.84616C3.3291 5.69582 4.02438 6.38462 4.88204 6.38462Z" fill="white"/>
                                        </svg>
                                        ${object.address}
                                    </div>
                                    <div class="floors">
                                        <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 0.5C1 0.223858 1.22386 0 1.5 0H5.5C5.77614 0 6 0.223858 6 0.5V9.5C6 9.77614 5.77614 10 5.5 10H1V0.5Z" fill="#4B4A4A"/>
                                            <path d="M8.9999 10.1H9.0999V9.99999V4.49999C9.0999 4.16862 8.83127 3.89999 8.4999 3.89999H4.4999C4.16853 3.89999 3.8999 4.16862 3.8999 4.49999V9.99999V10.1H3.9999H8.9999Z" fill="#4B4A4A" stroke="white" stroke-width="0.2"/>
                                            <path d="M9.75 10H0.25C0.111929 10 0 10.1119 0 10.25C0 10.3881 0.111929 10.5 0.25 10.5H9.75C9.88807 10.5 10 10.3881 10 10.25C10 10.1119 9.88807 10 9.75 10Z" fill="#4B4A4A"/>
                                            <path d="M2.9 1H2.1C2.04477 1 2 1.04477 2 1.1V1.9C2 1.95523 2.04477 2 2.1 2H2.9C2.95523 2 3 1.95523 3 1.9V1.1C3 1.04477 2.95523 1 2.9 1Z" fill="white"/>
                                            <path d="M5.9 5H5.1C5.04477 5 5 5.04477 5 5.1V5.9C5 5.95523 5.04477 6 5.1 6H5.9C5.95523 6 6 5.95523 6 5.9V5.1C6 5.04477 5.95523 5 5.9 5Z" fill="white"/>
                                            <path d="M7.9 5H7.1C7.04477 5 7 5.04477 7 5.1V5.9C7 5.95523 7.04477 6 7.1 6H7.9C7.95523 6 8 5.95523 8 5.9V5.1C8 5.04477 7.95523 5 7.9 5Z" fill="white"/>
                                            <path d="M5.9 7H5.1C5.04477 7 5 7.04477 5 7.1V7.9C5 7.95523 5.04477 8 5.1 8H5.9C5.95523 8 6 7.95523 6 7.9V7.1C6 7.04477 5.95523 7 5.9 7Z" fill="white"/>
                                            <path d="M7.9 7H7.1C7.04477 7 7 7.04477 7 7.1V7.9C7 7.95523 7.04477 8 7.1 8H7.9C7.95523 8 8 7.95523 8 7.9V7.1C8 7.04477 7.95523 7 7.9 7Z" fill="white"/>
                                            <path d="M5.9 9H5.1C5.04477 9 5 9.04477 5 9.1V9.9C5 9.95523 5.04477 10 5.1 10H5.9C5.95523 10 6 9.95523 6 9.9V9.1C6 9.04477 5.95523 9 5.9 9Z" fill="white"/>
                                            <path d="M7.9 9H7.1C7.04477 9 7 9.04477 7 9.1V9.9C7 9.95523 7.04477 10 7.1 10H7.9C7.95523 10 8 9.95523 8 9.9V9.1C8 9.04477 7.95523 9 7.9 9Z" fill="white"/>
                                            <path d="M4.9 1H4.1C4.04477 1 4 1.04477 4 1.1V1.9C4 1.95523 4.04477 2 4.1 2H4.9C4.95523 2 5 1.95523 5 1.9V1.1C5 1.04477 4.95523 1 4.9 1Z" fill="white"/>
                                            <path d="M2.9 3H2.1C2.04477 3 2 3.04477 2 3.1V3.9C2 3.95523 2.04477 4 2.1 4H2.9C2.95523 4 3 3.95523 3 3.9V3.1C3 3.04477 2.95523 3 2.9 3Z" fill="white"/>
                                            <path d="M4.9 3H4.1C4.04477 3 4 3.04477 4 3.1V3.9C4 3.95523 4.04477 4 4.1 4H4.9C4.95523 4 5 3.95523 5 3.9V3.1C5 3.04477 4.95523 3 4.9 3Z" fill="white"/>
                                            <path d="M2.9 5H2.1C2.04477 5 2 5.04477 2 5.1V5.9C2 5.95523 2.04477 6 2.1 6H2.9C2.95523 6 3 5.95523 3 5.9V5.1C3 5.04477 2.95523 5 2.9 5Z" fill="white"/>
                                            <path d="M2.9 7H2.1C2.04477 7 2 7.04477 2 7.1V9.9C2 9.95523 2.04477 10 2.1 10H2.9C2.95523 10 3 9.95523 3 9.9V7.1C3 7.04477 2.95523 7 2.9 7Z" fill="white"/>
                                        </svg>

                                        ${object.floors} этаж из ${object.floors_total}
                                    </div>
                                    <div class="table">
                                        <div class="tr">
                                            <div class="td">Площадь кухни</div>
                                            <div class="td">${object.kitchen_area} кв.м</div>
                                        </div>
                                        <div class="tr">
                                            <div class="td">Площадь по комнатам</div>
                                            <div class="td">${object.room_area[0]}/${object.room_area[1]}/${object.room_area[2]} кв.м</div>
                                        </div>
                                        <div class="tr">
                                            <div class="td">Высота потолков</div>
                                            <div class="td">${object.ceiling_height} м</div>
                                        </div>
                                        <div class="tr">
                                            <div class="td">Балкон/лождия</div>
                                            <div class="td">${object.balcony}</div>
                                        </div>
                                        <div class="tr">
                                            <div class="td">Тип дома</div>
                                            <div class="td">${object.house_type}</div>
                                        </div>
                                        <div class="tr">
                                            <div class="td">Год постройки</div>
                                            <div class="td">${object.year}</div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="section_product_footer">
                                    <button class="favorite">
                                        <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.4764 18.5623C16.0018 18.5623 15.617 18.9471 15.617 19.4217C15.617 19.6613 15.5358 19.8629 15.3757 20.021C15.2077 20.1869 14.964 20.283 14.7255 20.2811C14.4903 20.2781 14.2993 20.198 14.1417 20.036L9.61579 15.3849C9.45401 15.2186 9.23186 15.1248 8.99991 15.1248C8.76797 15.1248 8.54582 15.2186 8.38404 15.3849L3.85806 20.036C3.70161 20.1968 3.50924 20.277 3.26999 20.2812C3.02893 20.2861 2.78629 20.1901 2.61944 20.0261C2.46239 19.8718 2.38277 19.6735 2.38277 19.4367V3.43746C2.38277 2.48974 3.1538 1.71871 4.10152 1.71871H13.8983C14.846 1.71871 15.617 2.48974 15.617 3.43746V15.1678C15.617 15.6424 16.0018 16.0272 16.4764 16.0272C16.951 16.0272 17.3358 15.6424 17.3358 15.1678V3.43746C17.3357 1.54206 15.7937 0 13.8983 0H4.10152C2.20608 0 0.664062 1.54206 0.664062 3.43746V19.4367C0.664062 20.1316 0.930727 20.7764 1.4149 21.2521C1.90019 21.7289 2.56835 22 3.25448 22C3.26973 22 3.28503 21.9999 3.30028 21.9996C3.99599 21.9874 4.61478 21.7229 5.08984 21.2346L8.99991 17.2164L12.91 21.2346C13.3885 21.7263 14.0088 21.9909 14.7038 21.9997C15.4014 22.0069 16.088 21.7331 16.5833 21.244C17.0685 20.7649 17.3357 20.1177 17.3357 19.4217C17.3358 18.9471 16.951 18.5623 16.4764 18.5623Z"/>
                                        </svg>
                                    </button>
                                    <a href="/pages/catalog-rent/detail.php?id=${object.id}" class="price"><span>${commaSeparateNumber(object.price)} <svg class="ruble" fill="#4B4A4A"><use xlink:href="#Rouble"></use></svg></span><span>Подробнее</span></a>
                                </div>
                            </div>`;
                        }
                        current++;
                    }
                });

                var last = `
                <div class="section_product --last">
                    <div class="section_product_content">
                        <svg class="icon">
                            <use xlink:href="#CommercialRealEstate"></use>
                        </svg>
                        <div class="info">
                            <div class='title'>Коммерческая недвижимость</div>
                            <p>Посмотреть схожие варианты в новостройках той же локации</p>
                        </div>
                    </div>
                    <div class="section_product_footer">
                        <button class="favorite">
                            <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.4764 18.5623C16.0018 18.5623 15.617 18.9471 15.617 19.4217C15.617 19.6613 15.5358 19.8629 15.3757 20.021C15.2077 20.1869 14.964 20.283 14.7255 20.2811C14.4903 20.2781 14.2993 20.198 14.1417 20.036L9.61579 15.3849C9.45401 15.2186 9.23186 15.1248 8.99991 15.1248C8.76797 15.1248 8.54582 15.2186 8.38404 15.3849L3.85806 20.036C3.70161 20.1968 3.50924 20.277 3.26999 20.2812C3.02893 20.2861 2.78629 20.1901 2.61944 20.0261C2.46239 19.8718 2.38277 19.6735 2.38277 19.4367V3.43746C2.38277 2.48974 3.1538 1.71871 4.10152 1.71871H13.8983C14.846 1.71871 15.617 2.48974 15.617 3.43746V15.1678C15.617 15.6424 16.0018 16.0272 16.4764 16.0272C16.951 16.0272 17.3358 15.6424 17.3358 15.1678V3.43746C17.3357 1.54206 15.7937 0 13.8983 0H4.10152C2.20608 0 0.664062 1.54206 0.664062 3.43746V19.4367C0.664062 20.1316 0.930727 20.7764 1.4149 21.2521C1.90019 21.7289 2.56835 22 3.25448 22C3.26973 22 3.28503 21.9999 3.30028 21.9996C3.99599 21.9874 4.61478 21.7229 5.08984 21.2346L8.99991 17.2164L12.91 21.2346C13.3885 21.7263 14.0088 21.9909 14.7038 21.9997C15.4014 22.0069 16.088 21.7331 16.5833 21.244C17.0685 20.7649 17.3357 20.1177 17.3357 19.4217C17.3358 18.9471 16.951 18.5623 16.4764 18.5623Z"/>
                            </svg>
                        </button>
                        <a href="catalog-novostr.html" class="price">Перейти в каталог</a>
                    </div>
                </div>`;

                $("#buildings").html(table + last);
                $("#buildings-list").html(list + last);

                /*$(".section_product[data-id]").on("click", function(){
                    if($(this).hasClass("active")){
                        $(".section_product, .gm-style-iw-a .marker").removeClass("active");
                        map.panTo(new google.maps.LatLng($(this).data('mapx'), $(this).data('mapy')));
                        return;
                    }

                    var id = $(this).data("id");
                    $(".section_product, .gm-style-iw-a .marker").removeClass("active")
                    $(".section_product[data-id="+id+"], .gm-style-iw-a .marker[data-id="+id+"]").addClass("active");
                    map.panTo(new google.maps.LatLng($(this).data('mapx'), $(this).data('mapy')));
                });*/

                //activate sliders
                $('.section__product-slider').slick({
                    autoplay: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true,
                    draggable: false,
                    swipe: true,
                    adaptiveHeight: true
                });

                $(".slider-objects .slick-list").css("overflow", "visible");
                
            });
        });
        </script> 
        <style>
        
            .slider-objects.slick-initialized>.slick-list>.slick-track{
                width: 100% !important;
                max-width: 100% !important;
            }

            .slider-objects.slick-initialized>.slick-list>.slick-track>.slick-slide {
                display: none !important;
                left: 0px !important;
                width: 100% !important;
            }

            .slider-objects.slick-initialized>.slick-list>.slick-track>.slick-slide.slick-active{
                display: block !important;
                left: 0px !important;
                width: 100% !important;
            }
        </style>
     <? endif; ?>  

    <!--Аренда вторичка!-->
    <? if ($APPLICATION->GetCurPage() == "/pages/catalog-vtor/rent.php") : ?>
    
        <script>
            let map, table = ``, list = ``;
            function initMap(){
                map = new google.maps.Map(document.getElementById('buildings-map'), {
                    center: {
                        lat: 55.7725, lng: 37.6227065
                    },
                    zoom: 15,
                    zoomControl: false,
                    mapTypeControl: false,
                    scaleControl: false,
                    streetViewControl: false,
                    fullscreenControl: false,
                    styles: [
                    {
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#444444"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#d5f0c9"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": 45
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#46bcec"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#b2eafe"
                            }
                        ]
                    }
                ]
                });
            }
            function shortenNumber(num, decimalPlaces) {
                var str, suffix = '';
                decimalPlaces = decimalPlaces || 0;
                num = +num;
                var factor = Math.pow(10, decimalPlaces);
                if (num < 1000) {
                    str = num;
                } else if (num < 1000000) {
                    str = Math.floor(num / (1000 / factor)) / factor;
                    suffix = ' тыс.';
                } else if (num < 1000000000) {
                    str = Math.floor(num / (1000000 / factor)) / factor;
                    suffix = ' млн.';
                }
                return str + suffix;
            }
            $(function() {
                $.ajax({ url: "http://dreamrealty-dev.optimosu.beget.tech/local/catalog-rent-json.php"}).done((data) => {
                    var max = 6, current = 0;
                    $('#lider_buildings').slick('unslick');
                    var data = JSON.parse(data);
                    console.log(data);
                    Object.keys(data).forEach(function(obj) {
                        
                        if(max >= current){
                            var object = data[obj];
                            console.log(data[obj]);
                            var images = ``;
                            
                            Object.keys(object.images.special).forEach(function(image) {
                                var _images = (object.special)? data[obj].images.special[image]:data[obj].images.original[image];
                                images += `<div class="section__product-slide" style="${(object.special)?'border-radius: 25px 0 0 25px !important;overflow: hidden':'border-radius: 25px 25px 0px 0px !important;overflow: hidden'}"> 
                                        <img src="${_images}" style="" alt="">
                                    </div>`;
                            });
    
                            table += `
                            <div class="section_product ${(object.special)?'--special':''}">
                                <button class="share">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.2343 3.99994C22.2343 5.79492 20.7793 7.25006 18.9843 7.25006C17.1893 7.25006 15.7344 5.79492 15.7344 3.99994C15.7344 2.20514 17.1893 0.75 18.9843 0.75C20.7793 0.75 22.2343 2.20514 22.2343 3.99994Z" fill="currentColor"/>
                                        <path d="M18.9843 8.00006C16.7783 8.00006 14.9844 6.20599 14.9844 3.99994C14.9844 1.79407 16.7783 0 18.9843 0C21.1904 0 22.9843 1.79407 22.9843 3.99994C22.9843 6.20599 21.1904 8.00006 18.9843 8.00006ZM18.9843 1.5C17.6053 1.5 16.4844 2.62207 16.4844 3.99994C16.4844 5.37799 17.6053 6.50006 18.9843 6.50006C20.3633 6.50006 21.4843 5.37799 21.4843 3.99994C21.4843 2.62207 20.3633 1.5 18.9843 1.5Z" fill="currentColor"/>
                                        <path d="M22.2343 20.0001C22.2343 21.7949 20.7793 23.25 18.9843 23.25C17.1893 23.25 15.7344 21.7949 15.7344 20.0001C15.7344 18.2051 17.1893 16.7499 18.9843 16.7499C20.7793 16.7499 22.2343 18.2051 22.2343 20.0001Z" fill="currentColor"/>
                                        <path d="M18.9843 24C16.7783 24 14.9844 22.2059 14.9844 20.0001C14.9844 17.794 16.7783 15.9999 18.9843 15.9999C21.1904 15.9999 22.9843 17.794 22.9843 20.0001C22.9843 22.2059 21.1904 24 18.9843 24ZM18.9843 17.4999C17.6053 17.4999 16.4844 18.622 16.4844 20.0001C16.4844 21.3779 17.6053 22.5 18.9843 22.5C20.3633 22.5 21.4843 21.3779 21.4843 20.0001C21.4843 18.622 20.3633 17.4999 18.9843 17.4999Z" fill="currentColor"/>
                                        <path d="M8.23444 12C8.23444 13.795 6.7793 15.2499 4.98431 15.2499C3.18951 15.2499 1.73438 13.795 1.73438 12C1.73438 10.205 3.18951 8.75006 4.98431 8.75006C6.7793 8.75006 8.23444 10.205 8.23444 12Z" fill="currentColor"/>
                                        <path d="M4.98431 15.9999C2.77844 15.9999 0.984375 14.2061 0.984375 12C0.984375 9.79395 2.77844 8.00006 4.98431 8.00006C7.19037 8.00006 8.98444 9.79395 8.98444 12C8.98444 14.2061 7.19037 15.9999 4.98431 15.9999ZM4.98431 9.50006C3.60535 9.50006 2.48438 10.6219 2.48438 12C2.48438 13.3781 3.60535 14.4999 4.98431 14.4999C6.36346 14.4999 7.48444 13.3781 7.48444 12C7.48444 10.6219 6.36346 9.50006 4.98431 9.50006Z" fill="currentColor"/>
                                        <path d="M7.34572 11.5201C6.99764 11.5201 6.65963 11.339 6.47561 11.0151C6.2026 10.5361 6.37069 9.92506 6.84969 9.65095L16.1286 4.36103C16.6076 4.08601 17.2186 4.2541 17.4927 4.73494C17.7657 5.21394 17.5976 5.82496 17.1186 6.09907L7.83956 11.389C7.68355 11.478 7.51363 11.5201 7.34572 11.5201Z" fill="currentColor"/>
                                        <path d="M16.6231 19.7701C16.455 19.7701 16.2851 19.728 16.1291 19.639L6.85004 14.3491C6.37104 14.076 6.20313 13.465 6.47614 12.9849C6.74805 12.505 7.35999 12.336 7.84009 12.611L17.1191 17.9009C17.5981 18.174 17.7661 18.785 17.493 19.2651C17.3081 19.589 16.9701 19.7701 16.6231 19.7701Z" fill="currentColor"/>
                                    </svg>
                                </button>
                                <div class="section__product-slider slider" id="product${object.id}slider">
                                    ${images}
                                </div>
                                <div class="section_product_content">
                                    ${(object.special)?'<div class="special">Cпецпредложение</div>':''}
                                    <a href="/pages/catalog-vtor/detail.php?id=${object.id}" class="title">${object.title} <div class="size">${object.footage} м<sup>2</sup></div></a>
                                    <div class="metro_walk">
                                        <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.69915 1L6 6.96737L3.33567 1L1 9H2.7284L3.73619 5.00932L5.72138 9H6.26121L8.24639 4.97203L9.21936 9H11L8.69915 1Z" fill="#4B4A4A" stroke="#4B4A4A" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <${object.metro.name}
                                        <span>
                                            <svg width="10" height="22" viewBox="0 0 10 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.81755 11.6942L7.68122 9.2639C7.54818 9.11261 7.42586 8.80086 7.4197 8.59647L7.34111 6.07476V6.0017C7.34111 5.61313 7.03449 5.29692 6.6577 5.29692H4.56648H3.73546C3.39876 5.29692 3.02312 5.54289 2.87983 5.85698L0.0646496 12.0238C-0.0132588 12.1949 -0.0210043 12.3858 0.0427804 12.5623C0.106565 12.7385 0.234134 12.8776 0.401569 12.9537L0.816397 13.1423C0.904785 13.1825 0.999094 13.2029 1.09682 13.2029C1.36495 13.2029 1.61462 13.0458 1.7333 12.8026L3.05205 10.097V12.8165C3.04658 12.8322 3.03861 12.8465 3.0336 12.8625L0.805007 20.0602C0.712292 20.36 0.740539 20.6755 0.884738 20.9485C1.02894 21.2215 1.27041 21.4169 1.56518 21.4989L1.71417 21.5405C1.81167 21.5677 1.91281 21.5816 2.01441 21.5816C2.52719 21.5816 2.99305 21.2337 3.1475 20.7352L5.22984 14.0097L5.96838 15.8752C6.14857 16.3303 6.34311 17.1272 6.39323 17.6158L6.74655 21.0507C6.80327 21.6006 7.22493 21.9998 7.74933 21.9998C7.83522 21.9998 7.92246 21.989 8.00835 21.9676L8.15847 21.93C8.75622 21.7808 9.17857 21.1475 9.09997 20.5186L8.57671 16.3303C8.51019 15.7982 8.28763 14.9649 8.08056 14.4727L7.37392 12.7944C7.3648 12.7725 7.35182 12.7528 7.34134 12.7317V11.5944L8.61476 12.9654C8.74141 13.1019 8.9109 13.1771 9.09177 13.1771C9.2747 13.1771 9.44555 13.1005 9.57267 12.9614L9.80821 12.7035C10.0602 12.4274 10.0645 11.975 9.81755 11.6942Z" fill="#4B4A4A"/>
                                                <path d="M5.38665 4.69972C6.64321 4.69972 7.66536 3.6456 7.66536 2.34974C7.66536 1.05412 6.64321 0 5.38665 0C4.13032 0 3.1084 1.05412 3.1084 2.34974C3.10817 3.6456 4.13032 4.69972 5.38665 4.69972Z" fill="#4B4A4A"/>
                                            </svg>
                                            ${object.metro.walk} мин
                                        </span>
                                    </div>
                                    <div class="adress">
                                        <svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.76471 4.84615C8.76471 8.30769 4.88235 11 4.88235 11C4.88235 11 1 8.30769 1 4.84615C1 3.82609 1.40903 2.84781 2.13711 2.12651C2.8652 1.40522 3.85269 1 4.88235 1C5.91202 1 6.89951 1.40522 7.62759 2.12651C8.35567 2.84781 8.76471 3.82609 8.76471 4.84615Z" fill="#4B4A4A" stroke="#4B4A4A" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M4.88204 6.38462C5.73971 6.38462 6.43498 5.69582 6.43498 4.84616C6.43498 3.99649 5.73971 3.30769 4.88204 3.30769C4.02438 3.30769 3.3291 3.99649 3.3291 4.84616C3.3291 5.69582 4.02438 6.38462 4.88204 6.38462Z" fill="white"/>
                                        </svg>
                                        ${object.address}
                                    </div>
                                    <div class="floors">
                                        <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 0.5C1 0.223858 1.22386 0 1.5 0H5.5C5.77614 0 6 0.223858 6 0.5V9.5C6 9.77614 5.77614 10 5.5 10H1V0.5Z" fill="#4B4A4A"/>
                                            <path d="M8.9999 10.1H9.0999V9.99999V4.49999C9.0999 4.16862 8.83127 3.89999 8.4999 3.89999H4.4999C4.16853 3.89999 3.8999 4.16862 3.8999 4.49999V9.99999V10.1H3.9999H8.9999Z" fill="#4B4A4A" stroke="white" stroke-width="0.2"/>
                                            <path d="M9.75 10H0.25C0.111929 10 0 10.1119 0 10.25C0 10.3881 0.111929 10.5 0.25 10.5H9.75C9.88807 10.5 10 10.3881 10 10.25C10 10.1119 9.88807 10 9.75 10Z" fill="#4B4A4A"/>
                                            <path d="M2.9 1H2.1C2.04477 1 2 1.04477 2 1.1V1.9C2 1.95523 2.04477 2 2.1 2H2.9C2.95523 2 3 1.95523 3 1.9V1.1C3 1.04477 2.95523 1 2.9 1Z" fill="white"/>
                                            <path d="M5.9 5H5.1C5.04477 5 5 5.04477 5 5.1V5.9C5 5.95523 5.04477 6 5.1 6H5.9C5.95523 6 6 5.95523 6 5.9V5.1C6 5.04477 5.95523 5 5.9 5Z" fill="white"/>
                                            <path d="M7.9 5H7.1C7.04477 5 7 5.04477 7 5.1V5.9C7 5.95523 7.04477 6 7.1 6H7.9C7.95523 6 8 5.95523 8 5.9V5.1C8 5.04477 7.95523 5 7.9 5Z" fill="white"/>
                                            <path d="M5.9 7H5.1C5.04477 7 5 7.04477 5 7.1V7.9C5 7.95523 5.04477 8 5.1 8H5.9C5.95523 8 6 7.95523 6 7.9V7.1C6 7.04477 5.95523 7 5.9 7Z" fill="white"/>
                                            <path d="M7.9 7H7.1C7.04477 7 7 7.04477 7 7.1V7.9C7 7.95523 7.04477 8 7.1 8H7.9C7.95523 8 8 7.95523 8 7.9V7.1C8 7.04477 7.95523 7 7.9 7Z" fill="white"/>
                                            <path d="M5.9 9H5.1C5.04477 9 5 9.04477 5 9.1V9.9C5 9.95523 5.04477 10 5.1 10H5.9C5.95523 10 6 9.95523 6 9.9V9.1C6 9.04477 5.95523 9 5.9 9Z" fill="white"/>
                                            <path d="M7.9 9H7.1C7.04477 9 7 9.04477 7 9.1V9.9C7 9.95523 7.04477 10 7.1 10H7.9C7.95523 10 8 9.95523 8 9.9V9.1C8 9.04477 7.95523 9 7.9 9Z" fill="white"/>
                                            <path d="M4.9 1H4.1C4.04477 1 4 1.04477 4 1.1V1.9C4 1.95523 4.04477 2 4.1 2H4.9C4.95523 2 5 1.95523 5 1.9V1.1C5 1.04477 4.95523 1 4.9 1Z" fill="white"/>
                                            <path d="M2.9 3H2.1C2.04477 3 2 3.04477 2 3.1V3.9C2 3.95523 2.04477 4 2.1 4H2.9C2.95523 4 3 3.95523 3 3.9V3.1C3 3.04477 2.95523 3 2.9 3Z" fill="white"/>
                                            <path d="M4.9 3H4.1C4.04477 3 4 3.04477 4 3.1V3.9C4 3.95523 4.04477 4 4.1 4H4.9C4.95523 4 5 3.95523 5 3.9V3.1C5 3.04477 4.95523 3 4.9 3Z" fill="white"/>
                                            <path d="M2.9 5H2.1C2.04477 5 2 5.04477 2 5.1V5.9C2 5.95523 2.04477 6 2.1 6H2.9C2.95523 6 3 5.95523 3 5.9V5.1C3 5.04477 2.95523 5 2.9 5Z" fill="white"/>
                                            <path d="M2.9 7H2.1C2.04477 7 2 7.04477 2 7.1V9.9C2 9.95523 2.04477 10 2.1 10H2.9C2.95523 10 3 9.95523 3 9.9V7.1C3 7.04477 2.95523 7 2.9 7Z" fill="white"/>
                                        </svg>
    
                                        ${object.floors} этаж из ${object.floors_total}
                                    </div>
                                    ${(object.special)?'<div class="description">' + object.description + '</div>':''}
                                </div>
                                <div class="section_product_footer">
                                    <button class="favorite">
                                        <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.4764 18.5623C16.0018 18.5623 15.617 18.9471 15.617 19.4217C15.617 19.6613 15.5358 19.8629 15.3757 20.021C15.2077 20.1869 14.964 20.283 14.7255 20.2811C14.4903 20.2781 14.2993 20.198 14.1417 20.036L9.61579 15.3849C9.45401 15.2186 9.23186 15.1248 8.99991 15.1248C8.76797 15.1248 8.54582 15.2186 8.38404 15.3849L3.85806 20.036C3.70161 20.1968 3.50924 20.277 3.26999 20.2812C3.02893 20.2861 2.78629 20.1901 2.61944 20.0261C2.46239 19.8718 2.38277 19.6735 2.38277 19.4367V3.43746C2.38277 2.48974 3.1538 1.71871 4.10152 1.71871H13.8983C14.846 1.71871 15.617 2.48974 15.617 3.43746V15.1678C15.617 15.6424 16.0018 16.0272 16.4764 16.0272C16.951 16.0272 17.3358 15.6424 17.3358 15.1678V3.43746C17.3357 1.54206 15.7937 0 13.8983 0H4.10152C2.20608 0 0.664062 1.54206 0.664062 3.43746V19.4367C0.664062 20.1316 0.930727 20.7764 1.4149 21.2521C1.90019 21.7289 2.56835 22 3.25448 22C3.26973 22 3.28503 21.9999 3.30028 21.9996C3.99599 21.9874 4.61478 21.7229 5.08984 21.2346L8.99991 17.2164L12.91 21.2346C13.3885 21.7263 14.0088 21.9909 14.7038 21.9997C15.4014 22.0069 16.088 21.7331 16.5833 21.244C17.0685 20.7649 17.3357 20.1177 17.3357 19.4217C17.3358 18.9471 16.951 18.5623 16.4764 18.5623Z"/>
                                        </svg>
                                    </button>
                                    <a href="/pages/catalog-vtor/detail.php?id=${object.id}" class="price"><span>${commaSeparateNumber(object.price)} <svg class="ruble"><use xlink:href="#Rouble"></use></svg></span><span>Подробнее</span></a>
                                </div>
                            </div>`;
    
                            if(3 >= current){
                                const marker = new google.maps.Marker({
                                    position: { lat: object.map.point.lat, lng: object.map.point.lng},
                                    map,
                                    optimized: true,
                                    visible: false
                                });
    
                                var content = shortenNumber(object.price, 1)+'<svg class="ruble"><use xlink:href="#Rouble"></use></svg>';
                                const windowMarker = new google.maps.InfoWindow({content: "<div class='marker' data-id='" + object.id + "'>" + content + "</div>"});
                                windowMarker.open(marker.getMap(), marker);
    
                                google.maps.event.addListener(windowMarker, 'domready', function() {
                                    $(".gm-style-iw-a").removeClass("--fixed").addClass("--fixed");
                                    $(".gm-style-iw-a div[data-id]").on("click", function(){
                                        var id = $(this).data("id");
                                        var obj = $(".section_product[data-id="+id+"]");
                                        $(".section_product, .gm-style-iw-a div").removeClass("active")
                                        $(".section_product[data-id="+id+"], .gm-style-iw-a div[data-id="+id+"]").addClass("active");
                                        map.panTo(new google.maps.LatLng(obj.data('mapx'), obj.data('mapy')));
                                    });
                                });
    
    
                                list += `
                                <div class="section_product" data-id="${object.id}" data-mapx="${object.map.point.lat}" data-mapy="${object.map.point.lng}" data-campx="${object.map.camera.lat}" data-camy="${object.map.camera.lng}" data-camzoom="${object.map.camera.zoom}">
                                    <div class="section__product-image">
                                        <img src="${object.images.original[0]}" alt="">
                                    </div>
                                    <div class="section_product_content">
                                        <a href="/pages/catalog-vtor/detail.php?id=${object.id}" class="title">${object.title} <div class="size">${object.footage} м<sup>2</sup></div></a>
                                        <div class="metro_walk">
                                            <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.69915 1L6 6.96737L3.33567 1L1 9H2.7284L3.73619 5.00932L5.72138 9H6.26121L8.24639 4.97203L9.21936 9H11L8.69915 1Z" fill="#4B4A4A" stroke="#4B4A4A" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            ${object.metro.name}
                                            <span>
                                                <svg width="10" height="22" viewBox="0 0 10 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.81755 11.6942L7.68122 9.2639C7.54818 9.11261 7.42586 8.80086 7.4197 8.59647L7.34111 6.07476V6.0017C7.34111 5.61313 7.03449 5.29692 6.6577 5.29692H4.56648H3.73546C3.39876 5.29692 3.02312 5.54289 2.87983 5.85698L0.0646496 12.0238C-0.0132588 12.1949 -0.0210043 12.3858 0.0427804 12.5623C0.106565 12.7385 0.234134 12.8776 0.401569 12.9537L0.816397 13.1423C0.904785 13.1825 0.999094 13.2029 1.09682 13.2029C1.36495 13.2029 1.61462 13.0458 1.7333 12.8026L3.05205 10.097V12.8165C3.04658 12.8322 3.03861 12.8465 3.0336 12.8625L0.805007 20.0602C0.712292 20.36 0.740539 20.6755 0.884738 20.9485C1.02894 21.2215 1.27041 21.4169 1.56518 21.4989L1.71417 21.5405C1.81167 21.5677 1.91281 21.5816 2.01441 21.5816C2.52719 21.5816 2.99305 21.2337 3.1475 20.7352L5.22984 14.0097L5.96838 15.8752C6.14857 16.3303 6.34311 17.1272 6.39323 17.6158L6.74655 21.0507C6.80327 21.6006 7.22493 21.9998 7.74933 21.9998C7.83522 21.9998 7.92246 21.989 8.00835 21.9676L8.15847 21.93C8.75622 21.7808 9.17857 21.1475 9.09997 20.5186L8.57671 16.3303C8.51019 15.7982 8.28763 14.9649 8.08056 14.4727L7.37392 12.7944C7.3648 12.7725 7.35182 12.7528 7.34134 12.7317V11.5944L8.61476 12.9654C8.74141 13.1019 8.9109 13.1771 9.09177 13.1771C9.2747 13.1771 9.44555 13.1005 9.57267 12.9614L9.80821 12.7035C10.0602 12.4274 10.0645 11.975 9.81755 11.6942Z" fill="#4B4A4A"/>
                                                    <path d="M5.38665 4.69972C6.64321 4.69972 7.66536 3.6456 7.66536 2.34974C7.66536 1.05412 6.64321 0 5.38665 0C4.13032 0 3.1084 1.05412 3.1084 2.34974C3.10817 3.6456 4.13032 4.69972 5.38665 4.69972Z" fill="#4B4A4A"/>
                                                </svg>
                                                ${object.metro.walk} мин
                                            </span>
                                        </div>
                                        <div class="adress">
                                            <svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.76471 4.84615C8.76471 8.30769 4.88235 11 4.88235 11C4.88235 11 1 8.30769 1 4.84615C1 3.82609 1.40903 2.84781 2.13711 2.12651C2.8652 1.40522 3.85269 1 4.88235 1C5.91202 1 6.89951 1.40522 7.62759 2.12651C8.35567 2.84781 8.76471 3.82609 8.76471 4.84615Z" fill="#4B4A4A" stroke="#4B4A4A" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M4.88204 6.38462C5.73971 6.38462 6.43498 5.69582 6.43498 4.84616C6.43498 3.99649 5.73971 3.30769 4.88204 3.30769C4.02438 3.30769 3.3291 3.99649 3.3291 4.84616C3.3291 5.69582 4.02438 6.38462 4.88204 6.38462Z" fill="white"/>
                                            </svg>
                                            ${object.address}
                                        </div>
                                        <div class="floors">
                                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 0.5C1 0.223858 1.22386 0 1.5 0H5.5C5.77614 0 6 0.223858 6 0.5V9.5C6 9.77614 5.77614 10 5.5 10H1V0.5Z" fill="#4B4A4A"/>
                                                <path d="M8.9999 10.1H9.0999V9.99999V4.49999C9.0999 4.16862 8.83127 3.89999 8.4999 3.89999H4.4999C4.16853 3.89999 3.8999 4.16862 3.8999 4.49999V9.99999V10.1H3.9999H8.9999Z" fill="#4B4A4A" stroke="white" stroke-width="0.2"/>
                                                <path d="M9.75 10H0.25C0.111929 10 0 10.1119 0 10.25C0 10.3881 0.111929 10.5 0.25 10.5H9.75C9.88807 10.5 10 10.3881 10 10.25C10 10.1119 9.88807 10 9.75 10Z" fill="#4B4A4A"/>
                                                <path d="M2.9 1H2.1C2.04477 1 2 1.04477 2 1.1V1.9C2 1.95523 2.04477 2 2.1 2H2.9C2.95523 2 3 1.95523 3 1.9V1.1C3 1.04477 2.95523 1 2.9 1Z" fill="white"/>
                                                <path d="M5.9 5H5.1C5.04477 5 5 5.04477 5 5.1V5.9C5 5.95523 5.04477 6 5.1 6H5.9C5.95523 6 6 5.95523 6 5.9V5.1C6 5.04477 5.95523 5 5.9 5Z" fill="white"/>
                                                <path d="M7.9 5H7.1C7.04477 5 7 5.04477 7 5.1V5.9C7 5.95523 7.04477 6 7.1 6H7.9C7.95523 6 8 5.95523 8 5.9V5.1C8 5.04477 7.95523 5 7.9 5Z" fill="white"/>
                                                <path d="M5.9 7H5.1C5.04477 7 5 7.04477 5 7.1V7.9C5 7.95523 5.04477 8 5.1 8H5.9C5.95523 8 6 7.95523 6 7.9V7.1C6 7.04477 5.95523 7 5.9 7Z" fill="white"/>
                                                <path d="M7.9 7H7.1C7.04477 7 7 7.04477 7 7.1V7.9C7 7.95523 7.04477 8 7.1 8H7.9C7.95523 8 8 7.95523 8 7.9V7.1C8 7.04477 7.95523 7 7.9 7Z" fill="white"/>
                                                <path d="M5.9 9H5.1C5.04477 9 5 9.04477 5 9.1V9.9C5 9.95523 5.04477 10 5.1 10H5.9C5.95523 10 6 9.95523 6 9.9V9.1C6 9.04477 5.95523 9 5.9 9Z" fill="white"/>
                                                <path d="M7.9 9H7.1C7.04477 9 7 9.04477 7 9.1V9.9C7 9.95523 7.04477 10 7.1 10H7.9C7.95523 10 8 9.95523 8 9.9V9.1C8 9.04477 7.95523 9 7.9 9Z" fill="white"/>
                                                <path d="M4.9 1H4.1C4.04477 1 4 1.04477 4 1.1V1.9C4 1.95523 4.04477 2 4.1 2H4.9C4.95523 2 5 1.95523 5 1.9V1.1C5 1.04477 4.95523 1 4.9 1Z" fill="white"/>
                                                <path d="M2.9 3H2.1C2.04477 3 2 3.04477 2 3.1V3.9C2 3.95523 2.04477 4 2.1 4H2.9C2.95523 4 3 3.95523 3 3.9V3.1C3 3.04477 2.95523 3 2.9 3Z" fill="white"/>
                                                <path d="M4.9 3H4.1C4.04477 3 4 3.04477 4 3.1V3.9C4 3.95523 4.04477 4 4.1 4H4.9C4.95523 4 5 3.95523 5 3.9V3.1C5 3.04477 4.95523 3 4.9 3Z" fill="white"/>
                                                <path d="M2.9 5H2.1C2.04477 5 2 5.04477 2 5.1V5.9C2 5.95523 2.04477 6 2.1 6H2.9C2.95523 6 3 5.95523 3 5.9V5.1C3 5.04477 2.95523 5 2.9 5Z" fill="white"/>
                                                <path d="M2.9 7H2.1C2.04477 7 2 7.04477 2 7.1V9.9C2 9.95523 2.04477 10 2.1 10H2.9C2.95523 10 3 9.95523 3 9.9V7.1C3 7.04477 2.95523 7 2.9 7Z" fill="white"/>
                                            </svg>
    
                                            ${object.floors} /*этаж из ${object.floors_total}*/
                                        </div>
                                        <div class="table">
                                            <div class="tr">
                                                <div class="td">Площадь кухни</div>
                                                <div class="td">${object.kitchen_area} кв.м</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Площадь по комнатам</div>
                                                <div class="td">${object.room_area[0]}/${object.room_area[1]}/${object.room_area[2]} кв.м</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Высота потолков</div>
                                                <div class="td">${object.ceiling_height} м</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Балкон/лождия</div>
                                                <div class="td">${object.balcony}</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Тип дома</div>
                                                <div class="td">${object.house_type}</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Год постройки</div>
                                                <div class="td">${object.year}</div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="section_product_footer">
                                        <button class="favorite">
                                            <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.4764 18.5623C16.0018 18.5623 15.617 18.9471 15.617 19.4217C15.617 19.6613 15.5358 19.8629 15.3757 20.021C15.2077 20.1869 14.964 20.283 14.7255 20.2811C14.4903 20.2781 14.2993 20.198 14.1417 20.036L9.61579 15.3849C9.45401 15.2186 9.23186 15.1248 8.99991 15.1248C8.76797 15.1248 8.54582 15.2186 8.38404 15.3849L3.85806 20.036C3.70161 20.1968 3.50924 20.277 3.26999 20.2812C3.02893 20.2861 2.78629 20.1901 2.61944 20.0261C2.46239 19.8718 2.38277 19.6735 2.38277 19.4367V3.43746C2.38277 2.48974 3.1538 1.71871 4.10152 1.71871H13.8983C14.846 1.71871 15.617 2.48974 15.617 3.43746V15.1678C15.617 15.6424 16.0018 16.0272 16.4764 16.0272C16.951 16.0272 17.3358 15.6424 17.3358 15.1678V3.43746C17.3357 1.54206 15.7937 0 13.8983 0H4.10152C2.20608 0 0.664062 1.54206 0.664062 3.43746V19.4367C0.664062 20.1316 0.930727 20.7764 1.4149 21.2521C1.90019 21.7289 2.56835 22 3.25448 22C3.26973 22 3.28503 21.9999 3.30028 21.9996C3.99599 21.9874 4.61478 21.7229 5.08984 21.2346L8.99991 17.2164L12.91 21.2346C13.3885 21.7263 14.0088 21.9909 14.7038 21.9997C15.4014 22.0069 16.088 21.7331 16.5833 21.244C17.0685 20.7649 17.3357 20.1177 17.3357 19.4217C17.3358 18.9471 16.951 18.5623 16.4764 18.5623Z"/>
                                            </svg>
                                        </button>
                                        <a href="/pages/catalog-vtor/detail.php?id=${object.id}" class="price"><span>${commaSeparateNumber(object.price)} <svg class="ruble" fill="#4B4A4A"><use xlink:href="#Rouble"></use></svg></span><span>Подробнее</span></a>
                                    </div>
                                </div>`;
                            }
                            current++;
                        }
                    });
    
                    var last = `
                    <div class="section_product --last">
                        <div class="section_product_content">
                            <svg class="icon">
                                <use xlink:href="#CraneIcon"></use>
                            </svg>
                            <div class="info">
                                <div class='title'>Новостройки</div>
                                <p>Посмотреть схожие варианты в новостройках той же локации</p>
                            </div>
                        </div>
                        <div class="section_product_footer">
                            <button class="favorite">
                                <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.4764 18.5623C16.0018 18.5623 15.617 18.9471 15.617 19.4217C15.617 19.6613 15.5358 19.8629 15.3757 20.021C15.2077 20.1869 14.964 20.283 14.7255 20.2811C14.4903 20.2781 14.2993 20.198 14.1417 20.036L9.61579 15.3849C9.45401 15.2186 9.23186 15.1248 8.99991 15.1248C8.76797 15.1248 8.54582 15.2186 8.38404 15.3849L3.85806 20.036C3.70161 20.1968 3.50924 20.277 3.26999 20.2812C3.02893 20.2861 2.78629 20.1901 2.61944 20.0261C2.46239 19.8718 2.38277 19.6735 2.38277 19.4367V3.43746C2.38277 2.48974 3.1538 1.71871 4.10152 1.71871H13.8983C14.846 1.71871 15.617 2.48974 15.617 3.43746V15.1678C15.617 15.6424 16.0018 16.0272 16.4764 16.0272C16.951 16.0272 17.3358 15.6424 17.3358 15.1678V3.43746C17.3357 1.54206 15.7937 0 13.8983 0H4.10152C2.20608 0 0.664062 1.54206 0.664062 3.43746V19.4367C0.664062 20.1316 0.930727 20.7764 1.4149 21.2521C1.90019 21.7289 2.56835 22 3.25448 22C3.26973 22 3.28503 21.9999 3.30028 21.9996C3.99599 21.9874 4.61478 21.7229 5.08984 21.2346L8.99991 17.2164L12.91 21.2346C13.3885 21.7263 14.0088 21.9909 14.7038 21.9997C15.4014 22.0069 16.088 21.7331 16.5833 21.244C17.0685 20.7649 17.3357 20.1177 17.3357 19.4217C17.3358 18.9471 16.951 18.5623 16.4764 18.5623Z"/>
                                </svg>
                            </button>
                            <a href="/pages/catalog-novostr/" class="price">Перейти в каталог</a>
                        </div>
                    </div>`;
    
                    $("#buildings").html(table + last);
                    $("#buildings-list").html(list + last);
    
                    /*$(".section_product[data-id]").on("click", function(){
                        if($(this).hasClass("active")){
                            $(".section_product, .gm-style-iw-a .marker").removeClass("active");
                            map.panTo(new google.maps.LatLng($(this).data('mapx'), $(this).data('mapy')));
                            return;
                        }
    
                        var id = $(this).data("id");
                        $(".section_product, .gm-style-iw-a .marker").removeClass("active")
                        $(".section_product[data-id="+id+"], .gm-style-iw-a .marker[data-id="+id+"]").addClass("active");
                        map.panTo(new google.maps.LatLng($(this).data('mapx'), $(this).data('mapy')));
                    });*/
    
                    //activate sliders
                    $('.section__product-slider').slick({
                        autoplay: false,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        dots: true,
                        draggable: false,
                        swipe: true,
                        adaptiveHeight: true
                    });
    
                    $(".slider-objects .slick-list").css("overflow", "visible");
                    
                });
            });
            </script> 
            <style>
            
                .slider-objects.slick-initialized>.slick-list>.slick-track{
                    width: 100% !important;
                    max-width: 100% !important;
                }
    
                .slider-objects.slick-initialized>.slick-list>.slick-track>.slick-slide {
                    display: none !important;
                    left: 0px !important;
                    width: 100% !important;
                }
    
                .slider-objects.slick-initialized>.slick-list>.slick-track>.slick-slide.slick-active{
                    display: block !important;
                    left: 0px !important;
                    width: 100% !important;
                }
            </style>
            <? endif; ?>

            <!--Аренда новострой!-->
            <? if ($APPLICATION->GetCurPage() == "/pages/catalog-novostr/rent.php") : ?>
    
        <script>
            let map, table = ``, list = ``;
            function initMap(){
                map = new google.maps.Map(document.getElementById('buildings-map'), {
                    center: {
                        lat: 55.7725, lng: 37.6227065
                    },
                    zoom: 15,
                    zoomControl: false,
                    mapTypeControl: false,
                    scaleControl: false,
                    streetViewControl: false,
                    fullscreenControl: false,
                    styles: [
                    {
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#444444"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#d5f0c9"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": 45
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#46bcec"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#b2eafe"
                            }
                        ]
                    }
                ]
                });
            }
            function shortenNumber(num, decimalPlaces) {
                var str, suffix = '';
                decimalPlaces = decimalPlaces || 0;
                num = +num;
                var factor = Math.pow(10, decimalPlaces);
                if (num < 1000) {
                    str = num;
                } else if (num < 1000000) {
                    str = Math.floor(num / (1000 / factor)) / factor;
                    suffix = ' тыс.';
                } else if (num < 1000000000) {
                    str = Math.floor(num / (1000000 / factor)) / factor;
                    suffix = ' млн.';
                }
                return str + suffix;
            }
            $(function() {
                $.ajax({ url: "http://dreamrealty-dev.optimosu.beget.tech/local/catalog-rent-json.php?is_new=1"}).done((data) => {
                    var max = 6, current = 0;
                    $('#lider_buildings').slick('unslick');
                    var data = JSON.parse(data);
                    console.log(data);
                    Object.keys(data).forEach(function(obj) {
                        
                        if(max >= current){
                            var object = data[obj];
                            console.log(data[obj]);
                            var images = ``;
                            
                            Object.keys(object.images.special).forEach(function(image) {
                                var _images = (object.special)? data[obj].images.special[image]:data[obj].images.original[image];
                                images += `<div class="section__product-slide" style="${(object.special)?'border-radius: 25px 0 0 25px !important;overflow: hidden':'border-radius: 25px 25px 0px 0px !important;overflow: hidden'}"> 
                                        <img src="${_images}" style="" alt="">
                                    </div>`;
                            });
    
                            table += `
                            <div class="section_product ${(object.special)?'--special':''}">
                                <button class="share">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.2343 3.99994C22.2343 5.79492 20.7793 7.25006 18.9843 7.25006C17.1893 7.25006 15.7344 5.79492 15.7344 3.99994C15.7344 2.20514 17.1893 0.75 18.9843 0.75C20.7793 0.75 22.2343 2.20514 22.2343 3.99994Z" fill="currentColor"/>
                                        <path d="M18.9843 8.00006C16.7783 8.00006 14.9844 6.20599 14.9844 3.99994C14.9844 1.79407 16.7783 0 18.9843 0C21.1904 0 22.9843 1.79407 22.9843 3.99994C22.9843 6.20599 21.1904 8.00006 18.9843 8.00006ZM18.9843 1.5C17.6053 1.5 16.4844 2.62207 16.4844 3.99994C16.4844 5.37799 17.6053 6.50006 18.9843 6.50006C20.3633 6.50006 21.4843 5.37799 21.4843 3.99994C21.4843 2.62207 20.3633 1.5 18.9843 1.5Z" fill="currentColor"/>
                                        <path d="M22.2343 20.0001C22.2343 21.7949 20.7793 23.25 18.9843 23.25C17.1893 23.25 15.7344 21.7949 15.7344 20.0001C15.7344 18.2051 17.1893 16.7499 18.9843 16.7499C20.7793 16.7499 22.2343 18.2051 22.2343 20.0001Z" fill="currentColor"/>
                                        <path d="M18.9843 24C16.7783 24 14.9844 22.2059 14.9844 20.0001C14.9844 17.794 16.7783 15.9999 18.9843 15.9999C21.1904 15.9999 22.9843 17.794 22.9843 20.0001C22.9843 22.2059 21.1904 24 18.9843 24ZM18.9843 17.4999C17.6053 17.4999 16.4844 18.622 16.4844 20.0001C16.4844 21.3779 17.6053 22.5 18.9843 22.5C20.3633 22.5 21.4843 21.3779 21.4843 20.0001C21.4843 18.622 20.3633 17.4999 18.9843 17.4999Z" fill="currentColor"/>
                                        <path d="M8.23444 12C8.23444 13.795 6.7793 15.2499 4.98431 15.2499C3.18951 15.2499 1.73438 13.795 1.73438 12C1.73438 10.205 3.18951 8.75006 4.98431 8.75006C6.7793 8.75006 8.23444 10.205 8.23444 12Z" fill="currentColor"/>
                                        <path d="M4.98431 15.9999C2.77844 15.9999 0.984375 14.2061 0.984375 12C0.984375 9.79395 2.77844 8.00006 4.98431 8.00006C7.19037 8.00006 8.98444 9.79395 8.98444 12C8.98444 14.2061 7.19037 15.9999 4.98431 15.9999ZM4.98431 9.50006C3.60535 9.50006 2.48438 10.6219 2.48438 12C2.48438 13.3781 3.60535 14.4999 4.98431 14.4999C6.36346 14.4999 7.48444 13.3781 7.48444 12C7.48444 10.6219 6.36346 9.50006 4.98431 9.50006Z" fill="currentColor"/>
                                        <path d="M7.34572 11.5201C6.99764 11.5201 6.65963 11.339 6.47561 11.0151C6.2026 10.5361 6.37069 9.92506 6.84969 9.65095L16.1286 4.36103C16.6076 4.08601 17.2186 4.2541 17.4927 4.73494C17.7657 5.21394 17.5976 5.82496 17.1186 6.09907L7.83956 11.389C7.68355 11.478 7.51363 11.5201 7.34572 11.5201Z" fill="currentColor"/>
                                        <path d="M16.6231 19.7701C16.455 19.7701 16.2851 19.728 16.1291 19.639L6.85004 14.3491C6.37104 14.076 6.20313 13.465 6.47614 12.9849C6.74805 12.505 7.35999 12.336 7.84009 12.611L17.1191 17.9009C17.5981 18.174 17.7661 18.785 17.493 19.2651C17.3081 19.589 16.9701 19.7701 16.6231 19.7701Z" fill="currentColor"/>
                                    </svg>
                                </button>
                                <div class="section__product-slider slider" id="product${object.id}slider">
                                    ${images}
                                </div>
                                <div class="section_product_content">
                                    ${(object.special)?'<div class="special">Cпецпредложение</div>':''}
                                    <a href="/pages/catalog-vtor/detail.php?id=${object.id}" class="title">${object.title} <div class="size">${object.footage} м<sup>2</sup></div></a>
                                    <div class="metro_walk">
                                        <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.69915 1L6 6.96737L3.33567 1L1 9H2.7284L3.73619 5.00932L5.72138 9H6.26121L8.24639 4.97203L9.21936 9H11L8.69915 1Z" fill="#4B4A4A" stroke="#4B4A4A" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <${object.metro.name}
                                        <span>
                                            <svg width="10" height="22" viewBox="0 0 10 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.81755 11.6942L7.68122 9.2639C7.54818 9.11261 7.42586 8.80086 7.4197 8.59647L7.34111 6.07476V6.0017C7.34111 5.61313 7.03449 5.29692 6.6577 5.29692H4.56648H3.73546C3.39876 5.29692 3.02312 5.54289 2.87983 5.85698L0.0646496 12.0238C-0.0132588 12.1949 -0.0210043 12.3858 0.0427804 12.5623C0.106565 12.7385 0.234134 12.8776 0.401569 12.9537L0.816397 13.1423C0.904785 13.1825 0.999094 13.2029 1.09682 13.2029C1.36495 13.2029 1.61462 13.0458 1.7333 12.8026L3.05205 10.097V12.8165C3.04658 12.8322 3.03861 12.8465 3.0336 12.8625L0.805007 20.0602C0.712292 20.36 0.740539 20.6755 0.884738 20.9485C1.02894 21.2215 1.27041 21.4169 1.56518 21.4989L1.71417 21.5405C1.81167 21.5677 1.91281 21.5816 2.01441 21.5816C2.52719 21.5816 2.99305 21.2337 3.1475 20.7352L5.22984 14.0097L5.96838 15.8752C6.14857 16.3303 6.34311 17.1272 6.39323 17.6158L6.74655 21.0507C6.80327 21.6006 7.22493 21.9998 7.74933 21.9998C7.83522 21.9998 7.92246 21.989 8.00835 21.9676L8.15847 21.93C8.75622 21.7808 9.17857 21.1475 9.09997 20.5186L8.57671 16.3303C8.51019 15.7982 8.28763 14.9649 8.08056 14.4727L7.37392 12.7944C7.3648 12.7725 7.35182 12.7528 7.34134 12.7317V11.5944L8.61476 12.9654C8.74141 13.1019 8.9109 13.1771 9.09177 13.1771C9.2747 13.1771 9.44555 13.1005 9.57267 12.9614L9.80821 12.7035C10.0602 12.4274 10.0645 11.975 9.81755 11.6942Z" fill="#4B4A4A"/>
                                                <path d="M5.38665 4.69972C6.64321 4.69972 7.66536 3.6456 7.66536 2.34974C7.66536 1.05412 6.64321 0 5.38665 0C4.13032 0 3.1084 1.05412 3.1084 2.34974C3.10817 3.6456 4.13032 4.69972 5.38665 4.69972Z" fill="#4B4A4A"/>
                                            </svg>
                                            ${object.metro.walk} мин
                                        </span>
                                    </div>
                                    <div class="adress">
                                        <svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.76471 4.84615C8.76471 8.30769 4.88235 11 4.88235 11C4.88235 11 1 8.30769 1 4.84615C1 3.82609 1.40903 2.84781 2.13711 2.12651C2.8652 1.40522 3.85269 1 4.88235 1C5.91202 1 6.89951 1.40522 7.62759 2.12651C8.35567 2.84781 8.76471 3.82609 8.76471 4.84615Z" fill="#4B4A4A" stroke="#4B4A4A" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M4.88204 6.38462C5.73971 6.38462 6.43498 5.69582 6.43498 4.84616C6.43498 3.99649 5.73971 3.30769 4.88204 3.30769C4.02438 3.30769 3.3291 3.99649 3.3291 4.84616C3.3291 5.69582 4.02438 6.38462 4.88204 6.38462Z" fill="white"/>
                                        </svg>
                                        ${object.address}
                                    </div>
                                    <div class="floors">
                                        <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 0.5C1 0.223858 1.22386 0 1.5 0H5.5C5.77614 0 6 0.223858 6 0.5V9.5C6 9.77614 5.77614 10 5.5 10H1V0.5Z" fill="#4B4A4A"/>
                                            <path d="M8.9999 10.1H9.0999V9.99999V4.49999C9.0999 4.16862 8.83127 3.89999 8.4999 3.89999H4.4999C4.16853 3.89999 3.8999 4.16862 3.8999 4.49999V9.99999V10.1H3.9999H8.9999Z" fill="#4B4A4A" stroke="white" stroke-width="0.2"/>
                                            <path d="M9.75 10H0.25C0.111929 10 0 10.1119 0 10.25C0 10.3881 0.111929 10.5 0.25 10.5H9.75C9.88807 10.5 10 10.3881 10 10.25C10 10.1119 9.88807 10 9.75 10Z" fill="#4B4A4A"/>
                                            <path d="M2.9 1H2.1C2.04477 1 2 1.04477 2 1.1V1.9C2 1.95523 2.04477 2 2.1 2H2.9C2.95523 2 3 1.95523 3 1.9V1.1C3 1.04477 2.95523 1 2.9 1Z" fill="white"/>
                                            <path d="M5.9 5H5.1C5.04477 5 5 5.04477 5 5.1V5.9C5 5.95523 5.04477 6 5.1 6H5.9C5.95523 6 6 5.95523 6 5.9V5.1C6 5.04477 5.95523 5 5.9 5Z" fill="white"/>
                                            <path d="M7.9 5H7.1C7.04477 5 7 5.04477 7 5.1V5.9C7 5.95523 7.04477 6 7.1 6H7.9C7.95523 6 8 5.95523 8 5.9V5.1C8 5.04477 7.95523 5 7.9 5Z" fill="white"/>
                                            <path d="M5.9 7H5.1C5.04477 7 5 7.04477 5 7.1V7.9C5 7.95523 5.04477 8 5.1 8H5.9C5.95523 8 6 7.95523 6 7.9V7.1C6 7.04477 5.95523 7 5.9 7Z" fill="white"/>
                                            <path d="M7.9 7H7.1C7.04477 7 7 7.04477 7 7.1V7.9C7 7.95523 7.04477 8 7.1 8H7.9C7.95523 8 8 7.95523 8 7.9V7.1C8 7.04477 7.95523 7 7.9 7Z" fill="white"/>
                                            <path d="M5.9 9H5.1C5.04477 9 5 9.04477 5 9.1V9.9C5 9.95523 5.04477 10 5.1 10H5.9C5.95523 10 6 9.95523 6 9.9V9.1C6 9.04477 5.95523 9 5.9 9Z" fill="white"/>
                                            <path d="M7.9 9H7.1C7.04477 9 7 9.04477 7 9.1V9.9C7 9.95523 7.04477 10 7.1 10H7.9C7.95523 10 8 9.95523 8 9.9V9.1C8 9.04477 7.95523 9 7.9 9Z" fill="white"/>
                                            <path d="M4.9 1H4.1C4.04477 1 4 1.04477 4 1.1V1.9C4 1.95523 4.04477 2 4.1 2H4.9C4.95523 2 5 1.95523 5 1.9V1.1C5 1.04477 4.95523 1 4.9 1Z" fill="white"/>
                                            <path d="M2.9 3H2.1C2.04477 3 2 3.04477 2 3.1V3.9C2 3.95523 2.04477 4 2.1 4H2.9C2.95523 4 3 3.95523 3 3.9V3.1C3 3.04477 2.95523 3 2.9 3Z" fill="white"/>
                                            <path d="M4.9 3H4.1C4.04477 3 4 3.04477 4 3.1V3.9C4 3.95523 4.04477 4 4.1 4H4.9C4.95523 4 5 3.95523 5 3.9V3.1C5 3.04477 4.95523 3 4.9 3Z" fill="white"/>
                                            <path d="M2.9 5H2.1C2.04477 5 2 5.04477 2 5.1V5.9C2 5.95523 2.04477 6 2.1 6H2.9C2.95523 6 3 5.95523 3 5.9V5.1C3 5.04477 2.95523 5 2.9 5Z" fill="white"/>
                                            <path d="M2.9 7H2.1C2.04477 7 2 7.04477 2 7.1V9.9C2 9.95523 2.04477 10 2.1 10H2.9C2.95523 10 3 9.95523 3 9.9V7.1C3 7.04477 2.95523 7 2.9 7Z" fill="white"/>
                                        </svg>
    
                                        ${object.floors} этаж из ${object.floors_total}
                                    </div>
                                    ${(object.special)?'<div class="description">' + object.description + '</div>':''}
                                </div>
                                <div class="section_product_footer">
                                    <button class="favorite">
                                        <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.4764 18.5623C16.0018 18.5623 15.617 18.9471 15.617 19.4217C15.617 19.6613 15.5358 19.8629 15.3757 20.021C15.2077 20.1869 14.964 20.283 14.7255 20.2811C14.4903 20.2781 14.2993 20.198 14.1417 20.036L9.61579 15.3849C9.45401 15.2186 9.23186 15.1248 8.99991 15.1248C8.76797 15.1248 8.54582 15.2186 8.38404 15.3849L3.85806 20.036C3.70161 20.1968 3.50924 20.277 3.26999 20.2812C3.02893 20.2861 2.78629 20.1901 2.61944 20.0261C2.46239 19.8718 2.38277 19.6735 2.38277 19.4367V3.43746C2.38277 2.48974 3.1538 1.71871 4.10152 1.71871H13.8983C14.846 1.71871 15.617 2.48974 15.617 3.43746V15.1678C15.617 15.6424 16.0018 16.0272 16.4764 16.0272C16.951 16.0272 17.3358 15.6424 17.3358 15.1678V3.43746C17.3357 1.54206 15.7937 0 13.8983 0H4.10152C2.20608 0 0.664062 1.54206 0.664062 3.43746V19.4367C0.664062 20.1316 0.930727 20.7764 1.4149 21.2521C1.90019 21.7289 2.56835 22 3.25448 22C3.26973 22 3.28503 21.9999 3.30028 21.9996C3.99599 21.9874 4.61478 21.7229 5.08984 21.2346L8.99991 17.2164L12.91 21.2346C13.3885 21.7263 14.0088 21.9909 14.7038 21.9997C15.4014 22.0069 16.088 21.7331 16.5833 21.244C17.0685 20.7649 17.3357 20.1177 17.3357 19.4217C17.3358 18.9471 16.951 18.5623 16.4764 18.5623Z"/>
                                        </svg>
                                    </button>
                                    <a href="/pages/catalog-vtor/detail.php?id=${object.id}" class="price"><span>${commaSeparateNumber(object.price)} <svg class="ruble"><use xlink:href="#Rouble"></use></svg></span><span>Подробнее</span></a>
                                </div>
                            </div>`;
    
                            if(3 >= current){
                                const marker = new google.maps.Marker({
                                    position: { lat: object.map.point.lat, lng: object.map.point.lng},
                                    map,
                                    optimized: true,
                                    visible: false
                                });
    
                                var content = shortenNumber(object.price, 1)+'<svg class="ruble"><use xlink:href="#Rouble"></use></svg>';
                                const windowMarker = new google.maps.InfoWindow({content: "<div class='marker' data-id='" + object.id + "'>" + content + "</div>"});
                                windowMarker.open(marker.getMap(), marker);
    
                                google.maps.event.addListener(windowMarker, 'domready', function() {
                                    $(".gm-style-iw-a").removeClass("--fixed").addClass("--fixed");
                                    $(".gm-style-iw-a div[data-id]").on("click", function(){
                                        var id = $(this).data("id");
                                        var obj = $(".section_product[data-id="+id+"]");
                                        $(".section_product, .gm-style-iw-a div").removeClass("active")
                                        $(".section_product[data-id="+id+"], .gm-style-iw-a div[data-id="+id+"]").addClass("active");
                                        map.panTo(new google.maps.LatLng(obj.data('mapx'), obj.data('mapy')));
                                    });
                                });
    
    
                                list += `
                                <div class="section_product" data-id="${object.id}" data-mapx="${object.map.point.lat}" data-mapy="${object.map.point.lng}" data-campx="${object.map.camera.lat}" data-camy="${object.map.camera.lng}" data-camzoom="${object.map.camera.zoom}">
                                    <div class="section__product-image">
                                        <img src="${object.images.original[0]}" alt="">
                                    </div>
                                    <div class="section_product_content">
                                        <a href="/pages/catalog-vtor/detail.php?id=${object.id}" class="title">${object.title} <div class="size">${object.footage} м<sup>2</sup></div></a>
                                        <div class="metro_walk">
                                            <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.69915 1L6 6.96737L3.33567 1L1 9H2.7284L3.73619 5.00932L5.72138 9H6.26121L8.24639 4.97203L9.21936 9H11L8.69915 1Z" fill="#4B4A4A" stroke="#4B4A4A" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            ${object.metro.name}
                                            <span>
                                                <svg width="10" height="22" viewBox="0 0 10 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.81755 11.6942L7.68122 9.2639C7.54818 9.11261 7.42586 8.80086 7.4197 8.59647L7.34111 6.07476V6.0017C7.34111 5.61313 7.03449 5.29692 6.6577 5.29692H4.56648H3.73546C3.39876 5.29692 3.02312 5.54289 2.87983 5.85698L0.0646496 12.0238C-0.0132588 12.1949 -0.0210043 12.3858 0.0427804 12.5623C0.106565 12.7385 0.234134 12.8776 0.401569 12.9537L0.816397 13.1423C0.904785 13.1825 0.999094 13.2029 1.09682 13.2029C1.36495 13.2029 1.61462 13.0458 1.7333 12.8026L3.05205 10.097V12.8165C3.04658 12.8322 3.03861 12.8465 3.0336 12.8625L0.805007 20.0602C0.712292 20.36 0.740539 20.6755 0.884738 20.9485C1.02894 21.2215 1.27041 21.4169 1.56518 21.4989L1.71417 21.5405C1.81167 21.5677 1.91281 21.5816 2.01441 21.5816C2.52719 21.5816 2.99305 21.2337 3.1475 20.7352L5.22984 14.0097L5.96838 15.8752C6.14857 16.3303 6.34311 17.1272 6.39323 17.6158L6.74655 21.0507C6.80327 21.6006 7.22493 21.9998 7.74933 21.9998C7.83522 21.9998 7.92246 21.989 8.00835 21.9676L8.15847 21.93C8.75622 21.7808 9.17857 21.1475 9.09997 20.5186L8.57671 16.3303C8.51019 15.7982 8.28763 14.9649 8.08056 14.4727L7.37392 12.7944C7.3648 12.7725 7.35182 12.7528 7.34134 12.7317V11.5944L8.61476 12.9654C8.74141 13.1019 8.9109 13.1771 9.09177 13.1771C9.2747 13.1771 9.44555 13.1005 9.57267 12.9614L9.80821 12.7035C10.0602 12.4274 10.0645 11.975 9.81755 11.6942Z" fill="#4B4A4A"/>
                                                    <path d="M5.38665 4.69972C6.64321 4.69972 7.66536 3.6456 7.66536 2.34974C7.66536 1.05412 6.64321 0 5.38665 0C4.13032 0 3.1084 1.05412 3.1084 2.34974C3.10817 3.6456 4.13032 4.69972 5.38665 4.69972Z" fill="#4B4A4A"/>
                                                </svg>
                                                ${object.metro.walk} мин
                                            </span>
                                        </div>
                                        <div class="adress">
                                            <svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.76471 4.84615C8.76471 8.30769 4.88235 11 4.88235 11C4.88235 11 1 8.30769 1 4.84615C1 3.82609 1.40903 2.84781 2.13711 2.12651C2.8652 1.40522 3.85269 1 4.88235 1C5.91202 1 6.89951 1.40522 7.62759 2.12651C8.35567 2.84781 8.76471 3.82609 8.76471 4.84615Z" fill="#4B4A4A" stroke="#4B4A4A" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M4.88204 6.38462C5.73971 6.38462 6.43498 5.69582 6.43498 4.84616C6.43498 3.99649 5.73971 3.30769 4.88204 3.30769C4.02438 3.30769 3.3291 3.99649 3.3291 4.84616C3.3291 5.69582 4.02438 6.38462 4.88204 6.38462Z" fill="white"/>
                                            </svg>
                                            ${object.address}
                                        </div>
                                        <div class="floors">
                                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 0.5C1 0.223858 1.22386 0 1.5 0H5.5C5.77614 0 6 0.223858 6 0.5V9.5C6 9.77614 5.77614 10 5.5 10H1V0.5Z" fill="#4B4A4A"/>
                                                <path d="M8.9999 10.1H9.0999V9.99999V4.49999C9.0999 4.16862 8.83127 3.89999 8.4999 3.89999H4.4999C4.16853 3.89999 3.8999 4.16862 3.8999 4.49999V9.99999V10.1H3.9999H8.9999Z" fill="#4B4A4A" stroke="white" stroke-width="0.2"/>
                                                <path d="M9.75 10H0.25C0.111929 10 0 10.1119 0 10.25C0 10.3881 0.111929 10.5 0.25 10.5H9.75C9.88807 10.5 10 10.3881 10 10.25C10 10.1119 9.88807 10 9.75 10Z" fill="#4B4A4A"/>
                                                <path d="M2.9 1H2.1C2.04477 1 2 1.04477 2 1.1V1.9C2 1.95523 2.04477 2 2.1 2H2.9C2.95523 2 3 1.95523 3 1.9V1.1C3 1.04477 2.95523 1 2.9 1Z" fill="white"/>
                                                <path d="M5.9 5H5.1C5.04477 5 5 5.04477 5 5.1V5.9C5 5.95523 5.04477 6 5.1 6H5.9C5.95523 6 6 5.95523 6 5.9V5.1C6 5.04477 5.95523 5 5.9 5Z" fill="white"/>
                                                <path d="M7.9 5H7.1C7.04477 5 7 5.04477 7 5.1V5.9C7 5.95523 7.04477 6 7.1 6H7.9C7.95523 6 8 5.95523 8 5.9V5.1C8 5.04477 7.95523 5 7.9 5Z" fill="white"/>
                                                <path d="M5.9 7H5.1C5.04477 7 5 7.04477 5 7.1V7.9C5 7.95523 5.04477 8 5.1 8H5.9C5.95523 8 6 7.95523 6 7.9V7.1C6 7.04477 5.95523 7 5.9 7Z" fill="white"/>
                                                <path d="M7.9 7H7.1C7.04477 7 7 7.04477 7 7.1V7.9C7 7.95523 7.04477 8 7.1 8H7.9C7.95523 8 8 7.95523 8 7.9V7.1C8 7.04477 7.95523 7 7.9 7Z" fill="white"/>
                                                <path d="M5.9 9H5.1C5.04477 9 5 9.04477 5 9.1V9.9C5 9.95523 5.04477 10 5.1 10H5.9C5.95523 10 6 9.95523 6 9.9V9.1C6 9.04477 5.95523 9 5.9 9Z" fill="white"/>
                                                <path d="M7.9 9H7.1C7.04477 9 7 9.04477 7 9.1V9.9C7 9.95523 7.04477 10 7.1 10H7.9C7.95523 10 8 9.95523 8 9.9V9.1C8 9.04477 7.95523 9 7.9 9Z" fill="white"/>
                                                <path d="M4.9 1H4.1C4.04477 1 4 1.04477 4 1.1V1.9C4 1.95523 4.04477 2 4.1 2H4.9C4.95523 2 5 1.95523 5 1.9V1.1C5 1.04477 4.95523 1 4.9 1Z" fill="white"/>
                                                <path d="M2.9 3H2.1C2.04477 3 2 3.04477 2 3.1V3.9C2 3.95523 2.04477 4 2.1 4H2.9C2.95523 4 3 3.95523 3 3.9V3.1C3 3.04477 2.95523 3 2.9 3Z" fill="white"/>
                                                <path d="M4.9 3H4.1C4.04477 3 4 3.04477 4 3.1V3.9C4 3.95523 4.04477 4 4.1 4H4.9C4.95523 4 5 3.95523 5 3.9V3.1C5 3.04477 4.95523 3 4.9 3Z" fill="white"/>
                                                <path d="M2.9 5H2.1C2.04477 5 2 5.04477 2 5.1V5.9C2 5.95523 2.04477 6 2.1 6H2.9C2.95523 6 3 5.95523 3 5.9V5.1C3 5.04477 2.95523 5 2.9 5Z" fill="white"/>
                                                <path d="M2.9 7H2.1C2.04477 7 2 7.04477 2 7.1V9.9C2 9.95523 2.04477 10 2.1 10H2.9C2.95523 10 3 9.95523 3 9.9V7.1C3 7.04477 2.95523 7 2.9 7Z" fill="white"/>
                                            </svg>
    
                                            ${object.floors} /*этаж из ${object.floors_total}*/
                                        </div>
                                        <div class="table">
                                            <div class="tr">
                                                <div class="td">Площадь кухни</div>
                                                <div class="td">${object.kitchen_area} кв.м</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Площадь по комнатам</div>
                                                <div class="td">${object.room_area[0]}/${object.room_area[1]}/${object.room_area[2]} кв.м</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Высота потолков</div>
                                                <div class="td">${object.ceiling_height} м</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Балкон/лождия</div>
                                                <div class="td">${object.balcony}</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Тип дома</div>
                                                <div class="td">${object.house_type}</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Год постройки</div>
                                                <div class="td">${object.year}</div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="section_product_footer">
                                        <button class="favorite">
                                            <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.4764 18.5623C16.0018 18.5623 15.617 18.9471 15.617 19.4217C15.617 19.6613 15.5358 19.8629 15.3757 20.021C15.2077 20.1869 14.964 20.283 14.7255 20.2811C14.4903 20.2781 14.2993 20.198 14.1417 20.036L9.61579 15.3849C9.45401 15.2186 9.23186 15.1248 8.99991 15.1248C8.76797 15.1248 8.54582 15.2186 8.38404 15.3849L3.85806 20.036C3.70161 20.1968 3.50924 20.277 3.26999 20.2812C3.02893 20.2861 2.78629 20.1901 2.61944 20.0261C2.46239 19.8718 2.38277 19.6735 2.38277 19.4367V3.43746C2.38277 2.48974 3.1538 1.71871 4.10152 1.71871H13.8983C14.846 1.71871 15.617 2.48974 15.617 3.43746V15.1678C15.617 15.6424 16.0018 16.0272 16.4764 16.0272C16.951 16.0272 17.3358 15.6424 17.3358 15.1678V3.43746C17.3357 1.54206 15.7937 0 13.8983 0H4.10152C2.20608 0 0.664062 1.54206 0.664062 3.43746V19.4367C0.664062 20.1316 0.930727 20.7764 1.4149 21.2521C1.90019 21.7289 2.56835 22 3.25448 22C3.26973 22 3.28503 21.9999 3.30028 21.9996C3.99599 21.9874 4.61478 21.7229 5.08984 21.2346L8.99991 17.2164L12.91 21.2346C13.3885 21.7263 14.0088 21.9909 14.7038 21.9997C15.4014 22.0069 16.088 21.7331 16.5833 21.244C17.0685 20.7649 17.3357 20.1177 17.3357 19.4217C17.3358 18.9471 16.951 18.5623 16.4764 18.5623Z"/>
                                            </svg>
                                        </button>
                                        <a href="/pages/catalog-vtor/detail.php?id=${object.id}" class="price"><span>${commaSeparateNumber(object.price)} <svg class="ruble" fill="#4B4A4A"><use xlink:href="#Rouble"></use></svg></span><span>Подробнее</span></a>
                                    </div>
                                </div>`;
                            }
                            current++;
                        }
                    });
    
                    var last = `
                    <div class="section_product --last">
                        <div class="section_product_content">
                            <svg class="icon">
                                <use xlink:href="#CraneIcon"></use>
                            </svg>
                            <div class="info">
                                <div class='title'>Новостройки</div>
                                <p>Посмотреть схожие варианты в новостройках той же локации</p>
                            </div>
                        </div>
                        <div class="section_product_footer">
                            <button class="favorite">
                                <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.4764 18.5623C16.0018 18.5623 15.617 18.9471 15.617 19.4217C15.617 19.6613 15.5358 19.8629 15.3757 20.021C15.2077 20.1869 14.964 20.283 14.7255 20.2811C14.4903 20.2781 14.2993 20.198 14.1417 20.036L9.61579 15.3849C9.45401 15.2186 9.23186 15.1248 8.99991 15.1248C8.76797 15.1248 8.54582 15.2186 8.38404 15.3849L3.85806 20.036C3.70161 20.1968 3.50924 20.277 3.26999 20.2812C3.02893 20.2861 2.78629 20.1901 2.61944 20.0261C2.46239 19.8718 2.38277 19.6735 2.38277 19.4367V3.43746C2.38277 2.48974 3.1538 1.71871 4.10152 1.71871H13.8983C14.846 1.71871 15.617 2.48974 15.617 3.43746V15.1678C15.617 15.6424 16.0018 16.0272 16.4764 16.0272C16.951 16.0272 17.3358 15.6424 17.3358 15.1678V3.43746C17.3357 1.54206 15.7937 0 13.8983 0H4.10152C2.20608 0 0.664062 1.54206 0.664062 3.43746V19.4367C0.664062 20.1316 0.930727 20.7764 1.4149 21.2521C1.90019 21.7289 2.56835 22 3.25448 22C3.26973 22 3.28503 21.9999 3.30028 21.9996C3.99599 21.9874 4.61478 21.7229 5.08984 21.2346L8.99991 17.2164L12.91 21.2346C13.3885 21.7263 14.0088 21.9909 14.7038 21.9997C15.4014 22.0069 16.088 21.7331 16.5833 21.244C17.0685 20.7649 17.3357 20.1177 17.3357 19.4217C17.3358 18.9471 16.951 18.5623 16.4764 18.5623Z"/>
                                </svg>
                            </button>
                            <a href="/pages/catalog-novostr/" class="price">Перейти в каталог</a>
                        </div>
                    </div>`;
    
                    $("#buildings").html(table + last);
                    $("#buildings-list").html(list + last);
    
                    /*$(".section_product[data-id]").on("click", function(){
                        if($(this).hasClass("active")){
                            $(".section_product, .gm-style-iw-a .marker").removeClass("active");
                            map.panTo(new google.maps.LatLng($(this).data('mapx'), $(this).data('mapy')));
                            return;
                        }
    
                        var id = $(this).data("id");
                        $(".section_product, .gm-style-iw-a .marker").removeClass("active")
                        $(".section_product[data-id="+id+"], .gm-style-iw-a .marker[data-id="+id+"]").addClass("active");
                        map.panTo(new google.maps.LatLng($(this).data('mapx'), $(this).data('mapy')));
                    });*/
    
                    //activate sliders
                    $('.section__product-slider').slick({
                        autoplay: false,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        dots: true,
                        draggable: false,
                        swipe: true,
                        adaptiveHeight: true
                    });
    
                    $(".slider-objects .slick-list").css("overflow", "visible");
                    
                });
            });
            </script> 
            <style>
            
                .slider-objects.slick-initialized>.slick-list>.slick-track{
                    width: 100% !important;
                    max-width: 100% !important;
                }
    
                .slider-objects.slick-initialized>.slick-list>.slick-track>.slick-slide {
                    display: none !important;
                    left: 0px !important;
                    width: 100% !important;
                }
    
                .slider-objects.slick-initialized>.slick-list>.slick-track>.slick-slide.slick-active{
                    display: block !important;
                    left: 0px !important;
                    width: 100% !important;
                }
            </style>
            <? endif; ?>
         
            <? if ($content['id'] != "") : ?>
    <script>
        function initMap(){
            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: <?=$content['map']['camera']['lat']?>, 
                    lng: <?=$content['map']['camera']['lng']?>
                },
                zoom: 15,
                zoomControl: false,
                mapTypeControl: false,
                scaleControl: false,
                streetViewControl: false,
                fullscreenControl: false,
                styles: [{
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#444444"
                        }]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [{
                            "color": "#f2f2f2"
                        }]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#d5f0c9"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [{
                                "saturation": -100
                            },
                            {
                                "lightness": 45
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [{
                                "color": "#46bcec"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "visibility": "on"
                            },
                            {
                                "color": "#b2eafe"
                            }
                        ]
                    }
                ]
            });
        }

        $(function() {
            var html = ``, max = 6, current = 0;
            $('#lider_buildings').slick('unslick');

            //activate sliders
            $('.section__product-slider').slick({
                autoplay: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
                draggable: false,
                swipe: true,
                adaptiveHeight: true
            });
            setTimeout(function(){
                new google.maps.Marker({
                    position: { 
                        lat: <?=$content['map']['point']['lat']?>, 
                        lng: <?=$content['map']['point']['lng']?>
                    },
                    map,
                    icon: "/html/assets/svg/map-point.svg"
                });

                $('.section__gallery-slider').slick({
                    autoplay: false,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: true,
                    dots: true,
                    draggable: false,
                    swipe: true,
                    adaptiveHeight: true,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2,
                            }
                        }, 
                        {
                            breakpoint: 765,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            }
                        }
                    ]
                });
            }, 1000);
        });
    </script> 
     <? endif; ?>
    </body>

    </html>
<?php endif ?>