<?php $post_author_id = get_post_field( 'post_author', $post->ID );
$comment_no = get_comments_number($post->ID);
$author_name = get_the_author_meta( 'display_name', $post_author_id );
?>

<?php if(is_search() || is_tag() || is_archive()) { ?>
<div class="col-lg-6 col-md-6 col-sm-12">
<?php } else { ?>
<div class="col-lg-4 col-md-6 col-sm-12">
<?php } ?>


  <div class="main-blog">
    <a href="<?php echo get_the_permalink($post->ID); ?>" class="d-block blog-img">
      <?php echo get_the_post_thumbnail($post->ID, 'main-image', array('class' => 'img-fluid') ); ?>
    </a>
    <div class="blog-detail">
      <!-- <a class="main-color iq-fw-8" href="blog-details-left-sidebar.html">Design Concept</a> -->
      <a href="<?php echo get_the_permalink($post->ID); ?>">
        <h5 class="mt-1 iq-fw-8"><?php echo get_post_data_on_limit($post->post_title, 60); ?></h5>
      </a>
		
    <?php $categories = get_the_category(); ?>
    
      <div class="blog-info">

        <a href="<?php echo esc_url( get_author_posts_url( $post_author_id ) ); ?>">
          <img src="<?php echo esc_url( get_avatar_url( $post_author_id ) ); ?>" class="img-fluid rounded-circle mr-3 user-img"
            alt="<?php echo $author_name; ?>-image" />
          <span class="iq-fw-8 font-c iq-font-18"><?php echo $author_name; ?></span>
        </a>
        
        <?php if ( ! empty( $categories ) ) { ?>
          <div class="cat-block">
            <a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>"
              ><span class="ml-3"><?php echo $categories[0]->name; ?></span>
            </a>
          </div>
        <?php } ?>

        <ul class="d-inline-block float-right">
          <li class="d-inline-block">            
            <!-- <a href="javascript:void(0)">
              <i class="fa fa-eye"></i>
              <span class="iq-fw-8 iq-font-14"><?php //echo getPostViews($post->ID); ?></span>
            </a> -->
          </li>
        </ul>

      </div>
    </div>
  </div>
</div>