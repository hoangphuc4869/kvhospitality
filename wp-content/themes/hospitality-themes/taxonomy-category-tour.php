<?php get_header(); ?>

	<div class="bg-intro">
		<?php
			$term = get_queried_object();
			$image = get_field('img-category', $term);
		?>

		<?php if( $image ): ?>
			<img class="img-intro" src="<?php echo $image['url']; ?>">
		<?php endif; ?>

		<h1><?php tour_cate(); ?></h1>
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

	<div class="bg-content">
		<div class="container">
			<div class="row">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>

				        <div class="col-lg-4 col-md-6 col-12">
				        	<div class="list-restaurant">
				        		<a href="<?php the_permalink(); ?>">
				        			<div class="img-restaurant">
				        				<?php the_post_thumbnail('full'); ?>
				        			</div>

				        			<div class="restaurant-home mr-bottom-2">
				        				<ul class="list-star">
				        					<li><i class="fas fa-star"></i></li>
				        					<li><i class="fas fa-star"></i></li>
				        					<li><i class="fas fa-star"></i></li>
				        					<li><i class="fas fa-star"></i></li>
				        					<li><i class="fas fa-star"></i></li>
				        				</ul>

				        				<h3><?php the_title(); ?></h3>

				        				<div><?php the_excerpt();?></div>

						        		<p class="price-hotel">
						        			<span>From:</span>

						        			<b><?php echo get_field('price'); ?></b>

						        			<span>/ night</span>
						        		</p>
				        			</div>
				        		</a>
				        	</div>
				        </div>

					<?php  endwhile;?>
				<?php endif; ?>



				<!-- phân trang -->

				<?php if(paginate_links()!='') {?>
					<div class="pagination">
						<?php
						global $wp_query;
						$big = 999999999;
						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'prev_text'    => __('<i class="fas fa-chevron-left"></i>'),
							'next_text'    => __('<i class="fas fa-chevron-right"></i>'),
							'current' => max( 1, get_query_var('paged') ),
							'total' => $wp_query->max_num_pages
							) );
					    ?>
					</div>
				<?php } ?>
			</div>

			<!-- book lich tahm quan -->

			<div class="book-casino">
				<p class="link-book-casino">
					<a href="<?php echo get_field('link-book-3', 'option'); ?>">
						<?php echo get_field('text-book-3', 'option'); ?>
					</a>
				</p>
			</div>
		</div>
	</div>

<?php get_footer(); ?>