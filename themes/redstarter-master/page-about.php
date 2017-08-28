<?php
get_header();

get_banner();
?>
<div class="flex vertical-direction padding-bottom-lg ">
<?php $title1= get_post_custom_values('title_1'); 
foreach ( $title1 as $key => $titleone ) { ?>
<div class="flex title-padding width-75 flex-center flex-self-center"><h2>
    <?php echo "$titleone";  ?>
    </h2>
    </div>
 <?php }
?> 
<?php $content1= get_post_custom_values('content_1'); 
foreach ( $content1 as $key => $contentone ) { ?>
<div class="flex width-75 flex-center flex-self-center secondary-font small-font padding-top-med">
    <?php echo "$contentone";  ?>
    </div>
<?php  }
?> 
<?php $title2= get_post_custom_values('title_2'); 
foreach ( $title2 as $key => $titletwo ) { ?>
<div class="flex title-padding width-75 flex-center flex-self-center"><h2>
   <?php echo "$titletwo"; ?>
   </h2>
   </div>
 <?php }
?> 
<?php $content2= get_post_custom_values('content_2'); 
foreach ( $content2 as $key => $contenttwo) { ?>
<div class="flex width-75 flex-center flex-self-center secondary-font small-font padding-top-med">
   <?php echo "$contenttwo"; ?>
   </div>
<?php  }
?> 
</div>

<?php
get_footer(); 
?>