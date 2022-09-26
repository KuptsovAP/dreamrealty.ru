<form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
    <h3>Выбрать <span class="--<? $APPLICATION->ShowProperty("color") ?>">эксперта по новостройкам</span></h3>
    <label>
        <input type="text" placeholder="Имя*" required>
    </label>
    <label>
        <input type="tel" class="phone" placeholder="Телефон*" required>
    </label>
    <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Отправить заявку</button>
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
    <label class="w66 w100-xs" >
        <input type="text" placeholder="Комментарии">
    </label>
</form>