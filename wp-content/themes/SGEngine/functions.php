<?php

if(!defined('SGE_DIR')) define('SGE_DIR',get_template_directory());
if(!defined('SGE_URI')) define('SGE_URI',get_template_directory_uri());

require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/customizer.php';

//require get_template_directory() . '/inc/custom-functions.php';

if ( file_exists( SGE_DIR.'/theme-setup/setup-functions.php') ) {
	require_once( SGE_DIR.'/theme-setup/setup-functions.php');
}

if ( file_exists( SGE_DIR.'/theme-setup/theme-enqueue.php') ) {
	require_once( SGE_DIR.'/theme-setup/theme-enqueue.php');
}

if ( file_exists( SGE_DIR.'/theme-setup/custom-functions.php') ) {
	require_once( SGE_DIR.'/theme-setup/custom-functions.php');
}

if ( file_exists( SGE_DIR.'/theme-setup/theme-widgets.php') ) {
	require_once( SGE_DIR.'/theme-setup/theme-widgets.php');
}

if ( file_exists( SGE_DIR.'/theme-setup/theme-post-type.php') ) {
	require_once( SGE_DIR.'/theme-setup/theme-post-type.php');
}

function mail_test_function() {
    
    $to = "sharmitashee@gmail.com";
    $subject = 'BO subject';
    $message = 'I would like to work with you';
    $headers = '';

    $sent_message = wp_mail( $to, $subject, $message, $headers);
    var_dump($sent_message); // i get boolean false here.
    if ( $sent_message ) {
        echo 'The test message was sent. Check your email inbox.';
    } else {
        echo 'The message was not sent!'; //this gets printed in d end.
    }
    
}
//add_action('wp_head', 'mail_test_function');








