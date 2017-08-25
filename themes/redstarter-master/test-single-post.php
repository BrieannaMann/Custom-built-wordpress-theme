<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); 
echo "single-post.php";?>
<div class="flex">
	<div id="primary" class="content-area journal-page border-edge">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>


			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<div class="side-bar grey-border-left">
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
