<form class="g-flex-wrap g-flex-between g-flex-align-center" style="background: white;">
    <h3>Заказать <span class="--<? $APPLICATION->ShowProperty("color") ?>">звонок</span></h3>
    <label>
        <input type="text" placeholder="Имя*" required="">
    </label>
    <label>
        <input type="tel" class="phone" placeholder="Телефон*" required>
    </label>
    <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Заказать звонок</button>
    <label class="w66 w100-xs">
        <input type="text" placeholder="Комментарии">
    </label>
    <label class="inputCheckbox w100-xs">
        <input type="checkbox" required="" checked="">
        <span>Нажимая на кнопку "Заказать звонок", вы даете согласие на обработку персональных данных</span>
    </label>
</form>