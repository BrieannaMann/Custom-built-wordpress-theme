<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); 
get_banner();

echo "single.php";
?>
<div class="flex ">
	<div id="primary" class="content-area border-edge width-75">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_type()); 

	endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php if (is_singular( 'post' ) ) { ?>

<div class="side-bar grey-border-left">
<?php get_sidebar(); ?>
</div>
<?php }else{} ?>
</div>
<?php get_footer(); ?>
