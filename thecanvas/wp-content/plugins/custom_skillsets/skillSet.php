<?php
/**
* Plugin Name: Skillsets

* Plugin URI:http://www.aswebdeveloper.com/
* Description:  this is  a function to echo hello world
* Version: 1.0
* Author:Anthony Schifferns
* Author URI: http://www.aswebdeveloper.com/
**/
function demowp_load_css(){
	wp_enqueue_style( 'skillset', plugins_url( '/css/skillset.css', __FILE__ ) );
	wp_enqueue_script( 'skillsetJs', plugins_url('/js/skillset.js', __FILE__ ) ,array("jquery"));
	
}
add_action('wp_enqueue_scripts','demowp_load_css');
//// this is the main function
function custom_Skill_Set(){

?>
<h1>jQuery & CSS3 Skills Bar</h1>

<div class="skillbar clearfix " data-percent="20%">
	<div class="skillbar-title" style="background: #d35400;"><span>HTML5</span></div>
	<div class="skillbar-bar" style="background: #e67e22;"></div>
	<div class="skill-bar-percent">20%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="25%">
	<div class="skillbar-title" style="background: #2980b9;"><span>CSS3</span></div>
	<div class="skillbar-bar" style="background: #3498db;"></div>
	<div class="skill-bar-percent">25%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="50%">
	<div class="skillbar-title" style="background: #2c3e50;"><span>jQuery</span></div>
	<div class="skillbar-bar" style="background: #2c3e50;"></div>
	<div class="skill-bar-percent">50%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="40%">
	<div class="skillbar-title" style="background: #46465e;"><span>PHP</span></div>
	<div class="skillbar-bar" style="background: #5a68a5;"></div>
	<div class="skill-bar-percent">40%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="75%">
	<div class="skillbar-title" style="background: #333333;"><span>Wordpress</span></div>
	<div class="skillbar-bar" style="background: #525252;"></div>
	<div class="skill-bar-percent">75%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="100%">
	<div class="skillbar-title" style="background: #27ae60;"><span>SEO</span></div>
	<div class="skillbar-bar" style="background: #2ecc71;"></div>
	<div class="skill-bar-percent">100%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="70%">
	<div class="skillbar-title" style="background: #124e8c;"><span>Photoshop</span></div>
	<div class="skillbar-bar" style="background: #4288d0;"></div>
	<div class="skill-bar-percent">70%</div>
</div> <!-- End Skill Bar -->

<!--ends custom_Skill_Set-->

<?php	
}
// regster a new shortcode: [custom_Skill_Set]
// first parameter is the shorcode tag you pput in your post
// seconf parameter is function to execute with shortcode
add_shortcode('custom_Skill_Set', 'custom_Skill_Set_shortcode');

function custom_Skill_Set_shortcode(){
	
	// prevents ascending of any data through the page until fucntion below has executed
	ob_start();
	// name of our main plugin function
	custom_Skill_Set();
	
	return ob_get_clean();
}
?>