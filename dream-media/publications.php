<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("DREAM MEDIA");
?>

        <section class="section">
            <div class="wrapper">
                <div class="section__big-text --mgb20">
                    <p>СМИ</p>
                </div>
                <div class="section__text">
                    <p class="--mgb60">Эксперты компании регулярно принимают участие в телепередачах, дают интервью в СМИ и ведут авторские блоги на профессиональную тематику</p>
                </div>
                <div class="section__hashtags --mgb30">
                    <a href="/dream-media/publications.php" class="section__hashtag --violet active">Все категории</a>
                    <a href="/dream-media/publications.php?source=DREAM" class="section__hashtag --violet">#DREAM</a>
                    <a href="/dream-media/publications.php?source=РБК" class="section__hashtag --violet">#РБК</a>
                    <a href="/dream-media/publications.php?source=Радио" class="section__hashtag --violet">#Радио</a>
                    <a href="/dream-media/publications.php?source=M2TV" class="section__hashtag --violet">#M2TV</a>
                </div>
            </div>
        </section>
        
        <section class="section section-blog --pdt0">
            
                <?                      
                    $dbItems = \Bitrix\Iblock\ElementTable::getList(array(
                                    'select' => array('*'),
                                    'filter' => array('IBLOCK_ID' => 9)
                                ));
                    $post = 1;
                    while ($arItem = $dbItems->fetch()){
                        $dbProperty = \CIBlockElement::getProperty(
                            $arItem['IBLOCK_ID'],
                            $arItem['ID']
                        ); 
                        while($arProperty = $dbProperty->Fetch()){  
                            $arItem['PROPERTIES'][] = $arProperty;
                        }
                        //print_r($arItem);    
                        //echo CFile::GetPath($arItem['PREVIEW_PICTURE']);
                        //print_r($arItem);
                        ?>
                        <? if ($post == 1) { ?>
                            <div class="wrapper">
                            <a href="/dream-media/detail.php?post=<?=$arItem['ID']?>" class="media-blog media-blog-main" style="background-image: url('<?=CFile::GetPath($arItem['DETAIL_PICTURE'])?>')">
                            <span class="title">
                            <?=$arItem['NAME']?>
                            </span>
                            <span class="text">
                            <?=$arItem['PREVIEW_TEXT']?>
                            </span>
                        </a>
                        <hr>
                        <div class="wrapper">
                        <? } else {?>
                            <a href="/dream-media/detail.php?post=<?=$arItem['ID']?>" class="media-blog">
                        <span class="info">
                            <span class="date"><span><?=$arItem['DATE_CREATE']?></span><span class="tag">#DREAM</span></span>
                            <span class="title">
                            <?=$arItem['NAME']?>
                            </span>
                            <span class="text">
                            <?=$arItem['PREVIEW_TEXT']?> 
                            </span>
                            <span class="more">Поробнее</span>
                        </span>
                    </a>                     
                        <?
                        }
                        $post++;
                    }
                ?>
         

                </div>

               <!-- <div class="paginations">
                    <a href="#" class="pagination-back hide" tabindex="0">назад</a>
                    <ul>
                        <li><a href="#" class="active" tabindex="0">1</a></li>
                        <li><a href="#" tabindex="0">2</a></li>
                        <li><a href="#" tabindex="0">3</a></li>
                        <li>...</li>
                        <li><a href="#" tabindex="0">7</a></li>
                    </ul>
                    <a href="#" class="pagination-next" tabindex="0">вперед</a>
                </div>!-->
            </div>
        </section>

  

    <div class="transparent_pop-up place-agent-choose g-flex-align-center g-flex-justify-center" id="askQuestion">
        <div class="wrapper">
            <div class="text-block">
                
                <form class="g-flex-wrap g-flex-between g-flex-align-center --key --mgt30">
                    <div class="pop-up__close">
                        <svg class="icon">
                            <use xlink:href="#Close"></use>
                        </svg>
                    </div>
                    <h3>Задать <span class="--violet">вопрос</span> прямо сейчас</h3>
                    <label>
                        <input type="text" placeholder="Имя*" required="" tabindex="0">
                    </label>
                    <label>
                        <input type="tel" class="phone" placeholder="Телефон*" required="" tabindex="0">
                    </label>
                    <label>
                        <input type="email" class="email" placeholder="Email*" required="" tabindex="0">
                    </label>
                    <label class="w66 w100-xs" style="height: 100px;">
                        <input type="text" style="height: 100px;border-radius: 30px;" placeholder="Комментарий" tabindex="0">
                    </label>
                    <label class="inputCheckbox">
                        <button type="submit" class="btn --mgb20 --violet">Отправить вопрос</button>
                        <input type="checkbox" required="" checked="" tabindex="0">
                        <span>Нажимая на кнопку "Отправить вопрос", вы даете согласие на обработку персональных данных</span>
                    </label>
                </form>
            </div>
        </div>
    </div>

    <div class="advantages-pop-up pop-up g-flex-column --pdb90" id="post1">
        <div class="content wrapper">
            <section class="section section-blog-post pop-up__header">
                <div class="pop-up__close">
                    <svg class="icon">
                        <use xlink:href="#Close"></use>
                    </svg>
                </div>
                <div class="wrapper">
                    <h3 class="title">Почему квартиры на вторичном рынке Москвы будут падать в цене</h3>
                    <div class="blog-info">
                        <time datetime="2022-04-11T10:01:00+03:00">11 апреля 2022</time>
                        <div class="tabs">
                            <a href="#">#Радио</a>
                            <a href="#">#Москва</a>
                            <a href="#">#Продажа квартир</a>
                            <a href="#">#Вторичное жилье</a>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <p>Все последние годы московская недвижимость росла в цене – в первую очередь, новостройки, но и «вторичка» тоже. Но теперь экономические условия изменились таким образом, что можно ждать всего. Некоторые эксперты прогнозируют снижение цен на регулярном рынке. В их числе Денис Гаджиев, заместитель руководителя департамента городской недвижимости «НДВ Супермаркет Недвижимости». Специалист объяснил «Миру Квартир», какие факторы приведут к удешевлению жилья в столице.</p>
                    <img src="https://f7.mirkvartir.me/journal/custom/6a7e6923-c59e-4a35-b07f-4c1d4f837a97.jpg" style="width: 100%" alt="">
                    <div class="img-subtitle"><small>Спрос на "вторичку" скоро упадет. Фото: Мир Квартир</small></div>

                    <p>Мы предполагаем, что <a href="catalog-vtor.html">вторичный рынок жилья</a> ожидает постепенное снижение цен. Крупные агентства недвижимости, в том числе наше, уже фиксируют сокращение потенциального спроса, т. е. количества звонков и прочих обращений. В будущем это может привести к уменьшению числа сделок, а вследствие этого и к коррекции цен.</p>
                    <p>Основные факторы ослабления активности покупателей следующие. Во-первых, из-за резкого роста ключевого показателя ЦБ и ставок по жилищным кредитам <a href="ipoteka.html">ипотека</a> стала менее доступной. Во-вторых, уже закончился период ажиотажного спроса, когда многие покупатели спешили приобрести квартиру с целью сохранения средств от возможного обесценивания. Более того, люди привыкают к нынешней ситуации, а курсы доллара и евро постепенно возвращаются к прежним показателям, что также влияет на снижение градуса тревожности на рынке недвижимости.  </p>
                    <p>Какие объекты будут пользоваться особенно высоким спросом у покупателей жилья? Еще до тех изменений, которые произошли с рынком недвижимости в феврале-марте, в столице наблюдался серьезный рост спроса на лоты (мини-квартиры и студии) небольших площадей, в среднем 15-20 кв. м. Участники рынка недвижимости иногда в шутку называют такие варианты капсульными помещениями, но тем не менее, они весьма востребованы у покупателей, в том числе с точки зрения окупаемости при сдаче в аренду.</p>
                    <p>Дело в том, что стоимость приобретения такого объекта гораздо меньше, чем стандартной квартиры, а доходность от сдачи в аренду лишь немного уступает, так сказать, полноценным жилым площадям. К примеру, по моим наблюдениям, сейчас на вторичном рынке недвижимости столицы однокомнатная квартира с качественным ремонтом (готовая для проживания или для заселения нанимателей) и в близости от станции метро стоит в среднем около 10 млн рублей. В спальных районах ежемесячная арендная ставка такого варианта составляет примерно от 35 тыс. рублей, в локациях, более близких к центру, 45-50 тыс. рублей. А объекты с уменьшенными площадями, чей ценник существенно меньше, чем у стандартных квартир, могут сдаваться по ставке до 30 тыс. рублей в месяц.</p>
                    <p>В целом возрастет спрос на доступные по стоимости варианты как на первичном, так и на вторичном рынках – в основном это экономкласс, квартиры с отделкой. Удорожание строительных и отделочных материалов грозит покупателям квартир без ремонта большими тратами. В целях сокращения расходов люди все чаще приобретают объекты с отделкой – в такую квартиру можно сразу заехать и жить либо искать арендаторов.</p>
                    <p>В периоды нестабильности особенно сильно страдает сегмент элитной недвижимости, бизнес-класс – уже в меньшей степени. Для большей части населения элитные квартиры не являются, так сказать, объектами первой необходимости, более того, если люди сомневаются в том, нужен ли им такой дорогостоящий актив, то они предпочитают снимать квартиру. Мы уже работаем с запросами от клиентов, которые ранее задумывались о приобретении элитной недвижимости, а сейчас вместо этого решили арендовать. Они наблюдают за развитием рынка недвижимости и надеются на снижение цен, после чего и хотят приобрести квартиру.</p>
                </div>
            </section> 
        </div>
    </div>
    
    <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>