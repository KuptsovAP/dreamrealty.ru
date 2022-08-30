<form class="g-flex-wrap g-flex-between g-flex-align-center" style="background: white;padding-bottom: 0;">
    <div class="pop-up__close">
        <svg class="icon">
            <use xlink:href="#Close"></use>
        </svg>
    </div>
    <h3>Присоединяйтесь <span class="--<? $APPLICATION->ShowProperty("color") ?>">прямо сейчас</span></h3>
    <label>
        <input type="text" placeholder="Имя*" required="">
    </label>
    <label>
        <input type="tel" class="phone" placeholder="Телефон*" required="">
    </label>
    <label>
        <input type="email" class="email" placeholder="Email*" required="">
    </label>
    <label>
        <input type="text" placeholder="Страна*" required="">
    </label>
    <label>
        <input type="text" class="phone" placeholder="Город*" required="">
    </label>
    <label>
        <select name="status" data-placeholder="Сфера деятельности*" id="selectStatus2" required>
            <option value="">&nbsp;</option>
            <option value="1">частный брокер</option>
            <option value="2">риэлтор в агентстве недвижимости</option>
            <option value="0">другая сфера</option>
        </select>
        <span class="status" style="position: relative;display:none" id="writeStatus2">
                    <input type="text" class="status" placeholder="Статус*" required="">
                    <button type="button" id="hideStatus2" style="font-weight: bold;position: absolute;top: -2px;right: 25px;font-size: 18px;">&times;</button>
                </span>
    </label>
    <label></label>
    <label>
        <input type="text" placeholder="Удобное время для связи">
    </label>
    <button type="submit" class="btn --<? $APPLICATION->ShowProperty("color") ?>">Стать партнером</button>
    <label></label>

    <label class="inputCheckbox w66 w100-xs">
        <input type="checkbox" required="" checked="">
        <span>Нажимая на кнопку "Стать партнером", вы даете согласие на обработку персональных данных и согласны с Правилами партнерской программы</span>
    </label>
</form>