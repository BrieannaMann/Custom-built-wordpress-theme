
<?php

$args = array( 'post_type' => 'adventure' );

    $loop = new WP_Query( $args );

    $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
    
    <div class="border-white width-50 adventure-imgs" style="background:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?php echo $backgroundImg[0]; ?>') ;background-size: cover; ">
<h3 class="white-font">
<?php 
    the_title(); ?>
    </h3>
<div class="read-entry flex ">
<?php
    echo '<a  href="' . get_permalink() . '"><h6 class="small-white-border readmore white-font"> READ MORE </h6></a>';
    echo '</div>';
    echo '</div>';

   ?>
