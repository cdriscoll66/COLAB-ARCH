<?php function rocket_lazyload_exclude_src( $src ) {
	$featured_img_url = get_the_post_thumbnail_url( '22' );
		if ($featured_img_url) {
			$src[] = $featured_img_url;
		}
	return $src;
}
add_filter( 'rocket_lazyload_excluded_src', 'rocket_lazyload_exclude_src' );
