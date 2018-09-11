<?php
/**
 * The template part for looping the orbit slider
 **/
?>

<?php
// isFirst is used to set the active variable for the first image on the orbit slider.
$slideshow = get_post_meta( $post->ID, 'property_images' );

// numberOfImages is the amount of images found with the WP_Query. It is used for the navigation control parts of Orbit.
$numberOfImages = sizeof($slideshow);

if ( $numberOfImages > 0 && $slideshow[0] != null) {
    // exit php code and apply html code for the orbit classes
    ?>
    <hr>
    <div id="property-gallery">
    <?php
	foreach ( $slideshow as $attachment ) {
	    ?>
        <div><img src="<?php echo pods_image_url( $attachment, 'large' ); ?>" alt="Property Image Gallery"></div>
    <?php
	   }
	?>
	</div>
	<?php
}

/* Restore original Post Data */
wp_reset_postdata();

?>

