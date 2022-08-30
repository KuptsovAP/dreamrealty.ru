<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */?>

<?if($arResult["PAGE_COUNT"] > 1):?>

    <?if ($arResult["CURRENT_PAGE"]+1 <= $arResult["PAGE_COUNT"]):?>
        <?
        $plus = $arResult["CURRENT_PAGE"]+1;
        $url = $arResult["URL"] . "?nav-more-notice=page-".$plus;
        ?>

        <div class="section__centered-button --mgt60 g-flex-justify-center container_navigation">
            <div data-url="<?=$url?>" class="btn --lightViolet load_more">
                Показать еще
            </div>
        </div>

    <?else:?>

        <div class="section__centered-button --mgt60 g-flex-justify-center container_navigation">
            <div class="btn --lightViolet load_more">
                Загружено все
            </div>
        </div>

    <?endif?>

<?endif?>
