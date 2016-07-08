<?php 
function is_tree($pid) {      // $pid = The ID of the page we're looking for pages underneath
	global $post;         // load details about this page
	if(is_page()&&($post->post_parent==$pid||is_page($pid))) 
               return true;   // we're at the page or at a sub page
	else 
               return false;  // we're elsewhere
};
?>

<?php 
function wpb_mce_buttons_2($buttons) {
    array_unshift($buttons, 'styleselect');
    return $buttons;
}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');
?>

<?php 
function featuredtoRSS($content) {
global $post;
if ( has_post_thumbnail( $post->ID ) ){
$content = '<div>' . get_the_post_thumbnail( $post->ID, 'medium', array( 'style' => 'margin-bottom: 15px;' ) ) . '</div>' . $content;
}
return $content;
}
 
add_filter('the_excerpt_rss', 'featuredtoRSS');
add_filter('the_content_feed', 'featuredtoRSS');

?>

<?php 
/*
* Callback function to filter the MCE settings
*/
 
function my_mce_before_init_insert_formats( $init_array ) { 
 
// Define the style_formats array
 
    $style_formats = array( 
        // Each array child is a format with it's own settings
        array( 
            'title' => 'Read More Button', 
            'block' => 'div', 
            'classes' => 'read-more--button',
            'wrapper' => true,
        ),
        array( 
            'title' => 'Read More Content', 
            'block' => 'div', 
            'classes' => 'read-more--content',
            'wrapper' => true,
        ),
        array( 
            'title' => 'One Column', 
            'block' => 'div', 
            'classes' => 'col-md-6 col-md-offset-3',
            'wrapper' => true,
        ), 

        array( 
            'title' => 'Left Column', 
            'block' => 'div', 
            'classes' => 'col-md-5 col-md-offset-1',
            'wrapper' => true,
        ),

        array( 
            'title' => 'Right Column', 
            'block' => 'div', 
            'classes' => 'col-md-5 right-column',
            'wrapper' => true,
        ),
    ); 

    // Insert the array, JSON ENCODED, into 'style_formats'

    $init_array['style_formats'] = json_encode( $style_formats ); 
    return $init_array; 

}

// Attach callback to 'tiny_mce_before_init'

add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

?>

<?php 
add_action('init', 'init_remove_support',100);
function init_remove_support(){
    $post_type = 'podcast';
    remove_post_type_support( $post_type, 'editor');
}
?>