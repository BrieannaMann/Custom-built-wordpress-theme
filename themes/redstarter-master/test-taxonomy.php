<?php
get_header();
echo"Taxonomy.php";
?>
<div id="primary" class="content-area border-edge">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					echo '<h1 class="page-title flex flex-center">';
					single_term_title();
					echo '</h1> <div class="taxonomy-description flex flex-center">';
					the_archive_description();
					echo '</div>'
				?>
			</header><!-- .page-header -->

			<hr></hr>
		<div class="all-product flex wrap ">
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="flex product prod-border-white">
			<dl class="grey-border">
				<?php echo '<a href="' . get_permalink() . '">';
				?>
			    <div class="product-img ">
			    <?php
			    the_post_thumbnail(); ?>
			    </div>
			    
			   <?php
				$mykey_values = get_post_custom_values( 'price' );
				  foreach ( $mykey_values as $key => $value ) {
				  		echo '<div class="prod-div flex flex-center ">';
				  	echo'<dt class="prod-title">';
			    the_title(); 
			    echo'</dt>';
				    echo '<dd class="prod-price">';
				    echo "$$value"; 
				    echo '</dd>';
				    echo '</div>';
				  } ?>
			</a>
			</dl>
			</div>

			   
			   
				

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
?>