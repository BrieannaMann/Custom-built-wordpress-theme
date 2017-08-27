<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>
<?php echo"content-product"; ?>

		<div class="flex">
			
				
			    <div class="single-product-img flex-basis-50">
			    <?php

			    the_post_thumbnail(); ?>
			    </div>
			    <div class="prod-div flex vertical-direction wrap flex-basis-50">
			    <h1 class="orange-font ">
			    <strong>
			    <?php the_title(); ?> 
			    </strong>
			    </h1>
			    <h2> $
				   <?php  echo get_field('price');?>
				</h2>

			
			<p class="secondary-font">
			<?php 
			the_content();  ?>
			<div class="flex ">
			<i class="fa fa-facebook dark-grey-border social-icon" aria-hidden="true"> LIKE </i>
			<i class="fa fa-twitter dark-grey-border social-icon" aria-hidden="true"> TWEET </i>
			<i class="fa fa-pinterest dark-grey-border social-icon" aria-hidden="true"> PIN </i>
			</div>
			</p>
			</div>
			</div>	


