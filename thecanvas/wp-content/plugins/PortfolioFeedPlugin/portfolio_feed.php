<?php
/**
* Plugin Name: Custom Portfolio Feed
* Plugin URI:https://github.com/Schifty
* Description:  this is  a function to display a custom portfolio feed
* Version: 1.0
* Author:Anthony Schifferns
* Author URI: http://www.aswebdeveloper.com/
**/




/*****************************************                           NEEDED FUNCTIONS                   *****************************************************************************/


function demowp_load_css(){
	wp_enqueue_style( 'hoverstyle', plugins_url( '/css/feedStyle.css', __FILE__ ) );

		
		//check to see the option and value already exist
		$existing=get_option("numberOfPosts");
		
		
	//if the framework is bootstrap load the bootstrap css
	if($existing==1){//function to load the custom stylesheet which is differnet  from style.css
	wp_enqueue_style( '2-post-layout', plugins_url('/css/2layoutslide.css',__FILE__));
	}
		
	//if the framework is bootstrap load the bootstrap css
	if($existing==2){//function to load the custom stylesheet which is differnet  from style.css
	wp_enqueue_style( '2-post-layout', plugins_url('/css/2layoutflip.css',__FILE__));
	}	
		
		
	//if the framework is html5 load the html5 css
	else if($existing==3){//function to load the custom stylesheet which is differnet  from style.css
	wp_enqueue_style( '4-post-layout', plugins_url('/css/4layoutslide.css',__FILE__));
	}
	
	
	//if the framework is html5 load the html5 css
	else if($existing==4){//function to load the custom stylesheet which is differnet  from style.css
	wp_enqueue_style( '4-post-layout', plugins_url('/css/4layoutflip.css',__FILE__));
	}
	
	//Plugin css
	//wp_enqueue_style( 'hoverstyle', plugins_url() . '/PortfolioFeedPlugin/css/feedStyle.css', array(), '1.0.0', true );

    

	
}
add_action('wp_enqueue_scripts','demowp_load_css');









//////////////////////////////////////add admin settings  for our plugin//////////////////////////////////////////////////////

require_once(dirname(__file__) . "/admin/admin_options.php");





////////////////////////////////////////////////// layouts for this plugin//////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////get 2 post per row slide title layout
function show_2layout_slide(){
	//recall the cpt for feed is is the all galleries page
	if(is_page( 'all-galleries' )){
	$args = array( 'post_type' => 'portfolio',  'posts_per_page' => 14 );
	$loop = new WP_Query( $args );
	
	while ( $loop->have_posts() ) : $loop->the_post();
	  ?><a href="<?php echo get_the_permalink(); ?>"><div class="holder smooth"><?php
	  $attr = array('class' => 'testimg');
      the_post_thumbnail( 'full', $attr );
      echo  '<div class="go-left">';
            the_title();

	  echo '</div></div></a>';

	endwhile;
	}
	//recall the cpt for feed for gallery 1 page
	else if(is_page( 'gallery-1' )){
	$args = array( 'post_type' => 'portfolio', 'cat' => 7,  'posts_per_page' => 14 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	  ?><a href="<?php echo get_the_permalink(); ?>"><div class="holder smooth"><?php
	  $attr = array('class' => 'testimg');
      the_post_thumbnail( 'full', $attr );
      echo  '<div class="go-left">';
            the_title();

	  echo '</div></div></a>';

	endwhile;
	}
	//recall the cpt for feed gallery 2 page
	else if(is_page( 'gallery-2' )){
	$args = array( 'post_type' => 'portfolio', 'cat' => 8,  'posts_per_page' => 14 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	  ?><a href="<?php echo get_the_permalink(); ?>"><div class="holder smooth"><?php
	  $attr = array('class' => 'testimg');
      the_post_thumbnail( 'full', $attr );
      echo  '<div class="go-left">';
            the_title();

	  echo '</div></div></a>';

	endwhile;
	}
	//recall the cpt for feed for gallery 3 page
	else if(is_page( 'gallery-3' )){
	$args = array( 'post_type' => 'portfolio', 'cat' => 9,  'posts_per_page' => 14 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	?><a href="<?php echo get_the_permalink(); ?>"><div class="holder smooth"><?php
	  $attr = array('class' => 'testimg');
      the_post_thumbnail( 'full', $attr );
      echo  '<div class="go-left">';
            the_title();

	  echo '</div></div></a>';

	endwhile;
	}
	
	
}

/////////////////////////////////////////////////////get 2 post per row fip title and excert layout
function show_2layout_flip(){
		//recall the cpt for feed for all galleries page
	if(is_page( 'all-galleries' )){
	$args = array( 'post_type' => 'portfolio', 'posts_per_page' => 14 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	
	echo'
	<div class="col-md-6"><div class="newhover">';
	the_post_thumbnail( 'singlepost-thumb' );
	echo '
	<div class="effect"><h1>';
	 the_title();
	echo '</h1><p>';
	the_excerpt();
	
	echo '</p>
	<br />
	<a class="box1" href="'; 
	the_permalink(); 
	echo '">Read More.</a>
	</div></div>
	</div>';
	endwhile;
	}
	//recall the cpt for feed for gallery 1 page
	else if(is_page( 'gallery-1' )){
	$args = array( 'post_type' => 'portfolio', 'cat' => 7, 'posts_per_page' => 14 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	
	echo'
	<div class="col-md-6"><div class="newhover">';
	the_post_thumbnail( 'singlepost-thumb' );
	echo '
	<div class="effect"><h1>';
	 the_title();
	echo '</h1><p>';
	the_excerpt();
	
	echo '</p>
	<br />
	<a class="box1" href="'; 
	the_permalink(); 
	echo '">Read More.</a>
	</div></div>
	</div>';
	endwhile;
	}
	//recall the cpt for feed for gallery 2 page
	else if(is_page( 'gallery-2' )){
	$args = array( 'post_type' => 'portfolio', 'cat' => 8, 'posts_per_page' => 14 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	
	echo'
	<div class="col-md-6"><div class="newhover">';
	the_post_thumbnail( 'singlepost-thumb' );
	echo '
	<div class="effect"><h1>';
	 the_title();
	echo '</h1><p>';
	the_excerpt();
	
	echo '</p>
	<br />
	<a class="box1" href="'; 
	the_permalink(); 
	echo '">Read More.</a>
	</div></div>
	</div>';
	endwhile;
	}
	//recall the cpt for feed for gallery 3 page
	else if(is_page( 'gallery-3' )){
	$args = array( 'post_type' => 'portfolio', 'cat' => 9, 'posts_per_page' => 14 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	
	echo'
	<div class="col-md-6"><div class="newhover">';
	the_post_thumbnail( 'singlepost-thumb' );
	echo '
	<div class="effect"><h1>';
	 the_title();
	echo '</h1><p>';
	the_excerpt();
	
	echo '</p>
	<br />
	<a class="box1" href="'; 
	the_permalink(); 
	echo '">Read More.</a>
	</div></div>
	</div>';
	endwhile;
	}
}

///////////////////////////////////////////////////////////////////get 4 post per row slide title layout
function show_4layout_slide(){
	//recall the cpt for feed for all galleries page
	if(is_page( 'all-galleries' )){
	$args = array( 'post_type' => 'portfolio', 'posts_per_page' => 14 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();

	  echo '<div class="holder smooth">';
	  $attr = array('class' => 'testimg');
      the_post_thumbnail( 'thumbnail', $attr );
      echo  '<div class="go-left">';
            the_title();

	  echo '</div></div>';
	endwhile;
	}//recall the cpt for feed for gallery 1 page
	else if(is_page( 'gallery-1' )){
	$args = array( 'post_type' => 'portfolio', 'cat' => 7, 'posts_per_page' => 14 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();

	  echo '<div class="holder smooth">';
	  $attr = array('class' => 'testimg');
      the_post_thumbnail( 'thumbnail', $attr );
      echo  '<div class="go-left">';
            the_title();

	  echo '</div></div>';
	endwhile;
	}//recall the cpt for feed for gallery 2 page
	else if(is_page( 'gallery-2' )){
	$args = array( 'post_type' => 'portfolio', 'cat' => 8, 'posts_per_page' => 14 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();

	  echo '<div class="holder smooth">';
	  $attr = array('class' => 'testimg');
      the_post_thumbnail( 'thumbnail', $attr );
      echo  '<div class="go-left">';
            the_title();

	  echo '</div></div>';
	endwhile;
	}//recall the cpt for feed for gallery 3 page
	else if(is_page( 'gallery-3' )){
	$args = array( 'post_type' => 'portfolio', 'cat' => 9, 'posts_per_page' => 14 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();

	  echo '<div class="holder smooth">';
	  $attr = array('class' => 'testimg');
      the_post_thumbnail( 'thumbnail', $attr );
      echo  '<div class="go-left">';
            the_title();

	  echo '</div></div>';
	endwhile;
	}
}

//////////////////////////////////////////////////////////////////////get 4 post per row flip layout
function show_4layout_flip(){
	//recall the cpt for feed for all galleries page
	if(is_page( 'all-galleries' )){
	$args = array( 'post_type' => 'portfolio', 'posts_per_page' => 14 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	
	echo'
	<div class="col-md-3"><div class="newhover">';
	the_post_thumbnail( 'thumbnail' );
	echo '
	<div class="effect"><h4 style="font-size: 17px;">';
	the_title();
	echo '</h4><a class="box1" href="'; 
	the_permalink(); 
	echo '">More...</a>
	</div></div>
	</div>';
	endwhile;
	}
	//recall the cpt for feed for gallery 1 page
	if(is_page( 'gallery-1' )){
	$args = array( 'post_type' => 'portfolio', 'cat' => 7, 'posts_per_page' => 14 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	
	echo'
	<div class="col-md-3"><div class="newhover">';
	the_post_thumbnail( 'thumbnail' );
	echo '
	<div class="effect"><h4 style="font-size: 17px;">';
	the_title();
	echo '</h4><a class="box1" href="'; 
	the_permalink(); 
	echo '">More...</a>
	</div></div>
	</div>';
	endwhile;
	}
	//recall the cpt for feed for gallery 2 page
	if(is_page( 'gallery-2' )){
	$args = array( 'post_type' => 'portfolio', 'cat' => 8, 'posts_per_page' => 14 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	
	echo'
	<div class="col-md-3"><div class="newhover">';
	the_post_thumbnail( 'thumbnail' );
	echo '
	<div class="effect"><h4 style="font-size: 17px;">';
	the_title();
	echo '</h4><a class="box1" href="'; 
	the_permalink(); 
	echo '">More...</a>
	</div></div>
	</div>';
	endwhile;
	}//recall the cpt for feed for gallery 3 page
	if(is_page( 'gallery-3' )){
	$args = array( 'post_type' => 'portfolio', 'cat' => 9, 'posts_per_page' => 14 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	
	echo'
	<div class="col-md-3"><div class="newhover">';
	the_post_thumbnail( 'thumbnail' );
	echo '
	<div class="effect"><h4 style="font-size: 17px;">';
	the_title();
	echo '</h4><a class="box1" href="'; 
	the_permalink(); 
	echo '">More...</a>
	</div></div>
	</div>';
	endwhile;
	}
}
	

//////////////////////////////////////////////////////////// this is the main function/////////////////////////////////////////////////////////////////////////////
function custom_portfolio_feed(){
	
	//check to see the option and value already exist
		$existing=get_option("numberOfPosts");
		
		//echo $existing; exit;
	//check to see if the option exists if not then insert
			if(empty($existing)){
				show_2layout_slide();
				}//ends if empty
				else if($existing==1){
					show_2layout_slide();
				}//ends 1layout
				else if($existing==2){
					show_2layout_flip();
				}//ends else html5
				else if($existing==3){
					show_4layout_slide();
				}//ends else bootstraap
				else if($existing==4){
					show_4layout_flip();
				}//ends else foundation
	


}	
// regster a new shortcode: [custom_portfolio_feed]
function custom_portfolio_feed_shortcode(){
	
	// prevents ascending of any data through the page until fucntion below has executed
	ob_start();
	
	// name of our main plugin function
	custom_portfolio_feed();
	
	// allows ascending of data once loaded
	return ob_get_clean();
}



// first parameter is the shorcode tag you pput in your post
// seconf parameter is function to execute with shortcode
add_shortcode('custom_portfolio_feed', 'custom_portfolio_feed_shortcode');
