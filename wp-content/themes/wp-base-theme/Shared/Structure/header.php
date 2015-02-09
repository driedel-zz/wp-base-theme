<?php
	// Config vars

	$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

	$relative_uri = str_replace($protocol.$_SERVER['HTTP_HOST'], '', site_url());
	$relative_uri = $relative_uri == '' ? '/' : $relative_uri.'/';
	$relative_directory_uri = str_replace($protocol.$_SERVER['HTTP_HOST'], '', get_template_directory_uri());

	$GLOBALS['Root'] = $relative_uri;
	$GLOBALS['AssetsRoot'] = $relative_directory_uri.'/assets/';
	$GLOBALS['FullUrl'] = $_SERVER['REQUEST_URI'];
	$GLOBALS['isLocal'] = $_SERVER[HTTP_HOST] == 'localhost' ? 'true' : 'false';
	$GLOBALS['MinifyUrl'] = $relative_uri.'wp-content/plugins/wp-minify/min/?f=';

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php include($theme_path.'/Shared/Structure/Title.php'); ?>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php
		include($theme_path.'/Shared/Structure/NoJs.php');
		include($theme_path.'/Shared/Structure/NoTouch.php');
		include($theme_path.'/Shared/Structure/JsVars.php');
	?>

	<!--[if lt IE 9]>
	<script src="<?php echo $AssetsRoot; ?>js/lib/html5.js" async defer></script>
	<![endif]-->

	<?php
		// head reference for plugins
		wp_head();
	?>

	<link href="<?php echo $MinifyUrl ?><?php echo $GLOBALS["global_css"] ?>" rel="stylesheet" type="text/css" />
</head>

<body <?php body_class(); ?>>
<div <?php $HtmlWrappers -> MainWrapper(); ?>>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<?php
				// Blog title
				$Title -> Site(
					array(
						'title' => get_bloginfo( 'name' ),
						'link' => home_url( '/' )
					)
				);

				// Skip to search acessibility
				$Acessibility -> Search(sprintf( __( 'Skip to Search', 'twentyfourteen' )), '#search-container');
			?>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<?php
					// Skip to content acessibility
					$Acessibility -> Content(sprintf( __( 'Skip to Content', 'twentyfourteen' )), '#content');

					$Acessibility -> Menu(sprintf(	__( 'Skip to Nav Menu', 'twentyfourteen' )), '#nav-menu');

					// Nav menu
					// Accept two parameters > id, class
					$Menu -> Nav( array('id' => 'nav-menu') );
				?>
			</nav>
		</div>

		<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>
	</header><!-- #masthead -->

	<div <?php $HtmlWrappers -> MainSite(); ?>>
