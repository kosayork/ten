<?php
function tjf_mb_function() {

		if( get_post_meta( get_the_ID(), 'tjf_af_indi', true ) ) {
			$tjf_af_indi = get_post_meta( get_the_ID(), 'tjf_af_indi', true );
		}else{
			$tjf_af_indi = null;
		}
		if( get_post_meta( get_the_ID(), 'tjf_symbol_indi', true ) ) {
			$tjf_symbol_indi = get_post_meta( get_the_ID(), 'tjf_symbol_indi', true );
		}else{
			$tjf_symbol_indi = null;
		}
		if( get_post_meta( get_the_ID(), 'tjf_br_indi', true ) ) {
			$tjf_br_indi = get_post_meta( get_the_ID(), 'tjf_br_indi', true );
		}else{
			$tjf_br_indi = null;
		}

		$tjf_af_indi = isset( $tjf_af_indi ) ? esc_attr( $tjf_af_indi ) : __( 'No individual setting', 'tijaji-formatting' );
		$tjf_symbol_indi = isset( $tjf_symbol_indi ) ? esc_attr( $tjf_symbol_indi ) : __( 'No individual setting', 'tijaji-formatting' );
		$tjf_br_indi = isset( $tjf_br_indi ) ? esc_attr( $tjf_br_indi ) : __( 'No individual setting', 'tijaji-formatting' );

		$tjf_mb_indi = array();
		$tjf_mb_indi_id = array();
		$tjf_mb_indi_name = array();

		if( $tjf_af_indi ) {array_push( $tjf_mb_indi,$tjf_af_indi ); array_push( $tjf_mb_indi_id,'tjf_af_indi' ); array_push( $tjf_mb_indi_name,__('Automatic shaping stop', 'tijaji-formatting')); }
		if( $tjf_symbol_indi ) {array_push( $tjf_mb_indi,$tjf_symbol_indi ); array_push( $tjf_mb_indi_id,'tjf_symbol_indi' ); array_push( $tjf_mb_indi_name,__('Automatic symbol conversion stop', 'tijaji-formatting')); }
		if( $tjf_br_indi ) {array_push( $tjf_mb_indi,$tjf_br_indi ); array_push( $tjf_mb_indi_id,'tjf_br_indi' ); array_push( $tjf_mb_indi_name,__('Automatically with line break &lt;br /&gt;', 'tijaji-formatting')); }


		echo '<div class="tjf_meta_side">';

		for($i = 0; $i <= count($tjf_mb_indi)-1; ++$i) {

			echo '<div class="tjf_w_div"><div class="tjf_w_div_label"><span>' . esc_html($tjf_mb_indi_name[$i]) . '</span></div>';

			for ($j = 0; $j <= 1; $j++) {

				$options = array( __( 'Disabled', 'tijaji-formatting' ),__( 'No individual setting', 'tijaji-formatting' ));
				$option = $options[$j];
				echo '<div class="tjf_radio"><input class="" type="radio" id="' . esc_attr( $tjf_mb_indi_id[$i] . $j ) . '" name="' . esc_attr( $tjf_mb_indi_id[$i] ) . '" value="'. esc_html($option) .'"';
				if ($option == $tjf_mb_indi[$i] ) echo 'checked';
				echo '><label for="' . esc_attr( $tjf_mb_indi_id[$i] . $j ) . '">'. esc_html( $option ) .'</label></div>';

			}

			echo "</div>\n";

		}

		echo '<div class="clear"></div>' . "</div>\n";

}

function tjf_meta_box() {
	add_meta_box('tjf_mb_function', __( '[TJF] Individual disable setting' , 'tijaji-formatting' ), 'tjf_mb_function', 'post', 'side', 'low' );
	add_meta_box('tjf_mb_function', __( '[TJF] Individual disable setting' , 'tijaji-formatting' ), 'tjf_mb_function', 'page', 'side', 'low' );
}
add_action( 'admin_menu', 'tjf_meta_box' );


function tjf_meta_save( $post_id ) {

		$tjf_af_indi = isset( $_POST['tjf_af_indi'] ) ? wp_kses_post( wp_unslash( $_POST['tjf_af_indi'] ) ) : null;
		$tjf_symbol_indi = isset( $_POST['tjf_symbol_indi'] ) ? wp_kses_post( wp_unslash( $_POST['tjf_symbol_indi'] ) ) : null;
		$tjf_br_indi = isset( $_POST['tjf_br_indi'] ) ? wp_kses_post( wp_unslash( $_POST['tjf_br_indi'] ) ) : null;

		$tjf_mb_indi = array();
		$tjf_mb_indi_id = array();

		if( $tjf_af_indi ) {array_push( $tjf_mb_indi,$tjf_af_indi ); array_push( $tjf_mb_indi_id,'tjf_af_indi' );}
		if( $tjf_symbol_indi ) {array_push( $tjf_mb_indi,$tjf_symbol_indi ); array_push( $tjf_mb_indi_id,'tjf_symbol_indi' );}
		if( $tjf_br_indi ) {array_push( $tjf_mb_indi,$tjf_br_indi ); array_push( $tjf_mb_indi_id,'tjf_br_indi' );}

		for($i = 0; $i <= count($tjf_mb_indi)-1; ++$i) {
			if( !empty($tjf_mb_indi[$i]) && $tjf_mb_indi[$i] != __( 'No individual setting', 'tijaji-formatting' ) ) {
				( isset( $tjf_mb_indi[$i] ) ) ? update_post_meta($post_id, $tjf_mb_indi_id[$i] , esc_html( $tjf_mb_indi[$i] ) ) : "";
			}else{
				delete_post_meta(get_the_ID(), $tjf_mb_indi_id[$i]);
			}
		}

}
add_action( 'save_post', 'tjf_meta_save' );
