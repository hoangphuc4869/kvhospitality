<?php
/*

Template Name: Book Vé Máy Bay

*/
get_header(); ?>

	<div class="bg-intro shuttle-service">
		<?php the_post_thumbnail('full', ['class' => 'img-intro']); ?>

		<h1><?php the_title(); ?></h1>
	</div>

	<div class="container">
		<div class="content-shuttle-service"><?php the_field('content-page'); ?></div>

		<ul class="list-shuttle-service">
			<?php if( have_rows('list-service') ): ?>
	            <?php while( have_rows('list-service') ): the_row(); ?>

	            	<li>
	            		<a href="<?php echo get_sub_field('link'); ?>">
	            			<?php echo get_sub_field('title'); ?>
	            		</a>
	            	</li>

	            <?php endwhile; ?>
	    	<?php endif; ?>
		</ul>
	</div>

<?php get_footer(); ?>