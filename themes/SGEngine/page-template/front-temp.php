<?php

/* Template Name: Front Page */

get_header();

$myvals = get_post_meta(get_the_ID());
foreach ($myvals as $key => $val) {
  ${$key} = unserialize($val[0]) ? unserialize($val[0]) : $val[0];
}
$all_case_study = get_posts(array('post_type' => 'case-study', 'posts_per_page' => 6, 'orderby' => 'date', 'order' => 'DESC'));
?>

    <header class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12 z-index-up">
            <h2 class="title">
              <?php echo $home_banner_title; ?>              
            </h2>
            <p class="sub-title mt-4">
              <?php echo $home_banner_short_text; ?>
            </p>
            <!-- <div class="wrapper text-center">
              <div class="input-group mt-4">
                <input type="text" class="form-control bg-secondary" placeholder="Your Email" id="mail" name="email"/>
                <div class="input-group-append">
                  <button type="button" class="btn btn-light text-primary">let's Go</button>
                </div>
              </div>
            </div> -->

            <?php echo do_shortcode('[email-subscribers-form id="2"]'); ?>              
            
          </div>
        </div>
      </div>
      <img class="banner-background" src="<?php echo SGE_URI; ?>/assets/images/home/1.png" alt="" />
    </header>

    <main>
      <section class="white-label-seo">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-sec">
                <h2 class="title">
                  <?php echo $home_first_scroll_title; ?>
                </h2>
              </div>
              <div class="white-label-seo-wrapper">

              <?php if (!empty($home_first_scroll_data) && is_array($home_first_scroll_data)) {
                $fs = 1;
                foreach ((array) $home_first_scroll_data as $key => $first_scroll_data) : setup_postdata($first_scroll_data);                
                
                  $title = $first_scroll_data['title'];
                  $link = $first_scroll_data['link'];
                  $image = $first_scroll_data['image'];
                  $desc = $first_scroll_data['desc']; ?>

                  <div class="c-card">
                    <div class="c-icon-sec">
                      <img class="c-icon" src="<?php echo $image; ?>" alt="<?php echo $title; ?>"/>
                    </div>
                    <h5 class="c-title"><?php echo $title; ?></h5>
                    <p class="c-text"><?php echo $desc; ?></p>
                    <a href="<?php echo $link; ?>" class="btn w-100 btn-primary"> Get Started Now</a>
                  </div>
                <?php $fs++;
                endforeach;
                wp_reset_postdata();
              } ?>

              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="our-indo-american">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-sec">
                <h2 class="title">
                  <span class="text-highlight">
                    <?php echo $home_second_scroll_title; ?>                    
                </h2>
              </div>
              <div class="our-wrapper">

              <?php if (!empty($home_second_scroll_data) && is_array($home_second_scroll_data)) {
                $ss = 1;
                foreach ((array) $home_second_scroll_data as $key => $second_scroll_data) : setup_postdata($second_scroll_data);                
                
                  $title = $second_scroll_data['title'];
                  $image = $second_scroll_data['image'];
                  $desc = $second_scroll_data['desc']; ?>

                  <div class="our-card">
                    <div class="c-title-sec">
                      <div class="icon-cover">
                        <img class="icon" src="<?php echo $image; ?>" alt="<?php echo $title; ?>"/>
                      </div>
                      <h6 class="title"><?php echo $title; ?></h6>
                    </div>
                    <p class="c-describ"><?php echo $desc; ?></p>
                  </div>

                <?php $fs++;
                endforeach;
                wp_reset_postdata();
              } ?>
              </div>
              <div class="btn-sec">
                <a class="btn btn-primary text-center" href="#">Don't keep Success on Hold</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="tried-and-tested">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-sec">
                <h2 class="title">
                  <?php echo $home_third_scroll_title; ?>
                </h2>
                <p class="sub-title"><?php echo $home_third_scroll_sub_cont; ?></p>
              </div>

              <div class="trid-wrapper">

                <?php if (!empty($home_third_scroll_data) && is_array($home_third_scroll_data)) {
                  $ss = 1;
                  foreach ((array) $home_third_scroll_data as $key => $third_scroll_data) : setup_postdata($third_scroll_data);                
                  
                    $title = $third_scroll_data['title'];
                    $image = $third_scroll_data['image'];
                    $desc = $third_scroll_data['desc']; ?>

                      <div class="c-card">
                        <div class="tumble-left">
                          <img class="tumble-image" src="<?php echo $image; ?>" alt="<?php echo $title; ?>"/>
                        </div>
                        <div class="c-describ">
                          <h6 class="title"><?php echo $title; ?></h6>
                          <p class="sub-title"><?php echo $desc; ?></p>
                        </div>
                      </div>

                  <?php $fs++;
                  endforeach;
                  wp_reset_postdata();
                } ?>

              </div>
              <div class="btn-sec mt-5">
                <a href="#" class="btn btn-primary w-25">Explour us</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="book-free-strategy">
        <img class="img-back" src="<?php echo SGE_URI; ?>/assets/images/home/6.png" alt="" />
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-sec">
                <h4 class="sub-title">
                  Are you ready to bust open thoes revenue dreams?
                </h4>
                <h2 class="title">
                  Book a free Strategy call With Our SEO Ninja
                </h2>
              </div>

              <div class="mt-5">
                <?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>
              </div>

            </div>
          </div>
        </div>
      </section>

      <section class="defined-by-results">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="btn-sec mb-5">
                <a class="btn btn-secondary w-25" href="#">Case Studies</a>
                <a class="btn btn-light w-25" href="#">SEO Enablement tool</a>
              </div>
              <div class="defined-wrapper">


              <?php if (!empty($all_case_study) && is_array($all_case_study)) {
                $fc = 1;
                foreach ((array) $all_case_study as $post) : setup_postdata($post); 

                  $case_meta = get_post_meta($post->ID);
                  $sub_title = $case_meta['sge_single_case_study_sub_title'][0]; ?>

                  <div class="c-card">
                    <div class="image-cover">
                      <?php echo get_the_post_thumbnail( $post->ID, 'home-casestudy-image' ); ?>
                    </div>
                    <div class="c-title-sec">
                      <p class="c-sub-taitle">
                        <?php echo $sub_title; ?>
                      </p>
                      <h4 class="c-title">
                        <?php echo $post->post_title; ?>
                      </h4>
                    </div>
                  </div>

                  <?php 
                $fc++;
                endforeach;
                wp_reset_postdata();
              } ?>

                
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="trusted-over">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-sec mb-3">
                <h2 class="title">
                  Trusted By Over
                  <span class="text-highlight">5000+</span>
                </h2>
                <h4 class="sub-title">Websites Owners Globally</h4>
              </div>

              <div class="profile-barnd">
                <div class="col-md-6">
                  <div class="testimonials-slider">
                    <div class="swiper-wrapper">


                      <?php $testonial_arr = get_posts(array('posts_per_page' => -1, 'post_type' => 'our-clients'));

                      foreach($testonial_arr as $post) : setup_postdata($post); ?>

                      <div class="profile-sec swiper-slide">
                        <div class="img-cover">
                          <?php the_post_thumbnail('post-thumbnail', ['class' =>'image']); ?>
                          <div class="intro">
                            <h5 class="title"><?php the_title(); ?></h5>
                          </div>
                        </div>
                        <div class="text-sec">
                          <p class="para-title">
                            <?php the_content(); ?>
                          </p>
                        </div>
                      </div>

                      <?php endforeach;
                      wp_reset_postdata(); ?>
                    </div>

                    <div class="swiper-pagination"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="brand-wrapper">
                    <div class="swiper-wrapper">

                      <?php if (!empty($home_brand_data) && is_array($home_brand_data)) {
                      foreach ((array) $home_brand_data as $key => $brand_data) : setup_postdata($brand_data);                
                        $image = $brand_data['image']; ?>


                      <div class="brand-card swiper-slide">
                        <img
                          class="b-image"
                          src="<?php echo $image; ?>"
                          alt=""
                        />
                      </div>

                      <?php endforeach;
                      wp_reset_postdata();
                      } ?> 

                    </div>

                    <div class="swiper-pagination"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php get_footer(); ?>