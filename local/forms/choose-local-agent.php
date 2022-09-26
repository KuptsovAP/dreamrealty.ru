<form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30 --bottom-fix --key">
    <h3>Выбрать <span class="--<? $APPLICATION->ShowProperty("color") ?>">районного агента</span></h3>
    <label>
        <input type="text" placeholder="Имя*" required>
    </label>
    <label>
        <input type="tel" class="phone" placeholder="Телефон*" required>
    </label>
    <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Отправить заявку</button>
    <label>
        <select multiple="multiple" data-placeholder="Район покупки">
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