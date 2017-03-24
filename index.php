	<?php get_header(); ?>
	<div class="row">
	<?php
	if (!have_posts() ) : ?>
		<div class="posts-not-found">
	        <h1>Nothing Found</h1>
	            <p>It seems we can’t find what you’re looking for. Perhaps searching can help.</p>
	    </div>
	<?php endif; ?>

	<?php
	if ( have_posts() ) { 
	while ( have_posts() ) : the_post();
	 ?>
	<div class="col-md-4 col-sm-6 col-xs-12 no-margin">
	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
	 	<div class="layerit" style="background-image: url('<?php echo $thumb['0'];?>')">
	 	
	 		<h1 id="title-text" ><a title ="<?php echo the_title(); ?>" class="home-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	 			<p class="home-author">by <?php the_author(); ?> on <?php echo get_the_date(); ?> </p>

	 	
	 	</div>
	</div><!-- /.blog-post -->

	 <?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
	            <?php the_title(); ?>
	    
	    <?php endif; ?>

	 <?php
	 endwhile;
	}

	 ?>
	</div>
	 <nav>
	 <ul class="pager">
	 <?php if ($wp_query->max_num_pages > 1 ) : ?>
	 <li><?php next_posts_link('Older Posts'); ?></li>
	 <li><?php previous_posts_link('Newer Posts'); ?></li>
	 
	 <?php else: ?>
	        <li>No Newer/Older posts</li>
	<?php endif; ?>
	</ul>
	 </nav>

	 <div class="row before-footer-area">
	 	<hr class="hidden-xs hidden-sm">
	 	<div class="col-md-4 hidden-xs hidden-sm">
	 	 <?php if ( is_active_sidebar( 'footer-1' ) ) { dynamic_sidebar( 'footer-1' ); } ?>
	        
	 	</div>
	 	<div class="col-md-4 hidden-xs hidden-sm">
	 	 <?php if ( is_active_sidebar( 'footer-2' ) ) { dynamic_sidebar( 'footer-2' ); } ?>
	 	
	 	</div>
	 	<div class="col-md-4 hidden-xs hidden-sm">
	 	<?php if ( is_active_sidebar( 'footer-3' ) ) { dynamic_sidebar( 'footer-3' ); } ?>
	 	
	 	</div>
	 </div>


	<div class="row">
	<div class="col-md-12">
	<?php get_footer(); ?>
	</div>
	</div>
