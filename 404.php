<?php
/**
 * The template for displaying 404 (page not found) pages.
 *
 * For more info: https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header(); ?>

<?php get_template_part( 'parts/content', 'header' ); ?>
			
	<div class="content">

		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
			<main class="main small-12 medium-8 large-8 cell" role="main">

				<article class="content-not-found">
				
					<h1>404 Error. Page not found.</h1>
					
					<a href="<?php echo home_url(); ?>">Go to Homepage</a>
			
				</article> <!-- end article -->
	
			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>