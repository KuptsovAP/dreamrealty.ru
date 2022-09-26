<form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30 --bottom-fix --key">
    <h3>Заказать <span class="--<? $APPLICATION->ShowProperty("color") ?>">консультацию кредитного брокера</span></h3>
    <label>
        <input type="text" placeholder="Имя*" name="UF_NAME" required>
    </label>
    <label>
        <input type="tel" class="phone" name="UF_PHONE" placeholder="Телефон*" required>
    </label>
    <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Заказать консультацию</button>
    <label>
        <select multiple="multiple" data-placeholder="Тип услуги*" name="UF_SERVICE" required>
            <option value="">&nbsp;</option>
            <option>ипотека</option>
            <option>рефинансирование</option>
            <option>проверка кредитной истории</option>
        </select>
    </label>
    <label>
        <input type="text" name="UF_COMMENT" placeholder="Комментарии">
    </label>
    <label class="inputCheckbox">
        <input type="checkbox" required checked>
        <span>Нажимая на кнопку "Заказать консультацию", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
    </label>
</form>