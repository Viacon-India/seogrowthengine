<?php
/**************** Testimonial and client ******************/
function my_custom_post_type_add_func() {

  $post_type = array(
    array( 'name' => 'Testimonial', 'slug' => 'testimonial'),
    //array( 'name' => 'Our Clients', 'slug' => 'our-clients'),
    array( 'name' => 'FAQ', 'slug' => 'faq'),
    array( 'name' => 'Case Study', 'slug' => 'case-study'),
  );

  foreach($post_type as $posttype) {      

    $labels = array(
        'name'               => _x( $posttype['name'] , $posttype['name'] ),
        'singular_name'      => _x( $posttype['name'] , $posttype['name'] ),
        'add_new'            => _x( 'Add New', $posttype['slug'] ),
        'add_new_item'       => __( 'Add New '.$posttype['name'] ),
        'edit_item'          => __( 'Edit '.$posttype['name'] ),
        'new_item'           => __( 'New '.$posttype['name'] ),
        'all_items'          => __( 'All '.$posttype['name'] ),
        'view_item'          => __( 'View '.$posttype['name'] ),
        'search_items'       => __( 'Search '.$posttype['name'] ),
        'not_found'          => __( 'No '.$posttype['name'].' found' ),
        'not_found_in_trash' => __( 'No '.$posttype['name'].' found in the Trash' ),
        'menu_name'          => $posttype['name']
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our specific data',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail' ),
        'has_archive'   => false,
        'rewrite' => array(
            'with_front' => false
        )
    );
    register_post_type( $posttype['slug'], $args );

  }

}
add_action( 'init', 'my_custom_post_type_add_func' );
?>