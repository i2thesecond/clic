<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer" style="visibility:hidden;" role="contentinfo">
					
					<div class="row column">
						
					    <p class="text-left">&copy; <?php echo date('Y'); ?> CLIC LCC</p>
					
					</div> <!-- end #inner-footer -->
				
				</footer> <!-- end .footer -->
				
				<?php get_template_part( 'parts/content', 'contact' ); ?>

		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->