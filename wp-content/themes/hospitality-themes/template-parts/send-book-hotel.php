<?php
/*

Template Name: Yêu Cầu Book Khách Sạn

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
		    <?php echo do_shortcode('[contact-form-7 id="ded7e41" title="Yêu Cầu Book Khách Sạn"]')?>
		</div>
	</div>

<?php get_footer(); ?>