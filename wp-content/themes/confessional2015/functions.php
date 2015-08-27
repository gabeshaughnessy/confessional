<?php

//set up global environment variables
/* DEFINE ENVIRONMENT GLOBAL */
$host = $_SERVER['HTTP_HOST'];
if (stristr($host, 'local') !== FALSE){
    define('SITE_ENVIRONMENT', "development");

    }
    elseif ((stristr($host, 'staging') !== FALSE)){
        
        define('SITE_ENVIRONMENT', "staging");
                
        }
        else{
            define('SITE_ENVIRONMENT', "production");
            }

//ACF SETUP
require_once('functions/functions-acf.php');

//enqueue styles and scripts
require_once('functions/functions-enqueue.php');

//enqueue menus
require_once('functions/functions-menus.php');

//Front end posting and form shortcode
require_once('functions/plugins/front-end-posting.php');

if ( ! isset( $content_width ) ){
    $content_width = 1080;
}

//excerpt length
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function custom_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );
?>