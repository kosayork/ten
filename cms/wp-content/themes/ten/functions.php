<?php
function Include_my_php($params = array()) {
    extract(shortcode_atts(array(
        'file' => 'default'
    ), $params));
    ob_start();
    include(get_theme_root() . '/' . get_template() . "/$file.php");
    return ob_get_clean();
}
function shortcode_templateurl() {
    return get_bloginfo('template_url');
}
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');
add_shortcode('template_url', 'shortcode_templateurl');
add_shortcode('myphp', 'Include_my_php');
add_theme_support('post-thumbnails');

//購読者がログイン時に管理バーを表示させない
function my_function_admin_bar($content) {
 return ( current_user_can("administrator") ) ? $content : false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');
//smtp_mail
function my_wp_mail_smtp_custom_options ( $phpmailer ) {
	if ( isset( $phpmailer->SMTPAuth ) ) {
		if ( $phpmailer->SMTPAuth == true ) {
			$phpmailer->SMTPOptions = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));
		}
	}
	return $phpmailer;
}
add_filter("wp_mail_smtp_custom_options","my_wp_mail_smtp_custom_options");
?>
