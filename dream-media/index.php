<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("DREAM MEDIA");
?>

<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "FORM_ID" => "",
        "PATH" => "/include/dream-media/text.php"
    )
);?>

    <section class="section" id="video">
        <div class="wrapper">
            <h3 class="--<? $APPLICATION->ShowProperty("color") ?> --mgb20">Авторский канал</h3>
            <div class="section__big-text --mgb20"><p>YouTube</p></div>
            <h3 class="--mgb60">Здесь Вы найдете
                <span class="--<? $APPLICATION->ShowProperty("color") ?>">
                    советы наших топовых экспертов и&nbsp;юристов
                </span>
            </h3>
            <div class="section__video-slider slider">
                <?
                $MY_HL_BLOCK_ID = 4;
                CModule::IncludeModule('highloadblock');
                $entity_data_class = GetEntityDataClass($MY_HL_BLOCK_ID);
                $rsData = $entity_data_class::getList(array(
                    'select' => array('*'),
                    'order' => array("ID" => "DESC"),
                    'cache' => ['ttl' => 604800]
                    //'filter' => array(),
                ));
                while ($el = $rsData->fetch()) {
                    $URL = CFile::GetFileArray($el['UF_PHOTO']);
                    $URL = $URL["SRC"];
                    $video = $el['UF_URL'];
                    ?>
                    <div class="section__video-slide js_video-ratio" data-video="<?= $video ?>"
                         style="background-image: url(<?= $URL ?>);">
                        <img loading="lazy" src="/html/assets/svg/VideoButton--red.svg" alt="">
                    </div>
                <?php } ?>
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
            <a href="https://www.youtube.com/c/dreamrealty/playlists" target="_blank"
               class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt30">
                <div class="arrow g-flex-align-center g-flex-justify-center">
                    <svg class="icon">
                        <use xlink:href="#ArrowSquare"></use>
                    </svg>
                </div>
                Канал Dream Realty
            </a>
        </div>
    </section>

    <section class="section" id="podcast">
        <div class="wrapper">
            <h3 class="--<? $APPLICATION->ShowProperty("color") ?> --mgb40">Авторский канал в Telegram</h3>
            <div class="section__big-text --mgb40"><p>Подкасты</p></div>
            <p class="--mgb40">Выберите интересующую вас тему или вопрос</p>
            <div class="section__hashtags --mgb30">
                <a href="" class="section__hashtag --<? $APPLICATION->ShowProperty("color") ?> active">#ВсеРубрики</a>
                <a href="" class="section__hashtag --<? $APPLICATION->ShowProperty("color") ?>">#ПродажаНедвижимости</a>
                <a href="" class="section__hashtag --<? $APPLICATION->ShowProperty("color") ?>">#ОсобенностиАльтернативныхСделок</a>
                <a href="" class="section__hashtag --<? $APPLICATION->ShowProperty("color") ?>">#ПокупкаНовостройки</a>
                <a href="" class="section__hashtag --<? $APPLICATION->ShowProperty("color") ?>">#ПокупкаВторички</a>
                <a href="" class="section__hashtag --<? $APPLICATION->ShowProperty("color") ?>">#ИнвестицииВНедвижимость</a>
                <a href="" class="section__hashtag --<? $APPLICATION->ShowProperty("color") ?>">#ЮридическиеВопросы</a>
                <a href="" class="section__hashtag --<? $APPLICATION->ShowProperty("color") ?>">#ВопросыЖКХ</a>
            </div>
            <div class="section__podcasts g-flex-between g-flex-align-stretch g-flex-wrap">
                <?
                $MY_HL_BLOCK_ID = 5;
                CModule::IncludeModule('highloadblock');
                $entity_data_class = GetEntityDataClass($MY_HL_BLOCK_ID);
                $rsData = $entity_data_class::getList(array(
                    'select' => array('*'),
                    'order' => array("ID" => "DESC"),
                    'cache' => ['ttl' => 604800]
                ));
                while ($el = $rsData->fetch()) {
                    $URL = CFile::GetFileArray($el['UF_PHOTO']);
                    $audio = CFile::GetFileArray($el['UF_FILE']);
                    $URL = $URL["SRC"];
                    $video = $el['UF_URL'];
                    $audio = $audio["SRC"];
                    $title = $el['UF_TITLE'];
                    ?>
                    <div class="section__podcast g-flex-column" style="background-image: url(<?= $URL; ?>);">
                        <div class="section__podcast_name"><?= $title; ?></div>
                        <img loading="lazy" src="/html/assets/svg/PodcastIcon.svg" alt=""
                             class="section__podcast_icon --mgb40">
                        <audio data-status="stopped" controls src="<?= $audio; ?>" class="section__podcast_audio-tag">
                            Тег audio не поддерживается вашим браузером.
                        </audio>
                        <div class="section__podcast_audio g-flex-align-center">
                            <img loading="lazy" src="/html/assets/svg/Audio--Play.svg"
                                 data-pause="/html/assets/svg/pause.svg" data-play="/html/assets/svg/Audio--Play.svg"
                                 alt="" class="js_play-pause">
                            <div class="timeline">
                                <div class="currentTime"></div>
                                <span class="curNumTime">00:00</span>
                                <span class="allTime">00:00</span>
                            </div>
                            <a href="https://t.me/FromDreamToRealty" target="_blank"
                               class="section__podcast_comment g-flex-align-center">
                                <img loading="lazy" src="/html/assets/svg/Comment.svg" alt="">
                                Комментировать
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <a href="/dream-media/podcasts/" target="_blank"
               class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt30">
                <div class="arrow g-flex-align-center g-flex-justify-center">
                    <svg class="icon">
                        <use xlink:href="#ArrowSquare"></use>
                    </svg>
                </div>
                Все подкасты
            </a>
        </div>
    </section>

    <section class="section">
        <div class="wrapper">
            <h3 class="--<? $APPLICATION->ShowProperty("color") ?> --mgb40">Авторские статьи на канале</h3>
            <div class="section__big-text --mgb40">
                <p>Яндекс Дзен</p>
            </div>
            <div class="section__dzen-slider slider">
                <?
                $MY_HL_BLOCK_ID = 13;
                CModule::IncludeModule('highloadblock');
                $entity_data_class = GetEntityDataClass($MY_HL_BLOCK_ID);
                $rsData = $entity_data_class::getList(array(
                    'select' => array('*'),
                    'order' => array("ID" => "DESC"),
                    'cache' => ['ttl' => 604800]
                ));
                while ($el = $rsData->fetch()) {
                    $URL = CFile::GetFileArray($el['UF_IMAGE']);
                    $img = $URL["SRC"];
                    $link = $el['UF_LINK'];
                    $text = $el['UF_TEXT'];
                    $title = $el['UF_TITLE'];
                    ?>
                    <div class="section__dzen-slide">
                        <div class="section__dzen-post">
                            <div class="section__dzen-post_img">
                                <img loading="lazy" src="<?= $img ?>" alt="">
                                <a href="<?= $link ?>" target="_blank"><img loading="lazy"
                                                                            src="/html/assets/svg/subcribe.svg" alt=""></a>
                            </div>
                            <p class="section__dzen-post_title"><?= $title ?></p>
                            <p class="section__dzen-post_desc"><?= $text ?></p>
                            <div class="section__dzen-post_buttons">
                                <a href="<?= $link ?>" target="_blank">Оставить комментарий</a>
                                <a href="<?= $link ?>" target="_blank">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path d="M28.706 20.3952C29.3208 19.611 29.6157 18.7704 29.578 17.9046C29.5404 16.9511 29.1138 16.2045 28.7625 15.7465C29.1703 14.7302 29.3271 13.1305 27.9658 11.8883C26.9683 10.9787 25.2744 10.5709 22.9281 10.6838C21.2782 10.7591 19.898 11.0665 19.8415 11.079H19.8353C19.5216 11.1355 19.1891 11.2045 18.8503 11.2798C18.8252 10.8783 18.8942 9.8808 19.6345 7.63488C20.5128 4.96236 20.4626 2.91719 19.4714 1.54956C18.43 0.112924 16.7675 0 16.2782 0C15.8077 0 15.3748 0.194479 15.0674 0.55207C14.371 1.36135 14.4526 2.85445 14.5404 3.54454C13.7123 5.76537 11.3911 11.2108 9.42748 12.7227C9.38984 12.7478 9.35847 12.7792 9.32711 12.8105C8.74994 13.4191 8.36098 14.0778 8.0975 14.655C7.72736 14.4542 7.30703 14.3413 6.85534 14.3413H3.02849C1.58558 14.3413 0.418701 15.5144 0.418701 16.9511V27.1455C0.418701 28.5885 1.59185 29.7553 3.02849 29.7553H6.85534C7.41368 29.7553 7.93438 29.5797 8.36098 29.2785L9.83526 29.4542C10.0611 29.4856 14.0762 29.9937 18.1979 29.9122C18.9444 29.9686 19.6471 30 20.2995 30C21.4225 30 22.4011 29.9122 23.2167 29.7365C25.1364 29.3287 26.4476 28.5132 27.1126 27.3149C27.6207 26.399 27.6207 25.4893 27.5392 24.9122C28.7876 23.7829 29.0072 22.5345 28.9632 21.6562C28.9381 21.1481 28.8252 20.7152 28.706 20.3952ZM3.02849 28.0615C2.52033 28.0615 2.11255 27.6474 2.11255 27.1455V16.9448C2.11255 16.4366 2.52661 16.0289 3.02849 16.0289H6.85534C7.36349 16.0289 7.77127 16.4429 7.77127 16.9448V27.1393C7.77127 27.6474 7.35722 28.0552 6.85534 28.0552H3.02849V28.0615ZM27.1 19.6612C26.8365 19.9373 26.7863 20.3576 26.9871 20.6838C26.9871 20.6901 27.2443 21.1292 27.2757 21.7315C27.3196 22.5533 26.9243 23.2811 26.0962 23.9021C25.8014 24.128 25.6822 24.5169 25.8077 24.8683C25.8077 24.8745 26.0774 25.7026 25.6383 26.4868C25.2179 27.2396 24.2832 27.7792 22.8654 28.0803C21.7299 28.325 20.1866 28.3689 18.292 28.2183C18.2669 28.2183 18.2355 28.2183 18.2041 28.2183C14.1703 28.3061 10.0925 27.7792 10.0486 27.7729H10.0423L9.40866 27.6976C9.4463 27.522 9.46512 27.3337 9.46512 27.1455V16.9448C9.46512 16.675 9.42121 16.4115 9.34593 16.1669C9.45885 15.7465 9.77253 14.8118 10.5128 14.0151C13.3296 11.7817 16.0837 4.24718 16.2029 3.92095C16.2531 3.78921 16.2656 3.64492 16.2405 3.50063C16.1339 2.79799 16.1715 1.93852 16.3221 1.6813C16.6546 1.68758 17.5517 1.78168 18.0912 2.52823C18.7311 3.4128 18.706 4.99373 18.0159 7.08908C16.962 10.2823 16.8742 11.9636 17.7085 12.7039C18.1226 13.074 18.6747 13.0928 19.0762 12.9486C19.4589 12.8607 19.8227 12.7854 20.1678 12.729C20.1929 12.7227 20.2242 12.7164 20.2493 12.7102C22.1753 12.2898 25.6257 12.0326 26.824 13.1242C27.8403 14.0527 27.1188 15.2823 27.0373 15.4141C26.8051 15.7654 26.8742 16.2233 27.1878 16.5056C27.1941 16.5119 27.8528 17.133 27.8842 17.9674C27.9093 18.5257 27.6458 19.0966 27.1 19.6612Z"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="30" height="30" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path d="M28.706 20.3952C29.3208 19.611 29.6157 18.7704 29.578 17.9046C29.5404 16.9511 29.1138 16.2045 28.7625 15.7465C29.1703 14.7302 29.3271 13.1305 27.9658 11.8883C26.9683 10.9787 25.2744 10.5709 22.9281 10.6838C21.2782 10.7591 19.898 11.0665 19.8415 11.079H19.8353C19.5216 11.1355 19.1891 11.2045 18.8503 11.2798C18.8252 10.8783 18.8942 9.8808 19.6345 7.63488C20.5128 4.96236 20.4626 2.91719 19.4714 1.54956C18.43 0.112924 16.7675 0 16.2782 0C15.8077 0 15.3748 0.194479 15.0674 0.55207C14.371 1.36135 14.4526 2.85445 14.5404 3.54454C13.7123 5.76537 11.3911 11.2108 9.42748 12.7227C9.38984 12.7478 9.35847 12.7792 9.32711 12.8105C8.74994 13.4191 8.36098 14.0778 8.0975 14.655C7.72736 14.4542 7.30703 14.3413 6.85534 14.3413H3.02849C1.58558 14.3413 0.418701 15.5144 0.418701 16.9511V27.1455C0.418701 28.5885 1.59185 29.7553 3.02849 29.7553H6.85534C7.41368 29.7553 7.93438 29.5797 8.36098 29.2785L9.83526 29.4542C10.0611 29.4856 14.0762 29.9937 18.1979 29.9122C18.9444 29.9686 19.6471 30 20.2995 30C21.4225 30 22.4011 29.9122 23.2167 29.7365C25.1364 29.3287 26.4476 28.5132 27.1126 27.3149C27.6207 26.399 27.6207 25.4893 27.5392 24.9122C28.7876 23.7829 29.0072 22.5345 28.9632 21.6562C28.9381 21.1481 28.8252 20.7152 28.706 20.3952ZM3.02849 28.0615C2.52033 28.0615 2.11255 27.6474 2.11255 27.1455V16.9448C2.11255 16.4366 2.52661 16.0289 3.02849 16.0289H6.85534C7.36349 16.0289 7.77127 16.4429 7.77127 16.9448V27.1393C7.77127 27.6474 7.35722 28.0552 6.85534 28.0552H3.02849V28.0615ZM27.1 19.6612C26.8365 19.9373 26.7863 20.3576 26.9871 20.6838C26.9871 20.6901 27.2443 21.1292 27.2757 21.7315C27.3196 22.5533 26.9243 23.2811 26.0962 23.9021C25.8014 24.128 25.6822 24.5169 25.8077 24.8683C25.8077 24.8745 26.0774 25.7026 25.6383 26.4868C25.2179 27.2396 24.2832 27.7792 22.8654 28.0803C21.7299 28.325 20.1866 28.3689 18.292 28.2183C18.2669 28.2183 18.2355 28.2183 18.2041 28.2183C14.1703 28.3061 10.0925 27.7792 10.0486 27.7729H10.0423L9.40866 27.6976C9.4463 27.522 9.46512 27.3337 9.46512 27.1455V16.9448C9.46512 16.675 9.42121 16.4115 9.34593 16.1669C9.45885 15.7465 9.77253 14.8118 10.5128 14.0151C13.3296 11.7817 16.0837 4.24718 16.2029 3.92095C16.2531 3.78921 16.2656 3.64492 16.2405 3.50063C16.1339 2.79799 16.1715 1.93852 16.3221 1.6813C16.6546 1.68758 17.5517 1.78168 18.0912 2.52823C18.7311 3.4128 18.706 4.99373 18.0159 7.08908C16.962 10.2823 16.8742 11.9636 17.7085 12.7039C18.1226 13.074 18.6747 13.0928 19.0762 12.9486C19.4589 12.8607 19.8227 12.7854 20.1678 12.729C20.1929 12.7227 20.2242 12.7164 20.2493 12.7102C22.1753 12.2898 25.6257 12.0326 26.824 13.1242C27.8403 14.0527 27.1188 15.2823 27.0373 15.4141C26.8051 15.7654 26.8742 16.2233 27.1878 16.5056C27.1941 16.5119 27.8528 17.133 27.8842 17.9674C27.9093 18.5257 27.6458 19.0966 27.1 19.6612Z"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="30" height="30" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>


            </div>
            <div class="slider_navs g-flex-justify-end g-flex-align-stretch slider-navs">
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
            <a href="https://zen.yandex.ru/dreamrealty" target="_blank"
               class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt30">
                <div class="arrow g-flex-align-center g-flex-justify-center">
                    <svg class="icon">
                        <use xlink:href="#ArrowSquare"></use>
                    </svg>
                </div>
                Все статьи
            </a>
        </div>
    </section>

<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "FORM_ID" => "",
        "PATH" => "/include/dream-media/smi.php"
    )
);?>

    <div class="article__pop-up zindex110" id="arcticle-pop1">
        <div class="wrapper">
            <div class="pop-up__close">
                <svg class="icon">
                    <use xlink:href="#Close"></use>
                </svg>
            </div>
            <div class="wrapper">

                <div class="img">
                    <img loading="lazy" src="/upload/uf/857/6hrk05oldviv4d8ikj9vxb83vr7c6ym3.svg" alt="">
                </div>
                <ul>
                    <?
                    $dbItems = \Bitrix\Iblock\ElementTable::getList(array(
                        'select' => array('*'),
                        'filter' => array('IBLOCK_ID' => 9),
                        'cache' => ['ttl' => 604800]
                    ));
                    $post = 1;
                    while ($arItem = $dbItems->fetch()) {
                        $dbProperty = \CIBlockElement::getProperty(
                            $arItem['IBLOCK_ID'],
                            $arItem['ID']
                        );
                        while ($arProperty = $dbProperty->Fetch()) {
                            $arItem['PROPERTIES'][] = $arProperty;
                        } ?>

                        <? if ($post < 5) { ?>
                            <li><a href="/dream-media/detail.php?post=<?= $arItem['ID'] ?>"><?= $arItem['NAME'] ?></a>
                            </li>
                        <? } ?>
                        <? $post++;
                    }
                    ?>
                    <li class="more"><a href="/dream-media/publications.php" class="button">Все публикции</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="article__pop-up zindex110" id="arcticle-pop2">
        <div class="wrapper">
            <div class="pop-up__close">
                <svg class="icon">
                    <use xlink:href="#Close"></use>
                </svg>
            </div>
            <div class="wrapper">
                <div class="img">
                    <img loading="lazy" src="/html/assets/img/interview-channel2.png" alt="">
                </div>
                <ul>
                    <?
                    $MY_HL_BLOCK_ID = 14;
                    CModule::IncludeModule('highloadblock');
                    $entity_data_class = GetEntityDataClass($MY_HL_BLOCK_ID);
                    $rsData = $entity_data_class::getList(array(
                        'select' => array('*'),
                        'order' => array("ID" => "DESC"),
                        'filter' => array('UF_TYPESMI' => 83),
                        'cache' => ['ttl' => 604800]
                    ));
                    $a = 1;
                    while ($el = $rsData->fetch()) {
                        $link = $el['UF_LINK'];
                        $title = $el['UF_TITLE'];

                        ?><? if ($a < 5) { ?>
                            <li><a href="<?= $link; ?>"><?= $title; ?></a></li>
                        <? } ?>
                        <?php $a++;
                    } ?>
                    <li class="more"><a href="/dream-media/publications.php" class="button">Все публикции</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="article__pop-up zindex110" id="arcticle-pop3">
        <div class="wrapper">
            <div class="pop-up__close">
                <svg class="icon">
                    <use xlink:href="#Close"></use>
                </svg>
            </div>
            <div class="wrapper">
                <div class="img">
                    <img loading="lazy" src="/html/assets/img/interview-channel3.png" alt="">
                </div>
                <ul>
                    <?
                    $MY_HL_BLOCK_ID = 14;
                    CModule::IncludeModule('highloadblock');
                    $entity_data_class = GetEntityDataClass($MY_HL_BLOCK_ID);
                    $rsData = $entity_data_class::getList(array(
                        'select' => array('*'),
                        'order' => array("ID" => "DESC"),
                        'filter' => array('UF_TYPESMI' => 84),
                        'cache' => ['ttl' => 604800]
                    ));
                    $a = 1;
                    while ($el = $rsData->fetch()) {
                        $link = $el['UF_LINK'];
                        $title = $el['UF_TITLE'];
                        ?>
                        <? if ($a < 5) { ?>
                            <li><a href="<?= $link; ?>"><?= $title; ?></a></li>
                        <? } ?>
                        <?php $a++;
                    } ?>
                    <li class="more"><a href="/dream-media/publications.php" class="button">Все публикции</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="article__pop-up zindex110" id="arcticle-pop4">
        <div class="wrapper">
            <div class="pop-up__close">
                <svg class="icon">
                    <use xlink:href="#Close"></use>
                </svg>
            </div>
            <div class="wrapper">
                <div class="img">
                    <img loading="lazy" src="/html/assets/img/interview-channel4.png" alt="">
                </div>
                <ul>
                    <?
                    $MY_HL_BLOCK_ID = 14;
                    CModule::IncludeModule('highloadblock');
                    $entity_data_class = GetEntityDataClass($MY_HL_BLOCK_ID);
                    $rsData = $entity_data_class::getList(array(
                        'select' => array('*'),
                        'order' => array("ID" => "DESC"),
                        'filter' => array('UF_TYPESMI' => 85),
                        'cache' => ['ttl' => 604800]
                    ));
                    $a = 1;
                    while ($el = $rsData->fetch()) {
                        $link = $el['UF_LINK'];
                        $title = $el['UF_TITLE'];
                        ?>
                        <? if ($a < 5) { ?>
                            <li><a href="<?= $link; ?>"><?= $title; ?></a></li>
                            <? $a++;
                        } ?>
                    <?php } ?>
                    <li class="more"><a href="/dream-media/publications.php" class="button">Все публикции</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="askQuestion">
        <div class="wrapper">
            <div class="text-block">

                <form class="g-flex-wrap g-flex-between g-flex-align-center --key --mgt30">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Задать <span class="--<? $APPLICATION->ShowProperty("color") ?>">вопрос</span> прямо сейчас</h3>
                    <label>
                        <input type="text" placeholder="Имя*" required="" tabindex="0">
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required="" tabindex="0">
                    </label>
                    <label>
                        <input type="email" class="email" placeholder="Email*" required="" tabindex="0">
                    </label>
                    <label class="w66 w100-xs" style="height: 100px;">
                        <input type="text" style="height: 100px;border-radius: 30px;" placeholder="Комментарий"
                               tabindex="0">
                    </label>
                    <label class="inputCheckbox">
                        <button type="submit" class="btn --mgb20 --<? $APPLICATION->ShowProperty("color") ?>">Отправить вопрос</button>
                        <input type="checkbox" required="" checked="" tabindex="0">
                        <span>Нажимая на кнопку "Отправить вопрос", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                    </label>
                </form>
            </div>
        </div>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>