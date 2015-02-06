<title>
<?php
	if (function_exists('is_tag') && is_tag()) {

		printf( __( 'Tag Archives for &quot;%s&quot; - ', 'twentyfourteen' ), $tag );

	} elseif (is_search()) {

		printf( __( 'Search Results for &quot%s&quot - ', 'twentyfourteen' ), get_search_query());

	} elseif (is_category()) {

		printf( __( 'Category Archives for &quot%s&quot - ', 'twentyfourteen' ), single_cat_title( '', false ) );

	} elseif (is_author()) {

		printf( __( 'All posts by &quot%s&quot - ', 'twentyfourteen' ), get_the_author() );

	} elseif (is_tag()) {

		printf( __( 'Tag Archives: %s', 'twentyfourteen' ), single_cat_title( '', false ) );

	} elseif (!(is_404()) && (is_single()) || (is_page())) {

		wp_title(''); echo ' - ';

	} elseif (is_404()) {

		printf(__( 'Not Found - ', 'twentyfourteen' ));

	} elseif (is_archive()) {
		// Arquivos sempre por último para não cair em nenhuma regra
		// das páginas de categoria, tags e autores
		wp_title(''); echo ' Archive - ';
		if ( is_day() ) {
			printf( __( 'Daily Archives: %s', 'twentyfourteen' ), get_the_date() );
		} elseif ( is_month() ) {
			printf( __( 'Monthly Archives: %s', 'twentyfourteen' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyfourteen' ) ) );
		} elseif ( is_year() ) {
			printf( __( 'Yearly Archives: %s', 'twentyfourteen' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyfourteen' ) ) );
		} else {
			printf( __( 'Archives', 'twentyfourteen' ));
		}
	}

	bloginfo('name');
?>
</title>