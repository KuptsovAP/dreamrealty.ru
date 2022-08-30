<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("ТАРИФЫ");
?>
    <br><br><br>
    <section class="section" style="padding-top: 20px;">
        <div class="wrapper">
            <div class="section__big-text --mgb20">
                <p>сделка под ключ</p>
            </div>
            <div class="section__text --mgb20">
                <p>Мы сделали наши комиссии <b>прозрачными и выгодными для вас.</b></p>
            </div>
            <div class="section__text">
                <p style="width: 100%">Для вашего удобства мы <b>упростили расчет комиссии и установили верхнюю
                        границу</b> по каждому диапазону цен на недвижимость.</p>
            </div>
        </div>
    </section>

    <section class="section how-it-works" id="calc">
        <div class="section__content-changer g-flex-column">
            <div class="section__content-tabs g-flex-between g-flex-align-center center g-flex-wrap --mgb60 --lightViolet">
                <div class="wrapper top g-flex-between g-flex-align-center center g-flex-wrap --lightViolet">
                    <div class="section__content-tab --hoveronly --lightViolet active" data-color="" id="hash__sell">
                        Продажа
                    </div>
                    <div class="section__content-tab --hoveronly --lightViolet" id="hash__buy">
                        Покупка
                    </div>
                    <div class="section__content-tab --hoveronly --lightViolet" id="hash__alternate">
                        Альтернатива
                    </div>
                    <div class="section__content-tab --hoveronly --lightViolet" id="hash__rent">
                        Аренда
                    </div>
                    <div class="section__content-tab --hoveronly --lightViolet" id="hash__ursopr">
                        Юрсопровождение
                    </div>
                    <div class="section__content-tab --hoveronly --lightViolet" id="hash__ipoteka">
                        Ипотека
                    </div>
                </div>
            </div>
            <svg class="--lightViolet" viewBox="0 0 32 32">
                <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <div class="section__content-slider slider w100per">
                <!--Продажа red -->
                <div class="section__content-slide red-slide">
                    <div class="wrapper">
                        <h3 class="--mgb60">Продажа</h3>
                        <table class="section__table_table --lightViolet --mgb90">
                            <thead>
                            <tr>
                                <th>
                                    <div>
                                        <p>ЦЕНА КВАРТИРЫ,
                                            <svg class="ruble" fill="#4B4A4A">
                                                <use xlink:href="#Rouble"></use>
                                            </svg>
                                        </p>
                                    </div>
                                </th>
                                <th>
                                    <div><p>НАША КОМИССИЯ, %</p></div>
                                </th>
                                <th>
                                    <div>
                                        <p>В СЛУЧАЕ ПРОДАЖИ,
                                            <svg class="ruble" fill="#4B4A4A">
                                                <use xlink:href="#Rouble"></use>
                                            </svg>
                                            </svg><br>(но не менее)
                                        </p>
                                    </div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div><p>до <span class="--big">8</span> млн</p></div>
                                </td>
                                <td>
                                    <div><p><span class="--big">3</span></p></div>
                                </td>
                                <td>
                                    <div><p>min <span class="--big">150.000</span></p></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div><p>от <span class="--big">8</span> до <span class="--big">15</span> млн</p>
                                    </div>
                                </td>
                                <td>
                                    <div><p><span class="--big">2,5</span></p></div>
                                </td>
                                <td>
                                    <div><p>min <span class="--big">250.000</span></p></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div><p>от <span class="--big">15</span> до <span class="--big">40</span> млн</p>
                                    </div>
                                </td>
                                <td>
                                    <div><p><span class="--big">2</span></p></div>
                                </td>
                                <td>
                                    <div><p>min <span class="--big">400.000</span></p></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div><p>от <span class="--big">40</span> млн</p></div>
                                </td>
                                <td>
                                    <div><p>от <span class="--big">2</span></p></div>
                                </td>
                                <td>
                                    <div><p>min <span class="--big">800.000</span></p></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="section__text">
                            <p class="w100 --big mb-3" style="font-size: 20px;"><b><span class="--lightViolet">Исключения:</span></b>
                            </p>
                            <ul class="--lightViolet --big fixed--ul--lightViolet --fixed-xs">
                                <li><span>гаражи и машиноместа до 2,5 млн. рублей — </span><b class="--lightViolet">75
                                        000 рублей</b>;
                                </li>
                                <li><span>земельные участкои и садовыа дома до 8 млн. рублей — </span><b
                                            class="--lightViolet">200 000 рублей</b>;
                                </li>
                            </ul>
                            <p class="w100 --big mt-3" style="font-size: 20px;">Юридическое сопровождение сделки <b>включено
                                    в стоимость</b> услуги.</p>
                        </div>
                    </div>
                    <div class="section__calc section__calc_1row section__calc--sell --mgt50 --lightViolet">
                        <div class="wrapper">
                            <h3 class="--mgb60">Введите ориентировочную стоимость продаваемой <br>
                                квартиры, чтобы узнать <span class="--lightViolet">размер нашей комиссии</span></h3>
                            <button class="js__clear-inputs section__calc_clear --mgb30">
                                <svg class="icon">
                                    <use xlink:href="#clear"></use>
                                </svg>
                                сбросить фильтр
                            </button>
                            <div class="section__calc_input">
                                <div class="section__calc_input-item">
                                    <p>Цена объекта,
                                        <svg class="ruble" fill="#4B4A4A">
                                            <use xlink:href="#Rouble"></use>
                                        </svg>
                                    </p>
                                    <input type="text" placeholder="19 000 000">
                                </div>
                                <div class="section__calc_input-item komiss">
                                    <p>Комиссия, %</p>
                                    <span>2,0</span>
                                </div>
                                <div class="section__calc_input-item result">
                                    <p>Итоговая комиссия,
                                        <svg class="ruble" fill="#4B4A4A">
                                            <use xlink:href="#Rouble"></use>
                                        </svg>
                                    </p>
                                    <span style="white-space: nowrap;">400 000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper">
                        <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/send-request-right-now.php');?>
                    </div>
                </div>
                <!-- Покупка green -->
                <div class="section__content-slide green-slide">
                    <div class="wrapper">
                        <h3 class="--mgb60">Покупка</h3>
                        <table class="section__table_table --lightViolet --mgb90">
                            <thead>
                            <tr>
                                <th>
                                    <div>
                                        <p>ЦЕНА КВАРТИРЫ,
                                            <svg class="ruble" fill="#4B4A4A">
                                                <use xlink:href="#Rouble"></use>
                                            </svg>
                                        </p>
                                    </div>
                                </th>
                                <th>
                                    <div><p>НАША КОМИССИЯ, %</p></div>
                                </th>
                                <th>
                                    <div>
                                        <p>В СЛУЧАЕ ПОКУПКИ,
                                            <svg class="ruble" fill="#4B4A4A">
                                                <use xlink:href="#Rouble"></use>
                                            </svg>
                                            <br>(но не менее и не более)
                                        </p>
                                    </div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div><p>до <span class="--big">8</span> млн</p></div>
                                </td>
                                <td>
                                    <div><p><span class="--big">3</span></p></div>
                                </td>
                                <td>
                                    <div><p>min <span class="--big">160.000</span></p></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div><p>от <span class="--big">8</span> до <span class="--big">15</span> млн</p>
                                    </div>
                                </td>
                                <td>
                                    <div><p><span class="--big">2,5</span></p></div>
                                </td>
                                <td>
                                    <div><p>max <span class="--big">250.000</span></p></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div><p>от <span class="--big">15</span> до <span class="--big">40</span> млн</p>
                                    </div>
                                </td>
                                <td>
                                    <div><p><span class="--big">2</span></p></div>
                                </td>
                                <td>
                                    <div><p>max <span class="--big">500.000</span></p></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div><p>от <span class="--big">40</span> млн<br>(в новостройке)</p></div>
                                </td>
                                <td>
                                    <div><p><span class="--big">1,5</span></p></div>
                                </td>
                                <td>
                                    <div><p>max <span class="--big">1,5</span> млн</p></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div><p>от <span class="--big">40</span> млн<br>(во вторичке)</p></div>
                                </td>
                                <td>
                                    <div><p><span class="--big">2</span></p></div>
                                </td>
                                <td>
                                    <div><p>max <span class="--big">2</span> млн</p></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="section__text">
                            <p class="w100 --big mb-3" style="font-size: 20px;">
                                <b>
                                    <span class="--lightViolet">Исключения:</span>
                                </b>
                            </p>
                            <ul class="--lightViolet --big fixed--ul--lightViolet --fixed-xs">
                                <li><span>гаражи и машиноместа до 2,5 млн. рублей — </span>
                                    <b class="--lightViolet">75 000 рублей</b>;
                                </li>
                                <li>
                                    <span>земельные участкои и садовыа дома до 8 млн. рублей — </span>
                                    <b class="--lightViolet">200 000 рублей</b>;
                                </li>
                            </ul>
                            <p class="w100 --big mt-3" style="font-size: 20px;">Юридическое сопровождение сделки <b>включено
                                    в стоимость</b> услуги.</p>
                        </div>
                        <!--<div class="section__text">
                            <p class="w100 --big mb-3" style="font-size: 20px;"><b>Наша комиссия <span class="--lightViolet">при покупке объектов стоимостью до 5 млн. рублей:</span></b></p>
                            <ul class="--lightViolet --big fixed--ul--lightViolet --fixed-xs">
                                <li><span>гаражей и машиномест дешевле 2,5 млн. рублей — </span><b class="--lightViolet">75 000 рублей</b>;</li>
                                <li><span>земельных участков и садовых домов дешевле 8 млн. рублей — </span><b class="--lightViolet">200 000 рублей</b>;</li>
                            </ul>
                            <p class="w100 --big mt-3" style="font-size: 20px;">Юридическое сопровождение сделки <b>включено в стоимость</b> услуги.</p>
                        </div>-->
                    </div>
                    <div class="section__calc section__calc_1row section__calc--buy --mgt50 --lightViolet">
                        <div class="wrapper">
                            <h3 class="--mgb60">Введите ориентировочную стоимость приобретаемой <br>
                                квартиры, чтобы узнать <span class="--lightViolet">размер нашей комиссии</span></h3>
                            <div class="section__content-changer g-flex-column">
                                <div class="section__content-tabs g-flex-between g-flex-align-center center --mgb60">
                                    <div class="tab__button__js section__content-tab active --hoveronly --lightViolet tab_apartment_js">
                                        В новостройке
                                    </div>
                                    <div class="tab__button__js section__content-tab --hoveronly --lightViolet">
                                        Во вторичке
                                    </div>
                                </div>
                                <h4 class="section__content__subtitle">В случае приобретения новостройки у нашего
                                    партнера-застройщика, комиссия будет равна 0!</h4>
                                <svg class="--lightViolet" viewBox="0 0 32 32">
                                    <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                                <div class="section__content-slider slider">
                                    <div class="section__content-slide section__calc--buy--novostr">
                                        <button class="js__clear-inputs section__calc_clear --mgb30">
                                            <svg class="icon">
                                                <use xlink:href="#clear"></use>
                                            </svg>
                                            сбросить фильтр
                                        </button>
                                        <div class="section__calc_input">
                                            <div class="section__calc_input-item">
                                                <p>Цена объекта,
                                                    <svg class="ruble" fill="#4B4A4A">
                                                        <use xlink:href="#Rouble"></use>
                                                    </svg>
                                                </p>
                                                <input type="text" placeholder="11 000 000">
                                            </div>
                                            <div class="section__calc_input-item komiss">
                                                <p>Комиссия, %</p>
                                                <span>2,5</span>
                                            </div>
                                            <div class="section__calc_input-item result">
                                                <p>Итоговая комиссия,
                                                    <svg class="ruble" fill="#4B4A4A">
                                                        <use xlink:href="#Rouble"></use>
                                                    </svg>
                                                </p>
                                                <span>250 000</span>
                                            </div>
                                        </div>

                                        <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/send-request-right-now-buy.php');?>

                                    </div>
                                    <div class="section__content-slide section__calc--buy--vtor">
                                        <button class="js__clear-inputs section__calc_clear --mgb30">
                                            <svg class="icon">
                                                <use xlink:href="#clear"></use>
                                            </svg>
                                            сбросить фильтр
                                        </button>
                                        <div class="section__calc_input">
                                            <div class="section__calc_input-item">
                                                <p>Цена объекта,
                                                    <svg class="ruble" fill="#4B4A4A">
                                                        <use xlink:href="#Rouble"></use>
                                                    </svg>
                                                </p>
                                                <input type="text" placeholder="11 000 000">
                                            </div>
                                            <div class="section__calc_input-item komiss">
                                                <p>Комиссия, %</p>
                                                <span>2,5</span>
                                            </div>
                                            <div class="section__calc_input-item result">
                                                <p>Итоговая комиссия,
                                                    <svg class="ruble" fill="#4B4A4A">
                                                        <use xlink:href="#Rouble"></use>
                                                    </svg>
                                                </p>
                                                <span>250 000</span>
                                            </div>
                                        </div>

                                        <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/send-request-right-now-buy-rayon.php');?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Альтернатива violet -->
                <div class="section__content-slide violet-slide">
                    <div class="wrapper">
                        <h3 class="--mgb60">Альтернатива</h3>
                        <div class="section__text">
                            <p class="w100" style="font-size: 18pt;">
                                3% (но не менее 300 000 рублей) <b>от наибольшей стоимости недвижимости<br>(вне
                                    зависимости от того, продается она или покупается).</b></p>
                            <p class="mt-3">Юридическое сопровождение сделки <b>включено в стоимость</b> услуги.</p>
                        </div>
                    </div>
                    <div class="section__calc section__calc_2row section__calc--alternate --mgt50 --lightViolet">
                        <div class="wrapper">
                            <h3 class="--mgb60">Введите ориентировочную стоимость продаваемой <br>
                                и приобретаемой квартир, чтобы узнать <span
                                        class="--lightViolet">размер нашей комиссии</span>
                            </h3>
                            <button class="js__clear-inputs section__calc_clear --mgb30">
                                <svg class="icon">
                                    <use xlink:href="#clear"></use>
                                </svg>
                                сбросить фильтр
                            </button>
                            <div class="section__calc_input clear-inputs-2">
                                <div class="section__calc_input-row">
                                    <div class="section__calc_input-item">
                                        <p>
                                            Цена продаваемого
                                            объекта,
                                            <svg class="ruble" fill="#4B4A4A">
                                                <use xlink:href="#Rouble"></use>
                                            </svg>
                                        </p>
                                        <input type="text" placeholder="15 000 000" class="inputA">
                                    </div>
                                    <div class="section__calc_input-item">
                                        <p>
                                            Цена приобретаемого
                                            объекта,
                                            <svg class="ruble" fill="#4B4A4A">
                                                <use xlink:href="#Rouble"></use>
                                            </svg>
                                        </p>
                                        <input type="text" placeholder="18 000 000" class="inputB">
                                    </div>
                                </div>
                                <div class="section__calc_input-item komiss">
                                    <p>Комиссия, %</p>
                                    <span>3,0</span>
                                </div>
                                <div class="section__calc_input-item result">
                                    <p>
                                        Итоговая комиссия,
                                        <svg class="ruble" fill="#4B4A4A">
                                            <use xlink:href="#Rouble"></use>
                                        </svg>
                                    </p>
                                    <span style="white-space: nowrap;">300 000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper">
                        <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/send-request-right-now.php');?>
                    </div>
                </div>
                <!-- Аренда lightenBlue -->
                <div class="section__content-slide lightenBlue-slide">
                    <div class="wrapper">
                        <h3 class="--mgb60 --lightViolet">Сдать</h3>
                        <div class="section__content-changer g-flex-column --mgb90">
                            <div class="section__content-tabs -m-left g-flex-justify-center g-flex-align-center fit-content center --mgb60">
                                <div class="section__content-tab --hoveronly --lightViolet active">
                                    Жилая недвижимость
                                </div>
                                <div class="section__content-tab --hoveronly --lightViolet">
                                    Коммерческая недвижимость
                                </div>
                            </div>
                            <svg class="--lightViolet" viewBox="0 0 32 32">
                                <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                            <div class="section__content-slider slider">

                                <div class="section__content-slide">
                                    <table class="section__table_table --lightViolet --mgb90">
                                        <thead>
                                        <tr>
                                            <th>
                                                <div>
                                                    <p>ЦЕНА КВАРТИРЫ,
                                                        <svg class="ruble" fill="#4B4A4A">
                                                            <use xlink:href="#Rouble"></use>
                                                        </svg>
                                                    </p>
                                                </div>
                                            </th>
                                            <th>
                                                <div><p>НАША КОМИССИЯ, %</p></div>
                                            </th>
                                            <th>
                                                <div>
                                                    <p>КОМИССИОННОЕ ВОЗНАГРАЖДЕНИЕ,
                                                        <svg class="ruble" fill="#4B4A4A">
                                                            <use xlink:href="#Rouble"></use>
                                                        </svg>
                                                        <br>(от величины ежемесячной арендной ставки)
                                                    </p>
                                                </div>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div><p>до <span class="--big">60</span> тыс</p></div>
                                            </td>
                                            <td>
                                                <div><p><span class="--big">100</span></p></div>
                                            </td>
                                            <td>
                                                <div style="width: calc(100% + 27px);"><p>50% оплачивает арендатор жилья
                                                        <br>50% оплачивает арендодатель жилья</p></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div><p>от <span class="--big">60</span> до <span
                                                                class="--big">150</span> тыс</p></div>
                                            </td>
                                            <td>
                                                <div><p><span class="--big">75</span></p></div>
                                            </td>
                                            <td>
                                                <div><p>min <span class="--big">60.000</span></p></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div><p>от <span class="--big">150</span> тыс</p></div>
                                            </td>
                                            <td>
                                                <div><p><span class="--big">50</span></p></div>
                                            </td>
                                            <td>
                                                <div><p>min <span class="--big">75.000</span></p></div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="section__content-slide">
                                    <table class="section__table_table --lightViolet --mgb90">
                                        <thead>
                                        <tr>
                                            <th>
                                                <div>
                                                    <p>ЦЕНА КВАРТИРЫ,
                                                        <svg class="ruble" fill="#4B4A4A">
                                                            <use xlink:href="#Rouble"></use>
                                                        </svg>
                                                    </p>
                                                </div>
                                            </th>
                                            <th>
                                                <div><p>НАША КОМИССИЯ, %</p></div>
                                            </th>
                                            <th>
                                                <div>
                                                    <p>КОМИССИОННОЕ ВОЗНАГРАЖДЕНИЕ,
                                                        <svg class="ruble" fill="#4B4A4A">
                                                            <use xlink:href="#Rouble"></use>
                                                        </svg>
                                                        <br>(от величины ежемесячной арендной ставки)
                                                    </p>
                                                </div>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div><p>до <span class="--big">100</span> тыс</p></div>
                                            </td>
                                            <td>
                                                <div><p><span class="--big">100</span></p></div>
                                            </td>
                                            <td rowspan="2">
                                                <div style="width: calc(100% + 27px);"><p>50% оплачивает арендатор жилья
                                                        <br>50% оплачивает арендодатель жилья</p></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div><p>от <span class="--big">100</span> до <span
                                                                class="--big">200</span> тыс</p></div>
                                            </td>
                                            <td style="padding: 0;border-right: 1px solid #8E67FF;">
                                                <div><p><span class="--big">100</span></p></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div><p>от <span class="--big">200</span> до <span
                                                                class="--big">1</span> млн</p></div>
                                            </td>
                                            <td>
                                                <div><p><span class="--big">50</span></p></div>
                                            </td>
                                            <td>
                                                <div><p>min <span class="--big">200.000</span></p></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div><p>от <span class="--big">1</span> млн</p></div>
                                            </td>
                                            <td>
                                                <div><p><span class="--big">50</span></p></div>
                                            </td>
                                            <td>
                                                <div><p>min <span class="--big">500.000</span></p></div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <h3 class="--mgb60 --lightViolet">Cнять</h3>
                        <div class="section__content-changer g-flex-column --mgb90">
                            <div class="section__content-tabs -m-left g-flex-justify-center g-flex-align-center fit-content center --mgb60">
                                <div class="section__content-tab --hoveronly --lightViolet active">
                                    Жилая недвижимость
                                </div>
                                <div class="section__content-tab --hoveronly --lightViolet">
                                    Коммерческая недвижимость
                                </div>
                            </div>
                            <svg class="--lightViolet" viewBox="0 0 32 32">
                                <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                            <div class="section__content-slider slider">
                                <div class="section__content-slide">
                                    <table class="section__table_table --lightViolet --mgb90">
                                        <thead>
                                        <tr>
                                            <th>
                                                <div>
                                                    <p>ЦЕНА КВАРТИРЫ,
                                                        <svg class="ruble" fill="#4B4A4A">
                                                            <use xlink:href="#Rouble"></use>
                                                        </svg>
                                                    </p>
                                                </div>
                                            </th>
                                            <th>
                                                <div><p>НАША КОМИССИЯ, %</p></div>
                                            </th>
                                            <th>
                                                <div>
                                                    <p>КОМИССИОННОЕ ВОЗНАГРАЖДЕНИЕ,
                                                        <svg class="ruble" fill="#4B4A4A">
                                                            <use xlink:href="#Rouble"></use>
                                                        </svg>
                                                        <br>(от величины ежемесячной арендной ставки)
                                                    </p>
                                                </div>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div><p>до <span class="--big">60</span> тыс</p></div>
                                            </td>
                                            <td rowspan="3">
                                                <div style="border: none;"><p><span class="--big">100</span></p></div>
                                            </td>
                                            <td rowspan="3"
                                                style="padding-right: 0;border: 0;border-left: 1px solid #8E67FF;">
                                                <div style="border: none;"><p>100% <br>(поскольку часть из этой комиссии
                                                        идет на оплату услуг агента наймодателя)</p></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-right: 0;border-right: 1px solid #8E67FF;">
                                                <div><p>от <span class="--big">60</span> до <span
                                                                class="--big">150</span> тыс</p></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-right: 0;border-right: 1px solid #8E67FF;">
                                                <div><p>от <span class="--big">150</span> тыс</p></div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="section__content-slide">
                                    <table class="section__table_table --lightViolet">
                                        <thead>
                                        <tr>
                                            <th>
                                                <div>
                                                    <p>ЦЕНА КВАРТИРЫ,
                                                        <svg class="ruble" fill="#4B4A4A">
                                                            <use xlink:href="#Rouble"></use>
                                                        </svg>
                                                    </p>
                                                </div>
                                            </th>
                                            <th>
                                                <div><p>НАША КОМИССИЯ, %</p></div>
                                            </th>
                                            <th>
                                                <div>
                                                    <p>КОМИССИОННОЕ ВОЗНАГРАЖДЕНИЕ,
                                                        <svg class="ruble" fill="#4B4A4A">
                                                            <use xlink:href="#Rouble"></use>
                                                        </svg>
                                                        <br>(от величины ежемесячной арендной ставки)
                                                    </p>
                                                </div>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div><p>до <span class="--big">100</span> тыс</p></div>
                                            </td>
                                            <td>
                                                <div><p><span class="--big">100</span></p></div>
                                            </td>
                                            <td>
                                                <div><p>100% <br>(поскольку часть из этой комиссии идет на оплату услуг
                                                        агента наймодателя)</p></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div><p>от <span class="--big">100</span> до <span
                                                                class="--big">200</span> тыс</p></div>
                                            </td>
                                            <td>
                                                <div><p><span class="--big">75</span></p></div>
                                            </td>
                                            <td>
                                                <div><p>min <span class="--big">100.000</span></p></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div><p>от <span class="--big">200</span> до <span
                                                                class="--big">1</span> млн</p></div>
                                            </td>
                                            <td>
                                                <div><p><span class="--big">50</span></p></div>
                                            </td>
                                            <td>
                                                <div><p>min <span class="--big">200.000</span></p></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div><p>от <span class="--big">1</span> млн</p></div>
                                            </td>
                                            <td>
                                                <div><p><span class="--big">25</span></p></div>
                                            </td>
                                            <td>
                                                <div><p>min <span class="--big">500.000</span></p></div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper">
                        <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/send-request-right-now-service-type.php');?>
                    </div>
                </div>
                <!-- Юрсопровождение blue -->
                <div class="section__content-slide blue-slide">
                    <div class="wrapper">
                        <h3 class="--mgb90">Юридическое сопровождение</h3>
                        <div class="section__dot-text --lightViolet --mgb60">
                            <p>Простой сделки на вторичном рынке недвижимости:</p>
                        </div>
                        <table class="section__table_table --lightViolet --mgb60">
                            <thead>
                            <tr>
                                <th>
                                    <div>
                                        <p>ЦЕНА КВАРТИРЫ,
                                            <svg class="ruble" fill="#4B4A4A">
                                                <use xlink:href="#Rouble"></use>
                                            </svg>
                                        </p>
                                    </div>
                                </th>
                                <th>
                                    <div><p>НАША КОМИССИЯ, %</p></div>
                                </th>
                                <th>
                                    <div>
                                        <p>В СЛУЧАЕ ПОКУПКИ,
                                            <svg class="ruble" fill="#4B4A4A">
                                                <use xlink:href="#Rouble"></use>
                                            </svg>
                                            <br>(но не менее)
                                        </p>
                                    </div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div><p>до <span class="--big">8</span> млн</p></div>
                                </td>
                                <td rowspan="4" style="border-right: 1px solid #8E67FF;">
                                    <div style="border: none;"><p><span class="--big">1</span></p></div>
                                </td>
                                <td>
                                    <div><p>min <span class="--big">60.000</span></p></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div><p>от <span class="--big">8</span> до <span class="--big">15</span> млн</p>
                                    </div>
                                </td>
                                <td>
                                    <div><p>max <span class="--big">120.000</span></p></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div><p>от <span class="--big">15</span> до <span class="--big">40</span> млн</p>
                                    </div>
                                </td>
                                <td>
                                    <div><p>max <span class="--big">300.000</span></p></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div><p>от <span class="--big">40</span> млн</p></div>
                                </td>
                                <td>
                                    <div><p>max <span class="--big">1</span> млн</p></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="section__dot-text --lightViolet --mgb20">
                            <p>Альтернативной сделки на вторичном рынке недвижимости:</p>
                        </div>
                        <div class="section__text">
                            <p class="w100 --mgb40 --pdl40"><b class="--big --lightViolet">1% от цены квартиры большей
                                    стоимости, <br>но не менее 100.000 руб.</b></p>

                        </div>
                    </div>
                    <div class="section__content-changer g-flex-column --grayBlock">
                        <div class="wrapper">
                            <p class="w100 --mgt90 --big"><b>В услугу юридического сопровождения простой и
                                    альтернативной сделки:</b></p>
                        </div>
                        <div class="section__content-tabs justify-center g-flex-between g-flex-align-center center --mgb60 --mgt60">
                            <div class="section__content-tab --hoveronly --lightViolet active">
                                Включается
                            </div>
                            <div class="section__content-tab --hoveronly --lightViolet">
                                Не включается
                            </div>
                        </div>
                        <svg class="--lightViolet" viewBox="0 0 32 32">
                            <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="section__content-slider slider --mgb90">
                            <div class="section__content-slide --pdl40">
                                <div class="wrapper">
                                    <ul>
                                        <li>Сбор и подготовка документов к сделке,</li>
                                        <li>Проверка юридической чистоты одного объекта,</li>
                                        <li>Подготовка и проведение аванса,</li>
                                        <li>Подготовка основного договора,</li>
                                        <li>Проведение и контроль сделки,</li>
                                        <li>Контроль регистрации и закрытия сделки.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="section__content-slide --pdl40">
                                <div class="wrapper">
                                    <ul>
                                        <li>Проверка нахождения участника сделки на учете в ПНД или НД,</li>
                                        <li>Проверка факта выдачи доверенности, завещания,</li>
                                        <li>Ускоренное получение документов (БТИ, Выписка из ЕГРН и т.п.)</li>
                                        <li>Получение согласия органов опеки на сделку,</li>
                                        <li>Одобрение объекта по ипотеке (подача документов, взаимодействие с менеджером
                                            банка и оценщиком),
                                        </li>
                                        <li>Стоимость услуг регистраторов сделки</li>
                                        <li>Стоимость услуг банка (аренда банковской ячейки, проверка и/или пересчет
                                            купюр и т.п.),
                                        </li>
                                        <li>Стоимость оценки объекта,</li>
                                        <li>Стоимость услуг нотариуса (составление основного договора, заверение
                                            доверенности, согласия и т.п.),
                                        </li>
                                        <li>Государственные пошлины.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="section__dot-text --lightViolet --mgb20 --mgt60">
                            <p>Покупки квартиры в новостройке:</p>
                        </div>
                        <div class="section__text">
                            <p class="w100 --mgb40 --pdl40"><b class="--big --lightViolet">1% от цены квартиры, но не
                                    более 100.000 руб.</b></p>
                        </div>
                        <div class="section__dot-text --lightViolet --mgb20 --mgt60">
                            <p>Сделки аренды/найма недвижимости:</p>
                        </div>
                        <div class="section__text">
                            <p class="w100 --mgb40 --pdl40"><b class="--big --lightViolet">1% от величины ежемесячной
                                    арендной ставки
                                    за объект недвижимости,</b> но не менее:</p>
                            <ul class="--pdl40 --mgb40 --big">
                                <li>7 000 рублей по Москве,</li>
                                <li>10 000 рублей по Московской области.</li>
                            </ul>
                            <p class="w100 --big">В стоимость юридического сопровождения не включаются услуги по
                                регистрации договора.</p>
                        </div>
                    </div>
                    <div class="section__calc section__calc_1row --mgt50 --lightViolet">
                        <div class="wrapper">
                            <h3 class="--mgb60">Введите ориентировочную стоимость продаваемой <br>
                                и/или приобретаемой квартиры, чтобы узнать <br>
                                <span class="--lightViolet">размер нашей комиссии</span>
                            </h3>
                            <div class="section__content-changer g-flex-column">
                                <div class="section__content-tabs g-flex-between g-flex-align-center center --mgb60 --min --lightViolet">
                                    <div class="section__content-tab --hoveronly --lightViolet active">
                                        Сопровождение простой сделки
                                    </div>
                                    <div class="section__content-tab --hoveronly --lightViolet">
                                        Покупка квартиры в новостройке
                                    </div>
                                    <div class="section__content-tab --hoveronly --lightViolet">
                                        Сопровождение альтернативной сделки
                                    </div>
                                </div>
                                <svg class="--lightViolet" viewBox="0 0 32 32">
                                    <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                                <div class="section__content-slider slider">
                                    <div class="section__content-slide">
                                        <button class="js__clear-inputs section__calc_clear --mgb30">
                                            <svg class="icon">
                                                <use xlink:href="#clear"></use>
                                            </svg>
                                            сбросить фильтр
                                        </button>
                                        <div class="section__calc_input js__ursopr-calc1">
                                            <div class="section__calc_input-item">
                                                <p>Цена объекта,
                                                    <svg class="ruble" fill="#4B4A4A">
                                                        <use xlink:href="#Rouble"></use>
                                                    </svg>
                                                </p>
                                                <input type="text" placeholder="4 500 000">
                                            </div>
                                            <div class="section__calc_input-item komiss">
                                                <p>Комиссия, %</p>
                                                <span>1,0</span>
                                            </div>
                                            <div class="section__calc_input-item result">
                                                <p>Итоговая комиссия,
                                                    <svg class="ruble" fill="#4B4A4A">
                                                        <use xlink:href="#Rouble"></use>
                                                    </svg>
                                                </p>
                                                <span>60 000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section__content-slide">
                                        <button class="js__clear-inputs section__calc_clear --mgb30">
                                            <svg class="icon">
                                                <use xlink:href="#clear"></use>
                                            </svg>
                                            сбросить фильтр
                                        </button>
                                        <div class="section__calc_input js__ursopr-calc2">
                                            <div class="section__calc_input-item">
                                                <p>Цена объекта,
                                                    <svg class="ruble" fill="#4B4A4A">
                                                        <use xlink:href="#Rouble"></use>
                                                    </svg>
                                                </p>
                                                <input type="text" placeholder="12 000 000">
                                            </div>
                                            <div class="section__calc_input-item komiss">
                                                <p>Комиссия, %</p>
                                                <span>1,0</span>
                                            </div>
                                            <div class="section__calc_input-item result">
                                                <p>Итоговая комиссия,
                                                    <svg class="ruble" fill="#4B4A4A">
                                                        <use xlink:href="#Rouble"></use>
                                                    </svg>
                                                </p>
                                                <span>100 000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section__content-slide">
                                        <button class="js__clear-inputs section__calc_clear --mgb30">
                                            <svg class="icon">
                                                <use xlink:href="#clear"></use>
                                            </svg>
                                            сбросить фильтр
                                        </button>
                                        <div class="section__calc_input clear-inputs-2 js__ursopr-calc3 --height">
                                            <div class="section__calc_input-row">
                                                <div class="section__calc_input-item">
                                                    <p>Цена продаваемого
                                                        объекта,
                                                        <svg class="ruble" fill="#4B4A4A">
                                                            <use xlink:href="#Rouble"></use>
                                                        </svg>
                                                    </p>
                                                    <input type="text" placeholder="12 000 000" class="inputA">
                                                </div>
                                                <div class="section__calc_input-item">
                                                    <p>Цена приобретаемого
                                                        объекта,
                                                        <svg class="ruble" fill="#4B4A4A">
                                                            <use xlink:href="#Rouble"></use>
                                                        </svg>
                                                    </p>
                                                    <input type="text" placeholder="8 000 000" class="inputB">
                                                </div>
                                            </div>
                                            <div class="section__calc_input-item komiss">
                                                <p>Комиссия, %</p>
                                                <span>1,0</span>
                                            </div>
                                            <div class="section__calc_input-item result">
                                                <p>Итоговая комиссия,
                                                    <svg class="ruble" fill="#4B4A4A">
                                                        <use xlink:href="#Rouble"></use>
                                                    </svg>
                                                </p>
                                                <span>100 000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper --mgt90">
                        <div class="section__text">
                            <p class="--big --uppercase"><b>Отдельно оплачиваемые услуги:</b></p>
                            <p class="--big --mgt40 w100"><b>1.&nbsp;&nbsp;&nbsp;&nbsp;Одобрение сделки в органах опеки
                                    и попечительства</b></p>
                            <p class="--pdl40 w100 --mgt20"><b><span class="--big --lightViolet">20 000 рублей за одно одобрение</span></b>
                            </p>
                            <p class="--big --mgt60 w100"><b>2.&nbsp;&nbsp;&nbsp;&nbsp;Одобрение объекта в банке
                                    (ипотека)</b></p>
                            <p class="--pdl40 w100 --mgt20"><b><span class="--big --lightViolet">20 000 рублей за одно одобрение</span></b>
                            </p>
                            <p class="--big --mgt60 w100"><b>3.&nbsp;&nbsp;&nbsp;&nbsp;Проверка юридической чистоты
                                    объекта приобретаемого у клиентов Dream Realty с предоставлением официального
                                    отчета:</b></p>
                            <p class="--pdl40 w100 --mgt20"><b><span class="--big --lightViolet">20 000 рублей за каждую проверку</span></b>
                            </p>
                        </div>

                        <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/send-request-right-now-service-type.php');?>

                    </div>
                </div>
                <!-- Ипотека pink -->
                <div class="section__content-slide pink-slide">
                    <div class="wrapper">
                        <h3 class="--mgb60">Ипотека</h3>
                        <h3 class="--lightViolet --mgb60">Что входит в стоимость наших услуг?</h3>
                        <div class="section__services --mgb90">
                            <div class="section__service">
                                <img loading="lazy" src="/html/assets/svg/FindStats--lightViolet.svg" alt=""
                                     class="section__service_img">
                                <div class="section__service_line"></div>
                                <p><b>Экспертный анализ:</b></p>
                                <ul>
                                    <li>вашей ситуации;</li>
                                    <li>кредитной истории.</li>
                                </ul>
                            </div>
                            <div class="section__service">
                                <img loading="lazy" src="/html/assets/svg/TimePgone--lightViolet.svg" alt=""
                                     class="section__service_img">
                                <div class="section__service_line"></div>
                                <p><b>24/7</b></p>
                                <p>Консультационная <br>и моральная поддержка</p>
                            </div>
                            <div class="section__service">
                                <img loading="lazy" src="/html/assets/svg/Bank--lightViolet100.svg" alt=""
                                     class="section__service_img">
                                <div class="section__service_line"></div>
                                <p><b>Подготовка документов и подача заявки в несколько банков с учетом:</b></p>
                                <ul>
                                    <li>требований каждого из них;</li>
                                    <li>распространенных причин отказа.</li>
                                </ul>
                            </div>
                            <div class="section__service">
                                <img loading="lazy" src="/html/assets/svg/Credit--lightViolet.svg" alt=""
                                     class="section__service_img">
                                <div class="section__service_line"></div>
                                <p><b>Выбор оптимальной программы кредитования с учетом:</b></p>
                                <ul>
                                    <li>кредитной ставки;</li>
                                    <li>расходов по ипотеке;</li>
                                    <li>ежемесячного платежа.</li>
                                </ul>
                            </div>
                            <div class="section__service">
                                <img loading="lazy" src="/html/assets/svg/HeadPhones--lightViolet.svg" alt=""
                                     class="section__service_img">
                                <div class="section__service_line"></div>
                                <p><b>Оптимизация расходов до 1 млн. рублей за счет:</b></p>
                                <ul>
                                    <li>понижения процентной ставки;</li>
                                    <li>стоимости страховки;</li>
                                    <li>партнерских преференций.</li>
                                </ul>
                            </div>
                            <div class="section__service">
                                <img loading="lazy" src="/html/assets/svg/PenDocument--lightViolet.svg" alt=""
                                     class="section__service_img">
                                <div class="section__service_line"></div>
                                <p><b>Полное сопровождение сделки:</b></p>
                                <ul>
                                    <li>проверка документов на объект;</li>
                                    <li>вызов оценщика;</li>
                                    <li>общение со страховой компании и менеджерами банка;</li>
                                    <li>присутствие на подписании договора.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="section__text">
                            <p style="font-size: 20px;" class="--big w100">Мы не берем <b class="--lightViolet">никаких
                                    авансов, скрытых комиссий и предоплат</b>. А в случае одобрения ипотеки или
                                рефинансирования <b class="--lightViolet">не берем традиционный процент от суммы
                                    кредита</b>, ограничиваясь <br>
                                <span class="--big" style="text-transform: uppercase;"><b class="--lightViolet">фиксированной суммой в 100 тысяч рублей!</b></span>
                            </p>
                            <p style="font-size: 20px;" class="--big mt-3 w100"><b class="--lightViolet">Если</b> по
                                каким-то причинам <b class="--lightViolet">мы не смогли вам помочь</b>, то вся <b
                                        class="--lightViolet">наша работа будет</b> для вас <b class="--lightViolet">абсолютно
                                    бесплатной</b>.</p>
                        </div>

                        <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/send-request-right-now-service-type-comment.php');?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="wrapper">
            <div class="section__text">
                <p class="w100 --big --mgb40">Вполне возможно, обратившись к частному риэлтору, вы услышите более низкую
                    стоимость за услугу, вопрос лишь объема и качества предоставления этой услуги, а также возможности
                    вашего контроля за процессом и цены ошибки, в случае, если она будет допущена.</p>
                <p class="w100 text-align-end --mgb90"><b class="--big --lightViolet">Недвижимость — это не та сфера,
                        <br>где риск считается оправданным!</b></p>
            </div>
            <div class="section__big-text --mgb60">
                <p>СКИДКИ <br>И БОНУСЫ</p>
            </div>
        </div>
    </section>

    <section class="section --grayBlock --pdb90" id="sale_block">
        <div class="wrapper">
            <div class="section__text --mgb60" style="text-transform: uppercase;">
                <p class="w100"><b class="--big"><span class="--superBig --lightViolet">Скидка 5%</span> от величины
                        Тарифов предоставляется когда:</b></p>
            </div>
            <div class="section__num-list --mgb90">
                <ul>
                    <li>
                        <div class="num">1</div>
                        <p class="text">вы обращаетесь к нам повторно,</p>
                    </li>
                    <li>
                        <div class="num">2</div>
                        <p class="text">вы пришли к нам по рекомендации наших клиентов,</p>
                    </li>
                    <li>
                        <div class="num">3</div>
                        <p class="text">вы являетесь другом или членом семьи сотрудника Dream Realty,</p>
                    </li>
                    <li>
                        <div class="num">4</div>
                        <p class="text">вы относитесь к особенной категории клиентов: пенсионеры, малоимущие и/или
                            многодетные семьи, инвалиды всех категорий, ветераны труда,</p>
                    </li>
                    <li>
                        <div class="num">5</div>
                        <p class="text">вы обратились к нам в рамках акции или спецпредложения.</p>
                    </li>
                </ul>
            </div>
            <div class="section__codex g-flex-between g-flex-align-stretch --mgb90">
                <div class="section__codex_item g-flex-align-center g-flex-justify-center">
                    <p><b>Ваша скидка растет с каждым последующим обращением и может <span class="--lightViolet">достигнуть 10%!</span></b>
                    </p>
                </div>
                <div class="section__codex_item g-flex-align-center g-flex-justify-center">
                    <p><b>Вы можете <a href="https://dreamrealty.pro/" class="--lightViolet" target="_blank">поделиться
                                своей скидкой</a> с друзьями и близкими и/или <span class="--lightViolet">получить денежное вознаграждение</span>
                            за рекомендацию. </b></p>
                </div>
            </div>
            <div class="section__mini-info">
                <svg class="icon">
                    <use xlink:href="#Info"></use>
                </svg>
                <p>Скидки и бонусы не распространяются на услуги кредитного брокера.</p>
            </div>
            <div class="section__exception__rules">
                <div class="exception__rule__subtitle">Скидки и бонусы не распространяются в следующих случаях</div>
                <ul class="exception__rule__ul">
                    <li class="exception__rule__li">
                        ⇨ услуги кредитных брокеров
                    </li>
                    <li class="exception__rule__li">
                        ⇨ отдельно оплачиваемые юридические услуги
                    </li>
                    <li class="exception__rule__li">
                        ⇨ при минимальной стоимости услуг
                    </li>
                    <li class="exception__rule__li">
                        продажа (150 000 р.)
                    </li>
                    <li class="exception__rule__li">
                        альтернатива (300 000 р.)
                    </li>
                    <li class="exception__rule__li">
                        юридическое сопровождение (60 000 р.)
                    </li>
                </ul>
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

                <a href="<?= $options['youtube'] ?>" class="section__edge-button wow fadeInLeft   g-flex-align-center --mgt30">
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

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>