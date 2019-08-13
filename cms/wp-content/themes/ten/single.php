<?php
if ( in_category('voice') ) {
  include(TEMPLATEPATH . '/single-voice.php');
   }else {
  include(TEMPLATEPATH . '/single-normal.php');
  }
?>
