<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "ВОПРОС-ОТВЕТ ЮРИСТУ");
$APPLICATION->SetTitle("ВОПРОС-ОТВЕТ ЮРИСТУ"); ?>


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
$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_*");

if(!empty($searchElemsIds)) {
    $arFilter = Array("IBLOCK_ID"=>IntVal(7), "SECTION_CODE" => "yurist", "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "ID" => $searchElemsIds);
}else {
    $arFilter = Array("IBLOCK_ID"=>IntVal(7), "SECTION_CODE" => "yurist", "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y",);
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

        <section class="section questions-search">
            <div class="wrapper">
                <div class="section__big-text for-pop-up --mgb40">
                    <p>Вопрос-ответ</p>
                </div>
                <div class="section__search g-flex-align-center g-flex-between">
                    <h3>Вопрос-ответ <span class="--blue">юристу</span></h3>
                    <form  class="search no-js" method="GET" action="/ursoprovozhd/faq.php">
                        <input name="q" value="<?=$_GET['q']?>" type="text" placeholder="Поиск">
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
            <section class="section questions --grayBlock --pdb40">
                <div class="wrapper">
                    <div class="section__question_filter g-flex-align-stretch g-flex-between --mgb40">
                        <a href="#all" class="section__question_filter-item --all active">все</a>
                        <a href="#prepaid" class="section__question_filter-item">аванс / задаток</a>
                        <a href="#preparationDeal" class="section__question_filter-item">подготовка к сделке</a>
                        <a href="#deal" class="section__question_filter-item">сделка</a>
                        <a href="#completionDeal" class="section__question_filter-item">завершение сделки</a>
                        <a href="#generalIssues" class="section__question_filter-item">общие вопросы</a>
                    </div>
                    <div id="search_result">
                        <?php foreach ($arElems as $arElem):?>
                            <a href="#question_<?=$arElem['ID']?>" <?=(!empty($arElem['PROPS']['FILTER_TAG']['VALUE']) ? "data-issue='".$arElem['PROPS']['FILTER_TAG']['VALUE']."'" : "")?> class="section__question g-flex-align-center js__open-hash_pop-up --notlink">
                                <svg class="icon">
                                    <use xlink:href="#Question"></use>
                                </svg>
                                <?=$arElem['NAME']?>
                                <img loading="lazy" src="/html/assets/svg/chevron-right.svg" alt="">
                            </a>

                        <?php endforeach;?>
                    </div>
                </div>
            </section>
        <?php endif;?>


        <section class="section">
            <div class="wrapper">
                <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key">
                    <h3>Выбрать <span class="--blue">юриста</span> по недвижимости</h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <button type="submit" class="btn --blue">Отправить заявку</button>
                    <label>
                        <select data-placeholder="Тип услуги*" required>
                            <option value="">&nbsp;</option>
                            <option>первичная консультация</option>
                            <option>покупка новостройки</option>
                            <option>покупка вторички</option>
                            <option>продажа вторички</option>
                            <option>альтернативная сделка</option>
                        </select>
                    </label>
                    <label>
                        <input type="text" placeholder="Комментарии">
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
                <a href="#sendReq" class="btn section__absolute-button right --blue js--transparent_pop-up">
                    <svg class="icon">
                        <use xlink:href="#PhoneCall"></use>
                    </svg>
                    Заказать звонок
                </a>
            </div>
        </section>

        <div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="sendReq">
        <div class="wrapper">
            <div class="text-block">
                
                <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Заказать <span class="--blue">звонок</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <button type="submit" class="btn --blue">Заказать звонок</button>
                    <label class="w66 w100-xs">
                        <input type="text" placeholder="Комментарии">
                    </label>
                    <label class="inputCheckbox w100">
                        <input type="checkbox" required checked>
                        <span>Нажимая на кнопку "Заказать звонок", вы даете согласие на обработку персональных данных</span>
                    </label>
                </form>
            </div>
        </div>
    </div>

    <div class="transparent_pop-up transparent_pop-up1 place-agent-choose g-flex-align-center g-flex-justify-center">
        <div class="wrapper">
            <div class="text-block">
                
                <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Заказать консультацию <span class="--blue">юриста по недвижимости</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <button type="submit" class="btn --blue">Заказать консультацию</button>
                    <label>
                        <select data-placeholder="Тип услуги*" required>
                            <option value="">&nbsp;</option>
                            <option>первичная консультация</option>
                            <option>покупка новостройки</option>
                            <option>покупка вторички</option>
                            <option>продажа вторички</option>
                            <option>альтернативная сделка</option>
                        </select>
                    </label>
                    <label>
                        <input type="text" placeholder="Комментарии">
                    </label>
                    <label class="inputCheckbox">
                        <input type="checkbox" required checked>
                        <span>Нажимая на кнопку "Заказать консультацию", вы даете согласие на обработку персональных данных</span>
                    </label>
                </form>
            </div>
        </div>
    </div>

    <div class="transparent_pop-up transparent_pop-up2 place-agent-choose g-flex-align-center g-flex-justify-center">
        <div class="wrapper">
            <div class="text-block">
                
                <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Выбрать <span class="--blue">юриста по недвижимости</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <button type="submit" class="btn --blue">Отправить заявку</button>
                    <label>
                        <select data-placeholder="Тип услуги*" required>
                            <option value="">&nbsp;</option>
                            <option>первичная консультация</option>
                            <option>покупка новостройки</option>
                            <option>покупка вторички</option>
                            <option>продажа вторички</option>
                            <option>альтернативная сделка</option>
                        </select>
                    </label>
                    <label>
                        <input type="text" placeholder="Комментарии">
                    </label>
                    <label class="inputCheckbox">
                        <input type="checkbox" required checked>
                        <span>Нажимая на кнопку "Отправить заявку", вы даете согласие на обработку персональных данных</span>
                    </label>
                </form>
            </div>
        </div>
    </div>

<?php if(!empty($arElems)):?>
    <?php foreach ($arElems as $arElem):?>
        <div class="advantages-pop-up pop-up g-flex-column advantages-pop-up__question pop-up_fixed"
             id="question_<?=$arElem['ID']?>">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3 class="--blue" style="margin-right: 60px"><?= $arElem['NAME'];?></h3>
                </section>

                <div class="content-scroll">
                    <div class="wrapper">
                        <div class="pop-up__text">
                            <?=$arElem['PROPS']['QUESTION']['~VALUE']['TEXT']?>
                        </div>

                        <section class="--mgt60">
                            <?=$arElem['PROPS']['FORM_HTML']['~VALUE']['TEXT']?>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach;?>
<?php endif;?>

<style>
    /* TODO: Change placement */
    .pop-up_fixed {
        left : 50%;
        top: 50%;
        height: auto;
        padding-bottom: 24px;
    }

    .pop-up_fixed.openned {
        -webkit-transform: translate(-50%, -50%) !important;
        transform: translate(-50%, -50%) !important;
    }

    .pop-up_fixed::-webkit-scrollbar {
        display: none;
    }

    .pop-up_fixed .content-scroll {
        overflow: hidden;
        overflow-y: auto;
        max-height: 60vh;
        padding-right: 20px;
    }

    .pop-up_fixed .content-scroll::-webkit-scrollbar {
        width: 5px;
        position: relative;
    }
    .pop-up_fixed .content-scroll::-webkit-scrollbar-thumb {
        background-color: #194FB9;
        border-radius: 10px;
        outline: none;
    }

    .pop-up_fixed .content-scroll::-webkit-scrollbar-track {
        -webkit-box-shadow: none;
        box-shadow: none;
    }
</style>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>