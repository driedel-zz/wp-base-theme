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

<div <?php $HtmlWrappers -> MainContent(); ?>>
	<section <?php $HtmlWrappers -> PrimarySection(); ?>>
		<div <?php $HtmlWrappers -> SiteContent(); ?> role="main">

			<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					if ( is_day() ) {
						$Title - > Page(sprintf( __( 'Daily Archives: %s', 'twentyfourteen' ), get_the_date() ));
					} elseif ( is_month() ) {
						$Title - > Page(sprintf( __( 'Monthly Archives: %s', 'twentyfourteen' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyfourteen' ) ) ));
					} elseif ( is_year() ) {
						$Title - > Page(sprintf( __( 'Yearly Archives: %s', 'twentyfourteen' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyfourteen' ) ) ));
					} else {
						$Title - > Page(sprintf( __( 'Archives', 'twentyfourteen' ));
					}
				?>
			</header><!-- .page-header -->

			<?php
				if ( have_posts() ) {

					// Start the Loop.
					while ( have_posts() ) {
						the_post();
						include( Modules.'content.php' );
					}

					// Previous/next post navigation.
					twentyfourteen_paging_nav();

				} else {
					// If no content, include the "No posts found" template.
					include( Modules.'content-none.php' );
				}
			?>
		</div><!-- #content -->
	</section><!-- #primary -->

	<?php include( Modules.'sidebar-content.php' ); ?>
</div><!-- #main-content -->

<?php include( Strucutre.'footer.php' );
