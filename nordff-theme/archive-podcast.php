<?php
/*
 * Template Name: Archive
 * Description: Basic Archive template
 */
get_header();
?>

    
<!-- Get the Filter Navigation Box -->
<? get_template_part('subnav'); ?>

<!-- Header - Archive.PHP -->
<div class="container">
	<div class="col-md-12">
		<div class="row">

		 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		 <?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>

		 	<div class="col-md-6">
		        <?php if (has_post_thumbnail( $post->ID ) ): ?>
		        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		        <div class="panel-upper"  <?php if ( has_post_thumbnail() ): ?>style="height:350px;background-size:cover;background-position:center;background-image:url('<? echo $large_image_url[0] ?>');"<?php endif; ?>>
		        </div>
		        <?php endif; ?>
		        <div class="panel-lower">
		            <h2><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h2>
		            <p><?php the_excerpt(); ?></p>
		        </div>
		    </div>
		    
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
		
	</div>
</div>

<?
    get_footer();
?>