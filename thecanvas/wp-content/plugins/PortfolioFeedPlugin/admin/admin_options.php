<?php 
//function for creating a custom menu for our plugin in the setttings page
function custom_portfolio_feed_admin() {
	//**PARAMETERS**//
	// first parameter is the name of basic title,
	// second parameter is the name that appears in the settings menu,
	// third option is the capability-manags options means the user can change these options,
	// fourth parameter is the location of the page __file__,
	// last one is the function that processes the option page actions	
	add_options_page('CustomPortfolioFeed', 'Custom portfolio Feed', 'manage_options', __file__, 'custom_portfolio_feed_process');
}
// hook to add menu to settings in dashboard
add_action('admin_menu', 'custom_portfolio_feed_admin');

//fnction to process our form when submitted
function custom_portfolio_feed_process(){
	
	////////////////choses and saves the correct framework////////////////////////////////////
	if(isset($_POST["submit"])){
		
		//saves the selected display # of latest posts
		$selected=$_POST["numberOfPosts"];
		//echo $selected; exit;
		
		// insert user selection into the options meta table
		update_option("numberOfPosts", $selected);
	
	}//ends if isset post
	else{
			
			//check to see the option and value already exist
			$existing=get_option("numberOfPosts");
			
		//echo  $selected; exit;
			
			
			
			//check to see if the option exists if not then insert
		if(empty($existing)){
			//saves the default as 10
			$selected=1;
			//insert the defaut value for the frameworks group
			add_option("numberOfPosts", $selected);
			}//ends if empty
			else{$selected=$existing;}
	}	
			
			
		
	
	
	
?>
	<h1>Choose your feed options:</h1>
	<form name="porfolio_feed_options" action="" method="post">
	<label for="1layout">2 Post Per Row / slide in hovering title</label>
	<input type="radio" name="numberOfPosts" id="1layout" value="1" <?php if($selected==1){echo 'checked="checked"';} ?> />
	<br>
	<label for="2layout">2 Post Per Row / flip hover with title and excerpt</label>
	<input type="radio" name="numberOfPosts" id="2layout" value="2"  <?php if($selected==2){echo 'checked="checked"';} ?>  />
	<br>
	<label for="3layout">4 Post Per Row / slide in hovering title</label>
	<input type="radio" name="numberOfPosts" id="3layout" value="3"  <?php if($selected==3){echo 'checked="checked"';} ?>  />
	<br>
	<label for="4layout">4 Post Per Row / flip hover with title and excerpt</label>
	<input type="radio" name="numberOfPosts" id="4layout" value="4"  <?php if($selected==4){echo 'checked="checked"';} ?>  />
	<br>
	
	
	<input type="submit" name="submit" value="submit">
	</form> 
<?php
}//ends the main function custom_facebook feed
?>
