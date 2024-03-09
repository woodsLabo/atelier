<?php
function wp_query($post_type = null, $posts_per_page = -1) {
	$args = array(
		'post_type' => $post_type,
		'posts_per_page' => $posts_per_page,
		'order' => 'asc'
	);

	return new WP_Query($args);
}
?>
