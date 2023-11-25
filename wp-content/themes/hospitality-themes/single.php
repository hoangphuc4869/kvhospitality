<?php get_header(); ?>

	<div class="bg-intro bg-intro-2">
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

	
	<div class="bg-content">
		<div class="container" style="font-family: 'DM Sans', sans-serif;">
		    <div class="row">
		        <div class="col-lg-8">
		            <div class="post-thumb">
		                <?php the_post_thumbnail() ?>
		            </div>
		            <?php
				$categories = get_the_category();
				if ($categories) {
					echo '<i class="fas fa-folder-open"></i> <span>  ';
					foreach ($categories as $category) {
						echo '<a style="color: #000;margin: 20px 0;display: inline-block;" href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a> ';
					}
					echo '</span>';
				}
				?>
		            <br>
		            <div class="post-det">
		                <?php
					$author_id = get_the_author_meta('ID');
					$avatar_url = get_avatar_url($author_id, array('size' => 50)); ?>
		                <img src="<?php echo esc_url($avatar_url) ?>" class="author-avatar">
		                <span> <span style="color: #727272;margin-right: 0;">BY</span>
		                    <?php the_author()?></span>
		                |
		                <span style="color: #727272;font-size: 13px;"> <?php echo get_the_date('d/m/Y')?></span>
		                <span style="color: #727272; font-size: 13px;"> <?php echo get_the_time()?></span>
		            </div>
		            <div class="post-con">
		                <?php the_content() ?>
		            </div>
		            <div id="share-buttons">
		                <a href="https://stackoverflow.com/" class="facebook" target="blank"><i
		                        class="fab fa-facebook-f"></i></a>
		                <a href="https://stackoverflow.com/" class="twitter" target="blank"><i class="fab fa-twitter"></i></a>
		            </div>

		            <?php comments_template()?>

		        </div>

		        <div class="col-lg-4">
		            <div class="search-section">
		                <p class="search-title">Tìm kiếm</p>
		                <?php echo do_shortcode('[wp_search_form]') ?>
		            </div>
		            <div class="popular-posts">
		                <p class="search-title">Bài viết phổ biến</p>
		                <?php 
		                            $args = array(
		                                'posts_per_page' => 5,
		                                'post_type'      => 'post',
		                                
		                            );
		                            $the_query = new WP_Query( $args );
		                            ?>
		                <?php if( $the_query->have_posts() ): ?>
		                <?php while( $the_query->have_posts() ) : $the_query->the_post();
		                            $post_date = get_the_date('d/m/Y');
		                             ?>


		                <div class="blog">
		                    <?php the_post_thumbnail()?>
		                    <div class=" blog-info">
		                        <div class="blog-name"><a href="<?php the_permalink()?>"><?php the_title()?></a></div>
		                        <div class="blog-date"><?php echo $post_date?></div>
		                    </div>
		                </div>


		                <?php endwhile; ?>
		                <?php endif; ?>
		                <?php wp_reset_query(); ?>
		            </div>
		        </div>
		    </div>
		</div>
	</div>

<?php get_footer(); ?>