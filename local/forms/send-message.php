<form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
    <h3>Отправить <span class="--<? $APPLICATION->ShowProperty("color") ?>">сообщение</span></h3>
    <label>
        <input type="text" placeholder="Имя*" required>
    </label>
    <label>
        <input type="tel" class="phone" placeholder="Телефон*" required>
    </label>
    <label>
        <input type="email" class="email" placeholder="Email*" required>
    </label>
    <label class="w66 w100-xs" style="height: 100px;">
        <input type="text" style="height: 100px;border-radius: 30px;" placeholder="Комментарий">
    </label>
    <label class="inputCheckbox">
        <button type="submit" class="btn --mgb20 --<? $APPLICATION->ShowProperty("color") ?>">Отправить сообщение</button>
        <input type="checkbox" required checked>
        <span>Нажимая на кнопку "Отправить сообщение", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
    </label>
</form>