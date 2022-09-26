<form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30 --bottom-fix --key">
    <h3>Заказать <span class="--<? $APPLICATION->ShowProperty("color") ?>">консультацию эксперта</span></h3>
    <label>
        <input type="text" placeholder="Имя*" required>
    </label>
    <label>
        <input type="tel" class="phone" placeholder="Телефон*" required>
    </label>
    <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Заказать консультацию</button>
    <label>
        <select multiple data-placeholder="Цель покупки*" required>

            <option>жить</option>
            <option>сдавать</option>
            <option>инвестировать</option>
            <option>нет определенности</option>
        </select multiple>
    </label>
    <label>
        <select multiple data-placeholder="Бюджет">

            <option>до 10 млн.</option>
            <option>от 10 до 20 млн.</option>
            <option>от 20 до 30 млн.</option>
            <option>от 30 млн.</option>
        </select multiple>
    </label>
    <label class="inputCheckbox">
        <input type="checkbox" required checked>
        <span>Нажимая на кнопку "Заказать консультацию", вы даете согласие на обработку персональных данных</span>
    </label>
    <label class="w66 w100-xs">
        <textarea type="text" placeholder="Комментарии"></textarea>
    </label>
</form>