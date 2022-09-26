<form class="g-flex-wrap g-flex-between g-flex-align-center --<? $APPLICATION->ShowProperty("color") ?>">
    <h3>Оставить <span class="--lightViolet">заявку</span> прямо сейчас</h3>
    <label>
        <input type="text" placeholder="Имя*" required>
    </label>
    <label>
        <input type="tel" class="phone" placeholder="Телефон*" required>
    </label>
    <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Отправить заявку</button>
    <label>
        <select data-placeholder="Тип услуги*" class="--<? $APPLICATION->ShowProperty("color") ?>" required>
            <option value="">&nbsp;</option>
            <option>сдать</option>
            <option>снять</option>
        </select>
    </label>
    <label class="w100-xs">
        <input type="text" placeholder="Комментарии">
    </label>
    <label class="inputCheckbox">
        <input type="checkbox" required checked>
        <span>Нажимая на кнопку "Отправить заявку", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
    </label>
</form>