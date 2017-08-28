<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */
get_header(); 
get_banner();?>

<div class="flex ">
	<div id="primary" class="content-area border-edge">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); 
				get_template_part( 'template-parts/content',get_post_type()); 

			endwhile; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php if (is_singular( 'post' ) ) { ?>
		<div class="width-25 grey-border-left padding-med">
		<?php get_sidebar(); ?>
		</div>
		<?php }else{} ?>
		</div>
	<?php get_footer(); ?>
