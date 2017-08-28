<?php get_header(); 
get_banner(); ?>  



<!-- START OF PRODUCTS SECTION  -->
<div class="border-edge">
<?php get_template_part("template-parts/archive-display-home","shop"); ?>

    
<!-- START OF JOURNAL SECTION -->
<?php get_template_part("template-parts/archive-display-home","journal"); ?>
<!-- START OF ADVENTURE SECTION  -->
<?php get_template_part("template-parts/archive-display-home","adventure"); ?>

 </div>
	<?php 

//FOOTER
get_footer(); 
?>
