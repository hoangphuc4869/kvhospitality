<!DOCTYPE html>
<html>

<head>
    <title>
        <?php if (is_front_page()) : ?>
        <?php bloginfo('name') ?>
        <?php elseif (is_single()) : ?>
        <?php echo wp_title('', true, ''); ?>
        <?php else : ?>
        <?php echo wp_title('', true, ''); ?>
        <?php endif ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900;1,9..40,1000&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css"
        href="<?php bloginfo('template_directory') ?>/vendor/FontAwesome.Pro.5.15.2.Web/css/all.css">

    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!-- library animation -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/aos.css">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/custom.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/css2.css">

    <?php wp_head() ?>
</head>

<body>

    <!-- menu contact -->

    <div class="display-pc">
        <div class="bg-header">
            <div class="container-fluid">

                <div class="header-contact">
                    <ul class="menu-contact">
                        <li>
                            <a href="tel:<?php echo get_field('phone-number', 'option'); ?>">
                                <?php echo get_field('phone-number', 'option'); ?>
                            </a>
                        </li>

                        <li>
                            <a href="mailto:<?php echo get_field('email', 'option'); ?>">
                                <?php echo get_field('email', 'option'); ?>
                            </a>
                        </li>
                    </ul>

                    <?php wp_nav_menu (
				    array('theme_location' => 'menu-2', 'menu_class' => 'menu-login'));?>
                </div>

            </div>
        </div>

        <!-- menu pc -->

        <div class="container-fluid">
            <div class="bg-header-2">

                <?php $image = get_field('img-logo', 'option');

			    if( !empty( $image ) ): ?>

                <a href="<?php echo home_url(); ?>">
                    <img class="img_logo" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>

                <?php endif; ?>

                <?php wp_nav_menu (
			    array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc'));?>

            </div>
        </div>
    </div>

    <!-- menu mobile -->

    <div class="display-mobile">
        <div class="bg-header-mobile">
            <div class="container-fluid">
                <?php wp_nav_menu (
			    array('theme_location' => 'menu-2', 'menu_class' => 'menu-login'));?>
            </div>
        </div>

        <div class="container-fluid">
            <div class="bg-header-mobile-2">
                <?php $image = get_field('img-logo', 'option');

			    if( !empty( $image ) ): ?>

                <a href="<?php echo home_url(); ?>">
                    <img class="img_logo" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>

                <?php endif; ?>

                <span class="icon-bar"><i class="far fa-bars"></i></span>
            </div>
        </div>

        <!-- menu mobile -->

        <div class="modal-menu">
            <div class="modal-menu-2">
                <?php wp_nav_menu (
			    array('theme_location' => 'menu-1', 'menu_class' => 'menu-mobile'));?>
            </div>
        </div>
    </div>