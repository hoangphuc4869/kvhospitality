<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <p class="text-result">Kết quả tìm kiếm cho "<?php echo get_search_query() ?>"</p>
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
                                <span> <span style="color: #727272;margin-right: 0;">By</span>
                                    <?php the_author()?></span>
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
            <?php endwhile; ?>
            <?php else : ?>
            <div class="post">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="post-content">
                            <div class="post-title">Không có kết quả cho "<?php echo esc_html(get_search_query()); ?>"
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
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

<?php get_footer(); ?>