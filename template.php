<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300&amp;subset=cyrillic" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"
             integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>-->

    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <!-- Для портфолио -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">-->


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/helper.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/slider-style.css"/>
    <link rel="stylesheet" type="text/css" href="css/slider-custom.min.css"/>
    <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>


    <link rel="stylesheet" href="css/animate-head.css">
    <script src="js/modernizr.js"></script>

    <title>WebSpace</title>
</head>
<body>

<div id="p_prldr">
    <div class="contpre">
        <span class="svg_anm"></span>
    </div>
</div>


<div class="main-active-tmp main-none">

    <div class="fixed-top">

        <a class="test btn_link" href="#portfolio">
            <button class="btn btn-primary btn-portfolio-back">Назад</button>
        </a>

    </div>

    <img src="images/1.jpg" style="-webkit-user-select: none;cursor: zoom-out;" class="img-fluid">
</div>

<div class="main-content-tmp">
    <!-- шапка -->
    <nav class="navbar navbar-expand-md navbar-hidden">
        <div class="container">
            <a class="navbar-brand" href="#showcase">WEB<i class="fas fa-circle-notch"></i>Space</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <i id="icon-hamburger" class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#services"><span>О</span> <span>нас</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#portfolio"><span>П</span><span>ортфолио</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#price-section"><span>С</span><span>тоимость</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#buyfirst"><span>О</span><span>формить заказ</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#konsult" data-toggle="modal"
                           data-target="#exampleModal"><span>К</span>онсультация</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Стрелка -->

    <a class="test fixed-bottom arrow" href="#showcase">
        <i class="fas fa-chevron-circle-up arrowUp"></i>
    </a>


    <!-- Модальное окно на консультации-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="position: relative; left: 38%">
                        Консультация</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form id="consultation-form">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputName" placeholder="Имя"
                                       required>
                                <div class="invalid-feedback">
                                    Введите,пожалуйста,корректное имя
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputNumber" placeholder="Телефон"
                                       required>
                                <div class="invalid-feedback">
                                    Введите,пожалуйста,корректный номер
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" style="position: relative; left: 40%">
                                Отправить
                            </button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Курсор и бекраунд -->
    <section id="showcase">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center caption">
                    <h3 class="alt-font no-margin ">Web-студия №1 в Украине</h3>
                    <h3 class="cd-headline clip ">
                        <span>Решения для вашего</span>
                        <span class="cd-words-wrapper">
				        <b class="is-visible">бизнеса</b>
                        <b>стартапа</b>
				        <b>товара</b>
			        </span>
                    </h3>
                    <p class="margin-30px-bottom sm-margin-20px-bottom d-md-block kursor_text3">Landing Page, интернет
                        магазин,
                        сайт-визитка, реклама, и многое другое.</p>
                    <a class="test arrow_down" href="#newsletter">
                        <i class="fas fa-chevron-circle-down arrowDown"></i>
                    </a>
                </div>
            </div>


        </div>

    </section>

    <!-- Нет времени читать -->
    <section id="newsletter" class="bg-dark text-white py-2">
        <h4 class="text-center" style="position: relative; top: 20px">Нет времени читать? Оставьте свой номер и мы
            перезвоним</h4>
        <div class="container pt-5 pb-4">
            <form id="fast-form">
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <input type="text" class="form-control form-control-md" placeholder="Имя" required>
                        <div class="invalid-feedback">
                            Введите,пожалуйста,корректное имя
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <input type="text" class="form-control form-control-md" placeholder="Телефон" required>
                        <div class="invalid-feedback">
                            Введите,пожалуйста,корректный номер
                        </div>
                    </div>
                    <div class="col-md-4">
                        <input class="btn btn-primary  btn-block" TYPE="submit" value="Оптравить">
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- о нас -->
    <section id="services" class="bg-white padding-60px-tb" data-scroll-index="2">
        <div class="head-text mb-5 text-center wow slideInUp" data-wow-duration="1s">
            <div class="alt-font text-center text-uppercase letter-spacing-1 text-pink-color">О нас</div>
            <h3 class="font-weight-300 text-center mb-3">Почему <span class="font-weight-600">мы</span> <span
                        class="d-none d-sm-inline">заслуживаем вашего внимания</span></h3>
            <div class="separator-line-horrizontal-medium-light2 bg-pink center-col m-auto"></div>
        </div>
        <div class="container">
            <div class="row">
                <!-- start services item -->
                <div class="col-lg-3 pt-3 col-md-6 about mb-sm-3 wow slideInRight" data-wow-duration="1.2s">
                    <div class="card ">
                        <div class="text-center"><i class="fas fa-paint-brush"></i></div>
                        <div class="text-center mt-3">Уникальный дизайн</div>
                        <div class="separator-line-horrizontal-medium-light3 bg-pink center-col margin-15px-bottom margin-15px-top"></div>
                        <p class="card-body ForMetric1 text-left">Мы предлагаем уникальный, качественый и стильный
                            дизайн,
                            который придется по вкусу вашим клиентам. </p>
                    </div>
                </div>
                <!-- end services item -->

                <!-- start services item -->
                <div class="col-lg-3 pt-3 col-md-6 about mb-sm-3 wow slideInRight" data-wow-duration="1.3s">
                    <div class="card ">
                        <div class="text-center"><i class="fas fa-rocket"></i></div>
                        <div class="text-center mt-3">Оптимизация</div>
                        <div class="separator-line-horrizontal-medium-light3 bg-pink center-col margin-15px-bottom margin-15px-top"></div>
                        <p class="card-body  ForMetric1 text-left">Долгая загрузка сайта - одна из причин утраты
                            клиетов.
                            Наша команда профессиональных web-разработчиков с легкостью решит эту проблему.</p>
                    </div>
                </div>
                <!-- end services item -->

                <!-- start services item -->
                <div class="col-lg-3 pt-3 col-md-6 about mb-sm-3 wow slideInRight" data-wow-duration="1.4s">
                    <div class="card ">
                        <div class="text-center"><i class="fas fa-volume-up"></i></div>
                        <div class="text-center mt-3">Реклама</div>
                        <div class="separator-line-horrizontal-medium-light3 bg-pink center-col margin-15px-bottom margin-15px-top"></div>
                        <p class="card-body  text-left ForMetric1">Ключ к продвижению успешного сайта - грамотная
                            реклама.
                            Ваш сайт сможет продвигаться в контекстной рекламе.</p>
                    </div>
                </div>
                <!-- end services item -->

                <!-- start services item -->
                <div class="col-lg-3 pt-3 col-md-6 about mb-sm-3 wow slideInRight" data-wow-duration="1.5s">
                    <div class="card ">
                        <div class="text-center"><i class="fas fa-heart"></i></div>
                        <div class="text-center mt-3">Перспектива</div>
                        <div class="separator-line-horrizontal-medium-light3 bg-pink center-col margin-15px-bottom margin-15px-top"></div>
                        <p class="card-body  ForMetric1 text-left ">Мы нацелены <br>на долгосрочное сотрудничество,
                            поэтому
                            делаем работу качественно и быстро</p>
                    </div>
                </div>
                <!-- end services item -->


            </div>
            <div class="head-text mt-3 mb-5 text-center wow slideInUp" data-wow-duration="1s">
                <div class="alt-font text-center text-uppercase letter-spacing-1 text-pink-color">Результат</div>
                <h3 class="font-weight-300 text-center mb-3">О результате <span class="font-weight-600">простыми</span>
                    словами</h3>
                <div class="separator-line-horrizontal-medium-light2 bg-pink center-col m-auto"></div>
            </div>
            <div class="row">
                <!-- start services item -->
                <div class="col-lg-3 pt-3 col-md-6 about mb-sm-3 wow slideInRight" data-wow-duration="1.2s">
                    <div class="card ">
                        <div class="text-center"><i class="fas fa-home"></i></div>
                        <div class="text-center mt-3">Сайт визитка</div>
                        <div class="separator-line-horrizontal-medium-light3 bg-pink center-col margin-15px-bottom margin-15px-top"></div>
                        <p class="card-body text-left ForMetric">Вся информация о вашей компании красиво оформлена в
                            интернете.</p>
                    </div>
                </div>
                <!-- end services item -->

                <!-- start services item -->
                <div class="col-lg-3 pt-3 col-md-6 about mb-sm-3 wow slideInRight" data-wow-duration="1.3s">
                    <div class="card ">
                        <div class="text-center"><i class="fas fa-fighter-jet"></i></div>
                        <div class="text-center mt-3">Landing page</div>
                        <div class="separator-line-horrizontal-medium-light3 bg-pink center-col margin-15px-bottom margin-15px-top"></div>
                        <p class="card-body text-left ForMetric">Вы получаете страницу, которая будет призывать
                            посетителей к заказу товара/услуги.</p>
                    </div>
                </div>
                <!-- end services item -->

                <!-- start services item -->
                <div class="col-lg-3 pt-3 col-md-6 about mb-sm-3 wow slideInRight" data-wow-duration="1.4s">
                    <div class="card ">
                        <div class="text-center"><i class="fas fa-space-shuttle"></i></div>
                        <div class="text-center mt-3">Интернет магазан</div>
                        <div class="separator-line-horrizontal-medium-light3 bg-pink center-col margin-15px-bottom margin-15px-top"></div>
                        <p class="card-body text-left ForMetric">Все ваши товары/услуги расположены на одном сайте и
                            готовы к продаже.</p>
                    </div>
                </div>
                <!-- end services item -->

                <!-- start services item -->
                <div class="col-lg-3 pt-3 col-md-6 about mb-sm-3 wow slideInRight" data-wow-duration="1.5s">
                    <div class="card ">
                        <div class="text-center"><i class="far fa-chart-bar"></i></div>
                        <div class="text-center mt-3">Рекламные услуги</div>
                        <div class="separator-line-horrizontal-medium-light3 bg-pink center-col margin-15px-bottom margin-15px-top"></div>
                        <p class="card-body text-left ForMetric">О вашем товаре/услуге узнают только те люди, которые
                            уже готовы сделать заказ.</p>
                    </div>
                </div>
                <!-- end services item -->
            </div>
        </div>
    </section>

    <!-- Числа -->
    <section class="numbers bg-light-gray py-5" data-scroll-index="2">
        <div>
            <div class="container">
                <div class="row">
                    <!-- start counter item -->
                    <div class="col-lg-3 col-md-6">
                        <div class="item text-center">
                            <div class="text-center"><i class="fas fa-hourglass-start"></i></div>
                            <h6>2016</h6>
                            <p>Год нашего основания</p>
                            <div class="separator-line-horrizontal-medium-light3 bg-pink center-col margin-15px-top"></div>
                        </div>
                    </div>
                    <!-- end counter item -->

                    <!-- start counter item -->
                    <div class="col-lg-3 col-md-6">
                        <div class="item text-center">
                            <div class="text-center"><i class="fas fa-users"></i></div>
                            <h6>7</h6>
                            <p>Количество сотрудников</p>
                            <div class="separator-line-horrizontal-medium-light3 bg-pink center-col margin-15px-top"></div>
                        </div>
                    </div>
                    <!-- end counter item -->

                    <!-- start counter item -->
                    <div class="col-lg-3 col-md-6">
                        <div class="item text-center">
                            <div class="text-center"><i class="fas fa-cloud-download-alt"></i></div>
                            <h6>53</h6>
                            <p>Реализованных проектов</p>
                            <div class="separator-line-horrizontal-medium-light3 bg-pink center-col margin-15px-top"></div>
                        </div>
                    </div>
                    <!-- end counter item -->

                    <!-- start counter item -->
                    <div class="col-lg-3 col-md-6">
                        <div class="item text-center">
                            <div class="text-center"><i class="fas fa-chart-line"></i></div>
                            <h6 id="codelines">30000</h6>
                            <p>Строк кода</p>
                            <div class="separator-line-horrizontal-medium-light3 bg-pink center-col margin-15px-top"></div>
                        </div>
                    </div>
                    <!-- end counter item -->
                </div>
            </div>
        </div>
    </section>

    <!-- Портфолио -->
    <section id='portfolio' class="py-4" data-scroll-index="3">
        <div class="container ">
            <div class="head-text mb-5 text-center wow slideInUp" data-wow-duration="1s">
                <div class="alt-font text-center text-uppercase letter-spacing-1 text-pink-color">Портфолио</div>
                <h3 class="font-weight-300 text-center mb-3">Наши <span class="font-weight-600">проекты</span></h3>
                <div class="separator-line-horrizontal-medium-light2 bg-pink center-col m-auto"></div>
            </div>

            <div class="row portfoli-row">

                <div class="col-sm-12 col-md-4">
                  <span class="lightbox portfolio_card_1">
                   <img src="images/1_min.jpg" class="img-fluid" alt="Bridge">
                </span>

                </div>

                <div class="col-sm-6 col-md-4">
                <span class="lightbox portfolio_card_2">
                    <img src="images/2_min.jpg" class="img-fluid" alt="Park">
                </span>
                </div>
                <div class="col-sm-6 col-md-4">
                <span class="lightbox portfolio_card_3">
                    <img src="images/3_min.jpg" class="img-fluid" alt="Tunnel">
                </span>
                </div>
            </div>
            <div class="row portfoli-row">
                <div class="col-sm-12 col-md-4">
                <span class="lightbox portfolio_card_4">
                    <img src="images/4_min.jpg" class="img-fluid" alt="Traffic">
                </span>
                </div>
                <div class="col-sm-6 col-md-4">
                <span class="lightbox portfolio_card_5">
                    <img src="images/5_min.jpg" class="img-fluid" alt="Coast">
                </span>
                </div>
                <div class="col-sm-6 col-md-4">
                <span class="lightbox portfolio_card_6">
                    <img src="images/6_min.jpg" class="img-fluid" alt="Rails">
                </span>
                </div>

            </div>

        </div>

    </section>

    <!----------------- Вторая часть------------------>
    <!--id="order-and-sale"-->
    <section class="py-5 timer-color
<?php
    if ($From <= $Now) echo 'd-none';
    ?>
">
        <div class="head-text mb-5 wow slideInUp" data-wow-duration="1s">
            <div class="alt-font text-center text-uppercase letter-spacing-1 text-pink-color">Стоимость</div>
            <h3 class="font-weight-300 text-center mb-3">Рассчитать <span class="font-weight-600">стоимость</span> <span
                        class="d-none d-sm-inline">будущего сайта</span></h3>
            <div class="separator-line-horrizontal-medium-light2 bg-pink center-col m-auto"></div>
        </div>
        <div class="container">
            <div class="d-none" id="from">
                <?= $From->format('M d, Y  H:i:s') ?>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class=" text-center" id="clock">
                    </div>
                    <div id="units" class="text-center">
                        <span class="lead">Дней</span>
                        <span class="lead">Часов</span>
                        <span class="lead">Минут</span>
                        <span class="lead">Секунд</span>
                    </div>
                    <p class="lead text-md-right">
                        Оформите заказ в течении 2 суток с момента первого визита на сайт и получите скидку 10% на
                        итоговую
                        сумму заказа.
                    </p>
                    <div class="text-center">
                        <a class="test" href="#price-section">
                            <button class="btn mb-4">Подробнее о стоимости</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-5">
                    <form id="first-large-form">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <input type="text" placeholder="Имя" class="form-control" required>
                                <div class="invalid-feedback">
                                    Введите,пожалуйста,корректное имя
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <input type="text" placeholder="Телефон" class="form-control" required>
                                <div class="invalid-feedback">
                                    Введите,пожалуйста,корректный телефон
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <input type="text" placeholder="E-mail" class="form-control" required>
                            </div>
                            <div class="col-12 mb-3">
                                <select name="site-type" class="form-control">
                                    <option value="tarif">Выбрать тариф</option>
                                    <option value="vizitka">Визитка</option>
                                    <option value="landing">Лендинг</option>
                                    <option value="magaz">Интернет-магазин</option>
                                    <option value="drugoe">Другое</option>
                                </select>
                            </div>
                            <!--<input type="hidden" name="sale" value="1">-->
                            <div class="col-12">
                                <input type="submit" value="Отправить" class="btn btn-block">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <section id="stages" class="pt-5" style="min-height: 300px;">
        <div class="head-text mb-5 wow slideInUp" data-wow-duration="1s">
            <div class="alt-font text-center text-uppercase letter-spacing-1 text-pink-color">Этапы</div>
            <h3 class="font-weight-300 text-center mb-3">Этапы <span class="font-weight-600">работы</span> <span
                        class="d-none d-sm-inline">наших проектов</span></h3>
            <div class="separator-line-horrizontal-medium-light2 bg-pink center-col m-auto"></div>
        </div>

        <!--container-->
        <div class="  demo-1">
            <div id="slider" class="sl-slider-wrapper">

                <div class="sl-slider">

                    <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25"
                         data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                        <div class="sl-slide-inner">
                            <div class="deco">
                                <div class="image" id="pergament"></div>
                            </div>
                            <h2>Бриф</h2>
                            <blockquote><p>После заполнения брифа и внесения предоплаты 30% от суммы - мы приступаем к
                                    работе</p>
                            </blockquote>
                        </div>
                    </div>

                    <div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10"
                         data-slice2-rotation="-15"
                         data-slice1-scale="1.5" data-slice2-scale="1.5">
                        <div class="sl-slide-inner">
                            <div class="deco">
                                <div class="image" id="search"></div>
                            </div>
                            <h2>Анализ рынка</h2>
                            <blockquote><p>После тщательного анализа рынка мы создаем прототип сайта</p></blockquote>
                        </div>
                    </div>

                    <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="3"
                         data-slice2-rotation="3"
                         data-slice1-scale="2" data-slice2-scale="1">
                        <div class="sl-slide-inner">
                            <div class="deco">
                                <div class="image" id="brush"></div>
                            </div>
                            <h2>Дизайн</h2>
                            <blockquote><p>Передаем прототип дизайнеру,
                                    он в свою очередь наполянет его красками и стилем. Показываем вам и вносим
                                    поправки,если
                                    это
                                    необходимо
                                </p>
                            </blockquote>
                        </div>
                    </div>

                    <div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="-5"
                         data-slice2-rotation="25"
                         data-slice1-scale="2" data-slice2-scale="1">
                        <div class="sl-slide-inner">
                            <div class="deco">
                                <div class="image" id="code-icon"></div>
                            </div>

                            <h2>Верстка</h2>
                            <blockquote><p>Передаем шаблон программисту и он превращает его в сайт.
                                    Вносим поправки, по вашему желанию</p></blockquote>
                        </div>
                    </div>

                    <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-5"
                         data-slice2-rotation="10"
                         data-slice1-scale="2" data-slice2-scale="1">
                        <div class="sl-slide-inner">
                            <div class="deco">
                                <div class="image" id="graphic"></div>
                            </div>
                            <h2>Реклама</h2>
                            <blockquote><p>Настраиваем те виды рекламы, которые вы выбирите при заполнении брифа.</p>
                            </blockquote>
                        </div>
                    </div>

                    <div class="sl-slide bg-2" data-orientation="horizontal" data-slice1-rotation="-5"
                         data-slice2-rotation="10"
                         data-slice1-scale="2" data-slice2-scale="1">
                        <div class="sl-slide-inner">
                            <div class="deco">
                                <i class="fas fa-users slider-custom-icon"></i>
                            </div>
                            <h2>Клиенты</h2>

                            <blockquote><p>Вы получаете довольных клиентов</p></blockquote>
                        </div>
                    </div>

                </div><!-- /sl-slider -->

                <nav id="nav-arrows" class="nav-arrows">
                    <span class="nav-arrow-prev">Previous</span>
                    <span class="nav-arrow-next">Next</span>
                </nav>

                <!--<nav id="nav-dots" class="nav-dots">
                    <span class="nav-dot-current"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </nav>-->

            </div><!-- /slider-wrapper -->

        </div>


    </section>


    <section id="price-section" class="py-5">
        <div class="head-text mb-5 wow slideInUp" data-wow-duration="1s">
            <div class="alt-font text-center text-uppercase letter-spacing-1 text-pink-color">Цена</div>
            <h3 class="font-weight-300 text-center mb-3">Стоимость <span class="font-weight-600">сайта</span></h3>
            <div class="separator-line-horrizontal-medium-light2 bg-pink center-col m-auto"></div>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-lg-4 wow slideInRight" data-wow-duration="1.1s">
                    <div class="card mb-3 item">
                        <div class="c-header text-center mb-2">
                            <i class="fas fa-briefcase"></i>
                            <h4 class="card-title ">Визитка</h4>
                        </div>

                        <div class="price text-center">
                            <h4 class="py-4"><span class="text-pink-color from">от&nbsp;</span>200$</h4>
                        </div>

                        <div class="card-body text-dark text-center">
                            <ul class="card-text text-left">
                                <li>Современный дизайн</li>
                                <li>Адаптивная версия
                                    <div class="text-muted">(для моб. устройств)</div>
                                </li>
                                <li>Кроссбраузерность</li>
                                <li>Наполнение до 10 страниц</li>
                                <li>Базовая SEO оптимизация</li>
                                <li>Статистика посещений</li>
                                <li>Карта проезда</li>
                                <li>Форма обратной связи</li>
                                <li>Поддержка в течении 20 дней</li>
                                <li>Домен и хостинг на 365 дней &nbsp; <i class="fas fa-gift"></i></li>
                                <li>Срок выполнения - до 7 дней</li>
                            </ul>
                            <button class="btn mt-2 " data-toggle="modal" data-target="#buyfirst">Заказать</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInRight" data-wow-duration="1.2s">

                    <div class="card mb-3 item active">
                        <div class="c-header text-center mb-2">
                            <i class="fas fa-rocket"></i>
                            <h4 class="card-title ">Landing page</h4>
                        </div>
                        <div class="price text-center">
                            <h4 class="py-4"><span class="text-pink-color from">от&nbsp;</span>300$</h4>
                        </div>
                        <div class="card-body text-dark text-center">
                            <ul class="card-text text-left">
                                <li>Индивидуальны дизайн</li>
                                <li>Адаптивная версия
                                    <div class="text-muted">(для моб. устройств)</div>
                                </li>
                                <li>Кроссбраузерность
                                    <div class="text-muted">(для всех браузеров)</div>
                                </li>
                                <li>Анализ целевой аудитории</li>
                                <li>Анализ конкурентов</li>
                                <li>Копирайтинг
                                    <div class="text-muted">(удешевляет рекламу)</div>
                                </li>
                                <li>Настройка контекстной рекламы
                                    <div class="text-muted">(Google Adwords)</div>
                                </li>
                                <li>Подключение google analytics</li>
                                <li>Домен и хостинг на 180 дней &nbsp; <i class="fas fa-gift"></i></li>
                                <li>50$ на рекламу &nbsp; <i class="fas fa-gift"></i></li>
                                <li>Поддержка в течении 20 дней</li>
                                <li>Срок выполнения - до 10 дней</li>
                            </ul>
                            <button class="btn mt-2" data-toggle="modal" data-target="#buyfirst">Заказать</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 wow slideInRight" data-wow-duration="1.3s">
                    <div class="card mb-3 item">
                        <div class="c-header text-center mb-2">
                            <i class="fas fa-gem"></i>
                            <h4 class="card-title">Интернет - магазин</h4>
                        </div>
                        <div class="price text-center">
                            <h4 class="py-4"><span class="text-pink-color from">от&nbsp;</span>500$</h4>
                        </div>
                        <div class="card-body text-dark text-center">
                            <ul class="card-text text-left">
                                <li>Индивидуальная CMS
                                    <div class="text-muted"> (личный кабинет, админка, тд.)</div>
                                </li>
                                <li>Индивидуальный дизайн</li>
                                <li>Адаптивность</li>
                                <li>Оптимизация контента для быстрой загрузки сайта</li>
                                <li>Защита от атак</li>
                                <li>SMS уведомления о заказе клиента</li>
                                <li>Базовые модули</li>
                                <li>Удобная навигация</li>
                                <li>Базовая SEO оптимизация</li>
                                <li>Неограниченное количество товаров</li>
                                <li>Подключение google analytics</li>
                                <li>Поддержка в течении 30 дней</li>
                                <li>Домен и хостинг на 365 дней &nbsp; <i class="fas fa-gift"></i></li>
                                <li>Срок выполнения - от 20 дней</li>
                            </ul>
                            <button class="btn mt-2" data-toggle="modal" data-target="#buyfirst">Заказать</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Модальные окна для прайс листа -->
    <div class="modal fade" id="buyfirst" tabindex="-1" role="dialog"
         aria-labelledby="buyfirst" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <!--style="position: absolute;left: 32%;"-->
                    <h5 style="width: 100%;" class="modal-title text-center" id="buyfirstLabel">Оформить заказ</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form id="buyfirst-form">
                            <div class="form-group">
                                <input type="text" class="form-control" id="buyfirstName" placeholder="Имя" required>
                                <div class="invalid-feedback">
                                    Введите,пожалуйста,корректное имя
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="buyfirstNumber" placeholder="Телефон"
                                       required>
                                <div class="invalid-feedback">
                                    Введите,пожалуйста,корректный номер
                                </div>
                            </div>


                            <div class="form-group">
                                <input type="email" class="form-control" id="buyfirstMail" placeholder="E-Mail"
                                       required>
                                <div class="invalid-feedback">
                                    Введите,пожалуйста,корректный E-Mail
                                </div>
                            </div>
                            <div class="form-group">
                                <select name="site-type" class="form-control">
                                    <option value="tarif">Выбрать тариф</option>
                                    <option value="vizitka">Визитка</option>
                                    <option value="landing">Лендинг</option>
                                    <option value="magaz">Интернет-магазин</option>
                                    <option value="drugoe">Другое</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">
                                    Отправить
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <section id="questions" class="text-white" data-wow-duration="1s">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 general-info" style="padding: 0px !important;">
                    <div class="w-100 h-100 bg-dark py-3">
                        <div class="head-text mb-5">
                            <div class="alt-font text-center text-uppercase letter-spacing-1 text-pink-color">
                                Расположение
                            </div>
                            <h3 class="font-weight-300 text-center mb-3">Наши <span
                                        class="font-weight-600">контакты</span>
                            </h3>
                            <div class="separator-line-horrizontal-medium-light2 bg-pink center-col m-auto"></div>
                        </div>
                        <div class="loc-info mt-5 text-center ">
                            <i class="fas fa-mobile-alt"></i>
                            <h6>Телефон</h6>
                            <p class="text-mutet my-0">+380-324-123-12-33</p>
                            <p class="text-mutet">+380-324-123-12-33</p>
                        </div>
                        <div class="loc-info mt-3 text-center">
                            <i class="fas fa-envelope-open"></i>
                            <h6>Почта</h6>
                            <p class="text-mutet">mail@webspace.net.ua</p>
                        </div>
                        <div class="loc-info mt-3 text-center">
                            <i class="fas fa-map-marker"></i>
                            <h6>Мы в соц. сетях</h6>
                            <p class="text-mutet">
                                <i class="fab fa-facebook-square pr-3"></i>
                                <i class="fab fa-instagram"></i>
                            </p>
                        </div>
                    </div>
                    <!-- <div class="toggle-icon"><i class="fas fa-map-marker"></i></div>-->
                </div>

                <div class="col-md-6 py-3 text-dark">
                    <div class="head-text mb-5">
                        <div class="alt-font text-center text-uppercase letter-spacing-1 text-pink-color">Вопросы</div>
                        <h3 class="font-weight-300 text-center mb-3">Остались <span
                                    class="font-weight-600">вопросы?</span>
                        </h3>
                        <div class="separator-line-horrizontal-medium-light2 bg-pink center-col m-auto"></div>
                    </div>
                    <div class="container">
                        <form id="second-large-form">
                            <div class="row">
                                <div class="col-12 mb-4 text-center">
                                    <input type="text" placeholder="Ваше имя" class="form-control" required>
                                    <div class="invalid-feedback">
                                        Введите,пожалуйста,корректное имя
                                    </div>
                                </div>
                                <div class="col-12 mb-4 text-center">
                                    <input type="text" placeholder="Телефон" class="form-control" required>
                                    <div class="invalid-feedback">
                                        Введите,пожалуйста,корректный телефон
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <input type="email" placeholder="E-mail" class="form-control" required>
                                </div>

                                <div class="col-12 mb-4">
                                    <textarea class="form-control" placeholder="Комментарий"></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-dark">Отправить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-3 bg-dark">
        <div class="container">
            <div class="row ">
                <div class="col-12 text-center text-white">
                    &copy; 2016-2018 WebSpace
                </div>
                <!--<div class="col icons text-right">
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-twitter-square"></i>
                    <i class="fab fa-instagram"></i>
                </div>-->
            </div>
        </div>

    </footer>
    <div id="thanks-window" class="window">
        <div class='content text-center alert-success'>
            <h4>Спасибо! Мы перезвоним Вам в ближайшее время</h4>
        </div>
    </div>

    <div id="error-window" class="window">
        <div class='content text-center alert-danger'>
            <h4 class="">Ошибка при отправке.Повторите попытку.</h4>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>-->


<script src="js/animate-header.js"></script>
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>-->
<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
<script type="text/javascript" src="js/slitslider.min.js"></script>
<script type="text/javascript">
    $(function () {

        var Page = (function () {

            var $navArrows = $('#nav-arrows'),
                $nav = $('#nav-dots > span'),
                slitslider = $('#slider').slitslider({
                    onBeforeChange: function (slide, pos) {

                        $nav.removeClass('nav-dot-current');
                        $nav.eq(pos).addClass('nav-dot-current');

                    }
                }),

                init = function () {

                    initEvents();

                },
                initEvents = function () {

                    // add navigation events
                    $navArrows.children(':last').on('click', function () {

                        slitslider.next();
                        return false;

                    });

                    $navArrows.children(':first').on('click', function () {

                        slitslider.previous();
                        return false;

                    });

                    $nav.each(function (i) {

                        $(this).on('click', function (event) {

                            var $dot = $(this);

                            if (!slitslider.isActive()) {

                                $nav.removeClass('nav-dot-current');
                                $dot.addClass('nav-dot-current');

                            }

                            slitslider.jump(i + 1);
                            return false;

                        });

                    });

                };

            return {init: init};

        })();

        Page.init();

    });
</script>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<script src="js/index.js"></script>
</body>
</html>