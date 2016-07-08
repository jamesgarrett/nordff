<?php
/*
 * Template Name: Page
 * Description: A Blog Template with a darker design.
 */
get_header();
?>
<!-- Header - PAGE.PHP -->

<!-- The Loop -->
<?php while (have_posts()) : the_post(); ?>
		<?php $pid = get_the_id(); ?>
		
  <!-- +++++ Welcome Section +++++ -->
  <div class="container">

      <div class="row">
         <?php $children = get_pages('child_of='.$post->ID);?>
         <?php $ancestors = get_pages( 'ancestor_of='.$post->ID); ?> 

    		 <?php if( count( $children ) !== 0 OR  count( $ancestors ) !== 0) : ?>
          		<div class="col-md-12 col-lg-10 col-lg-offset-1">
                <div class="subnav">
                  <div class="col-lg-4 col-md-4 featured-title">
                    <h2><?php the_title(); ?></h2>
                  </div>
                  <ul class="col-lg-6 col-md-6">
                          <?php
                          global $id;
                          wp_list_pages( array(
                              'title_li'    => '',
                              'child_of'    => $id,
                              'show_date'   => 'modified',
                              'date_format' => $date_format
                          ) );
                          ?>
                  </ul>
                </div>
              </div><!-- /col-lg-8 --> 
      	 <?php endif; ?>
          </div><!-- /row -->
          <div class="row">
    	      <?php the_content(); ?>      		
          </div><!-- /row -->
      </div> <!-- /container -->


	<?php wp_reset_postdata(); ?>

<?php endwhile; ?>  

<?
get_footer();
?>