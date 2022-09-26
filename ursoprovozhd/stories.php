<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ПРЕИМУЩЕСТВА");
?>

    <section class="section how-it-works relative">
        <div class="wrapper">
            <h2 class="section__title --mgb120">Истории <span class="--blue">наших клиентов</span></h2>
            <div class="section__histories">
                <div class="section__history --mgb150">
                    <div class="img">
                        <img loading="lazy" src="/html/assets/img//advant-full13.png" alt="">
                    </div>
                    <div class="desc">
                        <h4>Про самонадеянность</h4>
                        <p class="--mgb20">Пытаемся без агента купить новую квартиру и одновременно продать старую. “Квартира мечты” найдена, покупка планируется с использованием субсидии. Все было легко и понятно, пока продавец не начал оттягивать момент принятия аванса за свою квартиру и беспокоиться по любому поводу...</p>
                        <a href="#advant_pop-up1" class="js__open-hash_pop-up">Подробнее</a>
                    </div>
                </div>
                <div class="section__history --mgb150">
                    <div class="img">
                        <img loading="lazy" src="/html/assets/img//advant-full13.png" alt="">
                    </div>
                    <div class="desc">
                        <h4>Про некомпетентных агентов</h4>
                        <p class="--mgb20">У покупателя был риэлтор, который нашел ему квартиру, помог получить ипотечный кредит и согласовать объект в банке. Но чувство тревожности не отпускало покупателя и несмотря на предварительное одобрение банка, а также оплаченный и полученный правовой отчет...</p>
                        <a href="#advant_pop-up2" class="js__open-hash_pop-up">Подробнее</a>
                    </div>
                </div>
                <div class="section__history --mgb150">
                    <div class="img">
                        <img loading="lazy" src="/html/assets/img//advant-full13.png" alt="">
                    </div>
                    <div class="desc">
                        <h4>Про некомпетентных юристов</h4>
                        <p class="--mgb20">Не так давно, еще одни клиенты заказали правовой отчёт в одном известном банке, а изучив его, сделали выводы, что квартира к покупке не рекомендуется из-за долгов по налогам продавца. Но в банке не пояснили, в чем риски покупателя, и вообще мало что расшифровали...</p>
                        <a href="#advant_pop-up3" class="js__open-hash_pop-up">Подробнее</a>
                    </div>
                </div>
                <div class="section__history">
                    <div class="img">
                        <img loading="lazy" src="/html/assets/img//advant-full13.png" alt="">
                    </div>
                    <div class="desc">
                        <h4>Про самоуверенность</h4>
                        <p class="--mgb20">Собственник с юридическим образованием (в сфере семейного права) самостоятельно продавал квартиру, и сам нашел на нее покупателя. Но покупателя не простого, а с ипотекой, да, не из Москвы, а из другого региона...</p>
                        <a href="#advant_pop-up4" class="js__open-hash_pop-up">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="wrapper">
            <form class="g-flex-wrap g-flex-between g-flex-align-center full-width --key">
                <h3>Выбрать <span class="--blue">юриста</span> по недвижимости</h3>
                <label>
                    <input type="text" placeholder="Имя*" required>
                </label>
                <label>
                    <input type="tel" class="phone" placeholder="Телефон*" required>
                </label>
                <button type="submit" class="btn --blue">Отправить заявку</button>
                <label>
                    <select data-placeholder="Тип услуги*" required>
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
                    <span>Нажимая на кнопку "Отправить заявку", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                </label>
            </form>
        </div>
    </section>

    <section class="section cta-big-text --pdt0">
        <div class="wrapper relative">
            <div class="section__big-text --mgb60">
                <p>Остались <br>вопросы?</p>
            </div>
            <a href="#sendReq" class="btn section__absolute-button right --blue js--transparent_pop-up">
                <svg class="icon">
                    <use xlink:href="#PhoneCall"></use>
                </svg>
                Заказать звонок
            </a>
        </div>
    </section>



    <div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="sendReq">
        <div class="wrapper">
            <div class="text-block">

                <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Заказать <span class="--blue">звонок</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <button type="submit" class="btn --blue">Заказать звонок</button>
                    <label class="w66 w100-xs">
                        <input type="text" placeholder="Комментарии">
                    </label>
                    <label class="inputCheckbox w100">
                        <input type="checkbox" required checked>
                        <span>Нажимая на кнопку "Заказать звонок", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                    </label>
                </form>
            </div>
        </div>
    </div>

    <div class="transparent_pop-up transparent_pop-up1 place-agent-choose g-flex-align-center g-flex-justify-center" id="ursoprovozhd-popup">
        <div class="wrapper">
            <div class="text-block">

                <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Заказать консультацию <span class="--blue">юриста по недвижимости</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <button type="submit" class="btn --blue">Заказать консультацию</button>
                    <label>
                        <select multiple="multiple" data-placeholder="Тип услуги*" required>
                            <option value="">&nbsp;</option>
                            <option>покупка новостройки</option>
                            <option>покупка вторички</option>
                            <option>продажа вторички</option>
                            <option>альтернативная сделка</option>
                            <option>первичная консультация</option>
                        </select>
                    </label>
                    <label>
                        <input type="text" placeholder="Комментарии">
                    </label>
                    <label class="inputCheckbox">
                        <input type="checkbox" required checked>
                        <span>Нажимая на кнопку "Заказать консультацию", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                    </label>
                </form>
            </div>
        </div>
    </div>

    <div class="transparent_pop-up transparent_pop-up2 place-agent-choose g-flex-align-center g-flex-justify-center">
        <div class="wrapper">
            <div class="text-block">

                <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Выбрать <span class="--blue">юриста по недвижимости</span></h3>
                    <label>
                        <input type="text" placeholder="Имя*" required>
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required>
                    </label>
                    <button type="submit" class="btn --blue">Отправить заявку</button>
                    <label>
                        <select data-placeholder="Тип услуги*" required>
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
                        <span>Нажимая на кнопку "Отправить заявку", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                    </label>
                </form>
            </div>
        </div>
    </div>

    <div class="advantages-pop-up pop-up g-flex-column --pdb90" id="advant_pop-up1">
        <div class="pop-up-container-wrap">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="wrapper">
                        <h3 class="title d-block"><span class="--blue" style="padding: 0">История про самонадеянность</span></h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/stories.png">
                                </div>
                                <div class="pop-up__header_text">
                                    <p><b>Ситуация:</b> Пытаемся без агента купить новую квартиру
                                        и одновременно продать старую.
                                        “Квартира мечты” найдена, покупка планируется
                                        с использованием субсидии.
                                        Все было легко и понятно, пока продавец не начал оттягивать момент принятия аванса за свою квартиру и беспокоиться
                                        по любому поводу: кто и как будет перечислять деньги, в какой срок, почему такие строгие условия получения денег и т.д., и т.п. А выход на сделку затягивается. </p>
                                </div>
                            </div>
                            <div class="pop-up__header_bottom">
                                <p><b>Решение:</b> Нашим героям удалось справиться с напором и тревожностью продавца  Но с продажей своей квартиры у них возникли большие сложности.  Со-собственниками их квартиры являлись несовершеннолетние дети, и предстояла процедура одобрения сделки органами опеки. Одним из собственников к тому же был отец-алкоголик, и каждый приходящий на просмотр покупатель или агент, понимая это, разворачивались и уходили, несмотря на обещание наших клиентов оформить долю горе-собственнику в новой квартире. </p>
                                <p><b>Результат:</b> аванс за приобретаемую квартиру был внесен, а за продаваемую так и не получен. Продавец “квартиры мечты” долго слушал телефонные обещания клиентов купить его квартиру, а потом дождался истечения срока авансового соглашения и оставил себе несколько десятков тысяч рублей в качестве компенсации. Клиенты сняли квартиру с продажи и не возвращались к этому вопросу до тех пор, пока не поверили в то, что все реально и легко, если нанимать профессионалов и двигаться согласно четкому плану, а не на ощупь.</p>
                            </div>
                        </div>
                    </div>

                </section>
                <section class="section --mgt60">
                    <div class="wrapper">
                        <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                            <h3>Заказать консультацию <span class="--blue">юриста по недвижимости</span></h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --blue" style="white-space: nowrap;">Заказать консультацию</button>
                            <label>
                                <select data-placeholder="Тип услуги*" required>
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
                                <span>Нажимая на кнопку "Заказать консультацию", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                            </label>
                        </form>
                    </div>
                </section>
            </div>
        </div>

    </div>

    <div class="advantages-pop-up pop-up g-flex-column --pdb90" id="advant_pop-up2">
        <div class="pop-up-container-wrap">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="wrapper">
                        <h3 class="title d-block"><span class="--blue" style="padding: 0">История про некомпетентных агентов</span></h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/stories.png" alt="">
                                </div>
                                <div class="pop-up__header_text --mgt60">
                                    <p><b>Ситуация:</b> У покупателя был риэлтор, который нашел ему квартиру, помог получить ипотечный кредит и согласовать объект в банке. Но чувство тревожности не отпускало покупателя и несмотря на предварительное одобрение банка, а также оплаченный и полученный правовой отчет, он продолжал задавать все новые и новые вопросы своему агенту. </p>
                                </div>
                            </div>
                            <div class="pop-up__header_bottom">
                                <p><b>Решение:</b> К сожалению, у агента не было юридического образования, и он не изучал судебную практику. Очевидно поэтому все его ответы сводились к утверждению: “банк все проверил, волноваться не о чем”. </p>
                                <p>Клиент не успокоился и все-таки нанял нашего юриста, чтобы проверить приобретаемые квартиру и машиноместо. Клиент волновался не напрасно, основания для этого действительно были. </p>
                                <p><b>Результат:</b> Мы предоставили покупателю полноценный правовой отчёт, содержащий всю историю объектов, обременений с выводами и рекомендациями, после чего, клиентом было принято решение искать новый объект недвижимости и проходить всю процедуру одобрения в банке заново. На этот раз сделку уже вел наш юрист.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section --mgt60">
                    <div class="wrapper">
                        <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                            <h3>Заказать консультацию <span class="--blue">юриста по недвижимости</span></h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --blue" style="white-space: nowrap;">Заказать консультацию</button>
                            <label>
                                <select data-placeholder="Тип услуги*" required>
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
                                <span>Нажимая на кнопку "Заказать консультацию", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                            </label>
                        </form>
                    </div>
                </section>
            </div>
        </div>

    </div>

    <div class="advantages-pop-up pop-up g-flex-column --pdb90" id="advant_pop-up3">
        <div class="pop-up-container-wrap">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="wrapper">
                        <h3 class="title d-block"><span class="--blue" style="padding: 0">История про некомпетентных агентов</span></h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/stories.png" alt="">
                                </div>
                                <div class="pop-up__header_text --mgt60">
                                    <p><b>Ситуация:</b> Не так давно, еще одни клиенты заказали правовой отчёт в одном известном банке, а изучив его, сделали выводы, что квартира к покупке не рекомендуется из-за долгов по налогам продавца. Но в банке не пояснили, в чем риски покупателя, и вообще мало что расшифровали. Риелтор продавца уверяла, что налоги начислили незаконно, и продавец судится с налоговой.</p>
                                </div>
                            </div>
                            <div class="pop-up__header_bottom">
                                <p><b>Решение:</b> После изучения документов нашим юристом, стало понятно, что проблема вовсе не в задолженности по налогам, а в незаконном лишении несовершеннолетнего ребенка права на участие в приватизации. Он был снят с регистрационного учета в квартире в возрасте 6 месяцев и прописан к жене собственника накануне той самой приватизации. </p>
                                <p><b>Результат:</b> От покупки квартиры клиенты были вынуждены отказаться, поскольку срок исковой давности по таким нарушениям исчисляется тремя годами с момента достижения ребенком совершеннолетия, а не с момента приватизации. Жить и бояться оспаривания сделки оставшиеся 20 с лишним лет никто не был готов. Буквально за несколько дней наш районный агент нашел клиентам другую квартиру и, как это обычно бывает, она оказалась лучше и дешевле. Наш юрист ее проверил и успешно сопроводил сделку.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section --mgt60">
                    <div class="wrapper">
                        <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                            <h3>Заказать консультацию <span class="--blue">юриста по недвижимости</span></h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --blue" style="white-space: nowrap;">Заказать консультацию</button>
                            <label>
                                <select data-placeholder="Тип услуги*" required>
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
                                <span>Нажимая на кнопку "Заказать консультацию", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                            </label>
                        </form>
                    </div>
                </section>
            </div>
        </div>

    </div>

    <div class="advantages-pop-up pop-up g-flex-column --pdb90" id="advant_pop-up4">
        <div class="pop-up-container-wrap">
            <div class="content wrapper">
                <section class="section pop-up__header">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <div class="wrapper">
                        <h3 class="title d-block"><span class="--blue" style="padding: 0">История про самоуверенность</span></h3>
                    </div>
                    <div class="pop-up__header_gray g-flex-column">
                        <div class="wrapper">
                            <div class="pop-up__header_top g-flex-between">
                                <div class="pop-up__header_img">
                                    <img loading="lazy" src="/html/assets/img/advantages/stories.png" alt="">
                                </div>
                                <div class="pop-up__header_text --mgt60">
                                    <p><b>Ситуация:</b> Собственник с юридическим образованием (в сфере семейного права) самостоятельно продавал квартиру, и сам нашел на нее покупателя. <br>Но покупателя не простого, а с ипотекой, да, не из Москвы, а из другого региона.</p>
                                </div>
                            </div>
                            <div class="pop-up__header_bottom">
                                <p><b>Решение:</b> Согласование объекта, продаваемого в Москве с банком, который не имеет филиала в столице, предполагает отличную от привычной (через ячейку или аккредитив) схему взаиморасчетов. К тому же сделка сопровождается множеством нюансов и дополнительных, не всегда удобных продавцу, требований со стороны банка.</p>
                                <p><b>Результат:</b> Слишком много нюансов для человека, не имеющего опыта работы юристом в сфере недвижимости. Тот самый случай, когда клиент считал, что справится сам, а в итоге признался, что без юриста по недвижимости просто не вышел бы на сделку.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section --mgt60">
                    <div class="wrapper">
                        <form class="g-flex-wrap g-flex-between g-flex-align-center --mgt30">
                            <h3>Заказать консультацию <span class="--blue">юриста по недвижимости</span></h3>
                            <label>
                                <input type="text" placeholder="Имя*" required>
                            </label>
                            <label>
                                <input type="tel" class="phone" placeholder="Телефон*" required>
                            </label>
                            <button type="submit" class="btn --blue" style="white-space: nowrap;">Заказать консультацию</button>
                            <label>
                                <select data-placeholder="Тип услуги*" required>
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
                                <span>Нажимая на кнопку "Заказать консультацию", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                            </label>
                        </form>
                    </div>
                </section>
            </div>
        </div>

    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>