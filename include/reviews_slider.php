<?php
#Получаем Отзывы из хайлоада
$MY_HL_BLOCK_ID = 7;
$entity_data_class = GetEntityDataClass($MY_HL_BLOCK_ID);

$arReviews = [];

$rsData = $entity_data_class::getList(array(
    'select' => array('*'),
    'order' => array("UF_ORDER" => "ASC"),
    'limit' => '10',
    'cache' => ['ttl' => 604800]
));

while ($el = $rsData->fetch()) {
    $arReviews[] = $el;
}
?>

<?php if (!empty($arReviews)):?>
    <section class="section feedbacks">
        <div class="wrapper">
            <div class="section__big-text --mgb40">
                <p>Репутация и суперсила</p>
            </div>
            <h2 class="section__title --mgb40"><span class="--<? $APPLICATION->ShowProperty("color") ?>">
                        Отзывы</span> клиентов
            </h2>
            <div class="section__feedback-slider slider">
                <?php
                $i = 0;
                $a = 1;
                foreach ($arReviews as $arReview) :?>
                    <?php  if ($i == 0) :?>
                        <div class="section__feedback-slide g-flex-between g-flex-align-stretch">
                    <?php endif;?>

                    <?php
                    $name = $arReview['UF_NAME'];
                    $text = $arReview["UF_TEXT"];

                    $text = preg_replace("<div>", "", $text);
                    $text = preg_replace("</div>", "", $text);

                    if ($i == 0) {
                        $text = cut($text, 500);
                    }
                    if ($i == 1) {
                        $text = cut($text, 200);
                    } ?>


                    <div class="section__feedback-col g-flex-column g-flex-between">
                        <div class="section__feedback-block">
                            <p><?= $text ?></p>
                            <a class="fit-content g-flex-align-center --mgt16 --<? $APPLICATION->ShowProperty("color") ?> js__open-hash_pop-up" href="#feedback_pop-up<?=$a?>">
                                Читать далее
                                <svg class="icon">
                                    <use xlink:href="#ArrowSquare"></use>
                                </svg>
                            </a>
                            <span class="g-flex-align-center g-flex-justify-end --mgt16"><?=$name?></span>
                        </div>

                        <?php if ($i == 1) :?>
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
                        <?php endif;?>
                    </div>

                    <?php
                    $i++;
                    if ($i > 1) {
                        $i = 0; ?>

                        </div>
                    <?  }
                    $a++;

                endforeach;?>
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
            <a href="/feedbacks/" target="_blank" class="section__edge-button wow fadeInLeft g-flex-align-center">
                <div class="arrow g-flex-align-center g-flex-justify-center">
                    <svg class="icon">
                        <use xlink:href="#ArrowSquare"></use>
                    </svg>
                </div>
                Все отзывы
            </a>
        </div>
    </section>
<?php endif;?>


<?php
//Вывод модальных окон с отзывами.
$i = 1;
$a = 1;
foreach ($arReviews as $arReview):
    $name = $arReview['UF_NAME'];
    $text = $arReview["UF_TEXT"];?>

    <div class="transparent_pop-up g-flex-align-center g-flex-justify-center external" id="feedback_pop-up<?=$a;?>">
        <div class="wrapper">
            <div class="text-block feedback">
                <div class="pop-up__close">
                    <svg class="icon">
                        <use xlink:href="#Close"></use>
                    </svg>
                </div>
                <span><?=$name;?>.</span>
                <div class="message"><?=$text?></div>
            </div>
        </div>
    </div>
<?php
    $i++; $a++;
    endforeach;
?>
