<?php
/**
 * Loop for Properties
 */

$args0 = array(
	'post_type' => array( 'property'),
	'posts_per_page'=> -1,
	'orderby' => 'title',
	'order' => 'asc',
	'meta_query' => array(
		array(
			'key' => 'property_active',
			'compare' => '==',
			'value' => '1'
		)
	)
);

$listings_query = new WP_Query( $args0 );

// The Loop
if ( $listings_query ->have_posts() ) {
	while ( $listings_query ->have_posts() ) {
		$listings_query->the_post();
		get_template_part( 'parts/content', 'listings' );
	}
}
else{
	echo '<p> Nothing avaliable at this time. </p>';
}

/* Restore original Post Data */
wp_reset_postdata();

?>