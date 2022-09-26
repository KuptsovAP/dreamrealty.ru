<?php
$comands = $APPLICATION->GetProperty("comands");

if ($comands) {
    $comands = explode(',', $comands); ?>

    <section class="section how-it-works --pdb20" id="iconBlock">
        <div class="wrapper">
            <?
            #Получаем контент для "Команда Dream Realty"
            $MY_HL_BLOCK_ID = 10;
            $entity_data_class = GetEntityDataClass($MY_HL_BLOCK_ID);

            $arComands = [];
            foreach ($comands as $comandID) {
                $rsData = $entity_data_class::getList(array(
                    'select' => array('*'),
                    'filter' => array("ID" => $comandID),
                    'cache' => ['ttl' => 604800]
                ));
                while ($el = $rsData->fetch()) {
                    $arComands[$el['ID']] = $el;
                }
            } ?>

            <?php if (!empty($arComands)): ?>
                <h2 class="section__title --mgb20">Как это работает?</h2>
                <p class="section__descriptor descriptor --mgb40">
                    <? $APPLICATION->ShowProperty("title_comands") ?>
                </p>

                <?php if ($arParams['DONT_SHOW_BIG_TITLE'] != "Y"): ?>
                    <div class="section__big-text --mgb40">
                        <p>команда dream realty</p>
                    </div>
                <?php endif; ?>


                <div class="command-block section__content-changer g-flex-column">
                    <div class="section__content-tabs -m-left <?= (!empty($arParams['CLASS_TABS_FLEX']) ? $arParams['CLASS_TABS_FLEX'] : "g-flex-between") ?>  g-flex-align-center --mgb40">
                        <?php $i = 0;
                        $need = 0;
                        if ($_REQUEST['id']) :
                            $need = $_REQUEST['id'] - 1;
                        endif;
                        foreach ($arComands as $arComand):?>
                            <div class="section__content-tab <? if ($i == $need) {
                                echo "active";
                            } ?>"
                                 id="<?= $arComand['ID'] ?>">
                                <?= $arComand['UF_TITLE'] ?>
                            </div>
                            <?php $i++;
                        endforeach; ?>
                    </div>

                    <svg class="--<? $APPLICATION->ShowProperty("color") ?>" viewBox="0 0 32 32">
                        <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                    <div class="section__content-slider slider">
                        <?php $i = 0;
                        foreach ($arComands as $arComand):?>
                            <div class="section__content-slide">
                                <?php if ($arParams['DONT_SHOW_SLIDER_TITLE'] != "Y"): ?>
                                    <h3 class="--mgb40"><?= $arComand['UF_TITLE'] ?></h3>
                                <?php endif; ?>

                                <div class="section__content-advantages g-flex-wrap g-flex-between g-flex-align-start">
                                    <?
                                    #Получаем Иконки
                                    $MY_HL_BLOCK_ID = 9;
                                    $entity_data_class = GetEntityDataClass($MY_HL_BLOCK_ID);
                                    $arIcons = [];

                                    foreach ($arComand['UF_ICONS'] as $icon) {
                                        $rsData = $entity_data_class::getList(array(
                                            'select' => array('*'),
                                            'filter' => array("ID" => $icon),
                                            'cache' => ['ttl' => 604800]
                                        ));

                                        while ($el = $rsData->fetch()) {
                                            $arIcons[] = $el;
                                        }
                                    }


                                    if (!empty($arIcons)) {
                                        //Сортируем массив правильно по параметру UF_ORDER
                                        usort($arIcons, function ($a, $b) {
                                            return ($a['UF_ORDER'] - $b['UF_ORDER']);
                                        });

                                        foreach ($arIcons as $arIcon) {
                                            $title = $arIcon['UF_TITLE'];

                                            $URL = CFile::GetFileArray($arIcon['UF_FILE']);
                                            $URL = $URL["SRC"];


                                            ?>
                                            <div class="section__content-advantage g-flex-column g-flex-align-start">
                                                <img loading="lazy" src="<?= $URL ?>" alt="">
                                                <p><?= $title ?></p>
                                            </div>
                                        <?
                                        }
                                    }
                                    ?>
                                </div>
                                <?php if (!empty($arComand['UF_FORMS'])) {
                                    include($_SERVER['DOCUMENT_ROOT'] . '/local/forms/' . $arComand['UF_FORMS'] . '.php');
                                } ?>
                            </div>
                            <?php $i++;
                        endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php if ($_REQUEST['id']) : ?>
        <script>
            $(document).ready(function () {
                var need = <?=$need?>;
                $('.command-block .section__content-tab.active').click();
            });
        </script>
    <?php endif; ?>
<? } ?>