<?php
/**
 * The template part for displaying contact form and sticky button
 */
?>

  <div id="fixedbutton" class="button" data-toggle="contactModal"><span class="icon-bubbles2"></span><br>Contact</button>
  </div>
  <div class="medium reveal" id="contactModal" data-reveal>
    <h3>Contact Us</h3>
    <p>Have a question or comment? Send us a message and we will respond as soon as possible.</p>
    <form action="<?php get_template_directory_uri ?>/assets/scripts/php/mail.php" method="post">
      <div class="row">
        <div class="large-12 columns">
          <label>Name
            <input type="text" name="name" placeholder="First and Last Name" />
          </label>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <label>Phone number
            <input type="text" name="phone" placeholder="Phone Number" />
          </label>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <label>Email
            <input type="text" name="email" placeholder="email" />
          </label>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <label>Please provide your comments or questions below
            <textarea name="details" placeholder="Comments or Questions"></textarea>
          </label>
        </div>
      </div>
    </form>
    <button class="button" data-close aria-label="Close reveal">Nevermind</button>
    <input type="submit" class="button" value="Send Message">

    <button class="close-button" data-close aria-label="Close reveal" type="button">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>