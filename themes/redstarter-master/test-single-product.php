<?php
get_header();
echo "single-product.php";
?>
<div id="primary" class="content-area border-edge sing-prod-page">

		<div class="flex">
			<?php while ( have_posts() ) : the_post(); ?>
				
			    <div class="single-product-img flex-basis-50">
			    <?php

			    the_post_thumbnail(); ?>
			    </div>
			    
			   <?php
				$mykey_values = get_post_custom_values( 'price' );
				  foreach ( $mykey_values as $key => $value ) { ?>
				  	<div class="prod-div flex vertical-direction wrap flex-basis-50">
			    <h1 class="orange-font">
			    <?php the_title(); ?> 
			    </h1>
			    <br>
			    <h3>
				   <?php  echo "$$value"; ?>
				</h3>
				    
				 <?php  } ?>
			<p>
			<?php the_content();  ?>
			<div class="flex ">
			<i class="fa fa-facebook dark-grey-border social-icon" aria-hidden="true"> LIKE </i>
			<i class="fa fa-twitter dark-grey-border social-icon" aria-hidden="true"> TWEET </i>
			<i class="fa fa-pinterest dark-grey-border social-icon" aria-hidden="true"> PIN </i>
			</div>
			</p>
			</div>
			</div>	

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>


		


	</div><!-- #primary -->
<?php
get_footer();
?>
