<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

<?php foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

    <a href="/team/detail.php?person=<?=$arItem['ID']?>/" class="section__people" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="section__people_avatar">
            <img loading="lazy" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="">
            <?php if(!empty($arItem['PROPERTIES']['EKSPERT_GODA']['VALUE'])):?>
                <div class="section__people_advant">
                    <svg class="icon"><use xlink:href="#Reward1"></use></svg>
                </div>
            <?php elseif (!empty($arItem['PROPERTIES']['EKSPERT_SEZONA']['VALUE'])):?>
                <div class="section__people_advant">
                    <svg class="icon"><use xlink:href="#Reward2"></use></svg>
                </div>
            <?php elseif (!empty($arItem['PROPERTIES']['AGENT_MESYAC']['VALUE'])):?>
                <div class="section__people_advant">
                    <svg class="icon"><use xlink:href="#Reward3"></use></svg>
                </div>
            <?php endif;?>
        </div>
        <p class="section__people_name">
            <?=$arItem['DISPLAY_PROPERTIES']['SURNAME']['VALUE']?> <?=$arItem['DISPLAY_PROPERTIES']['NAME']['VALUE']?>
        </p>
        <?php if(!empty($arItem['PROPERTIES']['PHONE']['VALUE'])):?>
            <p class="section__people_phone"><?=$arItem['PROPERTIES']['PHONE']['VALUE']?></p>
        <?php endif;?>
        <?php if(!empty($arItem['PROPERTIES']['REVIEWS']['VALUE'])):?>
            <p class="section__people_phone"><?=$arItem['PROPERTIES']['REVIEWS']['VALUE']?></p>
        <?php endif;?>
        <p class="section__people_phone"><?=$arItem['PROPERTIES']['0']['VALUE']?></p>


        <?php if(!empty($arItem['PROPERTIES']['EKSPERT_GODA']['VALUE'])):?>
            <span>Эксперт года: <?=$arItem['PROPERTIES']['EXPERT_GODA_TEXT']['VALUE']?></span>
        <?php elseif (!empty($arItem['PROPERTIES']['EKSPERT_SEZONA']['VALUE'])):?>
            <span>Эксперт сезона: <?=$arItem['PROPERTIES']['EXPERT_SEZONA_TEXT']['VALUE']?></span>
        <?php elseif (!empty($arItem['PROPERTIES']['AGENT_MESYAC']['VALUE'])):?>
            <span>Агент месяца: <?=$arItem['PROPERTIES']['AGENT_MESYACA_TEXT']['VALUE']?></span>
        <?php endif;?>
    </a>

<?php endforeach;?>

<?php if ($arResult['DREAM_BOT']):?>
    <a href="/pages/dream-bot/" class="section__people">
        <div class="section__people_avatar">
            <img loading="lazy" src="<?=CFile::GetPath($arResult['DREAM_BOT']['PREVIEW_PICTURE'])?>" alt="">
        </div>
        <p class="section__people_name"><?=$arResult['DREAM_BOT']['PROPS']['NAME']['VALUE']?>  <?=$arResult['DREAM_BOT']['PROPS']['SURNAME']['VALUE']?></p>
        <p class="section__people_phone"><?=$arResult['DREAM_BOT']['PROPS']['PHONE']['VALUE']?></p>
        <p class="section__people_feeds"><?=$arResult['DREAM_BOT']['PROPS']['REVIEWS']['VALUE']?></p>
    </a>
<?php endif;?>
