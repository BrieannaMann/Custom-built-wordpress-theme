<?php
//HEADER 
get_header(); 
echo "home.php"; ?>
<div class="flex">
    <div class="journal-page border-edge">
    <?php
    while(have_posts()):the_post(); ?>
    	<div class="single-journal ">
        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
   
        <div class="journal-img flex vertical-direction space-between" style="background: url('<?php echo $backgroundImg[0]; ?>'); background-size:cover;">

        <div class="journal-name white-font green-bkg flex flex-left journal-name-padding">
            <h2> <?php the_title() ?> </h2> 
        </div>
    <div class="journal-date white-font green-bkg flex flex-right flex-align-right">
        <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / BY <?php the_author(); ?>
    </div>
    </div>


    <div class="journal-exerpt secondary-font padding-top-1">
        <?php the_excerpt(); ?>
    </div>
    <div class="read-entry flex">
<?php
    echo '<a class="flex-center" href="' . get_permalink() . '"> '?> 
    <h6 class="black-border black-font button-padding">READ MORE -> </h6> 
    <?php 
    echo '</a>'; ?>

    </div>
    </div>
    <?php endwhile; ?>
<div class="page-end-padding">
</div>
</div>


<div class="side-bar  grey-border-left">
    <?php get_sidebar(); ?>
</div>
</div>
<?php
get_footer(); 
?>
