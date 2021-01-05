<?php
/* Template Name: Testimonial Temp */
get_header();

$myvals = get_post_meta(get_the_ID());
foreach ($myvals as $key => $val) {
  ${$key} = unserialize($val[0]) ? unserialize($val[0]) : $val[0];
}

// echo '<pre>';
// print_r($heading);

?>

    <header class="testimonial-banner banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="title"> <?php echo $testimonial_banner_title; ?></h2>
            <!--<form class="mt-4">-->
            <!--  <div class="form-row">-->
            <!--    <div class="col-md-8">-->
            <!--      <input-->
            <!--        type="text"-->
            <!--        class="form-control"-->
            <!--        placeholder="Enter Your e-mail"-->
            <!--      />-->
            <!--    </div>-->
            <!--    <div class="col-md-4">-->
            <!--      <input-->
            <!--        type="submit"-->
            <!--        class="form-control btn btn-secondary"-->
            <!--        value="apply now "-->
            <!--      />-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</form>-->
            <?php echo do_shortcode('[email-subscribers-form id="2"]'); ?>
          </div>
        </div>
      </div>
    </header>
    

    <main>
      <section class="testimonial-videos">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-sec">
                <h2 class="title">
                  <?php echo $service_testimonial_videos_heading; ?>
                </h2>
                <p class="sub-title">
                  <?php echo $service_testimonial_videos_sub_heading; ?>
                </p>
              </div>

              <div class="swiper-container">
                <div class="swiper-wrapper">
                    
                <?php if (!empty($service_testimonial_videos_data) && is_array($service_testimonial_videos_data)) {
                $fs = 1;
                foreach ((array) $service_testimonial_videos_data as $key => $video_data) : setup_postdata($video_data);                
                
                  $video_url = $video_data['video_url']; ?>
                    
                  <div class="swiper-slide">
                    <div class="ifrem-warapper">
                      <div class="ifrem-card">
                        <video controls class="">
                          <source src="<?php echo $video_url; ?>" type="video/mp4"/>
                        </video>
                      </div>
                    </div>
                  </div>
                  
                 <?php $fs++;
                endforeach;
                wp_reset_postdata();
                } ?>
                  
                </div>

                <!-- <div class="swiper-button-next text-white"></div>
                <div class="swiper-button-prev text-white"></div> -->
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="testimonials bg-none">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="sec-title">
                <h2 class="title">
                  <?php echo $heading; ?>
                </h2>
                <p class="sub-title">
                  <?php echo $sub_heading; ?>
                </p>
              </div>
              <div class="testimonials-wrapper">
                  
                <?php $clients_args = get_posts(array('post_type'=> 'testimonial', 'post_per_page' => -1));
                    foreach($clients_args as $post) { ?>
                    
                <div class="testimonial">
                  <div class="header">
                    <?php the_post_thumbnail( 'thumbnail'); ?>
                  </div>

                  <div class="body">
                    <h4 class="name"><?php echo $post->post_title; ?></h4>
                    <p class="profile">manager of acounts hod</p>
                    <p class="description">
                      <?php echo $post->post_content; ?>
                    </p>
                  </div>
                </div>

                <?php }
                wp_reset_postdata(); ?>
              
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- this sec copid bay  -->
    </main>
    
<?php get_footer(); ?>