<div class="title-padding">
  <h1 class="flex-center flex"> LATEST ADVENTURE</h1>
</div>
<div class="flex adventure-imgs">
    <?php $args = array( 'post_type' => 'adventure', 'posts_per_page' => 4 );
      $loop = new WP_Query( $args );
      $i=0;
      while ( $loop->have_posts() ) : $loop->the_post();
        $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full' ); 
        if( $i === 0){
          $i +=1;?>  
            <div class="width-50  " style="background:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?php echo $backgroundImg[0]; ?>') ;background-size: cover;">
        <?php }elseif($i === 1){
          $i +=1;?>
            <div class="flex wrap width-50">
            <div class="width-100 white-border-bottom white-border-left" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?php echo $backgroundImg[0]; ?>') ;background-size: cover;">
        <?php }else{?>
          <div class="width-50  white-border-left" style="background:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?php echo $backgroundImg[0]; ?>') ;background-size: cover;">
                  <?php } ?>
              <h3 class="white-font secondary-font padding-med">
                <?php the_title(); ?>
              </h3>
            <div class="margin-10 flex padding-med">
              <?php echo '<a href="' . get_permalink() . '"> <h6 class="small-white-border readmore white-font button-padding"> READ MORE </h6> </a>'; ?>
            </div>
          </div>
        <?php endwhile;?>
        </div>
        </div>
      <div class="more-adv-padding">
        <?php $page = get_page_by_title("adventure");?>
          <a class="green-bkg white-font padding-sm" href="<?php echo get_post_type_archive_link( 'adventure' ); ?>">MORE ADVENTURES</a>
      </div>
      </div>
</div>