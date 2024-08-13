	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if(has_post_thumbnail()): ?>
		<div class="entry-thumbnail">
			<?php nova_single_post_thumbnail(); ?>
		</div>
	<?php endif; ?>

	<div class="entry-content-wrap">

		<header class="entry-header">
			<?php if(has_category()): ?>
				<?php
				$categories = get_the_category();
				$separator = '';
				$output = '';
				if ( ! empty( $categories ) ) :
				?>
					<div class="entry-category">
						<?php

								foreach( $categories as $category ) {
										$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
								}
								echo trim( $output, $separator );

						?>
					</div>
				<?php endif?>
				<?php endif?>
			<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
			<div class="entry-meta">
				<a class="author-all-posts" href="<?php echo get_author_posts_url( get_the_author_meta('ID') ) ?>">
					<figure>
						<?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>
					</figure>
					<span><?php echo get_the_author_meta( 'nickname' ) ?></span>
				</a>
				<div class="dot"></div>
				<?php echo nova_posted_on(); ?>
			</div>
		</header>

		<div class="entry-content">

			<div><?php the_excerpt(); ?></div>

		</div>
		<div class="entry-content__readmore-wrap">
			<a class="entry-content__readmore" href="<?php echo(esc_url(get_permalink())); ?>"><?php esc_html_e( 'Read more', 'sportie') ?></a>
		</div>

	</div>

</article>
