<form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key">
    <h3>Выбрать <span class="--<? $APPLICATION->ShowProperty("color") ?>">юриста по недвижимости</span></h3>
    <label>
        <input type="text" placeholder="Имя*" required="">
    </label>
    <label>
        <input type="tel" class="phone" placeholder="Телефон*" required="">
    </label>
    <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Отправить заявку</button>
    <label>
        <select multiple="multiple"  data-placeholder="Тип услуги*" required="">
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
        <span>Нажимая на кнопку "Отправить заявку", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
    </label>
</form>