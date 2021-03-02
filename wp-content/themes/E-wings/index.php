    <?php
        get_header();
    ?>


    <section class="promo pt-1" id="promo">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 pt-2 promo-wrapper">
                    <div class="promo-block text-center text-md-center text-lg-left">
                        <p class="promo-subheading ">
                            <?php the_field('tagline_header_first'); ?>
                        </p>
                        <h1 class="promo-title pt-0 text-center text-lg-left">
                            <?php the_field('tagline_header_second'); ?>
                        </h1>
                        <p class="promo-subheading">
                            Get your #Wings
                        </p>
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
                    <div class="promo-store d-flex justify-content-start text-center mt-5 d-md-flex flex-column flex-sm-row text-md-center text-lg-left">
                        <a class="d-inline-block" href="<?php the_field('download_appstore'); ?>" class="mr-sm-2">
                            <picture class="mr-0 mr-sm-2">
                                <source srcset="<?php echo bloginfo('template_url'); ?>/assets/images/app-store.webp"
                                    alt="App-Store" type="image/webp">
                                <source srcset="<?php echo bloginfo('template_url'); ?>/assets/images/app-store.png"
                                    alt="App-Store" type="image/png">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/images/app-store.webp"
                                    alt="App-Store">
                            </picture>
                        </a>
                        <a class="d-inline-block" href="<?php the_field('download_googleplay'); ?>" class="mt-4">
                            <picture>
                                <source srcset="<?php echo bloginfo('template_url'); ?>/assets/images/google-play.webp"
                                    alt="App-Store" type="image/webp">
                                <source srcset="<?php echo bloginfo('template_url'); ?>/assets/images/google-play.png"
                                    alt="App-Store" type="image/png">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/images/google-play.webp"
                                    alt="App-Store" alt="App-store">
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mb-5 d-flex justify-content-end">
                <div class="col-md-3 d-none d-md-flex justify-content-end">
                    <div class="graphic">
                        <p class="mb-0">Пн-Чт:
                            <span class="d-inline-block ml-4">
                                08:00 - 20:00
                            </span>
                        </p>
                        <p class="my-0">Пт:
                            <span class="d-inline-block ml-5">
                                08:00 - 21:00
                            </span>
                        </p>
                        <p class="my-0">
                            Сб-Нд:
                            <span class="d-inline-block ml-4">
                                09:00 - 21:00
                            </span>
                        </p>
                    </div>
                </div>
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
                                <img class="close-img"
                                    src="<?php echo bloginfo('template_url'); ?>/assets/images/close-icon.svg" alt="">
                            </span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <h4 style="color: #52C600" class="text-center">
                            Ми зв’яжемося з вами за лічені хвилини
                        </h4>
                        <!-- Содержимое модального окна 1 -->
                        <?php echo do_shortcode('[contact-form-7 id="119" title="Модальное окно"]'); ?>

                    </div>

                </div>
            </div>
        </div>

        <!-- Модальное окно 2 -->
        <div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="modalLabel2">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="images/logo.svg" alt="">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                            <span aria-hidden="true" class="close">
                                <img src="<?php echo bloginfo('template_url');?>/assets/images/close-icon.svg"
                                    alt="Close">
                            </span>
                        </button>

                    </div>
                    <div class="modal-body text-center">
                        <img src="<?php echo bloginfo('template_url');?>/assets/images/success.svg" alt="Success">
                        <h3 style="color: #52C600;">Дякуємо!</h3>
                        <p class="succes-text">
                            Ваша заявка прийнята, ми зв’яжемося з вами якнайшвидше!
                        </p>
                    </div>
                </div>
            </div>
        </div>



        <p class="modal-box about-us">
            <!-- <a href="#" class="btn-modal " data-toggle="modal" data-target="#modal-1">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/images/contact.svg" alt="Contact">
            </a> -->

            <a class="btn-modal pulse" href="#" data-toggle="modal" data-target="#modal-1">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/images/contact.svg" alt="Contact"
                    class="circle-img">
            </a>
        </p>


    </section>



    <section id="go" class="about mb-5">
        <div class="container">
            <div class="row about-row d-flex justify-content-between">
                <div class="col-lg-8">
                    <div class="block-about">
                        <span class="block-about__subheading text-uppercase">
                            <?php the_field('about_project'); ?>
                        </span>
                        <h2 class="block-about__title">
                            <?php the_field('title_project'); ?>
                        </h2>
                        <p class="block-about__desc">
                            <?php the_field('paragraph_project'); ?>
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="about-pic">
                        <img class="about-img img-fluid" src="<?php the_field('about_img_project'); ?>">
                    </div>
                </div>
            </div>
            <div class="row mt-5 justify-content-between">
                <div class="col-12 col-sm-6 col-md-6 mb-3 col-lg-3 d-flex">
                    <div class="about-item d-flex flex-column text-center px-3 py-5">
                        <img src="<?php the_field('advantages_img_№1'); ?>">
                        <p class="about-item__title pt-3">
                            <?php the_field('advantages_title_№1'); ?>
                        </p>
                        <span class="about-item__desc pb-5">
                            <?php the_field('advantages_descr_№1'); ?>
                        </span>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 mb-3 col-lg-3 d-flex">
                    <div class="about-item d-flex flex-column text-center px-3 py-5">
                        <img src="<?php the_field('advantages_img_№2'); ?>">
                        <p class="about-item__title pt-3">
                            <?php the_field('advantages_title_№2'); ?>
                        </p>
                        <span class="about-item__desc ">
                            <?php the_field('advantages_descr_№2'); ?>
                        </span>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 mb-3 col-lg-3 d-flex">
                    <div class="about-item d-flex flex-column text-center px-3 py-5">
                        <img src="<?php the_field('advantages_img_№3'); ?>">
                        <p class="about-item__title pt-3">
                            <?php the_field('advantages_title_№3'); ?>
                        </p>
                        <span class="about-item__desc pb-5">
                            <?php the_field('advantages_descr_№3'); ?>
                        </span>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 mb-3 col-lg-3 d-flex">
                    <div class="about-item d-flex flex-column text-center px-3 py-5">
                        <img src="<?php the_field('advantages_img_№4'); ?>">
                        <p class="about-item__title pt-3">
                            <?php the_field('advantages_title_№4'); ?>
                        </p>
                        <span class="about-item__desc pb-5">
                            <?php the_field('advantages_descr_№4'); ?>
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
                        <?php the_field('title_chose_ewings'); ?>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="choice-img text-center">
                        <img class="img-fluid" src="<?php the_field('img_scooter_left'); ?>">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choice-img text-center">
                        <img class="img-fluid" src="<?php the_field('img_scooter_right'); ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="how" class="actions pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <h3 class="actions-title">
                        <?php the_field('title_how_does_it_work'); ?>
                    </h3>
                </div>
            </div>

            <div class="row text-left align-items-center justify-content-start pt-5 offset-md-2 ">
                <div class="col-6 col-md-6">
                    <img alt="image" class="img-fluid" src="<?php the_field('img_how_ewings_№1'); ?>">
                </div>

                <div class="col-6 col-md-5 offset-md-1 ">
                    <h2><strong><?php the_field('title_how_ewings_№1'); ?></strong></h2>
                    <p class="lead">
                        <?php the_field('descr_how_ewings_№1') ?>
                    </p>
                </div>
            </div>

            <div class="row text-left align-items-center pt-1 offset-md-2">
                <div class="col-6 col-md-6 order-md-5">
                    <img alt="image" class="img-fluid" src="<?php the_field('img_how_ewings_№2'); ?>">
                </div>

                <div class="col-6 col-md-5">
                    <h2><strong><?php the_field('title_how_ewings_№2'); ?></strong></h2>
                    <p class="lead">
                        <?php the_field('descr_how_ewings_№2') ?>
                    </p>
                </div>
            </div>

            <div class="row text-left align-items-center justify-content-start pt-1 pb-md-1 offset-md-2">
                <div class="col-6 col-md-6">
                    <img alt="image" class="img-fluid" src="<?php the_field('img_how_ewings_№3'); ?>">
                </div>

                <div class="col-6 col-md-5">
                    <h2><strong><?php the_field('title_how_ewings_№3'); ?></strong></h2>
                    <p class="lead">
                        <?php the_field('descr_how_ewings_№3') ?>
                    </p>
                </div>
            </div>

            <div class="row text-left align-items-center pt-5 pb-md-5 offset-md-2">
                <div class="col-6 col-md-6  order-md-5">
                    <img alt="image" class="img-fluid" src="<?php the_field('img_how_ewings_№4'); ?>">
                </div>

                <div class="col-6 col-md-5">
                    <h2><strong><?php the_field('title_how_ewings_№4'); ?></strong></h2>
                    <p class="lead">
                        <?php the_field('descr_how_ewings_№4') ?>
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
                        <img class="img-app-link"
                            src="<?php echo bloginfo('template_url'); ?>/assets/images/Mobile-App-Krula.svg" alt="App">
                        <!-- <img class="img-app-mobile img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/Mobile app 1.webp" alt="App"> -->

                        <picture>
                            <source class="img-app-mobile img-fluid"
                                srcset="<?php echo bloginfo('template_url'); ?>/assets/images/Mobile app 1.webp"
                                alt="App" type="image/webp">

                            <source class="img-app-mobile img-fluid"
                                srcset="<?php echo bloginfo('template_url'); ?>/assets/images/Mobile app 1.png"
                                alt="App" type="image/png">
                            <img class="img-app-mobile img-fluid"
                                src="<?php echo bloginfo('template_url'); ?>/assets/images/Mobile app 1.png" alt="App"
                                alt="App-store">
                        </picture>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-6 text-center">
                    <div class="set-block">
                        <h3 class="text-uppercase">
                            <?php the_field('title_install_ewings'); ?>
                        </h3>
                    </div>
                    <div class="promo-store mt-md-3 mt-xl-4 text-center">
                        <a href="<?php the_field('download_appstore'); ?>" class="mr-sm-2">
                            <!-- <img class="img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/app-store.webp" alt="App-Store"> -->

                            <picture>
                                <source class="img-fluid"
                                    srcset="<?php echo bloginfo('template_url'); ?>/assets/images/app-store.webp"
                                    alt="App-Store" type="image/webp">
                                <source class="img-fluid"
                                    srcset="<?php echo bloginfo('template_url'); ?>/assets/images/app-store.png"
                                    alt="App-Store" type="image/png">
                                <img class="img-fluid"
                                    src="<?php echo bloginfo('template_url'); ?>/assets/images/app-store.png"
                                    alt="App-Store" alt="App-store">
                            </picture>
                        </a>
                        <a href="<?php the_field('download_googleplay'); ?>" class="mt-4">
                            <!-- <img class="img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/google-play.webp" alt="Google-Play"> -->

                            <picture>
                                <source class="img-fluid"
                                    srcset="<?php echo bloginfo('template_url'); ?>/assets/images/google-play.webp"
                                    alt="App-Store" type="image/webp">
                                <source class="img-fluid"
                                    srcset="<?php echo bloginfo('template_url'); ?>/assets/images/google-play.png"
                                    alt="App-Store" type="image/png">
                                <img class="img-fluid"
                                    src="<?php echo bloginfo('template_url'); ?>/assets/images/google-play.png"
                                    alt="App-Store" alt="App-store">
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Абонементи -->
    <section id="ticket" class="season-ticket mb-5">
        <div class="container">
            <div class="row ticket-block">
                <div class="сol-12 col-lg-7 text-left mt-5">
                    <div class="season-block pb-2 ">
                        <span class="text-uppercase">
                            <?php the_field('title_time'); ?>
                        </span>
                        <h3>
                            <?php the_field('descr_time'); ?>
                        </h3>
                    </div>
                    <div class="order-inputs">
                        <?php echo do_shortcode('[contact-form-7 id="115" title="Абонементи на e-wings"]'); ?>
                    </div>

                </div>

                <div class="col-lg-5 d-flex align-items-start ">
                    <div class="d-flex align-content-sm-start season-img" style="margin-top: -130px;">
                        <img class="img-fluid" src="<?php the_field('img_time_ewings_№1'); ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container pt-5">

    </div>


    <!-- Замовляй -->
    <section id="order" class="order pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="order- d-flex align-items-start ">
                        <span class="pt-3"></span>
                        <!-- <p class="ml-3">
                            Ви з друзями вирішили влаштувати покатушки містом?
                        </p> -->
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 col-lg-6">
                    <div class="img-order pr-3" style="margin-left: -70px;">

                        <picture>
                            <source class="img-fluid"
                                srcset="<?php echo bloginfo('template_url'); ?>/assets/images/order-img.webp"
                                alt="App-Store" type="image/webp">
                            <source class="img-fluid"
                                srcset="<?php echo bloginfo('template_url'); ?>/assets/images/order-img.png"
                                alt="App-Store" type="image/png">
                            <img class="img-fluid"
                                src="<?php echo bloginfo('template_url'); ?>/assets/images/order-img.webp"
                                alt="App-store">
                        </picture>
                    </div>
                </div>
                <div class="col-md-12 text-center col-lg-6">
                    <div class="order-form d-flex justify-content-center flex-column align-items-center"
                        style="margin-top: -7px;">
                        <h3 class="order-form__title text-center mb-4" style="margin-top: -35px;">
                            <span>
                                Замовляй доставку
                            </span>
                            вже зараз або бронюй e-wings для компанії
                        </h3>
                        <?php echo do_shortcode('[contact-form-7 id="118" title="Розрахувати вартість оренди"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partnership">
        <div class="container align-items-end justify-content-center d-flex">
            <div class="row partnership-block align-items-center text-left">
                <div class="col-12 col-md-8 mt-md-5 col-lg-6">
                    <p class="partnership-title mb-4 mt-5 text-uppercase">
                        Партнерство
                    </p>
                    <h3>
                        Співпраця з базами відпочинку, готельними комплексами та туристичними фірмами
                    </h3>
                    <p class="lead pt-2">
                        E-wings - молодий та перспективний український проект відкритий до нового, тому якщо ви бачите
                        себе
                        нашим партнером обов’язково дайте нам знати. Будемо раді новим партнерам. Розглядаємо різні види
                        співпраці..
                    </p>
                    <p class="mt-4">
                        <a href="http://e-wings.com.ua/partnership/" class="btn px-5">
                            Більше
                            <img class="img-fluid part-svg"
                                src="<?php echo bloginfo('template_url'); ?>/assets/images/arrows.svg" alt="">
                        </a>
                    </p>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-6 mt-5 pt-5">

                    <picture>
                        <source class="img-fluid partn-pic"
                            srcset="<?php echo bloginfo('template_url'); ?>/assets/images/partnership-img.webp" alt=""
                            type="image/webp">
                        <source class="img-fluid partn-pic"
                            srcset="<?php echo bloginfo('template_url'); ?>/assets/images/partnership-img.png" alt=""
                            type="image/png">
                        <img class="img-fluid partn-pic"
                            src="<?php echo bloginfo('template_url'); ?>/assets/images/partnership-img.webp" alt=""
                            alt="">
                    </picture>

                </div>
            </div>
        </div>
    </section>



    <!-- FAQ -->
    <div id="faq" class="container pt-5">
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
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon.svg"
                                        alt="">

                                    <h5 class="pl-5  mb-0 d-flex justify-content-between align-items-center">
                                        Де шукати e-wings?
                                        <br>
                                        Where to find e-wings scooters and bikes?
                                        <i class="arrow">


                                            <img class="arrow-main"
                                                src="<?php echo bloginfo('template_url'); ?>/assets/images/arrow-d.svg"
                                                alt="">
                                            <img class="arrow-mob"
                                                src="<?php echo bloginfo('template_url'); ?>/assets/images/mob-arrow-up.svg"
                                                alt="">
                                        </i>
                                    </h5>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                                data-parent="#accordionEx">
                                <div class="card-body">
                                    Електросамокати та велосипеди e-wings ви зможете знайти у будь якій точці міста.
                                    Якщо ви
                                    не бачите їх на вулиці, зайдіть у додаток та знайдіть на карті найближчий e-wings.
                                    <br>

                                    You can find scooters anywhere in the city. Each e-wings is marked by icon on the
                                    map in
                                    the app.
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
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon.svg"
                                        alt="">

                                    <h5
                                        class=" pl-5 black-text font-weight-normal mb-0 d-flex justify-content-between align-items-center">
                                        Як розпочати поїздку?
                                        <br>
                                        How to start?
                                        <i class="arrow">


                                            <img class="arrow-main"
                                                src="<?php echo bloginfo('template_url'); ?>/assets/images/arrow-down.svg"
                                                alt="">
                                            <img class="arrow-mob"
                                                src="<?php echo bloginfo('template_url'); ?>/assets/images/mob-arrow-up.svg"
                                                alt="">
                                        </i>

                                    </h5>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                                data-parent="#accordionEx">
                                <div class="card-body">
                                    Потрібно поповнити “гаманець” у додатку, знайти на вулиці будь який e-wings, та
                                    зісканувати qr-код на рулі щоб активувати.
                                    <br>

                                    You have to deposit funds to your wallet in order to start your ride. Then scan any
                                    e-wings you find in the street to activate it instantly and ride in the city.

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
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon.svg"
                                        alt="">

                                    <h5
                                        class="pl-5 black-text font-weight-normal mb-0 d-flex justify-content-between align-items-center">
                                        Як забронювати e-wings?
                                        <br>
                                        How to book?
                                        <i class="arrow">


                                            <img class="arrow-main"
                                                src="<?php echo bloginfo('template_url'); ?>/assets/images/arrow-down.svg"
                                                alt="">
                                            <img class="arrow-mob"
                                                src="<?php echo bloginfo('template_url'); ?>/assets/images/mob-arrow-up.svg"
                                                alt="">
                                        </i>
                                    </h5>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapseTwo3" class="collapse" role="tabpanel" aria-labelledby="headingTwo"
                                data-parent="#accordionEx">
                                <div class="card-body">
                                    У додатку e-wings виберіть потрібний самокат чи інший транспорт, натисніть на нього,
                                    після - на кнопку “бронювати”. Максимальний термін бронювання - 15 хв.
                                    <br>

                                    You have to choose a scooter on the map in the app and click “Book”. Maximum booking
                                    period - 15 minutes

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
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon.svg"
                                        alt="">

                                    <h5
                                        class=" pl-5 black-text font-weight-normal mb-0 d-flex justify-content-between align-items-center">
                                        Яка вартість поїздки?
                                        <br>
                                        How much does it cost?
                                        <i class="arrow">

                                            <img class="arrow-main"
                                                src="<?php echo bloginfo('template_url'); ?>/assets/images/arrow-down.svg"
                                                alt="">
                                            <img class="arrow-mob"
                                                src="<?php echo bloginfo('template_url'); ?>/assets/images/mob-arrow-up.svg"
                                                alt="">
                                        </i>
                                    </h5>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingFour123"
                                data-parent="#accordionEx">
                                <div class="card-body">
                                    Вартість розблокування одного транспортного засобу - 15 грн. Вартість 1 хв.
                                    користування
                                    - 2 грн. (у вихідні та святкові дні 3 грн./хв.); Вартість бронювання - 1 грн./хв.
                                    <br>

                                    To unlock - 15 ₴; Riding - 2 ₴ per minute; Booking - 1₴ per minute.

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
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon.svg"
                                        alt="">

                                    <h5
                                        class="pl-5 black-text font-weight-normal mb-0 d-flex justify-content-between align-items-center">
                                        Як отримати безкоштовні поїздки?
                                        <br> How to get free rides?
                                        <i class="arrow">
                                            <img class="arrow-main"
                                                src="<?php echo bloginfo('template_url'); ?>/assets/images/arrow-down.svg"
                                                alt="">
                                            <img class="arrow-mob"
                                                src="<?php echo bloginfo('template_url'); ?>/assets/images/mob-arrow-up.svg"
                                                alt="">
                                        </i>
                                    </h5>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapseThree5" class="collapse" role="tabpanel" aria-labelledby="headingFour"
                                data-parent="#accordionEx">
                                <div class="card-body">
                                    Слідкуй за нашими активностями в соціальних мережах, бери участь у розіграшах та
                                    вигравай безкоштовні поїздки або інші призи від наших партнерів.
                                    <br>

                                    Follow us on social networks, take part in raffles and win free rides and other
                                    prizes
                                    from our partners.

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
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon.svg"
                                        alt="">

                                    <h5
                                        class="pl-5 black-text font-weight-normal mb-0 d-flex justify-content-between align-items-center">
                                        Правила під час їзди.
                                        <br> Riding.
                                        <i class="arrow">


                                            <img class="arrow-main"
                                                src="<?php echo bloginfo('template_url'); ?>/assets/images/arrow-down.svg"
                                                alt="">
                                            <img class="arrow-mob"
                                                src="<?php echo bloginfo('template_url'); ?>/assets/images/mob-arrow-up.svg"
                                                alt="">
                                        </i>
                                    </h5>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapseThree6" class="collapse" role="tabpanel" aria-labelledby="headingThree6"
                                data-parent="#accordionEx">
                                <div class="card-body">
                                    Використовуй e-wings виключно у дозволених зонах, позначених у додатку на карті.
                                    Дотримуйся правил дорожнього руху для велосипедистів.
                                    Не використовуй e-wings у стані алкогольного або наркотичного сп'яніння.
                                    <br>

                                    Use e-wings within the geo limits. Be careful, follow the traffic rules. Do not use
                                    e-wings while you are under the influence of alcohol.
                                </div>
                            </div>

                        </div>
                        <!-- Accordion card -->

                        <!-- Accordion card -->
                        <div class="card mb-2 border-left border-right border-light">

                            <!-- Card header -->
                            <div class="card-header border-bottom border-light" role="tab" id="headingThree7">
                                <a class="collapsed d-flex align-items-center" data-toggle="collapse"
                                    data-parent="#accordionEx" href="#collapseThree7" aria-expanded="false"
                                    aria-controls="collapseThree7">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon.svg"
                                        alt="">

                                    <h5
                                        class="pl-5 black-text font-weight-normal mb-0 d-flex justify-content-between align-items-center">
                                        Де залишити e-wings після закінчення поїздки?
                                        <br>
                                        Where to park?

                                        <i class="arrow">


                                            <img class="arrow-main"
                                                src="<?php echo bloginfo('template_url'); ?>/assets/images/arrow-down.svg"
                                                alt="">
                                            <img class="arrow-mob"
                                                src="<?php echo bloginfo('template_url'); ?>/assets/images/mob-arrow-up.svg"
                                                alt="">
                                        </i>
                                    </h5>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapseThree7" class="collapse" role="tabpanel" aria-labelledby="headingThree7"
                                data-parent="#accordionEx">
                                <div class="card-body">
                                    Після закінчення поїздки паркуй e-wings відповідально та у дозволеній зоні для
                                    паркування (на карті у додатку). Після зроби фото припаркованого транспорту у
                                    додатку.
                                    <br>

                                    Park your e-wings in a proper place and take a photo of to end your ride,

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