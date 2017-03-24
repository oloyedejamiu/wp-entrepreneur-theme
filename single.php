<?php get_header(); ?>


 <?php

 if ( have_posts() ) { 
 while ( have_posts() ) : the_post();
 ?>
<div class="row">
<div class="container-fluid">
 <?php
 if ( has_post_thumbnail() ) {
	//the_post_thumbnail('large','style=max-width:100%;height:auto;');
	the_post_thumbnail();
}?>
		<span class="move-meta-title">
        <h1 class ="bolded-font"><?php the_title(); ?></h1>
        <p class="white-color"><?php echo get_the_date(); ?> by <?php the_author(); ?></p>

        </span>
        
<div class="container ">
<div class="single-content-section">

        <?php the_content(); ?>
   
 
        <?php edit_post_link('Edit', '<span class="comment-count">  ' , '</span>'); ?><span class="comment-count"><?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?></span>
      

 
 <?php
 global $withcomments;
//$withcomments = 1;
comments_template( 'comments.php', true );


 endwhile;
}

 ?>
 </div>

</div>



<div class="container-fluid ">
<div class="before-footer-area">
 	<hr class="hidden-xs hidden-sm">
 	<div class="col-md-4 hidden-xs hidden-sm">
 	 <?php if (is_active_sidebar('footer-1')) { dynamic_sidebar('footer-1'); } ?>
        
 	</div>
 	<div class="col-md-4 hidden-xs hidden-sm">
 	 <?php if (is_active_sidebar('footer-2')) { dynamic_sidebar('footer-2'); } ?>
 	
 	</div>
 	<div class="col-md-4 hidden-xs hidden-sm">
 	<?php if (is_active_sidebar('footer-3')) { dynamic_sidebar('footer-3'); } ?>
 	
 	</div>
 </div>
 </div>


<?php get_footer(); ?>

