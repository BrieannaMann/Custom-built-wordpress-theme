<?php
get_header();
echo "Page-Contact.php";
?>
<div class="flex">
<div>
<div class="about">
	<h1> FIND US </h1>
    <div id="map">
      <iframe width="80%" height="450" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJV8QansdzhlQRatww-ihk6jo&key=AIzaSyAVbHEerVLRAURU4vv65s6FCGU1s9z5u8Y" allowfullscreen></iframe>
    </div>
    
</div>
<div class="our-story">
	<?php while ( have_posts() ) : the_post(); ?>

       <?php the_content();  ?>

      <?php endwhile; // End of the loop. ?>

  
		

</div>
</div>
<div class="side-bar grey-border-left">
<?php get_sidebar(); ?>
</div>
</div>
<?php
get_footer(); 
?>