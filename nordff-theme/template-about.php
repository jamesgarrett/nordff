<?php
/*
 * Template Name: About
 * Description: A template for an About Page
 */
get_header();
?>
<!-- Header - PAGE.PHP -->

<!-- The Loop -->
<?php while (have_posts()) : the_post(); ?>
		<?php $pid = get_the_id(); ?>
		<?php if($post->post_content=="") : ?>

		<?php else : ?>
		
  <!-- +++++ Welcome Section +++++ -->
  <div class="container">

      <div class="row">
         <div class="col-md-12 col-lg-10 col-lg-offset-1">
			<div class="subnav">
				<div class="col-lg-4 col-md-4 featured-title">
					<h2><?php the_title(); ?></h2>
				</div>
				<ul class="col-lg-6 col-md-6">
		            <li><a href="#mission">Mission Statement</a></li></br>
		            <li><a href="#grants">Grant Process</a></li></br>
		            <li><a href="#staff">Staff</a></li></br>
		            <li><a href="#trustees">Trustees</a></li></br>
				</ul>
			</div>
		</div><!-- /col-lg-8 -->
      </div><!-- /row -->
      <div class="row">
	      <?php the_content(); ?>      		
      </div><!-- /row -->
  </div> <!-- /container -->

		<?php endif; ?>

	<?php wp_reset_postdata(); ?>

<?php endwhile; ?>  

<?
get_footer();
?>