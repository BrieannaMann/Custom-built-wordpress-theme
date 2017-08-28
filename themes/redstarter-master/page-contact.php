<?php
get_header(); ?>

<div class="flex">
<div class="width-75 border-edge">
<div class="about ">
	<h1> FIND US </h1>
    <div id="map ">
      	<iframe class="flex flex-center" width="100%" height="400" frameborder="0" style="border:0"
			src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJV8QansdzhlQRatww-ihk6jo&key=AIzaSyAVbHEerVLRAURU4vv65s6FCGU1s9z5u8Y" allowfullscreen></iframe>
    	</div>
</div>
	<div class="title-padding">
		<div class="flex vertical-direction ">
			<?php $title1= get_post_custom_values('title_1'); 
				foreach ( $title1 as $key => $titleone ) { ?>
		<div class="flex padding-bottom-med">
		<h2>
    		<?php echo "$titleone";  ?>
    	</h2>
    	</div>
 	<?php } ?> 
			<?php $content1= get_post_custom_values('content_1'); 
				foreach ( $content1 as $key => $contentone ) { ?>
		<div class="flex secondary-font padding-top-med padding-bottom-med">
    		<?php echo "$contentone";  ?>
    	</div>
	<?php  } ?> 
			<?php $title2= get_post_custom_values('title_2'); 
				foreach ( $title2 as $key => $titletwo ) { ?>
		<div class="flex padding-bottom-med">
		<h2>
  			<?php echo "$titletwo"; ?>
   		</h2>
   		</div>
 	<?php } ?> 
		<?php while ( have_posts() ) : the_post(); ?>

       		<?php the_content();  ?>

      	<?php endwhile; // End of the loop. ?>
</div>
</div>
</div>

<div class="width-25 grey-border-left padding-med">
<?php get_sidebar(); ?>

</div>
</div>
<?php
get_footer(); 
?>