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
      /***************************************************************************************************/
      wp_enqueue_style('theme-default-css', SGE_URI.'/style.css', array(), time(),'all');
      wp_enqueue_style('theme-style-css', SGE_URI.'/assets/styles/style.css', array(), false,'all');

      wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), false,'all');
      


      

    }
}
?>