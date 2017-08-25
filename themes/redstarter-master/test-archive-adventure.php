<?php
echo 'archive-adventure.php begins';
/**
* The template for displaying archive pages.
*
* @package RED_Starter_Theme
*/

get_header(); ?>


<h1 class="flex-center flex"> LATEST ADVENTURE</h1>
<div class="flex wrap">
<?php

$args = array( 'post_type' => 'adventure', 'posts_per_page' => 4 );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
    

    $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
    
    <div class="adv-img" style="background: url('<?php echo $backgroundImg[0]; ?>') ;background-size: cover">
<h3 class="white-font">
<?php 
    the_title(); ?>
    </h3>
<div class="white-border read-entry">
<?php
    echo '<a class=" readmore-adventure white-font" href="' . get_permalink() . '"> READ MORE </a>';
    echo '</div>';
    echo '</div>';
    endwhile;?>
   
</div>
<div class="more-adv">
 <?php $page = get_page_by_title("adventure");?>
<a class="green-background white-font" href="<?php echo get_post_type_archive_link( 'adventure' ); ?>">MORE ADVENTURES</a>
</div>
</div>

<?php get_footer(); ?>
