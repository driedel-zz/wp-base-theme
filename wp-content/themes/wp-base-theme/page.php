<?php
	require('config/global-vars.php');
	// $global_css
	// Concatenar com a variável de css global os arquivos
	// que devem ser carregados nesta página
	// Case não tenha arquivos específicos ele carregará
	// apenas o padrão do site.
	// ex: $global_css .= ','.AssetsRoot.'css/home.css';

	include( Strucutre.'header.php' );
?>

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>

<div <?php $HtmlWrappers -> MainContent(); ?>>
	<section <?php $HtmlWrappers -> PrimarySection(); ?>>
		<div <?php $HtmlWrappers -> SiteContent(); ?> role="main">

		<?php
			// Start the Loop.
			while ( have_posts() ) {
				the_post();
				include( Modules.'content-page.php' );
				if ( comments_open() || get_comments_number() ) {
					include( Modules.'comments.php' );
				}
			}
		?>

		</div><!-- #content -->
	</section><!-- #primary -->
	<?php include( Modules.'sidebar.php' ); ?>
</div><!-- #main-content -->

<?php include( Strucutre.'footer.php' );
