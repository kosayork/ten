<?php
if ( in_category('gallery') ) {
	include(TEMPLATEPATH . '/category_gallery.php');
} else {
	include(TEMPLATEPATH . '/category_default.php');
}
?>