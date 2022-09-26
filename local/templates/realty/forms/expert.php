<form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30 --bottom-fix --key">
    <h3>Заказать <span class="--<? $APPLICATION->ShowProperty("color") ?>">консультацию эксперта</span></h3>
    <label>
        <input type="text" placeholder="Имя*" name="UF_NAME" required>
    </label>
    <label>
        <input type="tel" class="phone" name="UF_PHONE" placeholder="Телефон*" required>
    </label>
    <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Заказать консультацию</button>
    <label>
        <select  multiple="multiple" data-placeholder="Цель покупки*" name="UF_GOAL" required>
            <option value="">&nbsp;</option>
            <option>жить</option>
            <option>сдавать</option>
            <option>инвестировать</option>
            <option>нет определенности</option>
        </select>
    </label>
    <label>
        <select required data-placeholder="Бюджет*" name="UF_BUD">
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
        <input type="text" placeholder="Комментарии" name="UF_COMMENT">
    </label>
</form>