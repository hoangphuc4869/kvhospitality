<?php
/*

Template Name: question

*/
get_header(); ?>

    <div class="bg-intro shuttle-service">
        <?php the_post_thumbnail('full', ['class' => 'img-intro']); ?>

        <h1><?php the_title(); ?></h1>
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


    <div class="container question-sec">

        <p><?php the_title();?></p>

        <div class="row">
            <?php if(have_rows('questions')): while(have_rows('questions')): the_row(); ?>
            <div class="col-lg-6">
                <div class="ques-group">
                    <div class="question">
                        <?php echo get_sub_field('question')?>
                        <i class="far fa-plus"></i>
                    </div>
                    <div class="answer">
                        <?php echo get_sub_field('answer')?>
                    </div>
                </div>
            </div>
            <?php endwhile; endif; ?>

        </div>
    </div>


    <!-- Đăng ký thành viên với KV Hospitality -->

    <div class="mr-top mr-bottom">
        <div class="container">
            <div class="member-sign">
                <?php $image = get_field('img-sign-up', 'option');

                if( !empty( $image ) ): ?>

                    <img class="img-sign-up" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

                <?php endif; ?>

                <div class="member-sign-2">
                    <h2 class="title-sign-up"><?php echo get_field('title-sign-up', 'option'); ?></h2>

                    <p class="description-sign-up"><?php echo get_field('description-sign-up', 'option'); ?></p>

                    <?php echo do_shortcode('[contact-form-7 id="a8ab488" title="Đăng ký thành viên"]') ?>
                </div>
            </div>
        </div>
    </div>



<?php get_footer(); ?>