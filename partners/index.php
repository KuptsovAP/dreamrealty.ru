<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("but2link", "#");
$APPLICATION->SetPageProperty("but2title", "Оставить заявку");
$APPLICATION->SetPageProperty("but1link", "#");
$APPLICATION->SetPageProperty("but1title", "Изучить каталог");
$APPLICATION->SetPageProperty("color", "blue");
$APPLICATION->SetTitle("ПАРТНЕРКА");
?>

<?php
if($_GET['q'] && !empty($_GET['q'])) {
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

            $searchElemsIds[] = $res['ITEM_ID'];
        }
    }
}
?>

<?php
$arElems = [];
$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_*", "DETAIL_TEXT");

if(!empty($searchElemsIds)) {
    $arFilter = Array("IBLOCK_ID"=>IntVal(7), "SECTION_CODE" => "partner", "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "ID" => $searchElemsIds);
}else {
    $arFilter = Array("IBLOCK_ID"=>IntVal(7), "SECTION_CODE" => "partner", "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y",);
}

$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>600), $arSelect);
while($ob = $res->GetNextElement())
{
    $arFields = $ob->GetFields();
    $arProps = $ob->GetProperties();

    $arElems[$arFields['ID']] = $arFields;
    $arElems[$arFields['ID']]['PROPS'] = $arProps;
}
?>

<header class="g-1">

<div class="wrapper">
    <div id="slider">
        <div data-slide="1" class="section__content-slide d-flex">
            <h1>  Доставляем счастье квадратными метрами</h1>
            <div class="content">
                <small class="d-block">
                    Добро пожаловать в Dream Realty - московское агентство недвижимости полного цикла.
                    Мы исполняем мечты наших клиентов вот уже более 9 лет.
                </small>
                <div class="btn-group">
                    <div class="raiting">
                        <div class="raiting-header">
                            <strong>Рейтинг</strong>
                            <div class="icons">
                                <a class="icon" target="_blank" href="https://www.google.com/search?hl=ru-RU&gl=ru&q=DREAM+REALTY,+%D0%BA%D0%BE%D0%BC%D0%BF%D0%B0%D0%BD%D0%B8%D1%8F+%D0%BF%D0%BE+%D0%BF%D1%80%D0%BE%D0%B4%D0%B0%D0%B6%D0%B5+%D0%BD%D0%B5%D0%B4%D0%B2%D0%B8%D0%B6%D0%B8%D0%BC%D0%BE%D1%81%D1%82%D0%B8,+%D0%A6%D0%B2%D0%B5%D1%82%D0%BD%D0%BE%D0%B9+%D0%B1-%D1%80,+26+%D1%81%D1%82%D1%80.1,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+121099&ludocid=2112738752281457229&lsig=AB86z5XNhV3ur-xuLMJi3facJP4J#lrd=0x46b54bb455555555:0x1d51f4b390f0324d,1,,">
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_3434_15421)">
                                            <path d="M3.57432 9.06465L3.05219 11.0138L1.14382 11.0542C0.573496 9.99638 0.25 8.78609 0.25 7.49996C0.25 6.25628 0.552461 5.08347 1.08859 4.05078H1.089L2.78799 4.36227L3.53225 6.05105C3.37648 6.50519 3.29157 6.99269 3.29157 7.49996C3.29163 8.05051 3.39136 8.578 3.57432 9.06465Z" fill="#FBBB00"/>
                                            <path d="M15.1191 6.09888C15.2052 6.55257 15.2502 7.02111 15.2502 7.49997C15.2502 8.03692 15.1937 8.56069 15.0862 9.06592C14.7211 10.7851 13.7671 12.2864 12.4455 13.3487L12.4451 13.3483L10.3051 13.2391L10.0023 11.3485C10.8792 10.8342 11.5645 10.0294 11.9255 9.06592H7.91504V6.09888H11.984H15.1191Z" fill="#518EF8"/>
                                            <path d="M12.4446 13.3483L12.4451 13.3488C11.1598 14.3818 9.52706 15 7.74974 15C4.89355 15 2.41032 13.4036 1.14355 11.0542L3.57405 9.0647C4.20742 10.7551 5.83806 11.9584 7.74974 11.9584C8.57143 11.9584 9.34123 11.7363 10.0018 11.3485L12.4446 13.3483Z" fill="#28B446"/>
                                            <path d="M12.537 1.72664L10.1073 3.71578C9.42369 3.28846 8.61557 3.0416 7.74978 3.0416C5.79483 3.0416 4.1337 4.30011 3.53206 6.0511L1.08879 4.05082H1.08838C2.3366 1.64423 4.85115 0 7.74978 0C9.56956 0 11.2381 0.648223 12.537 1.72664Z" fill="#F14336"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_3434_15421">
                                                <rect width="15" height="15" fill="white" transform="translate(0.25)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <a class="icon" target="_blank" href="https://yandex.ru/maps/org/dream_realty/1282656439/reviews/?ll=37.622342%2C55.771297&z=14">
                                    <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.39914 0H5.26797C3.10882 0 0.930125 1.59439 0.930125 5.15643C0.930125 7.00149 1.71209 8.43847 3.14553 9.2557L0.521932 14.0045C0.397537 14.2291 0.394285 14.4836 0.513201 14.6853C0.629305 14.8823 0.841619 15 1.08092 15H2.40809C2.70959 15 2.94467 14.8543 3.0574 14.599L5.51731 9.7875H5.69685V14.4003C5.69685 14.7254 5.97115 15 6.29585 15H7.45524C7.81937 15 8.07358 14.7458 8.07358 14.3817V0.656338C8.07364 0.269912 7.79632 0 7.39914 0ZM5.69685 7.65018H5.38015C4.15217 7.65018 3.41907 6.64781 3.41907 4.96884C3.41907 2.88117 4.34515 2.13735 5.21186 2.13735H5.69685V7.65018Z" fill="#D7143A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="raiting-footer">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.00009 0.568115L11.0411 6.84978L17.6461 6.84978L12.3026 10.7321L14.3436 17.0137L9.00009 13.1314L3.65659 17.0137L5.69762 10.7321L0.35412 6.84978L6.95905 6.84978L9.00009 0.568115Z" fill="#F8DC4A"/>
                            </svg>

                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.00009 0.568115L11.0411 6.84978L17.6461 6.84978L12.3026 10.7321L14.3436 17.0137L9.00009 13.1314L3.65659 17.0137L5.69762 10.7321L0.35412 6.84978L6.95905 6.84978L9.00009 0.568115Z" fill="#F8DC4A"/>
                            </svg>

                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.00009 0.568115L11.0411 6.84978L17.6461 6.84978L12.3026 10.7321L14.3436 17.0137L9.00009 13.1314L3.65659 17.0137L5.69762 10.7321L0.35412 6.84978L6.95905 6.84978L9.00009 0.568115Z" fill="#F8DC4A"/>
                            </svg>

                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.00009 0.568115L11.0411 6.84978L17.6461 6.84978L12.3026 10.7321L14.3436 17.0137L9.00009 13.1314L3.65659 17.0137L5.69762 10.7321L0.35412 6.84978L6.95905 6.84978L9.00009 0.568115Z" fill="#F8DC4A"/>
                            </svg>

                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.00009 0.568115L11.0411 6.84978L17.6461 6.84978L12.3026 10.7321L14.3436 17.0137L9.00009 13.1314L3.65659 17.0137L5.69762 10.7321L0.35412 6.84978L6.95905 6.84978L9.00009 0.568115Z" fill="#F8DC4A"/>
                            </svg>
                        </div>
                    </div>
                    <div class="button">
                        <a href="#addPartner" class="js--transparent_pop-up1">Стать партнером</a>
                    </div>
                </div>
            </div>
        </div>
        <div data-slide="2" class="section__content-slide d-flex">
            <h1>Заботьтесь о клиентах и зарабатывайте с нами</h1>
            <div class="content">
                <small class="d-block">
                    Наша программа создана для тех, кто хочет предоставлять своим клиентам wow сервис в
                    сфере недвижимости и зарабатывать на этом
                </small>
                <div class="btn-group">
                    <div class="raiting">
                        <div class="raiting-header">
                            <strong>Рейтинг</strong>
                            <div class="icons">
                                <a class="icon" target="_blank" href="https://www.google.com/search?hl=ru-RU&gl=ru&q=DREAM+REALTY,+%D0%BA%D0%BE%D0%BC%D0%BF%D0%B0%D0%BD%D0%B8%D1%8F+%D0%BF%D0%BE+%D0%BF%D1%80%D0%BE%D0%B4%D0%B0%D0%B6%D0%B5+%D0%BD%D0%B5%D0%B4%D0%B2%D0%B8%D0%B6%D0%B8%D0%BC%D0%BE%D1%81%D1%82%D0%B8,+%D0%A6%D0%B2%D0%B5%D1%82%D0%BD%D0%BE%D0%B9+%D0%B1-%D1%80,+26+%D1%81%D1%82%D1%80.1,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+121099&ludocid=2112738752281457229&lsig=AB86z5XNhV3ur-xuLMJi3facJP4J#lrd=0x46b54bb455555555:0x1d51f4b390f0324d,1,,">
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_3434_15421)">
                                            <path d="M3.57432 9.06465L3.05219 11.0138L1.14382 11.0542C0.573496 9.99638 0.25 8.78609 0.25 7.49996C0.25 6.25628 0.552461 5.08347 1.08859 4.05078H1.089L2.78799 4.36227L3.53225 6.05105C3.37648 6.50519 3.29157 6.99269 3.29157 7.49996C3.29163 8.05051 3.39136 8.578 3.57432 9.06465Z" fill="#FBBB00"/>
                                            <path d="M15.1191 6.09888C15.2052 6.55257 15.2502 7.02111 15.2502 7.49997C15.2502 8.03692 15.1937 8.56069 15.0862 9.06592C14.7211 10.7851 13.7671 12.2864 12.4455 13.3487L12.4451 13.3483L10.3051 13.2391L10.0023 11.3485C10.8792 10.8342 11.5645 10.0294 11.9255 9.06592H7.91504V6.09888H11.984H15.1191Z" fill="#518EF8"/>
                                            <path d="M12.4446 13.3483L12.4451 13.3488C11.1598 14.3818 9.52706 15 7.74974 15C4.89355 15 2.41032 13.4036 1.14355 11.0542L3.57405 9.0647C4.20742 10.7551 5.83806 11.9584 7.74974 11.9584C8.57143 11.9584 9.34123 11.7363 10.0018 11.3485L12.4446 13.3483Z" fill="#28B446"/>
                                            <path d="M12.537 1.72664L10.1073 3.71578C9.42369 3.28846 8.61557 3.0416 7.74978 3.0416C5.79483 3.0416 4.1337 4.30011 3.53206 6.0511L1.08879 4.05082H1.08838C2.3366 1.64423 4.85115 0 7.74978 0C9.56956 0 11.2381 0.648223 12.537 1.72664Z" fill="#F14336"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_3434_15421">
                                                <rect width="15" height="15" fill="white" transform="translate(0.25)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <a class="icon" target="_blank" href="https://yandex.ru/maps/org/dream_realty/1282656439/reviews/?ll=37.622342%2C55.771297&z=14">
                                    <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.39914 0H5.26797C3.10882 0 0.930125 1.59439 0.930125 5.15643C0.930125 7.00149 1.71209 8.43847 3.14553 9.2557L0.521932 14.0045C0.397537 14.2291 0.394285 14.4836 0.513201 14.6853C0.629305 14.8823 0.841619 15 1.08092 15H2.40809C2.70959 15 2.94467 14.8543 3.0574 14.599L5.51731 9.7875H5.69685V14.4003C5.69685 14.7254 5.97115 15 6.29585 15H7.45524C7.81937 15 8.07358 14.7458 8.07358 14.3817V0.656338C8.07364 0.269912 7.79632 0 7.39914 0ZM5.69685 7.65018H5.38015C4.15217 7.65018 3.41907 6.64781 3.41907 4.96884C3.41907 2.88117 4.34515 2.13735 5.21186 2.13735H5.69685V7.65018Z" fill="#D7143A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="raiting-footer">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.00009 0.568115L11.0411 6.84978L17.6461 6.84978L12.3026 10.7321L14.3436 17.0137L9.00009 13.1314L3.65659 17.0137L5.69762 10.7321L0.35412 6.84978L6.95905 6.84978L9.00009 0.568115Z" fill="#F8DC4A"/>
                            </svg>

                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.00009 0.568115L11.0411 6.84978L17.6461 6.84978L12.3026 10.7321L14.3436 17.0137L9.00009 13.1314L3.65659 17.0137L5.69762 10.7321L0.35412 6.84978L6.95905 6.84978L9.00009 0.568115Z" fill="#F8DC4A"/>
                            </svg>

                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.00009 0.568115L11.0411 6.84978L17.6461 6.84978L12.3026 10.7321L14.3436 17.0137L9.00009 13.1314L3.65659 17.0137L5.69762 10.7321L0.35412 6.84978L6.95905 6.84978L9.00009 0.568115Z" fill="#F8DC4A"/>
                            </svg>

                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.00009 0.568115L11.0411 6.84978L17.6461 6.84978L12.3026 10.7321L14.3436 17.0137L9.00009 13.1314L3.65659 17.0137L5.69762 10.7321L0.35412 6.84978L6.95905 6.84978L9.00009 0.568115Z" fill="#F8DC4A"/>
                            </svg>

                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.00009 0.568115L11.0411 6.84978L17.6461 6.84978L12.3026 10.7321L14.3436 17.0137L9.00009 13.1314L3.65659 17.0137L5.69762 10.7321L0.35412 6.84978L6.95905 6.84978L9.00009 0.568115Z" fill="#F8DC4A"/>
                            </svg>
                        </div>
                    </div>
                    <div class="button">
                        <a href="#addPartner" class="js--transparent_pop-up1">Стать партнером</a>
                    </div>
                </div>
            </div>
        </div>
        <div data-slide="3" class="section__content-slide d-flex">
            <h1>Передавайте клиентов, остальное мы сделаем сами</h1>
            <div class="content">
                <small class="d-block">
                    Регистрируйтесь в системе, передавайте клиентов через личный кабинет,
                    контролируйте нашу работу online и получайте до 30% процентов от нашего вознаграждения за сделку
                </small>
                <div class="btn-group">
                    <div class="raiting">
                        <div class="raiting-header">
                            <strong>Рейтинг</strong>
                            <div class="icons">
                                <a class="icon" target="_blank" href="https://www.google.com/search?hl=ru-RU&gl=ru&q=DREAM+REALTY,+%D0%BA%D0%BE%D0%BC%D0%BF%D0%B0%D0%BD%D0%B8%D1%8F+%D0%BF%D0%BE+%D0%BF%D1%80%D0%BE%D0%B4%D0%B0%D0%B6%D0%B5+%D0%BD%D0%B5%D0%B4%D0%B2%D0%B8%D0%B6%D0%B8%D0%BC%D0%BE%D1%81%D1%82%D0%B8,+%D0%A6%D0%B2%D0%B5%D1%82%D0%BD%D0%BE%D0%B9+%D0%B1-%D1%80,+26+%D1%81%D1%82%D1%80.1,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+121099&ludocid=2112738752281457229&lsig=AB86z5XNhV3ur-xuLMJi3facJP4J#lrd=0x46b54bb455555555:0x1d51f4b390f0324d,1,,">
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_3434_15421)">
                                            <path d="M3.57432 9.06465L3.05219 11.0138L1.14382 11.0542C0.573496 9.99638 0.25 8.78609 0.25 7.49996C0.25 6.25628 0.552461 5.08347 1.08859 4.05078H1.089L2.78799 4.36227L3.53225 6.05105C3.37648 6.50519 3.29157 6.99269 3.29157 7.49996C3.29163 8.05051 3.39136 8.578 3.57432 9.06465Z" fill="#FBBB00"/>
                                            <path d="M15.1191 6.09888C15.2052 6.55257 15.2502 7.02111 15.2502 7.49997C15.2502 8.03692 15.1937 8.56069 15.0862 9.06592C14.7211 10.7851 13.7671 12.2864 12.4455 13.3487L12.4451 13.3483L10.3051 13.2391L10.0023 11.3485C10.8792 10.8342 11.5645 10.0294 11.9255 9.06592H7.91504V6.09888H11.984H15.1191Z" fill="#518EF8"/>
                                            <path d="M12.4446 13.3483L12.4451 13.3488C11.1598 14.3818 9.52706 15 7.74974 15C4.89355 15 2.41032 13.4036 1.14355 11.0542L3.57405 9.0647C4.20742 10.7551 5.83806 11.9584 7.74974 11.9584C8.57143 11.9584 9.34123 11.7363 10.0018 11.3485L12.4446 13.3483Z" fill="#28B446"/>
                                            <path d="M12.537 1.72664L10.1073 3.71578C9.42369 3.28846 8.61557 3.0416 7.74978 3.0416C5.79483 3.0416 4.1337 4.30011 3.53206 6.0511L1.08879 4.05082H1.08838C2.3366 1.64423 4.85115 0 7.74978 0C9.56956 0 11.2381 0.648223 12.537 1.72664Z" fill="#F14336"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_3434_15421">
                                                <rect width="15" height="15" fill="white" transform="translate(0.25)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <a class="icon" target="_blank" href="https://yandex.ru/maps/org/dream_realty/1282656439/reviews/?ll=37.622342%2C55.771297&z=14">
                                    <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.39914 0H5.26797C3.10882 0 0.930125 1.59439 0.930125 5.15643C0.930125 7.00149 1.71209 8.43847 3.14553 9.2557L0.521932 14.0045C0.397537 14.2291 0.394285 14.4836 0.513201 14.6853C0.629305 14.8823 0.841619 15 1.08092 15H2.40809C2.70959 15 2.94467 14.8543 3.0574 14.599L5.51731 9.7875H5.69685V14.4003C5.69685 14.7254 5.97115 15 6.29585 15H7.45524C7.81937 15 8.07358 14.7458 8.07358 14.3817V0.656338C8.07364 0.269912 7.79632 0 7.39914 0ZM5.69685 7.65018H5.38015C4.15217 7.65018 3.41907 6.64781 3.41907 4.96884C3.41907 2.88117 4.34515 2.13735 5.21186 2.13735H5.69685V7.65018Z" fill="#D7143A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="raiting-footer">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.00009 0.568115L11.0411 6.84978L17.6461 6.84978L12.3026 10.7321L14.3436 17.0137L9.00009 13.1314L3.65659 17.0137L5.69762 10.7321L0.35412 6.84978L6.95905 6.84978L9.00009 0.568115Z" fill="#F8DC4A"/>
                            </svg>

                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.00009 0.568115L11.0411 6.84978L17.6461 6.84978L12.3026 10.7321L14.3436 17.0137L9.00009 13.1314L3.65659 17.0137L5.69762 10.7321L0.35412 6.84978L6.95905 6.84978L9.00009 0.568115Z" fill="#F8DC4A"/>
                            </svg>

                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.00009 0.568115L11.0411 6.84978L17.6461 6.84978L12.3026 10.7321L14.3436 17.0137L9.00009 13.1314L3.65659 17.0137L5.69762 10.7321L0.35412 6.84978L6.95905 6.84978L9.00009 0.568115Z" fill="#F8DC4A"/>
                            </svg>

                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.00009 0.568115L11.0411 6.84978L17.6461 6.84978L12.3026 10.7321L14.3436 17.0137L9.00009 13.1314L3.65659 17.0137L5.69762 10.7321L0.35412 6.84978L6.95905 6.84978L9.00009 0.568115Z" fill="#F8DC4A"/>
                            </svg>

                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.00009 0.568115L11.0411 6.84978L17.6461 6.84978L12.3026 10.7321L14.3436 17.0137L9.00009 13.1314L3.65659 17.0137L5.69762 10.7321L0.35412 6.84978L6.95905 6.84978L9.00009 0.568115Z" fill="#F8DC4A"/>
                            </svg>
                        </div>
                    </div>
                    <div class="button">
                        <a href="#addPartner" class="js--transparent_pop-up1">Стать партнером</a>
                    </div>
                </div>
            </div>
        </div>
        <div data-slide="4" class="section__content-slide d-flex">
            <h1>Мечтайте о большем! Растите с нами!</h1>
            <div class="content">
                <small class="d-block">
                    Партнерство с нами это: пассивный доход, гарантия выплат,
                    iPhone и другие бонусы для самых активных, а также online обучение у топовых экспертов Dream Realty
                </small>
                <div class="btn-group">
                    <div class="raiting">
                        <div class="raiting-header">
                            <strong>Рейтинг</strong>
                            <div class="icons">
                                <a class="icon" target="_blank" href="https://www.google.com/search?hl=ru-RU&gl=ru&q=DREAM+REALTY,+%D0%BA%D0%BE%D0%BC%D0%BF%D0%B0%D0%BD%D0%B8%D1%8F+%D0%BF%D0%BE+%D0%BF%D1%80%D0%BE%D0%B4%D0%B0%D0%B6%D0%B5+%D0%BD%D0%B5%D0%B4%D0%B2%D0%B8%D0%B6%D0%B8%D0%BC%D0%BE%D1%81%D1%82%D0%B8,+%D0%A6%D0%B2%D0%B5%D1%82%D0%BD%D0%BE%D0%B9+%D0%B1-%D1%80,+26+%D1%81%D1%82%D1%80.1,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+121099&ludocid=2112738752281457229&lsig=AB86z5XNhV3ur-xuLMJi3facJP4J#lrd=0x46b54bb455555555:0x1d51f4b390f0324d,1,,">
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_3434_15421)">
                                            <path d="M3.57432 9.06465L3.05219 11.0138L1.14382 11.0542C0.573496 9.99638 0.25 8.78609 0.25 7.49996C0.25 6.25628 0.552461 5.08347 1.08859 4.05078H1.089L2.78799 4.36227L3.53225 6.05105C3.37648 6.50519 3.29157 6.99269 3.29157 7.49996C3.29163 8.05051 3.39136 8.578 3.57432 9.06465Z" fill="#FBBB00"/>
                                            <path d="M15.1191 6.09888C15.2052 6.55257 15.2502 7.02111 15.2502 7.49997C15.2502 8.03692 15.1937 8.56069 15.0862 9.06592C14.7211 10.7851 13.7671 12.2864 12.4455 13.3487L12.4451 13.3483L10.3051 13.2391L10.0023 11.3485C10.8792 10.8342 11.5645 10.0294 11.9255 9.06592H7.91504V6.09888H11.984H15.1191Z" fill="#518EF8"/>
                                            <path d="M12.4446 13.3483L12.4451 13.3488C11.1598 14.3818 9.52706 15 7.74974 15C4.89355 15 2.41032 13.4036 1.14355 11.0542L3.57405 9.0647C4.20742 10.7551 5.83806 11.9584 7.74974 11.9584C8.57143 11.9584 9.34123 11.7363 10.0018 11.3485L12.4446 13.3483Z" fill="#28B446"/>
                                            <path d="M12.537 1.72664L10.1073 3.71578C9.42369 3.28846 8.61557 3.0416 7.74978 3.0416C5.79483 3.0416 4.1337 4.30011 3.53206 6.0511L1.08879 4.05082H1.08838C2.3366 1.64423 4.85115 0 7.74978 0C9.56956 0 11.2381 0.648223 12.537 1.72664Z" fill="#F14336"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_3434_15421">
                                                <rect width="15" height="15" fill="white" transform="translate(0.25)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <a class="icon" target="_blank" href="https://yandex.ru/maps/org/dream_realty/1282656439/reviews/?ll=37.622342%2C55.771297&z=14">
                                    <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.39914 0H5.26797C3.10882 0 0.930125 1.59439 0.930125 5.15643C0.930125 7.00149 1.71209 8.43847 3.14553 9.2557L0.521932 14.0045C0.397537 14.2291 0.394285 14.4836 0.513201 14.6853C0.629305 14.8823 0.841619 15 1.08092 15H2.40809C2.70959 15 2.94467 14.8543 3.0574 14.599L5.51731 9.7875H5.69685V14.4003C5.69685 14.7254 5.97115 15 6.29585 15H7.45524C7.81937 15 8.07358 14.7458 8.07358 14.3817V0.656338C8.07364 0.269912 7.79632 0 7.39914 0ZM5.69685 7.65018H5.38015C4.15217 7.65018 3.41907 6.64781 3.41907 4.96884C3.41907 2.88117 4.34515 2.13735 5.21186 2.13735H5.69685V7.65018Z" fill="#D7143A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="raiting-footer">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.00009 0.568115L11.0411 6.84978L17.6461 6.84978L12.3026 10.7321L14.3436 17.0137L9.00009 13.1314L3.65659 17.0137L5.69762 10.7321L0.35412 6.84978L6.95905 6.84978L9.00009 0.568115Z" fill="#F8DC4A"/>
                            </svg>

                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.00009 0.568115L11.0411 6.84978L17.6461 6.84978L12.3026 10.7321L14.3436 17.0137L9.00009 13.1314L3.65659 17.0137L5.69762 10.7321L0.35412 6.84978L6.95905 6.84978L9.00009 0.568115Z" fill="#F8DC4A"/>
                            </svg>

                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.00009 0.568115L11.0411 6.84978L17.6461 6.84978L12.3026 10.7321L14.3436 17.0137L9.00009 13.1314L3.65659 17.0137L5.69762 10.7321L0.35412 6.84978L6.95905 6.84978L9.00009 0.568115Z" fill="#F8DC4A"/>
                            </svg>

                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.00009 0.568115L11.0411 6.84978L17.6461 6.84978L12.3026 10.7321L14.3436 17.0137L9.00009 13.1314L3.65659 17.0137L5.69762 10.7321L0.35412 6.84978L6.95905 6.84978L9.00009 0.568115Z" fill="#F8DC4A"/>
                            </svg>

                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.00009 0.568115L11.0411 6.84978L17.6461 6.84978L12.3026 10.7321L14.3436 17.0137L9.00009 13.1314L3.65659 17.0137L5.69762 10.7321L0.35412 6.84978L6.95905 6.84978L9.00009 0.568115Z" fill="#F8DC4A"/>
                            </svg>
                        </div>
                    </div>
                    <div class="button">
                        <a href="#addPartner" class="js--transparent_pop-up1">Стать партнером</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex cricles section__content-tabs" id="sliderTabs">
        <a href="#secrets" data-slide="1" class="section__content-tab bg-img-1 cricle active" >
            <span>МЫ</span>
        </a>
        <a href="#care" data-slide="2" class="section__content-tab bg-img-2 cricle">
            <span>ПРЕДЛАГАЕМ</span>
            
        </a>
        <a href="#partnership" data-slide="3" class="section__content-tab bg-img-3 cricle">
            <span>ВАМ</span>
        </a>
        <a href="#advantage" data-slide="4" class="section__content-tab bg-img-4 cricle">
            <span>ПАРТНЕРКУ</span>
        </a>
    </div>
</div>
</header>

<main>
<section class="section how-it-works" id="secrets">
    <div class="wrapper">
        <div class="section__big-text --mgb60">
            <p>dream realty</p>
        </div>
        <h2 class="section__title --mgb20"><span class="--blue">Секреты</span> нашего успеха</h2>
        <p class="section__descriptor descriptor --mgb60" style="font-weight: normal;line-height: 150%;letter-spacing: 0.4px;">
            Вот почему <strong>вы можете смело рекомендовать нас своим клиентам<br>
                и быть уверены в получении доходов и бонусов</strong> от партнерства с нами
        </p>

        <div class="section__content-changer g-flex-column --mgb60">
            <div class="section__content-slider slider">
                <div class="section__content-slide">
                    <div class="section__content-advantages w25per g-flex-wrap g-flex-between g-flex-align-start">
                        <div class="section__content-advantages g-flex-wrap g-flex-between g-flex-align-start">
                            <div class="section__content-advantage g-flex-column g-flex-align-start">
                                <img loading="lazy" src="/html/assets/svg/CalcDocuments--blue.svg" alt="">
                                <p>Высокий уровень экспертности (в том числе в сфере инвестиций)</p>
                            </div>
                            <div class="section__content-advantage g-flex-column g-flex-align-start">
                                <img loading="lazy" src="/html/assets/svg/PlaceAndMap--blue.svg" alt="">
                                <p>Районная специализация агентов</p>
                            </div>
                            <div class="section__content-advantage g-flex-column g-flex-align-start">
                                <img loading="lazy" src="/html/assets/svg/DoneCircle--blue.svg" alt="">
                                <p>Предоставление WoW сервиса</p>
                            </div>
                            <div class="section__content-advantage g-flex-column g-flex-align-start">
                                <img loading="lazy" src="/html/assets/svg/Loyer--blue.svg" alt="">
                                <p>Мощная юридическая поддержка своим клиентам</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section save-client" id="care">
    <div class="wrapper">
        <h2 class="section__title --mgb90">Заботьтесь о клиентах и <span class="--blue">зарабатывайте с нами</span></h2>
        <div class="g-flex-wrap g-flex-between g-flex-between">
            <div class="g-flex-column g-flex-align-start">
                <ul>
                    <li>
                        <div class="num">1</div>
                        <div class="title"><span class="--blue">Зарегистрируйтесь и получите доступ</span> в личный кабинет</div>
                    </li>
                    <li>
                        <div class="num">2</div>
                        <div class="title"><span class="--blue">Передайте клиента</span> на покупку/продажу квартиры в московском регионе</div>
                    </li>
                    <li>
                        <div class="num">3</div>
                        <div class="title"><span class="--blue">Получите вознаграждение до 30%</span> от нашей комиссии за сделку клиента</div>
                    </li>
                </ul>
            </div>
            <div class="g-flex-column g-flex-justify-end">
                <img src="/html/assets/img/p0.svg" alt="">
            </div>
        </div>
    </div>
</section>

<section class="section who-affilate" id="partnership">
    <div class="wrapper">
        <h2 class="section__title --mgb90">Кому подходит <span class="--blue">партнерская программа?</span></h2>
        
        <div class="g-flex-wrap g-flex-between g-flex-between">
            <div class="g-flex-column g-flex-align-start">
                <div>
                    <svg viewBox="0 0 104 98">
                        <use xlink:href="/html/assets/svg/partners/wa-1.svg#icon"></use>
                    </svg>
                    <div class="title">
                        Риэлторы и частные маклеры
                    </div>
                </div>
            </div>
            <div class="g-flex-column g-flex-align-start">
                <div>
                    <svg viewBox="0 0 104 113">
                        <use xlink:href="/html/assets/svg/partners/wa-2.svg#icon"></use>
                    </svg>
                    <div class="title">
                        Бизнес-ассистенты и личные помощники
                    </div>
                </div>
            </div>
        </div>

        <div class="g-flex-wrap g-flex-between g-flex-between">
            <div class="g-flex-column g-flex-align-start">
                <div>
                    <svg viewBox="0 0 98 98">
                        <use xlink:href="/html/assets/svg/partners/wa-3.svg#icon"></use>
                    </svg>
                    <div class="title">
                        Менеджеры банков и ипотечные брокеры
                    </div>
                </div>
            </div>
            <div class="g-flex-column g-flex-align-start">
                <div>
                    <svg viewBox="0 0 119 91">
                        <use xlink:href="/html/assets/svg/partners/wa-4.svg#icon"></use>
                    </svg>
                    <div class="title">
                        Страховые агенты и финансовые советники
                    </div>
                </div>
            </div>
        </div>

        <div class="g-flex-row g-flex-align-center g-flex-justify-center">
            <a href="#addPartner" class="btn js--transparent_pop-up1 --blue">Стать партнером</a>
            <a href="#" class="btn --outline-blue">Войти в кабинет</a>
        </div>
    </div>
</section>

    <?
    $idvideo = $APPLICATION->GetProperty("idvideo");
    if ($idvideo) :
        $idvideo = explode(',', $idvideo);
        ?>

        <section class="section video-media">
            <div class="wrapper">
                <div class="section__big-text --mgb40">
                    <p>DREAM Media</p>
                </div>
                <div class="section__video-slider slider">
                    <?php foreach ($idvideo as $video) :?>
                        <?
                        #Получаем Видео из хайлоада
                        $MY_HL_BLOCK_ID = 4;
                        $entity_data_class = GetEntityDataClass($MY_HL_BLOCK_ID);

                        $rsData = $entity_data_class::getList(array(
                            'select' => array('*'),
                            'filter' => array("ID" => $video),
                            'cache' => ['ttl' => 604800]
                        ));

                        while ($el = $rsData->fetch()):
                            $URL = CFile::GetFileArray($el['UF_PHOTO']);
                            $URL = $URL["SRC"];
                            $video = $el['UF_URL']; ?>

                            <div class="section__video-slide js_video-ratio" data-video="<?= $video ?>" style="background-image: url(<?= $URL ?>);">
                                <img loading="lazy" src="<?= SITE_TEMPLATE_PATH ?>/assets/svg/VideoButton--<? $APPLICATION->ShowProperty("color") ?>.svg" alt="">
                            </div>
                        <?php endwhile;?>

                    <?php endforeach;?>
                </div>

                <?php if(count($idvideo) > 1) :?>
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
                <?php endif;?>

                <a target="_blank" href="<?= $options['youtube'] ?>" class="section__edge-button wow fadeInLeft   g-flex-align-center --mgt30">
                    <div class="arrow g-flex-align-center g-flex-justify-center">
                        <svg class="icon">
                            <use xlink:href="#ArrowSquare"></use>
                        </svg>
                    </div>
                    Канал Dream Realty
                </a>
            </div>
        </section>
    <?php endif;?>

<section class="section --grayBlock" style="margin-top: 110px;padding-bottom: 174px" id="advantage">
    <div class="wrapper">
        <h3 class="--mgb60"><span class="--blue">Ключевые преимущества</span>  партнерской программы</h3>
        <div class="section__check-blocks g-flex-wrap g-flex-between --mgb90">
            <?
            $MY_HL_BLOCK_ID = 16;
            CModule::IncludeModule('highloadblock');
            $entity_data_class = GetEntityDataClass($MY_HL_BLOCK_ID);
            $rsData = $entity_data_class::getList(array(
                'select' => array('*'),
                'order' => array("ID" => "ASC"),
                'cache' => ['ttl' => 604800]
            ));
            while ($el = $rsData->fetch()) {
              $title = $el['UF_TITLE'];
            ?>
                <div class="section__check-block">
                    <svg class="icon">
                        <use xlink:href="#CheckCircle"></use>
                    </svg>
                    <?=$title?>
                </div>
            <?php } ?>
        </div>
        
        <div class="g-flex-row g-flex-align-center g-flex-justify-center ">
            <a href="#addPartner" class="btn js--transparent_pop-up1 --blue">Стать партнером</a>
        </div>
    </div>
</section>

<section class="section topForm" style="padding: 0;margin-top: -72px;" id="callForm">
    <div class="wrapper">
        <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/zvonok.php');?>
    </div>
</section>

<section class="section forecast" style="margin-bottom: 190px !important;">
    <div class="wrapper">
        <h2 class="section__title --mgb20">Спрогнозируйте <span class="--blue">свой доход</span></h2>
        <p class="section__descriptor descriptor --mgb60" style="font-weight: normal;">У нас прозрачные условия сотрудничества. Подключаясь к партнерской программе вы можете рассчитывать на стабильный доход. Рассчитайте его прямо сейчас</p>
    
        <div class="g-filter g-flex-wrap g-flex-between g-flex-between" id="ranges">
            <div class="g-flex-column g-flex-align-start">
                <div class="range">
                    <input type="text" class="js-range-slider" data-min="0" data-max="20" data-from="" data-to="" name="countB" value="0"/>
                    <div class="title">
                        Сколько переданных вами клиентов купили квартиру у нас?
                    </div>
                </div>
            </div>
            <div class="g-flex-column g-flex-align-start">
                <div class="range">
                    <input type="text" class="js-range-slider" data-min="0" data-max="20" data-from="" data-to="" name="countS" value="0"/>
                    <div class="title">
                    Сколько переданных вами клиентов продали квартиру через нас?
                    </div>
                </div>
            </div>
            <div class="g-flex-column g-flex-align-start">
                <div class="range">
                    <input type="text" class="js-range-slider" data-min="5" data-max="100" data-from="" data-to="" name="countBuB" value="5"/>
                    <div class="title">
                        Средний бюджет ваших клиентов на покупку квартиры в млн. руб.
                    </div>
                </div>
            </div>
            <div class="g-flex-column g-flex-align-start">
                <div class="range">
                    <input type="text" class="js-range-slider" data-min="5" data-max="100" data-from="" data-to="" name="countBuS" value=""/>
                    <div class="title">5
                    Средний бюджет ваших клиентов на продажу квартиры в млн. руб.
                    </div>
                </div>
            </div> 
            <div class="g-flex-column g-flex-wrap g-filter-total w100">
                <div class="g-filter-title">
                    Прогнозируемый доход в рублях*
                </div>
                <div class="g-filter-sum">
                    <span id="sum">0</span>
                </div>
            </div>
            <div class="g-flex-column g-flex-wrap g-filter-muted w100">
                *Калькулятор рассчитывает возможное, а не гарантированное вознаграждение
            </div>
        </div>
    </div>
</section>

<section class="section forecast section-gift --grayBlock" style="margin: 0;">
    <div class="wrapper">
        <div class="g-flex-wrap g-flex-between g-flex-align-start g-flex-between">
            <div class="g-flex-column g-flex-align-start">
                <h2 class="section__title --mgb90" style="padding-top: 110px;">Присоединяйтесь к программе<br>и <span class="--blue">получайте подарки</span></h2>
                <p class="section__descriptor descriptor --mgb120 " style="font-weight: normal;">
                    Для самых <strong>активных и вовлеченных в сотрудничество партнеров</strong> мы приготовили <strong>iPhone последней модели</strong>. <br>
                    <br>
                    И это только начало!
                </p>
            </div>
            <div class="g-flex-column g-flex-align-start g-iphone">
                <img src="/html/assets/img/iphones.png" alt="Присоединяйтесь к программе и получайте подарки">
            </div>
        </div>
    </div>
</section>

    <section class="section topForm" style="padding: 0;margin-top: -172px;margin-bottom: 137px !important;" id="mainForm">
        <div class="wrapper">
            <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/follow-right-now.php');?>
        </div>
    </section>

<section class="section --grayBlock howWe" style="padding: 0px;overflow: hidden;">
    <div class="wrapper">
        <div class="g-flex-wrap g-flex-between g-flex-between">
            <div class="g-flex-column g-flex-align-start" style="width: 49%;justify-content: flex-end;">
                <img src="/html/assets/img/p1.svg" style="width:100%;margin-bottom: -20px;" alt="Стать партнером">
            </div>
            <div class="g-flex-column" style="width: 50%;align-items: flex-start;justify-content: flex-start;padding: 70px 0px;">
                <p style="margin-bottom: 40px;font-style: normal;font-weight: normal;font-size: 18px;line-height: 150%;">
                    Каждый месяц, сезон и год в нашей компании принято награждать лучших из
                    лучших топовыми моделями планшетов и ноутбуков, дарить индивидуальный пошив
                    одежды и обуви, вдохновлять атмосферными ужинами в ресторане, поездками на
                    автомобиле Tesla по Москве, путешествиями по всему миру.<br><br>
                    Мечтайте о большем! Растите с нами!
                </p>
                <a href="#addPartner" class="btn js--transparent_pop-up1 --blue">Стать партнером</a>
            </div>
        </div>
    </div>
</section>

    <section class="section questions-search" id="search_result">
        <div class="wrapper">
            <div class="section__big-text for-pop-up --mgb40">
                <p>Вопрос-ответ</p>
            </div>
            <div class="section__search g-flex-align-center g-flex-between">
                <h3><span class="--blue" id="showAll">Ответы</span> на часто задаваемые вопросы</h3>

                <form  class="search no-js" method="GET" action="/partners/#search_result">
                    <input name="q" value="" type="text" placeholder="Поиск">
                    <button type="submit">
                        <svg class="icon">
                            <use xlink:href="#Loupe"></use>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <?php if(!empty($arElems)):?>
        <section class="section questions">
            <div class="wrapper">
                <?php foreach ($arElems as $arElem):?>
                    <a href="#question<?=$arElem['ID']?>" class="section__question g-flex-align-center">
                        <svg class="icon">
                            <use xlink:href="#Question"></use>
                        </svg>
                        <?=$arElem['NAME']?>
                        <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                    </a>
                    <div class="section__question_content" id="question<?=$arElem['ID']?>">
                        <?=$arElem['~DETAIL_TEXT']?>
                    </div>
                <?php endforeach;?>
            </div>
        </section>
    <?php endif;?>

    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "FORM_ID" => "",
            "PATH" => "/include/section_have_questions.php"
        )
    );?>

<section class="section ">
    <div class="wrapper">
        <h2 class="section__title" style="margin-bottom: 60px">
            Подписывайтесь на наш <a href="https://t.me/FromDreamToRealty" class="--blue">Telegram</a> и YouTube каналы,<br>
            чтобы всегда быть в курсе событий <br>
            <a href="https://www.youtube.com/c/dreamrealty" class="--blue">рынка недвижимости</a> и <a href="https://www.youtube.com/c/andreamrealty " class="--blue">компании</a>
        </h2>
    </div>
</section>

</main>

<div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="addPartner">
<div class="wrapper">
    <div class="text-block">
        <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/follow-right-now-popup.php');?>
    </div>
</div>
</div>

<script>

$('#selectStatus').on("select2:select", function(e) {
    console.log($(e.currentTarget).val())

    if($(e.currentTarget).val() == "0"){
        $('#selectStatus, #selectStatus ~ .select2').hide();
        $("#writeStatus").show();
        $("#writeStatus input").focus();
    }
});

$("#hideStatus").on("click", function(){
    $('#selectStatus, #selectStatus ~ .select2').show();
    $("#writeStatus").hide();
});


$('#selectStatus2').on("select2:select", function(e) { 
    console.log($(e.currentTarget).val())

    if($(e.currentTarget).val() == "0"){
        $('#selectStatus2, #selectStatus2 ~ .select2').hide();
        $("#writeStatus2").show();
        $("#writeStatus2 input").focus();
    }
});

$("#hideStatus2").on("click", function(){
    $('#selectStatus2, #selectStatus2 ~ .select2').show();
    $("#writeStatus2").hide();
});

var slider = $(".js-range-slider");
var ranges = {
    countB: 1,
    countS: 1,
    countBuB: 5,
    countBuS: 5
}

slider.ionRangeSlider({
    type: "single",
    grid: false,
    prettify_enabled: false,
    onChange: function (data) {
        ranges[$(data.input).attr("name")] = parseInt(data.from);

        var buy = 0.1;

        var sale = 0.1;

        function calc(){
            if(ranges.countB == 0 && ranges.countS == 0){
                return 0;
            }

            if(ranges.countB == 0){
                return ( ( (ranges.countS*1) * (ranges.countBuS*1000000) * 0.03 ) * sale);
            }

            if(ranges.countS == 0){
                return ( ( (ranges.countB*1) * (ranges.countBuB*1000000) * 0.02 ) * buy);
            }

            return ( ( (ranges.countB*1) * (ranges.countBuB*1000000) * 0.02 ) * buy) + ( ( (ranges.countS*1) * (ranges.countBuS*1000000) * 0.03 ) * sale);

        }

        var total = calc();

        var formated = String(Math.round(total)).replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 ');
        $("#sum").html(formated);
    },
});



$(".section__question").on("click", function(){
    $($(this).attr("href")).toggleClass("show");
    $(this).toggleClass("show");
    return false;
});

$("#showAll").on("click", function(){
    $(".section__question_content").toggleClass("show");
    $(".section__question").toggleClass("show");
    return false;
});

$('#slider').slick({
    autoplay: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    touchMove: true,
    speed: 300,
    dots: false,
    draggable: true,
    swipe: true,
    adaptiveHeight: true,
    mobileFirst: true,
    dots: false,
    fade: true,
});

$('#slider').on('beforeChange', function(){
    var index = $('#slider .slick-active').index();
    $('header').removeClass("g-1").removeClass("g-2").removeClass("g-3").removeClass("g-4").addClass('g-' + (parseInt(index)+1));
    $('#sliderTabs .active').removeClass('active');
    $('#sliderTabs .section__content-tab:nth-child('+(parseInt(index)+1)+")").addClass('active');
});

$('#slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    var index = $('#slider .slick-active').index();
    $('header').removeClass("g-1").removeClass("g-2").removeClass("g-3").removeClass("g-4").addClass('g-' + (parseInt(index)+1));
    $('#sliderTabs .active').removeClass('active');
    $('#sliderTabs .section__content-tab:nth-child('+(parseInt(index)+1)+")").addClass('active');
});

$(".section__content-tab").hover(function(event){
    var index = event.target.dataset.slide-1;
    $('#slider').slick('slickGoTo', index);
    $('header').removeClass("g-1").removeClass("g-2").removeClass("g-3").removeClass("g-4").addClass('g-' + (parseInt(index)+1));
    $('#sliderTabs .active').removeClass('active');
    $(this).addClass('active');
});

$(".section__content-tab").on('click', function() {
    var index = $(this).index();
    $('#slider').slick('slickGoTo', index);
    $('header').removeClass("g-1").removeClass("g-2").removeClass("g-3").removeClass("g-4").addClass('g-' + (parseInt(index)+1));
    $('#sliderTabs .active').removeClass('active');
    $(this).addClass('active');

    var elementClick = $(this).attr("href");
    var destination = $(elementClick).offset().top;
    $('html, body').animate({ scrollTop: destination }, 600);
    return false;
});
</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>