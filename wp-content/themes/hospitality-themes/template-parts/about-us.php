<?php
/*

Template Name: About us page

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


<div class="intro-service container">
    <?php $image = get_field('intro_img');

        if( !empty( $image ) ): ?>

    <img class="img-service" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

    <?php endif; ?>

</div>

<div class="container" style="margin-bottom: 50px;">
    <div class="about-us">
        <div class="a-u-title"><?php echo get_field('text1')?></div>
        <div class="a-u-text"><?php the_field('text2')?></div>
    </div>
    <div class="row">
        <?php if(have_rows('us')): while(have_rows('us')): the_row(); ?>
        <div class="col-lg-6">
            <div class="a-u-title"><?php echo get_sub_field('title')?></div>
            <div class="a-u-text"><?php echo get_sub_field('content')?></div>
        </div>
        <?php endwhile; endif; ?>
    </div>
</div>

<div class="container-fluid px-0 customer-review">
    <div class="container ">
        <p class="rev-title">Cảm nhận của khách hàng</p>
        <div class="swiper Review">
            <div class="swiper-wrapper">
                <?php if(have_rows('customer-review')): while(have_rows('customer-review')): the_row(); ?>
                <div class="swiper-slide">
                    <div class="rev-item">
                        <p><?php echo get_sub_field('review')?></p>
                        <div class="star">
                            <i class="fas fa-star" style="color: #ffce1f;"></i>
                            <i class="fas fa-star" style="color: #ffce1f;"></i>
                            <i class="fas fa-star" style="color: #ffce1f;"></i>
                            <i class="fas fa-star" style="color: #ffce1f;"></i>
                            <i class="fas fa-star" style="color: #ffce1f;"></i>
                        </div>
                        <p class="name-rev"><?php echo get_sub_field('name')?></p>
                        <p><?php echo get_sub_field('location')?></p>
                    </div>
                </div>
                <?php endwhile; endif; ?>

            </div>
            <div class="nav-group">
                <div class="swiper-button-next-rev"><i class="fas fa-angle-right"></i></div>
                <div class="swiper-button-prev-rev"><i class="fas fa-angle-left"></i></div>
            </div>
            <div class="swiper-pagination-rev"></div>
        </div>
    </div>
</div>




<?php get_footer(); ?>