<?php
	//
	//Template Name: Page template example
	//

	include_once(dirname(__FILE__).'../../config/global-vars.php');
	// $global_css
	// Concatenar com a variável de css global os arquivos
	// que devem ser carregados nesta página
	// Case não tenha arquivos específicos ele carregará
	// apenas o padrão do site.
	// ex: $global_css .= ','.AssetsRoot.'css/home.css';

	include_once(BaseToSubDir.Strucutre.'header.php' );
?>

<div <?php $HtmlWrappers -> MainContent(); ?>>
	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php
			// Start the Loop.
			while ( have_posts() ) {
				the_post();
				$Title -> Page( array( 'title' => get_the_title() ) );
				the_content();
				if ( comments_open() || get_comments_number() ) {
					include( Modules.'comments.php' );
				}
			}
		?>

		</div><!-- #content -->
	</section><!-- #primary -->
	<?php include_once( BaseToSubDir.Modules.'sidebar-content.php' ); ?>
</div><!-- #main-content -->

<?php include_once( BaseToSubDir.Strucutre.'footer.php' );