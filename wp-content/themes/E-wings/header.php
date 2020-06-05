<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&family=Rubik:wght@300;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.min.css">
    <?php wp_head(); ?>
</head>

<body>

    <header class="header pt-4">
        <div class="container">
            <div class="row d-flex align-items-baseline justify-content-between">
                <div class="col-sm-12 text-sm-center mb-sm-3 col-lg-2 ">
                    <div class="logo">
                        <a href="<?php echo get_home_url(); ?>" class="logo-link">
                            <?php the_custom_logo();?>
                        </a>
                    </div>
                </div>
                <div class=" col-lg-7 mb-sm-3 ">
                    <nav class="menu-list d-flex justify-content-between justify-content-sm-between">
                        <a href="#go" class="menu-lists__link">
                            Про проект
                        </a>
                        <a href="#how" class="menu-lists__link">
                            Як це працює?
                        </a>
                        <a href="partnership.html" class="menu-lists__link-part">
                            Співпраця
                        </a>
                        <a href="#ticket" class="menu-lists__link">
                            Абонементи
                        </a>
                        <a href="#order" class="menu-lists__link">
                            Доставка
                        </a>
                        <a href="#faq" class="menu-lists__link">
                            FAQ
                        </a>
                        <a href="#contacts" class="menu-lists__link">
                            Контакти
                        </a>
                    </nav>
                </div>
                <div class="col-sm-3 offset-sm-9 justify-content-sm-center col-lg-2 offset-lg-0 ">
                    <div class="social-links d-flex justify-content-around">
                        <a href="#">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/facebook.svg" alt="facebook">
                        </a>
                        <a href="#">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/instagram.svg" alt="instagram">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </header>

    <header class="header-mobile fixed-top pt-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="logo">
                        <a href="index.html" class="logo-link">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/logo-mobile.svg" alt="Logo Mobile">
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="button_container" id="toggle2">
                        <span class="top"></span>
                        <span class="middle"></span>
                        <span class="bottom"></span>
                    </div>
                    <div class="overlay" id="overlay">
                        <nav class="overlay-menu">
                            <ul>
                                <li><a href="#">Про проект</a></li>
                                <li><a href="#">Як це працює?</a></li>
                                <li><a href="#">Співпраця</a></li>
                                <li><a href="#">Абонементи</a></li>
                                <li><a href="#">Доставка</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Контакти</a></li>
                                <li class="d-flex justify-content-around">
                                    <a href="#">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/facebook.svg" alt="facebook">
                                    </a>
                                    <a href="#">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/instagram.svg" alt="instagram">
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>