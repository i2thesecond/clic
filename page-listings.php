<?php get_header(); ?>

<?php get_template_part( 'parts/content', 'header' ); ?>

  <div id="content">


    <main id="inner-content" role="main" class="listing-section">
      
      <div class="row columns">
      <div class="callout">
    
      <div class="row columns small-padding">
          <h2>Current Listings</h2>
      </div>
    
      <div class="row columns">
        <label>Show:</label>
        <a href="#allListings" id="allButton" class="button listing-selection-button">All listings</a>
        <a href="#forSale" id="saleButton" class="button">For sale</a>
        <a href="#forRent" id="rentButton" class="button">Rentals</a>
      </div>
    
      <div class="grid-container">
        <div class="grid-x grid-padding-x small-up-1 medium-up-2 large-up-3">
          <?php get_template_part('parts/loop', 'listings') ?>
        </div>
      </div>
      
      </div>
      </div>

    </main>
    <!-- end #main -->


  </div>
  <!-- end #content -->

  <?php get_footer(); ?>