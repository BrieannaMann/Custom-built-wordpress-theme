<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header flex vertical-direction adventure-content">

		<?php the_title( '<h1 class="entry-title flex flex-center">', '</h1>' ); ?>

		<div class="entry-meta ">
		 <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<div class="flex flex-center vertical-direction">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	<div class="flex ">
					<i class="fa fa-facebook dark-grey-border social-icon" aria-hidden="true"> LIKE </i>
					<i class="fa fa-twitter dark-grey-border social-icon" aria-hidden="true"> TWEET </i>
					<i class="fa fa-pinterest dark-grey-border social-icon" aria-hidden="true"> PIN </i>
					</div>
</article><!-- #post-## -->
