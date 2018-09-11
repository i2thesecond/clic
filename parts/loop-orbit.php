<?php
/**
 * The template part for looping the orbit slider
 **/
?>

<?php
// isFirst is used to set the active variable for the first image on the orbit slider.
$isFirst = true;
$slideshow = get_post_meta( $post->ID, 'property_images' );

// numberOfImages is the amount of images found with the WP_Query. It is used for the navigation control parts of Orbit.
$numberOfImages = sizeof($slideshow);

if ( $numberOfImages > 1 ) {
    // exit php code and apply html code for the orbit classes
    ?>
    <div class="orbit" role="region" aria-label="Property Images" data-orbit data-options="autoPlay:false;">
    <div class="orbit-wrapper">
        <div class="orbit-controls">
            <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
            <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
        </div>
    <ul class="orbit-container">
    <?php
	foreach ( $slideshow as $attachment ) {
	    ?>
        <li class="<?php if ($isFirst == true){echo 'is-active';} ?> orbit-slide">
            <figure class="orbit-figure">
                <img class="orbit-image" src="<?php echo pods_image_url( $attachment, 'large' ); ?>" alt="Space">
            </figure>
        </li>
        <?php
		$isFirst = false;
	}
	$isFirst = true;
	?>
	</ul>
    </div>
    <nav class="orbit-bullets">
    <?php
	for ($x = 0; $x < $numberOfImages; $x++) {
	?>
            <button <?php if($isFirst == true){echo 'class="is-active"';}?> data-slide="<?php echo $x ?>"><span class="show-for-sr"><?php echo $x ?> slide details.</span><?php if(isFirst==true){ echo '<span class="show-for-sr">Current Slide</span>';} ?></button>
    <?php
    $isFirst = false;
	}   
	?>
	</nav>
    </div>
	<?php
}

/* Restore original Post Data */
wp_reset_postdata();

?>

