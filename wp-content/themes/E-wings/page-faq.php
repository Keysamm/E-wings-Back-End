<?php
/*
Template Name: FAQ

*/
?>

<?php get_header("faq"); ?>

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
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/question icon.svg"
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
                                    <span class="pt-3 d-inline-block d-inline-block">
                                        You can find scooters anywhere in the city. Each e-wings is marked by icon on the
                                        map in the app.
                                    </span>
                                    
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
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/question icon.svg"
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
                                    <span class="pt-3 d-inline-block d-inline-block">
                                    You have to deposit funds to your wallet in order to start your ride. Then scan any
                                    e-wings you find in the street to activate it instantly and ride in the city.
                                    </span>
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
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/question icon.svg"
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
                                    <span class="pt-3 d-inline-block d-inline-block">
                                        You have to choose a scooter on the map in the app and click “Book”. Maximum booking
                                        period - 15 minutes
                                    </span>
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
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/question icon.svg"
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
                                    Вартість розблокування одного транспортного засобу - 20 грн. Вартість 1 хв.
                                    користування
                                    - 1.5 грн. Вартість бронювання - 1 грн./хв.
                                    <br>
                                    <span class="pt-3 d-inline-block d-inline-block">
                                        To unlock - 20 ₴; Riding - 1.5 ₴ per minute; Boking - 1₴ per minute.
                                    </span>
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
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/question icon.svg"
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
                                    <span class="pt-3 d-inline-block">
                                        Follow us on social networks, take part in raffles and win free rides and other prizes
                                        from our partners.
                                    </span>
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
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/question icon.svg"
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
                                    <span class="pt-3 d-inline-block">
                                        Use e-wings within the geo limits. Be careful, follow the traffic rules. Do not use
                                        e-wings while you are under the influence of alcohol.
                                    </span>
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
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/question icon.svg"
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
                                    <span class="pt-3 d-inline-block">
                                        Park your e-wings in a proper place and take a photo of to end your ride,
                                    </span>
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

<?php get_footer('faq'); ?>