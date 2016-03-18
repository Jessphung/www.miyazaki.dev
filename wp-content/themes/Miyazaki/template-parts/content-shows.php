<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php twentysixteen_excerpt(); ?>

	<?php twentysixteen_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		// display date field
			if ( get_post_meta( get_the_ID(), 'Date', true ) ) {
				$display_date = date('F d, Y', strtotime(get_post_meta($post->ID, "Date", true)));
				echo 'Today is: ' . $display_date . '<br>';
			}
			// display price field
			if ( get_post_meta( get_the_ID(), 'Review', true ) ) {
				$shows_review = get_post_meta( get_the_ID(), 'Review', true );
				echo 'This shows review are: ' . $shows_review . '<br><br>';
			}
			// display TYPES price field
			if ( get_post_meta( get_the_ID(), 'wpcf-client-price', true ) ) {
				$types_price = get_post_meta( get_the_ID(), 'wpcf-client-price', true );
				echo 'Client has paid $' . $types_price . '<br><br>';
			}
		
		
		
		
		
			the_content();

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );

			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php twentysixteen_entry_meta(); ?>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->