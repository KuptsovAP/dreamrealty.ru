<?php if ($arParams['ADVANTAGES_IDS']):?>
    <section class="section advantage-cards relative grayHalfBG --pdb60" id="advantageBuy">
        <div class="wrapper">
            <h2 class="section__title --mgb60"><?=$arParams['~SECTION_TITLE']?></h2>
            <div class="section__advantage-cards_slider slider <? if ($arParams['MIN_TEXT_CLASS'] == "Y") {?>--min-text<? } ?>">
                <?
                #Получаем Преимущества из хайлоада
                $MY_HL_BLOCK_ID = 18;
                $entity_data_class = GetEntityDataClass($MY_HL_BLOCK_ID);

                $advantagesIDS = explode(',', $arParams['ADVANTAGES_IDS']);

                $rsData = $entity_data_class::getList(array(
                    'select' => array('*'),
                    'filter' => array("ID" => $arParams['ADVANTAGES_IDS']),
                    'cache' => ['ttl' => 604800]
                ));
                $i = 1;
                while ($el = $rsData->fetch()) :
                    $image = CFile::GetFileArray($el['UF_IMAGE']);
                    $image = $image['SRC'];
                    ?>

                    <div class="section__advantage-cards_slide">
                        <a href="<?=$el['UF_LINK']?>" class="section__advantage-card relative g-flex-column g-flex-justify-end --<? $APPLICATION->ShowProperty("color") ?>" style="background-image: url(<?=$image?>);">
                            <div class="g-flex-align-center g-flex-justify-center">
                                <p><?=$el['UF_TITLE']?></p>
                            </div>
                            <span class="num"><?=$i?></span>
                        </a>
                    </div>
                    <?php $i++;
                endwhile; ?>
            </div>

            <?php if ($i > 3):?>
                <div class="section__feedback_navs g-flex-justify-end g-flex-align-stretch slider-navs <? if(count($advantagesIDS)>3):?>g-flex-xs <? endif ?>">
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



            <a href="<?=$arParams['ADV_PAGE']?>" target="_blank" class="section__edge-button wow fadeInLeft   g-flex-align-center --mgt48">
                <div class="arrow g-flex-align-center g-flex-justify-center">
                    <svg class="icon">
                        <use xlink:href="#ArrowSquare"></use>
                    </svg>
                </div>
                Все преимущества
            </a>
        </div>
    </section>
<?php endif;?>