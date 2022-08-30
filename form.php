<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
var_dump($_POST);

use Bitrix\Highloadblock\HighloadBlockTable as HLBT;
const MY_HL_BLOCK_ID = 11;
CModule::IncludeModule('highloadblock');

function GetEntityDataClass($HlBlockId) 
{
    if (empty($HlBlockId) || $HlBlockId < 1)
    {
        return false;
    }
    $hlblock = HLBT::getById($HlBlockId)->fetch();
    $entity = HLBT::compileEntity($hlblock);
    $entity_data_class = $entity->getDataClass();
    return $entity_data_class;
}


$entity_data_class = GetEntityDataClass(MY_HL_BLOCK_ID);
$result = $entity_data_class::add($_POST);

use Bitrix\Main\Mail\Event;
Event::send(array(
    "EVENT_NAME" => "Заполнена форма",
    "LID" => "s1",
    "C_FIELDS" => $_POST,
));

?>
