<?php
/*
Template Name: Grants Archive
*/
?>

    <?php get_header(); ?>
    <!-- home.php -->
    
    <!-- Get the Filter Navigation Box -->
    <? get_template_part('subnav2'); ?>
    
    <div class="container">     
        <div class="row">
            <div class="col-md-6"><h4 class="byline">ORGANIZATION NAME</h4></div><div class="col-md-2"><h4 class="byline">STATE</h4></div><div class="col-md-2"><h4 class="byline">AMOUNT REQUESTED</h4></div><div class="col-md-2"><h4 class="byline">HISTORICAL TOTAL</h4></div>
        </div>
        <hr>
            <!-- The Loop -->
            <?
            $grant = array(
                'post_type'      => 'grant',
                'posts_per_page' => '20',
                'orderby'        => 'date',
                'order'          => 'DESC',
            );
            $grants = get_posts( $grant );
            ?>
            
            <!-- Get Templates for Archive Posts -->
            <?
            foreach($grants as $post) :
            setup_postdata($post); 
            ?>
                <div class="row grant">
                    <!-- Use This Template for Each Post Displayed -->
                    <div class="col-md-6">
                        <h4 class=""><strong><a href="<? the_permalink(); ?>"><? the_title(); ?></a></strong></h4>
                    </div>
                    <div class="col-md-2">
                        <h4 class="byline"><? echo $state = the_field('state'); ?></h4>
                    </div>
                    <div class="col-md-2">                            
                     <h4 class="byline"><? echo $amount = get_field('amount') ?></h4>
                    </div>
                    <div class="col-md-2">
                        <h4 class="byline"><? echo $historical_total = get_field('historical_total') ?></h4>
                    </div>      
                </div>
            <?
            endforeach;
            ?> 
    </div>

    <?
    wp_reset_postdata();
    ?>

<?php get_footer(); ?>

