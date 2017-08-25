<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>

			<div class="single-journal ">
        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
   
        <div class="journal-img flex vertical-direction space-between" style="background: url('<?php echo $backgroundImg[0]; ?>'); background-size:cover;">

        <div class="journal-name white-font green-bkg flex flex-left">
            <h2> <?php the_title() ?> </h2> 
        </div>
    <div class="journal-date white-font green-bkg flex flex-right flex-align-right">
        <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / BY <?php the_author(); ?>
    </div>
    </div>
			
		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-content">
	<div class="journal-exerpt">
        <?php the_content(); ?>
    </div>
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
</article><!-- #post-## -->
