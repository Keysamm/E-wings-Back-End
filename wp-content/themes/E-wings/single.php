<?php get_header("privacy_policy"); ?>

<div class="container mt-5">
    
</div>



<section id="primary" class=" content-project mt-5">
    <div class="container-my">
        <main id="main" class="site-main">

            <div class="container">
                <button onclick="goBack()" class="btn-back" style="font-size: 34px; text-decoration: none; border: none; background: none; color: white;">
                    &larr;
                </button>
            </div>
            
            
            <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', get_post_type() );

            endwhile; 
            ?>
            
        </main><!-- #main -->
    </div>
</section><!-- #primary -->


<section class="wrapper">
    <div class="container-fluid">
        <hr>

        <div class="container-card">

            <div class="cards">
                <?php
                $posts = get_posts( array(
                'numberposts' => 3,
                'category_name' => 'privacy',
                'post_type' => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                foreach( $posts as $post ){
                setup_postdata($post);
            ?>
                
                <?php
                }
                wp_reset_postdata(); // сброс
            ?>
            </div>

        </div>

    </div>
</section>


<style>
    .header {
        background: gray;
    }
</style>

<?php get_footer(); 


