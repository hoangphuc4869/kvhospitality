<?php
/*

Template Name: Service page

*/
get_header(); ?>

	<div class="intro-service">
		<?php $image = get_field('img-intro');

        if( !empty( $image ) ): ?>

            <img class="img-service" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

        <?php endif; ?>

        <h1 class="title-service"><?php echo get_field('title-page'); ?></h1>
	</div>

	<div class="container">
		
		<div class="content-intro"><?php the_field('content-intro'); ?></div>


		<!-- Cung cấp nhiên liệu đốt công nghiệp -->

		<h2 class="title-partner text-center"><?php echo get_field('title-service'); ?></h2>

		<!-- CUNG CẤP NHIÊN LIỆU ĐỐT THAN -->

		<div class="mr-top">
			<h4 class="charcoal"><?php echo get_field('charcoal'); ?></h4>

			<p class="description-charcoal"><?php echo get_field('description-charcoal'); ?></p>

			<div class="row">
				<?php
				$main_post = get_field('service-charcoal');
				if( $main_post ): ?>
					<?php foreach( $main_post as $post ): 
					// Setup this post for WP functions (variable must be named $post).
					setup_postdata($post); ?>
				 		
				 		<div class="col-lg-4 col-md-6 col-12">
							<div class="list-service-home">
								<a class="img-news-home" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?>
								</a>

								<div class="title-service-home">
									<h1 class="title-details">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h1>

									<a class="read-more-home" href="<?php the_permalink(); ?>">
										Xem CHI TIẾT
									</a>
								</div>
							</div>
						</div>

					<?php endforeach; ?>
					<?php 
					// Reset the global post object so that the rest of the page works correctly.
					wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>

		<!-- iBiomass: Bã điều, viên nén, gỗ dăm -->

		<div class="mr-top">
			<h4 class="charcoal"><?php echo get_field('ibiomass'); ?></h4>

			<p class="description-charcoal"><?php echo get_field('description-ibiomass'); ?></p>

			<div class="row">
				<?php
				$main_post = get_field('service-ibiomass');
				if( $main_post ): ?>
					<?php foreach( $main_post as $post ): 
					// Setup this post for WP functions (variable must be named $post).
					setup_postdata($post); ?>
				 		
				 		<div class="col-lg-4 col-md-6 col-12">
							<div class="list-service-home">
								<a class="img-news-home" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?>
								</a>

								<div class="title-service-home">
									<h1 class="title-details">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h1>

									<a class="read-more-home" href="<?php the_permalink(); ?>">
										Xem CHI TIẾT
									</a>
								</div>
							</div>
						</div>

					<?php endforeach; ?>
					<?php 
					// Reset the global post object so that the rest of the page works correctly.
					wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>

		<!-- Dịch vụ vận hành & cung cấp hơi, nhiệt -->

		<div class="mr-top">
			<h4 class="charcoal"><?php echo get_field('action'); ?></h4>

			<p class="description-charcoal"><?php echo get_field('description-action'); ?></p>

			<div class="row">
				<?php
				$main_post = get_field('service-action');
				if( $main_post ): ?>
					<?php foreach( $main_post as $post ): 
					// Setup this post for WP functions (variable must be named $post).
					setup_postdata($post); ?>
				 		
				 		<div class="col-lg-4 col-md-6 col-12">
							<div class="list-service-home">
								<a class="img-news-home" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?>
								</a>

								<div class="title-service-home">
									<h1 class="title-details">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h1>

									<a class="read-more-home" href="<?php the_permalink(); ?>">
										Xem CHI TIẾT
									</a>
								</div>
							</div>
						</div>

					<?php endforeach; ?>
					<?php 
					// Reset the global post object so that the rest of the page works correctly.
					wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<!-- Chuỗi cung ứng và logistics -->

	<div class="bg-service-home">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<h1 class="logistics"><?php echo get_field('logistics'); ?></h1>

					<p class="description-logistics"><?php the_field('description-logistics'); ?></p>
				</div>

				<?php
				$main_post = get_field('list-logistics');
				if( $main_post ): ?>
					<?php foreach( $main_post as $post ): 
					// Setup this post for WP functions (variable must be named $post).
					setup_postdata($post); ?>
				 		
				 		<div class="col-lg-3 col-md-6 col-12">
							<div class="list-logistics">
								<a class="img-news-home" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?>
								</a>

								<h1 class="title-details mr-top-2">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h1>

								<div class="text-news"><?php the_excerpt();?></div>

								<a class="read-more-home-2" href="<?php the_permalink(); ?>">
									Xem CHI TIẾT
								</a>

							</div>
						</div>

					<?php endforeach; ?>
					<?php 
					// Reset the global post object so that the rest of the page works correctly.
					wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>