<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("НОВОСТРОЙКИ");
?>

        <section class="section catalog mb-3">
            <div class="wrapper">
                <div class="section__content-changer g-flex-column" id="slider_buildings">
                    <select data-placeholder="↑↓ По умолчанию" style="width: 200px;">
                        <option value="">↑↓ По умолчанию</option>
                        <option>цена ↑</option>
                        <option>цена ↓</option>
                        <option>площадь ↑</option>
                        <option>площадь ↓</option>
                    </select>
                    <div class="section__content-tabs">
                        <div class="section__content-tab active">
                            Списком
                        </div>
                        <div class="section__content-tab">
                            На карте
                        </div>
                    </div>
                    <svg class="--green" viewBox="0 0 32 32">
                        <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="section__content-slider slider-objects slider">
                        <div class="section__content-slide --table">
                            <div class="section__big-text --mgb40">
                                <p>Объекты</p>
                            </div>
                            <div class="section_products" id="buildings">
                                <div class="section_product ">
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
                                </div>
                                <div class="section_product ">
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
                                </div>
                                <div class="section_product ">
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
                                </div>
                                <div class="section_product ">
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
                                </div>
                                <div class="section_product ">
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
                                </div>
                                <div class="section_product ">
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
                                </div>
                                <div class="section_product ">
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
                                </div>
                                <div class="section_product ">
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
                                </div>
                                <div class="section_product --last">
                                    <div class="section_product_content">
                                        <svg class="icon">
                                            <use xlink:href="#CraneIcon"></use>
                                        </svg>
                                        <div class="title">Новостройки</div>
                                        <p>Посмотреть схожие варианты в новостройках этой же локации</p>
                                    </div>
                                    <div class="section_product_footer">
                                        <button class="favorite">
                                            <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.4764 18.5623C16.0018 18.5623 15.617 18.9471 15.617 19.4217C15.617 19.6613 15.5358 19.8629 15.3757 20.021C15.2077 20.1869 14.964 20.283 14.7255 20.2811C14.4903 20.2781 14.2993 20.198 14.1417 20.036L9.61579 15.3849C9.45401 15.2186 9.23186 15.1248 8.99991 15.1248C8.76797 15.1248 8.54582 15.2186 8.38404 15.3849L3.85806 20.036C3.70161 20.1968 3.50924 20.277 3.26999 20.2812C3.02893 20.2861 2.78629 20.1901 2.61944 20.0261C2.46239 19.8718 2.38277 19.6735 2.38277 19.4367V3.43746C2.38277 2.48974 3.1538 1.71871 4.10152 1.71871H13.8983C14.846 1.71871 15.617 2.48974 15.617 3.43746V15.1678C15.617 15.6424 16.0018 16.0272 16.4764 16.0272C16.951 16.0272 17.3358 15.6424 17.3358 15.1678V3.43746C17.3357 1.54206 15.7937 0 13.8983 0H4.10152C2.20608 0 0.664062 1.54206 0.664062 3.43746V19.4367C0.664062 20.1316 0.930727 20.7764 1.4149 21.2521C1.90019 21.7289 2.56835 22 3.25448 22C3.26973 22 3.28503 21.9999 3.30028 21.9996C3.99599 21.9874 4.61478 21.7229 5.08984 21.2346L8.99991 17.2164L12.91 21.2346C13.3885 21.7263 14.0088 21.9909 14.7038 21.9997C15.4014 22.0069 16.088 21.7331 16.5833 21.244C17.0685 20.7649 17.3357 20.1177 17.3357 19.4217C17.3358 18.9471 16.951 18.5623 16.4764 18.5623Z"></path>
                                            </svg>
                                        </button>
                                        <a href="#" class="price">Перейти в каталог</a>
                                    </div>
                                </div>
                                </div>
                            <div class="paginations">
                                <a href="#" class="pagination-back hide">назад</a>
                                <ul>
                                    <li><a href="#" class="active">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li>...</li>
                                    <li><a href="#">7</a></li>
                                </ul>
                                <a href="#" class="pagination-next">вперед</a>
                            </div>
                            <!--div class="section__centered-button --mgt60 g-flex-justify-center">
                                <button class="btn --green" onclick="$(this).hide();">Показать еще</button>
                            </div--> 
                        </div>
                        <div class="section__content-slide --map">
                            <div class="section__big-text --mgb60">
                                <p>Объекты</p>
                            </div>
                            <div class="section_products">
                                <div class="list" id="buildings-list"></div>
                                <div class="map" id="buildings-map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="wrapper">
                <h3 class="section__text --mgb40"><span>Не нашли квартиру мечты среди<br>предложенных вариантов?</span></h3>
                <h3 class="text-align-end --mgb20"><span class="--green" style="text-align: left;display: inline-block;">С суперагентами Dream Realty<br>миссия выполнима</span></h3>
                <div class="section__big-text"><p class="text-align-end">на 100%</p></div>
            </div>
        </section>

        <section class="section how-it-works --pdt0" id="formBlockSmooth">
            <div class="wrapper">
            <form class="g-flex-wrap g-flex-between g-flex-align-center --green --key">
                <h3>Заказать консультацию <span class="--green">эксперта</span></h3>
                <label>
                    <input type="text" placeholder="Имя*" required>
                </label>
                <label>
                    <input type="tel" class="phone" placeholder="Телефон*" required>
                </label>
                <button type="submit" class="btn --green">Заказать консультацию</button>
                <label>
                    <select data-placeholder="Цель покупки*" required>
                        <option value="">&nbsp;</option>
                        <option>жить</option>
                        <option>сдавать</option>
                        <option>инвестировать</option>
                        <option>нет определенности</option>
                    </select>
                </label>
                <label>
                    <select data-placeholder="Бюджет">
                        <option value="">&nbsp;</option>
                        <option>до 10 млн.</option>
                        <option>от 10 до 20 млн.</option>
                        <option>от 20 до 30 млн.</option>
                        <option>от 30 млн.</option>
                    </select>
                </label>
                <label class="inputCheckbox">
                    <input type="checkbox" required checked>
                    <span>Нажимая на кнопку "Заказать консультацию", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                </label>
                <label class="w66 w100-xs">
                    <input type="text" placeholder="Комментарии">
                </label>
            </form>
            </div>
        </section>

        <section class="section video-media">
            <div class="wrapper">
                <div class="section__big-text --mgb60">
                    <p>DREAM Media</p>
                </div>
                <div class="section__video-slider slider">
                    <div class="section__video-slide js_video-ratio" data-video="https://www.youtube.com/embed/sxBmS4VYU_0" style="background-image: url(./assets/img/video14.png);">
                        <img loading="lazy" src="./assets/svg/VideoButton.svg" alt="">
                    </div>
                    <div class="section__video-slide js_video-ratio" data-video="https://www.youtube.com/embed/CoINVBkSbU0" style="background-image: url(/html/assets/img/video1.png);">
                        <img loading="lazy" src="/html/assets/svg/VideoButton.svg" alt="">
                    </div>
                    <div class="section__video-slide js_video-ratio" data-video="https://www.youtube.com/embed/hw6Yn1yuWD0" style="background-image: url(/html/assets/img/video2.png);">
                        <img loading="lazy" src="/html/assets/svg/VideoButton.svg" alt="">
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
                <a href="https://www.youtube.com/c/dreamrealty" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt30">
                    <div class="arrow g-flex-align-center g-flex-justify-center">
                        <svg class="icon">
                            <use xlink:href="#ArrowSquare"></use>
                        </svg>
                    </div>
                    Канал Dream Realty
                </a>
            </div>
        </section>

        <section class="section podcasts">
            <div class="wrapper">
                <h2 class="section__title --mgb60"><span class="--green">Советы</span> наших экспертов </h2>
                <div class="section__podcasts g-flex-between g-flex-align-stretch g-flex-wrap">
                    <div class="section__podcast g-flex-column" style="background-image: url(/html/assets/img/podcast25.png);">
                        <div class="section__podcast_name">Две стратегии покупки жилья в новостройке через агентство недвижимости</div>
                        <img loading="lazy" src="/html/assets/svg/PodcastIcon.svg" alt="" class="section__podcast_icon --mgb40">
                        <audio data-status="stopped" controls src="./assets/audio/Luna.mp3" class="section__podcast_audio-tag">
                            Тег audio не поддерживается вашим браузером.
                        </audio>
                        <div class="section__podcast_audio g-flex-align-center">
                            <img loading="lazy" src="/html/assets/svg/Audio--Play.svg" data-pause="/html/assets/svg/pause.svg" data-play="/html/assets/svg/Audio--Play.svg" alt="" class="js_play-pause">
                            <div class="timeline">
                                <div class="currentTime"></div>
                                <span class="curNumTime">00:00</span>
                                <span class="allTime">00:00</span>
                            </div>
                            <a href="https://t.me/FromDreamToRealty" target="_blank" class="section__podcast_comment g-flex-align-center">
                                <img loading="lazy" src="/html/assets/svg/Comment.svg" alt="">
                                Комментировать
                            </a>
                        </div>
                    </div>
                    <div class="section__podcast g-flex-column" style="background-image: url(/html/assets/img/podcast26.png);">
                        <div class="section__podcast_name">Как получить доступ к самым лучшим квартирам застройщика, которые он "приберёг на будущее"?</div>
                        <img loading="lazy" src="/html/assets/svg/PodcastIcon.svg" alt="" class="section__podcast_icon --mgb40">
                        <audio data-status="stopped" controls src="./assets/audio/Luna.mp3" class="section__podcast_audio-tag">
                            Тег audio не поддерживается вашим браузером.
                        </audio>
                        <div class="section__podcast_audio g-flex-align-center">
                            <img loading="lazy" src="/html/assets/svg/Audio--Play.svg" data-pause="/html/assets/svg/pause.svg" data-play="/html/assets/svg/Audio--Play.svg" alt="" class="js_play-pause">
                            <div class="timeline">
                                <div class="currentTime"></div>
                                <span class="curNumTime">00:00</span>
                                <span class="allTime">00:00</span>
                            </div>
                            <a href="https://t.me/FromDreamToRealty" target="_blank" class="section__podcast_comment g-flex-align-center">
                                <img loading="lazy" src="/html/assets/svg/Comment.svg" alt="">
                                Комментировать
                            </a>
                        </div>
                    </div>
                    <div class="section__podcast g-flex-column" style="background-image: url(/html/assets/img/podcast27.png);">
                        <div class="section__podcast_name">как найти идеальную новостройку для жизни</div>
                        <img loading="lazy" src="/html/assets/svg/PodcastIcon.svg" alt="" class="section__podcast_icon --mgb40">
                        <audio data-status="stopped" controls src="./assets/audio/Luna.mp3" class="section__podcast_audio-tag">
                            Тег audio не поддерживается вашим браузером.
                        </audio>
                        <div class="section__podcast_audio g-flex-align-center">
                            <img loading="lazy" src="/html/assets/svg/Audio--Play.svg" data-pause="/html/assets/svg/pause.svg" data-play="/html/assets/svg/Audio--Play.svg" alt="" class="js_play-pause">
                            <div class="timeline">
                                <div class="currentTime"></div>
                                <span class="curNumTime">00:00</span>
                                <span class="allTime">00:00</span>
                            </div>
                            <a href="https://t.me/FromDreamToRealty" target="_blank" class="section__podcast_comment g-flex-align-center">
                                <img loading="lazy" src="/html/assets/svg/Comment.svg" alt="">
                                Комментировать
                            </a>
                        </div>
                    </div>
                    <div class="section__podcast g-flex-column" style="background-image: url(/html/assets/img/podcast28.png);">
                        <div class="section__podcast_name">Как купить лучшее предложение до старта продаж жилого комплекса?</div>
                        <img loading="lazy" src="/html/assets/svg/PodcastIcon.svg" alt="" class="section__podcast_icon --mgb40">
                        <audio data-status="stopped" controls src="./assets/audio/Luna.mp3" class="section__podcast_audio-tag">
                            Тег audio не поддерживается вашим браузером.
                        </audio>
                        <div class="section__podcast_audio g-flex-align-center">
                            <img loading="lazy" src="/html/assets/svg/Audio--Play.svg" data-pause="/html/assets/svg/pause.svg" data-play="/html/assets/svg/Audio--Play.svg" alt="" class="js_play-pause">
                            <div class="timeline">
                                <div class="currentTime"></div>
                                <span class="curNumTime">00:00</span>
                                <span class="allTime">00:00</span>
                            </div>
                            <a href="https://t.me/FromDreamToRealty" target="_blank" class="section__podcast_comment g-flex-align-center">
                                <img loading="lazy" src="/html/assets/svg/Comment.svg" alt="">
                                Комментировать
                            </a>
                        </div>
                    </div>
                </div>
                <a href="dream-podcasts.html" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt30">
                    <div class="arrow g-flex-align-center g-flex-justify-center">
                        <svg class="icon">
                            <use xlink:href="#ArrowSquare"></use>
                        </svg>
                    </div>
                    Все подкасты
                </a>
            </div>
        </section> 

        <section class="section advantage-cards relative grayHalfBG --pdb60">
            <div class="wrapper">
                <h2 class="section__title --mgb60"><span class="--green">Преимущества</span> покупки квартиры в новостройке с нами</h2>
                <div class="section__advantage-cards_slider slider --min-text">
                    <div class="section__advantage-cards_slide">
                        <a href="buy-advantages-novostr.html#advant_pop-up1" class="section__advantage-card relative g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/illustrations/green/01.1.svg);">
                            <div class="g-flex-align-center g-flex-justify-center"><p><span class="--green">Работаем на вас</span>, а не на застройщика</p></div>
                            <span class="num">1</span>
                        </a>
                    </div>
                    <div class="section__advantage-cards_slide">
                        <a href="buy-advantages-novostr.html#advant_pop-up2" class="section__advantage-card relative g-flex-column g-flex-justify-end" style="background-image: url(./assets/img/illustrations/green/02.svg);">
                            <div class="g-flex-align-center g-flex-justify-center"><p>Оцениваем <span class="--green">инвестиционный потенциал</span></p></div>
                            <span class="num">2</span>
                        </a>
                    </div>
                    <div class="section__advantage-cards_slide">
                        <a href="buy-advantages-novostr.html#advant_pop-up3" class="section__advantage-card relative g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/illustrations/green/03.1.svg);">
                            <div class="g-flex-align-center g-flex-justify-center"><p>Работаем <span class="--green">“под ключ”</span></p></div>
                            <span class="num">3</span>
                        </a>
                    </div>
                    <div class="section__advantage-cards_slide">
                        <a href="buy-advantages-novostr.html#advant_pop-up4" class="section__advantage-card relative g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/illustrations/green/04.svg);">
                            <div class="g-flex-align-center g-flex-justify-center"><p>Владеем <span class="--green">инсайдерской информацией</span></p></div>
                            <span class="num">4</span>
                        </a>
                    </div>
                    <div class="section__advantage-cards_slide">
                        <a href="buy-advantages-novostr.html#advant_pop-up5" class="section__advantage-card relative g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/illustrations/green/05.1.svg);">
                            <div class="g-flex-align-center g-flex-justify-center"><p>Предлагаем <span class="--green">100% рынка новостроек</span></p></div>
                            <span class="num">5</span>
                        </a>
                    </div>
                    <div class="section__advantage-cards_slide">
                        <a href="buy-advantages-novostr.html#advant_pop-up6" class="section__advantage-card relative g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/illustrations/green/06.svg);">
                            <div class="g-flex-align-center g-flex-justify-center"><p><span class="--green">Помогаем сформировать</span> бюджет на покупку</p></div>
                            <span class="num">6</span>
                        </a>
                    </div>
                    <div class="section__advantage-cards_slide">
                        <a href="buy-advantages-novostr.html#advant_pop-up7" class="section__advantage-card relative g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/illustrations/green/07.svg);">
                            <div class="g-flex-align-center g-flex-justify-center"><p><span class="--green">Официальный отчет о проверке</span> объекта и застройщика</p></div>
                            <span class="num">7</span>
                        </a>
                    </div>
                    <div class="section__advantage-cards_slide">
                        <a href="buy-advantages-novostr.html#advant_pop-up8" class="section__advantage-card relative g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/illustrations/green/08.svg);">
                            <div class="g-flex-align-center g-flex-justify-center"><p><span class="--green">Свой YouTube канал</span> о новостройках</p></div>
                            <span class="num">8</span>
                        </a>
                    </div>
                </div>
                <div class="section__feedback_navs g-flex-justify-end g-flex-align-stretch slider-navs">
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
                <a href="buy-advantages-novostr.html" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center">
                    <div class="arrow g-flex-align-center g-flex-justify-center">
                        <svg class="icon">
                            <use xlink:href="#ArrowSquare"></use>
                        </svg>
                    </div>
                    Все преимущества
                </a>
            </div>
        </section>

        <section class="section cta-big-text">
            <div class="wrapper relative">
                <div class="section__big-text --mgb60">
                    <p>Остались <br>вопросы?</p>
                </div>
                <button class="btn section__absolute-button right --green js--open_pop-up">
                    <svg class="icon">
                        <use xlink:href="#PhoneCall"></use>
                    </svg>
                    Заказать звонок
                </button>
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
                    <h3>Заказать <span class="--green">звонок</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон">
                    </label>
                    <button type="submit" class="btn --green">Заказать звонок</button>
                    <label class="w66 w100-xs">
                        <input type="text" placeholder="Комментарии">
                    </label>
                    <label class="inputCheckbox w100">
                        <input type="checkbox" required checked>
                        <span>Нажимая на кнопку "Заказать звонок", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                    </label>
                </form>
            </div>
        </div>
    </div>

    <section class="section pop-up send-request how-it-works --pdt0">
        <div class="pop-up__close">
            <svg class="icon">
                <use xlink:href="#Close"></use>
            </svg>
        </div>
        <div class="wrapper">
            <div class="section__content-changer g-flex-column">
                <div class="section__content-tabs -m-left g-flex-justify-center g-flex-align-center fit-content center --mgb60">
                    <div class="section__content-tab active">
                        Вторичка
                    </div>
                    <div class="section__content-tab">
                        Новостройка
                    </div>
                </div>
                <svg class="--green" viewBox="0 0 32 32">
                    <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="section__content-slider slider">
                    <div class="section__content-slide">
                        <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                            <h3>Выбрать <span class="--green">районного агента</span></h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --green">Отправить заявку</button>
                            <label>
                                <select data-placeholder="Район покупки*" required>
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
                                <span>Нажимая на кнопку "Отправить заявку", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                            </label>
                        </form>
                    </div>
                    <div class="section__content-slide">
                        <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                            <h3>Выбрать <span class="--green">эксперта по новостройкам</span></h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --green">Отправить заявку</button>
                            <label>
                                <select data-placeholder="Цель покупки*" required>
                                    <option value="">&nbsp;</option>
                                    <option>жить</option>
                                    <option>сдавать</option>
                                    <option>инвестировать</option>
                                    <option>нет определенности</option>
                                </select>
                            </label>
                            <label>
                                <select data-placeholder="Бюджет">
                                    <option value="">&nbsp;</option>
                                    <option>до 10 млн.</option>
                                    <option>от 10 до 20 млн.</option>
                                    <option>от 20 до 30 млн.</option>
                                    <option>от 30 млн.</option>
                                </select>
                            </label>
                            <label class="inputCheckbox">
                                <input type="checkbox" required checked>
                                <span>Нажимая на кнопку "Отправить заявку", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                            </label>
                            <label class="w66 w100-xs">
                                <input type="text" placeholder="Комментарии">
                            </label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="download">
        <div class="wrapper">
            <div class="text-block">
                
                <form class="--key g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Скачать <span class="--green">презентацию</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <label></label>
                    <label>
                        <input type="email" class="email" placeholder="Email*" required>
                    </label>
                    <button type="submit" class="btn --green">Скачать</button>
                    
                    <label class="inputCheckbox">
                        <input type="checkbox" required checked>
                        <span>Нажимая на кнопку "Скачать", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                    </label>
                </form>
            </div>
        </div>
    </div>

    <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>