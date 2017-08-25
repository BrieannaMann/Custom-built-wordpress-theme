<?php
get_header();

get_banner();
?>

<?php while ( have_posts() ) : the_post(); ?>
			<div class="about">
	<?php the_content(); ?>
</div>

<?php endwhile; // End of the loop. ?>


<?php
get_footer(); 
?>