<?php
/***************** user profile update ******************/
add_action( 'show_user_profile', 'extra_user_profile_fields' );
add_action( 'edit_user_profile', 'extra_user_profile_fields' );

function extra_user_profile_fields( $user ) {

  $metadata = get_metadata( 'user', $user->ID, '', false ); ?>

    <h3><?php _e("Other Info:", "blank"); ?></h3>
    <table class="form-table">    
    <tr>
        <th><label for="designation"><?php _e("Designation"); ?></label></th>
        <td>
            <input type="text" name="designation" value="<?php echo $metadata['designation'][0]; ?>" class="regular-text" /><br />
        </td>
    </tr>
    <tr>
        <th><label for="facebook_link"><?php _e("Facebook Link"); ?></label></th>
        <td>
            <input type="url" name="facebook_link" value="<?php echo $metadata['facebook_link'][0]; ?>" class="regular-text" /><br />
        </td>
    </tr>
  <tr>
        <th><label for="twitter_link"><?php _e("Twitter Link"); ?></label></th>
        <td>
            <input type="url" name="twitter_link" value="<?php echo $metadata['twitter_link'][0]; ?>" class="regular-text" /><br />
        </td>
    </tr>
  <tr>
        <th><label for="instagram_link"><?php _e("Instagram Link"); ?></label></th>
        <td>
            <input type="url" name="instagram_link" value="<?php echo $metadata['instagram_link'][0]; ?>" class="regular-text" /><br />
        </td>
    </tr>
    </table>
<?php }

add_action( 'personal_options_update', 'save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields' );
function save_extra_user_profile_fields( $user_id ) {
    if ( !current_user_can( 'edit_user', $user_id ) ) { 
        return false; 
    }
  // first parent info
  //update_user_meta($user_id, 'country', $_POST['country'] );
  //update_user_meta($user_id, 'owner', $_POST['owner'] );
  update_user_meta($user_id, 'designation', $_POST['designation'] );
  update_user_meta($user_id, 'facebook_link', $_POST['facebook_link'] );
  update_user_meta($user_id, 'twitter_link', $_POST['twitter_link'] );
  update_user_meta($user_id, 'instagram_link', $_POST['instagram_link'] );  
}

/******************* Excerpt **********************/
function custom_excerpt_length( $length ) {
  return 8;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function et_excerpt_more($more) {
    global $post;
    return '...';
}
add_filter('excerpt_more', 'et_excerpt_more');

/******************************************************/
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );

/***************************** POST VIEWS ************************************/
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

add_filter('manage_post_posts_columns', 'custom_posts_table_head');
function custom_posts_table_head( $columns ) {

    $columns['views']  = 'Views';
    return $columns;

}
add_action( 'manage_event_post_custom_column', 'custom_posts_table_content', 10, 2);

function bs_projects_table_content( $column_name, $post_id ) {

    if( $column_name == 'views' ) {
        $views = get_post_meta( $post_id, 'post_views_count', true );
        echo $views;
    }

}


/******** Limit Post ytitle and content *********/
if (! function_exists( 'get_post_data_on_limit' ) ) {
  function get_post_data_on_limit($content, $limit) {

    $cont = strip_tags($content);
    $length = strlen($cont);
    $final_cont = substr($cont, 0, $limit);
    if($length > $limit) {
      $final_cont = $final_cont.'...';
    }

    return $final_cont;

  }
}

/********************** SEARCH ****************************/
function mySearchFilter($query) {    
    if ($query->is_search) {
        $query->set('post_type', array('post'));
    };
    return $query;
};
add_filter('pre_get_posts','mySearchFilter');