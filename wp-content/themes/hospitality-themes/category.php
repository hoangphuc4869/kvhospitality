<?php get_header(); ?>

	<div class="bg-intro">
		<?php
			$term = get_queried_object();
			$image = get_field('img-category', $term);
		?>

		<?php if( $image ): ?>
			<img class="img-intro" src="<?php echo $image['url']; ?>">
		<?php endif; ?>

		<h1><?php single_cat_title(); ?></h1>
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

	<!-- tin nổi bật -->

	<div class="bg-content">
		<div class="container">
		    <div class="row">
		        <?php if (have_posts()) : ?>
		        <?php while (have_posts()) : the_post(); ?>

			        <div class="post">
			            <div class="row">
			                <div class="col-lg-3">
			                    <div class="post-img">
			                        <?php the_post_thumbnail()?>
			                    </div>
			                </div>
			                
			                <div class="col-lg-9">
			                    <div class="post-content">
			                        <div class="post-title"><a href="<?php the_permalink()?>"><?php the_title()?></a></div>
			                        <div class="sub-info">
			                            <i class="fas fa-user"></i>
			                            <span> <span style="color: #727272;margin-right: 0;">By</span> <?php the_author()?></span>
			                            <i class="far fa-calendar-alt"></i>
			                            <span> <?php echo get_the_date('d/m/Y')?></span>
			                            <?php
								$categories = get_the_category();
								if ($categories) {
									echo '<i class="fas fa-folder-open"></i> <span>  ';
									foreach ($categories as $category) {
										echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a> ';
									}
									echo '</span>';
								}
								?>
			                        </div>
			                        <div class="short-des">
			                            <?php the_excerpt() ?>
			                        </div>
			                        <div class="readmore">
			                            <a href="<?php the_permalink()?>">Read More</a>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>

		        <?php endwhile;?>
		        <?php endif; ?>
		    </div>

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
	</div>

<?php get_footer(); ?>