<?php get_header(); ?>

   <div class="hero-full-screen" style="">

    <div class="top-content-section">
    </div>
    <div class="middle-content-section">
      <div class="row column text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/CLICLogo.svg" alt="CLIC Logo">
        <h1>
          Find your new home
        </h1>
        <h3>
          Discover housing solutions with CLIC
        </h3>
        <a href="<?php echo get_page_link(24); ?>" class="button large raduis">View Homes</a>
      </div>
    </div>

    <div class="bottom-content-section" data-magellan data-threshold="0">
      <a href="#main-content-section"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 12c0-6.627-5.373-12-12-12s-12 5.373-12 12 5.373 12 12 12 12-5.373 12-12zm-18.005-1.568l1.415-1.414 4.59 4.574 4.579-4.574 1.416 1.414-5.995 5.988-6.005-5.988z"/></svg></a>
    </div>

  </div>

  <section id="main-content-section">

  <div class="row columns header-seperator">
    <h3 class="text-center">CLIC offers rentals and homes for sale.</h3>
    <div class="text-center">
      <p>Whether you are looking to buy or to rent, CLIC has you covered!
    </div>
    <hr>
  </div>


  <div class="section-gap ">
    <div class="row">
      <div class="columns medium-4">
        <div class="row mobile-bottom-padding">
          <div class="columns small-8 small-centered medium-12">
            <div class="circle-color5">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/buy-house.png" alt="buy image">
            </div>
          </div>
        </div>
      </div>
      <div class="columns medium-8 center-column">
        <h3>Interested in Buying?</h3>
        <p>CLIC homes are for sale by owner!</p>
        <p>We will work with you to ensure your new home is right before your purchase.</p>
        <a href="<?php echo get_page_link(24); ?>#forSale" class="button">View Homes for Sale</a>
      </div>
    </div>
  </div>

  <div class="section-gap ">
    <div class="row">
      <div class="columns medium-4 medium-push-8 ">
        <div class="row mobile-bottom-padding">
          <div class="columns small-8 small-centered medium-12">
            <div class="circle-color1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rent-house.png" alt="lease image">
            </div>
          </div>
        </div>
      </div>
      <div class="columns medium-8 medium-pull-4 center-column">
        <h3>Looking to Rent?</h3>
        <p>CLIC offers rental properties with affordable prices and a transparent lease agreement.</p>
        <a href="<?php echo get_page_link(24); ?>#forRent" class="button">View Rentals</a>
      </div>
    </div>
  </div>


  <div class="background-color1">
    <div class="row columns section-gap">
      <h4 class="text-center">Thank you for considering CLIC for your next home!</h4>
      <p class="text-center">Have any questions or comments? <a  data-toggle="contactModal">Please Contact Us</a>.</p>
    </div>
  </div>

  <div class="aboutus-section">
    <div class="section-gap">
      <div class="row large-8 large-centered columns section-padding">
        <h3 class="text-center">About Us</h3>
          <p>CLIC LLC is a family owned land and real estate corporation located in Lincoln, NE. We focus on acquiring previously neglected real estate properties to revatalize for human occupancy.</p>
        </div>
      </div>
    </div>
  </div>

  </section>
  
  </main>
    <!-- end #main -->


  </div>
  <!-- end #content -->

  <?php get_footer(); ?>