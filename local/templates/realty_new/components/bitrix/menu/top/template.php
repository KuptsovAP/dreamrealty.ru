<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <ul>
        <?foreach($arResult as $arItem):?>
            <?if($arItem["SELECTED"]):?>
                <li class="selected"><a href="<?=$arItem["LINK"]?>"  class="menuHover--<?=$arItem["PARAMS"]["color"]?>"><?=$arItem["TEXT"]?></a></li>
            <?else:?>
                <li><a href="<?=$arItem["LINK"]?>"  class="menuHover--<?=$arItem["PARAMS"]["color"]?>"><?=$arItem["TEXT"]?></a></li>
            <?endif?>
        <?endforeach?>
    </ul>
<?endif?>