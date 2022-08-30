<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */


$arSelect = Array("ID", "IBLOCK_ID", "NAME", "PREVIEW_PICTURE", "DATE_ACTIVE_FROM","PROPERTY_*");
$arFilter = Array("IBLOCK_ID"=>IntVal(8), "CODE" => "dreambot", "ACTIVE"=>"N");
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>1), $arSelect);
while($ob = $res->GetNextElement()){
    $arFields = $ob->GetFields();

    $arProps = $ob->GetProperties();

    $arResult['DREAM_BOT'] = $arFields;
    $arResult['DREAM_BOT']['PROPS'] = $arProps;
}