<div class="section__content-slider slider-objects slider">
    <? if ($arParams['TEMPLATE'] == 'table' || !$arParams['TEMPLATE']) : ?>
        <div class="section__content-slide --table">
            <div class="section__big-text --mgb40">
                <p>Объекты</p>
            </div>
            <div class="section_products" id="__buildings">
                <?php foreach ($arResult["ITEMS"] as $arItem) { ?>
                    <?php
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                        ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);

                    $arProperties = $arItem['DISPLAY_PROPERTIES'];

                    if ($arProperties['PICTURES']['VALUE'][0]) {
                        $itemImage = CFile::ResizeImageGet($arProperties['PICTURES']['VALUE'][0],
                            ['width' => 395, 'height' => 330], BX_RESIZE_IMAGE_EXACT, true);
                    }
                    ?>

                    <div class="section_product --novostr" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                        <button class="share">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.2343 3.99994C22.2343 5.79492 20.7793 7.25006 18.9843 7.25006C17.1893 7.25006 15.7344 5.79492 15.7344 3.99994C15.7344 2.20514 17.1893 0.75 18.9843 0.75C20.7793 0.75 22.2343 2.20514 22.2343 3.99994Z"
                                      fill="#005453"/>
                                <path d="M18.9843 8.00006C16.7783 8.00006 14.9844 6.20599 14.9844 3.99994C14.9844 1.79407 16.7783 0 18.9843 0C21.1904 0 22.9843 1.79407 22.9843 3.99994C22.9843 6.20599 21.1904 8.00006 18.9843 8.00006ZM18.9843 1.5C17.6053 1.5 16.4844 2.62207 16.4844 3.99994C16.4844 5.37799 17.6053 6.50006 18.9843 6.50006C20.3633 6.50006 21.4843 5.37799 21.4843 3.99994C21.4843 2.62207 20.3633 1.5 18.9843 1.5Z"
                                      fill="#005453"/>
                                <path d="M22.2343 20.0001C22.2343 21.7949 20.7793 23.25 18.9843 23.25C17.1893 23.25 15.7344 21.7949 15.7344 20.0001C15.7344 18.2051 17.1893 16.7499 18.9843 16.7499C20.7793 16.7499 22.2343 18.2051 22.2343 20.0001Z"
                                      fill="#005453"/>
                                <path d="M18.9843 24C16.7783 24 14.9844 22.2059 14.9844 20.0001C14.9844 17.794 16.7783 15.9999 18.9843 15.9999C21.1904 15.9999 22.9843 17.794 22.9843 20.0001C22.9843 22.2059 21.1904 24 18.9843 24ZM18.9843 17.4999C17.6053 17.4999 16.4844 18.622 16.4844 20.0001C16.4844 21.3779 17.6053 22.5 18.9843 22.5C20.3633 22.5 21.4843 21.3779 21.4843 20.0001C21.4843 18.622 20.3633 17.4999 18.9843 17.4999Z"
                                      fill="#005453"/>
                                <path d="M8.23444 12C8.23444 13.795 6.7793 15.2499 4.98431 15.2499C3.18951 15.2499 1.73438 13.795 1.73438 12C1.73438 10.205 3.18951 8.75006 4.98431 8.75006C6.7793 8.75006 8.23444 10.205 8.23444 12Z"
                                      fill="#005453"/>
                                <path d="M4.98431 15.9999C2.77844 15.9999 0.984375 14.2061 0.984375 12C0.984375 9.79395 2.77844 8.00006 4.98431 8.00006C7.19037 8.00006 8.98444 9.79395 8.98444 12C8.98444 14.2061 7.19037 15.9999 4.98431 15.9999ZM4.98431 9.50006C3.60535 9.50006 2.48438 10.6219 2.48438 12C2.48438 13.3781 3.60535 14.4999 4.98431 14.4999C6.36346 14.4999 7.48444 13.3781 7.48444 12C7.48444 10.6219 6.36346 9.50006 4.98431 9.50006Z"
                                      fill="#005453"/>
                                <path d="M7.34572 11.5201C6.99764 11.5201 6.65963 11.339 6.47561 11.0151C6.2026 10.5361 6.37069 9.92506 6.84969 9.65095L16.1286 4.36103C16.6076 4.08601 17.2186 4.2541 17.4927 4.73494C17.7657 5.21394 17.5976 5.82496 17.1186 6.09907L7.83956 11.389C7.68355 11.478 7.51363 11.5201 7.34572 11.5201Z"
                                      fill="#005453"/>
                                <path d="M16.6231 19.7701C16.455 19.7701 16.2851 19.728 16.1291 19.639L6.85004 14.3491C6.37104 14.076 6.20313 13.465 6.47614 12.9849C6.74805 12.505 7.35999 12.336 7.84009 12.611L17.1191 17.9009C17.5981 18.174 17.7661 18.785 17.493 19.2651C17.3081 19.589 16.9701 19.7701 16.6231 19.7701Z"
                                      fill="#005453"/>
                            </svg>
                        </button>
                        <div class="section__product-slider slider" id="product<?= $arItem['ID']; ?>slider"
                             style="z-index: 1;">
                            <div class="section__product-slide"
                                 style="border-radius: 25px 25px 0px 0px !important;overflow: hidden">
                                <div style="height: 323px; background: url('<?= $itemImage['src']; ?>') center no-repeat; background-size: cover;"></div>
                            </div>
                        </div>
                        <div class="section_product_content">
                            <a href="<?= $arItem['DETAIL_PAGE_URL']; ?>" class="title"
                               style="color:#4B4A4A;">
                                <?= $arItem['NAME']; ?>
                                <div class="size">
                                    <svg width="12" height="10" viewBox="0 0 12 10" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.69915 1L6 6.96737L3.33567 1L1 9H2.7284L3.73619 5.00932L5.72138 9H6.26121L8.24639 4.97203L9.21936 9H11L8.69915 1Z"
                                              fill="#4B4A4A" stroke="#4B4A4A" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>
                                    <?= $arProperties['METRO']['VALUE'] ?>
                                </div>
                            </a>
                            <div>
                                <small class="--green"><?= $arProperties['COMPANY']['VALUE']; ?></small>
                            </div>
                            <div class="mt-2">
                                <small>Площадь <?= $arProperties['SQUARE_ALL']['VALUE']; ?></small>
                            </div>
                            <div class="mt-2">
                                <small class="--green"><strong>Cрок
                                        сдачи: <?= $arProperties['TIMETOSTART']['VALUE']; ?></strong></small>
                            </div>
                            <div class="description">
                                <strong><?= $arProperties['METRO']['VALUE'] ?></strong>
                                <?= cropText($arProperties['TEXT']['VALUE'], 550); ?>

                                <?php if ($arProperties['PDF']['VALUE']) {
                                    $fileUrl = CFile::GetPath($arProperties['PDF']['VALUE']);
                                    ?>

                                    <a href="<?= $fileUrl; ?>" download
                                       class="btn js--transparent_pop-up --green">скачать презентацию</a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="section_product_footer">
                            <button class="favorite">
                                <svg width="18" height="22" viewBox="0 0 18 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.4764 18.5623C16.0018 18.5623 15.617 18.9471 15.617 19.4217C15.617 19.6613 15.5358 19.8629 15.3757 20.021C15.2077 20.1869 14.964 20.283 14.7255 20.2811C14.4903 20.2781 14.2993 20.198 14.1417 20.036L9.61579 15.3849C9.45401 15.2186 9.23186 15.1248 8.99991 15.1248C8.76797 15.1248 8.54582 15.2186 8.38404 15.3849L3.85806 20.036C3.70161 20.1968 3.50924 20.277 3.26999 20.2812C3.02893 20.2861 2.78629 20.1901 2.61944 20.0261C2.46239 19.8718 2.38277 19.6735 2.38277 19.4367V3.43746C2.38277 2.48974 3.1538 1.71871 4.10152 1.71871H13.8983C14.846 1.71871 15.617 2.48974 15.617 3.43746V15.1678C15.617 15.6424 16.0018 16.0272 16.4764 16.0272C16.951 16.0272 17.3358 15.6424 17.3358 15.1678V3.43746C17.3357 1.54206 15.7937 0 13.8983 0H4.10152C2.20608 0 0.664062 1.54206 0.664062 3.43746V19.4367C0.664062 20.1316 0.930727 20.7764 1.4149 21.2521C1.90019 21.7289 2.56835 22 3.25448 22C3.26973 22 3.28503 21.9999 3.30028 21.9996C3.99599 21.9874 4.61478 21.7229 5.08984 21.2346L8.99991 17.2164L12.91 21.2346C13.3885 21.7263 14.0088 21.9909 14.7038 21.9997C15.4014 22.0069 16.088 21.7331 16.5833 21.244C17.0685 20.7649 17.3357 20.1177 17.3357 19.4217C17.3358 18.9471 16.951 18.5623 16.4764 18.5623Z"/>
                                </svg>
                            </button>
                            <a href="<?= $arItem['DETAIL_PAGE_URL']; ?>"
                               class="price"><span><?= $arProperties['PRICE']['VALUE'] ?> <svg class="ruble"><use
                                                xlink:href="#Rouble"></use></svg></span><span>Подробнее</span></a>
                        </div>
                    </div>

                    <!--<div class="section_product " id="<? /*=$this->GetEditAreaId($arItem['ID']);*/ ?>">

                            <div class="section__product-slider"></div>
                            <div class="section_product_content loading"></div>
                            <div class="section_product_footer">
                                <button class="favorite">
                                    <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.4764 18.5623C16.0018 18.5623 15.617 18.9471 15.617 19.4217C15.617 19.6613 15.5358 19.8629 15.3757 20.021C15.2077 20.1869 14.964 20.283 14.7255 20.2811C14.4903 20.2781 14.2993 20.198 14.1417 20.036L9.61579 15.3849C9.45401 15.2186 9.23186 15.1248 8.99991 15.1248C8.76797 15.1248 8.54582 15.2186 8.38404 15.3849L3.85806 20.036C3.70161 20.1968 3.50924 20.277 3.26999 20.2812C3.02893 20.2861 2.78629 20.1901 2.61944 20.0261C2.46239 19.8718 2.38277 19.6735 2.38277 19.4367V3.43746C2.38277 2.48974 3.1538 1.71871 4.10152 1.71871H13.8983C14.846 1.71871 15.617 2.48974 15.617 3.43746V15.1678C15.617 15.6424 16.0018 16.0272 16.4764 16.0272C16.951 16.0272 17.3358 15.6424 17.3358 15.1678V3.43746C17.3357 1.54206 15.7937 0 13.8983 0H4.10152C2.20608 0 0.664062 1.54206 0.664062 3.43746V19.4367C0.664062 20.1316 0.930727 20.7764 1.4149 21.2521C1.90019 21.7289 2.56835 22 3.25448 22C3.26973 22 3.28503 21.9999 3.30028 21.9996C3.99599 21.9874 4.61478 21.7229 5.08984 21.2346L8.99991 17.2164L12.91 21.2346C13.3885 21.7263 14.0088 21.9909 14.7038 21.9997C15.4014 22.0069 16.088 21.7331 16.5833 21.244C17.0685 20.7649 17.3357 20.1177 17.3357 19.4217C17.3358 18.9471 16.951 18.5623 16.4764 18.5623Z"></path>
                                    </svg>
                                </button>
                                <a href="#" class="price">Загрузка...</a>
                            </div>
                        </div>-->
                <?php } ?>

                <div class="section_product --last">
                    <div class="section_product_content">
                        <svg class="icon">
                            <use xlink:href="#BuildingIcon"></use>
                        </svg>
                        <div class="info">
                            <div class='title'>Вторичка</div>
                            <p>Посмотреть похожие варианты на вторичке этой же локации</p>
                        </div>
                    </div>
                    <div class="section_product_footer">
                        <button class="favorite">
                            <svg width="18" height="22" viewBox="0 0 18 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.4764 18.5623C16.0018 18.5623 15.617 18.9471 15.617 19.4217C15.617 19.6613 15.5358 19.8629 15.3757 20.021C15.2077 20.1869 14.964 20.283 14.7255 20.2811C14.4903 20.2781 14.2993 20.198 14.1417 20.036L9.61579 15.3849C9.45401 15.2186 9.23186 15.1248 8.99991 15.1248C8.76797 15.1248 8.54582 15.2186 8.38404 15.3849L3.85806 20.036C3.70161 20.1968 3.50924 20.277 3.26999 20.2812C3.02893 20.2861 2.78629 20.1901 2.61944 20.0261C2.46239 19.8718 2.38277 19.6735 2.38277 19.4367V3.43746C2.38277 2.48974 3.1538 1.71871 4.10152 1.71871H13.8983C14.846 1.71871 15.617 2.48974 15.617 3.43746V15.1678C15.617 15.6424 16.0018 16.0272 16.4764 16.0272C16.951 16.0272 17.3358 15.6424 17.3358 15.1678V3.43746C17.3357 1.54206 15.7937 0 13.8983 0H4.10152C2.20608 0 0.664062 1.54206 0.664062 3.43746V19.4367C0.664062 20.1316 0.930727 20.7764 1.4149 21.2521C1.90019 21.7289 2.56835 22 3.25448 22C3.26973 22 3.28503 21.9999 3.30028 21.9996C3.99599 21.9874 4.61478 21.7229 5.08984 21.2346L8.99991 17.2164L12.91 21.2346C13.3885 21.7263 14.0088 21.9909 14.7038 21.9997C15.4014 22.0069 16.088 21.7331 16.5833 21.244C17.0685 20.7649 17.3357 20.1177 17.3357 19.4217C17.3358 18.9471 16.951 18.5623 16.4764 18.5623Z"/>
                            </svg>
                        </button>
                        <a href="/pages/catalog-vtor/" class="price">Перейти в каталог</a>
                    </div>
                </div>
            </div>

            <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
                <br/><?= $arResult["NAV_STRING"] ?>
            <? endif; ?>

            <!--div class="section__centered-button --mgt60 g-flex-justify-center">
                <button class="btn --green" onclick="$(this).hide();">Показать еще</button>
            </div-->
        </div>
    <? else : ?>
        <div class="section__content-slide --map">
            <div class="section__big-text --mgb60">
                <p>Объекты</p>
            </div>
            <div class="section_products">
                <div class="list" id="__buildings-list">

                    <?php foreach ($arResult["ITEMS"] as $arItem) {
                        $arProperties = $arItem['DISPLAY_PROPERTIES'];

                        if ($arProperties['PICTURES']['VALUE'][0]) {
                            $itemImage = CFile::ResizeImageGet($arProperties['PICTURES']['VALUE'][0],
                                ['width' => 337, 'height' => 353], BX_RESIZE_IMAGE_EXACT, true);
                        }
                        ?>

                        <div class="section_product --novostr" data-id="<?= $arItem['ID']; ?>"
                             data-mapx="<?= $arProperties['LAT']['VALUE']; ?>"
                             data-mapy="<?= $arProperties['LNG']['VALUE']; ?>"
                             data-campx="<?= $arProperties['LAT']['VALUE']; ?>"
                             data-camy="<?= $arProperties['LNG']['VALUE']; ?>"
                             data-camzoom="15">
                            <div class="section__product-image">
                                <img src="<?= $itemImage['src']; ?>" style="width: 100%;" alt="">
                            </div>
                            <div class="section_product_content">
                                <a href="<?= $arItem['DETAIL_PAGE_URL']; ?>" class="title">
                                    <?= $arItem['NAME']; ?>
                                </a>
                                <div class="small --green"
                                     style="font-size: 12px;margin-top: -12px;margin-bottom: 13px;">
                                    <?= $arProperties['COMPANY']['VALUE']; ?>
                                </div>
                                <div class="metro_walk">
                                    <svg width="12" height="10" viewBox="0 0 12 10" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.69915 1L6 6.96737L3.33567 1L1 9H2.7284L3.73619 5.00932L5.72138 9H6.26121L8.24639 4.97203L9.21936 9H11L8.69915 1Z"
                                              fill="#4B4A4A" stroke="#4B4A4A" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>
                                    <?= $arProperties['METRO']['VALUE']; ?>
                                    <span>
                                            <svg width="10" height="22" viewBox="0 0 10 22" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.81755 11.6942L7.68122 9.2639C7.54818 9.11261 7.42586 8.80086 7.4197 8.59647L7.34111 6.07476V6.0017C7.34111 5.61313 7.03449 5.29692 6.6577 5.29692H4.56648H3.73546C3.39876 5.29692 3.02312 5.54289 2.87983 5.85698L0.0646496 12.0238C-0.0132588 12.1949 -0.0210043 12.3858 0.0427804 12.5623C0.106565 12.7385 0.234134 12.8776 0.401569 12.9537L0.816397 13.1423C0.904785 13.1825 0.999094 13.2029 1.09682 13.2029C1.36495 13.2029 1.61462 13.0458 1.7333 12.8026L3.05205 10.097V12.8165C3.04658 12.8322 3.03861 12.8465 3.0336 12.8625L0.805007 20.0602C0.712292 20.36 0.740539 20.6755 0.884738 20.9485C1.02894 21.2215 1.27041 21.4169 1.56518 21.4989L1.71417 21.5405C1.81167 21.5677 1.91281 21.5816 2.01441 21.5816C2.52719 21.5816 2.99305 21.2337 3.1475 20.7352L5.22984 14.0097L5.96838 15.8752C6.14857 16.3303 6.34311 17.1272 6.39323 17.6158L6.74655 21.0507C6.80327 21.6006 7.22493 21.9998 7.74933 21.9998C7.83522 21.9998 7.92246 21.989 8.00835 21.9676L8.15847 21.93C8.75622 21.7808 9.17857 21.1475 9.09997 20.5186L8.57671 16.3303C8.51019 15.7982 8.28763 14.9649 8.08056 14.4727L7.37392 12.7944C7.3648 12.7725 7.35182 12.7528 7.34134 12.7317V11.5944L8.61476 12.9654C8.74141 13.1019 8.9109 13.1771 9.09177 13.1771C9.2747 13.1771 9.44555 13.1005 9.57267 12.9614L9.80821 12.7035C10.0602 12.4274 10.0645 11.975 9.81755 11.6942Z"
                                                      fill="#4B4A4A"/>
                                                <path d="M5.38665 4.69972C6.64321 4.69972 7.66536 3.6456 7.66536 2.34974C7.66536 1.05412 6.64321 0 5.38665 0C4.13032 0 3.1084 1.05412 3.1084 2.34974C3.10817 3.6456 4.13032 4.69972 5.38665 4.69972Z"
                                                      fill="#4B4A4A"/>
                                            </svg>
                                            <?= $arProperties['TIME_METRO']['VALUE']; ?> мин
                                        </span>
                                </div>
                                <div class="small mt-2 mb-2">
                                    Площадь <?= $arProperties['SQUARE_ALL']['VALUE']; ?>
                                </div>
                                <div class="deadline small --green">
                                    Cрок сдачи: <?= $arProperties['TIMETOSTART']['VALUE']; ?>
                                </div>
                                <div class="description">
                                    <?= cropText($arProperties['TEXT']['VALUE'], 550); ?>
                                </div>
                            </div>
                            <div class="section_product_footer">
                                <button class="favorite">
                                    <svg width="18" height="22" viewBox="0 0 18 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.4764 18.5623C16.0018 18.5623 15.617 18.9471 15.617 19.4217C15.617 19.6613 15.5358 19.8629 15.3757 20.021C15.2077 20.1869 14.964 20.283 14.7255 20.2811C14.4903 20.2781 14.2993 20.198 14.1417 20.036L9.61579 15.3849C9.45401 15.2186 9.23186 15.1248 8.99991 15.1248C8.76797 15.1248 8.54582 15.2186 8.38404 15.3849L3.85806 20.036C3.70161 20.1968 3.50924 20.277 3.26999 20.2812C3.02893 20.2861 2.78629 20.1901 2.61944 20.0261C2.46239 19.8718 2.38277 19.6735 2.38277 19.4367V3.43746C2.38277 2.48974 3.1538 1.71871 4.10152 1.71871H13.8983C14.846 1.71871 15.617 2.48974 15.617 3.43746V15.1678C15.617 15.6424 16.0018 16.0272 16.4764 16.0272C16.951 16.0272 17.3358 15.6424 17.3358 15.1678V3.43746C17.3357 1.54206 15.7937 0 13.8983 0H4.10152C2.20608 0 0.664062 1.54206 0.664062 3.43746V19.4367C0.664062 20.1316 0.930727 20.7764 1.4149 21.2521C1.90019 21.7289 2.56835 22 3.25448 22C3.26973 22 3.28503 21.9999 3.30028 21.9996C3.99599 21.9874 4.61478 21.7229 5.08984 21.2346L8.99991 17.2164L12.91 21.2346C13.3885 21.7263 14.0088 21.9909 14.7038 21.9997C15.4014 22.0069 16.088 21.7331 16.5833 21.244C17.0685 20.7649 17.3357 20.1177 17.3357 19.4217C17.3358 18.9471 16.951 18.5623 16.4764 18.5623Z"/>
                                    </svg>
                                </button>
                                <a href="<?= $arItem['DETAIL_PAGE_URL']; ?>" class="price"><span><?=
                                        $arProperties['PRICE']['VALUE'] ?></span><span>Подробнее</span></a>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="section_product --last">
                        <div class="section_product_content">
                            <svg class="icon">
                                <use xlink:href="#BuildingIcon"></use>
                            </svg>
                            <div class="info">
                                <div class='title'>Вторичка</div>
                                <p>Посмотреть похожие варианты на вторичке этой же локации</p>
                            </div>
                        </div>
                        <div class="section_product_footer">
                            <button class="favorite">
                                <svg width="18" height="22" viewBox="0 0 18 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.4764 18.5623C16.0018 18.5623 15.617 18.9471 15.617 19.4217C15.617 19.6613 15.5358 19.8629 15.3757 20.021C15.2077 20.1869 14.964 20.283 14.7255 20.2811C14.4903 20.2781 14.2993 20.198 14.1417 20.036L9.61579 15.3849C9.45401 15.2186 9.23186 15.1248 8.99991 15.1248C8.76797 15.1248 8.54582 15.2186 8.38404 15.3849L3.85806 20.036C3.70161 20.1968 3.50924 20.277 3.26999 20.2812C3.02893 20.2861 2.78629 20.1901 2.61944 20.0261C2.46239 19.8718 2.38277 19.6735 2.38277 19.4367V3.43746C2.38277 2.48974 3.1538 1.71871 4.10152 1.71871H13.8983C14.846 1.71871 15.617 2.48974 15.617 3.43746V15.1678C15.617 15.6424 16.0018 16.0272 16.4764 16.0272C16.951 16.0272 17.3358 15.6424 17.3358 15.1678V3.43746C17.3357 1.54206 15.7937 0 13.8983 0H4.10152C2.20608 0 0.664062 1.54206 0.664062 3.43746V19.4367C0.664062 20.1316 0.930727 20.7764 1.4149 21.2521C1.90019 21.7289 2.56835 22 3.25448 22C3.26973 22 3.28503 21.9999 3.30028 21.9996C3.99599 21.9874 4.61478 21.7229 5.08984 21.2346L8.99991 17.2164L12.91 21.2346C13.3885 21.7263 14.0088 21.9909 14.7038 21.9997C15.4014 22.0069 16.088 21.7331 16.5833 21.244C17.0685 20.7649 17.3357 20.1177 17.3357 19.4217C17.3358 18.9471 16.951 18.5623 16.4764 18.5623Z"/>
                                </svg>
                            </button>
                            <a href="/pages/catalog-vtor/" class="price">Перейти в каталог</a>
                        </div>
                    </div>
                </div>
                <div class="map" id="buildings-map-2"></div>
            </div>
        </div>
    <? endif; ?>
</div>