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
<style>
    .advantage-cards span.--green {
        margin-right: 0 !important;
        margin-left: 0 !important;
    }
</style>
<section class="section advantage-cards relative grayHalfBG --pdb60">
    <div class="wrapper">
        <h2 class="section__title --mgb60"><?= $arParams['~TITLE'] ?></h2>
        <div class="section__advantage-cards_slider slider --min-text">
            <? foreach ($arResult['ITEMS'] as $ITEM) : ?>
                <div class="section__advantage-cards_slide">
                    <a href="<?= $arParams['URL'] ?>#advant_pop-up<?= $ITEM['ID'] ?>"
                       class="section__advantage-card relative g-flex-column g-flex-justify-end"
                       style="background-image: url(<?= CFile::GetPath($ITEM['PROPERTIES']['FILE']['VALUE']) ?>);">
                        <div class="g-flex-align-center g-flex-justify-center"><p>
                                <?= $ITEM['~NAME'] ?>
                            </p></div>
                        <span class="num">
                             <?= $ITEM['SORT'] ?>
                        </span>
                    </a>
                </div>
            <? endforeach; ?>
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
        <a href="<?= $arParams['URL'] ?>" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center">
            <div class="arrow g-flex-align-center g-flex-justify-center">
                <svg class="icon">
                    <use xlink:href="#ArrowSquare"></use>
                </svg>
            </div>
            Все преимущества
        </a>
    </div>
</section>
