<?php
/*
Template Name: frontpage
*/
?>

<?php get_header(); ?>

<div class="container">
    <!-- FEATURES -->
    <?
    $featured = array(
        'post_type'      => 'post',
        'posts_per_page' => '1',
        'orderby'        => 'date',
        'order'          => 'DESC',
        'meta_key'       => 'featured',
        'meta_value'     => '1',
    );
    $features = get_posts( $featured );
    ?>
    
    <?
    foreach($features as $post) :
    setup_postdata($post); 
    ?>
    <?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
        <div class="row">
            <div class="featured-title col-md-5">
                <h2>FEATURED ARTICLE</h2>
            </div>        
        </div>
        <div class="spacer" style="margin-top:50px;"></div>
        <div class="row">
            <div class="col-md-4">
                <h2 class="article-head"><?php echo get_field('headline') ?></h2>
                <h2 class="article-head"><small><?php echo get_field('subheadline') ?></small></h2>
                <p><?php the_excerpt(); ?></p>
            </div>
            <div class="col-md-8" style="height:450px;background-position:center;background-size:cover;background-image:url('<? echo $large_image_url[0] ?>');">
            </div>
        </div>
    <?php endforeach; ?>


    <div class="spacer" style="margin-top:50px;"></div>

    <!-- ARCHIVE -->
    <div class="row">
        <div class="featured-title col-md-5">
            <h2><a href="/archive">FROM THE ARCHIVE</a></h2>
        </div>        
    </div>
    <div class="spacer" style="margin-top:50px;"></div>
    <div class="row portfolio">
            <?
            $article = array(
                'post_type'      => 'post',
                'posts_per_page' => '6',
                'orderby'        => 'date',
                'order'          => 'DESC',
            );
            $articles = get_posts( $article );
            ?>
            
            <!-- Get Templates for Archive Posts -->
            <?
            foreach($articles as $post) :
            setup_postdata($post); 
            ?>
            <?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>


            <div class="col-md-4">
                <?php if (has_post_thumbnail( $post->ID ) ): ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <div class="panel-upper" <?php if ( has_post_thumbnail() ): ?>style="height:200px;background-size:cover;background-position:center;background-image:url('<? echo $large_image_url[0] ?>');"<?php endif; ?>></div>
                <?php endif; ?>
                <div class="panel-lower">
                    <h4><strong><a href="<? the_permalink(); ?>"> <? the_title(); ?></a></strong></h4>
                    <h4><? the_field('author'); ?></h4>
                </div>
            </div>     

            <?
            endforeach;
            ?> 

            <?
            wp_reset_postdata();
            ?>

    </div>

    <div class="spacer" style="margin-top:50px;"></div>

    <!-- EXPLORE -->
    <div class="row">
        <div class="featured-title col-md-5">
            <h2>EXPLORE</h2>
        </div>
        <div class="col-md-8">            
            <p>Keep up to date with the past, present, and future endeavors of the Nord Family Foundation</p>
        </div>        
    </div>
</div>
<div class="container-fluid">
    <div class="spacer" style="margin-top:50px;"></div>
    <div class="row">
        <div class="col-md-4 explore" style="padding-left:0px;padding-right:0px;">
            <div class="panel-upper " style="height:300px;background-position:center;background-size:cover;background-image:url('<? bloginfo('stylesheet_directory'); ?>/img/hp-7.png');"><h4><a href="#">Articles</a></h4></div>
        </div>
        <div class="col-md-4 explore" style="padding-left:0px;padding-right:0px;">
            <div class="panel-upper" style="height:300px;background-position:center;background-size:cover;background-image:url('<? bloginfo('stylesheet_directory'); ?>/img/hp-8.png');"><h4><a href="#">Videos</a></h4></div>
        </div>
        <div class="col-md-4 explore" style="padding-left:0px;padding-right:0px;">
            <div class="panel-upper" style="height:300px;background-position:center;background-size:cover;background-image:url('<? bloginfo('stylesheet_directory'); ?>/img/hp-9.png');"><h4><a href="#">Podcasts</a></h4></div>
        </div>
    </div>
</div> <!-- /CONTAINER-FLUID -->

<div class="spacer" style="margin-top:50px;"></div>

<!--  MAILING LIST -->
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1 class="article-head">FOLLOW US ON RSS</h1>
            <p class="ta-c">Get updates about the ongoing efforts of the Nord Family Foundation efforts to build community, empower individuals, and inspire a brighter tomorrow.</p>
        </div>        
    </div>
</div><!-- /CONTAINER -->

<!--  FOOTER -->
<?
    get_footer();
?>

