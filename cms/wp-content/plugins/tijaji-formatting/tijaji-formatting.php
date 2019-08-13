<?php
/**
 * Plugin Name: TIJAJI formatting
 * Plugin URI: https://product.tijaji.jp/tijaji-formatting/
 * Description: Automatic formatting is stopped and the <br> tag is automatically added to the line feed.自動整形を停止し、改行に<br>タグを自動追加します。
 * Author: TIJAJI
 * Author URI: https://tijaji.jp
 * Text Domain: tijaji-formatting
 * Domain Path: /languages
 * Version: 1.10
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */


function tjf_languages() {
	load_plugin_textdomain( 'tijaji-formatting' );
}
add_action( 'plugins_loaded', 'tjf_languages' );

require_once 'tjf_setting.php';

require_once 'tjf_execution.php';

require_once 'tjf_meta.php';

require_once 'tjf_admin.php';

function tjf_sanitize_select( $tjf_input, $tjf_setting ) {
	$tjf_input = sanitize_key( $tjf_input );
	$tjf_choices = $tjf_setting->manager->get_control($tjf_setting->id)->choices;
	return ( array_key_exists( $tjf_input, $tjf_choices ) ? $tjf_input : $tjf_setting->default );
}

?>
