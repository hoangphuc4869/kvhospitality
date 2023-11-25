<div class="bg-sidebar">
	<h1 class="title-news"><?php echo get_field('title-news-3', 'option'); ?></h1>

	<?php
		/*
		 * Code hiển thị bài viết liên quan trong cùng 1 category

		 */
		$categories = get_the_category(get_the_ID());
		if ($categories){
		    echo '';
		    $category_ids = array();
		    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
		    $args=array(
		        'category__in' => $category_ids,
		        'post__not_in' => array(get_the_ID()),
		        'posts_per_page' => 4,
		        'order'        => 'date',
		        
		    );
		    $my_query = new wp_query($args);
		    if( $my_query->have_posts() ):
		       
		        while ($my_query->have_posts()):$my_query->the_post();
		            ?>

                    <div class="row mr-top-3">
                    	<div class="col-lg-5 col-md-4 col-4">
							<a class="img-news-home-3" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>
							</a>
                    	</div>

                    	<div class="col-lg-7 col-md-8 col-8">
							<h1 class="title-news-home-2">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h1>

							<p class="text-date"><?php echo get_the_date(); ?></p>
                    	</div>
					</div>

		            <?php
		        endwhile;
		        echo '';
		    endif; wp_reset_query();
		    echo '';
		}
	?>
</div>	

