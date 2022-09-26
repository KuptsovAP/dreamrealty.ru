<form class="g-flex-wrap g-flex-between g-flex-align-center --mgt90 full-width"
      enctype="multipart/form-data" method="post">
    <div class="pop-up__close">
        <svg class="icon">
            <use xlink:href="#Close"></use>
        </svg>
    </div>
    <h3>Отправить <span class="text--<? $APPLICATION->ShowProperty("color") ?>">резюме</span></h3>
    <label>
        <input type="text" placeholder="Имя*" required>
    </label>
    <label>
        <input type="tel" class="phone" placeholder="Телефон*" required>
    </label>
    <label>
        <input type="email" placeholder="Email*" required>
    </label>
    <label>
        <select data-placeholder="Выберите отдел*" required>
            <option value=""></option>
            <option value="1">вторичка</option>
            <option value="2">новостройка</option>
        </select>
    </label>
    <label>
        <input type="text" placeholder="Комментарий">
    </label>
    <label>
        <input type="file">
        <span>Прикрепить файл</span>
    </label>
    <label class="inputCheckbox w66">
        <input type="checkbox" required checked>
        <span>Нажимая на кнопку "Отправить", <a target="_blank" href="/policy/">вы даете согласие на обработку персональных данных</a></span>
    </label>
    <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Отправить</button>
</form>