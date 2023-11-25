<?php

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );

// Thêm ảnh đại diện
add_theme_support('post-thumbnails');

// support woocommerce

// function my_custom_wc_theme_support()
// {

//     add_theme_support('woocommerce');

//     add_theme_support('wc-product-gallery-lightbox');

//     add_theme_support('wc-product-gallery-slider');
//     // add_theme_support('wc-product-gallery-zoom');
// }
// add_action('after_setup_theme', 'my_custom_wc_theme_support');


function m_register_menu()
{
	register_nav_menus(
		array(
			'menu-1' => __('Menu PC'),
			'menu-2' => __('login'),
		)
	);
}
add_action('init', 'm_register_menu');


// add theme option menu bar admin 
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}


// thanh tìm kiếm

function search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div class="searchBox">
    <input type="search" class="search-field searchInput" value="' . get_search_query() . '" name="s" id="s" placeholder="Từ khóa..."/>

    <button type="submit" class="searchButton"> 
        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
        <g clip-path="url(#clip0_2_17)">
            <g filter="url(#filter0_d_2_17)">
            <path d="M23.7953 23.9182L19.0585 19.1814M19.0585 19.1814C19.8188 18.4211 20.4219 17.5185 20.8333 16.5251C21.2448 15.5318 21.4566 14.4671 21.4566 13.3919C21.4566 12.3167 21.2448 11.252 20.8333 10.2587C20.4219 9.2653 19.8188 8.36271 19.0585 7.60242C18.2982 6.84214 17.3956 6.23905 16.4022 5.82759C15.4089 5.41612 14.3442 5.20435 13.269 5.20435C12.1938 5.20435 11.1291 5.41612 10.1358 5.82759C9.1424 6.23905 8.23981 6.84214 7.47953 7.60242C5.94407 9.13789 5.08145 11.2204 5.08145 13.3919C5.08145 15.5634 5.94407 17.6459 7.47953 19.1814C9.01499 20.7168 11.0975 21.5794 13.269 21.5794C15.4405 21.5794 17.523 20.7168 19.0585 19.1814Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" shape-rendering="crispEdges"></path>
            </g>
        </g>
        <defs>
            <filter id="filter0_d_2_17" x="-0.418549" y="3.70435" width="29.7139" height="29.7139" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
            <feOffset dy="4"></feOffset>
            <feGaussianBlur stdDeviation="2"></feGaussianBlur>
            <feComposite in2="hardAlpha" operator="out"></feComposite>
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2_17"></feBlend>
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2_17" result="shape"></feBlend>
            </filter>
            <clipPath id="clip0_2_17">
            <rect width="28.0702" height="28.0702" fill="white" transform="translate(0.403503 0.526367)"></rect>
            </clipPath>
        </defs>
        </svg>
    </button>
    </div>
    </form>';
 
    return $form;
	}
	add_shortcode( 'wp_search_form', 'search_form' );




// page đăng nhập

/* Tự động chuyển đến một trang khác sau khi login */

function my_login_redirect( $redirect_to, $request, $user ) {
  //is there a user to check?
  global $user;
  if ( isset( $user->roles ) && is_array( $user->roles ) ) {
    //check for admins
    if ( in_array( 'administrator', $user->roles ) ) {
      // redirect them to the default place
      return admin_url();
    } elseif (in_array('editor', $user->roles )) {
		 return admin_url();
	} elseif (in_array('author', $user->roles )) {
		return admin_url();
	} else {
      return home_url();
    }
  } else {
    return $redirect_to;
  }
}
add_filter( 'login_redirect', 'my_login_redirect', 10, 3 );


function redirect_login_page() {
    $login_page  = home_url( '/login/' );
    $page_viewed = basename($_SERVER['REQUEST_URI']);  
    if( $page_viewed == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {
        wp_redirect($login_page);
        exit;
    }
}
add_action('init','redirect_login_page');



/* Kiểm tra lỗi đăng nhập */
function login_failed() {
    $login_page  = home_url( '/login/' );
    wp_redirect( $login_page . '?login=failed' );
    exit;
}
add_action( 'wp_login_failed', 'login_failed' );  
function verify_username_password( $user, $username, $password ) {
    $login_page  = home_url( '/login/' );
    if( $username == "" || $password == "" ) {
        wp_redirect( $login_page . "?login=empty" );
        exit;
    }
}
add_filter( 'authenticate', 'verify_username_password', 1, 3);



// phần comment tin tức

add_filter('comment_form_default_fields', 'custom_comment_form_fields');

function custom_comment_form_fields($fields)
{
    $req = get_option('require_name_email');

    unset($fields['url']);

    
    $commenter = wp_get_current_commenter();

    
    $fields['author'] = '<div class="comment-group row">'.'<div class="col-lg-6">'.'<p class="comment-form-author">' .
                        '<input class="w-100" id="author" name="author" type="text" placeholder="' . esc_attr__('Họ tên', 'textdomain') . '" value="' . esc_attr($commenter['comment_author']) . '" size="30" maxlength="245" aria-required="true" required="required" />' .
                        '</p>'.'</div>';

    
    $fields['email'] = '<div class="col-lg-6">'.'<p class="comment-form-email">' .
                       '<input id="email" class="w-100"  name="email" type="text" placeholder="' . esc_attr__('Email', 'textdomain') . '" value="' . esc_attr($commenter['comment_author_email']) . '" size="30" maxlength="100" aria-describedby="email-notes" autocomplete="email"' . ($req ? ' required="required"' : '') . ' />' .
                       '</p>' .'</div>'.'</div>';

    
    $fields['comment'] = '<p class="comment-form-comment">' .
                         '<textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" placeholder="' . esc_attr__('Bình luận của bạn', 'textdomain') . '" aria-required="true" required="required"></textarea>' .
                         '</p>';

    return $fields;
}



add_filter('comment_form_defaults', 'custom_comment_form_defaults');

function custom_comment_form_defaults($defaults)
{
    
    $defaults['label_submit'] = 'Đăng';
    $defaults['title_reply'] = 'Bình luận';
    

    return $defaults;
}


add_filter('comment_form_field_comment', 'custom_comment_form_comment');

function custom_comment_form_comment($field)
{
    
    $field = preg_replace('/<label for="comment">.*<\/label>/', '', $field);
    $field = str_replace('textarea', 'textarea placeholder="' . esc_attr__('Bình luận của bạn', 'textdomain') . '"', $field);

    return $field;
}
