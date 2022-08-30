<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("ТАРИФЫ");
?>
    <br><br><br>
    <section class="section" style="padding-top: 20px;">
        <div class="wrapper">
            <div class="section__big-text --mgb20">
                <p>сделка под ключ</p>
            </div>
            <div class="section__text --mgb20">
                <p>Мы сделали наши комиссии <b>прозрачными и выгодными для вас.</b></p>
            </div>
            <div class="section__text">
                <p style="width: 100%">Для вашего удобства мы <b>упростили расчет комиссии и установили верхнюю
                        границу</b> по каждому диапазону цен на недвижимость.</p>
            </div>
        </div>
    </section>

    <section class="section how-it-works" id="calc">
        <div class="section__content-changer g-flex-column">
            <div class="section__content-tabs g-flex-between g-flex-align-center center g-flex-wrap --mgb60 --lightViolet">
                <div class="wrapper top g-flex-between g-flex-align-center center g-flex-wrap --lightViolet">
                    <div class="section__content-tab --hoveronly --lightViolet active" data-color="" id="hash__sell">
                        Продажа
                    </div>
                    <div class="section__content-tab --hoveronly --lightViolet" id="hash__buy">
                        Покупка
                    </div>
                    <div class="section__content-tab --hoveronly --lightViolet" id="hash__alternate">
                        Альтернатива
                    </div>
                    <div class="section__content-tab --hoveronly --lightViolet" id="hash__rent">
                        Аренда
                    </div>
                    <div class="section__content-tab --hoveronly --lightViolet" id="hash__ursopr">
                        Юрсопровождение
                    </div>
                    <div class="section__content-tab --hoveronly --lightViolet" id="hash__ipoteka">
                        Ипотека
                    </div>
                </div>
            </div>
            <svg class="--lightViolet" viewBox="0 0 32 32">
                <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <div class="section__content-slider slider w100per">
                <!--Продажа red -->
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "FORM_ID" => "",
                        "PATH" => "/include/tarifs/sale.php"
                    )
                );?>
                <!-- Покупка green -->
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "FORM_ID" => "",
                        "PATH" => "/include/tarifs/buy.php"
                    )
                );?>
                <!-- Альтернатива violet -->
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "FORM_ID" => "",
                        "PATH" => "/include/tarifs/alt.php"
                    )
                );?>
                <!-- Аренда lightenBlue -->
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "FORM_ID" => "",
                        "PATH" => "/include/tarifs/rent.php"
                    )
                );?>
                <!-- Юрсопровождение blue -->
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "FORM_ID" => "",
                        "PATH" => "/include/tarifs/ur.php"
                    )
                );?>
                <!-- Ипотека pink -->
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "FORM_ID" => "",
                        "PATH" => "/include/tarifs/ipoteka.php"
                    )
                );?>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="wrapper">
            <div class="section__text">
                <p class="w100 --big --mgb40">Вполне возможно, обратившись к частному риэлтору, вы услышите более низкую
                    стоимость за услугу, вопрос лишь объема и качества предоставления этой услуги, а также возможности
                    вашего контроля за процессом и цены ошибки, в случае, если она будет допущена.</p>
                <p class="w100 text-align-end --mgb90"><b class="--big --lightViolet">Недвижимость — это не та сфера,
                        <br>где риск считается оправданным!</b></p>
            </div>
            <div class="section__big-text --mgb60">
                <p>СКИДКИ <br>И БОНУСЫ</p>
            </div>
        </div>
    </section>

    <section class="section --grayBlock --pdb90" id="sale_block">
        <div class="wrapper">
            <div class="section__text --mgb60" style="text-transform: uppercase;">
                <p class="w100"><b class="--big"><span class="--superBig --lightViolet">Скидка 5%</span> от величины
                        Тарифов предоставляется когда:</b></p>
            </div>
            <div class="section__num-list --mgb90">
                <ul>
                    <li>
                        <div class="num">1</div>
                        <p class="text">вы обращаетесь к нам повторно,</p>
                    </li>
                    <li>
                        <div class="num">2</div>
                        <p class="text">вы пришли к нам по рекомендации наших клиентов,</p>
                    </li>
                    <li>
                        <div class="num">3</div>
                        <p class="text">вы являетесь другом или членом семьи сотрудника Dream Realty,</p>
                    </li>
                    <li>
                        <div class="num">4</div>
                        <p class="text">вы относитесь к особенной категории клиентов: пенсионеры, малоимущие и/или
                            многодетные семьи, инвалиды всех категорий, ветераны труда,</p>
                    </li>
                    <li>
                        <div class="num">5</div>
                        <p class="text">вы обратились к нам в рамках акции или спецпредложения.</p>
                    </li>
                </ul>
            </div>
            <div class="section__codex g-flex-between g-flex-align-stretch --mgb90">
                <div class="section__codex_item g-flex-align-center g-flex-justify-center">
                    <p><b>Ваша скидка растет с каждым последующим обращением и может <span class="--lightViolet">достигнуть 10%!</span></b>
                    </p>
                </div>
                <div class="section__codex_item g-flex-align-center g-flex-justify-center">
                    <p><b>Вы можете <a href="https://dreamrealty.pro/" class="--lightViolet" target="_blank">поделиться
                                своей скидкой</a> с друзьями и близкими и/или <span class="--lightViolet">получить денежное вознаграждение</span>
                            за рекомендацию. </b></p>
                </div>
            </div>
            <div class="section__mini-info">
                <svg class="icon">
                    <use xlink:href="#Info"></use>
                </svg>
                <p>Скидки и бонусы не распространяются на услуги кредитного брокера.</p>
            </div>
            <div class="section__exception__rules">
                <div class="exception__rule__subtitle">Скидки и бонусы не распространяются в следующих случаях</div>
                <ul class="exception__rule__ul">
                    <li class="exception__rule__li">
                        ⇨ услуги кредитных брокеров
                    </li>
                    <li class="exception__rule__li">
                        ⇨ отдельно оплачиваемые юридические услуги
                    </li>
                    <li class="exception__rule__li">
                        ⇨ при минимальной стоимости услуг
                    </li>
                    <li class="exception__rule__li">
                        продажа (150 000 р.)
                    </li>
                    <li class="exception__rule__li">
                        альтернатива (300 000 р.)
                    </li>
                    <li class="exception__rule__li">
                        юридическое сопровождение (60 000 р.)
                    </li>
                </ul>
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
        "FORM_ID" => "",
        "PATH" => "/include/section_have_questions.php"
    )
);?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>