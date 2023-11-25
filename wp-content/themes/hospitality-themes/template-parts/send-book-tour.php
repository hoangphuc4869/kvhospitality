<?php
/*

Template Name: Gửi Yêu Cầu Book Tour Du Lịch

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

	<!-- -------------------------- -->

	<div class="bg-content">
		<div class="container booking-ticket">
		    <?php echo do_shortcode('[contact-form-7 id="6a11085" title="Gửi Yêu Cầu Book Tour Du Lịch"]')?>
		</div>
	</div>
	
<?php get_footer(); ?>