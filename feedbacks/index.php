<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ОТЗЫВЫ");?>
<script src="https://yastatic.net/share2/share.js" async></script>
<?php

$MY_HL_BLOCK_ID = 7;
$count_notice=5;
// создаем объект пагинации
$nav = new \Bitrix\Main\UI\PageNavigation("nav-more-notice");
$nav->allowAllRecords(true)
    ->setPageSize($count_notice)
    ->initFromUri();



CModule::IncludeModule('highloadblock');
$entity_data_class = GetEntityDataClass($MY_HL_BLOCK_ID);
$reviewsCount = $entity_data_class::getCount();

$rsData = $entity_data_class::getList(array(
    'select' => array('*'),
    'order' => array("UF_ORDER" => "ASC"),
    "count_total" => true,
    "offset" => $nav->getOffset(),
    "limit" => $nav->getLimit(),
    'cache' => ['ttl' => 604800],
));
// засовываем общее количество записей в объект пагинации, перед выбором нужных объектов
$nav->setRecordCount($rsData->getCount());

$i = 0;
?>


    <section class="section feedbacks">
        <div class="wrapper">
            <div class="section__big-text">
                <p>Доверие</p>
            </div>
            <h2 class="section__title --mgb20">В книге отзывов Dream <span class="--lightViolet"> <b class="--feedBig --lightViolet" id="feedbackCounter" data-feeds="<?=$reviewsCount?>"> <?=$reviewsCount?></b> отзыва</span></h2>
            <div id="feedbackSlider" class="section__feedback-slider slider">
                <div class="section__feedback-slide g-flex-column container_reviews">
                    <?php
                    $j = 1;
                    while ($el = $rsData->fetch()):
                        $name = $el['UF_NAME'];
                        $elemId = $el['ID'];

                        $text = $el["UF_TEXT"];
                        $text = preg_replace("<div>", "", $text);
                        $text = preg_replace("</div>", "", $text);

                        if ($i == 0 || $i == 1) {
                            $text = cut($text, 150);
                        }
                        if ($i == 2) {
                            $text = cut($text, 600);
                        }
                        ?>
                        <?if($i == 0):?>
                            <div class="container_review section__feedback-row -fg-0-xs g-flex-between g-flex-align-stretch --mgb60">
                                 <div class="section__feedback-col -fg-0-xs g-flex-column g-flex-between">
                        <?endif;?>

                            <?if($i == 2 ):?>
                                 <div class="section__feedback-col -fg-0-xs g-flex-column g-flex-between">
                            <?endif;?>

                                    <div class="section__feedback-block -fg-0-xs js__open-hash_pop-up" href="#feedback_pop-up<?=$elemId?>">
                                        <p style="white-space: pre-wrap;"><?=$text?></p>
                                        <a class="fit-content g-flex-align-center --mgt16 --lightViolet">
                                            Читать далее
                                            <svg class="icon">
                                                <use xlink:href="#ArrowSquare"></use>
                                            </svg>
                                        </a>
                                        <span class="g-flex-align-center g-flex-justify-end --mgt16"><?=$name?></span>
                                    </div>

                                    <?php if($j == 4) :
                                    $i++;
                                    ?>
                                        <div class="section__feedback-block -fg-1-xs share --lightViolet">
                                            <p>Хотите поделиться своими впечатлениями от работы с нами прямо сейчас?</p>
                                            <div class="section__feedback-block_buttons --mgt48 g-flex-between g-flex-align-center">
                                                <a href="#feedbackPop" class="btn --lightViolet --white js__open-hash_pop-up">Оставить отзыв</a>
                                                <div class="stars g-flex-align-center">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif;?>

                            <?if($i == 1):?>
                                </div>
                            <?endif;?>

                            <?if($i == 2):?>
                                    </div>
                                </div>
                            <?endif;?>
                    <?php
                        $i++;
                        if($i == 3) {
                            $i=0;
                        }
                        $j++;
                    endwhile;?>
                </div>
            </div>

            <?php $APPLICATION->IncludeComponent("bitrix:main.pagenavigation", "feedback", Array(
                "NAV_OBJECT" => $nav,
                "SEF_MODE" => "N"
            ),
                false
            );?>

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
        "PATH" => "/include/feedbacks/text.php"
    )
);?>


<?php
$rsData = $entity_data_class::getList(array(
    'select' => array('*'),
    'order' => array("UF_ORDER" => "ASC"),
    "count_total" => true,
    "offset" => $nav->getOffset(),
    "limit" => $nav->getLimit(),
    'cache' => ['ttl' => 604800],
));

?>

<div class="feedback_popups_wrap">
    <?php while ($el = $rsData->fetch()):
        $name = $el['UF_NAME'];
        $elemId = $el['ID'];

        $text = $el["UF_TEXT"];
        $text = preg_replace("<div>", "", $text);
        $text = preg_replace("</div>", "", $text);?>

        <div class="feedback_popups transparent_pop-up g-flex-align-center g-flex-justify-center external" id="feedback_pop-up<?= $elemId; ?>">
            <div class="wrapper">
                <div class="text-block feedback">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <span><?= $name; ?></span>
                    <div class="message" style="white-space: pre-wrap;"><?= $text ?></div>
                </div>
            </div>
        </div>
    <?php endwhile;?>
</div>





    <div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="feedbackPop">
        <div class="wrapper">
            <div class="text-block">

                <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt90 full-width" enctype="multipart/form-data" method="post">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Оставить <span class="--lightViolet">отзыв</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <button type="submit" class="btn --lightViolet">Отправить отзыв</button>
                    <label class="w66 w100-xs">
                        <textarea type="text" class="js-autoComment" placeholder="Комментарий"></textarea>
                    </label>
                    <label class="inputCheckbox">
                        <input type="checkbox" required checked>
                        <span>Нажимая на кнопку "Отправить отзыв", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
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
            Благодарим за то, что поверили в нас <br>и воспользовались услугами нашего агентства!
        </div>
    </div>


    <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>