<? 
header('Content-type: application/json');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
use Bitrix\Highloadblock\HighloadBlockTable as HLBT;
use Bitrix\Main\Entity;
$filter = [];
$filter['UF_TIPEOBJECT'] = 8;
//$filter['UF_PRICE'] = ">100000000";

if ($_POST['UF_DISTRICT']) {$filter['UF_DISTRICT'] = $_POST['UF_DISTRICT'];}
if ($_POST['UF_AMOUNT_ROOMS']) {$filter['UF_AMOUNT_ROOMS'] = $_POST['UF_AMOUNT_ROOMS'];}
//print_r($filter);
//die;




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

function GetUserFieldValue($uf_name, $uf_value_id)
{
   // return 'свойство';
    $obEnum = new CUserFieldEnum;
    $rsEnum = $obEnum->GetList(array(), array("USER_FIELD_NAME "=> $uf_name, 'ID' => $uf_value_id));
    if($rsEnumAr = $rsEnum->GetNext())
        {
            return $rsEnumAr["VALUE"];
        } 
        return '';
}

    $MY_HL_BLOCK_ID = 12;
    CModule::IncludeModule('highloadblock');
    $entity_data_class = GetEntityDataClass($MY_HL_BLOCK_ID);
    $rsData = $entity_data_class::getList(array(
        'select' => array('*'),
        'order' => array("ID" => "DESC"),
        'filter' => $filter //array("UF_TIPEOBJECT" => 8, "UF_TIPEOBJECT" => 8) //$filter
    ));
    $a=1;
    $key = 0;
    $data = array();
    while ($el = $rsData->fetch()) {
     
    if ($_POST['price_min'] > 0) { $use_filter_price = 1; }
    if ($_POST['price_max'] > 0) { $use_filter_price = 1; }

    $images = $el['UF_IMAGES'];
    $data[$key]['filter'] = $_POST;
    $data[$key]['id'] = $el['ID'];
    if ($key == 3) {
        $data[$key]['special'] = true;
        $images = $el['UF_IMAGES'];
        foreach ($images as $image) {
            $URL = CFile::GetFileArray($image);
            //$renderImage = CFile::ResizeImageGet($image, Array("width" => 344, "height" => 332), BX_RESIZE_IMAGE_PROPORTIONAL);
            $renderImage_spec = CFile::ResizeImageGet($image, Array("height" => 539, "width" => 337), BX_RESIZE_IMAGE_EXACT, false);
            //echo CFile::ShowImage($renderImage['src'], $newWidth, $newHeight, "border=0", "", true); 
            $data[$key]['images']['original'][] = $renderImage_spec['src'];  
            $data[$key]['images']['special'][] = $renderImage_spec["src"]; 
        }
    } else {
        $data[$key]['special'] = false;
        $images = $el['UF_IMAGES'];
        foreach ($images as $image) {
            $URL = CFile::GetFileArray($image);
            $renderImage = CFile::ResizeImageGet($image, Array("width" => 358, "height" => 345), BX_RESIZE_IMAGE_EXACT, false);
            //$renderImage_spec = CFile::ResizeImageGet($image, Array("width" => 337, "height" => 539), BX_RESIZE_IMAGE_PROPORTIONAL_ALT);
            //echo CFile::ShowImage($renderImage['src'], $newWidth, $newHeight, "border=0", "", true); 
            $data[$key]['images']['original'][] = $renderImage['src'];  
            $data[$key]['images']['special'][] = $renderImage["src"]; 
        }
    }
   
    $data[$key]['title'] = $el['UF_TITLE'];

    $data[$key]['description'] = $el['UF_TITLE'];
    $data[$key]['infrastructure'] = $el['UF_TITLE'];
    $data[$key]['footage'] = $el['UF_SQUARE_ALL'];
    $data[$key]['metro']['name'] = GetUserFieldValue('UF_METRO', $el['UF_METRO']); // $el['UF_METRO'];
    $data[$key]['metro']['walk'] = $el['UF_TIME_METRO'];
    $data[$key]['address'] = $el['UF_ADDRES'];
    $data[$key]['floors'] = $el['UF_FLOOR'];
    $data[$key]['floors_total'] = '';//$el['UF_TITLE'];
    $data[$key]['price'] = $el['UF_PRICE'];
    $data[$key]['total_area'] = $el['UF_SQUARE_ALL'];
    $data[$key]['living_area'] = $el['UF_SQUARE_LIVING'];
    $data[$key]['kitchen_area'] = $el['UF_SQUARE_KITCHEN'];
    $data[$key]['room_area'] = $el['UF_SQUARE_ROOMS'];
    $data[$key]['room_location'] = GetUserFieldValue('UF_PLANTYPE', $el['UF_PLANTYPE']);
    $data[$key]['view'] = $el['UF_VIEWS_VINDOW'];
    $data[$key]['bathrooms'] = $el['UF_BATHROOMS'];
    $data[$key]['ceiling_height'] = $el['UF_HEIGHT'];
    $data[$key]['balcony'] = $el['UF_BALCONY'];
    $data[$key]['house_type'] = $el['UF_HOUSE_TYPE'];
    $data[$key]['year'] = $el['UF_BUILD_YEAR'];
    $data[$key]['repair'] = GetUserFieldValue('UF_RENOVATION', $el['UF_RENOVATION']);
    $data[$key]['furniture'] = $el['UF_FURNITURE'];
    $data[$key]['technique'] = $el['UF_TECH'];
    $data[$key]['conditioning'] = $el['UF_CLIMATIC'];
    $data[$key]['garbage_chute'] = $el['UF_GARBAGE'];
    $data[$key]['elevator'] = $el['UF_ELEVATOR'];
    $data[$key]['parking'] = $el['UF_PARKING'];
    $data[$key]['fenced_area'] = $el['UF_SELF_AREA'];
    $data[$key]['security'] = $el['UF_GUARD'];
    $data[$key]['CCTV'] = $el['UF_VODEOCAM'];
    $data[$key]['concierge'] = $el['UF_CONCIERGE'];
    $data[$key]['intercom'] = $el['UF_INTERCOM'];
    $data[$key]['deal_status'] = GetUserFieldValue('UF_SALETYPE', $el['UF_SALETYPE']);
    $data[$key]['rights'] = $el['UF_TYPE_CONTRACT'];
    $data[$key]['year_joining'] = $el['UF_YEAR_OWN'];
    $data[$key]['n_owners'] = $el['UF_AMOUNT_OWN'];
    $data[$key]['agent'] = '1';//$el['UF_TITLE'];
    $data[$key]['map']['camera']['lat'] = (float) $el['UF_LAT'];
    $data[$key]['map']['camera']['lng'] = (float) $el['UF_LNG'];
    $data[$key]['map']['camera']['zoom'] = 15;
    $data[$key]['map']['point']['lat'] = (float) $el['UF_LAT'];
    $data[$key]['map']['point']['lng'] = (float) $el['UF_LNG'];
    $key++;
    //print_r($images);
    }

    echo json_encode($data);
?>

