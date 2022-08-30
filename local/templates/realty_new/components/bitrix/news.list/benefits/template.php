<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?php if ($arResult['ITEMS']) : ?>
    <section class="section advantages-page grayHalfBG">
        <div class="wrapper">
            <div class="section__big-text --mgb40">
                <p><?= $arParams['TITLE'] ?></p>
            </div>
            <div class="section__advantages--full g-flex-wrap g-flex-between --mgt180">
                <? foreach ($arResult['ITEMS'] as $ITEM) : ?>
                    <a href="#advant_pop-up<?= $ITEM['ID'] ?>"
                       class="section__advantage --pkm90 g-flex-column g-flex-justify-end --bg-cover-xs"
                       style="background-image: url(<?= CFile::GetPath($ITEM['PROPERTIES']['FILE']['VALUE']) ?>);">
                        <span class="num"><?= $ITEM['SORT'] ?></span>
                        <div class="g-flex-align-center g-flex-justify-center"><p>
                                <?= $ITEM['~NAME'] ?>
                            </p></div>
                    </a>
                <? endforeach; ?>
            </div>
        </div>
    </section>
    <?php foreach ($arResult['ITEMS'] as $ITEM) : ?>
        <div class="advantages-pop-up pop-up g-flex-column" role="document" id="advant_pop-up<?= $ITEM['ID'] ?>">
            <div class="pop-up-container-wrap">
                <div class="content wrapper">
                    <section class="section pop-up__header">
                        <div class="pop-up__close">
                            <svg class="icon">
                                <use xlink:href="#Close"></use>
                            </svg>
                        </div>
                        <div class="wrapper">
                            <h3 class="title"><?= $ITEM['~NAME'] ?></h3>
                        </div>
                        <div class="pop-up__header_gray differences g-flex-column --next_advantages">
                            <div class="wrapper">
                                <div class="pop-up__header_top g-flex-between">
                                    <div class="pop-up__header_img img--c1vdg5y">
                                        <img loading="lazy" src="<?= $ITEM['DETAIL_PICTURE']['SRC'] ?>" alt="">
                                    </div>
                                    <div class="pop-up__header_text">
                                        <div class="num">№<?= $ITEM['SORT'] ?></div>
                                        <?= $ITEM['~DETAIL_TEXT'] ?>
                                    </div>
                                </div>
                                <? if ($ITEM['PROPERTIES']['PREVIEW']['~VALUE']['TEXT'] || $ITEM['PROPERTIES']['BTN_LINK']['VALUE']) : ?>
                                    <div class="pop-up__header_bottom">
                                        <?= $ITEM['PROPERTIES']['PREVIEW']['~VALUE']['TEXT'] ?>
                                        <? if ($ITEM['PROPERTIES']['BTN_LINK']['VALUE']) : ?>
                                            <a href=" <?= $ITEM['PROPERTIES']['BTN_LINK']['VALUE'] ?>"
                                               target="_blank"
                                               class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt60"
                                               style="visibility: visible; animation-name: fadeInLeft;">
                                                <div class="arrow g-flex-align-center g-flex-justify-center">
                                                    <svg class="icon">
                                                        <use xlink:href="#ArrowSquare"></use>
                                                    </svg>
                                                </div>
                                                <?= $ITEM['PROPERTIES']['BTN_NAME']['VALUE'] ?>
                                            </a>
                                        <? endif; ?>
                                    </div>
                                <? endif; ?>
                            </div>
                        </div>
                    </section>
                    <?= $ITEM['~PREVIEW_TEXT'] ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

