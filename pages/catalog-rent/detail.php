<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("КАТАЛОГ ВТОРИЧКИ"); ?>

<?


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
    $data[$key]['footage'] = $el['UF_SQUARE_ALL'];
    $data[$key]['metro']['name'] = $el['UF_METRO'];
    $data[$key]['metro']['walk'] = $el['UF_TIME_METRO'];
    $data[$key]['address'] = $el['UF_ADDRES'];
    $data[$key]['floors'] = $el['UF_FLOOR'];
    $data[$key]['floors_total'] = '';//$el['UF_TITLE'];
    $data[$key]['price'] = $el['UF_PRICE'];
    $data[$key]['total_area'] = $el['UF_SQUARE_ALL'];
    $data[$key]['living_area'] = $el['UF_SQUARE_LIVING'];
    $data[$key]['kitchen_area'] = $el['UF_SQUARE_KITCHEN'];
    $data[$key]['room_area'] = $el['UF_SQUARE_ROOMS'];
    $data[$key]['room_location'] = $el['UF_PLANTYPE'];
    $data[$key]['view'] = $el['UF_VIEWS_VINDOW'];
    $data[$key]['bathrooms'] = $el['UF_BATHROOMS'];
    $data[$key]['ceiling_height'] = $el['UF_HEIGHT'];
    $data[$key]['balcony'] = $el['UF_BALCONY'];
    $data[$key]['house_type'] = $el['UF_HOUSE_TYPE'];
    $data[$key]['year'] = $el['UF_BUILD_YEAR'];
    $data[$key]['repair'] = $el['UF_RENOVATION'];
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
    $data[$key]['deal_status'] = $el['UF_SALETYPE'];
    $data[$key]['rights'] = $el['UF_TYPE_CONTRACT'];
    $data[$key]['year_joining'] = $el['UF_YEAR_OWN'];
    $data[$key]['n_owners'] = $el['UF_AMOUNT_OWN'];
    $data[$key]['agent'] = $el['UF_AGENT'];;//$el['UF_TITLE'];
    $data[$key]['map']['camera']['lat'] = (float) $el['UF_LAT'];
    $data[$key]['map']['camera']['lng'] = (float) $el['UF_LNG'];
    $data[$key]['map']['camera']['zoom'] = 15;
    $data[$key]['map']['point']['lat'] = (float) $el['UF_LAT'];
    $data[$key]['map']['point']['lng'] = (float) $el['UF_LNG'];
    
    $key++;
    //print_r($el);
    }
    $content = $data[0];
//print_r($content);
?>

    <link rel="stylesheet" href="/bitrix/templates/realty/assets/css/main--lightBlue-rent.css?v=<?=rand(0, 255)?>">
    <link rel="stylesheet" href="/html/assets/css/fast-fixes.css?v=<?=rand(0, 255)?>">
<link rel="stylesheet" href="/html/assets/plugins/WOW/css/libs/animate.css">
    <script src="/html/assets/plugins/WOW/dist/wow.min.js" type="text/javascript"></script>
    <script> 
        new WOW().init();
    </script>
<section class="section__content-changer g-flex-column --mgt40 --pdb40"> 
            <div class="section__content-tabs -m-left top g-flex-between g-flex-align-center center g-flex-wrap --mgb0">
                <a href="#mainInfo" class="js__smoothScroll section__content-tab active">
                    Общая информация
                </a>
                <a href="#description" class="js__smoothScroll section__content-tab">
                    Описание объекта
                </a>
                <a href="#infrastructure" class="js__smoothScroll section__content-tab">
                    Инфрастуктура
                </a>
                <a href="#gallery" class="js__smoothScroll section__content-tab">
                    Фотографии
                </a>
                <a href="#formBlockSmooth2" class="js__smoothScroll section__content-tab">
                    Заявка на просмотр
                </a>
            </div>
            <svg class="--green" viewBox="0 0 32 32">
                <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </section>

        <section class="section object-informations --pdt40 --pdb40" id="mainInfo">
            <div class="wrapper">
                <div class="object-info">
                    <div class="title">
                        <h1 class="--green">
                            <?=$content['title']?>
                        </h1>
                        <button class="favorite">
                            <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.4764 18.5623C16.0018 18.5623 15.617 18.9471 15.617 19.4217C15.617 19.6613 15.5358 19.8629 15.3757 20.021C15.2077 20.1869 14.964 20.283 14.7255 20.2811C14.4903 20.2781 14.2993 20.198 14.1417 20.036L9.61579 15.3849C9.45401 15.2186 9.23186 15.1248 8.99991 15.1248C8.76797 15.1248 8.54582 15.2186 8.38404 15.3849L3.85806 20.036C3.70161 20.1968 3.50924 20.277 3.26999 20.2812C3.02893 20.2861 2.78629 20.1901 2.61944 20.0261C2.46239 19.8718 2.38277 19.6735 2.38277 19.4367V3.43746C2.38277 2.48974 3.1538 1.71871 4.10152 1.71871H13.8983C14.846 1.71871 15.617 2.48974 15.617 3.43746V15.1678C15.617 15.6424 16.0018 16.0272 16.4764 16.0272C16.951 16.0272 17.3358 15.6424 17.3358 15.1678V3.43746C17.3357 1.54206 15.7937 0 13.8983 0H4.10152C2.20608 0 0.664062 1.54206 0.664062 3.43746V19.4367C0.664062 20.1316 0.930727 20.7764 1.4149 21.2521C1.90019 21.7289 2.56835 22 3.25448 22C3.26973 22 3.28503 21.9999 3.30028 21.9996C3.99599 21.9874 4.61478 21.7229 5.08984 21.2346L8.99991 17.2164L12.91 21.2346C13.3885 21.7263 14.0088 21.9909 14.7038 21.9997C15.4014 22.0069 16.088 21.7331 16.5833 21.244C17.0685 20.7649 17.3357 20.1177 17.3357 19.4217C17.3358 18.9471 16.951 18.5623 16.4764 18.5623Z"/>
                            </svg>
                        </button>
                    </div>

                    <p>
                        <div class="section__table-slider slider">
                            <div class="section__content-slide --table">
                                <div class="adress">
                                    <svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.76471 4.84615C8.76471 8.30769 4.88235 11 4.88235 11C4.88235 11 1 8.30769 1 4.84615C1 3.82609 1.40903 2.84781 2.13711 2.12651C2.8652 1.40522 3.85269 1 4.88235 1C5.91202 1 6.89951 1.40522 7.62759 2.12651C8.35567 2.84781 8.76471 3.82609 8.76471 4.84615Z" fill="#4B4A4A" stroke="#4B4A4A" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M4.88204 6.38462C5.73971 6.38462 6.43498 5.69582 6.43498 4.84616C6.43498 3.99649 5.73971 3.30769 4.88204 3.30769C4.02438 3.30769 3.3291 3.99649 3.3291 4.84616C3.3291 5.69582 4.02438 6.38462 4.88204 6.38462Z" fill="white"/>
                                    </svg>
                                    <?=$content['address']?>
                                </div>
                                <div class="rc_name"><strong>Наименование ЖК</strong></div>
                                <div class="metro_walk">
                                    <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.69915 1L6 6.96737L3.33567 1L1 9H2.7284L3.73619 5.00932L5.72138 9H6.26121L8.24639 4.97203L9.21936 9H11L8.69915 1Z" fill="#4B4A4A" stroke="#4B4A4A" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <?=$content['metro']['name']?>
                                    <span>
                                        <svg width="10" height="22" viewBox="0 0 10 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.81755 11.6942L7.68122 9.2639C7.54818 9.11261 7.42586 8.80086 7.4197 8.59647L7.34111 6.07476V6.0017C7.34111 5.61313 7.03449 5.29692 6.6577 5.29692H4.56648H3.73546C3.39876 5.29692 3.02312 5.54289 2.87983 5.85698L0.0646496 12.0238C-0.0132588 12.1949 -0.0210043 12.3858 0.0427804 12.5623C0.106565 12.7385 0.234134 12.8776 0.401569 12.9537L0.816397 13.1423C0.904785 13.1825 0.999094 13.2029 1.09682 13.2029C1.36495 13.2029 1.61462 13.0458 1.7333 12.8026L3.05205 10.097V12.8165C3.04658 12.8322 3.03861 12.8465 3.0336 12.8625L0.805007 20.0602C0.712292 20.36 0.740539 20.6755 0.884738 20.9485C1.02894 21.2215 1.27041 21.4169 1.56518 21.4989L1.71417 21.5405C1.81167 21.5677 1.91281 21.5816 2.01441 21.5816C2.52719 21.5816 2.99305 21.2337 3.1475 20.7352L5.22984 14.0097L5.96838 15.8752C6.14857 16.3303 6.34311 17.1272 6.39323 17.6158L6.74655 21.0507C6.80327 21.6006 7.22493 21.9998 7.74933 21.9998C7.83522 21.9998 7.92246 21.989 8.00835 21.9676L8.15847 21.93C8.75622 21.7808 9.17857 21.1475 9.09997 20.5186L8.57671 16.3303C8.51019 15.7982 8.28763 14.9649 8.08056 14.4727L7.37392 12.7944C7.3648 12.7725 7.35182 12.7528 7.34134 12.7317V11.5944L8.61476 12.9654C8.74141 13.1019 8.9109 13.1771 9.09177 13.1771C9.2747 13.1771 9.44555 13.1005 9.57267 12.9614L9.80821 12.7035C10.0602 12.4274 10.0645 11.975 9.81755 11.6942Z" fill="#4B4A4A"/>
                                            <path d="M5.38665 4.69972C6.64321 4.69972 7.66536 3.6456 7.66536 2.34974C7.66536 1.05412 6.64321 0 5.38665 0C4.13032 0 3.1084 1.05412 3.1084 2.34974C3.10817 3.6456 4.13032 4.69972 5.38665 4.69972Z" fill="#4B4A4A"/>
                                        </svg>
                                        <?=$content['metro']['walk']?> мин
                                    </span>
                                </div>
                            
                                <div class="table">
                                    <div class="tr">
                                        <div class="td">Общая площадь</div>
                                        <div class="td"><?=$content['total_area']?> кв.м</div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Жилая площадь</div>
                                        <div class="td"><?=$content['living_area']?> кв.м</div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Площадь кухни</div>
                                        <div class="td"><?=$content['kitchen_area']?> кв.м</div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Площадь по комнатам</div>
                                        <div class="td"><?=$content['room_area'][0]?>/<?=$content['room_area'][1]?>/<?=$content['room_area'][2]?> кв.м</div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Расположение комнат</div>
                                        <div class="td"><?=$content['room_location']?></div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Высота потолков</div>
                                        <div class="td"><?=$content['ceiling_height']?> м</div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Санузлы</div>
                                        <div class="td"><?=$content['bathrooms']?> м</div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Балкон/Лоджия</div>
                                        <div class="td"><?=$content['balcony']?> балкон</div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Вид из окон</div>
                                        <div class="td"><?=$content['view']?></div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Этаж/этажность</div>
                                        <div class="td"><?=$content['floors']?>/<?=$content['floors_total']?></div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Тип дома</div>
                                        <div class="td"><?=$content['house_type']?></div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Год постройки</div>
                                        <div class="td"><?=$content['year']?></div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Сумма залога</div>
                                        <div class="td">4<?=$content['zalog']?></div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Сумма комиссии</div>
                                        <div class="td"><?=$content['comission']?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="section__content-slide --table">
                                <div class="table">
                                    <div class="tr">
                                        <div class="td">Ремонт</div>
                                        <div class="td"><?=$content['repair']?></div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Мебель</div>
                                        <div class="td"><?=($content['furniture'])? "да":"нет"?></div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Техника</div>
                                        <div class="td"><?=($content['technique'])? "да":"нет"?></div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Кондиционирование</div>
                                        <div class="td"><?=($content['conditioning'])? "да":"нет"?></div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Мусоропровод</div>
                                        <div class="td"><?=($content['garbage_chute'])? "да":"нет"?></div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Лифт</div>
                                        <div class="td"><?=$content['elevator']?></div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Парковка</div>
                                        <div class="td"><?=$content['parking']?></div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Огороженная территория</div>
                                        <div class="td"><?=($content['fenced_area'])? "да":"нет"?></div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Охрана</div>
                                        <div class="td"><?=($content['security'])? "да":"нет"?></div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Видеонаблюдение</div>
                                        <div class="td"><?=($content['CCTV'])? "да":"нет"?></div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Консьерж</div>
                                        <div class="td"><?=($content['concierge'])? "да":"нет"?></div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Домофон</div>
                                        <div class="td"><?=($content['intercom'])? "да":"нет"?></div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Статус сделки</div>
                                        <div class="td"><?=$content['deal_status']?></div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Основание прав собственности</div>
                                        <div class="td"><?=$content['rights']?></div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Год вступления</div>
                                        <div class="td"><?=$content['year_joining']?></div>
                                    </div>
                                    <div class="tr">
                                        <div class="td">Кол-во собственников</div>
                                        <div class="td"><?=$content['n_owners']?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section__video-slider_navs g-flex-justify-end g-flex-align-stretch slider-navs">
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
                    </p>
                </div>
                <div class="object-images">
                    <div class="documents">
                        <a href="#">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.1797 4.99242V3.69141C13.1797 3.01293 12.6277 2.46094 11.9492 2.46094H11.2988L8.95828 0.120422C8.95779 0.11993 8.95721 0.119465 8.95672 0.118945C8.88401 0.0468125 8.78303 0.00199609 8.67431 0.000300781C8.67218 0.000273438 8.67013 0 8.668 0H2.87109C2.64458 0 2.46094 0.183641 2.46094 0.410156V2.46094H2.05078C1.3723 2.46094 0.820312 3.01293 0.820312 3.69141V4.99242C0.342918 5.16173 0 5.61764 0 6.15234V11.1289C0 11.8074 0.551988 12.3594 1.23047 12.3594H2.46094V13.5898C2.46094 13.8164 2.64458 14 2.87109 14H11.1289C11.3554 14 11.5391 13.8164 11.5391 13.5898V12.3594H12.7695C13.448 12.3594 14 11.8074 14 11.1289V6.15234C14 5.61764 13.6571 5.16173 13.1797 4.99242ZM11.5391 3.28125H11.9492C12.1754 3.28125 12.3594 3.46525 12.3594 3.69141V4.92188H11.5391V3.28125ZM9.07812 1.40036L10.1387 2.46094H9.07812V1.40036ZM3.28125 0.820312H8.25781V2.87109C8.25781 3.09761 8.44145 3.28125 8.66797 3.28125H10.7188V4.92188H3.28125V0.820312ZM1.64062 3.69141C1.64062 3.46525 1.82462 3.28125 2.05078 3.28125H2.46094V4.92188H1.64062V3.69141ZM10.7188 13.1797H3.28125V9.07812H10.7188V13.1797ZM13.1797 11.1289C13.1797 11.3551 12.9957 11.5391 12.7695 11.5391H11.5391V9.07812H11.9492C12.1757 9.07812 12.3594 8.89448 12.3594 8.66797C12.3594 8.44145 12.1757 8.25781 11.9492 8.25781C11.6144 8.25781 2.52186 8.25781 2.05078 8.25781C1.82427 8.25781 1.64062 8.44145 1.64062 8.66797C1.64062 8.89448 1.82427 9.07812 2.05078 9.07812H2.46094V11.5391H1.23047C1.00431 11.5391 0.820312 11.3551 0.820312 11.1289V6.15234C0.820312 5.92618 1.00431 5.74219 1.23047 5.74219C1.72654 5.74219 12.2044 5.74219 12.7695 5.74219C12.9957 5.74219 13.1797 5.92618 13.1797 6.15234V11.1289Z" fill="#005453"/>
                                <path d="M9.48828 9.89844H4.51172C4.2852 9.89844 4.10156 10.0821 4.10156 10.3086C4.10156 10.5351 4.2852 10.7188 4.51172 10.7188H9.48828C9.7148 10.7188 9.89844 10.5351 9.89844 10.3086C9.89844 10.0821 9.7148 9.89844 9.48828 9.89844Z" fill="#005453"/>
                                <path d="M9.48828 11.5391H4.51172C4.2852 11.5391 4.10156 11.7227 4.10156 11.9492C4.10156 12.1757 4.2852 12.3594 4.51172 12.3594H9.48828C9.7148 12.3594 9.89844 12.1757 9.89844 11.9492C9.89844 11.7227 9.7148 11.5391 9.48828 11.5391Z" fill="#005453"/>
                                <path d="M2.87109 6.5625H2.05078C1.82427 6.5625 1.64062 6.74614 1.64062 6.97266C1.64062 7.19917 1.82427 7.38281 2.05078 7.38281H2.87109C3.09761 7.38281 3.28125 7.19917 3.28125 6.97266C3.28125 6.74614 3.09761 6.5625 2.87109 6.5625Z" fill="#005453"/>
                            </svg>
                            Распечатать PDF
                        </a>
                        <a href="#">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.6129 5.375C11.2976 5.375 10.2266 4.39383 10.2266 3.1875C10.2266 1.98117 11.2976 1 12.6129 1C13.9284 1 14.9993 1.98117 14.9993 3.1875C14.9993 4.39383 13.9284 5.375 12.6129 5.375ZM12.6129 1.875C11.8238 1.875 11.1811 2.46353 11.1811 3.1875C11.1811 3.91147 11.8238 4.5 12.6129 4.5C13.402 4.5 14.0448 3.91147 14.0448 3.1875C14.0448 2.46353 13.402 1.875 12.6129 1.875Z" fill="#005453" stroke="#005453" stroke-width="0.2"/>
                                <path d="M12.6129 15C11.2976 15 10.2266 14.0188 10.2266 12.8125C10.2266 11.6062 11.2976 10.625 12.6129 10.625C13.9284 10.625 14.9993 11.6062 14.9993 12.8125C14.9993 14.0188 13.9284 15 12.6129 15ZM12.6129 11.5C11.8238 11.5 11.1811 12.0885 11.1811 12.8125C11.1811 13.5365 11.8238 14.125 12.6129 14.125C13.402 14.125 14.0448 13.5365 14.0448 12.8125C14.0448 12.0885 13.402 11.5 12.6129 11.5Z" fill="#005453" stroke="#005453" stroke-width="0.2"/>
                                <path d="M3.38637 10.1875C2.07096 10.1875 1 9.20633 1 8C1 6.79367 2.07096 5.8125 3.38637 5.8125C4.70179 5.8125 5.77275 6.79367 5.77275 8C5.77275 9.20633 4.70179 10.1875 3.38637 10.1875ZM3.38637 6.6875C2.59729 6.6875 1.95455 7.27603 1.95455 8C1.95455 8.72397 2.59729 9.3125 3.38637 9.3125C4.17546 9.3125 4.8182 8.72397 4.8182 8C4.8182 7.27603 4.17546 6.6875 3.38637 6.6875Z" fill="#005453" stroke="#005453" stroke-width="0.2"/>
                                <path d="M5.048 7.57407C4.88184 7.57407 4.72022 7.49471 4.63306 7.35361C4.50256 7.14362 4.58214 6.87638 4.81123 6.75685L10.7161 3.67096C10.9445 3.55026 11.2366 3.62375 11.3664 3.83438C11.4969 4.04437 11.4173 4.31151 11.1882 4.43114L5.28337 7.51693C5.20892 7.55538 5.12817 7.57407 5.048 7.57407Z" fill="#005453" stroke="#005453" stroke-width="0.2"/>
                                <path d="M10.9525 12.3866C10.8724 12.3866 10.7915 12.3679 10.717 12.3289L4.81215 9.24305C4.58307 9.12353 4.5036 8.85629 4.63399 8.6463C4.76379 8.43577 5.05533 8.36282 5.28441 8.48298L11.1892 11.5688C11.4183 11.6884 11.4978 11.9555 11.3675 12.1655C11.2796 12.3073 11.118 12.3866 10.9525 12.3866Z" fill="#005453" stroke="#005453" stroke-width="0.2"/>
                            </svg>
                            Поделиться
                        </a>
                    </div>
                    <div class="section__product-slider slider" id="product<?=$content['id']?>slider">
                        <?php foreach($content['images']['original'] as $image) { ?>
                            <div class="section__product-slide">
                                <img src="<?=$image?>" alt="<?=$content['title']?>, фотография">
                            </div>
                        <?php } ?>
                    </div>
                    <div class="btn-groups g-flex-column-xs">
                        <div class="btn-group w100-xs">
                            <button type="submit" class="btn w100-xs --green"><?=number_format($content['price'], 0, '', ' ');?> ₽</button>
                            <a href="#followPrice" class="js--transparent_pop-up">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.1059 1.89412C12.8844 0.672701 11.2605 0 9.53307 0C7.80569 0 6.18168 0.672701 4.96023 1.89412C3.73878 3.11557 3.06611 4.73955 3.06611 6.46693C3.06611 8.08974 3.65982 9.62129 4.74448 10.8136L4.10179 11.4563L3.53211 10.8866C3.41005 10.7646 3.21223 10.7646 3.09017 10.8866L0.419039 13.5577C0.148839 13.8279 0 14.1872 0 14.5693C0 14.9515 0.148839 15.3108 0.419039 15.581C0.68927 15.8512 1.04851 16 1.43065 16C1.81279 16 2.17206 15.8512 2.44226 15.581L5.1134 12.9098C5.23542 12.7878 5.23542 12.5899 5.1134 12.4679L4.54372 11.8982L5.18641 11.2555C6.37871 12.3402 7.91023 12.9339 9.53304 12.9339C11.2604 12.9339 12.8844 12.2612 14.1059 11.0398C15.3273 9.81829 16 8.19434 16 6.46693C16 4.73952 15.3273 3.11557 14.1059 1.89412ZM2.00033 15.139C1.84817 15.2912 1.64583 15.375 1.43065 15.375C1.21544 15.375 1.01316 15.2912 0.861003 15.139C0.708812 14.9868 0.625017 14.7845 0.625017 14.5693C0.625017 14.3542 0.708844 14.1519 0.861003 13.9997L3.31114 11.5495L4.45047 12.6889L2.00033 15.139ZM13.6639 10.5978C12.5605 11.7013 11.0935 12.3089 9.53304 12.3089C7.97259 12.3089 6.50554 11.7013 5.40216 10.5978C4.29875 9.49443 3.69106 8.02742 3.69106 6.46696C3.69106 4.90651 4.29872 3.43949 5.40216 2.33608C6.50557 1.23264 7.97258 0.624985 9.53307 0.624985C11.0935 0.624985 12.5605 1.23264 13.6639 2.33608C14.7674 3.43946 15.375 4.90651 15.375 6.46693C15.375 8.02742 14.7674 9.49443 13.6639 10.5978Z" fill="#005453"/>
                                    <path d="M12.8246 3.17528C11.0096 1.36028 8.05636 1.36031 6.24136 3.17528C5.36214 4.0545 4.87793 5.22349 4.87793 6.46691C4.87793 7.71034 5.36214 8.87933 6.24136 9.75854C7.12057 10.6378 8.28956 11.122 9.53299 11.122C10.7764 11.122 11.9454 10.6378 12.8246 9.75854C14.6396 7.94354 14.6396 4.99028 12.8246 3.17528ZM12.3826 9.31661C11.6214 10.0778 10.6094 10.497 9.53292 10.497C8.45646 10.497 7.44443 10.0778 6.68326 9.31661C5.92208 8.55547 5.50288 7.54341 5.50288 6.46694C5.50288 5.39048 5.92208 4.37845 6.68326 3.61728C7.46891 2.83163 8.50091 2.43877 9.53292 2.43877C10.5649 2.43877 11.5969 2.83163 12.3826 3.61728C13.954 5.18858 13.954 7.74531 12.3826 9.31661Z" fill="#005453"/>
                                    <path d="M12.8211 6.29268C12.7619 6.20464 11.3512 4.13643 9.53281 4.13643C7.71439 4.13643 6.30369 6.20464 6.24453 6.29268C6.1737 6.39807 6.1737 6.53584 6.24453 6.64123C6.30369 6.72926 7.71436 8.79751 9.53281 8.79751C11.3512 8.79751 12.7619 6.72926 12.8211 6.64123C12.8919 6.53581 12.8919 6.39807 12.8211 6.29268ZM9.53284 8.17253C8.3216 8.17253 7.25127 6.93309 6.89165 6.46697C7.25146 6.00066 8.32167 4.76144 9.53284 4.76144C10.7441 4.76144 11.8146 6.0011 12.1742 6.46725C11.8154 6.9336 10.7477 8.17253 9.53284 8.17253Z" fill="#005453"/>
                                    <path d="M9.5333 5.21588C8.84346 5.21588 8.28223 5.77709 8.28223 6.46692C8.28223 7.15676 8.84343 7.718 9.5333 7.718C10.2231 7.718 10.7843 7.15679 10.7843 6.46692C10.7843 5.77709 10.2231 5.21588 9.5333 5.21588ZM9.5333 7.09298C9.1881 7.09298 8.90724 6.81213 8.90724 6.46692C8.90724 6.12175 9.1881 5.8409 9.5333 5.8409C9.87847 5.8409 10.1593 6.12175 10.1593 6.46692C10.1593 6.81213 9.87844 7.09298 9.5333 7.09298Z" fill="#005453"/>
                                </svg>
                                Следить за ценой
                            </a>
                        </div>
                        <div class="btn --agent w100-xs --mg0-xs --mgt20-xs">
                        <?                      
                                    $dbItems = \Bitrix\Iblock\ElementTable::getList(array(
                                                    'select' => array('*'),
                                                    'filter' => array('IBLOCK_ID' => 8, 'ID' => $content['agent'])
                                                ));
                                    while ($arItem = $dbItems->fetch()){
                                        $dbProperty = \CIBlockElement::getProperty(
                                            $arItem['IBLOCK_ID'],
                                            $arItem['ID']
                                        ); 
                                        while($arProperty = $dbProperty->Fetch()){  
                                            $arItem['PROPERTIES'][] = $arProperty;
                                        }
                                        //print_r($arItem['PROPERTIES']);    
                                        //echo CFile::GetPath($arItem['PREVIEW_PICTURE']);
                                        $renderImage = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], Array("width" => 38, "height" => 38), BX_RESIZE_IMAGE_EXACT, false);
                                        ?>

                                        <div class="view">
                                            <img src="<?=$renderImage['src']?>" alt="">
                                            <span class="name">Агент:<br><strong><?=$arItem['NAME']?></strong></span>
                                        </div>
                                        <div class="info">
                                            <div>тел: <?=$arItem['PROPERTIES']['0']['VALUE']?></div>
                                            <div>e-mail: <?=$arItem['PROPERTIES']['1']['VALUE']?></div>
                                        </div>
                                        <?
                                    }
                                ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section description --pdt0 --pdb0" id="description">
            <div class="wrapper">
                <span href="#" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt48" style="text-decoration: none !important;">
                    <div class="arrow g-flex-align-center g-flex-justify-center">
                        <svg class="icon">
                            <use xlink:href="#ArrowSquare"></use>
                        </svg>
                    </div>
                    Описание объекта
                </span>

                <div class="content">
                    <p>Продаётся 3-комнатная квартира с качественным ремонтом, в отличном состоянии, полностью готовая к проживанию. Добротный кирпичный дом, построен по индивидуальному проекту в 1961 году, расположен рядом со станцией метро Профсоюзная.</p>

                    <p>Планировка квартиры - линейная. Две смежные комнаты переделаны в изолированные спальни, кухня смежная с небольшой комнатой, совмещённый санузел, балкон застеклён. Перепланировка узаконена.</p>

                    <p>Общая площадь квартиры - 54.6 кв.м, комнаты - 7.1, 14.4, 10.8 кв.м, кухня - 5.5 кв.м. Кухня полностью укомплектована бытовой техникой. Вся мебель остаётся. Во всех комнатах установлены кондиционеры.</p>

                    <a href="#" onclick="$('#moreContent').show();$(this).remove();return false;">Читать далее</a>
                </div>
                <div class="content" style="display: none;" id="moreContent">
                    <p>Продаётся 3-комнатная квартира с качественным ремонтом, в отличном состоянии, полностью готовая к проживанию. Добротный кирпичный дом, построен по индивидуальному проекту в 1961 году, расположен рядом со станцией метро Профсоюзная.</p>

                    <p>Планировка квартиры - линейная. Две смежные комнаты переделаны в изолированные спальни, кухня смежная с небольшой комнатой, совмещённый санузел, балкон застеклён. Перепланировка узаконена.</p>

                    <p>Общая площадь квартиры - 54.6 кв.м, комнаты - 7.1, 14.4, 10.8 кв.м, кухня - 5.5 кв.м. Кухня полностью укомплектована бытовой техникой. Вся мебель остаётся. Во всех комнатах установлены кондиционеры.</p>
                </div>
            </div>
        </section>

        <section class="section how-it-works --pdb0" id="formBlockSmooth2">
            <div class="wrapper">
                <form class="--key g-flex-wrap g-flex-between g-flex-align-center --mgt0">
                    <h3>Оставить заявку <span class="--green">на просмотр</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <button type="submit" class="btn --green">Отправить заявку</button>
                    <label class="w66 w100-xs">
                        <input type="text" placeholder="Комментарии">
                    </label>
                    <label class="inputCheckbox">
                        <input type="checkbox" required checked>
                        <span>Нажимая на кнопку "Отправить заявку", вы даете согласие на обработку персональных данных</span>
                    </label>
                </form>
            </div>
        </section>

        <section class="section d-flex description --pdt0" id="infrastructure">
            <div class="wrapper">
                <span href="#" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt48" style="text-decoration: none !important;">
                    <div class="arrow g-flex-align-center g-flex-justify-center">
                        <svg class="icon">
                            <use xlink:href="#ArrowSquare"></use>
                        </svg>
                    </div>
                    Инфрастуктура
                </span>

                <div class="row">
                    <div class="col">
                        <div class="content">
                            <p><strong>Тихий, экологически чистый район ЗАО.</strong></p>

                            <p>
                                <strong>Развитая инфраструктура:</strong><br>
                                В шаговой доступности находятся детские сады, школы, магазины, Сбербанк, парк с Беловежским прудом. 
                                Недалеко Детская юношеская спортивная школа Крылья, различные фитнес клубы.
                            </p>

                            <p>
                                <strong>Удобная транспортная доступность:</strong><br>
                                10 минут на транспорте от м.Славянский бульвар. Недалеко находятся также станции метро Кунцевская и Молодежная. 
                                Пешая доступность от м.Сетунь.
                            </p>
                        </div>
                    </div>
                    <div class="map" id="map">Загрузка карты...</div>
                </div>            
            </div>
        </section>

        <section class="section gallery --pdb0" id="gallery">
            <div class="section__gallery-slider slider" id="product0slider">
                <?php foreach($content['images']['original'] as $image) { ?>
                    <div class="section__gallery-slide">
                        <div class="image">
                            <img src="<?=$image?>" alt="<?=$content['title']?>, фотография">
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>

        <section class="section --pdb0">
            <div class="wrapper">
                <h3 class="section__text --mgb40">
                    <span>Хотите продать или купить похожую<br>квартиру в этом же районе?</span>
                </h3>
                <h3 class="text-align-end --mgb20">
                        <span class="--green">С суперагентами Dream Realty миссия выполнима</span></h3>
                <div class="section__big-text --mgb0">
                    <p class="text-align-end">на 100%</p>
                </div>
            </div>
        </section>

        <section class="section how-it-works">
            <div class="wrapper">
            <form class="--key g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                <h3>Заказать консультацию <span class="--green">районного агента</span></h3>
                <label>
                    <input type="text" placeholder="Имя*" required>
                </label>
                <label>
                    <input type="tel" class="phone" placeholder="Телефон*" required>
                </label>
                <button type="submit" class="btn --green">Отправить заявку</button>
                <label>
                    <select  multiple="multiple" data-placeholder="Район покупки*" data-searchInputPlaceholder="Район" required>
                        <option value="">&nbsp;</option>
                        <optgroup label="ЦАО">
                            <option>Арбат</option>
                            <option>Басманный</option>
                            <option>Замоскворечье</option>
                            <option>Красносельский</option>
                            <option>Мещанский</option>
                            <option>Пресненский</option>
                            <option>Таганский</option>
                            <option>Тверской</option>
                            <option>Хамовники</option>
                            <option>Якиманка</option>
                        </optgroup>
                        <optgroup label="САО">
                            <option>Аэропорт</option>
                            <option>Беговой</option>
                            <option>Бескудниковский</option>
                            <option>Войковский</option>
                            <option>Восточное Дегунино</option>
                            <option>Головинский</option>
                            <option>Дмитровский</option>
                            <option>Западное Дегунино</option>
                            <option>Коптево</option>
                            <option>Левобережный</option>
                            <option>Молжаниновский</option>
                            <option>Савёловский</option>
                            <option>Сокол</option>
                            <option>Тимирязевский</option>
                            <option>Ховрино</option>
                            <option>Хорошёвский</option>
                        </optgroup>
                        <optgroup label="СВАО">
                            <option>Алексеевский</option>
                            <option>Алтуфьевский</option>
                            <option>Бабушкинский</option>
                            <option>Бибирево</option>
                            <option>Бутырский</option>
                            <option>Лианозово</option>
                            <option>Лосиноостровский</option>
                            <option>Марфино</option>
                            <option>Марьина роща</option>
                            <option>Останкинский</option>
                            <option>Отрадное</option>
                            <option>Ростокино</option>
                            <option>Свиблово</option>
                            <option>Северный</option>
                            <option>Северное Медведково</option>
                            <option>Южное Медведково</option>
                            <option>Ярославский</option>
                        </optgroup>
                        <optgroup label="ВАО">
                            <option>Богородское</option>
                            <option>Вешняки</option>
                            <option>Восточный</option>
                            <option>Восточное Измайлово</option>
                            <option>Гольяново</option>
                            <option>Ивановское</option>
                            <option>Измайлово</option>
                            <option>Косино-Ухтомский</option>
                            <option>Метрогородок</option>
                            <option>Новогиреево</option>
                            <option>Новокосино</option>
                            <option>Перово</option>
                            <option>Преображенское</option>
                            <option>Северное Измайлово</option>
                            <option>Соколиная Гора</option>
                            <option>Сокольники</option>
                        </optgroup>
                        <optgroup label="ЮВАО">
                            <option>Выхино-Жулебино</option>
                            <option>Капотня</option>
                            <option>Кузьминки</option>
                            <option>Лефортово</option>
                            <option>Люблино</option>
                            <option>Марьино</option>
                            <option>Некрасовка</option>
                            <option>Нижегородский</option>
                            <option>Печатники</option>
                            <option>Рязанский</option>
                            <option>Текстильщики</option>
                            <option>Южнопортовый</option>
                        </optgroup>
                        <optgroup label="ЮАО">
                            <option>Бирюлёво Восточное</option>
                            <option>Бирюлёво Западное</option>
                            <option>Братеево</option>
                            <option>Даниловский</option>
                            <option>Донской</option>
                            <option>Зябликово</option>
                            <option>Москворечье-Сабурово</option>
                            <option>Нагатино-Садовники</option>
                            <option>Нагатинский Затон</option>
                            <option>Нагорный</option>
                            <option>Орехово-Борисово Сев</option>
                            <option>Орехово-Борисово Юж</option>
                            <option>Царицыно</option>
                            <option>Чертаново Северное</option>
                            <option>Чертаново Центр</option>
                            <option>Чертаново Южное</option>
                        </optgroup>
                        <optgroup label="ЮЗАО">
                            <option>Академический</option>
                            <option>Гагаринский</option>
                            <option>Зюзино</option>
                            <option>Коньково</option>
                            <option>Котловка</option>
                            <option>Ломоносовский</option>
                            <option>Обручевский</option>
                            <option>Северное Бутово</option>
                            <option>Тёплый Стан</option>
                            <option>Черёмушки</option>
                            <option>Южное Бутово</option>
                            <option>Ясенево</option>
                        </optgroup>
                        <optgroup label="ЗАО">
                            <option>Внуково</option>
                            <option>Дорогомилово</option>
                            <option>Крылатское</option>
                            <option>Кунцево</option>
                            <option>Можайский</option>
                            <option>Ново-Переделкино</option>
                            <option>Очаково-Матвеевское</option>
                            <option>Проспект Вернадского</option>
                            <option>Раменки</option>
                            <option>Солнцево</option>
                            <option>Тропарёво-Никулино</option>
                            <option>Филёвский Парк</option>
                            <option>Фили-Давыдково</option>
                        </optgroup>
                        <optgroup label="СЗАО">
                            <option>Куркино</option>
                            <option>Митино</option>
                            <option>Покровское-Стрешнево</option>
                            <option>Северное Тушино</option>
                            <option>Строгино</option>
                            <option>Хорошёво-Щукино-Матвеевское</option>
                            <option>Щукино</option>
                            <option>Южное Тушино</option>
                        </optgroup>
                        <optgroup label="ЗелАО">
                            <option>Матушкино</option>
                            <option>Савёлки</option>
                            <option>Старое Крюково</option>
                            <option>Силино</option>
                            <option>Крюково</option>
                        </optgroup>
                        <optgroup label="НАО">
                            <option>Воскресенское</option>
                            <option>Внуковское</option>
                            <option>Десёновское</option>
                            <option>Кокошкино</option>
                            <option>Марушкинское</option>
                            <option>Московский</option>
                            <option>Мосрентген</option>
                            <option>Рязановское</option>
                            <option>Сосенское</option>
                            <option>Филимонковское</option>
                            <option>Щербинка</option>
                        </optgroup>
                        <optgroup label="ТАО">
                            <option>Вороновское</option>
                            <option>Киевский</option>
                            <option>Клёновское</option>
                            <option>Краснопахорское</option>
                            <option>Михайлово-Ярцевское</option>
                            <option>Новофёдоровское</option>
                            <option>Первомайское</option>
                            <option>Роговское</option>
                            <option>Троицк</option>
                            <option>Щаповское</option>
                        </optgroup>
                    </select>
                </label>
                <label>
                    <input type="text" placeholder="Бюджет, кол-во комнат">
                </label>
                <label class="inputCheckbox">
                    <input type="checkbox" required checked>
                    <span>Нажимая на кнопку "Отправить заявку", вы даете согласие на обработку персональных данных</span>
                </label>
            </form>
            </div>
        </section>
        
        <section class="section cta-big-text">
            <div class="wrapper relative">
                <div class="section__big-text --mgb60">
                    <p>Остались <br>вопросы?</p>
                </div>
                <a href="#sendReq" class="btn section__absolute-button right --green js--open_pop-up">
                    <svg class="icon">
                        <use xlink:href="#PhoneCall"></use>
                    </svg>
                    Заказать звонок
                </a>
            </div>
        </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>


