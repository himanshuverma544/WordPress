<?php
add_action( 'wp_enqueue_scripts', 'twentytwentyone_child' );
function twentytwentyone_child() {
    $parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}

/* Giving premission to upload .svg images */
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');




 /* Restricting from uploading image types

add_filter('upload_mimes','restrict_mime'); 
function restrict_mime($mimes) { 
$mimes = array( 
                'jpg|jpeg|jpe' => 'image/jpeg', // allowed files
                'gif' => 'image/gif', 
);
return $mimes;
}
*/

/* Disable Gutenberg with Code 
add_filter('use_block_editor_for_post', '__return_false', 10);
?>