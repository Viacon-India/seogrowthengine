<?php
add_action( 'widgets_init', 'sgengine_widgets_init' );
if(!function_exists('sgengine_widgets_init')) {
  function sgengine_widgets_init(){
    register_sidebar( array(
      'name'          => __( 'General Sidebar', 'sgengine' ),
      'id'            => 'general_sidebar',
      'description'   => __( 'Add widgets here to appear in your sidebar.', 'sgengine' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
      'name'          => __( 'Blog page Side Image', 'sgengine' ),
      'id'            => 'blog_image_sidebar',
      'description'   => __( 'Add widgets here to appear in your blog page sidebar.', 'sgengine' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    ) );
    
    register_sidebar( array(
      'name'          => __( 'Social Followers Count', 'sgengine' ),
      'id'            => 'followers_count_sidebar',
      'description'   => __( 'Add widgets here to appear in your blog page sidebar.', 'sgengine' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    ) );
    
  }
}
?>