<?php
/*
 * Template Name: single
 * Description: A single template with bg image.
 */
get_header();
?>
<?php
 $state = get_field('state');
 $amount = get_field('amount');
 $historical_total = get_field('historical_total');
?>

<div class="container single">
	<div class="row">
			<!-- single-grant -->
		<h1 class="col-md-10 col-md-offset-1"><? the_title(); ?></h1>
		<div class="col-md-6 col-md-offset-3">
			<p><?php echo $state ?></p>
			<p><?php echo $amount ?></p>
			<p><?php echo $historical_total ?></p>
		</div>
		
	</div>

</div>


<?
    get_footer();
?>