<?php
  /*$post_author_id = get_post_field( 'post_author', get_the_ID() );
  $country = get_the_author_meta( 'country', $post_author_id );
  $owner = get_the_author_meta( 'owner', $post_author_id );
  $author_name = get_the_author_meta( 'display_name', $post_author_id );
  $description = get_the_author_meta( 'description', $post_author_id );
  $designation = get_the_author_meta( 'designation', $post_author_id );

  $fb_link = get_the_author_meta( 'facebook_link', $post_author_id );
  $twtr_link = get_the_author_meta( 'twitter_link', $post_author_id );
  $insta_link = get_the_author_meta( 'instagram_link', $post_author_id ); */

  $website = get_post_meta(get_the_ID(), 'single_casestudy_website', true);
  $image = get_post_meta(get_the_ID(), 'single_casestudy_image', true);
  $country = get_post_meta(get_the_ID(), 'single_casestudy_country', true);
  $owner = get_post_meta(get_the_ID(), 'single_casestudy_owner', true);

  $single_casestudy_f_sub_title = get_post_meta(get_the_ID(), 'single_casestudy_f_sub_title', true);
  $single_casestudy_s_sub_title = get_post_meta(get_the_ID(), 'single_casestudy_s_sub_title', true);

  ?>

<div class="iq-slolution-details col-12">
  <a href="<?php echo get_the_permalink(get_the_ID()); ?>" class="d-block cover-image rounded">
    <h5 class="iq-fw-9 mb-0 px-3 pt-3 title"><?php the_title(); ?></h5>
    <!-- <img src="<?php //echo get_template_directory_uri(); ?>/images/casestudy/stats.png" alt="" class="featured-image container-fluid"> -->
    <?php echo the_post_thumbnail('full', array('class' => 'featured-image container-fluid')); ?>
  </a>
  
  <div class="meta d-flex">
    <div class="dp">
      <img src="<?php echo $image; ?>" alt="<?php echo $website; ?>-img" class="">
    </div>
    <p class="mb-0 mt-2 d-flex flex-column">
      <a href="<?php echo get_the_permalink(get_the_ID()); ?>" class="link"><?php echo $website; ?></a>
      <?php if(!empty($country)) { ?>
      <span class="country">Country: <?php echo $country; ?></span>
    <?php } if(!empty($owner)) { ?>
      <span class="owner">Owner: <?php echo $owner; ?></span>
    <?php } ?>
    </p>
  </div>
  
  <?php if(!empty($single_casestudy_f_sub_title) || !empty($single_casestudy_s_sub_title)) { ?>
      <a href="<?php echo get_the_permalink(get_the_ID()); ?>">
        <p class="service-used mt-3 bg-secondary text-light p-3 rounded">
          <?php echo $single_casestudy_f_sub_title; ?>
          <span class="service text-nowrap"><?php echo $single_casestudy_s_sub_title; ?></span>
        </p>
      </a>
  <?php } ?>
</div>