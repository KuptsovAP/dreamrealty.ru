<? 
header('Content-type: application/json');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
use Bitrix\Highloadblock\HighloadBlockTable as HLBT;
use Bitrix\Main\Entity;





//Функция получения экземпляра класса:
function GetEntityDataClass($HlBlockId)
{
    if (empty($HlBlockId) || $HlBlockId < 1) {
        return false;
    }
    $hlblock = HLBT::getById($HlBlockId)->fetch();
    $entity = HLBT::compileEntity($hlblock);
    $entity_data_class = $entity->getDataClass();
    return $entity_data_class;
}

    $MY_HL_BLOCK_ID = 12;
    CModule::IncludeModule('highloadblock');
    $entity_data_class = GetEntityDataClass($MY_HL_BLOCK_ID);
    $rsData = $entity_data_class::getList(array(
        'select' => array('*'),
        'order' => array("ID" => "DESC"),
        'filter' => array('ID' => $_GET['id']),
    ));
    $a=1;
    $key = 0;
    $data = array();
    while ($el = $rsData->fetch()) {

    $images = $el['UF_IMAGES'];
    $data[$key]['id'] = $el['ID'];
    if ($key == 3) {
        $data[$key]['special'] = true;
    } else {
        $data[$key]['special'] = false;
    }
   
    $data[$key]['title'] = $el['UF_TITLE'];
    $images = $el['UF_IMAGES'];
    foreach ($images as $image) {
        $URL = CFile::GetFileArray($image); 
        $data[$key]['images']['original'][] = $URL["SRC"];  
        $data[$key]['images']['special'][] = $URL["SRC"]; 
    }

    $data[$key]['description'] = $el['UF_TITLE'];
    $data[$key]['infrastructure'] = $el['UF_TITLE'];
    $data[$key]['footage'] = $el['UF_TITLE'];
    $data[$key]['metro']['name'] = $el['UF_METRO'];
    $data[$key]['metro']['walk'] = $el['UF_TIME_METRO'];
    $data[$key]['address'] = $el['UF_ADDRES'];
    $data[$key]['floors'] = $el['UF_FLOOR'];
    $data[$key]['floors_total'] = $el['UF_TITLE'];
    $data[$key]['price'] = $el['UF_PRICE'];
    $data[$key]['total_area'] = $el['UF_SQUARE_ALL'];
    $data[$key]['living_area'] = $el['UF_TITLE'];
    $data[$key]['kitchen_area'] = $el['UF_TITLE'];
    $data[$key]['room_area'] = $el['UF_TITLE'];
    $data[$key]['room_location'] = $el['UF_TITLE'];
    $data[$key]['view'] = $el['UF_TITLE'];
    $data[$key]['bathrooms'] = $el['UF_TITLE'];
    $data[$key]['ceiling_height'] = $el['UF_TITLE'];
    $data[$key]['balcony'] = $el['UF_TITLE'];
    $data[$key]['house_type'] = $el['UF_TITLE'];
    $data[$key]['year'] = $el['UF_TITLE'];
    $data[$key]['repair'] = $el['UF_TITLE'];
    $data[$key]['furniture'] = $el['UF_TITLE'];
    $data[$key]['technique'] = $el['UF_TITLE'];
    $data[$key]['conditioning'] = $el['UF_TITLE'];
    $data[$key]['garbage_chute'] = $el['UF_TITLE'];
    $data[$key]['elevator'] = $el['UF_TITLE'];
    $data[$key]['parking'] = $el['UF_TITLE'];
    $data[$key]['fenced_area'] = $el['UF_TITLE'];
    $data[$key]['security'] = $el['UF_TITLE'];
    $data[$key]['CCTV'] = $el['UF_TITLE'];
    $data[$key]['concierge'] = $el['UF_TITLE'];
    $data[$key]['intercom'] = $el['UF_TITLE'];
    $data[$key]['deal_status'] = $el['UF_TITLE'];
    $data[$key]['rights'] = $el['UF_TITLE'];
    $data[$key]['year_joining'] = $el['UF_TITLE'];
    $data[$key]['n_owners'] = $el['UF_TITLE'];
    $data[$key]['agent'] = $el['UF_TITLE'];
    $data[$key]['map']['camera']['lat'] = 55.7725;
    $data[$key]['map']['camera']['lng'] = 37.6227065;
    $data[$key]['map']['camera']['zoom'] = 15;
    $data[$key]['map']['point']['lat'] = 55.771297;
    $data[$key]['map']['point']['lng'] = 37.622378;
    $key++;
    //print_r($images);
    }

    echo json_encode($data);
?>

