<?php
/*add thmbnail support and create new thumbnail sizes*/
add_theme_support( 'post-thumbnails' );
add_image_size( 'sidebar-thumb', 120, 120, true ); // Hard Crop Mode
add_image_size( 'homepage-thumb', 300, 250 ); // Soft Crop Mode
add_image_size( 'singlepost-thumb', 504, 428 ); // Unlimited Height Mode

/*adds fancy box to all images*/
add_filter('the_content', 'my_addlightboxrel');
/*adding lightbbox*/
function my_addlightboxrel($content) {
       global $post;
       $pattern ="/<a(.*?)href=('|\")(.*?).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>/i";
       $replacement = '<a$1href=$2$3.$4$5 rel="lightbox" title="'.$post->post_title.'"$6>';
       $content = preg_replace($pattern, $replacement, $content);
       return $content;
}