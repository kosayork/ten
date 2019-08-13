<?php

function tjf_af_enable() { return get_theme_mod( 'tjf_af_enable', '1' );}
function tjf_af_symbol() { return get_theme_mod( 'tjf_af_symbol', '' );}
function tjf_af_post_br() { return get_theme_mod( 'tjf_af_post_br', '3' );}
function tjf_af_w_enable() { return get_theme_mod( 'tjf_af_w_enable', '' );}
function tjf_af_w_symbol() { return get_theme_mod( 'tjf_af_w_symbol', '' );}
function tjf_af_text_widget_br() { return get_theme_mod( 'tjf_af_text_widget_br', '' );}
function tjf_af_c_h_widget_br() { return get_theme_mod( 'tjf_af_c_h_widget_br', '' );}

if( tjf_af_enable() == 1 ){

	function tjf_af_all() {
		if( get_post_meta( get_the_ID(), 'tjf_af_indi', true ) ) return;
		remove_filter('the_content', 'wpautop');
		remove_filter('the_excerpt', 'wpautop');
	}
	add_action( 'wp', 'tjf_af_all' );
	
}elseif( tjf_af_enable() == 2 ){
	
	function tjf_af_single() {
		if ( is_single() ) {
			if( get_post_meta( get_the_ID(), 'tjf_af_indi', true ) ) return;
			remove_filter('the_content', 'wpautop');
			remove_filter('the_excerpt', 'wpautop');
		}
	}
	add_action( 'wp', 'tjf_af_single' );

}elseif( tjf_af_enable() == 3 ){
	
	function tjf_af_page() {
		if ( is_page() ) {
			if( get_post_meta( get_the_ID(), 'tjf_af_indi', true ) ) return;
			remove_filter('the_content', 'wpautop');
			remove_filter('the_excerpt', 'wpautop');
		}
	}
	add_action( 'wp', 'tjf_af_page' );
}

if( tjf_af_symbol() == 1 ){

	function tjf_symbol_all() {
		if( get_post_meta( get_the_ID(), 'tjf_symbol_indi', true ) ) return;
	remove_filter('the_content', 'wptexturize');
	remove_filter('the_excerpt', 'wptexturize');
	}
	add_action( 'wp', 'tjf_symbol_all' );
	
}elseif( tjf_af_symbol() == 2 ){
	
	function tjf_symbol_single() {
		if ( is_single() ) {
			if( get_post_meta( get_the_ID(), 'tjf_symbol_indi', true ) ) return;
			remove_filter('the_content', 'wptexturize');
			remove_filter('the_excerpt', 'wptexturize');
		}
	}
	add_action( 'wp', 'tjf_symbol_single' );

}elseif( tjf_af_symbol() == 3 ){
	
	function tjf_symbol_page() {
		if ( is_page() ) {
			if( get_post_meta( get_the_ID(), 'tjf_symbol_indi', true ) ) return;
			remove_filter('the_content', 'wptexturize');
			remove_filter('the_excerpt', 'wptexturize');
		}
	}
	add_action( 'wp', 'tjf_symbol_page' );
}

if( tjf_af_w_enable() ){
	function tjf_af_w_all() {
		remove_filter('widget_text_content', 'wpautop');
	}
	add_action( 'wp', 'tjf_af_w_all' );
}

if( tjf_af_w_symbol() ){
	function tjf_w_symbol_all() {
		remove_filter('widget_text_content', 'wptexturize');
	}
	add_action( 'wp', 'tjf_w_symbol_all' );
}


$tjf_tag = 'div|center|fieldset|blockquote|form|input|noscript|h1|h2|h3|h4|h5|h6|address|p|pre|ul|ol|li|dl|dt|dd|dir|menu|table|tbody|thead|tr|th|td|isindex|noframes';
$tjf_inline_tag = 'style|script|object|applet|button|textarea|select|option|map|area|iframe';

function tjf_erase_br( $matches ) {
	return str_replace( '<br />','', $matches[0] );
}

function tjf_ad_post_br($the_content) {

	global $tjf_tag, $tjf_inline_tag;

	if( !tjf_af_post_br() ) return $the_content;
	if( tjf_af_post_br() == 2 ){ if(is_page()) return $the_content; }
	if( tjf_af_post_br() == 1 ){ if(is_single()) return $the_content; }
	if( get_post_meta( get_the_ID(), 'tjf_br_indi', true ) ) return $the_content;

	$the_content = str_replace("\t", "", $the_content);
	$the_content = str_replace(array("\r\n", "\r", " \n", "\n "), "\n", $the_content);
	$the_content = str_replace("\n", "<br />\n", $the_content);
	$the_content = str_replace("<br>", "<br />", $the_content);
	$the_content = preg_replace('|<br />\n\n|is', "<br />\n<br />\n", $the_content);
	$the_content = preg_replace('{<br />\n<('. $tjf_tag . ')}is', "\n<$1", $the_content);
	$the_content = preg_replace('{<(' . $tjf_tag . ')([^>]+?|)><br />}is', "<$1$2>", $the_content);
	$the_content = preg_replace('{\/('. $tjf_tag . '|' . $tjf_inline_tag . ')><br />}is', "/$1>", $the_content);
	$the_content = preg_replace('{\n\n<('. $tjf_tag . ')}is', "\n<br />\n<$1", $the_content);
	$the_content = preg_replace('{(<hr.+?/>|<br.+?/>)<br />}i', "$1", $the_content);
	$the_content = preg_replace_callback('{(<(' . $tjf_inline_tag . ').+?\/(' . $tjf_inline_tag . ')>)}is', 'tjf_erase_br', $the_content);

return $the_content; 
}
add_filter('the_content','tjf_ad_post_br',999);

function tjf_ad_widget_br($the_content) {

	global $tjf_tag, $tjf_inline_tag;
	
	$the_content = str_replace("\t", "", $the_content);
	$the_content = str_replace(array("\r\n", "\r", " \n", "\n "), "\n", $the_content);
	$the_content = str_replace("\n", "<br />\n", $the_content);
	$the_content = str_replace("<br>", "<br />", $the_content);
	$the_content = preg_replace('|<br />\n\n|is', "<br />\n<br />\n", $the_content);
	$the_content = preg_replace('{<br />\n<('. $tjf_tag . ')}is', "\n<$1", $the_content);
	$the_content = preg_replace('{<(' . $tjf_tag . ')([^>]+?|)><br />}is', "<$1$2>", $the_content);
	$the_content = preg_replace('{\/('. $tjf_tag . '|' . $tjf_inline_tag . ')><br />}is', "/$1>", $the_content);
	$the_content = preg_replace('{\n\n<('. $tjf_tag . ')}is', "\n<br />\n<$1", $the_content);
	$the_content = preg_replace('{(<hr.+?/>|<br.+?/>)<br />}i', "$1", $the_content);
	$the_content = preg_replace_callback('{(<(' . $tjf_inline_tag . ').+?\/(' . $tjf_inline_tag . ')>)}is', 'tjf_erase_br', $the_content);

return $the_content; 
}

if( tjf_af_text_widget_br() ){ add_filter('widget_text_content','tjf_ad_widget_br',999); }
if( tjf_af_c_h_widget_br() ){ add_filter('widget_custom_html_content','tjf_ad_widget_br',999); }

