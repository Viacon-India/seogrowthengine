<?php
add_action( 'after_setup_theme', 'bloggeroutreach_setup' );
if(!function_exists('bloggeroutreach_setup'))
{
  function bloggeroutreach_setup()
  {
    load_theme_textdomain( 'sgengine' );   
    add_theme_support( 'automatic-feed-links' );    
    add_theme_support( 'title-tag' );   
    add_theme_support( 'custom-logo');    
    add_theme_support( 'post-thumbnails' );   
        
    $GLOBALS['content_width'] = 900;
    
    register_nav_menus( array(
      'top'    => __( 'Primary Menu', 'sgengine' ),
      'about_company' => __( 'About Company Menu', 'sgengine' ),
      'useful_links' => __( 'Useful Links Menu', 'sgengine' ),
      'services' => __( 'Services Menu', 'sgengine' ),
    ) );
    
    add_theme_support( 'html5', array(
      'comment-form',
      'comment-list',
    ) );    
        
    if (!current_user_can('administrator') && !is_admin()) {
      //show_admin_bar(false);
    } 
    add_theme_support( 'post-thumbnails' );
    
    add_image_size( 'main-image', 340, 200, true );
    add_image_size( 'sidebar-image', 150, 150, true );
    add_image_size( 'home-casestudy-image', 346, 220, true );


    //////////////////////////////////////////////////////////////////////////////
      ////////////////// Template create and front page select /////////////////////
      //////////////////////////////////////////////////////////////////////////////
    
      global $home_page_id;
      $template_array = array(
        array(
          'new_page_title' => 'Home',
          'new_page_template' => 'page-template/front-temp.php',
        ),
        /*array(
          'new_page_title' => 'About Us',
          'new_page_template' => 'page-template/about-temp.php',
        ),  
        array(
          'new_page_title' => 'Servive',
          'new_page_template' => 'page-template/services-temp.php',
        ),*/
        array(
          'new_page_title' => 'Contact Us',
          'new_page_template' => 'page-template/contact-temp.php',
        ), 
      );

    foreach($template_array as $temp) {

      $page_check = get_page_by_title($temp['new_page_title']);     
      $new_page = array(
        'post_type' => 'page',
        'post_title' => $temp['new_page_title'],
        'post_status' => 'publish',
        'post_author' => 1,
      );
      if(!isset($page_check->ID)){

        $new_page_id = wp_insert_post($new_page);       
        if(!empty($temp['new_page_template'])){
          update_post_meta($new_page_id, '_wp_page_template', $temp['new_page_template']);
        }
        if($temp['new_page_title'] == 'Home') {
          $home_page_id = $new_page_id;
        }
        
      } else {

        $my_post = array(
          'ID' => $page_check->ID,
          'post_type' => 'page',
          'post_title' => $temp['new_page_title'],
          'post_status' => 'publish',
          'post_author' => 1,
        );
        wp_update_post( $my_post );
        update_post_meta($page_check->ID, '_wp_page_template', $temp['new_page_template']);

        if($temp['new_page_title'] == 'Home') {
          $home_page_id = $page_check->ID;
        }
      }

    }

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $home_page_id ); // front page select


  }
}
?>