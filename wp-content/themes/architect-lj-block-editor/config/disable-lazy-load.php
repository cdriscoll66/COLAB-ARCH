<?php
function wphelp_no_lazy_load_id( $value, $image, $context ) {
    if ( 'the_content' === $context ) {

    $image_url = wp_get_attachment_image_url( 22, 'full' ); // Change the ID and size

    if ( false !== strpos( $image, ' src="' . $image_url . '"' )) {
    return false;
    }
    }
    return $value;
    }
    add_filter( 'wp_img_tag_add_loading_attr', 'wphelp_no_lazy_load_id', 10, 3 );
