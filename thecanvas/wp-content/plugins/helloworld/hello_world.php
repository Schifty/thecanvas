<?php
/**
* Plugin Name: helloworld
* Plugin URI:http://www.aswebdeveloper.com/
* Description:  this is  a function to echo hello world
* Version: 1.0
* Author:Anthony Schifferns
* Author URI: http://www.aswebdeveloper.com/
**/





//// this is the main function
function hello_world(){

	
//recall the cpt for feed
	$args = array( 'post_type' => 'portfolio', 'posts_per_page' => 10);
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	  the_title();
	  echo '<div class="entry-content">';
	  the_content();
	  echo '</div>';
	endwhile;
	
}
// regster a new shortcode: [helloworld]
// first parameter is the shorcode tag you pput in your post
// seconf parameter is function to execute with shortcode
add_shortcode('helloworld', 'hello_world_shortcode');

//
function hello_world_shortcode(){
	
	// prevents ascending of any data through the page until fucntion below has executed
	ob_start();
	// name of our main plugin function
	hello_world();
	return ob_get_clean();
}






?>