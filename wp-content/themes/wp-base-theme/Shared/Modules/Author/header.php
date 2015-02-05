			<header class="archive-header">
				<?php
					/*
					 * Queue the first post, that way we know what author
					 * we're dealing with (if that is the case).
					 *
					 * We reset this later so we can run the loop properly
					 * with a call to rewind_posts().
					 */
					the_post();

					$Title -> Author( get_the_author() );

					if ( get_the_author_meta( 'description' ) ) :
				?>
				<div class="author-description"><?php the_author_meta( 'description' ); ?></div>
				<?php endif; ?>
			</header><!-- .archive-header -->