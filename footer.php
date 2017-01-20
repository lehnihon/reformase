<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package site
 */

?>

	<div id="footer">
		<div class="container">
			<div class="row">
			a
			</div>
		</div>
	</div>
	<div id="copy">
		<div class="container">
			<div class="row copy-text">
				<div class="col-md-6 text-left text-footer">
					&copy; Copyright <?php echo date('Y') ?> - Todos os direitos reservados - ReformaSe
				</div>
				<div class="col-md-3 col-md-offset-3 text-left">
					<img class="e-claro anima-rino" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/mei.jpg"; ?>" />
				</div>				
			</div>
		</div><!-- .container -->
	</div><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
