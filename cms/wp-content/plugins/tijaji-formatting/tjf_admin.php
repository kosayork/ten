<?php
function tjf_admin_menu() {

	$allowed_html = array( 'span' => array( 'class' => array () ) );
	$tjf_list_name = '<span class="tjf_admin_menu">' . __('TIJAJI formatting','tijaji-formatting') . '</span>';
    add_submenu_page('options-general.php', 'TIJAJI formatting', wp_kses( $tjf_list_name , $allowed_html ), 'manage_options', 'tijaji-formatting', 'tjf_admin' );
}
add_action( 'admin_menu', 'tjf_admin_menu' );


function tjf_admin() {
settings_errors();
?>

		<h1 class="tjf_title">TIJAJI formatting</h1>

		<div class="tjf_admin">

			<input type="radio" id="tjf_m1" name="tjf_info_menu" checked>
			<label for="tjf_m1" class="tjf_admin_menu_list_1"><?php esc_html_e( 'Getting started', 'tijaji-formatting' ); ?></label>
			<div class="tjf_admin_content_1">
				<h2><?php esc_html_e( 'Set from theme customizer', 'tijaji-formatting' ); ?></h2>
				<p><?php esc_html_e( 'Let\'s play with theme customizer immediately !', 'tijaji-formatting' ); ?></p>
				<br />
				<p><a class="button button-primary button-large" href="<?php echo esc_url( admin_url( 'customize.php' )); ?>"><?php esc_html_e( 'Go to Customizer', 'tijaji-formatting' );?></a></p>
				<br />
				<br />
				<div class="tjf_img"><a href="<?php echo esc_url( plugins_url( 'images/tjf_img.jpg', __FILE__ )); ?>" target="_blank"><img src="<?php echo esc_url( plugins_url( 'images/tjf_img.jpg', __FILE__ ));?>" /></a></div>
			</div>

			<input type="radio" id="tjf_m2" name="tjf_info_menu">
			<label for="tjf_m2" class="tjf_admin_menu_list_2"><?php esc_html_e( 'individual setting', 'tijaji-formatting' ); ?></label>
			<div class="tjf_admin_content_2">
				<h2><?php esc_html_e( 'Individual setting is possible', 'tijaji-formatting' ); ?></h2>
				<p><?php esc_html_e( 'Customizer settings apply to all articles and pages.', 'tijaji-formatting' ); ?></p>
				<p><?php esc_html_e( 'If you disable it individually, it can be set from the posting meta box.', 'tijaji-formatting' ); ?></p>
				<br />
				<div class="tjf_img"><a href="<?php echo esc_url( plugins_url( 'images/tjf_img2.jpg', __FILE__ )); ?>" target="_blank"><img src="<?php echo esc_url( plugins_url( 'images/tjf_img2.jpg', __FILE__ ));?>" /></a></div>
			</div>

		</div>

<?php
}

function tjf_admin_style(){
    wp_enqueue_style( 'tjf_admin_style', plugins_url( '/tjf_admin.css', __FILE__ ) );
}
add_action( 'admin_enqueue_scripts', 'tjf_admin_style' );
