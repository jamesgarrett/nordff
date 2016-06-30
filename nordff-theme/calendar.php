<?php
/*
Template Name: Calendar Page
*/
get_header();
?>

<style>

</style>

    <div class="container calendar">   
	    <div class="row">
	        <div class="featured-title col-md-5">
	            <h2>CALENDAR</h2>
	        </div>        
	    </div>  
        <div class="row">
			<div class="col-md-12">
				<?php echo do_shortcode('[sc_events_calendar]'); ?>
			</div>
		</div>
	</div>

<?
    get_footer();
?>