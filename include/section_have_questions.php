<section class="section cta-big-text">
    <div class="wrapper relative">
        <div class="section__big-text --mgb60">
            <p>Остались <br>вопросы?</p>
        </div>

        <a href="#<?=(!empty($arParams['FORM_ID']) ? $arParams['FORM_ID'] : "feedbackPop3" )?>" class="btn section__absolute-button right --<? $APPLICATION->ShowProperty("color") ?> js--transparent_pop-up">
            <svg class="icon">
                <use xlink:href="#PhoneCall"></use>
            </svg>
            Заказать звонок
        </a>
    </div>
</section>