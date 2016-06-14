<?php
/**
 * Returns advanced custom field (ACF) image
 *
 * You can add an optional custom header image to header.php like so ...
 *
 * @link http://codex.wordpress.org/Custom_Headers
 *
 * @package harley
 */

function harley_edlynk_app_image($image_field) {
  $image = get_field($image_field);
  if( !empty($image) ):
    return '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
  endif;
}