<!-- Footer -->
<footer id="contacts" class="page-footer font-small mdb-color pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

        <!-- Footer links -->
        <div class="row text-center text-md-left mt-3 pb-5 pb-sm-0">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">
                    <?php the_custom_logo(); ?>
                </h6>
                <p class="d-flex justify-content-between justify-content-sm-around">
                    <a href="https://e-wings.com.ua/privacy-policy/" target="_blank">
                        Privacy Policy
                    </a>
                    <a href="https://e-wings.com.ua/rental-agreement/" target="_blank">
                        Rental Agreement
                    </a>
                </p>
                <p class="d-flex justify-content-between justify-content-sm-around">
                    <a href="https://e-wings.com.ua/payment-policy/" target="_blank">
                        Payment Policy
                    </a>

                    <a href="https://e-wings.com.ua/terms-of-service/" target="_blank">
                        Terms of Service
                    </a>
                </p>
                <div
                    class="promo-store d-flex justify-content-between justify-content-sm-around align-items-center mt-5">
                    <a href="<?php the_field('download_appstore'); ?>" class="mr-sm-2">
                        <!-- <img src="<?php echo bloginfo('template_url'); ?>/assets/images/app-store.webp" alt="App-Store"> -->

                        <picture>
                            <source srcset="<?php echo bloginfo('template_url'); ?>/assets/images/app-store.webp"
                                alt="App-Store" type="image/webp">
                            <source srcset="<?php echo bloginfo('template_url'); ?>/assets/images/app-store.png"
                                alt="App-Store" type="image/png">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/app-store.webp"
                                alt="App-Store" alt="App-store">
                        </picture>
                    </a>
                    <a href="<?php the_field('download_googleplay'); ?>" class="">
                        <!-- <img src="<?php echo bloginfo('template_url'); ?>/assets/images/google-play.webp" alt="Google-Play"> -->

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
            <!-- Grid column -->


            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">
                    <?php the_field('contacts_footer'); ?>
                </h6>
                <p class="ml-3">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/tel.svg" alt="Telefon">
                    <a href="tel:+38 (068) 340 90 50" class="ml-2 mb-0 pb-0" target="_blank">
                       <?php the_field('contact_tell_№1'); ?>
                    </a>

                    <p class="ml-5 mt-0">
                        <a href="tel:+38 (073) 340 90 50" target="_blank">
                            <?php the_field('contact_tell_№2'); ?>
                        </a>
                    </p>


                </p>
                <p>

                </p>
                <p class="ml-3">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/Post.svg" alt="Post">
                    <a href="mailto:ewingsukraine@gmail.com" target="_blank" class="ml-2">
                        <?php the_field('contact_email'); ?>
                    </a>
                </p>
                <p class="ml-3">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/pin 1.svg" alt="Pin">
                    <a href="https://www.google.com/maps/place/49.866288,24.015606/data=!4m6!3m5!1s0!7e2!8m2!3d49.8662876!4d24.0156057?utm_source=mstt_1" class="ml-2" target="_blank">
                        <?php the_field('location_footer'); ?>
                    </a>
                </p>


            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">
                    <?php the_field('partnership_footer'); ?>
                </h6>
                <p>
                    <a href="https://e-wings.com.ua/#go" >
                        <?php the_field('about_project_footer'); ?>
                    </a>
                </p>
                <p>
                    <a href="http://e-wings.com.ua/partnership/" >
                        <?php the_field('cooperation_footer'); ?>
                    </a>
                </p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">
                    <?php the_field('quick_access_footer'); ?>
                </h6>
                <p>
                    <a href="https://e-wings.com.ua/#how" >
                        <?php the_field('how_does_it_work_footer'); ?>
                    </a>
                </p>
                <p>
                    <a href="https://e-wings.com.ua/#ticket" >
                        <?php the_field('subscriptions_footer') ?>
                    </a>
                </p>
                <p>
                    <a href="https://e-wings.com.ua/#order" >
                        <?php the_field('delivery_footer'); ?>
                    </a>
                </p>
            </div>

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none">



        </div>
        <!-- Footer links -->

        <hr style="background-color: #52C600; height: 2px;">

        <!-- Grid row -->
        <div class="row d-flex align-items-center pb-3">

            <!-- Grid column -->
            <div class="col-md-7 col-lg-6">

                Copyright
                <p class="text-center text-md-left">
                    E-wings © 2021. All Rights Reserved. Created by
                    <a href="<?php the_field('siteen'); ?>" target="_blank">
                        <strong>
                            Siteen
                        </strong>
                    </a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-5 d-flex justify-content-center col-lg-4 ml-lg-0">

                <p>Слідкуй за нами:</p>

                <!-- Social buttons -->
                <div class="text-center">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a href="<?php the_field('instagram_link'); ?>" class="btn-floating btn-sm rgba-white-slight mx-1" target="_blank">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/images/instagram.svg"
                                    alt="Instagram">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="<?php the_field('facebook_link'); ?>" class="btn-floating btn-sm rgba-white-slight mx-1" target="_blank">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/images/facebook.svg"
                                    alt="facebook">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="<?php the_field('telegram_link'); ?>" class="btn-floating btn-sm rgba-white-slight mx-1" target="_blank">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/images/telegram.svg"
                                    alt="telegram">
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

</footer>
<?php 
    wp_footer();
?>

</body>

</html>