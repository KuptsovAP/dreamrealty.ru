<form class="g-flex-wrap g-flex-between g-flex-align-center --mgt90 --<? $APPLICATION->ShowProperty("color") ?>">
    <h3>Оставить <span class="--<? $APPLICATION->ShowProperty("color") ?>">заявку</span> прямо сейчас</h3>
    <label>
        <input type="text" placeholder="Имя*" required>
    </label>
    <label>
        <input type="tel" class="phone" placeholder="Телефон*" required>
    </label>
    <button type="submit" class="btn">Отправить заявку</button>
    <label>
        <select data-placeholder="Тип услуги*" required class="--<? $APPLICATION->ShowProperty("color") ?>">
            <option value="">&nbsp;</option>
            <option>ипотека</option>
            <option>рефинансирование</option>
            <option>проверка кредитной истории</option>
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