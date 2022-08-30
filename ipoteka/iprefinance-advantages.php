<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ПРЕИМУЩЕСТВА ПРИ РЕФИНАНСИРОВАНИИ");
?>

    <!-- Header -->
    <header class="header g-flex-align-center" style="background-image: url(/html/assets/img//header-bg--ipoteka.png);">
        <div class="wrapper">
            <h1 class="--white">Преимущества рефинансирования ипотеки с нами</h1>
            <p>Когда время и комфорт дороже денег</p>
            <div class="header__buttons g-flex-align-stretch">
                <a href="#formBlockSmooth" class="btn --pink js__smoothScroll">Оставить заявку</a>
            </div>
        <div class="header__soc">
                <a href="https://t.me/FromDreamToRealty">
                    <svg class="icon">
                        <use xlink:href="#Telegram"></use>
                    </svg>
                </a>
                <a href="tel:84955422353">
                    <svg class="icon">
                        <use xlink:href="#PhoneCall"></use>
                    </svg>
                </a>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Main -->
    <main>
        
        <section class="section advantages-page grayHalfBG">
            <div class="wrapper">
                <div class="section__big-text --mgb60">
                    <p>агентство</p>
                    <p class="text-align-end">мечты</p>
                </div>
                <div class="section__advantages--full g-flex-wrap g-flex-between">
                    <a href="#advant_pop-up1" class="section__advantage g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/illustrations/violet/01.svg);background-position: center -30px;">
                        <span class="num">1</span>
                        <div class="g-flex-align-center g-flex-justify-center"><p><span class="--pink">Максимально быстро одобряем</span> рефинансирование</p></div>
                    </a>
                    <a href="#advant_pop-up2" class="section__advantage g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/illustrations/violet/02.svg);">
                        <span class="num">2</span>
                        <div class="g-flex-align-center g-flex-justify-center"><p>Рефинансируем ипотечный кредит <span class="--pink">по 2-м документам</span></p></div>
                    </a>
                    <a href="#advant_pop-up3" class="section__advantage g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/illustrations/violet/04.svg);background-position: center -20px;">
                        <span class="num">3</span>
                        <div class="g-flex-align-center g-flex-justify-center"><p>Отправим документы сразу <span class="--pink">в несколько банков</span></p></div>
                    </a>
                    <a href="#advant_pop-up4" class="section__advantage g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/illustrations/violet/06.svg);background-position: center 50px;">
                        <span class="num">4</span>
                        <div class="g-flex-align-center g-flex-justify-center"><p>Снизим <span class="--pink">кредитную ставку до 2%</span></p></div>
                    </a>
                    <a href="#advant_pop-up5" class="section__advantage g-flex-column g-flex-justify-end" style="background-image: url(/html/assets/img/illustrations/violet/05.svg);background-position: center -30px;">
                        <span class="num">5</span>
                        <div class="g-flex-align-center g-flex-justify-center"><p>Уменьшим размер <span class="--pink">сежемесячных платежей до 50%</span></p></div>
                    </a>
                </div>
            </div>
        </section>

        <section class="section how-it-works">
            <div class="wrapper">
                <div class="section__big-text --mgb60">
                    <p>Команда</p>
                </div>
                <div class="section__content-changer g-flex-column">
                    <div class="section__content-tabs top g-flex-justify-center g-flex-align-center fit-content center --mgb60">
                        <div class="section__content-tab active">
                            Кредитные брокеры
                        </div>
                        <div class="section__content-tab">
                            Юристы
                        </div>
                    </div>
                    <svg class="--pink" viewBox="0 0 32 32">
                        <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="section__content-slider slider">
                        <div class="section__content-slide">
                            <div class="section__title_buttons g-flex-between g-flex-align-center --mgb60">
                                <h3>Кредитные брокеры</h3>
                            </div>
                            <div class="section__peoples g-flex-wrap g-flex-between g-flex-align-start">
                            <?                      
                                    $dbItems = \Bitrix\Iblock\ElementTable::getList(array(
                                                    'select' => array('*'),
                                                    'filter' => array('IBLOCK_ID' => 8, 'IBLOCK_SECTION_ID' => 7)
                                                ));
                                    while ($arItem = $dbItems->fetch()){
                                        $dbProperty = \CIBlockElement::getProperty(
                                            $arItem['IBLOCK_ID'],
                                            $arItem['ID']
                                        ); 
                                        while($arProperty = $dbProperty->Fetch()){  
                                            $arItem['PROPERTIES'][] = $arProperty;
                                        }
                                        //print_r($arItem);    
                                        //echo CFile::GetPath($arItem['PREVIEW_PICTURE']);
                                        ?>
                                        <a href="/team/detail.php?person=<?=$arItem['ID']?>/" class="section__people">
                                            <div class="section__people_avatar">
                                                <img loading="lazy" src="<?=CFile::GetPath($arItem['PREVIEW_PICTURE'])?>" alt="">
                                            </div>
                                            <p class="section__people_name"><?=$arItem['NAME']?></p>
                                            <p class="section__people_phone"><?=$arItem['PROPERTIES']['0']['VALUE']?></p>
                                          <!--  <p class="section__people_feeds">25 отзывов</p>!-->
                                    
                                        </a>
                                        <?
                                    }
                                ?>
                            </div>
                            <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                                <h3>Заказать <span class="--pink">консультацию кредитного брокера</span></h3>
                                <label>
                                    <input type="text" placeholder="Имя*" required>
                                </label>
                                <label>
                                    <input type="tel" class="phone" placeholder="Телефон*" required>
                                </label>
                                <button type="submit" class="btn --pink">Заказать консультацию</button>
                                <label>
                                    <select multiple="multiple" data-placeholder="Тип услуги*" required>
                                        <option value="">&nbsp;</option>
                                        <option>ипотека</option>
                                        <option>рефинансирование</option>
                                        <option>проверка кредитной истории</option>
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
                        <div class="section__content-slide">
                            <div class="section__title_buttons g-flex-between g-flex-align-center --mgb60">
                                <h3>Юристы</h3>
                            </div>
                            <div class="section__peoples g-flex-wrap g-flex-between g-flex-align-start">
                            <?                      
                                    $dbItems = \Bitrix\Iblock\ElementTable::getList(array(
                                                    'select' => array('*'),
                                                    'filter' => array('IBLOCK_ID' => 8, 'IBLOCK_SECTION_ID' => 6)
                                                ));
                                    while ($arItem = $dbItems->fetch()){
                                        $dbProperty = \CIBlockElement::getProperty(
                                            $arItem['IBLOCK_ID'],
                                            $arItem['ID']
                                        ); 
                                        while($arProperty = $dbProperty->Fetch()){  
                                            $arItem['PROPERTIES'][] = $arProperty;
                                        }
                                        //print_r($arItem);    
                                        //echo CFile::GetPath($arItem['PREVIEW_PICTURE']);
                                        ?>
                                        <a href="/team/detail.php?person=<?=$arItem['ID']?>/" class="section__people">
                                            <div class="section__people_avatar">
                                                <img loading="lazy" src="<?=CFile::GetPath($arItem['PREVIEW_PICTURE'])?>" alt="">
                                            </div>
                                            <p class="section__people_name"><?=$arItem['NAME']?></p>
                                            <p class="section__people_phone"><?=$arItem['PROPERTIES']['0']['VALUE']?></p>
                                          <!--  <p class="section__people_feeds">25 отзывов</p>!-->
                                    
                                        </a>
                                        <?
                                    }
                                ?>
                            </div>
                            <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30" id="formBlockSmooth">
                                <h3>Заказать <span class="--pink">консультацию юриста</span></h3>
                                <label>
                                    <input type="text" placeholder="Имя*" required>
                                </label>
                                <label>
                                    <input type="tel" class="phone" placeholder="Телефон*" required>
                                </label>
                                <button type="submit" class="btn --pink">Заказать консультацию</button>
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
            </div>
        </section>


        <section class="section how-it-works">
            <div class="wrapper">
                <h2 class="section__title --mgb20">Хотите узнать, <span class="--pink">как мы будем рефинансировать</span> вам ипотеку?</h2>
                <p class="section__descriptor descriptor --mgb60">Одобрением вашей ипотеки будет заниматься кредитный брокер, а не обычный агент</p>
                <div class="section__content-changer g-flex-column">
                    <div class="section__content-slider slider">
                        <div class="section__content-slide">
                            <div class="section__content-advantages g-flex-wrap g-flex-between g-flex-align-start">
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/ErrorFind--pink.svg" alt="">
                                    <p>Проверит вашу кредитную историю</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/DoneCircle--pink.svg" alt="">
                                    <p>Оценит шансы на одобрение ипотеки</p>
                                </div>
                                <div class="section__content-advantage g-flex-column g-flex-align-start">
                                    <img loading="lazy" src="/html/assets/svg/RoubleHands--pink.svg" alt="">
                                    <p>Подберет лучшие ипотечные программы с учетом вашей ситуации</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section cta-big-text">
            <div class="wrapper relative">
                <div class="section__big-text --mgb60">
                    <p>Остались <br>вопросы?</p>
                </div>
                <a href="#orderConsultationModal" class="js__open-hash_pop-up btn section__absolute-button right --pink">
                <svg class="icon">
                        <use xlink:href="#PhoneCall"></use>
                    </svg>
                    Заказать звонок
                </a>
            </div>
        </section>

    <div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center">
        <div class="wrapper">
            <div class="text-block">
                
                <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Заказать <span class="--pink">звонок</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <button type="submit" class="btn --pink">Заказать звонок</button>
                    <label>
                        <select data-placeholder="Тип услуги*" required>
                            <option value="">&nbsp;</option>
                            <option>ипотека</option>
                            <option>рефинансирование</option>
                            <option>проверка кредитной истории</option>
                        </select>
                    </label>
                    <label>
                        <input type="text" placeholder="Комментарии">
                    </label>
                    <label class="inputCheckbox">
                        <input type="checkbox" required checked>
                        <span>Нажимая на кнопку "Заказать звонок", вы даете согласие на обработку персональных данных</span>
                    </label>
                </form>
            </div>
        </div>
    </div>

    <div class="advantages-pop-up pop-up g-flex-column --pdb90" id="advant_pop-up1">
        <div class="content wrapper">
            <section class="section pop-up__header">
                <div class="pop-up__close">
                    <svg class="icon">
                        <use xlink:href="#Close"></use>
                    </svg>
                </div>
                <div class="wrapper">
                    <h3 class="title">Свой агент <span class="--pink">в каждом районе</span> Москвы и Подмосковья</h3>
                </div>
                <div class="pop-up__header_gray g-flex-column --next_advantages">
                    <div class="wrapper">
                        <div class="pop-up__header_top g-flex-between">
                            <div class="pop-up__header_img">
                                <img loading="lazy" src="/html/assets/img/illustrations/violet/01.svg" alt="">
                            </div>
                            <div class="pop-up__header_text">
                                <div class="num">№1</div>
                                <p>Суперагент Dream Realty <b>живет и работает в том же районе, где находится квартира вашей мечты</b>. Он знает характеристики каждого дома и нюансы продаваемых квартир.</p>
                                <p>Он ваш сосед, заинтересованный в обратной связи и рекомендациях от вас.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="wrapper">
                    <div class="advantage-pop-up__differences g-flex-between g-flex-align-start">
                        <div class="advantage-pop-up__difference">
                            <div class="advantage-pop-up__difference_title g-flex-align-center g-flex-justify-center --gray">
                                <img loading="lazy" src="/html/assets/svg/AdvantDiff1.svg" alt="">
                                <p>Обычный агент <br>по недвижимости</p>
                            </div>
                            <ul>
                                <li>владеет информацией о ценах в районе из рекламных источников</li>
                                <li>поделится общей информацией о районе из Google</li>
                                <li>предлагает смотреть все, что “подходит” на первый взгляд</li>
                                <li>“застревает в пробках” и может пропустить просмотр квартиры, оставив вас один на один с продавцом</li>
                                <li>занят показами и просмотрами квартир по всему городу</li>
                                <li>склоняет к покупке той квартиры, где продавец или его агент обещали “отблагодарить”</li>
                            </ul>
                        </div>
                        <div class="advantage-pop-up__difference">
                            <div class="advantage-pop-up__difference_title g-flex-align-center g-flex-justify-center --pink">
                                <img loading="lazy" src="/html/assets/svg/AdvantDiff1.svg" alt="">
                                <p>Обычный агент <br>по недвижимости</p>
                            </div>
                            <ul>
                                <li>ориентирует по стоимости квартиры, исходя из ваших пожеланий и текущих сделок в районе</li>
                                <li>пользуется инфраструктурой района, знает историю строительства и качество экплуатации каждого дома</li>
                                <li>отсеивает “неликвид” еще до просмотра, экономя ваше время и бюджет </li>
                                <li>смотрит квартиры лично, торгуясь по цене в вашу пользу</li>
                                <li>всегда рядом и готов обсудить возникающие вопросы за чашкой кофе</li>
                                <li>объективно рассказывает о плюсах и минусах каждой квартиры, поскольку получает вознаграждение от вас</li>
                            </ul>
                        </div>
                    </div>
                    <div class="section__big-text --mgt40 --mgb20 for-pop-up">
                        <p>ВАША ВЫГОДА</p>
                    </div>
                    <h3 class="--mgb90">покупка квартиры проходит <span class="--pink">легко <br>и с ощутимой выгодой</span></h3>
                    <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key">
                        <h3>Выбрать <span class="--pink">районного агента</span></h3>
                        <label>
                            <input type="text" placeholder="Имя*" required>
                        </label>
                        <label>
                            <input type="tel" class="phone" placeholder="Телефон*" required>
                        </label>
                        <button type="submit" class="btn --pink">Оставить заявку</button>
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
                            <span>Нажимая на кнопку "Оставить заявку", вы даете согласие на обработку персональных данных</span>
                        </label>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <div class="advantages-pop-up pop-up g-flex-column --pdb90" id="advant_pop-up2">
        <div class="content wrapper">
            <section class="section pop-up__header">
                <div class="pop-up__close">
                    <svg class="icon">
                        <use xlink:href="#Close"></use>
                    </svg>
                </div>
                <div class="wrapper">
                    <h3 class="title">Оцениваем <span class="--pink">Инвестиционный потенциал</span></h3>
                </div>
                <div class="pop-up__header_gray g-flex-column">
                    <div class="wrapper">
                        <div class="pop-up__header_top g-flex-between">
                            <div class="pop-up__header_img">
                                <img loading="lazy" src="/html/assets/img/illustrations/violet/02.svg" alt="">
                            </div>
                            <div class="pop-up__header_text">
                                <div class="num">№2</div>
                                <p>Наши суперагенты <b>детально анализируют каждую квартиру</b>, которую рекомендуют к просмотру. Они изучают и оценивают локацию, уровень дома, качество постройки, видовые характеристики, планировочные решения и другие факторы.</p>
                                <p>Неважно, вы покупаете квартиру для жизни, для сдачи в аренду или дальнейшей перепродажи, наш агент аргументированно посоветует только то, что <b>будет расти в цене</b> и даст <b>максимальную доходность при продаже</b>. Поверьте, это дорогого стоит! </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="wrapper">
                    <div class="section__big-text --mgt40 --mgb20 for-pop-up">
                        <p>ВАША ВЫГОДА</p>
                    </div>
                    <h3 class="--mgb90">вы получаете <span class="--pink">инвестиционно привлекательную</span> <br>квартиру и <span class="--pink">сверхприбыль</span></h3>
                    <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key">
                        <h3>Заказать <span class="--pink">подбор</span> квартиры прямо сейчас</h3>
                        <label>
                            <input type="text" placeholder="Имя*" required>
                        </label>
                        <label>
                            <input type="tel" class="phone" placeholder="Телефон*" required>
                        </label>
                        <button type="submit" class="btn --pink">Оставить заявку</button>
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
                            <span>Нажимая на кнопку "Оставить заявку", вы даете согласие на обработку персональных данных</span>
                        </label>
                    </form>
                </div>
            </section>
        </div>
    </div>
    
    <div class="advantages-pop-up pop-up g-flex-column --pdb90" id="advant_pop-up3">
        <div class="content wrapper">
            <section class="section pop-up__header">
                <div class="pop-up__close">
                    <svg class="icon">
                        <use xlink:href="#Close"></use>
                    </svg>
                </div>
                <div class="wrapper">
                    <h3 class="title"><span class="--pink">Помогаем сформировать бюджет</span> покупки</h3>
                </div>
                <div class="pop-up__header_gray g-flex-column">
                    <div class="wrapper">
                        <div class="pop-up__header_top g-flex-between">
                            <div class="pop-up__header_img">
                                <img loading="lazy" src="/html/assets/img/illustrations/violet/03.svg" alt="">
                            </div>
                            <div class="pop-up__header_text">
                                <div class="num">№3</div>
                                <p>Бывают ситуации, когда в процессе выбора квартиры <b>захотелось не идти на компромиссы и увеличить бюджет</b>. И чтобы заветная сделка состоялась, наши суперагенты помогут вам использовать дополнительные источники его увеличения, например:</p>
                                <ul>
                                    <li><a href="">одобрить ипотеку</a> (в т.ч. льготную) на фиксированных и привлекательных условиях,</li>
                                    <li><a href="">согласовать получение материнского капитала,</a></li>
                                    <li><a href="">продать другую недвижимость.</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="wrapper">
                    <a href="tarifs.html#hash__buy" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt60">
                        <div class="arrow g-flex-align-center g-flex-justify-center">
                            <svg class="icon">
                                <use xlink:href="#ArrowSquare"></use>
                            </svg>
                        </div>
                        Наши тарифы
                    </a>
                    <div class="section__big-text --mgt40 --mgb20 for-pop-up">
                        <p>ВАША ВЫГОДА</p>
                    </div>
                    <h3 class="--mgb90">вы выбираете квартиру, <span class="--pink">не ограничивая себя в бюджете</span></h3>
                    <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key">
                        <h3>Заказать <span class="--pink">консультацию кредитного брокера</span></h3>
                        <label>
                            <input type="text" placeholder="Имя*" required>
                        </label>
                        <label>
                            <input type="tel" class="phone" placeholder="Телефон*" required>
                        </label>
                        <button type="submit" class="btn --pink">Оставить заявку</button>
                        <label>
                            <select data-placeholder="Тип услуги*" required>
                                <option value="">&nbsp;</option>
                                <option>Ипотека</option>
                                <option>Рефинансирование</option>
                                <option>Проверка кредитной истории</option>
                            </select>
                        </label>
                        <label>
                            <input type="text" placeholder="Комментарии">
                        </label>
                        <label class="inputCheckbox">
                            <input type="checkbox" required checked>
                            <span>Нажимая на кнопку "Оставить заявку", вы даете согласие на обработку персональных данных</span>
                        </label>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <div class="advantages-pop-up pop-up g-flex-column --pdb90" id="advant_pop-up4">
        <div class="content wrapper">
            <section class="section pop-up__header">
                <div class="pop-up__close">
                    <svg class="icon">
                        <use xlink:href="#Close"></use>
                    </svg>
                </div>
                <div class="wrapper">
                    <h3 class="title"><span class="--pink">Еженедельные отчеты</span> на e-mail</h3>
                </div>
                <div class="pop-up__header_gray g-flex-column">
                    <div class="wrapper">
                        <div class="pop-up__header_top g-flex-between g-flex-align-stretch">
                            <div class="pop-up__header_img">
                                <img loading="lazy" src="/html/assets/img/illustrations/violet/04.svg" alt="">
                            </div>
                            <div class="pop-up__header_text">
                                <div class="num">№4</div>
                                <p><b>Каждую неделю</b> суперагент Dream Realty будет отправлять вам совершенно прозрачную информацию:</p>
                                <ul>
                                    <li>сколько <b>отобрано квартир</b> для просмотра,</li>
                                    <li>сколько <b>проведено просмотров</b> и какие из них повторно,</li>
                                    <li><b>результаты переговоров</b> по цене и условиям будущей сделки.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pop-up__header_bottom">
                            <p>Наши отчеты – это удобный способ отслеживать объем и качество проделанной работы. <br>Мы убеждены в том, что каждый такой отчет повысит доверие к нам и приведет к выгодной и комфортной сделке.</p>
                            <a href="#download_4up" data-id="#advant_pop-up4" class="js__pop_up_smoothScroll"><img loading="lazy" src="/html/assets/svg/Download--pink.svg" alt="">Скачать образец еженедельного отчета </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="wrapper">
                    <div class="section__big-text --mgt40 --mgb20 for-pop-up">
                        <p>ВАША ВЫГОДА</p>
                    </div>
                    <h3 class="--mgb90">Вы <span class="--pink">контролируете весь процесс</span> покупки квартиры</h3>
                    <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key" id="download_4up--key">
                        <h3>Скачать <span class="--pink">образец еженедельного отчета</span></h3>
                        <label>
                            <input type="text" placeholder="Имя*" required>
                        </label>
                        <label>
                            <input type="tel" class="phone" placeholder="Телефон*" required>
                        </label>
                        <label></label>
                        <label>
                            <input type="email" placeholder="E-mail*" required>
                        </label>
                        <button type="submit" class="btn --pink">Скачать</button>
                        <label class="inputCheckbox">
                            <input type="checkbox" required checked>
                            <span>Нажимая на кнопку "Скачать", вы даете согласие на обработку персональных данных</span>
                        </label>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <div class="advantages-pop-up pop-up g-flex-column --pdb90" id="advant_pop-up5">
        <div class="content wrapper">
            <section class="section pop-up__header">
                <div class="pop-up__close">
                    <svg class="icon">
                        <use xlink:href="#Close"></use>
                    </svg>
                </div>
                <div class="wrapper">
                    <h3 class="title"><span class="--pink">Профильный юрист</span> на авансе и сделке</h3>
                </div>
                <div class="pop-up__header_gray g-flex-column">
                    <div class="wrapper">
                        <div class="pop-up__header_top g-flex-between g-flex-align-stretch">
                            <div class="pop-up__header_img">
                                <img loading="lazy" src="/html/assets/img/illustrations/violet/05.svg" alt="">
                            </div>
                            <div class="pop-up__header_text">
                                <div class="num">№5</div>
                                <p>Еще до начала покупки объекта наш юрист проконсультирует вас по всем вопросам и поделится своим профессиональным мнением.</p>
                                <p>А как только районный агент найдет вам квартиру мечты, он подключится ко всем переговорам, встречам и проверит юридическую чистоту квартиры.</p>
                                <p>Наш юрист оптимизирует все расходы по будущей сделке. <br>Работа юриста включена в стоимость услуги.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="wrapper">
                    <div class="section__big-text --mgt40 --mgb20 for-pop-up">
                        <p>ВАША ВЫГОДА</p>
                    </div>
                    <h3 class="--mgb90">Вы <span class="--pink">чувствуете себя спокойно <br>
                        и уверены в безопасности</span> сделки</h3>
                    <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key">
                        <h3>Заказать <span class="--pink">консультацию</span> юриста по недвижимости</h3>
                        <label>
                            <input type="text" placeholder="Имя*" required>
                        </label>
                        <label>
                            <input type="tel" class="phone" placeholder="Телефон*" required>
                        </label>
                        <button type="submit" class="btn --pink">Заказать консультацию</button>
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
                            <input type="text" placeholder="Комментарии" required>
                        </label>
                        <label class="inputCheckbox">
                            <input type="checkbox" required checked>
                            <span>Нажимая на кнопку "Заказать консультацию", вы даете согласие на обработку персональных данных</span>
                        </label>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <div class="advantages-pop-up pop-up g-flex-column --pdb90" id="advant_pop-up6">
        <div class="content wrapper">
            <section class="section pop-up__header">
                <div class="pop-up__close">
                    <svg class="icon">
                        <use xlink:href="#Close"></use>
                    </svg>
                </div>
                <div class="wrapper">
                    <h3 class="title">официальный <span class="--pink">отчет о проверке квартиры</span></h3>
                </div>
                <div class="pop-up__header_gray g-flex-column">
                    <div class="wrapper">
                        <div class="pop-up__header_top g-flex-between g-flex-align-stretch">
                            <div class="pop-up__header_img">
                                <img loading="lazy" src="/html/assets/img/illustrations/violet/06.svg" alt="">
                            </div>
                            <div class="pop-up__header_text">
                                <div class="num">№6</div>
                                <p>Наш правовой отчет это <b>не просто сведения из ЕГРН.</b><br>
                                    Это полноценный документ, который содержит:
                                </p>
                                <ul>
                                    <li>подробное <b>описание истории квартиры</b>,</li>
                                    <li><b>архивные данные</b> о зарегистрированных в объекте лицах,</li>
                                    <li><b>анализ финансового состояния продавца</b>, в том числе на предмет возможного банкротства,</li>
                                    <li>информацию <b>о судебных спорах, исполнительных производствах и обременениях</b>,</li>
                                    <li>описание возможных <b>рисков и последствий</b>,</li>
                                    <li><b>выводы и рекомендации</b> юриста.</li>
                                </ul>
                                <p class="--mgt20">Если квартира окажется проблемной, мы будем отговаривать вас от ее приобретения. А если вы будете настаивать на сделке, мы будем вынуждены отказаться от ее сопровождения. </p>
                            </div>
                        </div>
                        <div class="pop-up__header_bottom">
                            <p>Мы хотим, чтобы <b>с покупкой новой квартиры в вашу жизнь пришли радость и комфорт</b>, а не судебные разбирательства. </p>
                            <a href="#download_6up" data-id="#advant_pop-up6" class="js__pop_up_smoothScroll"><img loading="lazy" src="/html/assets/svg/Download--pink.svg" alt="">Скачать образец отчета о проверке квартиры  </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="wrapper">
                    <div class="section__big-text --mgt40 --mgb20 for-pop-up">
                        <p>ВАША ВЫГОДА</p>
                    </div>
                    <h3 class="--mgb90">вы покупаете квартиру <span class="--pink">без рисков и негативных последствий!</span></h3>
                    <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key" id="download_6up--key">
                        <h3>Скачать <span class="--pink">образец отчета о проверке квартиры</span></h3>
                        <label>
                            <input type="text" placeholder="Имя*" required>
                        </label>
                        <label>
                            <input type="tel" class="phone" placeholder="Телефон*" required>
                        </label>
                        <label></label>
                        <label>
                            <input type="email" placeholder="E-mail*" required>
                        </label>
                        <button type="submit" class="btn --pink">Скачать</button>
                        <label class="inputCheckbox">
                            <input type="checkbox" required checked>
                            <span>Нажимая на кнопку "Скачать", вы даете согласие на обработку персональных данных</span>
                        </label>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <div class="advantages-pop-up pop-up g-flex-column --pdb90" id="advant_pop-up7">
        <div class="content wrapper">
            <section class="section pop-up__header">
                <div class="pop-up__close">
                    <svg class="icon">
                        <use xlink:href="#Close"></use>
                    </svg>
                </div>
                <div class="wrapper">
                    <h3 class="title"><span class="--pink">Удобные и прозрачные</span> тарифы</h3>
                </div>
                <div class="pop-up__header_gray g-flex-column">
                    <div class="wrapper">
                        <div class="pop-up__header_top g-flex-between g-flex-align-stretch">
                            <div class="pop-up__header_img">
                                <img loading="lazy" src="/html/assets/img/illustrations/violet/07.svg" alt="">
                            </div>
                            <div class="pop-up__header_text">
                                <div class="num">№7</div>
                                <p>При покупке квартиры мы работаем по минимальной предоплате - 20 000 рублей.</p>
                                <p>Стоимость наших услуг всегда доступна на сайте и напрямую <b>зависит от цены приобретаемой квартиры, а не от личных амбиций агента.</b> </p>
                                <p>Также у комисии есть верхнее ограничение (в рамках выбранного ценового диапазона), поэтому <b>вы можете смело увеличить бюджет покупки, не переплачивая за наши услуги.</b></p>
                            </div>
                        </div>
                        <div class="pop-up__header_bottom">
                            <p>Для повторных обращений и клиентов по рекомендациям,  а также льготных категорий, у нас предусмотрены <b>скидки и бонусы до 10%</b>. </p>
                            <a href="tarifs.html#hash__buy" target="_blank" class="section__edge-button wow fadeInLeft  g-flex-align-center --mgt60">
                                <div class="arrow g-flex-align-center g-flex-justify-center">
                                    <svg class="icon">
                                        <use xlink:href="#ArrowSquare"></use>
                                    </svg>
                                </div>
                                Наши тарифы
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>