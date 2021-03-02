<!DOCTYPE html>
<html class="no-js" lang="ua">

<head>
    <meta charset="utf-8">  


 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="Список відповідей на найпопулярніші питання клієнтів які можуть допомогти при користуванні самокатами." />
 <meta name="Keywords" content="прокат самокатів львів, оренда самокатів львів, E-WINGS,самокати львів, прокат скутерів львів">
 <meta property="og:title" content="E-WINGS – прокат Електросамокатів та Велосипедів у Львові" />
 <meta property="og:type" content="article" />
 <meta property="og:url" content="https://e-wings.com.ua/" />
 <meta property="og:image" content="https://e-wings.com.ua/wp-content/uploads/2020/07/e-wings1.png" />
 <meta property="og:description" content="Список відповідей на найпопулярніші питання клієнтів які можуть допомогти при користуванні самокатами." />
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="description" content="Список відповідей на найпопулярніші питання клієнтів які можуть допомогти при користуванні самокатами.">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta property="og:image" content="https://e-wings.com.ua/wp-content/uploads/2020/07/e-wings1.png" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
    <meta name="description" content="Список відповідей на найпопулярніші питання клієнтів які можуть допомогти при користуванні самокатами.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:image" content="https://e-wings.com.ua/wp-content/uploads/2020/07/e-wings1.png" />

    <!-- Favicon -->
    <link rel="icon" href="<?php echo bloginfo('template_url'); ?>/assets/images/Favicon.svg" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&family=Rubik:wght@300;500;700&display=swap"
        rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header pt-4 mb-2">
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
                        <a href="https://e-wings.com.ua/" class="menu-lists__link">
                            Як це працює?
                        </a>
                        <a href="https://e-wings.com.ua/" class="menu-lists__link">
                            Абонементи
                        </a>
                        <a href="https://e-wings.com.ua/" class="menu-lists__link">
                            Доставка
                        </a>
                        <a href="https://e-wings.com.ua/" class="menu-lists__link">
                            FAQ
                        </a>
                        <a href="https://e-wings.com.ua/#contacts" class="menu-lists__link">
                            Контакти
                        </a>
                        <a href="http://e-wings.com.ua/partnership/" class="menu-lists__link-part">
                            Співпраця
                        </a>
                    </nav>
                </div>
                <div class="col-sm-3 offset-sm-9 justify-content-sm-center col-lg-2 offset-lg-0 ">
                    <div class="social-links d-flex justify-content-around">
                        <a href="<?php the_field('instagram_link'); ?>" class="ml-2" target="_blank">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/instagram.svg"
                                alt="instagram">
                        </a>
                        <a href="<?php the_field('facebook_link'); ?>" class="ml-2" target="_blank">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/facebook.svg"
                                alt="facebook">
                        </a>
                        <a href="<?php the_field('telegram_link'); ?>" class="ml-2" target="_blank">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/telegram.svg"
                                alt="telegram">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </header>

    <header class="header-mobile fixed-top ">
        <div class="container">
            <div class="row header-row">
                <div class="col-sm-3 mt-4">
                    <div class="logo">
                        <a href="index.html" class="logo-link">
                            <?php the_custom_logo();?>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <nav class="menu-mobile">
                        <div class="hamburger mx-0 mx-md-3">
                            <span></span>
                        </div>
                        <menu class="d-md-none link-group links-mob">
                                <a href="https://e-wings.com.ua/">Про проект</a></li>
                                <a href="https://e-wings.com.ua/">Як це працює?</a>
                                <a href="https://e-wings.com.ua/">Абонементи</a>
                                <a href="https://e-wings.com.ua/">Доставка</a>
                                <a href="https://e-wings.com.ua/">FAQ</a>
                                <a href="https://e-wings.com.ua/contacts">Контакти</a>
                                <a href="http://e-wings.com.ua/partnership/">Співпраця</a>
                                <li class="d-flex justify-content-around">
                                    <a href="<?php the_field('instagram_link'); ?>" target="_blank">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/instagram.svg"
                                            alt="instagram">
                                    </a>
                                    <a href="<?php the_field('facebook_link'); ?>" target="_blank">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/facebook.svg"
                                            alt="facebook">
                                    </a>
                                    <a href="<?php the_field('telegram_link'); ?>" target="_blank">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/telegram.svg" alt="telegram">
                                    </a>
                                </li>
                        </menu>
                    </nav>
                </div>
            </div>
        </div>
    </header>