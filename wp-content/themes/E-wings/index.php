<?php
    get_header();
?>
    

    <section class="promo pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 pt-4 promo-wrapper">
                    <div class="promo-block text-center text-md-center text-lg-left">
                        <p class="promo-subheading r">
                            Будь вільним
                        </p>
                        <h1 class="promo-title pt-0 text-center text-lg-left">
                            <span>Візьми</span>
                            E-wings
                        </h1>
                    </div>
                    <div class="promo-how ">
                        <div
                            class="how pt-4 d-flex flex-column align-items-center d-md-block text-md-center text-lg-left">
                            <a href="#go" class="how__go  mb-3 mr-0 mr-md-4">
                                Поїхали
                            </a>
                            <a href="#how" class="how__work">
                                Як це працює?
                            </a>
                        </div>
                    </div>
                    <div
                        class="promo-store d-block justify-content-between text-center mt-5 d-md-flex text-md-center text-lg-left flex-md-column">
                        <a href="#" class="mr-sm-2">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/app-store.png" alt="App-Store">
                        </a>
                        <a href="#" class="mt-4">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/google-play.png" alt="Google-Play">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">

            </div>
        </div>

            <!-- Модальное окно 1 -->
          <div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="modalLabel1">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <img src="<?php echo bloginfo('template_url'); ?>/assets/images/logo.svg" alt="">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                    <span aria-hidden="true" class="close">
                        <img class="close-img" src="<?php echo bloginfo('template_url'); ?>/assets/images/close-icon.svg" alt="">
                    </span>
                  </button>
                </div>

                <div class="modal-body">
                    <h4 style="color: #52C600" class="text-center">
                        Ми зв’яжемося з вами в лічені хвилини
                    </h4>
                  <!-- Содержимое модального окна 1 -->
                    <p>
                        <input type="text" name="text" placeholder="Введіть ваше ім'я">
                    </p>
                    <p>
                        <input type="tel" name="tel">
                    </p>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Дзвонити
                    </button>
                </div>

              </div>
            </div>
          </div>


      

     
        <p class="modal-box">
            <a type="button" class="btn-modal" data-toggle="modal" data-target="#modal-1">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/images/Кнопка зворотнього дзвінка.svg" alt="">
            </a>
        </p>
      
        
        
      

    </section>

    <section id='go' class="about mb-5">
        <div class="container">
            <div class="row about-row d-flex justify-content-between">
                <div class="col-lg-8">
                    <div class="block-about">
                        <span class="block-about__subheading text-uppercase">
                            Про проект
                        </span>
                        <h2 class="block-about__title">
                            E-wings це не просто перший шерінг електросамокатів в Україні
                        </h2>
                        <p class="block-about__desc">
                            <span style="color: #52C600; font-size: 40px; font-weight: bold;">E</span>
                            wings це проект пополяризації альтернативних видів транспорту який допоможе дістатись швидко
                            в потрібну локацію, не створюючи транспортних заторів і без забруднення повітря. e-wings —
                            це партнерська програма яка допоможе тобі внести свій вклад в проект та навіть отримувати за
                            це відсоток.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="about-pic">
                        <img class="about-img img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/about-img.png" alt="About">
                    </div>
                </div>
            </div>
            <div class="row mt-5 d-flex justify-content-between">
                <div class="col-6 mb-md-3 col-lg-3 d-flex">
                    <div class="about-item d-flex flex-column text-center px-3 py-5">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon-tel.svg" alt="">
                        <p class="about-item__title pt-3">
                            Зручний мобільний додаток
                        </p>
                        <span class="about-item__desc pb-5">
                            Наш додаток для IOS та Android завжди під рукою. Він продуманий і розроблений під потреби
                            наших користувачів. Ми цінуємо ваш час.
                        </span>
                    </div>
                </div>
                <div class="col-6 mb-md-3 col-lg-3 d-flex">
                    <div class="about-item d-flex flex-column text-center px-3 py-5">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon-shield.svg" alt="">
                        <p class="about-item__title pt-3">
                            Комфорт і Швидкість
                        </p>
                        <span class="about-item__desc ">
                            Наші самокати та велосипеди розвивають швидкість до 25 км/год. Обладнані додатковими
                            амортизаторами для комфорту вашої поїздки.
                        </span>
                    </div>
                </div>
                <div class="col-6 mb-md-3 col-lg-3 d-flex">
                    <div class="about-item d-flex flex-column text-center px-3 py-5">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon-samokat.svg" alt="">
                        <p class="about-item__title pt-3">
                            Якісний транспорт
                        </p>
                        <span class="about-item__desc pb-5">
                            We have developed more than 100 successful projects in various subjects, so we clearly know
                            what makes online stores profitabl
                        </span>
                    </div>
                </div>
                <div class="col-6 mb-md-3 col-lg-3 d-flex">
                    <div class="about-item d-flex flex-column text-center px-3 py-5">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon-price.svg" alt="">
                        <p class="about-item__title pt-3">
                            Приємні ціни
                        </p>
                        <span class="about-item__desc pb-5">
                            Вартість розблокування одного транспортного засобу: 20 грн. Вартість 1 хв. - 1.5 грн.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="choice">
        <div class="container">
            <div class="row pt-5">
                <div class="col-lg-12 d-flex justify-content-center">
                    <h3 class="choice-title text-center text-lg-left">
                        Обери свої E-wings
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="choice-img">
                        <img class="img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/choice-samokat-1.png" alt="Самокат">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choice-img">
                        <img class="img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/choice-samokat-2.png" alt="Самокат">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="how" class="actions mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <h3 class="actions-title">
                        Як це працює?
                    </h3>
                </div>
            </div>

            <div class="row text-left align-items-center justify-content-start pt-5 offset-md-2 ">
                <div class="col-6 col-md-6">
                    <img alt="image" class="img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/start-trip.svg">
                </div>

                <div class="col-6 col-md-5 offset-md-1 ">
                    <h2><strong>Початок поїздки</strong></h2>
                    <p class="lead">
                        Завантаж додаток і знайди вільний скутер на карті. Якщо не готовий рушати зараз -
                        <a href="#">
                            забронюй.
                        </a>
                    </p>
                </div>
            </div>

            <div class="row text-left align-items-center pt-1 offset-md-2">
                <div class="col-6 col-md-6 order-md-5">
                    <img alt="image" class="img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/unlock-img.svg">
                </div>

                <div class="col-6 col-md-5">
                    <h2><strong>Розблокуй замок</strong></h2>
                    <p class="lead">
                        Відскануй QR-код на рулі, або введи код обраного самоката або велосипеда. Якщо пройшла оплата -
                        відштовхнись правою ногою та тисни ручку справа.
                    </p>
                </div>
            </div>

            <div class="row text-left align-items-center justify-content-start pt-1 pb-md-1 offset-md-2">
                <div class="col-6 col-md-6">
                    <img alt="image" class="img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/samokat-go.svg">
                </div>

                <div class="col-6 col-md-5">
                    <h2><strong>Тепер ти їдеш</strong></h2>
                    <p class="lead">
                        Будь обрежежним і дотримуйся правил дорожнього руху, пересувайся по велосипедним
                        доріжкам. Тормоз знаходиться на лівій ручці
                    </p>
                </div>
            </div>

            <div class="row text-left align-items-center pt-5 pb-md-5 offset-md-2">
                <div class="col-6 col-md-6  order-md-5">
                    <img alt="image" class="img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/parking-img.svg">
                </div>

                <div class="col-6 col-md-5">
                    <h2><strong>Паркуй відповідально</strong></h2>
                    <p class="lead">
                        Після поїздки паркуй e-wing на зеленій зоні,  на парковках e-wing або на парковках для
                        велосипедів.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="set mt-5">
        <div class="container-fluid">
            <div class="row set-wrap align-items-center">
                <div class="col-lg-4 col-xl-6 d-flex justify-content-center">
                    <div class="img-app ">
                        <img class="img-app-link" src="<?php echo bloginfo('template_url'); ?>/assets/images/Mobile-App-Krula.svg" alt="App">
                        <img class="img-app-mobile img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/Mobile app 1.png" alt="App">
                    </div>
                </div>
                <div class="col-lg-8 col-xl-6 text-center">
                    <div class="set-block">
                        <h3 class="text-uppercase">
                            Встановлюй додаток вже зараз!
                        </h3>
                    </div>
                    <div class="promo-store mt-md-3 mt-xl-4 text-center">
                        <a href="#" class="mr-sm-2">
                            <img class="img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/app-store.png" alt="App-Store">
                        </a>
                        <a href="#" class="mt-4">
                            <img class="img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/google-play.png" alt="Google-Play">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ticket" class="season-ticket mb-5">
        <div class="container">
            <div class="row ticket-block">
                <div class="сol-12 col-lg-7 text-left mt-5">
                    <div class="season-block pb-2 ">
                        <span class="text-uppercase">
                            Не обмежуй свій час!
                        </span>
                        <h3>
                            Для вашого комфорту ми пропонуємо
                            <span>
                                абонементи
                            </span>
                            на e-wings
                        </h3>
                    </div>
                    <div class="order-inputs">
                        <form>
                            <div class="choose-block ml-4 mt-5 d-block ">
                                <div>
                                    <input type="checkbox" id="chk" required />
                                    <label for="chk" class="mb-3 pt-2">
                                        Тижневий абонемент на одиницю e-wings
                                    </label>
                                </div>
                                <div>
                                    <input type="checkbox" id="chk2" required />
                                    <label for="chk2" class="pt-2">
                                        Місячний абонемент на одиницю e-wings
                                    </label>
                                </div>
                            </div>
                            <div class="input-group">
                                <label for="first-name">Ім'я</label>
                                <input type="text" id="first-name" required>
                            </div>
                            <div class="input-group">
                                <label for="first-name">Телефон</label>
                                <input type="tel" id="first-name" required>
                            </div>
                            <button class="btn" type="submit" class="mt-5 mb-5 text-uppercase">
                                Замовити
                            </button>
                        </form>

                    </div>

                </div>

                <div class="col-lg-5 d-flex align-items-start ">
                    <div class="d-flex align-content-sm-start" style="margin-top: -130px;">
                        <img class="img-fluid w-100" src="<?php echo bloginfo('template_url'); ?>/assets/images/season-samokat.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container pt-5">

    </div>

    <section id="order" class="order">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="order-question d-flex align-items-start ">
                        <span class="pt-3"></span>
                        <p class="ml-3">
                            Ви з друзями вирішили влаштувати покатушки містом?
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="img-order pr-3" style="margin-left: -70px;">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/order-img.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-12 text-center col-lg-5">
                    <div class="order-form d-flex justify-content-center flex-column align-items-center"
                        style="margin-top: -7px;">
                        <h3 class="order-form__title text-center">
                            <span>
                                Замовляй доставку
                            </span>
                            вже зараз або бронюй e-wings для компанії
                        </h3>
                        <form class="order-block p-3 pb-5">
                            <p class="order-block__title text-center pt-2">
                                Розрахувати вартість оренди
                            </p>

                            <div class="count-order pt-3 d-flex justify-content-md-around">

                                <div class=" ml-3 count-sam d-flex align-items-center justify-content-between">
                                    <span id="count1">0</span>
                                    <img class="ml-2" src="<?php echo bloginfo('template_url'); ?>/assets/images/count-sam.svg" alt="">
                                    <button class="plus ml-2 px-2">+</button>
                                    <button class="min ml-1 px-2">-</button>
                                </div>

                                <div class=" ml-3 count-sam d-flex align-items-center justify-content-between">
                                    <span id="count2">0</span>
                                    <img class="ml-2" src="<?php echo bloginfo('template_url'); ?>/assets/images/bicycle.svg" alt="">
                                    <button class="plus-1 ml-2 px-2">+</button>
                                    <button class="min-1 ml-1 px-2">-</button>
                                </div>

                            </div>
                            <span class="from">
                                * замовлення можливе лише від 3-х одиниць
                            </span>

                            <div class="input-group input-group-order  d-flex justify-content-center">
                                <label for="termin">Термін оренди</label>
                                <input type="number" id="termin">
                            </div>
                            <div class="input-group input-group-order d-flex justify-content-center">
                                <label for="first-name">Ім'я</label>
                                <input type="text" id="first-name">
                            </div>
                            <div class="input-group input-group-order d-flex justify-content-center">
                                <label for="tel">Телефон</label>
                                <input type="tel" id="tel">
                            </div>

                            <button class="btn d-flex  m-auto" type="submit" class="mt-5 mb-1 text-uppercase">
                                Дізнатись вартість
                            </button>


                        </form>
                    </div>
                </div>
            </div>
            </div?>
    </section>

    <section class="partnership">
        <div class="container align-items-end justify-content-center d-flex">
            <div class="row partnership-block align-items-top text-left">
                <div class="col-12 col-md-8 mt-md-5 col-lg-6">
                    <p class="partnership-title mb-4 mt-5 text-uppercase">
                        Партнерство
                    </p>
                    <h3>
                        Співпраця з базами відпочинку, готельними комплексами та туристичними фірмами
                    </h3>
                    <p class="lead pt-2">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries.
                    </p>
                    <p class="mt-4">
                        <a href="#" class="btn btn-primary px-5">
                            Більше
                            <img class="img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/arrows.svg" alt="">
                        </a>
                    </p>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-6 m-auto pt-5">
                    <img alt="image" class="partn-pic img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/partnership-img.png">
                    <!-- <img alt="image" class="partn-img " src="<?php echo bloginfo('template_url'); ?>/assets/images/partnership-mob.png"> -->

                </div>
            </div>
        </div>
    </section>



    <!-- FAQ -->
    <div id="faq" class="container my-5">
        <!--Section: Content-->
        <section class="faq">
            <h6 class=" text-uppercase  mb-4 text-center">FAQ</h6>
            <!-- Section heading -->

            <div class="row">
                <div class="col-md-12 col-lg-10 mx-auto mb-5">

                    <!--Accordion wrapper-->
                    <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                        <!-- Accordion card -->
                        <div class="card mb-2 p-0">

                            <!-- Card header -->
                            <div class="card-header border-bottom border-light" role="tab" id="headingOne1">
                                <a data-toggle="collapse" class="d-flex align-items-center justify-content-start"
                                    data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                                    aria-controls="collapseOne1">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/question icon.svg" alt="">

                                    <h5 class="pl-5  mb-0 d-flex justify-content-between">
                                        Яка вартість поїздки?
                                        <!-- <span class="arrow"></span> -->
                                        <i class="arrow">
                                            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/arrow-faq.svg" alt="">
                                        </i>
                                    </h5>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                                data-parent="#accordionEx">
                                <div class="card-body">
                                    Absolutely! We work with top payment companies which guarantees your safety and
                                    security. All billing information is stored on our payment processing partner which
                                    has the most stringent level of certification available in the payments industry.
                                </div>
                            </div>

                        </div>
                        <!-- Accordion card -->

                        <!-- Accordion card -->
                        <div class="card mb-2 border-bottom-0 border-left border-right border-light">

                            <!-- Card header -->
                            <div class="card-header border-bottom border-light" role="tab" id="headingTwo2">
                                <a class="collapsed d-flex align-items-center" data-toggle="collapse"
                                    data-parent="#accordionEx" href="#collapseTwo2" aria-expanded="false"
                                    aria-controls="collapseTwo2">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/question icon.svg" alt="">

                                    <h5 class=" pl-5 black-text font-weight-normal mb-0 d-flex justify-content-between">
                                        Як знайти самокат?
                                        <i class="arrow">
                                            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/arrow-faq.svg" alt="">
                                        </i>

                                    </h5>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                                data-parent="#accordionEx">
                                <div class="card-body">
                                    Currently, we only offer monthly subscription. You can upgrade or cancel your
                                    monthly account at any time with no further obligation.
                                </div>
                            </div>

                        </div>
                        <!-- Accordion card -->

                        <!-- Accordion card -->
                        <div class="card mb-2 border-bottom-0 border-left border-right border-light">

                            <!-- Card header -->
                            <div class="card-header border-bottom border-light" role="tab" id="headingTwo">
                                <a class="collapsed d-flex align-items-center" data-toggle="collapse"
                                    data-parent="#accordionEx" href="#collapseTwo3" aria-expanded="false"
                                    aria-controls="collapseTwo3">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/question icon.svg" alt="">

                                    <h5 class="pl-5 black-text font-weight-normal mb-0 d-flex justify-content-between">
                                        Як розблокувати самокат?
                                        <i class="arrow">
                                            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/arrow-faq.svg" alt="">
                                        </i>
                                    </h5>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapseTwo3" class="collapse" role="tabpanel" aria-labelledby="headingTwo"
                                data-parent="#accordionEx">
                                <div class="card-body">
                                    Currently, we only offer monthly subscription. You can upgrade or cancel your
                                    monthly account at any time with no further obligation.
                                </div>
                            </div>

                        </div>
                        <!-- Accordion card -->

                        <!-- Accordion card -->
                        <div class="card mb-2 border-bottom-0 border-left border-right border-light">

                            <!-- Card header -->
                            <div class="card-header border-bottom border-light" role="tab" id="headingFour123">
                                <a class="collapsed d-flex align-items-center" data-toggle="collapse"
                                    data-parent="#accordionEx" href="#collapseThree4" aria-expanded="false"
                                    aria-controls="collapseThree4">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/question icon.svg" alt="">

                                    <h5 class=" pl-5 black-text font-weight-normal mb-0 d-flex justify-content-between">
                                        Де я можу приписувати самокат, після закінчення поїздки?
                                        <i class="arrow">
                                            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/arrow-faq.svg" alt="">
                                        </i>
                                    </h5>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingFour123"
                                data-parent="#accordionEx">
                                <div class="card-body">
                                    You can cancel your subscription anytime in your account. Once the subscription is
                                    cancelled, you will not be charged next month. You will continue to have access to
                                    your account until your current subscription expires.
                                </div>
                            </div>

                        </div>
                        <!-- Accordion card -->

                        <!-- Accordion card -->
                        <div class="card mb-2 border-left border-right border-light">

                            <!-- Card header -->
                            <div class="card-header border-bottom border-light" role="tab" id="headingFour">
                                <a class="collapsed d-flex align-items-center" data-toggle="collapse"
                                    data-parent="#accordionEx" href="#collapseThree5" aria-expanded="false"
                                    aria-controls="collapseThree5">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/question icon.svg" alt="">

                                    <h5 class="pl-5 black-text font-weight-normal mb-0 d-flex justify-content-between">
                                        Як завершити поїздку?
                                        <i class="arrow">
                                            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/arrow-faq.svg" alt="">
                                        </i>
                                    </h5>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapseThree5" class="collapse" role="tabpanel" aria-labelledby="headingFour"
                                data-parent="#accordionEx">
                                <div class="card-body">
                                    Unfortunately, not. We do not issue full or partial refunds for any reason.
                                </div>
                            </div>

                        </div>
                        <!-- Accordion card -->


                        <!-- Accordion card -->
                        <div class="card mb-2 border-left border-right border-light">

                            <!-- Card header -->
                            <div class="card-header border-bottom border-light" role="tab" id="headingThree6">
                                <a class="collapsed d-flex align-items-center" data-toggle="collapse"
                                    data-parent="#accordionEx" href="#collapseThree6" aria-expanded="false"
                                    aria-controls="collapseThree6">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/question icon.svg" alt="">

                                    <h5 class="pl-5 black-text font-weight-normal mb-0 d-flex justify-content-between">
                                        Як оплатити поїздку?
                                        <i class="arrow">
                                            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/arrow-faq.svg" alt="">
                                        </i>
                                    </h5>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapseThree6" class="collapse" role="tabpanel" aria-labelledby="headingThree6"
                                data-parent="#accordionEx">
                                <div class="card-body">
                                    Unfortunately, not. We do not issue full or partial refunds for any reason.
                                </div>
                            </div>

                        </div>
                        <!-- Accordion card -->

                    </div>
                    <!-- Accordion wrapper -->
                </div>
            </div>
        </section>
    </div>


    <?php
        get_footer();
    ?>