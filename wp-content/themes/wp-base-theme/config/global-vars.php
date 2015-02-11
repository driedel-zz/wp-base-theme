<?php
	$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	$relative_directory_uri = str_replace($protocol.$_SERVER['HTTP_HOST'], '', get_template_directory_uri());
	define('AssetsRoot' , $relative_directory_uri.'/assets/');

	define('Modules', '/Shared/Modules/');
	define('Strucutre', '/Shared/Structure/');
	define('BaseToSubDir', dirname(__FILE__).'../../');
	/*define('Inc', $relative_directory_uri.'/helpers/inc/');*/

	$GLOBALS['global_css'] = AssetsRoot.'css/common.css';
	$GLOBALS["global_js"] = AssetsRoot.'js/dist/main.js';

	// Registrar o wrapper de todos os helpers
	$theme_path = get_template_directory();
	require($theme_path.'/Helpers/wrapper.php');
?>