<form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30 --bottom-fix --key">
    <h3>Заказать <span class="--<? $APPLICATION->ShowProperty("color") ?>">консультацию кредитного брокера</span></h3>
    <label>
        <input type="text" placeholder="Имя*" required>
    </label>
    <label>
        <input type="tel" class="phone" placeholder="Телефон*" required>
    </label>
    <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Заказать консультацию</button>
    <label>
        <select multiple data-placeholder="Тип услуги*" required>
            <option>первичная консультация</option>
            <option>ипотека</option>
            <option>рефинансирование</option>
            <option>проверка кредитной истории</option>
        </select multiple>
    </label>
    <label>
        <textarea type="text" placeholder="Комментарии"></textarea>
    </label>
    <label class="inputCheckbox">
        <input type="checkbox" required checked>
        <span>Нажимая на кнопку "Заказать консультацию", вы даете согласие на обработку персональных данных</span>
    </label>
</form>