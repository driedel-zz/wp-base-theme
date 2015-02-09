			<header class="page-header">
				<?php
					if ( is_day() ) {
						$Title - > Page(sprintf( __( 'Daily Archives: %s', 'twentyfourteen' ), get_the_date() ));
					} elseif ( is_month() ) {
						$Title - > Page(sprintf( __( 'Monthly Archives: %s', 'twentyfourteen' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyfourteen' ) ) ));
					} elseif ( is_year() ) {
						$Title - > Page(sprintf( __( 'Yearly Archives: %s', 'twentyfourteen' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyfourteen' ) ) ));
					} else {
						$Title - > Page(sprintf( __( 'Archives', 'twentyfourteen' )) );
					}
				?>
			</header><!-- .page-header -->