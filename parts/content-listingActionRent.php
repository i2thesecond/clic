<?php
/**
 * The template part for displaying listing page "action section"
 */
?>
<div class="row columns section-padding">
    <h3 class="text-center">Start Renting with CLIC</h3>
    <div class="row section-padding">
        <div class="columns medium-3">
            <div class="rent-listing-container">
            <img class="float-center rent-listing-image-style" src="<?php echo get_template_directory_uri(); ?>/assets/images/calendar-512.png" alt="calendar image">
            <h5>1. Schedule a showing</h4>
            <p>Ask to see this location. Schedule an showing appointment today.</p>
            <a data-toggle="contactModal">Contact Us for Scheduling</a>
            </div>
        </div>
        <div class="columns medium-3">
            <div class="rent-listing-container">
            <img class="float-center rent-listing-image-style" src="<?php echo get_template_directory_uri(); ?>/assets/images/pencil-512.png" alt="calendar image">
            <h5>2. Apply</h4>
           <p>Print and fill out the rent application. CLIC will perform a background check and renter history check.</p>
           <a href="<?php echo get_template_directory_uri(); ?>/assets/files/CLIC_rent_application.pdf">Download Rent Application</a>
            </div>
        </div>
        <div class="columns medium-3">
            <div class="rent-listing-container">
            <img class="float-center rent-listing-image-style" src="<?php echo get_template_directory_uri(); ?>/assets/images/contract-512.png" alt="pencil image">
            <h5>3. Sign Lease Agreement</h4>
            <p>Once the application is approved, meet with CLIC and sign our renting lease.</p>
            </div>
        </div>
        <div class="columns medium-3">
            <div class="rent-listing-container">
            <img class="float-center rent-listing-image-style" src="<?php echo get_template_directory_uri(); ?>/assets/images/truck-512.png" alt="truck image">
            <h5>4. Move in</h4>
            <p>Get your keys and move into your new home!</p>
            </div>
        </div>
    </div>
</div>