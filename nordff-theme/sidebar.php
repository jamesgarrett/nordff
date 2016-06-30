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