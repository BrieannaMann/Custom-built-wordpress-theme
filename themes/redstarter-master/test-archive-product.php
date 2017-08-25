<?php
get_header();
echo "archive-product.php";
?>
<div id="primary" class="content-area border-edge">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
			<h1 class="flex flex-center"> SHOP STUFF </h1>
				<?php 
				$args = array( 'hide_empty=0' ); 
		$terms = get_terms( 'product type', $args );

    foreach ( $terms as $term ) {
        $name = $term->name ;
        $term_list .= '<a href="' . esc_url( get_term_link( $term ) ) . '" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $name ) ) . '">' . $name . '</a>';
        
    }
echo '<div class="flex space-around flex-center">';
    echo $term_list; 
    echo '</div>'; ?>
			</header> <!-- .page-header -->
<hr></hr>
<div class="all-product flex wrap">
			<?php while ( have_posts() ) : the_post(); ?>

			<div class="flex product prod-border-white">
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

			<?php
			endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php 


get_footer(); 
?>