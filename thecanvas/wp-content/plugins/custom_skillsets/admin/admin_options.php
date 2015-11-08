<?php 
//function for creating a custom menu for our plugin in the setttings page
function socialBar_admin() {
	//**PARAMETERS**//
	// first parameter is the name of basic title,
	// second parameter is the name that appears in the settings menu,
	// third option is the capability-manags options means the user can change these options,
	// fourth parameter is the location of the page __file__,
	// last one is the function that processes the option page actions	
	add_options_page('socialBar', 'social Bar', 'manage_options', __file__, 'socialBar_process');
}
// hook to add menu to settings in dashboard
add_action('admin_menu', 'socialBar_admin');

//fnction to process our form when submitted
function socialBar_process(){
	
	////////////////choses and saves the correct framework////////////////////////////////////
	if(isset($_POST["submit"])){
		
		//saves the user facebook url
		$facebook=$_POST["facebookUrl"];
		//saves the user twitter url
		$twitter=$_POST["twitterUrl"];
		//saves the user youtube url
		$youtube=$_POST["youtubeUrl"];
		//saves the user instagram url
		$instagram=$_POST["instagramUrl"];
	
		
		// insert user selection into the options meta table
		update_option("facebookUrl", $facebook);
		// insert user selection into the options meta table
		update_option("twitterUrl", $twitter);
		// insert user selection into the options meta table
		update_option("youtubeUrl", $youtube);
		// insert user selection into the options meta table
		update_option("instagramUrl", $instagram);
	
	}//ends if isset post
	else{
			
			//check to see the option and value already exist
			$existingFb=get_option("facebookUrl");
			//check to see the option and value already exist
			$existingTw=get_option("twitterUrl");
			//check to see the option and value already exist
			$existingYt=get_option("youtubeUrl");
			//check to see the option and value already exist
			$existingInst=get_option("instagramUrl");
		
			
			
			
			//check to see if the option exists if not then insert
		if(empty($existingFb)){
			//saves the default as 10
			$facebook='facebook.com';
			//insert the defaut value for the frameworks group
			add_option("facebookUrl", $facebook);
			}//ends if empty
			else{$facebook=$existingFb;}
			
				//check to see if the option exists if not then insert
		if(empty($existingTw)){
			//saves the default as 10
			$twitter='twitter.com';
			//insert the defaut value for the frameworks group
			add_option("twitterUrl", $twitter);
			}//ends if empty
			else{$twitter=$existingTw;}
			
				//check to see if the option exists if not then insert
		if(empty($existingYt)){
			//saves the default as 10
			$youtube='youtube.com';
			//insert the defaut value for the frameworks group
			add_option("youtubeUrl", $youtube);
			}//ends if empty
			else{$youtube=$existingYt;}
			
				//check to see if the option exists if not then insert
		if(empty($existingInst)){
			//saves the default as 10
			$instagram='facebook.com';
			//insert the defaut value for the frameworks group
			add_option("instagramUrl", $instagram);
			}//ends if empty
			else{$instagram=$existingInst;}
	}	
	
?>
	<h1>Enter your Social Networks</h1>
	<form name="social-networks" action="" method="post">
	<label for="facebook">Enter the link to your Facebook account</label>
	<input type="text" name="facebookUrl" id="facebookUrl" /><br>
	<label for="facebook">Enter the link to your Twitter account</label>
	<input type="text" name="twitterUrl" id="twitterUrl" /><br>
	<label for="facebook">Enter the link to your Instagram account</label>
	<input type="text" name="instagramUrl" id="instagramUrl" /><br>
	<label for="facebook">Enter the link to your YouTube account</label>
	<input type="text" name="youtubeUrl" id="youtubeUrl" /><br><br>
	
	<input type="submit" name="submit" value="submit">
	</form> 
<?php
}//ends the main function custom_facebook feed
?>
