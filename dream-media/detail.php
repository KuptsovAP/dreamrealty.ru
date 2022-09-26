<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("DREAM MEDIA");

?>
      <?                      
                                    $dbItems = \Bitrix\Iblock\ElementTable::getList(array(
                                                    'select' => array('*'),
                                                    'filter' => array('IBLOCK_ID' => 9, 'ID' => $_GET["post"])
                                                ));
                                    while ($arItem = $dbItems->fetch()){
                                        $dbProperty = \CIBlockElement::getProperty(
                                            $arItem['IBLOCK_ID'],
                                            $arItem['ID']
                                        ); 
                                        while($arProperty = $dbProperty->Fetch()){  
                                            $arItem['PROPERTIES'][] = $arProperty;
                                        }
                                        $post = $arItem;
                                    }
                                    $APPLICATION->SetTitle($post['NAME']);
                                    
                                ?> 

        <section class="section section-blog-post">
            <div class="wrapper">
                <h1 class="--mgb20"> <?=$post['NAME']?></h1>
                <div class="blog-info">
                    <time datetime="2022-04-11T10:01:00+03:00"><?=$post['DATE_CREATE']?></time>
                    <div class="tabs">
                        <a href="#">#Радио</a>
                        <a href="#">#Москва</a>
                        <a href="#">#Продажа квартир</a>
                        <a href="#">#Вторичное жилье</a>
                    </div>
                </div>

                <div class="content">
                <?=$post['DETAIL_TEXT']?>
                </div>
            </div>
        </section>
        
        <section class="section section-blog --pdt0">
            <div class="wrapper">
                <h3 class="--mgb20">Читайте также:</h3>
                <div class="wrapper">
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
                ?>

              

                    
                </div>
            </div>
        </section>

    </main>
    <!-- Main End -->

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
                        <span>Нажимая на кнопку "Отправить вопрос", <a href="/policy/">вы даете согласие на обработку персональных данных</a></span>
                    </label>
                </form>
            </div>
        </div>
    </div>


    <div class="article__pop-up" id="arcticle-pop1">
        <div class="wrapper">
            <div class="pop-up__close">
                <svg class="icon">
                    <use xlink:href="#Close"></use>
                </svg>
            </div>
            <div class="wrapper">
                <div class="img">
                    <img loading="lazy" src="/html/assets/img//interview-channel1.png" alt="">
                </div>
                <ul>
                    <li><a href="https://kvadroom.media/city/46803/">Риски вторички</a></li>
                    <li><a href="https://kvadroom.media/city/46803/">Неучтённые споры</a></li>
                    <li><a href="https://kvadroom.media/city/46803/">Заплати и спи спокойно</a></li>
                    <li><a href="https://kvadroom.media/city/46803/">Вежливый отказ</a></li>
                    <li><a href="https://kvadroom.media/city/46803/">Продай и поделись</a></li>
                    <li><a href="https://kvadroom.media/city/46803/">Королевская страховка</a></li>
                    <li><a href="https://kvadroom.media/city/46803/">Остров стабильности</a></li>
                    <li><a href="https://kvadroom.media/city/46803/">И риэлторам закон напишут</a></li>
                    <li><a href="https://kvadroom.media/city/46803/">У опеки своя забота</a></li>
                    <li><a href="https://kvadroom.media/city/46803/">Финишная прямая</a></li>
                    <li><a href="https://kvadroom.media/city/46803/">Отдайте де-юре юристам</a></li>
                    <li><a href="https://kvadroom.media/city/46803/">Командный дух</a></li>
                    <li><a href="https://kvadroom.media/city/46803/">Земельный договор</a></li>
                    <li><a href="https://kvadroom.media/city/46803/">Дамские штучки</a></li>
                    <li><a href="https://kvadroom.media/city/46803/">Не продать — горе, продать — вдвое</a></li>
                    <li><a href="https://kvadroom.media/city/46803/">Новогоднее поздравление Надежды Телеш</a></li>
                    <li><a href="https://kvadroom.media/city/46803/">«Опасные» квартиры</a></li>
                    <li><a href="https://kvadroom.media/city/46803/">Как разорвать оковы?</a></li>
                    <li class="more"><a href="#" class="button">Все публикции</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="article__pop-up" id="arcticle-pop2">
        <div class="wrapper">
            <div class="pop-up__close">
                <svg class="icon">
                    <use xlink:href="#Close"></use>
                </svg>
            </div>
            <div class="wrapper">
                <div class="img">
                    <img loading="lazy" src="/html/assets/img//interview-channel2.png" alt="">
                </div>
                <ul>
                    <li><a href="https://realty.rbc.ru/news/577d23f69a7947a78ce91a8c">"Холодная война" на рынке недвижимости: что делать в условиях кризиса</a></li>
                    <li><a href="https://realty.rbc.ru/news/577d23f69a7947a78ce91a8c">Менять или не менять квартиру в кризис</a></li>
                    <li><a href="https://realty.rbc.ru/news/577d23f69a7947a78ce91a8c">Как заработать на покупке квартиры в новостройке от частных инвесторов</a></li>
                    <li><a href="https://realty.rbc.ru/news/577d23f69a7947a78ce91a8c">Московский риелтор: что не так на рынке недвижимости крыма</a></li>
                    <li><a href="https://realty.rbc.ru/news/577d23f69a7947a78ce91a8c">Агент, юрист, консультант: как должна измениться профессия риелтора</a></li>
                    <li class="more"><a href="#" class="button">Все публикции</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="article__pop-up" id="arcticle-pop3">
        <div class="wrapper">
            <div class="pop-up__close">
                <svg class="icon">
                    <use xlink:href="#Close"></use>
                </svg>
            </div>
            <div class="wrapper">
                <div class="img">
                    <img loading="lazy" src="/html/assets/img//interview-channel3.png" alt="">
                </div>
                <ul>
                    <li><a href="https://realty.rbc.ru/news/577d23f69a7947a78ce91a8c">Время недвижимости</a></li>
                    <li><a href="https://realty.rbc.ru/news/577d23f69a7947a78ce91a8c">Жилищно-коммунальное хозяйство</a></li>
                    <li class="more"><a href="#" class="button">Все публикции</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="article__pop-up" id="arcticle-pop4">
        <div class="wrapper">
            <div class="pop-up__close">
                <svg class="icon">
                    <use xlink:href="#Close"></use>
                </svg>
            </div>
            <div class="wrapper">
                <div class="img">
                    <img loading="lazy" src="/html/assets/img//interview-channel4.png" alt="">
                </div>
                <ul>
                    <li><a href="https://realty.rbc.ru/news/577d23f69a7947a78ce91a8c">"Продавать или придержать жилье в условиях кризиса? (По следам 5-й Командной дуэли мечтателей и реалистов рынка недвижимости)</a></li>
                    <li><a href="https://realty.rbc.ru/news/577d23f69a7947a78ce91a8c">ЗА и ПРОТИВ эксклюзивного договора как основы риэлторской деятельности</a></li>
                    <li><a href="https://realty.rbc.ru/news/577d23f69a7947a78ce91a8c">Ч. 2 В залоге у банка. Особенности продажи ипотечных квартир</a></li>
                    <li><a href="https://realty.rbc.ru/news/577d23f69a7947a78ce91a8c">Ч. 1. В залоге у банка. Особенности продажи ипотечных квартир</a></li>
                    <li><a href="https://realty.rbc.ru/news/577d23f69a7947a78ce91a8c">Что важнее: эксклюзивный договор или эксклюзивные отношения с клиентом?</a></li>
                    <li><a href="https://realty.rbc.ru/news/577d23f69a7947a78ce91a8c">Интервью с Надеждой Телеш</a></li>
                    <li class="more"><a href="#" class="button">Все публикции</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    
    <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>