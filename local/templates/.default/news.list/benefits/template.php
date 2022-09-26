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
<section class="section --pdb0" id="list">
    <div class="wrapper">
        <div class="section__text-slider --mgt0-xs" style="margin-bottom: 90px;">
            <div class="section__text-slider_img">
                <img loading="lazy" src="<?= CFile::GetPath($arResult['PICTURE']) ?>" alt="">
            </div>
            <div class="section__text-slider_slider">
                <div class="slider">
                    <? foreach ($arResult['ITEMS'] as $ITEM) : ?>
                        <div class="section__text-slider_slide">
                            <div class="num" style="top: 0px;">
                                <? if ($ITEM['SORT'] < 10) : ?>
                                    0
                                <? endif; ?>
                                <?= $ITEM['SORT'] ?>
                            </div>
                            <h3><?=$ITEM['NAME']?></h3>
                            <?=$ITEM['~PREVIEW_TEXT']?>
                        </div>
                    <? endforeach; ?>
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
            <? include($_SERVER['DOCUMENT_ROOT'] . '/local/forms/send-resume.php'); ?>
        </div>
    </div>
</section>
