<?php

/* Template Name: Case Study Page */

get_header();

$myvals = get_post_meta(get_the_ID());
foreach ($myvals as $key => $val) {
  ${$key} = unserialize($val[0]) ? unserialize($val[0]) : $val[0];
}

$all_case_study = get_posts(array('post_type' => 'case-study', 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'DESC'));



/* if(!function_exists('casestudy_count')) {
  function casestudy_count($casestudy_count_data) { ?>

    <div class="row">
      <div class="col-md-12">
        <div class="card-wrapper">


          <?php
          if (!empty($casestudy_count_data) && is_array($casestudy_count_data)) {
          foreach ((array) $casestudy_count_data as $key => $meta_data) : setup_postdata($meta_data);                
          
            $title = $meta_data['title'];
            $number = $meta_data['number'];
            $desc = $meta_data['desc']; ?>          


              <div class="c-card">
                <h4 class="c-hader"><?php echo $number; ?><span class="sub">%</span></h4>
                <h5><?php echo $title; ?></h5>
                <h6><?php echo $desc; ?></h6>
              </div>

          <?php
          endforeach;
          wp_reset_postdata();
          } ?>


        </div>
      </div>
    </div>



  <?php
  }
} */ ?>


    <header class="case-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="title"> <?php echo $casestudy_banner_title; ?></h2>
            <?php echo do_shortcode('[email-subscribers-form id="2"]'); ?>
          </div>
        </div>
      </div>
    </header>

    <main>
      <section class="zik-zak-card">
        <div class="container">


        <?php if (!empty($all_case_study) && is_array($all_case_study)) {
          $fc = 1;
          foreach ((array) $all_case_study as $post) : setup_postdata($post); 

            $case_meta = get_post_meta($post->ID);
            $sub_title = $case_meta['sge_single_case_study_sub_title'][0];
            $heading1 = $case_meta['sge_single_case_study_heading1'][0];
            ?>

            <?php if($fc % 2 != 0) { ?>
            <div class="row">
              <div class="col-md-9">
                <div class="content-wrapper">
                  <div class="fit-back-title-sec">
                    <a href="<?php echo get_the_permalink($post->ID); ?>">
                      <h2 class="title"><?php echo $post->post_title; ?></h2>
                    </a>
                    <?php if(!empty($sub_title)) { ?>
                    <p class="sub-title"><?php echo $sub_title; ?></p>
                    <?php } ?>
                  </div>
                  <div class="content-sec">
                    <?php if(!empty($heading1)) { ?>
                    <h3 class="icon-taitle">
                      <span class="icon-warpper">                        
                        <img class="icon-img" src="<?php echo get_template_directory_uri(); ?>/assets/icon/browse.svg" alt="<?php echo $post->post_title; ?>" />
                      </span><?php echo $heading1; ?>
                    </h3>
                    <?php } ?>
                    <?php get_limited_content(get_the_content()); ?>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="img-card">
                  <?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' => 'c-image' ) ); ?>                  
                </div>
              </div>
            </div>
              <?php /*if($fc == 1) {

                casestudy_count($casestudy_count_data);

              } */
            } else { ?>

            <div class="row">
              <div class="col-md-3">
                <div class="img-card">
                  <?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' => 'c-image' ) ); ?>
                </div>
              </div>
              <div class="col-md-9">
                <div class="content-wrapper mq-spaching">
                  <div class="fit-back-title-sec">
                    <a href="<?php echo get_the_permalink($post->ID); ?>">
                      <h2 class="title"><?php echo $post->post_title; ?></h2>
                    </a>
                    <?php if(!empty($sub_title)) { ?>
                    <p class="sub-title"><?php echo $sub_title; ?></p>
                    <?php } ?>
                  </div>
                  <div class="content-sec">
                    <?php if(!empty($heading1)) { ?>
                    <h3 class="icon-taitle">
                      <span class="icon-warpper">
                        <img class="icon-img" src="<?php echo get_template_directory_uri(); ?>/assets/icon/browse.svg" alt="<?php echo $post->post_title; ?>" />
                      </span><?php echo $heading1; ?>
                    </h3>
                    <?php } ?>
                    <?php get_limited_content(get_the_content()); ?>
                  </div>
                </div>
              </div>
            </div>

          <?php }
          $fc++;
          endforeach;
          wp_reset_postdata();
        } ?>



        </div>
      </section>

      <section class="page-caption">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h4 class="title"><?php echo $casestudy_cta_text; ?></h4>
            </div>
            <div class="col-md-4">
              <div class="btn-wrapper">
                <a href="<?php echo $casestudy_cta_btn_text_url; ?>" class="btn btn-secondary"> <?php echo $casestudy_cta_btn_text; ?> </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    
 

<?php get_footer(); ?>