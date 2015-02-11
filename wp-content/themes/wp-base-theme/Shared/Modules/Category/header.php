			<header class="category-header">
				<?php
					$Title -> Category( array('title' => single_cat_title( '', false )) );

					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) {
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					}
				?>
			</header><!-- .category-header -->