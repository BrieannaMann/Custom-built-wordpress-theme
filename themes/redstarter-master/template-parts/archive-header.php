<?php echo"archive-header"; ?>
<?php if(is_tax()=="product type"){ ?> 
       <?php
                    echo '<h1 class="page-title flex flex-center">';
                    single_term_title();
                    echo '</h1> <div class="taxonomy-description flex flex-center">';
                    the_archive_description();
                    echo '</div>';
          echo '<div class="all-product flex wrap">'; ?>

<?php } elseif(get_post_type()== "product")  { ?>

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
    <hr></hr>
         <?php echo '<div class="all-product flex wrap">'; ?>
    <?php } else{ ?>
        <div>
                <br>
                  <h1 class="flex-center flex section-title"> LATEST ADVENTURE</h1>
                    <hr></hr>
                </div>
                    <div class="flex wrap"> 
       <?php } ?>
