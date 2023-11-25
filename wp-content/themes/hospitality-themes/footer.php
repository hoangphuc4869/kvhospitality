<div class="bg-footer">
    <div class="container-fluid">
        <h2 class="title-footer">
            <?php echo get_field('title-footer', 'option'); ?>
        </h2>

        <div class="intro-company">
            <?php echo get_field('intro-company', 'option'); ?>
        </div>

        <ul class="list-social-footer">
            <?php if( have_rows('list-social', 'option') ): ?>
            <?php while( have_rows('list-social', 'option') ): the_row(); 
	            		$link = get_sub_field('link');
		            	?>

            <li>
                <a href="<?php echo $link;?>">
                    <?php echo get_sub_field('icon'); ?>
                </a>
            </li>

            <?php endwhile; ?>
            <?php endif; ?>
        </ul>

        <p class="copyright"><?php echo get_field('copyright', 'option'); ?></p>
    </div>
</div>

<!-- <a class="back-top" href="#"><i class="far fa-angle-up"></i></a> -->


<!-- Thư Viện jquery -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<!-- bootstrap -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>

<!-- Thư Viện swiper -->

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- library animation js -->
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/aos.js"></script>


<!-- My Js -->

<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/app.js"></script>

<?php if (is_page('trang-chu')) { ?>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/pagination.js"></script>
<?php } ?>

<?php if (is_page('login')) { ?>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/login.js"></script>
<?php } ?>

<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/style.js"></script>

<?php wp_footer() ?>

</body>

</html>