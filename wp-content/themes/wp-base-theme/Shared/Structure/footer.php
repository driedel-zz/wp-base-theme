<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php
				// Footer menu
				// // Accept two parameters > id, class
				$Menu -> Footer();

				include( BaseToSubDir.Modules.('Footer/SiteInfo.php') );
			?>
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<script src="<?php echo $MinifyUrl ?><?php echo $GLOBALS["global_js"] ?>" async defer></script>

	<?php
		// footer reference for plugins
		wp_footer();
	?>
</body>
</html>