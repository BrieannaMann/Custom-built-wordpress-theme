<div class="title-padding">
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
                    <div class="margin-sm width-25 grey-border grey-border-top flex wrap flex-center">
                    <img class="shop-stuff-icon padding-top-med" src="http://localhost:8888/wordpress/wp-content/themes/redstarter-master/assets/images/product-type-icons/'.$name.'.svg">  
                    <div>
                    <p class="padding-med center-text small-font secondary-font">'.$description.'</p> 
                    </div>
                    <div class="padding-bottom-med">
                    <a href="' . esc_url( get_term_link( $term ) ) .'"alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $name ) ) . '"><p class="button-padding white-font green-bkg small-font">' . $name . ' STUFF </p></a>
                    </div>
                    </div>';
            }
            echo $term_list;
        ?>
         <?php } ?>
</div>