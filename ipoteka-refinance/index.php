<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "РЕФИНАНСИРОВАНИЕ");
$APPLICATION->SetTitle("РЕФИНАНСИРОВАТЬ ИПОТЕКУ");
?>

    <section class="section advantages-page">
        <div class="wrapper">
            <div class="section__big-text --mgb20">
                <p>
                    задача
                </p>
            </div>
            <div class="section__text --mgb60">
                <p>
                    <b>Улучшить условия по кредиту? Получить лучшую процентную ставку? <br>
                        Уменьшить ежемесячную выплату?</b>
                </p>
            </div>
            <h3 class="text-align-end --pink --mgb40">С суперброкерами Dream Realty</h3>
            <div class="section__big-text --mgb20">
                <p class="text-align-end">
                    Миссия
                </p>
                <p class="text-align-end">
                    выполнима!
                </p>
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
            "CLASS_TABS_FLEX" => "g-flex-align-center center ",
            "DONT_SHOW_BIG_TITLE" => "Y",
            "DONT_SHOW_SLIDER_TITLE" => "Y",
            "PATH" => "/include/command-dream-realty.php"
        )
    );?>


    <section class="section how-it-works">
        <div class="wrapper">
            <div class="section__content-changer g-flex-column">
                <div class="section__content-tabs -m-left g-flex-justify-center g-flex-align-center fit-content center --mgb60">
                    <div class="section__content-tab active">
                        Условия одобрения
                    </div>
                    <div class="section__content-tab">
                        Требования к заемщику
                    </div>
                </div>
                <div class="section__content-slider slider">
                    <div class="section__content-slide">
                        <div class="section__shadow-block g-flex-between">
                            <ul>
                                <li><b>Сумма:</b> 500 000 р. – 30 млн. рублей</li>
                                <li><b>Ставка:</b> от 6,99% годовых</li>
                                <li><b>Срок кредита:</b> от 1 года до 30 лет</li>
                                <li><b>Поручители:</b> не требуются</li>
                                <li><b>Срок оформления:</b> решение за 1-5 дней</li>
                                <li><b>Возраст заёмщика:</b> от 21 до 65 лет</li>
                                <li><b>Минимальные требования:</b> <br>
                                    без текущих просрочек по кредитам
                                </li>
                            </ul>
                            <ul>
                                <li><b>Минимальные документы:</b> <br>
                                    Паспорт и СНИЛС <br>
                                    <br>
                                    Полный список документов для рефинансирования ипотечного кредита формируется
                                    индивидуально и может быть расширен, исходя из выбранной программы.
                                </li>
                                <li><b>Объект залога:</b><br>
                                    ранее приобретенная в ипотеку недвижимость (квартира, апартаменты, таунхаус, земля,
                                    дом, комната)
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="section__content-slide">
                        <div class="section__shadow-block g-flex-between">
                            <ul>
                                <li><b>Гражданин или резидент Российской Федерации</b><br>
                                    <br>
                                    Необходимо иметь паспорт гражданина (паспорт РФ не обязательно) и свидетельство
                                    СНИЛС.
                                </li>
                                <li><b>Стаж работы:</b><br>
                                    от 3 месяцев на текущем месте работы
                                </li>
                                <li><b>Наличие постоянной регистрации:</b><br>
                                    Не обязательно, но приветствуется
                                </li>
                            </ul>
                            <ul>
                                <li><b>Подтверждение трудоустройства и доходов:</b><br>
                                    Не обязательно, но приветствуется
                                </li>
                                <li><b>Срок действия одобрения на рефинансирование:</b><br>
                                    Положительное решение действует от 90 до 120 дней
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/tarifs/#hash__ipoteka" target="_blank"
               class="section__edge-button wow fadeInLeft g-flex-align-center --mgt90">
                <div class="arrow g-flex-align-center g-flex-justify-center">
                    <svg class="icon">
                        <use xlink:href="#ArrowSquare"></use>
                    </svg>
                </div>
                Наши тарифы
            </a>
        </div>
    </section>

    <section class="section --mgb90">
        <div class="wrapper">
            <h3 class="--pink --mgb90">С нами кредитные ставки ниже, <br>а условия комфортнее</h3>
            <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/check-credit-history.php');?>
        </div>
    </section>

    <section class="section --grayBlock --pdb90">
        <div class="wrapper">
            <h3 class="--mgb60">Нам доверяют <span class="--pink">рефинансирование ипотеки <br>
	в таких случаях как:</span></h3>
            <div class="section__check-blocks g-flex-wrap g-flex-between --mgb90">
                <div class="section__check-block">
                    <svg class="icon">
                        <use xlink:href="#CheckCircle"></use>
                    </svg>
                    “Серая” зарплата
                </div>
                <div class="section__check-block">
                    <svg class="icon">
                        <use xlink:href="#CheckCircle"></use>
                    </svg>
                    Наличие неоднократного отказа банков
                </div>
                <div class="section__check-block">
                    <svg class="icon">
                        <use xlink:href="#CheckCircle"></use>
                    </svg>
                    Сомнительная кредитная история
                </div>
                <div class="section__check-block">
                    <svg class="icon">
                        <use xlink:href="#CheckCircle"></use>
                    </svg>
                    Регистрация в другом регионе или отсутствие российского резидентства
                </div>
                <div class="section__check-block">
                    <svg class="icon">
                        <use xlink:href="#CheckCircle"></use>
                    </svg>
                    Просрочки по кредитам
                </div>
                <div class="section__check-block">
                    <svg class="icon">
                        <use xlink:href="#CheckCircle"></use>
                    </svg>
                    Привлечение материнского капитала
                </div>
                <div class="section__check-block">
                    <svg class="icon">
                        <use xlink:href="#CheckCircle"></use>
                    </svg>
                    Наличие кредитных обязательств
                </div>
                <div class="section__check-block">
                    <svg class="icon">
                        <use xlink:href="#CheckCircle"></use>
                    </svg>
                    Исполнительные производства
                </div>
            </div>
            <h3 class="text-align-end">Счастливые обладатели белой зарплаты<br>
                и безупречной кредитной истории также<br>
                <span class="--pink">экономят свое время и бюджет</span></h3>
        </div>
    </section>

    <section class="section">
        <div class="wrapper">
            <h3 class="--text-center --mgb60">Из <span class="--pink">кодекса чести</span> суперброкеров Dream Realty:
            </h3>
            <div class="section__codex g-flex-between g-flex-align-stretch">
                <div class="section__codex_item g-flex-align-center g-flex-justify-center">
                    <p>
                        Мы не берем процент от суммы кредита - <span class="--pink">стоимость услуги фиксирована и равна 100 000 рублей.</span>
                    </p>
                </div>
                <div class="section__codex_item g-flex-align-center g-flex-justify-center">
                    <p>
                        Мы не берем предоплату — <span class="--pink">оплата по факту одобрения ипотеки.</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <?
    $idvideo = $APPLICATION->GetProperty("idvideo");
    if ($idvideo) :
        $idvideo = explode(',', $idvideo);
        ?>

        <section class="section video-media">
            <div class="wrapper">
                <div class="section__big-text --mgb40">
                    <p>DREAM Media</p>
                </div>
                <div class="section__video-slider slider">
                    <?php foreach ($idvideo as $video) :?>
                        <?
                        #Получаем Видео из хайлоада
                        $MY_HL_BLOCK_ID = 4;
                        $entity_data_class = GetEntityDataClass($MY_HL_BLOCK_ID);

                        $rsData = $entity_data_class::getList(array(
                            'select' => array('*'),
                            'filter' => array("ID" => $video),
                            'cache' => ['ttl' => 604800]
                        ));

                        while ($el = $rsData->fetch()):
                            $URL = CFile::GetFileArray($el['UF_PHOTO']);
                            $URL = $URL["SRC"];
                            $video = $el['UF_URL']; ?>

                            <div class="section__video-slide js_video-ratio" data-video="<?= $video ?>" style="background-image: url(<?= $URL ?>);">
                                <img loading="lazy" src="<?= SITE_TEMPLATE_PATH ?>/assets/svg/VideoButton--<? $APPLICATION->ShowProperty("color") ?>.svg" alt="">
                            </div>
                        <?php endwhile;?>

                    <?php endforeach;?>
                </div>

                <?php if(count($idvideo) > 1) :?>
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
                <?php endif;?>


                <a href="<?= $options['youtube'] ?>" class="section__edge-button wow fadeInLeft   g-flex-align-center --mgt30">
                    <div class="arrow g-flex-align-center g-flex-justify-center">
                        <svg class="icon">
                            <use xlink:href="#ArrowSquare"></use>
                        </svg>
                    </div>
                    Канал Dream Realty
                </a>
            </div>
        </section>
    <?php endif;?>

    <?
    $idpodcasts = $APPLICATION->GetProperty("podcasts");
    if ($idpodcasts) :
        $idpodcasts = explode(',', $idpodcasts);
        ?>

        <section class="section podcasts">
            <div class="wrapper">
                <h2 class="section__title --mgb60"><span class="--<? $APPLICATION->ShowProperty("color") ?>">Советы</span> наших экспертов </h2>
                <div class="section__podcasts g-flex-between g-flex-align-stretch g-flex-wrap">
                    <?php foreach ($idpodcasts as $video) :?>
                        <?
                        #Получаем Видео из хайлоада
                        $MY_HL_BLOCK_ID = 5;
                        $entity_data_class = GetEntityDataClass($MY_HL_BLOCK_ID);

                        $rsData = $entity_data_class::getList(array(
                            'select' => array('*'),
                            'filter' => array("ID" => $video),
                            'cache' => ['ttl' => 604800]
                        ));
                        while ($el = $rsData->fetch()) :?>
                            <?
                            $URL = CFile::GetFileArray($el['UF_PHOTO']);
                            $URL = $URL["SRC"];
                            $audio = CFile::GetFileArray($el['UF_FILE']);
                            $audio = $audio["SRC"];

                            $video = $el['UF_URL'];
                            $title =  $el['UF_TITLE'];
                            ?>

                            <div class="section__podcast g-flex-column" style="background-image: url(<?=$URL?>);">
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
                        <?php endwhile;?>

                    <?php endforeach;?>
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
    <?php endif;?>

    <section class="section how-it-works">
        <div class="wrapper">
            <div class="section__content-changer g-flex-column">
                <div class="section__content-slider slider">
                    <div class="section__content-slide">
                        <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/mortgage-broker2.php');?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?
    $advantagesIds = [32, 33, 34, 35, 36];
    $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/buy_advantages_section.php",
            "ADV_PAGE" => "/ipoteka/advantages.php",
            "ADVANTAGES_IDS" => $advantagesIds,
            "SECTION_TITLE" => '<span class="--pink">Преимущества</span> рефинансирования ипотеки с нами',
            "MIN_TEXT_CLASS" => "Y",
        )
    );?>

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

    <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>