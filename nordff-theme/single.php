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
        <div class="col-md-12" style="background-size:cover;background-position:top center;<?php if ( has_post_thumbnail() ): ?>height:450px;background-image:url('<? echo $large_image_url[0] ?>');<? else: ?>height:250px;background:url('http://www.nordff.architects.agency/wp-content/themes/nordff-theme/img/Article.svg');<?php endif; ?>">
             <h1 class="col-md-10 col-md-offset-1"><? the_title(); ?></h1>
             <h4 class="col-md-4 col-md-offset-4 byline"><?php echo get_field('author'); ?> - <?php echo get_the_date(); ?></h4>
             <ul class="thumb-cat"><? echo $terms; ?></ul>
        </div>
    </div>
    <div class="container">
        <div class="spacer" style="margin-top:50px;"></div>
        <?php get_sidebar();  ?>
        <div class="col-md-6 article--body">
            <?php echo wpautop($post->post_content); ?>
        </div>
    </div>
</div>


<?
    get_footer();
?>