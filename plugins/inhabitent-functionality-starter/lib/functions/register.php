<?php 
function register(){
		$posttype = array (
			"adventure" => "adventure type",
			 "product" => "product type");
		//add if statment in foreach for if null.	
  		foreach($posttype as $key => $value) {
			$args = get_post_args($key);
			$taxarg= my_taxonomies_product($value);
			register_post_type($key, $args, 0);
			register_taxonomy( $value, $key, $taxarg);
		}

	}

add_action( 'init', 'register', 0 );
?>