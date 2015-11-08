<?php
/**
* Plugin Name: SocialNetworks
* Plugin URI:http://www.aswebdeveloper.com/
* Description:  this is  a function to echo hello world
* Version: 1.0
* Author:Anthony Schifferns
* Author URI: http://www.aswebdeveloper.com/
**/
require_once(dirname(__file__) . "/admin/admin_options.php");

/*****************************************                           NEEDED FUNCTIONS                   *****************************************************************************/


function socialBar_load_css(){
	wp_enqueue_style( 'SocialStyle', plugins_url( '/css/SocialStyle.css', __FILE__ ) );
	
}
add_action('wp_enqueue_scripts','socialBar_load_css');
//// this is the main function
function socialBar(){
	
//recalls the links
$facebook=get_option("facebookUrl");
$twitter=get_option("twitterUrl");
$youtube=get_option("youtubeUrl");
$instagram=get_option("instagramUrl");
	
//saves the image location	
$fbIcon = plugin_dir_url(__FILE__).'images/facebook.png';	
$twIcon = plugin_dir_url(__FILE__).'images/twitter.png';	
$ytIcon = plugin_dir_url(__FILE__).'images/youtube.png';	
$instIcon = plugin_dir_url(__FILE__).'images/instagram.png';	
	
//recall the social links bar
?>
 <p style="text-align:center;"><ul style="display: inline-flex; margin-left: -10%;" id="socialBar">
		<li class="grow pic" style="list-style:none;"><a href="<?php echo $facebook; ?>"><img src="<?php echo $fbIcon; ?>"></a></li>
		<li class="grow pic" style="list-style:none;"><a href="<?php echo $twitter; ?>"><img src="<?php echo $twIcon; ?>"></a></li>
		<li class="grow pic" style="list-style:none;"><a href="<?php echo $youtube; ?>"><img src="<?php echo $ytIcon; ?>"></a></li>
		<li class="grow pic"style="list-style:none;"><a href="<?php echo $instagram; ?>"><img src="<?php echo $instIcon; ?>"></a></li>
	</ul></p><!--ends socialbar-->
<!--ends sm col 6-->
<?php	
}
// regster a new shortcode: [socialBar]
// first parameter is the shorcode tag you pput in your post
// seconf parameter is function to execute with shortcode
add_shortcode('socialBar', 'socialBar_shortcode');

//
function socialBar_shortcode(){
	
	// prevents ascending of any data through the page until fucntion below has executed
	ob_start();
	// name of our main plugin function
	socialBar();
	
	return ob_get_clean();
}






?>