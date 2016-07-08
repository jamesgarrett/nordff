<div id="sticky-anchor"></div>

<aside class="project-list col-md-3" id="sticky">
    <h4>PROGRAM AREAS</h4>
    <li><a href="<?php get_stylesheet_directory_uri(); ?>/archive#subnav">ALL POSTS</a></li>
    <?$menu = array(
        "title_li"    => "",
        "link_before" => '<span class="featured-title">',
        "link_after"  => '</span>',
        "depth"       => '1',
        "exclude"     => '10',
    );?>
    <ul>
    <?php  wp_list_categories( $menu ); ?> 
    </ul>
    <span class="previous arrow"><?php next_post_link('%link', '&#8249; Newer'); ?></span>
    <span class="next arrow"><?php previous_post_link('%link', 'Older &#8250;'); ?></span>
</aside>