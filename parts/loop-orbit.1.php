<?php
/**
 * The template part for looping the orbit slider
 **/
?>

<?php

// Here's how to use find() 
$params = array( 
    'limit' => -1,
    'where'=>"category.name = 'property_images'"
); 

// Run the find 
$orbit_query = pods( 'property', $params ); 


// isFirst is used to set the active variable for the first image on the orbit slider.
$isFirst = true;
// numberOfImages is the amount of images found with the WP_Query. It is used for the navigation control parts of Orbit.
$numberOfImages = $orbit_query->total_found(); 
echo '<p>';
echo $numberOfImages;
echo '</p>';
// The Loop
if (  0 < $numberOfImages ) {
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
	while ( $orbit_query->fetch() ) {
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

?>

