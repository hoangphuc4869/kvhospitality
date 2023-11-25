
<?php
/*

Template Name: Home page

*/
get_header(); ?>

	<div class="swiper mySwiper">
		<div class="swiper-wrapper">
			<?php if( have_rows('slider-banner') ): ?>
	            <?php while( have_rows('slider-banner') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                ?>

	                <div class="swiper-slide">
	                	<div class="content-banner">
	                		<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

	                		<div class="title-banner">
	                			<h1><?php echo get_sub_field('title'); ?></h1>

	                			<p><?php echo get_sub_field('excerpt'); ?></p>
	                		</div>
	                	</div>
	                </div>

	            <?php endwhile; ?>
	    	<?php endif; ?>
	    </div>
	</div>

	<!-- Dịch Vụ Của Chúng Tôi -->

	<div class="mr-top">
		<div class="container">
			<h2 class="title-service"><?php echo get_field('title-service'); ?></h2>

			<div class="row">
				<?php if( have_rows('list-service') ): ?>
	            	<?php while( have_rows('list-service') ): the_row(); ?>

	            		<div class="col-lg-4 col-md-6 col-12">            			
	           				<a href="<?php echo get_sub_field('link'); ?>">

	           					<div class="service-home">

	            					<div><?php echo get_sub_field('icon'); ?></div>

	            					<h2><?php echo get_sub_field('title'); ?></h2>

	            				</div>

	            			</a>
	            		</div>

	           		<?php endwhile; ?>
	    		<?php endif; ?>
			</div>
		</div>
	</div>

	<!-- Top Địa Điểm Ẩm Thực -->

	<div class="mr-top">
		<div class="container">
			<h2 class="title-service"><?php echo get_field('title-restaurant'); ?></h2>

			<div class="row">
				<?php
				$restaurant = get_field('list-restaurant');
				if( $restaurant ): ?>
				    <?php foreach( $restaurant as $post ): 

				        // Setup this post for WP functions (variable must be named $post).
				        setup_postdata($post); ?>

				        <div class="col-lg-4 col-md-6 col-12">
				        	<div class="listPage">
					        	<div class="list-restaurant">
					        		<a href="<?php the_permalink(); ?>">
					        			<div class="img-restaurant">
					        				<?php the_post_thumbnail('full'); ?>
					        			</div>

					        			<div class="restaurant-home">
					        				<h3><?php the_title(); ?></h3>

					        				<div><?php the_excerpt();?></div>

					        				<span class="read-more">Xem thêm</span>
					        			</div>
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

			<ul class="paginationRes activePag"></ul>
		</div>
	</div>

	<!-- Top Sân Golf Đẹp -->

	<div class="bg-golf">
		<div class="container">
			<h2 class="title-service"><?php echo get_field('title-golf'); ?></h2>

			<div class="row">
				<?php
				$golf = get_field('list-golf');
				if( $golf ): ?>
				    <?php foreach( $golf as $post ): 

				        // Setup this post for WP functions (variable must be named $post).
				        setup_postdata($post); ?>

				        <div class="col-lg-4 col-md-6 col-12">
				        	<div class="listPage2">
					        	<div class="list-restaurant">
					        		<a href="<?php the_permalink(); ?>">
					        			<div class="img-restaurant">
					        				<?php the_post_thumbnail('full'); ?>
					        			</div>

					        			<div class="restaurant-home">
					        				<h3><?php the_title(); ?></h3>

					        				<div><?php the_excerpt();?></div>

					        				<span class="read-more">Xem thêm</span>
					        			</div>
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

			<ul class="paginationRes activePag2"></ul>
		</div>
	</div>

	<!-- Top Khách Sạn -->

	<div class="mr-top">
		<div class="container">
			<h2 class="title-service"><?php echo get_field('title-hotel'); ?></h2>

			<div class="row">
				<?php
				$hotel = get_field('list-hotel');
				if( $hotel ): ?>
				    <?php foreach( $hotel as $post ): 

				        // Setup this post for WP functions (variable must be named $post).
				        setup_postdata($post); ?>

				        <div class="col-lg-4 col-md-6 col-12">
				        	<div class="list-restaurant">
				        		<a href="<?php the_permalink(); ?>">
				        			<div class="img-restaurant">
				        				<?php the_post_thumbnail('full'); ?>
				        			</div>

				        			<div class="restaurant-home">
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

				    <?php endforeach; ?>

				    <?php 
				    // Reset the global post object so that the rest of the page works correctly.
				    wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<!-- Điểm Đến Du Lịch -->

	<div class="mr-top">
		<div class="container">
			<h2 class="title-service"><?php echo get_field('title-travel'); ?></h2>

			<div class="row">
				<?php if( have_rows('list-travel') ): ?>
		            <?php while( have_rows('list-travel') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail']; 
		                ?>

		                <div class="col-lg-4 col-md-6 col-12">
			                <a href="<?php echo get_sub_field('link'); ?>">
			                	<div class="travel-home">
				                	<img class="img-travel" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

				                	<div class="travel-home-2">
				                		<h3><?php echo get_sub_field('title'); ?></h3>

				                		<p><?php echo get_sub_field('activities'); ?></p>
				                	</div>
				                </div>
			                </a>
			            </div>

		            <?php endwhile; ?>
		    	<?php endif; ?>
			</div>
		</div>
	</div>

	<!-- Sự Kiện & Tin Tức Du Lịch -->

	<div class="bg-golf">
		<div class="container">
			<h2 class="title-service"><?php echo get_field('title-news'); ?></h2>

			<div class="row">
				<?php
					$news = get_field('news-event');

					$args = array(	
						'post_status' => 'publish',
						'post_type' => 'post',
						'posts_per_page' => 9,
						'cat' => $news,
						'order' => 'date',			
					);
				?>
				<?php $getposts = new WP_query($args); ?>
				<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

					<div class="col-lg-4 col-md-6 col-12">
						<div class="content-news-home">
							<?php the_post_thumbnail('full', ['class' => 'img-news-home']); ?>

							<div class="content-news-home2">
								<h3 class="title-news-home">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>

		                		<ul class="date-news">
		                			<li><i class="fas fa-user"></i> <?php the_author(); ?></li>

		                			<li><i class="far fa-calendar-alt"></i> <?php echo get_the_date(); ?></li>
		                		</ul>

		                		<div class="excerpt-news"><?php the_excerpt();?></div>

		                		<p class="learn-more">
		                			<a href="<?php the_permalink(); ?>">
		                				Xem thêm
		                			</a>
		                		</p>
		                	</div>
						</div>
					</div>
			
				<?php endwhile; wp_reset_postdata(); ?>
			</div>

			<ul class="paginationRes activePag3"></ul>
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