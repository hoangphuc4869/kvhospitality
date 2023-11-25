<?php
/*

Template Name: Contact page

*/
get_header(); ?>

    <div class="bg-intro">
        <?php the_post_thumbnail('full', ['class' => 'img-intro']); ?>

        <h1><?php the_title()?></h1>
    </div>

    <!-- đường dẫn breadcrumb -->

    <div class="breadcrumb-intro">
        <div class="container"> 
            <?php

                if ( function_exists('yoast_breadcrumb') ) {

                 yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );

                }

            ?>
        </div>
    </div>

    <!-- ------------------------- -->

    <div class="container contact-sec">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="left-sec">
                    <?php echo get_field('contact-sec','option') ?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php echo do_shortcode('[contact-form-7 id="3179848" title="Liên hệ"]') ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>