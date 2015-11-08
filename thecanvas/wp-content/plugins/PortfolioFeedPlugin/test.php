<?php

$counter = 1; //start counter
$grids = 2; //Grids per row
global $query_string; //Need this to make pagination work
/*Setting up our custom query (In here we are setting it to show 12 posts per page and eliminate all sticky posts*/
query_posts($query_string . '&caller_get_posts=1&posts_per_page=12');
if(have_posts()) :  while(have_posts()) :  the_post();
?>