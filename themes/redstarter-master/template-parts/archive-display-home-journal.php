<div class="title-padding">
<h1 class="flex-center flex "> INHABITENT JOURNAL</h1>
    </div>
    <div class="width-100 flex ">
    <?php
        global $query_string;
               query_posts ('posts_per_page=3');
        while(have_posts()):the_post(); ?>
            <div class="grey-border width-33 wrap margin-10 flex vertical-direction"> 
            <?php the_post_thumbnail();?>
            <div class="grey-border-top flex flex-grow-1 vertical-direction space-between">
            <div class=" margin-10 flex vertical-direction flex-left ">
                <p class="margin-bottom-0 xsmall-font  secondary-font"><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></p>
                <h3 class="green-font margin-top-0"><?php echo get_the_title() ?> 
                </h3>
            </div> 
            <div class="margin-10 flex padding-sm">
            <?php echo '<a  class="flex-center " href="' . get_permalink() . '"><h6 class="grey-border readmore black-font button-padding ">READ ENTRY </h6></a>'; ?> </div>
            </div>
            </div>
            
        <?php endwhile; ?>
         </div>
       
