<?php
/*
 * Template Name: single
 * Description: A single template with bg image.
 */
get_header();
?>

<div class="single">
	<div class="container-fluid">
		<style>.intro-header{display:none;}</style>
	    <script src="<? bloginfo('stylesheet_directory'); ?>/js/project-list.js"></script>
	    <!-- HEADER - SINGLE.PHP -->
	    <?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
	    <div class="col-md-12" style="<?php if ( has_post_thumbnail() ): ?>height:450px;background-size:cover;background-position:top;background-image:url('<? echo $large_image_url[0] ?>');<? else: ?>height:250px;background-position:center top;background-image:url('http://architects.agency/nordff/wp-content/themes/nordff-theme/img/Podcast.svg');<?php endif; ?>">
			<?php $audio_url = get_field('audio_file'); ?>
	         <h1 class="col-md-10 col-md-offset-1"><? the_title(); ?></h1>
	         <h4 class="col-md-4 col-md-offset-4 byline"><?php echo get_the_date(); ?></h4>
	         <ul class="thumb-cat"><? echo $terms; ?></ul>
	         <style>.podcast_player audio{visibility:visible !important;}</style>
	    </div>
	</div>
    <div class="container">
    	<div class="spacer" style="margin-top:50px;"></div>
			   	<?php get_sidebar();  ?>
	    <div class="col-md-6 article--body">
	            <?php the_content(); ?> 
	            <?php the_excerpt(); ?>
	    </div>
    </div>
</div>


<?
    get_footer();
?>