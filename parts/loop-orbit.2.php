<?php
/**
 * The template part for looping the orbit slider
 **/
?>

<?php

$args0 = array(
	'post_type' => 'property',
	'orderby'   => 'meta_value_num',
	'meta_key'  => 'property_image',
);

$orbit_query = new WP_Query( $args0 );
// isFirst is used to set the active variable for the first image on the orbit slider.
$isFirst = true;
// numberOfImages is the amount of images found with the WP_Query. It is used for the navigation control parts of Orbit.
$numberOfImages = $orbit_query->post_count; 
echo '<p>';
echo $numberOfImages;
echo '</p>';
// The Loop
if ( $orbit_query ->have_posts() ) {
    // exit php code and apply html code for the orbit classes
    ?>
    <div class="orbit" role="region" aria-label="Property Images" data-orbit>
    <div class="orbit-wrapper">
        <div class="orbit-controls">
            <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
            <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
        </div>
    <ul class="orbit-container">
    <?php
	while ( $orbit_query ->have_posts() ) {
		$orbit_query->the_post();
		get_template_part( 'parts/content', 'orbit' );
		$isFirst = false;
	}
	$isFirst = true;
	?>
    <nav class="orbit-bullets">
    <?php
	for ($x = 0; $x < $numberOfImages; $x++) {
	?>
            <button <?php if(isFirst == true){echo 'class="is-active"';}?> data-slide="<?php echo $x ?>"><span class="show-for-sr"><?php echo $x ?> slide details.</span><?php if(isFirst==true){ echo '<span class="show-for-sr">Current Slide</span>';} ?></button>
    <?php
    $isFirst = false;
	}   
	?>
	</nav>
	</ul>
    </div>
    </div>
	<?php
}

/* Restore original Post Data */
wp_reset_postdata();

?>

