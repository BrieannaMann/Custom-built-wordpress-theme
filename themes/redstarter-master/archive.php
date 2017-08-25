<?php
echo 'archive.php ';
/**
* The template for displaying archive pages.
*
* @package RED_Starter_Theme
*/

get_header();

?>
<div id="primary" class="content-area border-edge">
    <main id="main" class="site-main" role="main">

    <?php get_template_part("template-parts/archive","header"); ?>
     <?php while ( have_posts() ) : the_post(); ?>
                          <!-- call get template part here -->
      <?php get_template_part("template-parts/content-archive",get_post_type()); ?>
          <?php endwhile; ?>
</main>
</div>


<?php
get_footer();
?>
