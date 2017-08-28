<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @package RED_Starter_Theme
 */

?>

<div class="flex width-25 border-white">
      <dl class="grey-border">
        <?php echo '<a href="' . get_permalink() . '">';
            ?>
          <div class="product-img">
          <?php
          the_post_thumbnail(); ?>
          </div>
          
         <?php
//FIX PRICE 
  
        $mykey_values = get_post_custom_values( 'price' );
          foreach ( $mykey_values as $key => $value ) { 
                echo '<div class="prod-div flex flex-center ">';
            echo'<dt class="prod-title">';
          the_title(); 
          echo'</dt>';
            echo '<dd class="prod-price"> $';
            echo get_field('price');
            echo '</dd>';
            echo '</div>';
          } ?>
          </a>
      </dl>
      </div>