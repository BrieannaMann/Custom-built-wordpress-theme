
<?php if(is_tax()=="product type"){ ?> 
       <h1 class="page-title flex flex-center title-padding">
            <?php single_term_title(); ?>
        </h1> 
        <div class="padding-bottom-med flex flex-center secondary-font ">
           <p> <?php the_archive_description(); ?> </p>
        </div>
        <hr></hr>
        <div class="width-100 padding-bottom-xl flex wrap"> 

<?php } elseif(get_post_type()== "product")  { ?>

<h1 class="flex flex-center title-padding"> SHOP STUFF </h1>
        <?php 
        $args = array( 'hide_empty=0' ); 
    $terms = get_terms( 'product type', $args );

    foreach ( $terms as $term ) {
        $name = $term->name ;
        $term_list .= '<a class="padding-lg" href="' . esc_url( get_term_link( $term ) ) . '" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $name ) ) . '">' . $name . '</a>';
        
    } ?>
    <div class="flex flex-center padding-bottom-med">
    <?php echo $term_list;  ?>
    </div>
    <hr></hr>
         <?php echo '<div class="width-100 padding-bottom-xl flex wrap">'; ?>
    <?php } else{ ?>
        <div>
                <br>
                  <h1 class="flex-center flex section-title title-padding"> LATEST ADVENTURE</h1>
                    <hr></hr>
                </div>
                    <div class="flex wrap"> 
       <?php } ?>
