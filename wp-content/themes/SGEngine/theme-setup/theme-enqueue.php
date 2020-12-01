<?php
add_action( 'wp_enqueue_scripts', 'sgengine_front_scripts' );
if(!function_exists('sgengine_front_scripts')) {
  function sgengine_front_scripts() {
    global $sgengine;
    
    if(is_page('blog') || is_single() || is_author() || is_tag() || is_category() || is_search()) {        

      wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css',array(), false,'all');
      wp_enqueue_style('fontawsome-css', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',array(), false,'all');
      wp_enqueue_style('typography-css', SGE_URI.'/css/typography.css',array(), false,'all');
      wp_enqueue_style('theme-css', SGE_URI.'/css/dist/style.css', array(), time(),'all');
      wp_enqueue_style('responsive-css', SGE_URI.'/css/dist/responsive.css',array(), time(),'all');
      wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&display=swap',array(), false,'all');
      wp_enqueue_style('ui-css', 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css',array(), false,'all');
        
      

    }
      
      // if(is_page('blogger-outreach-services') || is_page('guest-posting-services') || is_page('content-writing-services') || is_page('link-building-services')) {
      //     wp_enqueue_script('jquery-ui',SGE_URI.'/js/jquery-ui.js',array('jquery'),false, true );
      // }      
      
      // wp_enqueue_script('popper-js',SGE_URI.'/js/popper.min.js',array('jquery'),false, true );
      // wp_enqueue_script('bootstrap-js',SGE_URI.'/js/bootstrap.min.js',array('jquery'),false, true );
      // wp_enqueue_script('mega_menu-js',SGE_URI.'/js/mega_menu.min.js',array('jquery'),false, true );
      // wp_enqueue_script('wow-js',SGE_URI.'/js/wow.min.js',array('jquery'),false, true );
      // wp_enqueue_script('waypoints-js',SGE_URI.'/js/waypoints.min.js',array('jquery'),false, true );
      // wp_enqueue_script('counterup-js',SGE_URI.'/js/jquery.counterup.min.js',array('jquery'),false, true );
      // wp_enqueue_script('owl-carousel-js',SGE_URI.'/js/owl.carousel.min.js',array('jquery'),false, true );
      // wp_enqueue_script('magnific-popup-js',SGE_URI.'/js/jquery.magnific-popup.min.js',array('jquery'),false, true );
       //wp_enqueue_script('ionicons-js','https://unpkg.com/ionicons@5.0.0/dist/ionicons.js',array('jquery'),false, true );
      // wp_enqueue_script('custom-js',SGE_URI.'/js/custom.js',array('jquery'), time(), true );
      // wp_enqueue_script('script-js',SGE_URI.'/js/script.js',array('jquery'),false, true );
      // wp_enqueue_script('scroll-js',SGE_URI.'/js/scroll-out.min.js',array('jquery'),false, true );


      /***************************************************************************************************/
      wp_enqueue_style('theme-default-css', SGE_URI.'/style.css', array(), time(),'all');
      wp_enqueue_style('theme-style-css', SGE_URI.'/assets/styles/style.css', array(), false,'all');
      


      

    }
}
?>