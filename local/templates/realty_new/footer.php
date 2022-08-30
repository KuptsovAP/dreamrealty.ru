</main>

<footer>
    <div class="wrapper g-flex-column g-flex-align-stretch --pdt48">
        <div class="footer__top g-flex-between g-flex-align-start --pdb40">
            <a href="/" class="footer__logo">
                <img loading="lazy" src="<?=SITE_TEMPLATE_PATH?>/assets/svg/LogoVertical.svg" alt="">
            </a>
            <div class="footer__menu g-flex-align-start">
                <div class="footer__menu_item g-flex-column">
                    <span class="footer__menu_title">для тех:</span>
                </div>
                <div class="footer__menu_item g-flex-column">
                    <span class="footer__menu_title --mgb30 --lightGreen">у кого есть <br>мечта</span>
                    <ul class="footer__menu_links">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "top",
                            array(
                                "ROOT_MENU_TYPE" => "dream",
                                "MENU_CACHE_TYPE" => "Y",
                                "MENU_CACHE_TIME" => "36000000",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => array(),
                                "MAX_LEVEL" => "1",
                                "CHILD_MENU_TYPE" => "left",
                                "USE_EXT" => "N",
                                "ALLOW_MULTI_SELECT" => "N"
                            ),
                            false
                        ); ?>
                    </ul>
                </div>
                <div class="footer__menu_item g-flex-column">
                    <span class="footer__menu_title --mgb30 --lightBlue">кому важны <br>детали</span>
                    <ul class="footer__menu_links">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "top",
                            array(
                                "ROOT_MENU_TYPE" => "details",
                                "MENU_CACHE_TYPE" => "Y",
                                "MENU_CACHE_TIME" => "36000000",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => array(),
                                "MAX_LEVEL" => "1",
                                "CHILD_MENU_TYPE" => "left",
                                "USE_EXT" => "N",
                                "ALLOW_MULTI_SELECT" => "N"
                            ),
                            false
                        ); ?>
                    </ul>
                </div>
                <div class="footer__menu_item g-flex-column">
                    <span class="footer__menu_title --mgb30 --lightOrange">кто ищет <br>своих</span>
                    <ul class="footer__menu_links">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "top",
                            array(
                                "ROOT_MENU_TYPE" => "find",
                                "MENU_CACHE_TYPE" => "Y",
                                "MENU_CACHE_TIME" => "36000000",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => array(),
                                "MAX_LEVEL" => "1",
                                "CHILD_MENU_TYPE" => "left",
                                "USE_EXT" => "N",
                                "ALLOW_MULTI_SELECT" => "N"
                            ),
                            false
                        ); ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer__bottom g-flex-between g-flex-align-center --pdt48 --pdb60">
            <div class="footer__copyright"><?= $options['copyright'] ?></div>
            <div class="footer__contacts g-flex-align-center">
                <a href="https://www.google.com/maps/place/%D0%A6%D0%B2%D0%B5%D1%82%D0%BD%D0%BE%D0%B9+%D0%B1-%D1%80,+26+%D1%81%D1%82%D1%80%D0%BE%D0%B5%D0%BD%D0%B8%D0%B5+1,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+127051/@55.7714131,37.6202935,17z/data=!3m1!4b1!4m5!3m4!1s0x46b54a6be6370f97:0x445730532773f6d7!8m2!3d55.7714101!4d37.6224822" class="g-flex-align-center">
                    <svg class="icon">
                        <use xlink:href="#Place"></use>
                    </svg>
                    <?= $options['adress'] ?>
                </a>
                <a href="tel:<?= $options['phone'] ?>" class="g-flex-align-center">
                    <svg class="icon">
                        <use xlink:href="#PhoneCall"></use>
                    </svg>
                    <?= $options['phone'] ?>
                </a>
            </div>
            <div class="footer__social g-flex-align-center">
                <a href="<?= $options['tg'] ?>">
                    <svg class="icon">
                        <use xlink:href="#Telegram"></use>
                    </svg>
                </a>
                <a href="<?= $options['ig'] ?>">
                    <svg class="icon">
                        <use xlink:href="#Instagram"></use>
                    </svg>
                </a>
                <a href="<?= $options['youtube'] ?>">
                    <svg class="icon">
                        <use xlink:href="#YouTube"></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>

<!--feedbackPop2  Вторичка Новостройка Любой вариант-->
<div class="advantages-pop-up pop-up g-flex-column --pdb90 old-popup-style" id="feedbackPop2">
    <div class="content wrapper">
        <section class="section pop-up__header">
            <div class="pop-up__close">
                <svg class="icon">
                    <use xlink:href="#Close"></use>
                </svg>
            </div>
            <div class="section__content-changer g-flex-column">
                <div class="section__content-tabs -m-left g-flex-justify-center g-flex-align-center fit-content center">
                    <div class="section__content-tab active">
                        Вторичка
                    </div>
                    <div class="section__content-tab">
                        Новостройка
                    </div>
                    <div class="section__content-tab">
                        Любой вариант
                    </div>
                </div>
                <svg class="--<? $APPLICATION->ShowProperty("color") ?>" viewBox="0 0 32 32">
                    <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="section__content-slider slider">
                    <div class="section__content-slide">
                        <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/choose-local-agent.php');?>
                    </div>
                    <div class="section__content-slide">
                        <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/choose-new-buildings-expert.php');?>
                    </div>
                    <div class="section__content-slide">
                        <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/choose-agent.php');?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<!--feedbackPop  Оставить отзыв-->
<div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="feedbackPop">
    <div class="wrapper">
        <div class="text-block">

            <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt90 --key full-width" id="form_review" enctype="multipart/form-data" method="post">
                <div class="pop-up__close">
                    <svg class="icon">
                        <use xlink:href="#Close"></use>
                    </svg>
                </div>
                <h3>Оставить <span class="--<? $APPLICATION->ShowProperty("color") ?>">отзыв</span></h3>
                <label>
                    <input type="text" placeholder="Имя*" required>
                </label>
                <label>
                    <input type="tel" class="phone" placeholder="Телефон*" required>
                </label>
                <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Отправить отзыв</button>
                <label class="w66 w100-xs">
                    <input type="text" placeholder="Комментарий">
                </label>
                <label class="inputCheckbox">
                    <input type="checkbox" required checked>
                    <span>Нажимая на кнопку "Отправить отзыв", вы даете согласие на обработку персональных данных</span>
                </label>
            </form>
        </div>
    </div>
</div>

<!--feedbackPop3  Заказать звонок-->
<div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="feedbackPop3">
    <div class="wrapper">
        <div class="text-block">

            <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt90 full-width" enctype="multipart/form-data" method="post">
                <div class="pop-up__close">
                    <svg class="icon">
                        <use xlink:href="#Close"></use>
                    </svg>
                </div>
                <h3>Заказать <span class="--<? $APPLICATION->ShowProperty("color") ?>">звонок</span></h3>
                <label>
                    <input type="text" placeholder="Имя*" required>
                </label>
                <label>
                    <input type="tel" class="phone" placeholder="Телефон*" required>
                </label>
                <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Заказать звонок</button>
                <label class="w66 w100-xs">
                    <input type="text" placeholder="Комментарий">
                </label>
                <label class="inputCheckbox">
                    <input type="checkbox" required checked>
                    <span>Нажимая на кнопку "Заказать звонок", вы даете согласие на обработку персональных данных</span>
                </label>
            </form>
        </div>
    </div>
</div>

<!--sendReq  Выбрать районного агента-->
<div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="sendReq">
    <div class="wrapper">
        <div class="text-block">

            <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                <div class="pop-up__close">
                    <svg class="icon">
                        <use xlink:href="#Close"></use>
                    </svg>
                </div>
                <h3>Выбрать <span class="--<? $APPLICATION->ShowProperty("color") ?>">районного агента</span></h3>
                <label>
                    <input type="text" placeholder="Имя*" required>
                </label>
                <label>
                    <input type="tel" class="phone" placeholder="Телефон*" required>
                </label>
                <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Отправить заявку</button>
                <label>
                    <select data-placeholder="Район продажи*" required>
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
                    <input type="text" placeholder="Адрес, кол-во комнат">
                </label>
                <label class="inputCheckbox">
                    <input type="checkbox" required checked>
                    <span>Нажимая на кнопку "Отправить заявку", вы даете согласие на обработку персональных данных</span>
                </label>
            </form>
        </div>
    </div>
</div>

<!--feedbackPop2rent  Выбрать районного агента-->
<div class="advantages-pop-up pop-up g-flex-column old-popup-style" id="feedbackPop2rent">
    <div class="content wrapper">
        <section class="section pop-up__header">
            <div class="pop-up__close">
                <svg class="icon">
                    <use xlink:href="#Close"></use>
                </svg>
            </div>
            <div class="section__content-changer g-flex-column">
                <div class="section__content-tabs g-flex-between center g-flex-align-center" id="form">
                    <div class="section__content-tab active">
                        Жилая
                    </div>
                    <div class="section__content-tab">
                        Коммерческая
                    </div>
                </div>
                <svg class="--<? $APPLICATION->ShowProperty("color") ?>" viewBox="0 0 32 32">
                    <path d="M26 16L16 26L6 16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M26 6L16 16L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="section__content-slider slider">
                    <div class="section__content-slide">
                        <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/choose-local-agent-rent.php');?>
                    </div>
                    <div class="section__content-slide">
                        <?include($_SERVER['DOCUMENT_ROOT'].'/local/forms/choose-agent-realty.php');?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<!--Спасибо за ваше обращение-->
<div class="transparent_pop-up done_pop-up g-flex-align-center g-flex-justify-center">
    <div class="text-block">
        <div class="pop-up__close">
            <svg class="icon">
                <use xlink:href="#Close"></use>
            </svg>
        </div>
        Спасибо за ваше обращение! <br>Мы свяжемся с вами в ближайшее время!
    </div>
</div>

<!--Спасибо за ваш отзыв-->
<div class="transparent_pop-up done_pop-up-review g-flex-align-center g-flex-justify-center">
    <div class="text-block">
        <div class="pop-up__close">
            <svg class="icon">
                <use xlink:href="#Close"></use>
            </svg>
        </div>
        Спасибо за ваш отзыв! <br>
    </div>
</div>

<!--ursoprovozhd-popup Заказать консультацию юриста по недвижимости-->
<div class="transparent_pop-up transparent_pop-up1 place-agent-choose g-flex-align-center g-flex-justify-center" id="ursoprovozhd-popup">
    <div class="wrapper">
        <div class="text-block">

            <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                <div class="pop-up__close">
                    <svg class="icon">
                        <use xlink:href="#Close"></use>
                    </svg>
                </div>
                <h3>Заказать консультацию <span class="--<? $APPLICATION->ShowProperty("color") ?>">юриста по недвижимости</span></h3>
                <label>
                    <input type="text" placeholder="Имя*" required>
                </label>
                <label>
                    <input type="tel" class="phone" placeholder="Телефон*" required>
                </label>
                <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Заказать консультацию</button>
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

<!--orderConsultationModal Заказать консультацию юриста по недвижимости-->
<div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="orderConsultationModal">
    <div class="wrapper">
        <div class="text-block">
            <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                <div class="pop-up__close">
                    <svg class="icon">
                        <use xlink:href="#Close"></use>
                    </svg>
                </div>
                <h3>Заказать <span class="--<? $APPLICATION->ShowProperty("color") ?>">консультацию кредитного брокера</span></h3>
                <label>
                    <input type="text" placeholder="Имя*" required>
                </label>
                <label>
                    <input type="tel" class="phone" placeholder="Телефон*" required>
                </label>
                <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Заказать консультацию</button>
                <label>
                    <select data-placeholder="Тип услуги*" required>
                        <option value=""></option>
                        <option>первичная консультация</option>
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
    </div>
</div>

<!--orderConsultationModal2 Заказать консультацию юриста по недвижимости-->
<div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="orderConsultationModal2">
    <div class="wrapper">
        <div class="text-block">

            <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                <div class="pop-up__close">
                    <svg class="icon">
                        <use xlink:href="#Close"></use>
                    </svg>
                </div>
                <h3>Заказать <span class="--<? $APPLICATION->ShowProperty("color") ?>">консультацию ипотечного брокера</span></h3>
                <label>
                    <input type="text" placeholder="Имя*" required>
                </label>
                <label>
                    <input type="tel" class="phone" placeholder="Телефон*" required>
                </label>
                <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Заказать консультацию</button>
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
                    <span>Нажимая на кнопку "Заказать консультацию", вы даете согласие на обработку персональных данных</span>
                </label>
            </form>
        </div>
    </div>
</div>


</body>
</html>