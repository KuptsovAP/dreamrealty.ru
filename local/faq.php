<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
?>
<?
if ((CModule::IncludeModule('search'))&&(CModule::IncludeModule('iblock'))){
    $q = $_REQUEST['q'];
    $obSearch = new CSearch;
    $obSearch->Search(array(
                            "QUERY" => $q,
                            "SITE_ID" => LANG,
                            "MODULE_ID" => 'iblock',
                            "CHECK_DATES" => 'Y',
                            "PARAM2" => "7"
                            )
                    );
    $result = array();
    while ($res = $obSearch->GetNext()){
        $id = $res['ITEM_ID'];
        //если нашли раздел:
        if (strripos($id, 'S')!==false){
                $result_item['TITLE'] = $res['TITLE'];
                $result_item['ID'] = $res['ITEM_ID'];
                $result[] = $result_item;  
        }
        //если S-ки нету, то
        else{
                $result_item['TITLE'] = $res['TITLE'];
                $result_item['ID'] = $res['ITEM_ID'];
                $result[] = $result_item;
                
        }
    }
    echo json_encode($result);
}
?>