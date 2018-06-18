<?php

/* @var $this yii\web\View */


use yii\bootstrap\Button;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
$this->title = 'Easy-TV';
?>
<link href="css/style.css">
<!--Head-->
<div class="header" style="height: 680px; background: rgba(15, 18, 49, 0.34) url('img/header/NEWSE.png') top center no-repeat; background-size: 100%">
    <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="title-text text-center" style="margin-top: 145px;">
                <h1>Ваши любимые фильмы и сериалы в любoй точке мира</h1>
                <p style="margin-top: 15px;">EasyTV — современный ТВ сервис. Мы предлагаем интерактивное цифровое телевидение, которое работает везде, где есть Интернет</p>
                <?php
                echo Button::widget([
                        'label'=>'Присоединиться',
                    'options'=>['class'=>'btn join','style'=>'margin-top:20px;']
                ]);
                ?>
            </div>
            <img src="img/header/Polygon.png" class="wow animated bounce">
        </div>
    </div>
</div>
</div>
<!--Why we-->
<div class="why-we" style="background-color: #F8FAFD;">
    <div class="container ">
        <div class="row">
            <div class="col-12"  style="margin-top: 75px;">
                <h1 class="text-center">Почему мы?</h1>
                <p class="text-center" style="width: 80%;padding-top: 20px; margin: 0 auto;">С Easy TV вам не надо платить за каждый просмотренный фильм или программу – оплатив подписку вы можете смотреть неограниченное количество передач в течение оплачиваемого периода.</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="content-why-we text-center">
                    <img src="img/why-we/archive.png" alt="ellipse">
                    <h1>Архив программ</h1>
                    <p>Easy TV поддерживает архивацию 
                    любимых программ и фильмов для 
                    просмотра в удобное для пользователя 
                    время. Сервис позволяет сохранять 
                    нужные передачи в архиве до 14-ти дней</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="content-why-we text-center">
                    <img src="img/why-we/timezone.png" alt="ellipse">
                    <h1>Выбор часового пояса</h1>
                    <p>Не хотите зависеть от ТВ- программы?
                     Смотите передачи с любого уголка мира 
                    в удобное для Вас время - теперь это 
                    возможно благодаря EasyTV. Просто 
                    выберите часовой пояс и смотрите 
                    передачи раньше всех!</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="content-why-we text-center">
                    <img src="img/why-we/partner.png" alt="ellipse">
                    <h1>Партнерская программа</h1>
                    <p>Обеспечить себе
                    дополнительный 
                    доход - это легко, просто присоединитесь
                    к нашей партнерской программе. 
                    Привлекайте клиентов
                    в любой стране 
                    мира и получайте вознаграждение.</p>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!--Presentation-->
<div class="presentation" style="background-color: #F8FAFD;">
    <div class="container" style="padding-top: 70px;padding-bottom: 80px;">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12 text-center text-lg-right">
                <h1 style="font-size: 16px;font-weight: bold;">Хотите узнать больше?</h1>
            </div>
            <div class="col-lg-6 col-md-12 col-12 text-center text-lg-left">
                    <?php
                    echo Button::widget([
                        'label' => 'Закажите презентацию',
                        'options' => ['class' => 'btn btn-outline-seccess more-present text-center', 'style' => 'width: 230px; height: 33px;'],
                    ]);
                    ?>
            </div>
        </div>
    </div>
</div>


<div class="content" style="box-shadow: 0 -2px 10px 2px rgba(0,0,0, 0.1); padding-bottom: 40px;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" style="margin-top: 65px; margin-bottom: 65px;">
                <h1>Контент на любой вкус</h1>
            </div>
                <div class="col-12 col-lg-6 channel">
                    <div class="child">
                        <div class="text">
                            <div class="content-text">
                                <h1>Развивающие каналы для детей</h1>
                                <p>Сказки, мультфильмы, развивающие и образовательные
                                    передачи,
                                    познавательные рассказы о природе,
                                    науке и многое
                                    другое - все для
                                    любознательных мальчиков и
                                    девочек всех
                                    возрастов. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 channel">
                    <div class="girl" style="margin: 15px;">
                        <div class="text">
                            <div class="content-text">
                                <h1>Разнообразный контент для девушек</h1>
                                <p>Милых дам порадуют невероятно интересные
                                    каналы о моде,
                                    здоровье, красоте, кулинарии,
                                    взаимоотношениях, семье и
                                    воспитании детей.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 channel">
                    <div class="men">
                        <div class="text">
                            <div class="content-text">
                                <h1>Каналы для мужчин</h1>
                                <p>Круг мужских интересов широк:
                                    oхота, рыбалка, туризм,
                                    экстремальные виды
                                    спорта, оружие, автомобили, женщины
                                    и много
                                    других. С EasyTV каждый мужчина найдет для
                                    себя что-то интересное и захватывающее.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 channel">
                    <div class="serial">
                        <div class="text">
                            <div class="content-text">
                                <h1>Только лучшие фильмы и сериалы</h1>
                                <p>Всё для настоящих киноманов: классика и
                                    новинки мирового
                                    кино в лучшем качестве, с безупречным переводом и
                                    удобной
                                    подборкой по жанрам</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 channel">
                    <div class="sport">
                        <div class="text">
                            <div class="content-text">
                                <h1>Лучшие спортивные каналы</h1>
                                <p>Не пропускаете ни одного футбольного матча или боксёрского
                                    поединка?
                                    Наслаждайтесь спортивными мероприятиями в HD
                                    качестве: футбол, теннис,
                                    хоккей, баскетбол – всё для астоящих
                                    фанатов.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 channel" style="display: none;">
                    <div class="music">
                        <div class="text">
                            <div class="content-text">
                                <h1>Любимая музыка для любого случая</h1>
                                <p>Для поклонников самой разнообразной
                                    музыки доступно
                                    67 каналов с композициями всех
                                    направлений и жанров для
                                    любого
                                    настроения и времени суток</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 channel  " style="display: none;">
                    <div class="xxx">
                        <div class="text">
                            <div class="content-text">
                                <h1>Каналы для взрослых</h1>
                                <p>ХХХ каналы для самых искушённых
                                    телезрителей.
                                    Безупречное качество
                                    изображения и звука на экранах Вашего
                                    телевизора в любое время суток</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 channel ">
                    <div class="discovery">
                        <div class="text">
                            <div class="content-text">
                                <h1>Мир знаний</h1>
                                <p>Занимательные документальные и научно-популярные фильмы
                                    о природе, технике, истории, географии, астрономии и физике
                                    удовлетворят интересы любознательных зрителей</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 ">
                    <div class="bussines ">
                        <div class="image-bussines" style="margin-top: 15px; min-height: 380px; display: flex;">
                            <div class=" content-text" style="width: 100%;">
                                <div class="text">
                                    <div class="text-in-text">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6" style=" display: flex; align-items: flex-end;">
                                                    <div class="cont">
                                                        <h1>Контент для вашего бизнеса</h1>
                                                        <p>У Вас есть ресторан, бар или отель? Готовы предложить решения для вашего бизнеса.</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 text-center">
                                                    <div class="back" style="margin: 0 auto 20px auto;">
                                                        <p style="width: 85%; margin: 0 auto;">Отправте заявку на бизнес-сотрудничество и мы сообщим подробности предложения</p>
                                                        <input type="email" name="email-bus" placeholder="email@example.com" style="padding: 8px; margin-top: 10px; margin-bottom: 15px;">
                                                        <br>
                                                        <?php
                                                            echo Button::widget([
                                                                    'label' => 'Отправить',
                                                                    'options' => ['class' => 'btn', 'style' => 'color: #fff;'],
                                                            ]);
                                                            ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </div></div></div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>

<div id="pr">
    <div class="container">
        <div class="row " >
            <div class="col-md-12" id="prices">
                <p class="text-center caption" >Цены и условия</p>
                <div class="row " >

                    <div class="col-md-7 col-sm-12">
                        <div>
                            Более 1000 каналов в отличном качестве. Больше не нужно перебирать
                            сайты в поисках любимой озвучки сериала и ждать нудную рекламу казино.
                            Теперь все последние новинки кино всегда с вами.
                        </div>

                        <ul>
                            <li>Гарантия на оборудование</li>
                            <li>Не кардшеринг</li>
                            <li>Не нужна спутниковая тарелка</li>
                        </ul>
                        <div class="comment">	Если вас не устроит количество каналов и контента, мы вернем ваши деньги!</div>
                    </div>

                    <div class="col-md-5 col-sm-12">
                        <img src="img/price/price.png">
                    </div>

                    <div class="row text-center">
                        <div class="col-md-6 col-sm-12">
                            <div id="text-btn">Я — новый клиент</div>
                            <a href="#"><button type="button" class="btn button" id="join-btn">Присоедениться к сервису</button></a>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div id="text-btn">Уже использую EasyTV</div>
                            <a href="#"><button type="button" class="btn button" id="join-btn">Продлить подписку</button></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Present-->
<div class="present  d-flex justify-content-center align-items-center" style="margin-top: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 style="font-size:30px ;line-height:36px ;color:#fff ;">Получайте месяц в подарок за каждого приглашенного друга,
                    который приобретет подписку от 3-х месяцев</h1>
            </div>
        </div>
    </div>
</div>

<!--Feedback-->
<div class="feedback">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" style="margin-top: 65px;margin-bottom: 45px;">
                <h1>Отзывы наших клиентов</h1>
            </div>

            <div class="col-lg-4 col-md-6 feed d-flex justify-content-center">
                <div class="feed-content">
                    <img src="img/feedback/left-quote-mark.png">
                    <p style="margin: 15px 0;">Замечательный сервис. Нравится огромный диапазон каналов.
                        Особо хочу отметить разделение контента по интересам - можно легко найти интересную передачу
                        или фильм для просмотра. Лично мне – требовательному киноману – Easy TV понравился.</p>
                    <p class="signature">Алексей Т., Россия</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 feed d-flex justify-content-center" >
                <div class="feed-content">
                    <img src="img/feedback/left-quote-mark.png">
                    <p style="margin: 15px 0;">Спасибо за первоклассное обслуживание. Приставка – просто класс. С ней интереснее ездить в длительные командировки и на отдых.
                        И доставили приставку оперативно, ничего не скажешь. В общем, отлично работаете, ребята, так держать!</p>
                    <p class="signature">Наталия В., Украина</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 feed d-flex justify-content-center">
                <div class="feed-content">
                    <img src="img/feedback/left-quote-mark.png">
                    <p style="margin: 15px 0;">Как человек, поработавший в сфере телевидения, могу сказать, что Easy TV способно удовлетворить даже самые утонченные вкусы.
                        Я мало видел сервисов, которые предоставляют такой большой спектр контента, и обеспечивают такое качество вещания.</p>
                    <p class="signature">Владимир Д., Россия</p>
                </div>
            </div>

            <div class="col-12 text-center" style="margin-top: 65px;">
                <h1>Партнерская программа</h1>
                <p>Ищем своего партнера в каждой стране</p>
                <p style=" width: 68%; margin: 40px auto 65px auto;">Будем рады сотрудничать с Вами по агентской схеме, в рамках которой Вы работаете
                    только над привлечением клиентов и согласовываете условия подключения.
                    Всю работу по регистрации мерчанта в платежных системах, заключение договора,
                    интеграцию и поддержку мы будем осуществлять сами. Вам мы гарантируем часть
                    комиссии в качестве агентского вознаграждения.</p>
            </div>
        </div>
    </div>
</div>

<!--feedback form-->
<div class="feedback-form">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" style="margin-top: 60px;">
                
                <h1 style="font-size: 20px; line-height: 24px; color: #fff !important; margin-bottom: 30px;">Хотите сотрудничать или задать вопрос?</h1>
            </div>

            <div class="col-md-4 text-md-right text-center"  style="margin: 5px 0;">
                <label for="name"><h1>Имя</h1></label>
            </div>
            <div class="col-md-8 text-center text-md-left" style="margin: 5px 0;">
                <input id="telNo" name="name" type="text" style="padding: 8px;" placeholder="Имя Фамилия">
            </div>

            <div class="col-md-4 text-md-right text-center" style="margin: 5px 0;">
                <label for="email"><h1>E-mail</h1></label>
                        
            </div>
            <div class="col-md-8 text-center text-md-left" style="margin: 5px 0;">
                <input type="email" name="email" id="name" placeholder="email@example.com" style="padding: 8px;">
            </div>

            <div class="col-md-4 text-md-right text-center" style="margin: 5px 0;">
                <label for="telNo"><h1>Номер телефона</h1></label>    
            </div>
            <div class="col-md-8 text-center text-md-left" style="margin: 5px 0;">
                <input type="tel" placeholder="999-999-999-99" minlength="9" maxlength="14" style="padding: 8px;">
            </div>
            <div class="col-md-4 text-md-right text-center"></div>
            <div class="col-md-8 text-center text-md-left" style="margin: 5px 0;">
                <textarea placeholder="Ваше сообщение"  style="margin: 5px 0; padding: 8px;"></textarea>
            </div>
            <div class="col-12 text-center" style="margin-top: 30px; margin-bottom: 35px; ">
                <?php
                    echo Button::widget([
                            'label' => 'Отправить',
                            'options' => ['class' => 'btn', 'style' => 'color: #fff;'],
                    ]);
                    ?>
            </div>
        </div>
    </div>
</div>