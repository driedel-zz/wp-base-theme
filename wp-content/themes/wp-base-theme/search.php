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

		<?php
			if ( have_posts() ) {
		?>
				<header class="page-header">
					<?php $Title -> Page(sprintf( __( 'Search Results for: %s', 'twentyfourteen' ), get_search_query() )); ?>
				</header><!-- .page-header -->
		<?php
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