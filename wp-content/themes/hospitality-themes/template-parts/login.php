<?php
/*

Template Name: login page

*/

get_header(); ?>

	<div class="bg-login">
		<div class="container">				
		
			<h1 class="title-login">Login</h1>

			<div class="login-box">
				<?php
					$args = array(
						'redirect'       => site_url( $_SERVER['REQUEST_URI'] ),
						'form_id'        => 'dangnhap', //Để dành viết CSS
						'label_username' => __( 'Tên tài khoản' ),
						'label_password' => __( 'Mật khẩu' ),
						'label_remember' => __( 'Ghi nhớ' ),
						'label_log_in'   => __( 'Đăng nhập' ),
					);
					wp_login_form($args);
				?>
		    </div>


		    <?php
				$login  = (isset($_GET['login']) ) ? $_GET['login'] : 0;
				if ( $login === "failed" ) {
					echo '<p class="error_login"><strong>ERROR:</strong> Sai Username hoặc Password.</p>';
				} elseif ( $login === "empty" ) {
					echo '<p class="error_login"><strong>ERROR:</strong> Username và Password không thể bỏ trống.</p>';
				} elseif ( $login === "false" ) {
					echo '<p class="error_login"><strong>ERROR:</strong> Bạn đã thoát ra.</p>';
				}
			?>
		</div>
	</div>


<?php get_footer(); ?>