<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "ВАКАНСИИ");
$APPLICATION->SetTitle("ВАКАНСИИ");
?>
    <section class="section">
        <div class="wrapper">
            <div class="section__big-text --mgb20">
                <p>Хочешь стать</p>
            </div>
            <h3 class="text--orange">Суперагентом dream realty?</h3>
        </div>
    </section>

    <section class="section --pdb0" id="list">
        <div class="wrapper">
            <div class="section__text-slider --mgt0-xs" style="margin-bottom: 90px;">
                <div class="section__text-slider_img">
                    <img loading="lazy" src="/html/assets/img/advant-full20.png" alt="">
                </div>
                <div class="section__text-slider_slider">
                    <div class="slider">
                        <div class="section__text-slider_slide">
                            <div class="num" style="top: 0px;">01</div>
                            <h3>Для начала реши:</h3>
                            <ul>
                                <li>любишь ли людей?</li>
                                <li>умеешь ли продавать?</li>
                                <li>интересен ли тебе рынок недвижимости?</li>
                                <li>разделяешь ли ты наши взгляды на бизнес?</li>
                                <li>сможешь ли отказаться от стабильности ради роста?</li>
                                <li>сможешь ли постоянно учиться и развиваться?</li>
                            </ul>
                        </div>
                        <div class="section__text-slider_slide">
                            <div class="num" style="top: 0px;">02</div>
                            <h3>Если ДА, мы ждем тебя!</h3>
                            <p>Присылай резюме с сопроводительным письмом, записывай видеообращение. Мы проверим,
                                сможешь ли ты стать суперагентом.</p>
                        </div>
                        <div class="section__text-slider_slide">
                            <div class="num" style="top: 0px;">03</div>
                            <h3>Шансы возрастут, если у тебя есть</h3>
                            <ul>
                                <li>высшее образование;</li>
                                <li>успешный опыт в продажах и min-маркететинге;</li>
                                <li>опыт закрытия собственной сделки в недвижимости.</li>
                            </ul>
                        </div>
                        <div class="section__text-slider_slide">
                            <div class="num" style="top: 0px;">04</div>
                            <h3>И да, будь уверен, тебе понравится</h3>
                            <ul>
                                <li>наш крутецкий офис в центре,</li>
                                <li>вдохновляющая атмосфера в коллективе,</li>
                                <li>система мотивации и целеполагания,</li>
                                <li>технологичность и продуманность,</li>
                                <li>гибкий график и работа на результат,</li>
                                <li>уровень доходов, который можешь ограничить только ты.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="navs">
                        <a href="#summary" class="btn --orange js--transparent_pop-up">Отправить резюме</a>
                        <div class="g-flex-justify-end g-flex-align-stretch slider-navs">
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
                    </div>
                </div>
            </div>
            <div class="formBlock" id="formBlock" style="display: none">
                <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/send-resume.php');?>
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

<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/reviews_slider.php"
    )
);?>


<?
$advantagesIds = [37, 38, 39, 40];
$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/buy_advantages_section.php",
        "ADV_PAGE" => "/vacancyes/advantages.php",
        "ADVANTAGES_IDS" => $advantagesIds,
        "SECTION_TITLE" => '<span class="text--orange">Преимущества</span> работы у нас',
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

    <div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="summary">
        <div class="wrapper">
            <div class="text-block">
                <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/send-resume-popup.php');?>
            </div>
        </div>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>