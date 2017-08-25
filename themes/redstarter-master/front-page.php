<?php
echo'front-page.php'; ?>
<?php 
get_header(); 
get_banner(); ?>  



<!-- START OF PRODUCTS SECTION  -->
<div class="border-edge">
<div>
    <h1 class="flex-center flex"> SHOP STUFF </h1>
</div>

<div class="shopstuff flex">
<?php
$args = array( 'hide_empty=0' ); 
$terms = get_terms( 'product type', $args );
if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
    $count = count( $terms );
    $i = 0;
    $term_list = '<p class="my_term-archive">';
    foreach ( $terms as $term ) {
        $name = $term->name ;
        $description = $term->description;
        $term_list .= '
            <div class="shop grey-border grey-border-top flex wrap flex-center">
            <img class="shop-stuff-img " src="http://localhost:8888/wordpress/wp-content/themes/redstarter-master/assets/images/product-type-icons/'.$name.'.svg">  
            <br> 
            <p class="shop-description ">'.$description.'</p> 
            <div class="pad-btm-1">
            <a class="white-font green-background small-font" href="' . esc_url( get_term_link( $term ) ) .'"alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $name ) ) . '">' . $name . ' STUFF </a>
            </div>
            </div>';
    }
    echo $term_list;
?>
</div>

    
<!-- START OF JOURNAL SECTION -->
<h1 class="flex-center flex "> INHABITENT JOURNAL</h1>

    <div class="journal flex ">
    <?php
        global $query_string;
               query_posts ('posts_per_page=3');
        while(have_posts()):the_post(); ?>
            <div class="grey-border journal-post wrap journal-margin-10"> 
            <?php the_post_thumbnail();?>
            <div class="grey-border-top">
            <div class=" journal-margin-10 flex vertical-direction flex-left ">
            <p class="journal-p date "><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></p>
            <h3 class="green-font journal-title"><?php echo get_the_title() ?> 
            </h3> 

            <br>
            <div class="read-entry  flex flex-bottom">
            <?php echo '<a  class="flex-center " href="' . get_permalink() . '"><h6 class="grey-border readmore "> READ ENTRY </h6></a>'; ?> </div>
            </div>
            </div>
            </div>
        <?php endwhile; ?>
         </div>
        <?php }

//START OF ADVENTURE SECTION ?>
<?php get_template_part("template-parts/archive-display-home","adventure"); ?>

</div>
	<?php 
//FOOTER
get_footer(); 
?>
