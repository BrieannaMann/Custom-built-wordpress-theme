<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>
<?php echo"content-product"; ?>
<div id="primary" class="content-area border-edge sing-prod-page">

		<div class="flex">
			
				
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


			<?php the_posts_navigation(); ?>


		


	</div><!-- #primary -->
<?php
get_footer();
?>
